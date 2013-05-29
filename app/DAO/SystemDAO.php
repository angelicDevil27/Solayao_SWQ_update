<?php

  include 'BaseDAO.php';

class SystemDAO extends BaseDAO{

	//-------Quotes--------//
		
	  function view_Quotes($myusername){
	  	$this->openConn();
	  		
	  		$user_check = $this->dbh->prepare("SELECT * FROM user WHERE username = ?");
	  		$user_check ->bindParam(1, $myusername);
	  		$user_check ->execute();
	  		$row= $user_check ->fetch();
	  		$user_id = $row[0];
	  		
	  	
	  		$stmt = $this->dbh->prepare("SELECT q.quotes_id, q.quotesText 
					FROM quotes as q,  connect_tbl as c
					where q.quotes_id = c.quotes_id
					and c.user_id = ?");
			$stmt->bindParam(1, $user_id);
	  		$stmt->execute();
	  		
	  		while($row = $stmt->fetch()){
	  			echo "<tr id=".$row[0].">";
	  			echo "<td>".$row[1]."</td>";
	  			echo "<td><img class='icon-trash' onclick='delete_Quotes(".$row[0].")'/></td>";
	  			echo "</tr>";	  				  				  			
	  		}
	  		
	   $this->closeConn();
	 }
	 
	  
	  function display_front_quotes() {
	  	$this->openConn();
	  	
	  	$stmt = $this->dbh->prepare("SELECT * FROM quotes order by quotes_id desc");
		$stmt->execute();	  	
	  
		  	while($row = $stmt->fetch()) {
		  	
		  		 echo 
		  		 /*1st<fieldset>for QUOTES--2nd<fieldset> for like-comment-share--3rd<fieldset> for view_comment--4th div for comment*/
				"<fieldset style = 'border: 5px solid #ccc'>
					<fieldset class = 'fieldId'>".$row[1]."</fieldset>
				 </fieldset>
				
			<fieldset>
					<a style = 'font-size:11px;color:#448999;' id = 'unLike_".$row[0]."' class = 'unLike' title = 'Stop liking this item' onclick = 'UnLikePost(".$row[0].")'>Unlike</a>
					<a style = 'font-size:11px;color:#448999;' id = 'Like_".$row[0]."' class = 'Like' title = 'Like this item' onclick = 'likePost(".$row[0].")'>Like</a>
					<a style = 'font-size:11px;color:#448999;'>-</a>
					<a style = 'font-size:11px;color:#448999;' class = 'Comment' title = 'Leave a comment' onclick = 'view_comment(".$row[0].")'>Comment</a>
					<a style = 'font-size:11px;color:#448999;'>-</a>
					<a style = 'font-size:11px;color:#448999;' class = 'Share' title = 'Send this to friend or post it on your timeline.' onclick = 'sharePost(".$row[0].")'>Share</a>
		   </fieldset>
		   
		   	<div id='share_quotes'>
		   		
		   	</div>
		   	
		   	<div id='likeMe'>
		   	
		   	</div>
		   
				
				    <fieldset class = 'view_comment' id = 'view_comment_".$row[0]."'  style = 'border: 1px solid #ccc','padding:10px'>			    
				    </fieldset>
				    
				    
				    <div class='comment_div' id = 'comment_div_".$row[0]."'>
					 <input type='text'  id = 'new_comment_".$row[0]."' />
					 <input type='button' onclick = 'add_comment(".$row[0].")' id='btn_comment1' value='comment'/>
					 </div>					
				    
				      						
				<script>	
					$('.view_comment').hide();
					$('.comment_div').hide();				
					$('.unLike').hide();	
				</script>
					<br />";
		  		
		  	}
	  		  			
	  	$this->closeConn();
	  	
	  }
	  

	   function post_Quotes($quotesText,$myusername){
	   
	  		$this->openConn();
	  		
	  		$stmt2=$this->dbh->prepare("SELECT * FROM user WHERE username=?");
               $stmt2->bindParam(1,$myusername);
               $stmt2->execute();
               $row=$stmt2->fetch();
               $user_id = $row[0];
               
     	  
	  		  		
	  		$stmt = $this->dbh->prepare("INSERT INTO quotes (quotesText) VALUES (?)");
	  		$stmt->bindParam(1, $quotesText);
	  		$stmt->execute();
	  		$quote_id = $this->dbh->lastInsertId();
	  		
	  		 		
               $stmt3=$this->dbh->prepare("UPDATE connect_tbl SET quotes_id = ? WHERE user_id =?");
               $stmt3->bindParam(1,$quote_id);
               $stmt3->bindParam(2, $user_id);
               $stmt3->execute();	
              
	
	
	  		echo "<tr id=".$id.">";
	  			echo "<td>".$quotesText."</td>";
	  			echo "<td><img class='icon-trash' onclick='delete_Quotes(".$id.")'/></td>";
	  		echo "</tr>";
	  		
	  		  			  		
	  	$this->closeConn();
	  }
	  
	  

	  
	  function delete_Quotes($id,$username){
	  	$this->openConn();
	  		$stmt = $this->dbh->prepare("DELETE FROM  quotes WHERE quotes_id=?");
	  		$stmt->bindParam(1, $id);
		    $stmt->execute();
	
	  	$this->closeConn();
	  
	  }
	  
	  //----------SHARE QUOTES-------------//
	  
	  
	  
	  
	  function share_Quotes($user_id){
	  	$this->openConn();
	  		
	  		$stmt = $this->dbh->prepare("SELECT id FROM user ");
	  		$stmt->bindParam(1, $user_id);
	  		$stmt->execute();
	  		$row = $stmt->fetch();
	  		$user = $row[0];
	  			
	  		echo "<script>alert(".$user.")</script>";
	  		
	  	$this->closeConn();

	  	
	  
	  }
	  
	  
	 //----------LIKE QUOTES------------//
	  
	  function likePost($postId,$num_likes){
			
			$this->openConn();
		
			$stmt = $this->dbh->prepare("SELECT number_of_likes FROM quotes WHERE quotes_id = ?");
			$stmt->bindParam(1, $postId);
			$stmt->execute();
			$row=$stmt->fetch();
         $current_number_of_likes = $row[0];
			
			$number_of_likes = $current_number_of_likes[0] + 1;
			
			
			$stmt2 = $this->dbh->prepare("UPDATE quotes SET number_of_likes = ? WHERE quotes_id = ?");
			$stmt->bindParam(1,$num_likes);
			$stmt->bindParam(2,$Post_ID);
			$stmt->excute();

			
			$this->closeConn();
					
		}
	
	  //--------Comment QUOTES--------//		
	  
	  
	  function view_comment($comment_id,$myusername){
	  	$this->openConn();
	  		$stmt = $this->dbh->prepare("SELECT * FROM comment WHERE Post_ID=?");
	  		$stmt->bindParam(1, $comment_id);
	  		$stmt->execute();
	  			  		
	  	$this->closeConn();
	  	
		  	while($row = $stmt->fetch()){
		  			  			
		  			echo "<div><fieldset  class = 'view_comment'>".$row[1]."</fieldset></div>";
		  				  				  			
		  	}
	  		  	
	  	 }
	  	 
	
	  
	  function add_comment($comment,$Post_ID,$myusername){
	  	$this->openConn();
	  	
			  	$stmt = $this->dbh->prepare("INSERT INTO comment (comment,Post_ID) VALUES (?,?)");
			  	$stmt->bindParam(1,$comment);
			  	$stmt->bindParam(2,$Post_ID);
			  	$id = $this->dbh->lastInsertId();  	
			  	$stmt->execute();
			  	
	  			echo "<div><fieldset  class = 'view_comment'>".$comment."</fieldset></div>";
	   	
	  $this->closeConn();
		  			
	  			  
	  }
	  
	  
	  
  //----Contacts-----// 
     
      function viewContacts($myusername){
			
			      $this->openConn();
			      
			      $stmt2=$this->dbh->prepare("SELECT * FROM user WHERE username=?");
               $stmt2->bindParam(1,$myusername);
               $stmt2->execute();
               
               if($row=$stmt2->fetch()){
               		$user = $row[0];
               		
               $stmt = $this->dbh->prepare("SELECT c.id, c.fname, c.mname, c.lname, c.pnumber, c.tnumber, c.email FROM contact as c, connect_tbl as ct, user as u WHERE c.id=ct.contact_id and u.id = ct.user_id
and u.id= ?;");
			      $stmt->bindParam(1, $user);
			      $stmt->execute();		


			      while ($row = $stmt->fetch()){
				     	 echo "<tr ".$row[0]." > ";
				     		 echo "<td>".$row[1]."</td>";
				      	 echo "<td>".$row[2]."</td>";
				      	 echo "<td>".$row[3]."</td>";
				     	 	 echo "<td>".$row[4]."</td>";
				     	 	 echo "<td>".$row[5]."</td>";
				      	 echo "<td>".$row[6]."</td>";	
				      	 echo "<td><img class='icon-trash' onclick='deleteContacts(".$row[0].")'/>";
				      	 echo "<img class='icon-edit' onclick='editContacts(".$row[0].")'/></td>";
				      echo "</tr>"; 
			      }
			      
			      
               }
               
               
			      

			$this->closeConn();
		      }


      function addContacts($id,$fname,$mname,$lname,$pnumber,$tnumber,$email,$contact_id,$myusername){
			
			      $this->openConn();
	
			      $stmt = $this->dbh->prepare("INSERT INTO contact (fname,mname,lname,pnumber,tnumber,email) VALUES(?,?,?,?,?,?)");
			
			      $stmt->bindParam(1, $fname);
			      $stmt->bindParam(2, $mname);
			      $stmt->bindParam(3, $lname);
			      $stmt->bindParam(4, $pnumber);
			      $stmt->bindParam(5, $tnumber);
			      $stmt->bindParam(6, $email);
				   $stmt->execute();
				   $id = $this->dbh->lastInsertId();
               
               $stmt2=$this->dbh->prepare("SELECT id FROM user WHERE username=?");
               $stmt2->bindParam(1,$myusername);
               $stmt2->execute();
               $user_id=$stmt2->fetch();
               
               $stmt3=$this->dbh->prepare("INSERT INTO connect_tbl(user_id,contact_id)values(?,?)");
               $stmt3->bindParam(1,$user_id[0]);
               $stmt3->bindParam(2,$id);
               $stmt3->execute();
               
               
  			      $this->closeConn();

			      echo "<tr id= ".$id.">";
			      echo "<td>".$fname."</td>";
			      echo "<td>".$mname."</td>";
			      echo "<td>".$lname."</td>";
			      echo "<td>".$pnumber."</td>";
			      echo "<td>".$tnumber."</td>";
			      echo "<td>".$email."</td>";
			      echo "<td><img class='icon-trash' onclick='deleteContacts(".$id.")'/>";
			      echo "<img class='icon-edit' onclick='editContacts(".$id.")'/></td>";
			      echo "</tr>";
		      }

      function deleteContacts($id,$myusername){
			
			      $this->openConn();

			      $stmt = $this->dbh->prepare("DELETE FROM connect_tbl WHERE contact_id = ?");
			      $stmt->bindParam(1, $id);
			      $stmt->execute();
	
			      $this->closeConn();	
		      }

      function editContacts($id,$myusername){

			      $this->openConn();

			      $stmt = $this->dbh->prepare("SELECT * FROM contact WHERE contact.id = ?");
			      $stmt->bindParam(1, $id);
			      $stmt->execute();
		
			      $record = $stmt->fetch();
			
			      $contact = array("id"=>$record[0], "fname"=>$record[1], "mname"=>$record[2],"lname"=>$record[3], "pnumber"=>$record[4],"tnumber"=>$record[5], "email"=>$record[6]);

			      $json_string = json_encode($contact);			
       
			      echo $json_string;

			      $this->closeConn();	
		      }

      function saveContacts($fname,$mname,$lname,$pnumber,$tnumber,$email,$id,$myusername){
			      $this->openConn();
	
			      $stmt = $this->dbh->prepare("UPDATE contact SET fname = ?, mname = ?, lname=?,pnumber=?,tnumber=?,email=? WHERE contact.id = ?");	
			      $stmt->bindParam(1, $fname);
			      $stmt->bindParam(2, $mname);
			      $stmt->bindParam(3, $lname);
			      $stmt->bindParam(4, $pnumber);
			      $stmt->bindParam(5, $tnumber);
			      $stmt->bindParam(6, $email);
			      $stmt->bindParam(7, $id);
			      $stmt->execute();
       
			      $this->closeConn();
               		
               
         		
			      echo "<td>".$fname."</td>";
			      echo "<td>".$mname."</td>";
			      echo "<td>".$lname."</td>";
			      echo "<td>".$pnumber."</td>";
			      echo "<td>".$tnumber."</td>";
			      echo "<td>".$email."</td>";
			      echo "<td><img class='icon-trash' onclick='deleteContacts(".$id.")'/>";
			      echo "<img class='icon-edit' onclick='editContacts(".$id.")'/></td>";
			    
		      }
		
			
		
      function searchContacts($lastname,$myusername){

		      $this->openConn();
		
		      $stmt = $this ->dbh->prepare("SELECT * FROM contact where lname=?");
		      $stmt->bindParam(1, $lastname);
		      $stmt -> execute();
		      $row= $stmt->fetch();
		
		      if($row==''|| $row==null){
			      echo "<tr id=".$row[0].">";
			      echo"<td colspan='10'>NO DATA FOUND</td>";
			      echo "</tr>";
			   }else{
				      echo "<tr id=".$row[0].">";
				      echo "<td>".$row[1]."</td>";
				      echo "<td>".$row[2]."</td>";
				      echo "<td>".$row[3]."</td>";
				      echo "<td>".$row[4]."</td>";
				      echo "<td>".$row[5]."</td>";
				      echo "<td>".$row[6]."</td>";
				      echo "<td><img class='icon-trash' onclick='deleteContacts(".$id.")'/>";
				      echo "<img class='icon-edit' onclick='editContacts(".$id.")'/></td>";
				      echo "</tr>"; 

		      }
		      $this->closeConn();
	      } 
	      
	      
	      

} //CLOSING BRACKET OF CLASS SystemDAO//



<?php
    include 'DAO/BaseDAO.php';
    
    class UserDAO extends BaseDAO{
        
        
		         
            function logIn($myusername,$mypassword){
								echo "$myusername";
      	
                  $this->openConn();
                  		
                  $stmt = $this->dbh->prepare(" SELECT * FROM user WHERE username=? AND password =?");
		            $stmt->bindParam(1,$myusername);
		            $stmt->bindParam(2,$mypassword);
                  $stmt->execute();
                  
		               		
              	if($row = $stmt->fetch()){
                    return true;

               }else{
			           return false;
			      }
                  										
                  $this->closeConn();
                  
               }
             function getUser($myusername,$mypassword){
      	
                  $this->openConn();
                  		
                  $stmt = $this->dbh->prepare(" SELECT username FROM user WHERE username=? AND password =?");
		            $stmt->bindParam(1,$myusername);
		            $stmt->bindParam(2,$mypassword);
                  $stmt->execute();
                  
		               		
              	   $row = $stmt->fetch();
                    return $row[0];

                  										
                  $this->closeConn();
                  
               }
             function Register($myusername, $mypassword, $email){
	
						$this->openConn();
	
						$stmt = $this->dbh->prepare("INSERT INTO user (username, password,  email) VALUES (?,?,?)");
	
						$stmt->bindParam(1, $myusername);
						$stmt->bindParam(2, $mypassword);
						$stmt->bindParam(3, $email);
						$stmt->execute();
            $id = $this->dbh->lastInsertId();
                 
                  
               
                  $this->closeConn(); 
              }
 
      }
?>

<?php
session_start();

	include 'DAO/UserDAO.php';
	$action = new UserDAO();
	if(!isset($_SESSION['username'])){
	     if(isset($_POST['username'])){
	                            $username=$_POST['username'];
	                             $password=$_POST['password'];
															echo "$username";
	                           if($action->logIn($username,$password)){
																
	                           
	                                  $_SESSION['username']=$action->getUser($username,$password);
	                                  header('location:form.php');
	                           } 
	                           $errMsg="<p>Wrong Username or Password</p>" ;   
		                  }
	     
	
							}else{
	                   
		                   header('location:System.php');	
               }
	



?>

<!DOCTYPE html>
<meta charset="utf-8">
<html lang="en">
<head> 
<meta charset="utf-8">

   <title>SYSTEM</title>
   <link rel="shortcut icon" href="images/heart.jpg">
   
	<script src="js/jquery-1.8.2.min.js" type="text/javascript"></script>
	<script src="js/jquery-ui-1.9.2.custom.min.js"></script>
	<script src="js/jquery-ui.js" type="text/javascript"></script>
	<script src="js/mySystem.js" type="text/javascript"></script>
	<script src="js/bootstrap.js" type="text/javascript"></script>
	<script src="js/bootstrap.min.js" type="text/javascript"></script>

	 
	  <link rel='stylesheet' href='css/jquery-ui-1.9.2.custom.min.css' style='text/css'>  
	  <link rel='stylesheet' href='css/jquery-ui.css' style='text/css'>
	  <link rel='stylesheet' href='css/system.css' style='text/css' />
	  <link rel='stylesheet' href='css/bootstrap.min.css' style='text/css' /> 
	  <link rel='stylesheet' href='css/bootstrap-responsive.css' style='text/css' />
	  <link rel='stylesheet' href='css/bootstrap-responsive.min.css' style='text/css' />  
</head>

<body>

			<form method="POST" id="logIn" class="form-inline">
				<fieldset>
					<label for="username">Username:</label>
					<input type="username" name="username" placeholder="Enter your username"/>
					<label for="password">Password</label>
					<input type="password" name="password" placeholder="Enter your password"><br />
					<?php if (isset($errMsg)) echo $errMsg; ?>
					<button class="btn-primary" type="submit">Log In</button>
					<!--<input type="submit" value="log-in" class="button">-->
				</fieldset>
			</form>
			
			<form>
				<a href="http://www.facebook.com"><img id="fb" src="images/facebook-icon.png"/></a>
				<a href="https://www.twitter.com"><img id="twit" src="images/twit.png"></a>
			</form> 
			
			
<div class="main_div"><!----main <div>---->

	<div  class="nav nav-tabs" id="btn_tab"> 
	
			<h1><img id="W" src="images/web.jpeg"/><img id="Q" src="images/quotes.jpeg"/></h1>
	

			<ul>				
				 <li><a href="#SignIn" data-toggle="tab">Register</a></li>				
				 <li><a href="#homePage" data-toggle="tab"><i class="icon-home icon-white"></i>Home</a></li>
				 <li><a href="#quotes" data-toggle="tab">Quotes</a></li> 				 
			</ul>	
		
			<hr />
	
				<div  id="homePage"><!---1st <div>--->
				<!--
					 <a href="http://www.brainyquote.com/quotes/topics/topic_love2.html"><img src="images/love.gif"/></a>
					 <h1>Click the image</h1>
					 	<br />				 
					 <fieldset>
					 		<p>Love reading qoutes</p>
					 		<p>You want to make your own quotes??</p>
					 		<p>Go to Registration have an account and make your own Quotes</p>
					 		<p>Have a nice day ahead</p>
					 </fieldset>
					 
				-->	 
					     <div class="row-fluid" >
							 <div class="span4"><a href="http://www.brainyquote.com/quotes/topics/topic_love2.html"><img src="images/love.gif"/></a></div>
							 <div class="span8" ><a href=""><img src="images/hurt.jpg"/></a></div>
							 <div class="span8" ><a href=""><img src="images/motivational.jpg"/></a></div>
						</div>
						
						
							<blockquote>
				 				<h3>Love Hurt</h3>
				 				<small>Someone famous <cite title="Source Title">Source Title</cite></small>
			  			 	</blockquote>		
								<p>
								Being hurt by someone whom you love is the worst thing that can happen to a person. If you love someone and your beloved hurts you, then you will be left broken, dejected and depressed. It really hurts you to the core, when your beloved hurts you in some or the other way. The worst way in which your beloved can possibly hurt is when your beloved calls it quits and ends the relationship. A broken relationship is very hard to erase from one’s mind and very difficult to deal with. One finds it hard to come over the memories of a broken relationship which was one going great guns. Being hurt by someone you love is something that you cannot easily deal with.It is difficult to get over the wounds of the heart. The only option you have is to nurse your wounds and let them heal with time. Time is perhaps the best healer. In the words of Daphne Rae, “I have found the paradox, that if you love until it hurts, there can be no more hurt, only more love.” 
					
								</p>
			
						
									
					
				</div> <!---END of 1st <div>--->
				

				<div id="SignIn"> <!---2nd <div>--->
						
					<p>Doesn't have an account?? </p><br />
					<p>Register for free..</p><button class="btn-success" id="btnReg" type="button">Click me</button>
					<br />	
						<div id="reg_user">
							<form id="register">
								<fieldset>
									<legend><h1>Register</h1></legend>
									<label for="myusername">Username:</label><br />
									<input type="text" name="myusername" id="myusername"/><br />
									<label for="mypassword">Password:</label><br />
									<input type="password" name="mypassword" id="mypassword"/><br />
									<label for="email">Email:</label><br />
									<input type="text" name="email" id="email"/><br />
									<button class="btn-success" type="button" id="addRegister">Add</button>
								</fieldset>
							</form>
						</div>
				</div> <!-----END of 2nd <div> -------> 
				 
		
				<div id="quotes"> <!----3rd <div>---->
							
				</div> <!---END of 3rd <div>----->
				
				
			</div>	
							
</div><!------END of main <div>--------->
	
			
	
		
</body>

</html>

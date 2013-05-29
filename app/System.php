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



   <title>SYSTEM</title>
   <link rel="shortcut icon" href="images/Q.jpeg">
   
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
			<div id="header_logIn">
				<form method="POST" id="logIn" class="form-inline">
					<fieldset>
						<label for="username">Username:</label>
						<input type="username" name="username" placeholder="Enter your username"/>
						<label for="password">Password</label>
						<input type="password" name="password" placeholder="Enter your password"><br />
						<?php if (isset($errMsg)) echo $errMsg; ?>
						<button class="btn-primary" type="submit">Log In</button>
					</fieldset>
				</form>
			</div>	
			
			
			<div id="SignIn"> <!---SignIn <div>--->
						
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
			</div> <!-----END of SignIn <div> -------> 
			


	<div  class="nav nav-tabs" id="btn_tab"> <!--Tab div-->
	
			<ul  id="nav_tab">								
				 <li><a href="#homePage" data-toggle="tab"><i class="icon-home "></i>Home</a></li>
				 <li><a href="#quotes" data-toggle="tab">Quotes</a></li> 
				 <li><a href="#hurtQ" data-toggle="tab">Hurt Quotes</a></li> 
				 <li><a href="#loveQ" data-toggle="tab">Love Quotes</a></li>				 
			</ul>	
		
			
	
				<div  id="homePage"><!---1st <div>--->
				
						<h3>Quotes are better with pictures! Share our beautiful quote pictures on Facebook and twitter</h3>
						<hr />
						<a href="http://www.facebook.com"><img id="fb" src="images/facebook-icon.png"/></a>
						<a href="https://www.twitter.com"><img id="twit" src="images/twit.png"/></a>
						
						<hr />
								<img id="h" src="images/love.gif"/>
								<img id="h" src="images/ilove you.gif"/>
								<img id="h" src="images/p1.gif"/>
								<img id="h" src="images/hurt.jpg"/>
								<img id="h" src="images/motivational.jpg"/>
								<img id="h" src="images/before.jpeg"/>
								<img id="h" src="images/one.jpeg"/>
								<img id="h" src="images/lovehurt.jpg"/>
								<img id="h" src="images/success.jpg"/>
								
							
					
					
				</div> <!---END of 1st <div>--->
				

				
				 
		
				<div id="quotes"> <!----2nd <div>---->
				
							
				</div> <!---END of 2nd <div>----->
				
				<!------FOR SHARE----->
				<div id="share">
					<table>
						<tr>
							<td></td>
							<td></td>
						<tr>
						<input type="hidden" name="id" id="share_id"/>
					</table>
				
					
				</div>
				
				
				<div id="hurtQ">
				
					<blockquote>
				 				<h3>Love Hurt</h3>
				 				<small>Someone famous <cite title="Source Title">Source Title</cite></small>
			  			 	</blockquote>		
								<p>
								Being hurt by someone whom you love is the worst thing that can happen to a person. If you love someone and your beloved hurts you, then you will be left broken, dejected and depressed. It really hurts you to the core, when your beloved hurts you in some or the other way. The worst way in which your beloved can possibly hurt is when your beloved calls it quits and ends the relationship. A broken relationship is very hard to erase from one’s mind and very difficult to deal with. One finds it hard to come over the memories of a broken relationship which was one going great guns. Being hurt by someone you love is something that you cannot easily deal with.It is difficult to get over the wounds of the heart. The only option you have is to nurse your wounds and let them heal with time. Time is perhaps the best healer. In the words of Daphne Rae, “I have found the paradox, that if you love until it hurts, there can be no more hurt, only more love.” 
					
								</p>
				
					<img id="h" src="images/h1.jpeg"/>
					<img id="h" src="images/h2.jpeg"/>
					<img id="h" src="images/h3.jpeg"/>
					<img id="h" src="images/h4.jpeg"/>
					<img id="h" src="images/h5.jpeg"/>
					<img id="h" src="images/h6.jpeg"/>
					<img id="h" src="images/h7.jpeg"/>
					<img id="h" src="images/h8.jpeg"/>
					<img id="h" src="images/h9.jpeg"/>
					<img id="h" src="images/h10.jpeg"/>
					<img id="h" src="images/h11.jpeg"/>
					<img id="h" src="images/h12.jpeg"/>
					<img id="h" src="images/h13.jpeg"/>
					<img id="h" src="images/h14.jpeg"/>
					<img id="h" src="images/h15.jpeg"/>
					<img id="h" src="images/h16.jpeg"/>
					<img id="h" src="images/h17.jpeg"/>
					<img id="h" src="images/h18.jpeg"/>
					
					
				</div> <!--END of hurtQ-->
				
				
				<div id="loveQ">
					<fieldset id="LQ">
								<p>
								Love yourself first and everything 
								else falls into line. 
								You really have to love yourself 
								to get anything done in this world.
								</p>
					</fieldset>
					
					<fieldset id="LQ">
								<p>
								If you press me to say why I loved him, 
								I can say no more than because 
								he was he, and I was I.
								</p>
					</fieldset>
					
					<fieldset id="LQ">
								<p>
								What we have once enjoyed we can never lose. 
								All that we love deeply becomes a part of us.
								</p>
					</fieldset>
					
					<fieldset id="LQ">
								<p>
								Faith makes all things possible... 
								love makes all things easy.
								</p>
					</fieldset>
					
					<fieldset id="LQ">
								<p>
								Love is life. And if you miss love, you miss life.
								</p>
					</fieldset>
					
					<fieldset id="LQ">
								<p>
								Life without love is like a 
								tree without blossoms or fruit.
								</p>
					</fieldset>
					
					<fieldset id="LQ">
								<p>
								Friendship often ends in love; 
								but love in friendship - never.
								</p>
					</fieldset>
					
					<fieldset id="LQ">
								<p>
								A part of kindness consists in loving 
								people more than they deserve.
								</p>
					</fieldset>
					
					<fieldset id="LQ">
								<p>
								Love isn't something you find. 
								Love is something that finds you.
								</p>
					</fieldset>
				
				
				</div>
				
									
	</div><!----Tab div----->	
							



		
												
			
		
</body>

</html>

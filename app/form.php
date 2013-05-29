<?php

	session_start();
	if(!isset($_SESSION['username'])){
	  header('Location: System.php');
	}
	else{
	  	$username=$_SESSION['username'];
	}



?>



<!DOCTYPE html>
<html>
		<head>
			<title>FORM</title>
			<link rel="shortcut icon" href="images/Q.jpeg">
	
			<script src="js/jquery-1.8.2.min.js" type="text/javascript"></script>
			<script src="js/jquery-ui-1.9.2.custom.min.js"></script>
			<script src="js/jquery-ui.js" type="text/javascript"></script>
			<script src="js/mySystem.js" type="text/javascript"></script>
			<script src="js/bootstrap.js" type="text/javascript"></script>
			<script src="js/bootstrap.min.js" type="text/javascript"></script>
	

			 
			  <link rel='stylesheet' href='css/jquery-ui-1.9.2.custom.min.css' style='text/css' />  
			  <link rel='stylesheet' href='css/jquery-ui.css' style='text/css' />
			  <link rel='stylesheet' href='css/system.css' style='text/css' />
			  <link rel='stylesheet' href='css/bootstrap.css' style='text/css' />
			  <link rel='stylesheet' href='css/bootstrap.min.css' style='text/css' /> 
			  <link rel='stylesheet' href='css/bootstrap-responsive.css' style='text/css' />
			  <link rel='stylesheet' href='css/bootstrap-responsive.min.css' style='text/css' /> 
	
		</head>
	<body>
	<div id="logOut">
		<a href="logout.php"><button class="btn-primary" type="button">Log Out</button></a>
		<br /> <br />
		Welcome <span><?php echo $username;?></span>
	</div>
			<div id="getToKnow">
						<input type="button" id="btnContact" value="add Contact"/><br />	
						<form id="reg_form">
							<fieldset>		   			   
								<h1>FORM</h1>
								<label for="fname">Enter Firstname:</label>
								<input type="text" id="fname" name="fname"/> <br />
								<label for="mname">Enter Middlename:</label>
								<input type="text" id="mname" name="mname"/><br />
								<label for="lname">Enter Lastname:</label>
								<input type="text" id="lname" name="lname"/> <br />
							   <label for="pnumber">Enter Phonenumber:</label>
								<input type="text" id="pnumber" name="pnumber"/> <br />
								<label for="tnumber">Enter Telephonenumber:</label>
								<input type="text" id="tnumber" name="tnumber"/> <br />
								<label for="email"> Enter E-mail:</label>
								<input type="text" id="email" name="email"/> <br />
								<!-----hidden id for contact------>
								<input type="hidden" id="id" name="id"/> <br />
								<input type="button" id="add" value="ADD"/> 
								<input type="button" id="save" value="SAVE"/>
							</fieldset>
								
						</form>
						 
			
						<table id="contact" border="1" class="table table-bordered">
						<thead>
						  <tr>
							 <th>FIRSTNAME</th>
							 <th>MIDDLENAME</th>
							 <th>LASTNAME</th>
							 <th>PHONENUMBER</th>
							 <th>TELEPHONENUMBER</th>
							 <th>E-MAIL</th>
							 <th>ACTION</th>
						  </tr>
						  </thead>
						  <tbody id="view_Contacts"></tbody>
						</table>
	
										   
					<label for="search">SEARCH</label>
					<input id="search" placeholder="Insert lastname" name="lastname"/>
					<br />
					<br />
				<form id = "Q" action = "post_quotes.php">				
						Make your own Quotes<br />
						<textarea id="quo" name="quotes" rows="8"></textarea><br />
						<button type="button" id="qbtn" class="btn btn-primary">POST</button>
						<input type="hidden" name="quotes_id" value="id">								
				</form>	
				
			 	<table id="Q1" border="1" class="table table-bordered">
			 			<thead>
						  <tr>
							 <th>QUOTES</th>
							 <th>ACTION</th>						 
						  </tr>
						</thead>
				</table>
				<br />
			
	
			</div> <!-----end of #getToKnow----->
			
			
			<div id="profile">
						<img src="images/hu u!!.jpg"><br />
						<p>Profile of me</p>
						<p>have a nice day</p>
			</div>
	
		



	</body>

</html>

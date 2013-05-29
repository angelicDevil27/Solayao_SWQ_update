<?php
	include 'DAO/SystemDAO.php';
	
	session_start();
	$myusername=$_SESSION["username"];
	 
	$action = new SystemDAO();
	$action->viewContacts($myusername);


?>

<?php
session_start();

	
	include 'DAO/SystemDAO.php';
	
		$myusername= $_SESSION["username"];
	
	
	$action = new SystemDAO();
		$action->view_Quotes($myusername);


?>

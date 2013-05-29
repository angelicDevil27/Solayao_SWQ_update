<?php

session_start();

	include 'DAO/SystemDAO.php';
	
	$myusername = $_SESSION['username'];
	$quotesText = $_POST['quotes'];
	
	
	
	$action = new SystemDAO();
		$action->post_Quotes($quotesText,$myusername);
?>

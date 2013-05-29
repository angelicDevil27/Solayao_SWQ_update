<?php
session_start();
	include 'DAO/SystemDAO.php';
	
	$myusername = $_SESSION['username'];
		
	$id = $_POST['id'];
	
	$action = new SystemDAO();
		$action->delete_Quotes($id,$myusername);
?>

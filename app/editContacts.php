<?php
	include 'DAO/SystemDAO.php';
	session_start();
	$myusername= $_session["username"];
	$id = $_POST['id'];
	
	$action = new SystemDAO();
		$action->editContacts($id,$myusername);

?>

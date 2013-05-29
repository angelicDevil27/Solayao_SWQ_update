<?php
session_start();
	include 'DAO/SystemDAO.php';
	
	$myusername = $_SESSION["username"];	
	
	$comment = $_POST['comment'];
	$Post_ID = $_POST['Post_Id'];
	
	
	 $action = new SystemDAO();
	 	$action->add_comment($comment,$Post_ID,$myusername);

?>

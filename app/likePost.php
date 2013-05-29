<?php

session_start();

	include 'SystemDAO.php';
	
	$myusername= $_SESSION["username"];

	$id = $_POST['id'];

	$action = new SystemDAO();
		$action->likePost($postId,$num_likes);
	
	
?>

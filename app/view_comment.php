<?php
session_start();
	include 'DAO/SystemDAO.php';
	
	$myusername= $_SESSION["username"];	
	$comment_id = $_POST['comment_id'];
	
	$action = new SystemDAO();
			$action->view_comment($comment_id,$myusername);

?>

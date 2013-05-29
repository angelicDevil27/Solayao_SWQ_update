<?php

session_start();

	include 'SystemDAO.php';
	
	$user_id = $_POST['id'];
	
	$action = new SystemDAO();
		$action->share_Quotes($user_id);


?>

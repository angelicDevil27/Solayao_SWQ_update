<?php

include 'DAO/UserDAO.php';

	session_start();
	$myusername= $_SESSION["username"];

  $myusername = $_POST['myusername'];
  $mypassword = $_POST['mypassword'];
  $email = $_POST['email'];
  
    $action = new UserDAO();
      $action->Register($myusername, $mypassword, $email);



?>

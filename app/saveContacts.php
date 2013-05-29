<?php
	include 'DAO/SystemDAO.php';
	session_start();
	$myusername= $_session["username"];
	$fname = $_POST['fname'];
	$mname = $_POST['mname']; 
	$lname = $_POST['lname'];
	$pnumber = $_POST['pnumber'];
	$tnumber = $_POST['tnumber'];
	$email = $_POST['email'];
	$id = $_POST['id'];
	
	$action = new SystemDAO();
	  $action->saveContacts($fname,$mname,$lname,$pnumber,$tnumber,$email,$id,$myusername);



?>

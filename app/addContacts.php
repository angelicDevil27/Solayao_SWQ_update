<?php
session_start();
	include 'DAO/SystemDAO.php';

	$myusername= $_SESSION["username"];
	
	
	$contact_id = $_POST['contact_id'];
	$id = $_POST['id'];
	$fname = $_POST['fname'];
	$mname = $_POST['mname']; 
	$lname = $_POST['lname'];
	$pnumber = $_POST['pnumber'];
	$tnumber = $_POST['tnumber'];
	$email = $_POST['email'];
	
	
	
	$action = new SystemDAO();
	  $action->addContacts($id,$fname,$mname,$lname,$pnumber,$tnumber,$email,$contact_id,$myusername);

?>

<?php

include 'DAO/SystemDAO.php';
session_start();
$myusername= $_SESSION["username"];
   $lastname = $_POST['lastname'];
   
   $action = new SystemDAO();
      $action->searchContacts($lastname,$myusername);

?>

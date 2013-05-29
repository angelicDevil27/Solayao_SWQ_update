<?php
	include 'DAO/SystemDAO.php';
	
	$quotes_id = $_POST['quotes_id'];
	
	$action = new SystemDAO();
		$action->edit_Quotes($quotes_id,$quotesText);

?>

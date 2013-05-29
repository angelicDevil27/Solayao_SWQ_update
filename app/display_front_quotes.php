<?php

	include "DAO/SystemDAO.php";
	
	$action = new SystemDAO();
	$action->display_front_quotes($myusername);

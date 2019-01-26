<?php
	define("DB_SERVER" , "localhost");
	define("DB_USER" , "root");
	define("DB_PASS" , "");
	define("DB_DATABASE" , "tmt");
	
	$connection = new mysqli(DB_SERVER, DB_USER, DB_PASS, DB_DATABASE);
	if($connection->connect_errno){
		die($connection->connect_error);
	}
?>
<?php
	require_once "constants-database.inc.php";
	require_once "medoo.inc.php";

	$database = new medoo(array(
	    'database_type' => $DB_TYPE,
	    'database_name' => $DB_NAME,
	    'server' => $DB_HOST,
	    'username' => $DB_USER,
	    'password' => $DB_PASS,
	    'charset' => 'utf8'
	));
?>

<?php
	$host		= "localhost";
	$dbusername	= "root";
	$dbpassword	= "haziq123";
	$dbname     = "mistore"; //database yg d pilih dlm mysql

	// Create connection to database
	$connection = mysql_connect($host, $dbusername, $dbpassword);

	// Select database
	$dbselect = mysql_select_db($dbname);
?>
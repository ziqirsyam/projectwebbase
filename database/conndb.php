<?php
	$host		= "localhost";
	$dbusername	= "root";
	$dbpassword	= "";
	$dbname     = ""; //database yg d pilih dlm mysql

	// Create connection to database
	$connection = mysql_connect($host, $dbusername, $dbpassword);

	// Select database
	$dbselect = mysql_select_db($dbname);
?>
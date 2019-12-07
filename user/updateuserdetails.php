<?php
	@session_start();
	include "../database/conndb.php";

	$firstname = @$_POST['firstname'];
	$lastname = @$_POST['lastname'];
	$username = @$_POST['username'];
	$nophone = @$_POST['nophone'];
	$email = @$_POST['email'];
	$password = @$_POST['password'];
	$gender = @$_POST['gender'];
	$address = @$_POST['address'];
	$poskod = @$_POST['poskod'];
	$state = @$_POST['state'];
	$country = @$_POST['country'];

	$sql = "UPDATE user 
	SET firstname = '$firstname', 
	lastname = '$lastname',  
	nophone = '$nophone', 
	email = '$email', 
	password = '$password', 
	gender = '$gender', 
	address = '$address', 
	poskod = '$poskod', 
	state = '$state', 
	country = '$country' WHERE username = '$username'";

	$query = mysql_query($sql, $connection);
	if (!$query) {
		var_dump($sql);
		die('Could not enter data: ' . mysql_error());
	} else {
		header("location: homepage.php");
	}
	mysql_close($connection);
?>
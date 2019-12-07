<?php
	@session_start();
	include "../database/conndb.php";

	$product_name = @$_POST['product_name'];
	$price = @$_POST['price'];
	$brand = @$_POST['brand'];
	$details = @$_POST['details'];
	$fileField = @$_POST['fileField'];

	$sql = "INSERT INTO item (product_name, price, brand, details, fileField) VALUES ('$product_name','$price','$brand','$details','$fileField')";

	$query = mysql_query($sql, $connection);
	if (!$query) {
		var_dump($sql);
		die('Could not enter data: ' . mysql_error());
	} else {
		header("location: homepageadmin.php");
	}
	
?>
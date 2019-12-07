<?php
	@session_start();
	include "../database/conndb.php";

	$itemID = @$_POST['itemID'];
	$product_name = @$_POST['product_name'];
	$price = @$_POST['price'];
	$brand = @$_POST['brand'];
	$details = @$_POST['details'];
	$fileField = @$_POST['fileField'];

	$sql = "UPDATE item SET 
	product_name = '$product_name', 
	price = '$price', 
	brand = '$brand', 
	details = '$details' 
	WHERE  itemID = '$itemID'";

	$query = mysql_query($sql, $connection);
	if (!$query) {
		var_dump($sql);
		die('Could not enter data: ' . mysql_error());
	} else {
		header("location: updateitem.php");
	}
	
?>
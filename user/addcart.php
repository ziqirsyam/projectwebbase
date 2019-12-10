<?php
	@session_start();
	include "../database/conndb.php";

	//$itemID = @$_POST['itemID'];
	$cproduct_name = @$_POST['cproduct_name'];
	$cprice = @$_POST['cprice'];
	$cbrand = @$_POST['cbrand'];
	$cdetails = @$_POST['cdetails'];
	$cuser = @$_POST['cuser'];
	$quantity = @$_POST['quantity'];
	$payment = @$_POST['payment'];
	

	$sql = "INSERT INTO cart (cproduct_name, cprice, cbrand, cdetails, cuser, quantity, payment ) VALUES ('$cproduct_name','$cprice','$cbrand','$cdetails','$cuser','$quantity','$payment')";

	$query = mysql_query($sql, $connection);
	if (!$query) {
		var_dump($sql);
		die('Could not enter data: ' . mysql_error());
	} else {
		header("location: cart.php");
	}
	
?>
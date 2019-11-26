<!DOCTYPE html>
<html>
<head>
	<title>Cart</title>
</head>
<body>
	<?php include'usernavbar.php'?>
	<h1>Cart</h1>
	<div>
		<table>
			<tr>
				<th>Item</th>
				<th>Price</th>
				<th>Action</th>
			</tr>
			<tr>
				<td>test1</td>
				<td>RM 999</td>
				<td><button>Remove</button></td>
			</tr>
		</table>
	</div>
	<div>
		<table>
			<tr>
				<th>Total price : RM 999</th>
				<td><a href="checkout.php"><button>Checkout</button></a></td>
			</tr>
		</table>
	</div>
	<?php include '../footer.php'?>
</body>
</html>
<!DOCTYPE html>
<html>
<head>
	<title>Sign-in Page</title>
</head>
<body>
	<?php include 'generalnavbar.php'?>
	<h1>Sign-in Page</h1>
	<form action="" method="post">
		<div>
			<h2>Sign Up Form</h2>
			<hr>
			<label for="user">Username :</label>
			<input type="text" name="user" placeholder="Enter username..." required>
		</div>
		<div>
			<button type="reset">Reset</button>
			<button type="submit">Login</button>
		</div>
	</form>
	<?php include 'footer.php'?>
</body>
</html>
<!--
	References
	https://www.w3schools.com/howto/howto_css_login_form.asp
-->
<!DOCTYPE html>
<html>
<head>
	<title>Sign-Up</title>
</head>
<body>
	<?php include 'generalnavbar.php'?>
	<h1>Sign-Up Page</h1>
	<form action="">
		<div>
			<h2>Sign Up Form</h2>
			<hr>
			<label for="fname">First Name :</label>
			<input type="text" name="fname" placeholder="Enter your first name..." required>
		</div>
		<div>
			<button type="reset">Reset</button>
			<button type="submit">Sign-up</button>
		</div>
	</form>
	<?php include 'footer.php'?>
</body>
</html>
<!--
	References
	https://www.w3schools.com/howto/howto_css_signup_form.asp
	https://www.w3schools.com/howto/tryit.asp?filename=tryhow_css_signup_form
	https://www.w3schools.com/howto/howto_js_password_validation.asp
-->
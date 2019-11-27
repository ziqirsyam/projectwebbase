<!DOCTYPE html>
<html>
<head>
	<title>Sign-in Page</title>
</head>
<body>
	<?php include 'generalnavbar.php'?>
	<div class="form">
	   	<form class="login-form" action="" method="post">
	   	<img src="admin2.png"alt="adminpic"class="form-img"/><br>
	   	<h1><b>Login</b><br></h1>
	   	<p>Username</p>
	   	<input type="text"placeholder="username"/><br>
	   	<p>Password</p>
	   	<input type="password"placeholder="password"/><br>
	    <button type="submit" class="button" name="submit" value="singinbtn">Log in</button>
	    <p class="message">Want to Register?<a href="signup.html">Sign Up</a></p>

	    </form>
	</div>
	</div>

	<?php include 'footer.php'?>
</body>
</html>
<!--
	References
	https://www.w3schools.com/howto/howto_css_login_form.asp
-->

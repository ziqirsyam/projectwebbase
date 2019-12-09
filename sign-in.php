<?php
	@session_start();
	include "database/conndb.php";

	$username = @$_POST['username'];
	$password = @$_POST['password'];
	$login = @$_POST['login'];
	$invalidlogin = "Wrong username or password. Please try again.";

	if ($login) {
		if ($username == "" || $password == "") {
			?> <script type="text/javascript">alert("Field must not empty!");</script> <?php
		} else {
			$sql = mysql_query("SELECT * FROM user WHERE username = '$username' AND password = '$password'") OR die(mysql_error());
			$data = mysql_fetch_array($sql);
			$result = mysql_num_rows($sql);

			if ($result >=1) {
				if ($data['access'] === "admin") {
					@$_SESSION['user'] = $data['username'];
					?><script type="text/javascript">location.replace("admin/homepageadmin.php")</script><?php
				} elseif($data['access'] === "user") {
					@$_SESSION['user'] = $data['username'];
					?><script type="text/javascript">location.replace("user/homepage.php")</script><?php
				}
			} else {
				echo "<script type='text/javascript'>alert('$invalidlogin')</script>";
			}
			
		}
		
	} else {

	}
?>


<!DOCTYPE html>
<html>
<head>
	<script src="https://kit.fontawesome.com/a076d05399.js"></script>
	<title>Sign-in Page</title>
	<link rel="stylesheet" type="text/css" href="css/Sign-in.css">
</head>
<body>
	<!--<section>
		<nav>
	<ul id="navitop" class ="navitop">
		<div class="flex-container">
			
		    <li class="dropdown">
		    <i  id="bars" class="fas fa-bars"></i>
		    <div class="dropdown-content">
			<a class="sign-up" href="#">Sign Up</a>
     		<a class="log-in" href="#">Log in</a>
		</div></li>
		<li class="list"><a href="#Mistore">Mi Store</a></li>
  			<li class="list"><a href="#news">Apple</a></li>
  			<li class="list"><a href="#contact">Samsung</a></li>
  			<li class="list"><a href="#about">Sony</a></li>
  			<li class="list"><a href="#about">Xiaomi</a></li>
  			<li class="list"><a href="#about">Oppo</a></li>
  			<div class="cart">
  			<li class="list"><a href="#about"><i class="fas fa-shopping-cart"></i></a></li>
  		</div>
  		<form  class="search" action="/action_page.php">
  			<li class="Search"><a href="#about"><input type="text" name="search" placeholder="Search.."></a></li>
  		</form>

  				
  	</div>
	</ul>
		</nav>
		</section>-->
	<?php include 'generalnavbar.php'?>
	<div class="form" name="userform">
	   	<form class="login-form" action="" method="post">
	   	<!--<img src="admin2.png"alt="adminpic"class="form-img"/><br>-->
	   	<h1><b>Login</b><br></h1>
	   	<div class="user_uname">
	   		<input type="text" name="username" required />
	   		<label for="username" class="label_uname">
				<span class="content_uname">Username</span>
			</label>
	   	</div>
	   	<br>
	   	<div class="user_psw">
	   		<input type="password" name="password" required />
	   		<label for="password" class="label_psw">
				<span class="content_psw">Password</span>
			</label>
	   	</div>
	   	<br>
	    <button type="submit" class="button" name="login" value="singinbtn" onclick="check(this.form)">Log in</button>
	    <p class="message">Want to Register? <a href="sign-up.php">Sign Up</a></p>
		</div>
	    </form>
	</div>
	
	<!--<script language="javascript">
		function check(form)
		{
 			if(form.username.value == "myusername" && form.password.value == "mypassword")
  			{
    		window.open('index.php')
 			}
 			else
 			{
   			alert("The username and password you entered don't match.")
  			}
		}

				window.onscroll = function() {myFunction()};

		var navitop = document.getElementById("navitop");
		var sticky = navitop.offsetTop;

		function myFunction() {
  			if (window.pageYOffset >= sticky) {
    		navitop.classList.add("sticky")
  		} else {
    		navitop.classList.remove("sticky");
  		}
		}
	</script>-->

	<?php include 'footer.php'?>
</body>
</html>
<!--
	References
	https://www.w3schools.com/howto/howto_css_login_form.asp
-->

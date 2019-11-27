<!DOCTYPE html>
<html>
<head>
	<title>Homepage</title>
</head>
<body>
	<?php include 'usernavbar.php'?>
	<h1>Hompage User</h1>
	<?php include '../footer.php'?>
	<header><!--top navigation-->
		<div class="head1">MI Store</div>
		<div class="head2">Welcome to MiStore </div>
	</header>

	<div class="navitop">
		<a href="#home">username</a>
		<div class="cart">
			<a href="#cart">Cart</a></div>
		<div class="signin">
			<a href="signup.html">Sign up</a></div>
		<div class="signout">
			<a href="index.html">Sign Out</a></div>
	</div>

	<!--side navigation-->
	<section>
		<nav>
			<ul>
				<li><a href="userdetail.html">User Detail</a></li>
				<li><div class="dropdown">
					<button class="dropbtn">Category
						<i class="fa fa-caret-down"></i>
					</button>
					<div class="dropdown_content">
						<a href="Laptop.html">Computer</a>
						<a href="Smartphone.html">Smartphone</a>
						<a href="Tablet.html">Tablet</a>
						<a href="Smartwatch.html">Smart Watch</a>
						<a href="Accessories.html">Accessories</a>
					</div>
					</div>
				</li>
			</ul>
		</nav>
	</section>

	<article>
		<div class="search_container">
			<form action="/action_page.php">
				<input type="text"placeholder="Search.."name="search">
				<button type="submit"><i class="fa fa-search"></i></button>
			</form>
		</div>

		<div class="contentpage">
			<a href="smartphone1.html"><img src="smartphone1.jpg">Smartphone1</a><br>
			<a href="smartphone2.html"><img src="smartphone2.jpg">Smartphone2</a><br>
			<a href="laptop1.html"><img src="laptop1.jpg">Laptop1</a><br>
			<a href="laptop2.html"><img src="laptop2.jpg">Laptop2</a><br>
			<a href="laptop3.html"><img src="laptop3.jpg">Laptop3</a><br>
			<a href="tablet.html"><img src="tablet.jpg">Tablet</a><br>
			<a href="speaker.html"><img src="speaker1.jpg">Speaker</a><br>
			<a href="mouse1.html"><img src="mouse1.jpg">Mouse1</a><br>
			<a href="smartwatch.html"><img src="smartwatch.jfif">Smartwatch1</a><br>
			<a href="smarthwatch2.html"><img src="smartwatch2.jpg">Smartwatch2</a><br>

	</article>
	<footer>
		<P>© Mistore</P>
	</footer>
	
</body>
</html>
<!--
	References
	https://shopee.com.my/
	https://www.lazada.com.my/
	https://www.ebay.com.my/
	https://www.alibaba.com/
-->

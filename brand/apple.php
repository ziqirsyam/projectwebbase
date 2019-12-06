<!DOCTYPE html>
<html>
<head>
	<title>Mi Store Apple Phone</title>
</head>
<body>
<header><!--top navigation-->
		<title>HomePage</title>
		<link rel="stylesheet" type="text/css" href="branddeis.css">
		<script src="https://kit.fontawesome.com/a076d05399.js"></script>
	</header>
	<nav>
	<!--side navigation-->
	<section>
		<nav>
	<ul id="navitop" class ="navitop">
		<div class="flex-container">
			
		    <li class="dropdown">
		    <i  id="bars" class="fas fa-bars"></i>
		    <div class="dropdown-content">
			<a class="sign-up" href="#">User detail</a>
     		<a class="log-in" href="#">Sign Out</a>
		</div></li>
		<li class="list"><a href="#Mistore">Mi Store</a></li>
  			<li class="list"><a href="userapple.php">Apple</a></li>
  			<li class="list"><a href="usersamsung.php">Samsung</a></li>
  			<li class="list"><a href="usersony.php">Sony</a></li>
  			<li class="list"><a href="userxiomi.php">Xiaomi</a></li>
  			<li class="list"><a href="useroppo.php">Oppo</a></li>
  			<div class="cart">
  			<li class="list"><a href="#about"><i class="fas fa-shopping-cart"></i></a></li>
  		</div>
  		<form  class="search" action="/action_page.php">
  			<li class="Search"><a href="#about"><input type="text" name="search" placeholder="Search.."></a></li>
  		</form>
  				
  	</div>
	</ul>
		</nav>
	</section>
	<article>
			<p class="brand">Apple Product</p>
	<div class="flex-container2">
			<div class="iphone11"><p>iPhone 11</p><a href="iphone11.php"><img src="">Buy</a><br></div>
			<div class="iphone11promax"><p>iPhone 11 Pro Max</p><a href="iphone11promax.php"><img src="">Buy</a><br></div>
			<div class="iphone10"><p>iPhone 10</p><a href="iphone10.php"><img src="">Buy</a><br></div>
			<div class="iphone8plus"><p>iPhone 8 Plus</p><a  href="iphone8plus.php"><img src="">Buy</a><br></div>
			<div class="iphone7plus"><p>iPhone 7 Plus</p><a href="iphone7plus.php"><img src="">Buy</a><br></div>
	</div>
</article>

	<script>
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
</script>
</body>
</html>

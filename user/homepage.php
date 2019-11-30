<!DOCTYPE html>
<html>
<header><!--top navigation-->
		<title>HomePage</title>
		<link rel="stylesheet" type="text/css" href="indexdeis.css">
	</header>
	<nav>
	<!--side navigation-->
	<section>
		<nav>
	<ul id="navitop" class ="navitop">
		<div class="flex-container">
			
		    <li class="dropdown">
		     <a class="dropbtn">Dropdown</a>
		    <div class="dropdown-content">
		    <a href="userdetails.php">User Details</a>
			<a href="#">Sell Item</a>
			<a href="#">Sign Out</a>

		</div></li> 
		<li class="list"><a href="#Mistore">Mi Store</a></li>
  			<li class="list"><a href="#news">Apple</a></li>
  			<li class="list"><a href="#contact">Samsung</a></li>
  			<li class="list"><a href="#about">Sony</a></li>
  			<li class="list"><a href="#about">Xiaomi</a></li>
  			<li class="list"><a href="#about">Oppo</a></li>
  			<li class="list"><a href="#about">Cart</a></li>
  		<form action="/action_page.php">
  			<li class="Search"><a href="#about"><input type="text" name="search" placeholder="Search.."></a></li>
  		</form>
  				
  	</div>
	</ul>
		</nav>
	</section>
	<article>
	<div class="flex-container">
			<div class="board"><a href="Apple.html"><img src="">Learn more</a><br></div>
			<div class="Samsung"><a href="Samsung.html"><img src="">Learn more</a><br></div>
			<div class="Sony"><a href="Sony.html"><img src="">Learn more</a><br></div>
			<div class="Xiaomi"><a  href="Xiaomi.html"><img src="">Learn more</a><br></div>
			<div class="Oppo"><a href="Oppo.html"><img src="">Learn more</a><br></div>
	</div>
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
	</article>
	<footer>
		<P>© Mistore, 2019</P>
	</footer>
</body>
</html>

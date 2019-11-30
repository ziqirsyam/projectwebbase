<?php include 'generalnavbar.php'?>
	<!--<h1>Index - Page</h1>-->
	<?php include 'footer.php'?>
	<header><!--top navigation-->
		<script src="https://kit.fontawesome.com/a076d05399.js"></script>
		<title>HomePage</title>
		<link rel="stylesheet" type="text/css" href="indexdeis.css">


	</header>
	<!--side navigation-->
	<section>
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
	</section>
	<body>
	<article>
	<div class="link">
	<div class="flex-container">
			<div class="board"><a href="Apple.html"><img src="">Learn more</a> <br></div>
			<div class="Samsung"><a href="Samsung.html"><img src="">Learn more</a><br></div>
			<div class="Sony"><a href="Sony.html"><img src="">Learn more</a><br></div>
			<div class="Xiaomi"><a  href="Xiaomi.html"><img src="">Learn more</a><br></div>
			<div class="Oppo"><a href="Oppo.html"><img src="">Learn more</a><br></div>
		</div>
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
<!--    References
<!--    References
	https://shopee.com.my/
	https://www.lazada.com.my/
	https://www.ebay.com.my/
	https://www.alibaba.com/
	testnewgithubReferences
	https://shopee.com.my/
	https://www.lazada.com.my/
	https://www.ebay.com.my/
	https://www.alibaba.com/
	testnewgithub
	References
	https://shopee.com.my/
	https://www.lazada.com.my/
	https://www.ebay.com.my/
	https://www.alibaba.com/
-->

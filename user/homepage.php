<!DOCTYPE html>
<html>
	<?php include 'usernavbar.php'?>
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

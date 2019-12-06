<?
	@session_start();
	include "../database/conndb.php";

	if (@$_SESSION['user']) {
		$user = @$_SESSION['user'];

		$sql = mysql_query("SELECT * FROM user WHERE username = '$user'") or die(mysql_error());
		$data = mysql_fetch_array($sql);
		$result = mysql_num_rows($sql);
		$usertype = $data['access'];
		if ($usertype === "user") {
			$userid = $user;
			$sql = mysql_query("SELECT * FROM user WHERE username = '$userid'") or die(mysql_error());
			$data = mysql_fetch_array($sql);
			$result = mysql_num_rows($sql);

			@$_SESSION['user'] = $userid;
		}
	}
?>
<!DOCTYPE html>
<html>
<link rel="stylesheet" type="text/css" href="userdeis.css">
	<?php include 'usernavbar.php'?>
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


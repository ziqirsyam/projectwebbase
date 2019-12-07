<?php
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
?>
<!DOCTYPE html>
<html>
<link rel="stylesheet" type="text/css" href="../css/userdeis.css">
	<?php include 'usernavbar.php'?>
	<p>Welcome <?php echo @$data['firstname']; ?>&nbsp;<?php echo @$data['lastname'];?> </p>
	<article>
	<div class="link">
	<div class="flex-container">
			<div class="board"><a href="apple.php"><img src="../img/iphone 11(1).png">Learn more</a> <br></div>
			<div class="Samsung"><a href="samsung.php"><img src="../img/Samsung1.png">Learn more</a><br></div>
			<div class="Sony"><a href="sony.php"><img src="../img/Sony 1.png">Learn more</a><br></div>
			<div class="Xiaomi"><a  href="xiaomi.php"><img src="../img/Xiaomi 1.png">Learn more</a><br></div>
			<div class="Oppo"><a href="oppo.php"><img src="../img/Oppo 1.png">Learn more</a><br></div>
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
<?php
		}
		elseif ($usertype === "admin") {
			?><script type="text/javascript">location.replace("../admin/homepageadmin.php");</script><?php
		}
		else{
			?><script type="text/javascript">location.replace("../index.php");</script><?php
		}
	}
	else{
		?><script type="text/javascript">location.replace("../index.php");</script><?php
	}
?>

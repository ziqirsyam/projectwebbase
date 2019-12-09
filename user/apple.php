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
<head>
	<title>Mi Store Apple Phone</title>
</head>
<body>
<header><!--top navigation-->
		<title>HomePage</title>
		<link rel="stylesheet" type="text/css" href="../css/branddeis.css">
		<script src="https://kit.fontawesome.com/a076d05399.js"></script>
	</header>
	
	<!--side navigation
	<nav>
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
	</section>-->
	<?php include 'usernavbar.php'?>
	<article>
			<p class="brand">Apple Product</p>
	<div class="flex-container2">
			<div class="iphone11"><p>iPhone 11</p><a href="cart.php?name=iphone 11">Buy</a><br></div>
			<div class="iphone11promax"><p>iPhone 11 Pro Max</p><a href="cart.php?name=iphone 11 pro max"><img src="">Buy</a><br></div>
			<div class="iphone10"><p>iPhone 10</p><a href="cart.php?name=iphone10"><img src="">Buy</a><br></div>
			<div class="iphone8plus"><p>iPhone 8 Plus</p><a  href="cart.php?name=iphone 8 plus"><img src="">Buy</a><br></div>
			<div class="iphone7plus"><p>iPhone 7 Plus</p><a href="cart.php?name=iphone 7 plus"><img src="">Buy</a><br></div>
	</div>
	</article>
	<div class="flex-container2">
		<?php
		    require "../database/conndb.php";
		    $sql = "SELECT * FROM item WHERE brand = 'apple'";
		    $result = mysql_query($sql, $connection);
		    
		?>
		<form method="POST" action="addcart.php">
			<table class="admin_detail">
				<input type="hidden" name="cuser" value="<?php echo @$data['username'];?>">
			    <thead>
			      <tr>
			        <th>No.</th>
			        <th>Product Name</th>
			        <th>Price</th>
			        <th>Brand</th>
			        <th>Details</th>
			        <th>Action</th>
			      </tr>
			    </thead>
			    <tbody>
			      <?php
			        $i = 1;
			        while ($row = mysql_fetch_array($result)) {
			        ?>
			        <tr>
			          <td><?php echo $i; ?></td>
			          <td><?php echo $row['product_name'];?><input type="hidden" name="cproduct_name" value="<?php echo $row['product_name'];?>"></td>
			          <td><?php echo $row['price'];?><input type="hidden" name="cprice" value="<?php echo $row['price'];?>"></td>
			          <td><?php echo $row['brand'];?><input type="hidden" name="cbrand" value="<?php echo $row['brand'];?>"></td>
			          <td><?php echo $row['details'];?><input type="hidden" name="cdetails" value="<?php echo $row['details'];?>"></td>
			          <td><input type="submit" name="button" value="Buy"></td>
			        </tr>
			        <?php
			        $i++;
			        }
			      ?>
			    </tbody>
			</table>
		</form>
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
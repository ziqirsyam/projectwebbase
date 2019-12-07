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
	<title>Mi Store Update Details</title>
	<script type="userdetails.js"></script>
	<link rel="stylesheet"type="text/css"href="../css/userdeis.css"/>
	<script type="text/javascript" src="../js/userdetails.js"></script>
</head>
<body>
	<header><!--top navigation-->
		<title>User Details</title>
		<link rel="stylesheet" type="text/css" href="indexdeis.css">
	</header>
	<nav>
	<!--side navigation-->
	<section>
		<nav>
	<ul id="navitop" class ="navitop">
		<div class="flex-container">
			
		    <li class="dropdown">
		     <a class="dropbtn">More</a>
		    <div class="dropdown-content">
		    <a href="userdetails.php">User Details</a>
			<a href="../sign-out.php">Sign Out</a>

		</div></li> 
		<li class="list"><a href="homepage.php">Mi Store</a></li>
  			<li class="list"><a href="apple.php">Apple</a></li>
  			<li class="list"><a href="samsung.php">Samsung</a></li>
  			<li class="list"><a href="sony.php">Sony</a></li>
  			<li class="list"><a href="xiaomi.php">Xiaomi</a></li>
  			<li class="list"><a href="oppo.php">Oppo</a></li>
  			<li class="list"><a href="cart.php">Cart</a></li>
  		<form action="/action_page.php">
  			<li class="Search"><a href="#about"><input type="text" name="search" placeholder="Search.."></a></li>
  		</form>
  				
  	</div>
	</ul>
		</nav>
	</section>
<article>	
<div class="form">

  
	<h1> Update Details</h1>
	<p>Please fill in this form</p><br>

		<form name="Userdetail" onreset="myAlertFunction()" action="updateuserdetails.php" method="post" onsubmit="return(validate());">		
		<input type="hidden" name="userID" value="<?php echo $userID;?>">
		<label for="fname"><b>First name</b></label>
		<input type="text"placeholder="First Name"name="firstname" value="<?php echo @$data['firstname']?>"/>
		<br>
		<label for="lname"><b>Last name</b></label>
		<input type="text"placeholder="Last Name"name="lastname" value="<?php echo @$data['lastname']?>" />
		<br>
		<label for="username"><b>Username</b></label>
		<input type="text"placehlder="username"name="username" value="<?php echo @$data['username']?>" readonly />
		<br>
		<label for="Nophone"><b>No.Phone</b></label>
		<input type="text"placehlder="Nophone"name="nophone" value="<?php echo @$data['nophone']?>" />
		<br>
		<label for="email"><b>Email</b></label>
		<input type="text"placeholder="email id"name="email" value="<?php echo @$data['email']?>" required />
		<br>
		<label for="psw"><b>Password</b></label>
		<input type="password"placeholder="password"name="password" value="<?php echo @$data['password']?>" required />
		<br>
		<label for="conpsw"><b>Confirm Password</b></label>
		<input type="password"placeholder="Confirm password"name="conpsw" value="<?php echo @$data['password']?>"required/>
		<br>
		<label for="Gender"><b>Gender:</b></label>
		<input class="gender" type="radio" name="gender" value="Male" <?php if (@$data['gender'] == 'Male') echo 'checked'?> > Male
		<input class="gender" type="radio" name="gender" value="Female" <?php if (@$data['gender'] == 'Female') echo 'checked'?> > Female<br>
		<br>
		<label for="address"><b>Address</b></label>
		<input type="text"placeholder="address"name="address" cols="40"rows="2" value="<?php echo @$data['address']?>" />
		<br>
		<label for="postcode"><b>Post Code</b></label>
		<input type="text"placeholder="Post Code"name="poskod" value="<?php echo @$data['poskod']?>" />
		<br>
		<label for="state"><b>State: </b></label>
		<select name="state">
		<option value="1">(Please select a State)</option>
		<option value="KUL" <?php if (@$data['state'] == 'KUL') echo 'selected'?> >Kuala Lumpur</option>
		<option value="LBN" <?php if (@$data['state'] == 'LBN') echo 'selected'?> >Labuan</option>
		<option value="PJY" <?php if (@$data['state'] == 'PJY') echo 'selected'?> >Putrajaya</option>
		<option value="JHR" <?php if (@$data['state'] == 'JHR') echo 'selected'?> >Johor</option>
		<option value="KDH" <?php if (@$data['state'] == 'KDH') echo 'selected'?> >Kedah</option>
		<option value="KTN" <?php if (@$data['state'] == 'KTN') echo 'selected'?> >Kelantan</option>
		<option value="MLK" <?php if (@$data['state'] == 'MLK') echo 'selected'?> >Melaka</option>
		<option value="NSN" <?php if (@$data['state'] == 'NSN') echo 'selected'?> >N.Sembilan</option>
		<option value="PHG" <?php if (@$data['state'] == 'PHG') echo 'selected'?> >Pahang</option>
		<option value="PRK" <?php if (@$data['state'] == 'PRK') echo 'selected'?> >Perak</option>
		<option value="PLS" <?php if (@$data['state'] == 'PLS') echo 'selected'?> >Perlis</option>
		<option value="PNG" <?php if (@$data['state'] == 'PNG') echo 'selected'?> >P.Pinang</option>
		<option value="SBH" <?php if (@$data['state'] == 'SBH') echo 'selected'?> >Sabah</option>
		<option value="SWK" <?php if (@$data['state'] == 'SWK') echo 'selected'?> >Sarawak</option>
		<option value="SGR" <?php if (@$data['state'] == 'SGR') echo 'selected'?> >Selangor</option>
		<option value="TRG" <?php if (@$data['state'] == 'TRG') echo 'selected'?> >Terengganu</option>
		</select>
		<br>
		<label for="country"><b>Country</b></label>
		<input type="text"placeholder="Country"name="country" value="<?php echo @$data['country']?>" />
		<br>
		<br><br>

		<div class="btnupdate">
				
				<button type="reset" name="resetbtn" class="button"value="reset the form">Clear</button>

				<button type="submit"name="submit"class="button"value="submited">Update</button><br><br>

				<button class="btnuserpage"><a href="userdetails.php">Cancel</a></button>
			
		</div>
	</form>
</div>
</article>
<footer>Mistore, 2019</footer>
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
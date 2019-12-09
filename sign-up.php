<!DOCTYPE html>
<html lang="eng">
<header>
	<script src="https://kit.fontawesome.com/a076d05399.js"></script>
	<meta charset="utf-8">  
	<title>Sign-Up</title>
	<link rel="stylesheet" type="text/css" href="css/sign-Up.css">
	<script type="text/javascript" src="signup.js"></script>

</header>
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
<body onload='document.Signup.nophone.focus()'>
	<?php include 'generalnavbar.php'?>
	
	<div class="form">
  
	<h1> Sign Up</h1>
	<p>Please fill in this form</p><br>
		<form name="Signup" onreset="myAlertFunction()" onsubmit="return(validate());" method="post" action="actionsignup.php">
			<input type="hidden" name="access" value="user">
			<div class="user_name">		
				<input type="text" name="firstname" required/>
				<label for="firstname" class="label_name">
					<span class="content_name">First Name</span>
				</label>
			</div>
			<br>
			<div class="user_lname">
				<input type="text" name="lastname" required />
				<label for="lastname" class="label_lname">
					<span class="content_lname">Last Name</span>
				</label>
			</div>
			<br>
			<div class="user_uname">
				<input type="text" name="username" required/>
				<label for="username" class="label_uname">
					<span class="content_uname">Username</span>
				</label>
			</div>
			<br>
			<div class="user_no">
				<input type="text" name="nophone" onload='document.Signup.nophone.focus()'required/>
				<label for="nophone" class="label_no">
					<span class="content_no">Phone Number</span>
				</label>
			</div>	
			<br>	
			<div class="user_email">
				<input type="text" name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" title="Must be in proper email format (example: superclap09@suju.sm)" onfocus="myFunction(this)" required/>
				<label for="email" class="label_email">
					<span class="content_email">Email</span>
				</label>
			</div>	
			<br>
			<div class="user_psw">
				<input type="password" name="password" id="password" pattern="^(?=.*[a-z])(?=.*[0-9])(?=.*[^\w\*])[^\s]{6,}$" title="Must contain at least 6 digits, one number, one uppercase and lowercase letter and no space allowed" onfocus="myFunction(this)" required />
				<label for="password" class="label_psw">
					<span class="content_psw">Password</span>
				</label>
			</div>
			<br>
			<div class="user_conpsw">
				<input type="password" name="conpsw" id="ConfirmPassword" onfocus="myFunction(this)" required/>
				<label for="conpsw" class="label_conpsw">
					<span class="content_conpsw">Confirm Password</span>
				</label>
			</div>
			<br>	
			<div class="user_s" >
				<label class="radiobut" for="Gender"><b>Gender:</b>
					<input class="gender" type="radio"name="genders" value="Male" required> Male
					<span class="checkmark"></span>
					<input class="gender"type="radio"name="genders"value="Female" required> Female
					<span class="checkmark"></span>
					<br>
					<br>
				</label>
				<label for="state"><b>State: </b></label>
				<div class="custom_select">
					<select name="state">
						<option value="">(Please select a State)</option>
						<option value="KUALA LUMPUR">Kuala Lumpur</option>
						<option value="LABUAN">Labuan</option>
						<option value="PUTRAJAYA">Putrajaya</option>
						<option value="JOHOR">Johor</option>
						<option value="KEDAH">Kedah</option>
						<option value="KELANTAN">Kelantan</option>
						<option value="MELAKA">Melaka</option>
						<option value="N.SEMBILAN">N.Sembilan</option>
						<option value="PAHANG">Pahang</option>
						<option value="PERAK">Perak</option>
						<option value="PELIS">Perlis</option>
						<option value="P.PINANG">P.Pinang</option>
						<option value="SABAH">Sabah</option>
						<option value="SARAWAK">Sarawak</option>
						<option value="SELANGOR">Selangor</option>
						<option value="TERANGGANU">Terengganu</option>
					</select>
				</div>
			</div>
			<p>
	        	<textarea name="terms" cols="40" rows="2"readonly="readonly">TERMS AND CONDITIONS...</textarea>
	        </p>
	        <div class="user_a">
				<label><input type="checkbox"checked name="accept">I ACCEPT THE ABOVE TERM AND CONDITIONS</label>
			</div>
			<div class="clearfix">
				<button class="clear" type="reset" name="resetbtn" class="button"value="reset the form">Clear</button>
				<button class="reg" type="submit"name="submit"class="button"value="submited" onclick="phonenumber(document.Signup.nophone)">Register<a href="userpage.html"></button></a>
		    </div>
		    	<p class="message">Already Registered? <a href="index.html">Homepage</a></p>
	    </form>
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

<?php include 'footer.php'?>
</body>
</html>
<!--
	References
	https://www.w3schools.com/howto/howto_css_signup_form.asp
	https://www.w3schools.com/howto/tryit.asp?filename=tryhow_css_signup_form
	https://www.w3schools.com/howto/howto_js_password_validation.asp
-->

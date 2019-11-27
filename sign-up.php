<!DOCTYPE html>
<html lang="eng>
<head>
	<meta charset="utf-8">  
	<title>Sign-Up</title>
</head>
<body>
	<?php include 'generalnavbar.php'?>
	
	<div class="form">
  
	<h1> Sign Up</h1>
	<p>Please fill in this form</p><br>
		<form action="">		
		<label for="fname"><b>First name</b></label>
		<input type="text"placeholder="First Name"name="fname"/>
		<br>
		<label for="lname"><b>Last name</b></label>
		<input type="text"placeholder="Last Name"name="lname"/>
		<br>
		<label for="username"><b>Username</b></label>
		<input type="text"placehlder="username"name="uname"/>
		<br>
		<label for="email"><b>Email</b></label>
		<input type="text"placeholder="email id"name="email"required />
		<br>
		<label for="psw"><b>Password</b></label>
		<input type="password"placeholder="password"name="psw" required />
		<br>
		<label for="conpsw"><b>Confirm Password</b></label>
		<input type="password"placeholder="Confirm password"name="conpsw"required/>
		<br>
		<label for="Gender"><b>Gender:</b></label>
		<input class="gender" type="radio"name="genders" value="Male"required> Male
		<input class="gender"type="radio"name="genders"value="Female"required> Female<br>
		<br>
		<label for="state"><b>State: </b></label>
		<select name="state">
		<option value="1">(Please select a State)</option>
		<option value="KUL">Kuala Lumpur</option>
		<option value="LBN">Labuan</option>
		<option value="PJY">Putrajaya</option>
		<option value="JHR">Johor</option>
		<option value="KDH">Kedah</option>
		<option value="KTN">Kelantan</option>
		<option value="MLK">Melaka</option>
		<option value="NSN">N.Sembilan</option>
		<option value="PHG">Pahang</option>
		<option value="PRK">Perak</option>
		<option value="PLS">Perlis</option>
		<option value="PNG">P.Pinang</option>
		<option value="SBH">Sabah</option>
		<option value="SWK">Sarawak</option>
		<option value="SGR">Selangor</option>
		<option value="TRG">Terengganu</option>
		</select>
		<br><br>
		<p>
        <textarea name="terms" cols="40" rows="2"
        readonly="readonly">TERMS AND CONDITIONS...</textarea>
        </p>
		<label><input type="checkbox"checked name="accept">I ACCEPT THE ABOVE TERM AND CONDITIONS</label>

		<div class="clearfix">
			<button type="reset" name="resetbtn" class="button"value="reset the form">Clear</button>
			<button type="submit"name="submit"class="button"value="submited">Register<a href="userpage.html"></button></a>

		<p class="message">Already Registered? <a href="index.html">Homepage</a></p>

	    </div>
	    </form>

	   </div>
   </div>

<?php include 'footer.php'?>
</body>
</html>
<!--
	References
	https://www.w3schools.com/howto/howto_css_signup_form.asp
	https://www.w3schools.com/howto/tryit.asp?filename=tryhow_css_signup_form
	https://www.w3schools.com/howto/howto_js_password_validation.asp
-->

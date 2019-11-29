<!DOCTYPE html>
<html lang="eng">

<head>
	<meta charset="utf-8">  
	<title>Sign-Up</title>
	<script type="text/javascript" src="signupform.js"></script>
</head>

<body>
	<?php include 'generalnavbar.php'?>

	<div class="form">

		<h1> Sign Up</h1>
		<p>Please fill in this form</p><br>

		<form action="" name="myform" id="myform" onreset="myAlertFunction()" onsubmit="return(validate());" >
			<fieldset>
				
				<table cellspacing="2" cellpadding="10">
					<tr>
						<td colspan="2">Personal Information</td>
					</tr>

					<tr>
						<td align="right" label for="Fname">First Name</label></td>
    					<td><input type="text" name="FName" id="FName"pattern="^[a-zA-Z]+$" title="Only accept alphabet (either in uppercase, lowercase or mix)" onfocus="myFunction(this)" /></td>
					</tr>
			
					<tr>
						<td align="right" label for="Lname">Last Name</label></td>
    					<td><input type="text" name="LName" id="LName" pattern="^[a-zA-Z]+$" title="Only accept alphabet (either in uppercase, lowercase or mix)" onfocus="myFunction(this)"  /></td>
					</tr>

					<tr>
						<td align="right" label for="Email">Email</label></td>
						<td><input type="email" id="Email" name="Emailaddress" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" title="Must be in proper email format (example: superclap09@suju.sm)" onfocus="myFunction(this)" /></td>
					</tr>

					<tr>
						<td align="right" label for="password">Password:</label></td>
  						<td><input type=password id="password" name="pass" pattern="^(?=.*[a-z])(?=.*[0-9])(?=.*[^\w\*])[^\s]{6,}$" title="Must contain at least 6 digits, one number, one uppercase and lowercase letter and no space allowed" onfocus="myFunction(this)" required /></td>
					</tr>

					<tr>
						<td align="right" label for="ConfirmPassword">Confirm password</td>
						<td><input type="password" name="confirmpassword" id="ConfirmPassword" title="Must be the same password as above" onfocus="myFunction(this)"/></td>
					</tr>
				
					<tr>
						<td align="right">Gender</td>
						<td><input name="gender" type="radio" id="gender" value="male" required />
     						<label for="gm">Male</label>
     						<input name="gender" type="radio" id="gender" value="female" required />
     						<label for="gf">Female</label></td>
					</tr>

					<tr>
						<td align="right">State</td>
						<td>
							<select name="State" id="state" onchange="selectedState()">
								<option value="-1" selected>[choose yours]</option>
								<option value="JOHOR">JOHOR</option>
								<option value="KEDAH">KEDAH</option>
								<option value="KELANTAN">KELANTAN</option>
								<option value="MALACCA">MALACCA</option>
								<option value="NEGERI SEMBILAN">NEGERI SEMBILAN</option>
								<option value="PAHANG">PAHANG</option>
								<option value="PERAK">PERAK</option>
								<option value="PERLIS">PERLIS</option>
								<option value="PENANG">PENANG</option>
								<option value="SABAH">SABAH</option>
								<option value="SARAWAK">SARAWAK</option>
								<option value="SELANGOR">SELANGOR</option>
								<option value="TERENGGANU">TERENGGANU</option>
							</select>
						</td>
					</tr>
				</table>
			</fieldset>
			<br/>
			<textarea name="terms" cols="53" rows="4" readonly="readonly">TERMS AND CONDITIONS...</textarea><br/><br/>

			<input type="checkbox" name="Terms" value="acceptance" required /><mark>I accept the above Terms and Conditions</mark><br/><br/>

			<div class="clearfix">
				
				<button type="reset" name="resetbtn" class="button"value="reset the form">Clear</button>
				<p class="message">Already Registered? <a href="index.html">Homepage</a></p>
		    </div>
		</form>
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

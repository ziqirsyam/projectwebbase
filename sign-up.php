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
						<td align="right" label for="Fname"><b>First Name</b></label></td>
    					<td><input type="text" name="FName" id="FName"pattern="^[a-zA-Z]+$" title="Only accept alphabet (either in uppercase, lowercase or mix)" onfocus="myFunction(this)" /></td>
					</tr>
			
					<tr>
						<td align="right" label for="Lname"><b>Last Name</b></label></td>
    					<td><input type="text" name="LName" id="LName" pattern="^[a-zA-Z]+$" title="Only accept alphabet (either in uppercase, lowercase or mix)" onfocus="myFunction(this)"  /></td>
					</tr>

					<tr>
						<td align="right" label for="username"><b>Username</b></label></td>
						<td><input type="text" name="uname"/></td>
					</tr>

					<tr>
						<td align="right" label for="Nophone"><b>No.Phone</b></label></td>	
						<td><input type="tel" placeholder="01x-xxxxxxx" name="nophone" pattern="^\d{3}-\d{7}$"/><td>
					</tr>
		
					<tr>
						<td align="right" label for="Email"><b>Email</b></label></td>
						<td><input type="email" id="Email" name="Emailaddress" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" title="Must be in proper email format (example: superclap09@suju.sm)" onfocus="myFunction(this)" /></td>
					</tr>

					<tr>
						<td align="right" label for="password"><b>Password</b></label></td>
  						<td><input type=password id="password" name="pass" pattern="^(?=.*[a-z])(?=.*[0-9])(?=.*[^\w\*])[^\s]{6,}$" title="Must contain at least 6 digits, one number, one uppercase and lowercase letter and no space allowed" onfocus="myFunction(this)" required /></td>
					</tr>

					<tr>
						<td align="right" label for="ConfirmPassword"><b>Confirm password</b></label>
						<td><input type="password" name="confirmpassword" id="ConfirmPassword" title="Must be the same password as above" onfocus="myFunction(this)"/></td>
					</tr>
				
					<tr>
						<td align="right"><b>Gender</b></td>
						<td><input name="gender" type="radio" id="gender" value="male" required />
     						<label for="gm">Male</label>
     						<input name="gender" type="radio" id="gender" value="female" required />
     						<label for="gf">Female</label></td>
					</tr>

					<tr>
						<td align="right" label for="address"><b>Address</b></label></td>
						<td><input type="text" name="address" cols="40"rows="2"/></td>
					</tr>

					<tr>
						<td align="right"label for="postcode"><b>Post Code</b></label></td>
						<td><input type="text" placeholder="xxxxx" name="postcode" pattern="[0-9]{5}"/></td>
					</tr>

					<tr>
						<td align="right"><b>State</b></td>
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
			<textarea name="terms" cols="98" rows="10" readonly="readonly">TERMS AND CONDITIONS...

CONDITIONS OF USE
Welcome to our online store! MI SHOP and its associates provide their services to you subject to the following conditions. If you visit or shop within this website, you accept these conditions. Please read them carefully. ​

LIMITATION OF LIABILITY
This disclaimer of liability applies to any damages or injury by any failure of performance, error, omission, deletion, defect, delay of operation or transmission, computer virus, communication line failure, theft or destruction or unauthorized access to, alteration of, or use of record, whether for breach of contract, tortious behaviour, negligence, or under any other cause of action. Customer specifically acknowledges the service is not liable for the defamatory, offensive or illegal conduct of other customers or third parties and that the risk of injury from the foregoing rests entirely with customers.
Neither the service nor any of its agents, affiliates or content providers shall be liable for any direct, indirect, incidental, special or consequential damages arising out of use of the service or inability to gain access to or use the service or out of any breach of any warranty. Customer hereby acknowledge that the provisions of this section shall apply to all content on the service.

PRODUCT INFORMATION
MI SHOP and its associates attempt to be as accurate as possible. However, MI SHOP does not warrant that product descriptions or other content of this site is accurate, complete, reliable, current, or error-free. If a product offered by MI SHOP itself is not as described, your sole remedy is to return it in unused condition. Most MI SHOP products displayed at the Site are available in select MI SHOP stores while supplies last. In some cases, merchandise displayed for sale at the Site may not be available in MI SHOP. The prices displayed at the Site are quoted in MYR (Malaysian Ringgit) and are valid and effective only in the Malaysia. 

ELECTRONIC COMMUNICATIONS
When you visit MI SHOP or send e-mails to us, you are communicating with us electronically. You consent to receive communications from us electronically. We will communicate with you by e-mail or by posting notices on this site. You agree that all agreements, notices, disclosures and other communications that we provide to you electronically satisfy any legal requirement that such communications be in writing.

COPYRIGHT
All content included on this site, such as text, graphics, logos, button icons, images, audio clips, digital downloads, data compilations, and software, is the property of MI SHOP or its content suppliers and protected by international copyright laws. The compilation of all content on this site is the exclusive property of MI SHOP, with copyright authorship for this collection by MI SHOP, and protected by international copyright laws.

YOUR MEMBERSHIP ACCOUNT
If you use this site, you are responsible for maintaining the confidentiality of your account and password and for restricting access to your computer, and you agree to accept responsibility for all activities that occur under your account or password. If you are under 18, you may use our website only with involvement of a parent or guardian. MI SHOP and its associates reserve the right to refuse service, terminate accounts, remove or edit content, or cancel orders in their sole discretion.

REVIEWS, COMMENTS, EMAILS, AND OTHER CONTENT
Visitors may post reviews, comments, and other content: and submit suggestions, ideas, comments, questions, or other information, so long as the content is not illegal, obscene, threatening, defamatory, invasive of privacy, infringing of intellectual property rights, or otherwise injurious to third parties or objectionable and does not consist of or contain software viruses, political campaigning, commercial solicitation, chain letters, mass mailings, or any form of "spam." You may not use a false e-mail address, impersonate any person or entity, or otherwise mislead as to the origin of a card or other content. MI SHOP reserves the right (but not the obligation) to remove or edit such content, but does not regularly review posted content. If you do post content or submit material, and unless we indicate otherwise, you grant MI SHOP and its associates a nonexclusive, royalty-free, perpetual, irrevocable, and fully sublicensable right to use, reproduce, modify, adapt, publish, translate, create derivative works from, distribute, and display such content throughout the world in any media. You grant MI SHOP and its associates and sublicensees the right to use the name that you submit in connection with such content, if they choose. You represent and warrant that you own or otherwise control all of the rights to the content that you post: that the content is accurate: that use of the content you supply does not violate this policy and will not cause injury to any person or entity: and that you will indemnify MI SHOP or its associates for all claims resulting from content you supply. MI SHOP has the right but not the obligation to monitor and edit or remove any activity or content. MI SHOP takes no responsibility and assumes no liability for any content posted by you or any third party.

RISK OF LOSS
All items purchased from MI SHOP are made pursuant to a shipment contract. This basically means that the risk of loss and title for such items pass to you upon our delivery to the carrier.

QUESTIONS:
Questions regarding our Conditions of Usage, Privacy Policy, or other policy related material can be directed to our support staff by clicking on the "Contact Us" link in the side menu. Or you can email us at: info@MYCOMPANY.com

			</textarea><br/><br/>

			<input type="checkbox" name="Terms" value="acceptT&C" required /><mark>I accept the above Terms and Conditions</mark><br/><br/>

			<div class="clearfix">
				<button type="submit"name="submit"class="button"value="submited">Register<a href="userpage.html"></button></a>
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

/* Form validation code will come here. */
function validate()
{
	if( document.myform.FName.value == "" )
	{
		alert( "Please provide your First Name!" );
		document.myform.FName.focus() ;
		return false;
	}

	if( document.myform.LName.value == "" )
	{
		alert( "Please provide your Last Name!" );
		document.myform.LName.focus() ;
		return false;
	}

	if( document.myform.Emailaddress.value == "" )
	{
		alert( "Please provide your Email!" );
		document.myform.Emailaddress.focus() ;
		return false;
	}

	var password = document.getElementById("password").value;
    var confirmPassword = document.getElementById("ConfirmPassword").value;
    if (password != confirmPassword) {
        alert("Passwords does not match.");
        return false;
    }

	if( document.myform.State.value == "-1" )
	{
		alert( "Please provide your State!" );
		document.myform.State.focus() ;
		return false;
	}
	
 alert("The form was successfully submitted")
 return( true );
}

function myAlertFunction() {
  	alert("The form was reset!");
}

function myFunction(x) {
  x.style.background = "coral";
}

function selectedState() {
  prefer = document.myform.state.value;
  alert("You have select " + prefer + " as your state! If wrong select again.");
}

/*
	Reference
	https://www.w3schools.com/js/default.asp
*/

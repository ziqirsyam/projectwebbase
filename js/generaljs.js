/*
	Reference
	https://www.w3schools.com/js/default.asp
*/

function validate()
{
	if( document.userform.username.value == "" )
	{
		alert( "Please provide your Username!" );
		document.userform.username.focus() ;
		return false;
	}

	if( document.userform.password.value == "" )
	{
		alert( "Please provide your Password!" );
		document.userform.Emailaddress.focus() ;
		return false;
	}

 alert("The form was successfully submitted")
 return( true );
}

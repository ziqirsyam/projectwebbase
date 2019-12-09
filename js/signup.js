// Form validation code will come here.
function validate()
{
  if( document.Signup.firstname.value == "" )
  {
    alert( "Please provide your First Name! in uppercase, lowercase or mix only" );
    document.Signup.firstname.focus() ;
    return false;
  }

  if( document.Signup.lastname.value == "" )
  {
    alert( "Please provide your Last Name! in uppercase, lowercase or mix only" );
    document.myform.LName.focus() ;
    return false;
  }

  if( document.Signup.username.value == "" )
  {
    alert( "Please provide your username!" );
    document.Signup.username.focus() ;
    return false;
  }

  if( document.Signup.nophone.value == "" )
  {
    alert( "Please provide your phone number!" );
    document.Signup.nophone.focus() ;
    return false;
  }

  if( document.Signup.email.value == "" )
  {
    alert( "Please provide your Email and must be in proper format!" );
    document.Signup.email.focus() ;
    return false;
  }

  var password = document.getElementById("password").value;
    var conpsw = document.getElementById("ConfirmPassword").value;
    if (password != conpsw) {
        alert("Passwords does not match.");
        return false;
    }

  if( document.Signup.state.value == "-1" )
  {
    alert( "Please provide your State!" );
    document.Signup.state.focus() ;
    return false;
  }
  
 alert("You have successfully registered!")
 return( true );
}

function validateFName() {
  var x = document.myform.getElementById("FName").pattern;
}

function validateFName() {
  var x = document.myform.getElementById("LName").pattern;
}

function validateEmail() {
  var x = document.myform.getElementById("Email").pattern;
}

function validategender(){
  var x = document.myform.getElementById("gender").required;
}

function validateTerms(){
  var x = document.myform.getElementById("Terms").required;
}

function myAlertFunction() {
    alert("The form was reset!");
}

function myFunction(x) {
  x.style.background = "coral";
}

function phonenumber(inputtxt)
{
  var phoneno = /^\d{10}$/;
  if(inputtxt.value.match(phoneno))
  {
      return true;
  }
  else
  {
     alert("Not a valid Phone Number");
     return false;
  }
}

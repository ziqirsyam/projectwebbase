// Form validation code will come here.
function validate()
{
  if( document.Userdetail.firstname.value == "" )
  {
    alert( "Please provide your First Name! in uppercase, lowercase or mix only" );
    document.Userdetail.firstname.focus() ;
    return false;
  }

  if( document.Userdetail.lastname.value == "" )
  {
    alert( "Please provide your Last Name! in uppercase, lowercase or mix only" );
    document.Userdetail.lastname.focus() ;
    return false;
  }

  if( document.Userdetail.username.value == "" )
  {
    alert( "Please provide your username!" );
    document.Userdetail.username.focus() ;
    return false;
  }

  if( document.Userdetail.nophone.value == "" )
  {
    alert( "Please provide your phone number!" );
    document.Userdetail.nophone.focus() ;
    return false;
  }

  if( document.Userdetail.email.value == "" )
  {
    alert( "Please provide your Email and must be in proper format!" );
    document.Userdetail.email.focus() ;
    return false;
  }

  var password = document.getElementById("password").value;
    var conpsw = document.getElementById("ConfirmPassword").value;
    if (password != conpsw) {
        alert("Passwords does not match.");
        return false;
    }

  if( document.Userdetail.address.value == "" )
  {
    alert( "Please provide your Address!" );
    document.Userdetail.address.focus() ;
    return false;
  }

  if( document.Userdetail.poskod.value == "" )
  {
    alert( "Please provide your Postcode!" );
    document.Userdetail.poskod.focus() ;
    return false;
  }

  if( document.Userdetail.state.value == "-1" )
  {
    alert( "Please provide your State!" );
    document.Userdetail.state.focus() ;
    return false;
  }

  if( document.Userdetail.country.value == "" )
  {
    alert( "Please provide your Country!" );
    document.Userdetail.country.focus() ;
    return false;
  }
  
 alert("The form have successfully submitted!")
 return( true );
}

function validateFName() {
  var x = document.Userdetail.getElementById("FName").pattern;
}

function validateLName() {
  var x = document.Userdetail.getElementById("LName").pattern;
}

function validateEmail() {
  var x = document.Userdetail.getElementById("Email").pattern;
}

function validategender(){
  var x = document.Userdetail.getElementById("gender").required;
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

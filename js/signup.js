function validate()
{
  if( document.Signup.firstname.value == "" )
  {
    alert( "Please provide your first name!" );
    document.Signup.firstname.focus() ;
    return false;
  }

  if (!/^[a-zA-Z]*$/g.test(document.Signup.firstname.value)) 
  {
        alert("Invalid characters for the first name");
        document.Signup.firstname.focus();
        return false;
  }

  if( document.Signup.lastname.value == "" )
  {
    alert( "Please provide your last name!" );
    document.Signup.lastname.focus() ;
    return false;
  }

  if (!/^[a-zA-Z]*$/g.test(document.Signup.lastname.value)) 
  {
    alert("Invalid characters for the last name");
    document.Signup.lastname.focus();
    return false;
  }

  if( document.Signup.username.value == "" )
  {
    alert( "Please provide your username!" );
    document.Signup.username.focus() ;
    return false;
  }

  if (!/^[a-zA-Z]*$/g.test(document.Signup.username.value)) 
  {
    alert("Invalid characters for the username");
    document.Signup.username.focus();
    return false;
  }

  if( document.Signup.nophone.value == "" )
  {
    alert( "Please provide your phone number!" );
    document.Signup.nophone.focus() ;
    return false;
  }

  if (!/^\d{11}$/g.test(document.Signup.nophone.value)) 
  {
        alert("Invalid format of phone number");
        document.Signup.nophone.focus();
        return false;
  }

  if( document.Signup.email.value == "" )
  {
    alert( "Please provide your email address!" );
    document.Signup.email.focus() ;
    return false;
  }
  if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(document.Signup.email.value))
  {
    alert("You have entered an invalid email address!");
    document.Signup.email.focus();
    return (false)
  }

  if( document.Signup.password.value == "" )
  {
    alert( "Please provide your password!" );
    document.Signup.password.focus() ;
    return false;
  }

  if(document.Signup.password.value != "" && document.Signup.password.value == document.Signup.conpsw.value)
  {
   if(document.Userdetail.password.value.length < 6) {
        alert("Password must contain at least six characters!");
        document.Signup.password.focus();
        return false;
      }
      re = /[0-9]/;
      if(!re.test(document.Signup.password.value)) {
        alert("password must contain at least one number (0-9)!");
        document.Signup.password.focus();
        return false;
      }
      re = /[a-z]/;
      if(!re.test(document.Signup.password.value)) {
        alert("password must contain at least one lowercase letter (a-z)!");
        document.Signup.password.focus();
        return false;
      }
      re = /[A-Z]/;
      if(!re.test(document.Signup.password.value)) {
        alert("password must contain at least one uppercase letter (A-Z)!");
        document.Signup.password.focus();
        return false;
      }
       re = /[!@#|$%|^&]/;
      if(!re.test(document.Signup.password.value)) {
        alert("password must contain at least one special character!");
        document.Signup.password.focus();
        return false;
      }
  }
     else {
      alert("Please check that you've entered and confirmed your password!");
      document.Signup.password.focus();
      return false;
      
  }

  if( document.Signup.genders.value =="")
  {
    alert( "Choose your gender" );
    document.Signup.genders.focus();
    return false;
  }

  if( document.Signup.state.value == "-1" )
  {
    alert( "Please select your State!" );
    document.Signup.state.focus();
    return false;
  }

 alert("You have successfully register")
 return( true );
}

function myAlertFunction() {
    alert("The form was reset!");
}

function myFunction(x) {
  x.style.background = "coral";
}

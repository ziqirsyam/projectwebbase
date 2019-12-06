function validate()
{
  if( document.Userdetail.fname.value == "" )
  {
    alert( "Please provide your first name!" );
    document.Userdetail.fname.focus() ;
    return false;
  }

  if (!/^[a-zA-Z]*$/g.test(document.Userdetail.fname.value)) 
  {
        alert("Invalid characters for the fisrt name");
        document.Userdetail.fname.focus();
        return false;
  }

  if( document.Userdetail.lname.value == "" )
  {
    alert( "Please provide your last name!" );
    document.Userdetail.lname.focus() ;
    return false;
  }

  if (!/^[a-zA-Z]*$/g.test(document.Userdetail.lname.value)) {
    alert("Invalid characters for the last name");
    document.Userdetail.lname.focus();
    return false;
  }

  if( document.Userdetail.uname.value == "" )
  {
    alert( "Please provide your username!" );
    document.Userdetail.uname.focus() ;
    return false;
  }

  if (!/^[a-zA-Z]*$/g.test(document.Userdetail.uname.value)) 
  {
    alert("Invalid characters for the username");
    document.Userdetail.uname.focus();
    return false;
  }

  if( document.Userdetail.nophone.value == "" )
  {
    alert( "Please provide your phone number!" );
    document.Userdetail.nophone.focus() ;
    return false;
  }

  if (!/^\d{11}$/g.test(document.Userdetail.nophone.value)) 
  {
        alert("Invalid format of phone number");
        document.Userdetail.nophone.focus();
        return false;
  }

  if( document.Userdetail.email.value == "" )
  {
    alert( "Please provide your email address!" );
    document.Userdetail.email.focus() ;
    return false;
  }
  if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(document.Userdetail.email.value))
  {
    alert("You have entered an invalid email address!");
    document.Userdetail.email.focus();
    return (false)
  }

  if( document.Userdetail.psw.value == "" )
  {
    alert( "Please provide your password!" );
    document.Userdetail.psw.focus() ;
    return false;
  }

  if(document.Userdetail.psw.value != "" && document.Userdetail.psw.value == document.Userdetail.conpsw.value)
  {
 	 if(document.Userdetail.psw.value.length < 6) {
        alert("Password must contain at least six characters!");
        document.Userdetail.psw.focus();
        return false;
      }
      re = /[0-9]/;
      if(!re.test(document.Userdetail.psw.value)) {
        alert("password must contain at least one number (0-9)!");
        document.Userdetail.psw.focus();
        return false;
      }
      re = /[a-z]/;
      if(!re.test(document.Userdetail.psw.value)) {
        alert("password must contain at least one lowercase letter (a-z)!");
        document.Userdetail.psw.focus();
        return false;
      }
      re = /[A-Z]/;
      if(!re.test(document.Userdetail.psw.value)) {
        alert("password must contain at least one uppercase letter (A-Z)!");
        document.Userdetail.psw.focus();
        return false;
      }
       re = /[!@#|$%|^&]/;
      if(!re.test(document.Userdetail.psw.value)) {
        alert("password must contain at least one special character!");
        document.Userdetail.psw.focus();
        return false;
      }
  }
     else {
      alert("Please check that you've entered and confirmed your password!");
      document.Userdetail.psw.focus();
      return false;
      
  }

  if( document.Userdetail.gender.value =="")
  {
    alert( "Choose your gender" );
    document.Userdetail.gender.focus();
    return false;
  }

  if( document.Userdetail.address.value == "" )
  {
    alert( "Please provide your Address!" );
    document.Userdetail.address.focus() ;
    return false;
  }

  if( document.Userdetail.postcode.value == "" )
  {
    alert( "Please provide your Postcode!" );
    document.Userdetail.postcode.focus() ;
    return false;
  }

  if( document.Userdetail.state.value == "-1" )
  {
    alert( "Please select your State!" );
    document.Userdetail.state.focus();
    return false;
  }

  if( document.Userdetail.country.value == "" )
  {
    alert( "Please select your State!" );
    document.Userdetail.country.focus();
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

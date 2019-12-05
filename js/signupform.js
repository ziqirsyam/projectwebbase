function validate()
{
if( document.myForm.name.value == "" )
{
alert( "Please provide your first name!" );
document.myForm.name.focus() ;
return false;
}
 if (!/^[a-zA-Z]*$/g.test(document.myForm.name.value)) {
        alert("Invalid characters for the fisrt name");
        document.myForm.name.focus();
        return false;
    }
 if( document.myForm.lname.value == "" )
{
alert( "Please provide your last name!" );
document.myForm.lname.focus() ;
return false;
}
 if (!/^[a-zA-Z]*$/g.test(document.myForm.lname.value)) {
        alert("Invalid characters for the last name");
        document.myForm.lname.focus();
        return false;
    }

  if( document.myForm.uname.value == "" )
{
alert( "Please provide your last name!" );
document.myForm.uname.focus() ;
return false;
}
 if (!/^[a-zA-Z]*$/g.test(document.myForm.uname.value)) {
        alert("Invalid characters for the username");
        document.myForm.uname.focus();
        return false;
    }

 if (!/^\d{11}$/g.test(document.myForm.nophone.value)) {
        alert("Invalid format of phone number");
        document.myForm.nophone.focus();
        return false;
    }


  if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(document.myForm.email.value))
  {
    
  }
  else{
    alert("You have entered an invalid email address!");
    document.myForm.email.focus();
    return (false)
}

if( document.myForm.psw.value == "" )
{
alert( "Please provide your password!" );
document.myForm.psw.focus() ;
return false;
}
 if(document.myForm.psw.value != "" && document.myForm.psw.value == document.myForm.conpsw.value){
 	 if(document.myForm.psw.value.length < 6) {
        alert("Password must contain at least six characters!");
        document.myForm.psw.focus();
        return false;
      }
      re = /[0-9]/;
      if(!re.test(document.myForm.psw.value)) {
        alert("password must contain at least one number (0-9)!");
        document.myForm.psw.focus();
        return false;
      }
      re = /[a-z]/;
      if(!re.test(document.myForm.psw.value)) {
        alert("password must contain at least one lowercase letter (a-z)!");
        document.myForm.psw.focus();
        return false;
      }
      re = /[A-Z]/;
      if(!re.test(document.myForm.psw.value)) {
        alert("password must contain at least one uppercase letter (A-Z)!");
        document.myForm.psw.focus();
        return false;
      }
       re = /[!@#|$%|^&]/;
      if(!re.test(document.myForm.psw.value)) {
        alert("password must contain at least one special character!");
        document.myForm.psw.focus();
        return false;
      }
  }
     else {
      alert("Please check that you've entered and confirmed your password!");
      document.myForm.psw.focus();
      return false;
      
 }

if( document.myForm.gender.value =="")
{
alert( "Choose your gender" );
document.myForm.gender.focus();
return false;
}


if( document.myForm.state.value == "-1" )
{
alert( "Please select your State!" );
document.myForm.State.focus();
return false;
}

 if(!this.myForm.accept.checked)
{
    alert('You must agree to the terms first.');
    return false;
}
  }

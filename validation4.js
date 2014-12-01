function CheckRegister3() 
{

  if(document.RegForm.fname.value=="")
   {
      alert('Enter First Name, please!');
	 // document.getElementById("err_div").innerHTML = "Please Enter your name";
      document.RegForm.fname.focus();
	  
      return false;
   }
   if(document.RegForm.lastname.value=="")
   {
      alert('Enter Last Name, please!');
	 // document.getElementById("err_div").innerHTML = "Please Enter your name";
      document.RegForm.lastname.focus();
	  
      return false;
   }
  
   if(document.RegForm.email.value=="")
   {
      //window.alert('Enter your username, please!');
	  alert('Email Id, please!');
      document.RegForm.email.focus();
	  
      return false;
   }

   if(/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(document.FormReg.email.value))
   {
     
   }
   else
   {
   //document.getElementById("err_div").innerHTML = "Invalid E-mail Address! Please re-enter.";
   alert("Invalid E-mail Address! Please re-enter.");
   document.FormReg.email.focus();
   
   return false;
   }
   
   
    if(document.RegForm.selecta.value=="")
   {
      alert('Enter Country  , please!');
	 // document.getElementById("err_div").innerHTML = "Please Enter your name";
      document.RegForm.selecta.focus();
	  
      return false;
   }
   if(document.RegForm.comment.value=="")
   {
      alert('Enter comment  , please!');
	 // document.getElementById("err_div").innerHTML = "Please Enter your name";
      document.RegForm.comment.focus();
	  
      return false;
   }

	 return true;


}
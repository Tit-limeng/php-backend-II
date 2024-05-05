
var input_password = document.querySelector('.input-password');
var Btn_LogIn = document.querySelector('.btnLogIn');
const messagePassword = document.querySelector('.messagePassword');

// email 
var input_email = document.querySelector('.input-email');
var messageEmail = document.querySelector('.messageEmail');
Btn_LogIn.addEventListener('click',()=>{

   if ( input_email.value == "" ) {
      messageEmail.innerHTML = "Please Input Your Email !";
   } else if ( input_email.value.length < 10 ) {
      messageEmail.innerHTML = " Your Email is not enough ";
   }
   
   else {
       messageEmail.innerHTML = "";
   }

   if ( input_password.value == "" ){

      messagePassword.innerHTML = "Password is required ...!";

   } else if ( input_password.value.length < 8 ) {
      messagePassword.innerHTML = "Password at least 8 character ...!";
   } else {
      messagePassword.innerHTML = "";
   }
})
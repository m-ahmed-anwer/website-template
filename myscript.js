function myFunction(){
  var preload= document.getElementById("preloader").style.visibility="hidden";
}




function loginf(){
  var email=document.getElementById("mailing").value;
  var emailFormat=/[a-zA-Z0-9]+@gmail.com/;
  if( email.match(emailFormat)){
    true;
  }else{
    return false;
  }
  var password=document.getElementById("password").value;
  var passformat=/[a-zA-Z0-9~!@#$%^&*.]/;
  if( password.match(passformat)){
    true;
  }else{
    return false;
  }
}

function signf(){
  var mail=document.getElementById("emails").value;
  var mailFormat=/[a-zA-Z0-9]+@gmail.com/;
  if( mail.match(mailFormat)){
    true;
  }else{
    return false;
  }
  var phone=document.getElementById("phone-num").value.length;
  if(phone==10){
    true;
  }else{
    return false;
  }
  var pass=document.getElementById("passs").value;
  var confirmpass=document.getElementById("passRepeat").value;
  var passF=/[a-zA-Z0-9~!@#$%^&*]/;
  var passlength=document.getElementById("passs").value.length;

  if( (pass.match(passF))){
    true;
  }else{
    return false;
  }
  if( (passlength>9)){
    true;
  }else{
    return false;
  }
  if((pass==confirmpass)){
    true;
  }else{
    return false;
  }
}

/*
  ! TEmplates
*/ 

function freechange(){
  document.getElementById("free-gallery").style.display="block";
  document.getElementById("paid-gallery").style.display="none";
  document.getElementById("free-gallery").style="default";  
}

function paidchange(){
  document.getElementById("paid-gallery").style.display="block";
  document.getElementById("free-gallery").style.display="none";
  document.getElementById("paid-gallery").style="default";
}


/*
  !Profile sides
*/ 
function Mprofile(){
  document.getElementById("profiles").style.display="block";
  document.getElementById("editing-page").style.display="none";
  document.getElementById("purchase").style.display="none";
  document.getElementById("editingS").style.display="none";
}
function purchaseH(){
  document.getElementById("purchase").style.display="block";
  document.getElementById("editing-page").style.display="none";
  document.getElementById("profiles").style.display="none";
}


/*
  ! Edit changes profile
*/ 

function editProfile(){
  document.getElementById("editingS").style.display="block";
}

function cancelingP(){
  document.getElementById("editingS").style.display="none";
}

function editingP(){
  document.getElementById("editing-page").style.display="block";
  document.getElementById("editing-page").style="default";
  document.getElementById("profiles").style.display="none";
}
function canceling(){
  document.getElementById("profiles").style.display="block";
  document.getElementById("editingS").style.display="none";
  document.getElementById("editing-page").style.display="none";
}

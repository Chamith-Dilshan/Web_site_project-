function validate1(){
  if(document.frm01.uname.value==""){
    alert("Please Enter your Name!");
    return false;
  }
  else if(document.frm01.uname.length<3){
    alert("User name should have at least 3 characters");
    return false;
  }
  else if(document.frm01.psw.value.length<=8){
    alert("Password should have at least 8 characters!");
    return false;
  }
  else if(document.frm01.psw.value.length>16){
    alert("Password should be shorter than 16 characters!");
    return false;
  }

  return(true);
}

function validate2(){
  if(document.frm02.uname.value==""){
    alert("Please Enter your Name!");
    return false;
  }
  else if(document.frm02.uname.length<3){
    alert("User name should have at least 3 characters");
    return false;
  }
  else if(document.frm02.eaddress.value==""){
    alert("Please Enter your Email!");
    return false;
  }
  else if(document.frm02.psw.value==""){
    alert("Please Enter your Password!");
    return false;
  }
  else if(document.frm02.pswr.value==""){
    alert("Please Enter your Password!");
    return false;
  }
  else if(document.frm02.eaddress.value.indexof("@")<=1 || (document.frm02.eaddress.value.lastindexof(".")- document.frm02.eaddress.value.indexof("@")<2) ){
    alert("Please Enter valid email address");
    return false;
  }
  else if(document.frm02.psw.value != document.frm02.pswr.value){
    alert("password is mismatch!");
    return false;
  }
  else if(document.frm02.psw.value.length<=8){
    alert("Password should have at least 8 characters!");
    return false;
  }
  else if(document.frm02.psw.value.length>16){
    alert("Password should be shorter than 16 characters!");
    return false;
  }

  return(true);
}

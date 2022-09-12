function check(){
   var username=document.getElementById('username');
   var pass=document.getElementById('pass');
   var apass=document.getElementById('apass');
   var email=document.getElementById('email');
   var sdt=document.getElementById('sdt');

   var loi1=document.getElementById('loi1');
   var loi2=document.getElementById('loi2');
   var loi3=document.getElementById('loi3');
   var loi4=document.getElementById('loi4');
   var loi5=document.getElementById('loi5');

   if(username.value.length>5){
    username.style.border="1px solid red";
    loi1.innerHTML="Tên không được lớn hơn quá 50  kí tự";
    return false;
   }
}
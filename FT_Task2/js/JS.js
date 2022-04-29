const form = document.getElementById("form");
const cname = document.getElementById("cname");
const Email = document.getElementById("Email");
const phoneNo = document.getElementById("phoneNo");
const password = document.getElementById("password");


function handleError(e, message) {
    e.target.classList.add("error");
    e.target.nextElementSibling.style.visibility = "visible";
    e.target.nextElementSibling.innerHTML = message;
  }
  
  function handleSuccess(e) {
    e.target.classList.remove("error");
    e.target.classList.add("success");
    e.target.nextElementSibling.style.visibility = "hidden";
  }
  cname.addEventListener("input", (e) => {
    if (e.target.value.length && e.target.value.length <= 2) {
      return handleError(e, "Enter Name ehich must be at least 2 Characters");
    }
    if (!e.target.value.length) {
      return handleError(e, "Name can not be empty");
    }
  
    return handleSuccess(e);
  });
  Email.addEventListener("input", (e) => {
    if (
      !e.target.value.length ||
      !e.target.value.match(
        /^([a-z0-9+_-]+)(.[a-z0-9+_-]+)*@([a-z0-9-]+.)+[a-z]{2,6}$/
      )
    ) {
      handleError(e, "Please enter a valid email");
      return;
    }
  
    return handleSuccess(e);
  });

  phoneNo.addEventListener("input", (e) => {
    if (!e.target.value.length || e.target.value.length < 11) {
      handleError(e, "Please enter a valid phone number");
      return;
    }
  
    return handleSuccess(e);
  });
  
  password.addEventListener("input", (e) => {
    if (!e.target.value.length || e.target.value.length <= 6) {
      handleError(e, "Please enter a valid password");
      return;
    }
  
    return handleSuccess(e);
  });


function fetchuser()
{
var cname=document.getElementById("cname").value;
var xttp= new XMLHttpRequest();
xttp.onreadystatechange = function (){
    if(this.readyState==4 && this.status==200)
    {
        document.getElementById("message").innerHTML=this.responseText;
    }
};


xttp.open("POST","/FT_Task1/control/ajax.php",true);
xttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
xttp.send("cname="+cname);



}
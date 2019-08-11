function reigsterCheckUsername(){
  try{
  var simpleXmlHttp = new XMLHttpRequest();
  var response =  document.getElementById('result');
  var username =  document.getElementById('Username').value;
	  	if(username.lenght !=""){
          simpleXmlHttp.open('GET','lib/checkuser.php?username='+username,true);
        simpleXmlHttp.send();
        simpleXmlHttp.onreadystatechange =function(){
          if(simpleXmlHttp.readyState==4 && simpleXmlHttp.status==200){
            response.innerHTML = simpleXmlHttp.responseText;
          }
        }
      }
  }catch(e){
    console.log("Error establishing http connection");
  }
  //alert(simpleXmlHttp);
       }
function registerUser(){
  try{
  var simpleXmlHttp = new XMLHttpRequest();
  var response =  document.getElementById('result');
  var username =  document.getElementById('Username').value;
  var password =  document.getElementById('password').value;
  var firstName =document.getElementById('firstName').value;
  var lastName = document.getElementById('lastName').value;
  var maritalStatus = document.getElementById('maritalStatus').value;
  var cob = document.getElementById('cob').value;
  var dob = document.getElementById('dob').value;
  var gender = document.getElementById('gender').value;
  var phone = document.getElementById('phone').value;
  var address = document.getElementById('address').value;
  var email = document.getElementById('email').value;
  var confirmPassword =  document.getElementById('confirmPassword').value;
  var querystring =  'username='+username+'&password='+password+"&confirmPassword="+confirmPassword;
  querystring += '&firstName='+firstName+'&lastName='+lastName+"&maritalStatus="+maritalStatus;
  querystring += '&cob='+cob+'&dob='+dob+"&gender="+gender;
  querystring += '&phone='+phone+'&address='+address+"&email="+email;
  simpleXmlHttp.open('POST','lib/adduser.php?'+querystring,true);
  simpleXmlHttp.send();
  simpleXmlHttp.onreadystatechange =function(){
    if(simpleXmlHttp.readyState==4 && simpleXmlHttp.status==200){
      response.innerHTML = simpleXmlHttp.responseText;
    }
  }
  }catch(e){
    console.log("Error establishing http connection");
  }
  //alert(simpleXmlHttp);
  }

  function userLogin(){
  try{
  var simpleXmlHttp = new XMLHttpRequest();
  var response =  document.getElementById('result');
  var username =  document.getElementById('Username').value;
  var password =  document.getElementById('password').value;
  simpleXmlHttp.open('POST','lib/login.php?username='+username+'&password='+password,true);
  simpleXmlHttp.send();
  simpleXmlHttp.onreadystatechange =function(){
    if(simpleXmlHttp.readyState==4 && simpleXmlHttp.status==200){
      response.innerHTML = simpleXmlHttp.responseText;
    }
  }
  }catch(e){
    console.log("Error establishing http connection");
  }
  //alert(simpleXmlHttp);
  }
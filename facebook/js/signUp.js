let button = document.getElementById('button'),
    container = document.getElementById('cont'),
    firstname =  document.getElementById('firstname'),
    surname =  document.getElementById('surname'),
    email =  document.getElementById('email'),
    password =  document.getElementById('password');


button.onclick = function(evt){
	evt.preventDefault();
	xl = new XMLHttpRequest();
	xl.onreadystatechange = function() {
  if(xl.readyState == 4 && xl.status == 200){
	  let text =  xl.response;
		  firstname.innerHTML = "";
		  surname.innerHTML   = "";
		  password.innerHTML  = "";
		  email.innerHTML     = "";
		  

	  let array =['firstname','surname','password','email'];
		 for(let i = 0 ; i< array.length; i++){
		 	if(text.includes(array[i]+ " is less")){
		   	 	let id = array[i].toString();
		   	 	document.getElementById(id).innerHTML = id + ' is less than 3';
		   	 }
		   	 if(text.includes(array[i]+" is empty")&& text.includes(array[i]+" is less")){
		   	 	let id =array[i].toString();
		   	 	document.getElementById(id).innerHTML =id+' is empty';
		   	 }
		   	 if(text.includes(array[i]+" is more than")){
		   	 	let id = array[i].toString();
		   	 	document.getElementById(id).innerHTML = id + " is more 12 character";
		   	 }
		   	 if(text.includes(array[i]+" Enter valid number")){
		   	 	let id = array[i].toString();
		   	 	document.getElementById(id).innerHTML ="Not Valid Number";
		   	 }
		   }
		if(!text.includes('surname') && !text.includes('firstname')&&!text.includes('password')&&!text.includes('email')){
			window.location.replace('/profile');
		}   
		   		   
	}// end if is set response
  }//onchange
	let dataForm = new FormData(this.parentNode);
	xl.open('POST','/signUp/check',true);
	xl.send(dataForm);
}//end button
let buttonLogIn = document.getElementById('login'),
    email_log_in = document.getElementById('email_log_in'),
    password_log_in = document.getElementById('password_log_in');
    let value_email = '';
	let value_pass = '';
buttonLogIn.onclick = function(evt){
	evt.preventDefault();
	 value_email = email_log_in.value;
	 value_pass = password_log_in.value;
	 request = new XMLHttpRequest();
	
  request.onreadystatechange = function() {
  	
  if(request.readyState == 4 && request.status == 200){
      let response = request.responseText;
      console.log(response);
      if(!response.includes('error')){
      	 window.location.replace('/profile');
      } 

    
  }//if readystate and status
 
 }//onready state
  request.open('POST','/log_In',true);
  request.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  request.send("email="+value_email);
}//button  log in 

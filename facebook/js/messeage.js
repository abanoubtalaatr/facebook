let sendMasseageButtton = document.getElementById('sendMessage'),
    value_of_message = '';
sendMasseageButtton.onclick = function(e){
    e.preventDefault();
	Ajax_request = new XMLHttpRequest();
	value_of_message = document.getElementById('focus').value;
	Ajax_request.onreadystatechange = function() {
  if(Ajax_request.readyState == 4 && Ajax_request.status == 200){
   


  }//stauts 200
 }//onready change
 Ajax_request.open('POST','/message/');
 Ajax_request.send('message='+value_of_message);
}//button 
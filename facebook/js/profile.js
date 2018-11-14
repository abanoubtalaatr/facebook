var firend = document.getElementById("Friend_request"),
   
    click = document.getElementById("click"),
    
    tooltip= document.getElementById("tool"),
    
    messageLi = document.getElementById("messages"),
    
    messageDiv = document.getElementById("message"),
    
    spanfirstindateclass = document.getElementById("first"),
  
   datehour = new Date().getHours(),
   
   dateminute = new Date().getMinutes(),
   
   alltime = datehour + ":"+dateminute;
   
firend.onclick = function(){
   if(firend.classList.contains('hidden')){
      firend.classList.remove('hidden');
      firend.classList.add('visible');
   }
   if(firend.classList.contains('visible')){
     firend.classList.remove('visible');
     firend.classList.add('hidden');
   }
}
   
/* this the start of function to hide and visiable firend reqeust li */
click.onmouseover=function(){
     tooltip.style.visibility="visible";
     
};
click.onmouseout= function(){
  tooltip.style.visibility="hidden";   
};
firend.onmouseover = function(){
     
  tooltip.style.visibility = "visible";   
};
firend.onmouseout = function(){
  tooltip.style.visibility = "hidden";   
};



click.onclick= function (){
      
     if(messageDiv.classList.contains("visible")){
        messageDiv.classList.remove("visible");
        messageDiv.classList.add("hidden");
      
    }
   if(firend.classList.contains("hidden")){
    firend.classList.remove("hidden");
    firend.classList.add("visible");
    
   }
   else{
     firend.classList.remove("visible");
     firend.classList.add("hidden");
   }
   
};

/* the end of function to hide and visiable firend request li*/

/* the stat of function to hide and visiabale message li*/
messageLi.onclick= function(){
      tooltip.style.visibility= "hidden";
    if(firend.classList.contains("visible")){
       firend.classList.remove("visible");
       firend.classList.add("hidden");
      tooltip.style.visibility= "hidden";
       
    }
    
    if(messageDiv.classList.contains("hidden")){
    messageDiv.classList.remove("hidden");
    messageDiv.classList.add("visible");
     tooltip.style.visibility= "hidden";
   
   }
   else{
    messageDiv.classList.remove("visible");
    messageDiv.classList.add("hidden");
 tooltip.style.visibility= "hidden";
   }
    
    
};



/* the end of function to hide and visiable message li */
/*  strat append the time to span in date class in messages class*/
  spanfirstindateclass.textContent = alltime;
/* the end of append the time to span in date class in messages class*/

/*  start to hide messangeer messsage */

var inputp = document.getElementById("focus");
    messanger_head = document.getElementById("messanger-head");
  var  closeMessage = document.getElementById("close");
  var closes = document.getElementById("closes");
    
closeMessage.onclick = function (){
    closes.style.display= "none";
};
inputp.onfocus = function(){
    messanger_head.style.background ="#4267b2";
};
inputp.onblur = function(){
  messanger_head.style.background = "#f6f7f9";
};


/* end to hide messangner message */

/* Start of show messanger message */

messageDiv.onclick = function(){
closes.style.display ="block";
};
/* End f show messanger message */

// this for add freinds request 
let add_friends = document.getElementsByClassName('add_friends');// this is button to click it to add request
let class_container_add_friends = document.getElementsByClassName('friends_add');// this is div that contain button add and remove
let class_contain_info = document.getElementsByClassName('container_info');
let class_contain_emial = document.getElementsByClassName('email');// the current email in browser
let class_contain_user_name = document.getElementsByClassName('user_name');// currend user name 
for(let i=0; i<add_friends.length;i++){
  add_friends[i].onclick = function(){
     ajaxRequest = new XMLHttpRequest();
     ajaxRequest.onreadystatechange = function(){
      if(ajaxRequest.readyState == 4 && ajaxRequest.status == 200){
          
      }//end if ajaxrequest 
     }// end onready statechange 
     ajaxrequest.open('POST','');
     ajaxrequest.send();
    class_container_add_friends[i].style.display= 'none';
  };
}


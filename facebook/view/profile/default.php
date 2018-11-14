
<div class="row header main-back"><!-- Start of class row -->
<div class="contanier"><!--Start container class-->

 <div class="col-1 logo col-m-12"><!-- Start of logo class-->
     <span class="display"> <a> <i class="fa fa-facebook main-color"> </i> </a> </span>
 </div><!--End of logo class-->
 
 <div class=" col-4 search margin-top"><!-- Start of search class-->
     <form>
         <input type="search" name="search" placeholder="Search">
         <button> <i class="fa fa-search"> </i></button>
         
     </form>
 </div><!-- End of search class-->
 
 <div class=" col-3 margin-top links "><!-- Start of links class-->
     <ul>
            <li title="profile"> <img src="http://localhost/facebook/images/default.jpg"> <a href="#"><?php echo $_SESSION['User_Name'] ?></a> </li>
            <li> <a href="#">Home </a> </li>
            <li> <a href="/findFrinds">Find Friends </a> </li>
        
     </ul>
 </div><!-- End of links class-->
 
 <div class=" col-3 margin-top contact"><!-- Start  of contact class-->
 	
    <ul>
       <li id="click">
        <a href="#"><img src="http://localhost/facebook/images/images.png"> </a>
        <span id= "tool"class="tooltiptext">Find Friends</span>
      
            <div id="Friend_request" class="Firend-requested hidden"><!--Start of class Firend requested-->
            
                       <div class="header"><!--Start of class header for firends requested-->
                              <span>Firend request </span>
                                <a href="#"> Sitting </a>
                                <a>Find request </a>
                         </div>  <!--End of class header for frineds requesed-->

                         <div class="friends_confirm">
                         	<div class="friends_confirm_image"style ='float: left;margin-left: 7px'>
                         		<img src="http://localhost/facebook/images/abanoub.jpg"
                         		style='height: 50px; width:50px'>
                         	</div>
                            <div class="confirm_head">
                            	<h3><a href='#'>abanoub talaat</a></h3>
                            </div>
                            <div class="button">
                            	<button>confirm</button>
                            	<button>remove</button>
                            </div>
                         </div><!--friends confirm -->

                         <div class="friends_confirm">
                         	<div class="friends_confirm_image"style ='float: left;margin-left: 7px'>
                         		<img src="http://localhost/facebook/images/abanoub.jpg"
                         		style='height: 50px; width:50px'>
                         	</div>
                            <div class="confirm_head">
                            	<h3>gaid talaat</h3>
                            </div>
                            <div class="button">
                            	<button>confirm</button>
                            	<button>remove</button>
                            </div>
                         </div><!--friends confirm -->
                     
                     <div class="friends_confirm">
                         	<div class="friends_confirm_image"style ='float: left;margin-left: 7px'>
                         		<img src="http://localhost/facebook/images/abanoub.jpg"
                         		style='height: 50px; width:50px'>
                         	</div>
                            <div class="confirm_head">
                            	<h3>mena saad</h3>
                            </div>
                            <div class="button">
                            	<button>confirm</button>
                            	<button>remove</button>
                            </div>
                         </div><!--friends confirm -->
                     

                     <div class="friends_confirm">
                         	<div class="friends_confirm_image"style ='float: left;margin-left: 7px'>
                         		<img src="http://localhost/facebook/images/abanoub.jpg"
                         		style='height: 50px; width:50px'>
                         	</div>
                            <div class="confirm_head">
                            	<h3>marco shehata</h3>
                            </div>
                            <div class="button">
                            	<button>confirm</button>
                            	<button>remove</button>
                            </div>
                         </div><!--friends confirm -->
                     

                     <div class="people_maybe_now">
                     	<h3>peope maybe now</h3>
                         <?php 
                         // this get all this person from database 
                           $friends = $this->data['name'];
                           ?>
                             <div class="container_info" hidden>
                             	<button class="user_name" value="<?php echo $_SESSION['User_Name']?>">	
                             	</button>
                             	<button class="email" value="<?php echo $_SESSION['email']?>">
                             	</button>
                             </div>
                           <?php 
                           foreach ($friends as $value) {
                           	echo "<div class='friends_add'>
                         	<div class='friends_add_image'style ='float: left;margin-left: 7px'>
                         		<img src='http://localhost/facebook/images/abanoub.jpg'
                         		style='height: 50px; width:50px'>
                         	</div>
                            <div class='add_head'>
                            	<h3><a href='#'>{$value['firstname']} {$value['surname']}</a></h3>
                            </div>
                            <div class='button'>
                            	<button value ={$value['id_user']} class='add_friends'>add friends</button>
                            	<button>remove</button>
                            </div>
                         </div>";
                     }
                         ?>


                     	  <!--friends confirm -->
                     </div>
             
            </div><!--End of class Firend requesed-->
       </li>
       
       <li id="messages"><!--The second li -->
                <a href="#"><img src="http://localhost/facebook/images/messanger.png"> </a>
                <span class="tooltiptext">Messages</span>
                
                    <div id="message" class="messages hidden"><!--Start of class messges-->
        
                        <div class="header"><!--Start of class header for firends requested-->
                               <span>Recent </span>
                               <span> Message Request</span>
                                 <a href="#"> New group </a>
                                <a href="#"> New Message</a> 
                          </div>  <!--End of class header for frineds requesed-->
                      
                          <div class="message"><!-- Start of class mesage -->
                            <div class="info-message"><!-- Start of info-message -->
                                <img src="http://localhost/facebook/images/pop.jpg">
                                <h3> Abanoub talaat</h3>
                                <p>اية الاخبار يا ريس </p>
                                
                            </div><!-- End of info info-message -->
                            <div class="date"><!-- Start of date class-->
                                 <span id="first" title="Today" class="first">abanoub</span>
                                 <span  id = "second"class="second" >0</span>              
                            </div><!-- End of date class-->
                    
                          </div><!-- End of class message-->
                                
                       <div class="conthead"><!-- Start of class conthead-->
                       
                            <div class="head"><!--Start of class head-->
                               <h4>People may you know</h4>
                            </div><!-- End of class head-->
                            
                            <div class="link"><!-- Start of class link -->
                               <a href="#"> View All</a>
                            </div><!-- End of class link-->
                       </div>  <!-- End of class conthead-->
           
                   </div><!--End of class messages-->
       
       </li><!-- End of second li-->
       
       <li><!-- Start of third li-->
        <a href="#"><img src="http://localhost/facebook/images/earth.png"> </a>
        <span class="tooltiptext">Notifiaction</span>
       </li><!-- End of third li-->
       
       <li><!--Start of fourth-->
        <a href="#"> <img src="http://localhost/facebook/images/help.png"> </a>
        <span class="tooltiptext">Quick Help</span>
       </li><!-- End of fourth -->
       
        <li><!-- start of fivith li-->
            <a href="#"> <img src="http://localhost/facebook/images/60995.png"> </a>
        </li><!-- End of fivith li-->
    </ul>

</div><!-- End of contact class-->
<div id="closes" class="messanger"> <!-- Start of messanger class-->
    <div id="messanger-head" class="messanger-head"><!-- Start of messanger-head-->
        <h4> <a href="">Abanoub Talaat</a></h4>
        <ul>
            <li> <i class="fa fa-plus fa-x"></i> </li>
            <li>  <i  class="fa fa-video-camera" aria-hidden="true"></i>  </li>
            <li>  <i  class="fa fa-phone" aria-hidden="true"></i>  </li>
            <li>  <i  class="fa fa-cog" aria-hidden="true"></i>  </li>
            <li>  <i  id="close" class="fa fa-times" aria-hidden="true"></i> </li>
        </ul>
    </div><!-- End of messanger-head-->
<div class="messanger-content"><!-- Start messanger-content--->
        <div class="content"><!-- Starat of content-->
            <img src="http://localhost/facebook/images/pop.jpg">
            <span class="first">اية يا ابنى عايز النسكافية  </span>
            <span class="second">بكرة</span>
          </div><!-- End of content class-->
</div><!-- End of messanger-content-->
<div class="footer"><!-- Start of footer class-->
    <form>
        <input id ="focus" type="text" placeholder="Type a message">
        <button id="sendMessage" >send</button>
    </form>
        <div class="footer-image"><!-- Start of footer image class-->
         <ul>
             <li title="Add Photo"> <a> <i class="fa fa-file-image-o" aria-hidden="true"></i> </a> </li>
             <li title="Choose sticker"> <a> <i class="fa fa-qrcode" aria-hidden="true"></i> </a> </li>
             <li title="Choose a Gif"> <a> <i class="fa fa-map-pin" aria-hidden="true"> </i> </a> </li>
             <li title="Choose a emoji"> <a> <i class="fa fa-smile-o" aria-hidden="true"></i> </a> </li>
             <li title="Add File"> <a> <i class="fa fa-calendar" aria-hidden="true"></i>  </a> </li>
             <li title="play game"> <a> <i class="fa fa-gamepad" aria-hidden="true"></i> </a> </li>
             <li title="Take a picutre using quick cam"> <a> <i class="fa fa-camera" aria-hidden="true"> </i> </a> </li>
             <li title="Start a plan"> <a> <i class="fa fa-smile-o" aria-hidden="true"></i> </a> </li>
             <li title="Send a like "> <a> <i class="fa fa-thumbs-up" aria-hidden="true"></i> </a> </li>
         </ul>                        
        </div><!-- End of footer image class-->
 
  </div><!-- End of footer class-->
  
</div><!-- End of messanger class-->

</div><!-- End container class-->
</div> <!-- The End of class row -->

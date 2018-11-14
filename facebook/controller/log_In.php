<?php 
namespace facebook\controller;
use facebook\model\model;
use facebook\model\logIn;
session_start();
class log_In extends controller{
   public function notfound(){
	 self::check();
   }

	private function check(){ 
      if(!login::check_email_pass($_POST['email'])){
         echo "your have an error in your an email";
      }
      else{
      	$data = login::check_email_pass($_POST['email']); 
        foreach ($data as $value) {
	        $_SESSION['User_Name']= $value['firstname'];
	        $_SESSION['email'] = $value['email'];
        }
      }
     
	}
   
}
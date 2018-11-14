<?php 
namespace facebook\controller;
use facebook\model\model;
use facebook\model\sign;
error_reporting(0);
session_start();
class signUp extends controller{
  public  $list_of_errors =[];

  public function defaultAction(){
  	self::view();
  }
 private function notfound(){
     self::checkAction();
 }
 public function checkAction(){//check if signup is isset

  if(isset($_POST['form_signUp_first_name'])){
   
        $stor_date_filted= self::filter_data();//first filter data using this function 

       // here we need a new instance from class sign that belong model  
        $sign = new sign();
        $sign->firstname=$stor_date_filted[0];
        $sign ->surname = $stor_date_filted[1];
        $sign->email = $stor_date_filted[2];
        $sign->password =$_POST['form_signUp_password'];
        $sign->brithday_day =$_POST['form_signUp_days'];
        $sign->brithday_month =$_POST['form_signUp_monthes'];
        $sign->brithday_year= $_POST['form_signUp_years'];
        $sign->gender = $_POST['form_signUp_gender'];
       
        // here check all field if any one is empty        
        foreach ($sign as $key=> $value) {
          if(self::check_empty($value)==true){
              $list_of_errors [] = $key . ' is empty';
          }if(self::check_length1($value)==true){
            $list_of_errors [] = $key . " is less than 3";
          }
        }

        if(self::check_length2($stor_date_filted[0])==true){//check length for firstname
          $list_of_errors [] = "firstname is more than 12";
        }
        if(self::check_length2($stor_date_filted[1])==true){//ceheck  length for surname
           $list_of_errors [] = "surname is more than 12";
        }
        //check patern for phone number
         if(self::check_patern_number($stor_date_filted[2])==false){
           $list_of_errors [] ="email Enter valid number";
         }
        if(empty($list_of_errors)){
          // if every thing is ok mean not error now we can added to database
           $sign->createAction();//this function to add to database
           //this use to help us to manage the current user in browser
           $_SESSION['User_Name'] = $stor_date_filted[0];
           $_SESSION['email'] = $stor_date_filted[2];
        }else{
            
            echo json_encode($list_of_errors);
        }

    }  
}
private function filter_data(){
    $first_name = filter_input(INPUT_POST,'form_signUp_first_name',FILTER_SANITIZE_STRING);
    $surname = filter_input(INPUT_POST, 'form_signUp_surname',FILTER_SANITIZE_STRING);
    $email_or_phone = filter_input(INPUT_POST, 'form_signUp_email_or_phone',FILTER_SANITIZE_STRING);
    return [
      $first_name,
      $surname,
      $email_or_phone
    ];
}
private function check_empty($item){
   if($item === '' || $item ===" "){
    return true;
   }
}
private function check_length1($item){
   if(strlen($item) < 3){
    return true;
   }  
}
private function check_length2($item){
  if(strlen($item) > 12){
    return true;
  }
}
private function check_patern_number($item){  
  $patern =array("/^010\d{8}$/","/^012\d{8}$/","/^011\d{8}$/");
   foreach ($patern as $value) {
     if(preg_match($value, $item)==true){
         return true;
     }
   }
   return false;
}
} 
<?php
namespace facebook\model;
use facebook\model\model;
use facebook\controller\signUp;
class sign extends model{
   public $firstname;
   public $surname;
   public $email;
   public $password;
   public $brithday_day;
   public $brithday_month;
   public $brithday_year;
   public $gender ;
   
 
   

    public static $table_name = 'sign';
    public static $table_schema =array(
      'firstname',
      'surname',
      'email',
      'password',
      'brithday_day',
      'brithday_month',
      'brithday_year',
      'gender'


     
    );
    
}
<?php 
namespace facebook\controller;
use facebook\library\managepage;
use facebook\model\findFrind;
session_start();
class profile extends controller{
    public function __construct(){
 	   self::id();
    }
	public function addAction(){
		echo 'came from add action';
	}
	public function defaultAction(){
	  $this->view();	
	}
  
    public function sendMassege(){
    	
    }
     public function id(){
 	   $this->data['name'] = findFrind::get_friends_may_know();//here i get all date i need
    }
	
}
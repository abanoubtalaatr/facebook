<?php
namespace facebook\controller;
use facebook\library\managepage;
class controller{
  public  $pageName;
  public  $action;
  public  $the_rest_of_link;
  public $data = [];
 
  public function set_pageName($pageName){
  	$this->pageName = $pageName;
  }
  public function set_action ($action){
  	$this->action = $action;
  }
  public function set_the_rest_of_link($rest){
  	$this->the_rest_of_link = $rest;
  }

   public function view(){

   	 if($this->action == managepage::Not_Found){
			require_once view_path .  '\\notfound\notfound.php';
		}
		else{

			$view = view_path .'\\'. $this->pageName . '\\' . $this->action .'.php' ;
			if(file_exists($view)){
				require_once css_path . '\\' .$this->pageName. '.php';
       
				require_once $view;
    
       require_once javascript_path .'\\'.$this->pageName.'.php';
			 
			
		}
		
   }
}

}
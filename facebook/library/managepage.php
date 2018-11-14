<?php 
namespace facebook\library;

class managepage{
	public $pageName ='signUp' ;
	public $action = 'default';
	public $the_rest_of_link =[];
  const Not_Found_Page =   'facebook\\controller\\notfound';
  const Not_Found = 'notfound';
   public function __construct(){
   	     self::parseurl();
   }
   public function parseurl(){
   	 $url = explode ('/',trim(parse_url($_SERVER['REQUEST_URI'],PHP_URL_PATH),'/'),3);

      
       if(isset($url[0]) && $url[0] !==''){
       	$this->pageName = $url[0];

       }
       if(isset($url[1]) && $url[1]!=='' ){
       	$this->action = $url[1];
       }

      if(isset($url[2]) && $url[2]!=='' ){
        $this->action = $url[2];
       }
    
   }
   public function getpage(){
   	$class_page ='\facebook\controller\\'. $this->pageName;

     $actionName = $this->action . "Action";
     
	    if(!class_exists($class_page)){
	    	$class_page = self::Not_Found_Page;
	    }
	   $page = new $class_page($this->pageName ,$this->action,$this->the_rest_of_link);
     
      
	   if(!method_exists($page, $actionName)){
	   	  $actionName = self::Not_Found;
        $this->action = self::Not_Found;
	   }
       
     $page->set_pageName($this->pageName);
    
     $page->set_action($this->action);
     $page->set_the_rest_of_link($this->the_rest_of_link);
     $page->$actionName();
  
    
  }
	

}
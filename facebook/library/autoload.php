<?php
namespace facebook\library;

	spl_autoload_register(function ($class_name) {
     
      
       $class_name = str_replace('facebook', '', $class_name);
       if(file_exists(app_path . $class_name.'.php')){
       	 require_once app_path . $class_name.'.php';
       }  
});

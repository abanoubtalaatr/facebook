<?php 
namespace facebook\model;

class model{
	public function connect ($databaseName = 'storedb'){
		  $dsn ="mysql:host=localhost;dbname=$databaseName";
		  $user = 'root';
		  $pass ='';
		  $option = array(\PDO::MYSQL_ATTR_INIT_COMMAND =>'SET NAMES utf8');

		  try{
			    $con = new \PDO($dsn,$user,$pass,$option);
			    $con ->setAttribute(\PDO::ATTR_ERRMODE,\PDO::ERRMODE_EXCEPTION);
			   return $con;
		   }
		  catch(\PDOException $e){
		    echo 'you fail to connect to your databse'.$e ->getMessage();
		    
		  }
	}

   private function make_Sql_Statement(){
   	$sqlStatement ='';
      foreach (static::$table_schema as $value) {
      	$sqlStatement .=$value ." = ? , "; 
      }
      return trim($sqlStatement, ', ');
   }
 
  public  function bulidNameParameteSql(){
    		$nameParms = '';
    		foreach(static ::$table_schema as $value ){
    		  $nameParms .= $value . ' = :' . $value .', ';
    		}
    	return trim($nameParms,', ') ;
  }


   public function createAction(){
    $create = static::$table_name;
	   	 $satement = self::connect()->prepare("INSERT INTO $create SET ". self::bulidNameParameteSql());
  	   	foreach(static::$table_schema as $value){
                  $satement ->bindParam(":{$value}", $this->$value);

             }
        $satement->execute();
           
   }


   public function editAction(){
   $edit = static::$table_name;
     	$satement = self::connect()->prepare("
     		UPDATE $edit SET" . self::bulidNameParameteSql()."WHERE id ={$this->param} " );
  	   	foreach (static::$table_schema  as $value) {
  	   		$satement ->bindParam(":{$value}", $this->$value);
  	   	}
     	 $satement->execute();
   	 return $row = $satement->fetchAll();
   }


  public function getItemAction(){
       $get = static::$table_name;
      $getCate = self::connect()->prepare("SELECT * FROM $get");
      $getCate ->execute();
      $StorDate = $getCate->fetchAll(\PDO::FETCH_ASSOC);
      return $StorDate;
      
   }
   
  public function getById($key){
    $stor = static::$table_name;
    $satement = self::connect()->prepare("SELECT * FROM $stor WHERE  id = $key");
    $satement ->execute();
    $row =   $satement -> fetchAll();
    return $row;
  }
  public function check_email_pass($email){
    $tableName = static::$table_name;
    $satement = self::connect()->prepare("SELECT * FROM
     $tableName WHERE email = $email");
    
    $satement ->execute();
    $data = $satement->fetchAll();
    if($satement ->rowCount() >0){
      return $data;
    }else{
      return false;
    }
    

  }
  public function get_friends_may_know(){
    $stor = static::$table_name;
    $satement = self::connect()->prepare("SELECT * FROM 
      $stor WHERE  email !={$_SESSION['email']}");
    $satement ->execute();
    $row =   $satement -> fetchAll();
    return $row;
  }
  public function updateAction($key){
    $update = static::$table_name;
    $satement = self::connect()->prepare(
      "UPDATE $update SET ". self::bulidNameParameteSql() . " WHERE id = $key");
        foreach(static::$table_schema as $value){
                  $satement ->bindParam(":{$value}", $this->$value);

             }
        $satement->execute();
  }
  public function delete($key){
    $delete = static::$table_name;
    $satement = self::connect()->prepare("DELETE FROM  $delete  WHERE id = $key");
    $satement ->execute(array($key));

  }

}
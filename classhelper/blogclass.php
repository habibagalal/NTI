<?php 
 require 'dbconnectionclass.php';


class blog{
  
    private $title;
    private $image;
    private $content; 


       public function __construct($val1,$val2,$val3){

         $this->title    = $val1;
         $this->image   = $val2;
         $this->content= $val3;   
    
    }


   public function register(){
      # Create Db Obj 
      $dbObj = new connection;

      $sql = "insert into blog (title,image,content) values ('$this->title','$this->image','$this->content')";

      $result = $dbObj->DoQuery($sql);
      
      return $result;
   }


}



?>
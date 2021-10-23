<?php
session_start();


class connection{
 public    $server     = "localhost";
 public    $dbName     = "oop";
 public    $dbUser     = "root";
 public    $dbPassword = "";
 public    $con        = null; 

 public  function __construct()
 {
   $this-> con =   mysqli_connect($this->server,$this->dbUser,$this->dbPassword,$this->dbName);


   if(!$this->con){

    die('Error '.mysqli_connect_error());
}

 }

 function DoQuery($sql){

    $result =  mysqli_query($this->con,$sql);
    return $result;

   }

 function __destruct(){
    mysqli_close($this->con);
}

 }

// $obj    = new dbconnection;

// $sql    ="select * from blog";

// $blog   =$obj->DoQuery($sql);

// while    ($data = mysqli_fetch_assoc($blog)){
 



// }


// $obj2   = new dbconnection;

// $sql2= "insert into (title,content,image) values('$title',)"

// $server     = "localhost";
// $dbName     = "not a dinasour2";
// $dbUser     = "root";
// $dbPassword = "";

   # Create Connection ... 
//    $con =   mysqli_connect($server,$dbUser,$dbPassword,$dbName);

//    if(!$con){

//        die('Error '.mysqli_connect_error());
//    }


// ?>
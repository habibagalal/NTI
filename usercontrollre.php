<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class usercontrollre extends Controller
{   public function create (){

    return view('index');
}


public function store( Request  $request){
    $errors = [];
        if(empty($request->name)){
            $errors['name'] = "Name required";
        }


        if(empty($request->email)){
            $errors['email'] = "Email required";
        }

        if(empty($request->password &&strlen($request->password) = < 6))){
            $errors['password'] = "password required";
        }

        if(empty($request->URL)){
            $errors['URL'] = "URL required";
        }
        if(empty($request->address&& strlen($request->address)=10)){
            $errors['address'] = "address required";
        }

     if(count($errors) > 0){

        foreach($errors as $val){
            echo $val.'<br>';
        }
     }else{
         echo 'Valid Data';
     }
    


}
    //
}
$obj1= new task1controller;
$obj1->check();
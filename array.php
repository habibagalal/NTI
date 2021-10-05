<?php
//  $students = [
//     ['name' => 'Root','age' => 20],  
//     ['name' => 'Root2','age' => 25,'gpa' => 3.4] ,
//     ['name' => 'Root3','age' => 30] 

//  ];

 $students= array(
     array("root",20),
    array ("root2",25,3.4),
    array("root3",30),
 );
 
 

 for($row=0;$row<3;$row++){
     
     for($col=0;$col<3;$col++){

        echo $students[$row][$col];
        echo '<br>';
     }
 }
 


?>
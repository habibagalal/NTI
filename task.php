<?php
$num1=20;
$num2=30;
$result;
$intial=0;

$opreator=  array("add","sub","multi","div");
$arraylenght=count($opreator);

while($arraylenght>$intial){
  $opreator= $opreator.[$intial];
switch ($opreator) {
      case 'add':
          $result=$num1+$num2;
          echo $result;
          
          break;
          
      case'sub' :
        $result=$num1-$num2;
        echo $result;
        break;
        case'multi':
            $result=$num1*$num2;
            echo $result;
            break;
            case 'div':
                $result=$num1 / $num2;
                echo $result;
                break;
      default:
         echo "NOT Found";
          break;
  } 
$intial++;

}

echo $opreator[0];

  



?>
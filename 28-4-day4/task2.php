<?php

//<!-- Question 2 -->
echo "<br>";
global $answer;
if(isset($_GET['calc'])){
    $x = $_GET['num1'];
    $y = $_GET['num2'];
    if($_GET['oper']== "+"){
      echo $answer = $x + $y ;
    }elseif($_GET['oper'] == "-"){
      echo  $answer = $x - $y ;  
    }elseif($_GET['oper'] == "*"){
      echo  $answer = $x * $y ;
    }elseif($_GET['oper'] == "/"){
        if($y != 0){
         echo   $answer =$x /$y;
        }else{
          echo  $answer= "UNDEFINED";
        }
    }
}



?>
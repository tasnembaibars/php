<?php


//Q1
$sum=0;
for($i=0;$i<=30;){
   
   $sum += $i;
   echo $i++ . " ";
}
echo "The sum of the numbers 0 to 30 is $sum";


echo "</br>";

//Q4
for($i=0;$i<=5;$i++){
    for($j=0;$j<=5;$j++){
      if($i==$j ){
          echo $i ."</br>";
      }else{
          echo 0;
      }
    }
  }
  echo  "</br>";

//Q5
$n=5;
$frac=1;
for($i=$n;$i>=1;$i--){
    $frac=$frac*$i;
}
echo 'The fractional number for'.''. $n .'is'. $frac;

echo "</br>";

// Q6
$n=0;
$fib=0;
for($i=$n;$i<=10;$i++){
    echo $fib;
    echo $fib=($i-1)+($i+1) ." ";
   
}

echo  "</br>";
//Q9
$n=5;
$value=1;
for($i=$n;$i>0;$i--){
    for($j=$i;$j<$n+1;$j++){
    echo $value .' ';
    $value ++;
    }
    echo "</br>";
}
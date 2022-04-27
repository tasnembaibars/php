<?php


//Q1
$sum=0
for($i=0;$i<=30;$i++){
    echo $i++ . "</br>";
   $sum += $i;
}
echo "The sum of the numbers 0 to 30 is $sum"."\n";

echo . "</br>";
//Q2
for($i=1;$i<=5;$i++){
    for($j=1;$j<=5;$j++){
        echo 'A';
    }
}
echo . "</br>";

//Q3

echo . "</br>";

//Q4
for($i=0;$i<=5;$i++){
  for($j=0;$j<=5;$j++){
    if($i==$j ){
        echo $i;
    }else{
        echo 0;
    }
  }
}
echo . "</br>";

//Q5
$n=5;
$frac=1;
for($i=1;$i<=$n;$i--){
    $frac=$frac*$i;
}
echo 'The fractional number for $n is $frac';

echo . "</br>";

//Q6
$n=1;
$fib=0
if($n<=1){
    echo $fib=($n-1)+($n+1);
}

echo . "</br>";

//Q9
$n=1;
$value=1;
for($i=1;$i>0;$i--){
    for($j=1;$j<=$i;$j++){
    echo $value;
    $value ++;
    }
}
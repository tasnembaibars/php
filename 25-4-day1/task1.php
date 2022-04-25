<?php 
//Question 1
function checkyear($year){
if($year %400 == 0){
echo "It is a leap year";
}
elseif($year % 100 == 0){
echo "It is not a leap year";
}
elseif($year % 4 ==0){
echo "It is a leap year";
}
else{
   echo "It is not a leap year" ;
}

}
$year = 1980;
checkyear($year);

echo '</br>';


// Question 2 
function checktemp($temp){
 if($temp <= 20){
 echo 'we are in winter';
}
 else {
     echo'we are in summer';
 }

}
$temp =17;
checktemp($temp);

echo '</br>';

// Question 3
$int1=4;
$int2=4;
if($int1 == $int2){
    echo ($int1 + $int2)*3;
}
echo '</br>';

//Question 4
$int3=20;
$int4=2;
if($int3 ==30 || $int4 ==30 || $int3+$int4 ==30){
echo 'true';
}
else{
    echo 'false';
}

echo '</br>';

//Question 5

$int5 = 7;
if($int5 %3 == 0){
echo 'true';
}
else{
    echo 'false';
}

echo '</br>';

//Question 6
$int6 =30;
echo $range = $int6>=20 && $int6<=50 ? ' true':'false';

echo '</br>';
// Question 7

$int7 = 30;
$int8 = 100;
$int9=33;
if($int7>$int8 && $int7>$int9){
    echo 'The largest number is '.$int7;
}
elseif($int8>$int7 && $int8>$int9){
    echo 'The largest number is '.$int8;
}else{
    echo 'The largest number is '.$int9;
}

echo '</br>';

//Question 8
$unit = 50;
if($unit >0 && $unit <=50){
    echo $unit*2.50;
}
elseif($unit>51 && $unit <=150){
    echo $unit*5;
}
elseif($unit>151 && $unit <=250){
    echo $unit*6.20;
}
elseif($unit >250){
    echo $unit*7.50;
}
echo '</br>';

//Question 9

$age =19;
if($age>=18){
    echo 'people in this age are eligible to vote';
}else {
    echo 'people in this age are not eligible to vote';
}
echo '</br>';

//Question 10
$num = -90;
if($num >0){
    echo 'Positive';
}else{
    echo 'Negative';
}

echo '</br>';

//Question 11
$int10=8;
$int11=2;
$operator ='*';

switch($operator){
 case '+':
    echo $int10+$int11;
    break;
case '-':
    echo $int10-$int11;
     break;
     
case '*':
    echo $int10*$int11;
     break;
 case '/':
    echo $int10/$int11;
     break;
}

echo'</br>';

//Question 12
$grade =30;
if($grade>0 && $grade<=60){
 echo 'F';
}elseif($grade>61 && $grade<=70){
    echo'D';
}elseif($grade>71 && $grade<=80){
    echo'C';
}
elseif($grade>81 && $grade<=90){
    echo'B';
}elseif($grade>91 && $grade<=100){
    echo'A';
}
?>
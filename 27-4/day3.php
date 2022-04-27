

<h3>Question 1</h3>
<?php

//Q1
function primeCheck($number){
    if ($number == 1)
    return 0;
     
    for ($i = 2; $i <= sqrt($number); $i++){
        if ($number % $i == 0)
            return 0;
    }
    return 1;
}
 

$number = 31;
$flag = primeCheck($number);
if ($flag == 1)
    echo "Prime";
else
    echo "Not Prime";
    ?>
<h3>Question 2</h3>
<?php
echo "<br>";

//Q2

echo strrev("remove");
echo "<br>";

?>
<h3>Question 3</h3>
<?php
$str="remove";
if(ctype_upper($str)){
    echo "your string is upper case";
}else{
    echo "your string is lower case";
}

?>
<h3>Question 4</h3>
<?php
function swap ($a,$b){
    $x=$a;
    $a=$b;
    $b=$x;
     echo "Now a =" .$a ."<br>";
     echo "Now b =" .$b ."<br>";
}
swap (12,10);


?>

<h3>Question 6</h3>
<?php
function armstrong($num) {
    $sl = strlen($num);
    $sum = 0;
    $num = (string)$num;
    for ($i = 0; $i < $sl; $i++) {
      $sum = $sum + pow((string)$num{$i},$sl);
    }
    if ((string)$sum == (string)$num) {
     echo "$num is armstrong number";
    } else {
      echo " $num is not armstrong number";
    }
  }
  armstrong(555); 

?>
<h3>Question 7</h3>
<?php
function palindrome($string){
   
    if($string==strrev($string)){
        echo "Yes it is a palindrome ";
    }else{
        echo "no it is not a palindrome ";
    }
}
$string="Eva, can I see bees in a cave?";
palindrome($string);
?>
<h3>Question 8</h3>
<?php

$array1 = array(2, 4, 7, 4, 8, 4);
$new= array_unique($array1);
print_r ($new);


?>
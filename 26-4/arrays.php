<?php
//Q1
$colors = array('white', 'green', 'red');

echo "<ul>";

for ($i=0;$i<count($colors);$i++){
 echo "<li>" . $colors[$i]  ."</li>";
}
echo "</ul>";

echo "</br>";

//Q2 
$cities= array( "Italy"=>"Rome",
 "Luxembourg"=>"Luxembourg",
  "Belgium"=> "Brussels",
"Denmark"=>"Copenhagen",
"Finland"=>"Helsinki",
 "France" => "Paris", 
 "Slovakia"=>"Bratislava",
 "Slovenia"=>"Ljubljana",
 "Germany" => "Berlin",
 "Greece" => "Athens",
 "Ireland"=>"Dublin",
 "Netherlands"=>"Amsterdam",
 "Portugal"=>"Lisbon",
 "Spain"=>"Madrid" ); 


 foreach($cities as $key => $value){
     echo "The capital of  $key is $value"."</br>";
 }
 echo "</br>";

//Q3
$color = array (4 => 'white', 6 => 'green', 11=> 'red'); 
foreach($color as $key => $value){
    echo $value[0];
}

echo "</br>";

//Q4

$fruits = array("d" => "lemon", "a" => "orange", "b" => "banana", "c" => "apple");

foreach($fruits as $key => $value){
    echo $key . "=". $value ."</br>";
}

echo "</br>";

//Q8 
$words =  array("abcd","abc","de","hjjj","g","wer");
$new_array = array_map('strlen', $words);
echo "The shortest array length is " . min($new_array) .
". The longest array length is " . max($new_array).'.';

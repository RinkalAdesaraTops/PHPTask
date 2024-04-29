<?php 
// Write program to remove duplicate values from array
//Answer - We can use array_unique()

$arr = array(1,2,3,4,5,4,3,2,6,7,8);
print_r($arr);

echo "<br>";
$u_arr = array_unique($arr);
print_r($u_arr);
//We can also use in_array() to find unique elements of array.


// p11 - Get random values from array
$randomval = array_rand($arr);
echo "<br>Random value is ".$randomval;


//p12 - Write a PHP script which decodes the following JSON string.
$a_arr = array(
    "name"=>"Rinkal",
    "age"=>25,
    "salary"=>20000
);
$str = json_encode($a_arr);
echo $str."<br>";
$strToArray = json_decode($str);
var_dump($strToArray);
?>
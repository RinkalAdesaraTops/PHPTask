<?php
// There are 3 types of array in php.
// 1) Index Array
// 2) Associative
// 3) Multidimension

$arr = array("hi","hello");
echo "-----------1) Index Array---------------<br>";
echo $arr[0];
echo "<br>";
echo $arr[1];
echo "<br>----------------2) Associative Array---------------<br>";

$a_arr = array(
    "name"=>"Rinkal",
    "age"=>25,
    "salary"=>20000
);
echo "Name is ".$a_arr['name'];
echo "<br>";
echo "<br>----------------3) Multidimension Array---------------<br>";

$m_arr = array(
    array("hi","hello"),
    array(
        "name"=>"Rinkal",
        "age"=>25,
        "salary"=>20000,
        "city"=>"surat"
    )
    );
print_r($m_arr);
echo "<br>----------------Covert a JSON string to array ---------------<br>";
// json_encode()
// json_decode()

$str = json_encode($a_arr);
echo $str."<br>";
$strToArray = json_decode($str);
var_dump($strToArray);
?>
<?php 
// Write a program in PHP to print Fibonacci series. 0, 1, 1, 2, 3, 5, 8, 13, 21,
// o 34
$first = 0;
$second = 1;
$third;
echo "Fibonacci Series is --- <br>";
for($i=0;$i<10;$i++){
    $third= $first+$second;
    echo $first."<br> ";
    $first = $second;
    $second = $third;
}

?>
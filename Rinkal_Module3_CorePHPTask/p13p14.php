<?php
//p13 -Use a for loop to total the contents of an integer array called numbers which
// has five elements. Store the result in an integer called total. 
$a = array(1,2,3,4,5);

$total = 0;
for($i=0;$i<count($a);$i++){
    $total += $a[$i];
}

echo "Total is ".$total."<br>";

// p14 - Declare a Multi Dimensioned array of floats called balances having Three
// rows and five columns.
$balances = array(
    array(1.0, 2.0, 3.0, 4.0, 5.0),
    array(6.6, 7.7, 8.8, 9.9, 10.10),
    array(11.1, 12.1, 13.1, 14.1, 15.1)
);

var_dump($balances);
?>
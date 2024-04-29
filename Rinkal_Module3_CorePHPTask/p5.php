<?php 
// Write a program to find whether a number is Armstrong or not Write a
// program to print the below format :
// 5 9
// 2610
// 3711
// 4812

$no = $fno = 153;
$sum =0;
while($no>0){
    $r = $no%10;
    $sum += ($r*$r*$r);
    $no = floor($no/10);
}
echo "----------------------<br>";
if($sum == $fno){
    echo $fno." is Armstrong no";
} else {
    echo $fno." is not Armstrong no";
}
echo "<br>----------------------<br>";

$row=4;
$col=2;
    for($j=0,$k=5,$l=9;$j<$row;$j++,$k+=11,$l++){
        if($j==1)
            $k+=10;
        echo $k." ".$l."<br>";
    }
    
?>
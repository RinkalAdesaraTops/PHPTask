<!-- P3 - Write a PHP program to find the largest of three numbers using ternary
Operator. -->

<?php
$a = 25;
$b = 350;
$c = 45;

$ans = (($a>$b)?(($a>$c)?($a):($c)):(($b>$c)?($b):($c)));

echo "<br>Maximum value from 3 numbers is ".$ans;

?>
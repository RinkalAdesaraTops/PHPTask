<?php
// • What will be the values of $a and $b after the code below is executed?
// Explain your answer.
$a = '1';
$b = &$a;
$b = "2$b";

// Here variable b is stored reference of variable a
// Here we have $a value =1 so $b variable store 2'1' = 21

?>

<?php
// • How can you tell if a number is even or odd without using any Condition or
// loop?
// Answer --- We can use bitwise and(&) operator.

function isEven($num) {
    return !($num & 1);
}

function isOdd($num) {
    return $num & 1;
}

// Example usage:
$number = 6;

if (isEven($number)) {
    echo "$number is even.";
} else {
    echo "$number is odd.";
}
?>
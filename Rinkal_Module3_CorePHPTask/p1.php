<?php 
$physics = 85;
$chemistry = 90;
$biology = 75;
$mathematics = 95;
$computer = 80;

$total = $physics+$chemistry+$biology+$mathematics+$computer;
echo "<br>Total is -- ".$total;

$percentage = ($total*100)/500;
echo "<br>Percentage is -- ".$percentage;
 
$grade = findGrade($percentage);
echo "<br>Grade is -- ".$grade."<br>";

function findGrade($per){
    if ($per >= 90) {
        return 'A+';
    } elseif ($per >= 80) {
        return 'A';
    } elseif ($per >= 70) {
        return 'B+';
    } elseif ($per >= 60) {
        return 'B';
    } elseif ($per >= 40) {
        return 'C';
    } else {
        return "Fail";
    }
}
?>

<?php
// Function to find if a day is Thursday in a week
function checkThursday($day) {
    switch ($day) {
        case 'Monday':
            return false;
        case 'Tuesday':
            return false;
        case 'Wednesday':
            return false;
        case 'Thursday':
            return true;
        case 'Friday':
            return false;
        case 'Saturday':
            return false;
        case 'Sunday':
            return false;
        default:
            return false;
    }
}
$day = 'Thursday';
if (checkThursday($day)) {
    echo "$day is Thursday in a week.";
} else {
    echo "$day is not Thursday in a week.";
}
?>
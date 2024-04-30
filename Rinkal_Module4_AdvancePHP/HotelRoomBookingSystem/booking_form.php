<?php
// Retrieve booking type from POST data
$bookingType = $_POST['bookingType'];

// Load different booking forms based on booking type
if ($bookingType == 'full_day') {
    include('full_day_booking_form.php');
} elseif ($bookingType == 'half_day') {
    include('half_day_booking_form.php');
} elseif ($bookingType == 'custom') {
    include('custom_booking_form.php');
}
?>

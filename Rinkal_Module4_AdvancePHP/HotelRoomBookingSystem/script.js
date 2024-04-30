$(document).ready(function() {
    // Function to load booking form based on selected booking type
    function loadBookingForm(bookingType) {
        $.ajax({
            url: 'booking_form.php',
            type: 'POST',
            data: { bookingType: bookingType },
            success: function(response) {
                $('#bookingForm').html(response);
            }
        });
    }

    // Event listener for booking type selection
    $('input[name="bookingType"]').change(function() {
        var bookingType = $(this).val();
        loadBookingForm(bookingType);
    });
});

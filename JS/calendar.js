var check_array = [];

$(document).ready(function(){

    $(".fields").click(function(){

        dataval = $(this).data('val');

        if(jQuery.inArray(dataval, check_array) == -1) {
            check_array.push(dataval);
        } else {
            // Remove clicked value from the array
            check_array.splice($.inArray(dataval, check_array) ,1);
        }

        slots=''; hidden=''; basket = 0;

        cost_per_slot = $("#cost_per_slot").val();
        //cost_per_slot = parseFloat(cost_per_slot).toFixed(2)

        for (i=0; i< check_array.length; i++) {
            slots += check_array[i] + '\r\n';
            hidden += check_array[i].substring(0, 8) + '|';
            basket = (basket + parseFloat(cost_per_slot));
        }

        // Populate the Selected Slots section
        $("#selected_slots").html(slots);

        // Update hidden slots_booked form element with booked slots
        $("#slots_booked").val(hidden);

        // Update basket total box
        basket = basket.toFixed(2);
        $("#total").html(basket);

        // Hide the basket section if a user un-checks all the slots
        if(check_array.length == 0)
            $("#outer_basket").css("display", "none");

    });


    $(".classname").click(function(){

        msg = '';

        if($("#name").val() == '')
            msg += 'Please enter a Name\r\n';

        if($("#email").val() == '')
            msg += 'Please enter an Email address\r\n';

        if($("#phone").val() == '')
            msg += 'Please enter a Phone number\r\n';

        if(msg != '') {
            alert(msg);
            return false;
        }

    });

    // Firefox caches the checkbox state.  This resets all checkboxes on each page load
    $('input:checkbox').removeAttr('checked');

});

function openBookForm() {
    
    $("#outer_basket").css("display", "block");
}

function closeBookForm() {
    $("#outer_basket").css("display", "none");
}
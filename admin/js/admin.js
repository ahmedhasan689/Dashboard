

$(function () {
   
    'use strict';

    // Add Asterisk  On Required Field

    $('input').each(function (){

        if ( $(this).attr('required') === 'required') {

            $(this).after('<span class="asterisk">*</span>');
        }

    });

    // Convert Password Field To Text On Hover ...

    var show = $('.password');

    $('.show-pass').hover(function (){
       
        show.attr('type', 'text');
        
    }, function () {

        show.attr('type', 'password');

    });



    // Confirm Message ...
    $('.confirm').click(function () {

        return confirm('Are You Sure ?');

    });

    $('input[type="checkbox"]').click(function() {
        if($(this).prop("checked") == true) {
            alert("Checkbox is checked.");
        }
        else if($(this).prop("checked") == false) {
            alert("Checkbox is unchecked.");
        }
    });
});

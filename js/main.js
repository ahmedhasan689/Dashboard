
$(document).ready(function() {
    $(".craft").click(function() {
     
        $(".left").animate({
           
            height:"show"

        
         
        
       } , 1200);

       $(".right").hide();
       
       $(this).css("backgroundColor", "rgb(1, 1, 59)"
       );
       $(this).css("color", "white"
       );
       $(".health").css("backgroundColor", "white"
       );
       $(".health").css("color", "black"
       );
    });
});
$(document).ready(function() {
    $(".health").click(function() {
     
        $(".right").animate({
           
            height:"show"
        
         
        
       } , 1200);

       $(".left").hide();
       $(this).css("backgroundColor", "rgb(1, 1, 59)"
       );
       $(this).css("color", "white"
       );
       $(".craft").css("backgroundColor", "white"
       );
       $(".craft").css("color", "black"
       );
    });
});


$(document).ready(function () {
    $(".click").click(function () {
        $(".return").show();
        $(".login").hide();        
    });
});
$(document).ready(function () {
    $(".ok").click(function () {
        $(".return").hide(); 
        $(".code").show();           
    });
});


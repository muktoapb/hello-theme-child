(function ($) {
    "use strict";

    jQuery(document).ready(function ($) {
        


        $(window).on('scroll', function() {
            var windowHeight = $(window).height();
            var windowTop = $(window).scrollTop(); 
            var windowBottom = windowTop + windowHeight;
        
            $('.timeline_item').each(function() {
                var itemTop = $(this).offset().top + 400; 
                var itemBottom = itemTop + $(this).outerHeight();
        
                // Check if the item is in view
                if ((itemTop <= windowBottom) && (itemBottom >= windowTop)) {
                    $(this).addClass('active');
                    // add active class to previous siblings
                    $(this).prevAll().addClass('active');
                } else {
                    $(this).removeClass('active');
                }
            });
        });
        



    });

}(jQuery)); 
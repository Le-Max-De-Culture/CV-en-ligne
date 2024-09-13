$(function() {
    $(window).on("scroll", function() {
        if($(window).scrollTop() > 1) {
            $('header').addClass("active");
        } else {
            //remove the background property so it comes transparent again (defined in your css)
           $('header').removeClass("active");
        }
    });
});


// REVIEW: index_mobile
$(function() {
    $(window).on("scroll", function() {
        if($(window).scrollTop() > 1) {
            $('index_mobile').addClass("active");
        } else {
            //remove the background property so it comes transparent again (defined in your css)
           $('index_mobile').removeClass("active");
        }
    });
});

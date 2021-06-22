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

(function(){
      var words = [
          'Curieux',
          'Développeur',
          'Créatif',
          'Dynamique',
          'Passionné'
          ], i = 0;
      setInterval(function(){
          $('#changingword').fadeOut(function(){
              $(this).html(words[i=(i+1)%words.length]).fadeIn();
          });
      }, 3000);

  })();

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

$(document).ready(function(){
       
    $('.play-icon-holder').click(function(){
            $('html, body').delay(0).animate({
                scrollTop: ($('.black-video').offset().top)
            }, 500);
    });
    
    $('.small-share').click(function(){
      $(this).closest('.small-video-wrap').find('.share-thumb').addClass('visible');
    });
    
    $('.close-share').click(function(){
      $('.share-thumb').removeClass('visible');
    });
});
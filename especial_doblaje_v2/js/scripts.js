$(document).ready(function(){
    $('.purple-share').click(function(){
      $(this).closest('.home-post-wrap').find('.share-thumb').addClass('visible');
    });
    
    $('.close-share').click(function(){
      $(this).closest('.share-thumb').removeClass('visible');
    });
    
        $('#directoriohomeCarousel').bind('slide.bs.carousel', function (e) {
        var distance_top=$('.posts-section').offset();
                            $('html, body').delay(0).animate({
                        scrollTop: ($('.posts-section').offset().top)-120
                    }, 500);
        console.log(distance_top.top);
    });
    
    
});


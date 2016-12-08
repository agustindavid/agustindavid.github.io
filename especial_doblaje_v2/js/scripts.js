$(document).ready(function(){
    $('.purple-share').click(function(){
      $(this).closest('.home-post-wrap').find('.share-thumb').addClass('visible');
    });
    
    $('.close-share').click(function(){
      $(this).closest('.share-thumb').removeClass('visible');
    });
    
        $('#directoriohomeCarousel').bind('slid.bs.carousel', function (e) {
        var distance_top=$('.posts-section').offset();
                            $('html, body').delay(100).animate({
                        scrollTop: ($('.posts-section').offset().top)-120
                    }, 500);
        console.log(distance_top.top);
    });
    
    
});


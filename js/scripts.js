$(document).ready(function(){

    
    $('.new-item').click(function(){
        $('.new-item').removeClass('active');
        $(this).addClass('active');
        if($('.new-content').is(':hidden')){
            $('.new-content').slideToggle();
        }
        if($(window).width()<768){
            var new_offset=$('#carousel-news .item.active').offset().top;
            var anchor_offset=$('.anchor-controls').offset().top;
                $('#carousel-news .carousel-control').css('top', anchor_offset-new_offset-7);
                $('html, body').delay(500).animate({
                    scrollTop: ($('.new-content').offset().top)+20
            }, 500);
        }
    });
    
    $('.close-content').click(function(){
        $('.new-content').slideToggle();
        $('.new-item').removeClass('active');
                if($(window).width()<768){
            $('html, body').delay(0).animate({
                scrollTop: ($('.news-section').offset().top)
            }, 500);
        }
    });
    
    $('.md-trigger').click(function(){
        var modal_image=$(this).data('big');
            $('.modal-img img').attr('src', modal_image);
    });
    
    $('.tweet-media').click(function(){
        var video_ig= $('video', this).get(0);
        $('.play-btn', this).hide();
        if(video_ig.paused){
        video_ig.play();
        } else {
            video_ig.pause();
            $('.play-btn', this).show();
        }
    });
});



$(document).ready(function(){
    $('.new-item').click(function(){
        $('.new-item').removeClass('active');
        $(this).addClass('active');
        if($('.new-content').is(':hidden')){
            $('.new-content').slideToggle();
        }
    });
    
    $('.close-content').click(function(){
        $('.new-content').slideToggle();
        $('.new-item').removeClass('active');
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



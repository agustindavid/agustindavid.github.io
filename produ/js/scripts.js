
$(document).ready(function(){

    

    
    $('.play-btn').click(function(){
        var video_src=$(this).data('src');
        $('.picture-overlay').addClass('no-opacity');
        $('.foto-single').addClass('foto-gone');
        $('.video-frame').addClass('video-frame-visible');
        $('.player-iframe').attr('src', video_src);
        $('.single-content').addClass('visible');
    });
    
        $('.close-video').click(function(){
        $('.foto-single').removeClass('foto-gone');
        $('.video-frame').removeClass('video-frame-visible');
        $('.player-iframe').attr('src', '');
        $('.single-content').removeClass('visible');
              setTimeout(function(){
        $('.picture-overlay').removeClass('no-opacity');
                  },1000);
    });

    
    $('.new-item').click(function(){
        $('.new-item').removeClass('active');
        $(this).addClass('active');
        if($('.new-content').is(':hidden')){
            $('.new-content').slideToggle();
        }
        if($(window).width()<768){
            var new_offset=$('#carousel-news .item.active').offset().top;
            var anchor_offset=$('#carousel-news .active .anchor-controls').offset().top;
/*                console.log(new_offset);
                console.log(anchor_offset);
            console.log(anchor_offset-new_offset);*/
                    $('html, body').delay(500).animate({
                        scrollTop: ($('.new-content').offset().top)+20
                    }, 500);
                console.log(anchor_offset-new_offset);
            $('#carousel-news .carousel-control').css('top', anchor_offset-new_offset-10);
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
        var modal_desc=$(this).attr('alt');
            $('.modal-img img').attr('src', modal_image);
            $('.modal-img .modal-description').text(modal_desc);
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
    
    $('.video-thumb').click(function(){
        
        var embed_src=$('iframe', this).attr('src');
        var title_video=$(this).next('.video-title').text();
        //alert(title_video);
        $('.playing-video iframe').attr('src', embed_src);
        $('.main-video-title').text(title_video);
        if($(window).width()<768){
            $('html, body').delay(0).animate({
                scrollTop: ($('.playing-video').offset().top)-30
            }, 500);   
        }
    });
    
    $('#expand-gallery').click(function(){
        var full_gallery = $('.full-gallery').length;
        //alert(full_gallery);
        if(full_gallery<1){
            $('#inner-collapse').removeClass('carousel-inner');
            $('#carousel-gallery').removeClass('carousel slide');
            $('#inner-collapse').addClass('full-gallery');
            $('#carousel-gallery .carousel-control').hide();
            $(this).text('Contraer');
        } else {
            $('#inner-collapse').addClass('carousel-inner');
            $('#carousel-gallery').addClass('carousel slide');
            $('#inner-collapse').removeClass('full-gallery');
             $('html, body').delay(0).animate({
                scrollTop: ($('.gallery').offset().top)
            }, 500);
            $('#carousel-gallery .carousel-control').show(700);
            $(this).text('Ver Todas');
            }
    });
    
    $('#view-full-team').click(function(e){
         $('.full-team').slideToggle();
        if ($(this).hasClass('active')){
            $(this).removeClass('active');
         $(this).text('Ver equipo completo');
        } else {
            $(this).text('Ocultar');
             $(this).addClass('active');
        }
       
            
    });
    
});



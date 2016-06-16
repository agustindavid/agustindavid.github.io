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
    });
});



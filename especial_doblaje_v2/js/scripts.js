$(document).ready(function(){
    $('.purple-share').click(function(){
      $(this).closest('.home-post-wrap').find('.share-thumb').addClass('visible');
    });
    
    $('.close-share').click(function(){
      $(this).closest('.share-thumb').removeClass('visible');
    });
    
    
});


$(document).ready(function(){
    var config = {
      viewFactor : 0.15,
      duration   : 1000,
      distance   : "40px",
      scale      : 0.8
    };
      window.sr = ScrollReveal();
      sr.reveal('.dark-gray-home', config); 
      sr.reveal('.huge-links-bg', config); 
      sr.reveal('#directorioCarousel', config);     
       
    $('.purple-share').click(function(){
      $(this).closest('.home-post-wrap').find('.share-thumb').addClass('visible');
    });
    
    $('.close-share').click(function(){
      $(this).closest('.share-thumb').removeClass('visible');
    });
    
    
});


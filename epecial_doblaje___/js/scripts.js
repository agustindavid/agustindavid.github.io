$(document).ready(function(){
    var config = {
      viewFactor : 0.15,
      duration   : 1000,
      distance   : "40px",
      scale      : 0.8
    };
      window.sr = ScrollReveal();
      sr.reveal('.main-posts-wrap', config);
      sr.reveal('.dark-gray-home', config); 
      sr.reveal('.huge-links-bg', config); 
      sr.reveal('#directorioCarousel', config);     
    
});
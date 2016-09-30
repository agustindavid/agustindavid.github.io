
$(document).ready(function(){
    
    var left_ball=$('.info-timeline li:last-child').width();
    $('.ball').css('left', left_ball/2-15 );
    
    var waitForFinalEvent = (function () {
          var timers = {};
          return function (callback, ms, uniqueId) {
            if (!uniqueId) {
              uniqueId = "Don't call this twice without a uniqueId";
            }
            if (timers[uniqueId]) {
              clearTimeout (timers[uniqueId]);
            }
            timers[uniqueId] = setTimeout(callback, ms);
          };
        })();

        //if($(window).width() > 992){
          $(window).resize(function () {
              waitForFinalEvent(function(){
              var full_height=$(window).height();
          $('.w-height').css('height', full_height+'px' );
              }, 500, "some unique string");
          });
            var full_height=$(window).height();
          $('.w-height').css('height', full_height+'px' );
        //}


        full_height=$(window).height();
        $('.w-height').css('height', full_height+'px' );
    
    function fadeIn(i,elements,duration,callback){
        if(i >= elements.length)
            typeof callback == 'function' && callback();
        else
        elements.eq(i).fadeIn(duration,function(){
            fadeIn(i+1,elements,duration,callback);
        });        
    }
    
    $('.cat-list li').click(function(){
        $('.cat-list li').removeClass('active');
        $(this).addClass('active');
    });
    
    $('.info-timeline li').hover(function(){
        $('.info-timeline li').removeClass('active');
        var list_left= $('.info-timeline').offset();
        var half=$(this).width()/2;
         var $window = $(window),
        scrollLeft = $window.scrollLeft(),
        scrollTop = $window.scrollTop(),
        list_left=list_left.left-scrollLeft;
        offset = $(this).offset();
       var left= offset.left - scrollLeft;
        $('.ball').css('left', left+half-15-list_left);
        $(this).addClass('active');
    });
        
    $('#catCarousel').on('slid.bs.carousel', function (e){
        var elements=$('.active .cat-items');
        $('.cat-items li').hide();
        fadeIn(0,elements.find('li'),100,function(){console.log("animation finished!");});
        var slideTo = $(this).find('.active').index();
        $('.cat-list').find('li').removeClass('active');
        $('.cat-list').find("[data-slide-to='"+slideTo+"']").addClass('active');
    });
    
    if($(window).width() > 992){
    var waypoint = new Waypoint({
        element: $('.section-premio'),
        handler: function(direction) {
            if(direction=='down'){
                $('.sticky-menu').addClass('shown');
            } else {
                $('.sticky-menu').removeClass('shown');
            }
        }
    })
    }
    

    
        
});
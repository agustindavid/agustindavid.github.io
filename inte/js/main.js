
$(document).ready(function(){
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
});
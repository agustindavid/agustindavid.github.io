jQuery(function() {
			
	jQuery('#top_link').click(function (event) { 
	  $("html, body").animate({ scrollTop: 0 }, "slow");
  		event.preventDefault();
	});
	
	jQuery('#print').click(function(event){
	  window.print();
	  event.preventDefault();
     });
	
	jQuery('.target').attr('target','_blank');
	
	jQuery('a[rel$=\'external\']').attr("target","_blank");

	var pull  = $('#nav-toggle');
    menu     = $('#nav');
    menuHeight  = menu.height();

  	$(pull).on('click', function(e) {
  	   e.preventDefault();
  	   menu.slideToggle();
  	});



   $('.share-link-list').on('click', function(e) {
      e.preventDefault();
      $(this).next('.share-icons').toggleClass('active');
   });

   $('#more-link-news').on('click', function(e) {
      e.preventDefault();
      $(this).hide();
      $('.list-news-thumbs-more').toggleClass('active');
   });

   

   

   /*$('.menu-item-has-children-level-2').after().click(function(e) {
        $(this).toggleClass('sub-menu-active');
        $(this).find('> .sub-menu').toggleClass('active');
   });
	*/


	/*jQuery('#nav-menu li').hover(
		function () {
			jQuery(this).find('ul').show();
			jQuery(this).addClass('over');
		}, 
		function () {
			jQuery(this).find('ul').hide();
			jQuery(this).removeClass('over');
		}
	);*/

  
});
jQuery( document ).ready(function() {
	jQuery("ul.primary-menu li").hover(
		function() {
			jQuery(this).children("ul.sub-menu").slideDown("medium").show();
		}, function() {
			jQuery(this).children("ul.sub-menu").slideUp("medium");
		}
	);
});

	/* jQuery('.menu-item-has-children').hover(function() {
			jQuery(this).children('ul').stop(true, false, true).slideToggle(300);
		});
		
		jQuery('.menu-item-has-children > a').click(function() {
			jQuery(this).parent().siblings().find('ul').slideUp(300);
			jQuery(this).next('ul').stop(true, false, true).slideToggle(300);
			return false;
		}); */
		
		/* jQuery('.menu-item-has-children > a').on('click tap', function() {
		  jQuery(this).parent().toggleClass("show");
		});
		
		 
		
		jQuery('.menu-item-has-children > a').on('mouseenter', function() {
		  jQuery(this).parent().addClass("show");
		});
		 */
		 // mouseleave
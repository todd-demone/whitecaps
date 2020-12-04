// Hamburger to X animation
var navToggle = document.getElementById('nav-toggle');
var primaryMenu = document.getElementById('primary-menu');
navToggle.addEventListener('click', function() {
  navToggle.classList.toggle('active');
  primaryMenu.classList.toggle('toggle');
});
/* 
// toggle (open and close) the dropdown menus
var itemsWithKids = document.querySelectorAll('.menu-item-has-children');
for (var i = 0; i < itemsWithKids.length; i++) {
  itemsWithKids[i].addEventListener('click', function(event) {
    event.stopPropagation();
    var last = this.closest('ul').querySelector('.show');
    if (last && last !== this) { 
		last.classList.remove('show'); 
	}// if submenu 1 is expanded and link 2 is clicked, submenu1 disappears and submenu2 appears
    this.classList.toggle('show');

  });
} */
jQuery( document ).ready(function() {
	
	// hover to show the sub-menu items 
	jQuery("ul#primary-menu li").hover(
		function() {
			jQuery(this).children("ul.sub-menu").slideDown("slow").show();
		}, function() {
			jQuery(this).children("ul.sub-menu").slideUp("medium");
		}
	);
	
	// click to show the sub-menu items
	jQuery("ul#primary-menu li").on('click tap', function() {
		jQuery(this).children("ul.sub-menu").slideToggle("medium");
	});
});	

// if click anywhere else on document, close the dropdown menus
document.addEventListener('click', function() {
  var last = document.querySelector('.show');
  if (last) last.classList.remove('show');
});

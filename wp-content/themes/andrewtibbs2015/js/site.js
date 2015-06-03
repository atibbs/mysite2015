/* site.js */
jQuery(document).ready(function() {

	// Menu Functionality on touch devices
	if(Modernizr.touch) {
		//console.log("ready");
		jQuery('a.logo').on('click', function(e) {
			e.preventDefault();
			jQuery(this).toggleClass("active");
		});
		jQuery('.nav-bar').on('click', function(e) {
			//e.preventDefault();
			jQuery('.menu').toggleClass("open");

		});
		jQuery('.menu > li > a').on('click', function() {
			jQuery('a.logo').removeClass("active");
		});

	}
});
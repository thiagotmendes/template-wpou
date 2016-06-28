new WOW().init();
jQuery(document).ready(function($) {
	$(window).scroll(function () {
		if ($(this).scrollTop() > 245) {
		  $("#menu-topo").addClass("navbar-fixed-top animated fadeIn border-scroll nav-scroll");
		} else {
		  $("#menu-topo").removeClass("navbar-fixed-top animated fadeIn border-scroll nav-scroll");
		}
	});
});

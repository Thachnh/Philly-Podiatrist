jQuery(document).ready( function() {
	jQuery("li.menu-item-type-post_type>a").click(function(event) {
		jQuery("#content-wrapper").load(jQuery(this).attr("href")+" #content");
		if (jQuery(this).is("ul#menu-sidebar>li.menu-item>a")) {
			jQuery("ul#menu-sidebar ul.sub-menu:visible").slideUp();
			jQuery(this).siblings("ul.sub-menu").slideDown();
		}
		event.preventDefault();
		jQuery("ul#menu-sidebar li>a").css("background-position", "0 0");
		jQuery(this).css("background-position", "0 -38px");
	});
	
	jQuery("ul#menu-sidebar ul.sub-menu").hide();	
});
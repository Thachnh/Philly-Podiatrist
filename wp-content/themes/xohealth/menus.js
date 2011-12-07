jQuery(document).ready( function() {
	
	jQuery("li.menu-item-type-post_type>a").click(function(event) {
		jQuery("#content-wrapper").load(jQuery(this).attr("href")+" #content");
		if (jQuery(this).is("ul#menu-sidebar>li.menu-item>a")) {
			jQuery("ul#menu-sidebar ul.sub-menu:visible").slideUp();
			jQuery(this).siblings("ul.sub-menu").slideDown();
		}
		jQuery("ul#menu-sidebar li>a").removeClass("selected");
		jQuery(this).addClass("selected");
		jQuery("div.menu li.current_page_item").removeClass("current_page_item");
		//use parent's id to mark current address of content
		//not use actual location, for security purpose
		window.location.hash = "id=" + jQuery(this).parent().attr("id");
		event.preventDefault();
	});
	
	if (window.location.hash.substr(0,4) == "#id=") {
		jQuery("li#"+window.location.hash.substr(4)+">a").click();
	}
	
	jQuery("ul#menu-sidebar ul.sub-menu").hide();	
});
//Astra theme sticky header style 
jQuery(document).ready(function(){
	
	function siteHeaderStickyMenu(){
		 if(jQuery(window).width() > 921) {
		   jQuery('.site-header').addClass('site-header-sticky');
		} else {
		  jQuery('.site-header').removeClass('site-header-sticky');
		}
	}
	siteHeaderStickyMenu();
	jQuery(window).resize(function(){
		siteHeaderStickyMenu();
	});
	
});

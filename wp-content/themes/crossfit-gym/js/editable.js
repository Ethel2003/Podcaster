jQuery(window).load(function() {
		if(jQuery('#slider') > 0) {
        jQuery('.nivoSlider').nivoSlider({
        	effect:'fade',
    });
		} else {
			jQuery('#slider').nivoSlider({
        	effect:'fade',
    });
		}
});

// video popup jQuery
jQuery(document).ready(function( jQuery ) {
     	jQuery(".youtube-link").grtyoutube({
		autoPlay:true,
		theme: "dark"
	});
  }); 

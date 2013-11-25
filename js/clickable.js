// ------------------------------------------

//           Travis Wall digital

// ------------------------------------------

//                clickable.js
                 
// everything concerning making divs clickable

// -------------------------------------------

//                  v1.0

//                12.02.13

//-------------------------------------------

//              revision history:

// ------------- v1.1 - 12.02.13 -------------



// -------------------------------------------

// open in new window

$(function() {
	$('.clickable-external').click(function(){
    window.open($(this).find("a").attr("href"));
     return false;
     });
});

// open in same window

$(function() {
	$('.clickable-internal').click(function(){
     window.location=$(this).find("a").attr("href"); 
     return false;
     });
});

$(document).ready(function() {
    $('.hover').bind('touchstart touchend', function(e) {
        e.preventDefault();
        $(this).toggleClass('hover_effect');
    });
});

// When the Document Object Model is ready
//jQuery(document).ready(function(){
	// 'catTopPosition' is the amount of pixels #cat
	// is from the top of the document
//	var catTopPosition = jQuery('#content').offset().top;
	
	// When #scroll is clicked
//	jQuery('.bar-button-contact').click(function(){
		// Scroll down to 'catTopPosition'
//		jQuery('html, body').animate({scrollTop:catTopPosition}, 'slow');
		// Stop the link from acting like a normal anchor link
//		return false;
	});
});

// ------------------------------------------

//           Travis Wall digital

// ------------------------------------------

//                toggles.js
                 
//      everything concerning toggles

// -------------------------------------------

//                  v1.0

//                12.02.13

//-------------------------------------------

//              revision history:

// ------------- v1.1 - 12.02.13 -------------



// -------------------------------------------

// ---------------- display shadow on drop down panel only when expanded ----------------

$(document).click(function(){
	if ($('.panel').height()>1) {
		$('.panel').addClass('panel-on');
		}
    else {
      	$('.panel').removeClass('panel-on');
    	}
});

// ---------------- knocks off top border on the first nav item if about is not on ----------------

$(document).click(function(){
	if ($('.panel-about').hasClass('panel-about-on')) {
		$('.email').addClass('email-add-border'); 
		}
    else {
      	$('.email').removeClass('email-add-border');
    	}
}); 

// ---------------- toggles header buttons triggering drop down panel ----------------

$(function() {
  $(document).each(function(){
  $('.bar-button-about').click(function () {
	$(this).toggleClass('bar-button-on');
	if ($('.panel-about').hasClass('panel-about-on')) {
			$('.panel-about').removeClass('panel-about-on');
	} else {
			$('#panel-wrapper').addClass('viewable');
			$('.panel-about').addClass('panel-about-on');
	}	 
	if (!$('.panel-about').hasClass('panel-about-on') && !$('.panel-contact').hasClass('panel-contact-on')) {
			$('#panel-wrapper').removeClass('viewable');
	}	  
  });
  $('.bar-button-contact').click(function () {
	$(this).toggleClass('bar-button-on');
	if ($('.panel-contact').hasClass('panel-contact-on')) {
			$('.panel-contact').removeClass('panel-contact-on');
	} else {
			$('#panel-wrapper').addClass('viewable');
			$('.panel-contact').addClass('panel-contact-on');
	}
	if ($('.panel-about').hasClass('panel-about-on') && $('.panel-contact').hasClass('panel-contact-on')) {
			// figure out the position of "#panel-wrapper" minus 890px
			var catTopPosition = jQuery('#panel-wrapper').offset().top - -910;
			// scroll to that position
			jQuery('html, body').animate({scrollTop:catTopPosition}, 'slow');
			// stop the link from acting like a normal anchor link
			return false;
	}
	if (!$('.panel-contact').hasClass('panel-contact-on') && !$('.panel-about').hasClass('panel-about-on')) {
			$('#panel-wrapper').removeClass('viewable');
	}		  
  });	  
  $('.bar-button').click(function () {
	  $(this).children('.icon').toggleClass('icon-on'); 
      }); 
  $('.category-nav').hover(function () {
	  $(this).children('h2').toggleClass('nav-hover');
	  $(this).children('.icon-list').toggleClass('icon-list-on');
	  $(this).children('.icon-thumbs').toggleClass('icon-thumbs-on'); 
      });                 
  });
});

$(function() {
	$('#panel-wrapper').click(function () {
		$(this).removeClass('viewable');
		$('.panel-about').removeClass('panel-about-on');
		$('.panel-contact').removeClass('panel-contact-on');
		$('.bar-button-about').removeClass('bar-button-on');
		$('.bar-button-contact').removeClass('bar-button-on');
		$('.icon').removeClass('icon-on');	
    });
});

$(function() {
	$('#email').click(function () {
		window.open('mailto:travis.wall@gmail.com?Subject=');
    });
	$('#twitter').click(function () {
		window.open('http://twitter.com/_traviswall');
    });
	$('#flickr').click(function () {
		window.open('http://www.flickr.com/photos/traviswall7');
    });
	$('#instagram').click(function () {
		window.open('http://instagram.com/_traviswall');
    });
	$('#skype').click(function () {
		window.open('callto://travis.wall7');
    });
	$('#linkedin').click(function () {
		window.open('http://www.linkedin.com/profile/view?id=244858838');
    });	
});

$(document).ready(function() {
	$('#email').hover(function () {
		$(this).children('.icon-social').toggleClass('icon-email-hover');
    });
	$('#twitter').hover(function () {
		$(this).children('.icon-social').toggleClass('icon-twitter-hover');
    });
	$('#flickr').hover(function () {
		$(this).children('.icon-social').toggleClass('icon-flickr-hover');
    });
	$('#instagram').hover(function () {
		$(this).children('.icon-social').toggleClass('icon-instagram-hover');
    });
	$('#skype').hover(function () {
		$(this).children('.icon-social').toggleClass('icon-skype-hover');
    });
	$('#linkedin').hover(function () {
		$(this).children('.icon-social').toggleClass('icon-linkedin-hover');
    });		
});

$(document).ready(function() {
	$(".more-link").before('<div class="more-link-padding"></div>');
});

$(window).scroll(function () {
	$(".article-content").click(function(){
    	window.location=$(this).find(".more-link").attr("href"); 
     	return false;
	});
});

$(document).ready(function() {
	$(".article-content").hover(function (){
		$(this).find(".more-link").toggleClass("more-link-on");
	});
});

jQuery(document).ready(function($){
	$(window).scroll(function(){
        if ($(this).scrollTop() < 200) {
			$('#smoothup') .fadeOut();
        } else {
			$('#smoothup') .fadeIn();
        }
    });
	$('#smoothup').on('click', function(){
		$('html, body').animate({scrollTop:0}, 'fast');
		return false;
		});
});
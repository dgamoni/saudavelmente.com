

jQuery(document).ready(function($){
	


	// $('#menu-left-menu .sub-menu .current-menu-item').parent('')
	$('.current-page-ancestor .sub-menu').show();
	$('.current-menu-ancestor .sub-menu').show();
	$('.current-page-ancestor').addClass('current_arrow');

		$('.overlay.play-ico ').click(function(ev){
		    $('.overlay').hide();
		    // $("#video").show();
		    $("#video iframe")[0].src += "&autoplay=1";
    		ev.preventDefault();
		});

	// // mobilmenu
	// $( '#dl-menu' ).dlmenu();

	// // slider home
	$('.carousel').carousel({
	  interval: false
	});

	// $('.carousel').bcSwipe({ threshold: 50 });

	// // small carousel
	// $('.highlights-carousel').flickity({
	// 		arrowShape: { 
	// 		  x0: 10,
	// 		  x1: 60, y1: 50,
	// 		  x2: 55, y2: 40,
	// 		  x3: 15
	// 		},
	// 		wrapAround    : true, 
 //            pageDots      : false,
 //            //adaptiveHeight: true,
	// });


	$('body').on('click', '.mobil-menu-icon', function(event) {
		event.preventDefault();
		// $('#header-menu-mobil').hide();
		$('#header-menu-mobil').toggle();
	});



}); //end ready

// helper
jQuery.fn.exists = function(){return this.length>0;}




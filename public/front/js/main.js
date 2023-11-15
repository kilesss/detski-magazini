(function ($) {
 "use strict";
 
 /*jQuery MeanMenu 
   --------------------- */
	jQuery('nav#dropdown').meanmenu();

/*--------------------------
 scrollUp
---------------------------- */	
	$.scrollUp({
        scrollText: '<i class="fa fa-angle-up"></i>',
        easingType: 'linear',
        scrollSpeed: 900,
        animation: 'fade'
    });
//---------------------------------------------
//Nivo slider
//---------------------------------------------
	 $('#ensign-nivoslider').nivoSlider({
		effect: 'random',
		slices: 15,
		boxCols: 8,
		boxRows: 4,
		animSpeed: 500,
		pauseTime: 5000,
		startSlide: 0,
		directionNav: true,
		controlNavThumbs: false,
		pauseOnHover: false,
		manualAdvance: true
	 }); 
/*--------------------------
product carousel active code
---------------------------- */	
  $(".new-product").owlCarousel({ 
      nav: true, // Show next and prev buttons
      slideSpeed : 1000,
      paginationSpeed : 400,
	  items : 4,
      margin: 30,
	  dots :false,
	  navText :['<i class="fa fa-chevron-left"></i>','<i class="fa fa-chevron-right"></i>'], 
      responsive: {
        0: {
            items: 1
        },
        768: {
            items: 2
        },
        992: {
            items: 3
        },
        1200: {
            items: 4
        }
      }
  });
/*--------------------------
product carousel active code
---------------------------- */	
  $(".all-product").owlCarousel({ 
      nav : true, // Show next and prev buttons
      slideSpeed : 1000,
      paginationSpeed : 400,
	  items : 4,
      margin: 30,
	  dots :false,
	  navText :['<i class="fa fa-chevron-left"></i>','<i class="fa fa-chevron-right"></i>'], 
      responsive: {
        0: {
            items: 1
        },
        768: {
            items: 3
        },
        992: {
            items: 4
        }
      }  
  });
/*--------------------------
Home Page Three product carousel active code
---------------------------- */	
  $(".home-three-all-product").owlCarousel({ 
      nav : true, // Show next and prev buttons
      slideSpeed : 1000,
      paginationSpeed : 400,
	  items : 4,
      margin: 30,
	  dots :false,
	  navText :['<i class="fa fa-chevron-left"></i>','<i class="fa fa-chevron-right"></i>'], 
      responsive: {
        0: {
            items: 1
        },
        768: {
            items: 3
        },
        992: {
            items: 4
        }
      } 	  
  });
/*--------------------------
Home Page product carousel active code
---------------------------- */	
  $(".home-two-all-product").owlCarousel({ 
      nav : true, // Show next and prev buttons
      slideSpeed : 1000,
      paginationSpeed : 400,
	  items : 4,
	  dots :false,
	  navText :['<i class="fa fa-chevron-left"></i>','<i class="fa fa-chevron-right"></i>'],
      responsive: {
        0: {
            items: 1
        },
        768: {
            items: 3
        },
        992: {
            items: 3
        },
        1200: {
            items: 4
        }
      }   
  });
/*--------------------------
Single Page Single All Product carousel active code
---------------------------- */	
  $(".single-all-product").owlCarousel({ 
  	  itemsDesktop :[1199,3],
      nav : true, // Show next and prev buttons
      slideSpeed : 1000,
      paginationSpeed : 400,
	  items : 3,
	  dots :false,
      margin: 30,
	  navText :['<i class="fa fa-chevron-left"></i>','<i class="fa fa-chevron-right"></i>'], 
      responsive: {
        0: {
            items: 1
        },
        768: {
            items: 2
        },
        992: {
            items: 3
        },
      }  
  });
/*--------------------------
right-featured active code
---------------------------- */
  $("#owl-right-featured").owlCarousel({
      nav : true, // Show next and prev buttons
      slideSpeed : 3000,
      paginationSpeed : 400,
      singleItem:true,
	  dots :false,
	  navText :['<i class="fa fa-angle-left"></i>','<i class="fa fa-angle-right"></i>'], 
  });
/*--------------------------
single-feature active code
---------------------------- */
  $(".left-single-feature").owlCarousel({
  	  itemsDesktop : [1199,1],
	  itemsDesktopSmall : [992,1],
	  itemsTablet: [767,2],
	  itemsMobile : [479,1],
      nav : false, // Show next and prev buttons
      slideSpeed : 3000,
      paginationSpeed : 400, 
	  dots :true,  
	  items : 1,
  });
/*--------------------------
Home Page two single-feature active code
---------------------------- */
  $(".home-tow-left-featured").owlCarousel({
  	  itemsDesktop : [1199,1],
	  itemsDesktopSmall : [991,2],
	  itemsTablet: [767,2],
	  itemsMobile : [479,1],
      nav : false, // Show next and prev buttons
      slideSpeed : 3000,
      paginationSpeed : 400, 
	  dots :true,  
	  items : 1,
      responsive: {
        0: {
            items: 1
        },
        768: {
            items: 2
        },
        992: {
            items: 1
        }
      }
  });
  
  /*--------------------------
all-seal-product active code
---------------------------- */
  $(".all-seal-product").owlCarousel({  
	  autoPlay: false, 
	  slideSpeed:2000,
	  items : 1,
	  dots:false,
	  nav:false,
	  itemsDesktop : [1199,1],
	  itemsDesktopSmall : [979,2],
	  itemsMobile : [479,1],
	  rewindNav : false,
	  lazyLoad : true,
      responsive: {
        0: {
            items: 1
        },
        768: {
            items: 2
        },
        992: {
            items: 1
        }
      }
  });
/*--------------------------
blog owlCarousel active code
---------------------------- */  
  $(".all-blog").owlCarousel({
      nav : false, // Show next and prev buttons
      slideSpeed : 3000,
      paginationSpeed : 400,
      singleItem:true,
	  dots :true,  
	  items : 1,
  });
/*--------------------------
client logo owlCarousel active
---------------------------- */     
    $(".cl-logo").owlCarousel({
      nav : true, // Show next and prev buttons
      slideSpeed : 1000,
      paginationSpeed : 400, 
	  dots :false,
      margin: 30,
	  items : 6, 
	  navText :['<i class="fa fa-chevron-left"></i>','<i class="fa fa-chevron-right"></i>'],
      responsive: {
        0: {
            items: 1,
        },
        480: {
            items: 2,
        },
        768: {
            items: 3
        },
        992: {
            items: 5
        },
        1200: {
            items: 6
        }
      }
  });
	/*-------------------------------------------
	elevateZoom
	-------------------------------------------- */	
	$("#zoom1").elevateZoom({
		gallery:'gallery_01', 
		cursor: 'pointer', 
		galleryActiveClass: "active", 
		imageCrossfade: true,
		zoomType: "inner"
	});
	/*-------------------------------------------
	bxSlider
	-------------------------------------------- */	
	$('.bxslider').bxSlider({
		slideWidth: 200,
		slideMargin:10,
		minSlides: 2,
		maxSlides: 2,
		pager: false,
		speed: 500,
		pause: 3000,
		adaptiveHeight: false
	});
    /*--------------------------
    tooltip active jquery 
    ---------------------------- */  
    var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
    var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
      return new bootstrap.Tooltip(tooltipTriggerEl)
    })
	 
/*---------------------
 price slider
--------------------- */  
	
	  $( "#slider-range" ).slider({
	   range: true,
	   min: 40,
	   max: 600,
	   values: [ 60, 570 ],
	   slide: function( event, ui ) {
		$( "#amount" ).val( "£" + ui.values[ 0 ] + " - £" + ui.values[ 1 ] );
	   }
	  });
	  $( "#amount" ).val( "£" + $( "#slider-range" ).slider( "values", 0 ) +
	   " - £" + $( "#slider-range" ).slider( "values", 1 ) );
/*---------------------
	Category menu
--------------------- */
 	$('#cate-toggle li.has-sub>a').on('click', function(){
		$(this).removeAttr('href');
		var element = $(this).parent('li');
		if (element.hasClass('open')) {
			element.removeClass('open');
			element.find('li').removeClass('open');
			element.find('ul').slideUp();
		}
		else {
			element.addClass('open');
			element.children('ul').slideDown();
			element.siblings('li').children('ul').slideUp();
			element.siblings('li').removeClass('open');
			element.siblings('li').find('li').removeClass('open');
			element.siblings('li').find('ul').slideUp();
		}
	});
	$('#cate-toggle>ul>li.has-sub>a').append('<span class="holder"></span>');
	
/*-----------------------------------------
	cart plus minus button
--------------------------------------------*/	  
	 $(".cart-plus-minus-button").append('<div class="dec qtybutton">-</div><div class="inc qtybutton">+</div>');
	  $(".qtybutton").on("click", function() {
		var $button = $(this);
		var oldValue = $button.parent().find("input").val();
		if ($button.text() == "+") {
		  var newVal = parseFloat(oldValue) + 1;
		} else {
		   // Don't allow decrementing below zero
		  if (oldValue > 0) {
			var newVal = parseFloat(oldValue) - 1;
			} else {
			newVal = 0;
		  }
		  }
		$button.parent().find("input").val(newVal);
	  }); 
 
	 
	  
})(jQuery);   
  
 
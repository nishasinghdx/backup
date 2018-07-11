(function() {
  var __sections__ = {};
  (function() {
    for(var i = 0, s = document.getElementById('sections-script').getAttribute('data-sections').split(','); i < s.length; i++)
      __sections__[s[i]] = true;
  })();
  (function() {
  if (!__sections__["about"]) return;
  try {
    


$(document).ready(function() {

//Sort random function
function random(owlSelector){
owlSelector.children().sort(function(){
return Math.round(Math.random()) - 0.5;
}).each(function(){
$(this).appendTo(owlSelector);
});
}

$("#test-car").owlCarousel({
navigation: true,
items : 1,
itemsCustom: false,
itemsDesktop: [1199, 1],
itemsDesktopSmall: [980, 1],
itemsTablet: [630, 1],
itemsTabletSmall: false,
itemsMobile: [479, 1],
navigationText: [
"<i class='fa fa-angle-left '></i>",
"<i class='fa fa-angle-right icon-white'></i>"
],
//Call beforeInit callback, elem parameter point to $("#owl-demo")
beforeInit : function(elem){
random(elem);
}

});

});





  } catch(e) { console.error(e); }
})();

(function() {
  if (!__sections__["filter-grid-type-3"] && !window.DesignMode) return;
  try {
    



$("area[rel^='prettyPhoto']").prettyPhoto();
$(".gallery:first a[rel^='prettyPhoto']").prettyPhoto({animation_speed:'normal',theme:'pp_default',slideshow:3000, autoplay_slideshow: false,social_tools: false,counter_separator_label: false});
$(".gallery:gt(0) a[rel^='prettyPhoto']").prettyPhoto({animation_speed:'fast',slideshow:10000, hideflash: true});




  } catch(e) { console.error(e); }
})();

(function() {
  if (!__sections__["header-model-1"]) return;
  try {
    
jQuery(function($){ 
function dropDown() {
	elementClick = '.header_toggle';
	elementSlide = '.header_slide_element';
	activeClass  = 'active';
	$(elementClick).on('click', function(e) {
		e.stopPropagation();
		var subUl = $(this).next(elementSlide);
		$(this).toggleClass(activeClass);
		
		$(elementClick).not(this).removeClass(activeClass);
		e.preventDefault();
	});
	$(document).on('click', elementSlide, function(e) {
		e.stopPropagation();
	});
	$(document).on('click', function(e) {
		e.stopPropagation();
		if (e.which != 3) {
			var elementHide = $(elementClick).next(elementSlide);
			// $(elementHide).hide();
			$(elementClick).removeClass('active');
		}
	});
}
dropDown()
});

new UISearch( document.getElementById( 'sb-search' ) );

  } catch(e) { console.error(e); }
})();

(function() {
  if (!__sections__["header-model-4"]) return;
  try {
    

      if (jQuery.cookie('headerTop') == 'closed') {
        jQuery('.header-top').fadeOut();
      }

      jQuery('.header-top a.close').bind('click',function(){
        jQuery('.header-top').fadeOut();
        jQuery.cookie('headerTop', 'closed', {expires:-1, path:'/'});
      });  

jQuery(function($){ 
      function dropDown() {
        elementClick = '.header_toggle';
        elementSlide = '.header_slide_element';
        activeClass  = 'active';
        $(elementClick).on('click', function(e) {
          e.stopPropagation();
          var subUl = $(this).next(elementSlide);
          $(this).toggleClass(activeClass);

          $(elementClick).not(this).removeClass(activeClass);
          e.preventDefault();
        });
        $(document).on('click', elementSlide, function(e) {
          e.stopPropagation();
        });
        $(document).on('click', function(e) {
          e.stopPropagation();
          if (e.which != 3) {
            var elementHide = $(elementClick).next(elementSlide);
            // $(elementHide).hide();
            $(elementClick).removeClass('active');
          }
        });
      }
      dropDown()
    });
new UISearch( document.getElementById( 'sb-search' ) );

  } catch(e) { console.error(e); }
})();

(function() {
  if (!__sections__["header-model-5"]) return;
  try {
    

jQuery(function($){ 
      function dropDown() {
        elementClick = '.header_toggle';
        elementSlide = '.header_slide_element';
        activeClass  = 'active';
        $(elementClick).on('click', function(e) {
          e.stopPropagation();
          var subUl = $(this).next(elementSlide);
          $(this).toggleClass(activeClass);

          $(elementClick).not(this).removeClass(activeClass);
          e.preventDefault();
        });
        $(document).on('click', elementSlide, function(e) {
          e.stopPropagation();
        });
        $(document).on('click', function(e) {
          e.stopPropagation();
          if (e.which != 3) {
            var elementHide = $(elementClick).next(elementSlide);
            // $(elementHide).hide();
            $(elementClick).removeClass('active');
          }
        });
      }
      dropDown()
    });

new UISearch( document.getElementById( 'sb-search' ) );

  } catch(e) { console.error(e); }
})();

(function() {
  if (!__sections__["sidebar-bestsellers"]) return;
  try {
    
$(document).ready(function(){
var top_products_count = $('.top-products li').length;
      if(top_products_count > 1) { $('.top_products_nav').css('display','block');}
      else {$('.top_products_nav').css('display','none');}
      var top_products = $(".top-products");
      top_products.owlCarousel({
        items: 1,
        itemsCustom: false,
        itemsDesktop: [1199, 1],
        itemsDesktopSmall: [980, 1],
        itemsTablet: [630, 1],
        itemsTabletSmall: false,
        itemsMobile: [479, 1],
        singleItem: false,
        itemsScaleUp: false,
        responsive: true,
        responsiveRefreshRate: 200,
        responsiveBaseWidth: window,
        autoPlay: false,
        stopOnHover: false,
        navigation: false,
        pagination:false
      });
      // Custom Navigation Events
      $(".top_products_nav .next").click(function(){
        top_products.trigger('owl.next');
      })
      $(".top_products_nav .prev").click(function(){
        top_products.trigger('owl.prev');
      })             
});
      

  } catch(e) { console.error(e); }
})();

(function() {
  if (!__sections__["sidebar-category"]) return;
  try {
    
$(document).ready(function(){
$(".dt-menu-expand").click(function(event){
event.preventDefault();
if( $(this).hasClass("dt-mean-clicked") ){
$(this).text("+");
if( $(this).prev('ul').length ) {
$(this).prev('ul').slideUp(400);
} else {
$(this).prev('.megamenu-child-container').find('ul:first').slideUp(600);
}
} else {
$(this).text("-");
if( $(this).prev('ul').length ) {
$(this).prev('ul').slideDown(400);
} else{
$(this).prev('.megamenu-child-container').find('ul:first').slideDown(2000);
}
}

$(this).toggleClass("dt-mean-clicked");
return false;
});

});


  } catch(e) { console.error(e); }
})();

(function() {
  if (!__sections__["sidebar-promoimage"]) return;
  try {
    
$(document).ready(function(){
     $("#promo-carousel").owlCarousel({ 
      autoPlay: 3000, //Set AutoPlay to 3 seconds 
        items: 1,
        itemsCustom: false,
        itemsDesktop: [1199, 1],
        itemsDesktopSmall: [980, 1],
        itemsTablet: [630, 1],
        itemsTabletSmall: false,
        itemsMobile: [479, 1],
        singleItem: false,
        itemsScaleUp: false,
        responsive: true,
        responsiveRefreshRate: 200,
        responsiveBaseWidth: window,
        autoPlay: false,
        stopOnHover: false,
        navigation: false,
        pagination:true
 
  });
});
      

  } catch(e) { console.error(e); }
})();

})();

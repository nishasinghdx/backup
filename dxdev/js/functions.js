$(function() {
	$(document).on('focusin', '.field, textarea', function() {
		if(this.title==this.value) {
			this.value = '';
		}
	}).on('focusout', '.field, textarea', function(){
		if(this.value=='') {
			this.value = this.title;
		}
	});


	var left = {
		divFront	: -990,
		divMid		: -990,
		divBack		: -990,
		h3			: -990,
		h5			: -990,
		p			: -990,
		a			: -990
	}
	var current = {
		divFront	: 649,
		divMid		: 572,
		divBack		: 498,
		h3			: 32,
		h5			: 32,
		p			: 32,
		a			: 32
	}
	var right = {
		divFront	: 990,
		divMid		: 990,
		divBack		: 990,
		h3			: 990,
		h5			: 990,
		p			: 990,
		a			: 990
	}

	carouselInit();

	$(window).resize(function(){
		if( $(window).width() < 1023 && $(window).width() > 767 ){
			current = {
				divFront	: 476,
				divMid		: 425,
				divBack		: 366,
				h3			: 10,
				h5			: 10,
				p			: 10,
				a			: 10
			}
		}

		else if( $(window).width() < 767 ){
			current = {
				divFront	: 120,
				divMid		: 80,
				divBack		: 40,
				h3			: 10,
				h5			: 10,
				p			: 10,
				a			: 0
			}
		}

		else {
			current = {
				divFront	: 649,
				divMid		: 572,
				divBack		: 498,
				h3			: 32,
				h5			: 32,
				p			: 32,
				a			: 32
			}
		}
		
		$("#carousel").trigger("destroy", false);
		setTimeout(function() {
			carouselInit();
			$("#carousel").trigger("currentVisible", function( items ) {
				
				items.find('div.div-front')
						.css({
							left: current.divFront
						});

					items.find('div.div-mid')
						.css({
							left: current.divMid
						});

					items.find('div.div-back')
						.css({
							left: current.divBack
						});	

					items.find('h3')
						.animate({
							left: current.h3
						});

					items.find('h5')
						.animate({
							left: current.h5
						});	

					items.find('p')
						.css({
							left: current.p
						});

					items.find('a')
						.css({
							left: current.a
						});
			});
		}, 10);
	}).resize();
	
	$('#partners-slider .slider-holder2').carouFredSel({
		align: 'center',
	    items: {
			visible: "variable",
			width: "variable"
		},
		scroll: 1,
		prev: ".prev-arr",
		next: ".next-arr"
	});


	$('#navigation a.nav-btn').click(function(){
		$(this).closest('#navigation').find('ul').stop(true,true).slideToggle()
		$(this).find('span').toggleClass('active')
		return false;
	})

	// homepage carousel auto time
	var carousel_auto = 1500;

	function carouselInit(){
		var isScrolling = false;

		$('#carousel').carouFredSel({
			pagination: ".pagination",
			scroll	: {
				duration		: 0,
				pauseDuration	: 900,
				wipe: true
			},
			auto	: false,
			prev	: {
				button		: '#prev',
				key: 'left',
				conditions	: function() {
					return (!isScrolling);
				},
				onBefore	: function(oldI, newI) {
					isScrolling = true;

					$(this).delay(300);

					oldI.find('div.div-front')
						.delay(50)
						.animate({
							left: right.divFront
						});

					oldI.find('div.div-mid')
						.delay(100)
						.animate({
							left: right.divMid
						});

					oldI.find('div.div-back')
						.delay(200)
						.animate({
							left: right.divBack
						});	

					oldI.find('h3')
						.delay(400)
						.animate({
							left: right.h3
						});

					oldI.find('h5')
						.delay(300)
						.animate({
							left: right.h5
						});	

					oldI.find('p')
						.delay(500)
						.animate({
							left: right.p
						});

					oldI.find('a')
						.delay(600)
						.animate({
							left: right.a
						});
				},
				onAfter: function(oldI, newI) {
					oldI.find('div.div-front')
						.css({
							left: current.divFront
						});

					oldI.find('div.div-mid')
						.css({
							left: current.divMid
						});

					oldI.find('div.div-back')
						.css({
							left: current.divBack
						});	

					oldI.find('h3')
						.animate({
							left: current.h3
						});

					oldI.find('h5')
						.animate({
							left: current.h5
						});	

					oldI.find('p')
						.css({
							left: current.p
						});

					oldI.find('a')
						.css({
							left: current.a
						});

					newI.find('div.div-front')
						.css({
							left: left.divFront
						}).delay(50)
						.animate({
							left: current.divFront
						}, function() {
							isScrolling = false;
						});

					newI.find('div.div-mid')
						.css({
							left: left.divMid
						}).delay(100)
						.animate({
							left: current.divMid
						});

					newI.find('div.div-back')
						.css({
							left: left.divBack
						}).delay(200)
						.animate({
							left: current.divBack
						});	

					newI.find('h3')
						.css({
							left: left.h3
						}).delay(400)
						.animate({
							left: current.h3
						});

					newI.find('h5')
						.css({
							left: left.h5
						}).delay(300)
						.animate({
							left: current.h5
						});	

					newI.find('p')
						.css({
							left: left.p
						}).delay(500)
						.animate({
							left: current.p
						});

					newI.find('a')
						.css({
							left: left.a
						}).delay(600)
						.animate({
							left: current.a
						});
				}
			},
			next	: {
				button		: '#next',
				key: 'right',
				conditions	: function() {
					return (!isScrolling);
				},
				onBefore	: function(oldI, newI) {
					isScrolling = true;

					$(this).delay(900);

					oldI.find('div.div-front')
						.delay(600)
						.animate({
							left: left.divFront
						});

					oldI.find('div.div-mid')
						.delay(500)
						.animate({
							left: left.divMid
						});	

					oldI.find('div.div-back')
						.delay(400)
						.animate({
							left: left.divBack
						});

					oldI.find('h3')
						.delay(100)
						.animate({
							left: left.h3
						});

					oldI.find('h5')
						.delay(50)
						.animate({
							left: left.h5
						});	

					oldI.find('p')
						.delay(200)
						.animate({
							left: left.p
						});

					oldI.find('a')
						.delay(300)
						.animate({
							left: left.a
						});
				},
				onAfter: function(oldI, newI) {
					oldI.find('div.div-front')
						.css({
							left: current.divFront
						});

					oldI.find('div.div-mid')
						.css({
							left: current.divMid
						});

					oldI.find('div.div-back')
						.css({
							left: current.divBack
						});	

					oldI.find('h3')
						.animate({
							left: current.h3
						});

					oldI.find('h5')
						.animate({
							left: current.h5
						});	

					oldI.find('p')
						.css({
							left: current.p
						});

					oldI.find('a')
						.css({
							left: current.a
						});

					newI.find('div.div-front')
						.css({
							left: right.divFront
						}).delay(600)
						.animate({
							left: current.divFront
						});

					newI.find('div.div-mid')
						.css({
							left: right.divMid
						}).delay(500)
						.animate({
							left: current.divMid
						});	

					newI.find('div.div-back')
						.css({
							left: right.divBack
						}).delay(400)
						.animate({
							left: current.divBack
						});

					newI.find('h3')
						.css({
							left: right.h3
						}).delay(100)
						.animate({
							left: current.h3
						});

					newI.find('h5')
						.css({
							left: right.h5
						}).delay(50)
						.animate({
							left: current.h5
						});	

					newI.find('p')
						.css({
							left: right.p
						}).delay(200)
						.animate({
							left: current.p
						});

					newI.find('a')
						.css({
							left: right.a
						}).delay(300)
						.animate({
							left: current.a
						}, function() {
							isScrolling = false;
						});
				}
			}
		});


		// auto carousel
		if( typeof(carousel_auto) != 'undefined' && carousel_auto > 0 ) {
			window.clearInterval( interval );
			var interval = window.setInterval(function(){
				$('#next').trigger('click');
			}, carousel_auto);
		}

	}
});
function isMobile() {
    if( navigator.userAgent.match(/Android/i)
        || navigator.userAgent.match(/webOS/i)
        || navigator.userAgent.match(/iPhone/i)
        || navigator.userAgent.match(/iPad/i)
        || navigator.userAgent.match(/iPod/i)
        || navigator.userAgent.match(/BlackBerry/i)
        || navigator.userAgent.match(/Windows Phone/i)
    ){
        return true;
    }
    else {
        return false;
    }
}


function animateHeader() {
    particlesJS('particles-js',

        {
            "particles": {
                "number": {
                    "value": 130,
                    "density": {
                        "enable": false,
                        "value_area": 800
                    }
                },
                "color": {
                    "value": "#ffffff"
                },
                "shape": {
                    "type": "circle",
                    "stroke": {
                        "width": 0,
                        "color": "#000000"
                    },
                    "polygon": {
                        "nb_sides": 3
                    },
                    "image": {
                        "src": "img/github.svg",
                        "width": 100,
                        "height": 100
                    }
                },
                "opacity": {
                    "value": 0.5,
                    "random": false,
                    "anim": {
                        "enable": false,
                        "speed": 1,
                        "opacity_min": 0.1,
                        "sync": false
                    }
                },
                "size": {
                    "value": 1,
                    "random": true,
                    "anim": {
                        "enable": false,
                        "speed": 40,
                        "size_min": 0.1,
                        "sync": false
                    }
                },
                "line_linked": {
                    "enable": true,
                    "distance": 150,
                    "color": "#ffffff",
                    "opacity": 0.4,
                    "width": 1
                },
                "move": {
                    "enable": true,
                    "speed": 2,
                    "direction": "none",
                    "random": false,
                    "straight": false,
                    "out_mode": "out",
                    "bounce": false,
                    "attract": {
                        "enable": false,
                        "rotateX": 600,
                        "rotateY": 1200
                    }
                }
            },
            "interactivity": {
                "detect_on": "canvas",
                "events": {
                    "onhover": {
                        "enable": false,
                        "mode": "repulse"
                    },
                    "onclick": {
                        "enable": true,
                        "mode": "push"
                    },
                    "resize": true
                },
                "modes": {
                    "grab": {
                        "distance": 400,
                        "line_linked": {
                            "opacity": 1
                        }
                    },
                    "bubble": {
                        "distance": 400,
                        "size": 40,
                        "duration": 2,
                        "opacity": 8,
                        "speed": 3
                    },
                    "repulse": {
                        "distance": 200,
                        "duration": 0.4
                    },
                    "push": {
                        "particles_nb": 4
                    },
                    "remove": {
                        "particles_nb": 2
                    }
                }
            },
            "retina_detect": true
        }

    );
}



$(function() {

    $('#banner-content').on('click', function(e) {
	    e.preventDefault();
	    window.location.href = '//icos.icobox.io';
            return false;
    });

    $('.telega').on('click', function(e) {
       ga('send', 'event', 'telegram', 'click');
    });


    $('.mobile-menu-action').click(function (e) {
        $(this).toggleClass('open');
        $('.mobile-menu').toggleClass('open');
        $('.out-wrap').toggleClass('blur');
    });

    $('.open-contact-modal').click(function (e) {
        e.preventDefault();
        $('.contact-modal').addClass('open');
        $('.out-wrap').addClass('blur');
    });

    $('.close-modal').click(function (e) {
        e.preventDefault();
        $('.contact-modal').removeClass('open');
        $('.out-wrap').removeClass('blur');
    });

    $('.confirm-modal').on('click', function(e) {
        e.preventDefault();
        $('.confirm-modal').removeClass('open');
        $('.out-wrap').removeClass('blur');
        return false;
    });

    $('.confirm-modal2').on('click', function(e) {
        e.preventDefault();
        $('.confirm-modal2').removeClass('open');
        $('.out-wrap').removeClass('blur');
        return false;
    });

   $('nav > ul > li > a').on('click', function(e) {
      if(!$(this).parent().hasClass("telega") && !$(this).parent().hasClass("ico")) {
        //e.preventDefault();
        var target = this.hash;
        var $target = $(target);
        if($target.offset() !== undefined) {
           e.preventDefault();

           $('.mobile-menu').removeClass('open');
           $('.out-wrap').removeClass('blur');

           $('html, body').stop().animate({
               'scrollTop': $target.offset().top - 50
           }, 900, 'swing', function () {
               window.location.hash = target;
           });
        }
      }
    });

     $('.expand-box .item .head').on('click', function (e) {
        e.preventDefault();
        $(this).closest('.item').toggleClass('open');
    })


    var animateHead = true;
    if(!isMobile() && animateHead) {
        animateHeader();
    }

    $("#our-projects-carousel").owlCarousel({
        margin: 30,
        dots: false,
        nav: true,
        navText: [
            '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 512"><path d="M238.475 475.535l7.071-7.07c4.686-4.686 4.686-12.284 0-16.971L50.053 256 245.546 60.506c4.686-4.686 4.686-12.284 0-16.971l-7.071-7.07c-4.686-4.686-12.284-4.686-16.97 0L10.454 247.515c-4.686 4.686-4.686 12.284 0 16.971l211.051 211.05c4.686 4.686 12.284 4.686 16.97-.001z"/></svg>',
            '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 512"><path d="M17.525 36.465l-7.071 7.07c-4.686 4.686-4.686 12.284 0 16.971L205.947 256 10.454 451.494c-4.686 4.686-4.686 12.284 0 16.971l7.071 7.07c4.686 4.686 12.284 4.686 16.97 0l211.051-211.05c4.686-4.686 4.686-12.284 0-16.971L34.495 36.465c-4.686-4.687-12.284-4.687-16.97 0z"/></svg>'
        ],
	responsive : {
            // breakpoint from 0 up
            0 : {
                items: 1,
            },
            480 : {
                items: 2
            },
            // breakpoint from 768 up
            770 : {
                items: 2
            },
            // breakpoint from 768 up
            900 : {
                items: 3
            }
        },
    });

    var ourIcosBlock = $('.our-icos');

    ourIcosBlock.find('button').click(function (event) {
        event.preventDefault();
        $("#our-projects-carousel").addClass('owl-detail');
        $(this).hide();
        return false;
    });

});

$( document ).ready(function() {

    $('#app_form').on('submit', function (e) {
        e.preventDefault();

        $.ajax({
            url: $(this).attr("action"),
            type: $(this).attr("method"),
            dataType: "json",
            data: $('#app_form').serialize(),
            success: function (data) {
                if (data.status) {

                    $('form input').val('');
                    $('form input').removeClass('has-error');
                    $('.error-msg').hide();
                    $('.contact-modal').removeClass('open');
                    $('.confirm-modal2').toggleClass('open');
                    ga('send', 'event', 'app-form', 'submit');
fbq('track', 'Lead', {
	value: 0.00,
	currency: 'USD',
	content_name: $('#app_form input[name=name]').val(),
	content_category: $('#app_form input[name=email]').val()
});

                    refreshCaptcha();
                    return false;
                } else {
                    if (Object.keys(data.errors) !== 0) {

                        $.each(data.errors, function (key, val) {
                            if (val != "") {
                                    $('.error-msg').show();
                                    $('.error-msg').html(val);
                                    $('#app_form input[name="' + key + '"]').addClass("has-error");

                            } else {
                                    $('#app_form input[name="' + key + '"]').removeClass("has-error");

                            }
                        });
                    }
                    return false;
                }
            },
        });
    });

    $('#contact_form').on('submit', function (e) {
        e.preventDefault();

        $.ajax({
            url: $(this).attr("action"),
            type: $(this).attr("method"),
            dataType: "json",
            data: $('#contact_form').serialize(),
            success: function (data) {
                if (data.status) {

                    $('form input').val('');
                    $('form input').removeClass('has-error');
                    $('.error-msg').hide();
                    $('.confirm-modal').toggleClass('open');
                    ga('send', 'event', 'contact-form', 'submit');
fbq('track', 'Lead', {
	value: 0.00,
	currency: 'USD',
	content_name: $('#contact_form input[name=name]').val(),
	content_category: $('#contact_form input[name=email]').val()
});
refreshCaptcha2();
                    return false;
                } else {
                    if (Object.keys(data.errors) !== 0) {
                        $.each(data.errors, function (key, val) {
                            if (val != "") {

                                $('.error-msg').show();
                                $('.error-msg').html(val);
                                $('#contact_form input[name="' + key + '"]').addClass("has-error");
                            } else {

                                $('#contact_form input[name="' + key + '"]').removeClass("has-error");
                            }
                        });
                    }
 refreshCaptcha2();
                    return false;
                }
            },
        });
    });

    $('#lang_switch').on('change', function(e) {
        e.preventDefault();
        if($(this).val()=='1') {
            window.location.href = "/ru";
        } else {
            window.location.href = "/";
        }
        return false;
    });


    $('.lang-mob').on('click', function(e){
        e.preventDefault();
        if(e.offsetY < 0) {
            if ($(this).val() == '1') {
                window.location.href = "/ru";
            } else {
                window.location.href = "/";
            }
        }
        return false;
    });


});

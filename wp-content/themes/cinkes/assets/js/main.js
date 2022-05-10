(function ($) {
"use strict";

// meanmenu
$('#mobile-menu').meanmenu({
	meanMenuContainer: '.mobile_menu',
	meanScreenWidth: "991"
});

// menu-last class
  $('.cinkes_menu > ul > li').slice(-3).addClass('menu-last');

$(window).on('scroll', function () {
	var scroll = $(window).scrollTop();
	if (scroll < 200) {
		$(".header-sticky").removeClass("sticky");
	} else {
		$(".header-sticky").addClass("sticky");
	}
});

//mobile side menu
$('.side-toggle').on('click', function () {
	$('.side-info').addClass('info-open');
	$('.offcanvas-overlay').addClass('overlay-open');
})

$('.side-info-close,.offcanvas-overlay').on('click', function () {
	$('.side-info').removeClass('info-open');
	$('.offcanvas-overlay').removeClass('overlay-open');
})
	
/*------------------------------------
 Magic Curson
--------------------------------------*/

$('.admin-cursor-magic').on('click', function() {
	$('.mouse-cursor-invisible').addClass('visible');
	console.log('magic cursor clicked');
});
$('.admin-cursor-default').on('click', function() {
	$('.mouse-cursor-invisible').removeClass('visible');
	console.log('default cursor clicked');
});


function sliderActive() {
	/*------------------------------------
	Slider
	--------------------------------------*/
	if (jQuery(".slider-active").length > 0) {
		let sliderActive1 = '.slider-active';
		let sliderInit1 = new Swiper(sliderActive1, {
			// Optional parameters
			slidesPerView: 1,
			rtl: false,
			slidesPerColumn: 1,
			paginationClickable: true,
			loop: true,
			effect: 'fade',

			autoplay: {
				delay: 5000,
			},

			// If we need pagination
	        pagination: {
				el: ".cinkes-swiper-pagination",
				clickable: true,
			},

			// Navigation arrows
			navigation: {
				nextEl: '.swiper-button-next',
				prevEl: '.swiper-button-prev',
			},

			a11y: false
		});

		function animated_swiper(selector, init) {
			let animated = function animated() {
				$(selector + ' [data-animation]').each(function () {
					let anim = $(this).data('animation');
					let delay = $(this).data('delay');
					let duration = $(this).data('duration');

					$(this).removeClass('anim' + anim)
						.addClass(anim + ' animated')
						.css({
							webkitAnimationDelay: delay,
							animationDelay: delay,
							webkitAnimationDuration: duration,
							animationDuration: duration
						})
						.one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function () {
							$(this).removeClass(anim + ' animated');
						});
				});
			};
			animated();
			// Make animated when slide change
			init.on('slideChange', function () {
				$(sliderActive1 + ' [data-animation]').removeClass('animated');
			});
			init.on('slideChange', animated);
		}

		animated_swiper(sliderActive1, sliderInit1);
	}}

function projectSlider() {
	const project_slider = new Swiper(".cinkes_project_container", {
	slidesPerView: 2,
	centeredSlides: true,
	spaceBetween: 60,
	rtl: false,
	grabCursor: true,
	observer: true,
	observeParents: true,
	loop: true,
	pagination: {
	  el: ".cinkes_projects_pagination",
	  clickable: true,
	},
	navigation: {
		nextEl: ".cinkes_projects_next",
		prevEl: ".cinkes_projects_prev",
	  },
	  breakpoints: {
		320: {
			slidesPerView: 1,
			centeredSlides: true,
			grabCursor: false,
			},
		576: {
			slidesPerView: 1,
			centeredSlides: true,
			grabCursor: false,
		},
		768: {
			slidesPerView: 2,
		},
		993: {
			slidesPerView: 2,
		},
	}
  });}



// cinkes_testimonial_spage_active

function testimonialActive() {
	const cinkes_testimonial_spage_active = new Swiper(".cinkes_testimonial_spage_active", {
		slidesPerView: 2,
		spaceBetween: 30,
		loop: true,
		rtl: false,
		navigation: {
			nextEl: ".cinkes_testimonial_spage_next",
			prevEl: ".cinkes_testimonial_spage_prev",
		  },
		  breakpoints: {
			0: {
				slidesPerView: 1,
				},
			576: {
				slidesPerView: 1,
			},
			768: {
				slidesPerView: 1,
			},
			992: {
				slidesPerView: 2,
			},
		}
	  });}




 function recentProjectActive() {
 	 // portfolio details
	  if (jQuery(".recent-project-active-1").length > 0) {
		let swiperrecent = new Swiper('.recent-project-active-1', {
			slidesPerView: 3,
			spaceBetween: 5,
			// direction: 'vertical',
			loop: true,
			centeredSlides: true,
			rtl: false,
			infinite: false,
			grabCursor: true,
			autoplay: {
				delay: 2000,
			},

			// If we need pagination
			pagination: {
				el: '.recent-swiper-pagination',
				clickable: true,
			},

			// Navigation arrows
			navigation: {
				nextEl: '.recent-swiper-button-next',
				prevEl: '.swiper-button-prev',
			},

			// And if we need scrollbar
			scrollbar: {
				el: '.recent-scrollbar',
				dynamicBullets: true,
			},
			breakpoints: {
				0: {
					slidesPerView: 1,
					},
				576: {
					slidesPerView: 1,
				},
				768: {
					slidesPerView: 1,
				},
				992: {
					slidesPerView: 2,
				},
				1199: {
					slidesPerView: 2,
				},
			}

		});}}


// Active Odometer Counter 
jQuery('.odometer').appear(function (e) {
	var odo = jQuery(".odometer");
	odo.each(function () {
		var countNumber = jQuery(this).attr("data-count");
		jQuery(this).html(countNumber);
	});
});


function sliderTestimonialActive() {
	// Testimonial slider active

	const slider_thumb = new Swiper('.cinkes_testimonial_thumbs_active', {
		loop: true,
		spaceBetween: 5,
		slidesPerView: 3,
		freeMode: true,
		rtl: false,
		watchSlidesVisibility: true,
		watchSlidesProgress: true,
		breakpoints: {
			320: {
				slidesPerView: 1,
				},
			576: {
				slidesPerView: 1,
			},
			768: {
				slidesPerView: 3,
			},
			993: {
				slidesPerView: 3,
			},
		}
	});
	const slider3 = new Swiper('.cinkes_testimonial_message_active', {
		loop: true,
		spaceBetween: 30,
		rtl: false,
		slidesPerView: 1,
		effect: 'fade',
		fadeEffect: {
		  crossFade: true
		},
		navigation: {
			nextEl: ".cinkes_testimonial_next",
			prevEl: ".cinkes_testimonial_prev",
		  },
		pagination: {
			el: ".cinkes_testimonial_pagination",
		  },
		thumbs: {
		  swiper: slider_thumb,
		},
	});
}
function brandActive() {
	const brand_active = new Swiper('.cinkes_brand_active', {
		loop: true,
		rtl: false,
		slidesPerView: 4,

		breakpoints: {
			320: {
				slidesPerView: 1,
				},
			576: {
				slidesPerView: 2,
			},
			768: {
				slidesPerView: 3,
			},
			993: {
				slidesPerView: 4,
			},
		}
	});}

function CinkesVideosThumb() {
	var cinkes_video_thumb = new Swiper(".cinkes_video_thumb", {
		spaceBetween: 0,
		slidesPerView: 4,
		rtl: false,
		freeMode: true,
		watchSlidesProgress: true,
		breakpoints: {
			320: {
				slidesPerView: 1,
				},
			576: {
				slidesPerView: 2,
			},
			768: {
				slidesPerView: 3,
			},
			993: {
				slidesPerView: 3,
			},
			1199: {
				slidesPerView: 4,
			},
		}
	});
	var cinkes_video = new Swiper(".cinkes_video", {
		spaceBetween: 0,
		slidesPerView: 1,
		rtl: false,
		thumbs: {
			swiper: cinkes_video_thumb,
		},
	});
}
/* magnificPopup img view */
$('.popup-image').magnificPopup({
	type: 'image',
	gallery: {
	  enabled: true
	}
});
/* magnificPopup video view */
$('.popup-video').magnificPopup({
	type: 'iframe'
});
$('.cinkes_free_consultaion_wrapper select, .cinkes_contact_form select').niceSelect();
// data background
$("[data-background").each(function(){
	$(this).css("background-image","url("+$(this).attr("data-background") + ") ")
})
// data width
$("[data-width]").each(function(){
	$(this).css("width",$(this).attr("data-width"))
})
// data background color
$("[data-bg-color]").each(function(){
	$(this).css("background-color",$(this).attr("data-bg-color"))
})
// data top space
$("[data-top-space]").each(function () {
	$(this).css("padding-top", $(this).attr("data-top-space"));
});
// data bottom space
$("[data-bottom-space]").each(function () {
	$(this).css("padding-bottom", $(this).attr("data-bottom-space"));
});

// isotop
if (jQuery(".filter-wrapper").length > 0) {
    $('.filter-wrapper .filter-grid').imagesLoaded(function () {
        let $grid = $('.filter-wrapper .filter-grid').isotope({
            itemSelector: '.grid-item',
            percentPosition: true,
            masonry: {
                columnWidth: '.grid-item' // columnWidth: 1
            }
        });

        // filter items on button click
        $('.filter-nav').on('click', 'button', function () {
            let filterValue = $(this).attr('data-filter');
            $grid.isotope({filter: filterValue});
        });

    });
}

//for menu active class
$('.portfolio_nav button').on('click', function(event) {
	$(this).siblings('.active').removeClass('active');
	$(this).addClass('active');
	event.preventDefault();
});


// scrollToTop
$.scrollUp({
	scrollName: 'scrollUp', // Element ID
	topDistance: '300', // Distance from top before showing element (px)
	topSpeed: 300, // Speed back to top (ms)
	animation: 'fade', // Fade, slide, none
	animationInSpeed: 200, // Animation in speed (ms)
	animationOutSpeed: 200, // Animation out speed (ms)
	scrollText: '<i class="icofont icofont-long-arrow-up"></i>', // Text for element
	activeOverlay: false, // Set CSS color to display scrollUp active point, e.g '#00FFFF'
});

// WOW active
new WOW().init();

var navexpander = $('#nav-expander, #nav-expander2');
if(navexpander.length){
	$('#nav-expander, #nav-expander2, #nav-close, #nav-close2, .offwrap').on('click',function(e){
		e.preventDefault();
		$('body').toggleClass('nav-expanded');
	});
}



sliderActive();
projectSlider();
testimonialActive();
recentProjectActive();
sliderTestimonialActive();
brandActive();
CinkesVideosThumb();

})(jQuery);




// cursor js

 // 11. Mouse Custom Cursor
function itCursor() {
    var myCursor = jQuery(".mouseCursor");
    if (myCursor.length) {
        if ($("body")) {
            const e = document.querySelector(".cursor-inner"),
                t = document.querySelector(".cursor-outer");
            let n,
                i = 0,
                o = !1;
            (window.onmousemove = function(s) {
                o ||
                    (t.style.transform =
                        "translate(" + s.clientX + "px, " + s.clientY + "px)"),
                    (e.style.transform =
                        "translate(" + s.clientX + "px, " + s.clientY + "px)"),
                    (n = s.clientY),
                    (i = s.clientX);
            }),
            $("body").on("mouseenter", "button, a, .cursor-pointer", function() {
                    e.classList.add("cursor-hover"), t.classList.add("cursor-hover");
                }),
                $("body").on("mouseleave", "button, a, .cursor-pointer", function() {
                    ($(this).is("a", "button") &&
                        $(this).closest(".cursor-pointer").length) ||
                    (e.classList.remove("cursor-hover"),
                        t.classList.remove("cursor-hover"));
                }),
                (e.style.visibility = "visible"),
                (t.style.visibility = "visible");
        }
    }
}
itCursor();
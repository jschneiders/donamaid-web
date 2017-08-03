$(document).ready(function(){

	$('#saiba-mais').on('click', function(){
		var body = $(this);
		var top = $('.about').offset().top;
		$('html, body').animate({
		       scrollTop: $(".about").offset().top - 20
		}, 2000);
	});

});

document.addEventListener('DOMContentLoaded', function(){
      Typed.new('#typed', {
        /*stringsElement: document.getElementById('typed-strings'),*/
        strings: ["livre", "leve", "digital", "donie"],
        typeSpeed: 50,
        startDelay: 240,
        backSpeed: 30,
        callback: function() {
        backDelay: 240,
        	$('.fade,.links').delay(400).fadeIn('slow');
        	
        }
      });

      $('.cards-grid').slick({
        autoplay: true,
        autoplaySpeed: 2000,
        responsive: [
          {
            breakpoint: 2400,
            settings: {
              slidesToShow: 3,
              slidesToScroll: 1
            }
          },
          {
            breakpoint: 1024,
            settings: {
              slidesToShow: 2,
              slidesToScroll: 1
            }
          },
          {
            breakpoint: 768,
            settings: {
              slidesToShow: 1,
              slidesToScroll: 1
            }
          }
        ]
      });
  });

$(window).scroll(function(){
	$('.cards-container, .resume h2, .resume p, .donie h2, .donie p, .donie button, .midia h2, .midia p, .midia a').each(function(){
		if (($(this).offset().top - $(window).scrollTop()) < 750) { //<---mark the $(this).offset().top of current object
			console.log($(this).offset().top - $(window).scrollTop());
          $(this).stop().fadeTo(200, 1); //<----fadeOut the current obj
      }

	});
});
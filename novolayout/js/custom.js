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
  });

$(window).scroll(function(){
	$('.cards-container, .resume h2, .resume p, .donie h2, .donie p, .donie button, .midia h2, .midia p, .midia a').each(function(){
		if (($(this).offset().top - $(window).scrollTop()) < 750) { //<---mark the $(this).offset().top of current object
			console.log($(this).offset().top - $(window).scrollTop());
          $(this).stop().fadeTo(200, 1); //<----fadeOut the current obj
      }

	});
});
jQuery( document ).ready(function($) {
  
  $('.project-views-list li:last-child()')
  	.css('border-bottom', 'none');
 
  
    $('.project-views-list li:first-child()')  		
  		.css('background','transparent url(https://mrstevedev.io/wp-content/uploads/2018/11/iconmonstr-triangle-3.svg) 12px center no-repeat')
  		.css('background-size', '12px 17px')
  
  $('.frame img.screen:not(:nth-child(2))').css('opacity','0');
  
  
  
   $('.project-views-list li:nth-child(1)').on('click', function() {
    $('.frame img.screen:nth-child(2)').css('opacity', '1');
    $('.frame img.screen:nth-child(3)').css('opacity', '0');
    $('.frame img.screen:nth-child(4)').css('opacity', '0');
     $('.frame img.screen:nth-child(5)').css('opacity', '0');

  });
  
  
  $('.project-views-list li:nth-child(2)').on('click', function() {
    $('.frame img.screen:nth-child(2)').css('opacity', '0');
    $('.frame img.screen:nth-child(3)').css('opacity', '1');
    $('.frame img.screen:nth-child(4)').css('opacity', '0');
    $('.frame img.screen:nth-child(5)').css('opacity', '0');
  });
  
    $('.project-views-list li:nth-child(3)').on('click', function() {
    $('.frame img.screen:nth-child(3)').css('opacity', '0');
    $('.frame img.screen:nth-child(4)').css('opacity', '1');
    $('.frame img.screen:nth-child(5)').css('opacity', '0');
  });
  
  $('.project-views-list li:nth-child(4)').on('click', function() {
    $('.frame img.screen:nth-child(3)').css('opacity', '0');
    $('.frame img.screen:nth-child(4)').css('opacity', '0');
    $('.frame img.screen:nth-child(5)').css('opacity', '1');
  });
  
  
 
  
  $('.project-views-list li:not(.link)').on('click', function() {
    $('.project-views-list li').removeClass('active')
    	.css('background','none')
		 $(this).toggleClass('active')
      		.css('background','transparent url(https://mrstevedev.io/wp-content/uploads/2018/11/iconmonstr-triangle-3.svg) 12px center no-repeat')
      		.css('background-size', '12px 17px')

  });
  

	$('.thumbs>li').on( 'hover', function(){
		$(this)
			.find('.projects-overlay')
				.toggleClass('show');
	});		

$(".navbar-toggle").on("click", function () {
		$(this).toggleClass("active");
	});

if( /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) ) {
  
  		$('nav navbar-nav li').removeClass('hvr-underline-from-center');
	}
});

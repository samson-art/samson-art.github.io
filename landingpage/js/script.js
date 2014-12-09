$( document ).ready(function() { 

	var height = $(window).height();
	console.log(height);

	$( window ).resize(function() {
		height = $(window).height();
		console.log(height);
	});

	$(window).scroll(function(){
      $('.header').css("top", 0);
  	});

	//button style
  	$( "button" ).mouseenter(function() {
  		$(this).css("background-color", "rgba(255, 255, 255, 0.9)");	
  		$(this).css("color", "#666666");	
	});
	$( "button" ).mouseleave(function() {
  		$(this).css("background-color", "#666666");	
  		$(this).css("color", "rgba(255, 255, 255, 0.9)");	
	}); 

	//text style
	$( "#body tr:not()" ).mouseenter(function() {
  		$(this).css("background-color", "rgba(255, 255, 255, 0.9)");	
  		$(this).css("color", "#666666");	
	});
	$( "#body tr:not()" ).mouseleave(function() {
  		$(this).css("background-color", "#666666");	
  		$(this).css("color", "rgba(255, 255, 255, 0.9)");	
	}); 

	//animate containers
	jQuery('.post').addClass("hidden").viewportChecker({
		classToAdd: 'visible animated bounceInLeft',
		offset: 100
	});

	//scroll to top
	$('.header').click(function () { 
     if($.browser.safari){
       $('body').animate( { scrollTop: 0 }, 1100 );
     }else{
       $('html').animate( { scrollTop: 0 }, 1100 );
     }
     return false;
   });



});


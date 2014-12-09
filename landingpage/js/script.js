$( document ).ready(function() { 

	var height = $(window).height();
	console.log(height);

	$( window ).resize(function() {
		height = $(window).height();
		console.log(height);
	});

	$(window).scroll(function(){
      $('#head').css("top", 0);
  });

  $( "._button" ).mouseenter(function() {
  		$(this).css("background-color", "rgba(255, 255, 255, 0.9)");	
  		$(this).css("color", "#666666");	
	});
	$( "._button" ).mouseleave(function() {
  		$(this).css("background-color", "#666666");	
  		$(this).css("color", "rgba(255, 255, 255, 0.9)");	
	}); 

	jQuery('.post').addClass("hidden").viewportChecker({
		classToAdd: 'visible animated bounceInLeft',
		offset: 100
	});

	$('.totop').click(function () { 
     if($.browser.safari){
       $('body').animate( { scrollTop: 0 }, 1100 );
     }else{
       $('html').animate( { scrollTop: 0 }, 1100 );
     }
     return false;
   });

});


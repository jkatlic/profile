$(document).ready(function(e){
	$(window).scroll(function(e){ //Hooks into the windows scrolling action
		var rect = document.getElementById('menu-container').getBoundingClientRect(); //gets the menu bar
			//check where the menu is
		if(rect.top <= 0){ //make the menu fixed because it will leave the page otherwise
				//manage the menu
			$('.navbar-wrapper .container').addClass('fixed-menu').removeClass('open');
			$('.navbar-brand').text("Jeremy Katlic");
			
				//manage the site controls
			$('#site-controls > #home-controls').addClass("hidden");
			$('#site-controls > #other-controls').removeClass("hidden");
		}else{ //make it styling again haha
			if(document.body.scrollTop <= 150){
				$('.navbar-wrapper .container').removeClass('fixed-menu').addClass('open');
				$('.navbar-brand').text("");
				
				$('#site-controls > #other-controls').addClass("hidden");
				$('#site-controls > #home-controls').removeClass("hidden");
			}
		}
		
		CheckCurrentSection(); //continue to check what section is in view as we scroll
	}); 
		//hooks certain anchor links to the SmoothScroll function 
	$('.smooth-scroll a[href*=#]:not([href=#])').click(function() {
		SmoothScroll( this.getAttribute("href") );
	});
	
	$( document ).tooltip({ track: true });
	
	$('.iframe').colorbox({
		iframe: true, 
		width:"85%", 
		height:"90%", 
		top: '0px', 
		overlay: '0.90', 
		"close": "<i class='fa fa-close'></i> Close",
		fastIframe: true
	});
	
	/*$('.picture').colorbox({
		rel:'gal', 
		maxHeight: '850px', 
		maxWidth: '90%', 
		"close": "<i class='fa fa-close'></i> Close",
		top: '0px'
	});*/
	
	/*
	** This is a future idea don't have the HTML setup for it yet..
	*/
	$('#switch').click(function(e){
		if($('.pretty_code').attr('class').search("hide") >= 0){
			$('.pretty_code').removeClass('hide');
			$('.frame').addClass('hide');
			$('#switch').removeClass("fa-eye-slash");
			$('#switch').addClass('fa-eye');
		}else{
			$('.frame').removeClass('hide');
			$('.pretty_code').addClass('hide');
			$('#switch').addClass("fa-eye-slash");
			$('#switch').removeClass('fa-eye');
		}
	});
	
	/*
	** This manages the sites up&down functionality. 
	*/
	$('#site-controls i').click(function(e){
		var currSect = CheckCurrentSection();
		
		if( this.getAttribute('data-task') === "up" ){ //hanlde going up
			var nextId = $("#" + currSect).prev(".profile-section").attr('id');
			if( nextId === "home" ){
				nextId = "#header-logo";
			}
			SmoothScroll( nextId );
		}else if( this.getAttribute('data-task') === "down" ){ //handle going down
			SmoothScroll( $("#" + currSect).next(".profile-section").attr('id') );
		}
	});
	
});
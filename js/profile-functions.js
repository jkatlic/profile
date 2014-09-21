var hideUpTrigger = false; //this lets us only run the if..else that determines when to display the site up control.


/*
** CheckCurrentSection
** Use: This will check all of the sites profile sections and mark the menu with the one that is currently in view.
** Return: The id of the currently active section.
** Parameter(s): N/A
*/
function CheckCurrentSection(){		
	var currElem = "";
	
	$('.profile-section').each(function(ind, elem){ //go through all of the sections until we find the one being displayed.
		var sect = document.getElementById(elem.getAttribute('id')).getBoundingClientRect();
		
		if(sect.top <= 400 && sect.top >= 0){ //catchs the elements as they pass right below the menu bar
			MakeSectionActive("#" + elem.getAttribute('id') + "-button"); //makes that menu item active
			currElem = elem.getAttribute('id');
			return false;
		}
	});
	
	if( currElem === "" ){ //catches the errors caused by nothing being close enough to the top to be active
		currElem = $('.navbar-nav').children(".active").children("a").attr("id"); //we first check the menu to see what was last active
		
		if (currElem === ""){ //if nothing was active we default it to home...
			currElem = "home";
		}else{
			currElem = currElem.split("-"); //break down the id of the menu item to get the section id. (id looks like [section-id]-button)
			currElem = currElem[0];
		}
	}
	
	if(currElem === "contact"){
		hideUpTrigger = true;
		$('#other-controls i.fa-angle-double-down').hide();
	}else if(hideUpTrigger){
		$('#other-controls i.fa-angle-double-down').show();
		hideUpTrigger = false;
	}
	return currElem;
}

/*
** MakeSectionActive
** Use: This will change the menu to show the currently active section as they scroll or what not.
** Return: N/A
** Parameter(s): String (jQuery "#id") The id of the section to be made active.
*/
function MakeSectionActive( id ){
		//only one item is active at a time, so this will reset it
	$('.navbar-nav').children(".active").removeClass("active"); 
		//get the parent li and add the active class to it.
	$(id).closest("li").addClass("active");
}

/*
** SmoothScroll
** Use: This will smoothly scroll to the section that's id was passed to the function. 
** Return: N/A
** Parameter(s): String (jQuery "#id") The id of the section to be scolled to.
*/

function SmoothScroll( to ){
	if( to.indexOf("#") < 0 ){ to = "#" + to; } //makes sure we have a valid id accessor string
	var target = $(to);
	
	if (target.length) {
		$('html,body').animate({
			scrollTop: target.offset().top - 60 //this offset accounts for the fixed menu on the top
		}, 800);
		return false;
	}
}
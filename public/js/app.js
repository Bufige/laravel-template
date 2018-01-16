var fix_nav_timer;

/*
this two functions are a fix for the margin in the nav bar.
*/

$(document).ready(function(){
	$(document).on("click", "#navbutton", function(event) {
    	$( ".licustom" ).each(function() {
    		$( this ).css( "margin-left","0px");
  		});

  		fix_nav_timer = setTimeout(fix_nav_list, 2000);

	});
});


function fix_nav_list() {
	if($('#app-navbar-collapse').is(':hidden')) {
		$( ".licustom" ).each(function() {
    		$( this ).css( "margin-left","20px");
  		});
		clearInterval(fix_nav_timer);
	}
	//bars-icon
	if($('#bars-icon').is(':hidden')) {
		$( ".licustom" ).each(function() {
    		$( this ).css( "margin-left","20px");
  		});
		clearInterval(fix_nav_timer);
	}
}
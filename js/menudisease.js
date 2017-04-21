$(document).ready(function(){
	// When page loads...:
	$("div.content div").hide(); // Hide all content
	$("nav li:first").addClass("current").show(); // Activate first tab
	$("div.content div:first").show(); // Show first tab content

	// On Click Event (within list-element!)
	$("nav li").click(function() {
		$("nav li").removeClass("current"); // Remove any active class
		$(this).addClass("current"); // Add "current" class to selected tab
		
		$("div.content div").hide(); // Hide all content

    // Find the href attribute value to identify the active tab + content:
		var activeTab = $(this).find("a").attr("href"); 
		$(activeTab).fadeIn(); //Fade in the active ID content
	}); // end click method
	
}); // end $(document).ready method
var yourtimer = setInterval(function(){yourTimer()}, 1000);
function yourTimer() {
	var yd = new Date();
	var yt = yd.toLocaleTimeString();
	document.getElementById("your_time").innerHTML = yt;
}

var ourtimer = setInterval(function(){ourTimer()}, 1000);
		
function ourTimer() {
	var offset ='+7';
	d = new Date();
	// convert to msec
	// add local time zone offset
	// get UTC time in msec
	utc = d.getTime() + (d.getTimezoneOffset() * 60000);

	// create new Date object for different city
	// using supplied offset
	nd = new Date(utc + (3600000*offset));
    document.getElementById("our_time").innerHTML = nd.toLocaleTimeString();
}
jQuery(document).ready(function($) {
	d = new Date();
	// convert to msec
	// add local time zone offset
	// get UTC time in msec
	
	utc = d.getTime() + (d.getTimezoneOffset() * 60000);
		
	var offset ='+5.5';
		
	our = new Date(utc + (3600000*offset));
		
	var ourhour = our.getHours();
		
	var yourhour = d.getHours();
	
	if (ourhour >= 0 && ourhour <= 5){
	
		jQuery( ".time-zone-support-icon" ).addClass( "dslc-icon-moon" );
	
	}

	if (ourhour >= 6 && ourhour <= 17){
	
		jQuery( ".time-zone-support-icon" ).addClass( "dslc-icon-sun" );
	
	}
	
	if (ourhour >= 18 && ourhour <= 24){
	
		jQuery( ".time-zone-support-icon" ).addClass( "dslc-icon-moon" );
	
	}
	
	if (yourhour >= 6 && yourhour <= 17){

		jQuery( ".time-zone-visitor-icon" ).addClass( "dslc-icon-sun" );
	
	}

	if (yourhour >= 18 && yourhour <= 24){
	
		jQuery( ".time-zone-visitor-icon" ).addClass( "dslc-icon-moon" );
	
	}
	if (yourhour >= 0 && yourhour <= 5){
	
		jQuery( ".time-zone-visitor-icon" ).addClass( "dslc-icon-moon" );
	
	}

});
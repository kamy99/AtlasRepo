// JavaScript Document
/* madebycat */
/* umit karaosmanoglu */

/*global $:false */



// TOP MENU and sub menu
$(function(){
	"use strict";
	
	$('.mainMenu ul li').each(function(){
		if( $(this).find('> ul').length>0 ){
			$(this).find('> a').addClass('arrow');
		}
	});

   var config = {    
         sensitivity: 3, // number = sensitivity threshold (must be 1 or higher)    
         interval: 10,  // number = milliseconds for onMouseOver polling interval    
         over: doOpen,   // function = onMouseOver callback (REQUIRED)    
         timeout: 10,   // number = milliseconds delay before onMouseOut    
         out: doClose    // function = onMouseOut callback (REQUIRED)    
    };
    
    function doOpen() {
        $(this).addClass("hover");
        $('ul:first',this).css('visibility', 'visible');
    }
 
    function doClose() {
        $(this).removeClass("hover");
        $('ul:first',this).css('visibility', 'hidden');
    }

    $(".mainMenu ul li").hoverIntent(config);
    
    $(".mainMenu ul li ul li:has(ul)").find("a:first").append(" &raquo; ");
});




/* ------------------------------------ WINDOW.LOAD ------------------------------- */
$(window).load(function(){
	"use strict";
}); // END___ window.load


/* ------------------------------------ FUNCTION ------------------------------- */
$(function(){
	"use strict";
	
	// main content slider
	$('#mainSlider').responsiveSlides({
		auto: true,             // Boolean: Animate automatically, true or false
		speed: 500,             // Integer: Speed of the transition, in milliseconds
		timeout: 10000,         // Integer: Time between slide transitions, in milliseconds
		pager: false,           // Boolean: Show pager, true or false
		nav: true,              // Boolean: Show navigation, true or false
		random: false,          // Boolean: Randomize the order of the slides, true or false
		pause: false,           // Boolean: Pause on hover, true or false
		pauseControls: true,    // Boolean: Pause when hovering controls, true or false
		prevText: "Previous",   // String: Text for the "previous" button
		nextText: "Next",       // String: Text for the "next" button
		maxwidth: "",           // Integer: Max-width of the slideshow, in pixels
		navContainer: ".mainSliderNav",       // Selector: Where controls should be appended to, default is after the 'ul'
		manualControls: "",     // Selector: Declare custom pager navigation
		namespace: "rslides",   // String: Change the default namespace used
		before: function(){},   // Function: Before callback
		after: function(){}     // Function: After callback
	});
	
	// bottom image slider
	$('#bottomSlider').responsiveSlides({
		auto: true,             // Boolean: Animate automatically, true or false
		speed: 500,             // Integer: Speed of the transition, in milliseconds
		timeout: 10000,         // Integer: Time between slide transitions, in milliseconds
		pager: false,           // Boolean: Show pager, true or false
		nav: true,              // Boolean: Show navigation, true or false
		random: false,          // Boolean: Randomize the order of the slides, true or false
		pause: false,           // Boolean: Pause on hover, true or false
		pauseControls: true,    // Boolean: Pause when hovering controls, true or false
		prevText: "Previous",   // String: Text for the "previous" button
		nextText: "Next",       // String: Text for the "next" button
		maxwidth: "",           // Integer: Max-width of the slideshow, in pixels
		navContainer: ".bottomSliderNav",       // Selector: Where controls should be appended to, default is after the 'ul'
		manualControls: "",     // Selector: Declare custom pager navigation
		namespace: "rslides",   // String: Change the default namespace used
		before: function(){},   // Function: Before callback
		after: function(){}     // Function: After callback
	});
	
	// detail content slider
	$('#detailSlider').responsiveSlides({
		auto: true,             // Boolean: Animate automatically, true or false
		speed: 500,             // Integer: Speed of the transition, in milliseconds
		timeout: 10000,         // Integer: Time between slide transitions, in milliseconds
		pager: true,           // Boolean: Show pager, true or false
		nav: false,              // Boolean: Show navigation, true or false
		random: false,          // Boolean: Randomize the order of the slides, true or false
		pause: false,           // Boolean: Pause on hover, true or false
		pauseControls: true,    // Boolean: Pause when hovering controls, true or false
		prevText: "Previous",   // String: Text for the "previous" button
		nextText: "Next",       // String: Text for the "next" button
		maxwidth: "",           // Integer: Max-width of the slideshow, in pixels
		navContainer: ".detailSliderNav",       // Selector: Where controls should be appended to, default is after the 'ul'
		manualControls: "",     // Selector: Declare custom pager navigation
		namespace: "rslides",   // String: Change the default namespace used
		before: function(){},   // Function: Before callback
		after: function(){}     // Function: After callback
	});
	
	// main menu for mobile
	$('.mainMenu ul li').each(function(){
		if( $(this).hasClass('active') ){
			$('.mainMenu .mobDropdown').html($(this).text());
			$('.mainMenu .mobDropdown').attr('id',$(this).attr('id'));
		}
	});
	$('.mainMenu .mobDropdown').click(function(){
		$('.mainMenu ul').slideUp();
		if($(this).hasClass('active')===false){
			$(this).addClass('active');
			$(this).parent().find('ul').slideDown();
			$('.mainMenu .mobDropdown').html($(this).text());
			$('.mainMenu .mobDropdown').attr('id',$(this).attr('id'));
		} else {
			$(this).parent().find('ul').slideUp('slow', function(){ $(this).parent().find('.mobDropdown').removeClass('active'); });
		}
	});
	
	// top menu mobile init
	$(".topmenu ul").tinyNav();
	
	// booking tabs
	$('#bookingTabs').easyResponsiveTabs();
	$('#detailTab').easyResponsiveTabs();
	
	// calendar init
	$('.datePick').datepick();
	
	// custom select 
	$('.customSelectInput').customSelect();
	

		
	
	/* ------------------------------------ WINDOW.RESIZE ------------------------------- */
	$(window).resize(function(){
		
		
		
	}); // END___ window.resize
	
	

}); // END___ function

/* ------------------------------------ DOCUMENT.READY ------------------------------- */
$(document).ready(function() {


	$( ".amadeus_form" ).on( "click", function( event ) {
 		 event.preventDefault();

 		 if ( $("#reservationNumber").val() ==''  || $("#lastname").val() ==''        ){

 		 if ( $("#reservationNumber").val() ==''  ){
 		 	
 		 	$("#reservationNumber").toggleClass("amadeus_errors");
 		 	$(".reservation_number").show();
 		 }
 		 else{
 		 	 $("#reservationNumber").toggleClass("amadeus_errors");
 		 	$(".reservation_number").hide();
 		 }

 		 if ( $("#lastname").val() ==''  ){
 		 	
 		 	$("#lastname").toggleClass("amadeus_errors");
 		 	$(".last_name").show();
 		 }
 		 else{
 		 	$("#lastname").toggleClass("amadeus_errors");
 		 	$(".last_name").hide();
 		 }
 		 }
 		 else{
 		  $("#amadeus_form").submit();
 		}

	});
	



	"use strict";
	
	// ul last li
	$('ul').each(function(){ $(this).find('li:last').addClass('last'); });
	
	// ul first li
	$('ul').each(function(){ $(this).find('li:first').addClass('first'); });
	
	// booking forms init
//	bookingForm("#flightBooking");
	bookingForm("#hotelBooking");
	bookingForm("#carsBooking");
	bookingForm("#cruiseBooking");
	
	// newsletter form
	formInputValue('#newsletter__ input[type="text"]');

	$('.newsletter_email').on('click focusin', function() {
	    this.value = '';
	});

	
	$('#newsletter__ input[type="submit"]').click(function(){
		var val = $('#newsletter input[type="text"]').val();
		//var regEmail = /^[A-Z0-9._%-]+@[A-Z0-9.-]+\.[A-Z]{2,4}$/;
		if(val.toUpperCase().match(regEmail)){
			$.ajax({
				type: 'POST',
				url: 'sendmail.php',
				data: $("#newsletter").serialize(),
				beforeSend: function(){
					$(".newsletter").hide();
					$(".loader").show();
				},
				success: function(msg){
					if (msg == "OK"){
						$('#newsletter').submit();
						$('#newsletter').hide();
						$(".loader").hide();
						$('#newsletter').after('<div class="newsmsg">Your email address has been saved to our system.</div>');
					}else{
						$(".loader").hide();
						$('#newsletter').show();
						$('#newsletter').after('<div class="newsmsg">Your email address has not saved to our system.</div>');
					}
					return false;
				}
			});
		} else {
			alert("Please enter correct email address!");
			return false;
		}
	});
	
	
	// Load dialog on click
	$('.login').click(function() {
		$('#loginModal').modal({
			onShow: function(){
				loginValidate();
			},
			overlayClose:true
		});
		return false;
	});
	$('.register').click(function() {
		$('#registerModal').modal({
			minHeight:540,
			overlayClose:true,
			onShow: function(){
				registerValidate();
				$('#simplemodal-container').addClass('registerModalContainer');
			}
		});
		return false;
	});
	$('#simplemodal-overlay').click(function(){ $('a.simplemodal-close').trigger('click'); });
	
	formInputValue('#loginForm .loginName');
	formInputValue('#loginForm .loginPass');
	
	
	// contact form
	formInputValue('#contactForm input[type="text"], #contactForm textarea');
	
	/* $.validator.addMethod("customRequired", function(value, element){
		if($(element).attr("alt") == value){
			return "";
		}else{
			return value;
		}
	}, ""); */
	
	// contact form validate
	$('#contactForm').validate({
		errorElement: "span",
		required: true,
		submitHandler:function(){
			$('#contactForm').hide();
			$.ajax({
				type: 'POST',
				url: window.location.href,
				data: $('#contactForm').serialize(),
				beforeSend:function(){
					$(".loaderImg").show();
				},
				success: function(msg){
					$(".loaderImg").hide();
					if (msg == "OK"){
						$(".formOK").show();
					}else{
						$(".formNOK").show();
					}
					return false;
				}
			});
			return false;
		}
	});
	
	// rating init
    $(".ratingDisabled").jRating({
		nbRates: 5,
		length: 5,
		type: 'small',
		showRateInfo: false,
		rateMax : 5,
		isDisabled: true
	});
	$(".ratingBig").jRating({
		nbRates: 5,
		length: 5,
		showRateInfo: false,
		rateMax : 5,
		isDisabled: true
	});
	$(".ratingBasic").jRating({
		nbRates: 5,
		length: 5,
		//type: 'small',
		showRateInfo: false,
		rateMax : 5
	});
	
	
	// contact form validate
	$('#bookingForm').validate({
		errorElement: "span",
		required: true,
		submitHandler:function(){
			$('#bookingForm').hide();
			$.ajax({
				type: 'POST',
				url: window.location.href,
				data: $('#bookingForm').serialize(),
				beforeSend:function(){
					$(".loaderImg").show();
				},
				success: function(msg){
					$(".loaderImg").hide();
					if (msg == "OK"){
						$(".formOK").show();
					}else{
						$(".formNOK").show();
					}
					return false;
				}
			});
			return false;
		}
	});
	
	// filter open-close
	$('.filter').each(function(){
		if( $('h5',this).hasClass('active') ){
			$(this).find('.filterInner').show();
		}
	});
	$('.filter h5').click(function(){
		if( $(this).hasClass('active') ){
			$(this).removeClass('active');
			$(this).next('.filterInner').slideUp();
		} else {
			$(this).addClass('active');
			$(this).next('.filterInner').slideDown();
		}
	});
	
	// custom checkbox
	$('.customCheck').screwDefaultButtons({
        image: 'url("assets/images/checkbox.png")',
        width: 15,
        height: 13
    });
	
	// dropdown
	$('.dropdownFilter em').click(function(){
		$('.dropdownFilter ul').slideUp();
		if($(this).hasClass('active')===false){
			$(this).addClass('active');
			$(this).parent().find('ul').slideDown();
		} else {
			$(this).parent().find('ul').slideUp('slow', function(){ $(this).parent().find('em').removeClass('active'); });
		}
	});
	
	$('.dropdownFilter ul li').click(function(){
		var aText = $(this).text();
		$(this).parent().parent().find('em span').text(aText);
		$(this).parent().slideUp('slow',function(){ $(this).parent().parent().find('em').removeClass('active'); });
	});
	
	// offer list and grid
	$('.listLayout').click(function(){
		$('.offersGrid').hide();
		$('.offersList').fadeIn();
		$(this).addClass('active');
		$('.gridLayout').removeClass('active');
	});
	$('.gridLayout').click(function(){
		$('.offersList').hide();
		$('.offersGrid').fadeIn();
		$(this).addClass('active');
		$('.listLayout').removeClass('active');
	});

	
}); // END___ document.ready


/* ------------------------------------ ALL FUNCTIONS ------------------------------- */


// login form validate
function loginValidate(){
	$('#loginForm').validate({
		errorElement: "span",
		required: true,
		submitHandler:function(){
			$('#loginForm').hide();
			$.ajax({
				type: 'POST',
				url: window.location.href,
				data: $('#loginForm').serialize(),
				beforeSend:function(){
					$(".loaderImg").show();
				},
				success: function(msg){
					$(".loaderImg").hide();
					if (msg == "OK"){
						$(".formOK").show();
					}else{
						$(".formNOK").show();
					}
					return false;
				}
			});
			return false;
		}
	});
}



// register form validate
function registerValidate(){
	$('#registerForm').validate({
		errorElement: "span",
		required: true,
		submitHandler:function(){
			$('#registerForm').hide();
			$.ajax({
				type: 'POST',
				url: window.location.href,
				data: $('#registerForm').serialize(),
				beforeSend:function(){
					$(".loaderImg").show();
				},
				success: function(msg){
					$(".loaderImg").hide();
					if (msg == "OK"){
						$(".formOK").show();
					}else{
						$(".formNOK").show();
					}
					return false;
				}
			});
			return false;
		}
	});
}


// booking form ajax validate
function bookingForm($selector){
	"use strict";
	$($selector).validate({
		errorElement: "span",
		required: true,
		submitHandler:function(){
			$($selector).hide();
			$.ajax({
				type: 'POST',
				url: window.location.href,
				data: $($selector).serialize(),
				beforeSend:function(){
					$(".sendingContact").show();
				},
				success: function(msg){
					$(".sendingContact").hide();
					if (msg == "OK"){
						$(".formOK").show();
					}else{
						$(".formNOK").show();
					}
					return false;
				}
			});
			return false;
		}
	});
}


// input hide and show value
function formInputValue(element) {
	"use strict";
	$(element).click(function() {
		if (this.value == this.defaultValue) {this.value = '';}
	}).focusin(function() {
		if (this.value == this.defaultValue) {this.value = '';}
	});
	$(element).blur(function() {
		if (this.value === '') {
			this.value = this.defaultValue;
		}
	});
}
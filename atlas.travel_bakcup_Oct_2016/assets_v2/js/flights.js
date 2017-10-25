$(document).ready(function() {


$("#flight_search_btn").on('click', function(event){
	event.preventDefault();
	var form_action = $('#flights-tab').attr('data-form-action');
	var form_data = $('#flights-tab').serialize();

	console.log('form action is :' + form_action);
	console.log('form data is : '+ form_data);

	$("#passed_data").val(form_action+form_data);

	var test = $("#passed_data").val(form_action+form_data);
	// $('#flights-tab').attr('action', 'booking.php').submit();

	$('#flights-tab').attr('action', 'booking.php').submit();

})

});
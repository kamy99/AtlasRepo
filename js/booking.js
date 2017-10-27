$(document).ready(function() {

$(".rdbRoundTrip").on('click', function(){
  $("#srch_frm_flght_single, #srch_frm_flght_oneway").show();
  $("#srch_frm_flght_multi").hide();
  $(".rtn_date_1").show();

});

$(".rdbOneWay").on('click', function(){
  $("#srch_frm_flght_single").show();
  $(".rtn_date_1, #srch_frm_flght_multi").hide();
  $("#checkout").val('');
});

$("#rdbMultiCity").off().on('click', function(){ // needed to unbind/off the click event, as for some reason it was being triggered twice.
    $(".rtn_date_1").hide();
    $("#srch_frm_flght_oneway, #srch_frm_flght_multi").show();
    $("#srch_frm_flght_multi").show();
    $("#txtDepCity2, #txtArrCity2").val('');
});

// Calendar arrow override, due to cars css issue
$("#flights-tab #checkin, #flights-multi-tab #txtDate1, #flights-multi-tab #txtDate2,#flights-multi-tab #txtDate3,#flights-multi-tab #txtDate4,#flights-multi-tab #txtDate5,#flights-multi-tab #txtDate6").on('focus', function(){

 $('span.ui-icon.ui-icon-circle-triangle-w').html(' < ');
  $('span.ui-icon.ui-icon-circle-triangle-e').html(' > ');
} );

$("#flights-tab #checkout").on('focus', function(){
 $('span.ui-icon.ui-icon-circle-triangle-w').html(' < ');
 $('span.ui-icon.ui-icon-circle-triangle-e').html(' > ');
} );


$("#txtDepCity1").on('blur' , function(){
   $("#txtArrCity2").val( $(this).val() );
//    $("#txtArrCity3").val( $(this).val() );
});

$("#txtArrCity1").on('blur' , function(){
   $("#txtDepCity2").val( $(this).val() );
//    $("#txtDepCity3").val( $(this).val() );


});

$("#checkin2").on('change' , function(){
  //  $("#checkin").val( $(this).val() );
});

$("#checkin3").on('change' , function(){
  //  $("#checkout").val( $(this).val() );
});

$("#checkout").on('change' , function(){
    $("#checkin2").val( $(this).val() );
});


$("#flights-tab #booking_search_btn").on('click', function(event){
        event.preventDefault();

        if ( $("#txtDepCity1").val() == "" ){
            $("#txtDepCity1").addClass('form_error');
        }
        else{
            $("#txtDepCity1").removeClass('form_error');
        }

        if ($("#txtArrCity1").val() == ""){
            $("#txtArrCity1").addClass('form_error');
        }
        else{
            $("#txtArrCity1").removeClass('form_error');
        }

         if ( $("#checkin").val() == "" ){
            $("#checkin").addClass('form_error');
        }
        else{
            $("#checkin").removeClass('form_error');
        }

        // validate flights search forms
        if ($('input[name=TripType]:checked').val() == 'rdbRoundTrip' ){
            if ($("#checkout").val() == ""){
                 $("#checkout").addClass('form_error');
                 }
            else if($("#checkout").val() != ""){
                $("#checkout").removeClass('form_error');
            }

            if ($("#txtDepCity2").val() == ""){
                 $("#txtDepCity2").addClass('form_error');
                 }
            else if($("#txtDepCity2").val() != ""){
                $("#txtDepCity2").removeClass('form_error');
            }

            if ($("#txtArrCity2").val() == ""){
                 $("#txtArrCity2").addClass('form_error');
                 }
            else if($("#txtArrCity2").val() != ""){
                $("#txtArrCity2").removeClass('form_error');
            }


            if (  ($("#txtDepCity1").val() != "")  && ($("#txtArrCity1").val() != "") && ($("#checkin").val() != "") && ($("#checkout").val() != "")  && ($("#txtDepCity2").val() != "" ) && ($("#txtArrCity2").val() != "" )  )
            {
                $("#flights-tab #booking_search_btn span").addClass('hourglass');
                $('#flights-tab').submit();

              //  console.log( $( '#flights-tab' ).serializeArray() );
                //event.preventDefault();


            }

        }
        else if ($('input[name=TripType]:checked').val() == 'rdbOneWay' ) {
            if (  ($("#txtDepCity1").val() != "")  && ($("#txtArrCity1").val() != "") && ($("#checkin").val() != "")     )
            {
                $("#flights-tab #booking_search_btn span").addClass('hourglass');
                $('#flights-tab').submit();
            }
        }

        else if ($('input[name=TripType]:checked').val() == 'rdbMultiCity' ) {

            if (  ($("#txtDepCity1").val() != "")  && ($("#txtArrCity1").val() != "") && ($("#checkin").val() != "")     )
            {
                $("#flights-tab #booking_search_btn span").addClass('hourglass');
                $('#flights-tab').submit();
            }
        }

});


$(".itinerary_form_submit").on('click', function(event){
    event.preventDefault();

            if ($("#itinerary_reservationNumber").val() == ""){
                 $("#itinerary_reservationNumber").addClass('form_error');
                 }
            else if($("#itinerary_reservationNumber").val() != ""){
                $("#itinerary_reservationNumber").removeClass('form_error');
            }

            if ($("#itinerary_lastname").val() == ""){
                 $("#itinerary_lastname").addClass('form_error');
                 }
            else if($("#itinerary_lastname").val() != ""){
                $("#itinerary_lastname").removeClass('form_error');
            }

  if (     $("#itinerary_lastname").val() != ""    &&   $("#itinerary_reservationNumber").val() != "" ){
        $('#itinerary_form').submit();
    }

});

});

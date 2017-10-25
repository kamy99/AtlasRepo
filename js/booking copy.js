$(document).ready(function() {
                
$("#txtDepCity1").on('blur' , function(){
    $("#txtArrCity2").val( $(this).val() );
});

$("#txtArrCity1").on('blur' , function(){
    $("#txtDepCity2").val( $(this).val() );
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


         if ($("#checkout").val() == ""){
            $("#checkout").addClass('form_error');
             }
        else{
            $("#checkout").removeClass('form_error');
        }


        // validate flights search forms
        if ($('input[name=TripType]:checked').val() == 'rdbRoundTrip' ){
            if (  ($("#txtDepCity1").val() != "")  && ($("#txtArrCity1").val() != "") && ($("#checkin").val() != "") && ($("#checkout").val() != "")    )
            {
                $('#flights-tab').submit();
            }

        }
        else if ($('input[name=TripType]:checked').val() == 'rdbOneWay' ) {
            if (  ($("#txtDepCity1").val() != "")  && ($("#txtArrCity1").val() != "") && ($("#checkin").val() != "")     )
            {
                $('#flights-tab').submit();
            }
        }


});






});

$(".rdbRoundTrip").on('click', function(){
    $("#flights-tab").show();
    $(".return_panel").show();
    $("#flights-multi-tab").hide(); // hide multicity

     // alert("return clicked");
});

$(".rdbOneWay").on('click', function(){
    
    $("#flights-multi-tab").hide(); // hide multicity
    $("#flights-tab").show();
    $(".return_panel").hide();
     // alert('one way clicked');

});


$(".rdbMultiCity").on('click', function(){
    
    // $("#flights-multi-tab").show(); // hide multicity
    // $("#flights-tab").hide();
    // $(".return_panel").hide();

});


$("#flights-multi-tab #booking_multi_search_btn").on('click', function(event){
         event.preventDefault();
    if ( $("#flights-multi-tab #txtDepCity1").val() == "" ){
            $(" #flights-multi-tab #txtDepCity1").addClass('form_error');
            
        }
        else{
            $("#flights-multi-tab #txtDepCity1").removeClass('form_error');
        }

         if ($("#flights-multi-tab #txtArrCity1").val() == ""){
            $("#flights-multi-tab #txtArrCity1").addClass('form_error');
        }
        else{
            $("#flights-multi-tab #txtArrCity1").removeClass('form_error');
        }

         if ($("#flights-multi-tab #txtDate1").val() == ""){
            $("#flights-multi-tab #txtDate1").addClass('form_error');
        }
        else{
            $("#flights-multi-tab #txtDate1").removeClass('form_error');
        }

if (  ($("#flights-multi-tab #txtDepCity1").val() != "")  && ($("#flights-multi-tab #txtArrCity1").val() != "") && ($("#flights-multi-tab #txtDate1").val() != "")     )
            {
            $('#flights-multi-tab').submit();
            }


 });       

$(document).ready(function() {
                $(".fakeloader").fakeLoader({
                    timeToHide:9000,
                    bgColor:"#336699",
                    spinner:"spinner7"
                });

$("#booking_engine").attr('src', $("#booking_url").val());

var passed_data = $("#flights-tab #booking_url").val();
    // console.log('passed_data is : '+ passed_data);

$("#flights-tab #booking_search_btn").on('click', function(event){
        event.preventDefault();
        // var form_action = $('#flights-tab').attr('data-form-action');
        // var form_data = $('#flights-tab').serialize();
        // var passed_data = form_data;

        if ( $("#from").val() == "" ){
            $("#from").addClass('form_error');
        }
        else{
            $("#from").removeClass('form_error');
        }

         if ($("#to").val() == ""){
            $("#to").addClass('form_error');
        }
        else{
            $("#to").removeClass('form_error');
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


        if (  ($("#from").val() != "")  && ($("#to").val() != "") && ($("#checkin").val() != "") && ($("#checkout").val() != "")    )
        {
        // $("#passed_data").val(form_action+form_data);
        // $("#passed_data").serialize();
        // console.log('passed_data is : '+ $("#passed_data").val());
        // $('#flights-tab').attr('action', 'booking.php').submit();
        $('#flights-tab').submit();
        }

});

$("#hotels-tab #booking_search_btn").on('click', function(event){
        event.preventDefault();
        var form_action = $('#hotels-tab').attr('data-form-action');
        var form_data = $('#hotels-tab').serialize();
        var passed_data = form_data;

        if ( $("#hotels-from").val() == "" ){
            $("#hotels-from").addClass('form_error');
        }
        else{
            $("#hotels-from").removeClass('form_error');
        }

        
         if ( $("#hotels-checkin").val() == "" ){
            $("#hotels-checkin").addClass('form_error');
        }
        else{
            $("#hotels-checkin").removeClass('form_error');
        }


         if ($("#hotels-checkout").val() == ""){
            $("#hotels-checkout").addClass('form_error');
        }
        else{
            $("#hotels-checkout").removeClass('form_error');
        }


        if (  ($("#hotels-from").val() != "")  && ($("#hotels-checkin").val() != "") && ($("#hotels-checkout").val() != "")    )
        {
        // $("#passed_data").val(form_action+form_data);
        // $("#passed_data").serialize();
        // console.log('passed_data is : '+ $("#passed_data").val());
        // $('#hotels-tab').attr('action', 'booking.php').submit();

        }

});

$("#packages-tab #booking_search_btn").on('click', function(event){
        event.preventDefault();
        var form_action = $('#packages-tab').attr('data-form-action');
        var form_data = $('#packages-tab').serialize();
        var passed_data = form_data;

        if ( $("#packages-from").val() == "" ){
            $("#packages-from").addClass('form_error');
        }
        else{
            $("#packages-from").removeClass('form_error');
        }

         if ($("#packages-to").val() == ""){
            $("#packages-to").addClass('form_error');
        }
        else{
            $("#packages-to").removeClass('form_error');
        }
        
         if ( $("#package-checkin").val() == "" ){
            $("#package-checkin").addClass('form_error');
        }
        else{
            $("#package-checkin").removeClass('form_error');
        }


         if ($("#package-checkout").val() == ""){
            $("#package-checkout").addClass('form_error');
        }
        else{
            $("#package-checkout").removeClass('form_error');
        }


        if (  ($("#packages-from").val() != "")  && ($("#packages-to").val() != "") && ($("#package-checkin").val() != "") && ($("#package-checkout").val() != "")    )
        {
        // $("#passed_data").val(form_action+form_data);
        // $("#passed_data").serialize();
        // console.log('passed_data is : '+ $("#passed_data").val());
        // $('#packages-tab').attr('action', 'booking.php').submit();

        }

});



$("#cars-tab #booking_search_btn").on('click', function(event){
        event.preventDefault();
        var form_action = $('#cars-tab').attr('data-form-action');
        var form_data = $('#cars-tab').serialize();
        var passed_data = form_data;

        if ( $("#cars-from").val() == "" ){
            $("#cars-from").addClass('form_error');
        }
        else{
            $("#cars-from").removeClass('form_error');
        }

         if ($("#cars-to").val() == ""){
            $("#cars-to").addClass('form_error');
        }
        else{
            $("#cars-to").removeClass('form_error');
        }
        
         if ( $("#cars-checkin").val() == "" ){
            $("#cars-checkin").addClass('form_error');
        }
        else{
            $("#cars-checkin").removeClass('form_error');
        }


         if ($("#cars-checkout").val() == ""){
            $("#cars-checkout").addClass('form_error');
        }
        else{
            $("#cars-checkout").removeClass('form_error');
        }


        if (  ($("#cars-from").val() != "")  && ($("#cars-to").val() != "") && ($("#cars-checkin").val() != "") && ($("#cars-checkout").val() != "")    )
        {
        // $("#passed_data").val(form_action+form_data);
        // $("#passed_data").serialize();
        // console.log('passed_data is : '+ $("#passed_data").val());
        // $('#cars-tab').attr('action', 'booking.php').submit();

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
    
    $("#flights-multi-tab").show(); // hide multicity
    $("#flights-tab").hide();
    $(".return_panel").hide();
 // alert('multi clicke');
});



$("#txtDepCity1").on('blur' , function(){
    $("#txtDepCity2").val( $(this).val() );
});

$("#txtArrCity1").on('blur' , function(){
    $("#txtArrCity2").val( $(this).val() );
});




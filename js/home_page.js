$(document).ready(function() {

$("#hotels_tab, #flihot_tab, #cars_tab").on('click', function(){
    window.location.href = $(this).attr('data-url');
})


} );

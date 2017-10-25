$(document).ready(function(){

  var destination = $("#destination").val();
  // alert('/wiki_proxy.php?destination='+destination);



  $.getJSON("/wiki_proxy.php?destination="+destination, function(json) {
     console.log(json);
    // console.log(json['query']['pages']['57654']['extract']);
//    console.log(json['query']['pages']);


  var keys = [];

  $.each(json['query']['pages'], function(key, value){
       console.log('Key is' +key); // id, gender, name
       console.log(value); // 0, male, joan
       var wiki_key = key;
      //  alert(json['query']['pages'][key]['extract']);
      $("#wiki_data").html(json['query']['pages'][key]['extract']);
       keys.push(key);
      });
  });

});

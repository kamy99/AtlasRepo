! function(e) {
    "use strict";
    e(document).ready(function() {
        jQuery().datepicker && (jQuery(".checkin, .checkin2, .checkin3").datepicker({
            showAnim: "drop",
            dateFormat: "mm/dd/yy",
            numberOfMonths: 2,
            minDate: "-0D"
        }), jQuery(".checkout").datepicker({
            showAnim: "drop",
            dateFormat: "mm/dd/yy",
            numberOfMonths: 2,
            minDate: "-0D",
            beforeShow: function() {
                var e = jQuery(".checkin, .checkin2, .checkin3").datepicker("getDate");
                return e ? {
                    minDate: e
                } : void 0
            }
        }), jQuery(".checkin, .checkin2, .checkin3, .checkout").on("focus", function() {
            jQuery(this).blur()
        })), jQuery('[data-toggle="popover"]').popover();

        //  Hotels datepicker
        jQuery().datepicker && (jQuery(".hotels-checkin").datepicker({
            showAnim: "drop",
            dateFormat: "mm/dd/yy",
            numberOfMonths: 2,
            minDate: "-0D"
        }), jQuery(".hotels-checkout").datepicker({
            showAnim: "drop",
            dateFormat: "mm/dd/yy",
            numberOfMonths: 2,
            minDate: "-0D",
            beforeShow: function() {
                var e = jQuery(".hotels-checkin").datepicker("getDate");
                return e ? {
                    minDate: e
                } : void 0
            }
        }), jQuery(".hotels-checkin, .hotels-checkout").on("focus", function() {
            jQuery(this).blur()
        })), jQuery('[data-toggle="popover"]').popover();

        // eof hotels date picker

       //  Cars datepicker
        jQuery().datepicker && (jQuery(".cars-checkin").datepicker({
            showAnim: "drop",
            dateFormat: "mm/dd/yy",
            numberOfMonths: 2,
            minDate: "-0D"
        }), jQuery(".cars-checkout").datepicker({
            showAnim: "drop",
            dateFormat: "mm/dd/yy",
            numberOfMonths: 2,
            minDate: "-0D",
            beforeShow: function() {
                var e = jQuery(".cars-checkin").datepicker("getDate");
                return e ? {
                    minDate: e
                } : void 0
            }
        }), jQuery(".cars-checkin, .cars-checkout").on("focus", function() {
            jQuery(this).blur()
        })), jQuery('[data-toggle="popover"]').popover();

        // eof cars date picker

// start multi citiy datepicker
var multiCity = 0;
for (multiCity = 0; multiCity < 7; multiCity++) {
        jQuery().datepicker && (jQuery(".DepartureDate"+multiCity).datepicker({
            showAnim: "drop",
            dateFormat: "mm/dd/yy",
            numberOfMonths: 2,
            minDate: "-0D"
        }), jQuery(".DepartureDate"+multiCity).on("focus", function() {
            jQuery(this).blur()
        })), jQuery('[data-toggle="popover"]').popover();

}
//  eof multi city date picker


        //  Package datepicker
        jQuery().datepicker && (jQuery(".package-checkin").datepicker({
            showAnim: "drop",
            dateFormat: "mm/dd/yy",
            numberOfMonths: 2,
            minDate: "-0D"
        }), jQuery(".package-checkout").datepicker({
            showAnim: "drop",
            dateFormat: "mm/dd/yy",
            numberOfMonths: 2,
            minDate: "-0D",
            beforeShow: function() {
                var e = jQuery(".package-checkin").datepicker("getDate");
                return e ? {
                    minDate: e
                } : void 0
            }
        }), jQuery(".package-checkin, .package-checkout").on("focus", function() {
            jQuery(this).blur()
        })), jQuery('[data-toggle="popover"]').popover();



        // eof Package date picker

        var o = e("#mobile-menu-01 li.line-mini-menu");
        o.on("click", function() {
            e(this).children("div").addClass("active"), e(this).children("div").toggle(1e3)
        });
        var t = e("#mobile-menu-01 .line-logo i.fa-bars");
        t.on("click", function() {
            e("#mobile-menu-01 .travel-mega-menu-mobile").toggle(1e3)
        }), e(".header-lang").on("hover", function() {
            e(".langs-drop").fadeIn()
        }, function() {
            e(".langs-drop").hide()
        }), Modernizr.touch ? (e(".close-overlay").removeClass("hidden"), e(".img").on("click", function(o) {
            e(this).hasClass("hover") || e(this).addClass("hover")
        }), e(".close-overlay").on("click", function(o) {
            o.preventDefault(), o.stopPropagation(), e(this).closest(".img").hasClass("hover") && e(this).closest(".img").removeClass("hover")
        })) : e(".img").mouseenter(function() {
            e(this).addClass("hover")
        }).mouseleave(function() {
            e(this).removeClass("hover")
        }), e(".price-color-log .content-red").on("hover", function() {
            e(".price-color-log .content-green").addClass("circle-opacity")
        }, function() {
            e(".price-color-log .content-green").removeClass("circle-opacity")
        }), e(".price-color-log .content-blue").on("hover", function() {
            e(".price-color-log .content-green").addClass("circle-opacity")
        }, function() {
            e(".price-color-log .content-green").removeClass("circle-opacity")
        });
        var a = e(".top-mega-menu");
        e(window).scroll(function() {
            e(this).scrollTop() > 50 ? a.addClass("push-top") : a.removeClass("push-top")
        });
        try {
            e(".animated")[0] && e(".animated").css("opacity", "0"), e(".triggerAnimation").waypoint(function() {
                var o = e(this).attr("data-animate");
                e(this).css("opacity", ""), e(this).addClass("animated " + o)
            }, {
                offset: "80%",
                triggerOnce: !0
            })
        } catch (n) {}
        e("#contact_form___").submit(function(o) {
            function t(e) {
                var o = new RegExp(/^((([a-z]|\d|[!#\$%&'\*\+\-\/=\?\^_`{\|}~]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])+(\.([a-z]|\d|[!#\$%&'\*\+\-\/=\?\^_`{\|}~]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])+)*)|((\x22)((((\x20|\x09)*(\x0d\x0a))?(\x20|\x09)+)?(([\x01-\x08\x0b\x0c\x0e-\x1f\x7f]|\x21|[\x23-\x5b]|[\x5d-\x7e]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(\\([\x01-\x09\x0b\x0c\x0d-\x7f]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]))))*(((\x20|\x09)*(\x0d\x0a))?(\x20|\x09)+)?(\x22)))@((([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.)+(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.?$/i);
                return o.test(e)
            }
            o.preventDefault();
            var a = (e(this), e("#name").val()),
                n = e("#email").val(),
                i = e("#message").val(),
                u = "name=" + a + "&email=" + n + "&message=" + i;
            t(n) && i.length > 20 && a.length > 1 ? e.ajax({
                type: "POST",
                url: "contact_form/contact_process.php",
                data: u,
                success: function() {
                    e(".success").fadeIn(1e3), e("#name").val(""), e("#email").val(""), e("#message").val("")
                }
            }) : e(".error").fadeIn(1e3)
        }), e(".ac-container article div").on("click", function(o) {
            e(this).toggleClass("active")
        }), e(".blog-category .cc-check").on("click", function(o) {
            o.preventDefault(), e(this).toggleClass("active"), o.stopPropagation()
        }), e(".skillbar").each(function() {
            e(this).find(".skillbar-bar").width(0)
        }), e(".skillbar").each(function() {
            e(this).find(".skillbar-bar").animate({
                width: e(this).attr("data-percent")
            }, 2e3)
        })
    })

}(window.jQuery);

 $("#flights-multi-tab").hide();

$("#hotels_tab, #cars_tab, #flihot_tab").on("click", function(){

    $("#flights-multi-tab").hide();
   $("#flights-tab").addClass('active');
   $("#flights-multi-tab").removeClass('active');
});

$("#hotels_tab-linked, #packages_tab-linked").on("click", function(){
    var link = $(this).attr('href');
    window.location.href = link;
});



$("#flights_tab").on("click", function(){

    $("#flights-tab").addClass('active');
    $("#flights-multi-tab").removeClass('active');
    $("#flights-tab").show();
    $("#flights-multi-tab").hide();

});

    $("#newsletter_signup").on("click", function(event){

       event.preventDefault();

        if (  $("#newsletter_name").val() == ""  || $("#newsletter_email").val() == "" ){

                if ( $("#newsletter_name").val() == ""  ){
                    $("#newsletter_name").addClass('newsletter_error');
                }
                else{
                 $("#newsletter_name").removeClass('newsletter_error');
                }

                if ( $("#newsletter_email").val() == ""  ){
                    $("#newsletter_email").addClass('newsletter_error');
                }
                else{
                 $("#newsletter_email").removeClass('newsletter_error');
                }

        }
        else{
            $("#newsletter_email, #newsletter_name").removeClass('newsletter_error');

            var formData = {
            'newsletter_name'              : $('input[name=newsletter_name]').val(),
            'newsletter_email'             : $('input[name=newsletter_email]').val()
                };
               // console.log("here 222 " + formData);

        // process the form
        $.ajax({
            type        : 'POST', // define the type of HTTP verb we want to use (POST for our form)
            url         : 'send_newsletter_request.php', // the url where we want to POST
            data        : formData, // our data object
           // data : $("#frmr").serialize(),
            dataType    : 'json', // what type of data do we expect back from the server
            encode      : true
        })
            // using the done promise callback
            .done(function(data) {

                // log data to the console so we can see
                console.log("HEre 1 ");
                console.log(data);
                // here we will handle errors and validation messages
                if ( ! data.success) {
                } else {
                    // ALL GOOD! just show the success message!
                    $('form').append('<div class="alert alert-success">' + data.message + '</div>');
                    $("#newsletter_name, #newsletter_email, #newsletter_signup").hide();
                }
            })

            // using the fail promise callback
            .fail(function(data) {

                // show any errors
                // best to remove for production
                console.log(data);
            });

        }


});

        $('#newsletter__ input[type="submit"]').click(function(){
        var val = $('#newsletter input[type="text"]').val();
        //var regEmail = /^[A-Z0-9._%-]+@[A-Z0-9.-]+\.[A-Z]{2,4}$/;
        if(val.toUpperCase().match(regEmail)){
            $.ajax({
                type: 'POST',
                url: 'send_newsletter_request.php',
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




$('___form').submit(function(event) {

        $('.form-group').removeClass('has-error'); // remove the error class
        $('.help-block').remove(); // remove the error text

        // get the form data
        // there are many ways to get this data using jQuery (you can use the class or id also)
        var formData = {
            'name'              : $('input[name=name]').val(),
            'email'             : $('input[name=email]').val(),
            'superheroAlias'    : $('input[name=superheroAlias]').val()
        };

        // process the form
        $.ajax({
            type        : 'POST', // define the type of HTTP verb we want to use (POST for our form)
            url         : 'send_newsletter_request.php', // the url where we want to POST
            data        : formData, // our data object
            dataType    : 'json', // what type of data do we expect back from the server
            encode      : true
        })
            // using the done promise callback
            .done(function(data) {

                // log data to the console so we can see
                console.log(data);

                // here we will handle errors and validation messages
                if ( ! data.success) {

                    // handle errors for name ---------------
                    if (data.errors.name) {
                        $('#name-group').addClass('has-error'); // add the error class to show red input
                        $('#name-group').append('<div class="help-block">' + data.errors.name + '</div>'); // add the actual error message under our input
                    }

                    // handle errors for email ---------------
                    if (data.errors.email) {
                        $('#email-group').addClass('has-error'); // add the error class to show red input
                        $('#email-group').append('<div class="help-block">' + data.errors.email + '</div>'); // add the actual error message under our input
                    }

                    // handle errors for superhero alias ---------------
                    if (data.errors.superheroAlias) {
                        $('#superhero-group').addClass('has-error'); // add the error class to show red input
                        $('#superhero-group').append('<div class="help-block">' + data.errors.superheroAlias + '</div>'); // add the actual error message under our input
                    }

                } else {
                    // ALL GOOD! just show the success message!
                    $('form').append('<div class="alert alert-success">' + data.message + '</div>');
                }
            })
            // using the fail promise callback
            .fail(function(data) {

                // show any errors
                // best to remove for production
                console.log(data);
            });

        // stop the form from submitting the normal way and refreshing the page
        event.preventDefault();
});



$("#psngr_toggle").on("click", function(){
   $("#guests_wrapper" ).toggle("slow");
   $("#psngr_toggle .fa").toggleClass('fa-plus-circle fa-minus-circle');
});


$("#cars_tab").on("click", function(){
    // event.preventDefault();
    // window.location.('/cars.php');
    // console.log('cars tab clikced');
});


$("#ddlPaxADT, #ddlPaxCHD, #ddlPaxINF ").on("change", function(){

  var psngr_adult   = parseInt($('select[name=ddlPaxADT]').val());
  var psngr_kids    = parseInt($('select[name=ddlPaxCHD]').val());
  var psngr_enfant  = parseInt($('#ddlPaxINF').find(":selected").val());
  var psngr_total = psngr_adult + psngr_kids + psngr_enfant;

  $(".passengers_total").html(psngr_total);

})



var ATLAS = (function(name) { return name; }(ATLAS || {}));

ATLAS.Core = (function() {

    var addEventListeners = function() {
        $('#exit_modal').on('show.bs.modal', function(e) {
            var link = $(e.relatedTarget);
            var href = link.attr('href');

            var modal = $(this);
            modal.find('#continue_link').attr('href', href);
        });

        $('#continue_link').on('click', function() {
            $('#exit_modal').modal('hide');
        });
    };

    return {
        init: function() {
            addEventListeners();
        }
    };

})();


/*************************************************************************************
 *                                                                                   *
 * ANALYTICS                                                                         *
 *                                                                                   *
 ************************************************************************************/
ATLAS.Analytics = (function() {

    var addEventListeners = function() {
        $('.ga_event').on('click', function() {
            var $self = $(this);

            event($self.data('category'), $self.data('action'), $self.data('label'));
        });
    };
    console.log("inside analytics");

//    console.log("Listener working: ").addEventListeners;

    var event = function(category, action, label) {
        ga('send', 'event', category, action, label);
    };

  //  console.log("Event is ".event);

    return {
        init: function() {
            addEventListeners();
        },
        event: event
    };

})();

$(document).ready(function() {
    ATLAS.Core.init();
    ATLAS.Analytics.init();
});

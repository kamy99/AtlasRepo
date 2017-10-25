var regCheck = /[`~!@#$%^&*()_|+\-=?;:'",.<>\{\}\[\]\\\/]/gi;//For Special Character
var requestquery = { agent_id: 0, website_id: 0 };
if (requestquery.agent_id == 0) { requestquery.agent_id = 48; }
if (requestquery.website_id == 0) { requestquery.website_id = 36; }

var set_calendar_month = 1;
if (typeof calendar_month != "undefined") { set_calendar_month = 2; }
var set_advance_days = 0;
if (typeof advance_days != "undefined") { set_advance_days = advance_days; }

var dateFormat = $("#hdndisplayDateFormat").val();
$(function () {
    ShowModifyDiv();
    var dateFormat = $("#hdndisplayDateFormat").val();
    if (dateFormat === "dd/MM/yyyy") {
        dateFormat = "dd/mm/yy";
    } else if (dateFormat === "MM/dd/yyyy") {
        dateFormat = "mm/dd/yy";
    } else if (dateFormat === "yyyy/MM/dd") {
        dateFormat = "yy/mm/dd";
    } else if (dateFormat = "dd-MMM-yy") {
        dateFormat = "dd-M-y"
    }
    var hdnShowCalenderperiodB2C = $("#hdnShowCalenderperiodB2C").val();
    var curDate = new Date();
    curDate.setDate(curDate.getDate() + parseInt(set_advance_days));
    $(".dpicker").datepicker({
        showAnim: 'slideDown',
        dateFormat: dateFormat,
        changeMonth: false,
        changeYear: false,
        minDate: curDate,
        maxDate: "+" + hdnShowCalenderperiodB2C + "d",//"+330d",
        numberOfMonths: parseInt(set_calendar_month),
        beforeShow: setMinDate
    });

    $(".dpicker").click(function () {
        $(this).datepicker().datepicker("show")
    });

    $(".datepicker-wrap").click(function () {
        $(this).children().focus();
    });
    $(".clsRemoveRedBorder").click(function () {
        $(".processinput").removeClass('errorRedBorder');
    });
    $("#chkdatesflexible").click(function () {
        if ($("#chkdatesflexible").attr("checked") == true) {
            $("#chkdatesflexible").attr("checked", false);
        }
        else {
            $("#chkdatesflexible").attr("checked", true);
        }
    });
    $("#chkNonStop").click(function () {
        if ($("#chkNonStop").attr("checked") == true) {
            $("#chkNonStop").attr("checked", false);
        }
        else {
            $("#chkNonStop").attr("checked", true);
        }
    });
    $("#chkRadiussearch").click(function () {
        if ($("#chkRadiussearch").attr("checked") == true) {
            $("#chkRadiussearch").attr("checked", false);
        }
        else {
            $("#chkRadiussearch").attr("checked", true);
        }
    });
    if ($("#hdnShowPaxDropdown").val() != "Dropdown1") {
        add_removetraveller(":adult");
    }
    if ($(".spnSetInfantPassenger").html() >= "0") {
        setInfantddl();
    }
    // setpax("Adult");
    $("#ddlPaxADT").change(function () {
        setpax("Adult");
    });
    $("#ddlPaxCHD").change(function () {
        setpax("Child");
    });
    $("#ddlPaxINF").change(function () {
        setpax("Infant");
    });
    if ($("#hdntriptype").val() == 2 && $("#hdnStrFlightType").val() == "rdbroundtrip") {
        $("#hdntriptype").val(2);
    }
    else if ($("#hdntriptype").val() == 1 && $("#hdnStrFlightType").val() == "rdboneway") {
        $("#hdntriptype").val(1);
    }
    else if ($("#hdntriptype").val() == 2 && $("#hdnStrFlightType").val() == "rdbmulticity") {
        $("#hdntriptype").val(3);
    }
    else if ($("#hdntriptype").val() == 3 && $("#hdnStrFlightType").val() == "rdbmulticity") {
        if ($("#txtDepCity3").val() != "" && $("#txtArrCity3").val() != "") {
            $("#PaneltxtDepCity3").attr("value", $("#txtDepCity3").val());
            $("#PaneltxtArrCity3").attr("value", $("#txtArrCity3").val());
        }
    }
    else {
        var hdnTripType = parseInt($("#hdntriptype").val());
        if (hdnTripType == 1) {
            $("#hdntriptype").val(1);
        }
        else if (hdnTripType == 2) {
            $("#hdntriptype").val(2);
        }
        else {
            if (($("#txtDepCity1").val() != $("#txtArrCity2").val()) || ($("#txtArrCity1").val() != $("#txtDepCity2").val())) {
                $("#hdntriptype").val(3);
            }
        }
    }
    switch ($("#hdntriptype").val()) {
        case "1":
            chgTripType('rdbOneWay', $("#rdbOneWay_1"))
            break
        case "2":
            chgTripType('rdbRoundTrip', $("#rdbRoundTrip_1"))
            break
        case "3":
            chgTripType('rdbMultiCity', $("#rdbMultiCity_1"))
            if ((($("#txtDepCity1").val() != $("#txtArrCity2").val()) || ($("#txtArrCity1").val() != $("#txtDepCity2").val())) && ($("#txtDepCity3").val() != "" && $("#txtArrCity3").val() != "")) {
                ShowPopupModify(2);
            }
            else if ((($("#txtDepCity1").val() != $("#txtArrCity2").val()) || ($("#txtArrCity1").val() != $("#txtDepCity2").val())) && ($("#txtDepCity3").val() == "" && $("#txtArrCity3").val() == "")) {
                //ShowPopupModify(1);
            }
            else {
                ShowPopupModify(2);
            }
            break
    }
    $(".dpicker").change(function () {
        var firstID = $(this).attr("id");
        var secondID;
        switch (firstID) {
            case 'BartxtDate01':
                secondID = "Paneltxtdate2";
                break;
                //case 'txtDate2':
                //    secondID = "txtDate3";
                //    break;
            case 'BartxtDate02':
                secondID = "Paneltxtdate1";
                break;
            case 'Paneltxtdate0':
                if ($("#pnlFlight2").css("display") == "none") {
                    secondID = "Paneltxtdate1";
                } else {
                    secondID = "txtDate_1";
                }
                break;
            case 'Paneltxtdate1':
                secondID = "Paneltxtdate2";
                break;
                //Added by Ankur
            case 'Paneltxtdate2':
                secondID = "Paneltxtdate3";
                break;
            case 'Paneltxtdate3':
                secondID = "Paneltxtdate4";
                break;
            case 'Paneltxtdate4':
                secondID = "Paneltxtdate5";
                break;
            case 'txtDate_1':
                secondID = "Paneltxtdate1";
                break;
        }
        setDefaultDate(firstID, secondID);
    });
    $("#BartxtDate01").change(function () {
        var defDate = $(this).datepicker('getDate');
        var defDateOrgin = document.getElementById("txtDate1").value
        $("#Paneltxtdate0").datepicker({ dateFormat: dateFormat }).datepicker("setDate", defDate);
        $("#txtDate1").datepicker({ dateFormat: dateFormat }).datepicker("setDate", defDateOrgin);
        defDate.setDate(defDate.getDate() + 7);
        $("#Paneltxtdate1").datepicker({ dateFormat: dateFormat }).datepicker("setDate", defDate);
        $("#txtDate_1").datepicker({ dateFormat: dateFormat }).datepicker("setDate", defDate);
        $("#BartxtDate02").datepicker({ dateFormat: dateFormat }).datepicker("setDate", defDate);
        defDate.setDate(defDate.getDate() + 7);//
        $("#txtDate3").datepicker({ dateFormat: dateFormat }).datepicker("setDate", defDate);//
        $("#Paneltxtdate2").datepicker({ dateFormat: dateFormat }).datepicker("setDate", defDate);
        //Added by Ankur 
        defDate.setDate(defDate.getDate() + 7);
        $("#Paneltxtdate3").datepicker({ dateFormat: dateFormat }).datepicker("setDate", defDate);
        //End
        getdate1();
    });
    $("#Paneltxtdate5").change(function () {
        var defDate = $(this).datepicker('getDate');
        $("#txtDate6").datepicker({ dateFormat: dateFormat }).datepicker("setDate", defDate);
    });

    $("#BartxtDate02").change(function () {
        $("#txtDate_1").val($(this).val());
        $("#Paneltxtdate1").val($(this).val());
    });

    $("#BartxtDepCity0").change(function () {
        $("#PaneltxtDepCity0").val($("#BartxtDepCity0").val());
    });
    $("#BartxtArrCity0").change(function () {
        $("#PaneltxtArrCity0").val($("#BartxtArrCity0").val());
    });

    $("#PaneltxtDepCity0").change(function () {
        $("#BartxtDepCity0").val($("#PaneltxtDepCity0").val());
    });
    $("#PaneltxtArrCity0").change(function () {
        $("#BartxtArrCity0").val($("#PaneltxtArrCity0").val());
    });

});
function setMinDate(control) {
    var depdate1 = new Date();
    switch ($(control).attr("id")) {
        case "txtCheckIn":
            return {
                minDate: new Date()
            };
            break;
        case "txtCheckOut":
            return {
                minDate: new Date()
            };
            break;
        case "Paneltxtdate1":
            minDate: new Date()
            if ($("#Paneltxtdate0")) {
                depdate1 = $("#Paneltxtdate0").datepicker("getDate");
            }
            return {
                minDate: new Date(depdate1.setDate(depdate1.getDate()))
            };
            break;
        case "Paneltxtdate2":
            if ($("#Paneltxtdate1")) {
                depdate1 = $("#Paneltxtdate1").datepicker("getDate");
            }

            return {
                minDate: new Date(depdate1.setDate(depdate1.getDate()))
            };
            break;
        case "Paneltxtdate3":
            if ($("#Paneltxtdate2")) {
                depdate1 = $("#Paneltxtdate2").datepicker("getDate");
            }
            return {
                minDate: new Date(depdate1.setDate(depdate1.getDate()))
            };
            break;
            //Ankur Added
        case "Paneltxtdate4":
            if ($("#Paneltxtdate3")) {
                depdate1 = $("#Paneltxtdate3").datepicker("getDate");
            }
            return {
                minDate: new Date(depdate1.setDate(depdate1.getDate()))
            };
            break;
        case "Paneltxtdate5":
            if ($("#Paneltxtdate4")) {
                depdate1 = $("#Paneltxtdate4").datepicker("getDate");
            }
            return {
                minDate: new Date(depdate1.setDate(depdate1.getDate()))
            };
            break;
            //End
        case "BartxtDate02":
            if ($("#BartxtDate01")) {
                depdate1 = $("#BartxtDate01").datepicker("getDate");
            }
            return {
                minDate: new Date(depdate1.setDate(depdate1.getDate()))
            };
            break;

        case "txtDate_1":
            if ($("#BartxtDate01")) {
                depdate1 = $("#BartxtDate01").datepicker("getDate");
            }
            return {
                minDate: new Date(depdate1.setDate(depdate1.getDate()))
            };
            break;
        case "BartxtDate01":
            return {
                minDate: new Date()
            };
            break;
    }
}

function getdate() {
    var tt = document.getElementById('Paneltxtdate0').value;
    var date = new Date(tt);
    var newdate = new Date(date);
    newdate.setDate(newdate.getDate() + 7);
    var dd = newdate.getDate();
    var mm = newdate.getMonth() + 1;
    var y = newdate.getFullYear();
    var someFormattedDate = mm + '/' + dd + '/' + y;
    //$(".txtdatechange").val(someFormattedDate);
    //$("#BartxtDate02").val(someFormattedDate);
    $("#txtDate0").datepicker({ dateFormat: dateFormat }).datepicker("setDate", date);
    var newdate3 = new Date(newdate);
    newdate3.setDate(newdate3.getDate() + 7);
    $("#Paneltxtdate2").datepicker({ dateFormat: dateFormat }).datepicker("setDate", newdate3);
    //Added by Ankur
    newdate3.setDate(newdate3.getDate() + 7);
    $("#Paneltxtdate3").datepicker({ dateFormat: dateFormat }).datepicker("setDate", newdate3);
    newdate3.setDate(newdate3.getDate() + 7);
    $("#Paneltxtdate4").datepicker({ dateFormat: dateFormat }).datepicker("setDate", newdate3);
    newdate3.setDate(newdate3.getDate() + 7);
    $("#Paneltxtdate5").datepicker({ dateFormat: dateFormat }).datepicker("setDate", newdate3);
    //End
}

function getdate1() {
    var tt = document.getElementById('BartxtDate01').value;
    var date = new Date(tt);
    var newdate = new Date(tt);
    newdate.setDate(newdate.getDate() + 7);
    var dd = newdate.getDate();
    var mm = newdate.getMonth() + 1;
    var y = newdate.getFullYear();
    var someFormattedDate = mm + '/' + dd + '/' + y;
    $("#BartxtDate02").val(someFormattedDate);
    $("#txtDate2").datepicker({ dateFormat: dateFormat }).datepicker("setDate", newdate);
    $("#BartxtDate02").datepicker({ dateFormat: dateFormat }).datepicker("setDate", newdate);
}

function setDefaultDate(firstID, secondID) {
    var defDate = $("#" + firstID).datepicker('getDate');
    var defdateMulticity = defDate;
    defdateMulticity.setDate(defdateMulticity.getDate() + 7);
    if (firstID == "BartxtDate02") {
        var defDateV1 = $("#" + firstID).datepicker('getDate');
        defDateV1.setDate(defDateV1.getDate() + 7);
        $("#Paneltxtdate1").datepicker({ dateFormat: dateFormat }).datepicker("setDate", $("#" + firstID).datepicker('getDate'));
        $("#Paneltxtdate2").datepicker({ dateFormat: dateFormat }).datepicker("setDate", defDateV1);
    }
    else if (firstID == "txtDate_1") {
        $("#" + secondID).datepicker({ dateFormat: dateFormat }).datepicker("setDate", $("#" + firstID).datepicker('getDate'));
        $("#txtDate2").datepicker({ dateFormat: dateFormat }).datepicker("setDate", $("#" + firstID).datepicker('getDate'));
    }
    else if (firstID == "Paneltxtdate0") {
        $("#" + secondID).datepicker({ dateFormat: dateFormat }).datepicker("setDate", defDate);
        if ($("#pnlFlight2").css("display") == "none") {
            $("#txtDate_1").datepicker({ dateFormat: dateFormat }).datepicker("setDate", defDate);
        } else {
            $("#Paneltxtdate1").datepicker({ dateFormat: dateFormat }).datepicker("setDate", defDate);
        }
        $("#txtDate_1").datepicker({ dateFormat: dateFormat }).datepicker("setDate", defDate);
        $("#txtDate2").datepicker({ dateFormat: dateFormat }).datepicker("setDate", defDate);
        defdateMulticity.setDate(defdateMulticity.getDate() + 7);
        $("#BartxtDate02").datepicker({ dateFormat: dateFormat }).datepicker("setDate", defDate);
        $("#Paneltxtdate2").datepicker({ dateFormat: dateFormat }).datepicker("setDate", defdateMulticity);
        $("#txtDate3").datepicker({ dateFormat: dateFormat }).datepicker("setDate", defdateMulticity);
        defdateMulticity.setDate(defdateMulticity.getDate() + 7);
        $("#Paneltxtdate3").datepicker({ dateFormat: dateFormat }).datepicker("setDate", defdateMulticity);
        $("#txtDate4").datepicker({ dateFormat: dateFormat }).datepicker("setDate", defdateMulticity);
        defdateMulticity.setDate(defdateMulticity.getDate() + 7);
        $("#Paneltxtdate4").datepicker({ dateFormat: dateFormat }).datepicker("setDate", defdateMulticity);
        $("#txtDate5").datepicker({ dateFormat: dateFormat }).datepicker("setDate", defdateMulticity);
        defdateMulticity.setDate(defdateMulticity.getDate() + 7);
        $("#Paneltxtdate5").datepicker({ dateFormat: dateFormat }).datepicker("setDate", defdateMulticity);
        $("#txtDate6").datepicker({ dateFormat: dateFormat }).datepicker("setDate", defdateMulticity);
        //$("#txtDate2copy").datepicker({ dateFormat: dateFormat }).datepicker("setDate", $("#txtDate2").datepicker('getDate'));
    }
    else if (firstID == "Paneltxtdate1") {
        $("#" + secondID).datepicker({ dateFormat: dateFormat }).datepicker("setDate", defDate);
        $("#txtDate_1").datepicker({ dateFormat: dateFormat }).datepicker("setDate", $("#" + firstID).datepicker('getDate'));
        $("#txtDate3").datepicker({ dateFormat: dateFormat }).datepicker("setDate", defDate);
        defdateMulticity.setDate(defdateMulticity.getDate() + 7);
        $("#Paneltxtdate3").datepicker({ dateFormat: dateFormat }).datepicker("setDate", defdateMulticity);
        $("#txtDate4").datepicker({ dateFormat: dateFormat }).datepicker("setDate", defdateMulticity);
        defdateMulticity.setDate(defdateMulticity.getDate() + 7);
        $("#Paneltxtdate4").datepicker({ dateFormat: dateFormat }).datepicker("setDate", defdateMulticity);
        $("#txtDate5").datepicker({ dateFormat: dateFormat }).datepicker("setDate", defdateMulticity);
        defdateMulticity.setDate(defdateMulticity.getDate() + 7);
        $("#Paneltxtdate5").datepicker({ dateFormat: dateFormat }).datepicker("setDate", defdateMulticity);
        $("#txtDate6").datepicker({ dateFormat: dateFormat }).datepicker("setDate", defdateMulticity);
    }
    else if (firstID == "Paneltxtdate2") {
        $("#" + secondID).datepicker({ dateFormat: dateFormat }).datepicker("setDate", defDate);
        $("#txtDate4").datepicker({ dateFormat: dateFormat }).datepicker("setDate", defDate);
        defdateMulticity.setDate(defdateMulticity.getDate() + 7);
        $("#Paneltxtdate4").datepicker({ dateFormat: dateFormat }).datepicker("setDate", defdateMulticity);
        $("#txtDate5").datepicker({ dateFormat: dateFormat }).datepicker("setDate", defdateMulticity);
        defdateMulticity.setDate(defdateMulticity.getDate() + 7);
        $("#Paneltxtdate5").datepicker({ dateFormat: dateFormat }).datepicker("setDate", defdateMulticity);
        $("#txtDate6").datepicker({ dateFormat: dateFormat }).datepicker("setDate", defdateMulticity);
    }
    else if (firstID == "Paneltxtdate3") {
        $("#" + secondID).datepicker({ dateFormat: dateFormat }).datepicker("setDate", defDate);
        $("#txtDate5").datepicker({ dateFormat: dateFormat }).datepicker("setDate", defDate);
        defdateMulticity.setDate(defdateMulticity.getDate() + 7);
        $("#Paneltxtdate5").datepicker({ dateFormat: dateFormat }).datepicker("setDate", defdateMulticity);
        $("#txtDate6").datepicker({ dateFormat: dateFormat }).datepicker("setDate", defdateMulticity);
    }
    else if (firstID == "Paneltxtdate4") {
        $("#" + secondID).datepicker({ dateFormat: dateFormat }).datepicker("setDate", defDate);
        $("#txtDate6").datepicker({ dateFormat: dateFormat }).datepicker("setDate", defdateMulticity);
    }
}

function SetDateModifyvalues(SetThis, SetTo) {
    $("#" + SetTo).val($("#" + SetThis).val());
}

function setFlightLinkText(myCTRL) {
    if ($('#add_flight').css('display') == 'none') {
        $(myCTRL).html('Delete');
        $("#hdntriptype").val(3);
    }
    else {
        $("#hdntriptype").val(2);
        $(myCTRL).html('Add Flight');
    }
}

function chgTripType(sType, me) {
    $('.anchor').removeClass('active');
    $(me).addClass('active');
    switch (sType) {
        case "rdbOneWay": {
            $("#rdbRoundTrip").prop('checked', false);
            $("#rdbMultiCity").prop('checked', false);
            $("#rdbOneWay").prop('checked', true);
            $("#pnlFlight1").css("display", "block");
            $("#pnlFlight3").css("display", "none");
            $("#pnlFlight2").css("display", "none");
            //Ankur Added
            $(".CommonMultiFlight").css("display", "none");
            $('#lnkAddFlight2').html('Add Flight');
            $("#rdbOneWay").val("rdbOneWay");
            $("#hdntriptype").val(1);
            break;
        }
        case "rdbRoundTrip": {
            $("#rdbMultiCity").prop('checked', false);
            $("#rdbOneWay").prop('checked', false);
            $("#rdbRoundTrip").prop('checked', true);
            $("#pnlFlight2").css("display", "block");
            $("#pnlFlight3").css("display", "none");
            $("#pnlFlight1").css("display", "block");
            $(".CommonMultiFlight").css("display", "none");
            $('#lnkAddFlight2').html('Add Flight');
            $("#rdbRoundTrip").val("rdbRoundTrip");
            $("#hdntriptype").val(2);
            $("#txtDepCity2").val($("#PaneltxtArrCity1").val());
            $("#txtArrCity2").val($("#PaneltxtDepCity1").val());
            break;
        }
        case "rdbMultiCity": {
            $("#rdbOneWay").prop('checked', false);
            $("#rdbRoundTrip").prop('checked', false);
            $("#rdbMultiCity").prop('checked', true);
            $("#pnlFlight2").css("display", "none");
            $("#pnlFlight3").css("display", "block");
            $("#pnlFlight1").css("display", "block");
            $("#rdbMultiCity").val("rdbMultiCity");
            $(".HideAddFlight2").css("display", "block");
            $("#hdnShowAddFlight").val(3);
            $("#hdntriptype").val(3);
            var defDateOrgin = $("#Paneltxtdate1").val();
            var dt = new Date(defDateOrgin);
            dt.setDate(dt.getDate() + 7);
            $("#txtDate3").datepicker({ dateFormat: dateFormat }).datepicker("setDate", dt);
            dt.setDate(dt.getDate() + 7);
            $("#txtDate4").datepicker({ dateFormat: dateFormat }).datepicker("setDate", dt);
            dt.setDate(dt.getDate() + 7);
            $("#txtDate5").datepicker({ dateFormat: dateFormat }).datepicker("setDate", dt);
            dt.setDate(dt.getDate() + 7);
            $("#txtDate6").datepicker({ dateFormat: dateFormat }).datepicker("setDate", dt);
            break;
        }
    }
}

///Added by Sanjeev
function changepassanger(adult, child, infant, cabintype) {
    $('#ddlPaxADT option[value=' + adult + ']').attr('selected', 'selected');
    $('#ddlPaxCHD option[value=' + child + ']').attr('selected', 'selected');
    $('#ddlPaxINF option[value=' + infant + ']').attr('selected', 'selected');
    $('#ddlCabin option[value=' + cabintype + ']').attr('selected', 'selected').change();
    $(".spnAirline").html($("#ddlAirline option:selected").text());
    //$('#ddlAirline option[value=' + airlinename + ']').attr('selected', 'selected').change();
}
function setpax(Passenger_Type) {
    var total_Person = 9;
    var currentAdult = parseInt($("#ddlPaxADT option:selected").val());
    var currentInfant = parseInt($("#ddlPaxINF option:selected").val());
    var currentChild = parseInt($("#ddlPaxCHD option:selected").val());
    var newhtml = "";
    var newhtmlChd = "";
    var maxInfant = "";
    var maxChild = "";
    switch (Passenger_Type) {
        case "Adult": {
            $("#ddlPaxINF").html("");
            $("#ddlPaxCHD").html("");
            maxInfant = parseInt(total_Person - (parseInt(currentAdult)));
            maxChild = parseInt(total_Person - (parseInt(currentAdult)));
            if (maxInfant <= parseInt(currentAdult)) {
                newhtml = "";
                for (count = 0; count <= maxInfant; count++) {
                    newhtml += "<option value=" + count + "> " + count + "</option>";
                }
            }
            else {
                maxInfant = parseInt(currentAdult);
                newhtml = "";
                for (count = 0; count <= maxInfant; count++) {
                    newhtml += "<option value=" + count + "> " + count + "</option>";
                }
            }
            for (count = 0; count <= maxChild; count++) {
                newhtmlChd += "<option value=" + count + "> " + count + "</option>";
            }
            $("#ddlPaxINF").html(newhtml);
            $('#ddlPaxINF').val('0');
            $("#ddlPaxCHD").html(newhtmlChd);
            $("#ddlPaxCHD").val('0');
            $(".spnSetChildPassenger").html('0');
            $(".spnSetInfantPassenger").html('0');
            currentInfant = parseInt($("#ddlPaxINF option:selected").val());
            currentChild = parseInt($("#ddlPaxCHD option:selected").val());
            break;
        }
        case "Child": {
            var maxADT = parseInt(total_Person - (parseInt(currentAdult) + parseInt(currentChild)));
            $("#ddlPaxCHD").html("");
            maxInfant = parseInt(total_Person - (parseInt(currentAdult)));
            maxChild = parseInt(total_Person - (parseInt(currentAdult)));
            $("#ddlPaxINF").html("");
            newhtml = "";
            if (maxADT == 0 || maxADT < currentAdult) {
                maxInfant = parseInt(maxADT);
                for (count = 0; count <= maxInfant; count++) {
                    newhtml += "<option value=" + count + "> " + count + "</option>";
                }
            }
            else {
                maxInfant = parseInt(currentAdult);
                for (count = 0; count <= maxInfant; count++) {
                    newhtml += "<option value=" + count + "> " + count + "</option>";
                }
            }
            for (count = 0; count <= maxChild; count++) {
                newhtmlChd += "<option value=" + count + "> " + count + "</option>";
            }
            $("#ddlPaxINF").html(newhtml);
            $("#ddlPaxINF").val('0');
            $(".spnSetInfantPassenger").html('0');
            $("#ddlPaxCHD").html(newhtmlChd);
            $("#ddlPaxCHD").val(currentChild);
            $(".spnSetChildPassenger").html(currentChild);
            currentInfant = parseInt($("#ddlPaxINF option:selected").val());
            currentChild = parseInt($("#ddlPaxCHD option:selected").val());
            break;
        }
        case "Infant": {
            var maxCHD = parseInt(total_Person - (parseInt(currentAdult) + parseInt(currentInfant)));
            $("#ddlPaxCHD").html("");
            maxChild = parseInt(maxCHD)
            newhtml = "";
            for (count = 0; count <= maxChild; count++) {
                newhtml += "<option value=" + count + "> " + count + "</option>";
            }
            $("#ddlPaxCHD").html(newhtml);
            $("#ddlPaxCHD").val(currentChild);
            break;
        }
        default:
    }
}

//Set Infant DropDown on page load
function setInfantddl() {
    var INF = parseInt($(".spnSetInfantPassenger").html());
    $("#ddlPaxINF").html("");
    var AdT = parseInt($(".spnSetPassenger").html());
    var total_person = 9;
    var CHD = parseInt($(".spnSetChildPassenger").html());
    $("#ddlPaxCHD").html("");
    var TotalCHD = parseInt(total_person - (AdT + INF));
    //var Total = parseInt(total_person - (AdT + CHD))
    var newhtml = "";
    var newCHDhtml = "";
    for (count = 0; count <= AdT; count++) {
        newhtml += "<option value=" + count + "> " + count + "</option>";
    }
    for (count = 0; count <= TotalCHD; count++) {
        newCHDhtml += "<option value=" + count + "> " + count + "</option>";
    }
    $("#ddlPaxINF").html(newhtml);
    $("#ddlPaxINF").val(INF);
    $("#ddlPaxCHD").html(newCHDhtml);
    $("#ddlPaxCHD").val(CHD);
}

function add_removetraveller(travellertype) {
    var traveller = travellertype.split(":");
    var traveller_adult = 0;
    var traveller_child = 0;
    var traveller_infant = 0;
    if (document.getElementById("ddlPaxADT")) {
        traveller_adult = parseInt(document.getElementById("ddlPaxADT").value);
    }
    if (document.getElementById("ddlPaxCHD")) {
        traveller_child = parseInt(document.getElementById("ddlPaxCHD").value);
    }
    if (document.getElementById("ddlPaxINF")) {
        traveller_infant = parseInt(document.getElementById("ddlPaxINF").value);
    }
    var totalperson = 0;
    totalperson = traveller_adult + traveller_child + traveller_infant;
    switch (traveller[1]) {
        case "adult":
            {
                if (document.getElementById("ddlPaxADT")) {
                    if (traveller[0] == "add" && totalperson < 9) {
                        traveller_adult = traveller_adult + 1;
                        totalperson = totalperson + 1;
                    }
                    else if (traveller[0] == "remove") {
                        traveller_adult = traveller_adult - 1;
                        totalperson = totalperson - 1;
                    }
                    if (traveller_adult <= 0) { traveller_adult = 1; }
                    if (traveller_infant > traveller_adult) {
                        while (traveller_infant > traveller_adult) {
                            traveller_infant = traveller_infant - 1;
                            totalperson = totalperson - 1;
                        }
                        document.getElementById("ddlPaxINF").value = traveller_infant;
                        $("#ddlPaxINF").html(traveller_infant);
                    }
                    document.getElementById("ddlPaxADT").value = traveller_adult;
                    $("#ddlPaxADT").html(traveller_adult);
                }
                break;
            }
        case "child":
            {
                if (document.getElementById("ddlPaxCHD")) {
                    if (traveller[0] == "add" && totalperson < 9) {
                        traveller_child = traveller_child + 1;
                    }
                    else if (traveller[0] == "remove") {
                        traveller_child = parseInt(traveller_child) - 1;
                    }
                    if (traveller_child < 0) { traveller_child = 0; }
                    document.getElementById("ddlPaxCHD").value = traveller_child;
                    $("#ddlPaxCHD").html(traveller_child);
                }
                break;
            }
        case "infant":
            {
                if (document.getElementById("ddlPaxINF")) {
                    if (traveller[0] == "add" && totalperson < 9) {
                        if (traveller_infant < traveller_adult) {
                            traveller_infant = traveller_infant + 1;
                        }
                    }
                    else if (traveller[0] == "remove") {
                        traveller_infant = traveller_infant - 1;
                    }
                    if (traveller_infant < 0) { traveller_infant = 0; }
                    document.getElementById("ddlPaxINF").value = traveller_infant;
                    $("#ddlPaxINF").html(traveller_infant);
                }
                break;
            }
    }
    totalperson = parseInt(traveller_adult) + parseInt(traveller_child) + parseInt(traveller_infant);
}

function validateModifySearch() {
    var errorMsg = false;
    //alert_message = "";
    formObj = document.forms["frmAirSearch"];
    var now = new Date();
    var twoDigitDate = ((now.getDate().length) === 1) ? (now.getDate()) : '0' + (now.getDate());
    var currdate = ((now.getMonth() + 1) + '/' + twoDigitDate + '/' + now.getFullYear());
    $("#servererror").html("");
    if (now == undefined) {
        now = new Date();
    }
    if (formObj.txtDepCity1.value == "" || formObj.txtDepCity1.value == formObj.txtDepCity1.getAttribute("defValue")) { $("#PaneltxtDepCity1").addClass('errorRedBorder'); errorMsg = true; } else { formObj.txtDepCity1.value = formObj.txtDepCity1.value; }
    if ((formObj.txtDepCity1.value.trim().length < 3 || formObj.txtDepCity1.value.trim().length > 3) && formObj.txtDepCity1.value.indexOf("-") == -1) {
        $("#PaneltxtDepCity1").addClass('errorRedBorder'); errorMsg = true;
    }
    else if (formObj.txtDepCity1.value.indexOf("XXX") >= 0) {
        $("#PaneltxtDepCity1").addClass('errorRedBorder'); errorMsg = true;
    }
    if (formObj.txtArrCity1.value == "" || formObj.txtArrCity1.value == formObj.txtArrCity1.getAttribute("defValue")) { $("#PaneltxtArrCity1").addClass('errorRedBorder'); errorMsg = true; } else { formObj.txtArrCity1.value = formObj.txtArrCity1.value; }
    if ((formObj.txtArrCity1.value.trim().length < 3 || formObj.txtArrCity1.value.trim().length > 3) && formObj.txtArrCity1.value.indexOf("-") == -1) {
        $("#PaneltxtArrCity1").addClass('errorRedBorder'); errorMsg = true;
    }
    else if (formObj.txtArrCity1.value.indexOf("XXX") >= 0) {
        $("#PaneltxtArrCity1").addClass('errorRedBorder'); errorMsg = true;
    }

    if (formObj.txtDate1.value == "" || formObj.txtDate1.value == formObj.txtDate1.getAttribute("defValue")) { $("#Paneltxtdate0").addClass('errorRedBorder'); errorMsg = true; } else { formObj.txtDate1.value = formObj.txtDate1.value; }
    if (dateDiff('d', formObj.txtDate1.value, dateAdd('d', 0, now)) > 0) { $("#Paneltxtdate0").addClass('errorRedBorder'); errorMsg = true; }

    if (formObj.TripType[0].checked || formObj.TripType[2].checked) {
        if (formObj.txtDepCity2.value == "" || formObj.txtDepCity2.value == formObj.txtDepCity2.getAttribute("defValue")) { $("#PaneltxtDepCity2").addClass('errorRedBorder'); errorMsg = true; } else { formObj.txtDepCity2.value = formObj.txtDepCity2.value; }
        if ((formObj.txtDepCity2.value.trim().length < 3 || formObj.txtDepCity2.value.trim().length > 3) && formObj.txtDepCity2.value.indexOf("-") == -1) {
            $("#PaneltxtDepCity2").addClass('errorRedBorder'); errorMsg = true;
        }
        else if (formObj.txtDepCity2.value.indexOf("XXX") >= 0) {
            $("#PaneltxtDepCity2").addClass('errorRedBorder'); errorMsg = true;
        }
        if (formObj.txtArrCity2.value == "" || formObj.txtArrCity2.value == formObj.txtArrCity2.getAttribute("defValue")) { $("#PaneltxtArrCity2").addClass('errorRedBorder'); errorMsg = true; } else { formObj.txtArrCity2.value = formObj.txtArrCity2.value; }
        if ((formObj.txtArrCity2.value.trim().length < 3 || formObj.txtArrCity2.value.trim().length > 3) && formObj.txtArrCity2.value.indexOf("-") == -1) {
            $("#PaneltxtArrCity2").addClass('errorRedBorder'); errorMsg = true;
        }
        else if (formObj.txtArrCity2.value.indexOf("XXX") >= 0) {
            $("#PaneltxtArrCity2").addClass('errorRedBorder'); errorMsg = true;
        }
        if (formObj.txtDate2.value == "" || formObj.txtDate2.value == formObj.txtDate2.getAttribute("defValue")) { $("#Paneltxtdate1,#txtDate_1").addClass('errorRedBorder'); errorMsg = true; } else { formObj.txtDate2.value = formObj.txtDate2.value; }
        if (dateDiff('d', formObj.txtDate2.value, formObj.txtDate1.value) > 0 || dateDiff('d', formObj.txtDate2.value, dateAdd('d', 0, now)) > 0) { $("#Paneltxtdate1,#txtDate_1").addClass('errorRedBorder'); errorMsg = true; }
    }
    if (formObj.TripType[2].checked) {
        if ($(".CommonMultiFlight").css("display") == "block") {
            for (var i = 3; i <= parseInt($("#hdnShowAddFlight").val()) ; i++) {
                if ($("#txtDepCity" + i).val() == "") { $("#PaneltxtDepCity" + i).addClass('errorRedBorder'); errorMsg = true; } //else { formObj.txtDepCity+i.value = formObj.txtDepCity+i.value; }
                if (($("#txtDepCity" + i).val().trim().length < 3 || $("#txtDepCity" + i).val().trim().length > 3) && $("#txtDepCity" + i).val().indexOf("-") == -1) {
                    $("#PaneltxtDepCity" + i).addClass('errorRedBorder'); errorMsg = true;
                }
                else if ($("#txtDepCity" + i).val().indexOf("XXX") >= 0) {
                    $("#PaneltxtDepCity" + i).addClass('errorRedBorder'); errorMsg = true;
                }

                if ($("#txtArrCity" + i).val() == "") { $("#PaneltxtArrCity" + i).addClass('errorRedBorder'); errorMsg = true; } //else { formObj.(txtArrCity+i).value = formObj.txtArrCity+i.value; }
                if (($("#txtArrCity" + i).val().trim().length < 3 || $("#txtArrCity" + i).val().trim().length > 3) && $("#txtArrCity" + i).val().indexOf("-") == -1) {
                    $("#PaneltxtArrCity" + i).addClass('errorRedBorder'); errorMsg = true;
                }
                else if ($("#txtArrCity" + i).val().indexOf("XXX") >= 0) {
                    $("#PaneltxtArrCity" + i).addClass('errorRedBorder'); errorMsg = true;
                }
                if ($("#Paneltxtdate" + (i - 1)).val() == "") { $("#Paneltxtdate" + (i - 1)).addClass('errorRedBorder'); errorMsg = true; } //else { formObj.txtDate+i.value = formObj.txtDate+i.value; }            
                if (dateDiff('d', $("#Paneltxtdate" + (i - 1)).val(), $("#Paneltxtdate" + (i - 2)).val()) > 0 || dateDiff('d', $("#Paneltxtdate" + (i - 1)).val(), dateAdd('d', 0, now)) > 0) { $("#Paneltxtdate" + (i - 1)).addClass('errorRedBorder'); errorMsg = true; }
                if (i != 3) {
                    for (var j = i; j > 1 ; j--) {
                        var cur = i;
                        if (dateDiff('d', $("#txtDate" + cur).val(), $("#txtDate" + (j - 1)).val()) > 0 || dateDiff('d', $("#txtDate" + cur).val(), dateAdd('d', 0, now)) > 0) { $("#Paneltxtdate" + (cur - 1)).addClass('errorRedBorder'); errorMsg = true; }
                    }
                }
            }
        }
    }
    var adult = $("#ddlPaxADT").val();
    var child = $("#ddlPaxCHD").val();
    if (child == null) {
        child = 0;
    }
    var infant = $("#ddlPaxINF").val();
    if (infant == null) {
        infant = 0;
    }
    var total = parseInt(adult) + parseInt(child) + parseInt(infant);

    if (parseInt(total) > 9) {
        $("#ddlPaxADT,#ddlPaxCHD,#ddlPaxINF").parent().addClass('errorRedBorder');
        errorMsg = true;
    }
    if (parseInt(adult) < parseInt(infant)) {
        errorMsg = true;
    }
    if (errorMsg) {
        //$(".errMsg").html("Please correct the error below.");
        return false;
    }
    return true;
}

function Setvalues(SetThis, SetTo) {
    $("#" + SetTo).val($("#" + SetThis).val());
    var hdnTripType = parseInt($("#hdntriptype").val());
    if (SetThis == "BartxtDepCity1") {
        if (hdnTripType == 2) {
            $("#txtArrCity2").val($("#" + SetThis).val());
        }
        $("#PaneltxtDepCity1").val($("#" + SetThis).val());
        $("#PaneltxtArrCity2").val($("#" + SetThis).val());
    }
    if (SetThis == "BartxtArrCity1") {
        if (hdnTripType == 2) {
            $("#txtDepCity2").val($("#" + SetThis).val());
        }
        $("#PaneltxtArrCity1").val($("#" + SetThis).val());
        $("#PaneltxtDepCity2").val($("#" + SetThis).val());
    }
    if (SetThis == "PaneltxtDepCity1") {
        if (hdnTripType == 2 || hdnTripType == 3) {
            $("#txtArrCity2").val($("#" + SetThis).val());
        }
        $("#BartxtDepCity1").val($("#" + SetThis).val());
        $("#PaneltxtArrCity2").val($("#" + SetThis).val());
    }
    if (SetThis == "PaneltxtArrCity1") {
        if (hdnTripType == 2 || hdnTripType == 3) {
            $("#txtDepCity2").val($("#" + SetThis).val());
        }
        $("#BartxtArrCity1").val($("#" + SetThis).val());
        $("#PaneltxtDepCity2").val($("#" + SetThis).val());
    }
    if (document.getElementById("Bar" + SetTo) != null) {
        $("#Bar" + SetTo).val($("#" + SetThis).val());
    }
}

//Set Last 4 Panel Value on focus and on blur textboxes
function SetTxtValue(SetThis, SetTo, CtrlId) {
    $("#" + SetTo).val($("#" + SetThis).val());
    if (SetThis == ("PaneltxtDepCity" + CtrlId) && $(".Div" + CtrlId).css("display") == "block") {
        $("#PaneltxtArrCity" + (CtrlId + 1)).val($("#" + SetThis).val());
        if ($(".Div" + (CtrlId + 1)).css("display") == "block") {
            $("#txtArrCity" + (CtrlId + 1)).val($("#" + SetThis).val());
        }
    }
    if (SetThis == ("PaneltxtArrCity" + CtrlId) && $(".Div" + CtrlId).css("display") == "block") {
        $("#PaneltxtDepCity" + (CtrlId + 1)).val($("#" + SetThis).val());
        if ($(".Div" + (CtrlId + 1)).css("display") == "block") {
            $("#txtDepCity" + (CtrlId + 1)).val($("#" + SetThis).val());
        }
    }
}
function SetvaluesModify(SetThis, SetTo) {
    var stetTxtValue = document.getElementById(SetThis).value;
    document.getElementById(SetTo).value = stetTxtValue;
    if (document.getElementById("Bar" + SetTo) != null) {
        $("#Bar" + SetTo).val(stetTxtValue);
    }
    $("#Panel" + SetTo).val(stetTxtValue);
}
function SetvaluesModifyradio(SetThis) {
    var SetTo = $("#" + SetThis).attr("data-setvalue")
    var stetTxtValue = $("#" + SetThis)[0].innerHTML;
    if (SetThis.indexOf("txtDepCity1") >= 0) {
        $("#txtArrCity2").val($("#" + SetThis).val());
        $("#" + SetTo).val(stetTxtValue);
    }
    if (SetThis.indexOf("txtDepCity2") >= 0) {
        $("#txtDepCity2").val(stetTxtValue);
    }
    if (SetThis.indexOf("txtArrCity2") >= 0) {
        $("#txtArrCity2").val(stetTxtValue);
    }
    if (SetThis.indexOf("txtArrCity1") >= 0) {
        $("#txtDepCity2").val(stetTxtValue);
        $("#" + SetTo).val(stetTxtValue);
    }
    if ($("#hdntriptype").val() == 2) {
        if (SetThis.indexOf("txtDepCity1") >= 0) {
            $("#PaneltxtArrCity2").val(stetTxtValue);
        }
        if (SetThis.indexOf("txtArrCity1") >= 0) {
            $("#PaneltxtDepCity2").val(stetTxtValue);
        }
    }
    if (SetThis.indexOf("txtDepCity3") >= 0) {
        $("#txtDepCity3").val(stetTxtValue);
    }
    if (SetThis.indexOf("txtArrCity3") >= 0) {
        $("#txtArrCity3").val(stetTxtValue);
    }
    if ($("#Bar" + SetTo) != null) {
        $("#Bar" + SetTo).val(stetTxtValue);
    }
    $("#Panel" + SetTo).val(stetTxtValue);
    $("#" + SetThis).parent().css("display", "none");
}
function setsearchtrip() {
    if ($("#hdntriptype").val() == 3 && $("#lnkAddFlight2").html() == "Add Flight") {
        $("#hdntriptype").val(2);
    }
}

function RemoveBorder(id) {
    $(id).removeClass('errorRedBorder');
    $(".clsremoveBorder").removeClass('errorRedBorder');
    $(".errMsg").html("");
}

function ShowModifyDiv() {
    for (var startcounter = 3; startcounter <= parseInt($("#hdnShowModifyFlight").val()) ; startcounter++) {
        var html = " ";
        html += "<div class='row ShowModify" + startcounter + "'>";
        html += "<div class='col-sm-3 col-xs-6'>";
        html += "<div class='form-group'>";
        html += "<label>Leaving From</label>";
        html += "<input type='text' id='PaneltxtDepCity" + startcounter + "' maxlength='30' name='PaneltxtDepCity" + startcounter + "' onfocus='return RemoveBorder(this);' class='input-text full-width cls_autofill clsremoveBorder' onkeyup='return CharacterCheck(this.id);' onchange='SetTxtValue(&quot;PaneltxtDepCity" + startcounter + "&quot;, &quot;txtDepCity" + startcounter + "&quot;," + startcounter + ");' onblur='SetTxtValue(&quot;PaneltxtDepCity" + startcounter + "&quot;, &quot;txtDepCity" + startcounter + "&quot;," + startcounter + ");' value=''/>";
        html += "</div></div>";
        html += "<div class='col-sm-3 col-xs-6'><div class='form-group'>";
        html += "<label>Going To</label>";
        html += "<input type='text' id='PaneltxtArrCity" + startcounter + "' maxlength='30' name='PaneltxtArrCity" + startcounter + "' onfocus='return RemoveBorder(this);' class='input-text full-width cls_autofill clsremoveBorder' onkeyup='return CharacterCheck(this.id);' onchange='SetTxtValue(&quot;PaneltxtArrCity" + startcounter + "&quot;, &quot;txtArrCity" + startcounter + "&quot;," + startcounter + ");' onblur='SetTxtValue(&quot;PaneltxtArrCity" + startcounter + "&quot;, &quot;txtArrCity" + startcounter + "&quot;," + startcounter + ");' value=''/>";
        html += "</div></div>";
        html += "<div class='col-sm-3 col-xs-6'><div class='form-group'>";
        html += "<label>Departing On</label>";
        html += "<div class='datepicker-wrap'>";
        html += "<input type='text' id='Paneltxtdate" + (startcounter - 1) + "' name='Paneltxtdate" + (startcounter - 1) + "' class='input-text dpicker full-width clsremoveBorder' onfocus='return RemoveBorder(this);' onchange='SetDateModifyvalues(&#39;Paneltxtdate" + (startcounter - 1) + "&#39;, &#39;txtDate" + startcounter + "&#39;);' readonly/>";
        html += "<img class='ui-datepicker-trigger' src='images/icon/blank.png' alt='' title=''>";
        html += "</div><div class='col-xs-5'>&nbsp; </div>";
        html += "</div></div>";
        html += "<div class='col-sm-3 col-xs-6'><div class='row'>";
        html += "<div class='col-lg-3 col-md-3 col-sm-3 col-xs-3 HideCloseDiv" + startcounter + "'><label>&nbsp;</label><div class='processdelet closeDiv' onclick='CloseDiv(" + startcounter + ");'>X</div></div>"
        if (startcounter != parseInt($("#hdnShowModifyFlight").val())) {
            html += "<div class='col-lg-9 col-md-9 col-sm-9 col-xs-9 HideAddFlight" + startcounter + "'><label>&nbsp;</label><div class='processAddflight'>";
            html += "<a id='lnkAddFlight" + startcounter + "' style='cursor: pointer;' class='showDiv" + startcounter + "' onclick='ShowPopupModify(" + startcounter + ");'>Add Flight</a>";
            html += "</div></div>";
        }
        html += "</div></div></div>";
        $(".Div" + startcounter).html("").append(html);
    }
}

function ShowLinkButton(Counter) {
    var html = " ";
    html += "<div class='col-lg-9 col-md-9 col-sm-9 col-xs-9 HideAddFlight" + Counter + "'><label>&nbsp;</label><div class='processAddflight'>";
    html += "<a id='lnkAddFlight" + Counter + "' style='cursor: pointer;' class='showDiv" + Counter + "' onclick='ShowPopupModify(" + Counter + ");'>Add Flight</a>";
    html += "</div></div>";
    return html;
}

function CloseDiv(Counter) {
    $("#hdnShowAddFlight").val((Counter - 1));
    $(".ShowModify" + Counter).parent().css("display", "none");
    $("#lnkAddFlight" + (Counter - 1)).html("Add Flight");
    $(".HideAddFlight" + (Counter - 1)).show();
    //For Close Div Hide
    $(".HideCloseDiv" + (Counter - 1)).show();
    $("#txtDepCity" + Counter).val("");
    $("#txtArrCity" + Counter).val("");
}

function ShowPopupModify(ModifyPanelID) {
    $("#hdnShowAddFlight").val((ModifyPanelID + 1));
    //$("#lnkAddFlight" + ModifyPanelID).html("Delete");

    var defDateOrgin = $("#Paneltxtdate" + (ModifyPanelID - 1)).datepicker('getDate');
    var defdateMulticity = defDateOrgin;
    if (defdateMulticity != null) {
        defdateMulticity.setDate(defdateMulticity.getDate() + 7);
        $("#Paneltxtdate" + ModifyPanelID).datepicker({ dateFormat: "dd-M-y" }).datepicker("setDate", defdateMulticity);
    }
    $(".Div" + (ModifyPanelID + 1)).css("display", "block");
    //if ($("#lnkAddFlight" + ModifyPanelID).html() == "Delete") {
    $(".HideAddFlight" + ModifyPanelID).hide();
    $(".HideCloseDiv" + ModifyPanelID).hide();
    //For Hide AddFlight Button Show
    $(".HideAddFlight" + (ModifyPanelID + 1)).show();
    //For Cancel Button Show
    $(".HideCloseDiv" + (ModifyPanelID + 1)).show();
    //}
}

function ShowError(PanelType) {
    var PanelType = PanelType.split("&");
    for (var i = 1; i <= PanelType.length - 1; i++) {
        if (PanelType[i].indexOf("ddlPaxADT") >= 0) {
            $(".addBorder").addClass('errorRedBorder');
        }
        else {
            if (("#" + PanelType[i]) == "#Paneltxtdate1") {
                $("#txtDate_1").addClass('errorRedBorder');
            }
            $("#" + PanelType[i]).addClass('errorRedBorder');
        }
    }
}

function CharacterCheck(CTRLID) {
    var CTRLVal = $("#" + CTRLID).val();
    var isSplChar = regCheck.test(CTRLVal);
    if (isSplChar) {
        var no_spl_char = CTRLVal.replace(regCheck, '');
        $("#" + CTRLID).val(no_spl_char);
    }
}

//function processForm(request, classId, radioId) {
//    $.ajax({
//        type: "GET",
//        url: "http://book.perfectibe.com/JSONDrop.aspx",
//        data: {
//            startswith: request,
//            agentid: requestquery.agent_id,
//            WebsiteId: requestquery.website_id
//        },
//        contentType: "application/json; charset=utf-8",
//        dataType: "jsonp",
//        error: function (xhr, err) {
//            alert('Sample of error data:', err);
//            alert("readyState: " + xhr.readyState + "\nstatus: " + xhr.status + "\nresponseText: " + xhr.responseText);
//        },
//        success: function (data) {
//            var radioId1 = radioId.replace(/\s+/g, "");
//            var clsId = "." + classId;
//            var sp = classId.split('_');
//            var co = "#radioCountA_" + sp[1];
//            $(co).val(data.result.length);
//            for (var i = 0; i < data.result.length; i++) {
//                $(clsId).append("<li role='option' id='" + radioId1 + i + "' name='country" + radioId1 + "' onclick='SetvaluesModifyradio(this.id);'  data-setvalue='" + radioId1 + "' tabindex='-1' class='radiobig'> " + data.result[i].Result_Code + "-" + data.result[i].Result_FullName + " </li>")
//            }

//        }
//    });
//}

//function PostPage() {
//    frmAirSearch.submit();
//}




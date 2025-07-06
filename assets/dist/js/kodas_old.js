$(document).ready(function () {
    var counter = 1;

    $(".addrow").on("click", function () {
        var newRow = $("<tr>");
        var cols = "";

        cols += '<td><input  placeholder="Enter Pur Sr" type="text" class="form-control" name="pursr' + counter + '" id="pursr' + counter + '"/></td>';
        cols += '<td><input placeholder="Enter Take Sr" type="text" class="form-control" name="takasr' + counter + '" id="takasr' + counter + '"/></td>';
        cols += '<td><input placeholder="Enter Mts" type="text" class="form-control" name="mts' + counter + '" id="mts' + counter + '"/></td>';

        cols += '<td><input type="button" class="ibtnDel btn btn-md btn-danger "  value="Delete"></td>';
        newRow.append(cols);
        $("table.order-list").append(newRow);
        $("#countdata").val(counter+1);
        var sumdata = $(".countdata").val();
        $(".countdata").val(1 + parseInt(sumdata));
        counter++;
    });

    $("table.order-list").on("click", ".ibtnDel", function (event) {
        $(this).closest("tr").remove();       
        counter -= 1
         $("#countdata").val(counter);
          var subdata = $(".countdata").val();
        $(".countdata").val(parseInt(subdata) - 1);
    });
});

function getPacking(packingcount)
{
    $.ajax({
    url: base_url+'Transaction_controller/GetPackage',
    data: {},
    type: 'POST',
      success: function(data){
            $("#Packing"+packingcount).html(data);
          
          }
    });
}
function getItem(packingcount)
{

    $.ajax({
    url: base_url+'Transaction_controller/GetItem',
    data: {},
    type: 'POST',
      success: function(data){
            $("#screenName"+packingcount).html(data);
          
          }
    });
}
function getItem1(packingcount)
{

    $.ajax({
    url: base_url+'Transaction_controller/GetItem',
    data: {},
    type: 'POST',
      success: function(data){
            $("#MainScreen"+packingcount).html(data);
          
          }
    });
}

function getCutData(packingcount)
{
    //var myValue = $(this).val();
    var singleValues = $( "#MainScreen"+packingcount ).val();
    //alert(singleValues);
    $.ajax({
    url: base_url+'Transaction_controller/GetCutData',
    data: {singleValues:singleValues},
    type: 'POST',
      success: function(data){
            var obj = jQuery.parseJSON(data);
            $("#Cut"+packingcount).val(obj.Cut);
            $("#Rate"+packingcount).val(obj.Rate2);
          
          }
    });
}
function getItemCutData(packingcount)
{
    //var myValue = $(this).val();
    var singleValues = $( "#ItemName"+packingcount ).val();
    //alert(singleValues);
    $.ajax({
    url: base_url+'Transaction_controller/GetCutData',
    data: {singleValues:singleValues},
    type: 'POST',
      success: function(data){
            var obj = jQuery.parseJSON(data);
            $("#Cut"+packingcount).val(obj.Cut);
            $("#Rate"+packingcount).val(obj.Rate2);
          
          }
    });
}

function getEditCutData(packingcount)
{
    //var myValue = $(this).val();
    alert("Hii");
    var singleValues = $(".countdata").val();
    $.ajax({
    url: base_url+'Transaction_controller/GetCutData',
    data: {singleValues:singleValues},
    type: 'POST',
      success: function(data){
            var obj = jQuery.parseJSON(data);
            $("#Cut"+packingcount).val(obj.Cut);
            $("#Rate"+packingcount).val(obj.Rate2);
          
          }
    });
}

function forcalculation(counter)
{
    var tot=0;
    $("#MtsQty"+counter).val(($("#Pcs"+counter).val())*($("#Cut"+counter).val()));
    $("#amount"+counter).val(($("#Pcs"+counter).val())*($("#Rate"+counter).val()));
    $("#CgstSgstAmt"+counter).val((($("#amount"+counter).val())*($("#Cgst"+counter).val()))/100);
    $("#SgstAmt"+counter).val((($("#amount"+counter).val())*($("#SgstData"+counter).val()))/100);
    $("#CgstAmt").val((($("#GrandTotal13").val())*($("#CgstIgst").val()))/100);
    $("#SgstAmt").val((($("#GrandTotal13").val())*($("#Sgst").val()))/100);
    $("#TaxableValue").val($("#GrandTotal13").val());

    a=Number(document.getElementById("CgstAmt").value);
    b=Number(document.getElementById("SgstAmt").value);
    c=Number(document.getElementById("GrandTotal13").value);
    d= a + b + c;

    document.getElementById("BillAmt").value= d;
    $("#NetAfterTds").val($("#BillAmt").val());
    $("#EwayBillNo").val($("#BillAmt").val());
    /*$("#BillAmt").val(d);*/
    
    // tot += $(".Pcs").val();
    // $("#GrandTotal1").val(tot);
}



$(document).ready(function () {
    var counter = 1;

    $(".addsalerow").on("click", function () {
        var newRow = $("<tr>");

        var cols = "";

        getPacking(counter);
        getItem(counter);
        getItem1(counter);
        getCutData(counter);

        cols += '<td><input  type="text" class="form-control" name="pick' + counter + '" id="pick' + counter + '" placeholder="PICK"/></td>';
        cols += '<td><input  type="text" class="form-control" name="ref' + counter + '" id="ref' + counter + '" placeholder="Ref"/></td>';
        cols += '<td><select name="MainScreen' + counter + '" id="MainScreen' + counter + '" class="form-control MainScreen" onchange="getCutData('+ counter +');"></select></td>';
        cols += '<td><select name="screenName' + counter + '" id="screenName' + counter + '" class="form-control screenName"></select></td>';
        cols += '<td><select name="Packing' + counter + '" id="Packing' + counter + '" class="form-control Packing"></select></td>';

         cols += '<td><select name="Unit' + counter + '" id="Unit' + counter + '"  class="form-control">'+
                    '<option value="">-Select-</option>'+
                    '<option value="pcs">Pcs</option>'+
                    '<option value="mts">MTS</option>'+
                    '<option value="kg">KG</option>'+
                    '<option value="suit">Suit</option>'+
                    '<option value="other">Other</option>'+
                '</select></td>';


        cols += '<td><input type="text" class="form-control Pcs" name="Pcs' + counter + '" id="Pcs' + counter + '" onkeyup="forcalculation(' + counter + ');" placeholder="Pcs"/></td>';
        cols += '<td><input type="text" class="form-control" name="Cut' + counter + '" id="Cut' + counter + '" onkeyup="forcalculation(' + counter + ');" placeholder="Cut"/></td>';
        cols += '<td><input type="text" class="form-control Mts" name="MtsQty' + counter + '" id="MtsQty' + counter + '" placeholder="Mts/Qty"/></td>';
        cols += '<td><input type="text" class="form-control" name="Rate' + counter + '" id="Rate' + counter + '" onkeyup="forcalculation(' + counter + ');" placeholder="Rate"/></td>';
        cols += '<td><input type="text" class="form-control amount" name="amount' + counter + '" id="amount' + counter + '" onkeyup="forcalculation(' + counter + ');" placeholder="Amount"/></td>';
        cols += '<td><input type="text" class="form-control" name="Rd' + counter + '" id="Rd' + counter + '" placeholder="Rd"/></td>';
        cols += '<td><input type="text" class="form-control" name="Disc' + counter + '" id="Disc' + counter + '" placeholder="Disc"/></td>';
        cols += '<td><input type="text" class="form-control" name="MANUAALAddLess' + counter + '" id="MANUAALAddLess' + counter + '" placeholder="MANUAALAddLess"/></td>';
        cols += '<td><input type="text" class="form-control Cgst" name="Cgst' + counter + '" id="Cgst' + counter + '" onkeyup="forcalculation(' + counter + ');" placeholder="Cgst"/></td>';
        cols += '<td><input type="text" class="form-control SgstData" name="Sgst' + counter + '" id="SgstData' + counter + '" onkeyup="forcalculation(' + counter + ');" placeholder="Sgst"/></td>';
        cols += '<td><input type="text" class="form-control" name="CgstSgstAmt' + counter + '" id="CgstSgstAmt' + counter + '" onkeyup="forcalculation(' + counter + ');" placeholder="CgstSgstAmt"/></td>';
        cols += '<td><input type="text" class="form-control" name="SgstAmt' + counter + '" id="SgstAmt' + counter + '" placeholder="SgstAmt"/></td>';

        cols += '<td><input type="button" class="ibtnDel btn btn-md btn-danger "  value="Delete"></td>';
        newRow.append(cols);
        $("table.order-list").append(newRow);
        $("#SellOrdercountdata").val(counter+1);
        var sumdata = $("#SellOrdercountdata").val();

        $("#SellOrdercountdata").val(1 + parseInt(sumdata));
        counter++;

    });

    var sumdata = $("#SellOrdercountdata").val();
    
    $("table.order-list").on("click", ".ibtnDel", function (event) {
        $(this).closest("tr").remove();       
        counter -= 1
         $("#SellOrdercountdata").val(counter);
          var subdata = $(".SellOrdercountdata").val();
        $(".SellOrdercountdata").val(parseInt(subdata) - 1);
    });
});

function calculateRow(row) {
    var price = +row.find('input[name^="price"]').val();
}

function calculateGrandTotal() {
    var grandTotal = 0;
    $("table.order-list").find('input[name^="price"]').each(function () {
        grandTotal += +$(this).val();
    });
    $("#grandtotal").text(grandTotal.toFixed(2));
}

/* Sales order Bill Start */
function getBillItem(packingcount)
{

    $.ajax({
    url: base_url+'Transaction_controller/GetItem',
    data: {},
    type: 'POST',
      success: function(data){
            $("#ItemName"+packingcount).html(data);
          
          }
    });
}
function forSBillcalculation(counter)
{
    var tot=0;
    $("#MtsQty"+counter).val(($("#Pcs"+counter).val())*($("#Cut"+counter).val()));
    $("#amount"+counter).val(($("#Pcs"+counter).val())*($("#Rate"+counter).val()));

    $("#SBCgstAmt").val((($("#SBTotalAmount").val())*($("#SBCgst").val()))/100);
    $("#SBSgstAmt").val((($("#SBTotalAmount").val())*($("#SBSgst").val()))/100);
    $("#SBTaxableValue").val($("#SBTotalAmount").val());

    a=Number(document.getElementById("SBCgstAmt").value);
    b=Number(document.getElementById("SBSgstAmt").value);
    c=Number(document.getElementById("SBTotalAmount").value);
    d= a + b + c;

    document.getElementById("SBBillAmt").value= d;
    $("#SBNetAfterTds").val($("#SBBillAmt").val());
    $("#SBNetAmt").val($("#SBBillAmt").val());
    $("#SBEwayBillNo1").val($("#SBEwayBillNo").val());

    $("#SBValue1").val($("#SBTotalAmount").val());
    $("#SBValue2").val($("#SBTotalAmount").val());
    $("#SBValue3").val($("#SBTotalAmount").val());
    $("#SBAmt1").val((($("#SBValue1").val())*($("#SBValue11").val()))/100);
    $("#SBAmt2").val((($("#SBValue2").val())*($("#SBValue21").val())));
    $("#SBAmt3").val((($("#SBValue3").val())*($("#SBValue31").val())));

    Total1=Number(document.getElementById("SBAmt1").value);
    Total2=Number(document.getElementById("SBAmt2").value);
    Total3=Number(document.getElementById("SBAmt3").value);
    Total4=Number(document.getElementById("SBTotalAmount").value);
    TotalNet= Total1 + Total2 + Total3 + Total4;
    document.getElementById("SBNetAmt1").value= TotalNet;


}
    var counter1 = 1;

    $(".addSaleOrderBillrow").on("click", function () {
        var newRow = $("<tr>");

        var cols = "";

        getPacking(counter1);
        getBillItem(counter1);
        getItem1(counter1);
        getItemCutData(counter1);

        cols += '<td style="padding: 0.2rem !important;"><input  type="text" class="form-control" name="pick' + counter1 + '" id="pick' + counter1 + '" placeholder="PICK"/></td>';
        cols += '<td style="padding: 0.2rem !important;"><input  type="text" class="form-control" name="ref' + counter1 + '" id="ref' + counter1 + '" placeholder="Ref"/></td>';
        cols += '<td style="padding: 0.2rem !important;"><select name="ItemName' + counter1 + '" id="ItemName' + counter1 + '" class="form-control ItemName" onchange="getItemCutData('+ counter1 +');"></select></td>';
         cols += '<td style="padding: 0.2rem !important;"><input  type="text" class="form-control" name="Bundles' + counter1 + '" id="Bundles' + counter1 + '" placeholder="Ref"/></td>';
        cols += '<td style="padding: 0.2rem !important;"><select name="MainScreen' + counter1 + '" id="MainScreen' + counter1 + '" class="form-control MainScreen"></select></td>';
        cols += '<td style="padding: 0.2rem !important;"><select name="Packing' + counter1 + '" id="Packing' + counter1 + '" class="form-control Packing"></select></td>';

         cols += '<td style="padding: 0.2rem !important;"><select name="Unit' + counter1 + '" id="Unit' + counter1 + '"  class="form-control">'+
                    '<option value="">-Select-</option>'+
                    '<option value="pcs">Pcs</option>'+
                    '<option value="mts">MTS</option>'+
                    '<option value="kg">KG</option>'+
                    '<option value="suit">Suit</option>'+
                    '<option value="other">Other</option>'+
                '</select></td>';


        cols += '<td style="padding: 0.2rem !important;"><input type="text" class="form-control Pcs" name="Pcs' + counter1 + '" id="Pcs' + counter1 + '" onkeydown="forSBillcalculation(' + counter1 + ');" placeholder="Pcs"/></td>';
        cols += '<td style="padding: 0.2rem !important;"><input type="text" class="form-control" name="Cut' + counter1 + '" id="Cut' + counter1 + '" onkeydown="forSBillcalculation(' + counter1 + ');" placeholder="Cut"/></td>';
        cols += '<td style="padding: 0.2rem !important;"><input type="text" class="form-control Mts" name="MtsQty' + counter1 + '" id="MtsQty' + counter1 + '" placeholder="Mts/Qty"/></td>';
        cols += '<td style="padding: 0.2rem !important;"><input type="text" class="form-control" name="Rate' + counter1 + '" id="Rate' + counter1 + '" onkeydown="forSBillcalculation(' + counter1 + ');" placeholder="Rate"/></td>';
        cols += '<td style="padding: 0.2rem !important;"><input type="text" class="form-control amount" name="amount' + counter1 + '" id="amount' + counter1 + '" onkeydown="forSBillcalculation(' + counter1 + ');" placeholder="Amount"/></td>';
        
        cols += '<td style="padding: 0.2rem !important;"><input type="button" class="ibtnDel btn btn-md btn-danger "  value="Delete"></td>';
        newRow.append(cols);
        $("table.order-listData").append(newRow);
        $("#SellOrderBillcountdata").val(counter1+1);
        var sumdata = $("#SellOrderBillcountdata").val();

        $("#SellOrderBillcountdata").val(1 + parseInt(sumdata));
        counter1++;

    });

    $("table.order-listData").on("click", ".ibtnDel", function (event) {
        $(this).closest("tr").remove();       
        counter1 -= 1
        $("#SellOrderBillcountdata").val(counterfinish);
    });
/* Sales order Bill End */


$(function() {
$("#companyform").find(".customvalidation").jqBootstrapValidation(
{
    preventSubmit: true,
    submitError: function($form, event, errors) {
        // Here I do nothing, but you could do something like display 
        // the error messages to the user, log, etc.
    },
    submitSuccess: function($form, event) {
       // alert();
       
        event.preventDefault();

            $.ajax({
            url: base_url+'Company_controller/savecomapny',
            data: new FormData($('#companyform')[0]),
            processData: false,
            contentType: false,
            type: 'POST',
              success: function(data){
                    $.toast({
                        heading: 'Success'
                        , text: 'your data add successfully.'
                        , position: 'top-right'
                        , loaderBg: '#ff6849'
                        , icon: 'success'
                        , hideAfter: 3500
                        , stack: 6
                    })
                     setTimeout(function(){ window.location.href = base_url+"Company_controller"; }, 3500);
                  
                  }
            });
    },
    filter: function() {
        return $(this).is(":visible");
    }
}
);




$("#addcategoryform").find(".customvalidation").jqBootstrapValidation(
{
    preventSubmit: true,
    submitError: function($form, event, errors) {
        // Here I do nothing, but you could do something like display 
        // the error messages to the user, log, etc.
    },
    submitSuccess: function($form, event) {
       
        event.preventDefault();

            $.ajax({
		 	url: base_url+'Category_controller/savecategory',
			data: new FormData($('#addcategoryform')[0]),
			processData: false,
			contentType: false,
			type: 'POST',
			  success: function(data){
				  	 insert();
				  	 setTimeout(function(){ window.location.href = base_url+"Category_controller"; }, 3500);
				  
				  }
			});
    },
    filter: function() {
        return $(this).is(":visible");
    }
});

$("#addledgerform").find(".customvalidation").jqBootstrapValidation(
{
    preventSubmit: true,
    submitError: function($form, event, errors) {
        // Here I do nothing, but you could do something like display 
        // the error messages to the user, log, etc.
    },
    submitSuccess: function($form, event) {
       
        event.preventDefault();

            $.ajax({
            url: base_url+'Ledger_controller/saveledger',
            data: new FormData($('#addledgerform')[0]),
            processData: false,
            contentType: false,
            type: 'POST',
              success: function(data){
                     insert();
                     setTimeout(function(){ window.location.href = base_url+"Ledger_controller"; }, 3500);
                  
                  }
            });
    },
    filter: function() {
        return $(this).is(":visible");
    }
});

$("#editledgerform").find(".customvalidation").jqBootstrapValidation(
{
    preventSubmit: true,
    submitError: function($form, event, errors) {
        // Here I do nothing, but you could do something like display 
        // the error messages to the user, log, etc.
    },
    submitSuccess: function($form, event) {
       
        event.preventDefault();

            $.ajax({
            url: base_url+'Ledger_controller/saveledger',
            data: new FormData($('#editledgerform')[0]),
            processData: false,
            contentType: false,
            type: 'POST',
              success: function(data){
                     update();
                     setTimeout(function(){ window.location.href = base_url+"Ledger_controller"; }, 3500);
                  
                  }
            });
    },
    filter: function() {
        return $(this).is(":visible");
    }
});

$("#addremarkform").find(".customvalidation").jqBootstrapValidation(
{
    preventSubmit: true,
    submitError: function($form, event, errors) {
        // Here I do nothing, but you could do something like display 
        // the error messages to the user, log, etc.
    },
    submitSuccess: function($form, event) {
       
        event.preventDefault();

            $.ajax({
		 	url: base_url+'Remark_controller/saveremark',
			data: new FormData($('#addremarkform')[0]),
			processData: false,
			contentType: false,
			type: 'POST',
			  success: function(data){
				  	 insert();
				  	 setTimeout(function(){ window.location.href = base_url+"Remark_controller"; }, 3500);
				  }
			});
    },
    filter: function() {
        return $(this).is(":visible");
    }
});

$("#addaccountgrpform").find(".customvalidation").jqBootstrapValidation(
{
    preventSubmit: true,
    submitError: function($form, event, errors) {
        // Here I do nothing, but you could do something like display 
        // the error messages to the user, log, etc.
    },
    submitSuccess: function($form, event) {
       
        event.preventDefault();

            $.ajax({
            url: base_url+'Accountgroup_controller/saveaccountgroup',
            data: new FormData($('#addaccountgrpform')[0]),
            processData: false,
            contentType: false,
            type: 'POST',
              success: function(data){
                     insert();
                    setTimeout(function(){ window.location.href = base_url+"Accountgroup_controller"; }, 3500);
                  }
            });
    },
    filter: function() {
        return $(this).is(":visible");
    }
});

$("#editaccountgroupfrm").find(".customvalidation").jqBootstrapValidation(
{
    preventSubmit: true,
    submitError: function($form, event, errors) {
        // Here I do nothing, but you could do something like display 
        // the error messages to the user, log, etc.
    },
    submitSuccess: function($form, event) {
       
        event.preventDefault();

            $.ajax({
            url: base_url+'Accountgroup_controller/saveaccountgroup',
            data: new FormData($('#editaccountgroupfrm')[0]),
            processData: false,
            contentType: false,
            type: 'POST',
              success: function(data){
                     update();
                    setTimeout(function(){ window.location.href = base_url+"Accountgroup_controller"; }, 3500);
                  }
            });
    },
    filter: function() {
        return $(this).is(":visible");
    }
});

$("#editremarkform").find(".customvalidation").jqBootstrapValidation(
{
    preventSubmit: true,
    submitError: function($form, event, errors) {
        // Here I do nothing, but you could do something like display 
        // the error messages to the user, log, etc.
    },
    submitSuccess: function($form, event) {
       
        event.preventDefault();

            $.ajax({
            url: base_url+'Remark_controller/saveremark',
            data: new FormData($('#editremarkform')[0]),
            processData: false,
            contentType: false,
            type: 'POST',
              success: function(data){
                     update();
                     setTimeout(function(){ window.location.href = base_url+"Remark_controller"; }, 3500);
                  
                  }
            });
    },
    filter: function() {
        return $(this).is(":visible");
    }
});


$("#addgreyqutform").find(".customvalidation").jqBootstrapValidation(
{
    preventSubmit: true,
    submitError: function($form, event, errors) {
        // Here I do nothing, but you could do something like display 
        // the error messages to the user, log, etc.
    },
    submitSuccess: function($form, event) {
       
        event.preventDefault();

            $.ajax({
		 	url: base_url+'Grey_Quality/savegreyqty',
			data: new FormData($('#addgreyqutform')[0]),
			processData: false,
			contentType: false,
			type: 'POST',
			  success: function(data){
				  	 insert();
				  	 setTimeout(function(){ window.location.href = base_url+"Grey_Quality"; }, 3500);
				  
				  }
			});
    },
    filter: function() {
        return $(this).is(":visible");
    }
});

$("#editgreyqutform").find(".customvalidation").jqBootstrapValidation(
{
    preventSubmit: true,
    submitError: function($form, event, errors) {
        // Here I do nothing, but you could do something like display 
        // the error messages to the user, log, etc.
    },
    submitSuccess: function($form, event) {
       
        event.preventDefault();

            $.ajax({
		 	url: base_url+'Grey_Quality/savegreyqty',
			data: new FormData($('#editgreyqutform')[0]),
			processData: false,
			contentType: false,
			type: 'POST',
			  success: function(data){
				  	 update();
				  	 setTimeout(function(){ window.location.href = base_url+"Grey_Quality"; }, 3500);
				  
				  }
			});
    },
    filter: function() {
        return $(this).is(":visible");
    }
});

/* Code By Urvashi Start */
$("#addscreenbrandform").find(".customvalidation").jqBootstrapValidation(
{

    preventSubmit: true,
    submitError: function($form, event, errors) {
        // Here I do nothing, but you could do something like display 
        // the error messages to the user, log, etc.
    },
    submitSuccess: function($form, event) {
        event.preventDefault();
           

        $.ajax({
        url: base_url+'Screenbrand_controller/savescreenBrand',
        data: new FormData($('#addscreenbrandform')[0]),
        processData: false,
        contentType: false,
        type: 'POST',
          success: function(data){
            // /alert(data);
                insert();
                setTimeout(function(){ window.location.href = base_url+"Screenbrand_controller"; }, 3500);
              
              }
        });
    },
    filter: function() {
        return $(this).is(":visible");
    }
});




$("#editscreenbrandform").find(".customvalidation").jqBootstrapValidation(
{
    preventSubmit: true,
    submitError: function($form, event, errors) {
        // Here I do nothing, but you could do something like display 
        // the error messages to the user, log, etc.
    },
    submitSuccess: function($form, event) {
       
        event.preventDefault();

            $.ajax({
            url: base_url+'Screenbrand_controller/editsavescreenBrand',
            data: new FormData($('#editscreenbrandform')[0]),
            processData: false,
            contentType: false,
            type: 'POST',
              success: function(data){
                 update();
                 setTimeout(function(){ window.location.href = base_url+"Screenbrand_controller"; }, 3500);
              
              }
            });
    },
    filter: function() {
        return $(this).is(":visible");
    }
});

$("#addGreyPurchaseOrderform").find(".customvalidation").jqBootstrapValidation(
{
    preventSubmit: true,
    submitError: function($form, event, errors) {
        // Here I do nothing, but you could do something like display 
        // the error messages to the user, log, etc.
    },
    submitSuccess: function($form, event) {
       
        event.preventDefault();

        $.ajax({
        url: base_url+'Transaction_controller/saveGreyPurchaseOrder',
        data: new FormData($('#addGreyPurchaseOrderform')[0]),
        processData: false,
        contentType: false,
        type: 'POST',
          success: function(data){
                insert();
                setTimeout(function(){ window.location.href = base_url+"Transaction_controller/GreyPurchaseOrder"; }, 3500);
              
              }
        });
    },
    filter: function() {
        return $(this).is(":visible");
    }
});
$("#edigrayPurchaseOrderform").find(".customvalidation").jqBootstrapValidation(
{
    preventSubmit: true,
    submitError: function($form, event, errors) {
    },
    submitSuccess: function($form, event) {
       
        event.preventDefault();

            $.ajax({
            url: base_url+'Transaction_controller/editgraypurchase',
            data: new FormData($('#edigrayPurchaseOrderform')[0]),
            processData: false,
            contentType: false,
            type: 'POST',
              success: function(data){
                //alert(data);
                     update();
                     setTimeout(function(){ window.location.href = base_url+"GreyPurchaseOrder"; }, 3500);
                  }
            });
    },
    filter: function() {
        return $(this).is(":visible");
    }
});

$("#stationform").find(".customvalidation").jqBootstrapValidation(
{
    preventSubmit: true,
    submitError: function($form, event, errors) {
        // Here I do nothing, but you could do something like display 
        // the error messages to the user, log, etc.
    },
    submitSuccess: function($form, event) {
        //alert();
       
        event.preventDefault();

            $.ajax({
            url: base_url+'Station_controller/savestation',
            data: new FormData($('#stationform')[0]),
            processData: false,
            contentType: false,
            type: 'POST',
              success: function(data){
                //alert(data);
                    insert();
                    setTimeout(function(){ window.location.href = base_url+"Station_controller"; }, 3500);
                  
                  }
            });
    },
    filter: function() {
        return $(this).is(":visible");
    }
}
);


$("#editstationform").find(".customvalidation").jqBootstrapValidation(
{
    preventSubmit: true,
    submitError: function($form, event, errors) {
        // Here I do nothing, but you could do something like display 
        // the error messages to the user, log, etc.
    },
    submitSuccess: function($form, event) {
       
        event.preventDefault();

            $.ajax({
            url: base_url+'Station_controller/editsavestation',
            data: new FormData($('#editstationform')[0]),
            processData: false,
            contentType: false,
            type: 'POST',
              success: function(data){
                 update();
                 setTimeout(function(){ window.location.href = base_url+"Station_controller"; }, 3500);
              
              }
            });
    },
    filter: function() {
        return $(this).is(":visible");
    }
});


$("#addGreyPurchaseOrderbillform").find(".customvalidation").jqBootstrapValidation(
{
    preventSubmit: true,
    submitError: function($form, event, errors) {
        // Here I do nothing, but you could do something like display 
        // the error messages to the user, log, etc.
    },
    submitSuccess: function($form, event) {
        //alert();
       
        event.preventDefault();

            $.ajax({
            url: base_url+'Transaction_controller/savePurchaseOrderBill',
            data: new FormData($('#addGreyPurchaseOrderbillform')[0]),
            processData: false,
            contentType: false,
            type: 'POST',
              success: function(data){
                //alert(data);
                    insert();
                    setTimeout(function(){ window.location.href = base_url+"Transaction_controller/GreyPurchaseOrderBill"; }, 3500);
                  
                  }
            });
    },
    filter: function() {
        return $(this).is(":visible");
    }
}
);

$("#editPurchaseOBillform").find(".customvalidation").jqBootstrapValidation(
{
    preventSubmit: true,
    submitError: function($form, event, errors) {
        // Here I do nothing, but you could do something like display 
        // the error messages to the user, log, etc.
    },
    submitSuccess: function($form, event) {
       
        event.preventDefault();

            $.ajax({
            url: base_url+'Transaction_controller/editsavePurchaOBill',
            data: new FormData($('#editPurchaseOBillform')[0]),
            processData: false,
            contentType: false,
            type: 'POST',
              success: function(data){
                 update();
                 setTimeout(function(){ window.location.href = base_url+"Transaction_controller/GreyPurchaseOrderBill"; }, 3500);
              
              }
            });
    },
    filter: function() {
        return $(this).is(":visible");
    }
});
/* Sale Order Bill Urvashi Start*/

$("#addSaleOrderbillform").find(".customvalidation").jqBootstrapValidation(
{
    preventSubmit: true,
    submitError: function($form, event, errors) {
        // Here I do nothing, but you could do something like display 
        // the error messages to the user, log, etc.
    },
    submitSuccess: function($form, event) {
       
        event.preventDefault();

            $.ajax({
            url: base_url+'Transaction_controller/SaveSaleOrderBill',
            data: new FormData($('#addSaleOrderbillform')[0]),
            processData: false,
            contentType: false,
            type: 'POST',
              success: function(data){
                     insert();
                     setTimeout(function(){ window.location.href = base_url+"SalesOrderBill"; }, 3500);
                  
                  }
            });
    },
    filter: function() {
        return $(this).is(":visible");
    }
});
/* Sale Order Bill Urvashi End*/
/* Code By Urvashi End */
function update()
{
	$.toast({
        heading: 'Success'
        , text: 'your data edit successfully.'
        , position: 'top-right'
        , loaderBg: '#ff6849'
        , icon: 'success'
        , hideAfter: 3500
        , stack: 6
    })
}

function insert()
{
	$.toast({
        heading: 'Success'
        , text: 'your data save successfully.'
        , position: 'top-right'
        , loaderBg: '#ff6849'
        , icon: 'success'
        , hideAfter: 3500
        , stack: 6
    })
}


$("#editcompanyform").find(".customvalidation").jqBootstrapValidation(
{
    preventSubmit: true,
    submitError: function($form, event, errors) {
        // Here I do nothing, but you could do something like display 
        // the error messages to the user, log, etc.
    },
    submitSuccess: function($form, event) {
       
        event.preventDefault();

            $.ajax({
		 	url: base_url+'Company_controller/editsavecomapny',
			data: new FormData($('#editcompanyform')[0]),
			processData: false,
			contentType: false,
			type: 'POST',
			  success: function(data){
			  	 update();
			  	 setTimeout(function(){ window.location.href = base_url+"Company_controller"; }, 3500);
			  
			  }
			});
    },
    filter: function() {
        return $(this).is(":visible");
    }
});

$("#editcategoryform").find(".customvalidation").jqBootstrapValidation(
{
    preventSubmit: true,
    submitError: function($form, event, errors) {
        // Here I do nothing, but you could do something like display 
        // the error messages to the user, log, etc.
    },
    submitSuccess: function($form, event) {
       
        event.preventDefault();

            $.ajax({
		 	url: base_url+'Category_controller/savecategory',
			data: new FormData($('#editcategoryform')[0]),
			processData: false,
			contentType: false,
			type: 'POST',
			  success: function(data){
			  	 update();
			  	 setTimeout(function(){ window.location.href = base_url+"Category_controller"; }, 3500);
			  
			  }
			});
    },
    filter: function() {
        return $(this).is(":visible");
    }
});

$("#editscreenform").find(".customvalidation").jqBootstrapValidation(
{
    preventSubmit: true,
    submitError: function($form, event, errors) {
        // Here I do nothing, but you could do something like display 
        // the error messages to the user, log, etc.
    },
    submitSuccess: function($form, event) {
       
        event.preventDefault();

            $.ajax({
		 	url: base_url+'Screenregister_controller/editscreensave',
			data: new FormData($('#editscreenform')[0]),
			processData: false,
			contentType: false,
			type: 'POST',
			  success: function(data){
			  	 update();
			  	 setTimeout(function(){ window.location.href = base_url+"Screenregister_controller"; }, 3500);
			  
			  }
			});
    },
    filter: function() {
        return $(this).is(":visible");
    }
});

$("#screenregisterform").find(".customvalidation").jqBootstrapValidation(
{
    preventSubmit: true,
    submitError: function($form, event, errors) {
        // Here I do nothing, but you could do something like display 
        // the error messages to the user, log, etc.
    },
    submitSuccess: function($form, event) {
       
        event.preventDefault();

            $.ajax({
		 	url: base_url+'Screenregister_controller/savescreen',
			data: new FormData($('#screenregisterform')[0]),
			processData: false,
			contentType: false,
			type: 'POST',
			  success: function(data){
				  	 $.toast({
			            heading: 'Success'
			            , text: 'your data add successfully.'
			            , position: 'top-right'
			            , loaderBg: '#ff6849'
			            , icon: 'success'
			            , hideAfter: 3500
			            , stack: 6
			        })
				  	 setTimeout(function(){ window.location.href = base_url+"Screenregister_controller"; }, 3500);
				  
				  }
			});
    },
    filter: function() {
        return $(this).is(":visible");
    }
});


$("#additemtypeform").find(".customvalidation").jqBootstrapValidation(
{
    preventSubmit: true,
    submitError: function($form, event, errors) {
        // Here I do nothing, but you could do something like display 
        // the error messages to the user, log, etc.
    },
    submitSuccess: function($form, event) {
       
        event.preventDefault();

            $.ajax({
		 	url: base_url+'Itemtype_controller/saveitemtype',
			data: new FormData($('#additemtypeform')[0]),
			processData: false,
			contentType: false,
			type: 'POST',
			  success: function(data){
				  	 insert();
				  	 setTimeout(function(){ window.location.href = base_url+"Itemtype_controller"; }, 3500);
				  
				  }
			});
    },
    filter: function() {
        return $(this).is(":visible");
    }
});

$("#addmilldesform").find(".customvalidation").jqBootstrapValidation(
{
    preventSubmit: true,
    submitError: function($form, event, errors) {
        // Here I do nothing, but you could do something like display 
        // the error messages to the user, log, etc.
    },
    submitSuccess: function($form, event) {
       
        event.preventDefault();

            $.ajax({
            url: base_url+'Mill_controller/savemilldes',
            data: new FormData($('#addmilldesform')[0]),
            processData: false,
            contentType: false,
            type: 'POST',
              success: function(data){
                     insert();
                     setTimeout(function(){ window.location.href = base_url+"Mill_controller"; }, 3500);
                  
                  }
            });
    },
    filter: function() {
        return $(this).is(":visible");
    }
});

$("#editmilldesform").find(".customvalidation").jqBootstrapValidation(
{
    preventSubmit: true,
    submitError: function($form, event, errors) {
        // Here I do nothing, but you could do something like display 
        // the error messages to the user, log, etc.
    },
    submitSuccess: function($form, event) {
       
        event.preventDefault();

            $.ajax({
            url: base_url+'Mill_controller/editsavemilldes',
            data: new FormData($('#editmilldesform')[0]),
            processData: false,
            contentType: false,
            type: 'POST',
              success: function(data){
                     update();
                     setTimeout(function(){ window.location.href = base_url+"Mill_controller"; }, 3500);
                  
                  }
            });
    },
    filter: function() {
        return $(this).is(":visible");
    }
});

$("#additemdetailform").find(".customvalidation").jqBootstrapValidation(
{
    preventSubmit: true,
    submitError: function($form, event, errors) {
        // Here I do nothing, but you could do something like display 
        // the error messages to the user, log, etc.
    },
    submitSuccess: function($form, event) {
       
        event.preventDefault();

            $.ajax({
		 	url: base_url+'Itemdetail_controller/additemdetail',
			data: new FormData($('#additemdetailform')[0]),
			processData: false,
			contentType: false,
			type: 'POST',
			  success: function(data){
				  	 insert();
				  	 setTimeout(function(){ window.location.href = base_url+"Itemdetail_controller"; }, 3500);
				  
				  }
			});
    },
    filter: function() {
        return $(this).is(":visible");
    }
});

$("#edititemdetailform").find(".customvalidation").jqBootstrapValidation(
{
    preventSubmit: true,
    submitError: function($form, event, errors) {
        // Here I do nothing, but you could do something like display 
        // the error messages to the user, log, etc.
    },
    submitSuccess: function($form, event) {
       
        event.preventDefault();

            $.ajax({
		 	url: base_url+'Itemdetail_controller/additemdetail',
			data: new FormData($('#edititemdetailform')[0]),
			processData: false,
			contentType: false,
			type: 'POST',
			  success: function(data){
				  	 update();
				  	 setTimeout(function(){ window.location.href = base_url+"Itemdetail_controller"; }, 3500);
				  
				  }
			});
    },
    filter: function() {
        return $(this).is(":visible");
    }
});


$("#edititemtypeform").find(".customvalidation").jqBootstrapValidation(
{

    preventSubmit: true,
    submitError: function($form, event, errors) {
        // Here I do nothing, but you could do something like display 
        // the error messages to the user, log, etc.
    },
    submitSuccess: function($form, event) {
       
        event.preventDefault();

            $.ajax({
		 	url: base_url+'Itemtype_controller/saveitemtype',
			data: new FormData($('#edititemtypeform')[0]),
			processData: false,
			contentType: false,
			type: 'POST',
			  success: function(data){
				  	 insert();
				  	 setTimeout(function(){ window.location.href = base_url+"Itemtype_controller"; }, 3500);
				  
				  }
			});
    },
    filter: function() {
        return $(this).is(":visible");
    }
});

$("#addpackageform").find(".customvalidation").jqBootstrapValidation(
{
    preventSubmit: true,
    submitError: function($form, event, errors) {
        // Here I do nothing, but you could do something like display 
        // the error messages to the user, log, etc.
    },
    submitSuccess: function($form, event) {
       
        event.preventDefault();

            $.ajax({
		 	url: base_url+'Packagestyle_controller/savepackage',
			data: new FormData($('#addpackageform')[0]),
			processData: false,
			contentType: false,
			type: 'POST',
			  success: function(data){
				  	 insert();
				  	 setTimeout(function(){ window.location.href = base_url+"Packagestyle_controller"; }, 3500);
				  
				  }
			});
    },
    filter: function() {
        return $(this).is(":visible");
    }
});

$("#addhasteform").find(".customvalidation").jqBootstrapValidation(
{
    preventSubmit: true,
    submitError: function($form, event, errors) {
        // Here I do nothing, but you could do something like display 
        // the error messages to the user, log, etc.
    },
    submitSuccess: function($form, event) {
       
        event.preventDefault();

        $.ajax({
	 	url: base_url+'Hastelist_controller/savehaste',
		data: new FormData($('#addhasteform')[0]),
		processData: false,
		contentType: false,
		type: 'POST',
		  success: function(data){
			  	insert();
			  	setTimeout(function(){ window.location.href = base_url+"Hastelist_controller"; }, 3500);
			  
			  }
		});
    },
    filter: function() {
        return $(this).is(":visible");
    }
});
$("#addaccountform").find(".customvalidation").jqBootstrapValidation(
{
    preventSubmit: true,
    submitError: function($form, event, errors) {
        // Here I do nothing, but you could do something like display 
        // the error messages to the user, log, etc.
    },
    submitSuccess: function($form, event) {
       
        event.preventDefault();

        $.ajax({
	 	url: base_url+'Accounttype_controller/saveaccount',
		data: new FormData($('#addaccountform')[0]),
		processData: false,
		contentType: false,
		type: 'POST',
		  success: function(data){
			  	insert();
			  	setTimeout(function(){ window.location.href = base_url+"Accounttype_controller"; }, 3500);
			  
			  }
		});
    },
    filter: function() {
        return $(this).is(":visible");
    }
});

$("#addSalesOrderform").find(".customvalidation").jqBootstrapValidation(
{
    preventSubmit: true,
    submitError: function($form, event, errors) {
        // Here I do nothing, but you could do something like display 
        // the error messages to the user, log, etc.
    },
    submitSuccess: function($form, event) {
       
        event.preventDefault();

        $.ajax({
        url: base_url+'Transaction_controller/saveSalesOrder',
        data: new FormData($('#addSalesOrderform')[0]),
        processData: false,
        contentType: false,
        type: 'POST',
          success: function(data){
                insert();
                setTimeout(function(){ window.location.href = base_url+"SalesOrder"; }, 3500);
              
              }
        });
    },
    filter: function() {
        return $(this).is(":visible");
    }
});
$("#editSaleOrderform").find(".customvalidation").jqBootstrapValidation(
{
    preventSubmit: true,
    submitError: function($form, event, errors) {
        // Here I do nothing, but you could do something like display 
        // the error messages to the user, log, etc.
    },
    submitSuccess: function($form, event) {
       
        event.preventDefault();

        $.ajax({
        url: base_url+'Transaction_controller/editsaveSaleOrder',
        data: new FormData($('#editSaleOrderform')[0]),
        processData: false,
        contentType: false,
        type: 'POST',
          success: function(data){
                update();
                setTimeout(function(){ window.location.href = base_url+"SalesOrder"; }, 3500);
              
              }
        });
    },
    filter: function() {
        return $(this).is(":visible");
    }
});

$("#editaccountform").find(".customvalidation").jqBootstrapValidation(
{
    preventSubmit: true,
    submitError: function($form, event, errors) {
        // Here I do nothing, but you could do something like display 
        // the error messages to the user, log, etc.
    },
    submitSuccess: function($form, event) {
       
        event.preventDefault();

        $.ajax({
	 	url: base_url+'Accounttype_controller/saveaccount',
		data: new FormData($('#editaccountform')[0]),
		processData: false,
		contentType: false,
		type: 'POST',
		  success: function(data){
			  	update();
			  	setTimeout(function(){ window.location.href = base_url+"Accounttype_controller"; }, 3500);
			  
			  }
		});
    },
    filter: function() {
        return $(this).is(":visible");
    }
});

$("#edithasteform").find(".customvalidation").jqBootstrapValidation(
{
    preventSubmit: true,
    submitError: function($form, event, errors) {
        // Here I do nothing, but you could do something like display 
        // the error messages to the user, log, etc.
    },
    submitSuccess: function($form, event) {
       
        event.preventDefault();

        $.ajax({
	 	url: base_url+'Hastelist_controller/savehaste',
		data: new FormData($('#edithasteform')[0]),
		processData: false,
		contentType: false,
		type: 'POST',
		  success: function(data){
			  	update();
			  	setTimeout(function(){ window.location.href = base_url+"Hastelist_controller"; }, 3500);
			  
			  }
		});
    },
    filter: function() {
        return $(this).is(":visible");
    }
});

$("#editpackageform").find(".customvalidation").jqBootstrapValidation(
{

    preventSubmit: true,
    submitError: function($form, event, errors) {
        // Here I do nothing, but you could do something like display 
        // the error messages to the user, log, etc.
    },
    submitSuccess: function($form, event) {
       
        event.preventDefault();

            $.ajax({
		 	url: base_url+'Packagestyle_controller/savepackage',
			data: new FormData($('#editpackageform')[0]),
			processData: false,
			contentType: false,
			type: 'POST',
			  success: function(data){
				  	 insert();
				  	 setTimeout(function(){ window.location.href = base_url+"Packagestyle_controller"; }, 3500);
				  
				  }
			});
    },
    filter: function() {
        return $(this).is(":visible");
    }
});

/* Code By Urvashi Start*/

$("#addledgerformmd2").find(".customvalidation").jqBootstrapValidation(
{

    preventSubmit: true,
    submitError: function($form, event, errors) {
        // Here I do nothing, but you could do something like display 
        // the error messages to the user, log, etc.
    },
    submitSuccess: function($form, event) {
       
        event.preventDefault();

            $.ajax({
            url: base_url+'Ledger_controller/saveledgermdl',
            data: new FormData($('#addledgerformmd2')[0]),
            processData: false,
            contentType: false,
            type: 'POST',
              success: function(data){
                     $("#PartyID").html(data);
                  $(".mdlclose").click();
                  
                  }
            });
    },
    filter: function() {
        return $(this).is(":visible");
    }
});
$("#addBrokerForm1").find(".customvalidation").jqBootstrapValidation(
{

    preventSubmit: true,
    submitError: function($form, event, errors) {
        // Here I do nothing, but you could do something like display 
        // the error messages to the user, log, etc.
    },
    submitSuccess: function($form, event) {
       
        event.preventDefault();

            $.ajax({
            url: base_url+'Ledger_controller/SaveBroketData',
            data: new FormData($('#addBrokerForm1')[0]),
            processData: false,
            contentType: false,
            type: 'POST',
              success: function(data){
                     $("#BrokerID").html(data);
                  $(".mdlcloseBroker").click();
                  $('#addBrokerForm1').reset();
                  }
            });
    },
    filter: function() {
        return $(this).is(":visible");
    }
});
$("#addBrokerForm12").find(".customvalidation").jqBootstrapValidation(
{

    preventSubmit: true,
    submitError: function($form, event, errors) {
        // Here I do nothing, but you could do something like display 
        // the error messages to the user, log, etc.
    },
    submitSuccess: function($form, event) {
       //alert();
        event.preventDefault();

            $.ajax({
            url: base_url+'Ledger_controller/SaveBroketData',
            data: new FormData($('#addBrokerForm12')[0]),
            processData: false,
            contentType: false,
            type: 'POST',
              success: function(data){
                     $("#Broker").html(data);
                  $(".mdlcloseBroker1").click();
                  $('#addBrokerForm12').reset();
                  }
            });
    },
    filter: function() {
        return $(this).is(":visible");
    }
});

$("#ModalQualityForm").find(".customvalidation").jqBootstrapValidation(
{

    preventSubmit: true,
    submitError: function($form, event, errors) {
        // Here I do nothing, but you could do something like display 
        // the error messages to the user, log, etc.
    },
    submitSuccess: function($form, event) {
       //alert();
        event.preventDefault();

            $.ajax({
            url: base_url+'Grey_Quality/saveQualityData',
            data: new FormData($('#ModalQualityForm')[0]),
            processData: false,
            contentType: false,
            type: 'POST',
              success: function(data){
                     $("#Quality").html(data);
                  $(".mdlcloseQuality").click();
                  $('#ModalQualityForm').reset();
                  }
            });
    },
    filter: function() {
        return $(this).is(":visible");
    }
});

$("#addremarkModal").find(".customvalidation").jqBootstrapValidation(
{

    preventSubmit: true,
    submitError: function($form, event, errors) {
        // Here I do nothing, but you could do something like display 
        // the error messages to the user, log, etc.
    },
    submitSuccess: function($form, event) {
       //alert();
        event.preventDefault();

            $.ajax({
            url: base_url+'Remark_controller/saveRemarkData',
            data: new FormData($('#addremarkModal')[0]),
            processData: false,
            contentType: false,
            type: 'POST',
              success: function(data){
                     $("#remarkData").html(data);
                  $(".mdlcloseRemark").click();
                  $('#addremarkModal').reset();
                  }
            });
    },
    filter: function() {
        return $(this).is(":visible");
    }
});

$("#addCheckerForm12").find(".customvalidation").jqBootstrapValidation(
{

    preventSubmit: true,
    submitError: function($form, event, errors) {
        // Here I do nothing, but you could do something like display 
        // the error messages to the user, log, etc.
    },
    submitSuccess: function($form, event) {
       //alert();
        event.preventDefault();

            $.ajax({
            url: base_url+'Ledger_controller/saveCheckerData',
            data: new FormData($('#addCheckerForm12')[0]),
            processData: false,
            contentType: false,
            type: 'POST',
              success: function(data){
                     $("#remark").html(data);
                  $(".mdlcloseRemark").click();
                  $('#addCheckerForm12').reset();
                  }
            });
    },
    filter: function() {
        return $(this).is(":visible");
    }
});
$("#addHasteForm1").find(".customvalidation").jqBootstrapValidation(
{

    preventSubmit: true,
    submitError: function($form, event, errors) {
        // Here I do nothing, but you could do something like display 
        // the error messages to the user, log, etc.
    },
    submitSuccess: function($form, event) {
       
        event.preventDefault();

            $.ajax({
            url: base_url+'Hastelist_controller/saveHasteForm1',
            data: new FormData($('#addHasteForm1')[0]),
            processData: false,
            contentType: false,
            type: 'POST',
              success: function(data){
                     $("#HasteID").html(data);
                  $(".mdlcloseHaste").click();
                  
                  }
            });
    },
    filter: function() {
        return $(this).is(":visible");
    }
});

$("#ModalWeavwerForm").find(".customvalidation").jqBootstrapValidation(
{

    preventSubmit: true,
    submitError: function($form, event, errors) {
        // Here I do nothing, but you could do something like display 
        // the error messages to the user, log, etc.
    },
    submitSuccess: function($form, event) {
       
        event.preventDefault();

            $.ajax({
            url: base_url+'Accountgroup_controller/saveAccountGroup1',
            data: new FormData($('#ModalWeavwerForm')[0]),
            processData: false,
            contentType: false,
            type: 'POST',
              success: function(data){
                     $("#Weaver").html(data);
                  $(".mdlcloseWeaver").click();
                  
                  }
            });
    },
    filter: function() {
        return $(this).is(":visible");
    }
});
/* Sales Order Billing Start*/
$("#EditSaleOrderbillform").find(".customvalidation").jqBootstrapValidation(
{
    preventSubmit: true,
    submitError: function($form, event, errors) {
        // Here I do nothing, but you could do something like display 
        // the error messages to the user, log, etc.
    },
    submitSuccess: function($form, event) {
       
        event.preventDefault();

            $.ajax({
            url: base_url+'Transaction_controller/EditSaleBillOrderData',
            data: new FormData($('#EditSaleOrderbillform')[0]),
            processData: false,
            contentType: false,
            type: 'POST',
              success: function(data){
                     update();
                     setTimeout(function(){ window.location.href = base_url+"SalesOrderBill"; }, 3500);
                  
                  }
            });
    },
    filter: function() {
        return $(this).is(":visible");
    }
});
$("#AddNewCompanyData").find(".customvalidation").jqBootstrapValidation(
{

    preventSubmit: true,
    submitError: function($form, event, errors) {
        // Here I do nothing, but you could do something like display 
        // the error messages to the user, log, etc.
    },
    submitSuccess: function($form, event) {
       
        event.preventDefault();

            $.ajax({
            url: base_url+'Company_controller/SaveCompanyData',
            data: new FormData($('#AddNewCompanyData')[0]),
            processData: false,
            contentType: false,
            type: 'POST',
              success: function(data){
                     $("#CompanyId").html(data);
                  $(".mdlclosecompany").click();
                  
                  }
            });
    },
    filter: function() {
        return $(this).is(":visible");
    }
});
$("#addledgerformmd21").find(".customvalidation").jqBootstrapValidation(
{

    preventSubmit: true,
    submitError: function($form, event, errors) {
        // Here I do nothing, but you could do something like display 
        // the error messages to the user, log, etc.
    },
    submitSuccess: function($form, event) {
       
        event.preventDefault();

            $.ajax({
            url: base_url+'Ledger_controller/saveledgermdl1',
            data: new FormData($('#addledgerformmd21')[0]),
            processData: false,
            contentType: false,
            type: 'POST',
              success: function(data){
                     $("#PartyID").html(data);
                  $(".mdlcloseParty").click();
                  $("#addledgerformmd21").reset();
                  
                  }
            });
    },
    filter: function() {
        return $(this).is(":visible");
    }
});
$("#AddNewTransportData").find(".customvalidation").jqBootstrapValidation(
{

    preventSubmit: true,
    submitError: function($form, event, errors) {
        // Here I do nothing, but you could do something like display 
        // the error messages to the user, log, etc.
    },
    submitSuccess: function($form, event) {
       
        event.preventDefault();

            $.ajax({
            url: base_url+'Transport_controller/SaveTransportData',
            data: new FormData($('#AddNewTransportData')[0]),
            processData: false,
            contentType: false,
            type: 'POST',
              success: function(data){
                     $("#transportID").html(data);
                  $(".mdlcloseTransport").click();
                  
                  }
            });
    },
    filter: function() {
        return $(this).is(":visible");
    }
});

$("#AddNewStationmdl").find(".customvalidation").jqBootstrapValidation(
{

    preventSubmit: true,
    submitError: function($form, event, errors) {
        // Here I do nothing, but you could do something like display 
        // the error messages to the user, log, etc.
    },
    submitSuccess: function($form, event) {
       
        event.preventDefault();

            $.ajax({
            url: base_url+'Station_controller/SaveStationData1',
            data: new FormData($('#AddNewStationmdl')[0]),
            processData: false,
            contentType: false,
            type: 'POST',
              success: function(data){
                //alert(data);
                     $("#StationIDData").html(data);
                  $(".mdlcloseStation").click();
                  
                  }
            });
    },
    filter: function() {
        return $(this).is(":visible");
    }
});


$("#editgreyqutform").find(".customvalidation").jqBootstrapValidation(
{
    preventSubmit: true,
    submitError: function($form, event, errors) {
        // Here I do nothing, but you could do something like display 
        // the error messages to the user, log, etc.
    },
    submitSuccess: function($form, event) {
       
        event.preventDefault();

            $.ajax({
            url: base_url+'Grey_Quality/savegreyqty',
            data: new FormData($('#editgreyqutform')[0]),
            processData: false,
            contentType: false,
            type: 'POST',
              success: function(data){
                     update();
                     setTimeout(function(){ window.location.href = base_url+"Grey_Quality"; }, 3500);
                  
                  }
            });
    },
    filter: function() {
        return $(this).is(":visible");
    }
});


/* Sales Order Billing End*/

/* Code By Urvashi End */
});




function deletetostcl()
{
	$.toast({
	heading: 'Delete'
	, text: 'your data delete successfully.'
	, position: 'top-right'
	, loaderBg: '#ca2527'
	, icon: 'error'
	, hideAfter: 3500
	, stack: 6
	});
}

function deletedata(id,type)
{
	if(confirm("Are you sure want to delete this record?"))
	{
		$.ajax({
			type: "POST",
			url: base_url+"Home_controller/deletedata",
			data: {id:id,type:type},
			success: function(data)
			{
				if(data == 1 && type == "companydelete")
				{
					deletetostcl();
					// $('#example23').DataTable().ajax.reload();
					setTimeout(function(){ window.location.href = base_url+"Company_controller"; }, 3500);
				}
				else if(data == 1 && type == "screendelete")
				{
					deletetostcl();
					// $('#example23').DataTable().ajax.reload();
					setTimeout(function(){ window.location.href = base_url+"Screenregister_controller"; }, 3500);
				}
				else if(data == 1 && type == "categorydelete")
				{
					deletetostcl();
					// $('#example23').DataTable().ajax.reload();
					setTimeout(function(){ window.location.href = base_url+"Category_controller"; }, 3500);
				}
				else if(data == 1 && type == "itemtypedelete")
				{
					deletetostcl();
					// $('#example23').DataTable().ajax.reload();
					setTimeout(function(){ window.location.href = base_url+"Itemtype_controller"; }, 3500);
				}
				else if(data == 1 && type == "packagedelete")
				{
					deletetostcl();
					// $('#example23').DataTable().ajax.reload();
					setTimeout(function(){ window.location.href = base_url+"Packagestyle_controller"; }, 3500);
				}
				else if(data == 1 && type == "hastedelete")
				{
					deletetostcl();
					// $('#example23').DataTable().ajax.reload();
					setTimeout(function(){ window.location.href = base_url+"Hastelist_controller"; }, 3500);
				}
				else if(data == 1 && type == "itemdetaildelete")
				{
					deletetostcl();
					// $('#example23').DataTable().ajax.reload();
					setTimeout(function(){ window.location.href = base_url+"Itemdetail_controller"; }, 3500);
				}
				else if(data == 1 && type == "greyqtydelete")
				{
					deletetostcl();
					// $('#example23').DataTable().ajax.reload();
					setTimeout(function(){ window.location.href = base_url+"Grey_Quality"; }, 3500);
				}
				else if(data == 1 && type == "remarkdelete")
				{
					deletetostcl();
					// $('#example23').DataTable().ajax.reload();
					setTimeout(function(){ window.location.href = base_url+"Remark_controller"; }, 3500);
				}
                else if(data == 1 && type == "accountgrpdelete")
                {
                    deletetostcl();
                    // $('#example23').DataTable().ajax.reload();
                    setTimeout(function(){ window.location.href = base_url+"Accountgroup_controller"; }, 3500);
                }
                else if(data == 1 && type == "ledgerdelete")
                {
                    deletetostcl();
                    // $('#example23').DataTable().ajax.reload();
                    setTimeout(function(){ window.location.href = base_url+"Ledger_controller"; }, 3500);
                }
                else if(data == 1 && type == "milldesdelete")
                {
                    deletetostcl();
                    // $('#example23').DataTable().ajax.reload();
                    setTimeout(function(){ window.location.href = base_url+"Mill_controller"; }, 3500);
                }
                else if(data == 1 && type == "SaleOrderdelete")
                {
                    deletetostcl();
                    // $('#example23').DataTable().ajax.reload();
                    setTimeout(function(){ window.location.href = base_url+"SalesOrder"; }, 3500);
                }
                else if(data == 1 && type == "SaleOrderBilldelete")
                {
                    deletetostcl();
                    // $('#example23').DataTable().ajax.reload();
                    setTimeout(function(){ window.location.href = base_url+"SalesOrderBill"; }, 3500);
                }
			}
		
		});
	}
}

function transfortcon(val)
{
	var transportid = val.value;
	$.ajax({
		url: base_url+'Hastelist_controller/transportaddress',
		data: {transportid:transportid},
		type: 'POST',
		success: function(data)
	  	{
		 	$("#station").val(data);
		}
	});
}


function getData(){
    $.ajax({
        url: base_url+'Transaction_controller/GetAJaxWeaver', //call storeemdata.php to store form data
        success: function(data) {
            $('#Weaver').html(data);
        }
    });
}


$("#loginform").on('submit',function(e){
    e.preventDefault();

    var CompanyName = $('#CompanyName').val();
    var Code = $('#Code').val();

    if(CompanyName == "" || Code == "" )
    {
        $("#fieldrequeired").show();
        $("#fieldrequeired").fadeIn('slow').delay(1500).fadeOut('slow');
    }
    else
    {
        $.ajax({
        type: "POST",
        url: base_url+"Login_controller/lgnfrm",
        data: new FormData(this),
        contentType: false,
        processData: false,
        success: function(data) 
        {
            
            if(data == 1)
            {
                $("#loginsucc").show();
                $("#loginsucc").fadeIn('slow').delay(1500).fadeOut('slow');
                setTimeout(function(){
                    window.location.reload();
                }, 1500);
            }  
            else
            {
                $("#loginfail").show();
                $("#loginfail").fadeIn('slow').delay(1500).fadeOut('slow');
            }
        }
    });

    }
});

/*function loadgrandtotal()
{
    var sum=0;
    var prodprice = 0;
    $('.Pcs').each(function() {
        var prodprice = Number($(this).find(".Pcs").val()).toFixed(2);  
        alert(prodprice);
        sum = sum + prodprice;
         $('#GrandTotal1').val(sum);
     });

}*/



/* Add New Row Mill Start*/


 function millchange(sel,count)
{
    var forval = sel.value;
    if(forval == 67)
    {
       $("#despno"+count).val('');
       $(".despno"+count).val('');
    }
    else
    {
        $("#despno"+count).val($("#dubdispetch0").val());
        $(".despno"+count).val($("#dubdispetch0").val());
    }

    // $.ajax({
    //         type:'POST',
    //         url: base_url+'Transaction_controller/getBrokerDetails',
    //         data:'WeaverIDData='+WeaverIDData,
    //         success:function(html){
    //             $('#BrokerIDData').html(html);
    //         }
    //     }); 
    
}

$(document).ready(function(){

    // $('#AddTakaDetailsForm').submit(function(event){
    //         event.preventDefault();
    //       alert();
    // })

    $('#WeaverIDData').on('change',function(){
        var WeaverIDData = $(this).val();
        //alert(WeaverIDData);
        $.ajax({
            type:'POST',
            url: base_url+'Transaction_controller/getBrokerDetails',
            data:'WeaverIDData='+WeaverIDData,
            success:function(html){
                $('#BrokerIDData').html(html);
            }
        }); 
    });
    $('#StateID').on('change',function(){
        var WeaverIDData = $(this).val();
        //alert(WeaverIDData);
        $.ajax({
            type:'POST',
            url: base_url+'Transaction_controller/getBrokerDetails',
            data:'WeaverIDData='+WeaverIDData,
            success:function(html){
                $('#BrokerIDData').html(html);
            }
        }); 
    });
    });


$(document).ready(function () {
    var counter = 1;

    $(".Milladdrow").on("click", function () {
        var newRow = $("<tr>");
        var cols = "";

        cols += '<td style="padding: 0.2rem !important;"><input  placeholder="Pur Sr" type="text" class="form-control" name="MDPureSr' + counter + '" id="MDPureSr' + counter + '"/></td>';
        cols += '<td style="padding: 0.2rem !important;"><input placeholder="Take Sr" type="text" class="form-control" name="MDTakaSr' + counter + '" id="MDTakaSr' + counter + '"/></td>';
        cols += '<td style="padding: 0.2rem !important;"><input placeholder="Mts" type="text" class="form-control" name="MDMts' + counter + '" id="MDMts' + counter + '"/></td>';

        cols += '<td><input type="button" class="ibtnDel btn btn-md btn-danger"  value="Delete"></td>';
        newRow.append(cols);
        $("table.order-Milllist").append(newRow);
        $("#Millcount").val(counter+1);
        var sumdata = $(".Millcount").val();
        $(".Millcount").val(1 + parseInt(sumdata));
        counter++;
    });

    $("table.order-Milllist").on("click", ".ibtnDel", function (event) {
        $(this).closest("tr").remove();       
        counter -= 1
         $("#Millcount").val(counter);
          var subdata = $(".Millcount").val();
        $(".Millcount").val(parseInt(subdata) - 1);
    });
});
/* Add New Row Mill End*/

/* Add New Row SaleOrder Start */
function getItem(packingcount)
{

    $.ajax({
    url: base_url+'Transaction_controller/GetItem',
    data: {},
    type: 'POST',
      success: function(data){
            $("#SaleMainScreen"+packingcount).html(data);
          
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
            $("#SaleScreenName"+packingcount).html(data);
          
          }
    });
}
function getPacking(packingcount)
{
    $.ajax({
    url: base_url+'Transaction_controller/GetPackage',
    data: {},
    type: 'POST',
      success: function(data){
            $("#SalePacking"+packingcount).html(data);
          
          }
    });
}
function getCutData(packingcount)
{
    //var myValue = $(this).val();
    var singleValues = $( "#SaleMainScreen"+packingcount ).val();
    //alert(singleValues);
    $.ajax({
    url: base_url+'Transaction_controller/GetCutData',
    data: {singleValues:singleValues},
    type: 'POST',
      success: function(data){
            var obj = jQuery.parseJSON(data);
            $("#SaleCut"+packingcount).val(obj.ICut);
            $("#SaleRate"+packingcount).val(obj.ISellingRate);
            $("#SaleHsnCode").val(obj.IHsn)+$("#SaleHsnCode").val(obj.IHsn);

          }
    });
}

function savemdl()
{
    // var oridata = new FormData( $( 'form#test' )[ 0 ] );
     $.ajax({
        url: base_url+'Transaction_controller/SaveTakaDetailsData',
        data: new FormData($('#AddTakaDetailsForm')[0]),
        processData: false,
        contentType: false,
        type: 'POST',
          success: function(data){
   
           var TakaCardNo = $("#TakaCardNo").val();
           var count = $("#count").val();

            $("#mts"+count).val($("#Mfgmts").val());
            // $("#rate"+count).focus();
             $(".ratefocus"+count).focus();

            $("#tbodyid").empty();
                $(".mdlcloseTakaDetails").click();
                var TakaCounterData = $("#TakaCounterData").val();
                var forfindhidden = $("#forfindhidden").val();
                var TakaTotalMts = $("#TakaTotalMts").val();
              //$("#taka"+TakaCounterData).val(forfindhidden);
              }
        });
}


var SaleCounter = 1;

    $(".addsalerow").on("click", function () {
        var newRow = $("<tr>");

        var cols = "";

        getItem(SaleCounter);
        getItem1(SaleCounter);
        getPacking(SaleCounter);

        cols += '<td style="padding: 0.2rem !important;"><input  type="text" class="form-control" name="SalePick' + SaleCounter + '" id="SalePick' + SaleCounter + '" placeholder="PICK"/></td>';
        cols += '<td style="padding: 0.2rem !important;"><input  type="text" class="form-control" name="SaleRef' + SaleCounter + '" id="SaleRef' + SaleCounter + '" placeholder="Ref"/></td>';
        cols += '<td style="padding: 0.2rem !important;"><select name="SaleMainScreen' + SaleCounter + '" id="SaleMainScreen' + SaleCounter + '" class="form-control SaleMainScreen" onchange="getCutData('+ SaleCounter +');"></select></td>';
        cols += '<td style="padding: 0.2rem !important;"><select name="SaleScreenName' + SaleCounter + '" id="SaleScreenName' + SaleCounter + '" class="form-control SaleScreenName"></select></td>';
        cols += '<td style="padding: 0.2rem !important;"><select name="SalePacking' + SaleCounter + '" id="SalePacking' + SaleCounter + '" class="form-control SalePacking"></select></td>';

         cols += '<td style="padding: 0.2rem !important;"><select name="SaleUnit' + SaleCounter + '" id="SaleUnit' + SaleCounter + '"  class="form-control">'+
                    '<option value="">-Select-</option>'+
                    '<option value="pcs">Pcs</option>'+
                    '<option value="mts">MTS</option>'+
                    '<option value="kg">KG</option>'+
                    '<option value="suit">Suit</option>'+
                    '<option value="other">Other</option>'+
                '</select></td>';


        cols += '<td style="padding: 0.2rem !important;"><input type="text" class="form-control SalePcs" name="SalePcs' + SaleCounter + '" id="SalePcs' + SaleCounter + '" onkeyup="forcalculation(' + SaleCounter + ');" placeholder="Pcs"/></td>';
        cols += '<td style="padding: 0.2rem !important;"><input type="text" class="form-control" name="SaleCut' + SaleCounter + '" id="SaleCut' + SaleCounter + '" onkeyup="forcalculation(' + SaleCounter + ');" placeholder="Cut"/></td>';
        cols += '<td style="padding: 0.2rem !important;"><input type="text" class="form-control Mts" name="MtsQty' + SaleCounter + '" id="SaleMtsQty' + SaleCounter + '" placeholder="Mts/Qty"/></td>';
        cols += '<td style="padding: 0.2rem !important;"><input type="text" class="form-control" name="SaleRate' + SaleCounter + '" id="SaleRate' + SaleCounter + '" onkeyup="forcalculation(' + SaleCounter + ');" placeholder="Rate"/></td>';
        cols += '<td style="padding: 0.2rem !important;"><input type="text" class="form-control amount" name="SaleAmount' + SaleCounter + '" id="SaleAmount' + SaleCounter + '" onkeyup="forcalculation(' + SaleCounter + ');" placeholder="Amount"/></td>';
        cols += '<td style="padding: 0.2rem !important;"><input type="text" class="form-control" name="SaleListRD' + SaleCounter + '" id="SaleListRD' + SaleCounter + '" placeholder="Rd"/></td>';
        cols += '<td style="padding: 0.2rem !important;"><input type="text" class="form-control" name="SaleListDisc' + SaleCounter + '" id="SaleListDisc' + SaleCounter + '" placeholder="Disc"/></td>';
        cols += '<td style="padding: 0.2rem !important;"><input type="text" class="form-control" name="ManuaalAddLess' + SaleCounter + '" id="ManuaalAddLess' + SaleCounter + '" placeholder="MANUAALAddLess"/></td>';
        cols += '<td style="padding: 0.2rem !important;"><input type="text" class="form-control Cgst" name="SaleListCgst' + SaleCounter + '" id="SaleListCgst' + SaleCounter + '" onkeyup="forcalculation(' + SaleCounter + ');" placeholder="Cgst"/></td>';
        cols += '<td style="padding: 0.2rem !important;"><input type="text" class="form-control SgstData" name="SaleListSgst' + SaleCounter + '" id="SaleListSgst' + SaleCounter + '" onkeyup="forcalculation(' + SaleCounter + ');" placeholder="Sgst"/></td>';
        cols += '<td style="padding: 0.2rem !important;"><input type="text" class="form-control" name="SaleCgstIgstAmt' + SaleCounter + '" id="SaleCgstIgstAmt' + SaleCounter + '" onkeyup="forcalculation(' + SaleCounter + ');" placeholder="CgstSgstAmt"/></td>';
        cols += '<td style="padding: 0.2rem !important;"><input type="text" class="form-control" name="SaleListSgstAmt' + SaleCounter + '" id="SaleListSgstAmt' + SaleCounter + '" placeholder="SgstAmt"/></td>';

        cols += '<td><input type="button" class="ibtnDel btn btn-md btn-danger "  value="Delete"></td>';
        newRow.append(cols);
        $("table.order-list").append(newRow);
        $("#SellOrdercountdata").val(SaleCounter+1);
        var sumdata = $("#SellOrdercountdata").val();

        $("#SellOrdercountdata").val(1 + parseInt(sumdata));
        SaleCounter++;

    });

    var sumdata = $("#SellOrdercountdata").val();
    
    $("table.order-list").on("click", ".ibtnDel", function (event) {
        $(this).closest("tr").remove();       
        SaleCounter -= 1
         $("#SellOrdercountdata").val(SaleCounter);
          var subdata = $(".SellOrdercountdata").val();
        $(".SellOrdercountdata").val(parseInt(subdata) - 1);
    });

    function forcalculation(counter)
    {
        var tot=0;
        $("#SaleMtsQty"+counter).val(($("#SalePcs"+counter).val())*($("#SaleCut"+counter).val()));
        $("#SaleAmount"+counter).val(($("#SalePcs"+counter).val())*($("#SaleRate"+counter).val()));
        $("#SaleCgstIgstAmt"+counter).val((($("#SaleAmount"+counter).val())*($("#SaleListCgst"+counter).val()))/100);
        $("#SaleListSgstAmt"+counter).val((($("#SaleAmount"+counter).val())*($("#SaleListSgst"+counter).val()))/100);
        $("#EwayBillNo1").val($("#SaleEwayBillNo").val());
        $("#SaleCgstAmt").val((($("#SaleGrandTotal13").val())*($("#SaleCgstIgst").val()))/100);
        $("#SaleSgstAmt").val((($("#SaleGrandTotal13").val())*($("#SaleSgst").val()))/100);
        

        $("#TaxableValue").val($("#SaleGrandTotal13").val());

        a=Number(document.getElementById("SaleCgstAmt").value);
        b=Number(document.getElementById("SaleSgstAmt").value);
        c=Number(document.getElementById("SaleGrandTotal13").value);
        d= a + b + c;
        document.getElementById("SaleBillAmt").value= d;

        $("#SaleNetAfterTds").val($("#SaleBillAmt").val());
    }



/* Add New Row SaleOrder End */

$(function() {
   /* Insert Recotd Start*/
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
                url: base_url+'Ledger_controller/saveledgerData',
                data: new FormData($('#addledgerform')[0]),
                processData: false,
                contentType: false,
                type: 'POST',
                  success: function(data){
                    //alert(data);
                         insert();
                         setTimeout(function(){ window.location.href = base_url+"Ledger_controller"; }, 3500);
                      
                      }
                });
        },
        filter: function() {
            return $(this).is(":visible");
        }
    });
   $("#addaccountgrp1form").find(".customvalidation").jqBootstrapValidation(
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
                data: new FormData($('#addaccountgrp1form')[0]),
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
                url: base_url+'Mill_controller/savemill',
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
   $("#addcompanyform").find(".customvalidation").jqBootstrapValidation(
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
                data: new FormData($('#addcompanyform')[0]),
                processData: false,
                contentType: false,
                type: 'POST',
                  success: function(data){
                        insert();
                        setTimeout(function(){ window.location.href = base_url+"Company_controller"; }, 3500);
                      
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
       $('#additemdetailform').submit(function(e){
        e.preventDefault();
        
         var formData = new FormData($("additemdetailform")[0]);                 
        
         $.ajax({
           url: $("additemdetailform").attr('action'),
           type: 'post' ,
           data: formData,
           dataType: 'json',
           contentType : false,
           processData : false,
           success: function(response) {
             if(response.success === true) {

               $('.form-group').removeClass('has-error')
                               .removeClass('has-success');
               $('.text-danger').remove();
               $("additemdetailform")[0].reset();

              if(typeof(response.redirect) !== 'undefined')
              {
                document.location.href = response.redirect;
              }            
             else if(typeof(response.info) !== 'undefined')
              {
                $("#konf").html(response.info);
              }  

             } else {
               $.each(response.messages,function(key, value){
                 var element = $('#' + key);
                 element.closest('div.form-group')
                 .removeClass('has-error')
                 .addClass(value.length > 0 ? 'has-error' : 'has-success')
                 .find('.text-danger')
                 .remove();
                 element.after(value);
               });
             }
           }
        });
    });

   $("#additemdetailformmdl").find(".customvalidation").jqBootstrapValidation(
    {
        preventSubmit: true,
        submitError: function($form, event, errors) {
            // Here I do nothing, but you could do something like display 
            // the error messages to the user, log, etc.
        },
        submitSuccess: function($form, event) {
           
            event.preventDefault();
           
                $.ajax({
                url: base_url+'Itemdetail_controller/additemdetailformmdl',
                data: new FormData($('#additemdetailformmdl')[0]),
                processData: false,
                contentType: false,
                type: 'POST',
                success: function(data)
                {
                    var forcount = $("#forcount").val();

                    $("#itemdetails"+forcount).html(data);
                    $(".close").click();
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
                         setTimeout(function(){ window.location.href = base_url+"Category_controller"; }, 100);
                      
                      }
                });
        },
        filter: function() {
            return $(this).is(":visible");
        }
    });
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
                url: base_url+'GreyQuality_controller/savegreyqty',
                data: new FormData($('#addgreyqutform')[0]),
                processData: false,
                contentType: false,
                type: 'POST',
                  success: function(data){
                         insert();
                         setTimeout(function(){ window.location.href = base_url+"GreyQuality_controller"; }, 3500);
                      
                      }
                });
        },
        filter: function() {
            return $(this).is(":visible");
        }
    });
   $("#addstationform").find(".customvalidation").jqBootstrapValidation(
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
                data: new FormData($('#addstationform')[0]),
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
    });

   

   $("#addUserform").find(".customvalidation").jqBootstrapValidation(
    {
        preventSubmit: true,
        submitError: function($form, event, errors) {
            // Here I do nothing, but you could do something like display 
            // the error messages to the user, log, etc.
        },
        submitSuccess: function($form, event) {
           
            event.preventDefault();

                $.ajax({
                url: base_url+'User_controller/saveUser',
                data: new FormData($('#addUserform')[0]),
                processData: false,
                contentType: false,
                type: 'POST',
                  success: function(data){
                         insert();
                         setTimeout(function(){ window.location.href = base_url+"User_controller"; }, 3500);
                      
                      }
                });
        },
        filter: function() {
            return $(this).is(":visible");
        }
    });
   $("#addStateform").find(".customvalidation").jqBootstrapValidation(
    {
        preventSubmit: true,
        submitError: function($form, event, errors) {
            // Here I do nothing, but you could do something like display 
            // the error messages to the user, log, etc.
        },
        submitSuccess: function($form, event) {
           
            event.preventDefault();

                $.ajax({
                url: base_url+'State_controller/saveState',
                data: new FormData($('#addStateform')[0]),
                processData: false,
                contentType: false,
                type: 'POST',
                  success: function(data){
                         insert();
                         setTimeout(function(){ window.location.href = base_url+"State_controller"; }, 3500);
                      
                      }
                });
        },
        filter: function() {
            return $(this).is(":visible");
        }
    });
    $("#addCityform").find(".customvalidation").jqBootstrapValidation(
    {
        preventSubmit: true,
        submitError: function($form, event, errors) {
            // Here I do nothing, but you could do something like display 
            // the error messages to the user, log, etc.
        },
        submitSuccess: function($form, event) {
           
            event.preventDefault();

                $.ajax({
                url: base_url+'City_controller/saveCity',
                data: new FormData($('#addCityform')[0]),
                processData: false,
                contentType: false,
                type: 'POST',
                  success: function(data){
                         insert();
                         setTimeout(function(){ window.location.href = base_url+"City_controller"; }, 3500);
                      
                      }
                });
        },
        filter: function() {
            return $(this).is(":visible");
        }
    });
    $("#addtransportform").find(".customvalidation").jqBootstrapValidation(
    {
        preventSubmit: true,
        submitError: function($form, event, errors) {
            // Here I do nothing, but you could do something like display 
            // the error messages to the user, log, etc.
        },
        submitSuccess: function($form, event) {
           
            event.preventDefault();

                $.ajax({
                url: base_url+'Transport_controller/saveTransport',
                data: new FormData($('#addtransportform')[0]),
                processData: false,
                contentType: false,
                type: 'POST',
                  success: function(data){
                         insert();
                         setTimeout(function(){ window.location.href = base_url+"Transport_controller"; }, 3500);
                      
                      }
                });
        },
        filter: function() {
            return $(this).is(":visible");
        }
    });
    $("#addgsttypeform").find(".customvalidation").jqBootstrapValidation(
    {
        preventSubmit: true,
        submitError: function($form, event, errors) {
            // Here I do nothing, but you could do something like display 
            // the error messages to the user, log, etc.
        },
        submitSuccess: function($form, event) {
           
            event.preventDefault();

                $.ajax({
                url: base_url+'GstType_controller/saveGstType',
                data: new FormData($('#addgsttypeform')[0]),
                processData: false,
                contentType: false,
                type: 'POST',
                  success: function(data){
                         insert();
                         setTimeout(function(){ window.location.href = base_url+"GstType_controller"; }, 3500);
                      
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
                url: base_url+'Transaction_controller/saveSaleOrder',
                data: new FormData($('#addSalesOrderform')[0]),
                processData: false,
                contentType: false,
                type: 'POST',
                  success: function(data){
                         insert();
                         setTimeout(function(){ window.location.href = base_url+"Transaction_controller"; }, 100);
                      
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
                   setTimeout(function(){ window.location.href = base_url+"GreyPurchaseOrder"; }, 100);
                  
                  }
            });
        },
        filter: function() {
            return $(this).is(":visible");
        }
    });
    /* Insert Recotd End*/
   /* Update Record Start*/
   $("#Editledgerform").find(".customvalidation").jqBootstrapValidation(
    {
        preventSubmit: true,
        submitError: function($form, event, errors) {
            // Here I do nothing, but you could do something like display 
            // the error messages to the user, log, etc.
        },
        submitSuccess: function($form, event) {
           
            event.preventDefault();

                $.ajax({
                url: base_url+'Ledger_controller/saveledgerData',
                data: new FormData($('#Editledgerform')[0]),
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
                    //alert(data);
                         update();
                         setTimeout(function(){ window.location.href = base_url+"Mill_controller"; }, 3500);
                      
                      }
                });
        },
        filter: function() {
            return $(this).is(":visible");
        }
    });
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
   $("#edititemdetailform").find(".customvalidation").jqBootstrapValidation(
    {
        preventSubmit: true,
        submitError: function($form, event, errors) {
            // Here I do nothing, but you could do something like display 
            // the error messages to the user, log, etc.
        },
        submitSuccess: function($form, event) {
           
            event.preventDefault();

            var formData = new FormData($('#edititemdetailform')[0]);
            formData.append('forrowcount', $(".editforrowcount").val());

                $.ajax({
                url: base_url+'Itemdetail_controller/additemdetail',
                data: formData,
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
                         update();
                         setTimeout(function(){ window.location.href = base_url+"Itemtype_controller"; }, 3500);
                      
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
                         update();
                         setTimeout(function(){ window.location.href = base_url+"Packagestyle_controller"; }, 3500);
                      
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
                url: base_url+'GreyQuality_controller/savegreyqty',
                data: new FormData($('#editgreyqutform')[0]),
                processData: false,
                contentType: false,
                type: 'POST',
                  success: function(data){
                         update();
                         setTimeout(function(){ window.location.href = base_url+"GreyQuality_controller"; }, 3500);
                      
                      }
                });
        },
        filter: function() {
            return $(this).is(":visible");
        }
    });
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
                url: base_url+'Station_controller/savestation',
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
   $("#editUserform").find(".customvalidation").jqBootstrapValidation(
    {
        preventSubmit: true,
        submitError: function($form, event, errors) {
            // Here I do nothing, but you could do something like display 
            // the error messages to the user, log, etc.
        },
        submitSuccess: function($form, event) {
           
            event.preventDefault();

                $.ajax({
                url: base_url+'User_controller/saveUser',
                data: new FormData($('#editUserform')[0]),
                processData: false,
                contentType: false,
                type: 'POST',
                  success: function(data){
                     update();
                     setTimeout(function(){ window.location.href = base_url+"User_controller"; }, 3500);
                  
                  }
                });
        },
        filter: function() {
            return $(this).is(":visible");
        }
    });
   $("#editStateform").find(".customvalidation").jqBootstrapValidation(
    {
        preventSubmit: true,
        submitError: function($form, event, errors) {
            // Here I do nothing, but you could do something like display 
            // the error messages to the user, log, etc.
        },
        submitSuccess: function($form, event) {
           
            event.preventDefault();

                $.ajax({
                url: base_url+'State_controller/saveState',
                data: new FormData($('#editStateform')[0]),
                processData: false,
                contentType: false,
                type: 'POST',
                  success: function(data){
                     update();
                     setTimeout(function(){ window.location.href = base_url+"State_controller"; }, 3500);
                  
                  }
                });
        },
        filter: function() {
            return $(this).is(":visible");
        }
    });
   $("#editCityform").find(".customvalidation").jqBootstrapValidation(
    {
        preventSubmit: true,
        submitError: function($form, event, errors) {
            // Here I do nothing, but you could do something like display 
            // the error messages to the user, log, etc.
        },
        submitSuccess: function($form, event) {
           
            event.preventDefault();
           // alert("hi");
                $.ajax({
                url: base_url+'City_controller/saveCity',
                data: new FormData($('#editCityform')[0]),
                processData: false,
                contentType: false,
                type: 'POST',
                  success: function(data){
                     update();
                     setTimeout(function(){ window.location.href = base_url+"City_controller"; }, 3500);
                  
                  }
                });
        },
        filter: function() {
            return $(this).is(":visible");
        }
    });
   $("#edittransportform").find(".customvalidation").jqBootstrapValidation(
    {
        preventSubmit: true,
        submitError: function($form, event, errors) {
            // Here I do nothing, but you could do something like display 
            // the error messages to the user, log, etc.
        },
        submitSuccess: function($form, event) {
           
            event.preventDefault();
                $.ajax({
                url: base_url+'Transport_controller/saveTransport',
                data: new FormData($('#edittransportform')[0]),
                processData: false,
                contentType: false,
                type: 'POST',
                  success: function(data){
                     update();
                     setTimeout(function(){ window.location.href = base_url+"Transport_controller"; }, 3500);
                  
                  }
                });
        },
        filter: function() {
            return $(this).is(":visible");
        }
    });
   $("#editgsttypeform").find(".customvalidation").jqBootstrapValidation(
    {
        preventSubmit: true,
        submitError: function($form, event, errors) {
            // Here I do nothing, but you could do something like display 
            // the error messages to the user, log, etc.
        },
        submitSuccess: function($form, event) {
           
            event.preventDefault();
                $.ajax({
                url: base_url+'GstType_controller/saveGstType',
                data: new FormData($('#editgsttypeform')[0]),
                processData: false,
                contentType: false,
                type: 'POST',
                  success: function(data){
                     update();
                     setTimeout(function(){ window.location.href = base_url+"GstType_controller"; }, 3500);
                  
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
                url: base_url+'Transaction_controller/saveGreyPurchaseOrder',
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
   /* Update Record End*/

   // Start by milan 2/11/19





$("#addgreyqutformmdl").find(".customvalidation").jqBootstrapValidation(
{
    preventSubmit: true,
    submitError: function($form, event, errors) {
        // Here I do nothing, but you could do something like display 
        // the error messages to the user, log, etc.
    },
    submitSuccess: function($form, event) {
       
        event.preventDefault();

            $.ajax({
            url: base_url+'GreyQuality_controller/savegreyqtymdl',
            data: new FormData($('#addgreyqutformmdl')[0]),
            processData: false,
            contentType: false,
            type: 'POST',
              success: function(data){
                    // $("#QualityID").html(data);                 
                    $("#QualityIDData").html(data); 
                   // $("#QualityID").html(data);
                    $(".mdlcloseGrey").click();                 
                  }
            });
    },
    filter: function() {
        return $(this).is(":visible");
    }
});

$("#addledgerformmdl").find(".customvalidation").jqBootstrapValidation(
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
            data: new FormData($('#addledgerformmdl')[0]),
            processData: false,
            contentType: false,
            type: 'POST',
              success: function(data){
                  // $("#BrokerID").html(data);
                  $("#Broker").html(data);
                  $("#BrokerIDData1").html(data);
                 $(".mdlclose").click();
                  }
            });
    },
    filter: function() {
        return $(this).is(":visible");
    }
});

$("#addledgerpartyformmdl").find(".customvalidation").jqBootstrapValidation(
{
    preventSubmit: true,
    submitError: function($form, event, errors) {
        // Here I do nothing, but you could do something like display 
        // the error messages to the user, log, etc.
    },
    submitSuccess: function($form, event) {
       
        event.preventDefault();

            $.ajax({
            url: base_url+'Ledger_controller/saveledgerpartymdl',
            data: new FormData($('#addledgerpartyformmdl')[0]),
            processData: false,
            contentType: false,
            type: 'POST',
              success: function(data){
                  // $("#BrokerID").html(data);
                  $("#PartyAcID").html(data);
                  $(".PartyAcID").html(data);
                  $(".prtsv").html(data);
                 $(".mdlcloseParty").click();
                  }
            });
    },
    filter: function() {
        return $(this).is(":visible");
    }
});

$("#addledgerformmchecker").find(".customvalidation").jqBootstrapValidation(
{
    preventSubmit: true,
    submitError: function($form, event, errors) {
        // Here I do nothing, but you could do something like display 
        // the error messages to the user, log, etc.
    },
    submitSuccess: function($form, event) {
       
        event.preventDefault();

            $.ajax({
            url: base_url+'Ledger_controller/saveledgerchecker',
            data: new FormData($('#addledgerformmchecker')[0]),
            processData: false,
            contentType: false,
            type: 'POST',
              success: function(data){
                  // $("#BrokerID").html(data);
                  $("#CheckerID").html(data);
                 $(".mdlclose").click();
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
       
        event.preventDefault();

            $.ajax({
            url: base_url+'Remark_controller/saveRemarkData',
            data: new FormData($('#addremarkModal')[0]),
            processData: false,
            contentType: false,
            type: 'POST',
              success: function(data){
               //alert(data);
                  $("#remarkdata").html(data);
                  $(".remarkdata").html(data);
                 $(".mdlcloseRemark").click();
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
            url: base_url+'Home_controller/SavemdlAccountGroupData',
            data: new FormData($('#ModalWeavwerForm')[0]),
            processData: false,
            contentType: false,
            type: 'POST',
              success: function(data){
                  $("#WeaverIDData").html(data);
                    $(".mdlcloseWeaver").click();
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
       
         event.preventDefault();

            $.ajax({
            url: base_url+'Transaction_controller/savePurchaseOrderBill',
            data: new FormData($('#addGreyPurchaseOrderbillform')[0]),
            processData: false,
            contentType: false,
            type: 'POST',
              success: function(data){
                    insert();
                    setTimeout(function(){ window.location.href = base_url+"Transaction_controller/GreyPurchaseOrderBill"; }, 3500);
                  }
            });
    },
    filter: function() {
        return $(this).is(":visible");
    }
});

$("#companyform").find(".customvalidation").jqBootstrapValidation(
{
    preventSubmit: true,
    submitError: function($form, event, errors) {
        // Here I do nothing, but you could do something like display 
        // the error messages to the user, log, etc.
    },
    submitSuccess: function($form, event) {

        event.preventDefault();

            $.ajax({
            url: base_url+'Transaction_controller/savecomapny',
            data: new FormData($('#companyform')[0]),
            processData: false,
            contentType: false,
            type: 'POST',
              success: function(data){
                $(".close").click();
                    $("#CompanyIDData").html(data);
                    $("#CompanyId").html(data);
                    $(".forcmp").html(data);
                  }
            });
    },
    filter: function() {
        return $(this).is(":visible");
    }
}
);

$("#addGreyPurchaseOrderformmdl").find(".customvalidation").jqBootstrapValidation(
{
    preventSubmit: true,
    submitError: function($form, event, errors) {
        // Here I do nothing, but you could do something like display 
        // the error messages to the user, log, etc.
    },
    submitSuccess: function($form, event) {
       
        event.preventDefault();

        $.ajax({
        url: base_url+'Transaction_controller/saveGreyPurchaseOrdermdl',
        data: new FormData($('#addGreyPurchaseOrderformmdl')[0]),
        processData: false,
        contentType: false,
        type: 'POST',
          success: function(data){
               $("#GreyPOrderNo").html(data);
               $(".mdlclose").click();            
              }
        });
    },
    filter: function() {
        return $(this).is(":visible");
    }
});


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

$("#addPartyacmdlform").find(".customvalidation").jqBootstrapValidation(
{
    preventSubmit: true,
    submitError: function($form, event, errors) {
        // Here I do nothing, but you could do something like display 
        // the error messages to the user, log, etc.
    },
    submitSuccess: function($form, event) {
       
        event.preventDefault();

            $.ajax({
            url: base_url+'Home_controller/savePartyACmdl',
            data: new FormData($('#addPartyacmdlform')[0]),
            processData: false,
            contentType: false,
            type: 'POST',
              success: function(data){
                  // $("#BrokerID").html(data);
                  $("#PartyID").html(data);
                 $(".mdlclosePartyAC").click();
                  }
            });
    },
    filter: function() {
        return $(this).is(":visible");
    }
});
$("#addHastemdlform").find(".customvalidation").jqBootstrapValidation(
{
    preventSubmit: true,
    submitError: function($form, event, errors) {
        // Here I do nothing, but you could do something like display 
        // the error messages to the user, log, etc.
    },
    submitSuccess: function($form, event) {
       
        event.preventDefault();

            $.ajax({
            url: base_url+'Home_controller/saveHastemdl',
            data: new FormData($('#addHastemdlform')[0]),
            processData: false,
            contentType: false,
            type: 'POST',
              success: function(data){
                  // $("#BrokerID").html(data);
                  $(".HasteSelect").html(data);
                 $(".mdlcloseHaste").click();
                  }
            });
    },
    filter: function() {
        return $(this).is(":visible");
    }
});

//purchase bill entry
function getMillData(packingcount)
{

    $.ajax({
    url: base_url+'Transaction_controller/GetMillData',
    data: {},
    type: 'POST',
      success: function(data){
            $(".millDataset"+packingcount).html(data);
            // $("#millDetails1"+packingcount).html(data);

            $("#rate"+packingcount).val($("#GreyPPurRate").val());
          }
    });
}

    
    var countdata123 = $(".countdata123").val();
    if(countdata123 > 0)
    {
        var counter1 = countdata123;
    }
    else
    {
        var counter1 = 1;
    }
    $(".addrowgreyprbill").on("click", function () {
        var newRow1 = $("<tr>");
        var cols1 = "";
        
        var fct = $('.editgreytbl >tbody >tr').length - 1;

        if($("#greypurchaseorderBillID").val() != "")
        {
            var fortype = 1;
            var cardno = parseInt($(".editcrtno"+fct).val())+1;
        }
        else
        {
            var fortype = 0;
            var cardno = parseInt($("#crdno").val())+parseInt(counter1);
        }
        
        getMillData(counter1);

        var purchasedate = '<?=date("m/d/Y");?>';
        cols1 += '<td style="padding: 0.2rem !important;"><input type="text" name="chr[]" id="chr' + counter1 + '" class="form-control" placeholder="Enter CHR" value="" /></td>';
        cols1 += '<td style="padding: 0.2rem !important;"><input type="hidden" name="" id="dubdispetch'+ counter1 +'" value='+ counter1 +'><input type="text" name="despno[]" id="despno' + counter1 + '" class="form-control" placeholder="Enter Desp No" value=""/></td>';
        cols1 += '<td style="padding: 0.2rem !important;"><select name="mill[]" onchange="millchange(this,'+counter1+');" id="millDetails1' + counter1 + '" class="form-control millData millDataset' + counter1 + '"></select></td>';
        cols1 += '<td style="padding: 0.2rem !important;"><input type="text" name="cardno[]" id="cardno' + counter1 + '" class="form-control CardNoData editcrtno'+ counter1 +'" placeholder="Card No." value="'+cardno+'" /></td>';
        cols1 += '<td style="padding: 0.2rem !important;"><input type="text" name="despdate[]" id="despdate' + counter1 + '" class="form-control datepicker-autoclose" placeholder="Desp Date" value="" /></td>';
       
        cols1 += '<td style="padding: 0.2rem !important;"><input onfocusout ="getcardno('+ counter1 +','+ counter1 +');" type="text" name="mts[]" id="mts' + counter1 + '" class="form-control MTSData" placeholder="MTS" value="" /></td>';
        cols1 += '<td style="padding: 0.2rem !important;"><input type="text" name="rate[]" id="rate' + counter1 + '" class="form-control RateData ratefocus'+ counter1 +'" placeholder="Rate" value="" /></td>';
         cols1 += '<td style="padding: 0.2rem !important;"><input type="text" name="taka[]" id="taka' + counter1 + '" class="form-control rectakatotal" placeholder="Taka"  onfocusout ="getTaka(' + counter1 + ')" value="" /></td>';
        cols1 += '<td style="padding: 0.2rem !important;"><input type="text" name="wtls[]" id="wtls' + counter1 + '" class="form-control" placeholder="WT. LS." value="" /></td>';
        cols1 += '<td style="padding: 0.2rem !important;"><input type="text" name="marka[]" id="marka' + counter1 + '" class="form-control" placeholder="Marka" value="" /></td>';
        cols1 += '<td style="padding: 0.2rem !important;"><input type="text" name="lotno[]" id="lotno' + counter1 + '" class="form-control" placeholder="Lot No." value="" /></td>';
        cols1 += '<td style="padding: 0.2rem !important;"><input type="text" name="remark[]" id="remark' + counter1 + '" class="form-control" placeholder="Remark" value="" /></td>';
        cols1 += '<td style="padding: 0.2rem !important;"><input type="text" name="vehicleno[]" id="vehicleno' + counter1 + '" class="form-control" placeholder="Vehicle No." value="" /></td>';
        cols1 += '<td style="padding: 0.2rem !important;"><input type="text" name="ewaybill[]" id="ewaybill' + counter1 + '" class="form-control" placeholder="Eway Bill" value="" /></td>';
        cols1 += '<td style="padding: 0.2rem !important;"><input type="text" name="process[]" id="process' + counter1 + '" class="form-control" placeholder="Process" value="" /></td>';
        cols1 += '<td style="padding: 0.2rem !important;"><input type="text" name="master[]" id="master' + counter1 + '" class="form-control" placeholder="Master" value="" /></td>';
        // cols1 += '<td style="padding: 0.2rem !important;"><i data-toggle="modal" onclick="getcardno(' + counter1 + ');" data-target="#TakaDetails" class="fa fa-plus-circle"></i></td>';
        cols1 += '<td style="padding: 0.2rem !important;"><input type="button" class="ibtnDel btn btn-md btn-danger" value="Delete"></td>';
        cols1 += '<td style="padding: 0.2rem !important;"><input type="button" onclick="gotoperticulartaka('+ counter1 +');" class="btn btn-md btn-warning"  value="Print"></td>';
       
        newRow1.append(cols1);
        $("table.order-list").append(newRow1);
        $("#countdata").val(counter1+1);
        var sumdata1 = $(".countdata").val();
        $(".countdata").val(1 + parseInt(sumdata1));

            var countdata123 = 1 + parseInt($(".countdata123").val());
            $(".countdata123").val(countdata123);

            jQuery('.datepicker-autoclose').datepicker({
                autoclose: true,
                todayHighlight: true
            });

        counter1++;
    });

    $("table.order-list").on("click", ".ibtnDel", function (event) {
        $(this).closest("tr").remove();       
        counter1 -= 1
         $("#countdata").val(counter1);
          var subdata = $(".countdata").val();
        $(".countdata").val(parseInt(subdata) - 1);
        $(".countdata123").val(($(".countdata123").val() - 1));

    });
   

   $("body").delegate(".greypurbillcalculate", "focusout", function(){
  
   		greyBillCalculation();

    }); 


   function greyBillCalculation() 
   {
   		var gramount = $("#GreyPGrossAmt").val($("#GreyPRecMts").val()*$("#GreyPPurRate").val());
        var GsttypeID = $("#GsttypeID").val();

        if(GsttypeID == 4)
        {
            $("#GreyPCgstAmt").val(((parseInt($("#GreyPGrossAmt").val()) + parseInt($("#GreyPAmt").val()))*$("#GreyPCgstIgst").val())/100);
            $("#GreyPSgstAmt").val(((parseInt($("#GreyPGrossAmt").val()) + parseInt($("#GreyPAmt").val()))*$("#GreyPSgst").val())/100);
            var greybill = (parseInt($("#GreyPGrossAmt").val()))+(parseFloat($("#GreyPCgstAmt").val()))+(parseFloat($("#GreyPSgstAmt").val()))+(parseInt($("#GreyPAmt").val()))
            var greybill1 = Math.round(greybill);
            $("#GreyPBillAmt").val(greybill1);  
            var greynetbill = (parseInt($("#GreyPGrossAmt").val()))+(parseFloat($("#GreyPCgstAmt").val()))+(parseFloat($("#GreyPSgstAmt").val()))+(parseInt($("#GreyPAmt").val()))          
            var greynetbill1 = Math.round(greynetbill);
            $("#GreyPNetAmt").val(greynetbill1);
            $("#GreyPGrossAmt2").val($("#GreyPGrossAmt").val());
            
            if($("#GreyPBillAddLess").val() > 0)
            {
                $("#GreyPGrossAddLess").val((parseInt($("#GreyPGrossAmt").val())*parseInt($("#GreyPBillAddLess").val()))/100);
            }
            $("#GreyPAmt").val(($("#GreyPDisc").val() * $("#GreyPGrossAmt2").val())/100);
            //$("#GreyPTexableValue").val(parseInt($("#GreyPGrossAmt").val()) + parseInt($("#GreyPBillAddLess").val()) + parseInt($("#GreyPAmt").val()));
            $("#GreyPBillAmt2").val(parseInt($("#GreyPGrossAmt").val()) + parseInt($("#GreyPBillAddLess").val()) + parseInt($("#GreyPAmt").val())+ parseInt($("#GreyPGrossAmt").val()));
            
            $("#GreyPTexableValue").val(parseInt($("#GreyPGrossAmt").val()) + parseInt($("#GreyPAmt").val()));
        }
        else
        {
            $("#GreyPIgstAmt").val(((parseInt($("#GreyPGrossAmt").val()) + parseInt($("#GreyPAmt").val()))*$("#GreyPIgstPer").val())/100);
            $("#GreyPBillAmt").val((parseInt($("#GreyPGrossAmt").val()))+(parseInt($("#GreyPIgstAmt").val())));            
            $("#GreyPNetAmt").val(((parseInt($("#GreyPGrossAmt").val()))+(parseInt($("#GreyPIgstAmt").val())))-($("#GreyPBillAddLess").val()));
            $("#GreyPGrossAmt2").val($("#GreyPGrossAmt").val());
            
            if($("#GreyPBillAddLess").val() > 0)
            {
                $("#GreyPGrossAddLess").val(parseInt(($("#GreyPGrossAmt").val())*parseInt($("#GreyPBillAddLess").val()))/100);
            }
            $("#GreyPAmt").val(($("#GreyPDisc").val() * $("#GreyPGrossAmt2").val())/100);
            //$("#GreyPTexableValue").val(parseInt($("#GreyPGrossAmt").val()) + parseInt($("#GreyPBillAddLess").val()) + parseInt($("#GreyPAmt").val()));
            $("#GreyPTexableValue").val(parseInt($("#GreyPGrossAmt").val()) + parseInt($("#GreyPAmt").val()));
            $("#GreyPBillAmt2").val(parseInt($("#GreyPGrossAmt").val()) + parseInt($("#GreyPBillAddLess").val()) + parseInt($("#GreyPAmt").val()));
        }
   }

   $("body").delegate(".greypurbillcalculate1", "focusout", function(){
   
       var gramount = $(".EditGrossAmt1").val($(".EditRecMts1").val()*$(".EditGreyPPurRate").val());
      console.log(((parseInt($(".EditGrossAmt1").val()) - parseInt($(".Amt12").val()))*2.5)/100);

       $(".CgstAmt1").val(((parseInt($(".EditGrossAmt1").val()) + parseInt($(".Amt12").val()))*2.5)/100);
       $(".SgstAmt1").val(((parseInt($(".EditGrossAmt1").val()) + parseInt($(".Amt12").val()))*2.5)/100);
       $(".GstAmt1").val((($(".EditRecMts1").val()*$(".EditGreyPPurRate").val())*2.5)/100);
       $(".SgstAmt").val((($(".EditRecMts1").val()*$(".EditGreyPPurRate").val())*2.5)/100);
       $(".SgstAmt2").val((($(".EditRecMts1").val()*$(".EditGreyPPurRate").val())*2.5)/100);
       
       $(".BillAmt1").val((parseInt($(".EditGrossAmt1").val()))+(parseInt($(".CgstAmt1").val()))+(parseInt($(".SgstAmt1").val())));
       $(".NetAmt").val(((parseInt($(".EditGrossAmt1").val()))+(parseInt($(".CgstAmt1").val()))+(parseInt($(".SgstAmt1").val())))-($(".BillAddLess1").val()));
       $(".GrossAmt21").val($(".EditGrossAmt1").val());
        // $(".Amt").val(($(".Disc").val() * $(".GrossAmt2").val())/100);

        $(".GrossAddLess12").val(parseInt($(".EditGrossAmt1").val())-parseInt($(".BillAddLess1").val()));
        $(".Amt12").val(($(".Disc1").val() * $(".GrossAmt21").val())/100);
        $(".TexableValue12").val(parseInt($(".GrossAmt21").val())+ parseInt($(".Amt12").val()));
        //$(".BillAmt1").val(parseInt($(".EditGrossAmt1").val()) + parseInt($(".BillAddLess1").val()) + parseInt($(".Amt12").val()));

    });

//End by milan 2/11/19
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

/* Modal  Start */
$("#AddAcTypemdl").find(".customvalidation").jqBootstrapValidation(
{

    preventSubmit: true,
    submitError: function($form, event, errors) {
        // Here I do nothing, but you could do something like display 
        // the error messages to the user, log, etc.
    },
    submitSuccess: function($form, event) {
       
        event.preventDefault();

            $.ajax({
            url: base_url+'Home_controller/SavemdlAccountData',
            data: new FormData($('#AddAcTypemdl')[0]),
            processData: false,
            contentType: false,
            type: 'POST',
              success: function(data){
                    $("#AcTypeID1").html(data);
                  $(".mdlcloseAcType").click();
                  
                  }
            });
    },
    filter: function() {
        return $(this).is(":visible");
    }
});
$("#addaccountgrpmdlform").find(".customvalidation").jqBootstrapValidation(
{

    preventSubmit: true,
    submitError: function($form, event, errors) {
        // Here I do nothing, but you could do something like display 
        // the error messages to the user, log, etc.
    },
    submitSuccess: function($form, event) {
       
        event.preventDefault();

            $.ajax({
            url: base_url+'Home_controller/SavemdlAccountGroupData',
            data: new FormData($('#addaccountgrpmdlform')[0]),
            processData: false,
            contentType: false,
            type: 'POST',
              success: function(data){
                    $("#AcGroupIDData").html(data);
                  $(".mdlcloseAcGroupData").click();
                  
                  }
            });
    },
    filter: function() {
        return $(this).is(":visible");
    }
});
$("#AddStationmdl1").find(".customvalidation").jqBootstrapValidation(
{

    preventSubmit: true,
    submitError: function($form, event, errors) {
        // Here I do nothing, but you could do something like display 
        // the error messages to the user, log, etc.
    },
    submitSuccess: function($form, event) {
      // alert("Hiii");
        event.preventDefault();

            $.ajax({
            url: base_url+'Home_controller/SavemdlStationData1',
            data: new FormData($('#AddStationmdl1')[0]),
            processData: false,
            contentType: false,
            type: 'POST',
              success: function(data){
                //alert(data);
                    $("#StationIDData1").html(data);
                  $(".mdlcloseStation1").click();
                  
                  }
            });
    },
    filter: function() {
        return $(this).is(":visible");
    }
});

$("#AddStationmdl").find(".customvalidation").jqBootstrapValidation(
{

    preventSubmit: true,
    submitError: function($form, event, errors) {
        // Here I do nothing, but you could do something like display 
        // the error messages to the user, log, etc.
    },
    submitSuccess: function($form, event) {
      // alert("Hiii");
        event.preventDefault();

            $.ajax({
            url: base_url+'Home_controller/SavemdlStationData',
            data: new FormData($('#AddStationmdl')[0]),
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
$("#AddTransportmdl").find(".customvalidation").jqBootstrapValidation(
{

    preventSubmit: true,
    submitError: function($form, event, errors) {
        // Here I do nothing, but you could do something like display 
        // the error messages to the user, log, etc.
    },
    submitSuccess: function($form, event) {
      // alert("Hiii");
        event.preventDefault();

            $.ajax({
            url: base_url+'Home_controller/SavemdlTransportData',
            data: new FormData($('#AddTransportmdl')[0]),
            processData: false,
            contentType: false,
            type: 'POST',
              success: function(data){
                //alert(data);
                    $("#TransportIDData").html(data);
                    $(".TransportIDData").html(data);
                  $(".mdlcloseTransport").click();
                  
                  }
            });
    },
    filter: function() {
        return $(this).is(":visible");
    }
});
$("#addBrokermdlform").find(".customvalidation").jqBootstrapValidation(
{

    preventSubmit: true,
    submitError: function($form, event, errors) {
        // Here I do nothing, but you could do something like display 
        // the error messages to the user, log, etc.
    },
    submitSuccess: function($form, event) {
      // alert("Hiii");
        event.preventDefault();

            $.ajax({
            url: base_url+'Home_controller/SavemdlBrokerData',
            data: new FormData($('#addBrokermdlform')[0]),
            processData: false,
            contentType: false,
            type: 'POST',
              success: function(data){
                //alert(data);
                    $("#BrokerID1").html(data);
                  $(".mdlcloseBroker1").click();
                  
                  }
            });
    },
    filter: function() {
        return $(this).is(":visible");
    }
});
$("#addItemTypemdlForm").find(".customvalidation").jqBootstrapValidation(
{

    preventSubmit: true,
    submitError: function($form, event, errors) {
        // Here I do nothing, but you could do something like display 
        // the error messages to the user, log, etc.
    },
    submitSuccess: function($form, event) {
      // alert("Hiii");
        event.preventDefault();

            $.ajax({
            url: base_url+'Home_controller/SavemdlItemTypeData',
            data: new FormData($('#addItemTypemdlForm')[0]),
            processData: false,
            contentType: false,
            type: 'POST',
              success: function(data){
                //alert(data);
                    $("#ItemID1").html(data);
                  $(".mdlcloseItemDetail").click();
                  
                  }
            });
    },
    filter: function() {
        return $(this).is(":visible");
    }
});
$("#addScreenBrandForm").find(".customvalidation").jqBootstrapValidation(
{

    preventSubmit: true,
    submitError: function($form, event, errors) {
        // Here I do nothing, but you could do something like display 
        // the error messages to the user, log, etc.
    },
    submitSuccess: function($form, event) {
      // alert("Hiii");
        event.preventDefault();

            $.ajax({
            url: base_url+'Home_controller/SavemdlScreenBrandData',
            data: new FormData($('#addScreenBrandForm')[0]),
            processData: false,
            contentType: false,
            type: 'POST',
              success: function(data){
                //alert(data);
                    $("#SeriesIDData").html(data);
                  $(".mdlcloseScreenBrand").click();
                  
                  }
            });
    },
    filter: function() {
        return $(this).is(":visible");
    }
});
$("#addScreenBrandForm1").find(".customvalidation").jqBootstrapValidation(
{

    preventSubmit: true,
    submitError: function($form, event, errors) {
        // Here I do nothing, but you could do something like display 
        // the error messages to the user, log, etc.
    },
    submitSuccess: function($form, event) {
      // alert("Hiii");
        event.preventDefault();

            $.ajax({
            url: base_url+'Home_controller/SavemdlScreenBrandData',
            data: new FormData($('#addScreenBrandForm1')[0]),
            processData: false,
            contentType: false,
            type: 'POST',
              success: function(data){
                //alert(data);
                    $("#ScreenSeriesID1").html(data);
                  $(".mdlcloseScreenBrand1").click();
                  
                  }
            });
    },
    filter: function() {
        return $(this).is(":visible");
    }
});




// $("#AddTakaDetailsForm").find(".customvalidation").jqBootstrapValidation(
// {

//     preventSubmit: true,
//     submitError: function($form, event, errors) {
//         // Here I do nothing, but you could do something like display 
//         // the error messages to the user, log, etc.
//     },
//     submitSuccess: function($form, event) {
//       // alert("Hiii");
//         event.preventDefault();
//         alert();

//             $.ajax({
//             url: base_url+'Transaction_controller/SaveTakaDetailsData',
//             data: new FormData($('#AddTakaDetailsForm')[0]),
//             processData: false,
//             contentType: false,
//             type: 'POST',
//               success: function(data){
//                 $("#tbodyid").empty();
//                     $(".mdlcloseTakaDetails").click();
//                     var TakaCounterData = $("#TakaCounterData").val();
//                     var forfindhidden = $("#forfindhidden").val();
//                     var TakaTotalMts = $("#TakaTotalMts").val();
//                     $("#mts"+TakaCounterData).val(TakaTotalMts);
//                   $("#taka"+TakaCounterData).val(forfindhidden);
//                   }
//             });
//     },
//     filter: function() {
//         return $(this).is(":visible");
//     }
// });

/* Modal  End */

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

                if(data == 1 && type == "ledgerdelete")
                {
                    deletetostcl();
                    // $('#example23').DataTable().ajax.reload();
                    setTimeout(function(){ window.location.href = base_url+"Ledger_controller"; }, 3500);
                }
                else if(data == 1 && type == "AccountTypedelete")
                {
                    deletetostcl();
                    // $('#example23').DataTable().ajax.reload();
                    setTimeout(function(){ window.location.href = base_url+"Accounttype_controller"; }, 3500);
                }
                else if(data == 1 && type == "milldesdelete")
                {
                    deletetostcl();
                    // $('#example23').DataTable().ajax.reload();
                    setTimeout(function(){ window.location.href = base_url+"Mill_controller"; }, 3500);
                }
                else if(data == 1 && type == "companydelete")
                {
                    deletetostcl();
                    // $('#example23').DataTable().ajax.reload();
                    setTimeout(function(){ window.location.href = base_url+"Company_controller"; }, 3500);
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
                else if(data == 1 && type == "itemtypedelete")
                {
                    deletetostcl();
                    // $('#example23').DataTable().ajax.reload();
                    setTimeout(function(){ window.location.href = base_url+"Itemtype_controller"; }, 3500);
                }
                else if(data == 1 && type == "screenbranddelete")
                {
                    deletetostcl();
                    // $('#example23').DataTable().ajax.reload();
                    setTimeout(function(){ window.location.href = base_url+"Screenbrand_controller"; }, 3500);
                }
                else if(data == 1 && type == "screenregisterdelete")
                {
                    deletetostcl();
                    // $('#example23').DataTable().ajax.reload();
                    setTimeout(function(){ window.location.href = base_url+"Screenregister_controller"; }, 3500);
                }
                else if(data == 1 && type == "remarkdelete")
                {
                    deletetostcl();
                    // $('#example23').DataTable().ajax.reload();
                    setTimeout(function(){ window.location.href = base_url+"Remark_controller"; }, 3500);
                }
                else if(data == 1 && type == "greyqtydelete")
                {
                    deletetostcl();
                    // $('#example23').DataTable().ajax.reload();
                    setTimeout(function(){ window.location.href = base_url+"GreyQuality_controller"; }, 3500);
                }
                else if(data == 1 && type == "stationdelete")
                {
                    deletetostcl();
                    // $('#example23').DataTable().ajax.reload();
                    setTimeout(function(){ window.location.href = base_url+"Station_controller"; }, 3500);
                }
                else if(data == 1 && type == "userdelete")
                {
                    deletetostcl();
                    // $('#example23').DataTable().ajax.reload();
                    setTimeout(function(){ window.location.href = base_url+"User_controller"; }, 3500);
                }
                else if(data == 1 && type == "statedelete")
                {
                    deletetostcl();
                    // $('#example23').DataTable().ajax.reload();
                    setTimeout(function(){ window.location.href = base_url+"State_controller"; }, 3500);
                }
                else if(data == 1 && type == "accountgrpdelete")
                {
                    deletetostcl();
                    // $('#example23').DataTable().ajax.reload();
                    setTimeout(function(){ window.location.href = base_url+"Accountgroup_controller"; }, 3500);
                }
                else if(data == 1 && type == "packagedelete")
                {
                    deletetostcl();
                    // $('#example23').DataTable().ajax.reload();
                    setTimeout(function(){ window.location.href = base_url+"Packagestyle_controller"; }, 3500);
                }
                else if(data == 1 && type == "categorydelete")
                {
                    deletetostcl();
                    // $('#example23').DataTable().ajax.reload();
                    setTimeout(function(){ window.location.href = base_url+"Category_controller"; }, 3500);
                }
                else if(data == 1 && type == "Citydelete")
                {
                    deletetostcl();
                    // $('#example23').DataTable().ajax.reload();
                    setTimeout(function(){ window.location.href = base_url+"City_controller"; }, 3500);
                }
                else if(data == 1 && type == "transportdelete")
                {
                    deletetostcl();
                    // $('#example23').DataTable().ajax.reload();
                    setTimeout(function(){ window.location.href = base_url+"Transport_controller"; }, 3500);
                }
                else if(data == 1 && type == "gsttypedelete")
                {
                    deletetostcl();
                    // $('#example23').DataTable().ajax.reload();
                    setTimeout(function(){ window.location.href = base_url+"GstType_controller"; }, 3500);
                }
                // Start by milan 2/11/19
                else if(data == 1 && type == "PurchaseOrderdelete")
                {
                    deletetostcl();
                    // $('#example23').DataTable().ajax.reload();
                    setTimeout(function(){ window.location.href = base_url+"GreyPurchaseOrder"; }, 3500);
                }

                else if(data == 1 && type == "finishpurchaseorderdelete")
                {
                    deletetostcl();
                    // $('#example23').DataTable().ajax.reload();
                    setTimeout(function(){ window.location.href = base_url+"FinishPurchaseOrder"; }, 3500);
                }
                 else if(data == 1 && type == "PurchaseOrderBilldelete")
                {
                    deletetostcl();
                    // $('#example23').DataTable().ajax.reload();
                    setTimeout(function(){ window.location.href = base_url+"GreyPurchaseOrderBill"; }, 3500);
                }
                // End by milan 2/11/19
                else if(data == 1 && type == "sizenumberdelete")
                {
                    deletetostcl();
                    // $('#example23').DataTable().ajax.reload();
                    setTimeout(function(){ window.location.href = base_url+"Stock/Size_Number_controller"; }, 3500);
                }
                else if(data == 1 && type == "sizecharacterdelete")
                {
                    deletetostcl();
                    // $('#example23').DataTable().ajax.reload();
                    setTimeout(function(){ window.location.href = base_url+"Stock/Size_Character_controller"; }, 3500);
                }
                else if(data == 1 && type == "colordelete")
                {
                    deletetostcl();
                    // $('#example23').DataTable().ajax.reload();
                    setTimeout(function(){ window.location.href = base_url+"Stock/Color_controller"; }, 3500);
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
function getTaka(takaid){
    //alert('hi');
    $.ajax({
        url: base_url+'Transaction_controller/getTaka', //call storeemdata.php to store form data
        success: function(data) {
           
            $("#taka"+takaid).val(data);
        }
    });
}

function setcounterhd(countval)
{
    $("#forcount").val(countval);
    $(".forcount").val(countval);
}



function foroverloadmsg()
{
    // var Voucher_NO = $("#Voucher_NO").val();
    // $.ajax({
    //     url: base_url+'Sales_controller/checkoldorderornot',
    //     data: {Voucher_NO:Voucher_NO},
    //     type: 'POST',
    //       success: function(data){
    //             alert(data);
    //           }
    //     });

    var totaloldpcs = $("#totaloldpcs").val();

    if(totaloldpcs > 0)
    {
        var remainingtotal = $("#remainingtotal").val();
        var sum2 = 0;
        $(".pcsclass").each(function () {
            if (!isNaN(this.value) && this.value.length != 0) {
                sum2 += parseFloat(this.value);
            }
        });

        if(sum2 > remainingtotal)
        {
            $.toast({
            heading: 'Warning'
            , text: 'Only '+remainingtotal+' Pcs are remaining your order not added' 
            , position: 'top-right'
            , loaderBg: '#ca2527'
            , icon: 'error'
            , hideAfter: 4500
            , stack: 6
            });
        }
    }
    
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


$("body").delegate(".serachdata", "focusout", function(){
    var firstname,lastname;
    var name=this.value.split(" ");
    var firstname=name[0];
    var lastname=name[1];
    firstshortname = firstname.charAt(0);
    secondshortname = lastname.charAt(0);

    if(lastname == undefined)
    {
        firstshortname = firstname.charAt(0);
        $(".resultdata").val(firstshortname);
    }
    else
    {
        firstshortname = firstname.charAt(0);
        secondshortname = lastname.charAt(0);
        $(".resultdata").val(firstshortname+''+secondshortname);
    }
    
});

$("body").delegate(".checkerserachdata", "focusout", function(){
    var firstname,lastname;
    var name=this.value.split(" ");
    var firstname=name[0];
    var lastname=name[1];

    if(lastname == undefined)
    {
        firstshortname = firstname.charAt(0);
        $(".checkerresultdata").val(firstshortname);
    }
    else
    {
        firstshortname = firstname.charAt(0);
        secondshortname = lastname.charAt(0);
        $(".checkerresultdata").val(firstshortname+''+secondshortname);
    }
});

$("body").delegate(".weaverserachdata", "focusout", function(){
    var firstname,lastname;
    var name=this.value.split(" ");
    var firstname=name[0];
    var lastname=name[1];

    if(lastname == undefined)
    {
        firstshortname = firstname.charAt(0);
        $(".weaverresultdata").val(firstshortname);
    }
    else
    {
        firstshortname = firstname.charAt(0);
        secondshortname = lastname.charAt(0);
        $(".weaverresultdata").val(firstshortname+''+secondshortname);
    }
});

$("body").delegate(".companyserachdata", "focusout", function(){
    var firstname,lastname;
    var name=this.value.split(" ");
    var firstname=name[0];
    var lastname=name[1];

    if(lastname == undefined)
    {
        firstshortname = firstname.charAt(0);
        $(".companyresultdata").val(firstshortname);
    }
    else
    {
        firstshortname = firstname.charAt(0);
        secondshortname = lastname.charAt(0);
        $(".companyresultdata").val(firstshortname+''+secondshortname);
    }
});


   // start 1/19/19

    // $(".addfinishpurchase").on("click", function () {
		$("body").delegate(".addfinishpurchase", "click", function(){

		var counterfinish =parseInt($("#finishcountdata").val());

    	itemdetails(counterfinish);
        categorydetails(counterfinish);
        getpackinglist(counterfinish);

        var newRow1 = $("<tr>");
        var cols1 = "";

        cols1 += '<td style="padding: 0.2rem !important;"><select onfocusout="getstockdetails('+counterfinish+');" onchange="getitemdata('+counterfinish+');" name="itemdetails'+counterfinish+'" id="itemdetails'+counterfinish+'" class="form-control itemdetails'+counterfinish+'"></select></td>';
        cols1 += '<td style="padding: 0.2rem !important;"><i onclick="setcounterhd('+counterfinish+');" data-toggle="modal" data-target="#responsive-modal-item" class="fa fa-plus-circle"></i></td>';
        cols1 += '<td style="padding: 0.2rem !important;"><input type="text" name="bundles'+counterfinish+'"  onfocusout="bundlecal('+counterfinish+');"  id="bundles'+counterfinish+'" class="form-control" placeholder="Bundles" value=""/></td>';
        cols1 += '<td style="padding: 0.2rem !important;"><select name="category'+counterfinish+'" id="category'+counterfinish+'" class="form-control"></select></td>';
        cols1 += '<td style="padding: 0.2rem !important;"><select name="packing'+counterfinish+'" id="packing'+counterfinish+'" class="form-control"><option value="test">test</option><option value="test">test</option></select></td>';
        cols1 += '<td style="padding: 0.2rem !important;"><select name="unit' + counterfinish + '" id="unit' + counterfinish + '"  class="form-control">'+
                    '<option value="">-Select-</option>'+
                    '<option value="pcs">Pcs</option>'+
                    '<option value="mts">MTS</option>'+
                    '<option value="kg">KG</option>'+
                    '<option value="suit">Suit</option>'+
                    '<option value="other">Other</option>'+
                '</select></td>';
        cols1 += '<td style="padding: 0.2rem !important;"> <input type="text" onfocusout="finishpurchase('+counterfinish+');totalpurcal('+counterfinish+');" onchange="changecalculation('+counterfinish+');" name="pcs'+counterfinish+'" id="pcs'+counterfinish+'"  class="form-control Pcs'+counterfinish+' pcsclass" placeholder="Pcs" value=""/></td>';
        cols1 += '<td style="padding: 0.2rem !important;"><input type="text" onfocusout="finishpurchase('+counterfinish+');" name="cut'+counterfinish+'" id="cut'+counterfinish+'" class="form-control" placeholder="cut" value=""/></td>';
        cols1 += '<td style="padding: 0.2rem !important;"><input type="text" name="mts'+counterfinish+'" id="mts'+counterfinish+'"  class="form-control mtscls" placeholder="Mts" value=""/></td>';
        cols1 += '<td style="padding: 0.2rem !important;"><input type="text" onfocusout="finishpurchase('+counterfinish+');" name="rate'+counterfinish+'" id="rate'+counterfinish+'" class="form-control" placeholder="Rate" value="" /></td>';
        cols1 += '<td style="padding: 0.2rem !important;"><input type="text" name="amount'+counterfinish+'" id="amount'+counterfinish+'" class="form-control amount" placeholder="Amount" value="" /></td>';
        cols1 += '<td style="padding: 0.2rem !important;"><div class="storestock'+counterfinish+'"></div></td>';
        cols1 += '<td style="padding: 0.2rem !important;"><input type="button" class="finishbtnDel btn btn-md btn-danger" value="Delete"></td>';

        newRow1.append(cols1);
        $("table.order-list").append(newRow1);
        $("#finishcountdata").val(counterfinish+1);
        var sumdata1 = $(".finishcountdata").val();
        $(".finishcountdata").val(1 + parseInt(sumdata1));
        counterfinish++;
		});

    // start by milan 2//22/19
    // $("table.order-list").on("click", ".finishbtnDel", function (event) {

		$( "body" ).delegate( ".finishbtnDel", "click", function(event) {
    	event.preventDefault();
        $(this).closest("tr").remove();       
        counterfinish -= 1
         $("#finishcountdata").val(counterfinish);
    });
    // end by milan 2//22/19

    $("#addfinishpurchasefrm").find(".customvalidation").jqBootstrapValidation(
    {
        preventSubmit: true,
        submitError: function($form, event, errors) {
            // Here I do nothing, but you could do something like display 
            // the error messages to the user, log, etc.
        },
        submitSuccess: function($form, event) {
           
            event.preventDefault();

                $.ajax({
                url: base_url+'Test_controller/savefinishpurchase',
                data: new FormData($('#addfinishpurchasefrm')[0]),
                processData: false,
                contentType: false,
                type: 'POST',
                  success: function(data){
                    if(data == "Finish Purchase Bill" || data == "Finish Purchase" || data == "Sales Order" || data == "Sales Order Bill")
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
                        if(data == "Finish Purchase Bill")
                        {
                            setTimeout(function(){ window.location.href = base_url+"FinishPurchaseOrderBill"; }, 3500);
                        }
                        else if(data == "Finish Purchase")
                        {
                            setTimeout(function(){ window.location.href = base_url+"FinishPurchaseOrder"; }, 3500);
                        }
                        else if(data == "Sales Order")
                        {
                            setTimeout(function(){ window.location.href = base_url+"SalesOrder"; }, 3500);
                        }
                        else if(data == "Sales Order Bill")
                        {
                            setTimeout(function(){ window.location.href = base_url+"SalesOrderBill"; }, 3500);
                        }
                    }
                    else
                    {

                        setTimeout(function(){ window.location.href = base_url+"SalesOrderBill"; }, 3500);

                        //  $.toast({
                        // heading: 'Warning'
                        // // , text: 'Only '+data+' Pcs are remaining your order not added'
                        // , text: 'Only '+data+' Pcs are remaining your order not added'
                        // , position: 'top-right'
                        // , loaderBg: '#ca2527'
                        // , icon: 'error'
                        // , hideAfter: 4500
                        // , stack: 6
                        // });
                    }

                    }
                });
        },
        filter: function() {
            return $(this).is(":visible");
        }
    });

     $("#editfinishpurchasefrm").find(".customvalidation").jqBootstrapValidation(
    {
        preventSubmit: true,
        submitError: function($form, event, errors) {
            // Here I do nothing, but you could do something like display 
            // the error messages to the user, log, etc.
        },
        submitSuccess: function($form, event) {
           
            event.preventDefault();

                $.ajax({
                url: base_url+'Test_controller/editsavefinishpurchase',
                data: new FormData($('#editfinishpurchasefrm')[0]),
                processData: false,
                contentType: false,
                type: 'POST',
                  success: function(data){

                    $.toast({
                        heading: 'Success'
                        , text: 'your data edit successfully.'
                        , position: 'top-right'
                        , loaderBg: '#ff6849'
                        , icon: 'success'
                        , hideAfter: 3500
                        , stack: 6
                    });

                        if(data == "Sales Order Bill")
                        {
                          setTimeout(function(){ window.location.href = base_url+"SalesOrderBill"; }, 3500);
                        }
                        else if(data == "Finish Purchase")
                        {
                            setTimeout(function(){ window.location.href = base_url+"FinishPurchaseOrder"; }, 3500);
                        }
                        else if(data == "Finish Purchase Bill")
                        {
                            setTimeout(function(){ window.location.href = base_url+"FinishPurchaseOrderBill"; }, 3500);
                        }
                        else if(data = "Sales Order")
                        {
                             setTimeout(function(){ window.location.href = base_url+"SalesOrder"; }, 3500);
                        }
                        else
                        {
                            setTimeout(function(){ window.location.href = base_url+"SalesOrderBill"; }, 3500);
                        }
                      
                      }
                });
        },
        filter: function() {
            return $(this).is(":visible");
        }
    });


    
    // end 2/19/19

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


// start milan by 2/13/19

$("body").delegate("#discountless1,#discountless2,#grandtotal", "focusout", function()
{
    if($("#discountless1").val() != "")
    {
        $("#net_amt").val($("#grandtotal1").val() - $("#amountless").val());
    }
    else if($("#discountless2").val() != "")
    {
        $("#net_amt").val($("#grandtotal1").val() - $("#discountless2").val());
    }
    else
    {
        $("#net_amt").val($("#grandtotal").val());
    }
});

$("body").delegate(".discountless1,.discountless2,.editgrandtotal1", "focusout", function()
{
    if($(".discountless1").val() != "")
    {
        $(".net_amt").val($(".editgrandtotal1").val() - $(".amountless").val());
    }
    else if($(".discountless2").val() != "")
    {
        $(".net_amt").val($(".editgrandtotal1").val() - $(".discountless2").val());
    }
    else
    {
        $(".net_amt").val($(".editgrandtotal1").val());
    }
});

$("body").delegate("#discountless1", "focusout", function()
{

    $("#amountless").val(parseInt($("#grandtotal1").val())/100*parseInt($("#discountless1").val()));

});

$("body").delegate(".discountless1", "focusout", function()
{

    $(".amountless").val(parseInt($(".editgrandtotal1").val())/100*parseInt($(".discountless1").val()));

});


$("body").delegate("#discountless2", "focusout", function()
{

    $("#amountless2").val(parseInt($("#grandtota2").val())-parseInt($("#discountless2").val()));

});

$("body").delegate(".discountless2", "focusout", function()
{

    $(".amountless2").val(parseInt($(".editgrandtota2").val())-parseInt($(".discountless2").val()));

});

function ratecal()
{
    var sum2 = 0;
    $(".rectakatotal").each(function () {
        if (!isNaN(this.value) && this.value.length != 0) {
            sum2 += parseFloat(this.value);
        }
    });
    $("#GreyPRecTaka").val(sum2);
    $(".rectakatot").val(sum2);
}



$("body").delegate(".amount,#net_amt", "focusout", function()
{
    var sum2 = 0;
    $(".amount").each(function () {
        if (!isNaN(this.value) && this.value.length != 0) {
            sum2 += parseFloat(this.value);
        }
    });
    
    $("#grandtotal").val(sum2);
    $("#grandtotal1").val(sum2);
    $("#grandtota2").val(sum2);
    $("#Taxable_Value").val($("#net_amt").val());

    var GstType = $("#GstType").val();

    if(GstType == 4)
    {
        $("#cgst_persantage").val(2.5);
        $("#sgst_persantage").val(2.5);

        $("#amt").val(($("#net_amt").val()*$("#cgst_persantage").val())/100);
        $("#sgdt_amt").val(($("#net_amt").val()*$("#sgst_persantage").val())/100);
        $("#Bill_Amount").val(parseInt($("#net_amt").val()) + parseInt($("#amt").val()) + parseInt($("#sgdt_amt").val()));
    }
    else
    {
        $("#igst_persantage").val(5);
        $("#igstamt").val(($("#net_amt").val()*$("#igst_persantage").val())/100);
        $("#Bill_Amount").val(parseInt($("#net_amt").val()) + parseInt($("#igstamt").val()));        
    }

});

$("body").delegate(".editamount,.net_amt", "focusout", function()
{
     var sum2 = 0;
        $(".editamount").each(function () {
            if (!isNaN(this.value) && this.value.length != 0) {
                sum2 += parseFloat(this.value);
            }
        });
    console.log(sum2);

    $(".editgrandtotal").val(sum2);
    $(".editgrandtotal1").val(sum2);
    $(".editgrandtota2").val(sum2);
    $(".Taxable_Value").val($(".net_amt").val());

    
    var GstType = $(".GstType").val();

    if(GstType == 4)
    {
        $(".cgst_persantage").val(2.5);
        $(".sgst_persantage").val(2.5);

        $(".amt").val(($(".editgrandtotal1").val()*$(".cgst_persantage").val())/100);
        $(".sgdt_amt").val(($(".editgrandtotal1").val()*$(".sgst_persantage").val())/100);
        $(".Bill_Amount").val(parseInt($(".editgrandtotal1").val()) + parseInt($(".amt").val()) + parseInt($(".sgdt_amt").val()));
    }
    else
    {
        $(".igstamt").val(5);

        $(".igstamt").val(($(".editgrandtotal1").val()*$(".igst_persantage").val())/100);
        $(".Bill_Amount").val(parseInt($(".editgrandtotal1").val()) + parseInt($(".igstamt").val()));
    }
});

$("body").delegate(".pcsclass", "focusout", function()
{
     var sum2 = 0;
    $(".pcsclass").each(function () {
        if (!isNaN(this.value) && this.value.length != 0) {
            sum2 += parseFloat(this.value);
        }
    });
    console.log(sum2);
    $("#totalpcs").val(sum2);
});

$("body").delegate(".pcsclassedit", "focusout", function()
{
     var sum2 = 0;
    $(".pcsclassedit").each(function () {
        if (!isNaN(this.value) && this.value.length != 0) {
            sum2 += parseFloat(this.value);
        }
    });
    $(".totalpcs").val(sum2);
});



$("body").delegate(".mtscls", "focusout", function()
{
     var sum2 = 0;
    $(".mtscls").each(function () {
        if (!isNaN(this.value) && this.value.length != 0) {
            sum2 += parseFloat(this.value);
        }
    });
    $("#totalmts").val(sum2);
});


$("body").delegate(".editmtscls", "focusout", function()
{
     var sum2 = 0;
    $(".editmtscls").each(function () {
        if (!isNaN(this.value) && this.value.length != 0) {
            sum2 += parseFloat(this.value);
        }
    });
    $(".edittotalmts").val(sum2);
});


    function getpartytoother(val)
    {
        var partyid = val.value;
        //alert(partyid);
        $.ajax({
        url: base_url+'Transaction_controller/getpartytoother',
        data: {partyid:partyid},
        type: 'POST',
        success: function(data)
        {
            var obj = $.parseJSON(data);
            var character = obj.LGstin.substring(0, 2);

            if(obj.StateSortGstCode == 24 || obj.StateCode == 24)
            {   
                $("#cgst_persantage").val(2.5);
                $("#sgst_persantage").val(2.5);
                 $("#igst_persantage").val('');
                 $("#igstamt").val('');
                $('#GstType').val(4).trigger("change");
                $('#StateID').val(12).trigger("change");
                
            }
            else
            {
                // $("#cgst_persantage").val(5);
                // $("#sgst_persantage").val(5);

                $('#cgst_persantage').attr('readonly', true);
                $('#sgst_persantage').attr('readonly', true);
                $('#amt').attr('readonly', true);
                $('#sgdt_amt').attr('readonly', true);
                $("#cgst_persantage").val('');
                $("#sgst_persantage").val('');
                $("#amt").val('');
                $("#sgdt_amt").val('');

                $("#igst_persantage").val(5);
                $('#GstType').val(3).trigger("change");
                $('#StateID').val(obj.StateStateID).trigger("change");
            }
            
            // $('.stateidcls').val(obj.StateID).trigger("change");
            $('#Transport').val(obj.TransportID).trigger("change");
            $('.Transportcls').val(obj.TransportID).trigger("change");
            $("#Party_GSTIN").val(obj.LGstin);
            $("#GreyPPartyGstin").val(obj.LGstin);
            $(".Party_GSTIN").val(obj.LGstin);
            $("#GreyPOrderNo").html(obj.Orderdata);
            $(".GreyPOrderNo").html(obj.Orderdata);
            $("#GreyPHsnCode").val(obj.LHsnCode);
            $('.BrokerIDadd').val(obj.BrokerID).trigger("change");
            $('.BrokerIDedit').val(obj.BrokerID).trigger("change");
            $('.addstation').val(obj.StationID).trigger("change");
            $("#Bill_NO").html(obj.Orderdata);
        }
    });

    }


    function statetodata(val)
    {
        var stateid = val.value;
        var character = $("#Party_GSTIN").val().substring(0, 2);
     
        if((character == 24) || (stateid == 12))
        {
            $('#GstType').val(4).trigger("change");
            $("#cgst_persantage").val(2.5);
            $("#sgst_persantage").val(2.5);
        }
        else
        {
            $('#GstType').val(3).trigger("change");

            $('#cgst_persantage').attr('readonly', true);
            $('#sgst_persantage').attr('readonly', true);
            $('#amt').attr('readonly', true);
            $('#sgdt_amt').attr('readonly', true);

            $("#igst_persantage").val(5);

            // $("#cgst_persantage").val(5);
            // $("#sgst_persantage").val(5);
        }
    }

    function changegsttype()
    {
        var gst = $("#GstType").val();
        if(gst == 4)
        {
            $("#cgst_persantage").val(2.5);
            $("#sgst_persantage").val(2.5);

            $("#igst_persantage").val('');
            $("#igstamt").val('');
            
        }
        else
        {
            // $("#cgst_persantage").val(5);
            // $("#sgst_persantage").val(5);
            $('#cgst_persantage').attr('readonly', true);
            $('#sgst_persantage').attr('readonly', true);
            $('#amt').attr('readonly', true);
            $('#sgdt_amt').attr('readonly', true);
            $("#igst_persantage").val(5);

            $("#cgst_persantage").val('');
            $("#sgst_persantage").val('');
            $('#amt').val('');
            $('#sgdt_amt').val('');
        }
    }

    function editstatetodata(val)
    {
        var stateid = val.value;
        var character = $(".EditPartyGstin").val().substring(0, 2);
    
        if((character == 24) || (stateid == 12))
        {
            $('.GstType').val(4).trigger("change");
            $(".cgst_persantage").val(2.5);
            $(".sgst_persantage").val(2.5);
        }
        else
        {
            $('.GstType').val(3).trigger("change");
            $(".igst_persantage").val(5);
        }
    }


    function editchangegsttype()
    {
        var gst = $(".GstType").val();
        if(gst == 4)
        {
            $(".cgst_persantage").val(2.5);
            $(".sgst_persantage").val(2.5);
            
        }
        else
        {
            $(".igst_persantage").val(5);
        }
    }

    function getordertootherdata(val)
    {
        var partyid = val.value;
        //alert(partyid);
        $.ajax({
        url: base_url+'Transaction_controller/getordertootherdata',
        data: {partyid:partyid},
        type: 'POST',
        success: function(data)
        {
            //alert(data);
            var obj = $.parseJSON(data);
            $(".RateData").val(obj.GreyRateMts);
            $("#TakaWeaver").val(obj.ACName);
            $("#TakaAvgwt").val(obj.GreyAvgWt);
            $("#TakaQuality").val(obj.GreyQuality);
            $(".GreyPPurRate").val(obj.GreyRateMts1);
            $('#QualityIDData').val(obj.QualityID).trigger("change");

            $("#TakaChallan").val($("#GreyPSrNo").val());
            $("#TakaBillNo").val($("#GreyPBillNo").val());
            $("#TakaDate").val($("#datepicker-autoclose").val());
            $("#TakaCardNo").val($(".CardNoData").val());
            $(".avgwt").val(obj.GreyAvgWt);
        }
    });
    }
    function getordertootherdataedit(val)
    {
        var partyid = val.value;
        //alert(partyid);
        $.ajax({
        url: base_url+'Transaction_controller/getordertootherdata',
        data: {partyid:partyid},
        type: 'POST',
        success: function(data)
        {
            //alert(data);
            var obj = $.parseJSON(data);
            $(".RateData").val(obj.GreyRateMts);
            $(".GreyPPurRate").val(obj.GreyRateMts1);
            $(".avgwt").val(obj.GreyAvgWt);
            $('#EditQualityID').val(obj.QualityID).trigger("change");
        }
    });
    }

    function getpartytootheredit(val)
    {
        var partyid = val.value;
        $.ajax({
        url: base_url+'Transaction_controller/getpartytoother',
        data: {partyid:partyid},
        type: 'POST',
        success: function(data)
        {
            var obj = $.parseJSON(data);
            $(".EditPartyGstin").val(obj.LGstNo);
            $(".EditGreyPOrderNo").html(obj.Orderdata);
            $('.EditGreyPHsnCode').val(obj.LHsnCode);

            $('.TransportID').val(obj.TransportID).trigger("change");
            $('#BrokerIDDataList').val(obj.BrokerID).trigger("change");
            $('.EditStateID').val(obj.StateID).trigger("change");

            //edit record

            var character = obj.LGstin.substring(0, 2);

            if(obj.StateSortGstCode == 24 || obj.StateCode == 24)
            {
                $(".cgst_persantage").val(2.5);
                $(".sgst_persantage").val(2.5);
                $('.GstType').val(4).trigger("change");
                $('.EditStateID').val(12).trigger("change");
            }
            else
            {
                // $(".cgst_persantage").val(5);
                // $(".sgst_persantage").val(5);
                $(".igst_persantage").val(5);
                $('.GstType').val(3).trigger("change");
                $('.EditStateID').val(obj.StateStateID).trigger("change");
            }

            //edit record end

        }
    });
    }

    function getordertoother(val)
    {
        var orderid = val.value;
            $.ajax({
            url: base_url+'Transaction_controller/getordertoother',
            data: {orderid:orderid},
            type: 'POST',
            success: function(data)
            {
                var obj = $.parseJSON(data);
                $("#PurRate").val(obj.Rate_Mts);
                $(".PurRate1").val(obj.Rate_Mts);
                $('#QualityID option[value='+obj.Quality+']').attr('selected','selected');
                $('.QualityID123 option[value='+obj.Quality+']').attr('selected','selected');
            }
        });
    }

// end milan bu 2/13/19
  
    function getcardno(counter,type)
    {
        var greypurchaseorderBillID = $("#greypurchaseorderBillID").val();

        if(greypurchaseorderBillID != "")
        {
         var cardno = $(".editcrtno"+counter).val();
        
        }
        else
        {
         var cardno = $("#cardno"+counter).val();
        }

        if(greypurchaseorderBillID == "")
            {
              var avgwt = $(".avgwt").val();
            }
            else
            {
            var avgwt = $(".avgwtedit").val();
            }
        

        if (confirm("Are you sure you want to open taka details?")) {

           // if(type != 1)
           // {
           //      var avgwt = $(".avgwt").val();
           // }
           // else
           // {
           //      var avgwt = $(".avgwtedit").val();

           // }
         // var cardno = $("#cardno"+counter).val();
        $("#TakaDetails").modal();
        $("#TakaDetails").show();
        setTimeout(function(){ $("#TakaQuality").focus(); }, 500);

        if($("#greypurchaseorderBillID").val() != "")
        {
            if($(".EditQualityIDcls").val() != "")
            {
                var QualityIDData = $(".EditQualityIDcls option:selected").text();
            }
            else
            {
                var QualityIDData = "";
            }

            if($(".GreyPPartyAcIDcls").val() != "")
            {
                var GreyPPartyAcID = $(".GreyPPartyAcIDcls option:selected").text();
            }
            else
            {
                var GreyPPartyAcID = "";
            }

            if($(".CompanyIDcls").val() != "")
            {
                var CompanyIDData = $(".CompanyIDcls option:selected").text();
            }
            else
            {
                var CompanyIDData = "";
            }

            if($(".GreyPBillNocls").val() != "")
            {
                var GreyPBillNo = $(".GreyPBillNocls").val();
            }
            else
            {
                var GreyPBillNo = "";
            }
        }
        else
        {
            if($("#QualityIDData").val() != "")
            {
                var QualityIDData = $("#QualityIDData option:selected").text();
            }
            else
            {
                var QualityIDData = "";
            }

            if($("#GreyPPartyAcID").val() != "")
            {
                var GreyPPartyAcID = $("#GreyPPartyAcID option:selected").text();
            }
            else
            {
                var GreyPPartyAcID = "";
            }

            if($("#CompanyIDData").val() != "")
            {
                var CompanyIDData = $("#CompanyIDData option:selected").text();
            }
            else
            {
                var CompanyIDData = "";
            }

            var GreyPBillNo = $("#GreyPBillNo").val();
        }

        
        var datepicker = $("#datepicker-autoclose").val();
        
         $.ajax({
            url: base_url+'Transaction_controller/modeldata',
            data: {cardno:cardno,QualityIDData:QualityIDData,GreyPPartyAcID:GreyPPartyAcID,CompanyIDData:CompanyIDData,GreyPBillNo:GreyPBillNo,datepicker:datepicker,counter:counter,avgwt:avgwt,type:type},
            type: 'POST',
              success: function(data){
                    $(".insidebody").html(data);
                    // $("#TakaCardNo").val($("#cardno"+counter).val());
                     $("#TakaCardNo").val(cardno);
                    $("#TakaCounterData").val(counter);
                    $("#forfindhidden").val(1);
                  }
            });
    }
    return false;
    }



    function IdealWtcalc(packingcount)
    {
       // $("#TakaIdealWt"+packingcount).val((($("#TakaIdealWt"+packingcount).val())*($("#TakaAvgwt").val()))/100);
        $("#TakaWtLs"+packingcount).val(($("#TakaIdealWt"+packingcount).val())-($("#TakaActWt"+packingcount).val()));

    }


 function TakaIdealWtCal1(prackingid)
    {
    $("#TakaIdealWt"+prackingid).val(($("#TakaAvgwt").val()/100)*($("#TakaMfgMts"+prackingid).val()));
    }

     // start 2/19/19

    function itemdetails(itemcount)
    {
        $.ajax({
        url: base_url+'Test_controller/GetItem',
        data: {},
        type: 'POST',
          success: function(data){
                $("#itemdetails"+itemcount).html(data);
              }
        });
    }

    function categorydetails(countdata)
    {
        $.ajax({
        url: base_url+'Test_controller/finishpurchase',
        data: {},
        type: 'POST',
          success: function(data){
                $("#category"+countdata).html(data);          
              }
        });
    }

    function finishpurchase(countdata)
    {  
        var editval = $("#editval").val();
        var finalpcs = $(".finalpcs"+countdata).val();
        var rate = $(".editRate"+countdata).val();

        if(editval == "yes")
        {
            $(".mts"+countdata).val(($(".finalpcs"+countdata).val())*($(".Cutter"+countdata).val()));

            if($(".editunit"+countdata).val() == "pcs")
            {
                var fpcs = $(".finalpcs"+countdata).val();

                $(".finaleditamt"+countdata).val(fpcs*rate);
            }
            else
            {
                $(".finaleditamt"+countdata).val($(".mts"+countdata).val()*$(".rate"+countdata).val());
            }
        }
        else
        {

            $("#mts"+countdata).val(($("#pcs"+countdata).val())*($("#cut"+countdata).val()));

            if($("#unit"+countdata).val() == "pcs")
            {
                $("#amount"+countdata).val(($("#pcs"+countdata).val())*($("#rate"+countdata).val()));
            }
            else
            {
                $("#amount"+countdata).val(($("#mts"+countdata).val())*($("#rate"+countdata).val()));
            }
        }
    }

    function changecalculation(countdata)
    {
        var editval = $("#editval").val();

        if(editval == "yes")
        {
           
            $(".mts"+countdata).val(($(".pcs"+countdata).val())*($(".cut"+countdata).val()));

            if($(".unit"+countdata).val() == "pcs")
            {
                $(".editamount"+countdata).val(parseInt(($(".pcs"+countdata).val()))*parseInt(($(".rate"+countdata).val())));
                // console.log(paddfinishpurchasearseInt($(".pcs"+countdata).val()));
                // console.log(parseInt($(".rate"+countdata).val()));
            }
            else
            {
                $(".editamount"+countdata).val(parseInt($(".mts"+countdata).val())*parseInt($(".rate"+countdata).val()));
                // console.log(parseInt($(".mts"+countdata).val()));
                // console.log(parseInt($(".rate"+countdata).val()));
            }
        }
        else
        {
            
            $("#mts"+countdata).val(($("#pcs"+countdata).val())*($("#cut"+countdata).val()));

            if($("#unit"+countdata).val() == "pcs")
            {
                $("#amount"+countdata).val(($("#pcs"+countdata).val())*($("#rate"+countdata).val()));
            }
            else
            {
                $("#amount"+countdata).val(($("#mts"+countdata).val())*($("#rate"+countdata).val()));
            }
        }
        
    }

    function getpackinglist(countdata)
    {
        $.ajax({
        url: base_url+'Test_controller/getPackageData',
        data: {},
        type: 'POST',
          success: function(data){
                $("#packing"+countdata).html(data);
              }
        });
    }

    function getitemdata(countdata)
    {
        if($("#itemdetails0").val() == "")
        {
            var singleValues = $( ".itemdetails"+countdata ).val();
        }
        else
        {
            var singleValues = $( "#itemdetails"+countdata ).val();
        }

        $.ajax({
        url: base_url+'Test_controller/GetCutData',
        data: {singleValues:singleValues},
        type: 'POST',
          success: function(data){
                var obj = jQuery.parseJSON(data);
                $("#cut"+countdata).val(obj.Cut);
                $("#rate"+countdata).val(obj.Rate2);
                $('#category'+countdata).val(obj.CategoryID).trigger("change");
                $('#packing'+countdata).val(obj.PackingID).trigger("change");

                 $(".cut"+countdata).val(obj.Cut);
                $(".rate"+countdata).val(obj.Rate2);
                $('.category'+countdata).val(obj.CategoryID).trigger("change");
                $('.packing'+countdata).val(obj.PackingID).trigger("change");
              
              }
        });
    }

    function hastetoother(val)
    {
       var hasteid = val.value;
        $.ajax({
        url: base_url+'Transaction_controller/fetchHasteDetail',
        data: {data:hasteid},
        type: 'POST',
          success: function(data){
                var obj = $.parseJSON(data);
                $("#Haste_GSTIN").val(obj.HasteGstIn);
              }
        });
    }



        // $( "body" ).delegate( ".bundle", "focusout", function() {

    //     var bundle = $( this ).val();

    //     var arr = bundle.split('*');

    //     if(arr[1] != undefined)
    //     {
    //         $("#Pcs0").val(arr[0]*arr[1]);   
    //     }
    
    // });


    function bundlecal(count)
    {

        var SumofTotal;
        var Quantity = $('#bundles'+count).val();
        var strarray = Quantity.split(',');
        var numericReg = /^[0-9.*+-/]+$/
        if (!numericReg.test(Quantity)) {
            alert('Numeric characters only.');
        }
        else
        {
            var str = Quantity;
            var numbers = str.replace(/ /g, '').split(/[-+*\/]/g);
            var operators = str.replace(/ /g, '').split(/\d*/g);
            var array = [];
            array.push('+');
            for (var i = 0; i < operators.length; i++) {
                if (operators[i] != '' && operators[i] != '.') {
                    array.push(operators[i]);
                }
            }
            var op = 0;
            var result = 0;
            for (var i = 0; i < numbers.length; i++) {
                result = eval(parseFloat(result) + array[op] + parseFloat(numbers[i]));
                op++;
            }
            if (!isNaN(result)) {
                $("#pcs"+count).val(result);
            } else {
                $("#pcs"+count).val(result);
            }
        }



        // var bundle = $("#bundles"+count).val();

        // var cross = bundle.split('*');

        // if(cross[1] != undefined)
        // {
        //     $("#Pcs"+count).val(cross[0]*cross[1]);   
        // }

        // var plus = bundle.split('+');

        // if(plus[1] != undefined)
        // {

        //     $("#Pcs"+count).val(parseInt(plus[0])+parseInt(plus[1]));   
        // }

        // var minus = bundle.split('-');

        // if(minus[1] != undefined)
        // {
        //     $("#Pcs"+count).val(parseInt(minus[0])-parseInt(minus[1]));   
        // }

        // var divide = bundle.split('/');

        // if(divide[1] != undefined)
        // {
        //     $("#Pcs"+count).val(parseInt(divide[0])/parseInt(divide[1]));   
        // }
    }

    function bundlecal1(count)
    {
        var SumofTotal;
        var Quantity = $('.bundles'+count).val();
        var strarray = Quantity.split(',');
        var numericReg = /^[0-9.*+-/]+$/
        if (!numericReg.test(Quantity)) {
            alert('Numeric characters only.');
        }
        else
        {
            var str = Quantity;
            var numbers = str.replace(/ /g, '').split(/[-+*\/]/g);
            var operators = str.replace(/ /g, '').split(/\d*/g);
            var array = [];
            array.push('+');
            for (var i = 0; i < operators.length; i++) {
                if (operators[i] != '' && operators[i] != '.') {
                    array.push(operators[i]);
                }
            }
            var op = 0;
            var result = 0;
            for (var i = 0; i < numbers.length; i++) {
                result = eval(parseFloat(result) + array[op] + parseFloat(numbers[i]));
                op++;
            }
            if (!isNaN(result)) {
                $(".finalpcs"+count).val(result);
            } else {
                $(".finalpcs"+count).val(result);
            }
        }



        // var bundle = $("#bundles"+count).val();

        // var cross = bundle.split('*');

        // if(cross[1] != undefined)
        // {
        //     $("#Pcs"+count).val(cross[0]*cross[1]);   
        // }

        // var plus = bundle.split('+');

        // if(plus[1] != undefined)
        // {

        //     $("#Pcs"+count).val(parseInt(plus[0])+parseInt(plus[1]));   
        // }

        // var minus = bundle.split('-');

        // if(minus[1] != undefined)
        // {
        //     $("#Pcs"+count).val(parseInt(minus[0])-parseInt(minus[1]));   
        // }

        // var divide = bundle.split('/');

        // if(divide[1] != undefined)
        // {
        //     $("#Pcs"+count).val(parseInt(divide[0])/parseInt(divide[1]));   
        // }
    }

    // end 2/19/19


    /* Taka Details Data */


        var TakaCounter = 1;

    // $(".addTakaDetailsRow").on("click", function () {
    //     var newRow = $("<tr id=totalData"+TakaCounter+">");
    //     //var TakaCounter1 = 1+TakaCounter;
    //     var cols = "";

    //     cols += '<td style="padding:0rem;"><input  type="text" class="form-control" name="TakaSrNo' + TakaCounter + '" id="TakaSrNo' + TakaCounter + '" value="'+i+'"" placeholder="Sr No."/></td>';
    //     cols += '<td style="padding:0rem;"><input  type="text" class="form-control MFGMtsData" name="TakaMfgMts' + TakaCounter + '" id="TakaMfgMts' + TakaCounter + '" placeholder="Mfg Mts" onkeyup="IdealWtcalc(' + TakaCounter + ');"/></td>';
        
    //     cols += '<td style="padding:0rem;"><input  type="text" class="form-control" name="TakaSarees' + TakaCounter + '" id="TakaSarees' + TakaCounter + '" placeholder="Sarees"/></td>';
    //     cols += '<td style="padding:0rem;"><input  type="text" class="form-control" name="TakaActCut' + TakaCounter + '" id="TakaActCut' + TakaCounter + '"  placeholder="Act Cut"/></td>';
    //     cols += '<td style="padding:0rem;"><input  type="text" class="form-control" name="TakaFormMfsc' + TakaCounter + '" id="TakaFormMfsc' + TakaCounter + '" placeholder="Form Mfsc"/></td>';
    //     cols += '<td style="padding:0rem;"><input  type="text" class="form-control" name="TakaIdealWt' + TakaCounter + '" id="TakaIdealWt' + TakaCounter + '" placeholder="Ideal Wt"/></td>';


    //     cols += '<td style="padding:0rem;"><input type="text" class="form-control TakaActWt" name="TakaActWt' + TakaCounter + '" id="TakaActWt' + TakaCounter + '"" placeholder="Act Wt" onkeyup="IdealWtcalc(' + TakaCounter + ');"/></td>';
    //     cols += '<td style="padding:0rem;color:red;"><input type="text" class="form-control TakaWtls" name="TakaWtLs' + TakaCounter + '" id="TakaWtLs' + TakaCounter + '"  placeholder="Wt Ls"/></td>';
    //     cols += '<td style="padding:0rem;"><input type="text" class="form-control Mts" name="TakaDesign' + TakaCounter + '" id="TakaDesign' + TakaCounter + '" placeholder="Design"/></td>';
    //     cols += '<td style="padding:0rem;"><input type="text" class="form-control" name="TakaRemark' + TakaCounter + '" id="TakaRemark' + TakaCounter + '" placeholder="Remark"/></td>';

    //     cols += '<td style="padding:0rem;"><input type="button" class="ibtnDel btn btn-md btn-danger "  value="Delete"></td>';
    //     newRow.append(cols);
    //     $("table.Taka-list").append(newRow);
    //     i++;
    //     var sumdata = $("#Takacountdata").val();

    //     $("#Takacountdata").val(1 + parseInt(sumdata));

    //     $("#forfindhidden").val(parseInt($("#forfindhidden").val())+1);

    //     TakaCounter++;

    // });

    var i=2;
    function addTakaDetailsRow()
    {
     
        if($("#ifedit").val() == 1)
        {
            var rowCount = $('.myTableedit >tbody >tr').length;
            var i = rowCount;
            var finalcount = rowCount+1;
            var TakaCounter = finalcount;
        }
        else
        {   
            var TakaCounter = $('.myTableadd >tbody >tr').length;
            var rowCount = $('.myTableadd >tbody >tr').length;
            var finalcount = rowCount+1;
        }

        //var lasttr = $('.myTableadd tr:last').attr('id');
       

        var newRow = $("<tr id=totalData"+finalcount+">");
        //var TakaCounter1 = 1+TakaCounter;
        var cols = "";

        cols += '<td style="padding:0rem;"><input  type="text" class="form-control" name="TakaSrNo[]" id="TakaSrNo' + TakaCounter + '" value="'+finalcount+'"" placeholder="Sr No."/></td>';
        cols += '<td style="padding:0rem;"><input  type="text" class="form-control MFGMtsData" name="TakaMfgMts[]" id="TakaMfgMts' + TakaCounter + '" placeholder="Mfg Mts" onkeyup="IdealWtcalc(' + TakaCounter + ');"/></td>';
        
        cols += '<td style="padding:0rem;"><input  type="text" class="form-control TakaSarees" name="TakaSarees[]" id="TakaSarees' + TakaCounter + '" placeholder="Sarees"/></td>';
        cols += '<td style="padding:0rem;"><input  type="text" class="form-control" name="TakaActCut[]" id="TakaActCut' + TakaCounter + '"  placeholder="Act Cut"/></td>';
        cols += '<td style="padding:0rem;"><input  type="text" class="form-control" name="TakaFormMfsc[]" id="TakaFormMfsc' + TakaCounter + '" placeholder="Form Mfsc"/></td>';
        cols += '<td style="padding:0rem;"><input  type="text" class="form-control TakaIdealWtCalSum TakaIdealWtCal' + TakaCounter + '" name="TakaIdealWt[]" id="TakaIdealWt' + TakaCounter + '" onkeyup="TakaIdealWtCal1(' + TakaCounter + ')" placeholder="Ideal Wt"/></td>';
        cols += '<td style="padding:0rem;"><input type="text" class="form-control TakaActWt" name="TakaActWt[]" id="TakaActWt' + TakaCounter + '"" placeholder="Act Wt" onkeyup="IdealWtcalc(' + TakaCounter + ');"/></td>';
        cols += '<td style="padding:0rem;color:red;"><input type="text" class="form-control TakaWtls" name="TakaWtLs[]" id="TakaWtLs' + TakaCounter + '"  placeholder="Wt Ls"/></td>';
        cols += '<td style="padding:0rem;"><input type="text" class="form-control Mts" name="TakaDesign[]" id="TakaDesign' + TakaCounter + '" placeholder="Design"/></td>';
        cols += '<td style="padding:0rem;"><input type="text" class="form-control" name="TakaRemark[]" id="TakaRemark' + TakaCounter + '" placeholder="Remark" onfocusout="popupmtstotal();"/></td>';

        cols += '<td style="padding:0rem;"><input type="button" onclick="deleteibtnDel('+finalcount+');" class="ibtnDel btn btn-md btn-danger "  value="Delete"></td>';
        newRow.append(cols);
        $("table.Taka-list").append(newRow);
       
        var sumdata = $("#Takacountdata").val();

        $("#Takacountdata").val(1 + parseInt(sumdata));

        $("#forfindhidden").val(parseInt($("#forfindhidden").val())+1);

   
        if($("#ifedit").val() == 1)
        {
           $(".TakaIdealWtCal"+TakaCounter).val($(".avgwtedit").val());
        }
        else
        {
            $(".TakaIdealWtCal"+TakaCounter).val($(".avgwt").val());
        }
       

        TakaCounter++;
       // i++;
    }

    var sumdata = $("#Takacountdata").val();
    
    
    // $("table.Taka-list").on("click", ".ibtnDel", function (event) {
    //     alert();
    //     $(this).closest("tr").remove();       
    //     TakaCounter -= 1
    //      $("#Takacountdata").val(TakaCounter);
    //       var subdata = $(".Takacountdata").val();
    //     $(".Takacountdata").val(parseInt(subdata) - 1);
    //     $("#forfindhidden").val(parseInt($("#forfindhidden").val())-1);

    // });

    function deleteibtnDel(TakaCounter)
    {
        var Finaltcount = $("#Takacountdata").val();
         $("#totalData"+TakaCounter).remove();       
        var FullyFinaltcount =  Finaltcount - 1;
         $("#Takacountdata").val(FullyFinaltcount);
          var subdata = $(".Takacountdata").val();
        $(".Takacountdata").val(parseInt(subdata) - 1);
        $("#forfindhidden").val(parseInt($("#forfindhidden").val())-1);
    }

    function findonlymiddlecontent()
	{
		var findbilldatabyordref = $(".findbilldatabyordref").val();
		$.ajax({
			url: base_url+'Transaction_controller/findonlymiddlecontent',
			data: {findbilldatabyordref:findbilldatabyordref},
			type: 'POST',
			success: function(data){
				$(".setresponse").html(data);
			}
		});
	}

    function findsalesmiddlecontent()
    {
        var voucharno = $(".findbilldatabyordref").val();
        $.ajax({
            url: base_url+'Sales_controller/findsalesmiddlecontent',
            data: {voucharno:voucharno},
            type: 'POST',
            success: function(data){
                $(".setresponse").html(data);
            }
        });
    }

    function totalpcscal()
    {
        var findbilldatabyordref = $(".findbilldatabyordref").val();
                
        $.ajax({
            url: base_url+'Transaction_controller/totalpcscal',
            data: {findbilldatabyordref:findbilldatabyordref},
            type: 'POST',
            success: function(data){
                var obj = jQuery.parseJSON(data);
                $("#totaloldpcs").val(obj.totaloldpcs);
                $("#afternewtotal").val(obj.afternewtotal);
                $("#remainingtotal").val(obj.totaloldpcs - obj.afternewtotal);
            }
        });
    }

    function salebilltotalpcscal()
    {
        var voucharno = $(".findbilldatabyordref").val();
        $.ajax({
            url: base_url+'Sales_controller/salebilltotalpcscal',
            data: {voucharno:voucharno},
            type: 'POST',
            success: function(data){
                var obj = jQuery.parseJSON(data);
                $("#totaloldpcs").val(obj.totaloldpcs);
                $("#afternewtotal").val(obj.afternewtotal);
                $("#remainingtotal").val(obj.totaloldpcs - obj.afternewtotal);
            }
        });
    }

    function findbilldata()
    {
		var findbilldatabyordref = $(".findbilldatabyordref").val();

        $.ajax({
        url: base_url+'Transaction_controller/findbilldata',
        data: {findbilldatabyordref:findbilldatabyordref},
        type: 'POST',
          success: function(data){
        	var obj = $.parseJSON(data);
            // $(".AddPartyAcID option[value="+obj.Party_Id+"]").attr('selected', 'selected');
        	// $("#Voucher_NO").val(obj.Voucher);
            $("#LR_No").val(obj.Lr_No_Awb);
        	$("#StateID").val(obj.State_Id);
        	$("#case_no").val(obj.Voucher);
            $("#datepicker-autoclose").val(obj.Finish_Date);
            $("#Haste_GSTIN").val(obj.Haste_Gstin);
            $(".adddhara").val(obj.Dhara);
            $(".addgrace").val(obj.Grace);
            $("#Party_GSTIN").val(obj.Party_Gstin);
            $("#totalpcs").val(obj.Total_Pcs);
            $("#totalmts").val(obj.Total_Mts);
            $("#grandtotal").val(obj.Grand_Total);
            $("#Obtained_By").val(obj.Obtain_By);
            $("#E_Way_Bill_No").val(obj.E_Way_Bill_No);
            $("#lr_no").val(obj.Lr_No);
            $("#lr_date").val(obj.Lr_Date);
            $("#lr_rec_date").val(obj.Lr_Rec_Date);
            $("#weight").val(obj.Weight);
            $("#height").val(obj.Height);
            $("#grandtotal1").val(obj.Grand_Total1);
            $("#discountless1").val(obj.Discount_Less1);
            $("#amountless").val(obj.Amount_Less);
            $("#grandtota2").val(obj.Grand_Total2);
            $("#discountless2").val(obj.Discount_Less2);
            $("#amountless2").val(obj.Amount_Less2);
            $("#net_amt").val(obj.Net_Amt);
            $("#cgst_persantage").val(obj.Cgst);
            $("#amt").val(obj.Cgst_Amt);
            $("#sgst_persantage").val(obj.Sgst);
            $("#sgdt_amt").val(obj.Sgst_Amt);
            $("#Taxable_Value").val(obj.Taxable_Value);

            $("#Bill_Amount").val(obj.Bill_Amt);
            $("#Net_After_Tds").val(obj.Net_After_Tds);
            // $(".AddPartyAcID").select2().select2('val',obj.Party_Id);
            if(obj.Party_Id != "" || obj.Party_Id != '0')
            {
                $(".AddPartyAcID").val(obj.Party_Id).change();
            }
            if(obj.Transport_Id != "" || obj.Transport_Id != '0')
            {
                $(".addTransport").val(obj.Transport_Id).change();
            }
            if(obj.Comapny_Id != "" || obj.Comapny_Id != '0')
            {
                $("#CompanyId").val(obj.Comapny_Id).change();
            }
            if(obj.Gst_Type_Id != "" || obj.Gst_Type_Id != '0')
            {
                $("#GstType").val(obj.Gst_Type_Id).change();
            }
            if(obj.Haste_Id != "" || obj.Haste_Id != '0')
            {
                $("#Haste").val(obj.Haste_Id).change();
            }
            if(obj.Brocker_Id != "" || obj.Brocker_Id != '0')
            {
                $("#BrokerID").val(obj.Brocker_Id).change();
            }
            if(obj.Station_Id != "" || obj.Station_Id != '0')
            {
                $("#Station").val(obj.Station_Id).change();
            }
            if(obj.Screen_Series != "" || obj.Screen_Series != '0')
            {
                $("#ScreenSeries").val(obj.Screen_Series).change();
            }
            if(obj.Remark_Id != "" || obj.Remark_Id != '0')
            {
                $("#RMK").val(obj.Remark_Id).change();
            }
            if(obj.Remark1 != "" || obj.Remark1 != '0')
            {
                $("#remark1").val(obj.Remark1).change();
            }
            if(obj.Remark2 != "" || obj.Remark2 != '0')
            {
                $("#remark2").val(obj.Remark2).change();
            }

            // $(".AddPartyAcID").val(obj.Party_Id).change();
            // $("#GstType").val(obj.Gst_Type_Id).change();
            // $("#Haste").val(obj.Haste_Id).change();
            // $("#BrokerID").val(obj.Brocker_Id).change();
            // $("#Station").val(obj.Station_Id).change();
            // $("#ScreenSeries").val(obj.Screen_Series).change();
            // $("#RMK").val(obj.Remark_Id).change();
            // $("#remark1").val(obj.Remark1).change();
            // $("#remark2").val(obj.Remark2).change();

              }
        });
    }

    function findsalebilldata()
    {
        var voucharno = $(".findbilldatabyordref").val();

        $.ajax({
        url: base_url+'Sales_controller/findsalebilldata',
        data: {voucharno:voucharno},
        type: 'POST',
          success: function(data){
            var obj = $.parseJSON(data);
            // $(".AddPartyAcID option[value="+obj.Party_Id+"]").attr('selected', 'selected');
            // $("#Voucher_NO").val(obj.Voucher);
            $("#LR_No").val(obj.Lr_No_Awb);
            $("#StateID").val(obj.State_Id);
            $("#case_no").val(obj.Voucher);
            $("#datepicker-autoclose").val(obj.Finish_Date);
            $("#Haste_GSTIN").val(obj.Haste_Gstin);
            $(".adddhara").val(obj.Dhara);
            $(".addgrace").val(obj.Grace);
            $("#Party_GSTIN").val(obj.Party_Gstin);
            $("#totalpcs").val(obj.Total_Pcs);
            $("#totalmts").val(obj.Total_Mts);
            $("#grandtotal").val(obj.Grand_Total);
            $("#Obtained_By").val(obj.Obtain_By);
            $("#E_Way_Bill_No").val(obj.E_Way_Bill_No);
            $("#lr_no").val(obj.Lr_No);
            $("#lr_date").val(obj.Lr_Date);
            $("#lr_rec_date").val(obj.Lr_Rec_Date);
            $("#weight").val(obj.Weight);
            $("#height").val(obj.Height);
            $("#grandtotal1").val(obj.Grand_Total1);
            $("#discountless1").val(obj.Discount_Less1);
            $("#amountless").val(obj.Amount_Less);
            $("#grandtota2").val(obj.Grand_Total2);
            $("#discountless2").val(obj.Discount_Less2);
            $("#amountless2").val(obj.Amount_Less2);
            $("#net_amt").val(obj.Net_Amt);
            $("#cgst_persantage").val(obj.Cgst);
            $("#amt").val(obj.Cgst_Amt);
            $("#sgst_persantage").val(obj.Sgst);
            $("#sgdt_amt").val(obj.Sgst_Amt);
            $("#Taxable_Value").val(obj.Taxable_Value);

            if(obj.Freight_Discount > 0)
            {
                $("#freight_discount").val(obj.Freight_Discount);
            }
            else
            {
                $("#freight_discount").val(0);
            }
            
            $("#Bill_Amount").val(obj.Bill_Amt);
            $("#Net_After_Tds").val(obj.Net_After_Tds);
            // $(".AddPartyAcID").select2().select2('val',obj.Party_Id);
            if(obj.Party_Id != "" || obj.Party_Id != '0')
            {
                $(".AddPartyAcID").val(obj.Party_Id).change();
            }
            if(obj.Transport_Id != "" || obj.Transport_Id != '0')
            {
                $(".addTransport").val(obj.Transport_Id).change();
            }
            if(obj.Comapny_Id != "" || obj.Comapny_Id != '0')
            {
                $("#CompanyId").val(obj.Comapny_Id).change();
            }
            if(obj.Gst_Type_Id != "" || obj.Gst_Type_Id != '0')
            {
                $("#GstType").val(obj.Gst_Type_Id).change();
            }
            if(obj.Haste_Id != "" || obj.Haste_Id != '0')
            {
                $("#Haste").val(obj.Haste_Id).change();
            }
            if(obj.Brocker_Id != "" || obj.Brocker_Id != '0')
            {
                $("#BrokerID").val(obj.Brocker_Id).change();
            }
            if(obj.Station_Id != "" || obj.Station_Id != '0')
            {
                $("#Station").val(obj.Station_Id).change();
            }
            if(obj.Screen_Series != "" || obj.Screen_Series != '0')
            {
                $("#ScreenSeries").val(obj.Screen_Series).change();
            }
            if(obj.Remark_Id != "" || obj.Remark_Id != '0')
            {
                $("#RMK").val(obj.Remark_Id).change();
            }
            if(obj.Remark1 != "" || obj.Remark1 != '0')
            {
                $("#remark1").val(obj.Remark1).change();
            }
            if(obj.Remark2 != "" || obj.Remark2 != '0')
            {
                $("#remark2").val(obj.Remark2).change();
            }

            // $(".AddPartyAcID").val(obj.Party_Id).change();
            // $("#GstType").val(obj.Gst_Type_Id).change();
            // $("#Haste").val(obj.Haste_Id).change();
            // $("#BrokerID").val(obj.Brocker_Id).change();
            // $("#Station").val(obj.Station_Id).change();
            // $("#ScreenSeries").val(obj.Screen_Series).change();
            // $("#RMK").val(obj.Remark_Id).change();
            // $("#remark1").val(obj.Remark1).change();
            // $("#remark2").val(obj.Remark2).change();

              }
        });
    }

    function changebillval()
    {
        var net_amt = $("#net_amt").val();
        var freight_discount = $("#freight_discount").val();
        var net_amt = $("#net_amt").val(parseInt(net_amt)+parseInt(freight_discount));
    }

    function popupmtstotal()
    {
        var sum2 = 0;
            $(".MFGMtsData").each(function () {
                if (!isNaN(this.value) && this.value.length != 0) {
                    sum2 += parseFloat(this.value);
                }
            });
        $("#Mfgmts").val(sum2);


         var sum3 = 0;
            $(".TakaSarees").each(function () {
                if (!isNaN(this.value) && this.value.length != 0) {
                    sum3 += parseFloat(this.value);
                }
            });
        $("#Sarees").val(sum3);

      

        var sum4 = 0;
            $(".TakaActWt").each(function () {
                if (!isNaN(this.value) && this.value.length != 0) {
                    sum4 += parseFloat(this.value);
                }
            });
        $("#Actcut").val(sum4);

         var sum5 = 0;
            $(".TakaWtls").each(function () {
                if (!isNaN(this.value) && this.value.length != 0) {
                    sum5 += parseFloat(this.value);
                }
            });
        $("#WtLs").val(sum5);

    }

    function TakaIdealWtCal()
    {
        var sum2 = 0;
            $(".TakaIdealWtCalSum").each(function () {
                if (!isNaN(this.value) && this.value.length != 0) {
                    sum2 += parseFloat(this.value);
                }
            });
        $("#IdealTotal").val(sum2);

    }

    function totalpurcal(itemid,counter,maincounter)
    {
        var sum3 = 0;
        $(".purchasestock"+itemid).each(function () {
            if (!isNaN(this.value) && this.value.length != 0) {
                sum3 += parseFloat(this.value);
            }
        });

        $(".pcs"+maincounter).val(sum3);
        $("#pcs"+maincounter).val(sum3);
    }

    function gotoperticulartaka(counter)
    {
        var cardno = $("#cardno"+counter).val();
        window.open(base_url+"Transaction_controller/PrintPerticularTaka/"+cardno,'_blank');
        // window.location.href=base_url+"Transaction_controller/PrintPerticularTaka/"+cardno;
    }
    function gotoperticulartakaedit(counter)
    {
        var cardno = $(".cardnocls"+counter).val();
        window.open(base_url+"Transaction_controller/PrintPerticularTaka/"+cardno,'_blank');
        // window.location.href=base_url+"Transaction_controller/PrintPerticularTaka/"+cardno;
    }

    function tblrmv()
    {
        $.ajax({
            url: base_url+'Test_controller/tblrmv',
            data: {},
            type: 'POST',
            success: function(data)
            {
                console.log("success");
            }
        });
    }

     function getpartytoothergrey(val)
    {
        var partyid = val.value;
        //alert(partyid);
        $.ajax({
        url: base_url+'Transaction_controller/getpartytoother',
        data: {partyid:partyid},
        type: 'POST',
        success: function(data)
        {
            var obj = $.parseJSON(data);
            var character = obj.LGstin.substring(0, 2);

            if(obj.StateSortGstCode == 24 || obj.StateCode == 24)
            {   
                $("#GreyPCgstIgst").val(2.5);
                $("#GreyPSgst").val(2.5);
                 $("#GreyPIgstPer").val('');
                 $("#GreyPIgstAmt").val('');
                $('#GsttypeID').val(4).trigger("change");
                $('#StateID').val(12).trigger("change");
                $('#GreyPIgstAmt').attr('readonly', true);
                $('#GreyPIgstPer').attr('readonly', true);
                
            }
            else
            {
                $('#GreyPCgstIgst').attr('readonly', true);
                $('#GreyPSgst').attr('readonly', true);
                $('#GreyPCgstAmt').attr('readonly', true);
                $('#GreyPSgstAmt').attr('readonly', true);
                $("#GreyPCgstIgst").val('');
                $("#GreyPSgst").val('');
                $("#GreyPCgstAmt").val('');
                $("#GreyPSgstAmt").val('');
                $("#GreyPIgstPer").val(5);
                $('#GsttypeID').val(3).trigger("change");
                $('#StateID').val(obj.StateStateID).trigger("change");
            }
            
            // $('.stateidcls').val(obj.StateID).trigger("change");
            // $('#Transport').val(obj.TransportID).trigger("change");
            // $('.Transportcls').val(obj.TransportID).trigger("change");
                $("#GreyPPartyGstin").val(obj.LGstin);
            // $("#GreyPPartyGstin").val(obj.LGstin);
            // $(".Party_GSTIN").val(obj.LGstin);
               $("#GreyPOrderNo").html(obj.Orderdata);
            // $(".GreyPOrderNo").html(obj.Orderdata);
            // $("#GreyPHsnCode").val(obj.LHsnCode);
                $('#BrokerIDData1').val(obj.BrokerID).trigger("change");
            // $('.BrokerIDedit').val(obj.BrokerID).trigger("change");
            // $('.addstation').val(obj.StationID).trigger("change");
            // $("#Bill_NO").html(obj.Orderdata);
        }
    });

    }
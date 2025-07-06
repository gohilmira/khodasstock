
   // start 1/19/19

   var counterfinish =1;
    $(".addfinishpurchase").on("click", function () {
        itemdetails(counterfinish);
        categorydetails(counterfinish);
        getpackinglist(counterfinish);

        var newRow1 = $("<tr>");
        var cols1 = "";

        cols1 += '<td style="padding: 0.2rem !important;"><select onchange="getitemdata('+counterfinish+');" name="itemdetails'+counterfinish+'" id="itemdetails'+counterfinish+'" class="form-control"></select></td>';
        cols1 += '<td style="padding: 0.2rem !important;"><input type="text" name="bundles'+counterfinish+'"  onfocusout="bundlecal('+counterfinish+');"  id="bundles'+counterfinish+'" class="form-control" placeholder="Bundles" value=""/></td>';
        cols1 += '<td style="padding: 0.2rem !important;"><select name="category'+counterfinish+'" id="category'+counterfinish+'" class="form-control"></select></td>';
        cols1 += '<td style="padding: 0.2rem !important;"><select name="Packing'+counterfinish+'" id="Packing'+counterfinish+'" class="form-control"><option value="test">test</option><option value="test">test</option></select></td>';
        cols1 += '<td style="padding: 0.2rem !important;"><select name="Unit' + counterfinish + '" id="Unit' + counterfinish + '"  class="form-control">'+
                    '<option value="">-Select-</option>'+
                    '<option value="pcs">Pcs</option>'+
                    '<option value="mts">MTS</option>'+
                    '<option value="kg">KG</option>'+
                    '<option value="suit">Suit</option>'+
                    '<option value="other">Other</option>'+
                '</select></td>';
        cols1 += '<td style="padding: 0.2rem !important;"> <input type="text" onfocusout="finishpurchase('+counterfinish+');" name="Pcs'+counterfinish+'" id="Pcs'+counterfinish+'"  class="form-control pcsclass" placeholder="Pcs" value=""/></td>';
        cols1 += '<td style="padding: 0.2rem !important;"><input type="text" onfocusout="finishpurchase('+counterfinish+');" name="Cut'+counterfinish+'" id="Cut'+counterfinish+'" class="form-control" placeholder="Cut" value=""/></td>';
        cols1 += '<td style="padding: 0.2rem !important;"><input type="text" name="mts'+counterfinish+'" id="mts'+counterfinish+'"  class="form-control" placeholder="Mts" value=""/></td>';
        cols1 += '<td style="padding: 0.2rem !important;"><input type="text" name="Rate'+counterfinish+'" id="Rate'+counterfinish+'" class="form-control" placeholder="Rate" value="" /></td>';
        cols1 += '<td style="padding: 0.2rem !important;"><input type="text" name="amount'+counterfinish+'" id="amount'+counterfinish+'" class="form-control amount" placeholder="Amount" value="" /></td>';
        cols1 += '<td style="padding: 0.2rem !important;"><input type="button" class="finishbtnDel btn btn-md btn-danger" value="Delete"></td>';

        newRow1.append(cols1);
        $("table.order-list").append(newRow1);
        $("#finishcountdata").val(counterfinish+1);
        var sumdata1 = $(".finishcountdata").val();
        $(".finishcountdata").val(1 + parseInt(sumdata1));
        counterfinish++;
    });

    // start by milan 2//22/19
    $("table.order-list").on("click", ".finishbtnDel", function (event) {
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
                         insert();
                         setTimeout(function(){ window.location.href = base_url+"FinishPurchaseOrder"; }, 3500);
                      
                      }
                });
        },
        filter: function() {
            return $(this).is(":visible");
        }
    });
    
    // end 2/19/19
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
        $("#mts"+countdata).val(($("#Pcs"+countdata).val())*($("#Cut"+countdata).val()));
        $("#amount"+countdata).val(($("#Pcs"+countdata).val())*($("#Rate"+countdata).val()));
    }

    function getpackinglist(countdata)
    {
        $.ajax({
        url: base_url+'Test_controller/getPackageData',
        data: {},
        type: 'POST',
          success: function(data){
                $("#Packing"+countdata).html(data);          
              }
        });
    }

    function getitemdata(countdata)
    {
        var singleValues = $( "#itemdetails"+countdata ).val();
        //alert(singleValues);
        $.ajax({
        url: base_url+'Test_controller/GetCutData',
        data: {singleValues:singleValues},
        type: 'POST',
          success: function(data){
                var obj = jQuery.parseJSON(data);
                $("#Cut"+countdata).val(obj.Cut);
                $("#Rate"+countdata).val(obj.Rate2);
              
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
        var bundle = $("#bundles"+count).val();

        var cross = bundle.split('*');

        if(cross[1] != undefined)
        {
            $("#Pcs"+count).val(cross[0]*cross[1]);   
        }

        var plus = bundle.split('+');

        if(plus[1] != undefined)
        {

            $("#Pcs"+count).val(parseInt(plus[0])+parseInt(plus[1]));   
        }

        var minus = bundle.split('-');

        if(minus[1] != undefined)
        {
            $("#Pcs"+count).val(parseInt(minus[0])-parseInt(minus[1]));   
        }

        var divide = bundle.split('/');

        if(divide[1] != undefined)
        {
            $("#Pcs"+count).val(parseInt(divide[0])/parseInt(divide[1]));   
        }
    }

    // end 2/19/19

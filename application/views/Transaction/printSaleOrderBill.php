<?php $this->load->view('common/header'); 
if (($recordcount)>0)
{
	if(isset($recordcount))
	{
		foreach ($printSalebillData as $qprintSalebillData) 
		{
			//print_r($qprintSalebillData);
			$Name=$qprintSalebillData->Name;
			$PhoneNo=$qprintSalebillData->PhoneNo;
			$Address=$qprintSalebillData->Address;
			$AddressCont=$qprintSalebillData->AddressCont;
			$GstInUin=$qprintSalebillData->GstInUin;
			$Email=$qprintSalebillData->Email;
			$CmCityName=$qprintSalebillData->CmCityName;
			$BuyerName=$qprintSalebillData->BuyerName;
			$Address1=$qprintSalebillData->Address1;
			$Address2=$qprintSalebillData->Address2;
			$BuyerCityName=$qprintSalebillData->BuyerCityName;
			$SBBillNO=$qprintSalebillData->SBBillNO;
			$SBDate=$qprintSalebillData->SBDate;
			$SBGrace=$qprintSalebillData->SBGrace;
			$transportName=$qprintSalebillData->transportName;
			$StationName=$qprintSalebillData->StationName;			
			$brandName=$qprintSalebillData->brandName;
			$MainScreen=$qprintSalebillData->MainScreen;
			$ScreenName=$qprintSalebillData->ScreenName;
			$Remark=$qprintSalebillData->Remark;
			$Gstin=$qprintSalebillData->Gstin;
		}
	}
}
else
{

}
$TotalPCS='';
$TotalAmount='';
?>
<style>
#success_message{ display: none;}
.form-group{
margin-bottom: 10px!important;
}
.form-control
{
min-height: 30px!important;
}
</style>

<div class="page-wrapper">
	<div class="container-fluid">
		<div class="row page-titles">
			<div class="col-md-5 align-self-center">
				<h4 class="text-themecolor">Sale Order Bill Print</h4>
			</div>
			<div class="col-md-7 align-self-center text-right">
				<div class="d-flex justify-content-end align-items-center">
					<ol class="breadcrumb">
						<li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
						<li class="breadcrumb-item"><a href="<?php echo base_url(); ?>SalesOrder">Master</a></li>
						<li class="breadcrumb-item active">Sale Order Bill Print</li>
					</ol>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="card" style="width: 100%;">
				<div class="card-body p-b-0">
					<div class="tab-content" id="printData">
						<div>
							<div>
								<span style="margin-left: 36%;">!!Shree Ganeshaya Namah!!</span><span style="margin-left: 10%;">
								PHONES :<?php echo $PhoneNo; ?></span>
							</div>
							<div style="text-align: center;">
								<h1><?php echo $Name; ?></h1>
							</div>
							<div style="text-align: center;">
								<p><?php echo $Address.','.$AddressCont.','.$CmCityName; ?></p>
							</div>
							<div>
					    		<span style="margin-left: 20%;">GSTIN :<?php echo $GstInUin; ?></span>
								<span style="margin-left: 10%;">E-mail: <?php echo $Email; ?></span>
							</div>
							<div></div>
							<div style="text-align: center;border-style: dashed;border-width: 0 0 2px 0; ">
					    	
								<h1>SALES ORDERS FORM</h1>
							</div>
						</div></br>
						<div>
							<span style="margin-right: 40%;"><b>TO, <?php echo $BuyerName; ?></b></span>
							<span style="text-align: right;">ORDER NO. :<?php echo $SBBillNO; ?></span>
						</div>
						<div>
							<span style="margin-right: 54%;"><?php echo wordwrap($Address1.','.$Address2, 20, "<br />\n");  ?></span>
							<span style="text-align: right;">DATE :<?php echo $SBDate; ?></span>
						</div>
						<div>
							<span style="margin-right: 74%;"><?php echo $BuyerCityName; ?></span>
						</div>
						<div>
							<span style="margin-right: 5%;">GSTIN :<?php echo $Gstin; ?></span>
							<span>Place of supply :24-Gujarat</span>
						</div>
						<div style="border-style: dashed;border-width: 0 0 2px 0; ">
							<span style="margin-right: 10%;">ABOVE 60 DAYS : 56519</span>
							<span style="margin-right: 10%;">ABOVE 90 DAYS : 0</span>
							<span style="margin-right: 10%;">GR % :<?php echo $SBGrace ?></span>
							<span style="margin-right: 10%;">SALES :7751856</span></br></br>
						</div></br>
						<div style="border-style: dashed;border-width: 0 0 2px 0; ">
							<div>
					    		<span style="margin-right: 30%;">TRANSPORT :<?php echo $transportName; ?></span>
					    		<span style="margin-right: 30%;">STATION :<?php echo $StationName; ?></span>
							</div>
					    	<div style="margin-left: 40%;">SERIES :<?php echo $brandName; ?></div></br>
						</div>
						<table>
							<tr style="border-style: dashed;border-width: 0 0 2px 0; ">
								<td style="padding: 10px;">MAIN SCREEN</td>
								<td style="padding: 10px;">SCREEN NAME</td>
								<td style="padding: 10px;">PCS</td>
								<td style="padding: 10px;">RATE</td>
								<td style="padding: 10px;">AMOUNT</td>
								<td>PACK</td>
							</tr>
							<?php $i=1; foreach ($printSalebillData as $qprintSalebilllistData) 
							{ 

								$amont=number_format($qprintSalebilllistData->SBAmount, 2);
								$input=str_replace(',', '', $amont);
								
								?>
							<tr>
								<td style="padding: 10px;"><?php echo $qprintSalebilllistData->MainScreen; ?></td>
								<td style="padding: 10px;"><?php echo $qprintSalebilllistData->ScreenName; ?></td>
								<td style="padding: 10px;"><?php echo $qprintSalebilllistData->SBPcs; ?></td>
								<td style="padding: 10px;"><?php echo number_format($qprintSalebilllistData->SBRate, 2); ?></td>
								<td style="padding: 10px;"><?php echo $input; ?></td>
								<td style="padding: 10px;"><?php echo $qprintSalebilllistData->packing; ?></td> 
							</tr>
						<?php
						$TotalPCS+=$qprintSalebilllistData->SBPcs;
						$TotalAmount+=$input;



						} ?>
							<tr style="border-style: dashed;border-width: 2px 0 2px 0; ">
								<td style="padding: 10px;">SUB TOTAL</td>
								<td></td>
								<td style="padding-left: 10px;"><?php echo $TotalPCS; ?></td>
								<td></td>
								<td style="padding-left: 10px;"><?php echo number_format($TotalAmount, 2);; ?></td>
								<td></td>
							</tr>
						</table>
						<div style="margin-top: 10%;"><b>REMARK:<?php echo $Remark; ?></b></div>
						<div style="float: left;padding-right: 20%;">ORDER OBTAINED BY:</div><div>FOR <?php echo $Name; ?></div>
					</div>
				</div>
				<button onclick="printDiv();"" type="button" class="btn waves-effect waves-light btn-lg btn-block btn-rounded btn-success printMe"><i class="fa fa-print"></i> Print</button>
			</div>
		</div>
	</div>
</div>
<?php $this->load->view('common/footer'); ?>

<script>
	function printDiv() 
	{

	  var divToPrint=document.getElementById('printData');

	  var newWin=window.open('','Print-Window');

	  newWin.document.open();

	  newWin.document.write('<html><body onload="window.print()">'+divToPrint.innerHTML+'</body></html>');

	  newWin.document.close();

	  setTimeout(function(){newWin.close();},10);

	}

	var base_url = '<?php echo base_url();?>';

$(function() {
	$('#staticParent').on('keydown', '#child', function(e){-1!==$.inArray(e.keyCode,[46,8,9,27,13,110])||(/65|67|86|88/.test(e.keyCode)&&(e.ctrlKey===true||e.metaKey===true))&&(!0===e.ctrlKey||!0===e.metaKey)||35<=e.keyCode&&40>=e.keyCode||(e.shiftKey||48>e.keyCode||57<e.keyCode)&&(96>e.keyCode||105<e.keyCode)&&e.preventDefault()});
})
$(function() {
	$('#staticParent1').on('keydown', '#child1', function(e){-1!==$.inArray(e.keyCode,[46,8,9,27,13,110])||(/65|67|86|88/.test(e.keyCode)&&(e.ctrlKey===true||e.metaKey===true))&&(!0===e.ctrlKey||!0===e.metaKey)||35<=e.keyCode&&40>=e.keyCode||(e.shiftKey||48>e.keyCode||57<e.keyCode)&&(96>e.keyCode||105<e.keyCode)&&e.preventDefault()});
})


$( document ).ready(function() {
	$( ".txtName" ).keypress(function(e) {
		var key = e.keyCode;
		if (key >= 48 && key <= 57) {
			e.preventDefault();
		}
	});
});

   
</script>
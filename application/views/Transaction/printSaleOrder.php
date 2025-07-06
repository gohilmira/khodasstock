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
			$MobileNo=$qprintSalebillData->MobileNo;
			$GstInUin=$qprintSalebillData->GstInUin;
			$CinNo=$qprintSalebillData->CinNo;
			$CCityName=$qprintSalebillData->CCityName;
			$BuyerName=$qprintSalebillData->BuyerName;
			$Address1=$qprintSalebillData->Address1;
			$Address2=$qprintSalebillData->Address2;
			$PartyCityName=$qprintSalebillData->PartyCityName;
			$Gstin=$qprintSalebillData->Gstin;
			$Voucher=$qprintSalebillData->Voucher;
			$SaleDate=$qprintSalebillData->SaleDate;
			$OrderNo=$qprintSalebillData->OrderNo;
			$Haste=$qprintSalebillData->Haste;
			$HasteGSTin=$qprintSalebillData->HasteGSTin;
			$HAddress1=$qprintSalebillData->HAddress1;
			$HAddress2=$qprintSalebillData->HAddress2;
			$BrokerName=$qprintSalebillData->BrokerName;
			$BrokerAddress1=$qprintSalebillData->BrokerAddress1;
			$BrokerAddress2=$qprintSalebillData->BrokerAddress2;
			$Brokerphn1=$qprintSalebillData->Brokerphn1;
			$Brokerphn2=$qprintSalebillData->Brokerphn2;
			$BroketCity=$qprintSalebillData->BroketCity;
			$LrNo=$qprintSalebillData->LrNo;
			$LrDate=$qprintSalebillData->LrDate;
			$Weight=$qprintSalebillData->Weight;
			$transportName=$qprintSalebillData->transportName;
			$TEway=$qprintSalebillData->TEway;			
			$StationName=$qprintSalebillData->StationName;			
			$Freight=$qprintSalebillData->Freight;			
			$HsnCode=$qprintSalebillData->HsnCode;			
			$EwayBillNo=$qprintSalebillData->EwayBillNo;
			$Bank_Name=$qprintSalebillData->Bank_Name;			
			$Bank_Ac_No=$qprintSalebillData->Bank_Ac_No;			
			$Ifsc_Code=$qprintSalebillData->Ifsc_Code;			
			$Remark=$qprintSalebillData->Remark;			
			$CgstIgst=$qprintSalebillData->CgstIgst;			
			$Sgst=$qprintSalebillData->Sgst;			
			$DeliveryDueDate=$qprintSalebillData->DeliveryDueDate;			
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
				<h4 class="text-themecolor">Sale Order Print</h4>
			</div>
			<div class="col-md-7 align-self-center text-right">
				<div class="d-flex justify-content-end align-items-center">
					<ol class="breadcrumb">
						<li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
						<li class="breadcrumb-item"><a href="<?php echo base_url(); ?>SalesOrder">Master</a></li>
						<li class="breadcrumb-item active">Sale Order Print</li>
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
								PHONES :<?php echo $PhoneNo.','.$MobileNo; ?></span>
							</div>
							<div>
								<span style="margin-right: 20%;">Original For Consignee </span><span style="margin-right: 20%;">Duplicate For Transporter  </span>Triplicate For Consignor
							</div>
							<div style="text-align: center;">
								<h1><?php echo $Name; ?></h1>
							</div>
							<div>
					    		<span style="margin-right: 12%;">GSTIN :<?php echo $GstInUin; ?></span>
								<span style="margin-right: 12%;">CIN No.: <?php echo $CinNo; ?></span>
								<span>PAN NO :AADCB9381M</span>
							</div>
							<div>
								<div style="text-align: center;">
									<p><?php echo $Address.','.$AddressCont; ?></p>
								</div>
							</div>
							<div style="text-align: center;border-style: dashed;border-width: 0 0 2px 0; ">
					    	
								<h1>TAX INVOICE</h1>
							</div>
						</div></br>
						<div>
							<span style="margin-right: 40%;">Buyer :&nbsp&nbsp&nbsp<b><?php echo $BuyerName; ?></b></span>
							<span style="text-align: right;">BILL NO. :<?php echo $Voucher; ?></span>
						</div>
						<div>
				    		<span style="margin-right: 47%;">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <?php echo $Address1.','.$Address2; ?></span>
							<span style="text-align: right;">&nbspCHALLAN :<?php echo $Voucher; ?></span>
						</div>
						<div>
							<div style="text-align: right;margin-right: 5%;">DATE :<?php echo $SaleDate; ?></div>
						</div>
						<div>
				    		<span style="margin-right: 60%;">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <?php echo $PartyCityName; ?></span>
							<span style="text-align: right;">ORDER NO:<?php echo $OrderNo; ?></span>
						</div>
						<div style="border-style: dashed;border-width: 0 0 2px 0; ">
				    		<span style="margin-right: 5%;">GSTIN :<?php echo $Gstin; ?></span>
							<span>Place of supply :24-Gujarat</span></br></br>
						</div></br>
						<div>
				    		<div>Consignee : <?php echo $Haste; ?> </div>
				    		<div style="border-style: dashed;border-width: 0 0 2px 0; ">
								<span style="margin-right: 5%;">GSTIN : <?php echo $HasteGSTin; ?></span><span>ADDRESS: <?php echo $HAddress1.','.$HAddress2; ?></span></br></br>
							</div>
						</div>
						</br>
						<div>
				    		<span style="margin-right: 30%;">AGENT : <?php echo $BrokerName; ?></span>
				    		<span>PHONES : <?php echo $Brokerphn1.','.$Brokerphn2; ?></span>
							<div style="border-style: dashed;border-width: 0 0 2px 0; ">
				 				ADDRESS : <?php echo $BrokerAddress1.','.$BrokerAddress2.','.$BroketCity; ?></br></br>
				 			</div>
						</div>
						</br>
						<div>
				    		<span style="margin-right: 36%;">L.R. NO. :<?php echo $LrNo; ?></span>
				    		<span style="margin-right: 20%;">LR DATE : <?php echo $LrDate; ?></span>
				    		<span>WEIGHT :<?php echo $Weight; ?></span>
						</div>
						<div>
				    		<span style="margin-right: 13%;">TRANSPORT :<?php echo $transportName; ?></span>
				    		<span style="margin-right: 20%;">CASE NO : 10730x1</span>
				    		<span>FREIGHT :<?php echo $Freight; ?></span>
						</div>
						<div>
				    		<span  style="margin-right: 38%;">STATION : <?php echo $StationName; ?></span>
				    		<span>HSN/SAC : <?php echo $HsnCode; ?></span>
						</div>
						<div style="border-style: dashed;border-width: 0 0 2px 0;">
				    		<span style="margin-right: 10%;">Distance(km) : </span>
				    		<span style="margin-right: 10%;">Transporter ID : <?php echo $TEway; ?></span>
				    		<span>E-Way Bill no :<?php echo $EwayBillNo; ?></span></br></br>
						</div>
						<table>
							<tr style="border-style: dashed;border-width: 0 0 2px 0; ">
								<td style="padding: 10px;">Sr. No.</td>
								<td style="padding: 10px;">DESCRIPTION</td>
								<td style="padding: 10px;">PACKING</td>
								<td style="padding: 10px;">PCS</td>
								<td style="padding: 10px;">RATE</td>
								<td style="padding: 10px;">AMOUNT</td>
							</tr>
							<?php $i=1; foreach ($printSalebillData as $qprintSalebillData) 
							{ ?>
							<tr>
								<td style="padding: 10px;"><?php echo $i++; ?></td>
								<td style="padding: 10px;"><?php echo $qprintSalebillData->DescriptionData; ?></td>
								<td style="padding: 10px;"><?php echo $qprintSalebillData->packing; ?></td>
								<td style="padding: 10px;"><?php echo $qprintSalebillData->SalePcs; ?></td>
								<td style="padding: 10px;"><?php echo $qprintSalebillData->SaleRate; ?></td>
								<td style="padding: 10px;"><?php echo $qprintSalebillData->SaleAmount; ?></td> 
							</tr>  
							<?php  
								$TotalPCS+=$qprintSalebillData->SalePcs;
								$TotalAmount+=$qprintSalebillData->SaleAmount;

							} ?>   
							<tr>
								<td style="padding: 10px;"><?php echo $Bank_Name; ?> BANK A/C No. :<?php echo $Bank_Ac_No; ?></td>
								<td style="padding: 10px;" colspan="2">IFSC :<?php echo $Ifsc_Code; ?></td>
							</tr> 
							<tr style="border-style: dashed;border-width: 0 0 1px 0; ">
								<td style="padding: 10px;" colspan="6">REMARK :<?php echo $Remark; ?></td>
							</tr>
							<tr style="border-style: dashed;border-width: 0 0 1px 0; ">
								<td style="padding: 10px;">SUB TOTAL</td>
								<td></td>
								<td></td>
								<td style="padding: 10px;"><?php echo $TotalPCS; ?></td>
								<td></td>
								<td style="padding: 10px;"><?php echo $TotalAmount; ?></td>
							</tr>
							<tr style="border-style: dashed;border-width: 0 0 1px 0; ">
								<td></td>
								<td style="padding: 10px;"></td>
								<td style="padding: 10px;" colspan="3">AADHAT+KATAI+DIS. - > <?php echo $TotalAmount; ?> X -6.00 % :</td>
								<?php
									$fAmount=(($TotalAmount*(-6))/100);
									$sAmount=$TotalAmount+$fAmount;
									$tAmount=($sAmount*$CgstIgst)/100;
									$foAmount=($sAmount*$Sgst)/100;
									$GrandTotal=$TotalAmount+$fAmount+$tAmount+$foAmount;
								?>
								<td style="padding: 10px;"><?php echo $fAmount; ?></td>
							</tr>
							<tr style="border-style: dashed;border-width: 0 0 1px 0; ">
								<td></td>
								<td style="padding: 10px;"></td>
								<td style="padding: 10px;" colspan="3">CGST @ <?php echo $CgstIgst; ?> % on Taxable Value <?php echo $sAmount; ?> =</td>
								<td style="padding: 10px;"><?php echo $tAmount; ?></td>
							</tr>
							<tr style="border-style: dashed;border-width: 0 0 1px 0; ">
								<td></td>
								<td style="padding: 10px;"></td>
								<td style="padding: 10px;" colspan="3">SGST @ <?php echo $Sgst; ?> % on Taxable Value <?php echo $sAmount; ?> =</td>
								<td style="padding: 10px;"><?php echo $foAmount; ?></td>
							</tr>
							<tr style="border-style: dashed;border-width: 0 0 1px 0; ">
								<td style="padding: 10px;" colspan="4">DUE DAYS : 0</td>
								<td style="padding: 10px;">GRAND TOTAL : </td>
								<td><?php echo $GrandTotal; ?></td>
							</tr>
							<tr style="border-style: dashed;border-width: 0 0 1px 0; ">
								<td style="padding: 10px;" colspan="6">NINETEEN THOUSAND NINE HUNDRED EIGHTY TWO ONLY</td>
							</tr>
						</table>
						<div class="row">
				    		<span style="padding: 10px;margin-right: 33%;">TERMS & CONDITIONS :</span>
				    		<span style="padding: 10px;">FOR BHARAT CREATION PRIVATE LIMITED.</span>
				    	</div>
    					<p>1) SUBJECT TO SURAT JURISDICTION.</p>
    					<p>2) GOODS HAVE BEEN SOLD & DESPATCHED AT THE ENTIRE RISK OF THE PURCHASER.</p>
    					<p>2) COMPLAINTS, IF ANY REGARDING THIS INVOICE MUST BE INFORMED IN WRITING WITHIN 48 HOURS.</p></br>
						<div class="row">
				    		<span style="margin-right: 30%;">CHECKED BY</span>
				    		<span style="margin-right: 25%;">DELIVERED BY</span>
				    		<span>AUTH. SIGNATORY</span>
				    	</div>
					</div>
					<button onclick="printDiv();"" type="button" class="btn waves-effect waves-light btn-lg btn-block btn-rounded btn-success printMe"><i class="fa fa-print"></i> Print</button>
				</div>
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
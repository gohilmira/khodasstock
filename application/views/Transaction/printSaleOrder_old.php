<?php $this->load->view('common/header'); 
if (($recordcount)>0)
{
	if(isset($recordcount))
	{
		foreach ($printSalebillData as $qprintSalebillData) 
		{
			$SaleOrderID=$qprintSalebillData->SaleOrderID;
			$Name=$qprintSalebillData->Name;
			$Address=$qprintSalebillData->Address;
			$Gstin=$qprintSalebillData->Gstin;
			$Voucher=$qprintSalebillData->Voucher;
			$OrderNo=$qprintSalebillData->OrderNo;
			$SaleDate=$qprintSalebillData->SaleDate;
			$Haste=$qprintSalebillData->Haste;
			$GstIn=$qprintSalebillData->GstIn;
			$Address1=$qprintSalebillData->Address1;
			$Address2=$qprintSalebillData->Address2;
			$Short_Name=$qprintSalebillData->Short_Name;
			$Address=$qprintSalebillData->Address;
			$Address_Con=$qprintSalebillData->Address_Con;
			$Oth_Address_Con=$qprintSalebillData->Oth_Address_Con;
			$Phone_First=$qprintSalebillData->Phone_First;
			$Phone_Two=$qprintSalebillData->Phone_Two;
			$LrNo=$qprintSalebillData->LrNo;
			$LrDate=$qprintSalebillData->LrDate;
			$Weight=$qprintSalebillData->Weight;
			$Freight=$qprintSalebillData->Freight;
			$StationName=$qprintSalebillData->StationName;
			$HsnCode=$qprintSalebillData->HsnCode;
			$Distance=$qprintSalebillData->Distance;
			$TEway=$qprintSalebillData->TEway;
			$EwayBillNo=$qprintSalebillData->EwayBillNo;
			$Bank_Name=$qprintSalebillData->Bank_Name;
			$Bank_Ac_No=$qprintSalebillData->Bank_Ac_No;
			$Ifsc_Code=$qprintSalebillData->Ifsc_Code;
			$Remark=$qprintSalebillData->Remark;
			$DeliveryDueDate=$qprintSalebillData->DeliveryDueDate;			
			$transportName=$qprintSalebillData->transportName;			
			$PartyGstin=$qprintSalebillData->PartyGstin;			
			$CgstIgst=$qprintSalebillData->CgstIgst;			
			$Sgst=$qprintSalebillData->Sgst;			
		}
	}
}
else
{

}
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
					<div class="tab-content">
						<div class="tab-pane active" id="home7" role="tabpanel">
							<div class="p-20">
								<div class="container" id="printData">
									<div class="row">
										<div class="col-sm-4" style="text-align: left;"></div>
										<div class="col-sm-4" style="text-align: center;">!!Shree Ganeshaya Namah!!</div>
										<div class="col-sm-4" style="text-align: right;">PHONES :2333070,2322023,9375332034</div>
										
									</div>
									<div class="row">
										<div class="col-sm-3"></div>
										<div class="col-sm-2" style="text-align: left;">Original For Consignee</div>
										<div class="col-sm-2" style="text-align: center;">Duplicate For Transporter</div>
										<div class="col-sm-2" style="text-align: right;">Triplicate For Consignor</div>
										<div class="col-sm-3"></div>
									</div>
									<div style="text-align: center;">
										<div class="row">
								    		<div class="col-sm-12">
												<h1>BHARAT CREATION PRIVATE LIMITED.</h1>
											</div>
										</div>
										<div class="row">
								    		<div class="col-sm-4" style="text-align: left;">GSTIN :24AADCB9381M1Z9</div>
											<div class="col-sm-4" style="text-align: center;">JOB ISSUE DELIVERY CHALLAN (PROCESS)</div>
											<div class="col-sm-4" style="text-align: right;">PAN NO :AADCB9381M</div>
										</div>
										<div class="row">
								    		<div class="col-sm-12">
												<p>G-2365/66 MILLENIUM TEX. MARKET, RING ROAD, SURAT</p>
											</div>
										</div>
										<div class="row" style="border-style: dashed;border-width: 0 0 1px 0; ">
								    		<div class="col-sm-12">
												<h1>TAX INVOICE</h1>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-sm-1">Buyer :</div>
							    		<div class="col-sm-4"><b><?php echo $Name; ?></b></div>
										<div class="col-sm-7" style="text-align: right;">BILL NO. :<?php echo $Voucher; ?></div>
									</div>
									<div class="row">
										<div class="col-sm-1"></div>
							    		<div class="col-sm-4"><?php echo $Address; ?></div>
										<div class="col-sm-7" style="text-align: right;">CHALLAN :5343</div>
									</div>
									<div class="row">
										<div class="col-sm-5"></div>
										<div class="col-sm-7" style="text-align: right;">DATE :<?php echo $SaleDate; ?></div>
									</div>
									<div class="row">
										<div class="col-sm-1"></div>
							    		<div class="col-sm-4">SURAT (GUJARAT)</div>
										<div class="col-sm-7" style="text-align: right;">ORDER NO:<?php echo $OrderNo ?></div>
									</div>
									<div class="row" style="border-style: dashed;border-width: 0 0 1px 0; ">
							    		<div class="col-sm-4">GSTIN :<?php echo $Gstin; ?></div>
										<div class="col-sm-4">Place of supply :24-Gujarat</div>
										<div class="col-sm-4"></div>
									</div>
									
									<div class="row">
							    		<div class="col-sm-12">Consignee :<?php echo $Haste; ?></div>
									</div>

									<div class="row" style="border-style: dashed;border-width: 0 0 1px 0; ">
							    		<div class="col-sm-12">GSTIN :<?php echo $GstIn; ?></div>
									</div>

									<div class="row">
							    		<div class="col-sm-6">AGENT : <?php echo $Short_Name; ?></div>
							    		<div class="col-sm-6">PHONES : <?php echo $Phone_First.','.$Phone_Two; ?></div>
									</div>
									<div class="row" style="border-style: dashed;border-width: 0 0 1px 0; ">
							    		<div class="col-sm-12">ADDRESS : <?php echo $Address.','.$Address_Con.','.$Oth_Address_Con; ?></div>
									</div>
									<div class="row">
							    		<div class="col-sm-4">L.R. NO. : <?php echo $LrNo; ?></div>
							    		<div class="col-sm-4">LR DATE : <?php echo $LrDate; ?></div>
							    		<div class="col-sm-4">WEIGHT :<?php echo $Weight; ?></div>
									</div>

									<div class="row">
							    		<div class="col-sm-4">TRANSPORT : <?php echo $transportName; ?></div>
							    		<div class="col-sm-4">CASE NO : x1</div>
							    		<div class="col-sm-4">FREIGHT :<?php echo $Freight; ?></div>
									</div>

									<div class="row">
							    		<div class="col-sm-6">STATION : <?php echo $StationName; ?></div>
							    		<div class="col-sm-6">HSN/SAC : <?php echo $HsnCode; ?></div>
									</div>

									<div class="row" style="border-style: dashed;border-width: 0 0 1px 0;">
							    		<div class="col-sm-4">Distance(km) : 0</div>
							    		<div class="col-sm-4">Transporter ID :<?php echo $TEway; ?></div>
							    		<div class="col-sm-4">E-Way Bill no :<?php echo $EwayBillNo; ?></div>
									</div>

									
									<table>
										<tr style="border-style: dashed;border-width: 0 0 1px 0; ">
											<td>Sr. No.</td>
											<td>DESCRIPTION</td>
											<td>PACKING</td>
											<td>PCS</td>
											<td>RATE</td>
											<td>AMOUNT</td>
										</tr>
										<?php $i=1; $TotalPCS=''; $Totalamt=''; foreach ($printSalebillData as $primtOrderListData) {  ?>
										<tr>
											<td><?php echo $i++; ?></td>
											<td><?php echo $primtOrderListData->SaleScreenName; ?></td>
											<td><?php echo $primtOrderListData->SalePacking; ?></td>
											<td><?php echo $primtOrderListData->SalePcs; ?></td>
											<td><?php echo $primtOrderListData->SaleRate; ?></td>
											<td><?php echo $TotalAmountData=$primtOrderListData->SalePcs *$primtOrderListData->SaleRate; ?></td>
										</tr>   
										<?php $TotalPCS+=$primtOrderListData->SalePcs; 
											  $Totalamt+=$TotalAmountData; 

										} ?>  
										<tr>
											<td colspan="2"><?php echo $Bank_Name; ?> Bank A/C No. :<?php echo $Bank_Ac_No; ?></td>
											<td colspan="2">IFSC :<?php echo $Ifsc_Code; ?></td>
										</tr> 
										<tr style="border-style: dashed;border-width: 0 0 1px 0; ">
											<td colspan="8">REMARK : <?php echo $Remark; ?></td>
										</tr>
										<tr style="border-style: dashed;border-width: 0 0 1px 0; ">
											<td colspan="3">SUB TOTAL</td>
											<td><?php echo $TotalPCS; ?></td>
											<td colspan="3"><?php echo $Totalamt; ?></td>
										</tr> 
										<tr>
											<td colspan="2"></td>
											<td colspan="4">AADHAT+KATAi+DIS. -> </td>
											<td><?php echo $Totalamt; ?> * -6.00 %</td>
											<?php $TotalDis=$Totalamt*(-6.00)/100; 
													$lastAmt=$Totalamt+$TotalDis;
											?>
											<td><?php echo $TotalDis; ?></td>
										</tr>
										<tr>
											<td colspan="2"></td>
											<td colspan="4">CGST @ <?php echo $CgstIgst; ?> % on Taxable Value</td>
											<td><?php echo $lastAmt; ?></td>
											<?php $TotalTax1=$lastAmt*($CgstIgst)/100; 
											?>
											<td><?php echo number_format($TotalTax1,2); ?></td>
										</tr> 
										<tr style="border-style: dashed;border-width: 0 0 1px 0; ">
											<td colspan="2"></td>
											<td colspan="4">SGST @ <?php echo $Sgst; ?> % on Taxable Value</td>
											<td><?php echo $lastAmt; ?></td>
											<?php $TotalTax2=$lastAmt*($Sgst)/100; 
											?>
											<td><?php echo number_format($TotalTax2,2); ?></td>
										</tr>
										<tr style="border-style: dashed;border-width: 0 0 1px 0; ">
											<td colspan="6">DUE DAYS : 0</td>
											<td colspan="2">GRAND TOTAL : <?php $GrandTotal=$Totalamt+$TotalDis+$TotalTax1+$TotalTax2;
												echo number_format($GrandTotal,2);
											 ?></td>
										</tr>
										<tr style="border-style: dashed;border-width: 0 0 1px 0; ">
											<td colspan="8">TWENTY FOUR THOUSAND TWO HUNDRED SIXTEEN ONLY</td>
										</tr>
									</table>
									<div class="row">
							    		<div class="col-sm-6">TERMS & CONDITIONS :</div>
							    		<div class="col-sm-6">FOR BHARAT CREATION PRIVATE LIMITED.</div>
							    	</div>
							    		<p>1) SUBJECT TO SURAT JURISDICTION.</p>
							    		<p>2) GOODS HAVE BEEN SOLD & DESPATCHED AT THE ENTIRE RISK OF THE PURCHASER.</p>
							    		<p>2) COMPLAINTS, IF ANY REGARDING THIS INVOICE MUST BE INFORMED IN WRITING WITHIN 48 HOURS.</p></br>
									<div class="row">
							    		<div class="col-sm-4">CHECKED BY</div>
							    		<div class="col-sm-4">DELIVERED BY</div>
							    		<div class="col-sm-4">AUTH. SIGNATORY</div>
							    	</div>
								</div>
							</div>
							<div>
                            	<button onclick="printDiv();"" type="button" class="btn waves-effect waves-light btn-lg btn-block btn-rounded btn-success printMe"><i class="fa fa-print"></i> Print</button>
                            </div>
						</div>
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
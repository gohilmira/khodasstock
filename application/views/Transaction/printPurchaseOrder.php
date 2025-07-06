<?php $this->load->view('common/header'); 

			$PurchaseOrderId=$printPurchaseData['PurchaseOrderId'];
			$GreyOrderNo=$printPurchaseData['GreyOrderNo'];
			$WeaverName=$printPurchaseData['WeaverName'];
			$BrokerName=$printPurchaseData['BrokerName'];
			$Quality=$printPurchaseData['GreyQuality'];
			$GreyNoLots=$printPurchaseData['GreyNoLots'];
			$GreyOrderPcs=$printPurchaseData['GreyOrderPcs'];
			$GreyRateMts=$printPurchaseData['GreyRateMts'];
			$ChekerName=$printPurchaseData['ChekerName'];
			$remark=$printPurchaseData['remark'];
			$GreyPcsPerLots=$printPurchaseData['GreyPcsPerLots'];

			$Address=$printPurchaseData['Address'];
			$Address_Con=$printPurchaseData['Address_Con'];
			$Oth_Address_Con=$printPurchaseData['Oth_Address_Con'];

			if(($Address!='') || ($Address_Con!='') || ($Oth_Address_Con!=''))
			{
				$FinalAddress=$Address.','.$Address_Con.','.$Oth_Address_Con;
			}
			else
			{
				$FinalAddress='';
			}

			$GreyOrderDate=$printPurchaseData['GreyOrderDate'];
			if(($GreyOrderDate=="0"))
			{
				$GreyOrderDateData="";
				
			}
			else
			{
				$GreyOrderDateData=date('d/ m/ y', strtotime($printPurchaseData['GreyOrderDate']));
				//$GreyOrderDateData=$printPurchaseData['GreyOrderDate'];
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
				<h4 class="text-themecolor">Purchase Order Print</h4>
			</div>
			<div class="col-md-7 align-self-center text-right">
				<div class="d-flex justify-content-end align-items-center">
					<ol class="breadcrumb">
						<li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
						<li class="breadcrumb-item"><a href="<?php echo base_url(); ?>GreyPurchaseOrder">Master</a></li>
						<li class="breadcrumb-item active">Purchase Order Print</li>
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
								<div class="table-responsive">
									 <div class="row" style="margin-right: 10px !important;">
					                    <div class="col-12">
					                        <div class="card" style="font-size: large;">
					                            <div class="card-body" id="printData">
					                                <h1 style="text-align: center;border-style: dashed;border-width: 0 0 1px 0; ">BHARAT CREATION</h1>
														<p style="text-align: center;border-style: dashed;border-width: 0 0 1px 0; ">PURCHASE ORDER SLIP</p>
														<div class="row" style="float: right;">
													 	
													    	
																ORDER NO. : <?php echo $GreyOrderNo; ?>    
															
															
															
														
													
														
													</div>
													<br>
													<div class="row" style="float: right;">
														
															
																DATE : <?php echo $GreyOrderDateData; ?>   
															
														
													</div>
														<br/><br/>
														WEAVER : <?php echo $WeaverName; ?>
														<br/><br/>
														ADDRESS : <?php echo $FinalAddress; ?>
														<br/><br/>
														BROKER :  <?php echo $BrokerName; ?>
														<br/><br/>
														QUALITY :  <?php echo $Quality; ?>
														<br/><br/>
														<div class="row">
												    		<div style="float: left;margin-left: 0px;">
															NO. OF LOTS :  <?php echo $GreyNoLots; ?>
															</div>
															<div style="float: left;margin-left: 10%;">PCS : <?php echo $GreyOrderPcs; ?>  </div> 
															<!-- <div style="float: left;margin-left: 10%;"> RATE : <?php echo $GreyRateMts; ?></div> -->
															<div style="float: left;margin-left: 10%;"> RATE : <?php echo $GreyRateMts; ?></div>
															<div style="margin-left: 10%;"></div>
														</div>
														<br/><br/>
														CHECKER : <?php echo $ChekerName; ?>
														<br/><br/>
														REMARK : <?php echo $remark; ?>
													</p>
					                            </div>
					                            <div>
					                            	<button onclick="printDiv();" type="button" class="btn waves-effect waves-light btn-lg btn-block btn-rounded btn-success printMe"><i class="fa fa-print"></i> Print</button>
					                            </div>
					                        </div>
					                    </div>
					                </div>
								</div>
							</div>
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
<?php $this->load->view('common/header'); 

$greypurchaseorderBillID=$printPurchasebillData['greypurchaseorderBillID'];
$Grey_Quality=$printPurchasebillData['GreyQuality'];
$LName=$printPurchasebillData['LName'];
$PartyGstin=$printPurchasebillData['GreyPPartyGstin'];
$HsnCode=$printPurchasebillData['GreyPHsnCode'];
$SrNo=$printPurchasebillData['GreyPSrNo'];
$RecMts=$printPurchasebillData['GreyPRecMts'];
$BillNo=$printPurchasebillData['GreyPBillNo'];
$PurchaseOrderBillDate=$printPurchasebillData['GreyPPurchaseOrderBillDate'];
$PurRate=intval($printPurchasebillData['GreyPPurRate']);
// $Name=$printPurchasebillData['Name'];
$CompanyID=$printPurchasebillData['CompanyID'];
$companyname=$printPurchasebillData['companyname'];
$GstInUin=$printPurchasebillData['CompanyGstInUin'];
$PanNo=$printPurchasebillData['CompanyPanNo'];
$companyaddress=$printPurchasebillData['companyaddress'];

$Address=$printPurchasebillData['LAddress'];
$LAddress=$printPurchasebillData['AddressCompany'];
$GreyPNetAmt=$printPurchasebillData['GreyPNetAmt'];

$TotalMts = 0;
$recordcount = 0;

?>
<div class="page-wrapper">
    <div class="container-fluid">
		<div class="container" id="printData">
			<div class="row">
				<span  style="text-align: left;    margin: 21px 0px 0px 1%;">Original For Consignee</span>
				<span style="text-align: center;    margin: 21px 0px 0px 15%;">Duplicate For Transporter</span>
				<span style="text-align: right;    margin: 21px 0px 0px 15%;">Triplicate For Consignor</span>
			</div>
			<div style="text-align: center;">
				<!-- <div class="row">
		    		<div>
						<h1 style="margin: 0px 0px 0px 57px;text-align: center;"><?=$companyname;?></p>
					</div>
				</div> -->

				<table style="margin-bottom: 0rem; width: 100%;" class="table table-boarder">
					<tbody>
						<td style="border-top: unset;"><h1 style="margin: 0px 0px 0px 57px;text-align: center;"><?=$companyname;?></h1></td>
						</tbody>						
				</table>

				<table style="margin-bottom: 0rem; width: 100%;" class="table table-boarder">
					<tbody>
						<td style="border-top: unset;"><h3 style="margin: 0px 0px 0px 57px;text-align: center;"><?=$Address;?></h3></td>
						</tbody>						
				</table>

<!-- 
				<div class="row" style="text-align: center;">
		    	
						<h3 style="text-align: center;"><?=$Address;?></p>
					
				</div> -->

				
				<!-- <div class="row" style="border-style: dashed;border-width: 0 0 1px 0; ">
		    		<span style="text-align: left;margin: -12px 20px 0px 0px;">GSTIN :<?=$GstInUin;?></span>
					<span style="text-align: center;margin: -12px 59px 10px 0px;">JOB ISSUE DELIVERY CHALLAN (PROCESS)</span>
					<span style="text-align: right;margin:-12px 34px 0px -38px;">PAN NO :<?=$PanNo;?></span>
				</div> -->

				<table style="margin-bottom: 0rem; width: 100%; border-style: dashed;border-width: 0 0 1px 0; " class="table table-boarder">
					<tbody>
						<td style="text-align: left;border-top: unset;">GSTIN:<?=$GstInUin;?></td>
						<td style="border-top: unset;">JOB ISSUE DELIVERY CHALLAN (PROCESS)</td>
						<td style="text-align: right;border-top: unset;">PAN NO :<?=$PanNo;?></td>

						</tbody>						
				</table>

				<div>
				
			</div>

			</div>
			<div class="row">

				<table style="margin-bottom: 0rem; width: 100%;" class="table table-boarder">
					<tbody>
						<td style="text-align: left;border-top: unset;">TO, <?=$LAddress;?></td>
						<td style="text-align: right;border-top: unset;">CHALLAN NO. :<?=$BillNo;?></td>

						</tbody>						
				</table>

				<table style="margin-bottom: 0rem; width: 100%;" class="table table-boarder">
					<tbody>
						<td style="text-align: left;border-top: unset;"></td>
						<td style="text-align: right;border-top: unset;">DATE:<?php echo $PurchaseOrderBillDate; ?></td>
						</tbody>						
				</table>

				<table style="margin-bottom: 0rem; width: 100%;border-style: dashed;border-width: 0 0 1px 0; " class="table table-boarder">
					<tbody>
						<td style="text-align: left;border-top: unset;"></td>
						<td style="text-align: right;border-top: unset;">GSTIN:<?php echo $PartyGstin; ?></td>
						</tbody>						
				</table>

				<table style="margin-bottom: 0rem; width: 100%;border-style: dashed;border-width: 0 0 1px 0; " class="table table-boarder">
					<tbody>
						<td style="text-align: left;border-top: unset;">QUALITY :<?php echo $Grey_Quality; ?></td>
						<td style="text-align: right;border-top: unset;">HSN / SAC :<?php echo $HsnCode; ?></td>
						</tbody>						
				</table>


	    		<!-- <span style="text-align: left;margin: 20px 63% 0px 0px;">TO, <?=$LAddress;?></span>
				<span style="text-align: right;margin: 10px 0px 0px 50px;">CHALLAN NO. :<?=$BillNo;?></span> -->
			</div>
			<!-- <div class="row">
				<span style="text-align: right;margin-left: 80.5%">DATE :</span><?php echo $PurchaseOrderBillDate; ?></span>
			</div> -->
			<!-- <div class="row" style="border-style: dashed;border-width: 0 0 1px 0; ">
				<span style="text-align: right;margin: 0px 0px 0px 80.5%;">GSTIN :<?=$PartyGstin;?></span>
			</div>
			<div class="row" style="border-style: dashed;border-width: 0 0 1px 0; ">
	    		<span style="text-align: left;padding: 9px 17% 6px 0px;">QUALITY :<?php echo $Grey_Quality; ?></span>
	    		<span style="text-align: left;padding-top: 9px;">HSN / SAC :<?php echo $HsnCode; ?></span>
			</div> -->

				<?php
				$billdata = $this->db->query("SELECT * from grey_purchase_order_bill_details where Grey_Purchase_Order_Bill_Id = '$greypurchaseorderBillID'")->result();
				 $totalmts = 0;
				 $totaltaka = 0;
				 $rows = sizeof($billdata);    // Find total rows returned by database
				 if($rows > 0) {
				 $cols = 3;    // Define number of columns
				 $counter = 1;     // Counter used to identify if we need to start or end a row
				 $nbsp = $cols - ($rows % $cols);    // Calculate the number of blank columns
				 
				echo '<table width="100%" align="center" cellpadding="4" cellspacing="1">';

				echo '<thead><th style="text-align:center;">Sr. No.</th><th style="text-align:center;">MTS</th><th style="text-align:center;">Sr. No.</th><th style="text-align:center;">MTS</th><th style="text-align:center;">Sr. No.</th><th style="text-align:center;">MTS</th>';

				foreach ($billdata as $value)
				{
					 if(($counter % $cols) == 1) {    // Check if it's new row
					 echo '<tr style="text-align:center;">'; 
					 }
					                   
					 echo '<td style="text-align:center;">'.$counter.'</td>';
					 echo '<td style="text-align:center;">'.$value->MTS.'</td>';

					 $totalmts += intval($value->MTS);
					 $totaltaka += $value->Taka;
					 if(($counter % $cols) == 0) { // If it's last column in each row then counter remainder will be zero
					 echo '</tr>'; 
					 }
					 $counter++;    // Increase the counter
				}

				if($nbsp > 0)
				{ // Add unused column in last row
					 for ($i = 0; $i < $nbsp; $i++) { 
					 echo '<td style="text-align:center;">&nbsp;</td>'; 
					 }
					 echo '</tr>';
				}
				echo '</thead>';
					echo '</table>';
				}
				?>

				<!-- <table>
					<thead>
						<th style="padding: 10px 20px 10px 20px;">
							Sr. No.
						</th>
						<th style="padding: 10px 20px 10px 20px;">
							MTS
						</th>
						<th style="padding: 10px 20px 10px 20px;">
							Sr. No.
						</th>
						<th style="padding: 10px 20px 10px 20px;">
							MTS
						</th>
					</thead>
					<tbody>

					<?php
					$billdata = $this->db->query("SELECT * from grey_purchase_order_bill_details where Grey_Purchase_Order_Bill_Id = '$greypurchaseorderBillID'")->result();
					$x = 1;
					foreach ($billdata as $value)
					{	

					if($x % 2 != 0)
					{
							?>
							<tr>
								<td style="text-align: center;"><?=$x;?></td>
								<td style="text-align: center;"><?=$value->MTS;?></td>
						
							<?php
					}

					if($x % 2 == 0)
					{
							?>

								<td style="text-align: center;"><?=$x;?></td>
								<td style="text-align: center;"><?=$value->MTS;?></td>
						
							<?php
					}

						$x++;
					}
					?>

						</tr>
					</tbody>

				</table> -->



			<table style="margin-bottom: 0rem; width: 100%;border-style: dashed;border-width: 0 0 1px 0; " >
			
				<tr>
					<td colspan="4">PARTY :<?php echo $LName ?></td>
					<td colspan="4">PUR. NO. : <?=$SrNo;?></td>
				</tr>
				<tr style="border-style: dashed;border-width: 0px 0px 1px 0px !important;">
					<td colspan="4" style="padding-bottom: 25px;">BILL NO : <?php echo $BillNo; ?> </td>
					<td colspan="4" style="padding-bottom: 25px;">DATE : <?php echo $PurchaseOrderBillDate; ?> </td>
					<td colspan="4" style="padding-bottom: 25px;">GSTIN : <?php echo $PartyGstin; ?></td>
				</tr>
				<!-- <tr>
					<td colspan="2" style="padding-top: 9px;">TOTALS&nbsp;&nbsp;&nbsp; <?php echo sizeof($billdata); ?></td>
					<td colspan="2" style="padding-top: 9px;    padding-left: 43px;">1344.75</td>
					<td colspan="2" style="padding-top: 9px;padding-left: 27px;">1384.50</td>
					<td colspan="2" style="padding-top: 9px;padding-left: 63px;">1464.25</td>
					<td colspan="2" style="padding-top: 9px;padding-left: 83px;">0.00</td>
				</tr> -->
				
			</table>

			<table style="margin-bottom: 0rem; width: 100%;border-style: dashed;border-width: 0 0 1px 0; ">
				<tr>
					<td colspan="2" style="padding-bottom: 9px;">TOTAL TAKAS  :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $totaltaka; ?></td>
					<td colspan="4" style="padding-bottom: 9px;padding-left: 30px;">TOTAL MTS. &nbsp;&nbsp;:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo intval($totalmts); ?></td>
					<td colspan="2" style="padding-bottom: 9px;padding-left: 32px;">RATE :<?php echo intval($PurRate); ?></td>
					<!-- <td colspan="2" style="padding-bottom: 9px;padding-left: 33px;">VALUE :<?php echo intval($TotalMts*$PurRate); ?></td> -->
					<td colspan="2" style="padding-bottom: 9px;padding-left: 33px;">VALUE :<?php echo intval($GreyPNetAmt); ?></td>
				</tr>
			</table>
			<div class="row">
	    		<span style="float: left;">RECEVIVER'S SIGNATURE</span>
				<span style="float: right; margin-left: 25%;">FOR BHARAT CREATION PRIVATE LIMITED.</span>
			</div>

		</div>
		<div>
        	<button onclick="printDiv();" type="button" class="btn waves-effect waves-light btn-lg btn-block btn-rounded btn-success printMe"><i class="fa fa-print"></i> Print</button>
        </div>
	</div>
</div>
	<?php $this->load->view('common/footer'); ?>
	<script type="text/javascript">
		function printDiv() 
		{

		  var divToPrint=document.getElementById('printData');

		  var newWin=window.open('','Print-Window');

		  newWin.document.open();

		  newWin.document.write('<html><body onload="window.print()">'+divToPrint.innerHTML+'</body></html>');

		  newWin.document.close();

		  setTimeout(function(){newWin.close();},10);

		}
	</script>
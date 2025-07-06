<?php
// $this->load->view('common/header'); 
$Brocker_Id = $PrintSalesOrderBill['Brocker_Id'];
$brockerdata = $this->db->query("SELECT * from ledger where Ledger_Id = '$Brocker_Id'")->row_array();
error_reporting(0);
function convertToIndianCurrency($number) {
    $no = round($number);
    $decimal = round($number - ($no = floor($number)), 2) * 100;    
    $digits_length = strlen($no);    
    $i = 0;
    $str = array();
    $words = array(
        0 => '',
        1 => 'One',
        2 => 'Two',
        3 => 'Three',
        4 => 'Four',
        5 => 'Five',
        6 => 'Six',
        7 => 'Seven',
        8 => 'Eight',
        9 => 'Nine',
        10 => 'Ten',
        11 => 'Eleven',
        12 => 'Twelve',
        13 => 'Thirteen',
        14 => 'Fourteen',
        15 => 'Fifteen',
        16 => 'Sixteen',
        17 => 'Seventeen',
        18 => 'Eighteen',
        19 => 'Nineteen',
        20 => 'Twenty',
        30 => 'Thirty',
        40 => 'Forty',
        50 => 'Fifty',
        60 => 'Sixty',
        70 => 'Seventy',
        80 => 'Eighty',
        90 => 'Ninety');
    $digits = array('', 'Hundred', 'Thousand', 'Lakh', 'Crore');
    while ($i < $digits_length) {
        $divider = ($i == 2) ? 10 : 100;
        $number = floor($no % $divider);
        $no = floor($no / $divider);
        $i += $divider == 10 ? 1 : 2;
        if ($number) {
            $plural = (($counter = count($str)) && $number > 9) ? 's' : null;            
            $str [] = ($number < 21) ? $words[$number] . ' ' . $digits[$counter] . $plural : $words[floor($number / 10) * 10] . ' ' . $words[$number % 10] . ' ' . $digits[$counter] . $plural;
        } else {
            $str [] = null;
        }  
    }
    
    $Rupees = implode(' ', array_reverse($str));
    $paise = ($decimal) ? "And Paise " . ($words[$decimal - $decimal%10]) ." " .($words[$decimal%10])  : '';
    return ($Rupees ? ' ' . $Rupees : '') . $paise . " Only";
}

?>
<div class="page-wrapper">
    <div class="container-fluid">
		<div class="container" id="printData">

		<div>
			<!-- <div>
				<span style="margin-left: 36%;">!!Shree Ganeshaya Namah!!</span><span style="margin-left: 10%;">
				PHONES :2333070,2322023,9375332034</span>
			</div>
			<div>
				<span style="margin-right: 20%;">Original For Consignee </span><span style="margin-right: 20%;">Duplicate For Transporter  </span>Triplicate For Consignor
			</div> -->

			<table style="width: 100%;" class="table table-boarder">
				<tbody>
					<td style="text-align: left">!!Shree Ganeshaya Namah!!</td>	
					
										
					<td style="text-align: right;">PHONES :2333070,2322023,9375332034</td>						
				</tbody>
			</table>

			<table style="width: 100%;" class="table table-boarder">
				<tbody>
					<td style="text-align: left;">Original For Consignee</td>						
					<td style="text-align: center;">Duplicate For Transporter</td>						
					<td style="text-align: right;">Triplicate For Consignor</td>						
				</tbody>
			</table>

			<table style="width: 100%;" class="table table-boarder">
					<tbody>
						<td style="text-align: center;"><h1><?=$PrintSalesOrderBill['companyname'];?></h1></td>						
					</tbody>
				</table>

				<table style="width: 100%;" class="table table-boarder">
					<tbody>
						<td style="text-align: left;">GSTIN :<?=$PrintSalesOrderBill['CompanyGstInUin'];?></td>
						<td style="text-align: center;">CIN No.:<?=$PrintSalesOrderBill['CompanyCinNo'];?></td>
						<td style="text-align: right;">PAN NO :<?=$PrintSalesOrderBill['CompanyPanNo'];?></td>
						
					</tbody>
				</table>

				<table style="width: 100%;" class="table table-boarder">
					<tbody>
						<p style="text-align: center;"><?=$PrintSalesOrderBill['AddressCompany'];?></p>
					</tbody>
				</table>

				<table style="width: 100%;border-style: dashed;border-width: 0 0 2px 0;" class="table table-boarder">
					<tbody>
						<td style="text-align: center"><h1 style="margin: 0px !important;">TAX INVOICE</h1></td>
						
					</tbody>
				</table>


		<!-- 	<div style="text-align: center;">
				<h1><?=$PrintSalesOrderBill['companyname'];?></h1>
			</div>
			<div>
	    		<span style="margin-right: 12%;">GSTIN :<?=$PrintSalesOrderBill['CompanyGstInUin'];?></span>
				<span style="margin-right: 12%;">CIN No.:<?=$PrintSalesOrderBill['CompanyCinNo'];?></span>
				<span>PAN NO :<?=$PrintSalesOrderBill['CompanyPanNo'];?></span>
			</div> -->
			<div>
			<!-- <div style="text-align: center;">
				<p><?=$PrintSalesOrderBill['AddressCompany'];?></p>
			</div> -->
			</div>
			<!-- <div style="text-align: center;border-style: dashed;border-width: 0 0 2px 0; ">
				<h1>TAX INVOICE</h1>
			</div> -->
			</div></br>

			<div>
			<table style="margin-bottom: 0rem;width: 100%;" class="table table-boarder">
				<tbody>
					<td style="border-top:unset;    padding: 0rem;text-align: left;">Buyer : <?=$PrintSalesOrderBill['ledgername'];?></td>
					<td style="border-top:unset;    padding: 0rem;text-align: right;">BILL NO. : <?=$PrintSalesOrderBill['Voucher'];?></td>
				</tbody>
			</table>
			</div>

			<div>
				<table style="margin-bottom: 0rem;width: 100%;" class="table table-boarder">
					<tbody>
						<td style="border-top:unset;    padding: 0rem;text-align: left;"><?=$PrintSalesOrderBill['ledgeraddress'];?></td>
						<td style="border-top:unset;    padding: 0rem;text-align: right;">CHALLAN :<?=$PrintSalesOrderBill['Ord_Ref'];?></td>
						</tbody>						
				</table>
			</div>

			<div>
				<table style="margin-bottom: 0rem;width: 100%;" class="table table-boarder">
					<tbody>
						<td style="border-top:unset;    padding: 0rem;text-align: left;">DATE :<?=$PrintSalesOrderBill['Finish_Date'];?></td>
						<td style="border-top:unset;    padding: 0rem;text-align: right;"></td>
						</tbody>						
				</table>
			</div>

			<div>
				<table style="margin-bottom: 0rem;width: 100%;" class="table table-boarder">
					<tbody>
						<td style="border-top:unset;    padding: 0rem;text-align: left;"><?=$PrintSalesOrderBill['StateName'];?></td>
						<td style="border-top:unset;    padding: 0rem;text-align: right;">ORDER NO:<?=$PrintSalesOrderBill['Ord_Ref'];?></td>
						</tbody>						
				</table>
			</div>


			<div>
				<table style="margin-bottom: 0rem;width: 100%;border-style: dashed;border-width: 0 0 2px 0;" class="table table-boarder">
					<tbody>
						<td style="border-top:unset;    padding: 0rem;text-align: left;">GSTIN :<?=$PrintSalesOrderBill['partygstin'];?></td>
						<td style="border-top:unset;    padding: 0rem;text-align: right;">Place of supply :<?=$PrintSalesOrderBill['StateName'] ." - ".$PrintSalesOrderBill['StateCode'] ?></td>
						</tbody>						
				</table>
			</div>

		<!-- 	<div>
				<table style="margin-bottom: 0rem;width: 100%;" class="table table-boarder">
					<tbody>
						<td style="border-top:unset;    padding: 0rem;text-align: left;">Consignee </td>
						<td style="border-top:unset;    padding: 0rem;text-align: right;">GSTIN:<?=$PrintSalesOrderBill['HasteGstIn'];?></td>
						</tbody>						
				</table>
			</div> -->


			<div>
	    		<div>Consignee : </div>
	    		<div style="border-style: dashed;border-width: 0 0 2px 0; ">
					<span style="margin-right: 5%;">GSTIN :<?=$PrintSalesOrderBill['HasteGstIn'];?></span></br></br>
				</div>
			</div></br>

			<div>
				<table style="margin-bottom: 0rem;width: 100%;" class="table table-boarder">
					<tbody>
						<td style="border-top:unset;    padding: 0rem;text-align: left;">AGENT:<?=$brockerdata['LName'];?></td>
						<td style="border-top:unset;    padding: 0rem;">PHONES:<?=$brockerdata['LMobile'];?></td>

						</tbody>						
				</table>
			</div>

			<div>
				<table style="margin-bottom: 0rem;width: 100%;" class="table table-boarder">
					<tbody>
						<td style="border-top:unset;    padding: 0rem;text-align: left;">ADDRESS:<?=$brockerdata['LAddress'] ." ".$brockerdata['LAddressLine2'];?></td>

						</tbody>						
				</table>
			</div>

			<div>
				<table style="margin-bottom: 0rem;width: 100%;" class="table table-boarder">
					<tbody>
						<td style="border-top:unset;    padding: 0rem;text-align: left;">L.R. NO. :<?=$PrintSalesOrderBill['Lr_No'];?></td>
						<td style="border-top:unset;    padding: 0rem;">LR DATE:<?=$PrintSalesOrderBill['Lr_Date'];?></td>
						<td style="border-top:unset;    padding: 0rem;text-align: right;">WEIGHT:<?=$PrintSalesOrderBill['Weight'];?></td>

						</tbody>						
				</table>
			</div>


			<div>
				<table style="margin-bottom: 0rem;width: 100%;" class="table table-boarder">
					<tbody>
						<td style="border-top:unset;    padding: 0rem;text-align: left;">TRANSPORT:<?=$PrintSalesOrderBill['TransportName'];?></td>
						<td style="border-top:unset;    padding: 0rem;">CASE NO :<?=$PrintSalesOrderBill['Case_No'];?></td>
						<td style="border-top:unset;    padding: 0rem;text-align: right;">FREIGHT:<?=$PrintSalesOrderBill['Height'];?></td>

						</tbody>						
				</table>
			</div>

			<div>
				<table style="margin-bottom: 0rem;width: 100%;" class="table table-boarder">
					<tbody>
						<td style="border-top:unset;    padding: 0rem;text-align: left;">STATION:<?=$PrintSalesOrderBill['StationName'];?></td>
						<td style="border-top:unset;    padding: 0rem;">HSN/SAC :5407</td>
						<td style="border-top:unset;    padding: 0rem;text-align: right;"></td>

						</tbody>						
				</table>
			</div>

			<div>
				<table style="margin-bottom: 0rem;width: 100%;border-style: dashed;border-width: 0 0 2px 0;" class="table table-boarder">
					<tbody>
						<td style="border-top:unset;    padding: 0rem;text-align: left;">Distance(km):<?=$PrintSalesOrderBill['LDistance'];?></td>
						<td style="border-top:unset;    padding: 0rem;">Transporter ID :<?=$PrintSalesOrderBill['TransportName'];?></td>
						<td style="border-top:unset;    padding: 0rem;text-align: right;">E-Way Bill no :<?=$PrintSalesOrderBill['E_Way_Bill_No'];?></td>

						</tbody>						
				</table>
			</div>


	<!-- 		<div style="border-style: dashed;border-width: 0 0 2px 0;">
	    		<span style="margin-right: 10%;">Distance(km) : <?=$PrintSalesOrderBill['LDistance'];?> </span>
	    		<span style="margin-right: 10%;">Transporter ID : <?=$PrintSalesOrderBill['TransportName'];?></span>
	    		<span>E-Way Bill no : <?=$PrintSalesOrderBill['E_Way_Bill_No'];?></span></br></br>
			</div> -->
			<table  style="border-style: dashed;border-width: 0 0 2px 0;width: 100%;">
				<tr>
					<td style="border-top:unset;    padding: 0rem;padding: 10px;">Sr. No.</td>
					<td style="border-top:unset;    padding: 0rem;padding: 10px;">PARTICULARS</td>
					<td style="border-top:unset;    padding: 0rem;padding: 10px;">PACK</td>
					<td style="border-top:unset;    padding: 0rem;padding: 10px;">PCS</td>
					<td style="border-top:unset;    padding: 0rem;padding: 10px;">CUT</td>
					<td style="border-top:unset;    padding: 0rem;padding: 10px;">MTR</td>
					<td style="border-top:unset;    padding: 0rem;padding: 10px;">RATE</td>
					<td style="border-top:unset;    padding: 0rem;padding: 10px;">AMOUNT</td>
				</tr>
				<?php
				$Finish_Purchase_Id = $PrintSalesOrderBill['Finish_Purchase_Id'];
				// $fetquery = $this->db->query("SELECT pd.*,id.*,c.*,ps.* from finish_purchase_details pd,item_detail id,category c,package_style ps where pd.Finish_Purchase_Id = '$Finish_Purchase_Id' AND pd.Item_Id = id.ItemdetailID AND pd.Category_Id = c.CategoryID AND pd.Packing_Id = ps.PackingID")->result();

				$fetquery = $this->db->query("SELECT * FROM finish_purchase_details LEFT JOIN item_detail ON finish_purchase_details.Item_Id = item_detail.ItemdetailID LEFT JOIN category ON finish_purchase_details.Category_Id = category.CategoryID LEFT JOIN package_style ON finish_purchase_details.Packing_Id = package_style.PackingID WHERE finish_purchase_details.Finish_Purchase_Id = '$Finish_Purchase_Id'")->result();


				$x = 1;
				$totalpcs = 0;
				$totalmts = 0;
				$totalamt = 0;
				if(sizeof($fetquery) > 0)
				{
					foreach ($fetquery as $value)
					{
						?>
						<tr style="border-style: dashed;border-width: 0 0 2px 0; ">
							<td style="border-top:unset;    padding: 0rem;padding: 10px;"><?=$x;?></td>
							<td style="border-top:unset;    padding: 0rem;padding: 10px;"><?=$value->IName;?></td>
							<td style="border-top:unset;    padding: 0rem;padding: 10px;"><?=$value->PackingName;?></td>
							<td style="border-top:unset;    padding: 0rem;padding: 10px;"><?=$value->Pcs;?></td>
							<td style="border-top:unset;    padding: 0rem;padding: 10px;"><?=$value->Cut;?></td>
							<td style="border-top:unset;    padding: 0rem;padding: 10px;"><?=$value->Mts_Qty;?></td> 
							<td style="border-top:unset;    padding: 0rem;padding: 10px;"><?=$value->Rate;?></td>
							<td style="border-top:unset;    padding: 0rem;padding: 10px;"><?=$value->Amount;?></td> 
						</tr> 
						<?php
						$totalpcs += $value->Pcs;
						$totalmts += $value->Mts_Qty;
						$totalamt += $value->Amount;

						$x++;
					}
				}
				?>
				
				
			
			</table>
			<table style="margin-bottom: 0rem;border-style: dashed;border-width: 0 0 2px 0;width: 100%;">
				<tr>
					<td style="border-top:unset;    padding: 0rem;padding: 10px;" colspan="2">BANK A/C No. :KOTAK BANK</td>
					<td style="border-top:unset;    padding: 0rem;padding: 10px;" colspan="2">A/C No :578044011032</td>
					<td style="border-top:unset;    padding: 0rem;padding: 10px;" colspan="2">IFSC :KKBK0000871</td>
					<td style="border-top:unset;    padding: 0rem;padding: 10px;" colspan="2">IFSC Code</td> 
				</tr> 
				<tr style="border-style: dashed;border-width: 0 0 2px 0; ">
					<td style="border-top:unset;    padding: 0rem;padding: 10px;" colspan="8">REMARK :<?=$PrintSalesOrderBill['Remark'];?></td>
				</tr>
			</table>
			<table style="margin-bottom: 0rem;border-style: dashed;border-width: 0 0 2px 0;width: 100%;">
				
				<tr style="border-style: dashed;border-width: 0 0 2px 0; ">
					<td style="border-top:unset;    padding: 0rem;padding: 10px;" colspan="3">SUB TOTAL</td>
					<td style="border-top:unset;    padding: 0rem;padding: 10px;"><?=$totalpcs;?></td>
					<td></td>
					<td style="border-top:unset;    padding: 0rem;padding: 10px;"><?=$totalmts?></td>
					<td></td>
					<td><?=$totalamt?></td>
				</tr>
				<?php
				if($PrintSalesOrderBill['Igst'] != "" && $PrintSalesOrderBill['Igst_Amt'] != "")
				{

					?>
					<tr style="border-style: dashed;border-width: 0 0 2px 0; ">
						<td style="border-top:unset;    padding: 0rem;padding: 10px;" colspan="2">HSN/SAC :5407</td>
						<td style="border-top:unset;    padding: 0rem;padding: 10px;" colspan="4">IGST @ <?=$PrintSalesOrderBill['Igst'];?> % on Taxable Value </td>
						<td><?=$PrintSalesOrderBill['Taxable_Value'];?></td>
						<td style="border-top:unset;    padding: 0rem;padding: 10px;">+ <?=$PrintSalesOrderBill['Igst_Amt'];?></td>
					</tr>
					
					<tr style="border-style: dashed;border-width: 0 0 2px 0; ">
						<td style="border-top:unset;    padding: 0rem;padding: 10px;" colspan="6">DUE DAYS : 0</td>

	 					<?php 
						if($PrintSalesOrderBill['Amount_Less'] != "")
							{
								$discount =  $PrintSalesOrderBill['Amount_Less'];
							}else if($PrintSalesOrderBill['Discount_Less2'] != "")
							{
								$discount =  $PrintSalesOrderBill['Discount_Less2'];
							}
							else
								{
									$discount = 0;
								}
							?>

							<td style="border-top:unset;    padding: 0rem;padding: 10px;">Discount : </td>
							<td>- <?=$discount?></td>
						</tr>
						<tr>
							<td style="border-top:unset;    padding: 0rem;padding: 10px;" colspan="6"></td>
						<td style="border-top:unset;    padding: 0rem;padding: 10px;">GRAND TOTAL : </td>
						<td><?=$totalamt+$PrintSalesOrderBill['Igst_Amt']-$discount?></td>
					</tr>

					 <tr style="border-style: dashed;border-width: 0 0 2px 0; ">
						<td style="border-top:unset;    padding: 0rem;padding: 10px; text-transform: capitalize;" colspan="6">	<?= convertToIndianCurrency($totalamt+$PrintSalesOrderBill['Igst_Amt']);?></td>
					</tr>
					<?php

				}
				else
				{
					?>
					<tr style="border-style: dashed;border-width: 0 0 2px 0; ">
						<td style="border-top:unset;    padding: 0rem;padding: 10px;" colspan="2">HSN/SAC :5407</td>
						<td style="border-top:unset;    padding: 0rem;padding: 10px;" colspan="4">CGST @ <?=$PrintSalesOrderBill['Cgst'];?> % on Taxable Value </td>
						<td><?=$PrintSalesOrderBill['Taxable_Value'];?></td>
						<td style="border-top:unset;    padding: 0rem;padding: 10px;">+ <?=$PrintSalesOrderBill['Cgst_Amt'];?></td>
					</tr>
					<tr style="border-style: dashed;border-width: 0 0 2px 0; ">
						<td style="border-top:unset;    padding: 0rem;padding: 10px;" colspan="2">HSN/SAC :5407</td>
						<td style="border-top:unset;    padding: 0rem;padding: 10px;" colspan="4">SGST @ <?=$PrintSalesOrderBill['Sgst'];?> % on Taxable Value </td>
						<td><?=$PrintSalesOrderBill['Taxable_Value'];?></td>
						<td style="border-top:unset;    padding: 0rem;padding: 10px;">+ <?=$PrintSalesOrderBill['Sgst_Amt'];?></td>
					</tr>
					<tr style="border-style: dashed;border-width: 0 0 2px 0; ">
						<td style="border-top:unset;    padding: 0rem;padding: 10px;" colspan="6">DUE DAYS : 0</td>

	 					<?php 
						if($PrintSalesOrderBill['Amount_Less'] != "")
							{
								$discount =  $PrintSalesOrderBill['Amount_Less'];
							}else if($PrintSalesOrderBill['Discount_Less2'] != "")
							{
								$discount =  $PrintSalesOrderBill['Discount_Less2'];
							}
							else
								{
									$discount = 0;
								}
							?>

							<td style="border-top:unset;    padding: 0rem;padding: 10px;">Discount : </td>
							<td>- <?=$discount?></td>
						</tr>
						<tr>
							<td style="border-top:unset;    padding: 0rem;padding: 10px;" colspan="6"></td>
						<td style="border-top:unset;    padding: 0rem;padding: 10px;">GRAND TOTAL : </td>
						<td><?=$totalamt+$PrintSalesOrderBill['Cgst_Amt']+$PrintSalesOrderBill['Sgst_Amt']-$discount?></td>
					</tr>

					 <tr style="border-style: dashed;border-width: 0 0 2px 0; ">
						<td style="border-top:unset;    padding: 0rem;padding: 10px; text-transform: capitalize;" colspan="6">	<?= convertToIndianCurrency($totalamt+$PrintSalesOrderBill['Cgst_Amt']+$PrintSalesOrderBill['Sgst_Amt']);?></td>
					</tr>
					<?php
				}
				?>

			</table>
			<p></p>

			<table style="width: 100%;" class="table table-boarder">
					<tbody>
						<td style="text-align: left;">TERMS & CONDITIONS :</td>
						<td style="text-align: center;">FOR BHARAT CREATION PRIVATE LIMITED.</td>
						
						
					</tbody>
				</table>
				
			<!-- <div >
	    		<span style="padding: 10px;margin-right: 33%;">TERMS & CONDITIONS :</span>
	    		<span style="padding: 10px;">FOR BHARAT CREATION PRIVATE LIMITED.</span>
	    	</div> -->
	    		<p>1) SUBJECT TO SURAT JURISDICTION.</p>
	    		<p>2) GOODS HAVE BEEN SOLD & DESPATCHED AT THE ENTIRE RISK OF THE PURCHASER.</p>
	    		<p>2) COMPLAINTS, IF ANY REGARDING THIS INVOICE MUST BE INFORMED IN WRITING WITHIN 48 HOURS.</p>
			<div class="row">
	    		<span style="margin-right: 30%;">CHECKED BY</span>
	    		<span style="margin-right: 25%;">DELIVERED BY</span>
	    		<span>AUTH. SIGNATORY</span>
	    	</div>
		</div>
</div>
<div>
        	<button onclick="printDiv();" type="button" class="btn waves-effect waves-light btn-lg btn-block btn-rounded btn-success printMe"><i class="fa fa-print"></i> Print</button>
        </div>
</div>
</div>
<?php
 // $this->load->view('common/footer'); 

?>
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
<?php $this->load->view('common/header'); 
//print_r($recordcount); exit;
if (($recordcount)>0)
{
	//echo "Hiii";
	if(isset($recordcount))
	{
		foreach ($voucherData as $qvoucherData) 
		{
			$VoucherNo=$qvoucherData->SaleVoucher + 1;
			$OrderNoData=$qvoucherData->SaleOrderNo + 1;
		}
	}
}
else
{
	$VoucherNo=1;
	$OrderNoData=1;
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

	/* change css form design */	
	html body .p-20 {
	padding: 20px 0!important;
	}
	
</style>

<div class="page-wrapper">
	<div class="container-fluid">
		
		<!-- Add New PartyAC Data Start -->
    	<div id="AddNewPartyACmdl" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
		    <div class="modal-dialog modal-lg">
		        <div class="modal-content">
		            <div class="modal-header">
		                <h4 class="modal-title">Party Account Data</h4>
		                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
		            </div>
		            <div class="modal-body">
		            	<form class="" method="post" name="addPartyacmdlform" id="addPartyacmdlform" novalidate>
		            		<input type="hidden" value="" id="Ledger_Id" name="Ledger_Id">
							<div class="row common_master_form_div">
								<div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 ">
									<div class="formtitle">
											<h4 class="backcolor">Account Information</h4>
											<div class="row removemargin">
												<div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
													<div class="row">
														<div class="col-12 col-sm-4 col-md-2 col-lg-2 col-xl-2 d-flex ">
															<div class="form-group">
																<label>CODE :</label>
															</div>
														</div>
														<div class="col-12 col-sm-8 col-md-10 col-lg-10 col-xl-10">
															<div class="form-group ">
																<div class="">
																	<input type="text" name="LCode" id="LCodeData" class="form-control" placeholder="ENTER CODE">
																</div>
															</div>
														</div>
														
														<div class="col-12 col-sm-4 col-md-2 col-lg-3 col-xl-2 d-flex ">
															<div class="form-group">
																<label>A/C TYPE :</label>
															</div>
														</div>
														<div class="col-2 col-sm-8 col-md-8 col-lg-9 col-xl-8">
															<div class="form-group field">
																<div class="controls">
																<select name="AcTypeID" id="AcTypeID" required class="select2 form-control custom-select customvalidation" style="width: 100%">
																	<option value="">--Select-- </option>
																	<?php
																	foreach ($getAcctypeData as $qgetAcctypeData)
																	{
																		?>
																		<option value="<?=$qgetAcctypeData->AcTypeID?>"><?=$qgetAcctypeData->ACType?></option>
																		<?php
																	}
																	?>
																</select>
																</div>
															</div>
																
														</div>
														
														<div class="col-12 col-sm-4 col-md-2 col-lg-3 col-xl-2 d-flex ">
															<div class="form-group">
																<label>A/C GROUP  :</label>
															</div>
														</div>
														<div class="col-12 col-sm-8 col-md-10 col-lg-9 col-xl-10">
															<div class="form-group field">
																<div class="">
																	<select name="AcGroupID" id="AcGroupID"  class="AcGroupselect form-control custom-select" style="width: 100%">
																		<option value="">--Select-- </option>
																		<?php
																		foreach ($getAccountData as $qgetAccountData) {
																			?>
																		<option value="<?=$qgetAccountData->AcID;?>"> <?=$qgetAccountData->ACName;?> </option>
																			<?php
																		}
																		?>
																	</select>
																</div>
															</div>
														</div>

														<div class="col-12 col-sm-4 col-md-1 col-lg-2 col-xl-1 d-flex ">
															<div class="form-group">
																<label> NAME :</label>
															</div>
														</div>
														<div class="col-12 col-sm-8 col-md-6 col-lg-10 col-xl-6">
															<div class="form-group field">
																<div class="controls">
																	<input type="LName" name="LName" class="form-control customvalidation" id="LNameData" required="" placeholder="ENTER NAME"> 
																</div>
															</div>
														</div>
														 
														<div class="col-12 col-sm-4 col-md-2 col-lg-2 col-xl-2 d-flex">
															<div class="form-group">
																<label> DHARA :</label>
															</div>
														</div>
														<div class="col-12 col-sm-8 col-md-10 col-lg-3 col-xl-10">
															<div class="form-group field">
																<div class="">
																	<input type="text"  name="LDhara" id="LDhara" placeholder="0.00" class="form-control"> 
																</div>
															</div>
														</div>

														<div class="col-12 col-sm-4 col-md-2 col-lg-3 col-xl-2 d-flex">
															<div class="form-group">
																<label>PUR DHARA :</label>
															</div>
														</div>
														<div class="col-12 col-sm-8 col-md-10 col-lg-3 col-xl-10">
															<div class="form-group field">
																<div class="">
																	<input type="text"  name="LPureDhara" id="LPureDhara" placeholder="0.00" class="form-control"> 
																</div>
															</div>
														</div>

														<div class="col-12 col-sm-4 col-md-2 col-lg-3 col-xl-2 d-flex ">
															<div class="form-group">
																<label> GRACE DAYS :</label>
															</div>
														</div>
														<div class="col-12 col-sm-8 col-md-10 col-lg-2 col-xl-10">
															<div class="form-group field">
																<div class="">
																	<input type="text" name="LGraceDays" id="LGraceDays" class="form-control" placeholder="0"> 
																</div>
															</div>
														</div>
														
														<div class="col-12 col-sm-4 col-md-2 col-lg-3 col-xl-2 d-flex ">
															<div class="form-group">
																<label> RANK LIST :</label>
															</div>
														</div>
														<div class="col-12 col-sm-8 col-md-2 col-lg-4 col-xl-10">
															<div class="form-group field">
																<div class="">
																	<select name="LRankList" id="LRankList" class="form-control">
																		<option value=""> --Select -- </option>
																		<option value="Rank List 1"> Rank List 1 </option>
																		<option value="Rank List 2"> Rank List 2 </option>
																		<option value="Rank List 3"> Rank List 3 </option>
																	</select>
																</div>
															</div>
														</div>
														
														<div class="col-12 col-sm-4 col-md-2 col-lg-3 col-xl-2 d-flex ">
															<div class="form-group">
																<label> BANK CHRG. :</label>
															</div>
														</div>
														<div class="col-12 col-sm-8 col-md-10 col-lg-2 col-xl-10">
															<div class="form-group field">
																<div class="">
																	<input type="text" name="LBankChrg" id="LBankChrg" class="form-control" placeholder="0.00%"> 
																</div>
															</div>
														</div>
														
														<div class="col-12 col-sm-4 col-md-2 col-lg-3 col-xl-2 d-flex ">
															<div class="form-group">
																<label> TDS. % :</label>
															</div>
														</div>
														<div class="col-12 col-sm-8 col-md-2 col-lg-4 col-xl-10">
															<div class="form-group field">
																<div class="">
																	<input type="text" name="LTds" id="LTds" class="form-control" placeholder="0.00">
																</div>
															</div>
														</div>

														<div class="col-12 col-sm-4 col-md-2 col-lg-2 col-xl-2 d-flex">
															<div class="form-group">
																<label>IT RATE :</label>
															</div>
														</div>
														<div class="col-12 col-sm-8 col-md-10 col-lg-10 col-xl-10">
															<div class="form-group field">
																<div class="">
																	<input type="text" name="LItRate" id="LItRate" class="form-control" placeholder="0.00"> 
																</div>
															</div>
														</div>
														<div class="col-12 col-sm-4 col-md-3 col-lg-3 col-xl-3 d-flex ">
															<div class="form-group">
																<label>ADDRESS :</label>
															</div>
														</div>
														<div class="col-12 col-sm-8 col-md-9 col-lg-9 col-xl-9">
															<div class="form-group field">
																<div class="">
																	<input type="text" name="LAddress" id="LAddress" class="form-control" placeholder="ENTER ADDRESS"> 
																</div>
															</div>
														</div>
														<div class="col-12 col-sm-4 col-md-3 col-lg-3 col-xl-3 d-flex ">
															<div class="form-group">
																<label>ADDR. LINE2 :</label>
															</div>
														</div>
														<div class="col-12 col-sm-8 col-md-9 col-lg-9 col-xl-9">
															<div class="form-group field">
																<div class="">
																	<input type="text" name="LAddressLine2" id="LAddressLine2" class="form-control" placeholder="ADDRESS LINE TWO"> 
																</div>
															</div>
														</div>
													</div>
												</div>
												<div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
													<div class="row">
														
														<div class="col-12 col-sm-4 col-md-2 col-lg-3 col-xl-2 d-flex ">
															<div class="form-group">
																<label>OTHER ADDR :</label>
															</div>
														</div>
														<div class="col-12 col-sm-8 col-md-10 col-lg-9 col-xl-10">
															<div class="form-group field">
																<div class="">
																	<input type="text" name="LOtherAddress" id="LOtherAddress" class="form-control" placeholder="OTHER ADDRESS"> 
																</div>
																
															</div>
														</div>
														
														<div class="col-12 col-sm-4 col-md-2 col-lg-3 col-xl-2 d-flex">
															<div class="form-group">
																<label>OTHER. LINE2 :</label>
															</div>
														</div>
														<div class="col-12 col-sm-8 col-md-8 col-lg-9 col-xl-10">
															<div class="form-group field">
																<div class="">
																	<input type="text" name="LOtherLine2" id="LOtherLine2" class="form-control" placeholder="OTHER ADDRESS LINE2"> 
																</div>
															</div>
														</div>

														<div class="col-12 col-sm-4 col-md-2 col-lg-3 col-xl-2 d-flex ">
															<div class="form-group">
																<label>CITY :</label>
															</div>
														</div>
														<div class="col-12 col-sm-8 col-md-10 col-lg-9 col-xl-10">
															<div class="form-group field">
																<div class="">
																	<select name="CityID" id="CityID" class="Cityselect form-control custom-select" style="width: 100%">
																		<option value=""> --Select -- </option>
																		<?php 
																		foreach($getCityData as $qgetCityData)
																		{
																		?>
																		<option value="<?php echo $qgetCityData->CityID; ?>"> <?php echo $qgetCityData->CityName; ?></option>
																		<?php 
																		}
																		?>
																	</select>
																</div>
															</div>
														</div>

														<div class="col-12 col-sm-4 col-md-2 col-lg-3 col-xl-2 d-flex ">
															<div class="form-group">
																<label>PIN:</label>
															</div>
														</div>
														<div class="col-12 col-sm-8 col-md-4 col-lg-3 col-xl-4">
															<div class="form-group field">
																<div class="">
																	<input type="text" name="LPin" id="LPin" class="form-control" placeholder="PIN"> 
																</div>
															</div>
														</div>

														<div class="col-12 col-sm-4 col-md-2 col-lg-3 col-xl-2 d-flex ">
															<div class="form-group">
																<label>DISTANCE :</label>
															</div>
														</div>
														<div class="col-12 col-sm-8 col-md-4 col-lg-3 col-xl-4">
															<div class="form-group field">
																<div class="">
																	<input type="text" name="LDistance" id="LDistance" class="form-control" placeholder="DISTANCE"> 
																</div>
															</div>
														</div>

														<div class="col-12 col-sm-4 col-md-2 col-lg-3 col-xl-2 d-flex ">
															<div class="form-group">
																<label>STATION :</label>
															</div>
														</div>
														<div class="col-12 col-sm-8 col-md-10 col-lg-9 col-xl-10">
															<div class="form-group field">
																<div class="">
																	<select name="StationID" id="StationID"  class="Stationselect form-control custom-select" style="width: 100%">
																	<option value=""> --Select -- </option>
																	<?php 
																	foreach($getStationData as $qgetStationData)
																	{
																	?>
																	<option value="<?php echo $qgetStationData->StationID; ?>"> <?php echo $qgetStationData->StationName; ?></option>
																	<?php 
																	}
																	?>
																	</select>
																</div>
															</div>
														</div>
														
														<div class="col-12 col-sm-4 col-md-2 col-lg-3 col-xl-2 d-flex ">
															<div class="form-group">
																<label>TRANSPORT :</label>
															</div>
														</div>
														<div class="col-12 col-sm-8 col-md-10 col-lg-9 col-xl-10">
															<div class="form-group field">
																<div class="">
																	<select name="TransportID" id="TransportID1"  class="Transportselect form-control custom-select" style="width: 100%">
																		<option value=""> --Select -- </option>
																		<?php 
																		foreach($getTransportData as $qgetTransportData)
																		{
																		?>
																		<option value="<?php echo $qgetTransportData->TransportID; ?>"> <?php echo $qgetTransportData->TransportName; ?></option>
																		<?php 
																		}
																		?>
																	</select>
																</div>
															</div>
														</div>

														<div class="col-12 col-sm-4 col-md-2 col-lg-3 col-xl-2 d-flex ">
															<div class="form-group">
																<label>BROKER :</label>
															</div>
														</div>
														<div class="col-12 col-sm-8 col-md-10 col-lg-9 col-xl-10">
															<div class="form-group field">
																<div class="">
																	<select name="BrokerID" id="BrokerID" class="Brokerselect form-control custom-select" style="width: 100%">
																		<option value=""> --Select -- </option>
																		<?php 
																		foreach($getBrokerData as $qgetBrokerData)
																		{
																		?>
																		<option value="<?php echo $qgetBrokerData->Ledger_Id; ?>"> <?php echo $qgetBrokerData->LName; ?></option>
																		<?php 
																		}
																		?>
																	</select>
																</div>
															</div>
														</div>
														
														<div class="col-12 col-sm-4 col-md-2 col-lg-3 col-xl-2 d-flex ">
															<div class="form-group">
																<label>ITEM :</label>
															</div>
														</div>
														<div class="col-12 col-sm-8 col-md-10 col-lg-9 col-xl-10">
															<div class="form-group field">
																<div class="">
																	<select name="ItemID" id="ItemID"  class="Itemselect form-control custom-select" style="width: 100%">
																		<option value=""> --Select -- </option>
																		<?php 
																		foreach($getItemTypeData as $qgetItemTypeData)
																		{
																		?>
																		<option value="<?php echo $qgetItemTypeData->ItemTypeID; ?>"> <?php echo $qgetItemTypeData->ClothType; ?></option>
																		<?php 
																		}
																		?>
																	</select>
																</div>
															</div>
														</div>
														
														<div class="col-12 col-sm-4 col-md-2 col-lg-3 col-xl-2 d-flex ">
															<div class="form-group">
																<label>SERIES :</label>
															</div>
														</div>
														<div class="col-12 col-sm-8 col-md-10 col-lg-9 col-xl-10">
															<div class="form-group field">
																<div class="controls">
																<select name="SeriesID" id="SeriesID"  class="Seriesselect form-control custom-select" style="width: 100%">
																	<option value=""> --Select -- </option>
																	<?php 
																	foreach($LabelData as $qLabelData)
																	{
																	?>
																	<option value="<?php echo $qLabelData->screenBrandID; ?>"> <?php echo $qLabelData->brandName; ?></option>
																	<?php 
																	}
																	?>
																</select>
																</div>
															</div>
														</div>
														
													</div>
												</div>
											</div>	
									</div>
										
									<div class="formtitle">
										<h4 class="backcolor">MAIN DETAILS</h4>
										<div class="row removemargin">
											<div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
												<div class="row">
													<div class="col-12 col-sm-4 col-md-2 col-lg-4 col-xl-2 d-flex ">
														<div class="form-group">
															<label>CONTACT PERSON :</label>
														</div>
													</div>
													<div class="col-12 col-sm-8 col-md-10 col-lg-8 col-xl-10">
														<div class="form-group field">
															<div class="">
																<input type="text" name="LContactPerson" id="LContactPerson" class="form-control" placeholder="ENTER NAME"> 
															</div>
														</div>
													</div>
													
													<div class="col-12 col-sm-4 col-md-2 col-lg-3 col-xl-2 d-flex ">
														<div class="form-group">
															<label>MOBILE :</label>
														</div>
													</div>
													<div class="col-12 col-sm-8 col-md-4 col-lg-9 col-xl-4">
														<div class="form-group field"  id="staticParent">
															<div class="">
																<input type="text" name="LMobile" id="LMobile" class="form-control" placeholder="9898989695" maxlength="10"> 
															</div>
														</div>
													</div>
													
													<div class="col-12 col-sm-4 col-md-2 col-lg-3 col-xl-2 d-flex ">
														<div class="form-group">
															<label>REMARK :</label>
														</div>
													</div>
													<div class="col-12 col-sm-8 col-md-4 col-lg-9 col-xl-4">
														<div class="form-group field" id="staticParent1">
															<div class="">
																<input type="text" name="LRemark" id="LRemark" class="form-control" placeholder="ENTER REMARK"> 
															</div>
														</div>
													</div>

													<div class="col-12 col-sm-4 col-md-2 col-lg-2 col-xl-2 d-flex ">
														<div class="form-group">
															<label>PHONE1 :</label>
														</div>
													</div>
													<div class="col-12 col-sm-8 col-md-4 col-lg-4 col-xl-4">
														<div class="form-group field"  id="staticParent">
															<div class="">
																<input type="text" name="LPhone1" id="LPhone1"  class="form-control" placeholder="ENTER PHONE 1"> 
															</div>
														</div>
													</div>
													
													<div class="col-12 col-sm-4 col-md-2 col-lg-2 col-xl-2 d-flex ">
														<div class="form-group">
															<label>PHONE2 :</label>
														</div>
													</div>
													<div class="col-12 col-sm-8 col-md-4 col-lg-4 col-xl-4">
														<div class="form-group field" id="staticParent1">
															<div class="">
																<input type="text" name="LPhone2" id="LPhone2"  class="form-control" placeholder="ENTER PHONE 2"> 
															</div>
														</div>
													</div>
												</div>
											</div>
											<div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
												<div class="row">
													
													<div class="col-12 col-sm-4 col-md-2 col-lg-3 col-xl-2 d-flex ">
														<div class="form-group">
															<label>EMAIL ID :</label>
														</div>
													</div>
													<div class="col-12 col-sm-8 col-md-4 col-lg-9 col-xl-4">
														<div class="form-group field">
															<div class="">
																<input type="text" name="LEmailID" id="LEmailID"  class="form-control" placeholder="ENTER EMAIL ID"> 
															</div>
														</div>
													</div>
													
													<div class="col-12 col-sm-4 col-md-2 col-lg-3 col-xl-2 d-flex ">
														<div class="form-group">
															<label>PAN NO. :</label>
														</div>
													</div>
													<div class="col-12 col-sm-8 col-md-4 col-lg-9 col-xl-4">
														<div class="form-group field"  id="staticParent">
															<div class="">
																<input type="text" name="LPanNo" id="LPanNo" class="form-control" placeholder="ENTER PAN NO"> 
															</div>
														</div>
													</div>
													
													<div class="col-12 col-sm-4 col-md-2 col-lg-3 col-xl-2 d-flex ">
														<div class="form-group">
															<label>LEDGER TYPE :</label>
														</div>
													</div>
													<div class="col-12 col-sm-8 col-md-4 col-lg-9 col-xl-4">
														<div class="form-group field" id="staticParent1">
															<div class="">
																<select name="LedgerType" id="LedgerType" class="form-control">
																	<option value=""> --Select Type Type-- </option>
																	<option value="Individual">Individual</option>
																	<option value="Proprietors">Proprietors</option>
																	<option value="Proprietorshipship">Proprietorshipship (Non Audited)</option>
																	<option value="Partnership">Partnership</option>
																	<option value="pvtltdco">PVT. LTD. CO.</option>
																</select>
															</div>
														</div>
													</div>

													<div class="col-12 col-sm-4 col-md-2 col-lg-3 col-xl-2 d-flex ">
														<div class="form-group">
															<label>GSTIN / UIN 	:</label>
														</div>
													</div>
													<div class="col-12 col-sm-8 col-md-4 col-lg-5 col-xl-4">
														<div class="form-group field" id="staticParent2">
															<div class="">
																<input type="text"  name="LGstin" id="LGstin" class="form-control" placeholder="ENTER GSTIN / UIN"  > 
															</div>
														</div>
													</div>

													<div class="col-12 col-sm-4 col-md-2 col-lg-3 col-xl-2 d-flex ">
														<div class="form-group">
															<label>SELECTED :</label>
														</div>
													</div>
													<div class="col-12 col-sm-8 col-md-4 col-lg-1 col-xl-4">
														<div class="form-group field" id="staticParent2">
															<div class="">
																<input type="checkbox"  name="IsSselected" id="IsSselected" placeholder="ENTER MOBILE"  > 
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>	
									</div>

									<div class="formtitle">
										<h4 class="backcolor">OTHER DETAILS</h4>
										<div class="row removemargin">
											<div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
												<div class="row">
													<div class="col-12 col-sm-4 col-md-2 col-lg-3 col-xl-2 d-flex ">
														<div class="form-group">
															<label>GST NO. (VAT) :</label>
														</div>
													</div>
													<div class="col-12 col-sm-8 col-md-4 col-lg-4 col-xl-4">
														<div class="form-group field">
															<div class="">
																<input type="text" name="LGstNo" id="LGstNo"  class="form-control" placeholder="ENTER DEBIT LIMIT"> 
															</div>
														</div>
													</div>
													
													<div class="col-12 col-sm-4 col-md-2 col-lg-2 col-xl-2 d-flex ">
														<div class="form-group">
															<label>CST NO. :</label>
														</div>
													</div>
													<div class="col-12 col-sm-8 col-md-4 col-lg-3 col-xl-4">
														<div class="form-group field">
															<div class="">
																<input type="text" name="LCstNo" id="LCstNo" class="form-control" placeholder="Enter CST No"> 
															</div>
														</div>
													</div>
													
													<div class="col-12 col-sm-4 col-md-2 col-lg-3 col-xl-2 d-flex ">
														<div class="form-group">
															<label>EXCISE REG. :</label>
														</div>
													</div>
													<div class="col-12 col-sm-8 col-md-4 col-lg-3 col-xl-4">
														<div class="form-group field">
															<div class="">
																<input type="text" name="LExciseReg" id="LExciseReg"  class="form-control" placeholder="ENTER LIMIT DAYS">
															</div>
														</div>
													</div>
													<div class="col-12 col-sm-4 col-md-2 col-lg-3 col-xl-2 d-flex ">
														<div class="form-group">
															<label>SALE INCENT :</label>
														</div>
													</div>
													<div class="col-12 col-sm-8 col-md-4 col-lg-3 col-xl-4">
														<div class="form-group field">
															<div class="">
																<input type="text" name="LSaleIncent" id="LSaleIncent" class="form-control" placeholder="Enter Limit Days">
															</div>
														</div>
													</div>
													

													<div class="col-12 col-sm-4 col-md-2 col-lg-4 col-xl-2 d-flex ">
														<div class="form-group">
															<label>DEBIT LIMIT (RS.) :</label>
														</div>
													</div>
													<div class="col-12 col-sm-8 col-md-4 col-lg-3 col-xl-4">
														<div class="form-group field">
															<div class="">
																<input type="text" name="LDebitLimit" id="LDebitLimit" class="form-control" placeholder="Enter Debit Limit"> 
															</div>
														</div>
													</div>
													
													<div class="col-12 col-sm-4 col-md-2 col-lg-3 col-xl-2 d-flex ">
														<div class="form-group">
															<label>LIMIT DAYS :</label>
														</div>
													</div>
													<div class="col-12 col-sm-8 col-md-4 col-lg-2 col-xl-4">
														<div class="form-group field">
															<div class="">
																<input type="text" name="LLimitDays" id="LLimitDays" class="form-control" placeholder="Enter Limit Days"> 
															</div>
														</div>
													</div>
												</div>
											</div>
											<div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
												<div class="row">
													
													<div class="col-12 col-sm-4 col-md-2 col-lg-4 col-xl-2 d-flex ">
														<div class="form-group">
															<label>BANK A/C NO. :</label>
														</div>
													</div>
													<div class="col-12 col-sm-8 col-md-4 col-lg-8 col-xl-4">
														<div class="form-group field">
															<div class="">
																<input type="text" name="LBankAcNo" id="LBankAcNo" class="form-control" placeholder="Enter BANK AC NO.">
															</div>
														</div>
													</div>

													<div class="col-12 col-sm-4 col-md-2 col-lg-4 col-xl-2 d-flex ">
														<div class="form-group">
															<label>BANK NAME & BRANCH :</label>
														</div>
													</div>
													<div class="col-12 col-sm-8 col-md-4 col-lg-8 col-xl-4">
														<div class="form-group field">
															<div class="">
																<input type="text" name="LBankName" id="LBankName" class="form-control" placeholder="ENTER BANK NAME">
															</div>
														</div>
													</div>

													<div class="col-12 col-sm-4 col-md-2 col-lg-3 col-xl-2 d-flex ">
														<div class="form-group">
															<label>PARTY GRADE :</label>
														</div>
													</div>
													<div class="col-12 col-sm-8 col-md-10 col-lg-3 col-xl-10">
														<div class="form-group field">
															<div class="">
																<select name="LPartyGrade" id="LPartyGrade" class="form-control">
																<option value=""> --Select -- </option>
																<option value="A"> A </option>
																<option value="B"> B </option>
																<option value="C"> C </option>
																<option value="D"> D </option>
																</select>
															</div>
														</div>
													</div>
													<div class="col-12 col-sm-4 col-md-2 col-lg-3 col-xl-2 d-flex ">
														<div class="form-group">
															<label>IFSC CODE :</label>
														</div>
													</div>
													<div class="col-12 col-sm-8 col-md-10 col-lg-3 col-xl-10">
														<div class="form-group field">
															<div class="">
																<input type="text" name="LIfscCode" id="LIfscCode"  class="form-control" placeholder="IFSC CODE">
															</div>
														</div>
													</div>

													<div class="col-12 col-sm-4 col-md-2 col-lg-6 col-xl-2 d-flex ">
														<div class="form-group">
															<label>INSURANCE POLICY DETAILS :</label>
														</div>
													</div>
													<div class="col-12 col-sm-8 col-md-4 col-lg-6 col-xl-4">
														<div class="form-group field">
															<div class="">
																<input type="text" name="LInsurancePolicy" id="LInsurancePolicy"  class="form-control" placeholder="INSURANCE POLICT DETAILS">
															</div>
														</div>
													</div>

													<div class="col-12 col-sm-4 col-md-2 col-lg-6 col-xl-2 d-flex ">
														<div class="form-group">
															<label>LOWER TDS JOB AMOUNT LIMIT :</label>
														</div>
													</div>
													<div class="col-12 col-sm-8 col-md-4 col-lg-6 col-xl-4">
														<div class="form-group field">
															<div class="controls">
																<input type="text" name="LLowerTdsAmtLmt" id="LLowerTdsAmtLmt" class="form-control" placeholder="LOWER TDS JOB AMOUNT LIMIT">
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>	
									</div>
									<div class="row">
										<div class="form-group">
											<div class="text-xs-right" style="margin-left: 8px;">
												<button type="submit" class="btn btn-success">Submit</button>
												<button type="button" class="btn btn-default waves-effect mdlclosePartyAC" data-dismiss="modal">Close</button>
											</div>
										</div>
									</div>
								</div>	
							</div>
						</form>
					</div>
		        </div>
		    </div>
		    <div id="responsive-modal-qty" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
		    	<div class="modal-dialog modal-lg">
		        	<div class="modal-content">
		            	<div class="modal-header">
		                	<h4 class="modal-title">Modal Content is Responsive</h4>
		                	<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
		           		</div>
			            <div class="modal-body"></div>
		           	</div>
				</div>
		 	</div>
		</div>
    	<!-- Add New PartyAC Data End -->

    	<!-- Add New Broker Data Start -->
    	<div id="AddNewBrokermdl" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
		    <div class="modal-dialog modal-lg">
		        <div class="modal-content">
		            <div class="modal-header">
		                <h4 class="modal-title">Party Account Data</h4>
		                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
		            </div>
		            <div class="modal-body">
		            	<form class="" method="post" name="addBrokermdlform" id="addBrokermdlform" novalidate>
		            		<input type="hidden" value="" id="Ledger_Id" name="Ledger_Id">
							<div class="row common_master_form_div">
								<div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 ">
									<div class="formtitle">
											<h4 class="backcolor">Account Information</h4>
											<div class="row removemargin">
												<div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
													<div class="row">
														<div class="col-12 col-sm-4 col-md-2 col-lg-2 col-xl-2 d-flex ">
															<div class="form-group">
																<label>CODE :</label>
															</div>
														</div>
														<div class="col-12 col-sm-8 col-md-10 col-lg-10 col-xl-10">
															<div class="form-group ">
																<div class="">
																	<input type="text" name="LCode" id="LCodeData" class="form-control" placeholder="ENTER CODE">
																</div>
															</div>
														</div>
														
														<div class="col-12 col-sm-4 col-md-2 col-lg-3 col-xl-2 d-flex ">
															<div class="form-group">
																<label>A/C TYPE :</label>
															</div>
														</div>
														<div class="col-2 col-sm-8 col-md-8 col-lg-9 col-xl-8">
															<div class="form-group field">
																<div class="controls">
																<select name="AcTypeID" id="AcTypeID" required class="select2 form-control custom-select customvalidation" style="width: 100%">
																	<option value="">--Select-- </option>
																	<?php
																	foreach ($getAcctypeData as $qgetAcctypeData)
																	{
																		?>
																		<option <?php if($qgetAcctypeData->AcTypeID == "12"){echo "selected";}?> value="<?=$qgetAcctypeData->AcTypeID?>" readonly><?=$qgetAcctypeData->ACType?></option>
																		<?php
																	}
																	?>
																</select>
																</div>
															</div>
																
														</div>
														
														<div class="col-12 col-sm-4 col-md-2 col-lg-3 col-xl-2 d-flex ">
															<div class="form-group">
																<label>A/C GROUP  :</label>
															</div>
														</div>
														<div class="col-12 col-sm-8 col-md-10 col-lg-9 col-xl-10">
															<div class="form-group field">
																<div class="">
																	<select name="AcGroupID" id="AcGroupID"  class="AcGroupselect form-control custom-select" style="width: 100%">
																		<option value="">--Select-- </option>
																		<?php
																		foreach ($getAccountData as $qgetAccountData) {
																			?>
																		<option value="<?=$qgetAccountData->AcID;?>"> <?=$qgetAccountData->ACName;?> </option>
																			<?php
																		}
																		?>
																	</select>
																</div>
															</div>
														</div>

														<div class="col-12 col-sm-4 col-md-1 col-lg-2 col-xl-1 d-flex ">
															<div class="form-group">
																<label> NAME :</label>
															</div>
														</div>
														<div class="col-12 col-sm-8 col-md-6 col-lg-10 col-xl-6">
															<div class="form-group field">
																<div class="controls">
																	<input type="LName" name="LName" class="form-control customvalidation" id="LNameData" required="" placeholder="ENTER NAME"> 
																</div>
															</div>
														</div>
														 
														<div class="col-12 col-sm-4 col-md-2 col-lg-2 col-xl-2 d-flex">
															<div class="form-group">
																<label> DHARA :</label>
															</div>
														</div>
														<div class="col-12 col-sm-8 col-md-10 col-lg-3 col-xl-10">
															<div class="form-group field">
																<div class="">
																	<input type="text"  name="LDhara" id="LDhara" placeholder="0.00" class="form-control"> 
																</div>
															</div>
														</div>

														<div class="col-12 col-sm-4 col-md-2 col-lg-3 col-xl-2 d-flex">
															<div class="form-group">
																<label>PUR DHARA :</label>
															</div>
														</div>
														<div class="col-12 col-sm-8 col-md-10 col-lg-3 col-xl-10">
															<div class="form-group field">
																<div class="">
																	<input type="text"  name="LPureDhara" id="LPureDhara" placeholder="0.00" class="form-control"> 
																</div>
															</div>
														</div>

														<div class="col-12 col-sm-4 col-md-2 col-lg-3 col-xl-2 d-flex ">
															<div class="form-group">
																<label> GRACE DAYS :</label>
															</div>
														</div>
														<div class="col-12 col-sm-8 col-md-10 col-lg-2 col-xl-10">
															<div class="form-group field">
																<div class="">
																	<input type="text" name="LGraceDays" id="LGraceDays" class="form-control" placeholder="0"> 
																</div>
															</div>
														</div>
														
														<div class="col-12 col-sm-4 col-md-2 col-lg-3 col-xl-2 d-flex ">
															<div class="form-group">
																<label> RANK LIST :</label>
															</div>
														</div>
														<div class="col-12 col-sm-8 col-md-2 col-lg-4 col-xl-10">
															<div class="form-group field">
																<div class="">
																	<select name="LRankList" id="LRankList" class="form-control">
																		<option value=""> --Select -- </option>
																		<option value="Rank List 1"> Rank List 1 </option>
																		<option value="Rank List 2"> Rank List 2 </option>
																		<option value="Rank List 3"> Rank List 3 </option>
																	</select>
																</div>
															</div>
														</div>
														
														<div class="col-12 col-sm-4 col-md-2 col-lg-3 col-xl-2 d-flex ">
															<div class="form-group">
																<label> BANK CHRG. :</label>
															</div>
														</div>
														<div class="col-12 col-sm-8 col-md-10 col-lg-2 col-xl-10">
															<div class="form-group field">
																<div class="">
																	<input type="text" name="LBankChrg" id="LBankChrg" class="form-control" placeholder="0.00%"> 
																</div>
															</div>
														</div>
														
														<div class="col-12 col-sm-4 col-md-2 col-lg-3 col-xl-2 d-flex ">
															<div class="form-group">
																<label> TDS. % :</label>
															</div>
														</div>
														<div class="col-12 col-sm-8 col-md-2 col-lg-4 col-xl-10">
															<div class="form-group field">
																<div class="">
																	<input type="text" name="LTds" id="LTds" class="form-control" placeholder="0.00">
																</div>
															</div>
														</div>

														<div class="col-12 col-sm-4 col-md-2 col-lg-2 col-xl-2 d-flex">
															<div class="form-group">
																<label>IT RATE :</label>
															</div>
														</div>
														<div class="col-12 col-sm-8 col-md-10 col-lg-10 col-xl-10">
															<div class="form-group field">
																<div class="">
																	<input type="text" name="LItRate" id="LItRate" class="form-control" placeholder="0.00"> 
																</div>
															</div>
														</div>
														<div class="col-12 col-sm-4 col-md-3 col-lg-3 col-xl-3 d-flex ">
															<div class="form-group">
																<label>ADDRESS :</label>
															</div>
														</div>
														<div class="col-12 col-sm-8 col-md-9 col-lg-9 col-xl-9">
															<div class="form-group field">
																<div class="">
																	<input type="text" name="LAddress" id="LAddress" class="form-control" placeholder="ENTER ADDRESS"> 
																</div>
															</div>
														</div>
														<div class="col-12 col-sm-4 col-md-3 col-lg-3 col-xl-3 d-flex ">
															<div class="form-group">
																<label>ADDR. LINE2 :</label>
															</div>
														</div>
														<div class="col-12 col-sm-8 col-md-9 col-lg-9 col-xl-9">
															<div class="form-group field">
																<div class="">
																	<input type="text" name="LAddressLine2" id="LAddressLine2" class="form-control" placeholder="ADDRESS LINE TWO"> 
																</div>
															</div>
														</div>
													</div>
												</div>
												<div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
													<div class="row">
														
														<div class="col-12 col-sm-4 col-md-2 col-lg-3 col-xl-2 d-flex ">
															<div class="form-group">
																<label>OTHER ADDR :</label>
															</div>
														</div>
														<div class="col-12 col-sm-8 col-md-10 col-lg-9 col-xl-10">
															<div class="form-group field">
																<div class="">
																	<input type="text" name="LOtherAddress" id="LOtherAddress" class="form-control" placeholder="OTHER ADDRESS"> 
																</div>
																
															</div>
														</div>
														
														<div class="col-12 col-sm-4 col-md-2 col-lg-3 col-xl-2 d-flex">
															<div class="form-group">
																<label>OTHER. LINE2 :</label>
															</div>
														</div>
														<div class="col-12 col-sm-8 col-md-8 col-lg-9 col-xl-10">
															<div class="form-group field">
																<div class="">
																	<input type="text" name="LOtherLine2" id="LOtherLine2" class="form-control" placeholder="OTHER ADDRESS LINE2"> 
																</div>
															</div>
														</div>

														<div class="col-12 col-sm-4 col-md-2 col-lg-3 col-xl-2 d-flex ">
															<div class="form-group">
																<label>CITY :</label>
															</div>
														</div>
														<div class="col-12 col-sm-8 col-md-10 col-lg-9 col-xl-10">
															<div class="form-group field">
																<div class="">
																	<select name="CityID" id="CityID" class="Cityselect form-control custom-select" style="width: 100%">
																		<option value=""> --Select -- </option>
																		<?php 
																		foreach($getCityData as $qgetCityData)
																		{
																		?>
																		<option value="<?php echo $qgetCityData->CityID; ?>"> <?php echo $qgetCityData->CityName; ?></option>
																		<?php 
																		}
																		?>
																	</select>
																</div>
															</div>
														</div>

														<div class="col-12 col-sm-4 col-md-2 col-lg-3 col-xl-2 d-flex ">
															<div class="form-group">
																<label>PIN:</label>
															</div>
														</div>
														<div class="col-12 col-sm-8 col-md-4 col-lg-3 col-xl-4">
															<div class="form-group field">
																<div class="">
																	<input type="text" name="LPin" id="LPin" class="form-control" placeholder="PIN"> 
																</div>
															</div>
														</div>

														<div class="col-12 col-sm-4 col-md-2 col-lg-3 col-xl-2 d-flex ">
															<div class="form-group">
																<label>DISTANCE :</label>
															</div>
														</div>
														<div class="col-12 col-sm-8 col-md-4 col-lg-3 col-xl-4">
															<div class="form-group field">
																<div class="">
																	<input type="text" name="LDistance" id="LDistance" class="form-control" placeholder="DISTANCE"> 
																</div>
															</div>
														</div>

														<div class="col-12 col-sm-4 col-md-2 col-lg-3 col-xl-2 d-flex ">
															<div class="form-group">
																<label>STATION :</label>
															</div>
														</div>
														<div class="col-12 col-sm-8 col-md-10 col-lg-9 col-xl-10">
															<div class="form-group field">
																<div class="">
																	<select name="StationID" id="StationID"  class="Stationselect form-control custom-select" style="width: 100%">
																	<option value=""> --Select -- </option>
																	<?php 
																	foreach($getStationData as $qgetStationData)
																	{
																	?>
																	<option value="<?php echo $qgetStationData->StationID; ?>"> <?php echo $qgetStationData->StationName; ?></option>
																	<?php 
																	}
																	?>
																	</select>
																</div>
															</div>
														</div>
														
														<div class="col-12 col-sm-4 col-md-2 col-lg-3 col-xl-2 d-flex ">
															<div class="form-group">
																<label>TRANSPORT :</label>
															</div>
														</div>
														<div class="col-12 col-sm-8 col-md-10 col-lg-9 col-xl-10">
															<div class="form-group field">
																<div class="">
																	<select name="TransportID" id="TransportID1"  class="Transportselect form-control custom-select" style="width: 100%">
																		<option value=""> --Select -- </option>
																		<?php 
																		foreach($getTransportData as $qgetTransportData)
																		{
																		?>
																		<option value="<?php echo $qgetTransportData->TransportID; ?>"> <?php echo $qgetTransportData->TransportName; ?></option>
																		<?php 
																		}
																		?>
																	</select>
																</div>
															</div>
														</div>

														<div class="col-12 col-sm-4 col-md-2 col-lg-3 col-xl-2 d-flex ">
															<div class="form-group">
																<label>BROKER :</label>
															</div>
														</div>
														<div class="col-12 col-sm-8 col-md-10 col-lg-9 col-xl-10">
															<div class="form-group field">
																<div class="">
																	<select name="BrokerID" id="BrokerID" class="Brokerselect form-control custom-select" style="width: 100%">
																		<option value=""> --Select -- </option>
																		<?php 
																		foreach($getBrokerData as $qgetBrokerData)
																		{
																		?>
																		<option value="<?php echo $qgetBrokerData->Ledger_Id; ?>"> <?php echo $qgetBrokerData->LName; ?></option>
																		<?php 
																		}
																		?>
																	</select>
																</div>
															</div>
														</div>
														
														<div class="col-12 col-sm-4 col-md-2 col-lg-3 col-xl-2 d-flex ">
															<div class="form-group">
																<label>ITEM :</label>
															</div>
														</div>
														<div class="col-12 col-sm-8 col-md-10 col-lg-9 col-xl-10">
															<div class="form-group field">
																<div class="">
																	<select name="ItemID" id="ItemID"  class="Itemselect form-control custom-select" style="width: 100%">
																		<option value=""> --Select -- </option>
																		<?php 
																		foreach($getItemTypeData as $qgetItemTypeData)
																		{
																		?>
																		<option value="<?php echo $qgetItemTypeData->ItemTypeID; ?>"> <?php echo $qgetItemTypeData->ClothType; ?></option>
																		<?php 
																		}
																		?>
																	</select>
																</div>
															</div>
														</div>
														
														<div class="col-12 col-sm-4 col-md-2 col-lg-3 col-xl-2 d-flex ">
															<div class="form-group">
																<label>SERIES :</label>
															</div>
														</div>
														<div class="col-12 col-sm-8 col-md-10 col-lg-9 col-xl-10">
															<div class="form-group field">
																<div class="controls">
																<select name="SeriesID" id="SeriesID"  class="Seriesselect form-control custom-select" style="width: 100%">
																	<option value=""> --Select -- </option>
																	<?php 
																	foreach($LabelData as $qLabelData)
																	{
																	?>
																	<option value="<?php echo $qLabelData->screenBrandID; ?>"> <?php echo $qLabelData->brandName; ?></option>
																	<?php 
																	}
																	?>
																</select>
																</div>
															</div>
														</div>
														
													</div>
												</div>
											</div>	
									</div>
										
									<div class="formtitle">
										<h4 class="backcolor">MAIN DETAILS</h4>
										<div class="row removemargin">
											<div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
												<div class="row">
													<div class="col-12 col-sm-4 col-md-2 col-lg-4 col-xl-2 d-flex ">
														<div class="form-group">
															<label>CONTACT PERSON :</label>
														</div>
													</div>
													<div class="col-12 col-sm-8 col-md-10 col-lg-8 col-xl-10">
														<div class="form-group field">
															<div class="">
																<input type="text" name="LContactPerson" id="LContactPerson" class="form-control" placeholder="ENTER NAME"> 
															</div>
														</div>
													</div>
													
													<div class="col-12 col-sm-4 col-md-2 col-lg-3 col-xl-2 d-flex ">
														<div class="form-group">
															<label>MOBILE :</label>
														</div>
													</div>
													<div class="col-12 col-sm-8 col-md-4 col-lg-9 col-xl-4">
														<div class="form-group field"  id="staticParent">
															<div class="">
																<input type="text" name="LMobile" id="LMobile" class="form-control" placeholder="9898989695" maxlength="10"> 
															</div>
														</div>
													</div>
													
													<div class="col-12 col-sm-4 col-md-2 col-lg-3 col-xl-2 d-flex ">
														<div class="form-group">
															<label>REMARK :</label>
														</div>
													</div>
													<div class="col-12 col-sm-8 col-md-4 col-lg-9 col-xl-4">
														<div class="form-group field" id="staticParent1">
															<div class="">
																<input type="text" name="LRemark" id="LRemark" class="form-control" placeholder="ENTER REMARK"> 
															</div>
														</div>
													</div>

													<div class="col-12 col-sm-4 col-md-2 col-lg-2 col-xl-2 d-flex ">
														<div class="form-group">
															<label>PHONE1 :</label>
														</div>
													</div>
													<div class="col-12 col-sm-8 col-md-4 col-lg-4 col-xl-4">
														<div class="form-group field"  id="staticParent">
															<div class="">
																<input type="text" name="LPhone1" id="LPhone1"  class="form-control" placeholder="ENTER PHONE 1"> 
															</div>
														</div>
													</div>
													
													<div class="col-12 col-sm-4 col-md-2 col-lg-2 col-xl-2 d-flex ">
														<div class="form-group">
															<label>PHONE2 :</label>
														</div>
													</div>
													<div class="col-12 col-sm-8 col-md-4 col-lg-4 col-xl-4">
														<div class="form-group field" id="staticParent1">
															<div class="">
																<input type="text" name="LPhone2" id="LPhone2"  class="form-control" placeholder="ENTER PHONE 2"> 
															</div>
														</div>
													</div>
												</div>
											</div>
											<div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
												<div class="row">
													
													<div class="col-12 col-sm-4 col-md-2 col-lg-3 col-xl-2 d-flex ">
														<div class="form-group">
															<label>EMAIL ID :</label>
														</div>
													</div>
													<div class="col-12 col-sm-8 col-md-4 col-lg-9 col-xl-4">
														<div class="form-group field">
															<div class="">
																<input type="text" name="LEmailID" id="LEmailID"  class="form-control" placeholder="ENTER EMAIL ID"> 
															</div>
														</div>
													</div>
													
													<div class="col-12 col-sm-4 col-md-2 col-lg-3 col-xl-2 d-flex ">
														<div class="form-group">
															<label>PAN NO. :</label>
														</div>
													</div>
													<div class="col-12 col-sm-8 col-md-4 col-lg-9 col-xl-4">
														<div class="form-group field"  id="staticParent">
															<div class="">
																<input type="text" name="LPanNo" id="LPanNo" class="form-control" placeholder="ENTER PAN NO"> 
															</div>
														</div>
													</div>
													
													<div class="col-12 col-sm-4 col-md-2 col-lg-3 col-xl-2 d-flex ">
														<div class="form-group">
															<label>LEDGER TYPE :</label>
														</div>
													</div>
													<div class="col-12 col-sm-8 col-md-4 col-lg-9 col-xl-4">
														<div class="form-group field" id="staticParent1">
															<div class="">
																<select name="LedgerType" id="LedgerType" class="form-control">
																	<option value=""> --Select Type Type-- </option>
																	<option value="Individual">Individual</option>
																	<option value="Proprietors">Proprietors</option>
																	<option value="Proprietorshipship">Proprietorshipship (Non Audited)</option>
																	<option value="Partnership">Partnership</option>
																	<option value="pvtltdco">PVT. LTD. CO.</option>
																</select>
															</div>
														</div>
													</div>

													<div class="col-12 col-sm-4 col-md-2 col-lg-3 col-xl-2 d-flex ">
														<div class="form-group">
															<label>GSTIN / UIN 	:</label>
														</div>
													</div>
													<div class="col-12 col-sm-8 col-md-4 col-lg-5 col-xl-4">
														<div class="form-group field" id="staticParent2">
															<div class="">
																<input type="text"  name="LGstin" id="LGstin" class="form-control" placeholder="ENTER GSTIN / UIN"  > 
															</div>
														</div>
													</div>

													<div class="col-12 col-sm-4 col-md-2 col-lg-3 col-xl-2 d-flex ">
														<div class="form-group">
															<label>SELECTED :</label>
														</div>
													</div>
													<div class="col-12 col-sm-8 col-md-4 col-lg-1 col-xl-4">
														<div class="form-group field" id="staticParent2">
															<div class="">
																<input type="checkbox"  name="IsSselected" id="IsSselected" placeholder="ENTER MOBILE"  > 
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>	
									</div>

									<div class="formtitle">
										<h4 class="backcolor">OTHER DETAILS</h4>
										<div class="row removemargin">
											<div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
												<div class="row">
													<div class="col-12 col-sm-4 col-md-2 col-lg-3 col-xl-2 d-flex ">
														<div class="form-group">
															<label>GST NO. (VAT) :</label>
														</div>
													</div>
													<div class="col-12 col-sm-8 col-md-4 col-lg-4 col-xl-4">
														<div class="form-group field">
															<div class="">
																<input type="text" name="LGstNo" id="LGstNo"  class="form-control" placeholder="ENTER DEBIT LIMIT"> 
															</div>
														</div>
													</div>
													
													<div class="col-12 col-sm-4 col-md-2 col-lg-2 col-xl-2 d-flex ">
														<div class="form-group">
															<label>CST NO. :</label>
														</div>
													</div>
													<div class="col-12 col-sm-8 col-md-4 col-lg-3 col-xl-4">
														<div class="form-group field">
															<div class="">
																<input type="text" name="LCstNo" id="LCstNo" class="form-control" placeholder="Enter CST No"> 
															</div>
														</div>
													</div>
													
													<div class="col-12 col-sm-4 col-md-2 col-lg-3 col-xl-2 d-flex ">
														<div class="form-group">
															<label>EXCISE REG. :</label>
														</div>
													</div>
													<div class="col-12 col-sm-8 col-md-4 col-lg-3 col-xl-4">
														<div class="form-group field">
															<div class="">
																<input type="text" name="LExciseReg" id="LExciseReg"  class="form-control" placeholder="ENTER LIMIT DAYS">
															</div>
														</div>
													</div>
													<div class="col-12 col-sm-4 col-md-2 col-lg-3 col-xl-2 d-flex ">
														<div class="form-group">
															<label>SALE INCENT :</label>
														</div>
													</div>
													<div class="col-12 col-sm-8 col-md-4 col-lg-3 col-xl-4">
														<div class="form-group field">
															<div class="">
																<input type="text" name="LSaleIncent" id="LSaleIncent" class="form-control" placeholder="Enter Limit Days">
															</div>
														</div>
													</div>
													

													<div class="col-12 col-sm-4 col-md-2 col-lg-4 col-xl-2 d-flex ">
														<div class="form-group">
															<label>DEBIT LIMIT (RS.) :</label>
														</div>
													</div>
													<div class="col-12 col-sm-8 col-md-4 col-lg-3 col-xl-4">
														<div class="form-group field">
															<div class="">
																<input type="text" name="LDebitLimit" id="LDebitLimit" class="form-control" placeholder="Enter Debit Limit"> 
															</div>
														</div>
													</div>
													
													<div class="col-12 col-sm-4 col-md-2 col-lg-3 col-xl-2 d-flex ">
														<div class="form-group">
															<label>LIMIT DAYS :</label>
														</div>
													</div>
													<div class="col-12 col-sm-8 col-md-4 col-lg-2 col-xl-4">
														<div class="form-group field">
															<div class="">
																<input type="text" name="LLimitDays" id="LLimitDays" class="form-control" placeholder="Enter Limit Days"> 
															</div>
														</div>
													</div>
												</div>
											</div>
											<div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
												<div class="row">
													
													<div class="col-12 col-sm-4 col-md-2 col-lg-4 col-xl-2 d-flex ">
														<div class="form-group">
															<label>BANK A/C NO. :</label>
														</div>
													</div>
													<div class="col-12 col-sm-8 col-md-4 col-lg-8 col-xl-4">
														<div class="form-group field">
															<div class="">
																<input type="text" name="LBankAcNo" id="LBankAcNo" class="form-control" placeholder="Enter BANK AC NO.">
															</div>
														</div>
													</div>

													<div class="col-12 col-sm-4 col-md-2 col-lg-4 col-xl-2 d-flex ">
														<div class="form-group">
															<label>BANK NAME & BRANCH :</label>
														</div>
													</div>
													<div class="col-12 col-sm-8 col-md-4 col-lg-8 col-xl-4">
														<div class="form-group field">
															<div class="">
																<input type="text" name="LBankName" id="LBankName" class="form-control" placeholder="ENTER BANK NAME">
															</div>
														</div>
													</div>

													<div class="col-12 col-sm-4 col-md-2 col-lg-3 col-xl-2 d-flex ">
														<div class="form-group">
															<label>PARTY GRADE :</label>
														</div>
													</div>
													<div class="col-12 col-sm-8 col-md-10 col-lg-3 col-xl-10">
														<div class="form-group field">
															<div class="">
																<select name="LPartyGrade" id="LPartyGrade" class="form-control">
																<option value=""> --Select -- </option>
																<option value="A"> A </option>
																<option value="B"> B </option>
																<option value="C"> C </option>
																<option value="D"> D </option>
																</select>
															</div>
														</div>
													</div>
													<div class="col-12 col-sm-4 col-md-2 col-lg-3 col-xl-2 d-flex ">
														<div class="form-group">
															<label>IFSC CODE :</label>
														</div>
													</div>
													<div class="col-12 col-sm-8 col-md-10 col-lg-3 col-xl-10">
														<div class="form-group field">
															<div class="">
																<input type="text" name="LIfscCode" id="LIfscCode"  class="form-control" placeholder="IFSC CODE">
															</div>
														</div>
													</div>

													<div class="col-12 col-sm-4 col-md-2 col-lg-6 col-xl-2 d-flex ">
														<div class="form-group">
															<label>INSURANCE POLICY DETAILS :</label>
														</div>
													</div>
													<div class="col-12 col-sm-8 col-md-4 col-lg-6 col-xl-4">
														<div class="form-group field">
															<div class="">
																<input type="text" name="LInsurancePolicy" id="LInsurancePolicy"  class="form-control" placeholder="INSURANCE POLICT DETAILS">
															</div>
														</div>
													</div>

													<div class="col-12 col-sm-4 col-md-2 col-lg-6 col-xl-2 d-flex ">
														<div class="form-group">
															<label>LOWER TDS JOB AMOUNT LIMIT :</label>
														</div>
													</div>
													<div class="col-12 col-sm-8 col-md-4 col-lg-6 col-xl-4">
														<div class="form-group field">
															<div class="controls">
																<input type="text" name="LLowerTdsAmtLmt" id="LLowerTdsAmtLmt" class="form-control" placeholder="LOWER TDS JOB AMOUNT LIMIT">
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>	
									</div>
									<div class="row">
										<div class="form-group">
											<div class="text-xs-right" style="margin-left: 8px;">
												<button type="submit" class="btn btn-success">Submit</button>
												<button type="button" class="btn btn-default waves-effect mdlcloseBroker1" data-dismiss="modal">Close</button>
											</div>
										</div>
									</div>
								</div>	
							</div>
						</form>
					</div>
		        </div>
		    </div>
		    <div id="responsive-modal-qty" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
		    	<div class="modal-dialog modal-lg">
		        	<div class="modal-content">
		            	<div class="modal-header">
		                	<h4 class="modal-title">Modal Content is Responsive</h4>
		                	<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
		           		</div>
			            <div class="modal-body"></div>
		           	</div>
				</div>
		 	</div>
		</div>
    	<!-- Add New Broker Data End -->

		<!-- Add New Haste Data Start -->
    	<div id="AddNewHastemdl" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
		    <div class="modal-dialog modal-lg">
		        <div class="modal-content">
		            <div class="modal-header">
		                <h4 class="modal-title">Haste Account Data</h4>
		                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
		            </div>
		            <div class="modal-body">
		            	<form class="" method="post" name="addHastemdlform" id="addHastemdlform" novalidate>
		            		<input type="hidden" value="" id="HasteID" name="HasteID">
							<div class="row common_master_form_div">
								<div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 ">
									<div class="formtitle">
											<h4 class="backcolor">Account Information</h4>
											<div class="row removemargin">
												<div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
													<div class="row">
														<div class="col-12 col-sm-4 col-md-2 col-lg-4 col-xl-2 d-flex ">
															<div class="form-group">
																<label>ADATIYA NAME  :</label>
															</div>
														</div>
														<div class="col-12 col-sm-8 col-md-10 col-lg-8 col-xl-10">
															<div class="form-group field">
																<div class="">
																	<select name="AdatiyaName" id="AdatiyaName" class="form-control Adatiyaselect custom-select" style="width: 100%">
																		<option value=""> -- Select -- </option>
																		<?php
																		foreach ($GetAadtiyaList as $qGetAadtiyaList)
																		{
																			?>
																			<option value="<?=$qGetAadtiyaList->AdatiyaName;?>"><?=$qGetAadtiyaList->AdatiyaName;?></option>
																			<?php
																		}
																		?>
																	</select>
																</div>
															</div>
														</div>
														<div class="col-12 col-sm-4 col-md-2 col-lg-2 col-xl-2 d-flex">
															<div class="form-group">
																<label> HASTE :</label>
															</div>
														</div>
														<div class="col-12 col-sm-8 col-md-10 col-lg-10 col-xl-10">
															<div class="form-group field">
																<div class="controls">
																	<input type="text"  name="HasteName" id="HasteName" placeholder="ENTER HASTE" required="" class="form-control customvalidation"> 
																</div>
															</div>
														</div>
														<div class="col-12 col-sm-4 col-md-2 col-lg-3 col-xl-2 d-flex ">
															<div class="form-group">
																<label>TRANSPORT  :</label>
															</div>
														</div>
														<div class="col-12 col-sm-8 col-md-10 col-lg-8 col-xl-10">
															<div class="form-group field">
																<div class="">
																	<select name="TransportID" id="TransportIDData"  class="form-control Transportselect form-control custom-select" style="width: 100%">
																		<option value=""> --Select -- </option>
																		<?php
																		foreach ($getTransportData as $qgetTransportData)
																		{
																			?>
																			<option value="<?=$qgetTransportData->TransportID?>"> <?=$qgetTransportData->TransportName?> </option>
																			<?php
																		}
																		?>
																		
																	</select>
																</div>
															</div>
														</div>
														<div class="col-12 col-sm-2 col-md-2 col-lg-1 col-xl-2">
																	<i data-toggle="modal" data-target="#AddNewTransportmdl" class="fa fa-plus-circle"></i>
																</div>
														<div class="col-12 col-sm-4 col-md-2 col-lg-3 col-xl-2 d-flex ">
															<div class="form-group">
																<label>STATION :</label>
															</div>
														</div>
														<div class="col-12 col-sm-8 col-md-10 col-lg-8 col-xl-10">
															<div class="form-group field">
																<div class="">
																	<select name="StationID" id="StationID"  class="Stationselect form-control custom-select" style="width: 100%">
																		<option value=""> --Select -- </option>
																		<?php
																		foreach ($getStationData as $qgetStationData)
																		{
																			?>
																			<option value="<?=$qgetStationData->StationID?>"> <?=$qgetStationData->StationName?> </option>
																			<?php
																		}
																		?>
																		
																	</select>
																</div>
															</div>
														</div>
														<div class="col-12 col-sm-2 col-md-2 col-lg-1 col-xl-2">
															<i data-toggle="modal" data-target="#AddNewStationmdl" class="fa fa-plus-circle"></i>
														</div>
													</div>
												</div>
												<div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
													<div class="row">
														<div class="col-12 col-sm-4 col-md-2 col-lg-4 col-xl-2 d-flex ">
															<div class="form-group">
																<label>SCREEN SERIES :</label>
															</div>
														</div>
														<div class="col-12 col-sm-8 col-md-10 col-lg-7 col-xl-10">
															<div class="form-group field">
																<div class="">
																	<select name="ScreenSeriesID" id="SeriesIDData"  class="Seriesselect form-control custom-select" style="width: 100%">
																		<option value=""> --Select -- </option>
																			<?php 
																			foreach($LabelData as $qLabelData)
																			{
																			?>
																			<option value="<?php echo $qLabelData->screenBrandID; ?>"> <?php echo $qLabelData->brandName; ?></option>
																			<?php 
																			}
																			?>
																	</select>
																</div>
															</div>
														</div>
														<div class="col-12 col-sm-2 col-md-2 col-lg-1 col-xl-2">
															<i data-toggle="modal" data-target="#AddNewScreenSeriesmdl" class="fa fa-plus-circle"></i>
														</div>
														<div class="col-12 col-sm-4 col-md-2 col-lg-2 col-xl-2 d-flex">
															<div class="form-group">
																<label>GSTIN :</label>
															</div>
														</div>
														<div class="col-12 col-sm-8 col-md-10 col-lg-10 col-xl-10">
															<div class="form-group field">
																<div class="">
																	<input type="text" id="HasteGstIn" name="HasteGstIn" placeholder="ENTER GSTIN" class="form-control"> 
																</div>
															</div>
														</div>	
														<div class="col-12 col-sm-4 col-md-2 col-lg-3 col-xl-2 d-flex">
															<div class="form-group">
																<label>ADDRESS :</label>
															</div>
														</div>
														<div class="col-12 col-sm-8 col-md-10 col-lg-9 col-xl-10">
															<div class="form-group field">
																<div class="">
																	<input type="text"  name="HasteAddress1" id="HasteAddress1" placeholder="ENTER ADDRESS 1" class="form-control"> 
																</div>
															</div>
														</div>
														<div class="col-12 col-sm-4 col-md-2 col-lg-3 col-xl-2 d-flex">
															<div class="form-group">
															</div>
														</div>
														<div class="col-12 col-sm-8 col-md-10 col-lg-9 col-xl-10">
															<div class="form-group field">
																<div class="">
																	<input type="text"  name="HasteAddress2" id="HasteAddress2" placeholder="ENTER ADDRESS 2" class="form-control">
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>	
										</div>
										
										<div class="formtitle">
											<div class="row removemargin">
												<div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
													<div class="row">
														<div class="col-12 col-sm-4 col-md-1 col-lg-1 col-xl-1 d-flex ">
															<div class="form-group">
																<label>REMARK :</label>
															</div>
														</div>
														<div class="col-12 col-sm-8 col-md-11 col-lg-5 col-xl-11">
															<div class="form-group">
																<div class="">
																	<input type="text" id="HasteRemark" name="HasteRemark" placeholder="ENTER REMARK" class="form-control"> 
																</div>
															</div>
														</div>
													</div>
												</div>
											
											</div>
										</div>
										
										<div class="formtitle">
											<h4 class="backcolor">CONTACT  Information</h4>
											<div class="row removemargin">
												<div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
													<div class="row">
														<div class="col-12 col-sm-4 col-md-2 col-lg-3 col-xl-2 d-flex ">
															<div class="form-group">
																<label>CONTACT :</label>
															</div>
														</div>
														<div class="col-12 col-sm-8 col-md-10 col-lg-9 col-xl-10">
															<div class="form-group ">
																<div class="">
																	<input type="text" name="HasteContact" id="HasteContact" class="form-control" placeholder="ENTER CONTACT"> 
																</div>
															</div>
														</div>
														<div class="col-12 col-sm-4 col-md-2 col-lg-3 col-xl-2 d-flex ">
															<div class="form-group">
																<label>MOBILE :</label>
															</div>
														</div>
														<div class="col-12 col-sm-8 col-md-10 col-lg-9 col-xl-10">
															<div class="form-group ">
																<div class="">
																	<input type="text" name="HasteMobile" id="HasteMobile" maxlength="10" class="form-control" placeholder="ENTER MOBILE"> 
																</div>
															</div>
														</div>
														<div class="col-12 col-sm-4 col-md-2 col-lg-3 col-xl-2 d-flex ">
															<div class="form-group">
																<label>EMAIL ID :</label>
															</div>
														</div>
														<div class="col-12 col-sm-8 col-md-10 col-lg-9 col-xl-10">
															<div class="form-group ">
																<div class="">
																	<input type="text" id="HasteEmailID" name="HasteEmailID" class="form-control" placeholder="ENTER EMAIL ID"> 
																</div>
															</div>
														</div>
													</div>
												</div>
												<div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
													<div class="row">
														
														<div class="col-12 col-sm-4 col-md-2 col-lg-3 col-xl-2 d-flex ">
															<div class="form-group">
																<label>PHONE 1 :</label>
															</div>
														</div>
														<div class="col-12 col-sm-8 col-md-10 col-lg-9 col-xl-10">
															<div class="form-group">
																<div class="">
																	<input type="text" name="HastePhone1"  id="HastePhone1"  class="form-control" placeholder="ENTER PHONE 1"> 
																</div>
															</div>
														</div>
														<div class="col-12 col-sm-4 col-md-2 col-lg-3 col-xl-2 d-flex ">
															<div class="form-group">
																<label>PHONE 2 :</label>
															</div>
														</div>
														<div class="col-12 col-sm-8 col-md-10 col-lg-9 col-xl-10">
															<div class="form-group">
																<div class="">
																	<input type="text" name="HastePhone2" id="HastePhone2" maxlength="10" class="form-control" placeholder="ENTER PHONE 2"> 
																</div>
															</div>
														</div>
														<div class="col-12 col-sm-4 col-md-2 col-lg-3 col-xl-2 d-flex ">
															<div class="form-group">
																<label>FAX :</label>
															</div>
														</div>
														<div class="col-12 col-sm-8 col-md-10 col-lg-9 col-xl-10">
															<div class="form-group ">
																<div class="">
																	<input type="text" name="HasteFax" id="HasteFax" class="form-control" placeholder="ENTER FAX"> 
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									<div class="row">
										<div class="form-group">
											<div class="text-xs-right" style="margin-left: 8px;">
												<button type="submit" class="btn btn-success">Submit</button>
												<button type="button" class="btn btn-default waves-effect mdlcloseHaste" data-dismiss="modal">Close</button>
											</div>
										</div>
									</div>
								</div>	
							</div>
						</form>
					</div>
		        </div>
		    </div>
		    <div id="responsive-modal-qty" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
		    	<div class="modal-dialog modal-lg">
		        	<div class="modal-content">
		            	<div class="modal-header">
		                	<h4 class="modal-title">Modal Content is Responsive</h4>
		                	<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
		           		</div>
			            <div class="modal-body"></div>
		           	</div>
				</div>
		 	</div>
		</div>
    	<!-- Add New Haste Data End -->

    	<!--  Add New Station Data Start -->
    	<div id="AddNewStationmdl" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
		    <div class="modal-dialog">
		        <div class="modal-content">
		        	<form  action="" class="" method="post" name="AddStationmdl" id="AddStationmdl" novalidate>
			            <div class="modal-header">
			                <h4 class="modal-title">Station Master</h4>
			                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
			            </div>
			            <div class="modal-body">
			            	<input type="hidden" name="StationID" id="StationID" value="">
			               	<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<h5>Station Master</h5>
										<div class="controls">
											<input type="text" name="StationName" id="StationName" required="" class="form-control customvalidation"  value="" placeholder="Enter Account Type"> 
										</div>
									</div>
								</div>
							</div>
			            </div>
			            <div class="modal-footer">
			                <button type="button" class="btn btn-default waves-effect mdlcloseStation" data-dismiss="modal">Close</button>
			               	<button type="submit" class="btn btn-success">Submit</button>
			            </div>
		        </form>
		        </div>
		    </div>
		</div>
    	<!--  Add New Station Data End -->
    	<!-- Add New Transport Data Start -->
    	<div id="AddNewTransportmdl" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
		    <div class="modal-dialog">
		        <div class="modal-content">
		        	<form  action="" class="" method="post" name="AddTransportmdl" id="AddTransportmdl" novalidate>
			            <div class="modal-header">
			                <h4 class="modal-title">Transport Master</h4>
			                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
			            </div>
			            <div class="modal-body">
			            	<input type="hidden" name="TransportID" id="TransportID" value="">
			               	<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<h5>Transport Name</h5>
										<div class="controls">
											<input type="text" name="TransportName" id="TransportName" required="" class="form-control customvalidation"  value="" placeholder="Enter Transport Name"> 
										</div>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<h5>Transport Address</h5>
										<div class="">
											<textarea name="TAddress" id="TAddress" class="form-control"></textarea>
										</div>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<h5>Phone 1</h5>
										<div class="">
											<input type="text" name="TPhone1" id="TPhone1"  class="form-control"  value="" placeholder="Enter Phone1"> 
										</div>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<h5>Phone 2</h5>
										<div class="">
											<input type="text" name="TPhone2" id="TPhone2" class="form-control"  value="" placeholder="Enter Phone2"> 
										</div>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<h5>Mobile No.</h5>
										<div class="">
											<input type="text" name="TMobile" id="TMobile" class="form-control"  value="" placeholder="Mobile No." maxlength="10"> 
										</div>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<h5>TEway GSTIN/ID</h5>
										<div class="">
											<input type="text" name="TEway" id="TEway" class="form-control"  value="" placeholder="Enter TEway GSTIN/ID"> 
										</div>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<h5>Mode</h5>
										<div class="">
											<select id="TMode" name="TMode" class="form-control">
												<option value="">Select Mode</option>
	                                               	<option value="Road">ROAD</option>
													<option value="Rail">RAIL</option>
													<option value="Air">AIR</option>
													<option value="Ship">SHIP</option>
	                                            </select>											
											</select>
										</div>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group field">
										<h5>IsActive? </h5>
										<div class="">
											<input type="checkbox" name="isActive" id="isActive"  value="1">
										<div class="help-block"></div></div>
									</div>
								</div>
							</div>
			            </div>
			            <div class="modal-footer">
			                <button type="button" class="btn btn-default waves-effect mdlcloseTransport" data-dismiss="modal">Close</button>
			               	<button type="submit" class="btn btn-success">Submit</button>
			            </div>
		        </form>
		        </div>
		    </div>
		</div>
    	<!-- Add New Transport Data End -->

		<div class="row page-titles">
			<div class="col-md-5 align-self-center">
				<h4 class="text-themecolor">Sales Order</h4>
			</div>
			<div class="col-md-7 align-self-center text-right">
				<div class="d-flex justify-content-end align-items-center">
					<ol class="breadcrumb">
						<li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
						<li class="breadcrumb-item active">Sales Order</li>
					</ol>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="card" style="width: 100%;">
				<div class="card-body p-b-0">
					<!-- Nav tabs -->
					<ul class="nav nav-tabs customtab2" role="tablist">
						<li class="nav-item"> <a class="nav-link active" data-toggle="tab" href="#home7" role="tab"><span class="hidden-sm-up"><i class="ti-home"></i></span> <span class="hidden-xs-down">Sales Order</span></a> </li>
						<li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#profile7" role="tab"><span class="hidden-sm-up"><i class="ti-user"></i></span> <span class="hidden-xs-down">Add Form</span></a> </li>
						<?php
						if(!empty($editsaleOrderdata))
						{
						?>
							<li class="nav-item"> <a class="nav-link foractive" data-toggle="tab" href="#editform" role="tab"><span class="hidden-sm-up"><i class="ti-user"></i></span> <span class="hidden-xs-down">Edit Form</span></a> </li>
						<?php
						}
						?>
					</ul>
					<!-- Tab panes -->
					<div class="tab-content">
						<div class="tab-pane active" id="home7" role="tabpanel">
							<div class="p-20">
								<div class="table-responsive">
							        <table id="example23" class="display nowrap table table-hover table-striped table-bordered" cellspacing="0" width="100%">
							            <thead>
							                <tr>
							                    <th>Action</th>
							                    <th>Sr. No.</th>
							                    <th>Order No.</th>
							                    <th>Party</th>
							                    <th>Voucher</th>
							                    <th>Sale Date</th>
							                    <th>Bill Amount</th>
							                    <th>Paid Date</th>
							                    <th>Rec Pcs</th>
							                    <th>Rec Mts</th>
							                </tr>
							            </thead>
							            <tbody>
							            	<?php
							            	$i=1;
							            	foreach ($GetAllSellOrderData as $qGetAllSellOrderData)
							            	{
							            	?>
							            	<tr>
							                    <td class="editdelaction">
							                        <a href="<?=base_url();?>Transaction_controller/SalesOrder?SaleOrderID=<?=$qGetAllSellOrderData->SaleOrderID;?>" ><i class="fa fa-edit"></i></a>&nbsp;&nbsp;
							                        <a href="javascript:deletedata('<?=$qGetAllSellOrderData->SaleOrderID;?>','SaleOrderdelete');"><i class="fa fa-trash-o"></i></a>
							                        <a href="<?=base_url();?>Transaction_controller/printSaleOrder?printSale=<?=$qGetAllSellOrderData->SaleOrderID;?>" ><i class="fa fa-print"></i></a>&nbsp;&nbsp;
							                    </td>
							                    <td><?=$i++;?></td>
							                    <td><?=$qGetAllSellOrderData->SaleOrderNo;?></td>
							                    <td><?=$qGetAllSellOrderData->LName;?></td>
							                    <td><?=$qGetAllSellOrderData->SaleVoucher;?></td>
							                    <td><?=$qGetAllSellOrderData->SaleDate;?></td>
							                    <td><?=$qGetAllSellOrderData->SaleBillAmt;?></td>
							                    <td><?=$qGetAllSellOrderData->SalePaidDate;?></td>
							                    <td><?=$qGetAllSellOrderData->RecSalePcs;?></td>
							                    <td><?=$qGetAllSellOrderData->RecSaleMts;?></td>
							                </tr>
							            	<?php                                        		
							            	}
							            	?>
							            </tbody>
							        </table>
							    </div>
							</div>
						</div>
						<div class="tab-pane  p-20" id="profile7" role="tabpanel">
							<form action="" class="" method="post" name="addSalesOrderform" id="addSalesOrderform" novalidate>
								<?php
								if(empty($editsaleOrderdata))
								{
									?>
										<input type="hidden" value="" id="SaleOrderID" name="SaleOrderID">
									<?php
								}
								?>
								<div class="row common_master_form_div">
									<div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 ">
										<div class="formtitle">
											<div class="row removemargin">
												<div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
													<div class="row">

														<div class="col-12 col-sm-4 col-md-2 col-lg-3 col-xl-2 d-flex ">
															<div class="form-group">
																<label>COMAPNY :</label>
															</div>
														</div>
														<div class="col-12 col-sm-8 col-md-10 col-lg-9 col-xl-10">
															<div class="form-group field">
																<div class="controls">
																	<select name="CompanyID" id="CompanyID"  class="CompanySelect   form-control custom-select" style="width: 100%">
																		<option value=""> --Select -- </option>
																		<?php
																		foreach ($getCompanyData as $qgetCompanyData)
																		{
																			?>
																			<option value="<?=$qgetCompanyData->CompanyID ?>"> <?=$qgetCompanyData->CompanyName?> </option>
																			<?php
																		}
																		?>
																	</select>
																</div>
															</div>
														</div>

														<div class="col-12 col-sm-4 col-md-2 col-lg-2 col-xl-2 d-flex">
															<div class="form-group">
																<label> VOUCHER :</label>
															</div>
														</div>
													
														<div class="col-12 col-sm-8 col-md-10 col-lg-4 col-xl-10">
															<div class="form-group field">
																<div>
																	<input type="text"  name="SaleVoucher" id="SaleVoucher"  class="form-control" value="<?php echo $VoucherNo; ?>" placeholder="Voucher"> 
																</div>
															</div>
														</div>
														<div class="col-12 col-sm-4 col-md-2 col-lg-2 col-xl-2 d-flex ">
															<div class="form-group">
																<label>OFFER :</label>
															</div>
														</div>
														<div class="col-12 col-sm-8 col-md-10 col-lg-4 col-xl-10">
															<div class="form-group field">
																<div class="">
																	<input type="text"  name="SaleOffer" id="SaleOffer" class="form-control" placeholder="Offer">
																</div>
															</div>
														</div>


														<div class="col-12 col-sm-4 col-md-2 col-lg-2 col-xl-2 d-flex ">
															<div class="form-group">
																<label>PARTY :</label>
															</div>
														</div>
														<div class="col-12 col-sm-8 col-md-10 col-lg-9 col-xl-10">
															<div class="form-group field">
																<div class="controls">
																	<select name="PartyID" id="PartyID"  class="PartyACSelect   form-control custom-select customvalidation" style="width: 100%" onchange="getpartyDetail(this);">
																		<option value=""> --Select -- </option>
																		<?php
																		foreach ($getpartyacData as $getpartyacData)
																		{
																			?>
																			<option value="<?=$getpartyacData->Ledger_Id ?>"> <?=$getpartyacData->LName?> </option>
																			<?php
																		}
																		?>
																	</select>
																</div>
															</div>
														</div>
														<div class="col-12 col-sm-2 col-md-2 col-lg-1 col-xl-2">
															<i data-toggle="modal" data-target="#AddNewPartyACmdl" class="fa fa-plus-circle"></i>
														</div>
														<div class="col-12 col-sm-4 col-md-2 col-lg-2 col-xl-2 d-flex ">
															<div class="form-group">
																<label>STATE :</label>
															</div>
														</div>
														<div class="col-12 col-sm-8 col-md-10 col-lg-10 col-xl-10">
															<div class="form-group field">
																<div class="">
																	<select name="StateID" id="StateIDData"  class="StateSelect   form-control custom-select" style="width: 100%">
																		<option value=""> --Select -- </option>
																		<?php
																		foreach ($getStateData as $qgetStateData)
																		{
																			?>
																			<option value="<?=$qgetStateData->StateID ?>"> <?=$qgetStateData->StateName?> </option>
																			<?php
																		}
																		?>
																		
																	</select>
																</div>
															</div>
														</div>

														<div class="col-12 col-sm-4 col-md-2 col-lg-3 col-xl-2 d-flex ">
															<div class="form-group">
																<label>ORDER NO :</label>
															</div>
														</div>
														<div class="col-12 col-sm-8 col-md-10 col-lg-3 col-xl-10">
															<div class="form-group field">
																<div class="">
																	<input type="text"   name="SaleOrderNo" id="SaleOrderNo" class="form-control" value="<?php echo $OrderNoData; ?>" placeholder="OrderNo"> 
																</div>
															</div>
														</div>
														<div class="col-12 col-sm-4 col-md-2 col-lg-3 col-xl-2 d-flex ">
															<div class="form-group">
																<label>LR NO./AWB :</label>
															</div>
														</div>
														<div class="col-12 col-sm-8 col-md-10 col-lg-3 col-xl-10">
															<div class="form-group field">
																<div class="">
																	<input type="text"   name="SaleLrNoAwb" id="SaleLrNoAwb" class="form-control" placeholder="LrNoAwb"> 
																</div>
															</div>
														</div>

														<div class="col-12 col-sm-4 col-md-2 col-lg-3 col-xl-2 d-flex ">
															<div class="form-group">
																<label>HASTE :</label>
															</div>
														</div>
														<div class="col-12 col-sm-8 col-md-10 col-lg-8 col-xl-10">
															<div class="form-group field">
																<div class="controls">
																	<select name="HasteID" id="HasteID"  class="HasteSelect   form-control custom-select" style="width: 100%">
																		<option value=""> --Select -- </option>
																		<?php
																		foreach ($GetHasteList as $qGetHasteList)
																		{
																			?>
																			<option value="<?=$qGetHasteList->HasteID ?>"> <?=$qGetHasteList->HasteName?> </option>
																			<?php
																		}
																		?>
																		
																	</select>
																</div>
															</div>
														</div>
														<div class="col-12 col-sm-2 col-md-2 col-lg-1 col-xl-2">
															<i data-toggle="modal" data-target="#AddNewHastemdl" class="fa fa-plus-circle"></i>
														</div>
														<div class="col-12 col-sm-4 col-md-2 col-lg-3 col-xl-2 d-flex ">
															<div class="form-group">
																<label>BROKER :</label>
															</div>
														</div>
														<div class="col-12 col-sm-8 col-md-10 col-lg-8 col-xl-10">
															<div class="form-group field">
																<div class="">
																	<select name="BrokerID" id="BrokerID1" class="Brokerselect form-control custom-select" style="width: 100%">
																		<option value=""> --Select -- </option>
																		<?php
																		foreach ($getBrokerData as $qgetBrokerData)
																		{
																			?>
																			<option value="<?=$qgetBrokerData->Ledger_Id ?>"> <?=$qgetBrokerData->LName?> </option>
																			<?php
																		}
																		?>
																		
																	</select>
																</div>
															</div>
														</div>
														<div class="col-12 col-sm-2 col-md-2 col-lg-1 col-xl-2">
															<i data-toggle="modal" data-target="#AddNewBrokermdl" class="fa fa-plus-circle"></i>
														</div>
													</div>
												</div>
												<div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
													<div class="row">
														<div class="col-12 col-sm-4 col-md-2 col-lg-3 col-xl-2 d-flex ">
															<div class="form-group">
																<label>DATE :</label>
															</div>
														</div>
														<div class="col-12 col-sm-8 col-md-10 col-lg-3 col-xl-10">
															<div class="form-group field">
																<div class="">
																	<input type="text" id="datepicker-autoclose"  name="SaleDate" placeholder="SaleDate" class="form-control">  
																</div>
															</div>
														</div>
														<div class="col-12 col-sm-4 col-md-2 col-lg-3 col-xl-2 d-flex ">
															<div class="form-group">
																<label>GST TYPE :</label>
															</div>
														</div>
														<div class="col-12 col-sm-8 col-md-10 col-lg-3 col-xl-10">
															<div class="form-group field">
																<div class="">
																	<select name="GstTypeID" id="GstTypeID"  class="GstTypeSelect   form-control custom-select" style="width: 100%">
																		<option value=""> --Select -- </option>
																		<?php
																		foreach ($getGstTypeData as $qgetGstTypeData)
																		{
																			?>
																			<option value="<?=$qgetGstTypeData->GsttypeID?>"> <?=$qgetGstTypeData->GstTypeName?> </option>
																			<?php
																		}
																		?>
																		
																	</select>
																</div>
															</div>
														</div>

														<div class="col-12 col-sm-4 col-md-2 col-lg-3 col-xl-2 d-flex ">
															<div class="form-group">
																<label>HASTE GSTIN :</label>
															</div>
														</div>
														<div class="col-12 col-sm-8 col-md-10 col-lg-3 col-xl-10">
															<div class="form-group field">
																<div class="">
																	<input type="text" id="SaleHasteGstin"  name="SaleHasteGstin" placeholder="HasteGstin" class="form-control"> 
																</div>
															</div>
														</div>
														<div class="col-12 col-sm-4 col-md-2 col-lg-3 col-xl-2 d-flex ">
															<div class="form-group">
																<label>PARTY GSTIN :</label>
															</div>
														</div>
														<div class="col-12 col-sm-8 col-md-10 col-lg-3 col-xl-10">
															<div class="form-group field">
																<div class="">
																	<input type="text" id="SalePartyGstin"  name="SalePartyGstin" placeholder="PartyGstin" class="form-control">
																</div>
															</div>
														</div>

														<div class="col-12 col-sm-4 col-md-2 col-lg-3 col-xl-2 d-flex ">
															<div class="form-group">
																<label>STATION :</label>
															</div>
														</div>
														<div class="col-12 col-sm-8 col-md-10 col-lg-8 col-xl-10">
															<div class="form-group field">
																<div class="">
																	<select name="StationID" id="StationID1"  class="StationSelect   form-control custom-select" style="width: 100%">
																		<option value="">-Select-</option>

																		<?php
																		foreach ($getStationData as $getStationData)
																		{
																			?>
																			<option value="<?=$getStationData->StationID;?>"><?=$getStationData->StationName;?></option>
																			<?php
																		}
																		?>
																	</select>
																</div>
															</div>
														</div>
														<div class="col-12 col-sm-2 col-md-2 col-lg-1 col-xl-2">
															<i data-toggle="modal" data-target="#AddNewStationmdl" class="fa fa-plus-circle"></i>
														</div>
														<div class="col-12 col-sm-4 col-md-2 col-lg-3 col-xl-2 d-flex ">
															<div class="form-group">
																<label>TRANSPORT :</label>
															</div>
														</div>
														<div class="col-12 col-sm-8 col-md-10 col-lg-8 col-xl-10">
															<div class="form-group field">
																<div class="">
																	<select name="TransportID" id="TransportIDData1"  class="TransportSelect   form-control custom-select" style="width: 100%">
																		<option value="">-Select-</option>

																		<?php
																		foreach ($getTransportData as $qgetTransportData)
																		{
																			?>
																			<option value="<?=$qgetTransportData->TransportID;?>"><?=$qgetTransportData->TransportName;?></option>
																			<?php
																		}
																		?>
																	</select>
																</div>
															</div>
														</div>
														<div class="col-12 col-sm-2 col-md-2 col-lg-1 col-xl-2">
															<i data-toggle="modal" data-target="#AddNewTransportmdl" class="fa fa-plus-circle"></i>
														</div>
														<div class="col-12 col-sm-4 col-md-2 col-lg-3 col-xl-2 d-flex ">
															<div class="form-group">
																<label>VEHICLE NO. :</label>
															</div>
														</div>
														<div class="col-12 col-sm-8 col-md-10 col-lg-3 col-xl-10">
															<div class="form-group field">
																<div class="">
																	<input type="text" id="SaleVehicleNo"  name="SaleVehicleNo" placeholder="VehicleNo" class="form-control"> 
																</div>
															</div>
														</div>
														<div class="col-12 col-sm-4 col-md-2 col-lg-3 col-xl-2 d-flex ">
															<div class="form-group">
																<label>SCREEN SERIES :</label>
															</div>
														</div>
														<div class="col-12 col-sm-8 col-md-10 col-lg-3 col-xl-10">
															<div class="form-group field">
																<div class="">
																	<select name="ScreenSeriesID" id="ScreenSeriesID"  class="ScreenSeriesSelect   form-control custom-select" style="width: 100%">
																		<option value=""> --Select -- </option>
																		<?php
																		foreach ($LabelData as $qselectData)
																		{
																			?>
																			<option value="<?=$qselectData->screenBrandID ?>"> <?=$qselectData->brandName?> </option>
																			<?php
																		}
																		?>
																		
																	</select>
																</div>
															</div>
														</div>

														<div class="col-12 col-sm-4 col-md-2 col-lg-3 col-xl-2 d-flex ">
															<div class="form-group">
																<label>DHARA :</label>
															</div>
														</div>
														<div class="col-12 col-sm-8 col-md-10 col-lg-3 col-xl-10">
															<div class="form-group field">
																<div class="">
																	<input type="text" id="SaleDhara"  name="SaleDhara" placeholder="0.00" class="form-control"> 
																</div>
															</div>
														</div>
														<div class="col-12 col-sm-4 col-md-2 col-lg-3 col-xl-2 d-flex ">
															<div class="form-group">
																<label>GRACE :</label>
															</div>
														</div>
														<div class="col-12 col-sm-8 col-md-10 col-lg-3 col-xl-10">
															<div class="form-group field">
																<div class="">
																	<input type="text" id="SaleGrace"  name="SaleGrace" placeholder="0" class="form-control">
																</div>
															</div>
														</div>

													</div>
												</div>
											</div>	
										</div>
										<div class="formtitle" style="overflow-x:auto;">
											<input type="hidden" id="SellOrdercountdata" name="SellOrdercountdata" value="1">
											<table id="myTable1"  class="table-responsive table order-list">
											    <thead>
											        <tr>
											            <td>PICK</td>
											            <td>REF.</td>
											            <td>MAIN SCREEN</td>
											            <td>SCREEN NAME</td>
											            <td>PACKING</td>
											            <td>UNIT</td>
											            <td>PCS</td>
											            <td>CUT</td>
											            <td>MTS/QTY</td>
											            <td>RATE</td>
											            <td>AMOUNT</td>
											            <td>R.D.</td>
											            <td>DISC%</td>
											            <td>MANUAAL ADD/LESS</td>
											            <td>CGST %</td>
											            <td>SGST %</td>
											            <td>CGST/IGST AMT.</td>
											            <td>SGST AMT.</td>
											            <td>ACTION</td>
											        </tr>
											    </thead>
											    <tbody>
										    		<tr>
											            <td style="padding: 0.2rem !important;">
											                <input type="text" name="SalePick0" id="SalePick0" class="form-control"  placeholder="PICK"/>
											            </td>
											            <td style="padding: 0.2rem !important;">
											                <input type="text" name="SaleRef0" id="SaleRef0"  class="form-control" placeholder="REF"/>
											            </td>
											            <td style="padding: 0.2rem !important;">
											            	<select name="SaleMainScreen0" id="SaleMainScreen0" onchange="getCutData(0);" class="mainscreenSelect   form-control custom-select" style="width: 100%">
																<option value=""> --Select -- </option>
																<?php
																	foreach ($getItemDetailsListData as $qgetItemDetailsListData)
																	{
																		?>
																		<option value="<?=$qgetItemDetailsListData->ItemdetailID ?>"> <?=$qgetItemDetailsListData->IName?> </option>
																		<?php
																	}
																?>
															</select>
											            </td>
											            <td style="padding: 0.2rem !important;">
											            	<select name="SaleScreenName0" id="SaleScreenName0"  class="screenNameSelect   form-control custom-select" style="width: 100%">
																<option value=""> --Select -- </option>
																<?php
																	foreach ($getItemDetailsListData as $qgetItemDetailsListData)
																	{
																		?>
																		<option value="<?=$qgetItemDetailsListData->ItemdetailID ?>"> <?=$qgetItemDetailsListData->IName?> </option>
																		<?php
																	}
																?>
															</select>
											            </td>
											            <td style="padding: 0.2rem !important;">
											            	<select name="SalePacking0" id="SalePacking0"  class="PackingSelect form-control custom-select" style="width: 100%">
																<option value=""> --Select -- </option>
																<?php
																foreach ($getPackingData as $qgetPackingData)
																{
																	?>
																	<option value="<?=$qgetPackingData->PackingID ?>"> <?=$qgetPackingData->PackingName?> </option>
																	<?php
																}
																?>
															</select>
											            </td>
											            <td style="padding: 0.2rem !important;">
											                <select name="SaleUnit0" id="SaleUnit0"  class="UnitSelect  form-control custom-select" style="width: 100%">
																<option value="">-Select-</option>
																<option value="pcs">Pcs</option>
																<option value="mts">MTS</option>
																<option value="kg">KG</option>
																<option value="suit">Suit</option>
																<option value="other">Other</option>
															</select>
											            </td>
											            <td style="padding: 0.2rem !important;">
											                <input type="text" name="SalePcs0" id="SalePcs0" onkeyup="forcalculation(0);" class="form-control SalePcs" placeholder="PCS"/>
											            </td>
											            <td style="padding: 0.2rem !important;">
											                <input type="text" name="SaleCut0" id="SaleCut0" onkeyup="forcalculation(0);" class="form-control" placeholder="CUT" readonly="" />
											            </td>
											           <td style="padding: 0.2rem !important;">
											                <input type="text" name="SaleMtsQty0" id="SaleMtsQty0" class="form-control Mts" placeholder="MTS/QTY" readonly="" />
											            </td>
											            <td style="padding: 0.2rem !important;">
											                <input type="text" name="SaleRate0" id="SaleRate0" class="form-control" onkeyup="forcalculation(0);" placeholder="RATE" readonly="" />
											            </td>

											            <td style="padding: 0.2rem !important;">
											                <input type="text" name="SaleAmount0" id="SaleAmount0" class="form-control amount" onkeyup="forcalculation(0);" placeholder="AMOUNT" readonly="" />
											            </td>
											            <td style="padding: 0.2rem !important;">
											                <input type="text" name="SaleListRD0" id="SaleListRD0" class="form-control" placeholder="Voucher"/>
											            </td>
											            <td style="padding: 0.2rem !important;">
											                <input type="text" name="SaleListDisc0" id="SaleListDisc0" class="form-control" placeholder="DISC"/>
											            </td>
											            <td style="padding: 0.2rem !important;">
											                <input type="text" name="ManuaalAddLess0" id="ManuaalAddLess0" class="form-control" placeholder="MANUALL"/>
											            </td>
											            <td style="padding: 0.2rem !important;">
											                <input type="text" name="SaleListCgst0" id="SaleListCgst0" onkeyup="forcalculation(0);" class="form-control Cgst" placeholder="CGST" readonly="" />
											            </td>
											            <td style="padding: 0.2rem !important;">
											                <input type="text" name="SaleListSgst0" id="SaleListSgst0" onkeyup="forcalculation(0);" class="form-control SgstData" placeholder="SGST" readonly="" />
											            </td>
											            <td style="padding: 0.2rem !important;">
											                <input type="text" name="SaleCgstIgstAmt0" id="SaleCgstIgstAmt0" onkeyup="forcalculation(0);" class="form-control" placeholder="CGSTAMT" readonly="" />
											            </td>
											            <td style="padding: 0.2rem !important;">
											                <input type="text" name="SaleListSgstAmt0" id="SaleListSgstAmt0" onkeyup="forcalculation(0);" class="form-control" placeholder="SGSTAMT" readonly="" />
											            </td>
											            
											            <td style="padding: 0.2rem !important;">
											            	<a class="deleteRow"></a>
											            </td>
											        </tr>
											    </tbody>
											    <tfoot>
											        <tr>
											            <td colspan="5" style="text-align: left;">
											                <input type="button" class="btn btn-lg btn-block addsalerow" id="addsalerow" value="Add Row" />
											            </td>
											        </tr>
											        <tr>
											        </tr>
											    </tfoot>
											</table>
										</div>

										<div class="formtitle">
											<h4 class="backcolor">TOTAL</h4>
											<div class="row removemargin">
												<div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
													<div class="row">
														<div class="col-12 col-sm-4 col-md-2 col-lg-3 col-xl-2 d-flex ">
															<div class="form-group">
																<label>HSN CODE :</label>
															</div>
														</div>
														<div class="col-12 col-sm-8 col-md-10 col-lg-9 col-xl-10">
															<div class="form-group field">
																<div class="">
																	<input type="text"  name="SaleHsnCode" id="SaleHsnCode" class="form-control" placeholder="HSNCODE">
																</div>
															</div>
														</div>
														
														<div class="col-12 col-sm-4 col-md-2 col-lg-3 col-xl-2 d-flex ">
															<div class="form-group">
																<label>GRAND TOTAL :</label>
															</div>
														</div>
														<div class="col-12 col-sm-8 col-md-10 col-lg-9 col-xl-10">
															<div class="form-group field">
																<div class="">
																	<span id="GrandTotal1"></span>
																	<input type="text"  name="SaleGrandTotal1" id="SaleGrandTotal1" placeholder="GrandTotal" class="form-control" readonly="">
																</div>
															</div>
														</div>
														<div class="col-12 col-sm-4 col-md-2 col-lg-3 col-xl-2 d-flex ">
															<div class="form-group">
																
															</div>
														</div>
														<div class="col-12 col-sm-8 col-md-10 col-lg-9 col-xl-10">
															<div class="form-group field">
																<div class="">
																	<input type="text"  name="SaleGrandTotal12" id="SaleGrandTotal12" placeholder="GrandTotal" class="form-control" readonly="">
																</div>
															</div>
														</div>

														<div class="col-12 col-sm-4 col-md-2 col-lg-3 col-xl-2 d-flex ">
															<div class="form-group">
																
															</div>
														</div>
														<div class="col-12 col-sm-8 col-md-10 col-lg-9 col-xl-10">
															<div class="form-group field">
																<div class="">

																	<input type="text"  name="SaleGrandTotal13"  id="SaleGrandTotal13" placeholder="GrandTotal" class="form-control" readonly="">
																</div>
															</div>
														</div>
													</div>
												</div>
												<div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
													<div class="row">
														<div class="col-12 col-sm-4 col-md-2 col-lg-3 col-xl-2 d-flex">
															<div class="form-group">
																<label>ORDER EXECU. :</label>
															</div>
														</div>
														<div class="col-12 col-sm-8 col-md-10 col-lg-3 col-xl-10">
															<div class="form-group field">
																<div class="">
																	<input type="Checkbox" value="1"  name="SaleOrderExecu" id="SaleOrderExecu"> 
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>	

										</div>

										<div class="formtitle">
											<h4 class="backcolor">MISC DETAILS</h4>
											<div class="row removemargin">
												<div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
													<div class="row">
														<div class="col-12 col-sm-4 col-md-2 col-lg-3 col-xl-2 d-flex ">
															<div class="form-group">
																<label>DBTAINED BY :</label>
															</div>
														</div>
														<div class="col-12 col-sm-8 col-md-10 col-lg-3 col-xl-10">
															<div class="form-group field">
																<div class="">
																	<input type="text"  name="SaleDbtainedBy" id="SaleDbtainedBy" placeholder="DbtainedBy" class="form-control">
																</div>
															</div>
														</div>
														<div class="col-12 col-sm-4 col-md-2 col-lg-4 col-xl-2 d-flex">
															<div class="form-group">
																<label>DELIVERY DAYS :</label>
															</div>
														</div>
														<div class="col-12 col-sm-8 col-md-10 col-lg-2 col-xl-10">
															<div class="form-group field">
																<div class="">
																	<input type="text"  name="SaleDeliveryDays" id="SaleDeliveryDays"  placeholder="0" class="form-control"> 
																</div>
															</div>
														</div>
														<div class="col-12 col-sm-4 col-md-2 col-lg-3 col-xl-2 d-flex ">
															<div class="form-group">
																<label>RMK :</label>
															</div>
														</div>
														<div class="col-12 col-sm-8 col-md-10 col-lg-9 col-xl-10">
															<div class="form-group field">
																<div class="">
																	<select name="RemarkID" id="RemarkID"  class="reamrkSelect   form-control custom-select" style="width: 100%">
																		<option value=""> --Select -- </option>
																		<?php
																		foreach ($getRemarkData as $qgetRemarkData)
																		{
																			?>
																			<option value="<?=$qgetRemarkData->RemarkID	?>"> <?=$qgetRemarkData->Remark?> </option>
																			<?php
																		}
																		?>
																		
																	</select>
																</div>
															</div>
														</div>
													</div>
												</div>
												<div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
													<div class="row">
														<div class="col-12 col-sm-4 col-md-2 col-lg-4 col-xl-2 d-flex ">
															<div class="form-group">
																<label>DILIVERY DUE DATE :</label>
															</div>
														</div>
														<div class="col-12 col-sm-8 col-md-10 col-lg-8 col-xl-10">
															<div class="form-group field">
																<div class="">
																	<input type="text" id="datepicker4-autoclose"  name="SaleDeliveryDueDate" placeholder="DATE" class="form-control">
																</div>
															</div>
														</div>

														<div class="col-12 col-sm-4 col-md-2 col-lg-4 col-xl-2 d-flex ">
															<div class="form-group">
																<label>E-WAY BILL NO :</label>
															</div>
														</div>
														<div class="col-12 col-sm-8 col-md-10 col-lg-8 col-xl-10">
															<div class="form-group field">
																<div class="">
																	<input type="text"  name="SaleEwayBillNo" id="SaleEwayBillNo" placeholder="EwayBillNo" onkeyup="forcalculation(0);" class="form-control">
																</div>
															</div>
														</div>
														<div class="col-12 col-sm-4 col-md-2 col-lg-3 col-xl-2 d-flex ">
															<div class="form-group">
																<label>NET AMT :</label>
															</div>
														</div>
														<div class="col-12 col-sm-8 col-md-10 col-lg-9 col-xl-10">
															<div class="form-group field">
																<div class="controls">
																	<input type="text"  name="SaleNetAmt" id="SaleNetAmt" placeholder="0.00" class="form-control">
																</div>
															</div>
														</div>

													</div>
												</div>
											</div>	

										</div>

										<div class="formtitle">
											<h4 class="backcolor">LR DETAILS</h4>
											<div class="row removemargin">
												<div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
													<div class="row">
														<div class="col-12 col-sm-4 col-md-2 col-lg-3 col-xl-2 d-flex ">
															<div class="form-group">
																<label>LR NO :</label>
															</div>
														</div>
														<div class="col-12 col-sm-8 col-md-10 col-lg-3 col-xl-10">
															<div class="form-group field">
																<div class="">
																	<input type="text"  name="SaleLrNo" id="SaleLrNo" class="form-control" placeholder="LrNo">
																</div>
															</div>
														</div>
														<div class="col-12 col-sm-4 col-md-2 col-lg-3 col-xl-2 d-flex">
															<div class="form-group">
																<label>LR DATE :</label>
															</div>
														</div>
														<div class="col-12 col-sm-8 col-md-10 col-lg-3 col-xl-10">
															<div class="form-group field">
																<div class="">
																	<input type="text" id="datepicker2-autoclose"  name="SaleLrDate" placeholder="SaleLrDate" class="form-control">
																</div>
															</div>
														</div>
														<div class="col-12 col-sm-4 col-md-2 col-lg-3 col-xl-2 d-flex ">
															<div class="form-group">
																<label>LR REC DATE :</label>
															</div>
														</div>
														<div class="col-12 col-sm-8 col-md-10 col-lg-3 col-xl-10">
															<div class="form-group field">
																<div class="">
																	<input type="text" id="datepicker3-autoclose"  name="SaleLrRecDate" placeholder="LrRecDate" class="form-control">
																</div>
															</div>
														</div>
													</div>
												</div>
												<div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
													<div class="row">
														<div class="col-12 col-sm-4 col-md-2 col-lg-3 col-xl-2 d-flex ">
															<div class="form-group">
																<label>WEIGHT :</label>
															</div>
														</div>
														<div class="col-12 col-sm-8 col-md-10 col-lg-3 col-xl-10">
															<div class="form-group field">
																<div class="">
																	<input type="text"  name="SaleWeight" id="SaleWeight"  class="form-control" placeholder="Weight">
																</div>
															</div>
														</div>

														<div class="col-12 col-sm-4 col-md-2 col-lg-3 col-xl-2 d-flex ">
															<div class="form-group">
																<label>FREIGHT :</label>
															</div>
														</div>
														<div class="col-12 col-sm-8 col-md-10 col-lg-3 col-xl-10">
															<div class="form-group field">
																<div class="">
																	<input type="text"  name="SaleFreight" id="SaleFreight" class="form-control" placeholder="Freight">
																</div>
															</div>
														</div>
														
													</div>
												</div>
											</div>	

										</div>

										<div class="formtitle">
											<h4 class="backcolor">ADD/LESS</h4>
											<div class="row removemargin">
												<div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
													<div class="row">
														<div class="col-12 col-sm-4 col-md-2 col-lg-2 col-xl-2 d-flex ">
															<div class="form-group">
																<label>RMK :</label>
															</div>
														</div>
														<div class="col-12 col-sm-8 col-md-10 col-lg-4 col-xl-10">
															<div class="form-group field">
																<div class="">
																	<select name="RemarkID1" id="RemarkID1"  class="reamrkSelect   form-control custom-select" style="width: 100%">
																		<option value=""> --Select -- </option>
																		<?php
																		foreach ($getRemarkData as $qgetRemarkData)
																		{
																			?>
																			<option value="<?=$qgetRemarkData->RemarkID	?>"> <?=$qgetRemarkData->Remark?> </option>
																			<?php
																		}
																		?>
																	</select>
																</div>
															</div>
														</div>
														<div class="col-12 col-sm-4 col-md-2 col-lg-2 col-xl-2 d-flex ">
															<div class="form-group">
																<label>VALUE1 :</label>
															</div>
														</div>
														<div class="col-12 col-sm-8 col-md-10 col-lg-4 col-xl-10">
															<div class="form-group field">
																<div class="">
																	<input type="text"  name="SaleNo1" id="SaleNo1" placeholder="0.00" class="form-control" onkeyup="forcalculation(0);"> 
																</div>
															</div>
														</div>
														
														
														<div class="col-12 col-sm-4 col-md-2 col-lg-2 col-xl-2 d-flex ">
															<div class="form-group">
																<label>RMK :</label>
															</div>
														</div>
														<div class="col-12 col-sm-8 col-md-10 col-lg-4 col-xl-10">
															<div class="form-group field">
																<div class="">
																	<select name="RemarkID2" id="RemarkID2"  class="reamrkSelect   form-control custom-select" style="width: 100%" >
																		<option value=""> --Select -- </option>
																		<?php
																		foreach ($getRemarkData as $qgetRemarkData)
																		{
																			?>
																			<option value="<?=$qgetRemarkData->RemarkID	?>"> <?=$qgetRemarkData->Remark?> </option>
																			<?php
																		}
																		?>
																	</select>
																</div>
															</div>
														</div>

														<div class="col-12 col-sm-4 col-md-2 col-lg-2 col-xl-2 d-flex ">
															<div class="form-group">
																<label>VALUE1 :</label>
															</div>
														</div>
														<div class="col-12 col-sm-8 col-md-10 col-lg-4 col-xl-10">
															<div class="form-group field">
																<div class="">
																	<input type="text"  name="SaleNo2" id="SaleNo2" placeholder="0.00" class="form-control" onkeyup="forcalculation(0);">
																</div>
															</div>
														</div>
														

														<div class="col-12 col-sm-4 col-md-2 col-lg-2 col-xl-2 d-flex ">
															<div class="form-group">
																<label>RMK :</label>
															</div>
														</div>
														<div class="col-12 col-sm-8 col-md-10 col-lg-4 col-xl-10">
															<div class="form-group field">
																<div class="">
																	<select name="RemarkID3" id="RemarkID3"  class="reamrkSelect   form-control custom-select" style="width: 100%">
																		<option value=""> --Select -- </option>
																		<?php
																		foreach ($getRemarkData as $qgetRemarkData)
																		{
																			?>
																			<option value="<?=$qgetRemarkData->RemarkID	?>"> <?=$qgetRemarkData->Remark?> </option>
																			<?php
																		}
																		?>
																	</select>
																</div>
															</div>
														</div>
														<div class="col-12 col-sm-4 col-md-2 col-lg-2 col-xl-2 d-flex ">
															<div class="form-group">
																<label>VALUE1 :</label>
															</div>
														</div>
														<div class="col-12 col-sm-8 col-md-10 col-lg-4 col-xl-10">
															<div class="form-group field">
																<div class="">
																	<input type="text"  name="SaleNo3" id="SaleNo3" placeholder="0.00" class="form-control" onkeyup="forcalculation(0);">
																</div>
															</div>
														</div>

													</div>
												</div>
												<div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
													<div class="row">
														<div class="col-12 col-sm-4 col-md-2 col-lg-2 col-xl-2 d-flex ">
															<div class="form-group">
																<label>VALUE2 :</label>
															</div>
														</div>
														<div class="col-12 col-sm-8 col-md-10 col-lg-4 col-xl-10">
															<div class="form-group field">
																<div class="">
																	<input type="text"  name="SaleNo11" id="SaleNo11" placeholder="0.00" class="form-control" onkeyup="forcalculation(0);">
																</div>
															</div> 
														</div>
														<div class="col-12 col-sm-4 col-md-2 col-lg-2 col-xl-2 d-flex ">
															<div class="form-group">
																<label>AMT  :</label>
															</div>
														</div>
														<div class="col-12 col-sm-8 col-md-10 col-lg-4 col-xl-10">
															<div class="form-group field">
																<div class="">
																	<input type="text"  name="SaleAmt1" id="SaleAmt1" placeholder="0.00" class="form-control" readonly="">
																</div>
															</div>
														</div>

														<div class="col-12 col-sm-4 col-md-2 col-lg-2 col-xl-2 d-flex ">
															<div class="form-group">
																<label>VALUE2 :</label>
															</div>
														</div>
														<div class="col-12 col-sm-8 col-md-10 col-lg-4 col-xl-10">
															<div class="form-group field">
																<div class="">
																	<input type="text"  name="SaleNo21" id="SaleNo21" placeholder="0.00" class="form-control" onkeyup="forcalculation(0);"> 
																</div>
															</div>
														</div>
														<div class="col-12 col-sm-4 col-md-2 col-lg-2 col-xl-2 d-flex ">
															<div class="form-group">
																<label>AMT  :</label>
															</div>
														</div>
														<div class="col-12 col-sm-8 col-md-10 col-lg-4 col-xl-10">
															<div class="form-group field">
																<div class="">

																	<input type="text"  name="SaleAmt2" id="SaleAmt2" placeholder="0.00" class="form-control" readonly=""> 
																</div>
															</div>
														</div>

														<div class="col-12 col-sm-4 col-md-2 col-lg-2 col-xl-2 d-flex ">
															<div class="form-group">
																<label>VALUE2 :</label>
															</div>
														</div>
														<div class="col-12 col-sm-8 col-md-10 col-lg-4 col-xl-10">
															<div class="form-group field">
																<div class="">
																	<input type="text"  name="SaleNo31" id="SaleNo31" placeholder="0.00" class="form-control" onkeyup="forcalculation(0);"> 
																</div>
															</div>
														</div>

														<div class="col-12 col-sm-4 col-md-2 col-lg-2 col-xl-2 d-flex ">
															<div class="form-group">
																<label>AMT :</label>
															</div>
														</div>
														<div class="col-12 col-sm-8 col-md-10 col-lg-4 col-xl-10">
															<div class="form-group field">
																<div class="">
																	<input type="text"  name="SaleAmt3" id="SaleAmt3" placeholder="0.00" class="form-control" readonly="">
																</div>
															</div>
														</div>

														<div class="col-12 col-sm-4 col-md-2 col-lg-3 col-xl-2 d-flex">
															<div class="form-group">
																<label>NET AMT :</label>
															</div>
														</div>
														<div class="col-12 col-sm-8 col-md-10 col-lg-9 col-xl-10">
															<div class="form-group field">
																<div class="">
																	<input type="text"  name="SaleNetAmt1" id="SaleNetAmt1" placeholder="0.00" class="form-control" readonly="">
																</div>
															</div>
														</div>

													</div>
												</div>
											</div>	
										</div>
										
										<div class="formtitle">
											<h4 class="backcolor">GST/TDS</h4>
											<div class="row removemargin">
												<div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
													<div class="row">
														<div class="col-12 col-sm-4 col-md-2 col-lg-3 col-xl-2 d-flex ">
															<div class="form-group">
																<label> CGST/IGST % :</label>
															</div>
														</div>
														<div class="col-12 col-sm-8 col-md-10 col-lg-3 col-xl-10">
															<div class="form-group field">
																<div class="">
																	<input type="text"  name="SaleCgstIgst" id="SaleCgstIgst" placeholder="0.00" class="form-control" readonly="">
																</div>
															</div>
														</div>
														<div class="col-12 col-sm-4 col-md-2 col-lg-2 col-xl-2 d-flex">
															<div class="form-group">
																<label>AMT :</label>
															</div>
														</div>
														<div class="col-12 col-sm-8 col-md-10 col-lg-4 col-xl-10">
															<div class="form-group field">
																<div class="">
																	<input type="text"  name="SaleCgstAmt" id="SaleCgstAmt" placeholder="0.00" onkeyup="forcalculation(0);" class="form-control" readonly=""> 
																</div>
															</div>
														</div>

														<div class="col-12 col-sm-4 col-md-2 col-lg-3 col-xl-2 d-flex ">
															<div class="form-group">
																<label>SGST % :</label>
															</div>
														</div>
														<div class="col-12 col-sm-8 col-md-10 col-lg-3 col-xl-10">
															<div class="form-group field">
																<div class="">
																	<input type="text"  name="SaleSgst" id="SaleSgst" placeholder="0.00" class="form-control" readonly=""> 
																</div>
															</div>
														</div>
														<div class="col-12 col-sm-4 col-md-2 col-lg-2 col-xl-2 d-flex">
															<div class="form-group">
																<label>AMT :</label>
															</div>
														</div>
														<div class="col-12 col-sm-8 col-md-10 col-lg-4 col-xl-10">
															<div class="form-group field">
																<div class="">
																	<input type="text"  name="SaleSgstAmt" id="SaleSgstAmt" placeholder="0.00" onkeyup="forcalculation(0);" class="form-control" readonly=""> 
																</div>
															</div>
														</div>
														<div class="col-12 col-sm-4 col-md-2 col-lg-6 col-xl-2 d-flex ">
															<div class="form-group">
																<label>E-WAY BILL NO (READ ONLY) :</label>
															</div>
														</div>
														<div class="col-12 col-sm-8 col-md-10 col-lg-6 col-xl-10">
															<div class="form-group field">
																<div class="">
																	<input type="text"  name="EwayBillNo" id="EwayBillNo1" placeholder="EwayBillNo" class="form-control" readonly="">
																</div>
															</div>
														</div>
													</div>
												</div>
												<div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
													<div class="row">
														<div class="col-12 col-sm-4 col-md-2 col-lg-4 col-xl-2 d-flex ">
															<div class="form-group">
																<label>TAXABLE VALUE :</label>
															</div>
														</div>
														<div class="col-12 col-sm-8 col-md-10 col-lg-8 col-xl-10">
															<div class="form-group field">
																<div class="">
																	<input type="text"  name="SaleTaxableValue" id="SaleTaxableValue" placeholder="0.00" class="form-control" readonly="">
																</div>
															</div>
														</div>

														<div class="col-12 col-sm-4 col-md-2 col-lg-4 col-xl-2 d-flex ">
															<div class="form-group">
																<label>BILL AMT :</label>
															</div>
														</div>
														<div class="col-12 col-sm-8 col-md-10 col-lg-8 col-xl-10">
															<div class="form-group field">
																<div class="">
																	<input type="text"  name="SaleBillAmt" id="SaleBillAmt" placeholder="0.00" class="form-control" readonly="">
																</div>
															</div>
														</div>

														<div class="col-12 col-sm-4 col-md-2 col-lg-4 col-xl-2 d-flex">
															<div class="form-group">
																<label>NET AFTER TDS :</label>
															</div>
														</div>
														<div class="col-12 col-sm-8 col-md-10 col-lg-8 col-xl-10">
															<div class="form-group field">
																<div class="">
																	<input type="text"  name="SaleNetAfterTds" id="SaleNetAfterTds" placeholder="0.00" class="form-control">
																</div>
															</div>
														</div>

													</div>
												</div>
											</div>	
										</div>
										
										<div class="formtitle">
											<h4 class="backcolor">ADD/LESS (PAYMENT)</h4>
											<div class="row removemargin">
												<div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
													<div class="row">
														<div class="col-12 col-sm-4 col-md-2 col-lg-3 col-xl-2 d-flex ">
															<div class="form-group">
																<label>PAID DATE :</label>
															</div>
														</div>
														<div class="col-12 col-sm-8 col-md-10 col-lg-3 col-xl-10">
															<div class="form-group field">
																<div class="">
																	<input type="text" id="datepicker4-autoclose"  name="SalePaidDate" placeholder="0" class="form-control">
																</div>
															</div>
														</div>
														<div class="col-12 col-sm-4 col-md-2 col-lg-3 col-xl-2 d-flex">
															<div class="form-group">
																<label>DISC % :</label>
															</div>
														</div>
														<div class="col-12 col-sm-8 col-md-10 col-lg-3 col-xl-10">
															<div class="form-group field">
																<div class="">
																	<input type="text"  name="SaleDisc" id="SaleDisc" placeholder="0.00" class="form-control"> 
																</div>
															</div>
														</div>

														<div class="col-12 col-sm-4 col-md-2 col-lg-3 col-xl-2 d-flex ">
															<div class="form-group">
																<label>PACK/FOLLO. :</label>
															</div>
														</div>
														<div class="col-12 col-sm-8 col-md-10 col-lg-3 col-xl-10">
															<div class="form-group field">
																<div class="">
																	<input type="text"  name="SalePackFollo" id="SalePackFollo" placeholder="0.00" class="form-control"> 
																</div>
															</div>
														</div>
														<div class="col-12 col-sm-4 col-md-2 col-lg-3 col-xl-2 d-flex ">
															<div class="form-group">
																<label>R.D  :</label>
															</div>
														</div>
														<div class="col-12 col-sm-8 col-md-10 col-lg-3 col-xl-10">
															<div class="form-group field">
																<div class="">
																	<input type="text"  name="SaleRd" id="SaleRd" placeholder="0.00" class="form-control">
																</div>
															</div>
														</div>

														<div class="col-12 col-sm-4 col-md-2 col-lg-3 col-xl-2 d-flex ">
															<div class="form-group">
																<label>SWEETS :</label>
															</div>
														</div>
														<div class="col-12 col-sm-8 col-md-10 col-lg-3 col-xl-10">
															<div class="form-group field">
																<div class="">
																	<input type="text"  name="SaleSweets" id="SaleSweets" placeholder="0.00" class="form-control">
																</div>
															</div>
														</div>
														<div class="col-12 col-sm-4 col-md-2 col-lg-3 col-xl-2 d-flex">
															<div class="form-group">
																<label>OTH/BC :</label>
															</div>
														</div>
														<div class="col-12 col-sm-8 col-md-10 col-lg-3 col-xl-10">
															<div class="form-group field">
																<div class="">
																	<input type="text"  name="SaleOthBc" id="SaleOthBc" placeholder="0.00" class="form-control"> 
																</div>
															</div>
														</div>

													</div>
												</div>
												<div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
													<div class="row">
														<div class="col-12 col-sm-4 col-md-2 col-lg-3 col-xl-2 d-flex ">
															<div class="form-group">
																<label>ADD AMT :</label>
															</div>
														</div>
														<div class="col-12 col-sm-8 col-md-10 col-lg-3 col-xl-10">
															<div class="form-group field">
																<div class="">
																	<input type="text"  name="SaleAddAmt" id="SaleAddAmt" placeholder="0.00" class="form-control">
																</div>
															</div>
														</div>
														<div class="col-12 col-sm-4 col-md-2 col-lg-3 col-xl-2 d-flex ">
															<div class="form-group">
																<label>TDS AMT :</label>
															</div>
														</div>
														<div class="col-12 col-sm-8 col-md-10 col-lg-3 col-xl-10">
															<div class="form-group field">
																<div class="">
																	<input type="text"  name="SaleTdsAmt" id="SaleTdsAmt" placeholder="0.00" class="form-control">
																</div>
															</div>
														</div>

														<div class="col-12 col-sm-4 col-md-2 col-lg-3 col-xl-2 d-flex ">
															<div class="form-group">
																<label>G.R. :</label>
															</div>
														</div>
														<div class="col-12 col-sm-8 col-md-10 col-lg-3 col-xl-10">
															<div class="form-group field">
																<div class="">
																	<input type="text"  name="SaleGr" id="SaleGr" placeholder="0.00"class="form-control">
																</div>
															</div>
														</div>
														<div class="col-12 col-sm-4 col-md-2 col-lg-3 col-xl-2 d-flex ">
															<div class="form-group">
																<label>PAID AMT:</label>
															</div>
														</div>
														<div class="col-12 col-sm-8 col-md-10 col-lg-3 col-xl-10">
															<div class="form-group field">
																<div class="">
																	<input type="text"  name="SalePaidAmt" id="SalePaidAmt" placeholder="0.00" class="form-control">
																</div>
															</div>
														</div>

													</div>
												</div>
											</div>	

										</div>

										<div class="formtitle">
											<h4 class="backcolor">REC.DET</h4>
											<div class="row removemargin">
												<div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
													<div class="row">
														<div class="col-12 col-sm-4 col-md-2 col-lg-3 col-xl-2 d-flex ">
															<div class="form-group">
																<label> REC/SALE PCS :</label>
															</div>
														</div>
														<div class="col-12 col-sm-8 col-md-10 col-lg-3 col-xl-10">
															<div class="form-group field">
																<div class="">
																	<input type="text"  name="RecSalePcs" id="RecSalePcs" placeholder="0" class="form-control">
																</div>
															</div>
														</div>
														<div class="col-12 col-sm-4 col-md-2 col-lg-2 col-xl-2 d-flex">
															<div class="form-group">
																<label>REC/SALE MTS :</label>
															</div>
														</div>
														<div class="col-12 col-sm-8 col-md-10 col-lg-3 col-xl-10">
															<div class="form-group field">
																<div class="">
																	<input type="text"  name="RecSaleMts" id="RecSaleMts" placeholder="0.00" class="form-control"> 
																</div>
															</div>
														</div>
													</div>
												</div>
												<div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
													<div class="row">
														<div class="col-12 col-sm-4 col-md-2 col-lg-3 col-xl-2 d-flex " style="margin: 0px 0px 0px -30px;">
															<div class="form-group">
																<label>REC /SALE VNO. :</label>
															</div>
														</div>
														<div class="col-12 col-sm-8 col-md-10 col-lg-3 col-xl-10">
															<div class="form-group field">
																<div class="">
																	<input type="text"  name="ResSaleVno" id="ResSaleVno" placeholder="0.00" class="form-control">
																</div>
															</div>
														</div>
											
													</div>
												</div>
											</div>	
										</div>

										<div class="row">
											<div class="form-group">
												<div class="text-xs-right" style="margin-left: 8px;">
													<button type="submit" class="btn btn-success">Submit</button>
													<a  href="<?php echo base_url()?>SalesOrder" class="btn btn-info">
							                            Cancel
							                        </a>
												</div>
											</div>
										</div>
								
									</div>	
								</div>
							</form>
						</div>
	<?php
	if(!empty($editsaleOrderdata))
	{
		//print_r($editsaleOrderdata); exit;
	?>
	<!-- <input type="hidden" value="inside" id="inside"> -->
	<div class="tab-pane  p-20" id="editform" role="tabpanel">
		<form class="" method="post" name="editSaleOrderform" id="editSaleOrderform" novalidate>
			<input type="hidden" value="<?=$editsaleOrderdata['SaleOrderID'];?>" id="SaleOrderID" name="SaleOrderID">
			<div class="row common_master_form_div">
				<div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 ">
					<div class="formtitle">
						<div class="row removemargin">
							<div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
								<div class="row">

									<div class="col-12 col-sm-4 col-md-2 col-lg-3 col-xl-2 d-flex ">
										<div class="form-group">
											<label>COMAPNY :</label>
										</div>
									</div>
									<div class="col-12 col-sm-8 col-md-10 col-lg-9 col-xl-10">
										<div class="form-group field">
											<div class="">
												<select name="CompanyId" id="CompanyId"  class="form-control customvalidation">
													<option value=""> --Select -- </option>
													<?php
													foreach ($getCompanyData as $qgetCompanyData)
													{
														?>
										<option <?php if($editsaleOrderdata['CompanyId'] == $qgetCompanyData->CompanyID){echo "selected";}?> value="<?=$qgetCompanyData->CompanyID ?>"> <?=$qgetCompanyData->Name?> </option>
														<?php
													}
													?>
												</select>
											</div>
										</div>
									</div>

									<div class="col-12 col-sm-4 col-md-2 col-lg-2 col-xl-2 d-flex">
										<div class="form-group">
											<label> VOUCHER :</label>
										</div>
									</div>
									<div class="col-12 col-sm-8 col-md-10 col-lg-4 col-xl-10">
										<div class="form-group field">
											<div class="">
												<input type="text"  name="Voucher" id="Voucher" value="<?=$editsaleOrderdata['Voucher'];?>"  class="form-control" > 
											</div>
										</div>
									</div>
									<div class="col-12 col-sm-4 col-md-2 col-lg-2 col-xl-2 d-flex ">
										<div class="form-group">
											<label>OFFER  :</label>
										</div>
									</div>
									<div class="col-12 col-sm-8 col-md-10 col-lg-4 col-xl-10">
										<div class="form-group field">
											<div class="">
												<input type="text"  name="Offer" id="Offer" class="form-control" value="<?=$editsaleOrderdata['Offer'];?>">
											</div>
										</div>
									</div>


									<div class="col-12 col-sm-4 col-md-2 col-lg-2 col-xl-2 d-flex ">
										<div class="form-group">
											<label>PARTY :</label>
										</div>
									</div>
									<div class="col-12 col-sm-8 col-md-10 col-lg-4 col-xl-10">
										<div class="form-group field">
											<div class="">
												<select name="PartyID" id="PartyID"  class="form-control EditPartyDetails customvalidation">
													<option value=""> --Select -- </option>
													<?php
													foreach ($getPartyData as $qgetPartyData)
													{
														?>
													<option <?php if($editsaleOrderdata['PartyID'] == $qgetPartyData->Ledger_Id){echo "selected";}?>  value="<?=$qgetPartyData->Ledger_Id ?>"> <?=$qgetPartyData->Name?> </option>
														<?php
													}
													?>
													
												</select>
											</div>
										</div>
									</div>
									<div class="col-12 col-sm-4 col-md-2 col-lg-2 col-xl-2 d-flex ">
										<div class="form-group">
											<label>STATE :</label>
										</div>
									</div>
									<div class="col-12 col-sm-8 col-md-10 col-lg-4 col-xl-10">
										<div class="form-group field">
											<div class="">
												<select name="StateID" id="StateID"  class="form-control customvalidation" onchange="transfortcon(this);">
													<option value=""> --Select -- </option>
													<?php
													foreach ($getstateData as $qgetstateData)
													{
														?>
														<option <?php if($editsaleOrderdata['StateID'] == $qgetstateData->stateID){echo "selected";}?> value="<?=$qgetstateData->stateID ?>"> <?=$qgetstateData->stateName?> </option>
														<?php
													}
													?>
													
												</select>
											</div>
										</div>
									</div>

									<div class="col-12 col-sm-4 col-md-2 col-lg-3 col-xl-2 d-flex ">
										<div class="form-group">
											<label>ORDER NO. :</label>
										</div>
									</div>
									<div class="col-12 col-sm-8 col-md-10 col-lg-3 col-xl-10">
										<div class="form-group field">
											<div class="">
												<input type="text"   name="OrderNo" id="OrderNo" class="form-control customvalidation" value="<?=$editsaleOrderdata['OrderNo'];?>"> 
											</div>
										</div>
									</div>
									<div class="col-12 col-sm-4 col-md-2 col-lg-3 col-xl-2 d-flex ">
										<div class="form-group">
											<label>LR NO./AWB :</label>
										</div>
									</div>
									<div class="col-12 col-sm-8 col-md-10 col-lg-3 col-xl-10">
										<div class="form-group field">
											<div class="">
												<input type="text"   name="LrNoAwb" id="LrNoAwb" class="form-control" value="<?=$editsaleOrderdata['LrNoAwb'];?>"> 
											</div>
										</div>
									</div>

									<div class="col-12 col-sm-4 col-md-2 col-lg-3 col-xl-2 d-flex ">
										<div class="form-group">
											<label>HASTE :</label>
										</div>
									</div>
									<div class="col-12 col-sm-8 col-md-10 col-lg-9 col-xl-10">
										<div class="form-group field">
											<div class="">
												<select name="HasteID" id="EditHasteID"  class="form-control customvalidation">
													<option value=""> --Select -- </option>
													<?php
													foreach ($gethasteData as $qgethasteData)
													{
														?>
														<option <?php if($editsaleOrderdata['HasteID'] == $qgethasteData->HasteID){echo "selected";}?> value="<?=$qgethasteData->HasteID ?>"> <?=$qgethasteData->Haste?> </option>
														<?php
													}
													?>
													
												</select>
											</div>
										</div>
									</div>

									<div class="col-12 col-sm-4 col-md-2 col-lg-3 col-xl-2 d-flex ">
										<div class="form-group">
											<label>BROKER :</label>
										</div>
									</div>
									<div class="col-12 col-sm-8 col-md-10 col-lg-9 col-xl-10">
										<div class="form-group field">
											<div class="">
												<select name="BrokerID" id="BrokerID"  class="form-control" onchange="transfortcon(this);">
													<option value=""> --Select -- </option>
													<?php
													foreach ($getbrokerData as $qgetbrokerData)
													{
														?>
														<option <?php if($editsaleOrderdata['BrokerID'] == $qgetbrokerData->Ledger_Id){echo "selected";}?> value="<?=$qgetbrokerData->Ledger_Id ?>"> <?=$qgetbrokerData->Name?> </option>
														<?php
													}
													?>
													
												</select>
											</div>
										</div>
									</div>

								</div>
							</div>
							<div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
								<div class="row">
									<div class="col-12 col-sm-4 col-md-2 col-lg-3 col-xl-2 d-flex ">
										<div class="form-group">
											<label>DATE :</label>
										</div>
									</div>
									<div class="col-12 col-sm-8 col-md-10 col-lg-3 col-xl-10">
										<div class="form-group field">
											<div class="">
												<input type="text" id="datepicker-Editautoclose"  name="SaleDate" class="form-control" value="<?=$editsaleOrderdata['SaleDate'];?>">  
											</div>
										</div>
									</div>
									<div class="col-12 col-sm-4 col-md-2 col-lg-3 col-xl-2 d-flex ">
										<div class="form-group">
											<label>GST TYPE :</label>
										</div>
									</div>
									<div class="col-12 col-sm-8 col-md-10 col-lg-3 col-xl-10">
										<div class="form-group field">
											<div class="">
												<select name="GstTypeID" id="EditGstTypeID"  class="form-control">
													<option value=""> --Select -- </option>
													<?php
													foreach ($getgstTypeData as $qgetgstTypeData)
													{
														?>
														<option <?php if($editsaleOrderdata['GstTypeID'] == $qgetgstTypeData->GsttypeID){echo "selected";}?> value="<?=$qgetgstTypeData->GsttypeID		?>"> <?=$qgetgstTypeData->GstTypeName?> </option>
														<?php
													}
													?>
													
												</select>
											</div>
										</div>
									</div>

									<div class="col-12 col-sm-4 col-md-2 col-lg-3 col-xl-2 d-flex ">
										<div class="form-group">
											<label>HASTE GSTIN :</label>
										</div>
									</div>
									<div class="col-12 col-sm-8 col-md-10 col-lg-3 col-xl-10">
										<div class="form-group field">
											<div class="">
												<input type="text" id="EditHasteGstin"  name="HasteGstin" class="form-control" value="<?=$editsaleOrderdata['HasteGstin'];?>"> 
											</div>
										</div>
									</div>
									<div class="col-12 col-sm-4 col-md-2 col-lg-3 col-xl-2 d-flex ">
										<div class="form-group">
											<label>PARTY GSTIN :</label>
										</div>
									</div>
									<div class="col-12 col-sm-8 col-md-10 col-lg-3 col-xl-10">
										<div class="form-group field">
											<div class="">
												<input type="text" id="EditPartyGstin"  name="PartyGstin" class="form-control" value="<?=$editsaleOrderdata['PartyGstin'];?>">
											</div>
										</div>
									</div>

									<div class="col-12 col-sm-4 col-md-2 col-lg-3 col-xl-2 d-flex ">
										<div class="form-group">
											<label>STATION :</label>
										</div>
									</div>
									<div class="col-12 col-sm-8 col-md-10 col-lg-9 col-xl-10">
										<div class="form-group field">
											<div class="">
												<select name="StationID" id="StationID"  class="form-control">
													<option value="">-Select-</option>

													<?php
													foreach ($getstationData as $qgetstationData)
													{
														?>
														<option <?php if($editsaleOrderdata['StationID'] == $qgetstationData->StationID){echo "selected";}?> value="<?=$qgetstationData->StationID;?>"><?=$qgetstationData->StationName;?></option>
														<?php
													}
													?>
												</select>
											</div>
										</div>
									</div>

									<div class="col-12 col-sm-4 col-md-2 col-lg-3 col-xl-2 d-flex ">
										<div class="form-group">
											<label>TRANSPORT :</label>
										</div>
									</div>
									<div class="col-12 col-sm-8 col-md-10 col-lg-9 col-xl-10">
										<div class="form-group field">
											<div class="">
												<select name="TransportID" id="TransportID"  class="form-control">
													<option value="">-Select-</option>

													<?php
													foreach ($gettransportData as $qgettransportData)
													{
														?>
														<option <?php if($editsaleOrderdata['TransportID'] == $qgettransportData->transportID){echo "selected";}?> value="<?=$qgettransportData->transportID;?>"><?=$qgettransportData->transportName;?></option>
														<?php
													}
													?>
												</select>
											</div>
										</div>
									</div>

									<div class="col-12 col-sm-4 col-md-2 col-lg-3 col-xl-2 d-flex ">
										<div class="form-group">
											<label>VEHICLE NO. :</label>
										</div>
									</div>
									<div class="col-12 col-sm-8 col-md-10 col-lg-3 col-xl-10">
										<div class="form-group field">
											<div class="">
												<input type="text" id="VehicleNo"  name="VehicleNo" class="form-control" value="<?=$editsaleOrderdata['VehicleNo'];?>"> 
											</div>
										</div>
									</div>
									<div class="col-12 col-sm-4 col-md-2 col-lg-3 col-xl-2 d-flex ">
										<div class="form-group">
											<label>SCREEN SERIES :</label>
										</div>
									</div>
									<div class="col-12 col-sm-8 col-md-10 col-lg-3 col-xl-10">
										<div class="form-group field">
											<div class="">
												<select name="ScreenSeriesID" id="ScreenSeriesID"  class="form-control" onchange="transfortcon(this);">
													<option value=""> --Select -- </option>
													<?php
													foreach ($getscreenbrandData as $qgetscreenbrandData)
													{
														?>
														<option <?php if($editsaleOrderdata['ScreenSeriesID'] == $qgetscreenbrandData->screenBrandID){echo "selected";}?> value="<?=$qgetscreenbrandData->screenBrandID ?>"> <?=$qgetscreenbrandData->brandName?> </option>
														<?php
													}
													?>
												</select>
											</div>
										</div>
									</div>

									<div class="col-12 col-sm-4 col-md-2 col-lg-3 col-xl-2 d-flex ">
										<div class="form-group">
											<label>DHARA :</label>
										</div>
									</div>
									<div class="col-12 col-sm-8 col-md-10 col-lg-3 col-xl-10">
										<div class="form-group field">
											<div class="">
												<input type="text" id="EditSaleDhara"  name="SaleDhara" placeholder="0.00" class="form-control" value="<?=$editsaleOrderdata['SaleDhara'];?>"> 
											</div>
										</div>
									</div>
									<div class="col-12 col-sm-4 col-md-2 col-lg-3 col-xl-2 d-flex ">
										<div class="form-group">
											<label>GRACE :</label>
										</div>
									</div>
									<div class="col-12 col-sm-8 col-md-10 col-lg-3 col-xl-10">
										<div class="form-group field">
											<div class="">
												<input type="text" id="SaleGrace"  name="SaleGrace" placeholder="0" class="form-control" value="<?=$editsaleOrderdata['SaleGrace'];?>">
											</div>
										</div>
									</div>

								</div>
							</div>
						</div>	
					</div>
					<div class="formtitle" style="overflow-x:auto;">
						<input type="hidden" id="SellOrdercountdata" name="SellOrdercountdata" value="1">
						<table id="myTable" class="table order-list">
						    <thead>
						        <tr>
						            <td>PICK</td>
						            <td>REF.</td>
						            <td>MAIN SCREEN</td>
						            <td>SCREEN NAME</td>
						            <td>PACKING</td>
						            <td>UNIT</td>
						            <td>PCS</td>
						            <td>CUT</td>
						            <td>MTS/QTY</td>
						            <td>RATE</td>
						            <td>AMOUNT</td>
						            <td>R.D.</td>
						            <td>DISC%</td>
						            <td>MANUAAL ADD/LESS</td>
						            <td>CGST %</td>
						            <td>SGST %</td>
						            <td>CGST/IGST AMT.</td>
						            <td>SGST AMT.</td>
						            <td>ACTION</td>
						        </tr>
						    </thead>
						    <tbody>
						    	 <?php
						    	$SaleOrderID = $editsaleOrderdata['SaleOrderID'];
						    	$sellOrderListData = $this->db->query("SELECT * from saleorderlist where SaleOrderID = '$SaleOrderID'")->result_array();
						    	$x = 0;
						    	foreach ($sellOrderListData as $Listvalue)
						    	{ 
						    	?>
					    		<tr>
						            <td>
						                <input type="text" name="pick<?=$x;?>" id="pick<?=$x;?>" value="<?=$Listvalue['SalePick']?>" class="form-control" />
						            </td>
						            <td>
						                <input type="text" name="ref<?=$x;?>" id="ref<?=$x;?>" value="<?=$Listvalue['SaleRef']?>"  class="form-control"/>
						            </td>
						            <td>
						                
						                <select name="MainScreen<?=$x;?>" id="MainScreen<?=$x;?>" onchange="getEditCutData(<?=$x;?>);" class="form-control">
											<option value=""> --Select -- </option>
											<?php
											foreach ($getitemdetailsdata as $qgetitemdetailsdata)
											{
												?>
												<option <?php if($qgetitemdetailsdata->ItemdetailID == $Listvalue['SaleMainScreen']) {echo "selected";}?> value="<?=$qgetitemdetailsdata->ItemdetailID ?>"> <?=$qgetitemdetailsdata->Name?> </option>

												<?php
											}
											?>
										</select>

						            </td>
						            <td>
						            	<select name="screenName<?=$x;?>" id="screenName<?=$x;?>"  class="form-control">
											<option value=""> --Select -- </option>
											<?php
											foreach ($getitemdetailsdata as $qgetitemdetailsdata)
											{
												?>
												<option <?php if($qgetitemdetailsdata->ItemdetailID == $Listvalue['SaleScreenName']) {echo "selected";}?> value="<?=$qgetitemdetailsdata->ItemdetailID ?>"> <?=$qgetitemdetailsdata->Name?> </option>

												<?php
											}
											?>
										</select>
						            </td>
						            <td>
						            	<select name="Packing<?=$x;?>" id="Packing<?=$x;?>"  class="form-control">
											<option value=""> --Select -- </option>
											<?php
											foreach ($getPackageData as $qgetPackageData)
											{
												?>
												<option <?php if($qgetPackageData->PackagestyleID == $Listvalue['SalePacking']) {echo "selected";}?> value="<?=$qgetPackageData->PackagestyleID ?>"> <?=$qgetPackageData->packing?> </option>

												<?php
											}
											?>
										</select>
						            </td>
						            <td>
						                <select name="Unit<?=$x;?>" id="Unit<?=$x;?>"  class="form-control">
											<option value="pcs">Pcs</option>
											<option <?php if($Listvalue['SaleUnit'] == "mts") {echo "selected";}?>>MTS</option>

											<option <?php if($Listvalue['SaleUnit'] == "kg") {echo "selected";}?>>KG</option>

											<option <?php if($Listvalue['SaleUnit'] =="suit") {echo "selected";}?>>Suit</option>

											<option <?php if($Listvalue['SaleUnit'] == "other") {echo "selected";}?>>Other</option>
										</select>
						            </td>
						            <td>
						                <input type="text" name="Pcs<?=$x;?>" id="Pcs<?=$x;?>" value="<?=$Listvalue['SalePcs']?>" class="form-control EditPcs"/>
						            </td>
						            <td>
						                <input type="text" name="Cut<?=$x;?>" id="Cut<?=$x;?>" value="<?=$Listvalue['SaleCut']?>" class="form-control"/>
						            </td>
						            <td>
						                <input type="text" name="MtsQty<?=$x;?>" id="MtsQty<?=$x;?>" value="<?=$Listvalue['SaleMtsQty']?>" class="form-control EditMysQty"/>
						            </td>
						            <td>
						                <input type="text" name="Rate<?=$x;?>" id="Rate<?=$x;?>" value="<?=$Listvalue['SaleRate']?>" class="form-control EditRate"/>
						            </td>

						            <td>
						                <input type="text" name="amount<?=$x;?>" id="amount<?=$x;?>" value="<?=$Listvalue['SaleAmount']?>" class="form-control EditAmount"/>
						            </td>
						            <td>
						                <input type="text" name="Rd<?=$x;?>" id="Rd<?=$x;?>" value="<?=$Listvalue['SaleListRD']?>" class="form-control"/>
						            </td>
						            <td>
						                <input type="text" name="Disc<?=$x;?>" id="Disc<?=$x;?>" value="<?=$Listvalue['SaleListDisc']?>" class="form-control"/>
						            </td>
						            <td>
						                <input type="text" name="MANUAALAddLess<?=$x;?>" id="MANUAALAddLess<?=$x;?>" value="<?=$Listvalue['ManuaalAddLess']?>" class="form-control"/>
						            </td>
						            <td>
						                <input type="text" name="Cgst<?=$x;?>" id="Cgst<?=$x;?>" value="<?=$Listvalue['SaleListCgst']?>" class="form-control EditCgst"/>
						            </td>
						            <td>
						                <input type="text" name="Sgst<?=$x;?>" id="Sgst<?=$x;?>" value="<?=$Listvalue['SaleListSgst']?>" class="form-control EditSgst"/>
						            </td>
						            <td>
						                <input type="text" name="CgstSgstAmt<?=$x;?>" id="CgstSgstAmt<?=$x;?>" value="<?=$Listvalue['SaleCgstIgstAmt']?>" class="form-control EditCgstSgstAmt"/>
						            </td>
						            <td>
						                <input type="text" name="SgstAmt<?=$x;?>" id="SgstAmt<?=$x;?>" value="<?=$Listvalue['SaleListSgstAmt']?>" class="form-control EditSgstAmt"/>
						            </td>
						            
						            <td><a class="deleteRow"></a>

						            </td>
						        </tr>
						        <?php
						    		$x++;
						    	}
						    	
						    	?>
						    </tbody>
						    <tfoot>
						    	<input type="hidden" class="countdata" id="" name="countdata1" value="<?=sizeof($sellOrderListData);?>">
						        <tr>
						            <!-- <td colspan="5" style="text-align: left;">
						                <input type="button" class="btn btn-lg btn-block addsalerow" id="addsalerow" value="Add Row" />
						            </td> -->
						        </tr>
						        <tr>
						        </tr>
						    </tfoot>
						</table>
					</div>

					<div class="formtitle">
						<h4 class="backcolor">TOTAL</h4>
						<div class="row removemargin">
							<div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
								<div class="row">
									<div class="col-12 col-sm-4 col-md-2 col-lg-3 col-xl-2 d-flex ">
										<div class="form-group">
											<label>HSN CODE :</label>
										</div>
									</div>
									<div class="col-12 col-sm-8 col-md-10 col-lg-3 col-xl-10">
										<div class="form-group field">
											<div class="">
												<input type="text"  name="HsnCode" id="HsnCode" class="form-control" value="<?=$editsaleOrderdata['HsnCode'];?>">
											</div>
										</div>
									</div>
									<div class="col-12 col-sm-4 col-md-2 col-lg-3 col-xl-2 d-flex">
										<div class="form-group">
											<label>ORDER EXECU. :</label>
										</div>
									</div>
									<div class="col-12 col-sm-8 col-md-10 col-lg-3 col-xl-10">
										<div class="form-group field">
											<div class="">
												<input type="Checkbox" value="1"  name="OrderExecu" id="OrderExecu"> 
											</div>
										</div>
									</div>
									<div class="col-12 col-sm-4 col-md-2 col-lg-3 col-xl-2 d-flex ">
										<div class="form-group">
											<label>GRAND TOTAL :</label>
										</div>
									</div>
									<div class="col-12 col-sm-8 col-md-10 col-lg-3 col-xl-10">
										<div class="form-group field">
											<div class="">
												<input type="text"  name="GrandTotal1" id="GrandTotal1"  class="form-control" value="<?=$editsaleOrderdata['GrandTotal1'];?>">
											</div>
										</div>
									</div>
									<div class="col-12 col-sm-4 col-md-2 col-lg-1 col-xl-2 d-flex ">
									</div>
									<div class="col-12 col-sm-8 col-md-10 col-lg-3 col-xl-10">
										<div class="form-group field">
											<div class="">
												<input type="text"  name="GrandTotal12" id="GrandTotal12" class="form-control" value="<?=$editsaleOrderdata['GrandTotal12'];?>">
											</div>
										</div>
									</div>

									<div class="col-12 col-sm-4 col-md-2 col-lg-3 col-xl-2 d-flex ">
									</div>
									<div class="col-12 col-sm-8 col-md-10 col-lg-3 col-xl-10">
										<div class="form-group field">
											<div class="">
												<input type="text"  name="GrandTotal13" id="GrandTotal13" class="form-control" value="<?=$editsaleOrderdata['GrandTotal13'];?>">
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>	
					</div>

					<div class="formtitle">
						<h4 class="backcolor">MISC DETAILS</h4>
						<div class="row removemargin">
							<div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
								<div class="row">
									<div class="col-12 col-sm-4 col-md-2 col-lg-3 col-xl-2 d-flex ">
										<div class="form-group">
											<label>DBTAINED BY :</label>
										</div>
									</div>
									<div class="col-12 col-sm-8 col-md-10 col-lg-3 col-xl-10">
										<div class="form-group field">
											<div class="">
												<input type="text"  name="DbtainedBy" id="DbtainedBy"  class="form-control" value="<?=$editsaleOrderdata['DbtainedBy'];?>">
											</div>
										</div>
									</div>
									<div class="col-12 col-sm-4 col-md-2 col-lg-3 col-xl-2 d-flex">
										<div class="form-group">
											<label>DELIVERY DAYS :</label>
										</div>
									</div>
									<div class="col-12 col-sm-8 col-md-10 col-lg-3 col-xl-10">
										<div class="form-group field">
											<div class="">
												<input type="text"  name="DeliveryDays" id="DeliveryDays" placeholder="0" class="form-control" value="<?=$editsaleOrderdata['DeliveryDays'];?>"> 
											</div>
										</div>
									</div>
									<div class="col-12 col-sm-4 col-md-2 col-lg-3 col-xl-2 d-flex ">
										<div class="form-group">
											<label>RMK :</label>
										</div>
									</div>
									<div class="col-12 col-sm-8 col-md-10 col-lg-3 col-xl-10">
										<div class="form-group field">
											<div class="">
												<select name="RemarkID" id="RemarkID"  class="form-control" onchange="transfortcon(this);">
													<option value=""> --Select -- </option>
													<?php
													foreach ($getremarkData as $qgetremarkData)
													{
														?>
														<option <?php if($editsaleOrderdata['RemarkID'] == $qgetremarkData->RemarkID){echo "selected";}?> value="<?=$qgetremarkData->RemarkID	?>"> <?=$qgetremarkData->Remark?> </option>
														<?php
													}
													?>
													
												</select>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
								<div class="row">
									<div class="col-12 col-sm-4 col-md-2 col-lg-3 col-xl-2 d-flex ">
										<div class="form-group">
											<label>DILIVERY DUE DATE :</label>
										</div>
									</div>
									<div class="col-12 col-sm-8 col-md-10 col-lg-3 col-xl-10">
										<div class="form-group field">
											<div class="">
												<input type="text" id="datepicker1-autoclose"  name="DeliveryDueDate" placeholder="0" class="form-control" value="<?=$editsaleOrderdata['DeliveryDueDate'];?>">
											</div>
										</div>
									</div>

									<div class="col-12 col-sm-4 col-md-2 col-lg-3 col-xl-2 d-flex ">
										<div class="form-group">
											<label>E-WAY BILL NO :</label>
										</div>
									</div>
									<div class="col-12 col-sm-8 col-md-10 col-lg-3 col-xl-10">
										<div class="form-group field">
											<div class="">
												<input type="text"  name="EwayBillNo" id="EwayBillNo" placeholder="ENTER Order no." class="form-control" value="<?=$editsaleOrderdata['EwayBillNo'];?>">
											</div>
										</div>
									</div>
									<div class="col-12 col-sm-4 col-md-2 col-lg-3 col-xl-2 d-flex ">
										<div class="form-group">
											<label>NET AMT :</label>
										</div>
									</div>
									<div class="col-12 col-sm-8 col-md-10 col-lg-3 col-xl-10">
										<div class="form-group field">
											<div class="">
												<input type="text"  name="NetAmt" id="NetAmt" placeholder="0.00" class="form-control" value="<?=$editsaleOrderdata['NetAmt'];?>">
											</div>
										</div>
									</div>

								</div>
							</div>
						</div>	
					</div>

					<div class="formtitle">
						<h4 class="backcolor">LR DETAILS</h4>
						<div class="row removemargin">
							<div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
								<div class="row">
									<div class="col-12 col-sm-4 col-md-2 col-lg-3 col-xl-2 d-flex ">
										<div class="form-group">
											<label>LR NO :</label>
										</div>
									</div>
									<div class="col-12 col-sm-8 col-md-10 col-lg-3 col-xl-10">
										<div class="form-group field">
											<div class="">
												<input type="text"  name="LrNo" id="LrNo" class="form-control" value="<?=$editsaleOrderdata['LrNo'];?>">
											</div>
										</div>
									</div>
									<div class="col-12 col-sm-4 col-md-2 col-lg-3 col-xl-2 d-flex">
										<div class="form-group">
											<label>LR DATE :</label>
										</div>
									</div>
									<div class="col-12 col-sm-8 col-md-10 col-lg-3 col-xl-10">
										<div class="form-group field">
											<div class="">
												<input type="text" id="datepicker2-autoclose"  name="LrDate" class="form-control" value="<?=$editsaleOrderdata['LrDate'];?>">
											</div>
										</div>
									</div>
									<div class="col-12 col-sm-4 col-md-2 col-lg-3 col-xl-2 d-flex ">
										<div class="form-group">
											<label>LR REC DATE :</label>
										</div>
									</div>
									<div class="col-12 col-sm-8 col-md-10 col-lg-3 col-xl-10">
										<div class="form-group field">
											<div class="">
												<input type="text" id="datepicker3-autoclose"  name="LrRecDate" class="form-control" value="<?=$editsaleOrderdata['LrRecDate'];?>">
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
								<div class="row">
									<div class="col-12 col-sm-4 col-md-2 col-lg-3 col-xl-2 d-flex ">
										<div class="form-group">
											<label>WEIGHT :</label>
										</div>
									</div>
									<div class="col-12 col-sm-8 col-md-10 col-lg-3 col-xl-10">
										<div class="form-group field">
											<div class="">
												<input type="text"  name="Weight" id="Weight"  class="form-control" value="<?=$editsaleOrderdata['Weight'];?>">
											</div>
										</div>
									</div>

									<div class="col-12 col-sm-4 col-md-2 col-lg-3 col-xl-2 d-flex ">
										<div class="form-group">
											<label>FREIGHT :</label>
										</div>
									</div>
									<div class="col-12 col-sm-8 col-md-10 col-lg-3 col-xl-10">
										<div class="form-group field">
											<div class="">
												<input type="text"  name="Freight" id="Freight" class="form-control" value="<?=$editsaleOrderdata['Freight'];?>">
											</div>
										</div>
									</div>
									
								</div>
							</div>
						</div>	
					</div>

					<div class="formtitle">
						<h4 class="backcolor">ADD/LESS</h4>
						<div class="row removemargin">
							<div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
								<div class="row">
									<div class="col-12 col-sm-4 col-md-2 col-lg-2 col-xl-2 d-flex ">
										<div class="form-group">
											<label>RMK :</label>
										</div>
									</div>
									<div class="col-12 col-sm-8 col-md-10 col-lg-4 col-xl-10">
										<div class="form-group field">
											<div class="">
												<select name="RemarkID1" id="RemarkID1"  class="form-control" onchange="transfortcon(this);">
													<option value=""> --Select -- </option>
													<?php
													foreach ($getremarkData as $qgetremarkData)
													{
														?>
														<option value="<?=$qgetremarkData->RemarkID	?>"> <?=$qgetremarkData->Remark?> </option>
														<?php
													}
													?>
												</select>
											</div>
										</div>
									</div>
									<div class="col-12 col-sm-4 col-md-2 col-lg-2 col-xl-2 d-flex ">
										<div class="form-group">
											<label>VALUE1 :</label>
										</div>
									</div>
									<div class="col-12 col-sm-8 col-md-10 col-lg-4 col-xl-10">
										<div class="form-group field">
											<div class="">
												<input type="text"  name="No1" id="No1" placeholder="0.00" class="form-control" value="<?=$editsaleOrderdata['No1'];?>"> 
											</div>
										</div>
									</div>
									
									<div class="col-12 col-sm-4 col-md-2 col-lg-2 col-xl-2 d-flex ">
										<div class="form-group">
											<label>VALUE2 :</label>
										</div>
									</div>
									<div class="col-12 col-sm-8 col-md-10 col-lg-4 col-xl-10">
										<div class="form-group field">
											<div class="">
												<input type="text"  name="No11" id="No11" placeholder="0.00" class="form-control" value="<?=$editsaleOrderdata['No11'];?>">
											</div>
										</div> 
									</div>
									<div class="col-12 col-sm-4 col-md-2 col-lg-2 col-xl-2 d-flex ">
										<div class="form-group">
											<label>RMK :</label>
										</div>
									</div>
									<div class="col-12 col-sm-8 col-md-10 col-lg-4 col-xl-10">
										<div class="form-group field">
											<div class="">
												<select name="RemarkID2" id="RemarkID2"  class="form-control" onchange="transfortcon(this);" >
													<option value=""> --Select -- </option>
													<?php
													foreach ($getremarkData as $qgetremarkData)
													{
														?>
														<option value="<?=$qgetremarkData->RemarkID	?>"> <?=$qgetremarkData->Remark?> </option>
														<?php
													}
													?>
												</select>
											</div>
										</div>
									</div>

									<div class="col-12 col-sm-4 col-md-2 col-lg-2 col-xl-2 d-flex ">
										<div class="form-group">
											<label>VALUE1 :</label>
										</div>
									</div>
									<div class="col-12 col-sm-8 col-md-10 col-lg-4 col-xl-10">
										<div class="form-group field">
											<div class="">
												<input type="text"  name="No2" id="No2" placeholder="0.00" class="form-control" value="<?=$editsaleOrderdata['No2'];?>">
											</div>
										</div>
									</div>
									<div class="col-12 col-sm-4 col-md-2 col-lg-2 col-xl-2 d-flex ">
										<div class="form-group">
											<label>VALUE2 :</label>
										</div>
									</div>
									<div class="col-12 col-sm-8 col-md-10 col-lg-4 col-xl-10">
										<div class="form-group field">
											<div class="">
												<input type="text"  name="No21" id="No21" placeholder="0.00" class="form-control" value="<?=$editsaleOrderdata['No21'];?>"> 
											</div>
										</div>
									</div>

									<div class="col-12 col-sm-4 col-md-2 col-lg-2 col-xl-2 d-flex ">
										<div class="form-group">
											<label>RMK :</label>
										</div>
									</div>
									<div class="col-12 col-sm-8 col-md-10 col-lg-4 col-xl-10">
										<div class="form-group field">
											<div class="">
												<select name="RemarkID1" id="RemarkID1"  class="form-control" onchange="transfortcon(this);">
													<option value=""> --Select -- </option>
													<?php
													foreach ($getremarkData as $qgetremarkData)
													{
														?>
														<option value="<?=$qgetremarkData->RemarkID	?>"> <?=$qgetremarkData->Remark?> </option>
														<?php
													}
													?>
												</select>
											</div>
										</div>
									</div>
									<div class="col-12 col-sm-4 col-md-2 col-lg-2 col-xl-2 d-flex ">
										<div class="form-group">
											<label>VALUE1 :</label>
										</div>
									</div>
									<div class="col-12 col-sm-8 col-md-10 col-lg-4 col-xl-10">
										<div class="form-group field">
											<div class="">
												<input type="text"  name="No3" id="No3" placeholder="0.00" class="form-control" value="<?=$editsaleOrderdata['No3'];?>">
											</div>
										</div>
									</div>

									<div class="col-12 col-sm-4 col-md-2 col-lg-2 col-xl-2 d-flex ">
										<div class="form-group">
											<label>VALUE2 :</label>
										</div>
									</div>
									<div class="col-12 col-sm-8 col-md-10 col-lg-4 col-xl-10">
										<div class="form-group field">
											<div class="controls">
												<input type="text"  name="No31" id="No31" placeholder="0.00" class="form-control" value="<?=$editsaleOrderdata['No31'];?>"> 
											</div>
										</div>
									</div>

								</div>
							</div>
							<div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
								<div class="row">
									<div class="col-12 col-sm-4 col-md-2 col-lg-2 col-xl-2 d-flex ">
										<div class="form-group">
											<label>AMT :</label>
										</div>
									</div>
									<div class="col-12 col-sm-8 col-md-10 col-lg-4 col-xl-10">
										<div class="form-group field">
											<div class="">
												<input type="text"  name="Amt1" id="Amt1" placeholder="0.00" class="form-control" value="<?=$editsaleOrderdata['Amt1'];?>">
											</div>
										</div>
									</div>

									<div class="col-12 col-sm-4 col-md-2 col-lg-2 col-xl-2 d-flex ">
										<div class="form-group">
											<label>AMT :</label>
										</div>
									</div>
									<div class="col-12 col-sm-8 col-md-10 col-lg-3 col-xl-10">
										<div class="form-group field">
											<div class="">

												<input type="text"  name="Amt2" id="Amt2" placeholder="0.00" class="form-control" value="<?=$editsaleOrderdata['Amt2'];?>"> 
											</div>
										</div>
									</div>

									<div class="col-12 col-sm-4 col-md-2 col-lg-2 col-xl-2 d-flex ">
										<div class="form-group">
											<label>AMT :</label>
										</div>
									</div>
									<div class="col-12 col-sm-8 col-md-10 col-lg-4 col-xl-10">
										<div class="form-group field">
											<div class="">
												<input type="text"  name="Amt3" id="Amt3" placeholder="0.00" class="form-control" value="<?=$editsaleOrderdata['Amt3'];?>">
											</div>
										</div>
									</div>

									<div class="col-12 col-sm-4 col-md-2 col-lg-3 col-xl-2 d-flex">
										<div class="form-group">
											<label>NET AMT :</label>
										</div>
									</div>
									<div class="col-12 col-sm-8 col-md-10 col-lg-3 col-xl-10">
										<div class="form-group field">
											<div class="">
												<input type="text"  name="NetAmt1" id="NetAmt1" placeholder="0.00" class="form-control" value="<?=$editsaleOrderdata['NetAmt1'];?>">
											</div>
										</div>
									</div>

								</div>
							</div>
						</div>	
					</div>
					
					<div class="formtitle">
						<h4 class="backcolor">GST/TDS</h4>
						<div class="row removemargin">
							<div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
								<div class="row">
									<div class="col-12 col-sm-4 col-md-2 col-lg-3 col-xl-2 d-flex ">
										<div class="form-group">
											<label> CGST/IGST % :</label>
										</div>
									</div>
									<div class="col-12 col-sm-8 col-md-10 col-lg-3 col-xl-10">
										<div class="form-group field">
											<div class="">
												<input type="text"  name="CgstIgst" id="EditCgstIgst" placeholder="0.00" class="form-control" value="<?=$editsaleOrderdata['CgstIgst'];?>">
											</div>
										</div>
									</div>
									<div class="col-12 col-sm-4 col-md-2 col-lg-2 col-xl-2 d-flex">
										<div class="form-group">
											<label>AMT :</label>
										</div>
									</div>
									<div class="col-12 col-sm-8 col-md-10 col-lg-3 col-xl-10">
										<div class="form-group field">
											<div class="">
												<input type="text"  name="CgstAmt" id="EditCgstAmt" placeholder="0.00" class="form-control" value="<?=$editsaleOrderdata['CgstAmt'];?>"> 
											</div>
										</div>
									</div>

									<div class="col-12 col-sm-4 col-md-2 col-lg-3 col-xl-2 d-flex ">
										<div class="form-group">
											<label>SGST % :</label>
										</div>
									</div>
									<div class="col-12 col-sm-8 col-md-10 col-lg-3 col-xl-10">
										<div class="form-group field">
											<div class="">
												<input type="text"  name="Sgst" id="EditSgst" placeholder="0.00" class="form-control" value="<?=$editsaleOrderdata['Sgst'];?>"> 
											</div>
										</div>
									</div>
									<div class="col-12 col-sm-4 col-md-2 col-lg-2 col-xl-2 d-flex">
										<div class="form-group">
											<label>AMT :</label>
										</div>
									</div>
									<div class="col-12 col-sm-8 col-md-10 col-lg-3 col-xl-10">
										<div class="form-group field">
											<div class="">
												<input type="text"  name="SgstAmt" id="EditSgstAmt" placeholder="0.00" class="form-control" value="<?=$editsaleOrderdata['SgstAmt'];?>"> 
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
								<div class="row">
									<div class="col-12 col-sm-4 col-md-2 col-lg-3 col-xl-2 d-flex " style="margin: 0px 0px 0px -30px;">
										<div class="form-group">
											<label>TAXABLE VALUE :</label>
										</div>
									</div>
									<div class="col-12 col-sm-8 col-md-10 col-lg-3 col-xl-10">
										<div class="form-group field">
											<div class="">
												<input type="text"  name="TaxableValue" id="EditTaxableValue" placeholder="0.00" class="form-control" value="<?=$editsaleOrderdata['TaxableValue'];?>">
											</div>
										</div>
									</div>

									<div class="col-12 col-sm-4 col-md-2 col-lg-3 col-xl-2 d-flex ">
										<div class="form-group">
											<label>BILL AMT :</label>
										</div>
									</div>
									<div class="col-12 col-sm-8 col-md-10 col-lg-3 col-xl-10">
										<div class="form-group field">
											<div class="">
												<input type="text"  name="BillAmt" id="EditBillAmt" placeholder="0.00" class="form-control" value="<?=$editsaleOrderdata['BillAmt'];?>">
											</div>
										</div>
									</div>

									<div class="col-12 col-sm-4 col-md-2 col-lg-3 col-xl-2 d-flex " style="margin: 0px 0px 0px -30px;">
										<div class="form-group">
											<label>NET AFTER TDS :</label>
										</div>
									</div>
									<div class="col-12 col-sm-8 col-md-10 col-lg-3 col-xl-10">
										<div class="form-group field">
											<div class="">
												<input type="text"  name="NetAfterTds" id="EditNetAfterTds" placeholder="0.00" class="form-control" value="<?=$editsaleOrderdata['NetAfterTds'];?>">
											</div>
										</div>
									</div>

									<div class="col-12 col-sm-4 col-md-2 col-lg-3 col-xl-2 d-flex ">
										<div class="form-group">
											<label>E-WAY BILL NO (READ ONLY) :</label>
										</div>
									</div>
									<div class="col-12 col-sm-8 col-md-10 col-lg-3 col-xl-10">
										<div class="form-group field">
											<div class="">
												<input type="text"  name="EwayBillNo" id="EditEwayBillNo" class="form-control" value="<?=$editsaleOrderdata['EwayBillNo'];?>" style="margin: 28px 0px 0px -70px;">
											</div>
										</div>
									</div>

								</div>
							</div>
						</div>	
					</div>
					
					<div class="formtitle">
						<h4 class="backcolor">ADD/LESS (PAYMENT)</h4>
						<div class="row removemargin">
							<div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
								<div class="row">
									<div class="col-12 col-sm-4 col-md-2 col-lg-3 col-xl-2 d-flex ">
										<div class="form-group">
											<label>PAID DATE :</label>
										</div>
									</div>
									<div class="col-12 col-sm-8 col-md-10 col-lg-3 col-xl-10">
										<div class="form-group field">
											<div class="">
												<input type="text" id="datepicker4-autoclose"  name="PaidDate" placeholder="0" class="form-control" value="<?=$editsaleOrderdata['PaidDate'];?>">
											</div>
										</div>
									</div>
									<div class="col-12 col-sm-4 col-md-2 col-lg-3 col-xl-2 d-flex">
										<div class="form-group">
											<label>DISC % :</label>
										</div>
									</div>
									<div class="col-12 col-sm-8 col-md-10 col-lg-3 col-xl-10">
										<div class="form-group field">
											<div class="">
												<input type="text"  name="SaleDisc" id="SaleDisc" placeholder="0.00" class="form-control" value="<?=$editsaleOrderdata['SaleDisc'];?>"> 
											</div>
										</div>
									</div>

									<div class="col-12 col-sm-4 col-md-2 col-lg-3 col-xl-2 d-flex ">
										<div class="form-group">
											<label>PACK/FOLLO. :</label>
										</div>
									</div>
									<div class="col-12 col-sm-8 col-md-10 col-lg-3 col-xl-10">
										<div class="form-group field">
											<div class="">
												<input type="text"  name="PackFollo" id="PackFollo" placeholder="0.00" class="form-control" value="<?=$editsaleOrderdata['PackFollo'];?>"> 
											</div>
										</div>
									</div>
									<div class="col-12 col-sm-4 col-md-2 col-lg-3 col-xl-2 d-flex ">
										<div class="form-group">
											<label>R.D :</label>
										</div>
									</div>
									<div class="col-12 col-sm-8 col-md-10 col-lg-3 col-xl-10">
										<div class="form-group field">
											<div class="">
												<input type="text"  name="SaleRd" id="SaleRd" placeholder="0.00" class="form-control" value="<?=$editsaleOrderdata['SaleRd'];?>">
											</div>
										</div>
									</div>

									<div class="col-12 col-sm-4 col-md-2 col-lg-3 col-xl-2 d-flex ">
										<div class="form-group">
											<label>SWEETS :</label>
										</div>
									</div>
									<div class="col-12 col-sm-8 col-md-10 col-lg-3 col-xl-10">
										<div class="form-group field">
											<div class="">
												<input type="text"  name="Sweets" id="Sweets" placeholder="0.00" class="form-control" value="<?=$editsaleOrderdata['Sweets'];?>">
											</div>
										</div>
									</div>
									<div class="col-12 col-sm-4 col-md-2 col-lg-3 col-xl-2 d-flex">
										<div class="form-group">
											<label>OTH/BC :</label>
										</div>
									</div>
									<div class="col-12 col-sm-8 col-md-10 col-lg-3 col-xl-10">
										<div class="form-group field">
											<div class="">
												<input type="text"  name="OthBc" id="OthBc" placeholder="0.00" class="form-control" value="<?=$editsaleOrderdata['OthBc'];?>"> 
											</div>
										</div>
									</div>

								</div>
							</div>
							<div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
								<div class="row">
									

									<div class="col-12 col-sm-4 col-md-2 col-lg-3 col-xl-2 d-flex ">
										<div class="form-group">
											<label>ADD AMT :</label>
										</div>
									</div>
									<div class="col-12 col-sm-8 col-md-10 col-lg-3 col-xl-10">
										<div class="form-group field">
											<div class="">
												<input type="text"  name="AddAmt" id="AddAmt" placeholder="0.00" class="form-control" value="<?=$editsaleOrderdata['AddAmt'];?>">
											</div>
										</div>
									</div>
									<div class="col-12 col-sm-4 col-md-2 col-lg-3 col-xl-2 d-flex ">
										<div class="form-group">
											<label>TDS AMT :</label>
										</div>
									</div>
									<div class="col-12 col-sm-8 col-md-10 col-lg-3 col-xl-10">
										<div class="form-group field">
											<div class="">
												<input type="text"  name="TdsAmt" id="TdsAmt" placeholder="0.00" class="form-control" value="<?=$editsaleOrderdata['TdsAmt'];?>">
											</div>
										</div>
									</div>

									<div class="col-12 col-sm-4 col-md-2 col-lg-3 col-xl-2 d-flex ">
										<div class="form-group">
											<label>G.R. :</label>
										</div>
									</div>
									<div class="col-12 col-sm-8 col-md-10 col-lg-3 col-xl-10">
										<div class="form-group field">
											<div class="">
												<input type="text"  name="SaleGr" id="SaleGr" placeholder="0.00"class="form-control" value="<?=$editsaleOrderdata['SaleGr'];?>">
											</div>
										</div>
									</div>
									<div class="col-12 col-sm-4 col-md-2 col-lg-3 col-xl-2 d-flex ">
										<div class="form-group">
											<label>PAID AMT :</label>
										</div>
									</div>
									<div class="col-12 col-sm-8 col-md-10 col-lg-3 col-xl-10">
										<div class="form-group field">
											<div class="">
												<input type="text"  name="SalePaidAmt" id="SalePaidAmt" placeholder="0.00" class="form-control" value="<?=$editsaleOrderdata['SalePaidAmt'];?>">
											</div>
										</div>
									</div>

								</div>
							</div>
						</div>	
					</div>

					<div class="formtitle">
						<h4 class="backcolor">REC.DET</h4>
						<div class="row removemargin">
							<div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
								<div class="row">
									<div class="col-12 col-sm-4 col-md-2 col-lg-3 col-xl-2 d-flex ">
										<div class="form-group">
											<label> REC/SALE PCS :</label>
										</div>
									</div>
									<div class="col-12 col-sm-8 col-md-10 col-lg-3 col-xl-10">
										<div class="form-group field">
											<div class="">
												<input type="text"  name="RecSalePcs" id="RecSalePcs" placeholder="0" class="form-control" value="<?=$editsaleOrderdata['RecSalePcs'];?>">
											</div>
										</div>
									</div>
									<div class="col-12 col-sm-4 col-md-2 col-lg-2 col-xl-2 d-flex">
										<div class="form-group">
											<label>REC/SALE MTS :</label>
										</div>
									</div>
									<div class="col-12 col-sm-8 col-md-10 col-lg-3 col-xl-10">
										<div class="form-group field">
											<div class="">
												<input type="text"  name="RecSaleMts" id="RecSaleMts" placeholder="0.00" class="form-control" value="<?=$editsaleOrderdata['RecSaleMts'];?>"> 
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
								<div class="row">
									<div class="col-12 col-sm-4 col-md-2 col-lg-3 col-xl-2 d-flex " style="margin: 0px 0px 0px -30px;">
										<div class="form-group">
											<label>REC /SALE VNO. :</label>
										</div>
									</div>
									<div class="col-12 col-sm-8 col-md-10 col-lg-3 col-xl-10">
										<div class="form-group field">
											<div class="">
												<input type="text"  name="ResSaleVno" id="ResSaleVno" placeholder="0.00" class="form-control" value="<?=$editsaleOrderdata['ResSaleVno'];?>">
											</div>
										</div>
									</div>
						
								</div>
							</div>
						</div>	
					</div>

					<div class="row">
						<div class="form-group">
							<div class="text-xs-right" style="margin-left: 8px;">
								<button type="submit" class="btn btn-success">Submit</button>
								<a  href="<?php echo base_url()?>SalesOrder" class="btn btn-info">
		                            Cancel
		                        </a>
							</div>
						</div>
					</div>
				</div>	
			</div>
		</form>
	</div>
	<?php
	}
	?>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<?php $this->load->view('common/footer'); ?>
<script>
	$("body").delegate("#LNameData", "keydown", function(){
    var firstname,lastname;
    var name=this.value.split(" ");
    var firstname=name[0];
    var lastname=name[1];

    if(lastname == undefined)
    {
        firstshortname = firstname.charAt(0);
        $("#LCodeData").val(firstshortname);
    }
    else
    {
        firstshortname = firstname.charAt(0);
        secondshortname = lastname.charAt(0);
        $("#LCodeData").val(firstshortname.toUpperCase()+''+secondshortname.toUpperCase());
    }
});


$(".select2").select2();
$(".AcGroupselect").select2();
$(".Cityselect").select2();
$(".Stationselect").select2();
$(".Brokerselect").select2();
$(".Itemselect").select2();
$(".Seriesselect").select2();
$(".CompanySelect").select2();
$(".HasteSelect").select2();
$(".GstTypeSelect").select2();
$(".StationSelect").select2();
$(".TransportSelect").select2();
$(".ScreenSeriesSelect").select2();
$(".mainscreenSelect").select2();
$(".screenNameSelect").select2();
$(".PackingSelect").select2();
$(".UnitSelect").select2();
$(".reamrkSelect").select2();
$(".PartyACSelect").select2();
$(".StateSelect").select2();


	jQuery('#datepicker-autoclose').datepicker({
        autoclose: true,
        todayHighlight: true,
        autocomplete : false
    });
    jQuery('#datepicker-Editautoclose').datepicker({
        autoclose: true,
        todayHighlight: true,
        autocomplete : false
    });
    jQuery('#datepicker2-autoclose').datepicker({
        autoclose: true,
        todayHighlight: true,
        autocomplete : false
    });
    jQuery('#datepicker3-autoclose').datepicker({
        autoclose: true,
        todayHighlight: true,
        autocomplete : false
    });
    jQuery('#datepicker4-autoclose').datepicker({
        autoclose: true,
        todayHighlight: true,
        autocomplete : false
    });
	var inside = $("#SaleOrderID").val();
//alert(inside);
	if(inside != "")
	{
	$("#home7").removeClass('active');
	$(".nav-link").removeClass('active');
	$(".foractive").addClass('active');
	$("#editform").addClass('active');
	}


	/* Fetch PartyWise Details Start */
	function getpartyDetail(val)
    {
        var partyid = val.value;
        $.ajax({
        url: base_url+'Transaction_controller/fetchPartyDetail',
        data: {partyid:partyid},
        type: 'POST',
        success: function(data)
        {
            var obj = $.parseJSON(data);
            $('#StateIDData').val(obj.StateID).trigger("change");
            $('#BrokerID1').val(obj.BrokerID).trigger("change");
            $('#StationID1').val(obj.StationID).trigger("change");
            $('#TransportIDData1').val(obj.TransportID).trigger("change");
            $('#ScreenSeriesID').val(obj.SeriesID).trigger("change");
			$("#SalePartyGstin").val(obj.LGstin);
			$("#SaleDhara").val(obj.LDhara);
			$("#RemarkID").val(obj.LRemark);
        }
    });
    }

	$('#GstTypeID').change(function () {
		var gstyValue = $(this).val();

	    if (gstyValue != '' && gstyValue == "3") 
	    {
   		 	$("#SaleCgstIgst").val(5.00);
		    $("#SaleSgst").val("");
		    $(".Cgst").val(5.00);
		    $(".SgstData").val("");
	    }
	    else
	    {
		    $("#SaleCgstIgst").val(2.5);
		    $("#SaleSgst").val(2.5);
		    $(".Cgst").val(2.5);
		    $(".SgstData").val(2.5);
	    }

	});

	$('#EditGstTypeID').change(function () {
		var gstyValue = $(this).val();
		var sumdata = $("#SellOrdercountdata").val()-1;
		
	    if (gstyValue != '' && gstyValue == "3") 
	    {
	    	$("#EditCgstIgst").val(5.00);
		    $("#Cgst").val(5.00);
		    $(".EditCgst").val(5.00);
		    $(".EditSgst").val();
		    $(".EditCgst").val();
		    $(".EditSgst").val();
	    }
	    else
	    {
		    $("#EditCgstIgst").val(2.5);
		    $("#EditSgst").val(2.5);
		    $(".EditCgst").val(2.5);
		    $(".EditSgst").val(2.5);
	    }

	});


$("#myTable1").on("focusout", ".SalePcs", function () {
	var sum = 0;
    $(".SalePcs").each(function () {

        if (!isNaN(this.value) && this.value.length != 0) {
            sum += parseFloat(this.value);
            
        }

    });
    $("#SaleGrandTotal1").val(sum);


    var sum1 = 0;
    $(".Mts").each(function () {

        if (!isNaN(this.value) && this.value.length != 0) {
            sum1 += parseFloat(this.value);
            
        }

    });
    $("#SaleGrandTotal12").val(sum1);

    var sum2 = 0;
    $(".amount").each(function () {

        if (!isNaN(this.value) && this.value.length != 0) {
            sum2 += parseFloat(this.value);
            
        }

    });
    $("#SaleGrandTotal13").val(sum2);

});



</script>


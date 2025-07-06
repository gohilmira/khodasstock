
<?php $this->load->view('common/header'); ?>
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
	select.form-control:not([size]):not([multiple]) {
	height: calc(1.0625rem + 2px);
	}
</style>

<div class="page-wrapper">
	<div class="container-fluid">

		 <div id="responsive-modal-greypurchase" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
		    <div class="modal-dialog modal-lg">
		        <div class="modal-content">
		        	
		            <div class="modal-header">
		                <h4 class="modal-title">Grey  Purchase</h4>
		                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
		            </div>
		            <div class="modal-body">
		            	<form action="" class="" method="post" name="addGreyPurchaseOrderformmdl" id="addGreyPurchaseOrderformmdl" autocomplete="off">
								
								<input type="hidden" value="" id="Purchase_Order_Id" name="Purchase_Order_Id">
									
								<div class="row common_master_form_div">
									<div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 ">
										<div class="formtitle">
											<div class="row removemargin">
												<div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
													<div class="row">
														<?php
														$OrderNo = $this->db->query("SELECT GreyOrderNo from greypurchaseorder order by PurchaseOrderId desc LIMIT 1")->row_array();
														?>

														<div class="col-12 col-sm-4 col-md-2 col-lg-2 col-xl-2 d-flex ">
															<div class="form-group">
																<label>ORDER NO. :</label>
															</div>
														</div>
														<div class="col-12 col-sm-8 col-md-10 col-lg-10 col-xl-10">
															<div class="form-group field">
																<div class="controls">
																	<input type="text"  name="GreyOrderNo" value="<?=$OrderNo['GreyOrderNo']+1;?>" id="GreyOrderNo" placeholder="ENTER Order no." required class="form-control customvalidation">
																</div>
															</div>
														</div>
														<div class="col-12 col-sm-4 col-md-2 col-lg-2 col-xl-2 d-flex">
															<div class="form-group">
																<label> WEAVER :</label>
															</div>
														</div>
														<div class="col-12 col-sm-8 col-md-10 col-lg-10 col-xl-10">
															<div class="form-group field">
																<div class="">
																	<select name="WeaverID" id="WeaverIDData" style="width: 100%; height:36px;" class="select2 form-control custom-select">
																	<option value=""> --Select -- </option>
																	<?php
																	foreach ($getweaverData as $qgetweaverData)
																	{
																		?>
																	<option value="<?=$qgetweaverData->AcID?>"> <?=$qgetweaverData->ACName?> </option>
																		<?php
																	}
																	?>
																	
																	</select> 
																</div>
															</div>
														</div>
														<div class="col-12 col-sm-4 col-md-2 col-lg-2 col-xl-2 d-flex ">
															<div class="form-group">
																<label>BROKER :</label>
															</div>
														</div>
														<div class="col-12 col-sm-8 col-md-10 col-lg-10 col-xl-10">
															<div class="form-group field">
																<div class="">
																	<select name="BrokerID" id="BrokerIDData"  style="width: 100%; height:36px;" class="select2 form-control custom-select">
																		<option value=""> --Select -- </option>
																		<?php
																		foreach ($getBrokerData1 as $qgetbrokerData)
																		{
																			?>
																			<option value="<?=$qgetbrokerData->Ledger_Id?>"> <?=$qgetbrokerData->LName?> </option>
																			<?php
																		}
																		?>
																		
																	</select>
																</div>
															</div>
														</div>
													
														<div class="col-12 col-sm-4 col-md-2 col-lg-2 col-xl-2 d-flex ">
															<div class="form-group">
																<label>QUALITY :</label>
															</div>
														</div>
														<div class="col-12 col-sm-6 col-md-8 col-lg-10 col-xl-8">
															<div class="form-group field">
																<div class="">
																	<select name="QualityID" id="QualityID"  style="width: 100%; height:36px;" class="select2 form-control custom-select">
																		<option value=""> --Select -- </option>
																		<?php
																		foreach ($getgreyQualityData as $qgetgreyQualityData)
																		{
																			?>
																			<option value="<?=$qgetgreyQualityData->QualityID;?>"> <?=$qgetgreyQualityData->GreyQuality?> </option>
																			<?php
																		}
																		?>
																		
																	</select>
																</div>
															</div>
														</div>
														<div class="col-12 col-sm-4 col-md-2 col-lg-5 col-xl-2 d-flex ">
															<div class="form-group">
																<label>ORDER GIVEN IN PCS/MTS :</label>
															</div>
														</div>
														<div class="col-12 col-sm-8 col-md-10 col-lg-7 col-xl-10">
															<div class="form-group field">
																<div class="controls">
																	<select name="GreyOrderGiven" id="GreyOrderGiven"   style="width: 100%; height:36px;" class="select2 form-control custom-select">
																		<option value="">-Select-</option>
																		<option value="pcs">Pcs</option>
																		<option value="mts">MTS</option>
																		<option value="kg">KG</option>
																		<option value="suit">Suit</option>
																		<option value="other">Other</option>
																	</select>
																</div>
															</div>
														</div>
														<div class="col-12 col-sm-4 col-md-2 col-lg-2 col-xl-2 d-flex ">
															<div class="form-group">
																<label>REMARK :</label>
															</div>
														</div>
														<div class="col-12 col-sm-8 col-md-10 col-lg-10 col-xl-10">
															<div class="form-group field">
																<div class="">
																	<select name="RemarkID" id="remarkdata"  style="width: 100%; height:36px;" class="select2 form-control custom-select remarkdata">
																		<option value="">-Select-</option>

																		<?php
																		foreach ($getremarkData as $qgetremarkData)
																		{
																			?>
																			<option value="<?=$qgetremarkData->RemarkID;?>"><?=$qgetremarkData->Remark;?></option>
																			<?php
																		}
																		?>
																	</select>
																</div>
															</div>
														</div>
														<div class="col-12 col-sm-4 col-md-2 col-lg-2 col-xl-2 d-flex ">
															<div class="form-group">
																<label>CHECKER :</label>
															</div>
														</div>
														<div class="col-12 col-sm-8 col-md-10 col-lg-10 col-xl-10">
															<div class="form-group field">
																<div class="">
																	<select name="CheckerID" id="CheckerID"  style="width: 100%; height:36px;" class="select2 form-control custom-select">
																		<option value=""> --Select -- </option>
																		<?php
																		foreach ($getcheckerData as $qgetcheckerData)
																		{
																			?>
																			<option value="<?=$qgetcheckerData->Ledger_Id?>"> <?=$qgetcheckerData->LName?> </option>
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
																	<input type="text" id="datepicker-autoclose1"  name="GreyOrderDate" placeholder="Date" class="form-control"> 
																</div>
															</div>
														</div>
														<div class="col-12 col-sm-4 col-md-2 col-lg-3 col-xl-2 d-flex ">
															<div class="form-group">
																<label>AVG. WT. :</label>
															</div>
														</div>
														<div class="col-12 col-sm-8 col-md-10 col-lg-3 col-xl-10">
															<div class="form-group field">
																<div class="">
																	<input type="text" id="GreyAvgWt"  name="GreyAvgWt" placeholder="AVG Wt" class="form-control"> 
																</div>
															</div>
														</div>
														<div class="col-12 col-sm-4 col-md-2 col-lg-3 col-xl-2 d-flex">
															<div class="form-group">
																<label>PALLU CUT :</label>
															</div>
														</div>
														<div class="col-12 col-sm-8 col-md-10 col-lg-3 col-xl-10">
															<div class="form-group field">
																<div class="">
																	<input type="text" id="GreyPalluCut"  name="GreyPalluCut" placeholder="Pallu Cut" class="form-control"> 
																</div>
															</div>
														</div>	
														<div class="col-12 col-sm-4 col-md-2 col-lg-3 col-xl-2 d-flex">
															<div class="form-group">
																<label>PANNA :</label>
															</div>
														</div>
														<div class="col-12 col-sm-8 col-md-10 col-lg-3 col-xl-10">
															<div class="form-group field">
																<div class="">
																	<input type="text"  name="GreyPanna" id="GreyPanna" placeholder="Panna" class="form-control"> 
																</div>
															</div>
														</div><br>
														
														<div class="col-12 col-sm-4 col-md-2 col-lg-3 col-xl-2 d-flex">
															<div class="form-group">
																<label>NO. OF LOTS :</label>
															</div>
														</div>
														<div class="col-12 col-sm-8 col-md-10 col-lg-3 col-xl-10">
															<div class="form-group field">
																<div class="">
																	<input type="text"  name="GreyNoLots" id="GreyNoLots" placeholder="Lots" class="form-control noOflotsselecter"> 
																</div>
															</div>
														</div>
														<div class="col-12 col-sm-4 col-md-2 col-lg-3 col-xl-2 d-flex">
															<div class="form-group">
																<label>PCS PER LOTS :</label>
															</div>
														</div>
														<div class="col-12 col-sm-8 col-md-10 col-lg-3 col-xl-10">
															<div class="form-group field">
																<div class="">
																	<input type="text"  name="GreyPcsPerLots" id="GreyPcsPerLots" placeholder="PCS" value="12" class="form-control lotpcsselecter"> 
																</div>
															</div>
														</div>
														<div class="col-12 col-sm-4 col-md-2 col-lg-3 col-xl-2 d-flex">
															<div class="form-group">
																<label>RATE/MTS :</label>
															</div>
														</div>
														<div class="col-12 col-sm-8 col-md-10 col-lg-3 col-xl-10">
															<div class="form-group field">
																<div class="">
																	<input type="text"  name="GreyRateMts" id="GreyRateMts" placeholder="RATE/MTS" class="form-control"> 
																</div>
															</div>
														</div>
														<div class="col-12 col-sm-4 col-md-2 col-lg-3 col-xl-2 d-flex">
															<div class="form-group">
																<label>ORDER PCS :</label>
															</div>
														</div>
														<div class="col-12 col-sm-8 col-md-10 col-lg-3 col-xl-10">
															<div class="form-group field">
																<div class="">
																	<input type="text"  name="GreyOrderPcs" id="GreyOrderPcs" placeholder="ORDER PCS" class="form-control" readonly=""> 
																</div>
															</div>
														</div>
														<div class="col-12 col-sm-4 col-md-2 col-lg-3 col-xl-2 d-flex">
															<div class="form-group">
																<label>ORDER MTS :</label>
															</div>
														</div>
														<div class="col-12 col-sm-8 col-md-10 col-lg-3 col-xl-10">
															<div class="form-group field">
																<div class="">
																	<input type="text"  name="GreyOrderMts" id="GreyOrderMts" placeholder="ORDER MTS" class="form-control"> 
																</div>
															</div>
														</div>
														<div class="col-12 col-sm-4 col-md-2 col-lg-3 col-xl-2 d-flex">
															<div class="form-group">
																<label>ORDER WT. :</label>
															</div>
														</div>
														<div class="col-12 col-sm-8 col-md-10 col-lg-3 col-xl-10">
															<div class="form-group field">
																<div class="">
																	<input type="text"  name="GreyOrderWt" id="GreyOrderWt" placeholder="ORDER WT" class="form-control"> 
																</div>
															</div>
														</div>
														<div class="col-12 col-sm-4 col-md-2 col-lg-3 col-xl-2 d-flex">
															<div class="form-group">
																<label>MTS PER KG :</label>
															</div>
														</div>
														<div class="col-12 col-sm-8 col-md-10 col-lg-3 col-xl-10">
															<div class="form-group field">
																<div class="">
																	<input type="text"  name="GreyMtsPerKg" id="GreyMtsPerKg" placeholder="MTS PER KG" class="form-control" > 
																</div>
															</div>
														</div>
														<div class="col-12 col-sm-4 col-md-2 col-lg-3 col-xl-2 d-flex">
															<div class="form-group">
																<label>RATE/MTS :</label>
															</div>
														</div>
														<div class="col-12 col-sm-8 col-md-10 col-lg-3 col-xl-10">
															<div class="form-group field">
																<div class="">
																	<input type="text"  name="GreyRatePerKg" id="GreyRatePerKg" placeholder="RATE PER KG" class="form-control"> 
																</div>
															</div>
														</div>
														<div class="col-12 col-sm-4 col-md-2 col-lg-3 col-xl-2 d-flex">
															<div class="form-group">
																<label>DHARA %:</label>
															</div>
														</div>
														<div class="col-12 col-sm-8 col-md-10 col-lg-3 col-xl-10">
															<div class="form-group field">
																<div class="">
																	<input type="text"  name="GreyDhara" id="GreyDhara" placeholder="" class="form-control"> 
																</div>
															</div>
														</div>
														<div class="col-12 col-sm-4 col-md-2 col-lg-3 col-xl-2 d-flex">
															<div class="form-group">
																<label>GRACE DAYS :</label>
															</div>
														</div>
														<div class="col-12 col-sm-8 col-md-10 col-lg-3 col-xl-10">
															<div class="form-group field">
																<div class="">
																	<input type="text"  name="GreyGraceDays" id="GreyGraceDays" placeholder="GRACE DAYS" class="form-control" > 
																</div>
															</div>
														</div>
														<div class="col-12 col-sm-4 col-md-2 col-lg-3 col-xl-2 d-flex">
															<div class="form-group">
																<label>LAST DATE:</label>
															</div>
														</div>
														<div class="col-12 col-sm-8 col-md-10 col-lg-3 col-xl-10">
															<div class="form-group field">
																<div class="">
																	<input type="text"  name="GreyLastDate" id="Last_Date" placeholder="GRACE DAYS" class="form-control"> 
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
													<button type="button" class="btn btn-default waves-effect mdlclose" data-dismiss="modal">Close</button>
												</div>
											</div>
										</div>
								
									</div>	
								</div>
							</form>	
						</div>
		            </div>
		        </div>
		    </div>

		    <div id="responsive-modal-company" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
		    <div class="modal-dialog modal-lg">
		        <div class="modal-content">
		        	
		            <div class="modal-header">
		                <h4 class="modal-title">Company</h4>
		                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
		            </div>
		            <div class="modal-body">
		            		<form  class="" id="companyform" method="POST" name="" novalidate>

						<?php
						if(empty($editcompanydata))
						{
							?>
								<input type="hidden" value="" id="companyid" name="companyid">
							<?php
						}
						?>
					
						<div class="row common_master_form_div">
							<div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 ">
								
								<div class="formtitle">
									<h4 class="backcolor">Account Information</h4>
									<div class="row removemargin">
										<div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
											<div class="row">
												<div class="col-12 col-sm-4 col-md-2 col-lg-2 col-xl-2 d-flex ">
													<div class="form-group">
														<label>CODE  :</label>
													</div>
												</div>
												<div class="col-12 col-sm-8 col-md-10 col-lg-10 col-xl-10">
													<div class="form-group ">
														<div class="">
															<input type="text" name="code" id="code" class="form-control companyresultdata" placeholder="ENTER CODE">
														</div>
													</div>
												</div>
												
												
												<div class="col-12 col-sm-4 col-md-2 col-lg-2 col-xl-2 d-flex ">
													<div class="form-group">
														<label>SHORT NAME  :</label>
													</div>
												</div>
												<div class="col-12 col-sm-8 col-md-3 col-lg-3 col-xl-3">
													<div class="form-group">
														<div class="">
															<input type="text" name="shortname" id="shortname" class="form-control" placeholder="SHORT NAME"> 
														</div>
													</div>
												</div>
												
												<div class="col-12 col-sm-4 col-md-1 col-lg-1 col-xl-1 d-flex ">
													<div class="form-group">
														<label> NAME  :</label>
													</div>
												</div>
												<div class="col-12 col-sm-8 col-md-6 col-lg-6 col-xl-6">
													<div class="form-group field">
														<div class="controls">
															<input type="text" name="name" id="name" class="form-control customvalidation companyserachdata"placeholder="ENTER NAME" required data-validation-required-message="This field is required"> 
														</div>
													</div>
												</div>
												<div class="col-12 col-sm-4 col-md-3 col-lg-3 col-xl-3 d-flex ">
													<div class="form-group">
														<label>COMPANY TYPE   :</label>
													</div>
												</div>
												<div class="col-12 col-sm-8 col-md-9 col-lg-9 col-xl-9">
													<div class="form-group">
													<div class="">
														<select name="companttype" id="companttype" style="width: 100%; height:36px;" class="select2 form-control custom-select">
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
												
												<div class="col-12 col-sm-4 col-md-3 col-lg-3 col-xl-9 d-flex ">
													<div class="form-group">
														<label>COMPANY GROUP :</label>
													</div>
												</div>
												<div class="col-12 col-sm-8 col-md-9 col-lg-9 col-xl-9">
													<div class="form-group">
														<div class="">
															<select id="companygroup" name="companygroup[]" class="selectpicker" multiple data-style="form-control btn-secondary">
															<?php							
															foreach ($getCompanyData as $value)
															{
																?>
																<option value="<?=$value->CompanyID;?>"><?=$value->CompanyName;?></option>
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
												<div class="col-12 col-sm-4 col-md-2 col-lg-2 col-xl-2 d-flex ">
													<div class="form-group">
														<label>ADDRESS :</label>
													</div>
												</div>
												<div class="col-12 col-sm-8 col-md-10 col-lg-10 col-xl-10">
													<div class="form-group field">
														<div class="">
															<input type="text" name="address" id="address" class="form-control" placeholder="ENTER ADDRESS"> 
														</div>
													</div>
												</div>
												<div class="col-12 col-sm-4 col-md-2 col-lg-2 col-xl-2 d-flex ">
													<div class="form-group">
														<label>ADD.(CONT.) :</label>
													</div>
												</div>
												<div class="col-12 col-sm-8 col-md-10 col-lg-10 col-xl-10">
													<div class="form-group field">
														<div class="">
															<input type="text" name="addcont" id="addcont" class="form-control" placeholder="ENTER ADD.(CONT.)"> 
														</div>
													</div>
												</div>
												
												<div class="col-12 col-sm-4 col-md-2 col-lg-2 col-xl-2 d-flex align-items-center">
													<div class="form-group">
														<label>CITY :</label>
													</div>
												</div>
												<div class="col-12 col-sm-8 col-md-4 col-lg-4 col-xl-4">
													<div class="form-group field">
														<div class="">
															<select name="city" id="city" style="width: 100%; height:36px;" class="select2 form-control custom-select">
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
												
												<div class="col-12 col-sm-4 col-md-2 col-lg-2 col-xl-2 d-flex align-items-center">
													<div class="form-group">
														<label> PIN :</label>
													</div>
												</div>
												<div class="col-12 col-sm-8 col-md-4 col-lg-4 col-xl-4">
													<div class="form-group field">
														<div class="">
															<input type="text" name="pin" id="pin" class="form-control" placeholder="PIN"> 
														</div>
													</div>
												</div>
												
												<div class="col-12 col-sm-4 col-md-2 col-lg-2 col-xl-2 d-flex align-items-center">
													<div class="form-group">
														<label> EMAIL  :</label>
													</div>
												</div>
												<div class="col-12 col-sm-8 col-md-4 col-lg-4 col-xl-4">
													<div class="form-group field">
														<div class="">
															<input type="email" name="email" id="email" class="form-control" placeholder="EMAIL"> 
														</div>
													</div>
												</div>
												<div class="col-12 col-sm-4 col-md-2 col-lg-2 col-xl-2 d-flex align-items-center">
													<div class="form-group">
														<label> MOBILE NO. :</label>
													</div>
												</div>
												<div class="col-12 col-sm-8 col-md-4 col-lg-4 col-xl-4">
													<div class="form-group field" id="staticParent">
														<div class="">
															<input type="text" name="mobileno" id="child" class="form-control" placeholder="MOBILE NO."> 
														</div>
													</div>
												</div>
												<div class="col-12 col-sm-4 col-md-2 col-lg-2 col-xl-2 d-flex align-items-center">
													<div class="form-group">
														<label> FAX :</label>
													</div>
												</div>
												<div class="col-12 col-sm-8 col-md-4 col-lg-4 col-xl-4">
													<div class="form-group field">
														<div class="">
															<input type="text" name="fax" id="fax" class="form-control" placeholder="FAX"> 
														</div>
													</div>
												</div>
												<div class="col-12 col-sm-4 col-md-2 col-lg-2 col-xl-2 d-flex align-items-center">
													<div class="form-group">
														<label> PHONE NO. :</label>
													</div>
												</div>
												<div class="col-12 col-sm-8 col-md-4 col-lg-4 col-xl-4">
													<div class="form-group field" id="staticParent1">
														<div class="">
															<input type="text" name="phoneno" id="child1" class="form-control" placeholder="PHONE NO."> 
														</div>
													</div>
												</div>												
											</div>
										</div>
									</div>	

								</div>
								
								<div class="formtitle">
									<h4 class="backcolor">Address Information</h4>
									<div class="row removemargin">
										<div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
											<div class="row">
												<div class="col-12 col-sm-4 col-md-3 col-lg-3 col-xl-3 d-flex ">
													<div class="form-group">
														<label>ADDRESS :</label>
													</div>
												</div>
												<div class="col-12 col-sm-8 col-md-9 col-lg-9 col-xl-9">
													<div class="form-group field">
														<div class="">
															<input type="text" name="address" id="address" class="form-control" placeholder="ENTER ADDRESS"> 
														</div>
													</div>
												</div>
												<div class="col-12 col-sm-4 col-md-3 col-lg-3 col-xl-3 d-flex ">
													<div class="form-group">
														<label>ADD.(CONT.) :</label>
													</div>
												</div>
												<div class="col-12 col-sm-8 col-md-9 col-lg-9 col-xl-9">
													<div class="form-group field">
														<div class="">
															<input type="text" name="addcont" name="addcont" class="form-control" placeholder="ENTER ADD.(CONT.)"> 
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
											<div class="row">
												<div class="col-12 col-sm-4 col-md-3 col-lg-3 col-xl-3 d-flex ">
													<div class="form-group">
														<label>BUSINESS DESC. :</label>
													</div>
												</div>
												<div class="col-12 col-sm-8 col-md-9 col-lg-9 col-xl-9">
													<div class="form-group field">
														<div class="">
															<input type="text" name="bussinessdesc" id="bussinessdesc" class="form-control" placeholder="ENTER BUSINESS DESCRIPTION"> 
														</div>
													</div>
												</div>
												<div class="col-12 col-sm-4 col-md-3 col-lg-3 col-xl-3 d-flex ">
													<div class="form-group">
														<label>PROPRIETOR  :</label>
													</div>
												</div>
												<div class="col-12 col-sm-8 col-md-9 col-lg-9 col-xl-9">
													<div class="form-group field">
														<div class="">
															<input type="text" name="proprietor" id="proprietor" class="form-control" placeholder="ENTER PROPRIETOR"> 
														</div>
													</div>
												</div>
												
												
												
											</div>
										</div>
									</div>
								</div>
								<div class="formtitle">
									<h4 class="backcolor">Other Information</h4>
									<div class="row removemargin">
										<div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
											<div class="row">
												<div class="col-12 col-sm-4 col-md-2 col-lg-2 col-xl-2 d-flex align-items-center">
													<div class="form-group">
														<label>MULTI CHAL :</label>
													</div>
												</div>
												<div class="col-12 col-sm-8 col-md-10 col-lg-10 col-xl-10">
													<div class="form-group field">
														<div class="">
															<select name="multichal" id="multichal" style="width: 100%; height:36px;" class="select2 form-control custom-select">
																<option value=""> --Select -- </option>
																<option value="NO"> NO </option>
																<option value="YES"> YES </option>
															</select>
														</div>
													</div>
												</div>
												
												<div class="col-12 col-sm-4 col-md-2 col-lg-2 col-xl-2 d-flex ">
													<div class="form-group">
														<label>SELECTED  :</label>
													</div>
												</div>
												<div class="col-12 col-sm-8 col-md-10 col-lg-10 col-xl-10">
													<div class="form-group field">
														<div class="">
															<input type="checkbox" value="1"  name="isActive" > J.V. OF OLD YEAR BILLS DISCOUNT IN NEW YEAR ?
														</div>
													</div>
												</div>
												<div class="col-12 col-sm-4 col-md-2 col-lg-2 col-xl-2 d-flex ">
													<div class="form-group">
														<label>J.V. FROM DATE   :</label>
													</div>
												</div>
												<div class="col-12 col-sm-8 col-md-4 col-lg-4 col-xl-4">
													<div class="form-group field">
														<div class="">
															<input type="date" name="fromdate" id="fromdate" class="form-control">
														</div>
													</div>
												</div>
												<div class="col-12 col-sm-4 col-md-2 col-lg-2 col-xl-2 d-flex align-items-center">
													<div class="form-group">
														<label>PAN NO.  :</label>
													</div>
												</div>
												<div class="col-12 col-sm-8 col-md-4 col-lg-4 col-xl-4">
													<div class="form-group field">
														<div class="">
															<input type="text" name="panno" id="panno" class="form-control" placeholder="ENTER PAN NO."> 
														</div>
													</div>
												</div>
												
												<div class="col-12 col-sm-4 col-md-2 col-lg-2 col-xl-2 d-flex align-items-center">
													<div class="form-group">
														<label>TDS A/C No. :</label>
													</div>
												</div>
												<div class="col-12 col-sm-8 col-md-4 col-lg-4 col-xl-4">
													<div class="form-group field">
														<div class="">
															<input type="text" name="tdsacno" id="tdsacno" class="form-control" placeholder="ENTER TDS A/C No."> 
														</div>
													</div>
												</div>
												
												<div class="col-12 col-sm-4 col-md-2 col-lg-2 col-xl-2 d-flex align-items-center">
													<div class="form-group">
														<label>WARD  :</label>
													</div>
												</div>
												<div class="col-12 col-sm-8 col-md-4 col-lg-4 col-xl-4">
													<div class="form-group field">
														<div class="">
															<input type="text" name="ward" id="ward" class="form-control" placeholder="ENTER WARD"> 
														</div>
													</div>
												</div>
												
												<div class="col-12 col-sm-4 col-md-2 col-lg-2 col-xl-2 d-flex align-items-center">
													<div class="form-group">
														<label>ECC NO. :</label>
													</div>
												</div>
												<div class="col-12 col-sm-8 col-md-4 col-lg-4 col-xl-4">
													<div class="form-group field">
														<div class="">
															<input type="text" name="eccno" id="eccno" class="form-control" placeholder="ENTER ECC NO."> 
														</div>
													</div>
												</div>
												
												<div class="col-12 col-sm-4 col-md-2 col-lg-2 col-xl-2 d-flex align-items-center">
													<div class="form-group">
														<label>RANGE  :</label>
													</div>
												</div>
												<div class="col-12 col-sm-8 col-md-4 col-lg-4 col-xl-4">
													<div class="form-group field">
														<div class="">
															<input type="text" name="range" id="range" class="form-control" placeholder="ENTER RANGE"> 
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
											<div class="row">
												<div class="col-12 col-sm-4 col-md-2 col-lg-2 col-xl-2 d-flex align-items-center">
													<div class="form-group">
														<label>DIVISION :</label>
													</div>
												</div>
												<div class="col-12 col-sm-8 col-md-4 col-lg-4 col-xl-4">
													<div class="form-group field">
														<div class="">
															<input type="text" name="division" id="division" class="form-control" placeholder="ENTER DIVISION"> 
														</div>
													</div>
												</div>
												
												<div class="col-12 col-sm-4 col-md-2 col-lg-2 col-xl-2 d-flex align-items-center">
													<div class="form-group">
														<label>COLLECTRATE  :</label>
													</div>
												</div>
												<div class="col-12 col-sm-8 col-md-4 col-lg-4 col-xl-4">
													<div class="form-group field">
														<div class="">
															<input type="text" name="collectrate" id="collectrate"  class="form-control" placeholder="ENTER COLLECTRATE"> 
														</div>
													</div>
												</div>
												<div class="col-12 col-sm-4 col-md-2 col-lg-2 col-xl-2 d-flex align-items-center">
													<div class="form-group">
														<label>POLICY NO. :</label>
													</div>
												</div>
												<div class="col-12 col-sm-8 col-md-4 col-lg-4 col-xl-4">
													<div class="form-group field">
														<div class="">
															<input type="text" name="policyno" id="policyno" class="form-control" placeholder="ENTER POLICY NO."> 
														</div>
													</div>
												</div>
												<div class="col-12 col-sm-4 col-md-2 col-lg-2 col-xl-2 d-flex ">
													<div class="form-group">
														<label>DATE   :</label>
													</div>
												</div>
												<div class="col-12 col-sm-8 col-md-4 col-lg-4 col-xl-4">
													<div class="form-group field">
														<div class="">
															<input type="date" name="date" id="date" class="form-control"> 
														</div>
													</div>
												</div>
												<div class="col-12 col-sm-4 col-md-2 col-lg-2 col-xl-2 d-flex ">
													<div class="form-group">
														<label>GST NO.(VAT)   :</label>
													</div>
												</div>
												<div class="col-12 col-sm-8 col-md-4 col-lg-4 col-xl-4">
													<div class="form-group field">
														<div class="">
															<input type="text" id="gstno" name="gstno" placeholder="ENTER GST NO.(VAT)" class="form-control"> 
														</div>
													</div>
												</div>
												<div class="col-12 col-sm-4 col-md-2 col-lg-2 col-xl-2 d-flex ">
													<div class="form-group">
														<label>DT.   :</label>
													</div>
												</div>
												<div class="col-12 col-sm-8 col-md-4 col-lg-4 col-xl-4">
													<div class="form-group field">
														<div class="">
															<input type="text" placeholder="ENTER DT." name="dt" id="dt" class="form-control"> 
														</div>
													</div>
												</div>
												
												
												<div class="col-12 col-sm-4 col-md-2 col-lg-2 col-xl-2 d-flex ">
													<div class="form-group">
														<label>CIN NO.   :</label>
													</div>
												</div>
												<div class="col-12 col-sm-8 col-md-4 col-lg-4 col-xl-4">
													<div class="form-group field">
														<div class="">
															<input type="text" placeholder="ENTER CIN NO." name="cinno" id="cinno" class="form-control"> 
														</div>
													</div>
												</div>
												<div class="col-12 col-sm-4 col-md-2 col-lg-2 col-xl-2 d-flex ">
													<div class="form-group">
														<label>GST IN/UIN   :</label>
													</div>
												</div>
												<div class="col-12 col-sm-8 col-md-4 col-lg-4 col-xl-4">
													<div class="form-group field">
														<div class="">
															<input type="text" placeholder="ENTER GST IN/UIN" name="gstinuin" id="gstinuin" class="form-control"> 
														</div>
													</div>
												</div>
												<div class="col-12 col-sm-4 col-md-3 col-lg-3 col-xl-3 d-flex ">
													<div class="form-group">
														<label>CEN. EXCISE REG. NO.   :</label>
													</div>
												</div>
												<div class="col-12 col-sm-8 col-md-9 col-lg-9 col-xl-9">
													<div class="form-group field">
														<div class="">
															<input type="text" placeholder="ENTER CEN. EXCISE REG. NO." name="cenexcise" id="cenexcise" class="form-control"> 
														</div>
													</div>
												</div>
												
											</div>
										</div>
										<div class="col-12 col-sm-4 col-md-2 col-lg-2 col-xl-2 d-flex ">
											<div class="form-group">
												<label>INSURANCE POLICY DETAILS   :</label>
											</div>
										</div>
										<div class="col-12 col-sm-8 col-md-10 col-lg-10 col-xl-10">
											<div class="form-group field">
												<div class="">
													<input type="text" placeholder="INSURANCE POLICY DETAILS" name="insurance" id="insurance" class="form-control"> 
												</div>
											</div>
										</div>
										
									</div>
								</div>
								
								<div class="row">
									<div class="form-group">
										<div class="text-xs-right" style="margin-left: 8px;">
											<button type="submit" class="btn btn-success">
                                                    Save
                                                </button>
                                                <button type="button" class="btn btn-default waves-effect mdlclose" data-dismiss="modal">Close</button>

											<!-- <input type="submit" value="Submit" class="btn btn-info"> -->
										</div>
									</div>
								</div>
								
								
							</div>	
						</div>
					</form>
						</div>
		            </div>
		        </div>
		    </div>
		    
		 <!-- Quality Start -->
		<div id="grey-responsive-modal-qty" class="modal fade"  role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
		    <div class="modal-dialog">
		        <div class="modal-content">
		        	
		            <div class="modal-header">
		                <h4 class="modal-title">Modal Content is Responsive</h4>
		                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
		            </div>
		            <div class="modal-body">
		            	<form  method="post" name="addgreyqutformmdl" id="addgreyqutformmdl" novalidate>
									<input type="hidden" value="" id="qreyqualityid" name="qreyqualityid">
									
							<div class="row">
								<div class="form-group">
									<h5>Grey Quality <span class="text-danger">*</span></h5>
									<div class="controls">
										<input type="text" name="greyquality" id="greyquality" placeholder="Enter Grey Quality" class="form-control customvalidation" required="" value=""> 
									</div>
								</div>
								</div>
								<div class="row">
									 <div class="form-group" >
										  <input type="checkbox" value="1" name="isActive" > isActive?
									</div>
								</div>	
								<div class="row">
								<div class="text-xs-right">
									<button type="submit" class="btn btn-success">Submit</button>
									<button type="button" class="btn btn-default waves-effect mdlcloseGrey" data-dismiss="modal">Close</button>
								</div>

							</div>
						</form>	
						</div>
		            </div>
		        </div>
		    </div>
		 <!-- Quality End  -->
		 
		 <!--  Broker Start -->
		<div id="brocker-responsive-modal" class="modal fade" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
		    <div class="modal-dialog modal-lg">
		        <div class="modal-content">
		        	
		            <div class="modal-header">
		                <h4 class="modal-title">Add Brocker</h4>
		                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
		            </div>
		            <div class="modal-body">
		            	<form class="" method="post" name="addledgerformmdl" id="addledgerformmdl" novalidate>
								
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
																<label>CODE  :</label>
															</div>
														</div>
														<div class="col-12 col-sm-8 col-md-10 col-lg-10 col-xl-10">
															<div class="form-group ">
																<div class="">
																	<input type="text" name="Code" id="Code" class="form-control resultdata" placeholder="ENTER CODE">
																</div>
															</div>
														</div>
														
														<div class="col-12 col-sm-4 col-md-2 col-lg-2 col-xl-2 d-flex ">
															<div class="form-group">
																<label>A/C TYPE   :</label>
															</div>
														</div>
														<div class="col-2 col-sm-8 col-md-8 col-lg-8 col-xl-8">
															<div class="form-group field">
																<div class="">
																<select name="Ac_Type_Id" id="Ac_Type_Id" style="width: 100%; height:36px;" class="select2 form-control custom-select" >
																	<option value="">--Select-- </option>
																	<?php
																	foreach ($getacctypedata as $qgetacctypedata)
																	{
																		?>
																		<option value="<?=$qgetacctypedata->AcTypeID?>"><?=$qgetacctypedata->ACType?></option>
																		<?php
																	}
																	?>
																</select>
																</div>
															</div>
																
														</div>
														<!-- <div class="col-12 col-sm-2 col-md-2 col-lg-2 col-xl-2">
															<i data-toggle="modal" data-target="#responsive-modal" class="fa fa-plus-circle"></i></div> -->
														
														<div class="col-12 col-sm-4 col-md-2 col-lg-3 col-xl-2 d-flex ">
															<div class="form-group">
																<label>A/C GROUP   :</label>
															</div>
														</div>
														<div class="col-12 col-sm-8 col-md-10 col-lg-9 col-xl-10">
															<div class="form-group field">
																<div class="">
																	<select name="Ac_Group_Id" id="Ac_Group_Id" style="width: 100%; height:36px;" class="select2 form-control custom-select" >
																	
																	</select>
																</div>
															</div>
														</div>

														<div class="col-12 col-sm-4 col-md-1 col-lg-2 col-xl-1 d-flex ">
															<div class="form-group">
																<label> NAME  :</label>
															</div>
														</div>
														<div class="col-12 col-sm-8 col-md-6 col-lg-10 col-xl-6">
															<div class="form-group field">
																<div class="controls">
																	<input type="text" required name="Name" class="form-control customvalidation serachdata" id="Name" placeholder="ENTER NAME"> 
																</div>
															</div>
														</div>
														 
														<div class="col-12 col-sm-4 col-md-2 col-lg-2 col-xl-2 d-flex">
															<div class="form-group">
																<label> DHARA  :</label>
															</div>
														</div>
														<div class="col-12 col-sm-8 col-md-10 col-lg-3 col-xl-10">
															<div class="form-group field">
																<div class="">
																	<input type="text"  name="Dhara" id="Dhara" placeholder="0.00" class="form-control"> 
																</div>
															</div>
														</div>

														<div class="col-12 col-sm-4 col-md-2 col-lg-3 col-xl-2 d-flex">
															<div class="form-group">
																<label>PUR DHARA  :</label>
															</div>
														</div>
														<div class="col-12 col-sm-8 col-md-10 col-lg-3 col-xl-10">
															<div class="form-group field">
																<div class="">
																	<input type="text"  name="Pure_Dhara" id="Pure_Dhara" placeholder="0.00" class="form-control"> 
																</div>
															</div>
														</div>
													</div>
												</div>
												<div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
													<div class="row">
														
														
														<div class="col-12 col-sm-4 col-md-2 col-lg-3 col-xl-2 d-flex ">
															<div class="form-group">
																<label> GRACE DAYS :</label>
															</div>
														</div>
														<div class="col-12 col-sm-8 col-md-10 col-lg-2 col-xl-10">
															<div class="form-group field">
																<div class="">
																	<input type="text" name="Grace_Days" id="Grace_Days" class="form-control" placeholder="0.00"> 
																</div>
															</div>
														</div>
														
														<div class="col-12 col-sm-4 col-md-2 col-lg-3 col-xl-2 d-flex ">
															<div class="form-group">
																<label> RANK LIST  :</label>
															</div>
														</div>
														<div class="col-12 col-sm-8 col-md-2 col-lg-4 col-xl-10">
															<div class="form-group field">
																<div class="">
																	<select name="Rank_List" id="Rank_List" style="width: 100%; height:36px;" class="select2 form-control custom-select" >
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
																	<input type="text" name="Bank_Chrg" id="Bank_Chrg" class="form-control" placeholder="0.00"> 
																</div>
															</div>
														</div>
														
														<div class="col-12 col-sm-4 col-md-2 col-lg-3 col-xl-2 d-flex ">
															<div class="form-group">
																<label> TDS. %  :</label>
															</div>
														</div>
														<div class="col-12 col-sm-8 col-md-2 col-lg-4 col-xl-10">
															<div class="form-group field">
																<div class="">
																	<input type="text" name="Tds" id="Tds" class="form-control" placeholder="0.00"> 
																</div>
															</div>
														</div>

														<div class="col-12 col-sm-4 col-md-2 col-lg-2 col-xl-2 d-flex">
															<div class="form-group">
																<label>IT RATE  :</label>
															</div>
														</div>
														<div class="col-12 col-sm-8 col-md-10 col-lg-10 col-xl-10">
															<div class="form-group field">
																<div class="">
																	<input type="text" name="It_Rate" id="It_Rate" class="form-control" placeholder="0.00"> 
																</div>
															</div>
														</div>
														
														
														<div class="col-12 col-sm-4 col-md-2 col-lg-2 col-xl-2 d-flex ">
															<div class="form-group">
																<label>ITEM  :</label>
															</div>
														</div>
														<div class="col-12 col-sm-8 col-md-10 col-lg-10 col-xl-10">
															<div class="form-group field">
																<div class="">
																	<select name="Item_Id" id="Item_Id" style="width: 100%; height:36px;" class="select2 form-control custom-select" >
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

														<div class="col-12 col-sm-4 col-md-2 col-lg-2 col-xl-2 d-flex ">
															<div class="form-group">
																<label>SERIES  :</label>
															</div>
														</div>
														<div class="col-12 col-sm-8 col-md-10 col-lg-10 col-xl-10">
															<div class="form-group field">
																<div class="">
																<select name="Series_Id" id="Series_Id" style="width: 100%; height:36px;" class="select2 form-control custom-select" >
																	<option value=""> --Select -- </option>
																	<?php 
																		foreach($selectData as $qselectData)
																		{
																		?>
																		<option value="<?php echo $qselectData->screenBrandID; ?>"> <?php echo $qselectData->brandName; ?></option>
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
											<h4 class="backcolor">Address Information</h4>
											<div class="row removemargin">
												<div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
													<div class="row">
														<div class="col-12 col-sm-4 col-md-3 col-lg-3 col-xl-3 d-flex ">
															<div class="form-group">
																<label>ADDRESS :</label>
															</div>
														</div>
														<div class="col-12 col-sm-8 col-md-9 col-lg-9 col-xl-9">
															<div class="form-group field">
																<div class="">
																	<input type="text" name="Address" id="Address" class="form-control" placeholder="ENTER ADDRESS"> 
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
																	<input type="text" name="Address_Line_Two" id="Address_Line_Two" class="form-control" placeholder="ENTER GODOWN/OTH ADDRESS"> 
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
																	<select name="City_Id" id="City_Id" style="width: 100%; height:36px;" class="select2 form-control custom-select" >
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
													</div>
												</div>
												<div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
													<div class="row">
														
														<div class="col-12 col-sm-4 col-md-2 col-lg-3 col-xl-2 d-flex ">
															<div class="form-group">
																<label>OTHER ADDR :</label>
															</div>
														</div>
														<div class="col-12 col-sm-8 col-md-10 col-lg-8 col-xl-10">
															<div class="form-group field">
																
																	<div class="">
																	<input type="text" name="Other_Address" id="Other_Address" class="form-control" placeholder="ENTER EMAIL"> 
																</div>
																
															</div>
														</div>
														
														<div class="col-12 col-sm-4 col-md-2 col-lg-3 col-xl-2 d-flex">
															<div class="form-group">
																<label>OTHER. LINE2 :</label>
															</div>
														</div>
														<div class="col-12 col-sm-8 col-md-8 col-lg-8 col-xl-10">
															<div class="form-group field">
																<div class="">
																	<input type="text" name="Other_Line_Two" id="Other_Line_Two" class="form-control" placeholder="ENTER EMAIL"> 
																</div>
															</div>
														</div>
														
														<div class="col-12 col-sm-4 col-md-2 col-lg-2 col-xl-2 d-flex ">
															<div class="form-group">
																<label>PIN :</label>
															</div>
														</div>
														<div class="col-12 col-sm-8 col-md-4 col-lg-3 col-xl-4">
															<div class="form-group field">
																<div class="">
																	<input type="text" name="Pin" id="Pin" class="form-control" placeholder="ENTER PIN"> 
																</div>
															</div>
														</div>
														
														<div class="col-12 col-sm-4 col-md-2 col-lg-3 col-xl-2 d-flex ">
															<div class="form-group">
																<label>DISTANCE :</label>
															</div>
														</div>
														<div class="col-12 col-sm-8 col-md-4 col-lg-4 col-xl-4">
															<div class="form-group field">
																<div class="">
																	<input type="text" name="Distance" id="Distance" class="form-control" placeholder="ENTER STDCODE"> 
																</div>
															</div>
														</div>
														<div class="col-12 col-sm-4 col-md-2 col-lg-3 col-xl-2 d-flex ">
															<div class="form-group">
																<label>TRANSPORT  :</label>
															</div>
														</div>
														<div class="col-12 col-sm-8 col-md-10 col-lg-9 col-xl-10">
															<div class="form-group field">
																<div class="">
																	<select name="Transport_Id" id="Transport_Id" style="width: 100%; height:36px;" class="select2 form-control custom-select" >
																		<option value=""> --Select -- </option>
																		<?php 
																		foreach($GetTransportDataList as $qGetTransportDataList)
																		{
																		?>
																		<option value="<?php echo $qGetTransportDataList->TransportID; ?>"> <?php echo $qGetTransportDataList->TransportName; ?></option>
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
											
										<div class="row">
											<div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 pdr5">
												<div class="formtitle">
													<h4 class="backcolor">MAIN DETAILS</h4>
													<div class="row removemargin">
														<div class="col-12 col-sm-4 col-md-2 col-lg-4 col-xl-2 d-flex ">
															<div class="form-group">
																<label>CONTACT PERSON :</label>
															</div>
														</div>
														<div class="col-12 col-sm-8 col-md-10 col-lg-8 col-xl-10">
															<div class="form-group field">
																<div class="">
																	<input type="text" name="Contact_Person" id="Contact_Person" class="form-control" id="txtName" placeholder="ENTER NAME"> 
																</div>
															</div>
														</div>
														
														<div class="col-12 col-sm-4 col-md-2 col-lg-2 col-xl-2 d-flex ">
															<div class="form-group">
																<label>MOBILE :</label>
															</div>
														</div>
														<div class="col-12 col-sm-8 col-md-4 col-lg-4 col-xl-4">
															<div class="form-group field"  id="staticParent">
																<div class="">
																	<input type="text" name="Mobile" id="Mobile" class="form-control" placeholder="ENTER PHONE 1"> 
																</div>
															</div>
														</div>
														
														<div class="col-12 col-sm-4 col-md-2 col-lg-2 col-xl-2 d-flex ">
															<div class="form-group">
																<label>REMARK :</label>
															</div>
														</div>
														<div class="col-12 col-sm-8 col-md-4 col-lg-4 col-xl-4">
															<div class="form-group field" id="staticParent1">
																<div class="">
																	<input type="text" name="Remark" id="Remark" class="form-control" placeholder="ENTER PHONE 2"> 
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
																	<input type="text" name="Phone_One" id="Phone_One"  class="form-control" placeholder="ENTER PHONE 1"> 
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
																	<input type="text" name="Phone_Two" id="Phone_Two"  class="form-control" placeholder="ENTER PHONE 2"> 
																</div>
															</div>
														</div>
														
														<div class="col-12 col-sm-4 col-md-2 col-lg-3 col-xl-2 d-flex ">
															<div class="form-group">
																<label>EMAIL ID :</label>
															</div>
														</div>
														<div class="col-12 col-sm-8 col-md-4 col-lg-9 col-xl-4">
															<div class="form-group field">
																<div class="">
																	<input type="text" name="Email_Id" id="Email_Id"  class="form-control" placeholder="ENTER FAX"> 
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
																	<input type="text" name="Pan_No" id="Pan_No" class="form-control" placeholder="ENTER PHONE 1"> 
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
																	<select name="Ledger_Type" id="Ledger_Type" style="width: 100%; height:36px;" class="select2 form-control custom-select" >
																		
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
																<label>GSTIN / UIN :</label>
															</div>
														</div>
														<div class="col-12 col-sm-8 col-md-4 col-lg-5 col-xl-4">
															<div class="form-group field" id="staticParent2">
																<div class="">
																	<input type="text"  name="Gstin" id="Gstin"class="form-control" placeholder="ENTER MOBILE"  > 
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
											<div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 pdr5">
												<div class="formtitle">
													<h4 class="backcolor">OTHER DETAILS</h4>
													<div class="row removemargin">
														<div class="col-12 col-sm-4 col-md-2 col-lg-3 col-xl-2 d-flex ">
															<div class="form-group">
																<label>GST NO. (VAT) :</label>
															</div>
														</div>
														<div class="col-12 col-sm-8 col-md-4 col-lg-4 col-xl-4">
															<div class="form-group field">
																<div class="">
																	<input type="text" name="Gst_No" id="Gst_No"  class="form-control" placeholder="ENTER DEBIT LIMIT"> 
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
																	<input type="text" name="Cst_No" id="Cst_No" class="form-control" placeholder="Enter CST No"> 
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
																	<input type="text" name="Excise_Reg" id="Excise_Reg"  class="form-control" placeholder="ENTER LIMIT DAYS">
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
																	<input type="text" name="Sale_Incent" id="Sale_Incent" class="form-control" placeholder="Enter Limit Days">
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
																	<input type="text" name="Debit_Limit" id="Debit_Limit" class="form-control" placeholder="Enter Debit Limit"> 
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
																	<input type="text" name="Limit_Days" id="Limit_Days" class="form-control" placeholder="Enter Limit Days"> 
																</div>
															</div>
														</div>
														
														<div class="col-12 col-sm-4 col-md-2 col-lg-4 col-xl-2 d-flex ">
															<div class="form-group">
																<label>Bank A/C NO. :</label>
															</div>
														</div>
														<div class="col-12 col-sm-8 col-md-4 col-lg-8 col-xl-4">
															<div class="form-group field">
																<div class="">
																	<input type="text" name="Bank_Ac_No" id="Bank_Ac_No" class="form-control" placeholder="Enter Limit Days">
																</div>
															</div>
														</div>

														<div class="col-12 col-sm-4 col-md-2 col-lg-4 col-xl-2 d-flex ">
															<div class="form-group">
																<label>Bankname & Branch :</label>
															</div>
														</div>
														<div class="col-12 col-sm-8 col-md-4 col-lg-8 col-xl-4">
															<div class="form-group field">
																<div class="">
																	<input type="text" name="Bank_Name" id="Bank_Name" class="form-control" placeholder="ENTER LIMIT DAYS">
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
																	<select name="Party_Grade" id="Party_Grade" style="width: 100%; height:36px;" class="select2 form-control custom-select" >
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
																	<input type="text" name="Ifsc_Code" id="Ifsc_Code"  class="form-control" placeholder="ENTER LIMIT DAYS">
																</div>
															</div>
														</div>

														<div class="col-12 col-sm-4 col-md-2 col-lg-6 col-xl-2 d-flex ">
															<div class="form-group">
																<label>INSURANCE POLICT DETAILS :</label>
															</div>
														</div>
														<div class="col-12 col-sm-8 col-md-4 col-lg-6 col-xl-4">
															<div class="form-group field">
																<div class="">
																	<input type="text" name="Insurance_Policy" id="Insurance_Policy"  class="form-control" placeholder="ENTER LIMIT DAYS">
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
																<div class="">
																	<input type="text" name="Lower_Tds_Amt_Lmt" id="Lower_Tds_Amt_Lmt" class="form-control" placeholder="ENTER LIMIT DAYS">
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
													<button type="button" class="btn btn-default waves-effect mdlclose" data-dismiss="modal">Close</button>
							                        </a>
												</div>
											</div>
										</div>
								
									</div>	
								</div>
							</form>
						</div>
		            </div>
		        </div>
		    </div>
		 <!-- Broker End -->

		 <!--  Party Start -->
		<div id="party-responsive-modal" class="modal fade" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
		    <div class="modal-dialog modal-lg">
		        <div class="modal-content">
		        	
		            <div class="modal-header">
		                <h4 class="modal-title">Add Party</h4>
		                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
		            </div>
		            <div class="modal-body">
		            	<form class="" method="post" name="addledgerpartyformmdl" id="addledgerpartyformmdl" novalidate>
								
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
																<label>CODE  :</label>
															</div>
														</div>
														<div class="col-12 col-sm-8 col-md-10 col-lg-10 col-xl-10">
															<div class="form-group ">
																<div class="">
																	<input type="text" name="Code" id="Code" class="form-control resultdata" placeholder="ENTER CODE">
																</div>
															</div>
														</div>
														
														<div class="col-12 col-sm-4 col-md-2 col-lg-2 col-xl-2 d-flex ">
															<div class="form-group">
																<label>A/C TYPE   :</label>
															</div>
														</div>
														<div class="col-2 col-sm-8 col-md-8 col-lg-8 col-xl-8">
															<div class="form-group field">
																<div class="">
																<select name="Ac_Type_Id" id="Ac_Type_Id" style="width: 100%; height:36px;" class="select2 form-control custom-select" >
																	<option value="">--Select-- </option>
																	<?php
																	foreach ($getacctypedata as $qgetacctypedata)
																	{
																		?>
																		<option value="<?=$qgetacctypedata->AcTypeID?>"><?=$qgetacctypedata->ACType?></option>
																		<?php
																	}
																	?>
																</select>
																</div>
															</div>
																
														</div>
														
														<div class="col-12 col-sm-4 col-md-2 col-lg-3 col-xl-2 d-flex ">
															<div class="form-group">
																<label>A/C GROUP   :</label>
															</div>
														</div>
														<div class="col-12 col-sm-8 col-md-10 col-lg-9 col-xl-10">
															<div class="form-group field">
																<div class="">
																	<select name="Ac_Group_Id" id="Ac_Group_Id" style="width: 100%; height:36px;" class="select2 form-control custom-select" >
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
																<label> NAME  :</label>
															</div>
														</div>
														<div class="col-12 col-sm-8 col-md-6 col-lg-10 col-xl-6">
															<div class="form-group field">
																<div class="controls">
																	<input type="text" required name="Name" class="form-control customvalidation serachdata" id="Name" placeholder="ENTER NAME"> 
																</div>
															</div>
														</div>
														 
														<div class="col-12 col-sm-4 col-md-2 col-lg-2 col-xl-2 d-flex">
															<div class="form-group">
																<label> DHARA  :</label>
															</div>
														</div>
														<div class="col-12 col-sm-8 col-md-10 col-lg-3 col-xl-10">
															<div class="form-group field">
																<div class="">
																	<input type="text"  name="Dhara" id="Dhara" placeholder="0.00" class="form-control"> 
																</div>
															</div>
														</div>

														<div class="col-12 col-sm-4 col-md-2 col-lg-3 col-xl-2 d-flex">
															<div class="form-group">
																<label>PUR DHARA  :</label>
															</div>
														</div>
														<div class="col-12 col-sm-8 col-md-10 col-lg-3 col-xl-10">
															<div class="form-group field">
																<div class="">
																	<input type="text"  name="Pure_Dhara" id="Pure_Dhara" placeholder="0.00" class="form-control"> 
																</div>
															</div>
														</div>
													</div>
												</div>
												<div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
													<div class="row">
														
														
														<div class="col-12 col-sm-4 col-md-2 col-lg-3 col-xl-2 d-flex ">
															<div class="form-group">
																<label> GRACE DAYS :</label>
															</div>
														</div>
														<div class="col-12 col-sm-8 col-md-10 col-lg-2 col-xl-10">
															<div class="form-group field">
																<div class="">
																	<input type="text" name="Grace_Days" id="Grace_Days" class="form-control" placeholder="0.00"> 
																</div>
															</div>
														</div>
														
														<div class="col-12 col-sm-4 col-md-2 col-lg-3 col-xl-2 d-flex ">
															<div class="form-group">
																<label> RANK LIST  :</label>
															</div>
														</div>
														<div class="col-12 col-sm-8 col-md-2 col-lg-4 col-xl-10">
															<div class="form-group field">
																<div class="">
																	<select name="Rank_List" id="Rank_List" style="width: 100%; height:36px;" class="select2 form-control custom-select" >
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
																	<input type="text" name="Bank_Chrg" id="Bank_Chrg" class="form-control" placeholder="0.00"> 
																</div>
															</div>
														</div>
														
														<div class="col-12 col-sm-4 col-md-2 col-lg-3 col-xl-2 d-flex ">
															<div class="form-group">
																<label> TDS. %  :</label>
															</div>
														</div>
														<div class="col-12 col-sm-8 col-md-2 col-lg-4 col-xl-10">
															<div class="form-group field">
																<div class="">
																	<input type="text" name="Tds" id="Tds" class="form-control" placeholder="0.00"> 
																</div>
															</div>
														</div>

														<div class="col-12 col-sm-4 col-md-2 col-lg-2 col-xl-2 d-flex">
															<div class="form-group">
																<label>IT RATE  :</label>
															</div>
														</div>
														<div class="col-12 col-sm-8 col-md-10 col-lg-10 col-xl-10">
															<div class="form-group field">
																<div class="">
																	<input type="text" name="It_Rate" id="It_Rate" class="form-control" placeholder="0.00"> 
																</div>
															</div>
														</div>
														
														
														<div class="col-12 col-sm-4 col-md-2 col-lg-2 col-xl-2 d-flex ">
															<div class="form-group">
																<label>ITEM  :</label>
															</div>
														</div>
														<div class="col-12 col-sm-8 col-md-10 col-lg-10 col-xl-10">
															<div class="form-group field">
																<div class="">
																	<select name="Item_Id" id="Item_Id" style="width: 100%; height:36px;" class="select2 form-control custom-select" >
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

														<div class="col-12 col-sm-4 col-md-2 col-lg-2 col-xl-2 d-flex ">
															<div class="form-group">
																<label>SERIES  :</label>
															</div>
														</div>
														<div class="col-12 col-sm-8 col-md-10 col-lg-10 col-xl-10">
															<div class="form-group field">
																<div class="">
																<select name="Series_Id" id="Series_Id" style="width: 100%; height:36px;" class="select2 form-control custom-select" >
																	<option value=""> --Select -- </option>
																	<?php 
																	foreach($selectData as $qselectData)
																	{
																	?>
																	<option value="<?php echo $qselectData->screenBrandID; ?>"> <?php echo $qselectData->brandName; ?></option>
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
											<h4 class="backcolor">Address Information</h4>
											<div class="row removemargin">
												<div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
													<div class="row">
														<div class="col-12 col-sm-4 col-md-3 col-lg-3 col-xl-3 d-flex ">
															<div class="form-group">
																<label>ADDRESS :</label>
															</div>
														</div>
														<div class="col-12 col-sm-8 col-md-9 col-lg-9 col-xl-9">
															<div class="form-group field">
																<div class="">
																	<input type="text" name="Address" id="Address" class="form-control" placeholder="ENTER ADDRESS"> 
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
																	<input type="text" name="Address_Line_Two" id="Address_Line_Two" class="form-control" placeholder="ENTER GODOWN/OTH ADDRESS"> 
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
																	<select name="City_Id" id="City_Id" style="width: 100%; height:36px;" class="select2 form-control custom-select" >
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
													</div>
												</div>
												<div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
													<div class="row">
														
														<div class="col-12 col-sm-4 col-md-2 col-lg-3 col-xl-2 d-flex ">
															<div class="form-group">
																<label>OTHER ADDR :</label>
															</div>
														</div>
														<div class="col-12 col-sm-8 col-md-10 col-lg-8 col-xl-10">
															<div class="form-group field">
																
																	<div class="">
																	<input type="text" name="Other_Address" id="Other_Address" class="form-control" placeholder="ENTER EMAIL"> 
																</div>
																
															</div>
														</div>
														
														<div class="col-12 col-sm-4 col-md-2 col-lg-3 col-xl-2 d-flex">
															<div class="form-group">
																<label>OTHER. LINE2 :</label>
															</div>
														</div>
														<div class="col-12 col-sm-8 col-md-8 col-lg-8 col-xl-10">
															<div class="form-group field">
																<div class="">
																	<input type="text" name="Other_Line_Two" id="Other_Line_Two" class="form-control" placeholder="ENTER EMAIL"> 
																</div>
															</div>
														</div>
														
														<div class="col-12 col-sm-4 col-md-2 col-lg-2 col-xl-2 d-flex ">
															<div class="form-group">
																<label>PIN :</label>
															</div>
														</div>
														<div class="col-12 col-sm-8 col-md-4 col-lg-3 col-xl-4">
															<div class="form-group field">
																<div class="">
																	<input type="text" name="Pin" id="Pin" class="form-control" placeholder="ENTER PIN"> 
																</div>
															</div>
														</div>
														
														<div class="col-12 col-sm-4 col-md-2 col-lg-3 col-xl-2 d-flex ">
															<div class="form-group">
																<label>DISTANCE :</label>
															</div>
														</div>
														<div class="col-12 col-sm-8 col-md-4 col-lg-4 col-xl-4">
															<div class="form-group field">
																<div class="">
																	<input type="text" name="Distance" id="Distance" class="form-control" placeholder="ENTER STDCODE"> 
																</div>
															</div>
														</div>
														<div class="col-12 col-sm-4 col-md-2 col-lg-3 col-xl-2 d-flex ">
															<div class="form-group">
																<label>TRANSPORT  :</label>
															</div>
														</div>
														<div class="col-12 col-sm-8 col-md-10 col-lg-9 col-xl-10">
															<div class="form-group field">
																<div class="">
																	<select name="Transport_Id" id="Transport_Id" style="width: 100%; height:36px;" class="select2 form-control custom-select" >
																		<option value=""> --Select -- </option>
																		<?php 
																		foreach($GetTransportDataList as $qGetTransportDataList)
																		{
																		?>
																		<option value="<?php echo $qGetTransportDataList->TransportID; ?>"> <?php echo $qGetTransportDataList->TransportName; ?></option>
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
											
										<div class="row">
											<div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 pdr5">
												<div class="formtitle">
													<h4 class="backcolor">MAIN DETAILS</h4>
													<div class="row removemargin">
														<div class="col-12 col-sm-4 col-md-2 col-lg-4 col-xl-2 d-flex ">
															<div class="form-group">
																<label>CONTACT PERSON :</label>
															</div>
														</div>
														<div class="col-12 col-sm-8 col-md-10 col-lg-8 col-xl-10">
															<div class="form-group field">
																<div class="">
																	<input type="text" name="Contact_Person" id="Contact_Person" class="form-control" id="txtName" placeholder="ENTER NAME"> 
																</div>
															</div>
														</div>
														
														<div class="col-12 col-sm-4 col-md-2 col-lg-2 col-xl-2 d-flex ">
															<div class="form-group">
																<label>MOBILE :</label>
															</div>
														</div>
														<div class="col-12 col-sm-8 col-md-4 col-lg-4 col-xl-4">
															<div class="form-group field"  id="staticParent">
																<div class="">
																	<input type="text" name="Mobile" id="Mobile" class="form-control" placeholder="ENTER PHONE 1"> 
																</div>
															</div>
														</div>
														
														<div class="col-12 col-sm-4 col-md-2 col-lg-2 col-xl-2 d-flex ">
															<div class="form-group">
																<label>REMARK :</label>
															</div>
														</div>
														<div class="col-12 col-sm-8 col-md-4 col-lg-4 col-xl-4">
															<div class="form-group field" id="staticParent1">
																<div class="">
																	<input type="text" name="Remark" id="Remark" class="form-control" placeholder="ENTER PHONE 2"> 
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
																	<input type="text" name="Phone_One" id="Phone_One"  class="form-control" placeholder="ENTER PHONE 1"> 
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
																	<input type="text" name="Phone_Two" id="Phone_Two"  class="form-control" placeholder="ENTER PHONE 2"> 
																</div>
															</div>
														</div>
														
														<div class="col-12 col-sm-4 col-md-2 col-lg-3 col-xl-2 d-flex ">
															<div class="form-group">
																<label>EMAIL ID :</label>
															</div>
														</div>
														<div class="col-12 col-sm-8 col-md-4 col-lg-9 col-xl-4">
															<div class="form-group field">
																<div class="">
																	<input type="text" name="Email_Id" id="Email_Id"  class="form-control" placeholder="ENTER FAX"> 
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
																	<input type="text" name="Pan_No" id="Pan_No" class="form-control" placeholder="ENTER PHONE 1"> 
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
																	<select name="Ledger_Type" id="Ledger_Type" style="width: 100%; height:36px;" class="select2 form-control custom-select" >
																		
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
																<label>GSTIN / UIN :</label>
															</div>
														</div>
														<div class="col-12 col-sm-8 col-md-4 col-lg-5 col-xl-4">
															<div class="form-group field" id="staticParent2">
																<div class="">
																	<input type="text"  name="Gstin" id="Gstin"class="form-control" placeholder="ENTER MOBILE"  > 
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
											<div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 pdr5">
												<div class="formtitle">
													<h4 class="backcolor">OTHER DETAILS</h4>
													<div class="row removemargin">
														<div class="col-12 col-sm-4 col-md-2 col-lg-3 col-xl-2 d-flex ">
															<div class="form-group">
																<label>GST NO. (VAT) :</label>
															</div>
														</div>
														<div class="col-12 col-sm-8 col-md-4 col-lg-4 col-xl-4">
															<div class="form-group field">
																<div class="">
																	<input type="text" name="Gst_No" id="Gst_No"  class="form-control" placeholder="ENTER DEBIT LIMIT"> 
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
																	<input type="text" name="Cst_No" id="Cst_No" class="form-control" placeholder="Enter CST No"> 
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
																	<input type="text" name="Excise_Reg" id="Excise_Reg"  class="form-control" placeholder="ENTER LIMIT DAYS">
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
																	<input type="text" name="Sale_Incent" id="Sale_Incent" class="form-control" placeholder="Enter Limit Days">
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
																	<input type="text" name="Debit_Limit" id="Debit_Limit" class="form-control" placeholder="Enter Debit Limit"> 
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
																	<input type="text" name="Limit_Days" id="Limit_Days" class="form-control" placeholder="Enter Limit Days"> 
																</div>
															</div>
														</div>
														
														<div class="col-12 col-sm-4 col-md-2 col-lg-4 col-xl-2 d-flex ">
															<div class="form-group">
																<label>Bank A/C NO. :</label>
															</div>
														</div>
														<div class="col-12 col-sm-8 col-md-4 col-lg-8 col-xl-4">
															<div class="form-group field">
																<div class="">
																	<input type="text" name="Bank_Ac_No" id="Bank_Ac_No" class="form-control" placeholder="Enter Limit Days">
																</div>
															</div>
														</div>

														<div class="col-12 col-sm-4 col-md-2 col-lg-4 col-xl-2 d-flex ">
															<div class="form-group">
																<label>Bankname & Branch :</label>
															</div>
														</div>
														<div class="col-12 col-sm-8 col-md-4 col-lg-8 col-xl-4">
															<div class="form-group field">
																<div class="">
																	<input type="text" name="Bank_Name" id="Bank_Name" class="form-control" placeholder="ENTER LIMIT DAYS">
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
																	<select name="Party_Grade" id="Party_Grade" style="width: 100%; height:36px;" class="select2 form-control custom-select" >
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
																	<input type="text" name="Ifsc_Code" id="Ifsc_Code"  class="form-control" placeholder="ENTER LIMIT DAYS">
																</div>
															</div>
														</div>

														<div class="col-12 col-sm-4 col-md-2 col-lg-6 col-xl-2 d-flex ">
															<div class="form-group">
																<label>INSURANCE POLICT DETAILS :</label>
															</div>
														</div>
														<div class="col-12 col-sm-8 col-md-4 col-lg-6 col-xl-4">
															<div class="form-group field">
																<div class="">
																	<input type="text" name="Insurance_Policy" id="Insurance_Policy"  class="form-control" placeholder="ENTER LIMIT DAYS">
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
																<div class="">
																	<input type="text" name="Lower_Tds_Amt_Lmt" id="Lower_Tds_Amt_Lmt" class="form-control" placeholder="ENTER LIMIT DAYS">
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
													<button type="button" class="btn btn-default waves-effect mdlcloseParty" data-dismiss="modal">Close</button>
							                        </a>
												</div>
											</div>
										</div>
								
									</div>	
								</div>
							</form>
						</div>
		            </div>
		        </div>
		    </div>
		 <!-- party End -->

		 <!--  Taka Details Start -->
		 <div id="TakaDetails" class="modal fade" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
		    <div class="modal-dialog modal-lg">
		        <div class="modal-content">
		            <div class="modal-header">
		                <h4 class="modal-title">Taka Details</h4>
		                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
		            </div>
		            <div class="modal-body">
		            	<div class="insidebody">
		            	
	            		

						</div>
					</div>
	            </div>
	        </div>
	    </div>
	
		 <!--  Taka Details End -->
		<div class="row page-titles">
			<div class="col-md-5 align-self-center">
				<h4 class="text-themecolor">Grey Purchase Order Bill</h4>
			</div>
			<div class="col-md-7 align-self-center text-right">
				<div class="d-flex justify-content-end align-items-center">
					<ol class="breadcrumb">
						<li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
						<li class="breadcrumb-item active">Grey Purchase Order Bill</li>
					</ol>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="card" style="width: 100%;">
				<div class="card-body p-b-0">
					<!-- Nav tabs -->
					<ul class="nav nav-tabs customtab2" role="tablist">
						<li class="nav-item"> <a class="nav-link active" data-toggle="tab" href="#home7" role="tab"><span class="hidden-sm-up"><i class="ti-home"></i></span> <span class="hidden-xs-down">Grey Purchase Order Bill</span></a> </li>
						<li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#profile7" role="tab"><span class="hidden-sm-up"><i class="ti-user"></i></span> <span class="hidden-xs-down">Add Form</span></a> </li>
						<?php
						if(!empty($editpurchaseOrderBilldata))
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
							                    <th>Sr No.</th>
							                    <th>Bill No.</th>
							                    <th>Order Bill Date</th>
							                    <th>Company Name</th>
							                    <th>Ledger Name</th>
							                    <th>Rec. Taka</th>
							                    <th>Rec. Mts</th>
							                    <th>Bill Amt</th>
							                    <th>Net Amt</th>
							                   
							                </tr>
							            </thead>
							            <tbody>
							            	<?php
							            	foreach ($selectPurchaseOrderBill as $selectPurchaseOrderBill)
							            	{
							            	?>
							            	<tr id="">
									    <td class="editdelaction">
									        <a href="<?=base_url();?>Transaction_controller/GreyPurchaseOrderBill?purchaseorderBillid=<?=$selectPurchaseOrderBill->greypurchaseorderBillID;?>" ><i class="fa fa-edit"></i></a>&nbsp;&nbsp;
									        <a  onclick="deletedata('<?=$selectPurchaseOrderBill->greypurchaseorderBillID;?>','PurchaseOrderBilldelete');"><i class="fa fa-trash-o"></i></a>
									        <a href="<?=base_url();?>Transaction_controller/printPurchaseOrderBill?printPurchaseOrderBill=<?=$selectPurchaseOrderBill->greypurchaseorderBillID;?>" ><i class="fa fa-print"></i></a>&nbsp;&nbsp;
									    </td>
							                    <td><?=$selectPurchaseOrderBill->GreyPSrNo;?></td>
							                    <td><?=$selectPurchaseOrderBill->GreyPBillNo;?></td>
							                    <td><?=$selectPurchaseOrderBill->GreyPPurchaseOrderBillDate;?></td>
							                    <td><?=$selectPurchaseOrderBill->CompanyName;?></td>
							                    <td><?=$selectPurchaseOrderBill->LName;?></td>
							                    <td><?=$selectPurchaseOrderBill->GreyPRecTaka;?></td>
							                    <td><?=$selectPurchaseOrderBill->GreyPRecMts;?></td>
							                    <td><?=$selectPurchaseOrderBill->GreyPBillAmt;?></td>
							                    <td><?=$selectPurchaseOrderBill->GreyPNetAmt;?></td>
							                    
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
							<form action="" class="" method="post" name="addGreyPurchaseOrderbillform" id="addGreyPurchaseOrderbillform" novalidate>
								<?php
								if(empty($editpurchaseOrderBilldata))
								{
									?>
										<input type="hidden" value="" id="greypurchaseorderBillID" name="greypurchaseorderBillID">
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
																<label>COMAPNY	 :</label>
															</div>
														</div>
														<div class="col-12 col-sm-6 col-md-8 col-lg-8 col-xl-8">
															<div class="form-group field">
																<div class="controls">
																	<select name="CompanyID" id="CompanyIDData"  style="width: 100%; height:36px;" class="select2 form-control custom-select">
																		<option value=""> --Select -- </option>
																			<?php 
																			foreach($getCompanyData as $qgetCompanyData)
																			{
																			?>
																			<option value="<?php echo $qgetCompanyData->CompanyID; ?>"> <?php echo $qgetCompanyData->CompanyName; ?></option>
																			<?php 
																			}
																			?>
																	</select>
																</div>
															</div>
														</div>
														<div class="col-12 col-sm-2 col-md-2 col-lg-1 col-xl-2">
															<i data-toggle="modal" data-target="#responsive-modal-company" class="fa fa-plus-circle"></i>
														</div>

														<?php
														$srdata = $this->db->query("SELECT GreyPSrNo from greypurchaseorderbill order by greypurchaseorderBillID desc LIMIT 1")->row_array();
														?>

														<div class="col-12 col-sm-4 col-md-2 col-lg-2 col-xl-2 d-flex">
															<div class="form-group">
																<label> SR NO. 	 :</label>
															</div>
														</div>
														<div class="col-12 col-sm-8 col-md-10 col-lg-4 col-xl-10">
															<div class="form-group field">
																<div class="">
																	<input type="text"  name="GreyPSrNo" id="GreyPSrNo" placeholder="ENTER SRNO." class="form-control" value="<?=$srdata['GreyPSrNo']+1;?>"> 
																</div>
															</div>
														</div>
														
														<div class="col-12 col-sm-4 col-md-2 col-lg-2 col-xl-2 d-flex ">
															<div class="form-group">
																<label>BILL NO.  	 :</label>
															</div>
														</div>
														<div class="col-12 col-sm-8 col-md-10 col-lg-4 col-xl-10">
															<div class="form-group field">
																<div class="">
																	<input type="text"  name="GreyPBillNo" id="GreyPBillNo" placeholder="ENTER BILL NO." class="form-control" value="">
																</div>
															</div>
														</div>
														<div class="col-12 col-sm-4 col-md-2 col-lg-3 col-xl-2 d-flex ">
															<div class="form-group">
																<label>PARTY A/C :</label>
															</div>
														</div>
														<div class="col-12 col-sm-8 col-md-8 col-lg-8 col-xl-8">
															<div class="form-group field">
																<div class="controls">
																	<select name="GreyPPartyAcID" id="GreyPPartyAcID" 
																	 style="width: 100%; height:36px;" class="select2 form-control custom-select customvalidation" onchange="getpartytoothergrey(this);">
																		<option value=""> --Select -- </option>
																		<?php 
																			foreach($getGreyPartyData as $getGreyPartyData)
																			{
																			?>
																			<option value="<?php echo $getGreyPartyData->Ledger_Id; ?>"> <?php echo $getGreyPartyData->LName; ?></option>
																			<?php 
																			}
																			?>
																	</select>
																</div>
															</div>
														</div>
														<div class="col-12 col-sm-2 col-md-2 col-lg-1 col-xl-2">
															<i data-toggle="modal" data-target="#party-responsive-modal" class="fa fa-plus-circle"></i></div>

														<div class="col-12 col-sm-4 col-md-2 col-lg-3 col-xl-2 d-flex ">
															<div class="form-group">
																<label>ORDER NO.	 :</label>
															</div>
														</div>
														<div class="col-12 col-sm-6 col-md-8 col-lg-8 col-xl-8">
															<div class="form-group field">
																<div class="controls">
																	<select name="GreyPOrderNo" id="GreyPOrderNo" style="width: 100%; height:36px;" class="select2 form-control custom-select customvalidation" onchange="getordertootherdata(this);">
																	</select>
																</div>
															</div>
														</div>
														<div class="col-12 col-sm-2 col-md-2 col-lg-1 col-xl-2">
															<i data-toggle="modal" data-target="#responsive-modal-greypurchase" class="fa fa-plus-circle"></i></div>
													</div>
												</div>
												<div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
													<div class="row">
														<div class="col-12 col-sm-4 col-md-2 col-lg-3 col-xl-2 d-flex ">
															<div class="form-group">
																<label>DATE	 :</label>
															</div>
														</div>
														<div class="col-12 col-sm-8 col-md-10 col-lg-3 col-xl-10">
															<div class="form-group field">
																<div class="">
																	<input type="text" id="datepicker-autoclose"  name="GreyPPurchaseOrderBillDate" placeholder="DATE" class="form-control" value="<?=date('m/d/Y');?>"> 
																</div>
															</div>
														</div>
														<div class="col-12 col-sm-4 col-md-2 col-lg-3 col-xl-2 d-flex ">
															<div class="form-group">
																<label>HSN CODE	 :</label>
															</div>
														</div>
														<div class="col-12 col-sm-8 col-md-10 col-lg-3 col-xl-10">
															<div class="form-group field">
																<div class="">
																	<input type="text" id="GreyPHsnCode"  name="GreyPHsnCode" placeholder="HSN CODE" class="form-control"> 
																</div>
															</div>
														</div>

														<div class="col-12 col-sm-4 col-md-2 col-lg-3 col-xl-2 d-flex ">
															<div class="form-group">
																<label>BROKER 	 :</label>
															</div>
														</div>
														<div class="col-12 col-sm-6 col-md-6 col-lg-8 col-xl-8">
															<div class="form-group field">
																<div class="controls">
																	<select name="BrokerID" id="BrokerIDData1"  style="width: 100%; height:36px;" class="select2 form-control custom-select customvalidation">
																		<option value=""> --Select -- </option>
																		<?php 
																			foreach($getBrokerData as $getBrokerData)
																			{
																			?>
																			<option value="<?php echo $getBrokerData->Ledger_Id; ?>"> <?php echo $getBrokerData->LName; ?></option>
																			<?php 
																			}
																			?>
																	</select>
																</div>
															</div>
														</div>
														<div class="col-12 col-sm-2 col-md-2 col-lg-1 col-xl-2">
															<i data-toggle="modal" data-target="#brocker-responsive-modal" class="fa fa-plus-circle"></i></div>
														

														<div class="col-12 col-sm-4 col-md-2 col-lg-3 col-xl-2 d-flex ">
															<div class="form-group">
																<label>QUALITY	 :</label>
															</div>
														</div>
														<div class="col-12 col-sm-6 col-md-8 col-lg-8 col-xl-8">
															<div class="form-group field">
																<div class="controls">
																	<select name="QualityID" id="QualityIDData"  style="width: 100%; height:36px;" class="select2 form-control custom-select customvalidation">
																		<option value="">-Select-</option>
																		<?php 
																			foreach($getQualityData as $getQualityData)
																			{
																			?>
																			<option value="<?php echo $getQualityData->QualityID; ?>"> <?php echo $getQualityData->GreyQuality; ?></option>
																			<?php 
																			}
																			?>
																	</select>
																	
																</div>
															</div>
														</div>
														<input type="hidden" class="avgwt">
														<div class="col-12 col-sm-2 col-md-2 col-lg-1 col-xl-2">
															<i data-toggle="modal" data-target="#grey-responsive-modal-qty" class="fa fa-plus-circle"></i></div>

													</div>
												</div>
											</div>	
										</div>
										<?php 
										$countarray = $this->db->query("SELECT Grey_Purchase_Order_Bill_Details_Id,Card_No from  grey_purchase_order_bill_details ORDER BY Grey_Purchase_Order_Bill_Details_Id desc LIMIT 1")->row_array();

										$crno = $countarray['Card_No'];
										
										if($crno > 0)
										{
											$crno = $countarray['Card_No']+1;
										}
										else
										{
											$crno = 1;
										}

										?>
										<input type="hidden" id="crdno" value="<?=$crno;?>">
										<table id="myTableData" class="table-responsive table order-list">
										    <thead>
										        <tr>
										            <td>CHR</td>
										            <td>Desp No</td>
										            <td>Mill</td>
										            <td>Card</td>
										            <td>Desp Date</td>
										            <td>MTS</td>
										            <td>Rate</td>
										            <td>Taka</td>
										            <td>WT. LS.</td>
										            <td>Marka</td>
										            <td>Lot No.</td>
										            <td>Remark</td>
										            <td>Vehicle No</td>
										            <td>Eway Bill</td>
										            <td>Process</td>
										            <td>Master</td>
										        </tr>
										    </thead>
										    <tbody>
										       	<tr>
									           	 	<td style="padding: 0.2rem !important;">
									                	<input type="text" name="chr[]" id="chr0" class="form-control" placeholder="CHR" value="" />
									            	</td>

									            	<?php
									            	$querydesno =  $this->db->query("SELECT MillDespatchID from  mill_despatch_entry ORDER BY MillDespatchID desc LIMIT 1")->row_array();
									            	?>

									            	<td style="padding: 0.2rem !important;">
									            		<input type="hidden" name="" id="dubdispetch0" value="<?=$querydesno['MillDespatchID']?>">
									                	<input type="text" name="despno[]" id="despno0"  class="form-control" placeholder="Desp No" value="<?=$querydesno['MillDespatchID']?>"/>
									            	</td>
									            	<td style="padding: 0.2rem !important;">
										            	<select name="mill[]" id="mill0" class="form-control"  onchange="millchange(this,'0');">
															<option value="">-Select-</option>
															<?php 
																foreach($getMillDespData as $qgetMillDespData)
																{
																?>
																<option value="<?php echo $qgetMillDespData->Ledger_Id; ?>"> <?php echo $qgetMillDespData->LName; ?></option>
																<?php 
																}
																?>
														</select>
									            	</td>
										            <td style="padding: 0.2rem !important;">
										                <input type="text" name="cardno[]" id="cardno0" class="form-control CardNoData" placeholder="Card No." value="<?=$crno;?>" />
										            </td>
										            <td style="padding: 0.2rem !important;">
										                <input type="text" name="despdate[]" id="despdate0" class="form-control datepicker-autoclose" placeholder="Desp Date" value="<?=date('m/d/Y');?>" />
										            </td>
										           
										            <td style="padding: 0.2rem !important;">
										                <input onfocusout ="getcardno(0,'0');" type="text" name="mts[]" id="mts0" class="form-control MTSData" placeholder="MTS" value=""   />
										            </td>
										            <td style="padding: 0.2rem !important;">
										                <input type="text" name="rate[]" id="rate0" class="form-control RateData ratefocus0" placeholder="Rate" value="" />
										            </td>
										             <td style="padding: 0.2rem !important;">
										                <input type="text" name="taka[]" id="taka0" class="form-control TotalTakaDetails rectakatotal" placeholder="Taka" onfocusout ="getTaka(0);" value="" />
										            </td>
										            <td style="padding: 0.2rem !important;">
										                <input type="text" name="wtls[]" id="wtls0" class="form-control" placeholder="WT. LS." value="" />
										            </td>
										            <td style="padding: 0.2rem !important;">
										                <input type="text" name="marka[]" id="marka0" class="form-control" placeholder="Marka" value="" />
										            </td>
										            <td style="padding: 0.2rem !important;">
										                <input type="text" name="lotno[]" id="lotno0" class="form-control" placeholder="Lot No." value="" />
										            </td>
										            <td style="padding: 0.2rem !important;">
										                <input type="text" name="remark[]" id="remark0" class="form-control" placeholder="Remark" value="" />
										            </td>
										            <td style="padding: 0.2rem !important;">
										                <input type="text" name="vehicleno[]" id="vehicleno0" class="form-control" placeholder="Vehicle No." value="" />
										            </td>
										            <td style="padding: 0.2rem !important;">
										                <input type="text" name="ewaybill[]" id="ewaybill0" class="form-control" placeholder="Eway Bill" value="" />
										            </td>
										            <td style="padding: 0.2rem !important;">
										                <input type="text" name="process[]" id="process0" class="form-control" placeholder="Process" value="" />
										            </td>
										            <td style="padding: 0.2rem !important;">
										                <input type="text" name="master[]" id="master0" class="form-control" placeholder="Master" value="" />
										            </td>
										           <!--  <td style="padding: 0.2rem !important;">
										            	<i  onclick="getcardno(0);"  class="fa fa-plus-circle"></i>
										            </td> -->
									            	<td style="padding: 0.2rem !important;"><input type="button" class="ibtnDel btn btn-md btn-danger"  value="Delete"></td>

									            	<td style="padding: 0.2rem !important;"><input type="button" onclick="gotoperticulartaka(0);" class="btn btn-md btn-warning"  value="Print"></td>

												</tr>
										    </tbody>
										    <tfoot>
										    	<input type="hidden" class="" id="countdata" name="countdata" value="1">
										        <tr>
										            <td colspan="16" style="text-align: left;">
										                <input type="button" class="btn btn-lg btn-block addrowgreyprbill" id="addrowgreyprbill" value="Add Row" />
										            </td>
										        </tr>
										        <tr>
										        </tr>
										    </tfoot>
										</table>
											<div class="formtitle">
												<h4 class="backcolor">Total</h4>
												<div class="row removemargin">
													<div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
														<div class="row">
															<div class="col-12 col-sm-4 col-md-2 col-lg-3 col-xl-2 d-flex ">
																<div class="form-group">
																	<label>PAID	 :</label>
																</div>
															</div>
															<div class="col-12 col-sm-8 col-md-10 col-lg-3 col-xl-10">
																<div class="form-group field">
																	<div class="">
																		<input type="text"  name="GreyPPaid" id="GreyPPaid" placeholder="Paid" class="form-control greypurbillcalculate">
																	</div>
																</div>
															</div>
															<div class="col-12 col-sm-4 col-md-2 col-lg-3 col-xl-2 d-flex">
																<div class="form-group">
																	<label>PAID DATE :</label>
																</div>
															</div>
															<div class="col-12 col-sm-8 col-md-10 col-lg-3 col-xl-10">
																<div class="form-group field">
																	<div class="">
																		<input type="text"  name="GreyPPaidDate" id="GreyPPaidDate"  class="form-control GreyPRecMts greypurbillcalculate" value="<?=date('m/d/Y');?>"> 
																	</div>
																</div>
															</div>
															<div class="col-12 col-sm-4 col-md-2 col-lg-3 col-xl-2 d-flex ">
																<div class="form-group">
																	<label>DESPATCH MTS. :</label>
																</div>
															</div>
															<div class="col-12 col-sm-8 col-md-10 col-lg-9 col-xl-10">
																<div class="form-group field">
																	<div class="">
																		<input type="text"  name="GreyPDespatchMTS" id="GreyPDespatchMTS" placeholder="Despatch Mts" class="form-control GreyPDespatchMTS greypurbillcalculate">
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										<div class="formtitle">
											<h4 class="backcolor">BILL AMOUNT</h4>
											<div class="row removemargin">
												<div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
													<div class="row">
														<div class="col-12 col-sm-4 col-md-2 col-lg-3 col-xl-2 d-flex ">
															<div class="form-group">
																<label>REC. TAKA	 :</label>
															</div>
														</div>
														<div class="col-12 col-sm-8 col-md-10 col-lg-3 col-xl-10">
															<div class="form-group field">
																<div class="">
																	<input type="text"  name="GreyPRecTaka" id="GreyPRecTaka" placeholder="REC. TAKA" class="form-control greypurbillcalculate" >
																</div>
															</div>
														</div>
														<div class="col-12 col-sm-4 col-md-2 col-lg-3 col-xl-2 d-flex">
															<div class="form-group">
																<label>REC MTS. 	 :</label>
															</div>
														</div>
														<div class="col-12 col-sm-8 col-md-10 col-lg-3 col-xl-10">
															<div class="form-group field">
																<div class="">
																	<input type="text"  name="GreyPRecMts" id="GreyPRecMts" placeholder="REC MTS." class="form-control GreyPRecMts greypurbillcalculate"> 
																</div>
															</div>
														</div>
														<div class="col-12 col-sm-4 col-md-2 col-lg-3 col-xl-2 d-flex ">
															<div class="form-group">
																<label>PUR RATE  	 :</label>
															</div>
														</div>
														<div class="col-12 col-sm-8 col-md-10 col-lg-9 col-xl-10">
															<div class="form-group field">
																<div class="">
																	<input type="text"  name="GreyPPurRate" id="GreyPPurRate" placeholder="PUR RATE" class="form-control GreyPPurRate greypurbillcalculate">
																</div>
															</div>
														</div>
														<div class="col-12 col-sm-4 col-md-2 col-lg-3 col-xl-2 d-flex ">
															<div class="form-group">
																<label>REMARK 	 :</label>
															</div>
														</div>
														<div class="col-12 col-sm-8 col-md-10 col-lg-9 col-xl-10">
															<div class="form-group field">
																<div class="">
																	<select name="RmarkID" id="RmarkID"  style="width: 100%; height:36px;" class="select2 form-control custom-select">
																		<option value=""> --Select -- </option>
																	<?php 
																		foreach($getremarkData as $getremarkData1)
																		{
																		?>
																		<option value="<?php echo $getremarkData1->RemarkID; ?>"> <?php echo $getremarkData1->Remark; ?></option>
																		<?php 
																		}
																		?>
																	</select>
																</div>
															</div>
														</div>

														<div class="col-12 col-sm-4 col-md-2 col-lg-3 col-xl-2 d-flex ">
															<div class="form-group">
																<label>GROSS AMT  	 :</label>
															</div>
														</div>
														<div class="col-12 col-sm-8 col-md-10 col-lg-3 col-xl-10">
															<div class="form-group field">
																<div class="">
																	<input type="text"  name="GreyPGrossAmt" id="GreyPGrossAmt" placeholder="GROSS AMT" class="form-control greypurbillcalculate">
																</div>
															</div>
														</div>
														<div class="col-12 col-sm-4 col-md-2 col-lg-3 col-xl-2 d-flex ">
															<div class="form-group">
																<label>ADD/LESS  	 :</label>
															</div>
														</div>
														<div class="col-12 col-sm-8 col-md-10 col-lg-3 col-xl-10">
															<div class="form-group field">
																<div class="">
																	<input type="text"  name="GreyPGrossAddLess" id="GreyPGrossAddLess" placeholder="ADD/LESS" class="form-control greypurbillcalculate">
																</div>
															</div>
														</div>
													</div>
												</div>
												<div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
													<div class="row">
														<div class="col-12 col-sm-4 col-md-2 col-lg-3 col-xl-2 d-flex ">
															<div class="form-group">
																<label>DISC. %	 :</label>
															</div>
														</div>
														<div class="col-12 col-sm-8 col-md-10 col-lg-3 col-xl-10">
															<div class="form-group field">
																<div class="">
																	<input type="text"  name="GreyPDisc" id="GreyPDisc" placeholder="DISC" class="form-control greypurbillcalculate">
																</div>
															</div>
														</div>

														<div class="col-12 col-sm-4 col-md-2 col-lg-3 col-xl-2 d-flex ">
															<div class="form-group">
																<label>AMT.  	 :</label>
															</div>
														</div>
														<div class="col-12 col-sm-8 col-md-10 col-lg-3 col-xl-10">
															<div class="form-group field">
																<div class="">
																	<input type="text"  name="GreyPAmt" id="GreyPAmt" placeholder="AMT" class="form-control greypurbillcalculate">
																</div>
															</div>
														</div>
														<div class="CGSTData col-12 col-sm-4 col-md-2 col-lg-3 col-xl-2 d-flex" style="">
															<div class="form-group">
																<label>CGST% :</label>
															</div>
														</div>
													
														<div class="col-12 col-sm-8 col-md-10 col-lg-3 col-xl-10">
															<div class="form-group field">
																<div class="">
																	<input type="text"  name="GreyPCgstIgst" id="GreyPCgstIgst" placeholder="CGST/IGST" class="form-control greypurbillcalculate">
																</div>
															</div>
														</div>


														<div class="col-12 col-sm-4 col-md-2 col-lg-3 col-xl-2 d-flex CGSTDataAmt" style="">
															<div class="form-group">
																<label>CGST AMT :</label>
															</div>
														</div>
														<div class="col-12 col-sm-8 col-md-10 col-lg-3 col-xl-10">
															<div class="form-group field">
																<div class="">
																	<input type="text"  name="GreyPCgstAmt" id="GreyPCgstAmt" placeholder="CGST AMT" class="form-control  greypurbillcalculate">
																</div>
															</div>
														</div>
														<div class="SGSTData col-12 col-sm-4 col-md-2 col-lg-3 col-xl-2 d-flex" style="">
															<div class="form-group">
																<label>SGST % 	 :</label>
															</div>
														</div>
														<div class="col-12 col-sm-8 col-md-10 col-lg-3 col-xl-10 SGSTData1" style="">
															<div class="form-group field">
																<div class="">
																	<input type="text"  name="GreyPSgst" id="GreyPSgst" placeholder="SGST" class="form-control">
																</div>
															</div>
														</div>
														<div class="SGSTAmt col-12 col-sm-4 col-md-2 col-lg-3 col-xl-2 d-flex " style="">
															<div class="form-group">
																<label>SGST AMT	 :</label>
															</div>
														</div>
														<div class="SGSTAmt1 col-12 col-sm-8 col-md-10 col-lg-3 col-xl-10" style="">
															<div class="form-group field">
																<div class="">
																	<input type="text"  name="GreyPSgstAmt" id="GreyPSgstAmt" placeholder="SGST AMT" class="form-control greypurbillcalculate">
																</div>
															</div>
														</div>

														<div  class="col-12 col-sm-4 col-md-2 col-lg-3 col-xl-2 d-flex IGSTData">
															<div class="form-group">
																<label>IGST% :</label>             
															</div>
														</div>

														<div class="SGSTAmt1 col-12 col-sm-8 col-md-10 col-lg-3 col-xl-10" style="">
															<div class="form-group field">
																<div class="">
																	<input type="text"  name="GreyPIgstPer" id="GreyPIgstPer" placeholder="IGST %" class="form-control">
																</div>
															</div>
														</div>
														
														<div class="col-12 col-sm-4 col-md-2 col-lg-3 col-xl-2 d-flex IGSTDataAmt">
															<div class="form-group">
																<label>IGST AMT:</label>             
															</div>
														</div>

														<div class="SGSTAmt1 col-12 col-sm-8 col-md-10 col-lg-3 col-xl-10" style="">
															<div class="form-group field">
																<div class="">
																	<input type="text"  name="GreyPIgstAmt" id="GreyPIgstAmt" placeholder="IGST AMT" class="form-control">
																</div>
															</div>
														</div>


														<div class="col-12 col-sm-4 col-md-2 col-lg-3 col-xl-2 d-flex ">
															<div class="form-group">
																<label>BILL AMT  	 :</label>
															</div>
														</div>
														<div class="col-12 col-sm-8 col-md-10 col-lg-3 col-xl-10">
															<div class="form-group field">
																<div class="">
																	<input type="text"  name="GreyPBillAmt" id="GreyPBillAmt" placeholder="BILL AMT" class="form-control  greypurbillcalculate">
																</div>
															</div>
														</div>
														<div class="col-12 col-sm-4 col-md-2 col-lg-3 col-xl-2 d-flex ">
															<div class="form-group">
																<label>ADD/LESS  	 :</label>
															</div>
														</div>
														<div class="col-12 col-sm-8 col-md-10 col-lg-3 col-xl-10">
															<div class="form-group field">
																<div class="">
																	<input type="text"  name="GreyPBillAddLess" id="GreyPBillAddLess" placeholder="ADD/LESS" class="form-control greypurbillcalculate">
																</div>
															</div>
														</div>

														<div class="col-12 col-sm-4 col-md-2 col-lg-3 col-xl-2 d-flex ">
															<div class="form-group">
																<label>NET AMT  	 :</label>
															</div>
														</div>
														<div class="col-12 col-sm-8 col-md-10 col-lg-3 col-xl-10">
															<div class="form-group field">
																<div class="">
																	<input type="text"  name="GreyPNetAmt" id="GreyPNetAmt" placeholder="NET AMT" class="form-control greypurbillcalculate">
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
														<div class="col-12 col-sm-4 col-md-2 col-lg-3 col-xl-2 d-flex ">
															<div class="form-group">
																<label>GROSS AMT.	 :</label>
															</div>
														</div>
														<div class="col-12 col-sm-8 col-md-10 col-lg-9 col-xl-10">
															<div class="form-group field">
																<div class="">
																	<input type="text"  name="GreyPGrossAmt2" id="GreyPGrossAmt2" placeholder="GROSS AMT" class="form-control greypurbillcalculate">
																</div>
															</div>
														</div>
														<div class="col-12 col-sm-4 col-md-2 col-lg-3 col-xl-2 d-flex">
															<div class="form-group">
																<label>STATE 	 :</label>
															</div>
														</div>
														<div class="col-12 col-sm-8 col-md-10 col-lg-9 col-xl-10">
															<div class="form-group field">
																<div class="">
																	<select name="StateID" id="StateID"   style="width: 100%; height:36px;" class="select2 form-control custom-select">
																		<option value=""> --Select -- </option>
																		<?php 
																			foreach($getStateData as $qgetStateData)
																			{
																			?>
																			<option value="<?php echo $qgetStateData->StateID; ?>"> <?php echo $qgetStateData->StateCode; ?>|<?php echo $qgetStateData->StateName; ?></option>
																			<?php 
																			}
																			?>
																	</select>
																</div>
															</div>
														</div>
														<div class="col-12 col-sm-4 col-md-2 col-lg-3 col-xl-2 d-flex ">
															<div class="form-group">
																<label>GST TYPE 	 :</label>
															</div>
														</div>
														<div class="col-12 col-sm-8 col-md-10 col-lg-9 col-xl-10">
															<div class="form-group field">
																<div class="">
																	<select name="GsttypeID" id="GsttypeID"   style="width: 100%; height:36px;" class="select2 form-control custom-select">
																		<option value=""> --Select -- </option>
																		<?php 
																			foreach($getgstTypeData as $qgetgstTypeData)
																			{
																			?>
																				<option value="<?php echo $qgetgstTypeData->GsttypeID; ?>"> <?php echo $qgetgstTypeData->GstTypeName; ?></option>
																			<?php 
																			}
																		?>
																		
																	</select>
																</div>
															</div>
														</div>
														
														<div class="col-12 col-sm-4 col-md-2 col-lg-3 col-xl-2 d-flex ">
															<div class="form-group">
																<label>DTH. LESS 	 :</label>
															</div>
														</div>
														<div class="col-12 col-sm-8 col-md-10 col-lg-3 col-xl-10">
															<div class="form-group field">
																<div class="">
																	<input type="text"  name="GreyPAmtDthLess" id="GreyPAmtDthLess" placeholder="DTH LESS" class="form-control greypurbillcalculate">
																</div>
															</div>
														</div>
													</div>
												</div>
												<div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
													<div class="row">
														<div class="col-12 col-sm-4 col-md-2 col-lg-3 col-xl-2 d-flex ">
															<div class="form-group">
																<label>ADD AMT 	 :</label>
															</div>
														</div>
														<div class="col-12 col-sm-8 col-md-10 col-lg-3 col-xl-10">
															<div class="form-group field">
																<div class="">
																	<input type="text"  name="GreyPAddAmt" id="GreyPAddAmt" placeholder="ADD AMT" class="form-control greypurbillcalculate">
																</div>
															</div>
														</div>
														<div class="col-12 col-sm-4 col-md-2 col-lg-3 col-xl-2 d-flex ">
															<div class="form-group">
																<label>TEXABLE VALUE	 :</label>
															</div>
														</div>
														<div class="col-12 col-sm-8 col-md-10 col-lg-3 col-xl-10">
															<div class="form-group field">
																<div class="">
																	<input type="text"  name="GreyPTexableValue" id="GreyPTexableValue" placeholder="TEXABLE AMT" class="form-control greypurbillcalculate">
																</div>
															</div>
														</div>


														<div class="col-12 col-sm-4 col-md-2 col-lg-3 col-xl-2 d-flex ">
															<div class="form-group">
																<label>PARTY GSTIN  	 :</label>
															</div>
														</div>
														<div class="col-12 col-sm-8 col-md-10 col-lg-3 col-xl-10">
															<div class="form-group field">
																<div class="">
																	<input type="text"  name="GreyPPartyGstin" id="GreyPPartyGstin" placeholder="PARTY GSTIN" class="form-control">
																</div>
															</div>
														</div>
														

														<div class="col-12 col-sm-4 col-md-2 col-lg-3 col-xl-2 d-flex ">
															<div class="form-group">
																<label>GST AMT1 	 :</label>
															</div>
														</div>
														<div class="col-12 col-sm-8 col-md-10 col-lg-3 col-xl-10">
															<div class="form-group field">
																<div class="">
																	<input type="text"  name="GreyPGstAmt1" id="GreyPGstAmt1" placeholder="GST AMT1" class="form-control greypurbillcalculate">
																</div>
															</div>
														</div>
														<div class="col-12 col-sm-4 col-md-2 col-lg-3 col-xl-2 d-flex ">
															<div class="form-group">
																<label>BILL AMT 	 :</label>
															</div>
														</div>
														<div class="col-12 col-sm-8 col-md-10 col-lg-3 col-xl-10">
															<div class="form-group field">
																<div class="">
																	<input type="text"  name="GreyPBillAmt2" id="GreyPBillAmt2" placeholder="BILL AMT" class="form-control greypurbillcalculate">
																</div>
															</div>
														</div>

													</div>
												</div>
											</div>	

										</div>

										

										<div class="formtitle">
											<h4 class="backcolor">ADD/LESS (PAYMET)</h4>
											<div class="row removemargin">
												<div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
													<div class="row">
														<div class="col-12 col-sm-4 col-md-2 col-lg-3 col-xl-2 d-flex ">
															<div class="form-group">
																<label>GROSS AMT.	 :</label>
															</div>
														</div>
														<div class="col-12 col-sm-8 col-md-10 col-lg-3 col-xl-10">
															<div class="form-group field">
																<div class="">
																	<input type="text"  name="GreyPGrossAmt3" id="GreyPGrossAmt3" placeholder="GROSS AMT" class="form-control">
																</div>
															</div>
														</div>
														<div class="col-12 col-sm-4 col-md-2 col-lg-3 col-xl-2 d-flex">
															<div class="form-group">
																<label>ADD/LESS 	 :</label>
															</div>
														</div>
														<div class="col-12 col-sm-8 col-md-10 col-lg-3 col-xl-10">
															<div class="form-group field">
																<div class="">
																	<input type="text"  name="GreyPAddLess2" id="GreyPAddLess2" placeholder="ADD/LESS" class="form-control"> 
																</div>
															</div>
														</div>
														<div class="col-12 col-sm-4 col-md-2 col-lg-3 col-xl-2 d-flex ">
															<div class="form-group">
																<label>BILL AMT 	 :</label>
															</div>
														</div>
														<div class="col-12 col-sm-8 col-md-10 col-lg-3 col-xl-10">
															<div class="form-group field">
																<div class="">
																	<input type="text"  name="GreyPBillAmt3" id="GreyPBillAmt3" placeholder="BILL AMT" class="form-control">
																</div>
															</div>
														</div>
														<div class="col-12 col-sm-4 col-md-2 col-lg-3 col-xl-2 d-flex ">
															<div class="form-group">
																<label>ADD/LESS	 :</label>
															</div>
														</div>
														<div class="col-12 col-sm-8 col-md-10 col-lg-3 col-xl-10">
															<div class="form-group field">
																<div class="">
																	<input type="text"  name="GreyPAddLess3" id="GreyPAddLess3" placeholder="ADD/LESS" class="form-control">
																</div>
															</div>
														</div>

														<div class="col-12 col-sm-4 col-md-2 col-lg-3 col-xl-2 d-flex ">
															<div class="form-group">
																<label>NET AMT.  	 :</label>
															</div>
														</div>
														<div class="col-12 col-sm-8 col-md-10 col-lg-3 col-xl-10">
															<div class="form-group field">
																<div class="">
																	<input type="text"  name="GreyPNetAmt2" id="GreyPNetAmt2" placeholder="NET AMT" class="form-control">
																</div>
															</div>
														</div>
														<div class="col-12 col-sm-4 col-md-2 col-lg-3 col-xl-2 d-flex ">
															<div class="form-group">
																<label>DISC % 	 :</label>
															</div>
														</div>
														<div class="col-12 col-sm-8 col-md-10 col-lg-3 col-xl-10">
															<div class="form-group field">
																<div class="">
																	<input type="text"  name="GreyPDisc2" id="GreyPDisc2" placeholder="DISC" class="form-control">
																</div>
															</div>
														</div>
													</div>
												</div>
												<div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
													<div class="row">
														<div class="col-12 col-sm-4 col-md-2 col-lg-3 col-xl-2 d-flex ">
															<div class="form-group">
																<label>AMT. 	 :</label>
															</div>
														</div>
														<div class="col-12 col-sm-8 col-md-10 col-lg-3 col-xl-10">
															<div class="form-group field">
																<div class="">
																	<input type="text"  name="GreyPAmt2" id="GreyPAmt2" placeholder="AMT" class="form-control" >
																</div>
															</div>
														</div>
														<div class="col-12 col-sm-4 col-md-2 col-lg-3 col-xl-2 d-flex ">
															<div class="form-group">
																<label>OTH. LESS	 :</label>
															</div>
														</div>
														<div class="col-12 col-sm-8 col-md-10 col-lg-3 col-xl-10">
															<div class="form-group field">
																<div class="">
																	<input type="text"  name="GreyPOthLess" id="GreyPOthLess" placeholder="OTH LESS" class="form-control">
																</div>
															</div>
														</div>


														<div class="col-12 col-sm-4 col-md-2 col-lg-3 col-xl-2 d-flex ">
															<div class="form-group">
																<label>ADD AMT 	 :</label>
															</div>
														</div>
														<div class="col-12 col-sm-8 col-md-10 col-lg-3 col-xl-10">
															<div class="form-group field">
																<div class="">
																	<input type="text"  name="GreyPAddAmt2" id="GreyPAddAmt2" placeholder="ADD AMT" class="form-control">
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
													<a  href="<?php echo base_url()?>GreyPurchaseOrderBill" class="btn btn-info">
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
						if(!empty($editpurchaseOrderBilldata))
						{
						?>
						<!-- <input type="hidden" value="inside" id="inside"> -->
						<div class="tab-pane  p-20" id="editform" role="tabpanel">
							<form class="" method="POST" name="editPurchaseOBillform" id="editPurchaseOBillform" novalidate>
								<input type="hidden" value="<?=$editpurchaseOrderBilldata['greypurchaseorderBillID'];?>" id="greypurchaseorderBillID" name="greypurchaseorderBillID">
								<div class="row common_master_form_div">
									<div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 ">
										<div class="formtitle">
											<div class="row removemargin">
												<div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
													<div class="row">
														<div class="col-12 col-sm-4 col-md-2 col-lg-3 col-xl-2 d-flex ">
															<div class="form-group">
																<label>COMAPNY	 :</label>
															</div>
														</div>
														<div class="col-12 col-sm-8 col-md-10 col-lg-9 col-xl-10">
															<div class="form-group field">
																<div class=>
																	<select name="CompanyID" id="CompanyID"  style="width: 100%; height:36px;" class="select2 form-control custom-select CompanyIDcls">
																		<option value=""> --Select -- </option>
																		<?php
																		foreach ($getCompanyData as $qgetCompanyData)
																		{
																			?>
																		<option <?php if($editpurchaseOrderBilldata['CompanyID'] == $qgetCompanyData->CompanyID){echo "selected";}?> value="<?php echo $qgetCompanyData->CompanyID; ?>">
																		<?=$qgetCompanyData->CompanyName?> </option>
																			<?php
																		}
																		?>
																		
																	</select>
																</div>
															</div>
														</div>
														<div class="col-12 col-sm-4 col-md-2 col-lg-2 col-xl-2 d-flex">
															<div class="form-group">
																<label> SR NO. 	 :</label>
															</div>
														</div>
														<div class="col-12 col-sm-8 col-md-10 col-lg-4 col-xl-10">
															<div class="form-group field">
																<div class="">
																	<input type="text"  name="GreyPSrNo" id="GreyPSrNo" placeholder="ENTER SRNO." value="<?=$editpurchaseOrderBilldata['GreyPSrNo'];?>" class="form-control"> 
																</div>
															</div>
														</div>
														<div class="col-12 col-sm-4 col-md-2 col-lg-2 col-xl-2 d-flex ">
															<div class="form-group">
																<label>BILL NO.  	 :</label>
															</div>
														</div>
														<div class="col-12 col-sm-8 col-md-10 col-lg-4 col-xl-10">
															<div class="form-group field">
																<div class="">
																	<input type="text"  name="GreyPBillNo" id="GreyPBillNo" value="<?=$editpurchaseOrderBilldata['GreyPBillNo'];?>" placeholder="ENTER BILL NO." class="form-control GreyPBillNocls">
																</div>
															</div>
														</div>
														<div class="col-12 col-sm-4 col-md-2 col-lg-3 col-xl-2 d-flex ">
															<div class="form-group">
																<label>PARTY A/C  	 :</label>
															</div>
														</div>
														<div class="col-12 col-sm-8 col-md-10 col-lg-9 col-xl-10">
															<div class="form-group field">
																<div class="controls">
																	<select name="GreyPPartyAcID" id="GreyPPartyAcID"   style="width: 100%; height:36px;" class="select2 form-control custom-select customvalidation GreyPPartyAcIDcls"  onchange="getordertootherdataedit(this);">
																		<option value=""> --Select -- </option>
																		<?php
																		foreach ($getGreyPartyData1 as $qgetGreyPartyData)
																		{
																			?>
																			<option <?php if($editpurchaseOrderBilldata['GreyPPartyAcID'] == $qgetGreyPartyData->Ledger_Id) {echo "selected";}?> value="<?=$qgetGreyPartyData->Ledger_Id?>"> <?=$qgetGreyPartyData->LName?> </option>
																			<?php
																		}
																		?>
																	</select>
																</div>
															</div>
														</div>
														<div class="col-12 col-sm-4 col-md-2 col-lg-3 col-xl-2 d-flex ">
															<div class="form-group">
																<label>ORDER NO.	 :</label>
															</div>
														</div>
														<div class="col-12 col-sm-8 col-md-10 col-lg-9 col-xl-10">
															<div class="form-group field">
																<div class="controls">
																	<select name="GreyPOrderNo" id="GreyPOrderNo"  style="width: 100%; height:36px;" class="select2 form-control custom-select customvalidation EditGreyPOrderNo"  onchange="getordertootherdataedit(this);">
																		<option value=""> --Select -- </option>
																	<?php
																	foreach ($getordernoData as $qgetordernoData)
																	{
																		?>
																		<option <?php if($editpurchaseOrderBilldata['GreyPOrderNo'] == $qgetordernoData->GreyOrderNo) {echo "selected";}?> value="<?=$qgetordernoData->GreyOrderNo?>"> <?=$qgetordernoData->GreyOrderNo?> </option>
																		<?php
																	}
																	?> 
																	<?php
																	$GreyPOrderNo = $editpurchaseOrderBilldata['GreyPOrderNo'];
																	
																	$find = $this->db->query("SELECT * from greypurchaseorder where GreyOrderNo = '$GreyPOrderNo'")->row_array();
																	$avgwt = $find['GreyAvgWt'];

																	?>
																	</select>
																	<input type="hidden" class="avgwtedit" value="<?=$avgwt;?>">
																</div>
															</div>
														</div>
													</div>
												</div>
												<div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
													<div class="row">
														<div class="col-12 col-sm-4 col-md-2 col-lg-3 col-xl-2 d-flex ">
															<div class="form-group">
																<label>DATE	 :</label>
															</div>
														</div>
														<div class="col-12 col-sm-8 col-md-10 col-lg-3 col-xl-10">
															<div class="form-group field">
																<div class="">
																	<input type="text" id="datepicker-autoclose"  name="GreyPPurchaseOrderBillDate"  value="<?=$editpurchaseOrderBilldata['GreyPPurchaseOrderBillDate'];?>" class="form-control"> 
																</div>
															</div>
														</div>
														<div class="col-12 col-sm-4 col-md-2 col-lg-3 col-xl-2 d-flex ">
															<div class="form-group">
																<label>HSN CODE	 :</label>
															</div>
														</div>
														<div class="col-12 col-sm-8 col-md-10 col-lg-3 col-xl-10">
															<div class="form-group field">
																<div class="">
																	<input type="text" id="GreyPHsnCode"  name="GreyPHsnCode" value="<?=$editpurchaseOrderBilldata['GreyPHsnCode'];?>" class="form-control EditGreyPHsnCode"> 
																</div>
															</div>
														</div>

														<div class="col-12 col-sm-4 col-md-2 col-lg-3 col-xl-2 d-flex ">
															<div class="form-group">
																<label>BROKER 	 :</label>
															</div>
														</div>
														<div class="col-12 col-sm-8 col-md-10 col-lg-9 col-xl-10">
															<div class="form-group field">
																<div class="controls">
																	<select name="BrokerID" id="BrokerIDDataList" style="width: 100%; height:36px;" class="select2 form-control custom-select customvalidation EditBrokerID">
																		<option value=""> --Select -- </option>
																		<?php
																		foreach ($getBrokerData2 as $qgetBrokerData)
																		{
																			?>
																			<option <?php if($editpurchaseOrderBilldata['BrokerID'] == $qgetBrokerData->Ledger_Id) {echo "selected";}?> value="<?=$qgetBrokerData->Ledger_Id?>"> <?=$qgetBrokerData->LName?> </option>
																			<?php
																		}
																		?>
																	</select>
																</div>
															</div>
														</div>

														<div class="col-12 col-sm-4 col-md-2 col-lg-3 col-xl-2 d-flex ">
															<div class="form-group">
																<label>QUALITY	 :</label>
															</div>
														</div>
														<div class="col-12 col-sm-8 col-md-10 col-lg-9 col-xl-10">
															<div class="form-group field">
																<div class="controls">
																	<select name="QualityID" id="EditQualityID" class="form-control customvalidation QualityID123 EditQualityIDcls">
																		<option value="">-Select-</option>

																		<?php
																		foreach ($getgreyQualityData as $qgetgreyQualityData)
																		{
																			?>
																			<option <?php if($editpurchaseOrderBilldata['QualityID'] == $qgetgreyQualityData->QualityID) {echo "selected";}?> value="<?=$qgetgreyQualityData->QualityID;?>"><?=$qgetgreyQualityData->GreyQuality;?></option>
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

										<table id="myTable1" class=" table order-list table-responsive editgreytbl">
									    <thead>
									        <tr>
									            <td>CHR</td>
										            <td>Desp No</td>
										            <td>Mill</td>
										            <td>Card</td>
										            <td>Desp Date</td>
										           
										            <td>MTS</td>
										            <td>Rate</td>
										             <td>Taka</td>
										            <td>WT. LS.</td>
										            <td>Marka</td>
										            <td>Lot No.</td>
										            <td>Remark</td>
										            <td>Vehicle No</td>
										            <td>Eway Bill</td>
										            <td>Process</td>
										            <td>Master</td>
									        </tr>
									    </thead>
									    <tbody>
									        <?php
									    	$Grey_Purchase_Order_Bill_Id = $editpurchaseOrderBilldata['greypurchaseorderBillID'];
									    	$grpurbilldetails = $this->db->query("SELECT * from grey_purchase_order_bill_details where Grey_Purchase_Order_Bill_Id = '$Grey_Purchase_Order_Bill_Id'")->result_array();
									    	$x = 0;
									    	if(sizeof($grpurbilldetails))
									    	{

									            
									            	$querydesno1 =  $this->db->query("SELECT MillDespatchID from  mill_despatch_entry ORDER BY MillDespatchID desc LIMIT 1")->row_array();
									            	

									    	foreach ($grpurbilldetails as $value)
									    	{
									    		?>
									    		<tr>
										           <td style="padding: 0.2rem !important;">
									                <input type="text" name="chr[]" id="chr<?=$x;?>" class="form-control" placeholder="CHR" value="<?=$value['CHR'];?>" />
									            </td>
									            <td style="padding: 0.2rem !important;">
									            	<input type="hidden" name="" id="dubdispetch<?=$x;?>" value="<?=$querydesno1['MillDespatchID']?>">

									                <input type="text" name="despno[]" id="despno<?=$x;?>"  class="form-control despno<?=$x;?>" placeholder="Desp No" value="<?=$value['Desp_No'];?>"/>
									            </td>
									            <td style="padding: 0.2rem !important;">
									               <select name="mill[]" id="millDetails1<?=$x;?>"  class="form-control" onchange="millchange(this,'<?=$x;?>');">
														<option value="">-Select-</option>

														<?php 
															foreach($getMillDespData as $qgetMillDespData)
															{
															?>

																<option <?php if($value['Mill'] == $qgetMillDespData->Ledger_Id){echo "selected";}?> value="<?php echo $qgetMillDespData->Ledger_Id; ?>">
																		<?=$qgetMillDespData->LName?> </option>
															<?php 
															}
															?>
													</select>
									            </td>
									            <td style="padding: 0.2rem !important;">
									                <input type="text" name="cardno[]" id="cardno<?=$x;?>" class="form-control cardnocls<?=$x;?> editcrtno<?=$x;?>" placeholder="Card No." value="<?=$value['Card_No'];?>" />
									            </td>
									            <td style="padding: 0.2rem !important;">
									                <input type="text" name="despdate[]" id="despdate<?=$x;?>" class="form-control datepicker-autoclose" placeholder="Desp Date" value="<?=$value['Desp_Date'];?>" />
									            </td>
									            
									            <td style="padding: 0.2rem !important;">
									                <input type="text" name="mts[]" id="mts<?=$x;?>" class="form-control" placeholder="MTS" onfocusout="getcardno('<?=$x;?>','1');" value="<?=$value['MTS'];?>" />
									            </td>
									            <td style="padding: 0.2rem !important;">
									                <input type="text" name="rate[]" id="rate<?=$x;?>" class="form-control RateData ratefocus<?=$x;?>" placeholder="Rate" value="<?=$value['Rate'];?>" />
									            </td>
									            <td style="padding: 0.2rem !important;">
									                <input type="text" name="taka[]" id="taka<?=$x;?>" class="form-control rectakatotal" placeholder="Taka" onfocusout="ratecal()" value="<?=$value['Taka'];?>" />
									            </td>
									            <td style="padding: 0.2rem !important;">
									                <input type="text" name="wtls[]" id="wtls<?=$x;?>" class="form-control" placeholder="WT. LS." value="<?=$value['Weight_LS'];?>" />
									            </td>
									            <td style="padding: 0.2rem !important;">
									                <input type="text" name="marka[]" id="marka<?=$x;?>" class="form-control" placeholder="Marka" value="<?=$value['Marka'];?>" />
									            </td>
									            <td style="padding: 0.2rem !important;">
									                <input type="text" name="lotno[]" id="lotno<?=$x;?>" class="form-control" placeholder="Lot No." value="<?=$value['Lot_No'];?>" />
									            </td>
									            <td style="padding: 0.2rem !important;">
									                <input type="text" name="remark[]" id="remark<?=$x;?>" class="form-control" placeholder="Remark" value="<?=$value['Remark'];?>" />
									            </td>
									            <td style="padding: 0.2rem !important;">
									                <input type="text" name="vehicleno[]" id="vehicleno<?=$x;?>" class="form-control" placeholder="Vehicle No." value="<?=$value['Vehicle_No'];?>" />
									            </td>
									            <td style="padding: 0.2rem !important;">
									                <input type="text" name="ewaybill[]" id="ewaybill<?=$x;?>" class="form-control" placeholder="Eway Bill" value="<?=$value['E_Way_Bill_No'];?>" />
									            </td>
									            <td style="padding: 0.2rem !important;">
									                <input type="text" name="process[]" id="process<?=$x;?>" class="form-control" placeholder="Process" value="<?=$value['Process'];?>" />
									            </td>
									            <td style="padding: 0.2rem !important;">
									                <input type="text" name="master[]" id="master<?=$x;?>" class="form-control" placeholder="Master" value="<?=$value['Master'];?>" />
									            </td>
									            <td style="padding: 0.2rem !important;"><input type="button" class="ibtnDel btn btn-md btn-danger"  value="Delete" e="Delete"></td>

									            <td style="padding: 0.2rem !important;"><input type="button" onclick="gotoperticulartakaedit('<?=$x;?>');" class="btn btn-md btn-warning"  value="Print"></td>

										        </tr>
									    		<?php
									    		$x++;
									    	}
									    	}
									    	?>
									    </tbody>
									    <tfoot>
									    	<input type="hidden" class="countdata123" id="" name="countdata1" value="<?=sizeof($grpurbilldetails);?>">
									        <tr>
									            <!-- <td colspan="5" style="text-align: left;">
									                <input type="button" class="btn btn-lg btn-block addrow" id="addrow" value="Add Row" />
									            </td> -->

									            <td colspan="16" style="text-align: left;">
										                <input type="button" class="btn btn-lg btn-block addrowgreyprbill" id="addrowgreyprbill" value="Add Row">
										            </td>
									        </tr>
									        <tr>
									        </tr>
									    </tfoot>
										</table>
										<div class="formtitle">
											<h4 class="backcolor">BILL AMOUNT</h4>
											<div class="row removemargin">
												<div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
													<div class="row">
														<div class="col-12 col-sm-4 col-md-2 col-lg-3 col-xl-2 d-flex ">
															<div class="form-group">
																<label>REC. TAKA	 :</label>
															</div>
														</div>
														<div class="col-12 col-sm-8 col-md-10 col-lg-3 col-xl-10">
															<div class="form-group field">
																<div class="">
																	<input type="text"  name="GreyPRecTaka" id="GreyPRecTaka"  class="form-control RecTaka greypurbillcalculate1 rectakatot" value="<?=$editpurchaseOrderBilldata['GreyPRecTaka'];?>">
																</div>
															</div>
														</div>
														<div class="col-12 col-sm-4 col-md-2 col-lg-3 col-xl-2 d-flex">
															<div class="form-group">
																<label>REC MTS. 	 :</label>
															</div>
														</div>
														<div class="col-12 col-sm-8 col-md-10 col-lg-3 col-xl-10">
															<div class="form-group field">
																<div class="">
																	<input type="text"  name="GreyPRecMts" id="GreyPRecMts" class="form-control EditRecMts1 greypurbillcalculate1" value="<?=$editpurchaseOrderBilldata['GreyPRecMts'];?>"> 
																</div>
															</div>
														</div>
														<div class="col-12 col-sm-4 col-md-2 col-lg-3 col-xl-2 d-flex ">
															<div class="form-group">
																<label>PUR RATE  	 :</label>
															</div>
														</div>
														<div class="col-12 col-sm-8 col-md-10 col-lg-3 col-xl-10">
															<div class="form-group field">
																<div class="">
																	<input type="text"  name="GreyPPurRate" id="GreyPPurRate"  class="form-control EditGreyPPurRate  greypurbillcalculate1" value="<?=$editpurchaseOrderBilldata['GreyPPurRate'];?>">
																</div>
															</div>
														</div>
														<div class="col-12 col-sm-4 col-md-2 col-lg-3 col-xl-2 d-flex ">
															<div class="form-group">
																<label>GROSS AMT  	 :</label>
															</div>
														</div>
														<div class="col-12 col-sm-8 col-md-10 col-lg-3 col-xl-10">
															<div class="form-group field">
																<div class="">
																	<input type="text"  name="GreyPGrossAmt" id="GreyPGrossAmt"  class="form-control EditGrossAmt1 greypurbillcalculate1" value="<?=$editpurchaseOrderBilldata['GreyPGrossAmt'];?>">
																</div>
															</div>
														</div>


														<div class="col-12 col-sm-4 col-md-2 col-lg-3 col-xl-2 d-flex ">
															<div class="form-group">
																<label>REMARK 	 :</label>
															</div>
														</div>
														<div class="col-12 col-sm-8 col-md-10 col-lg-9 col-xl-10">
															<div class="form-group field">
																<div class="controls">
																	<select name="RmarkID" id="RmarkID"  style="width: 100%; height:36px;" class="select2 form-control custom-select customvalidation">
																		<option value=""> --Select -- </option>

																		<?php 
																		foreach($getremarkData as $getremarkData12)
																		{
																		?>
																		<option <?php if($editpurchaseOrderBilldata['RmarkID'] == $getremarkData12->RemarkID){echo "selected";}?> value="<?php echo $getremarkData12->RemarkID; ?>"> <?php echo $getremarkData12->Remark; ?></option>
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
																<label>ADD/LESS  	 :</label>
															</div>
														</div>
														<div class="col-12 col-sm-8 col-md-10 col-lg-3 col-xl-10">
															<div class="form-group field">
																<div class="">
																	<input type="text"  name="GreyPGrossAddLess" id="GreyPGrossAddLess"  class="form-control greypurbillcalculate1 GrossAddLess12" value="<?=$editpurchaseOrderBilldata['GreyPGrossAddLess'];?>">
																</div>
															</div>
														</div>
														<div class="col-12 col-sm-4 col-md-2 col-lg-3 col-xl-2 d-flex ">
															<div class="form-group">
																<label>CGST AMT  	 :</label>
															</div>
														</div>
														<div class="col-12 col-sm-8 col-md-10 col-lg-3 col-xl-10">
															<div class="form-group field">
																<div class="">
																	<input type="text"  name="GreyPCgstAmt" id="GreyPCgstAmt"  class="form-control CgstAmt1  greypurbillcalculate1" value="<?=$editpurchaseOrderBilldata['GreyPCgstAmt'];?>">
																</div>
															</div>
														</div>
														<div class="col-12 col-sm-4 col-md-2 col-lg-3 col-xl-2 d-flex ">
															<div class="form-group">
																<label>SGST AMT	 :</label>
															</div>
														</div>
														<div class="col-12 col-sm-8 col-md-10 col-lg-3 col-xl-10">
															<div class="form-group field">
																<div class="">
																	<input type="text"  name="GreyPSgstAmt" id="GreyPSgstAmt"  class="form-control SgstAmt1 greypurbillcalculate1" value="<?=$editpurchaseOrderBilldata['GreyPSgstAmt'];?>">
																</div>
															</div>
														</div>


														<div class="col-12 col-sm-4 col-md-2 col-lg-3 col-xl-2 d-flex ">
															<div class="form-group">
																<label>BILL AMT  	 :</label>
															</div>
														</div>
														<div class="col-12 col-sm-8 col-md-10 col-lg-3 col-xl-10">
															<div class="form-group field">
																<div class="">
																	<input type="text"  name="GreyPBillAmt" id="GreyPBillAmt"  class="form-control BillAmt1 greypurbillcalculate1" value="<?=$editpurchaseOrderBilldata['GreyPBillAmt'];?>">
																</div>
															</div>
														</div>
														<div class="col-12 col-sm-4 col-md-2 col-lg-3 col-xl-2 d-flex ">
															<div class="form-group">
																<label>ADD/LESS  	 :</label>
															</div>
														</div>
														<div class="col-12 col-sm-8 col-md-10 col-lg-3 col-xl-10">
															<div class="form-group field">
																<div class="">
																	<input type="text"  name="GreyPBillAddLess" id="GreyPBillAddLess"  class="form-control BillAddLess1  greypurbillcalculate1" value="<?=$editpurchaseOrderBilldata['GreyPBillAddLess'];?>">
																</div>
															</div>
														</div>

														<div class="col-12 col-sm-4 col-md-2 col-lg-3 col-xl-2 d-flex ">
															<div class="form-group">
																<label>NET AMT  	 :</label>
															</div>
														</div>
														<div class="col-12 col-sm-8 col-md-10 col-lg-3 col-xl-10">
															<div class="form-group field">
																<div class="">
																	<input type="text"  name="GreyPNetAmt" id="GreyPNetAmt"  class="form-control NetAmt1 greypurbillcalculate1" value="<?=$editpurchaseOrderBilldata['GreyPNetAmt'];?>">
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
														<div class="col-12 col-sm-4 col-md-2 col-lg-3 col-xl-2 d-flex ">
															<div class="form-group">
																<label>GROSS AMT.	 :</label>
															</div>
														</div>
														<div class="col-12 col-sm-8 col-md-10 col-lg-3 col-xl-10">
															<div class="form-group field">
																<div class="">
																	<input type="text"  name="GreyPGrossAmt2" id="GreyPGrossAmt2"  class="form-control GrossAmt21 greypurbillcalculate1" value="<?=$editpurchaseOrderBilldata['GreyPGrossAmt2'];?>">
																</div>
															</div>
														</div>
														<div class="col-12 col-sm-4 col-md-2 col-lg-3 col-xl-2 d-flex ">
															<div class="form-group">
																<label>DISC. %	 :</label>
															</div>
														</div>
														<div class="col-12 col-sm-8 col-md-10 col-lg-3 col-xl-10">
															<div class="form-group field">
																<div class="">
																	<input type="text"  name="GreyPDisc" id="GreyPDisc"  class="form-control Disc1 greypurbillcalculate1" value="<?=$editpurchaseOrderBilldata['GreyPDisc'];?>">
																</div>
															</div>
														</div>	

														<div class="col-12 col-sm-4 col-md-2 col-lg-3 col-xl-2 d-flex">
															<div class="form-group">
																<label>STATE 	 :</label>
															</div>
														</div>
														<div class="col-12 col-sm-8 col-md-10 col-lg-9 col-xl-10">
															<div class="form-group field">
																<div class="controls">
																	<select name="StateID" id="StateID"  style="width: 100%; height:36px;" class="select2 form-control custom-select customvalidation EditStateID">
																		<option value=""> --Select -- </option>
																		<?php
																		foreach ($getStateData1 as $qgetstateData)
																		{
																			?>
																			<option <?php if($editpurchaseOrderBilldata['StateID'] == $qgetstateData->StateID) {echo "selected";}?> value="<?=$qgetstateData->StateID	?>"> <?=$qgetstateData->StateCode?>|<?=$qgetstateData->StateName?> </option>
																			<?php
																		}
																		?>
																		
																	</select>
																</div>
															</div>
														</div>
														<div class="col-12 col-sm-4 col-md-2 col-lg-3 col-xl-2 d-flex ">
															<div class="form-group">
																<label>GST TYPE 	 :</label>
															</div>
														</div>
														<div class="col-12 col-sm-8 col-md-10 col-lg-9 col-xl-10">
															<div class="form-group field">
																<div class="">
																	<select name="GsttypeID" id="GsttypeID"  style="width: 100%; height:36px;" class="select2 form-control custom-select customvalidation">
																		<option value=""> --Select -- </option>
																		<?php
																		foreach ($getgstTypeData as $qgetgstTypeData)
																		{
																			?>
																			<option <?php if($editpurchaseOrderBilldata['GsttypeID'] == $qgetgstTypeData->GsttypeID) {echo "selected";}?> value="<?=$qgetgstTypeData->GsttypeID?>"> <?=$qgetgstTypeData->GstTypeName?> </option>
																			<?php
																		}
																		?>
																		
																	</select>
																</div>
															</div>
														</div>
														

														<div class="col-12 col-sm-4 col-md-2 col-lg-3 col-xl-2 d-flex ">
															<div class="form-group">
																<label>AMT.  	 :</label>
															</div>
														</div>
														<div class="col-12 col-sm-8 col-md-10 col-lg-3 col-xl-10">
															<div class="form-group field">
																<div class="">
																	<input type="text"  name="GreyPAmt" id="GreyPAmt"  class="form-control greypurbillcalculate1 Amt12" value="<?=$editpurchaseOrderBilldata['GreyPAmt'];?>">
																</div>
															</div>
														</div>
														<div class="col-12 col-sm-4 col-md-2 col-lg-3 col-xl-2 d-flex ">
															<div class="form-group">
																<label>DTH. LESS 	 :</label>
															</div>
														</div>
														<div class="col-12 col-sm-8 col-md-10 col-lg-3 col-xl-10">
															<div class="form-group field">
																<div class="">
																	<input type="text"  name="GreyPAmtDthLess" id="GreyPAmtDthLess"  class="form-control greypurbillcalculate1" value="<?=$editpurchaseOrderBilldata['GreyPAmtDthLess'];?>">
																</div>
															</div>
														</div>
													</div>
												</div>
												<div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
													<div class="row">
														<div class="col-12 col-sm-4 col-md-2 col-lg-3 col-xl-2 d-flex ">
															<div class="form-group">
																<label>ADD AMT 	 :</label>
															</div>
														</div>
														<div class="col-12 col-sm-8 col-md-10 col-lg-3 col-xl-10">
															<div class="form-group field">
																<div class="">
																	<input type="text"  name="GreyPAddAmt" id="GreyPAddAmt"  class="form-control greypurbillcalculate1"value="<?=$editpurchaseOrderBilldata['GreyPAddAmt'];?>">
																</div>
															</div>
														</div>
														<div class="col-12 col-sm-4 col-md-2 col-lg-3 col-xl-2 d-flex ">
															<div class="form-group">
																<label>TEXABLE VALUE<span class="fored"></span> :</label>
															</div>
														</div>
														<div class="col-12 col-sm-8 col-md-10 col-lg-3 col-xl-10">
															<div class="form-group field">
																<div class="">
																	<input type="text"  name="GreyPTexableValue" id="GreyPTexableValue"  class="form-control greypurbillcalculate1 TexableValue12" value="<?=$editpurchaseOrderBilldata['GreyPTexableValue'];?>">
																</div>
															</div>
														</div>


														<div class="col-12 col-sm-4 col-md-2 col-lg-3 col-xl-2 d-flex ">
															<div class="form-group">
																<label>PARTY GSTIN  	 :</label>
															</div>
														</div>
														<div class="col-12 col-sm-8 col-md-10 col-lg-3 col-xl-10">
															<div class="form-group field">
																<div class="">
																	<input type="text"  name="GreyPPartyGstin" id="GreyPPartyGstin"  class="form-control EditPartyGstin" value="<?=$editpurchaseOrderBilldata['GreyPPartyGstin'];?>">
																</div>
															</div>
														</div>
														<div class="col-12 col-sm-4 col-md-2 col-lg-3 col-xl-2 d-flex ">
															<div class="form-group">
																<label>CGST/IGST %  	 :</label>
															</div>
														</div>
														<div class="col-12 col-sm-8 col-md-10 col-lg-3 col-xl-10">
															<div class="form-group field">
																<div class="">
																	<input type="text"  name="GreyPCgstIgst" id="GreyPCgstIgst"  class="form-control greypurbillcalculate1" value="<?=$editpurchaseOrderBilldata['GreyPCgstIgst'];?>">
																</div>
															</div>
														</div>

														<div class="col-12 col-sm-4 col-md-2 col-lg-3 col-xl-2 d-flex ">
															<div class="form-group">
																<label>GST AMT1 	 :</label>
															</div>
														</div>
														<div class="col-12 col-sm-8 col-md-10 col-lg-3 col-xl-10">
															<div class="form-group field">
																<div class="">
																	<input type="text"  name="GreyPGstAmt1" id="GreyPGstAmt1"  class="form-control greypurbillcalculate1" value="<?=$editpurchaseOrderBilldata['GreyPGstAmt1'];?>">
																</div>
															</div>
														</div>
														<div class="col-12 col-sm-4 col-md-2 col-lg-3 col-xl-2 d-flex ">
															<div class="form-group">
																<label>SGST % 	 :</label>
															</div>
														</div>
														<div class="col-12 col-sm-8 col-md-10 col-lg-3 col-xl-10">
															<div class="form-group field">
																<div class="">
																	<input type="text"  name="GreyPSgst" id="GreyPSgst"  class="form-control greypurbillcalculate1" value="<?=$editpurchaseOrderBilldata['GreyPSgst'];?>">
																</div>
															</div>
														</div>

														<div class="col-12 col-sm-4 col-md-2 col-lg-3 col-xl-2 d-flex ">
															<div class="form-group">
																<label>SGST AMT 	 :</label>
															</div>
														</div>
														<div class="col-12 col-sm-8 col-md-10 col-lg-3 col-xl-10">
															<div class="form-group field">
																<div class="">
																	<input type="text"  name="GreyPSgstAmt2" id="GreyPSgstAmt2" class="form-control greypurbillcalculate1" value="<?=$editpurchaseOrderBilldata['GreyPSgstAmt2'];?>">
																</div>
															</div>
														</div>
														<div class="col-12 col-sm-4 col-md-2 col-lg-3 col-xl-2 d-flex ">
															<div class="form-group">
																<label>BILL AMT 	 :</label>
															</div>
														</div>
														<div class="col-12 col-sm-8 col-md-10 col-lg-3 col-xl-10">
															<div class="form-group field">
																<div class="">
																	<input type="text"  name="GreyPBillAmt2" id="GreyPBillAmt2" class="form-control BillAmt greypurbillcalculate1" value="<?=$editpurchaseOrderBilldata['GreyPBillAmt2'];?>">
																</div>
															</div>
														</div>

													</div>
												</div>
											</div>	

										</div>

										<div class="formtitle">
											<h4 class="backcolor">ADD/LESS (PAYMET)</h4>
											<div class="row removemargin">
												<div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
													<div class="row">
														<div class="col-12 col-sm-4 col-md-2 col-lg-3 col-xl-2 d-flex ">
															<div class="form-group">
																<label>GROSS AMT.	 :</label>
															</div>
														</div>
														<div class="col-12 col-sm-8 col-md-10 col-lg-3 col-xl-10">
															<div class="form-group field">
																<div class="">
																	<input type="text"  name="GreyPGrossAmt3" id="GreyPGrossAmt3" class="form-control" value="<?=$editpurchaseOrderBilldata['GreyPGrossAmt3'];?>">
																</div>
															</div>
														</div>
														<div class="col-12 col-sm-4 col-md-2 col-lg-3 col-xl-2 d-flex">
															<div class="form-group">
																<label>ADD/LESS 	 :</label>
															</div>
														</div>
														<div class="col-12 col-sm-8 col-md-10 col-lg-3 col-xl-10">
															<div class="form-group field">
																<div class="">
																	<input type="text"  name="GreyPAddLess2" id="GreyPAddLess2" class="form-control" value="<?=$editpurchaseOrderBilldata['GreyPAddLess2'];?>"> 
																</div>
															</div>
														</div>
														<div class="col-12 col-sm-4 col-md-2 col-lg-3 col-xl-2 d-flex ">
															<div class="form-group">
																<label>BILL AMT 	 :</label>
															</div>
														</div>
														<div class="col-12 col-sm-8 col-md-10 col-lg-3 col-xl-10">
															<div class="form-group field">
																<div class="">
																	<input type="text"  name="GreyPBillAmt3" id="GreyPBillAmt3" class="form-control" value="<?=$editpurchaseOrderBilldata['GreyPBillAmt3'];?>">
																</div>
															</div>
														</div>
														<div class="col-12 col-sm-4 col-md-2 col-lg-3 col-xl-2 d-flex ">
															<div class="form-group">
																<label>ADD/LESS	 :</label>
															</div>
														</div>
														<div class="col-12 col-sm-8 col-md-10 col-lg-3 col-xl-10">
															<div class="form-group field">
																<div class="">
																	<input type="text"  name="GreyPAddLess3" id="GreyPAddLess3" class="form-control" value="<?=$editpurchaseOrderBilldata['GreyPAddLess3'];?>"> 
																</div>
															</div>
														</div>

														<div class="col-12 col-sm-4 col-md-2 col-lg-3 col-xl-2 d-flex ">
															<div class="form-group">
																<label>NET AMT.  	 :</label>
															</div>
														</div>
														<div class="col-12 col-sm-8 col-md-10 col-lg-3 col-xl-10">
															<div class="form-group field">
																<div class="">
																	<input type="text"  name="GreyPNetAmt2" id="GreyPNetAmt2" class="form-control" value="<?=$editpurchaseOrderBilldata['GreyPNetAmt2'];?>">
																</div>
															</div>
														</div>
														<div class="col-12 col-sm-4 col-md-2 col-lg-3 col-xl-2 d-flex ">
															<div class="form-group">
																<label>DISC % 	 :</label>
															</div>
														</div>
														<div class="col-12 col-sm-8 col-md-10 col-lg-3 col-xl-10">
															<div class="form-group field">
																<div class="">
																	<input type="text"  name="GreyPDisc2" id="GreyPDisc2" class="form-control" value="<?=$editpurchaseOrderBilldata['GreyPDisc2'];?>">
																</div>
															</div>
														</div>
													</div>
												</div>
												<div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
													<div class="row">
														<div class="col-12 col-sm-4 col-md-2 col-lg-3 col-xl-2 d-flex ">
															<div class="form-group">
																<label>AMT. 	 :</label>
															</div>
														</div>
														<div class="col-12 col-sm-8 col-md-10 col-lg-3 col-xl-10">
															<div class="form-group field">
																<div class="">
																	<input type="text"  name="GreyPAmt2" id="GreyPAmt2" class="form-control" value="<?=$editpurchaseOrderBilldata['GreyPAmt2'];?>">
																</div>
															</div>
														</div>
														<div class="col-12 col-sm-4 col-md-2 col-lg-3 col-xl-2 d-flex ">
															<div class="form-group">
																<label>OTH. LESS	 :</label>
															</div>
														</div>
														<div class="col-12 col-sm-8 col-md-10 col-lg-3 col-xl-10">
															<div class="form-group field">
																<div class="">
																	<input type="text"  name="GreyPOthLess" id="GreyPOthLess" class="form-control" value="<?=$editpurchaseOrderBilldata['GreyPOthLess'];?>">
																</div>
															</div>
														</div>


														<div class="col-12 col-sm-4 col-md-2 col-lg-3 col-xl-2 d-flex ">
															<div class="form-group">
																<label>ADD AMT 	 :</label>
															</div>
														</div>
														<div class="col-12 col-sm-8 col-md-10 col-lg-3 col-xl-10">
															<div class="form-group field">
																<div class="">
																	<input type="text"  name="GreyPAddAmt2" id="GreyPAddAmt2" class="form-control" value="<?=$editpurchaseOrderBilldata['GreyPAddAmt2'];?>">
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
													<a  href="<?php echo base_url()?>GreyPurchaseOrderBill" class="btn btn-info">
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
	

	var inside = $("#greypurchaseorderBillID").val();

	if(inside != "")
	{
	$("#home7").removeClass('active');
	$(".nav-link").removeClass('active');
	$(".foractive").addClass('active');
	$("#editform").addClass('active');
	}

	jQuery('#datepicker-autoclose').datepicker({
	        autoclose: true,
	        todayHighlight: true
	    });
jQuery('#GreyPPaidDate').datepicker({
	        autoclose: true,
	        todayHighlight: true
	    });
	jQuery('.datepicker-autoclose').datepicker({
	        autoclose: true,
	        todayHighlight: true
	    });

	var first = document.getElementById('GreyNoLots');
	var second = document.getElementById('GreyPcsPerLots');
	first.addEventListener("input", sum);
	second.addEventListener("input", sum);
	function sum() 
	{
		var one = parseFloat(first.value) || 0;
		var two = parseFloat(second.value) || 0;
		var add = (one * two);
		$("#GreyOrderPcs").val(add);

	}

$("#myTableData").on("focusout", ".MTSData", function () {
	var sum = 0;
    $(".MTSData").each(function () {

        if (!isNaN(this.value) && this.value.length != 0) {
            sum += parseFloat(this.value);
            
        }

    });
    //alert(sum);
    $("#GreyPDespatchMTS").val(sum);

    	var sum1 = 0;
    $(".TotalTakaDetails").each(function () {

        if (!isNaN(this.value) && this.value.length != 0) {
            sum1 += parseFloat(this.value);
            
        }

    });
    //alert(sum);
   // $("#GreyPRecTaka").val(sum1);
    $("#GreyPRecMts").val($("#GreyPDespatchMTS").val());
});


$("#myTable").on("focusout", ".MFGMtsData", function () {
	var sum = 0;
    $(".MFGMtsData").each(function () {

        if (!isNaN(this.value) && this.value.length != 0) {
            sum += parseFloat(this.value);
            
        }

    });
    //alert(sum);

    $("#TakaTotalMts").val(sum);
    // $(".MTSData").val(sum);
});




$(document).ready(function(){
        $('#GreyPOrderNo').on('change',function(){
        	//alert();
            var CompanyIDData = $("#CompanyIDData").val();
            var PartyGstinNo = $("#GreyPPartyGstin").val();
            var res = PartyGstinNo.substring(0, 2);
            //alert(CompanyIDData);
            $.ajax({
                type:'POST',
                url: base_url+'Transaction_controller/getcompanyGstType',
                data: { CompanyIDData: CompanyIDData, res: res},
                success:function(html){
                	if(html == 1)
					{
						$('#GsttypeID').val(4).trigger("change");
						$('.IGSTData').attr('style','display:none !important');
						$('.IGSTDataAmt').attr('style','display:none !important');
						$('.CGSTData').attr('style','display:block !important');
						$('.CGSTDataAmt').attr('style','display:block !important');
						$('.SGSTData').attr('style','display:block !important');
						$('.SGSTData1').attr('style','display:block !important');
						$('.SGSTAmt').attr('style','display:block !important');
						$('.SGSTAmt1').attr('style','display:block !important');
						$('#GreyPCgstIgst').val('2.50');
						$('#GreyPSgst').val('2.50');
					}
					else if(html == 0)
					{
						$('#GsttypeID').val(3).trigger("change");
						$('.CGSTData').attr('style','display:none !important');
						$('.SGSTData').attr('style','display:none !important');
						$('.SGSTData1').attr('style','display:none !important');
						$('.SGSTAmt').attr('style','display:none !important');
						$('.SGSTAmt1').attr('style','display:none !important');

						$('.IGSTData').attr('style','display:block !important');
						$('.CGSTDataAmt').attr('style','display:none !important');
						$('.IGSTDataAmt').attr('style','display:block !important');
						$('#GreyPCgstIgst').val('5.00');
					}	
                }
            }); 
        });
    });

</script>
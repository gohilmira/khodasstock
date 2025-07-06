
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
    	<!-- Add New AccountType Start -->
    	<div id="AddNewAccountTypemdl" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
		    <div class="modal-dialog">
		        <div class="modal-content">
		        	<form  action="" class="" method="post" name="AddAcTypemdl" id="AddAcTypemdl" novalidate>
			            <div class="modal-header">
			                <h4 class="modal-title">Account Type</h4>
			                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
			            </div>
			            <div class="modal-body">
			            	<input type="hidden" name="AcTypeID" id="AcTypeID" value="">
			               	<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<h5>Account Type</h5>
										<div class="controls">
											<input type="text" name="ACType" id="ACType" required="" class="form-control customvalidation"  value="" placeholder="Enter Account Type"> 
										</div>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group field">
										<h5>Trail Balance Side </h5>
										<div class="controls">
											<select name="ACTrialSide" id="ACTrialSide"  class="form-control">
												<option value=""> --Select Trail Balance Side-- </option>
												<option value="Credit"> Credit </option>
												<option value="Debit"> Debit </option>
											</select>
										<div class="help-block"></div></div>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<h5>Trail Position</h5>
										<div class="">
											<input type="text" name="ACTrialPos" id="ACTrialPos" class="form-control" placeholder="Enter Trail Position"> 
										</div>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group field">
										<h5>Balance Sheet </h5>
										<div class="">
											<select name="ACBalSheet" id="ACBalSheet"  class="form-control">
												<option value=""> --Select Balance Sheet-- </option>
												<option value="Yes"> Yes </option>
												<option value="No"> No </option>
											</select>
										<div class="help-block"></div></div>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group field">
										<h5>In P&L </h5>
										<div class="">
											<select name="ACPL" id="ACPL" class="form-control">
												<option value=""> --Select In P&L-- </option>
												<option value="Yes"> Yes </option>
												<option value="No"> No </option>
											</select>
										<div class="help-block"></div></div>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group field">
										<h5>In Tranding </h5>
										<div class="">
											<select name="ACTranding" id="ACTranding"  class="form-control">
												<option value=""> --Select In Tranding-- </option>
												<option value="Yes"> Yes </option>
												<option value="No"> No </option>
											</select>
										<div class="help-block"></div></div>
									</div>
								</div>
							</div>
			            </div>
			            <div class="modal-footer">
			                <button type="button" class="btn btn-default waves-effect mdlcloseAcType" data-dismiss="modal">Close</button>
			               	<button type="submit" class="btn btn-success">Submit</button>
			            </div>
		        </form>
		        </div>
		    </div>
		</div>
    	<!-- Add New AccountType End -->

    	<!-- Add Account Group Data Start -->
		<div id="AddNewAccountGroupmdl" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
		    <div class="modal-dialog modal-lg">
		        <div class="modal-content">
		            <div class="modal-header">
		                <h4 class="modal-title">Account Group Data</h4>
		                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
		            </div>
		            <div class="modal-body">
		            	<form class="" method="post" name="addaccountgrpmdlform" id="addaccountgrpmdlform" novalidate>
		            		<input type="hidden" value="" id="AcID" name="AcID">
							<div class="row common_master_form_div">
								<div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 ">
									<div class="formtitle">
										<h4 class="backcolor">ACCOUNT INFORMATION</h4>
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
																<input type="text" id="ACCode" name="ACCode" class="form-control" placeholder="Enter Code">
															</div>
														</div>
													</div>
													
													<div class="col-12 col-sm-4 col-md-2 col-lg-2 col-xl-2 d-flex ">
														<div class="form-group">
															<label>A/C TYPE  <span class="fored"><b>*</b></span> :</label>
														</div>
													</div>
													<div class="col-12 col-sm-8 col-md-10 col-lg-10 col-xl-10">
														<div class="form-group field">
															<div class="">
															<select name="ACTypeID" id="ACTypeID" required class="select2 form-control customvalidation custom-select" style="width: 100%">
																<option value=""> --Select Account Type-- </option>
																<?php
																foreach ($getAcctypeData as $qgetAcctypeData)
																{
																	?>
																	<option value="<?php echo $qgetAcctypeData->AcTypeID; ?>"> <?php echo $qgetAcctypeData->ACType; ?></option>
																	<?php
																}
																?>
															</select>
															</div>
														</div>
													</div>
													
													<div class="col-12 col-sm-4 col-md-2 col-lg-3 col-xl-2 d-flex ">
														<div class="form-group">
															<label>SHORT NAME :</label>
														</div>
													</div>
													<div class="col-12 col-sm-8 col-md-3 col-lg-9 col-xl-3">
														<div class="form-group field">
															<div class="">
																<input type="text" name="ACShortName" id="ACShortName" class="form-control" placeholder="Short Name"> 
															</div>
														</div>
													</div>
													
													<div class="col-12 col-sm-4 col-md-1 col-lg-3 col-xl-1 d-flex ">
														<div class="form-group">
															<label> NAME <span class="fored"><b>*</b></span> :</label>
														</div>
													</div>
													<div class="col-12 col-sm-8 col-md-6 col-lg-9 col-xl-6">
														<div class="form-group field">
															<div class="controls">
																<input type="text" name="ACName" class="form-control customvalidation" id="ACName" placeholder="Enter Name" required> 
															</div>
														</div>
													</div>
													 
													<div class="col-12 col-sm-4 col-md-2 col-lg-2 col-xl-2 d-flex">
														<div class="form-group">
															<label> DHARA :</label>
														</div>
													</div>
													<div class="col-12 col-sm-8 col-md-10 col-lg-6 col-xl-10">
														<div class="form-group field">
															<div class="">
																<input type="text"  name="ACDhara" id="ACDhara" placeholder="0.00" class="form-control"> 
															</div>
														</div>
													</div>
													
													<div class="col-12 col-sm-8 col-md-10 col-lg-4 col-xl-10">
														<div class="form-group field">
															<div class="">
																<input type="checkbox" value="1" id="isActive" name="isActive" > SELECTED
															</div>
														</div>
													</div>
													
													
													
												</div>
											</div>
											<div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
												<div class="row">
													
													
													<div class="col-12 col-sm-4 col-md-2 col-lg-2 col-xl-2 d-flex ">
														<div class="form-group">
															<label> COMM.% :</label>
														</div>
													</div>
													<div class="col-12 col-sm-8 col-md-10 col-lg-10 col-xl-10">
														<div class="form-group field">
															<div class="">
																<input type="text" name="ACcommper" id="ACcommper" class="form-control" placeholder="Enter COMM.%"> 
															</div>
														</div>
													</div>
													
													<div class="col-12 col-sm-4 col-md-2 col-lg-2 col-xl-2 d-flex ">
														<div class="form-group">
															<label> DR.INT.@ :</label>
														</div>
													</div>
													<div class="col-12 col-sm-8 col-md-10 col-lg-10 col-xl-10">
														<div class="form-group field">
															<div class="">
																<input type="text" name="ACDrInt" id="ACDrInt" class="form-control" placeholder="Enter DR.INT.@"> 
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
																<select name="BrokerID" id="BrokerID" class="Brokerselect form-control custom-select" style="width: 100%">
																	<option value=""> --Select Broker-- </option>
																	
																	<?php
																	foreach ($getBrokerData as $qgetBrokerData)
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
															<label>TRANSPORT :</label>
														</div>
													</div>
													<div class="col-12 col-sm-8 col-md-10 col-lg-9 col-xl-10">
														<div class="form-group field">
															<div class="">
																<select name="TransportID" id="TransportID" class="Transportselect form-control custom-select" style="width: 100%">
																	<option value=""> --Select Transport -- </option>
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
												</div>
											</div>
										</div>
									</div>
									<div class="formtitle">
										<h4 class="backcolor">ADDRESS INFORMATION</h4>
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
																<input type="text" name="ACAddress" id="ACAddress" class="form-control" placeholder="Enter Address"> 
															</div>
														</div>
													</div>
													<div class="col-12 col-sm-4 col-md-3 col-lg-4 col-xl-3 d-flex ">
														<div class="form-group">
															<label>ADDRESS (CON.) :</label>
														</div>
													</div>
													<div class="col-12 col-sm-8 col-md-9 col-lg-8 col-xl-9">
														<div class="form-group field">
															<div class="">
																<input type="text" name="ACAddress2" id="ACAddress2" class="form-control" placeholder="Enter Address Cont."> 
															</div>
														</div>
													</div>
													<div class="col-12 col-sm-4 col-md-3 col-lg-4 col-xl-3 d-flex ">
														<div class="form-group">
															<label>OTHER ADDRESS :</label>
														</div>
													</div>
													<div class="col-12 col-sm-8 col-md-9 col-lg-8 col-xl-9">
														<div class="form-group field">
															<div class="">
																<input type="text" name="AddressCon" id="AddressCon" class="form-control" placeholder="Enter Other Address"> 
															</div>
														</div>
													</div>
													<div class="col-12 col-sm-4 col-md-3 col-lg-4 col-xl-3 d-flex ">
														<div class="form-group">
															<label>OTHER ADDRESS CONT. :</label>
														</div>
													</div>
													<div class="col-12 col-sm-8 col-md-9 col-lg-8 col-xl-9">
														<div class="form-group field">
															<div class="">
																<input type="text" name="Oth_Address_Con" id="Oth_Address_Con" class="form-control" placeholder="Enter Other Address Cont."> 
															</div>
														</div>
													</div>
												</div>
											</div>
											<div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
												<div class="row">
													<div class="col-12 col-sm-4 col-md-2 col-lg-2 col-xl-2 d-flex ">
														<div class="form-group">
															<label>CITY :</label>
														</div>
													</div>
													<div class="col-12 col-sm-8 col-md-10 col-lg-10 col-xl-10">
														<div class="form-group field">
															<div class="">
																<select name="CityID" id="CityID" class="Cityselect form-control custom-select" style="width: 100%">
																	<option value=""> --Select City-- </option>
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
													<div class="col-12 col-sm-4 col-md-2 col-lg-2 col-xl-2 d-flex ">
														<div class="form-group">
															<label>STATE :</label>
														</div>
													</div>
													<div class="col-12 col-sm-8 col-md-10 col-lg-10 col-xl-10">
														<div class="form-group field">
															<div class="">
																<select name="StateID" id="StateID" class="StateSelect form-control custom-select" style="width: 100%">
																	<option value=""> --Select State-- </option>
																	<?php 
																	foreach($getStateData as $qgetStateData)
																	{
																	?>
																	<option value="<?php echo $qgetStateData->StateID; ?>"><?=$qgetstateData->stateName." (".$qgetstateData->StateCode.")" ?> </option>
																	<?php 
																	}
																	?>
																</select>
															</div>
														</div>
													</div>
													
													<div class="col-12 col-sm-4 col-md-2 col-lg-2 col-xl-2 d-flex">
														<div class="form-group">
															<label>EMAIL :</label>
														</div>
													</div>
													<div class="col-12 col-sm-8 col-md-10 col-lg-10 col-xl-10">
														<div class="form-group field">
															<div class="">
																<input type="text" name="ACEmail" id="ACEmail" class="form-control" placeholder="ENTER EMAIL" placeholder="Enter Email"> 
															</div>
														</div>
													</div>
													
													<div class="col-12 col-sm-4 col-md-2 col-lg-2 col-xl-2 d-flex ">
														<div class="form-group">
															<label>PIN :</label>
														</div>
													</div>
													<div class="col-12 col-sm-8 col-md-4 col-lg-4 col-xl-4">
														<div class="form-group field">
															<div class="">
																<input type="text" name="ACPin" id="ACPin" class="form-control" placeholder="Enter Pin"> 
															</div>
														</div>
													</div>
													
													<div class="col-12 col-sm-4 col-md-2 col-lg-2 col-xl-2 d-flex ">
														<div class="form-group">
															<label>STDCODE :</label>
														</div>
													</div>
													<div class="col-12 col-sm-8 col-md-4 col-lg-4 col-xl-4">
														<div class="form-group field">
															<div class="">
																<input type="text" name="ACStateCode" id="ACStateCode" class="form-control" placeholder="Enter Stdcode"> 
															</div>
														</div>
													</div>
													
													
												</div>
											</div>
										</div>
									</div>
									<div class="formtitle">
										<h4 class="backcolor">CONTACT INFORMATION</h4>
												<div class="row removemargin">
													<div class="col-12 col-sm-4 col-md-2 col-lg-4 col-xl-2 d-flex ">
														<div class="form-group">
															<label>CONTACT NAME :</label>
														</div>
													</div>
													<div class="col-12 col-sm-8 col-md-10 col-lg-8 col-xl-10">
														<div class="form-group field">
															<div class="">
																<input type="text" name="ACContactName" class="form-control" id="ACContactName" placeholder="Enter Name"> 
															</div>
														</div>
													</div>
													
													<div class="col-12 col-sm-4 col-md-2 col-lg-2 col-xl-2 d-flex ">
														<div class="form-group">
															<label>PHONE 1 :</label>
														</div>
													</div>
													<div class="col-12 col-sm-8 col-md-4 col-lg-4 col-xl-4">
														<div class="form-group field"  id="staticParent">
															<div class="">
																<input type="text" name="ACPhone1" id="ACPhone1" class="form-control" placeholder="Enter Phone 1"> 
															</div>
														</div>
													</div>
													
													<div class="col-12 col-sm-4 col-md-2 col-lg-2 col-xl-2 d-flex ">
														<div class="form-group">
															<label>PHONE 2 :</label>
														</div>
													</div>
													<div class="col-12 col-sm-8 col-md-4 col-lg-4 col-xl-4">
														<div class="form-group field" id="staticParent1">
															<div class="">
																<input type="text" name="ACPhone2" id="ACPhone2" maxlength="10" class="form-control" placeholder="Enter Phone 2"> 
															</div>
														</div>
													</div>
													
													<div class="col-12 col-sm-4 col-md-2 col-lg-2 col-xl-2 d-flex ">
														<div class="form-group">
															<label>FAX :</label>
														</div>
													</div>
													<div class="col-12 col-sm-8 col-md-4 col-lg-4 col-xl-4">
														<div class="form-group field">
															<div class="">
																<input type="text" name="ACFaxNo" id="ACFaxNo" class="form-control" placeholder="Enter Fax"> 
															</div>
														</div>
													</div>
													
													<div class="col-12 col-sm-4 col-md-2 col-lg-2 col-xl-2 d-flex ">
														<div class="form-group">
															<label>MOBILE :</label>
														</div>
													</div>
													<div class="col-12 col-sm-8 col-md-4 col-lg-4 col-xl-4">
														<div class="form-group field" id="staticParent2">
															<div class="">
																<input type="text"  name="ACMobileNo" id="ACMobileNo" class="form-control" placeholder="Enter Mobile"> 
															</div>
														</div>
													</div>
												</div>
									</div>
									<div class="row">
										<div class="form-group">
											<div class="text-xs-right" style="margin-left: 8px;">
												<button type="submit" class="btn btn-success">Submit</button>
												<button type="button" class="btn btn-default waves-effect mdlcloseAcGroupData" data-dismiss="modal">Close</button>
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
    	<!-- Add Account Group Data End -->
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
																	<select name="StationID" id="StationID1"  class="Stationselect form-control custom-select" style="width: 100%">
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
														<div class="form-group"  id="staticParent">
															<div class="controls">
																<input type="text" name="LPanNo" id="LPanNo" pattern="^([a-zA-Z]){5}([0-9]){4}([a-zA-Z]){1}?$" data-validation-pattern-message="Please enter valid PAN number. E.g. AAAAA9999A" class="form-control" placeholder="ENTER PAN NO"> 
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
														<div class="form-group" id="staticParent2">
															<div class="controls">
																<input type="text"  name="LGstin" id="LGstin"   class="form-control" placeholder="ENTER GSTIN / UIN" required> 
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
														<div class="form-group">
															<div class="controls">
																<input type="text" name="LGstNo" pattern="/^[0-9]{2}[A-Z]{5}[0-9]{4}[A-Z]{1}[1-9A-Z]{1}Z[0-9A-Z]{1}$/" data-validation-pattern-message="Please Enter Valid GST Number" id="LGstNo"  class="form-control" placeholder="ENTER DEBIT LIMIT"> 
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
    	<!-- Add Item MasterData Start -->
    	<div id="AddNewItemDetailrmdl" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
		    <div class="modal-dialog modal-lg">
		        <div class="modal-content">
		            <div class="modal-header">
		                <h4 class="modal-title">Item Details Data</h4>
		                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
		            </div>
		            <div class="modal-body">
		            	<form class="" method="post" name="addItemTypemdlForm" id="addItemTypemdlForm" novalidate>
		            		<input type="hidden" value="" id="ItemTypeID" name="ItemTypeID">
							<div class="row common_master_form_div">
								<div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 ">
									<div class="row">
									<div class="col-md-12">
										<div class="row">
											<div class="col-md-6">
												<div class="form-group">
													<h5>CLOTH TYPE :</h5>
													<div class="controls">
														<input type="text" name="ClothType" id="ClothType" class="form-control customvalidation" placeholder="Enter Cloth Type"  required> 
													</div>
												</div>
											</div>
											<div class="col-md-6">
												<div class="form-group">
													<h5>UNIT :</h5>
													<div class="">
														<input type="text" name="ItemUnit" id="ItemUnit" class="form-control" placeholder="Enter Unit"> 
													</div>
												</div>
											</div>
										</div>
										<div class="col-md-12">
											<div class="row">
												<div class="col-md-6">
													<div class="form-group">
														<h5>PACK COST :</h5>
														<div class="">
															<input type="text" name="ItemPackCost" id="ItemPackCost" class="form-control" placeholder="Pack Cost"> 
														</div>
													</div>
												</div>
												<div class="col-md-6">
													<div class="form-group">
														<h5>COST PER :</h5>
														<div class="controls">
															<input type="text" name="ItemCostPer" id="ItemCostPer" class="form-control" placeholder="Cost Per"> 
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="col-md-6"></div>
								</div>
									<div class="row">
										<div class="form-group">
											<div class="text-xs-right" style="margin-left: 8px;">
												<button type="submit" class="btn btn-success">Submit</button>
												<button type="button" class="btn btn-default waves-effect mdlcloseItemDetail" data-dismiss="modal">Close</button>
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
    	<!-- Add Item MasterData End -->
    	<!-- Add Screen Series Data Start -->
    	<div id="AddNewScreenSeriesmdl" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
		    <div class="modal-dialog modal-lg">
		        <div class="modal-content">
		            <div class="modal-header">
		                <h4 class="modal-title">Screen Brand Data</h4>
		                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
		            </div>
		            <div class="modal-body">
		            	<form class="" method="post" name="addScreenBrandForm" id="addScreenBrandForm" novalidate>
		            		<input type="hidden" value="" id="screenBrandID" name="screenBrandID">
							<div class="row common_master_form_div">
								<div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 ">
									<div class="row">
										<div class="col-md-6">
											<div class="form-group">
												<h5>BRAND NAME :</h5>
												<div class="controls">
													<input type="text" name="brandName" id="brandName" class="form-control customvalidation" placeholder="Enter Brand Name"  required> 
												</div>
											</div>
										</div>
										<div class="col-md-3">
											<div class="form-group">
												<h5>SHOW :</h5>
												<div class="">
													<input type="checkbox" value="1" name="ScreenShow"> 
												</div>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="form-group">
											<div class="text-xs-right" style="margin-left: 8px;">
												<button type="submit" class="btn btn-success">Submit</button>
												<button type="button" class="btn btn-default waves-effect mdlcloseScreenBrand" data-dismiss="modal">Close</button>
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
    	<!-- Add Screen Series Data End -->


    	<div class="row page-titles">
            <div class="col-md-5 align-self-center">
                <h4 class="text-themecolor">Ledger Manager</h4>
			</div>
            <div class="col-md-7 align-self-center text-right">
                <div class="d-flex justify-content-end align-items-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?=base_url();?>">Home</a></li>
                        <!-- <li class="breadcrumb-item"><a href="javascript:void(0)">Master</a></li> -->
                        <li class="breadcrumb-item active">Ledger</li>
                    </ol>
					<!-- <a href="javascript:fun_multipleDelete();" class="btn btn-info d-none d-lg-block m-l-15"><i class="fa fa-plus-circle"></i> All Delete</a> -->
                </div>
            </div>
        </div>
		<div class="row">
			<div class="card" style="width: 100%;">
				<div class="card-body p-b-0">
					<!-- Nav tabs -->
					<ul class="nav nav-tabs customtab2" role="tablist">
						<li class="nav-item"> <a class="nav-link active" data-toggle="tab" href="#home7" role="tab"><span class="hidden-sm-up"><i class="ti-home"></i></span> <span class="hidden-xs-down">Ledger List</span></a> </li>
						<li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#profile7" role="tab"><span class="hidden-sm-up"><i class="ti-user"></i></span> <span class="hidden-xs-down">Add Form</span></a> </li>
						<?php
						if(!empty($editLedgerdata))
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
                                                <th>Sr.No.</th>
                                                <th>Acc Type</th>
                                                <th>Code</th>
                                                <th>Name</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                           <?php
                                           $i=1;
                                           foreach ($GetledgerData as $qGetledgerData)
                                           {
                                           	?>
                                           	<tr>                                 
                                                <td><?php echo $i++; ?></td>
                                                <td><?php echo $qGetledgerData->ACType; ?></td>
                                                <td><?php echo $qGetledgerData->LCode; ?></td>
                                                <td><?php echo $qGetledgerData->LName; ?></td>
                                                
                                                <td class="editdelaction">
                                                  	<a href="<?=base_url();?>Ledger_controller?Ledgerid=<?=$qGetledgerData->Ledger_Id;?>" ><i class="fa fa-edit"></i></a>&nbsp;&nbsp;
                                                    <a href="javascript:deletedata('<?=$qGetledgerData->Ledger_Id;?>','ledgerdelete');"><i class="fa fa-trash-o"></i></a>
                                                </td>
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
							<form action="<?php echo site_url('Ledger_controller/saveledgerData1');?>" class="" method="post" name="addledgerform" id="addledgerform" novalidate>
								<?php
								if(empty($editLedgerdata))
								{
									?>
										<input type="hidden" value="" id="Ledger_Id1" name="Ledger_Id">
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
																<label>CODE :</label>
															</div>
														</div>
														<div class="col-12 col-sm-8 col-md-10 col-lg-10 col-xl-10">
															<div class="form-group ">
																<div class="">
																	<input type="text" name="LCode" id="LCode1" class="form-control LCode1" placeholder="ENTER CODE">
																</div>
															</div>
														</div>
														
														<div class="col-12 col-sm-4 col-md-2 col-lg-3 col-xl-2 d-flex ">
															<div class="form-group">
																<label>A/C TYPE :</label>
															</div>
														</div>
														<div class="col-2 col-sm-8 col-md-8 col-lg-8 col-xl-8">
															<div class="form-group field">
																<div class="controls">
																<select name="AcTypeID" id="AcTypeID1" required class="select2 form-control custom-select customvalidation" style="width: 100%">
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
														<div class="col-12 col-sm-2 col-md-2 col-lg-1 col-xl-2">
															<i data-toggle="modal" data-target="#AddNewAccountTypemdl" class="fa fa-plus-circle"></i>
														</div>
														
														<div class="col-12 col-sm-4 col-md-2 col-lg-3 col-xl-2 d-flex ">
															<div class="form-group">
																<label>A/C GROUP  :</label>
															</div>
														</div>
														<div class="col-12 col-sm-8 col-md-10 col-lg-8 col-xl-10">
															<div class="form-group field">
																<div class="">
																	<select name="AcGroupID" id="AcGroupIDData"  class="AcGroupselect form-control custom-select" style="width: 100%">
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
														<div class="col-12 col-sm-2 col-md-2 col-lg-1 col-xl-2">
															<i data-toggle="modal" data-target="#AddNewAccountGroupmdl" class="fa fa-plus-circle"></i>
														</div>

														<div class="col-12 col-sm-4 col-md-1 col-lg-2 col-xl-1 d-flex ">
															<div class="form-group">
																<label> NAME :</label>
															</div>
														</div>
														<div class="col-12 col-sm-8 col-md-6 col-lg-10 col-xl-6">
															<div class="form-group field">
																<div class="">
																	<input type="text" name="LName" class="form-control LName1" id="LName1" placeholder="ENTER NAME"> 
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
																<label>State :</label>
															</div>
														</div>
														<div class="col-12 col-sm-8 col-md-10 col-lg-9 col-xl-10">
															<div class="form-group field">
																<div class="">
																	<select name="StateID" id="StateID" class="StateDataselect form-control custom-select" style="width: 100%">
																		<option value=""> ---select---</option>
																		<?php 
																		foreach($getStateData as $qgetStateData)
																		{
																		?>
																		<option value="<?php echo $qgetStateData->StateID; ?>"> <?=$qgetStateData->StateName." (".$qgetStateData->StateCode.")" ?> </option>
																		<?php 
																		}
																		?>
																	</select> 
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
														<div class="col-12 col-sm-8 col-md-10 col-lg-8 col-xl-10">
															<div class="form-group field">
																<div class="">
																	<select name="StationID" id="StationIDData"  class="Stationselect form-control custom-select" style="width: 100%">
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
																	<select name="TransportID" id="TransportIDData"  class="form-control Transportselect form-control custom-select" style="width: 100%">
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
														<div class="col-12 col-sm-2 col-md-2 col-lg-1 col-xl-2">
															<i data-toggle="modal" data-target="#AddNewTransportmdl" class="fa fa-plus-circle"></i>
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
														 <div class="col-12 col-sm-2 col-md-2 col-lg-1 col-xl-2">
															<i data-toggle="modal" data-target="#AddNewBrokermdl" class="fa fa-plus-circle"></i>
														</div> 

														<div class="col-12 col-sm-4 col-md-2 col-lg-3 col-xl-2 d-flex ">
															<div class="form-group">
																<label>ITEM :</label>
															</div>
														</div>
														<div class="col-12 col-sm-8 col-md-10 col-lg-8 col-xl-10">
															<div class="form-group field">
																<div class="">
																	<select name="ItemID" id="ItemID1"  class="Itemselect form-control custom-select" style="width: 100%">
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
														<div class="col-12 col-sm-2 col-md-2 col-lg-1 col-xl-2">
															<i data-toggle="modal" data-target="#AddNewItemDetailrmdl" class="fa fa-plus-circle"></i>
														</div>

														<div class="col-12 col-sm-4 col-md-2 col-lg-3 col-xl-2 d-flex ">
															<div class="form-group">
																<label>SERIES :</label>
															</div>
														</div>
														<div class="col-12 col-sm-8 col-md-10 col-lg-8 col-xl-10">
															<div class="form-group field">
																<div class="controls">
																<select name="SeriesID" id="SeriesIDData"  class="Seriesselect form-control custom-select" style="width: 100%">
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
															<div class="form-group">
																<div class="controls">
																	<input type="text" name="LPanNo" id="LPanNo" pattern="^([a-zA-Z]){5}([0-9]){4}([a-zA-Z]){1}?$" data-validation-pattern-message="Please enter valid PAN number. E.g. AAAAA9999A" class="form-control" placeholder="ENTER PAN NO"> 
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
															<div class="form-group" id="staticParent2">
																<div class="controls">
																	<input type="text"  name="LGstin" id="LGstin"  
																	class="form-control" placeholder="ENTER GSTIN / UIN"> 
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
														<div class="col-12 col-sm-4 col-md-2 col-lg-3 col-xl-2 d-flex ">
															<div class="form-group">
																<label>HSN CODE	:</label>
															</div>
														</div>
														<div class="col-12 col-sm-8 col-md-4 col-lg-9 col-xl-4">
															<div class="form-group field" id="staticParent2">
																<div class="">
																	<input type="text"  name="LHsnCode" id="LHsnCode" class="form-control" placeholder="ENTER HSN CODE"  > 
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
															<div class="form-group">
																<div class="controls">
																	<input type="text" name="LGstNo" pattern="/^[0-9]{2}[A-Z]{5}[0-9]{4}[A-Z]{1}[1-9A-Z]{1}Z[0-9A-Z]{1}$/" data-validation-pattern-message="Please Enter Valid GST Number" id="LGstNo"  class="form-control" placeholder="ENTER DEBIT LIMIT"> 
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
																<label>INSURANCE POLICT DETAILS :</label>
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
													<a  href="<?php echo base_url()?>Ledger_controller" class="btn btn-info">
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
						if(!empty($editLedgerdata))
						{
						?>
						<!-- <input type="hidden" value="inside" id="inside"> -->

						<div class="tab-pane  p-20" id="editform" role="tabpanel">
							<form class="" method="post" name="Editledgerform" id="Editledgerform" novalidate>
								<input type="hidden" value="<?=$editLedgerdata['Ledger_Id'];?>" id="Ledger_Id1" name="Ledger_Id">
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
																	<input type="text" name="LCode" id="LCode" value="<?=$editLedgerdata['LCode'];?>" class="form-control" placeholder="ENTER CODE">
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
																<select name="AcTypeID" id="AcTypeID1" required class="select2 form-control customvalidation custom-select" style="width: 100%">
																	<option value="">--Select-- </option>
																	<?php
																	foreach ($getAcctypeData as $qgetAcctypeData)
																	{
																		?>
																			<option <?php if($editLedgerdata['AcTypeID'] == $qgetAcctypeData->AcTypeID){echo "selected";}?> value="<?=$qgetAcctypeData->AcTypeID ?>"> <?=$qgetAcctypeData->ACType?> </option>
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
																			<option <?php if($editLedgerdata['AcGroupID'] == $qgetAccountData->AcID){echo "selected";}?> value="<?=$qgetAccountData->AcID ?>"> <?=$qgetAccountData->ACName?> </option>
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
																<div class="">
																	<input type="LName" name="LName" value="<?=$editLedgerdata['LName'];?>" class="form-control" id="Name" placeholder="ENTER NAME"> 
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
																	<input type="text"  name="LDhara" id="LDhara" value="<?=$editLedgerdata['LDhara'];?>" placeholder="0.00" class="form-control"> 
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
																	<input type="text"  name="LPureDhara" id="LPureDhara" value="<?=$editLedgerdata['LPureDhara'];?>"  placeholder="0.00" class="form-control"> 
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
																	<input type="text" name="LGraceDays" id="LGraceDays" value="<?=$editLedgerdata['LGraceDays'];?>" class="form-control" placeholder="0"> 
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
																		<option <?php if($editLedgerdata['LRankList'] == "Rank List 1"){echo "selected";}?> value="Rank List 1"> Rank List 1 </option>
																		<option <?php if($editLedgerdata['LRankList'] == "Rank List 2"){echo "selected";}?> value="Rank List 2"> Rank List 2 </option>
																		<option <?php if($editLedgerdata['LRankList'] == "Rank List 3"){echo "selected";}?> value="Rank List 3"> Rank List 3 </option>
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
																	<input type="text" name="LBankChrg" id="LBankChrg" value="<?=$editLedgerdata['LBankChrg'];?>" class="form-control" placeholder="0.00%"> 
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
																	<input type="text" name="LTds" id="LTds" value="<?=$editLedgerdata['LTds'];?>" class="form-control" placeholder="0.00">
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
																	<input type="text" name="LItRate" id="LItRate" value="<?=$editLedgerdata['LItRate'];?>" class="form-control" placeholder="0.00"> 
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
																	<input type="text" name="LAddress" id="LAddress" value="<?=$editLedgerdata['LAddress'];?>" class="form-control" placeholder="ENTER ADDRESS"> 
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
																	<input type="text" name="LAddressLine2" id="LAddressLine2" value="<?=$editLedgerdata['LAddressLine2'];?>" class="form-control" placeholder="ADDRESS LINE TWO"> 
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
																	<input type="text" name="LOtherAddress" id="LOtherAddress" value="<?=$editLedgerdata['LOtherAddress'];?>" class="form-control" placeholder="OTHER ADDRESS"> 
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
																	<input type="text" name="LOtherLine2" id="LOtherLine2" value="<?=$editLedgerdata['LOtherLine2'];?>" class="form-control" placeholder="OTHER ADDRESS LINE2"> 
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
																			<option <?php if($editLedgerdata['CityID'] == $qgetCityData->CityID){echo "selected";}?> value="<?=$qgetCityData->CityID ?>"> <?=$qgetCityData->CityName?> </option>
																		<?php 
																		}
																		?>
																	</select>
																</div>
															</div>
														</div>
														<div class="col-12 col-sm-4 col-md-2 col-lg-3 col-xl-2 d-flex ">
															<div class="form-group">
																<label>State :</label>
															</div>
														</div>
														<div class="col-12 col-sm-8 col-md-10 col-lg-9 col-xl-10">
															<div class="form-group field">
																<div class="">
																	<select name="StateID" id="StateID" class="StateDataselect form-control custom-select" style="width: 100%">
																		<option value=""> --Select -- </option>
																		<?php 
																		foreach($getStateData as $qgetStateData)
																		{
																		?>
																		?>
																			<option <?php if($editLedgerdata['StateID'] == $qgetStateData->StateID){echo "selected";}?> value="<?=$qgetStateData->StateID ?>"><?php echo $qgetStateData->StateCode; ?>| <?=$qgetStateData->StateName?> </option>

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
																	<input type="text" name="LPin" id="LPin" value="<?=$editLedgerdata['LPin'];?>" class="form-control" placeholder="PIN"> 
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
																	<input type="text" name="LDistance" id="LDistance" value="<?=$editLedgerdata['LDistance'];?>" class="form-control" placeholder="DISTANCE"> 
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
																	<select name="StationID" id="StationID1"  class="Stationselect form-control custom-select" style="width: 100%">
																	<option value=""> --Select -- </option>
																	<?php 
																	foreach($getStationData as $qgetStationData)
																	{
																	?>
<option <?php if($editLedgerdata['StationID'] == $qgetStationData->StationID){echo "selected";}?> value="<?=$qgetStationData->StationID ?>"> <?=$qgetStationData->StationName?> </option>
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
<option <?php if($editLedgerdata['TransportID'] == $qgetTransportData->TransportID){echo "selected";}?> value="<?=$qgetTransportData->TransportID ?>"> <?=$qgetTransportData->TransportName?> </option>
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
																	<select name="BrokerID" id="BrokerID1" class="Brokerselect form-control custom-select" style="width: 100%">
																		<option value=""> --Select -- </option>
																		<?php 
																		foreach($getBrokerData as $qgetBrokerData)
																		{
																		?>
<option <?php if($editLedgerdata['BrokerID'] == $qgetBrokerData->Ledger_Id){echo "selected";}?> value="<?=$qgetBrokerData->Ledger_Id ?>"> <?=$qgetBrokerData->LName?> </option>
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
																	<select name="ItemID" id="ItemID1"  class="Itemselect form-control custom-select" style="width: 100%">
																		<option value=""> --Select -- </option>
																		<?php 
																		foreach($getItemTypeData as $qgetItemTypeData)
																		{
																		?>
<option <?php if($editLedgerdata['ItemID'] == $qgetItemTypeData->ItemTypeID){echo "selected";}?> value="<?=$qgetItemTypeData->ItemTypeID ?>"> <?=$qgetItemTypeData->ClothType?> </option>
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
																<select name="SeriesID" id="SeriesID1"  class="Seriesselect form-control custom-select" style="width: 100%">
																	<option value=""> --Select -- </option>
																	<?php 
																	foreach($LabelData as $qLabelData)
																	{
																	?>
<option <?php if($editLedgerdata['SeriesID'] == $qLabelData->screenBrandID){echo "selected";}?> value="<?=$qLabelData->screenBrandID ?>"> <?=$qLabelData->brandName?> </option>
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
																	<input type="text" name="LContactPerson" id="LContactPerson" value="<?=$editLedgerdata['LContactPerson'];?>" class="form-control" placeholder="ENTER NAME"> 
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
																	<input type="text" name="LMobile" id="LMobile" value="<?=$editLedgerdata['LMobile'];?>" class="form-control" placeholder="9898989695" maxlength="10"> 
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
																	<input type="text" name="LRemark" id="LRemark" value="<?=$editLedgerdata['LRemark'];?>" class="form-control" placeholder="ENTER REMARK"> 
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
																	<input type="text" name="LPhone1" id="LPhone1" value="<?=$editLedgerdata['LPhone1'];?>"  class="form-control" placeholder="ENTER PHONE 1"> 
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
																	<input type="text" name="LPhone2" id="LPhone2" value="<?=$editLedgerdata['LPhone2'];?>"  class="form-control" placeholder="ENTER PHONE 2"> 
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
																	<input type="text" name="LEmailID" id="LEmailID" value="<?=$editLedgerdata['LEmailID'];?>" class="form-control" placeholder="ENTER EMAIL ID"> 
																</div>
															</div>
														</div>
														
														<div class="col-12 col-sm-4 col-md-2 col-lg-3 col-xl-2 d-flex ">
															<div class="form-group">
																<label>PAN NO. :</label>
															</div>
														</div>
														<div class="col-12 col-sm-8 col-md-4 col-lg-9 col-xl-4">
															<div class="form-group"  id="staticParent">
																<div class="controls">
																	<input type="text" name="LPanNo" id="LPanNo" pattern="^([a-zA-Z]){5}([0-9]){4}([a-zA-Z]){1}?$" data-validation-pattern-message="Please enter valid PAN number. E.g. AAAAA9999A" value="<?=$editLedgerdata['LPanNo'];?>" class="form-control" placeholder="ENTER PAN NO"> 
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
																		<option <?php if($editLedgerdata['LedgerType'] == "Proprietors"){echo "selected";}?> value="Proprietors">Proprietors</option>
																		<option <?php if($editLedgerdata['LedgerType'] == "Individual"){echo "selected";}?> value="Individual">Individual</option>
																		<option <?php if($editLedgerdata['LedgerType'] == "Proprietors"){echo "selected";}?> value="Proprietors">Proprietors</option>
																		<option <?php if($editLedgerdata['LedgerType'] == "Proprietorshipship"){echo "selected";}?> value="Proprietorshipship">Proprietorshipship (Non Audited)</option>
																		<option <?php if($editLedgerdata['LedgerType'] == "Partnership"){echo "selected";}?> value="Partnership">Partnership</option>
																		<option <?php if($editLedgerdata['LedgerType'] == "pvtltdco"){echo "selected";}?> value="pvtltdco">PVT. LTD. CO.</option>
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
															<div class="form-group" id="staticParent2">
																<div class="controls">
																	<input type="text"  name="LGstin" id="LGstin"  value="<?=$editLedgerdata['LGstin'];?>" class="form-control" placeholder="ENTER GSTIN / UIN"  > 
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
															<div class="form-group">
																<div class="controls">
																	<input type="text" name="LGstNo" pattern="/^[0-9]{2}[A-Z]{5}[0-9]{4}[A-Z]{1}[1-9A-Z]{1}Z[0-9A-Z]{1}$/" data-validation-pattern-message="Please Enter Valid GST Number" id="LGstNo" value="<?=$editLedgerdata['LGstNo'];?>"  class="form-control" placeholder="ENTER DEBIT LIMIT"> 
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
																	<input type="text" name="LCstNo" id="LCstNo" value="<?=$editLedgerdata['LCstNo'];?>" class="form-control" placeholder="Enter CST No"> 
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
																	<input type="text" name="LExciseReg" id="LExciseReg" value="<?=$editLedgerdata['LExciseReg'];?>" class="form-control" placeholder="ENTER LIMIT DAYS">
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
																	<input type="text" name="LSaleIncent" id="LSaleIncent" value="<?=$editLedgerdata['LSaleIncent'];?>" class="form-control" placeholder="Enter Limit Days">
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
																	<input type="text" name="LDebitLimit" id="LDebitLimit" value="<?=$editLedgerdata['LDebitLimit'];?>" class="form-control" placeholder="Enter Debit Limit"> 
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
																	<input type="text" name="LLimitDays" id="LLimitDays" value="<?=$editLedgerdata['LLimitDays'];?>" class="form-control" placeholder="Enter Limit Days"> 
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
																	<input type="text" name="LBankAcNo" id="LBankAcNo" value="<?=$editLedgerdata['LBankAcNo'];?>" class="form-control" placeholder="Enter BANK AC NO.">
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
																	<input type="text" name="LBankName" id="LBankName" value="<?=$editLedgerdata['LBankName'];?>" class="form-control" placeholder="ENTER BANK NAME">
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
																	<option <?php if($editLedgerdata['LPartyGrade'] == "A"){echo "selected";}?> value="A"> A </option>
																	<option <?php if($editLedgerdata['LPartyGrade'] == "B"){echo "selected";}?> value="B"> B </option>
																	<option <?php if($editLedgerdata['LPartyGrade'] == "C"){echo "selected";}?> value="C"> C </option>
																	<option <?php if($editLedgerdata['LPartyGrade'] == "D"){echo "selected";}?> value="D"> D </option>
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
																	<input type="text" name="LIfscCode" id="LIfscCode" value="<?=$editLedgerdata['LIfscCode'];?>" class="form-control" placeholder="IFSC CODE">
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
																	<input type="text" name="LInsurancePolicy" id="LInsurancePolicy" value="<?=$editLedgerdata['LInsurancePolicy'];?>"  class="form-control" placeholder="INSURANCE POLICT DETAILS">
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
																	<input type="text" name="LLowerTdsAmtLmt" id="LLowerTdsAmtLmt" value="<?=$editLedgerdata['LLowerTdsAmtLmt'];?>" class="form-control" placeholder="LOWER TDS JOB AMOUNT LIMIT">
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
													<a  href="<?php echo base_url()?>Ledger_controller" class="btn btn-info">
							                            Cancel
							                        </a>
												</div>
											</div>
										</div>
								
									</div>	
								</div>
							</form>
						</div>
					<?php } ?>
					</div>
				</div>
			</div>
		</div>
    </div>
</div>
 <?php $this->load->view('common/footer'); ?>
<script>
	
	$("body").delegate(".LName1", "keydown", function(){
	    var firstname,lastname;
	    var name=this.value.split(" ");
	    var firstname=name[0];
	    var lastname=name[1];

	    if(lastname == undefined)
	    {
	        firstshortname = firstname.charAt(0);
	        $(".LCode1").val(firstshortname);
	    }
	    else
	    {
	        firstshortname = firstname.charAt(0);
	        secondshortname = lastname.charAt(0);
	        $(".LCode1").val(firstshortname.toUpperCase()+''+secondshortname.toUpperCase());
	    }
	});
	$("body").delegate("#ACName", "keydown", function(){
	    var firstname,lastname;
	    var name=this.value.split(" ");
	    var firstname=name[0];
	    var lastname=name[1];

	    if(lastname == undefined)
	    {
	        firstshortname = firstname.charAt(0);
	        $("#ACCode").val(firstshortname);
	    }
	    else
	    {
	        firstshortname = firstname.charAt(0);
	        secondshortname = lastname.charAt(0);
	        $("#ACCode").val(firstshortname.toUpperCase()+''+secondshortname.toUpperCase());
	    }
	});
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
	$(".Transportselect").select2();
	$(".Brokerselect").select2();
	$(".Itemselect").select2();
	$(".Seriesselect").select2();
	$(".StateSelect").select2();
	$(".StateDataselect").select2();
	var inside = $("#Ledger_Id1").val();
	if(inside != "")
	{
	$("#home7").removeClass('active');
	$(".nav-link").removeClass('active');
	$(".foractive").addClass('active');
	$("#editform").addClass('active');
	}
</script>
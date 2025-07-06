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
				<h4 class="text-themecolor">Haste List Master</h4>
			</div>
			<div class="col-md-7 align-self-center text-right">
				<div class="d-flex justify-content-end align-items-center">
					<ol class="breadcrumb">
						<li class="breadcrumb-item"><a href="<?=base_url();?>">Home</a></li>
						<li class="breadcrumb-item active">Haste List Master</li>
					</ol>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="card" style="width: 100%;">
				<div class="card-body p-b-0">
					<!-- Nav tabs -->
					<ul class="nav nav-tabs customtab2" role="tablist">
						<li class="nav-item"> <a class="nav-link active" data-toggle="tab" href="#home7" role="tab"><span class="hidden-sm-up"><i class="ti-home"></i></span> <span class="hidden-xs-down">Haste List</span></a> </li>
						<li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#profile7" role="tab"><span class="hidden-sm-up"><i class="ti-user"></i></span> <span class="hidden-xs-down">Add Form</span></a> </li>
						<?php
						if(!empty($edithastedata))
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
							                    <th>Haste Name</th>
							                    <th>Adatiya Name</th>
							                    <th>Contact</th>
							                    <th>Mobile</th>
							                </tr>
							            </thead>
							            <tbody>
							            	<?php
							            	$i=1;
							            	foreach ($GetHastedata as $qGetHastedata)
							            	{
							            	?>
							            	<tr>
							            		<td class="editdelaction">
							                        <a href="<?=base_url();?>Hastelist_controller?hasteid=<?=$qGetHastedata->HasteID;?>" ><i class="fa fa-edit"></i></a>&nbsp;&nbsp;
							                        
							                        <a href="javascript:deletedata('<?=$qGetHastedata->HasteID;?>','hastedelete');"><i class="fa fa-trash-o"></i></a>
							                    </td>
							            		<td><?php echo $i++; ?></td>
							                    <td><?=$qGetHastedata->HasteName;?></td>
							                    <td><?=$qGetHastedata->AdatiyaName;?></td>
							                    <td><?=$qGetHastedata->HasteContact;?></td>
							                    <td><?=$qGetHastedata->HasteMobile;?></td>
							                    
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
							<form action="" class="" method="post" name="addhasteform" id="addhasteform" novalidate>
								<?php
								if(empty($edithastedata))
								{
									?>
										<input type="hidden" value="" id="HasteID" name="HasteID">
									<?php
								}
								?>
								<div class="row common_master_form_div">
								<div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 ">						<div class="formtitle">
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
																<!-- <div class="">
																	<select name="AdatiyaName" id="AdatiyaName" class="form-control Adatiyaselect custom-select" style="width: 100%">
																		<option value=""> -- Select -- </option>
																		<?php
																		//foreach ($GetAadtiyaList as $qGetAadtiyaList)
																		{
																			?>
																			<option value="<?=$qGetAadtiyaList->AdatiyaName;?>"><?=$qGetAadtiyaList->AdatiyaName;?></option>
																			<?php
																		}
																		?>
																	</select>
																</div> -->
																<div class="controls">
																	<input type="text"  name="AdatiyaName" id="AdatiyaName" placeholder="ENTER ADATIYA" required="" class="form-control customvalidation"> 
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
																	<select name="StationID" id="StationID1"  class="Stationselect form-control custom-select" style="width: 100%">
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
															<div class="form-group">
																<div class="controls">
																	<input type="text" id="HasteGstIn" name="HasteGstIn"  pattern="/^[0-9]{2}[A-Z]{5}[0-9]{4}[A-Z]{1}[1-9A-Z]{1}Z[0-9A-Z]{1}$/" data-validation-pattern-message="Please Enter Valid GST Number"  placeholder="ENTER GSTIN" class="form-control"> 
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
													<a  href="<?php echo base_url()?>Hastelist_controller" class="btn btn-info">
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
						if(!empty($edithastedata))
						{
						?>
						<div class="tab-pane  p-20" id="editform" role="tabpanel">
							<form class="" method="post" name="edithasteform" id="edithasteform" novalidate>
								<input type="hidden" value="<?=$edithastedata['HasteID'];?>" id="HasteID" name="HasteID">
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
																<option value=""> --Select -- </option>
																<?php
																foreach ($GetAadtiyaList as $qGetAadtiyaList)
																{
																	?>
																	<option <?php if($edithastedata['AdatiyaName'] == $qGetAadtiyaList->AdatiyaName){echo "selected";}?> value="<?=$qGetAadtiyaList->AdatiyaName ?>"> <?=$qGetAadtiyaList->AdatiyaName?> </option>
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
															<input type="text"  name="HasteName" id="HasteName" value="<?=$edithastedata['HasteName'];?>" placeholder="ENTER HASTE" class="form-control customvalidation"> 
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
															<select name="TransportID" id="TransportID" class="form-control Transportselect custom-select" style="width: 100%">
																<option value=""> --Select -- </option>
																<?php
																foreach ($getTransportData as $qgetTransportData)
																{
																	?>
																	<option <?php if($edithastedata['TransportID'] == $qgetTransportData->TransportID){echo "selected";}?> value="<?=$qgetTransportData->TransportID ?>"> <?=$qgetTransportData->TransportName?> </option>
																	<?php
																}
																?>
																
															</select>
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
															<select name="StationID" id="StationID" class="form-control Stationselect custom-select" style="width: 100%">
																<option value=""> --Select -- </option>
																<?php
																foreach ($getStationData as $qgetStationData)
																{
																	?>
																	<option <?php if($edithastedata['StationID'] == $qgetStationData->StationID){echo "selected";}?> value="<?=$qgetStationData->StationID ?>"> <?=$qgetStationData->StationName?> </option>
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
														<label>SCREEN SERIES :</label>
													</div>
												</div>
												<div class="col-12 col-sm-8 col-md-10 col-lg-8 col-xl-10">
													<div class="form-group field">
														<div class="">
															<select name="ScreenSeriesID" id="ScreenSeriesID" class="form-control Seriesselect custom-select" style="width: 100%">
																<option value=""> --Select -- </option>
																	<?php 
																	foreach($LabelData as $qLabelData)
																	{
																	?>
<option <?php if($edithastedata['ScreenSeriesID'] == $qLabelData->screenBrandID){echo "selected";}?> value="<?=$qLabelData->screenBrandID ?>"> <?=$qLabelData->brandName?> </option>
																	<?php 
																	}
																	?>
															</select>
														</div>
													</div>
												</div>
												<div class="col-12 col-sm-4 col-md-2 col-lg-2 col-xl-2 d-flex">
													<div class="form-group">
														<label>GSTIN :</label>
													</div>
												</div>
												<div class="col-12 col-sm-8 col-md-10 col-lg-10 col-xl-10">
													<div class="form-group">
														<div class="controls">
															<input type="text" id="HasteGstIn" name="HasteGstIn"   pattern="/^[0-9]{2}[A-Z]{5}[0-9]{4}[A-Z]{1}[1-9A-Z]{1}Z[0-9A-Z]{1}$/" data-validation-pattern-message="Please Enter Valid GST Number" value="<?=$edithastedata['HasteGstIn'];?>" placeholder="ENTER GSTIN" class="form-control"> 
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
															<input type="text"  name="HasteAddress1" id="HasteAddress1" value="<?=$edithastedata['HasteAddress1'];?>" placeholder="ENTER ADDRESS 1" class="form-control"> 
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
															<input type="text"  name="HasteAddress2" id="HasteAddress2" value="<?=$edithastedata['HasteAddress2'];?>" placeholder="ENTER ADDRESS 2" class="form-control">
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
															<input type="text" id="HasteRemark" name="HasteRemark" value="<?=$edithastedata['HasteRemark'];?>" placeholder="ENTER REMARK" class="form-control"> 
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
															<input type="text" name="HasteContact" id="HasteContact" value="<?=$edithastedata['HasteContact'];?>" class="form-control" placeholder="ENTER CONTACT"> 
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
															<input type="text" name="HasteMobile" id="HasteMobile" value="<?=$edithastedata['HasteMobile'];?>" maxlength="10" class="form-control" placeholder="ENTER MOBILE"> 
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
															<input type="text" id="HasteEmailID" name="HasteEmailID" value="<?=$edithastedata['HasteEmailID'];?>" class="form-control" placeholder="ENTER EMAIL ID"> 
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
															<input type="text" name="HastePhone1"  id="HastePhone1" value="<?=$edithastedata['HastePhone1'];?>"  class="form-control" placeholder="ENTER PHONE 1"> 
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
															<input type="text" name="HastePhone2" id="HastePhone2" value="<?=$edithastedata['HastePhone2'];?>" maxlength="10" class="form-control" placeholder="ENTER PHONE 2"> 
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
															<input type="text" name="HasteFax" id="HasteFax" class="form-control" value="<?=$edithastedata['HasteFax'];?>" placeholder="ENTER FAX"> 
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
													<a  href="<?php echo base_url()?>Hastelist_controller" class="btn btn-info">
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

	$(".Adatiyaselect").select2();
	$(".Transportselect").select2();
	$(".Stationselect").select2();
	$(".Seriesselect").select2();


	var inside = $("#HasteID").val();
	if(inside != "")
	{
		$("#home7").removeClass('active');
		$(".nav-link").removeClass('active');
		$(".foractive").addClass('active');
		$("#editform").addClass('active');
	}
</script>

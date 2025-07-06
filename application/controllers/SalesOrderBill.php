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
	select.form-control:not([size]):not([multiple]) {
	height: calc(1.0625rem + 2px);
	}
</style>

<div class="page-wrapper">
	<div class="container-fluid">

		<!-- start by milan 2/22/19  -->

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

		<!-- Remark Start -->
		<div id="responsive-modalRemark" class="modal fade"   role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		    <div class="modal-dialog modal-lg">
		        <div class="modal-content">
		            <div class="modal-header">
		                <h4 class="modal-title">Remark Data</h4>
		                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
		            </div>
		            <div class="modal-body">
						<form action="" method="post" class="" method="post" name="addremarkModal" id="addremarkModal" novalidate>
							<input type="hidden" name="remarkid" id="remarkid" value="">
							<div class="row">
								<div class="col-md-12">
									<div class="row">
										<div class="col-md-12">
											<div class="form-group">
												<h5>Remark </h5>
												<div class="controls">
													<input type="text" name="remarkname" id="remarkname" required="" class="form-control customvalidation" placeholder="Enter Remark" placeholder="Enter Remark"> 
												</div>
											</div>
										</div>

										<div class="col-md-12">
											<div class="form-group">
												<h5>Remark Type </h5>
												<div class="">
													<select name="rematktype" id="rematktype" style="width: 100%; height:36px;" class="select2 form-control custom-select"  aria-invalid="false">
														<option value=""> --Select Remark Type-- </option>
														<option value="Accountant">Accountant</option>
														<option value="Transaction">Transaction</option>
													</select>
											</div>
										</div>
										
										<div class="col-md-12">
											<div class="form-group" >
												  <input type="checkbox" value="1" name="isActive" id="isActive"> isActive?
											</div>
										</div>
									</div>
								</div>
								</div>
								<div class="row">
									<div class="form-group">
										<div class="text-xs-right" style="margin-left: 8px;">
											<button type="submit" class="btn btn-success">Submit</button>
											<button type="button" class="btn btn-default waves-effect mdlcloseRemark" data-dismiss="modal">Close</button>
										</div>
									</div>
								</div>
							</div>
						</form>
					</div>
				</div>
		    </div>
		</div>

		<!-- item start -->
		<div id="responsive-packing" class="modal fade" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
		    <div class="modal-dialog modal-lg">
		        <div class="modal-content">
		        	
		            <div class="modal-header">
		                <h4 class="modal-title">Packing Details</h4>
		                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
		            </div>
		            <div class="modal-body">
		            		<form action="" class="" method="post" name="additemdetailformmdlpk" id="additemdetailformmdlpk" novalidate>

		            			<input type="hidden" name="forcount" id="forcount" value="">

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
															<div class="col-12 col-sm-8 col-md-4 col-lg-4 col-xl-4">
																<div class="form-group">
																	<div class="">
																		<input type="text" name="code" id="code"  class="form-control" placeholder="ENTER CODE" > 
																	</div>
																</div>
															</div>
															
															<div class="col-12 col-sm-4 col-md-2 col-lg-2 col-xl-2 d-flex ">
																<div class="form-group">
																	<label>GST % :</label>
																</div>
															</div>
															<div class="col-12 col-sm-8 col-md-4 col-lg-4 col-xl-4">
																<div class="form-group">
																	<div class="">
																		<input type="text" name="gst" id="gst" class="form-control" placeholder="0.00"> 
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
		    <!-- Item end -->

		<div id="responsive-modal-item" class="modal fade" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
		    <div class="modal-dialog modal-lg">
		        <div class="modal-content">
		        	
		            <div class="modal-header">
		                <h4 class="modal-title">Item Details</h4>
		                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
		            </div>
		            <div class="modal-body">
		            		<form action="" class="" method="post" name="additemdetailformmdl" id="additemdetailformmdl" novalidate>

		            			<input type="hidden" name="forcount" id="forcount" value="">

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
															<div class="col-12 col-sm-8 col-md-4 col-lg-4 col-xl-4">
																<div class="form-group">
																	<div class="">
																		<input type="text" name="code" id="code"  class="form-control" placeholder="ENTER CODE" > 
																	</div>
																</div>
															</div>
															
															<div class="col-12 col-sm-4 col-md-2 col-lg-2 col-xl-2 d-flex ">
																<div class="form-group">
																	<label>ITEM SRNO. :</label>
																</div>
															</div>
															<div class="col-12 col-sm-8 col-md-4 col-lg-4 col-xl-4">
																<div class="form-group">
																	<div class="">
																		<input type="text" name="itemsrno" id="itemsrno" class="form-control" placeholder="ENTER ITEM SRNO."> 
																	</div>
																</div>
															</div>
															
															<div class="col-12 col-sm-4 col-md-2 col-lg-2 col-xl-2 d-flex ">
																<div class="form-group">
																	<label>NAME :</label>
																</div>
															</div>
															<div class="col-12 col-sm-8 col-md-10 col-lg-10 col-xl-10">
																<div class="form-group field">
																	<div class="controls">
																		<input type="text" name="name" class="customvalidation form-control" id="name" placeholder="ENTER NAME"  required data-validation-required-message="This field is required"> 
																	</div>
																</div>
															</div>
															
															
															<div class="col-12 col-sm-4 col-md-2 col-lg-2 col-xl-2 d-flex ">
																<div class="form-group">
																	<label>MAIN SCREEN  :</label>
																</div>
															</div>
															<div class="col-12 col-sm-8 col-md-10 col-lg-10 col-xl-10">
																<div class="form-group">
																	<div class="">
																		<select name="mainscreen" id="mainscreen" class=" form-control">
																			<option value=""> --Select -- </option>
																			<?php
																			foreach ($getscreendata as $screenvalue)
																			{
																				?>
																				<option value="<?=$screenvalue->ScreenRegisterID;?>"><?=$screenvalue->ItemDCut;?></option>
																				<?php
																			}
																			?>
																		</select>
																	</div>
																</div>
															</div>
															
															<div class="col-12 col-sm-4 col-md-2 col-lg-2 col-xl-2 d-flex ">
																<div class="form-group">
																	<label>CUT :</label>
																</div>
															</div>
															<div class="col-12 col-sm-8 col-md-10 col-lg-10 col-xl-10">
																<div class="form-group field" >
																	<div class="">
																		<input type="text" name="cut" id="cut" class="form-control" placeholder="0.00"> 
																	</div>
																</div>
															</div>
															
															<div class="col-12 col-sm-4 col-md-2 col-lg-2 col-xl-2 d-flex ">
																<div class="form-group">
																	<label>PACKING :</label>
																</div>
															</div>
															<div class="col-12 col-sm-8 col-md-8 col-lg-8 col-xl-8">
																<div class="form-group" >
																	<div class="">
																<select name="packing" id="packing" class="form-control">
																	<option value=""> --Select -- </option>
																	<?php
																	foreach ($getPackageData as $packagestylevalue)
																	{
																		?>
																		<option value="<?=$packagestylevalue->PackingID;?>"><?=$packagestylevalue->PackingName;?></option>
																		<?php	
																	}
																	?>
																</select>
																	</div>
																</div>
															</div>
															<!-- <div class="col-12 col-sm-2 col-md-2 col-lg-2 col-xl-2">
															<i data-toggle="modal" data-target="#responsive-packing" class="fa fa-plus-circle"></i></div> -->
															
															<div class="col-12 col-sm-4 col-md-2 col-lg-2 col-xl-2 d-flex ">
																<div class="form-group">
																	<label>GREY QUALITY  :</label>
																</div>
															</div>
															<div class="col-12 col-sm-8 col-md-10 col-lg-10 col-xl-10">
																<div class="form-group">
																	<div class="">
																		<select name="greyquality" id="greyquality" class="form-control">
																			<option value=""> --Select -- </option>
																				<?php
																				foreach ($getgreyQualityData as $value)
																				{
																					?>
																					<option value="<?=$value->QualityID;?>"> <?=$value->GreyQuality;?> </option>
																					<?php
																				}
																				?>
																			
																		</select>
																	</div>
																</div>
															</div>
															
															<div class="col-12 col-sm-4 col-md-2 col-lg-2 col-xl-2 d-flex ">
																<div class="form-group">
																	<label>TYPE :</label>
																</div>
															</div>
															<div class="col-12 col-sm-8 col-md-4 col-lg-4 col-xl-4">
																<div class="form-group field" >
																	<div class="">
																		<select name="type" id="type" class="form-control">
																			<option value=""> --Select -- </option>
																			<option value="FINISH"> FINISH </option>
																			<option value="GRAY"> GRAY </option>
																			<option value="GENRAL"> GENRAL </option>
																		</select>
																	</div>
																</div>
															</div>
															<div class="col-12 col-sm-4 col-md-2 col-lg-2 col-xl-2 d-flex ">
																<div class="form-group">
																	<label>ITEM TYPE :</label>
																</div>
															</div>
															<div class="col-12 col-sm-8 col-md-4 col-lg-4 col-xl-4">
																<div class="form-group" >
																	<div class="">
																		<select name="itemtype" id="itemtype" class="form-control">
																			<option value=""> --Select -- </option>
																				<?php
																				foreach ($getItemTypeData as $itemtypevalue)
																				{
																					?>
																					<option value="<?=$itemtypevalue->ItemTypeID;?>"><?=$itemtypevalue->ClothType;?></option>
																					<?php
																				}
																				?>
																		</select>
																	</div>
																</div>
															</div>
															
															<div class="col-12 col-sm-4 col-md-2 col-lg-2 col-xl-2 d-flex ">
																<div class="form-group">
																	<label>SCREEN SERIE :</label>
																</div>
															</div>
															<div class="col-12 col-sm-8 col-md-10 col-lg-10 col-xl-10">
																<div class="form-group">
																	<div class="">
																		<select name="screenserie" id="screenserie" class="form-control">
																			<option value=""> --Select -- </option>
																			<option value="1"> 1 </option>
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
																	<label>CATEGORY :</label>
																</div>
															</div>
															<div class="col-12 col-sm-8 col-md-10 col-lg-10 col-xl-10">
																<div class="form-group field">
																	<div class="">
																		<select name="category" id="category" class="form-control">
																			<option value=""> --Select -- </option>
																			<?php
																			foreach ($getCategoryData as $valuecategorydata)
																			{
																				?>
																			<option value="<?=$valuecategorydata->CategoryID;?>"><?=$valuecategorydata->CategoryName;?></option>
																				<?php
																			}
																			?>
																		</select>
																	</div>
																</div>
															</div>
															<div class="col-12 col-sm-4 col-md-2 col-lg-2 col-xl-2 d-flex ">
																<div class="form-group">
																	<label>SELLING RATE :</label>
																</div>
															</div>
															<div class="col-12 col-sm-8 col-md-4 col-lg-4 col-xl-4">
																<div class="form-group" >
																	<div class="">
																		<input type="text" name="sellingrate" id="sellingrate"  class="form-control" placeholder="0.00"> 
																	</div>
																</div>
															</div>
															<div class="col-12 col-sm-4 col-md-2 col-lg-2 col-xl-2 d-flex ">
																<div class="form-group">
																	<label>UNIT :</label>
																</div>
															</div>
															<div class="col-12 col-sm-8 col-md-4 col-lg-4 col-xl-4">
																<div class="form-group field" >
																	<div class="">
																		<select name="unit" id="unit" class="form-control" >
																			<option value=""> --Select -- </option>
																			<option value="PCS"> PCS </option>
																			<option value="NTS"> NTS </option>
																			<option value="KAD"> KAD </option>
																			<option value="OTHER"> OTHER </option>
																			<option value="SUIT"> SUIT </option>
																		</select>
																	</div>
																</div>
															</div>
															<div class="col-12 col-sm-4 col-md-2 col-lg-2 col-xl-2 d-flex ">
																<div class="form-group">
																	<label>RATE 2 :</label>
																</div>
															</div>
															<div class="col-12 col-sm-8 col-md-4 col-lg-4 col-xl-4">
																<div class="form-group"  >
																	<div class="">
																		<input type="text" name="rete2" id="rete2" class="form-control" placeholder="0.00"> 
																	</div>
																</div>
															</div>
															
															<div class="col-12 col-sm-4 col-md-2 col-lg-2 col-xl-2 d-flex ">
																<div class="form-group">
																	<label>RATE 3 :</label>
																</div>
															</div>
															<div class="col-12 col-sm-8 col-md-4 col-lg-4 col-xl-4">
																<div class="form-group">
																	<div class="">
																		<input type="text" name="rate3" id="rate3" class="form-control" placeholder="0.00"> 
																	</div>
																</div>
															</div>
															
															<div class="col-12 col-sm-4 col-md-2 col-lg-2 col-xl-2 d-flex ">
																<div class="form-group">
																	<label>SELECTED  :</label>
																</div>
															</div>
															<div class="col-12 col-sm-8 col-md-4 col-lg-4 col-xl-4">
																<div class="form-group">
																	<div class="">
																		<input type="checkbox" id="Selected" name="Selected" value="1"> Selected
																	</div>
																</div>
															</div>

															<div class="col-12 col-sm-4 col-md-2 col-lg-2 col-xl-2 d-flex ">
																<div class="form-group">
																	<label>WORK CUT :</label>
																</div>
															</div>
															<div class="col-12 col-sm-8 col-md-4 col-lg-4 col-xl-4">
																<div class="form-group field">
																	<div class="">
																		<input type="text" name="workcut" id="workcut" class="form-control" placeholder="ENTER WORK CUT"> 
																	</div>
																</div>
															</div>
															
															<div class="col-12 col-sm-4 col-md-3 col-lg-3 col-xl-3 d-flex">
																<div class="form-group">
																	<label>PACK+CUT+BOX COST :</label>
																</div>
															</div>
															<div class="col-12 col-sm-8 col-md-9 col-lg-9 col-xl-9">
																<div class="form-group">
																	<div class="">
																		<input type="text"  name="packcutboxcost" id="packcutboxcost" placeholder="0.00" class="form-control"> 
																	</div>
																</div>
															</div>
															
															<div class="col-12 col-sm-4 col-md-3 col-lg-3 col-xl-3 d-flex">
																<div class="form-group">
																	<label>SALE RATE MU% :</label>
																</div>
															</div>
															<div class="col-12 col-sm-8 col-md-9 col-lg-9 col-xl-9">
																<div class="form-group">
																	<div class="">
																		<input type="text" name="saleratemu" id="saleratemu" placeholder="ENTER SALE RATE MU%" class="form-control"> 
																	</div>
																</div>
															</div>
															<div class="col-12 col-sm-4 col-md-2 col-lg-2 col-xl-2 d-flex ">
																<div class="form-group">
																	<label>HSN/SAC :</label>
																</div>
															</div>
															<div class="col-12 col-sm-8 col-md-4 col-lg-4 col-xl-4">
																<div class="form-group">
																	<div class="">
																		<input type="text" name="hsn" id="hsn" class="form-control" placeholder="ENTER HSN/SAC"> 
																	</div>
																</div>
															</div>
															
															<div class="col-12 col-sm-4 col-md-2 col-lg-2 col-xl-2 d-flex ">
																<div class="form-group">
																	<label>GST % :</label>
																</div>
															</div>
															<div class="col-12 col-sm-8 col-md-4 col-lg-4 col-xl-4">
																<div class="form-group">
																	<div class="">
																		<input type="text" name="gst" id="gst" class="form-control" placeholder="0.00"> 
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
		    <!-- Item end -->
		<!--  start greay purchase -->
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
		<!-- end graey purchase -->
		<!-- start company modal -->
		<div id="responsive-modal-company" class="modal fade" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
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
																foreach($citydatacompany as $selectCitydata)
																{
																	?>
																	<option value="<?php echo $selectCitydata->CityID; ?>"> <?php echo $selectCitydata->CityName; ?></option>
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
																<select name="Ac_Type_Id" id="Ac_Type_Id" style="width: 100%; height:36px;" onchange="getpartytoother(this);" class="select2 form-control custom-select" >
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
																<label>A/C GROUP   :</label>
															</div>
														</div>
														<div class="col-12 col-sm-8 col-md-10 col-lg-9 col-xl-10">
															<div class="form-group field">
																<div class="">
																	<select name="Ac_Group_Id" id="Ac_Group_Id" style="width: 100%; height:36px;" class="select2 form-control custom-select" >
																		<option value="">--Select-- </option>
																	
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

														<div class="col-12 col-sm-4 col-md-2 col-lg-3 col-xl-2 d-flex">
															<div class="form-group">
																<label>STATION :</label>
															</div>
														</div>
														<div class="col-12 col-sm-8 col-md-10 col-lg-9 col-xl-10">
															<div class="form-group field">
																<select name="StationID" id="StationIDData"  class="Stationselect form-control custom-select" style="width: 100%">
																	<option value=""> --Select -- </option>
																	<?php 
																	foreach($getStationData as $qgetStationDatapop)
																	{
																	?>
																	<option value="<?php echo $qgetStationDatapop->StationID; ?>"> <?php echo $qgetStationDatapop->StationName; ?></option>
																	<?php 
																	}
																	?>
																	</select>
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

														<div class="col-12 col-sm-4 col-md-2 col-lg-2 col-xl-2 d-flex ">
															<div class="form-group">
																<label>BROKER :</label>
															</div>
														</div>
														<div class="col-12 col-sm-8 col-md-10 col-lg-10 col-xl-10">
																<div class="">
																<select name="BrokerID" id="BrokerID" class="Brokerselect form-control custom-select" style="width: 100%">
																	<option value=""> --Select Broker-- </option>
																	
																	<?php
																	foreach ($getbrokerData as $qgetBrokerDatapop)
																	{
																		?>
																		<option value="<?php echo $qgetBrokerDatapop->Ledger_Id; ?>"> <?php echo $qgetBrokerDatapop->LName; ?></option>
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
		 <div id="TakaDetails" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
		    <div class="modal-dialog modal-lg">
		        <div class="modal-content">
		            <div class="modal-header">
		                <h4 class="modal-title">Taka Details</h4>
		                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
		            </div>
		            <div class="modal-body">
	            		<form  class="" id="AddTakaDetailsForm" method="POST" name="" novalidate>
							<input type="hidden" value="" id="TakaDetailsID" name="TakaDetailsID">
							<div class="row common_master_form_div">
								<div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 ">
									
									<div class="formtitle">
										<div class="row removemargin">
											<div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
												<div class="row">
													<div class="col-12 col-sm-4 col-md-2 col-lg-2 col-xl-2 d-flex ">
														<div class="form-group">
															<label>Quality :</label>
														</div>
													</div>
													<div class="col-12 col-sm-8 col-md-10 col-lg-5 col-xl-10">
														<div class="form-group ">
															<div class="">
																<input type="text" name="TakaQuality" id="TakaQuality" class="form-control">
															</div>
														</div>
													</div>
													
													
													<div class="col-12 col-sm-4 col-md-2 col-lg-2 col-xl-2 d-flex ">
														<div class="form-group">
															<label>Avg. WT.  :</label>
														</div>
													</div>
													<div class="col-12 col-sm-8 col-md-3 col-lg-3 col-xl-3">
														<div class="form-group">
															<div class="">
																<input type="text" name="TakaAvgwt" id="TakaAvgwt" class="form-control"> 
															</div>
														</div>
													</div>
													
													
													<div class="col-12 col-sm-4 col-md-3 col-lg-2 col-xl-3 d-flex ">
														<div class="form-group">
															<label>Weaver   :</label>
														</div>
													</div>
													<div class="col-12 col-sm-8 col-md-9 col-lg-5 col-xl-9">
														<div class="form-group">
															<div class="">
																<input type="text" name="TakaWeaver" id="TakaWeaver" class="form-control"> 
															</div>
							                            </div>
													</div>
													
													<div class="col-12 col-sm-4 col-md-3 col-lg-2 col-xl-9 d-flex ">
														<div class="form-group">
															<label>Challan :</label>
														</div>
													</div>
													<div class="col-12 col-sm-8 col-md-9 col-lg-3 col-xl-9">
														<div class="form-group">
															<div class="">
																<input type="text" name="TakaChallan" id="TakaChallan" class="form-control">
						                                    </div>
															
														</div>
													</div>
													<div class="col-12 col-sm-4 col-md-2 col-lg-2 col-xl-2 d-flex align-items-center">
														<div class="form-group">
															<label>Company :</label>
														</div>
													</div>
													<div class="col-12 col-sm-8 col-md-4 col-lg-10 col-xl-4">
														<div class="form-group field">
															<div class="">
																<input type="text" name="TakaCompany" id="TakaCompany" class="form-control" value="BHARAT CREATION PRIVATE LIMITED"> 
															</div>
														</div>
													</div>
												</div>
											</div>
											<div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
												<div class="row">
													<div class="col-12 col-sm-4 col-md-1 col-lg-2 col-xl-1 d-flex ">
														<div class="form-group">
															<label> Group  :</label>
														</div>
													</div>
													<div class="col-12 col-sm-8 col-md-6 col-lg-10 col-xl-6">
														<div class="form-group field">
															<div class="">
																<input type="text" name="TakaGroup" id="TakaGroup" class="form-control"> 
															</div>
														</div>
													</div>
													<div class="col-12 col-sm-4 col-md-2 col-lg-2 col-xl-2 d-flex ">
														<div class="form-group">
															<label>BillNo :</label>
														</div>
													</div>
													<div class="col-12 col-sm-8 col-md-10 col-lg-4 col-xl-10">
														<div class="form-group field">
															<div class="">
																<input type="text" name="TakaBillNo" id="TakaBillNo" class="form-control"> 
															</div>
														</div>
													</div>
													<div class="col-12 col-sm-4 col-md-2 col-lg-2 col-xl-2 d-flex ">
														<div class="form-group">
															<label>Dated :</label>
														</div>
													</div>
													<div class="col-12 col-sm-8 col-md-10 col-lg-4 col-xl-10">
														<div class="form-group field">
															<div class="">
																<input type="text" name="TakaDate" id="TakaDate" class="form-control"> 
															</div>
														</div>
													</div>
													
													
													
													<div class="col-12 col-sm-4 col-md-2 col-lg-2 col-xl-2 d-flex align-items-center">
														<div class="form-group">
															<label> Card No :</label>
														</div>
													</div>
													<div class="col-12 col-sm-8 col-md-4 col-lg-2 col-xl-4">
														<div class="form-group field">
															<div class="">
																<input type="text" name="TakaCardNo" id="TakaCardNo" class="form-control"> 
															</div>
														</div>
													</div>
													
													<div class="col-12 col-sm-4 col-md-2 col-lg-5 col-xl-2 d-flex align-items-center">
														<div class="form-group">
															<label> Variation Less Above (GM):</label>
														</div>
													</div>
													<div class="col-12 col-sm-8 col-md-4 col-lg-3 col-xl-4">
														<div class="form-group field">
															<div class="">
																<input type="text" name="TakaVarialtionLess" id="TakaVarialtionLess" class="form-control">  
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>	

									</div>
									<table id="myTable" class="table-responsive table Taka-list">
										    <thead>
										        <tr>
										            <td>Sr No.</td>
										            <td>Mfg MTS.</td>
										            <td>Sarees</td>
										            <td>Act Cut</td>
										            <td>Form Mfsc</td>
										            <td>Ideal Wt</td>
										            <td>Act Wt</td>
										            <td>WT. LS.</td>
										            <td>Design</td>
										            <td>Remark</td>
										        </tr>
										    </thead>
										    <tbody>
										       	<tr>
									           	 	<td style="padding: 0.2rem !important;">
									                	<input type="text" name="TakaSrNo0" id="TakaSrNo0" class="form-control" placeholder="Sr No." value="" />
									            	</td>
									            	<td style="padding: 0.2rem !important;">
									                	<input type="text" name="TakaMfgMts0" id="TakaMfgMts0"  class="form-control" placeholder="Mfg MTS" value=""/>
									            	</td>
									            	<td style="padding: 0.2rem !important;">
										            	<input type="text" name="TakaSarees0" id="TakaSarees0"  class="form-control" placeholder="Sarees" value=""/>
									            	</td>
										            <td style="padding: 0.2rem !important;">
										               	<input type="text" name="TakaActCut0" id="TakaActCut0"  class="form-control" placeholder="Act Cut" value=""/>
										            </td>
										            <td style="padding: 0.2rem !important;">
										                <input type="text" name="TakaFormMfsc0" id="TakaFormMfsc0"  class="form-control" placeholder="Form Mfsc" value=""/>
										            </td>
										            <td style="padding: 0.2rem !important;">
										                <input type="text" name="TakaIdealWt0" id="TakaIdealWt0"  class="form-control" placeholder="Ideal wt" value=""/>
										            </td>
										            <td style="padding: 0.2rem !important;">
										                <input type="text" name="TakaActWt0" id="TakaActWt0"  class="form-control" placeholder="Act Wt" value=""/>
										            </td>
										            <td style="padding: 0.2rem !important;">
										               	<input type="text" name="TakaWtLs0" id="TakaWtLs0"  class="form-control" placeholder="Wt LS" value=""/>
										            </td>
										            <td style="padding: 0.2rem !important;">
										                <input type="text" name="TakaDesign0" id="TakaDesign0"  class="form-control" placeholder="Design" value=""/>
										            </td>
										            <td style="padding: 0.2rem !important;">
										                <input type="text" name="TakaRemark0" id="TakaRemark0"  class="form-control" placeholder="Remark" value=""/>
										            </td>
									            	<td style="padding: 0.2rem !important;"><input type="button" class="ibtnDel btn btn-md btn-danger"  value="Delete"></td>
												</tr>
										    </tbody>
										    <tfoot>
										    	<input type="hidden" class="" id="Takacountdata" name="Takacountdata" value="1">
										        <tr>
										            <td colspan="16" style="text-align: left;">
										                <input type="button" class="btn btn-lg btn-block addTakaDetailsRow" id="addTakaDetailsRow" value="Add Row" />
										            </td>
										        </tr>
										        <tr>
										        </tr>
										    </tfoot>
										</table>
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
		  <!-- end company modal -->
		<!-- end by milan 2/22/19 -->
		<!-- start brocker -->
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
																	foreach ($getAcctypeData as $qgetAcctypeData1)
																	{
																		?>
																		<option value="<?=$qgetAcctypeData1->AcTypeID?>"><?=$qgetAcctypeData1->ACType?></option>
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
		<!-- company start-->
		<div id="responsive-modal-company" class="modal fade" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
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
																<label>CODE <span class="fored"><b>*</b></span> :</label>
															</div>
														</div>
														<div class="col-12 col-sm-8 col-md-10 col-lg-10 col-xl-10">
															<div class="form-group ">
																<div class="controls">
																	<input type="text" name="code" id="code" class="form-control customvalidation" placeholder="ENTER CODE" required data-validation-required-message="This field is required"> 
																	<input type="hidden" name="gNo" >
																</div>
															</div>
														</div>
														
														
														<div class="col-12 col-sm-4 col-md-2 col-lg-2 col-xl-2 d-flex ">
															<div class="form-group">
																<label>SHORT NAME <span class="fored"><b>*</b></span> :</label>
															</div>
														</div>
														<div class="col-12 col-sm-8 col-md-3 col-lg-3 col-xl-3">
															<div class="form-group field">
																<div class="controls">
																	<input type="text" name="shortname" id="shortname" class="form-control customvalidation" placeholder="SHORT NAME" required data-validation-required-message="This field is required"> 
																</div>
															</div>
														</div>
														
														<div class="col-12 col-sm-4 col-md-1 col-lg-1 col-xl-1 d-flex ">
															<div class="form-group">
																<label> NAME <span class="fored"><b>*</b></span> :</label>
															</div>
														</div>
														<div class="col-12 col-sm-8 col-md-6 col-lg-6 col-xl-6">
															<div class="form-group field">
																<div class="controls">
																	<input type="text" name="name" id="name" class="form-control customvalidation"placeholder="ENTER NAME" required data-validation-required-message="This field is required"> 
																</div>
															</div>
														</div>
														<div class="col-12 col-sm-4 col-md-3 col-lg-3 col-xl-3 d-flex ">
															<div class="form-group">
																<label>COMPANY TYPE  <span class="fored"><b>*</b></span> :</label>
															</div>
														</div>
														<div class="col-12 col-sm-8 col-md-9 col-lg-9 col-xl-9">
															<div class="form-group field">
															<div class="">
																<select name="companttype" id="companttype" style="width: 100%; height:36px;" class="select2 form-control custom-select customvalidation">
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
																<label>COMPANY GROUP<span class="fored"><b>*</b></span> :</label>
															</div>
														</div>
														<div class="col-12 col-sm-8 col-md-9 col-lg-9 col-xl-9">
															<div class="form-group">
																<div class="">
																	<select id="companygroup" name="companygroup[]" class="selectpicker" multiple data-style="form-control btn-secondary">
																		<?php				
																		foreach ($companyname as $value)
																		{
																			?>
																			<option value="<?=$value['Name']?>"><?=$value['Name']?></option>
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
																<label>ADDRESS<span class="fored"><b>*</b></span> :</label>
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
																<label>ADD.(CONT.)<span class="fored"><b>*</b></span> :</label>
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
																<label>CITY<span class="fored"><b>*</b></span> :</label>
															</div>
														</div>
														<div class="col-12 col-sm-8 col-md-4 col-lg-4 col-xl-4">
															<div class="form-group field">
																<div class="">
																	<select name="city" id="city" required style="width: 100%; height:36px;" class="select2 form-control custom-select">
																		<option value=""> --Select -- </option>
																		<?php 
																		foreach($citydatacompany as $selectCitydata)
																		{
																			?>
																			<option value="<?php echo $selectCitydata->cityID; ?>"> <?php echo $selectCitydata->cityName; ?></option>
																			<?php 
																		}
																		?>
																	</select>
																</div>
															</div>
														</div>
														
														<div class="col-12 col-sm-4 col-md-2 col-lg-2 col-xl-2 d-flex align-items-center">
															<div class="form-group">
																<label> PIN<span class="fored"><b>*</b></span> :</label>
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
																<label> EMAIL <span class="fored"><b>*</b></span> :</label>
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
																<label> MOBILE NO.<span class="fored"><b>*</b></span> :</label>
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
																<label> FAX<span class="fored"><b>*</b></span> :</label>
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
																<label> PHONE NO.<span class="fored"><b>*</b></span> :</label>
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
																<label>ADDRESS<span class="fored"><b>*</b></span> :</label>
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
																<label>ADD.(CONT.)<span class="fored"><b>*</b></span> :</label>
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
																<label>BUSINESS DESC.<span class="fored"><b>*</b></span> :</label>
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
																<label>PROPRIETOR <span class="fored"><b>*</b></span> :</label>
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
																<label>MULTI CHAL<span class="fored"><b>*</b></span> :</label>
															</div>
														</div>
														<div class="col-12 col-sm-8 col-md-10 col-lg-10 col-xl-10">
															<div class="form-group field">
																<div class="controls">
																	<select name="multichal" id="multichal" required style="width: 100%; height:36px;" class="select2 form-control custom-select customvalidation">
																		<option value=""> --Select -- </option>
																		<option value="NO"> NO </option>
																		<option value="YES"> YES </option>
																	</select>
																</div>
															</div>
														</div>
														
														<div class="col-12 col-sm-4 col-md-2 col-lg-2 col-xl-2 d-flex ">
															<div class="form-group">
																<label>SELECTED <span class="fored"><b>*</b></span> :</label>
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
																<label>J.V. FROM DATE  <span class="fored"><b>*</b></span> :</label>
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
																<label>PAN NO. <span class="fored"><b>*</b></span> :</label>
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
																<label>TDS A/C No.<span class="fored"><b>*</b></span> :</label>
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
																<label>WARD <span class="fored"><b>*</b></span> :</label>
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
																<label>ECC NO.<span class="fored"><b>*</b></span> :</label>
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
																<label>RANGE <span class="fored"><b>*</b></span> :</label>
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
																<label>DIVISION<span class="fored"><b>*</b></span> :</label>
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
																<label>COLLECTRATE <span class="fored"><b>*</b></span> :</label>
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
																<label>POLICY NO.<span class="fored"><b>*</b></span> :</label>
															</div>
														</div>
														<div class="col-12 col-sm-8 col-md-4 col-lg-4 col-xl-4">
															<div class="form-group field">
																<div class="">
																	<input type="text" name="policyno" id="policyno" maxlength="10" class="form-control" placeholder="ENTER POLICY NO."> 
																</div>
															</div>
														</div>
														<div class="col-12 col-sm-4 col-md-2 col-lg-2 col-xl-2 d-flex ">
															<div class="form-group">
																<label>DATE  <span class="fored"><b>*</b></span> :</label>
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
																<label>GST NO.(VAT)  <span class="fored"><b>*</b></span> :</label>
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
																<label>DT.  <span class="fored"><b>*</b></span> :</label>
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
																<label>CIN NO.  <span class="fored"><b>*</b></span> :</label>
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
																<label>GST IN/UIN  <span class="fored"><b>*</b></span> :</label>
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
																<label>CEN. EXCISE REG. NO.  <span class="fored"><b>*</b></span> :</label>
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
														<label>INSURANCE POLICY DETAILS  <span class="fored"><b>*</b></span> :</label>
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

		                                                <a  href="<?php echo base_url()?>FinishPurchaseOrderBill" class="btn btn-info">
		                                                    Cancel
		                                                </a>

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
		    <!-- company end -->

		<div class="row page-titles">
			<div class="col-md-5 align-self-center">
				<h4 class="text-themecolor">Finish Purchase Orde Bill</h4>
			</div>
			<div class="col-md-7 align-self-center text-right">
				<div class="d-flex justify-content-end align-items-center">
					<ol class="breadcrumb">
						<li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
						<li class="breadcrumb-item active">Finish Purchase Orde Bill</li>
					</ol>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="card" style="width: 100%;">
				<div class="card-body p-b-0">
					<!-- Nav tabs -->
					<ul class="nav nav-tabs customtab2" role="tablist">
						<li class="nav-item"> <a class="nav-link active" data-toggle="tab" href="#home7" role="tab"><span class="hidden-sm-up"><i class="ti-home"></i></span> <span class="hidden-xs-down">Finish Purchase Orde Bill</span></a> </li>
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
								<form  name="frm_broker_list" method="post" action="<?php echo base_url();?>Broker_controller/index">
									<input type="hidden" value="" name="Purchase_Order_Id" />
	 								<input type="hidden" name="method" value="" /> 
									<div class="table-responsive">
								        <table id="example23" class="display nowrap table table-hover table-striped table-bordered" cellspacing="0" width="100%">
								            <thead>
								                <tr>
								                    <th>Action</th>
								                    <th>Type</th>
								                    <th>Voucher</th>
								                    <th>Ord Ref</th>
								                    <th>Lr No Awb</th>
								                    <th>Ledger Name</th>
								                    <th>Bill No</th>
								                    <th>Company Name</th>
								                    <!-- <th>Ledger Name</th>
								                    <th>Rec. Taka</th>
								                    <th>Rec. Mts</th>
								                    <th>Bill Amt</th>
								                    <th>Net Amt</th> -->
								                   
								                </tr>
								            </thead>
								            <tbody>
								            	<?php
								            	foreach ($finishpurchaseorderdata as $value)
								            	{
								            	?>
								            	<tr id="">
									               <td class="editdelaction">
								                        <a href="<?=base_url();?>Transaction_controller/FinishPurchaseOrderBill?finishpurchaseorderid=<?=$value->Finish_Purchase_Id;?>" ><i class="fa fa-edit"></i></a>&nbsp;&nbsp;
								                        <a onclick="deletedata('<?=$value->Finish_Purchase_Id;?>','finishpurchaseorderdelete');"><i class="fa fa-trash-o"></i></a>
								                        <a href="<?=base_url();?>Transaction_controller/PrintFinishPurchaseBill?printFinishPurchaseOrder=<?=$value->Finish_Purchase_Id;?>" ><i class="fa fa-print"></i></a>&nbsp;&nbsp;
								                    </td>
									               <td><?=$value->Type;?></td>
									               <td><?=$value->Voucher;?></td>
									               <td><?=$value->Ord_Ref;?></td>
									               <td><?=$value->Lr_No_Awb;?></td>
									               <td><?=$value->ledgername;?></td>
									               <td><?=$value->Bill_No;?></td>
									               <td><?=$value->companyname;?></td>
									            <!--    <td><?=$value->Type;?></td>
									               <td><?=$value->Type;?></td>
									               <td><?=$value->Type;?></td>
									               <td><?=$value->Type;?></td>
									               <td><?=$value->Type;?></td>
									               <td><?=$value->Type;?></td> -->
									              
								                </tr>
								            	<?php                                        		
								            	}
								            	?>
								            </tbody>
								        </table>
								    </div>
								</form>
							</div>
						</div>
						<div class="tab-pane  p-20" id="profile7" role="tabpanel">

     
<!--       <form action = "<?php echo base_url();?>Test_controller/do_upload" method = "">
         <input type = "file" name = "userfile" size = "20" /> 
         <br /><br /> 
         <input type = "submit" value = "upload" /> 
      </form> 
 -->

							<form action="" method="post" name="addfinishpurchasefrm" id="addfinishpurchasefrm" novalidate>
								<?php
								if(empty($editpurchaseOrderBilldata))
								{
									?>
										<input type="hidden" value="" id="finishpurchaseorderid" name="finishpurchaseorderid">
									<?php
								}
								?>
								<div class="row common_master_form_div">
									<div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 ">
										<div class="formtitle">
											<div class="row removemargin">
												<div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
													<div class="row">
														<div class="col-12 col-sm-2 col-md-2 col-lg-2 col-xl-2 d-flex ">
															<div class="form-group">
																<label>COMAPNY :</label>
															</div>
														</div>
														<div class="col-12 col-sm-9 col-md-9 col-lg-9 col-xl-9">
															<div class="form-group field">
																<div class="controls">
																	<select name="CompanyId" id="CompanyId" style="width: 100%; height:36px;"  class="select2 form-control custom-select customvalidation CompanyIdClass">
																		<option value=""> --Select -- </option>
																		<?php
																		foreach ($getCompanyData as $qgetCompanyData)
																		{
																			?>
																			<option value="<?=$qgetCompanyData->CompanyID		?>"> <?=$qgetCompanyData->CompanyName?> </option>
																			<?php
																		}
																		?>
																		
																	</select>
																</div>
															</div>
														</div>
														<div class="col-12 col-sm-1 col-md-1 col-lg-1 col-xl-1">
															<i data-toggle="modal" data-target="#responsive-modal-company" class="fa fa-plus-circle"></i>
														</div>
														<div class="col-12 col-sm-4 col-md-2 col-lg-2 col-xl-2 d-flex">
															<div class="form-group">
																<label> Type :</label>
															</div>
														</div>
														<div class="col-12 col-sm-8 col-md-10 col-lg-4 col-xl-10">
															<div class="form-group field">
																<div class="controls">
																	<select name="Type" id="Type"  class="form-control customvalidation">
																	<option selected="" value="Finish Purchase Bill">Finish Purchase Bill</option>
																		
																	</select>
																</div>
															</div>
														</div>
														<?php
														$finishcount = $this->db->query("SELECT Voucher from finish_purchase order by Finish_Purchase_Id desc")->row_array();
														$Voucher = $finishcount['Voucher']+1;
														?>
														<div class="col-12 col-sm-4 col-md-2 col-lg-2 col-xl-2 d-flex ">
															<div class="form-group">
																<label>Voucher NO.  	 :</label>
															</div>
														</div>
														<div class="col-12 col-sm-8 col-md-10 col-lg-4 col-xl-10">
															<div class="form-group field">
																<div class="">
																	<input type="text"  name="Voucher_NO" id="Voucher_NO" placeholder="Voucher NO NO." value="<?=$Voucher;?>" class="form-control">
																</div>
															</div>
														</div>


														<div class="col-12 col-sm-2 col-md-2 col-lg-2 col-xl-2 d-flex ">
															<div class="form-group">
																<label>LR No./AWB   	 :</label>
															</div>
														</div>
														<div class="col-12 col-sm-10 col-md-10 col-lg-10 col-xl-10">
															<div class="form-group field">
																<div class="">
																	<input type="text"  name="LR_No" id="LR_No"  placeholder="LR No." class="form-control">
																</div>
															</div>
														</div>

														<div class="col-12 col-sm-2 col-md-2 col-lg-2 col-xl-2 d-flex ">
															<div class="form-group">
																<label>Party:</label>
															</div>
														</div>
														<div class="col-12 col-sm-9 col-md-9 col-lg-9 col-xl-9">
															<div class="form-group field">
																<div class="controls">
																	<select name="PartyAcID" id="PartyAcID" style="width: 100%; height:36px;" class="select2 form-control custom-select customvalidation AddPartyAcID" onchange="getpartytoother(this);">
																	<option value=""> --Select -- </option>
																	<?php
																	foreach ($getpartyacData as $qgetpartyacData)
																	{
																		?>
																		<option value="<?=$qgetpartyacData->Ledger_Id;?>"> <?=$qgetpartyacData->LName?> </option>
																		<?php
																	}
																	?>
																	</select>
																</div>
															</div>
														</div>
														<div class="col-12 col-sm-1 col-md-1 col-lg-1 col-xl-1">
															<i data-toggle="modal" data-target="#party-responsive-modal" class="fa fa-plus-circle"></i></div>


														<div class="col-12 col-sm-2 col-md-2 col-lg-2 col-xl-2 d-flex">
															<div class="form-group">
																<label>STATE 	 :</label>
															</div>
														</div>
														<div class="col-12 col-sm-10 col-md-10 col-lg-10 col-xl-10">
															<div class="form-group field">
																<div class="">
																	<select name="StateID" id="StateID"  style="width: 100%; height:36px;" class="select2 form-control custom-select stateidcls" onchange="statetodata(this);">
																		<option value=""> --Select -- </option>
																		<?php
																		foreach ($getstateData as $qgetstateData)
																		{
																			?>
																			<option value="<?=$qgetstateData->stateID	?>"> <?=$qgetstateData->stateName." (".$qgetstateData->StateCode.")" ?> </option>
																			<?php
																		}
																		?>
																		
																	</select>
																</div>
															</div>
														</div>

														<div class="col-12 col-sm-2 col-md-2 col-lg-2 col-xl-2 d-flex">
															<div class="form-group">
																<label>Transport 	 :</label>
															</div>
														</div>
														<div class="col-12 col-sm-8 col-md-8 col-lg-8 col-xl-8">
															<div class="form-group field">
																<div class="">
																	<select name="Transport" id="Transport"  style="width: 100%; height:36px;" class="select2 form-control custom-select addTransport TransportIDData">
																		<option value=""> --Select -- </option>
																			<?php
																			foreach ($gettransportData as $value)
																			{
																				?>
																				<option value="<?=$value->transportID;?>"><?=$value->transportName;?></option>
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

														<div class="col-12 col-sm-2 col-md-2 col-lg-2 col-xl-2 d-flex ">
															<div class="form-group">
																<label>ORD/REF:</label>
															</div>
														</div>
														<div class="col-12 col-sm-10 col-md-10 col-lg-10 col-xl-10">
															<div class="form-group field">
																<div class="">
																	<input type="text" id="ord_ref" onfocusout="findbilldata();findonlymiddlecontent();"  name="ord_ref" placeholder="ORD/REF" class="form-control findbilldatabyordref">
																</div>
															</div>
														</div>

														<div class="col-12 col-sm-2 col-md-2 col-lg-2 col-xl-2 d-flex ">
															<div class="form-group">
																<label>Bill NO.	 :</label>
															</div>
														</div>
														<div class="col-12 col-sm-9 col-md-9 col-lg-9 col-xl-9">
															<div class="form-group field">
																<div class="">
																	<select name="Bill_NO" id="Bill_NO"  style="width: 100%; height:36px;" class="select2 form-control custom-select">
																		<option value=""> --Select -- </option>
																		<?php
																		foreach ($getordernoData as $qgetordernoData)
																		{
																			?>
																			<option value="<?=$qgetordernoData->GreyOrderNo		?>"> <?=$qgetordernoData->GreyOrderNo?> </option>
																			<?php
																		}
																		?>
																	</select>
																</div>
															</div>
														</div>
														<div class="col-12 col-sm-1 col-md-1 col-lg-1 col-xl-1">
															<i data-toggle="modal" data-target="#responsive-modal-greypurchase" class="fa fa-plus-circle"></i></div>

															<div class="col-12 col-sm-4 col-md-2 col-lg-2 col-xl-2 d-flex ">
															<div class="form-group">
																<label>Case No.:</label>
															</div>
														</div>
														<div class="col-12 col-sm-10 col-md-10 col-lg-10 col-xl-10">
															<div class="form-group field">
																<div class="">
																	<input type="text"  name="case_no" id="case_no" placeholder="Case NO." value="<?=$Voucher;?>" class="form-control">
																</div>
															</div>
														</div>
													</div>
												</div>
												<div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
													<div class="row">
														<div class="col-12 col-sm-2 col-md-2 col-lg-2 col-xl-2 d-flex ">
															<div class="form-group">
																<label>DATE	 :</label>
															</div>
														</div>
														<div class="col-12 col-sm-10 col-md-10 col-lg-10 col-xl-10">
															<div class="form-group field">
																<div class="">
																	<input value="<?=date('m/d/Y');?>" type="text" id="datepicker-autoclose"  name="FinishPurchaseBillOrderDate" placeholder="DATE" class="form-control"> 
																</div>
															</div>
														</div>

														<div class="col-12 col-sm-2 col-md-2 col-lg-2 col-xl-2 d-flex ">
															<div class="form-group">
																<label>GST Type :</label>
															</div>
														</div>
														<div class="col-12 col-sm-10 col-md-10 col-lg-10 col-xl-10">
															<div class="form-group field">
																<div class="controls">
																	<select name="GstType" id="GstType"  onchange ="changegsttype();" style="width: 100%; height:36px;" class="select2 form-control customvalidation custom-select">
																		<option value=""> --Select -- </option>
																		<?php
																		foreach ($getgstTypeData as $value)
																		{
																			?>
																			<option value="<?=$value->GsttypeID;?>"><?=$value->GstTypeName;?></option>
																			<?php
																		}
																		?>
																	</select>
																</div>
															</div>
														</div>

														<div class="col-12 col-sm-2 col-md-2 col-lg-2 col-xl-2 d-flex ">
															<div class="form-group">
																<label>Haste :</label>
															</div>
														</div>
														<div class="col-12 col-sm-10 col-md-10 col-lg-10 col-xl-10">
															<div class="form-group field">
																<div class="controls">
																	<select name="Haste" onchange="hastetoother(this);" id="Haste"  style="width: 100%; height:36px;" class="select2 form-control customvalidation custom-select">
																		<option value=""> --Select -- </option>
																		<?php
																		foreach ($gethasteData as $value)
																		{
																			?>
																			<option value="<?=$value->HasteID;?>"><?=$value->HasteName;?></option>
																			<?php
																		}
																		?>
																	</select>
																</div>
															</div>
														</div>

														

														<div class="col-12 col-sm-2 col-md-2 col-lg-2 col-xl-2 d-flex ">
															<div class="form-group">
																<label>BROKER 	 :</label>
															</div>
														</div>
														<div class="col-12 col-sm-9 col-md-9 col-lg-9 col-xl-9">
															<div class="form-group field">
																<div class="controls">
																	<select name="BrokerID" id="BrokerID"  style="width: 100%; height:36px;" class="select2 form-control BrokerIDadd customvalidation custom-select">
																		<option value=""> --Select -- </option>
																		<?php
																		foreach ($getbrokerData as $qgetbrokerData)
																		{
																			?>
																			<option value="<?=$qgetbrokerData->Ledger_Id		?>"> <?=$qgetbrokerData->LName?> </option>
																			<?php
																		}
																		?>
																	</select>
																</div>
															</div>
														</div>
														<!-- <div class="col-12 col-sm-2 col-md-2 col-lg-1 col-xl-2">
															<i data-toggle="modal" data-target="#responsive-modal" class="fa fa-plus-circle"></i></div>
 														-->
															<div class="col-12 col-sm-1 col-md-1 col-lg-1 col-xl-1">
															<i data-toggle="modal" data-target="#brocker-responsive-modal" class="fa fa-plus-circle"></i></div>


														<div class="col-12 col-sm-2 col-md-2 col-lg-2 col-xl-2 d-flex ">
															<div class="form-group">
																<label>Haste GSTIN	 :</label>
															</div>
														</div>
														<div class="col-12 col-sm-10 col-md-10 col-lg-10 col-xl-10">
															<div class="form-group field">
																<div class="">
																	<input type="text" id="Haste_GSTIN"  name="Haste_GSTIN" placeholder="Haste GSTIN" class="form-control"> 
																</div>
															</div>
														</div>

														<div class="col-12 col-sm-2 col-md-2 col-lg-2 col-xl-2 d-flex ">
															<div class="form-group">
																<label>Dhara :</label>
															</div>
														</div>
														<div class="col-12 col-sm-10 col-md-10 col-lg-10 col-xl-10">
															<div class="form-group field">
																<div class="">
																	<input type="text" id="Dhara"  name="Dhara" placeholder="Dhara" class="form-control adddhara"> 
																</div>
															</div>
														</div>

														<div class="col-12 col-sm-2 col-md-2 col-lg-2 col-xl-2 d-flex ">
															<div class="form-group">
																<label>Grace :</label>
															</div>
														</div>
														<div class="col-12 col-sm-10 col-md-10 col-lg-10 col-xl-10">
															<div class="form-group field">
																<div class="">
																	<input type="text" id="Grace"  name="Grace" placeholder="Grace" class="form-control addgrace"> 
																</div>
															</div>
														</div>

														<!-- <div class="col-12 col-sm-2 col-md-2 col-lg-3 col-xl-2">
															<i data-toggle="modal" data-target="#responsive-modal" class="fa fa-plus-circle"></i></div> -->
														

														<div class="col-12 col-sm-2 col-md-2 col-lg-2 col-xl-2 d-flex ">
															<div class="form-group">
																<label>Station	 :</label>
															</div>
														</div>
														<div class="col-12 col-sm-10 col-md-10 col-lg-10 col-xl-10">
															<div class="form-group field">
																<div class="controls">
																	<select name="Station" id="Station"  style="width: 100%; height:36px;" class="select2 form-control custom-select addstation">
																		<option value="">-Select-</option>
																		<?php 
																		foreach($getStationData as $qgetStationDatapop1)
																		{
																		?>
																			<option value="<?php echo $qgetStationDatapop1->StationID; ?>"> <?php echo $qgetStationDatapop1->StationName; ?></option>
																		<?php 
																		}
																		?>
																	</select>

																</div>
															</div>
														</div>

														<!-- <div class="col-12 col-sm-2 col-md-2 col-lg-3 col-xl-2">
															<i data-toggle="modal" data-target="#responsive-modal-qty" class="fa fa-plus-circle"></i></div> -->

															<div class="col-12 col-sm-2 col-md-2 col-lg-2 col-xl-2 d-flex ">
															<div class="form-group">
																<label>Screen Series	 :</label>
															</div>
															</div>
															<div class="col-12 col-sm-10 col-md-10 col-lg-10 col-xl-10">
																<div class="form-group field">
																	<div class="controls">
																		<select name="ScreenSeries" id="ScreenSeries"  style="width: 100%; height:36px;" class="select2 form-control customvalidation custom-select">
																<option value="">-Select-</option>
																<?php
																foreach ($getscreendata as $value)
																{
																?>
																<option value="<?=$value->ScreenRegisterID;?>"><?=$value->ItemDCut;?></option>
																<?php
																}
																?>
																</select>
																	</div>
																</div>
															</div>


															<div class="col-12 col-sm-2 col-md-2 col-lg-2 col-xl-2 d-flex ">
															<div class="form-group">
																<label>Party GSTIN	 :</label>
															</div>
															</div>
															<div class="col-12 col-sm-10 col-md-10 col-lg-10 col-xl-10">
																<div class="form-group field">
																	<div class="controls">
																		
																	<input type="text"  name="Party_GSTIN" id="Party_GSTIN" placeholder="Enter Party GSTIN" class="form-control greypurbillcalculate">

																	</div>
																</div>
															</div>

													</div>
												</div>
											</div>	
										</div>
										<div class="setresponse">
										</div>

											<div class="formtitle">
											<div class="row removemargin">
												<div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
													<div class="row">
														
														<div class="col-12 col-sm-1 col-md-1 col-lg-1 col-xl-1 d-flex ">
															<div class="form-group">
																<label>Total PCS:</label>
															</div>
														</div>
														<div class="col-12 col-sm-3 col-md-3 col-lg-3 col-xl-3">
															<div class="form-group field">
															<div class="">

																<input type="text"  name="totalpcs" id="totalpcs" placeholder="Enter Total Pcs" class="form-control">

															</div>
														</div>
														</div>

														<div class="col-12 col-sm-1 col-md-1 col-lg-1 col-xl-1 d-flex">
															<div class="form-group">
																<label>Total MTS:</label>
															</div>
														</div>
														<div class="col-12 col-sm-3 col-md-3 col-lg-3 col-xl-3">
															<div class="form-group field">
																<div class="">

																<input type="text"  name="totalmts" id="totalmts" placeholder="Enter Total MTS" class="form-control">

															</div>
															</div>
														</div>

														<div class="col-12 col-sm-1 col-md-1 col-lg-1 col-xl-1 d-flex">
															<div class="form-group">
																<label>Grand Total :</label>
															</div>
														</div>
														<div class="col-12 col-sm-3 col-md-3 col-lg-3 col-xl-3">
															<div class="form-group field">
																<div class="">

																<input type="text"  name="grandtotal" id="grandtotal" placeholder="Enter Grand Total" class="form-control">

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
												<div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
													<div class="row">
														
														<div class="col-12 col-sm-1 col-md-1 col-lg-1 col-xl-1 d-flex ">
															<div class="form-group">
																<label>Packet By	 :</label>
															</div>
														</div>
														<div class="col-12 col-sm-3 col-md-3 col-lg-3 col-xl-3">
															<div class="form-group field">
																<div class="">

																	<input type="text"  name="Obtained_By" id="Obtained_By" placeholder="Enter Packet By" class="form-control">

																</div>
															</div>
														</div>

														<div class="col-12 col-sm-1 col-md-1 col-lg-1 col-xl-1 d-flex">
															<div class="form-group">
																<label>RMK	 :</label>
															</div>
														</div>
														<div class="col-12 col-sm-2 col-md-2 col-lg-2 col-xl-2">
															<div class="form-group field">
																<div class="">
																	<select name="RMK" id="RMK"  style="width: 100%; height:36px;" class="select2 form-control custom-select remarkdata">
																		<option value=""> --Select -- </option>
																	<?php
																	foreach ($getremarkData as $value)
																	{
																		?>
																		<option value="<?=$value->RemarkID;?>"><?=$value->Remark;?></option>
																		<?php
																	}
																	?>
																	</select>
																</div>
															</div>
														</div>

														<div class="col-12 col-sm-1 col-md-1 col-lg-1 col-xl-1">
															<i data-toggle="modal" data-target="#responsive-modalRemark" class="fa fa-plus-circle"></i></div>
<!-- 
														<div class="col-12 col-sm-1 col-md-1 col-lg-1 col-xl-1 d-flex" >
															<div class="form-group">
																<label>X:</label>
															</div>
														</div>
														<div class="col-12 col-sm-3 col-md-3 col-lg-3 col-xl-3">
															<div class="form-group field">
																<div class="">
																	<input type="text"  name="only_x" id="only_x" placeholder="Enter X." class="form-control greypurbillcalculate"> 
																</div>
															</div>
														</div> -->
														<div class="col-12 col-sm-1 col-md-1 col-lg-1 col-xl-1 d-flex ">
															<div class="form-group">
																<label>E-Way Bill No. :</label>
															</div>
														</div>
														<div class="col-12 col-sm-3 col-md-3 col-lg-3 col-xl-3">
															<div class="form-group field">
																<div class="">
																	<input type="text"  name="E_Way_Bill_No" id="E_Way_Bill_No" placeholder="E-Way Bill No" class="form-control greypurbillcalculate">
																</div>
															</div>
														</div>

														<!-- <div class="col-12 col-sm-1 col-md-1 col-lg-1 col-xl-1 d-flex " style="display: none;">
															<div class="form-group" style="display: none;">
																<label>Net Amt :</label>
															</div>
														</div>
														<div class="col-12 col-sm-3 col-md-3 col-lg-3 col-xl-3"  style="display: none;">
															<div class="form-group field">
																<div class="">
																	<input type="text"  name="Net_Amt" id="Net_Amt" placeholder="Net Amt" class="form-control greypurbillcalculate">
																</div>
															</div>
														</div> -->
													</div>
												</div>
											</div>
										</div>
										<div class="formtitle">
											<h4 class="backcolor">LR DETAILS</h4>
											<div class="row removemargin">
												<div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
													<div class="row">
														
														<div class="col-12 col-sm-1 col-md-1 col-lg-1 col-xl-1 d-flex">
															<div class="form-group">
																<label>LR No.:</label>
															</div>
														</div>
														<div class="col-12 col-sm-3 col-md-3 col-lg-3 col-xl-3">
															<div class="form-group field">
																<div class="">
																	<input type="text"  name="lr_no" id="lr_no" placeholder="LR No." class="form-control greypurbillcalculate"> 
																</div>
															</div>
														</div>

														<div class="col-12 col-sm-1 col-md-1 col-lg-1 col-xl-1 d-flex">
															<div class="form-group">
																<label>LR Date.:</label>
															</div>
														</div>
														<div class="col-12 col-sm-3 col-md-3 col-lg-3 col-xl-3">
															<div class="form-group field">
																<div class="">
																	<input type="text" value="<?=date('m/d/Y');?>" name="lr_date" id="lr_date" placeholder="LR Date" class="form-control greypurbillcalculate datepicker-autoclose"> 
																</div>
															</div>
														</div>


														<div class="col-12 col-sm-1 col-md-1 col-lg-1 col-xl-1 d-flex">
															<div class="form-group">
																<label>LR Rec Date:</label>
															</div>
														</div>
														<div class="col-12 col-sm-3 col-md-3 col-lg-3 col-xl-3">
															<div class="form-group field">
																<div class="">
																	<input type="text"  name="lr_rec_date" id="lr_rec_date" placeholder="LR Rec Date" value="<?=date('m/d/Y');?>" class="form-control greypurbillcalculate datepicker-autoclose"> 
																</div>
															</div>
														</div>

														<div class="col-12 col-sm-1 col-md-1 col-lg-1 col-xl-1 d-flex">
															<div class="form-group">
																<label>Weight:</label>
															</div>
														</div>
														<div class="col-12 col-sm-3 col-md-3 col-lg-3 col-xl-3">
															<div class="form-group field">
																<div class="">
																	<input type="text"  name="weight" id="weight" placeholder="Weight" class="form-control greypurbillcalculate"> 
																</div>
															</div>
														</div>


														<div class="col-12 col-sm-1 col-md-1 col-lg-1 col-xl-1 d-flex">
															<div class="form-group">
																<label>Height:</label>
															</div>
														</div>
														<div class="col-12 col-sm-3 col-md-3 col-lg-3 col-xl-3">
															<div class="form-group field">
																<div class="">
																	<input type="text"  name="height" id="height" placeholder="Height" class="form-control greypurbillcalculate"> 
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>


										<div class="formtitle">
											<h4 class="backcolor">Add Less.</h4>
											<div class="row removemargin">
												<div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
													<div class="row">
														
														<div class="col-12 col-sm-1 col-md-1 col-lg-1 col-xl-1 d-flex">
															<div class="form-group">
																<label>Remark:</label>
															</div>
														</div>
														<div class="col-12 col-sm-2 col-md-2 col-lg-2 col-xl-3">
															<div class="form-group field">
																<div class="">

																	<select name="remark1" id="remark1"   style="width: 100%; height:36px;" class="select2 form-control custom-select control remarkdata">

																	<?php
																		foreach ($getremarkData as $value)
																		{
																			?>
																		<option value="<?=$value->RemarkID;?>"><?=$value->Remark;?></option>
																		<?php
																		}
																		?>
																	</select>

																	<!-- <input type="text"  name="remark1" id="remark1" placeholder="Remark" class="form-control">  -->
																</div>
															</div>
														</div>

														<div class="col-12 col-sm-1 col-md-1 col-lg-1 col-xl-1">
															<i data-toggle="modal" data-target="#responsive-modalRemark" class="fa fa-plus-circle"></i></div>


														
														<div class="col-12 col-sm-2 col-md-2 col-lg-2 col-xl-2">
															<div class="form-group field">
																<div class="">
																	<input type="text"  name="grandtotal1" id="grandtotal1" placeholder="Enter Grand Total" class="form-control"> 
																</div>
															</div>
														</div>%


														<div class="col-12 col-sm-2 col-md-2 col-lg-2 col-xl-3">
															<div class="form-group field">
																<div class="">
																	<input type="text"  name="discountless1" id="discountless1" placeholder="Enter Discount Less" class="form-control"> 
																</div>
															</div>
														</div>

														<div class="col-12 col-sm-2 col-md-2 col-lg-2 col-xl-2">
															<div class="form-group field">
																<div class="">
																	<input type="text"  name="amountless" id="amountless" placeholder="Enter Amount Less" class="form-control"> 
																</div>
															</div>
														</div>

													</div>
													<div class="row">
															<div class="col-12 col-sm-1 col-md-1 col-lg-1 col-xl-1 d-flex">
															<div class="form-group">
																<label>Remark:</label>
															</div>
														</div>
														<div class="col-12 col-sm-2 col-md-2 col-lg-2 col-xl-2">
															<div class="form-group field">
																<div class="">

																	<select name="remark2" id="remark2"   style="width: 100%; height:36px;" class="select2 form-control custom-select control remarkdata">

																	<?php
																		foreach ($getremarkData as $value)
																		{
																			?>
																		<option  value="<?=$value->RemarkID;?>"><?=$value->Remark;?></option>
																		<?php
																		}
																		?>
																	</select>

																	<!-- <input type="text"  name="remark2" id="remark2" placeholder="Remark" class="form-control">  -->
																</div>
															</div>
														</div>
														<div class="col-12 col-sm-1 col-md-1 col-lg-1 col-xl-1">
															<i data-toggle="modal" data-target="#responsive-modalRemark" class="fa fa-plus-circle"></i></div>


														
														<div class="col-12 col-sm-2 col-md-2 col-lg-2 col-xl-2">
															<div class="form-group field">
																<div class="">
																	<input type="text"  name="grandtota2" id="grandtota2" placeholder="Enter Grand Total" class="form-control"> 
																</div>
															</div>
														</div> -


														<div class="col-12 col-sm-2 col-md-2 col-lg-2 col-xl-2">
															<div class="form-group field">
																<div class="">
																	<input type="text"  name="discountless2" id="discountless2" placeholder="Enter Discount Less" class="form-control"> 
																</div>
															</div>
														</div>

														<div class="col-12 col-sm-2 col-md-2 col-lg-2 col-xl-2">
															<div class="form-group field">
																<div class="">
																	<input type="text"  name="amountless2" id="amountless2" placeholder="Enter Amount Less" class="form-control"> 
																</div>
															</div>
														</div>

													</div>
													<div class="row">
														<div class="col-12 col-sm-1 col-md-1 col-lg-1 col-xl-1 d-flex">
															<div class="form-group">
																<label>Bill Amount:</label>
															</div>
														</div>
														<div class="col-12 col-sm-3 col-md-3 col-lg-3 col-xl-3">
															<div class="form-group field">
																<div class="">
																	<input type="text"  name="net_amt" id="net_amt" placeholder="Bill Amount" class="form-control"> 
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
												<div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
													<div class="row">

													<div class="col-12 col-sm-1 col-md-1 col-lg-1 col-xl-1 d-flex forhideshowigst">
														<div class="form-group">
															<label>IGST %:</label>
														</div>
													</div>
													<div class="col-12 col-sm-3 col-md-3 col-lg-3 col-xl-3 forhideshowigst">
														<div class="form-group field">
															<div class="">
																<input type="text"  name="igst_persantage" id="igst_persantage" placeholder="IGST %" class="form-control greypurbillcalculate"> 
															</div>
														</div>
													</div>

													<div class="col-12 col-sm-1 col-md-1 col-lg-1 col-xl-1 d-flex">
														<div class="form-group">
															<label>IGST AMT.:</label>
														</div>
													</div>
													<div class="col-12 col-sm-3 col-md-3 col-lg-3 col-xl-3">
														<div class="form-group field">
															<div class="">
																<input type="text"  name="igstamt" id="igstamt" placeholder="IGST AMT." class="form-control greypurbillcalculate"> 
															</div>
														</div>
													</div>

														
														<div class="col-12 col-sm-1 col-md-1 col-lg-1 col-xl-1 d-flex">
															<div class="form-group">
																<label>CGST %:</label>
															</div>
														</div>
														<div class="col-12 col-sm-3 col-md-3 col-lg-3 col-xl-3">
															<div class="form-group field">
																<div class="">
																	<input type="text"  name="cgst_persantage" id="cgst_persantage" placeholder="CGST %" class="form-control greypurbillcalculate"> 
																</div>
															</div>
														</div>


														<div class="col-12 col-sm-1 col-md-1 col-lg-1 col-xl-1 d-flex">
															<div class="form-group">
																<label>CGST AMT.:</label>
															</div>
														</div>
														<div class="col-12 col-sm-3 col-md-3 col-lg-3 col-xl-3">
															<div class="form-group field">
																<div class="">
																	<input type="text"  name="amt" id="amt" placeholder="AMT." class="form-control greypurbillcalculate"> 
																</div>
															</div>
														</div>

														<div class="col-12 col-sm-1 col-md-1 col-lg-1 col-xl-1 d-flex">
															<div class="form-group">
																<label>SGST %:</label>
															</div>
														</div>
														<div class="col-12 col-sm-3 col-md-3 col-lg-3 col-xl-3">
															<div class="form-group field">
																<div class="">
																	<input type="text"  name="sgst_persantage" id="sgst_persantage" placeholder="SGST %" class="form-control greypurbillcalculate"> 
																</div>
															</div>
														</div>


														<div class="col-12 col-sm-1 col-md-1 col-lg-1 col-xl-1 d-flex">
															<div class="form-group">
																<label>SGST AMT.:</label>
															</div>
														</div>
														<div class="col-12 col-sm-3 col-md-3 col-lg-3 col-xl-3">
															<div class="form-group field">
																<div class="">
																	<input type="text"  name="sgdt_amt" id="sgdt_amt" placeholder="SGST AMT" class="form-control"> 
																</div>
															</div>
														</div>


														<div class="col-12 col-sm-1 col-md-1 col-lg-1 col-xl-1 d-flex">
															<div class="form-group">
																<label>Taxable Value:</label>
															</div>
														</div>
														<div class="col-12 col-sm-3 col-md-3 col-lg-3 col-xl-3">
															<div class="form-group field">
																<div class="">
																	<input type="text"  name="Taxable_Value" id="Taxable_Value" placeholder="Taxable Value" class="form-control greypurbillcalculate"> 
																</div>
															</div>
														</div>

														<div class="col-12 col-sm-1 col-md-1 col-lg-1 col-xl-1 d-flex">
															<div class="form-group">
																<label>Net Amount:</label>
															</div>
														</div>
														<div class="col-12 col-sm-3 col-md-3 col-lg-3 col-xl-3">
															<div class="form-group field">
																<div class="">
																	<input type="text"  name="Bill_Amount" id="Bill_Amount" placeholder="New Amount" class="form-control greypurbillcalculate"> 
																</div>
															</div>
														</div>

														<div class="col-12 col-sm-1 col-md-1 col-lg-1 col-xl-1 d-flex">
															<div class="form-group">
																<label>Net After Tds:</label>
															</div>
														</div>
														<div class="col-12 col-sm-3 col-md-3 col-lg-3 col-xl-3">
															<div class="form-group field">
																<div class="">
																	<input type="text"  name="Net_After_Tds" id="Net_After_Tds" placeholder="Net After Tds" class="form-control greypurbillcalculate"> 
																</div>
															</div>
														</div>

														<!-- <div class="col-12 col-sm-1 col-md-1 col-lg-1 col-xl-1 d-flex">
															<div class="form-group">
																<label>E-Way Bill No:</label>
															</div>
														</div>
														<div class="col-12 col-sm-3 col-md-3 col-lg-3 col-xl-3">
															<div class="form-group field">
																<div class="">
																	<input type="text"  name="E_Way_Bill_No" id="E_Way_Bill_No" placeholder="E-Way Bill No" class="form-control greypurbillcalculate"> 
																</div>
															</div>
														</div> -->

													</div>
												</div>
											</div>
										</div>


										<div class="formtitle">
											<h4 class="backcolor">Payment Det.</h4>
											<div class="row removemargin">
												<div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
													<div class="row">
														
														<div class="col-12 col-sm-1 col-md-1 col-lg-1 col-xl-1 d-flex">
															<div class="form-group">
																<label>Paid Date:</label>
															</div>
														</div>
														<div class="col-12 col-sm-3 col-md-3 col-lg-3 col-xl-3">
															<div class="form-group field">
																<div class="">
																	<input type="text"  name="Paid_Date" id="Paid_Date" placeholder="Paid Date" class="form-control greypurbillcalculate"> 
																</div>
															</div>
														</div>


														<div class="col-12 col-sm-1 col-md-1 col-lg-1 col-xl-1 d-flex">
															<div class="form-group">
																<label>DISC. %:</label>
															</div>
														</div>
														<div class="col-12 col-sm-3 col-md-3 col-lg-3 col-xl-3">
															<div class="form-group field">
																<div class="">
																	<input type="text"  name="discount" id="discount" placeholder="Discount" class="form-control greypurbillcalculate"> 
																</div>
															</div>
														</div>

														<div class="col-12 col-sm-1 col-md-1 col-lg-1 col-xl-1 d-flex">
															<div class="form-group">
																<label>Pack/Folt:</label>
															</div>
														</div>
														<div class="col-12 col-sm-3 col-md-3 col-lg-3 col-xl-3">
															<div class="form-group field">
																<div class="">
																	<input type="text"  name="Pack" id="Pack" placeholder="Pack/Folt" class="form-control greypurbillcalculate"> 
																</div>
															</div>
														</div>


														<div class="col-12 col-sm-1 col-md-1 col-lg-1 col-xl-1 d-flex">
															<div class="form-group">
																<label>R.D.:</label>
															</div>
														</div>
														<div class="col-12 col-sm-3 col-md-3 col-lg-3 col-xl-3">
															<div class="form-group field">
																<div class="">
																	<input type="text"  name="rd" id="rd" placeholder="R.D." class="form-control greypurbillcalculate"> 
																</div>
															</div>
														</div>

														<div class="col-12 col-sm-1 col-md-1 col-lg-1 col-xl-1 d-flex">
															<div class="form-group">
																<label>Sweets:</label>
															</div>
														</div>
														<div class="col-12 col-sm-3 col-md-3 col-lg-3 col-xl-3">
															<div class="form-group field">
																<div class="">
																	<input type="text"  name="sweets" id="sweets" placeholder="Sweets" class="form-control greypurbillcalculate"> 
																</div>
															</div>
														</div>

														<div class="col-12 col-sm-1 col-md-1 col-lg-1 col-xl-1 d-flex">
															<div class="form-group">
																<label>Oth/Bc:</label>
															</div>
														</div>
														<div class="col-12 col-sm-3 col-md-3 col-lg-3 col-xl-3">
															<div class="form-group field">
																<div class="">
																	<input type="text"  name="Oth_Bc" id="Oth_Bc" placeholder="Oth/Bc" class="form-control greypurbillcalculate"> 
																</div>
															</div>
														</div>

														<div class="col-12 col-sm-1 col-md-1 col-lg-1 col-xl-1 d-flex">
															<div class="form-group">
																<label>Add Amt:</label>
															</div>
														</div>
														<div class="col-12 col-sm-3 col-md-3 col-lg-3 col-xl-3">
															<div class="form-group field">
																<div class="">
																	<input type="text"  name="add_amt" id="add_amt" placeholder="Add Amt" class="form-control greypurbillcalculate"> 
																</div>
															</div>
														</div>

														<div class="col-12 col-sm-1 col-md-1 col-lg-1 col-xl-1 d-flex">
															<div class="form-group">
																<label>Tds Amt:</label>
															</div>
														</div>
														<div class="col-12 col-sm-3 col-md-3 col-lg-3 col-xl-3">
															<div class="form-group field">
																<div class="">
																	<input type="text"  name="tds_amt" id="tds_amt" placeholder="Tds Amt" class="form-control greypurbillcalculate"> 
																</div>
															</div>
														</div>

														<div class="col-12 col-sm-1 col-md-1 col-lg-1 col-xl-1 d-flex">
															<div class="form-group">
																<label>G.R.:</label>
															</div>
														</div>
														<div class="col-12 col-sm-3 col-md-3 col-lg-3 col-xl-3">
															<div class="form-group field">
																<div class="">
																	<input type="text"  name="gr" id="gr" placeholder="G.R." class="form-control greypurbillcalculate"> 
																</div>
															</div>
														</div>

														<div class="col-12 col-sm-1 col-md-1 col-lg-1 col-xl-1 d-flex">
															<div class="form-group">
																<label>Paid Amount:</label>
															</div>
														</div>
														<div class="col-12 col-sm-3 col-md-3 col-lg-3 col-xl-3">
															<div class="form-group field">
																<div class="">
																	<input type="text"  name="paid_amount" id="paid_amount" placeholder="Paid Amount" class="form-control greypurbillcalculate"> 
																</div>
															</div>
														</div>

														<div class="col-12 col-sm-1 col-md-1 col-lg-1 col-xl-1 d-flex">
															<div class="form-group">
																<label>Bill Amount:</label>
															</div>
														</div>
														<div class="col-12 col-sm-3 col-md-3 col-lg-3 col-xl-3">
															<div class="form-group field">
																<div class="">
																	<input type="text"  name="Bill_Amount" id="Bill_Amount" placeholder="Bill Amount" class="form-control greypurbillcalculate"> 
																</div>
															</div>
														</div>

														<div class="col-12 col-sm-1 col-md-1 col-lg-1 col-xl-1 d-flex">
															<div class="form-group">
																<label>Net After Tds:</label>
															</div>
														</div>
														<div class="col-12 col-sm-3 col-md-3 col-lg-3 col-xl-3">
															<div class="form-group field">
																<div class="">
																	<input type="text"  name="Net_After_Tds" id="Net_After_Tds" placeholder="Net After Tds" class="form-control greypurbillcalculate"> 
																</div>
															</div>
														</div>

														<!-- <div class="col-12 col-sm-1 col-md-1 col-lg-1 col-xl-1 d-flex">
															<div class="form-group">
																<label>E-Way Bill No:</label>
															</div>
														</div>
														<div class="col-12 col-sm-3 col-md-3 col-lg-3 col-xl-3">
															<div class="form-group field">
																<div class="">
																	<input type="text"  name="E_Way_Bill_No" id="E_Way_Bill_No" placeholder="E-Way Bill No" class="form-control greypurbillcalculate"> 
																</div>
															</div>
														</div> -->

													</div>
												</div>
											</div>
										</div>


										
										
										<div class="row">
											<div class="form-group">
												<div class="text-xs-right" style="margin-left: 8px;">
													<button type="submit" class="btn btn-success">Submit</button>
													<a  href="<?php echo base_url()?>FinishPurchaseOrderBill" class="btn btn-info">
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
							<form  class="" id="editfinishpurchasefrm" method="POST" name="" novalidate>

								<input type="hidden" value="<?=$editpurchaseOrderBilldata['Finish_Purchase_Id'];?>" id="finishpurchaseorderid" name="finishpurchaseorderid">
									
								<div class="row common_master_form_div">
									<div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
										<div class="formtitle">
											<div class="row removemargin">
												<div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
													<div class="row">
														<div class="col-12 col-sm-2 col-md-2 col-lg-2 col-xl-2 d-flex">
															<div class="form-group">
																<label>COMAPNY	 :</label>
															</div>
														</div>
														<div class="col-12 col-sm-9 col-md-9 col-lg-9 col-xl-9">
															<div class="form-group">
																<div class="">
																	<select name="CompanyId" id="CompanyId"  style="width: 100%; height:36px;" class="select2 form-control custom-select forcmp">
																		<option value=""> --Select -- </option>
																		<?php
																		foreach ($getCompanyData as $qgetCompanyDataedit)
																		{
																			?>
																			<option <?php if($qgetCompanyDataedit->CompanyID == $editpurchaseOrderBilldata['Comapny_Id']){echo "selected";}?> value="<?=$qgetCompanyDataedit->CompanyID;?>"> <?=$qgetCompanyDataedit->CompanyName?> </option>
																			<?php
																		}
																		?>
																		
																	</select>
																</div>
															</div>
														</div>
														<div class="col-12 col-sm-1 col-md-1 col-lg-1 col-xl-1">
															<i data-toggle="modal" data-target="#responsive-modal-company" class="fa fa-plus-circle"></i>
														</div>
														<div class="col-12 col-sm-4 col-md-2 col-lg-2 col-xl-2 d-flex">
															<div class="form-group">
																<label> Type :</label>
															</div>
														</div>
														<div class="col-12 col-sm-8 col-md-10 col-lg-4 col-xl-10">
															<div class="form-group">
																<div class="controls">
																	<select name="Type" id="Type"  class="form-control customvalidation">
																	<option selected="" value="Finish Purchase Bill">Finish Purchase Bill </option>
																		
																	</select>
																</div>
															</div>
														</div>
														<div class="col-12 col-sm-4 col-md-2 col-lg-2 col-xl-2 d-flex ">
															<div class="form-group">
																<label>Voucher NO.  	 :</label>
															</div>
														</div>
														<div class="col-12 col-sm-8 col-md-10 col-lg-4 col-xl-10">
															<div class="form-group">
																<div class="">
																	<input type="text"  name="Voucher_NO" id="Voucher_NO" placeholder="Voucher NO NO." class="form-control" value="<?=$editpurchaseOrderBilldata['Voucher'];?>">
																</div>
															</div>
														</div>


														<div class="col-12 col-sm-2 col-md-2 col-lg-2 col-xl-2 d-flex">
															<div class="form-group">
																<label>LR No./AWB   	 :</label>
															</div>
														</div>
														<div class="col-12 col-sm-10 col-md-10 col-lg-10 col-xl-10">
															<div class="form-group field">
																<div class="">
																	<input type="text"  name="LR_No" id="LR_No" placeholder="LR No." class="form-control" value="<?=$editpurchaseOrderBilldata['Lr_No_Awb'];?>">
																</div>
															</div>
														</div>

														<div class="col-12 col-sm-2 col-md-2 col-lg-2 col-xl-2 d-flex ">
															<div class="form-group">
																<label>Party:</label>
															</div>
														</div>
														<div class="col-12 col-sm-9 col-md-9 col-lg-9 col-xl-9">
															<div class="form-group">
																<div class="">
																	<select name="PartyAcID" id="PartyAcID" style="width: 100%; height:36px;" class="select2 form-control custom-select customvalidation PartyAcID prtsv" onchange="getpartytootheredit(this);">
																		<option value=""> --Select -- </option>
																		<?php
																		foreach ($getpartyacData as $qgetpartyacData)
																		{
																			?>
																			<option <?php if($editpurchaseOrderBilldata['Party_Id'] == $qgetpartyacData->Ledger_Id){echo "selected";}?> value="<?=$qgetpartyacData->Ledger_Id		?>"> <?=$qgetpartyacData->LName?> </option>
																			<?php
																		}
																		?>
																	</select>
																</div>
															</div>
														</div>
														<div class="col-12 col-sm-1 col-md-1 col-lg-1 col-xl-1">
															<i data-toggle="modal" data-target="#party-responsive-modal" class="fa fa-plus-circle"></i></div>


														<div class="col-12 col-sm-2 col-md-2 col-lg-2 col-xl-2 d-flex">
															<div class="form-group">
																<label>STATE :</label>
															</div>
														</div>
														<div class="col-12 col-sm-10 col-md-10 col-lg-10 col-xl-10">
															<div class="form-group">
																<div class="">
																	<select name="StateID" id="StateID"  style="width: 100%; height:36px;" class="select2 form-control custom-select stateidcls EditStateID" onchange="editstatetodata(this);">
																		<option value=""> --Select -- </option>
																		<?php
																		foreach ($getstateData as $qgetstateData)
																		{
																			?>
																			<option <?php if($editpurchaseOrderBilldata['State_Id'] == $qgetstateData->stateID){echo "selected";}?> value="<?=$qgetstateData->stateID?>"> <?=$qgetstateData->stateName." (".$qgetstateData->StateCode.")" ?> </option>
																			<?php
																		}
																		?>
																		
																	</select>
																</div>
															</div>
														</div>

														<div class="col-12 col-sm-2 col-md-2 col-lg-2 col-xl-2 d-flex">
															<div class="form-group">
																<label>Transport 	 :</label>
															</div>
														</div>
														<div class="col-12 col-sm-10 col-md-10 col-lg-10 col-xl-10">
															<div class="form-group">
																<div class="">
																	<select name="Transport" id="Transport"   style="width: 100%; height:36px;" class="select2 form-control custom-select Transportcls TransportID">
																		<option value=""> --Select -- </option>
																		<?php
																		foreach ($gettransportData as $value)
																		{
																			?>
																			<option <?php if($editpurchaseOrderBilldata['Transport_Id'] == $value->transportID){echo "selected";}?> value="<?=$value->transportID;?>"><?=$value->transportName;?></option>
																			<?php
																		}
																		?>
																		
																	</select>
																</div>
															</div>
														</div>

														<div class="col-12 col-sm-2 col-md-2 col-lg-2 col-xl-2 d-flex ">
															<div class="form-group">
																<label>ORD/REF:</label>
															</div>
														</div>
														<div class="col-12 col-sm-10 col-md-10 col-lg-10 col-xl-10">
															<div class="form-group">
																<div class="">
																	<input type="text" id="ord_ref"  name="ord_ref" placeholder="ORD/REF" class="form-control" value="<?=$editpurchaseOrderBilldata['Ord_Ref']?>"> 
																</div>
															</div>
														</div>

														<div class="col-12 col-sm-4 col-md-2 col-lg-3 col-xl-2 d-flex">
															<div class="form-group">
																<label>Bill NO.	 :</label>
															</div>
														</div>
														<div class="col-12 col-sm-9 col-md-9 col-lg-9 col-xl-9">
															<div class="form-group">
																<div class="">
																	<select name="Bill_NO" id="Bill_NO"  style="width: 100%; height:36px;" class="select2 form-control custom-select GreyPOrderNo EditGreyPOrderNo">
																		<option value=""> --Select -- </option>
																		<?php
																		foreach ($getordernoData as $qgetordernoData)
																		{
																			?>
																			<option <?php if($editpurchaseOrderBilldata['Bill_No'] == $qgetordernoData->GreyOrderNo){echo "selected";}?> value="<?=$qgetordernoData->GreyOrderNo;?>"> <?=$qgetordernoData->GreyOrderNo?> </option>
																			<?php
																		}
																		?>
																	</select>
																</div>
															</div>
														</div>
														<!-- <div class="col-12 col-sm-2 col-md-2 col-lg-3 col-xl-2">
															<i data-toggle="modal" data-target="#responsive-modal-greypurchase" class="fa fa-plus-circle"></i></div> -->

															<div class="col-12 col-sm-4 col-md-2 col-lg-2 col-xl-2 d-flex ">
															<div class="form-group">
																<label>Case No.:</label>
															</div>
														</div>
														<div class="col-12 col-sm-10 col-md-10 col-lg-10 col-xl-10">
															<div class="form-group">
																<div class="">
																	<input type="text"  name="case_no" id="case_no" placeholder="Case NO." value="<?=$Voucher;?>" class="form-control">
																</div>
															</div>
														</div>
													</div>
												</div>
												<div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
													<div class="row">
														<div class="col-12 col-sm-2 col-md-2 col-lg-2 col-xl-2 d-flex">
															<div class="form-group">
																<label>DATE	 :</label>
															</div>
														</div>
														<div class="col-12 col-sm-10 col-md-10 col-lg-10 col-xl-10">
															<div class="form-group">
																<div class="">
																	<input type="text" id=""  name="FinishPurchaseBillOrderDate" placeholder="DATE" class="form-control datepicker-autoclose" value="<?=$editpurchaseOrderBilldata['Lr_Date']?>"> 
																</div>
															</div>
														</div>

														<div class="col-12 col-sm-2 col-md-2 col-lg-2 col-xl-2 d-flex ">
															<div class="form-group">
																<label>GST Type :</label>
															</div>
														</div>
														<div class="col-12 col-sm-10 col-md-10 col-lg-10 col-xl-10">
															<div class="form-group">
																<div class="controls">
																<select name="GstType" id="GstType"  style="width: 100%; height:36px;"  onchange ="editchangegsttype();" class="select2 form-control custom-select GstType">
																	<option value=""> --Select -- </option>
																	<?php
																		foreach ($getgstTypeData as $value)
																		{
																			?>
																			<option <?php if($editpurchaseOrderBilldata['Gst_Type_Id'] == $value->GsttypeID){echo "selected";}?> value="<?=$value->GsttypeID;?>"><?=$value->GstTypeName;?></option>
																			<?php
																		}
																		?>
																</select>
																</div>
															</div>
														</div>

														<div class="col-12 col-sm-2 col-md-2 col-lg-2 col-xl-2 d-flex ">
															<div class="form-group">
																<label>Haste :</label>
															</div>
														</div>
														<div class="col-12 col-sm-10 col-md-10 col-lg-10 col-xl-10">
															<div class="form-group">
																<div class="">
																	<select name="Haste" id="Haste"   style="width: 100%; height:36px;" class="select2 form-control custom-select">
																	<option value=""> --Select -- </option>
																	<?php
																	foreach ($gethasteData as $value)
																	{
																		?>
																		<option <?php if($editpurchaseOrderBilldata['Haste_Id'] == $value->HasteID){echo "selected";}?> value="<?=$value->HasteID;?>"><?=$value->HasteName;?></option>
																		<?php
																	}
																	?>
																	</select>
																</div>
															</div>
														</div>
														
														<div class="col-12 col-sm-2 col-md-2 col-lg-2 col-xl-2 d-flex">
															<div class="form-group">
																<label>BROKER 	:</label>
															</div>
														</div>
														<div class="col-12 col-sm-9 col-md-9 col-lg-9 col-xl-9">
															<div class="form-group">
																<div class="">
																	<select name="BrokerID" id="BrokerID"  style="width: 100%; height:36px;" class="select2 form-control custom-select BrokerIDedit">
																	<option value=""> --Select -- </option>
																	<?php
																	foreach ($getbrokerData as $qgetbrokerData)
																	{
																		?>
																		<option <?php if($editpurchaseOrderBilldata['Brocker_Id'] == $qgetbrokerData->Ledger_Id){echo 'selected';}?> value="<?=$qgetbrokerData->Ledger_Id?>"> <?=$qgetbrokerData->LName?> </option>
																			<?php
																		}
																		?>
																	</select>
																</div>
															</div>
														</div>

														<div class="col-12 col-sm-1 col-md-1 col-lg-1 col-xl-1">
															<i data-toggle="modal" data-target="#brocker-responsive-modal" class="fa fa-plus-circle"></i></div>

														<div class="col-12 col-sm-2 col-md-2 col-lg-2 col-xl-2 d-flex ">
															<div class="form-group">
																<label>Haste GSTIN	 :</label>
															</div>
														</div>
														<div class="col-12 col-sm-10 col-md-10 col-lg-10 col-xl-10">
															<div class="form-group">
																<div class="">
																	<input type="text" id="Haste_GSTIN"  name="Haste_GSTIN" placeholder="Haste GSTIN" class="form-control" value=""> 
																</div>
															</div>
														</div>

														<div class="col-12 col-sm-2 col-md-2 col-lg-2 col-xl-2 d-flex">
															<div class="form-group">
																<label>Dhara :</label>
															</div>
														</div>
														<div class="col-12 col-sm-10 col-md-10 col-lg-10 col-xl-10">
															<div class="form-group">
																<div class="">
																	<input type="text" id="Dhara"  name="Dhara" placeholder="Dhara" class="form-control" value="<?=$editpurchaseOrderBilldata['Dhara']?>"> 
																</div>
															</div>
														</div>

														<div class="col-12 col-sm-2 col-md-2 col-lg-2 col-xl-2 d-flex">
															<div class="form-group">
																<label>Grace :</label>
															</div>
														</div>
														<div class="col-12 col-sm-10 col-md-10 col-lg-10 col-xl-10">
															<div class="form-group">
																<div class="">
																	<input type="text" id="Grace"  name="Grace" placeholder="Grace" class="form-control" value="<?=$editpurchaseOrderBilldata['Grace']?>"> 
																</div>
															</div>
														</div>

														<!-- <div class="col-12 col-sm-2 col-md-2 col-lg-3 col-xl-2">
															<i data-toggle="modal" data-target="#responsive-modal" class="fa fa-plus-circle"></i></div> -->
														

														<div class="col-12 col-sm-2 col-md-2 col-lg-2 col-xl-2 d-flex ">
															<div class="form-group">
																<label>Station	 :</label>
															</div>
														</div>
														<div class="col-12 col-sm-10 col-md-10 col-lg-10 col-xl-10">
															<div class="form-group">
																<div class="controls">
																	<select name="Station" id="Station"   style="width: 100%; height:36px;" class="select2 form-control custom-select">
																	<option value="">-Select-</option>
																	<?php
																	foreach ($getstationData as $value)
																	{
																		?>
																		<option <?php if($editpurchaseOrderBilldata['Station_Id'] == $value->StationID){echo "selected";}?> value="<?=$value->StationID;?>">
																			<?= $value->StationName;?>
																		</option>
																		<?php
																	}
																	?>
																	</select>
																</div>
															</div>
														</div>

														<!-- <div class="col-12 col-sm-2 col-md-2 col-lg-3 col-xl-2">
															<i data-toggle="modal" data-target="#responsive-modal-qty" class="fa fa-plus-circle"></i></div> -->

															<div class="col-12 col-sm-2 col-md-2 col-lg-2 col-xl-2 d-flex ">
															<div class="form-group">
															</div>
															</div>
															<div class="col-12 col-sm-10 col-md-10 col-lg-10 col-xl-10">
																<div class="form-group">
																	<div class="">
																	<select name="ScreenSeries" id="ScreenSeries"   style="width: 100%; height:36px;" class="select2 form-control custom-select">
																		<option value="">-Select-</option>
																		<?php
																		foreach ($getscreendata as $value)
																		{
																			?>
																			<option <?php if($editpurchaseOrderBilldata['Screen_Series']== $value->ScreenRegisterID){echo 'selected';}?> value="<?=$value->ScreenRegisterID;?>"><?=$value->ItemDCut;?></option>
																			<?php
																		}
																		?>
																	</select>
																	</div>
																</div>
															</div>


															<div class="col-12 col-sm-2 col-md-2 col-lg-2 col-xl-2 d-flex">
															<div class="form-group">
																<label>Party GSTIN	 :</label>
															</div>
															</div>
															<div class="col-12 col-sm-10 col-md-10 col-lg-10 col-xl-10">
																<div class="form-group">

																	<input type="text" id="Party_GSTIN"  name="Party_GSTIN" placeholder="Party Gstin" class="form-control EditPartyGstin" value="<?=$editpurchaseOrderBilldata['Party_Gstin']?>">
																</div>
															</div>
													</div>
												</div>
											</div>	
										</div>
										<input type="hidden" name="editval" id="editval" value="yes">

										<!-- <div class="displaydata">
										</div> -->
										<?php
										$ci=& get_instance();
										$ci->load->model('Transaction_model');
										$collection = $ci->db->query("SELECT * from finish_purchase_details where Finish_Purchase_Id = '".$editpurchaseOrderBilldata['Finish_Purchase_Id']."'")->result();
										if(sizeof($collection) > 0)
										{
											?>
											<table id="finshprinttbl" class="table order-list">
												<thead>
												<tr>
													<td>Pick Item</td>
													<td></td>
													<td>Bundles</td>
													<td>Category</td>
													<td>Packing</td>
													<td>Unit</td>
													<td>Pcs</td>
													<td>Cut</td>
													<td>Mts/Qty</td>
													<td>Rate</td>
													<td>Amount</td>
												</tr>
												</thead>
												<tbody>

												<?php
												//$Finish_Purchase_Id = $findbilldatabyordrefdata['Finish_Purchase_Id'];

												$m = 0;
												foreach ($collection as $purchase_details) {
													?>
													<tr>
														<td style="padding: 0.2rem !important;">
															<select name="itemdetails<?= $m; ?>" onchange="getitemdata(<?= $m; ?>);"
																	id="itemdetails<?= $m; ?>" class="form-control itemdetails<?= $m; ?>">
																<?php
																$getitemdetailsdata = $ci->Transaction_model->getItemDetailsData();
																foreach ($getitemdetailsdata as $value) {
																	?>
																	<option <?php if ($purchase_details->Item_Id == $value->ItemdetailID) {
																		echo "selected";
																	} ?> value="<?= $value->ItemdetailID; ?>"><?= $value->IName; ?></option>
																	<?php
																}
																?>
															</select>

														</td>
														<td  style="padding: 0.2rem !important;">
															<i data-toggle="modal" data-target="#responsive-modal-item" onclick="setcounterhd(<?= $m; ?>);" class="fa fa-plus-circle"></i>
														</td>
														<td style="padding: 0.2rem !important;">
															<input type="text" onclick="setcounterhd(<?= $m; ?>);" name="bundles<?= $m; ?>"
																   onfocusout="bundlecal1(<?= $m; ?>);" id="bundles<?= $m; ?>"
																   class="form-control bundles<?= $m; ?>" placeholder="Bundles"
																   value="<?= $purchase_details->Bundles ?>"/>
														</td>
														<td style="padding: 0.2rem !important;">
															<select name="category<?= $m; ?>" id="category<?= $m; ?>"
																	class="form-control category<?= $m; ?>">
																<?php
																$getCategoryData = $ci->Transaction_model->getCategoryData();
																foreach ($getCategoryData as $value) {
																	?>
																	<option <?php if ($purchase_details->Category_Id == $value->CategoryID) {
																		echo "selected";
																	} ?> value="<?= $value->CategoryID; ?>"><?= $value->CategoryName; ?></option>
																	<?php
																}
																?>
															</select>
														</td>
														<td style="padding: 0.2rem !important;">
															<select name="packing<?= $m; ?>" id="packing<?= $m; ?>" class="form-control packing<?= $m; ?>">
																<?php
																$getPackageData = $ci->Transaction_model->getPackageData();
																foreach ($getPackageData as $value) {
																	?>
																	<option <?php if ($purchase_details->Packing_Id == $value->PackingID) {
																		echo "selected";
																	} ?> value="<?= $value->PackingID; ?>"><?= $value->PackingName; ?></option>
																	<?php
																}
																?>
															</select>
														</td>
														<td style="padding: 0.2rem !important;">
															<select name="unit<?= $m; ?>" id="unit<?= $m; ?>"
																	class="form-control editunit<?= $m; ?> unit<?= $m; ?>"
																	onchange="changecalculation(<?= $m; ?>)">

																<option <?php if ($purchase_details->Unit == 'pcs') {
																	echo "selected";
																} ?> value="pcs">Pcs
																</option>
																<option <?php if ($purchase_details->Unit == 'mts') {
																	echo "selected";
																} ?> value="mts">MTS
																</option>
																<option <?php if ($purchase_details->Unit == 'kg') {
																	echo "selected";
																} ?> value="kg">KG
																</option>
																<option <?php if ($purchase_details->Unit == 'suit') {
																	echo "selected";
																} ?> value="suit">Suit
																</option>
																<option <?php if ($purchase_details->Unit == 'other') {
																	echo "selected";
																} ?> value="other">Other
																</option>
															</select>
														</td>
														<td style="padding: 0.2rem !important;">
															<input type="text" onfocusout="finishpurchase('<?= $m; ?>');" name="pcs<?= $m; ?>"
																   id="pcs<?= $m; ?>" class="form-control pcsclassedit pcs<?= $m; ?>" placeholder="Pcs"
																   value="<?= $purchase_details->Pcs; ?>"/>
														</td>
														<td style="padding: 0.2rem !important;">
															<input type="text" onfocusout="finishpurchase('<?= $m; ?>');" name="cut<?= $m; ?>"
																   id="cut<?= $m; ?>" class="form-control Cutter<?= $m; ?> cut<?= $m; ?>" placeholder="Cut"
																   value="<?= $purchase_details->Cut; ?>" value=""/>
														</td>
														<td style="padding: 0.2rem !important;">
															<input type="text" name="mts<?= $m; ?>" id="mts<?= $m; ?>"
																   class="form-control editmtscls mts<?= $m; ?>" placeholder="Mts"
																   value="<?= $purchase_details->Mts_Qty; ?>"/>
														</td>
														<td style="padding: 0.2rem !important;">
															<input type="text" name="rate<?= $m; ?>" onfocusout="finishpurchase('<?= $m; ?>');"
																   id="rate<?= $m; ?>" class="form-control editRate<?= $m; ?> Rate<?= $m; ?>"
																   placeholder="Rate" value="<?= $purchase_details->Rate; ?>"/>
														</td>
														<td style="padding: 0.2rem !important;">
															<input type="text" name="amount<?= $m; ?>" id="amount<?= $m; ?>"
																   class="form-control editamount editamount<?= $m; ?> amount<?= $m; ?>"
																   placeholder="Amount" value="<?= $purchase_details->Amount; ?>"/>
														</td>

														 <td style="padding: 0.2rem !important;"><input type="button" class="finishbtnDel btn btn-md btn-danger"  value="Delete"></td>

													</tr>
													<?php
													$m++;
												}
												?>

												</tbody>
												<tfoot>
												<input type="hidden" class="" id="finishcountdata" name="finishcountdata" value="<?= $m; ?>">
												<tr>
													<td colspan="16" style="text-align: left;">
														<input type="button" class="btn btn-lg btn-block addfinishpurchase" id="addfinishpurchase" value="Add Row" />
													</td>
								                </tr>
												<tr>
												</tr>
												</tfoot>
											</table>
											<?php
										}
										?>



											<div class="formtitle">
											<div class="row removemargin">
												<div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
													<div class="row">
														<div class="col-12 col-sm-1 col-md-1 col-lg-1 col-xl-1 d-flex ">
															<div class="form-group">
																<label>Total PCS:</label>
															</div>
														</div>
														<div class="col-12 col-sm-3 col-md-3 col-lg-3 col-xl-3">
															<div class="form-group field">
															<div class="">

																<input type="text" value="<?=$editpurchaseOrderBilldata['Total_Pcs']?>"  name="totalpcs" id="totalpcs" placeholder="Enter Total Pcs" class="form-control totalpcs">

															</div>
														</div>
														</div>

														<div class="col-12 col-sm-1 col-md-1 col-lg-1 col-xl-1 d-flex">
															<div class="form-group">
																<label>Total MTS:</label>
															</div>
														</div>
														<div class="col-12 col-sm-3 col-md-3 col-lg-3 col-xl-3">
															<div class="form-group field">
																<div class="">

																<input type="text" value="<?=$editpurchaseOrderBilldata['Total_Mts']?>"  name="totalmts" id="totalmts" placeholder="Enter Total MTS" class="form-control edittotalmts">

															</div>
															</div>
														</div>

														<div class="col-12 col-sm-1 col-md-1 col-lg-1 col-xl-1 d-flex">
															<div class="form-group">
																<label>Grand Total :</label>
															</div>
														</div>
														<div class="col-12 col-sm-3 col-md-3 col-lg-3 col-xl-3">
															<div class="form-group field">
																<div class="">

																<input type="text" value="<?=$editpurchaseOrderBilldata['Grand_Total']?>" name="grandtotal" id="grandtotal" placeholder="Enter Grand Total" class="form-control editgrandtotal">
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
												<div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
													<div class="row">
														
														<div class="col-12 col-sm-1 col-md-1 col-lg-1 col-xl-1 d-flex ">
															<div class="form-group">
																<label>Packet By	 :</label>
															</div>
														</div>
														<div class="col-12 col-sm-3 col-md-3 col-lg-3 col-xl-3">
															<div class="form-group field">
																<div class="">
																	<!-- <select name="Obtained_By" id="Obtained_By"  class="form-control">
																		<option value=""> --Select -- </option>
																	
																	</select> -->
																	<input type="text" id="Obtained_By"  name="Obtained_By" placeholder="Packet By" class="form-control" value="<?=$editpurchaseOrderBilldata['Obtain_By']?>"> 
																</div>
															</div>
														</div>

														<div class="col-12 col-sm-1 col-md-1 col-lg-1 col-xl-1 d-flex">
															<div class="form-group">
																<label>RMK	 :</label>
															</div>
														</div>
														<div class="col-12 col-sm-2 col-md-2 col-lg-2 col-xl-2">
															<div class="form-group field">
																<div class="">
																	<select name="RMK" id="RMK"   style="width: 100%; height:36px;" class="select2 form-control custom-select">
																		<option value=""> --Select -- </option>
																		<?php
																		foreach ($getremarkData as $value)
																		{
																			?>
																		<option <?php if($editpurchaseOrderBilldata['Remark_Id'] ==$value->RemarkID){echo "selected";}?> value="<?=$value->RemarkID;?>"><?=$value->Remark;?></option>
																		<?php
																		}
																		?>
																	</select>
																</div>
															</div>
														</div>
														<div class="col-12 col-sm-1 col-md-1 col-lg-1 col-xl-1">
															<i data-toggle="modal" data-target="#responsive-modalRemark" class="fa fa-plus-circle"></i></div>

														<!-- <div class="col-12 col-sm-1 col-md-1 col-lg-1 col-xl-1 d-flex">
															<div class="form-group">
																<label>X:</label>
															</div>
														</div>
														<div class="col-12 col-sm-3 col-md-3 col-lg-3 col-xl-3">
															<div class="form-group field">
																<div class="">
																	<input value="<?=$editpurchaseOrderBilldata['Only_X']?>" type="text"  name="only_x" id="only_x" placeholder="Enter X." class="form-control greypurbillcalculate"> 
																</div>
															</div>
														</div> -->
														<div class="col-12 col-sm-1 col-md-1 col-lg-1 col-xl-1 d-flex ">
															<div class="form-group">
																<label>E-Way Bill No. :</label>
															</div>
														</div>
														<div class="col-12 col-sm-3 col-md-3 col-lg-3 col-xl-3">
															<div class="form-group field">
																<div class="">
																	<input value="<?=$editpurchaseOrderBilldata['E_Way_Bill_No']?>" type="text"  name="E_Way_Bill_No" id="E_Way_Bill_No" placeholder="E-Way Bill No" class="form-control greypurbillcalculate">
																</div>
															</div>
														</div>

														<!-- <div class="col-12 col-sm-1 col-md-1 col-lg-1 col-xl-1 d-flex "  style="display: none;">
															<div class="form-group"  style="display: none;">
																<label>Net Amt :</label>
															</div>
														</div>
														<div class="col-12 col-sm-3 col-md-3 col-lg-3 col-xl-3"  style="display: none;">
															<div class="form-group field">
																<div class="">
																	<input value="<?=$editpurchaseOrderBilldata['Net_Amt']?>" type="text"  name="Net_Amt" id="Net_Amt" placeholder="Net Amt" class="form-control greypurbillcalculate">
																</div>
															</div>
														</div> -->
													</div>
												</div>
											</div>
										</div>
										<div class="formtitle">
											<h4 class="backcolor">LR DETAILS</h4>
											<div class="row removemargin">
												<div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
													<div class="row">
														
														<div class="col-12 col-sm-1 col-md-1 col-lg-1 col-xl-1 d-flex">
															<div class="form-group">
																<label>LR No.:</label>
															</div>
														</div>
														<div class="col-12 col-sm-3 col-md-3 col-lg-3 col-xl-3">
															<div class="form-group field">
																<div class="">
																	<input value="<?=$editpurchaseOrderBilldata['Lr_No']?>" type="text"  name="lr_no" id="lr_no" placeholder="LR No." class="form-control greypurbillcalculate"> 
																</div>
															</div>
														</div>

														<div class="col-12 col-sm-1 col-md-1 col-lg-1 col-xl-1 d-flex">
															<div class="form-group">
																<label>LR Date.:</label>
															</div>
														</div>
														<div class="col-12 col-sm-3 col-md-3 col-lg-3 col-xl-3">
															<div class="form-group field">
																<div class="">
																	<input value="<?=$editpurchaseOrderBilldata['Lr_Date']?>" type="text"  name="lr_date" id="lr_date" placeholder="LR Date" class="form-control greypurbillcalculate datepicker-autoclose"> 
																</div>
															</div>
														</div>


														<div class="col-12 col-sm-1 col-md-1 col-lg-1 col-xl-1 d-flex">
															<div class="form-group">
																<label>LR Rec Date:</label>
															</div>
														</div>
														<div class="col-12 col-sm-3 col-md-3 col-lg-3 col-xl-3">
															<div class="form-group field">
																<div class="">
																	<input value="<?=$editpurchaseOrderBilldata['Lr_Rec_Date']?>" type="text"  name="lr_rec_date" id="lr_rec_date" placeholder="LR Rec Date" class="form-control greypurbillcalculate datepicker-autoclose"> 
																</div>
															</div>
														</div>

														<div class="col-12 col-sm-1 col-md-1 col-lg-1 col-xl-1 d-flex">
															<div class="form-group">
																<label>Weight:</label>
															</div>
														</div>
														<div class="col-12 col-sm-3 col-md-3 col-lg-3 col-xl-3">
															<div class="form-group field">
																<div class="">
																	<input value="<?=$editpurchaseOrderBilldata['Weight']?>" type="text"  name="weight" id="weight" placeholder="Weight" class="form-control greypurbillcalculate"> 
																</div>
															</div>
														</div>


														<div class="col-12 col-sm-1 col-md-1 col-lg-1 col-xl-1 d-flex">
															<div class="form-group">
																<label>Height:</label>
															</div>
														</div>
														<div class="col-12 col-sm-3 col-md-3 col-lg-3 col-xl-3">
															<div class="form-group field">
																<div class="">
																	<input  value="<?=$editpurchaseOrderBilldata['Height']?>" type="text"  name="height" id="height" placeholder="Height" class="form-control greypurbillcalculate"> 
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>

											<div class="formtitle">
											<h4 class="backcolor">Add Less.</h4>
											<div class="row removemargin">
												<div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
													<div class="row">
														
														<div class="col-12 col-sm-1 col-md-1 col-lg-1 col-xl-1 d-flex">
															<div class="form-group">
																<label>Remark:</label>
															</div>
														</div>
														<div class="col-12 col-sm-2 col-md-2 col-lg-2 col-xl-3">
															<div class="form-group field">
																<div class="">

																	<select name="remark1" id="remark1"   style="width: 100%; height:36px;" class="select2 form-control custom-select control remarkdata">

																	<?php
																		foreach ($getremarkData as $value)
																		{
																			?>
																		<option <?php if($editpurchaseOrderBilldata['Remark1'] == $value->RemarkID){echo "selected";}?> value="<?=$value->RemarkID;?>"><?=$value->Remark;?></option>
																		<?php
																		}
																		?>
																	</select>

																	<!-- <input type="text"  name="remark1" id="remark1" placeholder="Remark" class="form-control">  -->
																</div>
															</div>
														</div>

														<div class="col-12 col-sm-1 col-md-1 col-lg-1 col-xl-1">
															<i data-toggle="modal" data-target="#responsive-modalRemark" class="fa fa-plus-circle"></i></div>


														
														<div class="col-12 col-sm-2 col-md-2 col-lg-2 col-xl-2">
															<div class="form-group field">
																<div class="">
																	<input type="text"  name="grandtotal1" id="grandtotal1" placeholder="Enter Grand Total" value="<?=$editpurchaseOrderBilldata['Grand_Total1']?>" class="form-control editgrandtotal1"> 
																</div>
															</div>
														</div>%


														<div class="col-12 col-sm-2 col-md-2 col-lg-2 col-xl-3">
															<div class="form-group field">
																<div class="">
																	<input type="text"  name="discountless1" id="discountless1" placeholder="Enter Discount Less"  value="<?=$editpurchaseOrderBilldata['Discount_Less1']?>" class="form-control discountless1"> 
																</div>
															</div>
														</div>

														<div class="col-12 col-sm-2 col-md-2 col-lg-2 col-xl-2">
															<div class="form-group field">
																<div class="">
																	<input type="text"  name="amountless" id="amountless" value="<?=$editpurchaseOrderBilldata['Amount_Less']?>" placeholder="Enter Amount Less" class="form-control amountless"> 
																</div>
															</div>
														</div>

													</div>
													<div class="row">
															<div class="col-12 col-sm-1 col-md-1 col-lg-1 col-xl-1 d-flex">
															<div class="form-group">
																<label>Remark:</label>
															</div>
														</div>
														<div class="col-12 col-sm-2 col-md-2 col-lg-2 col-xl-2">
															<div class="form-group field">
																<div class="">

																	<select name="remark2" id="remark2"   style="width: 100%; height:36px;" class="select2 form-control custom-select control remarkdata">

																	<?php
																		foreach ($getremarkData as $value)
																		{
																			?>
																		<option <?php if($editpurchaseOrderBilldata['Remark2'] == $value->RemarkID){echo 'selected';}?>  value="<?=$value->RemarkID;?>"><?=$value->Remark;?></option>
																		<?php
																		}
																		?>
																	</select>

																	<!-- <input type="text"  name="remark2" id="remark2" placeholder="Remark" class="form-control">  -->
																</div>
															</div>
														</div>
														<div class="col-12 col-sm-1 col-md-1 col-lg-1 col-xl-1">
															<i data-toggle="modal" data-target="#responsive-modalRemark" class="fa fa-plus-circle"></i></div>


														
														<div class="col-12 col-sm-2 col-md-2 col-lg-2 col-xl-2">
															<div class="form-group field">
																<div class="">
																	<input type="text"  name="grandtota2" id="grandtota2" placeholder="Enter Grand Total" class="form-control editgrandtota2" value="<?=$editpurchaseOrderBilldata['Grand_Total2']?>"> 
																</div>
															</div>
														</div> -


														<div class="col-12 col-sm-2 col-md-2 col-lg-2 col-xl-2">
															<div class="form-group field">
																<div class="">
																	<input type="text"  name="discountless2" id="discountless2" placeholder="Enter Discount Less" class="form-control discountless2" value="<?=$editpurchaseOrderBilldata['Discount_Less2']?>"> 
																</div>
															</div>
														</div>

														<div class="col-12 col-sm-2 col-md-2 col-lg-2 col-xl-2">
															<div class="form-group field">
																<div class="">
																	<input type="text"  name="amountless2" id="amountless2" placeholder="Enter Amount Less" value="<?=$editpurchaseOrderBilldata['Amount_Less2']?>" class="form-control amountless2"> 
																</div>
															</div>
														</div>

													</div>
													<div class="row">
														<div class="col-12 col-sm-1 col-md-1 col-lg-1 col-xl-1 d-flex">
															<div class="form-group">
																<label>Bill Amount:</label>
															</div>
														</div>
														<div class="col-12 col-sm-3 col-md-3 col-lg-3 col-xl-3">
															<div class="form-group field">
																<div class="">
																	<input type="text"  name="net_amt" id="net_amt" placeholder="Bill Amount" class="form-control net_amt"> 
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
												<div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
													<div class="row">


														<div class="col-12 col-sm-1 col-md-1 col-lg-1 col-xl-1 d-flex forhideshowigst">
														<div class="form-group">
															<label>IGST %:</label>
														</div>
														</div>
														<div class="col-12 col-sm-3 col-md-3 col-lg-3 col-xl-3 forhideshowigst">
															<div class="form-group field">
																<div class="">
																	<input type="text"  name="igst_persantage" id="igst_persantage" placeholder="IGST %" class="form-control greypurbillcalculate" value="<?=$editpurchaseOrderBilldata['Igst']?>" > 
																</div>
															</div>
														</div>

														<div class="col-12 col-sm-1 col-md-1 col-lg-1 col-xl-1 d-flex">
															<div class="form-group">
																<label>IGST AMT.:</label>
															</div>
														</div>
														<div class="col-12 col-sm-3 col-md-3 col-lg-3 col-xl-3">
															<div class="form-group field">
																<div class="">
																	<input type="text"  name="igstamt" id="igstamt" placeholder="IGST AMT." class="form-control greypurbillcalculate" value="<?=$editpurchaseOrderBilldata['Igst_Amt']?>" > 
																</div>
															</div>
														</div>

														
														<div class="col-12 col-sm-1 col-md-1 col-lg-1 col-xl-1 d-flex">
															<div class="form-group">
																<label>CGST %:</label>
															</div>
														</div>
														<div class="col-12 col-sm-3 col-md-3 col-lg-3 col-xl-3">
															<div class="form-group field">
																<div class="">
																	<input value="<?=$editpurchaseOrderBilldata['Cgst']?>" type="text"  name="cgst_persantage" id="cgst_persantage" placeholder="CGST %" class="form-control cgst_persantage greypurbillcalculate"> 
																</div>
															</div>
														</div>


														<div class="col-12 col-sm-1 col-md-1 col-lg-1 col-xl-1 d-flex">
															<div class="form-group">
																<label>CGST AMT.:</label>
															</div>
														</div>
														<div class="col-12 col-sm-3 col-md-3 col-lg-3 col-xl-3">
															<div class="form-group field">
																<div class="">
																	<input  value="<?=$editpurchaseOrderBilldata['Cgst_Amt']?>" type="text"  name="amt" id="amt" placeholder="AMT." class="form-control greypurbillcalculate amt"> 
																</div>
															</div>
														</div>

														<div class="col-12 col-sm-1 col-md-1 col-lg-1 col-xl-1 d-flex">
															<div class="form-group">
																<label>SGST %:</label>
															</div>
														</div>
														<div class="col-12 col-sm-3 col-md-3 col-lg-3 col-xl-3">
															<div class="form-group field">
																<div class="">
																	<input value="<?=$editpurchaseOrderBilldata['Sgst']?>"  type="text"  name="sgst_persantage" id="sgst_persantage" placeholder="SGST %" class="form-control sgst_persantage greypurbillcalculate"> 
																</div>
															</div>
														</div>

														<div class="col-12 col-sm-1 col-md-1 col-lg-1 col-xl-1 d-flex">
															<div class="form-group">
																<label>SGST AMT.:</label>
															</div>
														</div>
														<div class="col-12 col-sm-3 col-md-3 col-lg-3 col-xl-3">
															<div class="form-group field">
																<div class="">
																	<input type="text"  value="<?=$editpurchaseOrderBilldata['Sgst_Amt']?>"  name="sgdt_amt" id="sgdt_amt" placeholder="SGST AMT" class="form-control sgdt_amt"> 
																</div>
															</div>
														</div>


														<div class="col-12 col-sm-1 col-md-1 col-lg-1 col-xl-1 d-flex">
															<div class="form-group">
																<label>Taxable Value:</label>
															</div>
														</div>
														<div class="col-12 col-sm-3 col-md-3 col-lg-3 col-xl-3">
															<div class="form-group field">
																<div class="">
																	<input  value="<?=$editpurchaseOrderBilldata['Taxable_Value']?>" type="text"  name="Taxable_Value" id="Taxable_Value" placeholder="Taxable Value" class="form-control greypurbillcalculate Taxable_Value"> 
																</div>
															</div>
														</div>

														<div class="col-12 col-sm-1 col-md-1 col-lg-1 col-xl-1 d-flex">
															<div class="form-group">
																<label>Net Amount:</label>
															</div>
														</div>
														<div class="col-12 col-sm-3 col-md-3 col-lg-3 col-xl-3">
															<div class="form-group field">
																<div class="">
																	<input value="<?=$editpurchaseOrderBilldata['Bill_Amt']?>" type="text"  name="Bill_Amount" id="Bill_Amount" placeholder="Net Amount" class="form-control greypurbillcalculate Bill_Amount"> 
																</div>
															</div>
														</div>

														<div class="col-12 col-sm-1 col-md-1 col-lg-1 col-xl-1 d-flex">
															<div class="form-group">
																<label>Net After Tds:</label>
															</div>
														</div>
														<div class="col-12 col-sm-3 col-md-3 col-lg-3 col-xl-3">
															<div class="form-group field">
																<div class="">
																	<input value="<?=$editpurchaseOrderBilldata['Net_After_Tds']?>"  type="text"  name="Net_After_Tds" id="Net_After_Tds" placeholder="Net After Tds" class="form-control greypurbillcalculate"> 
																</div>
															</div>
														</div>

														<!-- <div class="col-12 col-sm-1 col-md-1 col-lg-1 col-xl-1 d-flex">
															<div class="form-group">
																<label>E-Way Bill No:</label>
															</div>
														</div>
														<div class="col-12 col-sm-3 col-md-3 col-lg-3 col-xl-3">
															<div class="form-group field">
																<div class="">
																	<input type="text"  name="E_Way_Bill_No" id="E_Way_Bill_No" placeholder="E-Way Bill No" class="form-control greypurbillcalculate"> 
																</div>
															</div>
														</div> -->

													</div>
												</div>
											</div>
										</div>



										<div class="formtitle">
											<h4 class="backcolor">Payment Det.</h4>
											<div class="row removemargin">
												<div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
													<div class="row">
														
														<div class="col-12 col-sm-1 col-md-1 col-lg-1 col-xl-1 d-flex">
															<div class="form-group">
																<label>Paid Date:</label>
															</div>
														</div>
														<div class="col-12 col-sm-3 col-md-3 col-lg-3 col-xl-3">
															<div class="form-group field">
																<div class="">
																	<input value="<?=$editpurchaseOrderBilldata['Paid_Date']?>" type="text"  name="Paid_Date" id="Paid_Date" placeholder="Paid Date" class="form-control greypurbillcalculate"> 
																</div>
															</div>
														</div>


														<div class="col-12 col-sm-1 col-md-1 col-lg-1 col-xl-1 d-flex">
															<div class="form-group">
																<label>DISC. %:</label>
															</div>
														</div>
														<div class="col-12 col-sm-3 col-md-3 col-lg-3 col-xl-3">
															<div class="form-group field">
																<div class="">
																	<input value="<?=$editpurchaseOrderBilldata['Discount']?>" type="text"  name="discount" id="discount" placeholder="Discount" class="form-control greypurbillcalculate"> 
																</div>
															</div>
														</div>

														<div class="col-12 col-sm-1 col-md-1 col-lg-1 col-xl-1 d-flex">
															<div class="form-group">
																<label>Pack/Folt:</label>
															</div>
														</div>
														<div class="col-12 col-sm-3 col-md-3 col-lg-3 col-xl-3">
															<div class="form-group field">
																<div class="">
																	<input value="<?=$editpurchaseOrderBilldata['Pack_Folt']?>" type="text"  name="Pack" id="Pack" placeholder="Pack/Folt" class="form-control greypurbillcalculate"> 
																</div>
															</div>
														</div>


														<div class="col-12 col-sm-1 col-md-1 col-lg-1 col-xl-1 d-flex">
															<div class="form-group">
																<label>R.D.:</label>
															</div>
														</div>
														<div class="col-12 col-sm-3 col-md-3 col-lg-3 col-xl-3">
															<div class="form-group field">
																<div class="">
																	<input value="<?=$editpurchaseOrderBilldata['Rd']?>" type="text"  name="rd" id="rd" placeholder="R.D." class="form-control greypurbillcalculate"> 
																</div>
															</div>
														</div>

														<div class="col-12 col-sm-1 col-md-1 col-lg-1 col-xl-1 d-flex">
															<div class="form-group">
																<label>Sweets:</label>
															</div>
														</div>
														<div class="col-12 col-sm-3 col-md-3 col-lg-3 col-xl-3">
															<div class="form-group field">
																<div class="">
																	<input value="<?=$editpurchaseOrderBilldata['Sweets']?>"  type="text"  name="sweets" id="sweets" placeholder="Sweets" class="form-control greypurbillcalculate"> 
																</div>
															</div>
														</div>

														<div class="col-12 col-sm-1 col-md-1 col-lg-1 col-xl-1 d-flex">
															<div class="form-group">
																<label>Oth/Bc:</label>
															</div>
														</div>
														<div class="col-12 col-sm-3 col-md-3 col-lg-3 col-xl-3">
															<div class="form-group field">
																<div class="">
																	<input value="<?=$editpurchaseOrderBilldata['Oth_Bc']?>" type="text"  name="Oth_Bc" id="Oth_Bc" placeholder="Oth/Bc" class="form-control greypurbillcalculate"> 
																</div>
															</div>
														</div>

														<div class="col-12 col-sm-1 col-md-1 col-lg-1 col-xl-1 d-flex">
															<div class="form-group">
																<label>Add Amt:</label>
															</div>
														</div>
														<div class="col-12 col-sm-3 col-md-3 col-lg-3 col-xl-3">
															<div class="form-group field">
																<div class="">
																	<input  value="<?=$editpurchaseOrderBilldata['Add_Amt']?>" type="text"  name="add_amt" id="add_amt" placeholder="Add Amt" class="form-control greypurbillcalculate"> 
																</div>
															</div>
														</div>

														<div class="col-12 col-sm-1 col-md-1 col-lg-1 col-xl-1 d-flex">
															<div class="form-group">
																<label>Tds Amt:</label>
															</div>
														</div>
														<div class="col-12 col-sm-3 col-md-3 col-lg-3 col-xl-3">
															<div class="form-group field">
																<div class="">
																	<input  value="<?=$editpurchaseOrderBilldata['Tds_Amt']?>" type="text"  name="tds_amt" id="tds_amt" placeholder="Tds Amt" class="form-control greypurbillcalculate"> 
																</div>
															</div>
														</div>

														<div class="col-12 col-sm-1 col-md-1 col-lg-1 col-xl-1 d-flex">
															<div class="form-group">
																<label>G.R.:</label>
															</div>
														</div>
														<div class="col-12 col-sm-3 col-md-3 col-lg-3 col-xl-3">
															<div class="form-group field">
																<div class="">
																	<input value="<?=$editpurchaseOrderBilldata['Gr']?>"  type="text"  name="gr" id="gr" placeholder="G.R." class="form-control greypurbillcalculate"> 
																</div>
															</div>
														</div>

														<div class="col-12 col-sm-1 col-md-1 col-lg-1 col-xl-1 d-flex">
															<div class="form-group">
																<label>Paid Amount:</label>
															</div>
														</div>
														<div class="col-12 col-sm-3 col-md-3 col-lg-3 col-xl-3">
															<div class="form-group field">
																<div class="">
																	<input value="<?=$editpurchaseOrderBilldata['Paid_Amt']?>" type="text"  name="paid_amount" id="paid_amount" placeholder="Paid Amount" class="form-control greypurbillcalculate"> 
																</div>
															</div>
														</div>

														<div class="col-12 col-sm-1 col-md-1 col-lg-1 col-xl-1 d-flex">
															<div class="form-group">
																<label>Bill Amount:</label>
															</div>
														</div>
														<div class="col-12 col-sm-3 col-md-3 col-lg-3 col-xl-3">
															<div class="form-group field">
																<div class="">
																	<input value="<?=$editpurchaseOrderBilldata['Bill_Amt']?>"  type="text"  name="Bill_Amount" id="Bill_Amount" placeholder="Bill Amount" class="form-control greypurbillcalculate"> 
																</div>
															</div>
														</div>

														<div class="col-12 col-sm-1 col-md-1 col-lg-1 col-xl-1 d-flex">
															<div class="form-group">
																<label>Net After Tds:</label>
															</div>
														</div>
														<div class="col-12 col-sm-3 col-md-3 col-lg-3 col-xl-3">
															<div class="form-group field">
																<div class="">
																	<input value="<?=$editpurchaseOrderBilldata['Net_After_Tds']?>"  type="text"  name="Net_After_Tds" id="Net_After_Tds" placeholder="Net After Tds" class="form-control greypurbillcalculate"> 
																</div>
															</div>
														</div>

														<div class="col-12 col-sm-1 col-md-1 col-lg-1 col-xl-1 d-flex">
															<div class="form-group">
																<label>E-Way Bill No:</label>
															</div>
														</div>
														<div class="col-12 col-sm-3 col-md-3 col-lg-3 col-xl-3">
															<div class="form-group field">
																<div class="">
																	<input type="text"  name="E_Way_Bill_No" id="E_Way_Bill_No" placeholder="E-Way Bill No" class="form-control greypurbillcalculate"> 
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
													<a  href="<?php echo base_url()?>FinishPurchaseOrderBill" class="btn btn-info">
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
	var inside = $("#finishpurchaseorderid").val();

	if(inside != "")
	{
	$("#home7").removeClass('active');
	$(".nav-link").removeClass('active');
	$(".foractive").addClass('active');
	$("#editform").addClass('active');
	}

	$(function() {
	$('#staticParent').on('keydown', '#child', function(e){-1!==$.inArray(e.keyCode,[46,8,9,27,13,110])||(/65|67|86|88/.test(e.keyCode)&&(e.ctrlKey===true||e.metaKey===true))&&(!0===e.ctrlKey||!0===e.metaKey)||35<=e.keyCode&&40>=e.keyCode||(e.shiftKey||48>e.keyCode||57<e.keyCode)&&(96>e.keyCode||105<e.keyCode)&&e.preventDefault()});
	})
	$(function() {
	$('#staticParent1').on('keydown', '#child1', function(e){-1!==$.inArray(e.keyCode,[46,8,9,27,13,110])||(/65|67|86|88/.test(e.keyCode)&&(e.ctrlKey===true||e.metaKey===true))&&(!0===e.ctrlKey||!0===e.metaKey)||35<=e.keyCode&&40>=e.keyCode||(e.shiftKey||48>e.keyCode||57<e.keyCode)&&(96>e.keyCode||105<e.keyCode)&&e.preventDefault()});
	})
	$(function() {
	$('#staticParent2').on('keydown', '#child2', function(e){-1!==$.inArray(e.keyCode,[46,8,9,27,13,110])||(/65|67|86|88/.test(e.keyCode)&&(e.ctrlKey===true||e.metaKey===true))&&(!0===e.ctrlKey||!0===e.metaKey)||35<=e.keyCode&&40>=e.keyCode||(e.shiftKey||48>e.keyCode||57<e.keyCode)&&(96>e.keyCode||105<e.keyCode)&&e.preventDefault()});
	})


	jQuery('#datepicker-autoclose').datepicker({
	        autoclose: true,
	        todayHighlight: true
	    });
	jQuery('.datepicker-autoclose').datepicker({
	        autoclose: true,
	        todayHighlight: true
	    });
</script>

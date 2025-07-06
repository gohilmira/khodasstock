
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

		<!-- company start-->
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
														<select name="companttype" id="companttype" class="form-control">
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
														<div class="controls">
															<select name="city" id="city" required class="form-control customvalidation">
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
															<select name="multichal" id="multichal" required class="form-control customvalidation">
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

                                                <a  href="<?php echo base_url()?>Company_controller" class="btn btn-info">
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
				<h4 class="text-themecolor">Finish Sales Bcpl</h4>
			</div>
			<div class="col-md-7 align-self-center text-right">
				<div class="d-flex justify-content-end align-items-center">
					<ol class="breadcrumb">
						<li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
						<li class="breadcrumb-item active">Finish Sales Bcpl</li>
					</ol>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="card" style="width: 100%;">
				<div class="card-body p-b-0">
					<!-- Nav tabs -->
					<ul class="nav nav-tabs customtab2" role="tablist">
						<li class="nav-item"> <a class="nav-link active" data-toggle="tab" href="#home7" role="tab"><span class="hidden-sm-up"><i class="ti-home"></i></span> <span class="hidden-xs-down">Sales Bcpl</span></a> </li>
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
								            	foreach ($PurchaseOrderBilldata as $value)
								            	{
								            	?>
								            	<tr id="">
									               <td></td>
									               <td></td>
									               <td></td>
									               <td></td>
									               <td></td>
									               <td></td>
									               <td></td>
									               <td></td>
									               <td></td>
									               <td></td>
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
														<div class="col-12 col-sm-6 col-md-8 col-lg-6 col-xl-8">
															<div class="form-group field">
																<div class="controls">
																	<select name="CompanyId" id="CompanyId"  class="form-control customvalidation">
																		<option value=""> --Select -- </option>
																		<?php
																		foreach ($getCompanyData as $qgetCompanyData)
																		{
																			?>
																			<option value="<?=$qgetCompanyData->CompanyID		?>"> <?=$qgetCompanyData->Name?> </option>
																			<?php
																		}
																		?>
																		
																	</select>
																</div>
															</div>
														</div>
														<div class="col-12 col-sm-2 col-md-2 col-lg-3 col-xl-2">
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
																	<option value=""> --Select Type -- </option>
																		
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
															<div class="form-group field">
																<div class="">
																	<input type="text"  name="Voucher_NO" id="Voucher_NO" placeholder="Voucher NO NO." class="form-control">
																</div>
															</div>
														</div>


														<div class="col-12 col-sm-4 col-md-2 col-lg-2 col-xl-2 d-flex ">
															<div class="form-group">
																<label>LR No./AWB   	 :</label>
															</div>
														</div>
														<div class="col-12 col-sm-8 col-md-10 col-lg-4 col-xl-10">
															<div class="form-group field">
																<div class="">
																	<input type="text"  name="LR_No" id="LR_No" placeholder="LR No." class="form-control">
																</div>
															</div>
														</div>

														<div class="col-12 col-sm-4 col-md-2 col-lg-2 col-xl-2 d-flex ">
															<div class="form-group">
																<label>Party:</label>
															</div>
														</div>
														<div class="col-12 col-sm-8 col-md-8 col-lg-4 col-xl-8">
															<div class="form-group field">
																<div class="controls">
																	<select name="PartyAcID" id="PartyAcID"  class="form-control customvalidation" onchange="transfortcon(this);">
																		<option value=""> --Select -- </option>
																		<?php
																		foreach ($getpartyacData as $qgetpartyacData)
																		{
																			?>
																			<option value="<?=$qgetpartyacData->Ledger_Id		?>"> <?=$qgetpartyacData->Name?> </option>
																			<?php
																		}
																		?>
																	</select>
																</div>
															</div>
														</div>
														

														<div class="col-12 col-sm-4 col-md-2 col-lg-3 col-xl-2 d-flex">
															<div class="form-group">
																<label>STATE 	 :</label>
															</div>
														</div>
														<div class="col-12 col-sm-8 col-md-10 col-lg-3 col-xl-10">
															<div class="form-group field">
																<div class="">
																	<select name="StateID" id="StateID"  class="form-control">
																		<option value=""> --Select -- </option>
																		<?php
																		foreach ($getstateData as $qgetstateData)
																		{
																			?>
																			<option value="<?=$qgetstateData->stateID	?>"> <?=$qgetstateData->stateName?> </option>
																			<?php
																		}
																		?>
																		
																	</select>
																</div>
															</div>
														</div>

														<div class="col-12 col-sm-4 col-md-2 col-lg-3 col-xl-2 d-flex">
															<div class="form-group">
																<label>Transport 	 :</label>
															</div>
														</div>
														<div class="col-12 col-sm-8 col-md-10 col-lg-3 col-xl-10">
															<div class="form-group field">
																<div class="">
																	<select name="Transport" id="Transport"  class="form-control" onchange="transfortcon(this);">
																		<option value=""> --Select -- </option>
																		
																		
																	</select>
																</div>
															</div>
														</div>

														<div class="col-12 col-sm-4 col-md-2 col-lg-3 col-xl-2 d-flex ">
															<div class="form-group">
																<label>Vehicle No.:</label>
															</div>
														</div>
														<div class="col-12 col-sm-8 col-md-10 col-lg-3 col-xl-10">
															<div class="form-group field">
																<div class="">
																	<input type="text" id="Vehicle_No"  name="Vehicle_No" placeholder="Vehicle No" class="form-control"> 
																</div>
															</div>
														</div>

														<div class="col-12 col-sm-4 col-md-2 col-lg-3 col-xl-2 d-flex ">
															<div class="form-group">
																<label>Bill NO.	 :</label>
															</div>
														</div>
														<div class="col-12 col-sm-8 col-md-10 col-lg-3 col-xl-10">
															<div class="form-group field">
																<div class="controls">
																	<select name="Bill_NO" id="Bill_NO"  class="form-control customvalidation">
																		<option value=""> --Select -- </option>
																		<?php
																		foreach ($getordernoData as $qgetordernoData)
																		{
																			?>
																			<option value="<?=$qgetordernoData->Order_No		?>"> <?=$qgetordernoData->Order_No?> </option>
																			<?php
																		}
																		?>
																	</select>
																</div>
															</div>
														</div>
														<!-- <div class="col-12 col-sm-2 col-md-2 col-lg-3 col-xl-2">
															<i data-toggle="modal" data-target="#responsive-modal-greypurchase" class="fa fa-plus-circle"></i></div> -->
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
																	<input type="text" id="datepicker-autoclose"  name="FinishPurchaseBillOrderDate" placeholder="DATE" class="form-control"> 
																</div>
															</div>
														</div>

														<div class="col-12 col-sm-4 col-md-2 col-lg-3 col-xl-2 d-flex ">
															<div class="form-group">
																<label>GST Type :</label>
															</div>
														</div>
														<div class="col-12 col-sm-8 col-md-10 col-lg-3 col-xl-10">
															<div class="form-group field">
																<div class="controls">
																	<select name="GstType" id="GstType"  class="form-control customvalidation">
																		<option value=""> --Select -- </option>
																		
																	</select>
																</div>
															</div>
														</div>

														<div class="col-12 col-sm-4 col-md-2 col-lg-3 col-xl-2 d-flex ">
															<div class="form-group">
																<label>Haste :</label>
															</div>
														</div>
														<div class="col-12 col-sm-8 col-md-10 col-lg-3 col-xl-10">
															<div class="form-group field">
																<div class="controls">
																	<select name="Haste" id="Haste"  class="form-control customvalidation">
																		<option value=""> --Select -- </option>
																		
																	</select>
																</div>
															</div>
														</div>

														

														<div class="col-12 col-sm-4 col-md-2 col-lg-3 col-xl-2 d-flex ">
															<div class="form-group">
																<label>BROKER 	 :</label>
															</div>
														</div>
														<div class="col-12 col-sm-8 col-md-10 col-lg-3 col-xl-10">
															<div class="form-group field">
																<div class="controls">
																	<select name="BrokerID" id="BrokerID"  class="form-control customvalidation" onchange="transfortcon(this);">
																		<option value=""> --Select -- </option>
																		<?php
																		foreach ($getbrokerData as $qgetbrokerData)
																		{
																			?>
																			<option value="<?=$qgetbrokerData->Ledger_Id		?>"> <?=$qgetbrokerData->Name?> </option>
																			<?php
																		}
																		?>
																	</select>
																</div>
															</div>
														</div>

														<div class="col-12 col-sm-4 col-md-2 col-lg-3 col-xl-2 d-flex ">
															<div class="form-group">
																<label>Haste GSTIN	 :</label>
															</div>
														</div>
														<div class="col-12 col-sm-8 col-md-10 col-lg-3 col-xl-10">
															<div class="form-group field">
																<div class="">
																	<input type="text" id="Haste_GSTIN"  name="Haste_GSTIN" placeholder="Haste GSTIN" class="form-control"> 
																</div>
															</div>
														</div>

														<div class="col-12 col-sm-4 col-md-2 col-lg-3 col-xl-2 d-flex ">
															<div class="form-group">
																<label>Dhara :</label>
															</div>
														</div>
														<div class="col-12 col-sm-8 col-md-10 col-lg-3 col-xl-10">
															<div class="form-group field">
																<div class="">
																	<input type="text" id="Dhara"  name="Dhara" placeholder="Dhara" class="form-control"> 
																</div>
															</div>
														</div>

														<div class="col-12 col-sm-4 col-md-2 col-lg-3 col-xl-2 d-flex ">
															<div class="form-group">
																<label>Grace :</label>
															</div>
														</div>
														<div class="col-12 col-sm-8 col-md-10 col-lg-3 col-xl-10">
															<div class="form-group field">
																<div class="">
																	<input type="text" id="Grace"  name="Grace" placeholder="Grace" class="form-control"> 
																</div>
															</div>
														</div>

														<!-- <div class="col-12 col-sm-2 col-md-2 col-lg-3 col-xl-2">
															<i data-toggle="modal" data-target="#responsive-modal" class="fa fa-plus-circle"></i></div> -->
														

														<div class="col-12 col-sm-4 col-md-2 col-lg-3 col-xl-2 d-flex ">
															<div class="form-group">
																<label>Station	 :</label>
															</div>
														</div>
														<div class="col-12 col-sm-8 col-md-10 col-lg-3 col-xl-10">
															<div class="form-group field">
																<div class="controls">
																	<select name="Station" id="Station"  class="form-control customvalidation">
																		<option value="">-Select-</option>
																	</select>
																</div>
															</div>
														</div>

														<!-- <div class="col-12 col-sm-2 col-md-2 col-lg-3 col-xl-2">
															<i data-toggle="modal" data-target="#responsive-modal-qty" class="fa fa-plus-circle"></i></div> -->

															<div class="col-12 col-sm-4 col-md-2 col-lg-3 col-xl-2 d-flex ">
															<div class="form-group">
																<label>Screen Series	 :</label>
															</div>
															</div>
															<div class="col-12 col-sm-8 col-md-10 col-lg-3 col-xl-10">
																<div class="form-group field">
																	<div class="controls">
																		<select name="ScreenSeries" id="ScreenSeries"  class="form-control customvalidation">
																			<option value="">-Select-</option>
																		</select>
																	</div>
																</div>
															</div>


															<div class="col-12 col-sm-4 col-md-2 col-lg-3 col-xl-2 d-flex ">
															<div class="form-group">
																<label>Party GSTIN	 :</label>
															</div>
															</div>
															<div class="col-12 col-sm-8 col-md-10 col-lg-3 col-xl-10">
																<div class="form-group field">
																	<div class="controls">
																		<select name="Party_GSTIN" id="Party_GSTIN"  class="form-control customvalidation">
																			<option value="">-Select-</option>
																		</select>
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
																<label>Pack By 	 :</label>
															</div>
														</div>
														<div class="col-12 col-sm-8 col-md-10 col-lg-3 col-xl-10">
															<div class="form-group field">
																<div class="">
																	<select name="Pack_By" id="Pack_By"  class="form-control">
																		<option value=""> --Select -- </option>
																	
																	</select>
																</div>
															</div>
														</div>

														<div class="col-12 col-sm-4 col-md-2 col-lg-3 col-xl-2 d-flex ">
															<div class="form-group">
																<label>Checked By 	 :</label>
															</div>
														</div>
														<div class="col-12 col-sm-8 col-md-10 col-lg-3 col-xl-10">
															<div class="form-group field">
																<div class="">
																	<select name="Checked_By" id="Checked_By"  class="form-control">
																		<option value=""> --Select -- </option>
																	
																	</select>
																</div>
															</div>
														</div>

														<div class="col-12 col-sm-4 col-md-2 col-lg-3 col-xl-2 d-flex">
															<div class="form-group">
																<label>Case No:</label>
															</div>
														</div>
														<div class="col-12 col-sm-8 col-md-10 col-lg-3 col-xl-10">
															<div class="form-group field">
																<div class="">
																	<input type="text"  name="Case_No" id="Case_No" placeholder="Case No." class="form-control greypurbillcalculate"> 
																</div>
															</div>
														</div>
														<div class="col-12 col-sm-4 col-md-2 col-lg-3 col-xl-2 d-flex ">
															<div class="form-group">
																<label>E-Way Bill No. :</label>
															</div>
														</div>
														<div class="col-12 col-sm-8 col-md-10 col-lg-3 col-xl-10">
															<div class="form-group field">
																<div class="">
																	<input type="text"  name="E_Way_Bill_No" id="E_Way_Bill_No" placeholder="E-Way Bill No" class="form-control greypurbillcalculate">
																</div>
															</div>
														</div>
														<div class="col-12 col-sm-4 col-md-2 col-lg-3 col-xl-2 d-flex ">
															<div class="form-group">
																<label>Rank:</label>
															</div>
														</div>
														<div class="col-12 col-sm-8 col-md-10 col-lg-3 col-xl-10">
															<div class="form-group field">
																<div class="">
																	<select name="Rank" id="Rank"  class="form-control">
																		<option value=""> --Select -- </option>
																	
																	</select>
																</div>
															</div>
														</div>

														<div class="col-12 col-sm-4 col-md-2 col-lg-3 col-xl-2 d-flex ">
															<div class="form-group">
																<label>Net Amt :</label>
															</div>
														</div>
														<div class="col-12 col-sm-8 col-md-10 col-lg-3 col-xl-10">
															<div class="form-group field">
																<div class="">
																	<input type="text"  name="Net_Amt" id="Net_Amt" placeholder="Net Amt" class="form-control greypurbillcalculate">
																</div>
															</div>
														</div>

														
													</div>
												</div>

												<div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
												</div>
												
											</div>
										</div>


										<!-- <table id="myTable" class="table-responsive table order-list">
										    <thead>
										        <tr>
										            <td>CHR</td>
										            <td>Desp No</td>
										            <td>Mill</td>
										            <td>Card</td>
										            <td>Desp Date</td>
										            <td>Taka</td>
										            <td>MTS</td>
										            <td>Rate</td>
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
									                <input type="text" name="chr0" id="chr0" class="form-control" placeholder="CHR" value="" />
									            </td>
									            <td style="padding: 0.2rem !important;">
									                <input type="text" name="despno0" id="despno0"  class="form-control" placeholder="Desp No" value=""/>
									            </td>
									            <td style="padding: 0.2rem !important;">
									                <input type="text" name="mill0" id="mill0" class="form-control" placeholder="Mill" value="" />
									            </td>
									            <td style="padding: 0.2rem !important;">
									                <input type="text" name="cardno0" id="cardno0" class="form-control" placeholder="Card No." value="" />
									            </td>
									            <td style="padding: 0.2rem !important;">
									                <input type="date" name="despdate0" id="despdate0" class="form-control" placeholder="Desp Date" value="" />
									            </td>
									            <td style="padding: 0.2rem !important;">
									                <input type="text" name="taka0" id="taka0" class="form-control" placeholder="Taka" value="" />
									            </td>
									            <td style="padding: 0.2rem !important;">
									                <input type="text" name="mts0" id="mts0" class="form-control" placeholder="MTS" value="" />
									            </td>
									            <td style="padding: 0.2rem !important;">
									                <input type="text" name="rate0" id="rate0" class="form-control" placeholder="Rate" value="" />
									            </td>
									            <td style="padding: 0.2rem !important;">
									                <input type="text" name="wtls0" id="wtls0" class="form-control" placeholder="WT. LS." value="" />
									            </td>
									            <td style="padding: 0.2rem !important;">
									                <input type="text" name="marka0" id="marka0" class="form-control" placeholder="Marka" value="" />
									            </td>
									            <td style="padding: 0.2rem !important;">
									                <input type="text" name="lotno0" id="lotno0" class="form-control" placeholder="Lot No." value="" />
									            </td>
									            <td style="padding: 0.2rem !important;">
									                <input type="text" name="remark0" id="remark0" class="form-control" placeholder="Remark" value="" />
									            </td>
									            <td style="padding: 0.2rem !important;">
									                <input type="text" name="vehicleno0" id="vehicleno0" class="form-control" placeholder="Vehicle No." value="" />
									            </td>
									            <td style="padding: 0.2rem !important;">
									                <input type="text" name="ewaybill0" id="ewaybill0" class="form-control" placeholder="Eway Bill" value="" />
									            </td>
									            <td style="padding: 0.2rem !important;">
									                <input type="text" name="process0" id="process0" class="form-control" placeholder="Process" value="" />
									            </td>
									            <td style="padding: 0.2rem !important;">
									                <input type="text" name="master0" id="master0" class="form-control" placeholder="Master" value="" />
									            </td>
									            <td style="padding: 0.2rem !important;"><input type="button" class="ibtnDel btn btn-md btn-danger"  value="Delete"></td>

											        </tr>
										    </tbody>
										    <tfoot>
										    	<input type="hidden" class="" id="countdata" name="countdata" value="">
										        <tr>
										            <td colspan="16" style="text-align: left;">
										                <input type="button" class="btn btn-lg btn-block addrowgreyprbill" id="addrowgreyprbill" value="Add Row" />
										            </td>
										        </tr>
										        <tr>
										        </tr>
										    </tfoot>
											</table> -->
										
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
</script>


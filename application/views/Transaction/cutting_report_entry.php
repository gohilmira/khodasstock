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

		<!-- start by milan 2/22/19  -->

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

		  <!-- end company modal -->
		<!-- end by milan 2/22/19 -->


		<div class="row page-titles">
			<div class="col-md-5 align-self-center">
				<h4 class="text-themecolor">Cutting Report Entry</h4>
			</div>
			<div class="col-md-7 align-self-center text-right">
				<div class="d-flex justify-content-end align-items-center">
					<ol class="breadcrumb">
						<li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
						<li class="breadcrumb-item active">Cutting Report Entry</li>
					</ol>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="card" style="width: 100%;">
				<div class="card-body p-b-0">
					<!-- Nav tabs -->
					<ul class="nav nav-tabs customtab2" role="tablist">
						<li class="nav-item"> <a class="nav-link active" data-toggle="tab" href="#home7" role="tab"><span class="hidden-sm-up"><i class="ti-home"></i></span> <span class="hidden-xs-down">Cutting Report List</span></a> </li>
						<li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#profile7" role="tab"><span class="hidden-sm-up"><i class="ti-user"></i></span> <span class="hidden-xs-down">Add Form</span></a> </li>
						
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
								            	<tr id="">
									              
									               <td>hui</td>
									               <td>hui</td>
									               <td>hui</td>
									               <td>hui</td>
									               <td>hui</td>
									               <td>hui</td>
									               <td>hui</td>
									               <td>hui</td>
									            <!--    <td><?=$value->Type;?></td>
									               <td><?=$value->Type;?></td>
									               <td><?=$value->Type;?></td>
									               <td><?=$value->Type;?></td>
									               <td><?=$value->Type;?></td>
									               <td><?=$value->Type;?></td> -->
									              
								                </tr>
								            	
								            </tbody>
								        </table>
								    </div>
								</form>
							</div>
						</div>
						<div class="tab-pane  p-20" id="profile7" role="tabpanel">
							<form action="" method="post" name="cuttingfrm" id="cuttingfrm" novalidate>
								
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
																	<select name="CompanyId" id="CompanyId" style="width: 100%; height:36px;"  class="select2 form-control custom-select">
																		<option value=""> --Select -- </option>
																		<?php
																		foreach ($getCompanyData as $qgetCompanyData)
																		{
																			?>
																			<option
																			 value="<?=$qgetCompanyData->CompanyID		?>"> <?=$qgetCompanyData->CompanyName?> </option>
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
																<label> Mill :</label>
															</div>
														</div>
														<div class="col-12 col-sm-8 col-md-10 col-lg-4 col-xl-10">
															<div class="form-group field">
																<div class="controls">
																	<select name="mill" id="mill"  class="form-control">
																	<option selected="" value="Mill">Mill </option>
																		
																	</select>
																</div>
															</div>
														</div>
														
														<div class="col-12 col-sm-4 col-md-2 col-lg-2 col-xl-2 d-flex ">
															<div class="form-group">
																<label>Cut Card No. :</label>
															</div>
														</div>
														<div class="col-12 col-sm-8 col-md-10 col-lg-4 col-xl-10">
															<div class="form-group field">
																<div class="">
																	<input type="text"  name="cut_card_no" id="cut_card_no" placeholder="Cut Card No" value="" class="form-control">
																</div>
															</div>
														</div>


														<div class="col-12 col-sm-2 col-md-2 col-lg-2 col-xl-2 d-flex ">
															<div class="form-group">
																<label>Rec Card:</label>
															</div>
														</div>
														<div class="col-12 col-sm-10 col-md-10 col-lg-10 col-xl-10">
															<div class="form-group field">
																<div class="">
																	<input type="text"  name="rec_card" id="rec_card" placeholder="Rec Card" class="form-control">
																</div>
															</div>
														</div>

														<div class="col-12 col-sm-2 col-md-2 col-lg-2 col-xl-2 d-flex ">
															<div class="form-group">
																<label>Date:</label>
															</div>
														</div>
														<div class="col-12 col-sm-10 col-md-10 col-lg-10 col-xl-10">
															<div class="form-group field">
																<div class="">
																	<input type="text"  name="cutting_date" id="cutting_date"  class="datepicker-autoclose form-control">
																</div>
															</div>
														</div>

														<div class="col-12 col-sm-2 col-md-2 col-lg-2 col-xl-2 d-flex">
															<div class="form-group">
																<label>Cutter 	 :</label>
															</div>
														</div>
														<div class="col-12 col-sm-10 col-md-10 col-lg-10 col-xl-10">
															<div class="form-group field">
																<div class="">
																	<select name="cutter" id="cutter"  style="width: 100%; height:36px;" class="select2 form-control custom-select" >
																		<option value=""> --Select -- </option>
																	</select>
																</div>
															</div>
														</div>
													
													</div>
												</div>
												<div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
													<div class="row">
							
														<div class="col-12 col-sm-2 col-md-2 col-lg-2 col-xl-2 d-flex ">
															<div class="form-group">
																<label>Lot No:</label>
															</div>
														</div>
														<div class="col-12 col-sm-9 col-md-9 col-lg-9 col-xl-9">
															<div class="form-group field">
																<div class="controls">
																	<select name="lot_no" id="lot_no" style="width: 100%; height:36px;" class="select2 form-control custom-select customvalidation" onchange="getpartytoother(this);">
																	<option value=""> --Select -- </option>
																	
																	</select>
																</div>
															</div>
														</div>
														<div class="col-12 col-sm-1 col-md-1 col-lg-1 col-xl-1">
															<i data-toggle="modal" data-target="#party-responsive-modal" class="fa fa-plus-circle"></i></div>

															<div class="col-12 col-sm-2 col-md-2 col-lg-2 col-xl-2 d-flex ">
															<div class="form-group">
																<label>Design No:</label>
															</div>
														</div>
														<div class="col-12 col-sm-10 col-md-10 col-lg-10 col-xl-10">
															<div class="form-group field">
																<div class="">
																	<input type="text"  name="design_no" id="design_no" placeholder="Design No" class="form-control">
																</div>
															</div>
														</div>

														<div class="col-12 col-sm-2 col-md-2 col-lg-2 col-xl-2 d-flex ">
															<div class="form-group">
																<label>Screen:</label>
															</div>
														</div>
														<div class="col-12 col-sm-9 col-md-9 col-lg-9 col-xl-9">
															<div class="form-group field">
																<div class="controls">
																	<select name="screen" id="screen" style="width: 100%; height:36px;" class="select2 form-control custom-select customvalidation">
																	<option value=""> --Select Screen-- </option>
																	
																	</select>
																</div>
															</div>
														</div>

														<div class="col-12 col-sm-2 col-md-2 col-lg-2 col-xl-2 d-flex ">
															<div class="form-group">
																<label>Cut:</label>
															</div>
														</div>
														<div class="col-12 col-sm-10 col-md-10 col-lg-10 col-xl-10">
															<div class="form-group field">
																<div class="">
																	<input type="text"  name="cut" id="cut" placeholder="Cut" class="form-control">
																</div>
															</div>
														</div>

													</div>
												</div>
											</div>	
										</div>
										<table id="finshprinttbl" class="table order-list">
										    <thead>
										        <tr>
										            <td>Item Name</td>
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
										       <tr>
									            <td style="padding: 0.2rem !important;">
									            	<select name="itemdetails0" onchange="getitemdata(0);" id="itemdetails0" class="form-control">
									            		<option value="">--Item--</option>
									            		<?php
														$this->Home_model->getItemDetailsData();
									            		foreach ($getitemdetailsdata as $value){
									            				?>
									            				<option value="<?=$value->ItemdetailID;?>"><?=$value->IName;?></option>
									            				<?php
										            		}
										            		?>
									            	</select>
									            	
									            </td>
									            <td  style="padding: 0.2rem !important;">
									            	<i data-toggle="modal" data-target="#responsive-modal-item" onclick="setcounterhd(0);" class="fa fa-plus-circle"></i>
									            </td>
									            <td style="padding: 0.2rem !important;">
									                <input type="text" name="bundles0" id="bundles0" onfocusout="bundlecal(0);"  class="form-control bundle" placeholder="Bundles" value=""/>
									            </td>
									            <td style="padding: 0.2rem !important;">
									                <select name="category0" id="category0" class="form-control">
									            		<?php
									            		foreach ($getCategoryData as $value)
									            		{
									            			?>
									            			<option value="<?=$value->CategoryID;?>"><?=$value->CategoryName;?></option>
									            			<?php
									            		}
									            		?>
									            	</select>
									            </td>
									            <td style="padding: 0.2rem !important;">
									                 <select name="packing0" id="packing0" class="form-control">
									            		<?php
									            		foreach ($getPackageData as $value)
									            		{
									            			?>
									            			<option value="<?=$value->PackingID;?>"><?=$value->PackingName;?></option>
									            			<?php
									            		}
									            		?>
									            	</select>
									            </td>
									            <td style="padding: 0.2rem !important;">
									                <select name="unit0" onchange="changecalculation(0)" id="unit0" class="form-control unit0">

									                	<option value="">-Select-</option>
									                    <option value="pcs">Pcs</option>
									                    <option value="mts">MTS</option>
									                    <option value="kg">KG</option>
									                    <option value="suit">Suit</option>
									                    <option value="other">Other</option>
									                </select>
									            </td>
									             <td style="padding: 0.2rem !important;">
									                <input type="text" onfocusout="finishpurchase(0);" name="pcs0" id="pcs0"  class="form-control pcsclass pcs0" placeholder="Pcs" value=""/>
									            </td>
									            <td style="padding: 0.2rem !important;">
									                <input type="text" onfocusout="finishpurchase(0);" name="cut0" id="cut0"  class="form-control cut0" placeholder="Cut" value=""/>
									            </td>
									            <td style="padding: 0.2rem !important;">
									                <input type="text" name="mts0" id="mts0"  class="form-control mtscls mts0" placeholder="Mts" value=""/>
									            </td>
									            <td style="padding: 0.2rem !important;">
									                <input type="text" name="rate0"  onfocusout="finishpurchase(0);" id="rate0" class="form-control rate0" placeholder="Rate" value="" />
									            </td>
									            <td style="padding: 0.2rem !important;">
									                <input type="text" name="amount0" id="amount0" class="form-control amount amount0" placeholder="Amount" value="" />
									            </td>
									            
									            <td style="padding: 0.2rem !important;"><input type="button" class="finishbtnDel btn btn-md btn-danger"  value="Delete"></td>

											        </tr>
										    </tbody>
										    <tfoot>
										    	<input type="hidden" class="" id="finishcountdata" name="finishcountdata" value="1">

										    	<input type="hidden" class="forcount" id="forcount" name="forcount" value="0">
										        <tr>
										            <td colspan="16" style="text-align: left;">
										                <input type="button" class="btn btn-lg btn-block addfinishpurchase" id="addfinishpurchase" value="Add Row" />
										            </td>
										        </tr>
										        <tr>
										        </tr>
										    </tfoot>
											</table>

											<div class="formtitle">
												<div class="row removemargin">
													<div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
														<div class="row">
															
															<div class="col-12 col-sm-1 col-md-1 col-lg-1 col-xl-1 d-flex ">
																<div class="form-group">
																	<label>Taka:</label>
																</div>
															</div>
															<div class="col-12 col-sm-3 col-md-3 col-lg-3 col-xl-3">
																<div class="form-group field">
																<div class="">

																	<input type="text"  name="taka" id="taka" placeholder="Enter Taka" class="form-control">

																</div>
															</div>
															</div>

															<div class="col-12 col-sm-1 col-md-1 col-lg-1 col-xl-1 d-flex">
																<div class="form-group">
																	<label>Grey MTS:</label>
																</div>
															</div>
															<div class="col-12 col-sm-3 col-md-3 col-lg-3 col-xl-3">
																<div class="form-group field">
																	<div class="">

																	<input type="text"  name="grey_mts" id="grey_mts" placeholder="Enter Grey MTS" class="form-control">

																</div>
																</div>
															</div>

															<div class="col-12 col-sm-1 col-md-1 col-lg-1 col-xl-1 d-flex">
																<div class="form-group">
																	<label>Rate:</label>
																</div>
															</div>
															<div class="col-12 col-sm-3 col-md-3 col-lg-3 col-xl-3">
																<div class="form-group field">
																	<div class="">

																	<input type="text"  name="rate" id="rate" placeholder="Enter Rate" class="form-control">

																</div>
																</div>
															</div>

															<div class="col-12 col-sm-1 col-md-1 col-lg-1 col-xl-1 d-flex">
																<div class="form-group">
																	<label>Fin MTS:</label>
																</div>
															</div>
															<div class="col-12 col-sm-3 col-md-3 col-lg-3 col-xl-3">
																<div class="form-group field">
																	<div class="">
																	<input type="text"  name="fin_mts" id="fin_mts" placeholder="Enter Fin MTS" class="form-control">

																</div>
																</div>
															</div>


															<div class="col-12 col-sm-1 col-md-1 col-lg-1 col-xl-1 d-flex">
																<div class="form-group">
																	<label>Rate %:</label>
																</div>
															</div>
															<div class="col-12 col-sm-3 col-md-3 col-lg-3 col-xl-3">
																<div class="form-group field">
																	<div class="">
																	<input type="text"  name="rate_percentage" id="rate_percentage" placeholder="Enter Rate" class="form-control">

																</div>
																</div>
															</div>

															<div class="col-12 col-sm-1 col-md-1 col-lg-1 col-xl-1 d-flex">
																<div class="form-group">
																	<label>Short:</label>
																</div>
															</div>
															<div class="col-12 col-sm-3 col-md-3 col-lg-3 col-xl-3">
																<div class="form-group field">
																	<div class="">
																	<input type="text"  name="short" id="short" placeholder="Enter Short" class="form-control">

																</div>
																</div>
															</div>

															<div class="col-12 col-sm-1 col-md-1 col-lg-1 col-xl-1 d-flex">
																<div class="form-group">
																	<label>Sarees:</label>
																</div>
															</div>
															<div class="col-12 col-sm-3 col-md-3 col-lg-3 col-xl-3">
																<div class="form-group field">
																	<div class="">
																	<input type="text"  name="Sarees" id="Sarees" placeholder="Enter Sarees" class="form-control">

																</div>
																</div>
															</div>

															<div class="col-12 col-sm-1 col-md-1 col-lg-1 col-xl-1 d-flex">
																<div class="form-group">
																	<label>Second:</label>
																</div>
															</div>
															<div class="col-12 col-sm-3 col-md-3 col-lg-3 col-xl-3">
																<div class="form-group field">
																	<div class="">
																	<input type="text"  name="second" id="second" placeholder="Enter Second" class="form-control">

																</div>
																</div>
															</div>

															<div class="col-12 col-sm-1 col-md-1 col-lg-1 col-xl-1 d-flex">
																<div class="form-group">
																	<label>Rate:</label>
																</div>
															</div>
															<div class="col-12 col-sm-3 col-md-3 col-lg-3 col-xl-3">
																<div class="form-group field">
																	<div class="">
																	<input type="text"  name="rate" id="rate" placeholder="Enter Rate" class="form-control">

																</div>
																</div>
															</div>

															<div class="col-12 col-sm-1 col-md-1 col-lg-1 col-xl-1 d-flex">
																<div class="form-group">
																	<label>Fresh:</label>
																</div>
															</div>
															<div class="col-12 col-sm-3 col-md-3 col-lg-3 col-xl-3">
																<div class="form-group field">
																	<div class="">
																	<input type="text"  name="fresh" id="fresh" placeholder="Enter Fresh" class="form-control">

																</div>
																</div>
															</div>

															<div class="col-12 col-sm-1 col-md-1 col-lg-1 col-xl-1 d-flex">
																<div class="form-group">
																	<label>Act Cut:</label>
																</div>
															</div>
															<div class="col-12 col-sm-3 col-md-3 col-lg-3 col-xl-3">
																<div class="form-group field">
																	<div class="">
																	<input type="text"  name="act_cut" id="act_cut" placeholder="Enter Act Cut" class="form-control">

																</div>
																</div>
															</div>

															<div class="col-12 col-sm-1 col-md-1 col-lg-1 col-xl-1 d-flex">
																<div class="form-group">
																	<label>Cut Rate:</label>
																</div>
															</div>
															<div class="col-12 col-sm-3 col-md-3 col-lg-3 col-xl-3">
																<div class="form-group field">
																	<div class="">
																	<input type="text"  name="cut_rate" id="cut_rate" placeholder="Enter Cut Rate" class="form-control">

																</div>
																</div>
															</div>

															<div class="col-12 col-sm-1 col-md-1 col-lg-1 col-xl-1 d-flex">
																<div class="form-group">
																	<label>Pack Rate:</label>
																</div>
															</div>
															<div class="col-12 col-sm-3 col-md-3 col-lg-3 col-xl-3">
																<div class="form-group field">
																	<div class="">
																	<input type="text"  name="pack_rate" id="pack_rate" placeholder="Enter Pack Rate" class="form-control">

																</div>
																</div>
															</div>

														</div>

									<div class="formtitle">
										<h4 class="backcolor">Grey Details</h4>
										<div class="row removemargin">
											<div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
												<div class="row">
													<div class="col-12 col-sm-4 col-md-2 col-lg-2 col-xl-2 d-flex ">
														<div class="form-group">
															<label>Weaver:</label>
														</div>
													</div>
													<div class="col-12 col-sm-8 col-md-10 col-lg-4 col-xl-10">
														<div class="form-group field">
															<div class="">
																<select name="weaver" id="weaver"  style="width: 100%; height:36px;" class="select2 form-control custom-select" >
																	<option value=""> --Select -- </option>
																</select>
															</div>
														</div>
													</div>
													<div class="col-12 col-sm-4 col-md-2 col-lg-2 col-xl-2 d-flex">
														<div class="form-group">
															<label>Quality:</label>
														</div>
													</div>
													<div class="col-12 col-sm-8 col-md-10 col-lg-4 col-xl-10">
														<div class="form-group field">
															<div class="">
																<select name="quality" id="quality"  style="width: 100%; height:36px;" class="select2 form-control custom-select" >
																	<option value=""> --Select -- </option>
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
															<label>WT.:</label>
														</div>
													</div>
													<div class="col-12 col-sm-8 col-md-10 col-lg-4 col-xl-10">
														<div class="form-group field">
															<div class="">
																<input type="text"  name="wt" id="wt" placeholder="WT" class="form-control" >
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>

									<div class="formtitle">
										<h4 class="backcolor">Pur Details</h4>
										<div class="row removemargin">
											<div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
												<div class="row">
													<div class="col-12 col-sm-4 col-md-2 col-lg-2 col-xl-2 d-flex ">
														<div class="form-group">
															<label>Weaver Group:</label>
														</div>
													</div>
													<div class="col-12 col-sm-8 col-md-10 col-lg-4 col-xl-10">
														<div class="form-group field">
															<div class="">
																<input type="text"  name="weaver_group" id="weaver_group" placeholder="Weaver Group" class="form-control" >
															</div>
														</div>
													</div>
													<div class="col-12 col-sm-4 col-md-2 col-lg-2 col-xl-2 d-flex">
														<div class="form-group">
															<label>Bill No.:</label>
														</div>
													</div>
													<div class="col-12 col-sm-8 col-md-10 col-lg-4 col-xl-10">
														<div class="form-group field">
															<div class="">
																<input type="text"  name="bill_no" id="bill_no" placeholder="Bill No" class="form-control" >
															</div>
														</div>
													</div>
													
												</div>
											</div>
											<div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
												<div class="row">
													<div class="col-12 col-sm-4 col-md-2 col-lg-2 col-xl-2 d-flex ">
														<div class="form-group">
															<label>Pur Date.:</label>
														</div>
													</div>
													<div class="col-12 col-sm-8 col-md-10 col-lg-4 col-xl-10">
														<div class="form-group field">
															<div class="">
																<input type="text"  name="pur_date" id="pur_date" placeholder="Pur Date" class="form-control datepicker-autoclose">
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>

									<div class="formtitle">
										<h4 class="backcolor">Other Details</h4>
										<div class="row removemargin">
											<div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
												<div class="row">
													<div class="col-12 col-sm-4 col-md-2 col-lg-2 col-xl-2 d-flex ">
														<div class="form-group">
															<label>Broker:</label>
														</div>
													</div>
													<div class="col-12 col-sm-8 col-md-10 col-lg-4 col-xl-10">
														<div class="form-group field">
															<div class="">
																<select name="weaver" id="weaver"  style="width: 100%; height:36px;" class="select2 form-control custom-select" >
																	<option value=""> --Select -- </option>
																</select>
															</div>
														</div>
													</div>
													<div class="col-12 col-sm-4 col-md-2 col-lg-2 col-xl-2 d-flex">
														<div class="form-group">
															<label>Order No.:</label>
														</div>
													</div>
													<div class="col-12 col-sm-8 col-md-10 col-lg-4 col-xl-10">
														<div class="form-group field">
															<div class="">
																<input type="text"  name="order_no" id="order_no" placeholder="Order No" class="form-control" >
															</div>
														</div>
													</div>
													
												</div>
											</div>
											<div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
												<div class="row">
													<div class="col-12 col-sm-4 col-md-2 col-lg-2 col-xl-2 d-flex ">
														<div class="form-group">
															<label>Pur No.:</label>
														</div>
													</div>
													<div class="col-12 col-sm-8 col-md-10 col-lg-4 col-xl-10">
														<div class="form-group field">
															<div class="">
																<input type="text"  name="pur_no" id="pur_no" placeholder="Pur No" class="form-control">
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

										<div class="row">
											<div class="form-group">
												<div class="text-xs-right" style="margin-left: 8px;">
													<button type="submit" class="btn btn-success">Submit</button>
													<a  href="<?php echo base_url()?>FinishPurchaseOrder" class="btn btn-info">
														Cancel
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
		</div>
	</div>
</div>
<?php $this->load->view('common/footer'); ?>
<script>
	// var inside = $("#finishpurchaseorderid").val();

	// if(inside != "")
	// {
	// $("#home7").removeClass('active');
	// $(".nav-link").removeClass('active');
	// $(".foractive").addClass('active');
	// $("#editform").addClass('active');
	// }

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

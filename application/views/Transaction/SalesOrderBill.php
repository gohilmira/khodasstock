
<?php 
$this->load->view('common/header'); 
if (($recordcount)>0)
{
	//echo "Hiii";
	if(isset($recordcount))
	{
		foreach ($voucherData as $qvoucherData) 
		{
			$VoucherNo=$qvoucherData->SBVoucherNo + 1;
			$SBBillNOData=$qvoucherData->SBBillNO + 1;
		}
	}
}
else
{
	$VoucherNo=1;
	$SBBillNOData=1;
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
	select.form-control:not([size]):not([multiple]) {
	height: calc(1.0625rem + 2px);
	}
</style>
<div class="page-wrapper">
	<div class="container-fluid">
		<!-- company start-->
		<div id="addNewCompany" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
		    <div class="modal-dialog modal-lg">
		        <div class="modal-content">
		            <div class="modal-header">
		                <h4 class="modal-title">Party Account Data</h4>
		                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
		            </div>
		            <div class="modal-body">
		            	<form  class="" id="AddNewCompanyData" method="POST" name="AddNewCompanyData" novalidate>
							<input type="hidden" value="" id="companyid" name="companyid">
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
															<div class="controls">
																<input type="text" name="code" id="code" class="form-control customvalidation" placeholder="ENTER CODE" > 
															</div>
														</div>
													</div>
													
													
													<div class="col-12 col-sm-4 col-md-2 col-lg-2 col-xl-2 d-flex ">
														<div class="form-group">
															<label>SHORT NAME :</label>
														</div>
													</div>
													<div class="col-12 col-sm-8 col-md-3 col-lg-3 col-xl-3">
														<div class="form-group field">
															<div class="controls">
																<input type="text" name="shortname" id="shortname" class="form-control customvalidation" placeholder="SHORT NAME"> 
															</div>
														</div>
													</div>
													
													<div class="col-12 col-sm-4 col-md-1 col-lg-1 col-xl-1 d-flex ">
														<div class="form-group">
															<label> NAME :</label>
														</div>
													</div>
													<div class="col-12 col-sm-8 col-md-6 col-lg-6 col-xl-6">
														<div class="form-group field">
															<div class="controls">
																<input type="text" name="name" id="name" class="form-control customvalidation" placeholder="ENTER NAME"> 
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
																	foreach($getcitydata as $selectCitydata)
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
												<button type="submit" class="btn btn-success">Submit</button>
												<button type="button" class="btn btn-default waves-effect mdlclosecompany" data-dismiss="modal">Close</button>
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
		<!--  Company End -->
		<!-- Party Start -->
		<div id="AddNewParty" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
		    <div class="modal-dialog modal-lg">
		        <div class="modal-content">
		            <div class="modal-header">
		                <h4 class="modal-title">Party Account Data</h4>
		                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
		            </div>
		            <div class="modal-body">
		            	<form class="" method="post" name="addledgerformmd21" id="addledgerformmd21" novalidate>
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
																<input type="text" name="Code" id="Code" class="form-control" placeholder="ENTER CODE">
															</div>
														</div>
													</div>
													
													<div class="col-12 col-sm-4 col-md-2 col-lg-2 col-xl-2 d-flex ">
														<div class="form-group">
															<label>A/C TYPE  :</label>
														</div>
													</div>
													<div class="col-2 col-sm-8 col-md-8 col-lg-10 col-xl-8">
														<div class="form-group field">
															<div class="">
															<select name="Ac_Type_Id" id="Ac_Type_Id" required class="form-control customvalidation">
																<option value="">--Select-- </option>
																<?php
																foreach ($getacctypedata as $qgetacctypedata)
																{
																	?>
																	<option <?php if($qgetacctypedata->AccNo == "1"){echo "selected";}?> value="<?=$qgetacctypedata->AccNo?>" readonly><?=$qgetacctypedata->AccType?></option>
																	<?php
																}  
																?>
															</select>
															</div>
														</div>
													</div>
													
													<div class="col-12 col-sm-4 col-md-2 col-lg-3 col-xl-2 d-flex ">
														<div class="form-group">
															<label>A/C GROUP :</label>
														</div>
													</div>
													<div class="col-12 col-sm-8 col-md-10 col-lg-9 col-xl-10">
														<div class="form-group field">
															<div class="controls">
																<select name="Ac_Group_Id" id="Ac_Group_Id" class="form-control customvalidation">
																	<option value="">--Select-- </option>
																	<?php
																	foreach ($getweaverData as $qgetweaverData) {
																		?>
																	<option value="<?=$qgetweaverData->Ac_Id;?>"> <?=$qgetweaverData->Short_Name;?> </option>
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
																<input type="text" name="Name" class="form-control" id="Name" placeholder="ENTER NAME"> 
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
																<input type="text"  name="Dhara" id="Dhara" placeholder="0.00" class="form-control"> 
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
																<input type="text"  name="Pure_Dhara" id="Pure_Dhara" placeholder="0.00" class="form-control" required> 
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
															<label> RANK LIST :</label>
														</div>
													</div>
													<div class="col-12 col-sm-8 col-md-2 col-lg-4 col-xl-10">
														<div class="form-group field">
															<div class="">
																<select name="Rank_List" id="Rank_List" class="form-control">
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
															<label> TDS. % :</label>
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
															<label>IT RATE :</label>
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
															<label>ITEM :</label>
														</div>
													</div>
													<div class="col-12 col-sm-8 col-md-10 col-lg-10 col-xl-10">
														<div class="form-group field">
															<div class="controls">
																<select name="Item_Id" id="Item_Id" required class="form-control customvalidation">
																	<option value=""> --Select -- </option>
																	<?php 
																	foreach($getitemdetailsdata as $qgetitemdetailsdata)
																	{
																	?>
																	<option value="<?php echo $qgetitemdetailsdata->ItemdetailID; ?>"> <?php echo $qgetitemdetailsdata->Name; ?></option>
																	<?php 
																	}
																	?>
																</select>
															</div>
														</div>
													</div>

													<div class="col-12 col-sm-4 col-md-2 col-lg-2 col-xl-2 d-flex ">
														<div class="form-group">
															<label>SERIES :</label>
														</div>
													</div>
													<div class="col-12 col-sm-8 col-md-10 col-lg-10 col-xl-10">
														<div class="form-group field">
															<div class="controls">
															<select name="Series_Id" id="Series_Id" required class="form-control customvalidation">
																<option value=""> --Select -- </option>
																<?php 
																foreach($getscreendata as $qgetscreendata)
																{
																?>
																<option value="<?php echo $qgetscreendata->ScreenRegisterID; ?>"> <?php echo $qgetscreendata->KodasMain; ?></option>
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
															<label>CITY:</label>
														</div>
													</div>
													<div class="col-12 col-sm-8 col-md-10 col-lg-9 col-xl-10">
														<div class="form-group field">
															<div class="controls">
																<select name="City_Id" id="City_Id" required class="form-control customvalidation">
																<option value=""> --Select -- </option>
																<?php 
																foreach($getcitydata as $qgetcitydata)
																{
																?>
																<option value="<?php echo $qgetcitydata->cityID; ?>"> <?php echo $qgetcitydata->cityName; ?></option>
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
															<div class="controls">
																<select name="Transport_Id" id="Transport_Id" required class="form-control customvalidation">
																	<option value=""> --Select -- </option>
																	<?php 
																	foreach($gettransportData as $qgettransportData)
																	{
																	?>
																	<option value="<?php echo $qgettransportData->transportID; ?>"> <?php echo $qgettransportData->transportName; ?></option>
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
															<div class="controls">
																<select name="Ledger_Type" id="Ledger_Type" required class="form-control">
																	
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
																<input type="text"  name="Gstin" id="Gstin" maxlength="10" class="form-control" placeholder="ENTER MOBILE"  > 
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
															<div class="controls">
																<select name="Party_Grade" id="Party_Grade" required class="form-control customvalidation">
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
															<div class="controls">
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
		<!-- Party End -->
		<!-- Transport Start -->
		<div id="AddNewTransport" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
		    <div class="modal-dialog modal-lg">
		        <div class="modal-content">
		            <div class="modal-header">
		                <h4 class="modal-title">Transport Data</h4>
		                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
		            </div>
		            <div class="modal-body">
		            	<form class="" method="post" name="AddNewTransportData" id="AddNewTransportData" novalidate>
		            		<input type="hidden" value="" id="transportID" name="transportID">
							<div class="row common_master_form_div">
								<div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 ">
									<div class="formtitle">
										<h4 class="backcolor">Transport Information</h4>
										<div class="row removemargin">
											<div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
												<div class="row">
													<div class="col-12 col-sm-4 col-md-2 col-lg-4 col-xl-2 d-flex ">
														<div class="form-group">
															<label>TRANSPORT NAME :</label>
														</div>
													</div>
													<div class="col-12 col-sm-8 col-md-10 col-lg-8 col-xl-10">
														<div class="form-group ">
															<div class="controls">
																<input type="text" class="form-control customvalidation" id="txtName"  name="transportName"> 
															</div>
														</div>
													</div>
													
													<div class="col-12 col-sm-4 col-md-2 col-lg-3 col-xl-2 d-flex ">
														<div class="form-group">
															<label>ADDRESS  :</label>
														</div>
													</div>
													<div class="col-2 col-sm-8 col-md-8 col-lg-9 col-xl-8">
														<div class="form-group field">
															<div class="">
															<input type="text" name="Taddress" class="form-control" id="Taddress"> 
															</div>
														</div>
													</div>
													
													<div class="col-12 col-sm-4 col-md-2 col-lg-3 col-xl-2 d-flex ">
														<div class="form-group">
															<label> PHONE 1 :</label>
														</div>
													</div>
													<div class="col-12 col-sm-8 col-md-10 col-lg-9 col-xl-10">
														<div class="form-group field">
															<div class="controls">
																<input type="text" name="Tphone1" id="Tphone1" class="form-control"> 
															</div>
														</div>
													</div>

												</div>
											</div>
											<div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
												<div class="row">
													<div class="col-12 col-sm-4 col-md-1 col-lg-2 col-xl-1 d-flex ">
														<div class="form-group">
															<label> PHONE 2 :</label>
														</div>
													</div>
													<div class="col-12 col-sm-8 col-md-6 col-lg-10 col-xl-6">
														<div class="form-group field">
															<div class="">
																<input type="text" name="Tphone2" id="Tphone2" class="form-control"> 
															</div>
														</div>
													</div>
													<div class="col-12 col-sm-4 col-md-2 col-lg-2 col-xl-2 d-flex">
														<div class="form-group">
															<label> MOBILE :</label>
														</div>
													</div>
													<div class="col-12 col-sm-8 col-md-10 col-lg-3 col-xl-10">
														<div class="form-group field">
															<div class="">
																<input type="text" name="Tmobile" id="Tmobile" class="form-control"> 
															</div>
														</div>
													</div>

													<div class="col-12 col-sm-4 col-md-2 col-lg-4 col-xl-2 d-flex">
														<div class="form-group">
															<label>TEway GSTIN/ID :</label>
														</div>
													</div>
													<div class="col-12 col-sm-8 col-md-10 col-lg-3 col-xl-10">
														<div class="form-group field">
															<div class="">
																<input type="text" name="TEway" class="form-control" id="TEway"> 
															</div>
														</div>
													</div>
													<div class="col-12 col-sm-4 col-md-2 col-lg-2 col-xl-2 d-flex ">
														<div class="form-group">
															<label> MODE :</label>
														</div>
													</div>
													<div class="col-12 col-sm-8 col-md-10 col-lg-4 col-xl-10">
														<div class="form-group field">
															<div class="">
																<select name="Tmode" id="Tmode" required class="form-control">
					                                                <option value="">Select Mode</option>
					                                               	<option value="1">ROAD</option>
																	<option value="2">RAIL</option>
																	<option value="3">AIR</option>
																	<option value="4">SHIP</option>
					                                            </select>
															</div>
														</div>
													</div>
													
													<div class="col-12 col-sm-4 col-md-2 col-lg-2 col-xl-2 d-flex ">
														<div class="form-group">
															<label> ISACTIVE :</label>
														</div>
													</div>
													<div class="col-12 col-sm-8 col-md-2 col-lg-4 col-xl-10">
														<div class="form-group field">
															<div class="">
																<input type="checkbox" value="1"  name="isActive" >
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
												<button type="button" class="btn btn-default waves-effect mdlcloseTransport" data-dismiss="modal">Close</button>
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
		<!-- Transport End -->

		<!--  Haste Start -->
		<div id="AddNewHaste" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
		    <div class="modal-dialog modal-lg">
		        <div class="modal-content">
		            <div class="modal-header">
		                <h4 class="modal-title">Party Account Data</h4>
		                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
		            </div>
		            <div class="modal-body">
		            	<form class="" method="post" name="addHasteForm1" id="addHasteForm1" novalidate>
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
															<label>ADATIYA NAME  :</label>
														</div>
													</div>
													<div class="col-12 col-sm-8 col-md-10 col-lg-10 col-xl-10">
														<div class="form-group field">
															<div class="">
																<select name="adatyaname" id="adatyaname"  class="form-control">
																	<option value=""> --Select -- </option>
																	<?php
																	foreach ($ledgernamedata as $ledvalue)
																	{
																		?>
																		<option value="<?=$ledvalue->AdatiyaName;?>"><?=$ledvalue->AdatiyaName;?></option>
																		<?php
																	}
																	?>
																</select>
															</div>
														</div>
													</div>
													<div class="col-12 col-sm-4 col-md-2 col-lg-2 col-xl-2 d-flex">
														<div class="form-group">
															<label> HASTE  :</label>
														</div>
													</div>
													<div class="col-12 col-sm-8 col-md-10 col-lg-10 col-xl-10">
														<div class="form-group field">
															<div class="">
																<input type="text"  name="haste" id="haste" placeholder="ENTER HASTE" class="form-control"> 
															</div>
														</div>
													</div>
													<div class="col-12 col-sm-4 col-md-2 col-lg-2 col-xl-2 d-flex ">
														<div class="form-group">
															<label>TRANSPORT :</label>
														</div>
													</div>
													<div class="col-12 col-sm-8 col-md-10 col-lg-10 col-xl-10">
														<div class="form-group field">
															<div class="">
																<select name="transport" id="transport" class="form-control" onchange="transfortcon(this);">
																	<option value=""> --Select -- </option>
																	<?php
																	foreach ($gettransportData as $qgettransportData)
																	{
																		?>
																		<option value="<?=$qgettransportData->transportID?>"> <?=$qgettransportData->transportName?> </option>
																		<?php
																	}
																	?>
																	
																</select>
															</div>
														</div>
													</div>
													<div class="col-12 col-sm-4 col-md-2 col-lg-2 col-xl-2 d-flex ">
														<div class="form-group">
															<label>STATION :</label>
														</div>
													</div>
													<div class="col-12 col-sm-8 col-md-10 col-lg-10 col-xl-10">
														<div class="form-group field">
															<div class="">
																<input type="text"  name="station" id="station" placeholder="ENTER HASTE" class="form-control">
															</div>
														</div>
													</div>
												</div>
											</div>
											<div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
												<div class="row">
													<div class="col-12 col-sm-4 col-md-2 col-lg-2 col-xl-2 d-flex ">
														<div class="form-group">
															<label>SCREEN SERIES :</label>
														</div>
													</div>
													<div class="col-12 col-sm-8 col-md-10 col-lg-10 col-xl-10">
														<div class="form-group field">
															<div class="controls">
																<select name="screenseries" id="screenseries" required class="form-control customvalidation">
																	<option value=""> --Select -- </option>
																	<?php
																	foreach ($getscreendata as $getscreendata)
																	{
																		?>
																		<option value="<?=$getscreendata->ScreenRegisterID;?>"><?=$getscreendata->KodasMain;?></option>
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
														<div class="form-group field">
															<div class="">
																<input type="text" id="gstin" name="gstin" placeholder="ENTER GSTIN" class="form-control"> 
															</div>
														</div>
													</div>	
													<div class="col-12 col-sm-4 col-md-2 col-lg-2 col-xl-2 d-flex">
														<div class="form-group">
															<label>ADDRESS 1 :</label>
														</div>
													</div>
													<div class="col-12 col-sm-8 col-md-10 col-lg-10 col-xl-10">
														<div class="form-group field">
															<div class="">
																<input type="text"  name="address1" id="address1" placeholder="ENTER ADDRESS 1" class="form-control"> 
															</div>
														</div>
													</div>
													<div class="col-12 col-sm-4 col-md-2 col-lg-2 col-xl-2 d-flex">
														<div class="form-group">
															<label>ADDRESS 2 :</label>
														</div>
													</div>
													<div class="col-12 col-sm-8 col-md-10 col-lg-10 col-xl-10">
														<div class="form-group field">
															<div class="">
																<input type="text"  name="address2" id="address2" placeholder="ENTER ADDRESS 2" class="form-control"> 
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
												<div class="row" style="margin-top: 2px;margin-bottom: -3px;">
													<div class="col-12 col-sm-4 col-md-1 col-lg-1 col-xl-1 d-flex ">
														<div class="form-group">
															<label>REMARK :</label>
														</div>
													</div>
													<div class="col-12 col-sm-8 col-md-11 col-lg-11 col-xl-11">
														<div class="form-group">
															<div class="">
																<select name="remark" id="remark" required class="form-control customvalidation">
																	<option value=""> --Select -- </option>
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
												</div>
											</div>
										
										</div>
									</div>
									<div class="formtitle">
										<h4 class="backcolor">CONTACT  Information</h4>
										<div class="row removemargin">
											<div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
												<div class="row">
													<div class="col-12 col-sm-4 col-md-2 col-lg-2 col-xl-2 d-flex ">
														<div class="form-group">
															<label>CONTACT :</label>
														</div>
													</div>
													<div class="col-12 col-sm-8 col-md-10 col-lg-10 col-xl-10">
														<div class="form-group ">
															<div class="">
																<input type="text" name="contactinformation" id="contactinformation" class="form-control" placeholder="ENTER CONTACT"> 
															</div>
														</div>
													</div>
													<div class="col-12 col-sm-4 col-md-2 col-lg-2 col-xl-2 d-flex ">
														<div class="form-group">
															<label>MOBILE :</label>
														</div>
													</div>
													<div class="col-12 col-sm-8 col-md-10 col-lg-10 col-xl-10">
														<div class="form-group " id="staticParent">
															<div class="">
																<input type="text" name="mobile" id="mobile" maxlength="10" class="form-control" placeholder="ENTER MOBILE"> 
															</div>
														</div>
													</div>
													<div class="col-12 col-sm-4 col-md-2 col-lg-2 col-xl-2 d-flex ">
														<div class="form-group">
															<label>EMAIL ID :</label>
														</div>
													</div>
													<div class="col-12 col-sm-8 col-md-10 col-lg-10 col-xl-10">
														<div class="form-group ">
															<div class="">
																<input type="text" id="emailid" name="emailid" class="form-control" placeholder="ENTER EMAIL ID"> 
															</div>
														</div>
													</div>
												</div>
											</div>
											<div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
												<div class="row">
													
													<div class="col-12 col-sm-4 col-md-2 col-lg-2 col-xl-2 d-flex ">
														<div class="form-group">
															<label>PHONE 1 :</label>
														</div>
													</div>
													<div class="col-12 col-sm-8 col-md-10 col-lg-10 col-xl-10">
														<div class="form-group" id="staticParent1">
															<div class="">
																<input type="text" name="phone1"  id="phone1"  class="form-control" placeholder="ENTER PHONE 1"> 
															</div>
														</div>
													</div>
													<div class="col-12 col-sm-4 col-md-2 col-lg-2 col-xl-2 d-flex ">
														<div class="form-group">
															<label>PHONE 2 :</label>
														</div>
													</div>
													<div class="col-12 col-sm-8 col-md-10 col-lg-10 col-xl-10">
														<div class="form-group "  id="staticParent2">
															<div class="">
																<input type="text" name="phone2" id="phone2" maxlength="10" class="form-control" placeholder="ENTER PHONE 2"> 
															</div>
														</div>
													</div>
													<div class="col-12 col-sm-4 col-md-2 col-lg-2 col-xl-2 d-flex ">
														<div class="form-group">
															<label>FAX :</label>
														</div>
													</div>
													<div class="col-12 col-sm-8 col-md-10 col-lg-10 col-xl-10">
														<div class="form-group ">
															<div class="">
																<input type="text" name="fax" id="fax" class="form-control" placeholder="ENTER FAX"> 
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
		<!-- Haste End -->
		<!--  Broker Start -->
		 <div id="AddNewBroker" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
		    <div class="modal-dialog modal-lg">
		        <div class="modal-content">
		            <div class="modal-header">
		                <h4 class="modal-title">Party Account Data</h4>
		                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
		            </div>
		            <div class="modal-body">
		            	<form class="" method="post" name="addBrokerForm12" id="addBrokerForm12" novalidate>
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
																<input type="text" name="Code" id="Code" class="form-control" placeholder="ENTER CODE">
															</div>
														</div>
													</div>
													
													<div class="col-12 col-sm-4 col-md-2 col-lg-2 col-xl-2 d-flex ">
														<div class="form-group">
															<label>A/C TYPE  :</label>
														</div>
													</div>
													<div class="col-2 col-sm-8 col-md-8 col-lg-10 col-xl-8">
														<div class="form-group field">
															<div class="controls">
															<select name="Ac_Type_Id" id="Ac_Type_Id" required class="form-control customvalidation">
																<option value="">--Select-- </option>
																<?php
																foreach ($getacctypedata as $qgetacctypedata)
																{
																	?>
																	<option <?php if($qgetacctypedata->AccNo == "12"){echo "selected";}?> value="<?=$qgetacctypedata->AccNo?>" readonly><?=$qgetacctypedata->AccType?></option>
																	<?php
																}  
																?>
															</select>
															</div>
														</div>
															
													</div>
													
													<div class="col-12 col-sm-4 col-md-2 col-lg-3 col-xl-2 d-flex ">
														<div class="form-group">
															<label>A/C GROUP :</label>
														</div>
													</div>
													<div class="col-12 col-sm-8 col-md-10 col-lg-9 col-xl-10">
														<div class="form-group field">
															<div class="controls">
																<select name="Ac_Group_Id" id="Ac_Group_Id" required class="form-control customvalidation">
																	<option value="">--Select-- </option>
																	<?php
																	foreach ($getweaverData as $qgetweaverData) {
																		?>
																	<option value="<?=$qgetweaverData->Ac_Id;?>"> <?=$qgetweaverData->Short_Name;?> </option>
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
																<input type="text" name="Name" class="form-control" id="Name" placeholder="ENTER NAME"> 
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
																<input type="text"  name="Dhara" id="Dhara" placeholder="0.00" class="form-control"> 
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
																<input type="text"  name="Pure_Dhara" id="Pure_Dhara" placeholder="0.00" class="form-control" required> 
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
															<label> RANK LIST :</label>
														</div>
													</div>
													<div class="col-12 col-sm-8 col-md-2 col-lg-4 col-xl-10">
														<div class="form-group field">
															<div class="">
																<select name="Rank_List" id="Rank_List" class="form-control">
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
															<label> TDS. % :</label>
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
															<label>IT RATE :</label>
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
															<label>ITEM :</label>
														</div>
													</div>
													<div class="col-12 col-sm-8 col-md-10 col-lg-10 col-xl-10">
														<div class="form-group field">
															<div class="controls">
																<select name="Item_Id" id="Item_Id" required class="form-control customvalidation">
																	<option value=""> --Select -- </option>
																	<?php 
																	foreach($getitemdetailsdata as $qgetitemdetailsdata)
																	{
																	?>
																	<option value="<?php echo $qgetitemdetailsdata->ItemdetailID; ?>"> <?php echo $qgetitemdetailsdata->Name; ?></option>
																	<?php 
																	}
																	?>
																</select>
															</div>
														</div>
													</div>

													<div class="col-12 col-sm-4 col-md-2 col-lg-2 col-xl-2 d-flex ">
														<div class="form-group">
															<label>SERIES :</label>
														</div>
													</div>
													<div class="col-12 col-sm-8 col-md-10 col-lg-10 col-xl-10">
														<div class="form-group field">
															<div class="controls">
															<select name="Series_Id" id="Series_Id" required class="form-control customvalidation">
																<option value=""> --Select -- </option>
																<?php 
																foreach($getscreendata1 as $qgetscreendata1)
																{
																?>
																<option value="<?php echo $qgetscreendata1->ScreenRegisterID; ?>"> <?php echo $qgetscreendata1->KodasMain; ?></option>
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
															<label>CITY:</label>
														</div>
													</div>
													<div class="col-12 col-sm-8 col-md-10 col-lg-9 col-xl-10">
														<div class="form-group field">
															<div class="controls">
																<select name="City_Id" id="City_Id" required class="form-control customvalidation">
																<option value=""> --Select -- </option>
																<?php 
																foreach($getcitydata as $qgetcitydata)
																{
																?>
																<option value="<?php echo $qgetcitydata->cityID; ?>"> <?php echo $qgetcitydata->cityName; ?></option>
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
															<div class="controls">
																<select name="Transport_Id" id="Transport_Id" required class="form-control customvalidation">
																	<option value=""> --Select -- </option>
																	<?php 
																	foreach($gettransportData as $qgettransportData)
																	{
																	?>
																	<option value="<?php echo $qgettransportData->transportID; ?>"> <?php echo $qgettransportData->transportName; ?></option>
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
															<div class="controls">
																<select name="Ledger_Type" id="Ledger_Type" required class="form-control customvalidation">
																	
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
																<input type="text"  name="Gstin" id="Gstin" maxlength="10" class="form-control" placeholder="ENTER MOBILE"  > 
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
															<div class="controls">
																<select name="Party_Grade" id="Party_Grade" required class="form-control customvalidation">
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
												<button type="button" class="btn btn-default waves-effect mdlcloseBroker" data-dismiss="modal">Close</button>
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
		<!-- Broker End -->
		<!-- Station Start -->
		<div id="AddNewStation" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
		    <div class="modal-dialog modal-lg">
		        <div class="modal-content">
		            <div class="modal-header">
		                <h4 class="modal-title">Station Data</h4>
		                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
		            </div>
		            <div class="modal-body">
		            	<form action="" class="" method="post" id="AddNewStationmdl" name="AddNewStationmdl" novalidate>
							<input type="hidden" value="" id="StationID" name="StationID">
							<div class="row common_master_form_div">
								<div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 ">
									<div class="formtitle">
										<div class="row removemargin">
											<div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
												<div class="row">
													<div class="col-12 col-sm-4 col-md-2 col-lg-2 col-xl-2 d-flex ">
														<div class="form-group">
															<label>NAME :</label>
														</div>
													</div>
													<div class="col-12 col-sm-8 col-md-10 col-lg-10 col-xl-10">
														<div class="form-group ">
															<div class="controls">
																<input type="text" name="StationName" id="StationName" class="form-control customvalidation" placeholder="STATION NAME"> 
															</div>
														</div>
													</div>
												</div>
											</div>
											<div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
												<div class="row">
													<div class="col-12 col-sm-4 col-md-2 col-lg-2 col-xl-2 d-flex ">
														<div class="form-group">
															<label>Selected :</label>
														</div>
													</div>
													<div class="col-12 col-sm-8 col-md-10 col-lg-10 col-xl-10">
														<div class="form-group field">
															<div class="">
																<input type="checkbox" value="1" id="isActive" name="isActive" > Selected
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
												<button type="button" class="btn btn-default waves-effect mdlcloseStation" data-dismiss="modal">Close</button>
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
		<!-- Station End -->
		<!-- Remark Start -->
		<div id="AddNewRemark" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
		    <div class="modal-dialog modal-lg">
		        <div class="modal-content">
		            <div class="modal-header">
		                <h4 class="modal-title">Party Account Data</h4>
		                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
		            </div>
		            <div class="modal-body">
						<form action="" method="post" class="" method="post" name="addremarkModal" id="addremarkModal" novalidate>
							<input type="hidden" name="remarkid" id="remarkid" value="">
							<div class="row">
								<div class="col-md-4">
									<div class="row">
										<div class="col-md-12">
											<div class="form-group">
												<h5>Remark </h5>
												<div class="">
													<input type="text" name="remarkname" id="remarkname" class="form-control" placeholder="Enter Remark" placeholder="Enter Remark"> 
												</div>
											</div>
										</div>

										<div class="col-md-12">
											<div class="form-group">
												<h5>Remark Type </h5>
												<div class="controls">
													<select name="rematktype" id="rematktype" class="form-control customvalidation" aria-invalid="false">
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
								<div class="col-md-8"></div>
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
		<!-- Remark End -->
		<div class="row page-titles">
			<div class="col-md-5 align-self-center">
				<h4 class="text-themecolor">Sales Order Billing</h4>
			</div>
			<div class="col-md-7 align-self-center text-right">
				<div class="d-flex justify-content-end align-items-center">
					<ol class="breadcrumb">
						<li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
						<li class="breadcrumb-item active">Sales Order Billing</li>
					</ol>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="card" style="width: 100%;">
				<div class="card-body p-b-0">
					<!-- Nav tabs -->
					<ul class="nav nav-tabs customtab2" role="tablist">
						<li class="nav-item"> <a class="nav-link active" data-toggle="tab" href="#home7" role="tab"><span class="hidden-sm-up"><i class="ti-home"></i></span> <span class="hidden-xs-down">Sales Order Billing</span></a> </li>
						<li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#profile7" role="tab"><span class="hidden-sm-up"><i class="ti-user"></i></span> <span class="hidden-xs-down">Add Form</span></a> </li>
						<?php
						if(!empty($editsaleOrderBilldata))
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
								                    <th>Bill No.</th>
								                    <th>Company Name</th>
								                    <th>Party Name</th>
								                    <th>Order Bill Date</th>
								                    <th>Total Pcs</th>
								                    <th>Total MTS</th>
								                    <th>Total Amount</th>
								                    <th>Bill Amt</th>
								                   
								                </tr>
								            </thead>
								            <tbody>
								            	<?php
								            	foreach ($SaleOrderBillData as $qSaleOrderBillData)
								            	{
								            	?>
								            	<tr>
									               <td class="editdelaction">
							                        <a href="<?=base_url();?>SalesOrderBill?SaleOrderBillID=<?=$qSaleOrderBillData->SaleOrderBillID;?>" ><i class="fa fa-edit"></i></a>&nbsp;&nbsp;
							                        <a href="javascript:deletedata('<?=$qSaleOrderBillData->SaleOrderBillID;?>','SaleOrderBilldelete');"><i class="fa fa-trash-o"></i></a>
							                        <a href="<?=base_url();?>Transaction_controller/printSaleOrderBill?printSaleBill=<?=$qSaleOrderBillData->SaleOrderBillID;?>" ><i class="fa fa-print"></i></a>&nbsp;&nbsp;
								                    </td>
								                    <td><?=$qSaleOrderBillData->SBBillNO;?></td>
								                    <td><?=$qSaleOrderBillData->ShortName;?></td>
								                    <td><?=$qSaleOrderBillData->Name;?></td>
								                    <td><?=$qSaleOrderBillData->SBDate;?></td>
								                    <td><?=$qSaleOrderBillData->SBTotalPCS;?></td>
								                    <td><?=$qSaleOrderBillData->SBTotalMTSQTY;?></td>
								                    <td><?=$qSaleOrderBillData->SBTotalAmount;?></td>
								                    <td><?=$qSaleOrderBillData->SBBillAmt;?></td>
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
							<form action="" class="" method="post" name="addSaleOrderbillform" id="addSaleOrderbillform" novalidate>
								<?php
								if(empty($editsaleOrderBilldata))
								{
									?>
										<input type="hidden" value="" id="SaleOrderBillID" name="SaleOrderBillID">
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
															<div class="col-12 col-sm-2 col-md-2 col-lg-1 col-xl-2">
																<i data-toggle="modal" data-target="#addNewCompany" class="fa fa-plus-circle"></i>
															</div>
															<div class="col-12 col-sm-4 col-md-2 col-lg-2 col-xl-2 d-flex ">
																<div class="form-group">
																	<label>VOUCHER :</label>
																</div>
															</div>
															<div class="col-12 col-sm-8 col-md-10 col-lg-4 col-xl-10">
																<div class="form-group field">
																	<div class="">
																		<input type="text"  name="SBVoucherNo" id="SBVoucherNo" placeholder="Voucher NO." value="<?php echo $VoucherNo; ?>" class="form-control">
																	</div>
																</div>
															</div>

															<div class="col-12 col-sm-4 col-md-2 col-lg-3 col-xl-2 d-flex ">
																<div class="form-group">
																	<label>ORD/REF. :</label>
																</div>
															</div>
															<div class="col-12 col-sm-8 col-md-10 col-lg-3 col-xl-10">
																<div class="form-group field">
																	<div class="">
																		<input type="text"  name="SBOrdRef" id="SBOrdRef" placeholder="ORD/REF" class="form-control">
																	</div>
																</div>
															</div>


															<div class="col-12 col-sm-4 col-md-2 col-lg-3 col-xl-2 d-flex ">
																<div class="form-group">
																	<label>LR No./AWB :</label>
																</div>
															</div>
															<div class="col-12 col-sm-8 col-md-10 col-lg-3 col-xl-10">
																<div class="form-group field">
																	<div class="">
																		<input type="text"  name="SBLR_No" id="SBLR_No" placeholder="LR No." class="form-control">
																	</div>
																</div>
															</div>
															<div class="col-12 col-sm-4 col-md-2 col-lg-3 col-xl-2 d-flex ">
																<div class="form-group">
																	<label>BILL NO.	 :</label>
																</div>
															</div>
															<div class="col-12 col-sm-8 col-md-10 col-lg-3 col-xl-10">
																<div class="form-group field">
																	<div class="controls">
																		<input type="text" id="SBBillNO" value="<?php echo $SBBillNOData; ?>"  name="SBBillNO" placeholder="Bill NO" class="form-control"> 
																	</div>
																</div>
															</div>

															<div class="col-12 col-sm-4 col-md-2 col-lg-3 col-xl-2 d-flex ">
																<div class="form-group">
																	<label>PARTY:</label>
																</div>
															</div>
															<div class="col-12 col-sm-8 col-md-8 col-lg-8 col-xl-8">
																<div class="form-group field">
																	<div class="controls">
																		<select name="PartyID" id="PartyID"  class="form-control PartyDetails customvalidation">
																			<option value=""> --Select -- </option>
																			<?php
																			foreach ($getPartyData as $getPartyData)
																			{
																				?>
																				<option value="<?=$getPartyData->Ledger_Id		?>"> <?=$getPartyData->Name?> </option>
																				<?php
																			}
																			?>
																		</select>
																	</div>
																</div>
															</div>
															<div class="col-12 col-sm-2 col-md-2 col-lg-1 col-xl-2">
																<i data-toggle="modal" data-target="#AddNewParty" class="fa fa-plus-circle"></i>
															</div>

															<div class="col-12 col-sm-4 col-md-2 col-lg-3 col-xl-2 d-flex">
																<div class="form-group">
																	<label>STATE :</label>
																</div>
															</div>
															<div class="col-12 col-sm-8 col-md-10 col-lg-3 col-xl-10">
																<div class="form-group field">
																	<div class="">
																		<select name="SBStateID" id="SBStateID"  class="form-control">
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
															
															<div class="col-12 col-sm-4 col-md-2 col-lg-3 col-xl-2 d-flex ">
																<div class="form-group">
																	<label>DATE	 :</label>
																</div>
															</div>
															<div class="col-12 col-sm-8 col-md-10 col-lg-3 col-xl-10">
																<div class="form-group field">
																	<div class="">
																		<input type="text" id="SBDate"  name="SBDate" placeholder="2019/01/02" class="form-control"> 
																	</div>
																</div>
															</div>
															<div class="col-12 col-sm-4 col-md-2 col-lg-3 col-xl-2 d-flex ">
																<div class="form-group">
																	<label>GST TYPE :</label>
																</div>
															</div>
															<div class="col-12 col-sm-8 col-md-10 col-lg-9 col-xl-10">
																<div class="form-group field">
																	<div class="controls">
																		<select name="GsttypeID" id="GsttypeID"  class="form-control customvalidation">
																			<option value=""> --Select -- </option>
																			<?php
																			foreach ($getgstTypeData as $qgetgstTypeData)
																			{
																				?>
																				<option value="<?=$qgetgstTypeData->GsttypeID	?>"> <?=$qgetgstTypeData->GstTypeName?> </option>
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
															<div class="col-12 col-sm-8 col-md-10 col-lg-8 col-xl-10">
																<div class="form-group field">
																	<div class="controls">
																		<select name="transportID" id="transportID"  class="form-control customvalidation">
																			<option value=""> --Select -- </option>
																			<?php
																			foreach ($gettransportData as $qgettransportData)
																			{
																				?>
																				<option value="<?=$qgettransportData->transportID	?>"> <?=$qgettransportData->transportName?> </option>
																				<?php
																			}
																			?>
																			
																		</select>
																	</div>
																</div>
															</div>
															<div class="col-12 col-sm-2 col-md-2 col-lg-1 col-xl-2">
																<i data-toggle="modal" data-target="#AddNewTransport" class="fa fa-plus-circle"></i>
															</div>
														</div>
													</div>
													<div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
														<div class="row">
															
															<div class="col-12 col-sm-4 col-md-2 col-lg-3 col-xl-2 d-flex ">
																<div class="form-group">
																	<label>HASTE :</label>
																</div>
															</div>
															<div class="col-12 col-sm-8 col-md-10 col-lg-8 col-xl-10">
																<div class="form-group field">
																	<div class="controls">
																		<select name="HasteID" id="HasteID"  class="form-control customvalidation">
																			<option value=""> --Select -- </option>
																			<?php
																			foreach ($gethasteData as $qgethasteData)
																			{
																				?>
																				<option value="<?=$qgethasteData->HasteID	?>"> <?=$qgethasteData->Haste?> </option>
																				<?php
																			}
																			?>
																			
																		</select>
																	</div>
																</div>
															</div>
															<div class="col-12 col-sm-2 col-md-2 col-lg-1 col-xl-2">
																<i data-toggle="modal" data-target="#AddNewHaste" class="fa fa-plus-circle"></i>
															</div>
															

															<div class="col-12 col-sm-4 col-md-2 col-lg-3 col-xl-2 d-flex ">
																<div class="form-group">
																	<label>BROKER 	 :</label>
																</div>
															</div>
															<div class="col-12 col-sm-8 col-md-10 col-lg-8 col-xl-10">
																<div class="form-group field">
																	<div class="controls">
																		<select name="BrokerID" id="BrokerID"  class="form-control customvalidation">
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
															<div class="col-12 col-sm-2 col-md-2 col-lg-1 col-xl-2">
																<i data-toggle="modal" data-target="#AddNewBroker" class="fa fa-plus-circle"></i>
															</div>

															<div class="col-12 col-sm-4 col-md-2 col-lg-3 col-xl-2 d-flex ">
																<div class="form-group">
																	<label>HASTE GSTIN	 :</label>
																</div>
															</div>
															<div class="col-12 col-sm-8 col-md-10 col-lg-3 col-xl-10">
																<div class="form-group field">
																	<div class="">
																		<input type="text" id="SBHasteGstin"  name="SBHasteGstin" placeholder="Haste GSTIN" class="form-control"> 
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
																		<input type="text" id="SBDhara"  name="SBDhara" placeholder="Dhara" class="form-control"> 
																	</div>
																</div>
															</div>

															<div class="col-12 col-sm-4 col-md-2 col-lg-3 col-xl-2 d-flex ">
																<div class="form-group">
																	<label>PARTY GSTIN	 :</label>
																</div>
															</div>
															<div class="col-12 col-sm-8 col-md-10 col-lg-3 col-xl-10">
																<div class="form-group field">
																	<div class="controls">
																		<input type="text" id="SBPArtyGstin"  name="SBPArtyGstin" placeholder="Party Gstin" class="form-control"> 
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
																		<input type="text" id="SBGrace"  name="SBGrace" placeholder="Grace" class="form-control"> 
																	</div>
																</div>
															</div>

															<div class="col-12 col-sm-4 col-md-2 col-lg-3 col-xl-2 d-flex ">
																<div class="form-group">
																	<label>STATION	 :</label>
																</div>
															</div>
															<div class="col-12 col-sm-8 col-md-10 col-lg-8 col-xl-10">
																<div class="form-group field">
																	<div class="controls">
																		<select name="StationID" id="StationIDData"  class="form-control customvalidation">
																			<option value=""> --Select -- </option>
																			<?php
																			foreach ($getstationData as $qgetstationData)
																			{
																				?>
																				<option value="<?=$qgetstationData->StationID		?>"> <?=$qgetstationData->StationName?> </option>
																				<?php
																			}
																			?>
																		</select>
																	</div>
																</div>
															</div>
															<div class="col-12 col-sm-2 col-md-2 col-lg-1 col-xl-2">
																<i data-toggle="modal" data-target="#AddNewStation" class="fa fa-plus-circle"></i>
															</div>
															<div class="col-12 col-sm-4 col-md-2 col-lg-4 col-xl-2 d-flex ">
																<div class="form-group">
																	<label>SCREEN SERIES :</label>
																</div>
															</div>
															<div class="col-12 col-sm-8 col-md-10 col-lg-8 col-xl-10">
																<div class="form-group field">
																	<div class="controls">
																		<select name="ScreenRegisterID" id="ScreenRegisterID"  class="form-control customvalidation">
																			<option value=""> --Select -- </option>
																			<?php
																			foreach ($getscreenbrandData as $qgetscreenbrandData)
																			{
																				?>
																				<option value="<?=$qgetscreenbrandData->screenBrandID		?>"> <?=$qgetscreenbrandData->brandName?> </option>
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
																	<div class="controls">
																		<input type="text" id="SBVehicleNo"  name="SBVehicleNo" placeholder="Vehicle No" class="form-control"> 
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>	
											</div>
											<div class="formtitle" style="overflow-x:auto;">
												
												<table id="SellOrderBill"  class="table-responsive table order-listData">
												    <thead>
												        <tr>
												            <td>PICK</td>
												            <td>REF.</td>
												            <td>ITEM NAME</td>
												            <td>BUNDLES</td>
												            <td>MAIN SCREEN</td>
												            <td>PACKING</td>
												            <td>UNIT</td>
												            <td>PCS</td>
												            <td>CUT</td>
												            <td>MTS/QTY</td>
												            <td>RATE</td>
												            <td>AMOUNT</td>
												            <td>ACTION</td>
												        </tr>
												    </thead>
												    <tbody>
											    		<tr>
												            <td style="padding: 0.2rem !important;">
												                <input type="text" name="pick0" id="pick0" class="form-control"  placeholder="PICK"/>
												            </td>
												            <td style="padding: 0.2rem !important;">
												                <input type="text" name="ref0" id="ref0"  class="form-control" placeholder="REF"/>
												            </td>
												            <td style="padding: 0.2rem !important;">
												            	<select name="ItemName0" id="ItemName0" onchange="getItemCutData(0);" class="form-control">
																	<option value=""> --Select -- </option>
																	<?php
																	foreach ($getitemdetailsdata as $qgetitemdetailsdata)
																	{
																		?>
																		<option value="<?=$qgetitemdetailsdata->ItemdetailID ?>"> <?=$qgetitemdetailsdata->Name?> </option>
																		<?php
																	}
																	?>
																</select>
												            </td>
												             <td style="padding: 0.2rem !important;">
												                <input type="text" name="Bundles0" id="Bundles0"  class="form-control" placeholder="REF"/>
												            </td>
												            <td style="padding: 0.2rem !important;">
												            	<select name="MainScreen0" id="MainScreen0"  class="form-control">
																	<option value=""> --Select -- </option>
																	<?php
																	foreach ($getitemdetailsdata as $qgetitemdetailsdata)
																	{
																		?>
																		<option value="<?=$qgetitemdetailsdata->ItemdetailID ?>"> <?=$qgetitemdetailsdata->Name?> </option>
																		<?php
																	}
																	?>
																</select>
												            </td>
												            <td style="padding: 0.2rem !important;">
												            	<select name="Packing0" id="Packing0"  class="form-control">
																	<option value=""> --Select -- </option>
																	<?php
																	foreach ($getPackageData as $qgetPackageData)
																	{
																		?>
																		<option value="<?=$qgetPackageData->PackagestyleID ?>"> <?=$qgetPackageData->packing?> </option>
																		<?php
																	}
																	?>
																</select>
												            </td>
												            <td style="padding: 0.2rem !important;">
												                <select name="Unit0" id="Unit0"  class="form-control">
																	<option value="">-Select-</option>
																	<option value="pcs">Pcs</option>
																	<option value="mts">MTS</option>
																	<option value="kg">KG</option>
																	<option value="suit">Suit</option>
																	<option value="other">Other</option>
																</select>
												            </td>
												            <td style="padding: 0.2rem !important;">
												                <input type="text" name="Pcs0" id="Pcs0" onkeyup="forcalculation(0);" class="form-control Pcs" placeholder="PCS"/>
												            </td>
												            <td style="padding: 0.2rem !important;">
												                <input type="text" name="Cut0" id="Cut0" onkeyup="forcalculation(0);" class="form-control" placeholder="CUT" readonly="" />
												            </td>
												           <td style="padding: 0.2rem !important;">
												                <input type="text" name="MtsQty0" id="MtsQty0" class="form-control Mts" placeholder="MTS/QTY" readonly="" />
												            </td>
												            <td style="padding: 0.2rem !important;">
												                <input type="text" name="Rate0" id="Rate0" class="form-control" onkeyup="forcalculation(0);" placeholder="RATE" readonly="" />
												            </td>

												            <td style="padding: 0.2rem !important;">
												                <input type="text" name="amount0" id="amount0" class="form-control amount" onkeyup="forcalculation(0);" placeholder="AMOUNT" readonly="" />
												            </td>
												            <td style="padding: 0.2rem !important;"><a class="deleteRow"></a>
												            </td>
												        </tr>
												    </tbody>
												    <tfoot>
												    	<input type="hidden" id="SellOrderBillcountdata" name="SellOrderBillcountdata" value="1">
												        <tr>
												            <td colspan="5" style="text-align: left;">
												                <input type="button" class="btn btn-lg btn-block addSaleOrderBillrow" id="addSaleOrderBillrow" value="Add Row" />
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
																		<input type="text"  name="SBHsnCode" id="SBHsnCode" class="form-control" placeholder="HSNCODE">
																	</div>
																</div>
															</div>
														</div>
													</div>
													<div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
														<div class="row">
															<div class="col-12 col-sm-4 col-md-2 col-lg-3 col-xl-2 d-flex ">
																<div class="form-group">
																	<label>GRAND TOTAL :</label>
																</div>
															</div>
															<div class="col-12 col-sm-8 col-md-10 col-lg-3 col-xl-10">
																<div class="form-group field">
																	<div class="">
																		<input type="text"  name="SBTotalPCS" id="SBTotalPCS" placeholder="Total Pcs" class="form-control" style="padding: 0.2rem !important;">
																	</div>
																</div>
															</div>
															<div class="col-12 col-sm-8 col-md-10 col-lg-3 col-xl-10">
																<div class="form-group field">
																	<div class="">
																		<input type="text"  name="SBTotalMTSQTY" id="SBTotalMTSQTY" placeholder="Total Mts" class="form-control" style="padding: 0.2rem !important;">
																	</div>
																</div>
															</div>
															<div class="col-12 col-sm-8 col-md-10 col-lg-3 col-xl-10">
																<div class="form-group field">
																	<div class="">

																		<input type="text"  name="SBTotalAmount"  id="SBTotalAmount" placeholder="Total Amount" class="form-control" style="padding: 0.2rem !important;">
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
																	<label>PACK BY :</label>
																</div>
															</div>
															<div class="col-12 col-sm-8 col-md-10 col-lg-9 col-xl-10">
																<div class="form-group field">
																	<div class="">
																		<select name="SBPackBy" id="SBPackBy"  class="form-control">
																			<option value=""> --Select -- </option>
																			<?php
																			foreach ($getUserdata as $qgetUserdata)
																			{
																				?>
																				<option value="<?=$qgetUserdata->UserId	?>"> <?=$qgetUserdata->UserName?> </option>
																				<?php
																			}
																			?>
																			
																		</select>
																	</div>
																</div>
															</div>

															<div class="col-12 col-sm-4 col-md-2 col-lg-3 col-xl-2 d-flex ">
																<div class="form-group">
																	<label>CHECKED BY :</label>
																</div>
															</div>
															<div class="col-12 col-sm-8 col-md-10 col-lg-9 col-xl-10">
																<div class="form-group field">
																	<div class="">
																		<select name="SBCheckedBy" id="SBCheckedBy"  class="form-control">
																			<option value=""> --Select -- </option>
																			<?php
																			foreach ($getUserdata as $qgetUserdata1)
																			{
																				?>
																				<option value="<?=$qgetUserdata1->UserId	?>"> <?=$qgetUserdata1->UserName?> </option>
																				<?php
																			}
																			?>
																			
																		</select>
																	</div>
																</div>
															</div>

															<div class="col-12 col-sm-4 col-md-2 col-lg-3 col-xl-2 d-flex">
																<div class="form-group">
																	<label>CASE NO. :</label>
																</div>
															</div>
															<div class="col-12 col-sm-8 col-md-10 col-lg-4 col-xl-10">
																<div class="form-group field">
																	<div class="">
																		<input type="text"  name="SBCaseNo" id="SBCaseNo"  placeholder="0" class="form-control"> 
																	</div>
																</div>
															</div>
															<div class="col-12 col-sm-4 col-md-2 col-lg-1 col-xl-2 d-flex ">
																<div class="form-group">
																	<label> <i class="fa fa-close" style="font-size:24px"></i> </label>
																</div>
															</div>
															<div class="col-12 col-sm-8 col-md-10 col-lg-4 col-xl-10">
																<div class="form-group field">
																	<div class="">
																		<input type="text"  name="SBNo" id="SBNo"  placeholder="0" class="form-control"> 
																	</div>
																</div>
															</div>
														</div>
													</div>
													<div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
														<div class="row">
															<div class="col-12 col-sm-4 col-md-2 col-lg-4 col-xl-2 d-flex ">
																<div class="form-group">
																	<label>E-WAY BILL NO :</label>
																</div>
															</div>
															<div class="col-12 col-sm-8 col-md-10 col-lg-3 col-xl-10">
																<div class="form-group field">
																	<div class="">
																		<input type="text"  name="SBEwayBillNo" id="SBEwayBillNo" placeholder="EwayBillNo" class="form-control">
																	</div>
																</div>
															</div>
															<div class="col-12 col-sm-4 col-md-2 col-lg-2 col-xl-2 d-flex ">
																<div class="form-group">
																	<label>NET AMT :</label>
																</div>
															</div>
															<div class="col-12 col-sm-8 col-md-10 col-lg-3 col-xl-10">
																<div class="form-group field">
																	<div class="controls">
																		<input type="text"  name="SBNetAmt" id="SBNetAmt" placeholder="0.00" class="form-control">
																	</div>
																</div>
															</div>

															<div class="col-12 col-sm-4 col-md-2 col-lg-3 col-xl-2 d-flex ">
																<div class="form-group">
																	<label>RMK :</label>
																</div>
															</div>
															<div class="col-12 col-sm-8 col-md-10 col-lg-8 col-xl-10">
																<div class="form-group field">
																	<div class="controls">
																		<select name="remark" id="remarkData"  class="form-control customvalidation">
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
															<div class="col-12 col-sm-2 col-md-2 col-lg-1 col-xl-2">
																<i data-toggle="modal" data-target="#AddNewRemark" class="fa fa-plus-circle"></i>
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
																		<input type="text"  name="SBLrNo" id="SBLrNo" class="form-control" placeholder="LrNo">
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
																		<input type="text" id="SBLRDate"  name="SBLRDate" placeholder="LrDate" class="form-control">
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
																		<input type="text" id="SBLRRecDate"  name="SBLRRecDate" placeholder="2019-02-02" class="form-control">
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
																		<input type="text"  name="SBWeight" id="SBWeight"  class="form-control" placeholder="Weight">
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
																		<input type="text"  name="SBFreight" id="SBFreight" class="form-control" placeholder="Freight">
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
																	<label>RMK :</label>
																</div>
															</div>
															<div class="col-12 col-sm-8 col-md-10 col-lg-9 col-xl-10">
																<div class="form-group field">
																	<div class="">
																		<select name="SBRemarkID1" id="SBRemarkID1"  class="form-control">
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
															<div class="col-12 col-sm-4 col-md-2 col-lg-3 col-xl-2 d-flex ">
																<div class="form-group">
																	<label>RMK :</label>
																</div>
															</div>
															<div class="col-12 col-sm-8 col-md-10 col-lg-9 col-xl-10">
																<div class="form-group field">
																	<div class="">
																		<select name="SBRemarkID2" id="SBRemarkID2"  class="form-control">
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

															<div class="col-12 col-sm-4 col-md-2 col-lg-3 col-xl-2 d-flex ">
																<div class="form-group">
																	<label>RMK :</label>
																</div>
															</div>
															<div class="col-12 col-sm-8 col-md-10 col-lg-9 col-xl-10">
																<div class="form-group field">
																	<div class="">
																		<select name="SBRemarkID3" id="SBRemarkID3"  class="form-control">
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
														</div>
													</div>
													<div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
														<div class="row">
															<div class="col-12 col-sm-8 col-md-10 col-lg-3 col-xl-10">
																<div class="form-group field">
																	<div class="">
																		<input type="text"  name="SBValue1" id="SBValue1" placeholder="0.00" class="form-control" onkeydown="forSBillcalculation(0);"> 
																	</div>
																</div>
															</div>
															<i class="fa fa-percent" aria-hidden="true"></i>
															<div class="col-12 col-sm-8 col-md-10 col-lg-3 col-xl-10">
																<div class="form-group field">
																	<div class="">
																		<input type="text"  name="SBValue11" id="SBValue11" placeholder="0.00" class="form-control" onkeydown="forSBillcalculation(0);">
																	</div>
																</div> 
															</div>
															<div class="col-12 col-sm-8 col-md-10 col-lg-4 col-xl-10">
																<div class="form-group field">
																	<div class="">
																		<input type="text"  name="SBAmt1" id="SBAmt1" placeholder="0.00" class="form-control">
																	</div>
																</div>
															</div>

															<div class="col-12 col-sm-8 col-md-10 col-lg-3 col-xl-10">
																<div class="form-group field">
																	<div class="">
																		<input type="text"  name="SBValue2" id="SBValue2" placeholder="0.00" class="form-control" onkeydown="forSBillcalculation(0);"> 
																	</div>
																</div>
															</div>
															<i class="fa fa-close" style="font-size:17px"></i>
															<div class="col-12 col-sm-8 col-md-10 col-lg-3 col-xl-10">
																<div class="form-group field">
																	<div class="">
																		<input type="text"  name="SBValue21" id="SBValue21" placeholder="0.00" class="form-control" onkeydown="forSBillcalculation(0);">
																	</div>
																</div> 
															</div>
															<div class="col-12 col-sm-8 col-md-10 col-lg-4 col-xl-10">
																<div class="form-group field">
																	<div class="">
																		<input type="text"  name="SBAmt2" id="SBAmt2" placeholder="0.00" class="form-control">
																	</div>
																</div>
															</div>

															<div class="col-12 col-sm-8 col-md-10 col-lg-3 col-xl-10">
																<div class="form-group field">
																	<div class="">
																		<input type="text"  name="SBValue3" id="SBValue3" placeholder="0.00" class="form-control" onkeydown="forSBillcalculation(0);"> 
																	</div>
																</div>
															</div>
															<i class="fa fa-close" style="font-size:17px"></i>
															<div class="col-12 col-sm-8 col-md-10 col-lg-3 col-xl-10">
																<div class="form-group field">
																	<div class="">
																		<input type="text"  name="SBValue31" id="SBValue31" placeholder="0.00" class="form-control" onkeydown="forSBillcalculation(0);">
																	</div>
																</div> 
															</div>
															<div class="col-12 col-sm-8 col-md-10 col-lg-4 col-xl-10">
																<div class="form-group field">
																	<div class="">
																		<input type="text"  name="SBAmt3" id="SBAmt3" placeholder="0.00" class="form-control">
																	</div>
																</div>
															</div>

															<div class="col-12 col-sm-4 col-md-2 col-lg-3 col-xl-2 d-flex">
																<div class="form-group">
																	<label>NET AMT :</label>
																</div>
															</div>
															<div class="col-12 col-sm-8 col-md-10 col-lg-6 col-xl-10">
																<div class="form-group field">
																	<div class="">
																		<input type="text"  name="SBNetAmt1" id="SBNetAmt1" placeholder="0.00" class="form-control">
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
																	<label> CGST % :</label>
																</div>
															</div>
															<div class="col-12 col-sm-8 col-md-10 col-lg-3 col-xl-10">
																<div class="form-group field">
																	<div class="">
																		<input type="text"  name="SBCgst" id="SBCgst" placeholder="0.00" class="form-control">
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
																		<input type="text"  name="SBCgstAmt" id="SBCgstAmt" placeholder="0.00" onkeyup="forSBillcalculation(0);" class="form-control"> 
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
																		<input type="text"  name="SBSgst" id="SBSgst" placeholder="0.00" class="form-control"> 
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
																		<input type="text"  name="SBSgstAmt" id="SBSgstAmt" placeholder="0.00" onkeyup="forSBillcalculation(0);" class="form-control"> 
																	</div>
																</div>
															</div>
														</div>
													</div>
													<div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
														<div class="row">
															<div class="col-12 col-sm-4 col-md-2 col-lg-4 col-xl-2 d-flex">
																<div class="form-group">
																	<label>TAXABLE VALUE :</label>
																</div>
															</div>
															<div class="col-12 col-sm-8 col-md-10 col-lg-8 col-xl-10">
																<div class="form-group field">
																	<div class="">
																		<input type="text"  name="SBTaxableValue" id="SBTaxableValue" placeholder="0.00" class="form-control">
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
																		<input type="text"  name="SBBillAmt" id="SBBillAmt" placeholder="0.00" class="form-control">
																	</div>
																</div>
															</div>

															<div class="col-12 col-sm-4 col-md-2 col-lg-4 col-xl-2 d-flex ">
																<div class="form-group">
																	<label>NET AFTER TDS :</label>
																</div>
															</div>
															<div class="col-12 col-sm-8 col-md-10 col-lg-8 col-xl-10">
																<div class="form-group field">
																	<div class="">
																		<input type="text"  name="SBNetAfterTds" id="SBNetAfterTds" placeholder="0.00" class="form-control">
																	</div>
																</div>
															</div>

															<div class="col-12 col-sm-4 col-md-2 col-lg-7 col-xl-2 d-flex ">
																<div class="form-group">
																	<label>E-WAY BILL NO (READ ONLY) :</label>
																</div>
															</div>
															<div class="col-12 col-sm-8 col-md-10 col-lg-5 col-xl-10">
																<div class="form-group field">
																	<div class="">
																		<input type="text"  name="SBEwayBillNo1" id="SBEwayBillNo1" placeholder="EwayBillNo" class="form-control" readonly="">
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>	
											</div>
											
											<div class="formtitle">
												<h4 class="backcolor">PAYMENT DETAIL</h4>
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
																		<input type="text" id="SBPAidDate"  name="SBPAidDate" placeholder="2019-02-02" class="form-control">
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
																		<input type="text"  name="SBDisc" id="SBDisc" placeholder="0.00" class="form-control"> 
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
																		<input type="text"  name="SBPackFollo" id="SBPackFollo" placeholder="0.00" class="form-control"> 
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
																		<input type="text"  name="SBRd" id="SBRd" placeholder="0.00" class="form-control">
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
																		<input type="text"  name="SBSweets" id="SBSweets" placeholder="0.00" class="form-control">
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
																		<input type="text"  name="SBOthBc" id="SBOthBc" placeholder="0.00" class="form-control"> 
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
																		<input type="text"  name="SBAddAmt" id="SBAddAmt" placeholder="0.00" class="form-control">
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
																		<input type="text"  name="SBTdsAmt" id="SBTdsAmt" placeholder="0.00" class="form-control">
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
																		<input type="text"  name="SBGr" id="SBGr" placeholder="0.00"class="form-control">
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
																		<input type="text"  name="SBSalePaidAmt" id="SBSalePaidAmt" placeholder="0.00" class="form-control">
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
														<a  href="<?php echo base_url()?>SalesOrderBill" class="btn btn-info">
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
						if(!empty($editsaleOrderBilldata))
						{
						?>
						<!-- <input type="hidden" value="inside" id="inside"> -->
						<div class="tab-pane  p-20" id="editform" role="tabpanel">
							<form action="" class="" method="post" name="EditSaleOrderbillform" id="EditSaleOrderbillform" novalidate>
								<input type="hidden" value="<?=$editsaleOrderBilldata['SaleOrderBillID'];?>" id="SaleOrderBillID" name="SaleOrderBillID">
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
															<div class="col-12 col-sm-6 col-md-8 col-lg-9 col-xl-8">
																<div class="form-group field">
																	<div class="controls">
																		<select name="CompanyId" id="CompanyId"  class="form-control customvalidation">
																			<option value=""> --Select -- </option>
																			<?php
																			foreach ($getCompanyData as $qgetCompanyData)
																			{
																				?>
																				<option <?php if($editsaleOrderBilldata['CompanyId'] == $qgetCompanyData->CompanyID){echo "selected";}?> value="<?=$qgetCompanyData->CompanyID ?>"> <?=$qgetCompanyData->Name?> </option>
																				<?php
																			}
																			?>
																			
																		</select>
																	</div>
																</div>
															</div>
															<div class="col-12 col-sm-4 col-md-2 col-lg-2 col-xl-2 d-flex ">
																<div class="form-group">
																	<label>VOUCHER :</label>
																</div>
															</div>
															<div class="col-12 col-sm-8 col-md-10 col-lg-4 col-xl-10">
																<div class="form-group field">
																	<div class="">
																		<input type="text"  name="SBVoucherNo" id="SBVoucherNo" placeholder="Voucher NO." value="<?=$editsaleOrderBilldata['SBVoucherNo'];?>" class="form-control">
																	</div>
																</div>
															</div>

															<div class="col-12 col-sm-4 col-md-2 col-lg-3 col-xl-2 d-flex ">
																<div class="form-group">
																	<label>ORD/REF. :</label>
																</div>
															</div>
															<div class="col-12 col-sm-8 col-md-10 col-lg-3 col-xl-10">
																<div class="form-group field">
																	<div class="">
																		<input type="text"  name="SBOrdRef" id="SBOrdRef" value="<?=$editsaleOrderBilldata['SBOrdRef'];?>" placeholder="ORD/REF" class="form-control">
																	</div>
																</div>
															</div>


															<div class="col-12 col-sm-4 col-md-2 col-lg-3 col-xl-2 d-flex ">
																<div class="form-group">
																	<label>LR No./AWB :</label>
																</div>
															</div>
															<div class="col-12 col-sm-8 col-md-10 col-lg-3 col-xl-10">
																<div class="form-group field">
																	<div class="">
																		<input type="text"  name="SBLR_No" id="SBLR_No" value="<?=$editsaleOrderBilldata['SBLR_No'];?>" placeholder="LR No." class="form-control">
																	</div>
																</div>
															</div>
															<div class="col-12 col-sm-4 col-md-2 col-lg-3 col-xl-2 d-flex ">
																<div class="form-group">
																	<label>BILL NO.	 :</label>
																</div>
															</div>
															<div class="col-12 col-sm-8 col-md-10 col-lg-3 col-xl-10">
																<div class="form-group field">
																	<div class="controls">
																		<input type="text" id="SBBillNO" value="<?=$editsaleOrderBilldata['SBBillNO'];?>"  name="SBBillNO" placeholder="Bill NO" class="form-control"> 
																	</div>
																</div>
															</div>

															<div class="col-12 col-sm-4 col-md-2 col-lg-3 col-xl-2 d-flex ">
																<div class="form-group">
																	<label>PARTY:</label>
																</div>
															</div>
															<div class="col-12 col-sm-8 col-md-8 col-lg-9 col-xl-8">
																<div class="form-group field">
																	<div class="controls">
																		<select name="PartyID" id="EditPartyID"  class="form-control EditPartyDetails customvalidation">
																			<option value=""> --Select -- </option>
																			<?php
																			foreach ($getPartyData1 as $getPartyData1)
																			{
																				?>
																				<option <?php if($editsaleOrderBilldata['PartyID'] == $getPartyData1->Ledger_Id){echo "selected";}?> value="<?=$getPartyData1->Ledger_Id ?>"> <?=$getPartyData1->Name?> </option>
																				<?php
																			}
																			?>
																		</select>
																	</div>
																</div>
															</div>

															<div class="col-12 col-sm-4 col-md-2 col-lg-3 col-xl-2 d-flex">
																<div class="form-group">
																	<label>STATE :</label>
																</div>
															</div>
															<div class="col-12 col-sm-8 col-md-10 col-lg-3 col-xl-10">
																<div class="form-group field">
																	<div class="">
																		<select name="SBStateID" id="SBStateID"  class="form-control">
																			<option value=""> --Select -- </option>
																			<?php
																			foreach ($getstateData as $qgetstateData)
																			{
																				?>
																				<option <?php if($editsaleOrderBilldata['SBStateID'] == $qgetstateData->stateID){echo "selected";}?> value="<?=$qgetstateData->stateID ?>"> <?=$qgetstateData->stateName?> </option>
																				<?php
																			}
																			?>
																			
																		</select>
																	</div>
																</div>
															</div>
															
															<div class="col-12 col-sm-4 col-md-2 col-lg-2 col-xl-2 d-flex ">
																<div class="form-group">
																	<label>DATE	 :</label>
																</div>
															</div>
															<div class="col-12 col-sm-8 col-md-10 col-lg-4 col-xl-10">
																<div class="form-group field">
																	<div class="">
																		<input type="text" id="EditSBDate"  name="SBDate" value="<?=$editsaleOrderBilldata['SBDate'];?>" placeholder="2019/01/02" class="form-control"> 
																	</div>
																</div>
															</div>
															<div class="col-12 col-sm-4 col-md-2 col-lg-3 col-xl-2 d-flex ">
																<div class="form-group">
																	<label>GST TYPE :</label>
																</div>
															</div>
															<div class="col-12 col-sm-8 col-md-10 col-lg-9 col-xl-10">
																<div class="form-group field">
																	<div class="controls">
																		<select name="GsttypeID" id="EditGsttypeID"  class="form-control customvalidation">
																			<option value=""> --Select -- </option>
																			<?php
																			foreach ($getgstTypeData as $qgetgstTypeData)
																			{
																				?>
																				<option <?php if($editsaleOrderBilldata['GsttypeID'] == $qgetgstTypeData->GsttypeID){echo "selected";}?> value="<?=$qgetgstTypeData->GsttypeID ?>"> <?=$qgetgstTypeData->GstTypeName?> </option>
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
															<div class="col-12 col-sm-8 col-md-10 col-lg-8 col-xl-10">
																<div class="form-group field">
																	<div class="controls">
																		<select name="transportID" id="transportID"  class="form-control customvalidation">
																			<option value=""> --Select -- </option>
																			<?php
																			foreach ($gettransportData as $qgettransportData)
																			{
																				?>
																				<option <?php if($editsaleOrderBilldata['transportID'] == $qgettransportData->transportID){echo "selected";}?> value="<?=$qgettransportData->transportID ?>"> <?=$qgettransportData->transportName?> </option>
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
																	<label>HASTE :</label>
																</div>
															</div>
															<div class="col-12 col-sm-8 col-md-10 col-lg-9 col-xl-10">
																<div class="form-group field">
																	<div class="controls">
																		<select name="HasteID" id="EditHasteID"  class="form-control customvalidation">
																			<option value=""> --Select -- </option>
																			<?php
																			foreach ($gethasteData as $qgethasteData)
																			{
																				?>
																				<option <?php if($editsaleOrderBilldata['HasteID'] == $qgethasteData->HasteID){echo "selected";}?> value="<?=$qgethasteData->HasteID ?>"> <?=$qgethasteData->Haste?> </option>
																				<?php
																			}
																			?>
																			
																		</select>
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
																		<select name="BrokerID" id="BrokerID"  class="form-control customvalidation">
																			<option value=""> --Select -- </option>
																			<?php
																			foreach ($getbrokerData as $qgetbrokerData)
																			{
																				?>
																				<option <?php if($editsaleOrderBilldata['BrokerID'] == $qgetbrokerData->Ledger_Id){echo "selected";}?> value="<?=$qgetbrokerData->Ledger_Id ?>"> <?=$qgetbrokerData->Name?> </option>
																				<?php
																			}
																			?>
																		</select>
																	</div>
																</div>
															</div>
															
															<div class="col-12 col-sm-4 col-md-2 col-lg-3 col-xl-2 d-flex ">
																<div class="form-group">
																	<label>HASTE GSTIN	 :</label>
																</div>
															</div>
															<div class="col-12 col-sm-8 col-md-10 col-lg-3 col-xl-10">
																<div class="form-group field">
																	<div class="">
																		<input type="text" id="EditSBHasteGstin"  name="SBHasteGstin" value="<?=$editsaleOrderBilldata['SBHasteGstin'];?>"  class="form-control" readonly> 
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
																		<input type="text" id="EditSBDhara"  name="SBDhara" value="<?=$editsaleOrderBilldata['SBDhara'];?>" placeholder="Dhara" class="form-control"> 
																	</div>
																</div>
															</div>

															<div class="col-12 col-sm-4 col-md-2 col-lg-3 col-xl-2 d-flex ">
																<div class="form-group">
																	<label>PARTY GSTIN	 :</label>
																</div>
															</div>
															<div class="col-12 col-sm-8 col-md-10 col-lg-3 col-xl-10">
																<div class="form-group field">
																	<div class="controls">
																		<input type="text" id="EditSBPArtyGstin"  name="SBPArtyGstin" value="<?=$editsaleOrderBilldata['SBPArtyGstin'];?>" class="form-control" readonly> 
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
																		<input type="text" id="SBGrace"  name="SBGrace" value="<?=$editsaleOrderBilldata['SBGrace'];?>" placeholder="Grace" class="form-control"> 
																	</div>
																</div>
															</div>

															<div class="col-12 col-sm-4 col-md-2 col-lg-3 col-xl-2 d-flex ">
																<div class="form-group">
																	<label>STATION	 :</label>
																</div>
															</div>
															<div class="col-12 col-sm-8 col-md-10 col-lg-9 col-xl-10">
																<div class="form-group field">
																	<div class="controls">
																		<select name="StationID" id="StationIDData"  class="form-control customvalidation">
																			<option value=""> --Select -- </option>
																			<?php
																			foreach ($getstationData as $qgetstationData)
																			{
																				?>
																				<option <?php if($editsaleOrderBilldata['StationID'] == $qgetstationData->StationID){echo "selected";}?> value="<?=$qgetstationData->StationID ?>"> <?=$qgetstationData->StationName?> </option>
																				<?php
																			}
																			?>
																		</select>
																	</div>
																</div>
															</div>
															<div class="col-12 col-sm-4 col-md-2 col-lg-4 col-xl-2 d-flex ">
																<div class="form-group">
																	<label>SCREEN SERIES :</label>
																</div>
															</div>
															<div class="col-12 col-sm-8 col-md-10 col-lg-8 col-xl-10">
																<div class="form-group field">
																	<div class="controls">
																		<select name="ScreenRegisterID" id="ScreenRegisterID"  class="form-control customvalidation">
																			<option value=""> --Select -- </option>
																			<?php
																			foreach ($getscreenbrandData as $qgetscreenbrandData)
																			{
																				?>
																				<option <?php if($editsaleOrderBilldata['ScreenRegisterID'] == $qgetscreenbrandData->screenBrandID){echo "selected";}?> value="<?=$qgetscreenbrandData->screenBrandID ?>"> <?=$qgetscreenbrandData->brandName?> </option>
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
																	<div class="controls">
																		<input type="text" id="SBVehicleNo"  name="SBVehicleNo" value="<?=$editsaleOrderBilldata['SBVehicleNo'];?>" placeholder="Vehicle No" class="form-control"> 
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>	
											</div>
											<div class="formtitle" style="overflow-x:auto;">
												<input type="hidden" id="SellOrderBillcountdata" name="SellOrderBillcountdata" value="1">
												<table id="EditSellOrderBill"  class="table-responsive table order-listData">
												    <thead>
												        <tr>
												            <td>PICK</td>
												            <td>REF.</td>
												            <td>ITEM NAME</td>
												            <td>BUNDLES</td>
												            <td>MAIN SCREEN</td>
												            <td>PACKING</td>
												            <td>UNIT</td>
												            <td>PCS</td>
												            <td>CUT</td>
												            <td>MTS/QTY</td>
												            <td>RATE</td>
												            <td>AMOUNT</td>
												            <td>ACTION</td>
												        </tr>
												    </thead>
												    <tbody>
												    	<?php
													    	$SaleOrderBillID = $editsaleOrderBilldata['SaleOrderBillID'];
													    	$sellOrderBillListData = $this->db->query("SELECT * from saleorderbilllist where SaleOrderBillID = '$SaleOrderBillID'")->result_array();
													    	$x = 1;
													    	foreach ($sellOrderBillListData as $Listvalue)
													    	{ 
													    	?>
															<tr>
															    <td style="padding: 0.2rem !important;">
															        <input type="text" name="pick<?=$x;?>" id="pick<?=$x;?>" class="form-control" value="<?=$Listvalue['SBPick']?>" placeholder="PICK"/>
															    </td>
															    <td style="padding: 0.2rem !important;">
															        <input type="text" name="ref<?=$x;?>" id="ref<?=$x;?>"  class="form-control" value="<?=$Listvalue['SBRef']?>" placeholder="REF"/>
															    </td>
															    <td style="padding: 0.2rem !important;">
															    	<select name="ItemName<?=$x;?>" id="ItemName<?=$x;?>" onchange="getEditItemCutData('<?=$x;?>');" class="form-control">
																		<option value=""> --Select -- </option>
																		<?php
																		foreach ($getitemdetailsdata as $qgetitemdetailsdata)
																		{
																			?>
																			<option <?php if($Listvalue['SBItemName'] == $qgetitemdetailsdata->ItemdetailID){echo "selected";}?> value="<?=$qgetitemdetailsdata->ItemdetailID ?>"> <?=$qgetitemdetailsdata->Name?> </option>
																			<?php
																		}
																		?>
																	</select>
															    </td>
															     <td style="padding: 0.2rem !important;">
															        <input type="text" name="Bundles<?=$x;?>" id="Bundles<?=$x;?>"  class="form-control" value="<?=$Listvalue['SBBundles']?>" placeholder="Bundles"/>
															    </td>
															    <td style="padding: 0.2rem !important;">
															    	<select name="MainScreen<?=$x;?>" id="MainScreen<?=$x;?>"  class="form-control">
																		<option value=""> --Select -- </option>
																		<?php
																		foreach ($getitemdetailsdata as $qgetitemdetailsdata)
																		{
																			?>
																			<option <?php if($Listvalue['SBMainScreen'] == $qgetitemdetailsdata->ItemdetailID){echo "selected";}?> value="<?=$qgetitemdetailsdata->ItemdetailID ?>"> <?=$qgetitemdetailsdata->Name?> </option>
																			<?php
																		}
																		?>
																	</select>
															    </td>
															    <td style="padding: 0.2rem !important;">
															    	<select name="Packing<?=$x;?>" id="Packing<?=$x;?>"  class="form-control">
																		<option value=""> --Select -- </option>
																		<?php
																		foreach ($getPackageData as $qgetPackageData)
																		{
																			?>
																			<option <?php if($Listvalue['SBPacking'] == $qgetPackageData->PackagestyleID){echo "selected";}?> value="<?=$qgetPackageData->PackagestyleID ?>"> <?=$qgetPackageData->packing?> </option>
																			<?php
																		}
																		?>
																	</select>
															    </td>
															    <td style="padding: 0.2rem !important;">
															        <select name="Unit<?=$x;?>" id="Unit<?=$x;?>"  class="form-control">
																		<option value="">-Select-</option>
																		<option <?php if($Listvalue['SBUnit'] == "pcs") {echo "selected";}?> value="pcs">Pcs</option>
																		<option <?php if($Listvalue['SBUnit'] == "mts") {echo "selected";}?>  value="mts">MTS</option>

																		<option <?php if($Listvalue['SBUnit'] == "kg") {echo "selected";}?>  value="kg">KG</option>

																		<option <?php if($Listvalue['SBUnit'] =="suit") {echo "selected";}?>  value="suit">Suit</option>

																		<option <?php if($Listvalue['SBUnit'] == "other") {echo "selected";}?>  value="other">Other</option>
																	</select>
															    </td>
															    <td style="padding: 0.2rem !important;">
															        <input type="text" name="Pcs<?=$x;?>" id="EditPcs<?=$x;?>" onkeyup="forEditcalculation('<?=$x;?>');" value="<?=$Listvalue['SBPcs']?>" class="form-control EditPcs" placeholder="PCS"/>
															    </td>
															    <td style="padding: 0.2rem !important;">
															        <input type="text" name="Cut<?=$x;?>" id="Cut<?=$x;?>" onkeyup="forEditcalculation('<?=$x;?>');" value="<?=$Listvalue['SBCut']?>" class="form-control" placeholder="CUT" readonly="" />
															    </td>
															   <td style="padding: 0.2rem !important;">
															        <input type="text" name="MtsQty<?=$x;?>" id="EditMtsQty<?=$x;?>" class="form-control EditMts" value="<?=$Listvalue['SBMtsQty']?>" placeholder="MTS/QTY" readonly="" />
															    </td>
															    <td style="padding: 0.2rem !important;">
															        <input type="text" name="Rate<?=$x;?>" id="Rate<?=$x;?>" class="form-control" value="<?=$Listvalue['SBRate']?>" onkeyup="forEditcalculation('<?=$x;?>');" placeholder="RATE" readonly="" />
															    </td>

															    <td style="padding: 0.2rem !important;">
															        <input type="text" name="amount<?=$x;?>" id="Editamount<?=$x;?>" class="form-control Editamount" value="<?=$Listvalue['SBAmount']?>" onkeyup="forEditcalculation('<?=$x;?>');" placeholder="AMOUNT" readonly="" />
															    </td>
															    <td style="padding: 0.2rem !important;"><a class="deleteRow"></a>
															    </td>
															</tr>
														 <?php
													    		$x++;
													    	}
													    	
													    	?>
													    </tbody>
													    <tfoot>
													    	<input type="hidden" class="SaleBillListEditCount" id="" name="SaleBillListEditCount" value="<?=sizeof($sellOrderBillListData);?>">
													        
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
																		<input type="text"  name="SBHsnCode" id="SBHsnCode" value="<?=$editsaleOrderBilldata['SBHsnCode'];?>" class="form-control" placeholder="HSNCODE">
																	</div>
																</div>
															</div>
														</div>
													</div>
													<div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
														<div class="row">
															<div class="col-12 col-sm-4 col-md-2 col-lg-3 col-xl-2 d-flex ">
																<div class="form-group">
																	<label>GRAND TOTAL :</label>
																</div>
															</div>
															<div class="col-12 col-sm-8 col-md-10 col-lg-3 col-xl-10">
																<div class="form-group field">
																	<div class="">
																		<input type="text"  name="SBTotalPCS" id="EditSBTotalPCS" value="<?=$editsaleOrderBilldata['SBTotalPCS'];?>" placeholder="Total Pcs" class="form-control" style="padding: 0.2rem !important;" readonly>
																	</div>
																</div>
															</div>
															<div class="col-12 col-sm-8 col-md-10 col-lg-3 col-xl-10">
																<div class="form-group field">
																	<div class="">
																		<input type="text"  name="SBTotalMTSQTY" id="EditSBTotalMTSQTY" value="<?=$editsaleOrderBilldata['SBTotalMTSQTY'];?>" placeholder="Total Mts" class="form-control" style="padding: 0.2rem !important;" readonly>
																	</div>
																</div>
															</div>
															<div class="col-12 col-sm-8 col-md-10 col-lg-3 col-xl-10">
																<div class="form-group field">
																	<div class="">

																		<input type="text"  name="SBTotalAmount"  id="EditSBTotalAmount" value="<?=$editsaleOrderBilldata['SBTotalAmount'];?>" placeholder="Total Amount" class="form-control" style="padding: 0.2rem !important;" readonly>
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
																	<label>PACK BY :</label>
																</div>
															</div>
															<div class="col-12 col-sm-8 col-md-10 col-lg-9 col-xl-10">
																<div class="form-group field">
																	<div class="">
																		<select name="SBPackBy" id="SBPackBy"  class="form-control">
																			<option value=""> --Select -- </option>
																			<?php
																			foreach ($getUserdata as $qgetUserdata)
																			{
																				?>
																				<option <?php if($editsaleOrderBilldata['SBPackBy'] == $qgetUserdata->UserId){echo "selected";}?> value="<?=$qgetUserdata->UserId ?>"> <?=$qgetUserdata->UserName?> </option>
																				<?php
																			}
																			?>
																			
																		</select>
																	</div>
																</div>
															</div>

															<div class="col-12 col-sm-4 col-md-2 col-lg-3 col-xl-2 d-flex ">
																<div class="form-group">
																	<label>CHECKED BY :</label>
																</div>
															</div>
															<div class="col-12 col-sm-8 col-md-10 col-lg-9 col-xl-10">
																<div class="form-group field">
																	<div class="">
																		<select name="SBCheckedBy" id="SBCheckedBy"  class="form-control">
																			<option value=""> --Select -- </option>
																			<?php
																			foreach ($getUserdata as $qgetUserdata1)
																			{
																				?>
																				<option <?php if($editsaleOrderBilldata['SBCheckedBy'] == $qgetUserdata1->UserId){echo "selected";}?> value="<?=$qgetUserdata1->UserId ?>"> <?=$qgetUserdata1->UserName?> </option>
																				<?php
																			}
																			?>
																			
																		</select>
																	</div>
																</div>
															</div>

															<div class="col-12 col-sm-4 col-md-2 col-lg-3 col-xl-2 d-flex">
																<div class="form-group">
																	<label>CASE NO. :</label>
																</div>
															</div>
															<div class="col-12 col-sm-8 col-md-10 col-lg-4 col-xl-10">
																<div class="form-group field">
																	<div class="">
																		<input type="text"  name="SBCaseNo" id="SBCaseNo" value="<?=$editsaleOrderBilldata['SBCaseNo'];?>"  placeholder="0" class="form-control"> 
																	</div>
																</div>
															</div>
															<div class="col-12 col-sm-4 col-md-2 col-lg-1 col-xl-2 d-flex ">
																<div class="form-group">
																	<label> <i class="fa fa-close" style="font-size:24px"></i> </label>
																</div>
															</div>
															<div class="col-12 col-sm-8 col-md-10 col-lg-4 col-xl-10">
																<div class="form-group field">
																	<div class="">
																		<input type="text"  name="SBNo" id="SBNo" value="<?=$editsaleOrderBilldata['SBNo'];?>"  placeholder="0" class="form-control"> 
																	</div>
																</div>
															</div>
														</div>
													</div>
													<div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
														<div class="row">
															<div class="col-12 col-sm-4 col-md-2 col-lg-4 col-xl-2 d-flex ">
																<div class="form-group">
																	<label>E-WAY BILL NO :</label>
																</div>
															</div>
															<div class="col-12 col-sm-8 col-md-10 col-lg-3 col-xl-10">
																<div class="form-group field">
																	<div class="">
																		<input type="text"  name="SBEwayBillNo" id="EditSBEwayBillNo" onkeyup="forEditcalculation('0');" value="<?=$editsaleOrderBilldata['SBEwayBillNo'];?>" placeholder="EwayBillNo" class="form-control">
																	</div>
																</div>
															</div>
															<div class="col-12 col-sm-4 col-md-2 col-lg-2 col-xl-2 d-flex ">
																<div class="form-group">
																	<label>NET AMT :</label>
																</div>
															</div>
															<div class="col-12 col-sm-8 col-md-10 col-lg-3 col-xl-10">
																<div class="form-group field">
																	<div class="controls">
																		<input type="text"  name="SBNetAmt" id="EditSBNetAmt" value="<?=$editsaleOrderBilldata['SBNetAmt'];?>" class="form-control" readonly>
																	</div>
																</div>
															</div>

															<div class="col-12 col-sm-4 col-md-2 col-lg-3 col-xl-2 d-flex ">
																<div class="form-group">
																	<label>RMK :</label>
																</div>
															</div>
															<div class="col-12 col-sm-8 col-md-10 col-lg-8 col-xl-10">
																<div class="form-group field">
																	<div class="controls">
																		<select name="remark" id="remarkData"  class="form-control customvalidation">
																			<option value=""> --Select -- </option>
																			<?php
																			foreach ($getremarkData as $qgetremarkData)
																			{
																				?>
																				<option <?php if($editsaleOrderBilldata['remark'] == $qgetremarkData->RemarkID){echo "selected";}?> value="<?=$qgetremarkData->RemarkID ?>"> <?=$qgetremarkData->Remark?> </option>
																				<?php
																			}
																			?>
																			
																		</select>
																	</div>
																</div>
															</div>
															<div class="col-12 col-sm-2 col-md-2 col-lg-1 col-xl-2">
																<i data-toggle="modal" data-target="#AddNewRemark" class="fa fa-plus-circle"></i>
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
																		<input type="text"  name="SBLrNo" id="SBLrNo" value="<?=$editsaleOrderBilldata['SBLrNo'];?>" class="form-control" placeholder="LrNo">
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
																		<input type="text" id="EditSBLRDate"  name="SBLRDate" value="<?=$editsaleOrderBilldata['SBLRDate'];?>" placeholder="LrDate" class="form-control">
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
																		<input type="text" id="EditSBLRRecDate"  name="SBLRRecDate" value="<?=$editsaleOrderBilldata['SBLRRecDate'];?>" placeholder="2019-02-02" class="form-control">
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
																		<input type="text"  name="SBWeight" id="SBWeight" value="<?=$editsaleOrderBilldata['SBWeight'];?>" class="form-control" placeholder="Weight">
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
																		<input type="text"  name="SBFreight" id="SBFreight" value="<?=$editsaleOrderBilldata['SBFreight'];?>" class="form-control" placeholder="Freight">
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
																	<label>RMK :</label>
																</div>
															</div>
															<div class="col-12 col-sm-8 col-md-10 col-lg-9 col-xl-10">
																<div class="form-group field">
																	<div class="">
																		<select name="SBRemarkID1" id="SBRemarkID1"  class="form-control">
																			<option value=""> --Select -- </option>
																			<?php
																			foreach ($getremarkData as $qgetremarkData)
																			{
																				?>
																				<option <?php if($editsaleOrderBilldata['SBRemarkID1'] == $qgetremarkData->RemarkID){echo "selected";}?> value="<?=$qgetremarkData->RemarkID ?>"> <?=$qgetremarkData->Remark?> </option>
																				<?php
																			}
																			?>
																		</select>
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
																		<select name="SBRemarkID2" id="SBRemarkID2"  class="form-control">
																			<option value=""> --Select -- </option>
																			<?php
																			foreach ($getremarkData as $qgetremarkData)
																			{
																				?>
																				<option <?php if($editsaleOrderBilldata['SBRemarkID2'] == $qgetremarkData->RemarkID){echo "selected";}?> value="<?=$qgetremarkData->RemarkID ?>"> <?=$qgetremarkData->Remark?> </option>
																				<?php
																			}
																			?>
																		</select>
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
																		<select name="SBRemarkID3" id="SBRemarkID3"  class="form-control">
																			<option value=""> --Select -- </option>
																			<?php
																			foreach ($getremarkData as $qgetremarkData)
																			{
																				?>
																				<option <?php if($editsaleOrderBilldata['SBRemarkID3'] == $qgetremarkData->RemarkID){echo "selected";}?> value="<?=$qgetremarkData->RemarkID ?>"> <?=$qgetremarkData->Remark?> </option>
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
															<div class="col-12 col-sm-8 col-md-10 col-lg-3 col-xl-10">
																<div class="form-group field">
																	<div class="">
																		<input type="text"  name="SBValue1" id="EditSBValue1" value="<?=$editsaleOrderBilldata['SBValue1'];?>" readonly class="form-control" onkeyup="forEditcalculation('0');"> 
																	</div>
																</div>
															</div>
															<i class="fa fa-percent" aria-hidden="true"></i>
															<div class="col-12 col-sm-8 col-md-10 col-lg-3 col-xl-10">
																<div class="form-group field">
																	<div class="">
																		<input type="text"  name="SBValue11" id="EditSBValue11" value="<?=$editsaleOrderBilldata['SBValue11'];?>" placeholder="0.00" class="form-control" onkeyup="forEditcalculation('0');">
																	</div>
																</div> 
															</div>
															<div class="col-12 col-sm-8 col-md-10 col-lg-4 col-xl-10">
																<div class="form-group field">
																	<div class="">
																		<input type="text"  name="SBAmt1" id="EditSBAmt1" value="<?=$editsaleOrderBilldata['SBAmt1'];?>" placeholder="0.00" class="form-control">
																	</div>
																</div>
															</div>

															<div class="col-12 col-sm-8 col-md-10 col-lg-3 col-xl-10">
																<div class="form-group field">
																	<div class="">
																		<input type="text"  name="SBValue2" id="EditSBValue2" readonly class="form-control"  value="<?=$editsaleOrderBilldata['SBValue2'];?>" onkeyup="forEditcalculation('0');"> 
																	</div>
																</div>
															</div>
															<i class="fa fa-close" style="font-size:17px"></i>
															<div class="col-12 col-sm-8 col-md-10 col-lg-3 col-xl-10">
																<div class="form-group field">
																	<div class="">
																		<input type="text"  name="SBValue21" id="EditSBValue21" value="<?=$editsaleOrderBilldata['SBValue21'];?>" placeholder="0.00" class="form-control" onkeyup="forEditcalculation('0');">
																	</div>
																</div> 
															</div>
															<div class="col-12 col-sm-8 col-md-10 col-lg-4 col-xl-10">
																<div class="form-group field">
																	<div class="">
																		<input type="text"  name="SBAmt2" id="EditSBAmt2" value="<?=$editsaleOrderBilldata['SBAmt2'];?>" placeholder="0.00" class="form-control">
																	</div>
																</div>
															</div>

															<div class="col-12 col-sm-8 col-md-10 col-lg-3 col-xl-10">
																<div class="form-group field">
																	<div class="">
																		<input type="text"  name="SBValue3" id="EditSBValue3" value="<?=$editsaleOrderBilldata['SBValue3'];?>" readonly class="form-control" onkeyup="forEditcalculation('0');"> 
																	</div>
																</div>
															</div>
															<i class="fa fa-close" style="font-size:17px"></i>
															<div class="col-12 col-sm-8 col-md-10 col-lg-3 col-xl-10">
																<div class="form-group field">
																	<div class="">
																		<input type="text"  name="SBValue31" id="EditSBValue31" value="<?=$editsaleOrderBilldata['SBValue31'];?>" placeholder="0.00" class="form-control" onkeyup="forEditcalculation('0');">
																	</div>
																</div> 
															</div>
															<div class="col-12 col-sm-8 col-md-10 col-lg-4 col-xl-10">
																<div class="form-group field">
																	<div class="">
																		<input type="text"  name="SBAmt3" id="EditSBAmt3" value="<?=$editsaleOrderBilldata['SBAmt3'];?>" placeholder="0.00" class="form-control">
																	</div>
																</div>
															</div>

															<div class="col-12 col-sm-4 col-md-2 col-lg-3 col-xl-2 d-flex">
																<div class="form-group">
																	<label>NET AMT :</label>
																</div>
															</div>
															<div class="col-12 col-sm-8 col-md-10 col-lg-6 col-xl-10">
																<div class="form-group field">
																	<div class="">
																		<input type="text"  name="SBNetAmt1" id="EditSBNetAmt1" value="<?=$editsaleOrderBilldata['SBNetAmt1'];?>" readonly class="form-control">
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
																	<label> CGST % :</label>
																</div>
															</div>
															<div class="col-12 col-sm-8 col-md-10 col-lg-3 col-xl-10">
																<div class="form-group field">
																	<div class="">
																		<input type="text"  name="SBCgst" id="EditSBCgst" value="<?=$editsaleOrderBilldata['SBCgst'];?>" readonly class="form-control">
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
																		<input type="text"  name="SBCgstAmt" id="EditSBCgstAmt" value="<?=$editsaleOrderBilldata['SBCgstAmt'];?>" readonly onkeyup="forSBillcalculation(0);" class="form-control"> 
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
																		<input type="text"  name="SBSgst" id="EditSBSgst" value="<?=$editsaleOrderBilldata['SBSgst'];?>" readonly class="form-control"> 
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
																		<input type="text"  name="SBSgstAmt" id="EditSBSgstAmt" value="<?=$editsaleOrderBilldata['SBSgstAmt'];?>" readonly onkeyup="forSBillcalculation(0);" class="form-control"> 
																	</div>
																</div>
															</div>
														</div>
													</div>
													<div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
														<div class="row">
															<div class="col-12 col-sm-4 col-md-2 col-lg-4 col-xl-2 d-flex">
																<div class="form-group">
																	<label>TAXABLE VALUE :</label>
																</div>
															</div>
															<div class="col-12 col-sm-8 col-md-10 col-lg-8 col-xl-10">
																<div class="form-group field">
																	<div class="">
																		<input type="text"  name="SBTaxableValue" value="<?=$editsaleOrderBilldata['SBTaxableValue'];?>" id="EditSBTaxableValue" readonly class="form-control">
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
																		<input type="text"  name="SBBillAmt" id="EditSBBillAmt" value="<?=$editsaleOrderBilldata['SBBillAmt'];?>" readonly class="form-control">
																	</div>
																</div>
															</div>

															<div class="col-12 col-sm-4 col-md-2 col-lg-4 col-xl-2 d-flex ">
																<div class="form-group">
																	<label>NET AFTER TDS :</label>
																</div>
															</div>
															<div class="col-12 col-sm-8 col-md-10 col-lg-8 col-xl-10">
																<div class="form-group field">
																	<div class="">
																		<input type="text"  name="SBNetAfterTds" id="EditSBNetAfterTds"value="<?=$editsaleOrderBilldata['SBNetAfterTds'];?>" readonly class="form-control">
																	</div>
																</div>
															</div>

															<div class="col-12 col-sm-4 col-md-2 col-lg-7 col-xl-2 d-flex ">
																<div class="form-group">
																	<label>E-WAY BILL NO (READ ONLY) :</label>
																</div>
															</div>
															<div class="col-12 col-sm-8 col-md-10 col-lg-5 col-xl-10">
																<div class="form-group field">
																	<div class="">
																		<input type="text"  name="SBEwayBillNo1" id="EditSBEwayBillNo1" value="<?=$editsaleOrderBilldata['SBEwayBillNo1'];?>"  class="form-control" readonly="">
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>	
											</div>
											
											<div class="formtitle">
												<h4 class="backcolor">PAYMENT DETAIL</h4>
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
																		<input type="text" id="EditSBPAidDate"  name="SBPAidDate" value="<?=$editsaleOrderBilldata['SBPAidDate'];?>" placeholder="2019-02-02" class="form-control">
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
																		<input type="text"  name="SBDisc" id="SBDisc" value="<?=$editsaleOrderBilldata['SBDisc'];?>" placeholder="0.00" class="form-control"> 
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
																		<input type="text"  name="SBPackFollo" id="SBPackFollo" value="<?=$editsaleOrderBilldata['SBPackFollo'];?>" placeholder="0.00" class="form-control"> 
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
																		<input type="text"  name="SBRd" id="SBRd" value="<?=$editsaleOrderBilldata['SBRd'];?>" placeholder="0.00" class="form-control">
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
																		<input type="text"  name="SBSweets" id="SBSweets" value="<?=$editsaleOrderBilldata['SBSweets'];?>" placeholder="0.00" class="form-control">
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
																		<input type="text"  name="SBOthBc" id="SBOthBc" value="<?=$editsaleOrderBilldata['SBOthBc'];?>" placeholder="0.00" class="form-control"> 
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
																		<input type="text"  name="SBAddAmt" id="SBAddAmt" value="<?=$editsaleOrderBilldata['SBAddAmt'];?>" placeholder="0.00" class="form-control">
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
																		<input type="text"  name="SBTdsAmt" id="SBTdsAmt" value="<?=$editsaleOrderBilldata['SBTdsAmt'];?>" placeholder="0.00" class="form-control">
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
																		<input type="text"  name="SBGr" id="SBGr" value="<?=$editsaleOrderBilldata['SBGr'];?>" placeholder="0.00"class="form-control">
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
																		<input type="text"  name="SBSalePaidAmt" id="SBSalePaidAmt" value="<?=$editsaleOrderBilldata['SBSalePaidAmt'];?>" placeholder="0.00" class="form-control">
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
														<a  href="<?php echo base_url()?>SalesOrderBill" class="btn btn-info">
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
	var inside = $("#SaleOrderBillID").val();
	//alert(inside);
	if(inside != "")
	{
		$("#home7").removeClass('active');
		$(".nav-link").removeClass('active');
		$(".foractive").addClass('active');
		$("#editform").addClass('active');
	}

	$('.PartyDetails').change(function () {
	    var myValue = $(this).val();
	    $.ajax({
          type: "POST",
           url: base_url+'Transaction_controller/fetchPartyDetail',
          data: {data:myValue},
          success: function(data)
          {      
          	//alert(data);
		  	var obj = jQuery.parseJSON(data);
			$("#SBPArtyGstin").val(obj.Gstin);
			$("#SBDhara").val(obj.Dhara);
		  }
		});
	});
	$('#HasteID').change(function () {
	    var myValue = $(this).val();
	    $.ajax({
          type: "POST",
           url: base_url+'Transaction_controller/fetchHasteDetail',
          data: {data:myValue},
          success: function(data)
          {      
          	//alert(data);
		  	var obj = jQuery.parseJSON(data);
			$("#SBHasteGstin").val(obj.GstIn);
		  }
		});
	});
	$('#GsttypeID').change(function () {
		var gstyValue = $(this).val();
	    if (gstyValue != '' && gstyValue == "3") 
	    {
   		 	$("#SBCgst").val(5.00);
		    $("#SBSgst").val('0');
	    }
	    else
	    {
		    $("#SBCgst").val(2.5);
		    $("#SBSgst").val(2.5);
	    }

	});
	$("#SellOrderBill").on("focusout", ".Pcs", function () {
	var sum = 0;
    $(".Pcs").each(function () {

        if (!isNaN(this.value) && this.value.length != 0) {
            sum += parseFloat(this.value);
            
        }

    });
    $("#SBTotalPCS").val(sum);


    var sum1 = 0;
    $(".Mts").each(function () {

        if (!isNaN(this.value) && this.value.length != 0) {
            sum1 += parseFloat(this.value);
            
        }

    });
    $("#SBTotalMTSQTY").val(sum1);

    var sum2 = 0;
    $(".amount").each(function () {

        if (!isNaN(this.value) && this.value.length != 0) {
            sum2 += parseFloat(this.value);
            
        }

    });
    $("#SBTotalAmount").val(sum2);
});

/* For Update Start */
$('.EditPartyDetails').change(function () {
	    var myValue = $(this).val();
	    $.ajax({
          type: "POST",
           url: base_url+'Transaction_controller/fetchPartyDetail',
          data: {data:myValue},
          success: function(data)
          {      
          	//alert(data);
		  	var obj = jQuery.parseJSON(data);
			$("#EditSBPArtyGstin").val(obj.Gstin);
			$("#SBDhara").val(obj.Dhara);
		  }
		});
	});
$('#EditGsttypeID').change(function () {
		var gstyValue = $(this).val();
	    if (gstyValue != '' && gstyValue == "3") 
	    {
   		 	$("#EditSBCgst").val(5.00);
		    $("#EditSBSgst").val('0');
	    }
	    else
	    {
		    $("#EditSBCgst").val(2.5);
		    $("#EditSBSgst").val(2.5);
	    }

	});
$('#EditHasteID').change(function () {
	    var myValue = $(this).val();
	    $.ajax({
          type: "POST",
           url: base_url+'Transaction_controller/fetchHasteDetail',
          data: {data:myValue},
          success: function(data)
          {      
          	//alert(data);
		  	var obj = jQuery.parseJSON(data);
			$("#EditSBHasteGstin").val(obj.GstIn);
		  }
		});
	});
	function getEditItemCutData(packingcount)
	{
	    //var myValue = $(this).val();
	   	var singleValues = $( "#ItemName"+packingcount ).val();
	    $.ajax({
	    url: base_url+'Transaction_controller/GetCutData',
	    data: {singleValues:singleValues},
	    type: 'POST',
	      success: function(data){
	            var obj = jQuery.parseJSON(data);
	            $("#Cut"+packingcount).val(obj.Cut);
	            $("#Rate"+packingcount).val(obj.Rate2);
	          
	          }
	    });
	}
	function forEditcalculation(counter)
	{
	    $("#EditMtsQty"+counter).val(($("#EditPcs"+counter).val())*($("#Cut"+counter).val()));
	    $("#Editamount"+counter).val(($("#EditPcs"+counter).val())*($("#Rate"+counter).val()));
	    $("#EditSBEwayBillNo1").val($("#EditSBEwayBillNo").val());

	    $("#EditSBCgstAmt").val((($("#EditSBTotalAmount").val())*($("#EditSBCgst").val()))/100);
	    $("#EditSBSgstAmt").val((($("#EditSBTotalAmount").val())*($("#EditSBSgst").val()))/100);
	    $("#EditSBTaxableValue").val($("#EditSBTotalAmount").val());


	    $("#EditSBValue1").val($("#EditSBTotalAmount").val());
	    $("#EditSBValue2").val($("#EditSBTotalAmount").val());
	    $("#EditSBValue3").val($("#EditSBTotalAmount").val());


	    $("#EditSBAmt1").val((($("#EditSBValue1").val())*($("#EditSBValue11").val()))/100);
	    $("#EditSBAmt2").val((($("#EditSBValue2").val())*($("#EditSBValue21").val())));
	    $("#EditSBAmt3").val((($("#EditSBValue3").val())*($("#EditSBValue31").val())));

	    a=Number(document.getElementById("EditSBCgstAmt").value);
	    b=Number(document.getElementById("EditSBSgstAmt").value);
	    c=Number(document.getElementById("EditSBTotalAmount").value);
	    d= a + b + c;

	    document.getElementById("EditSBBillAmt").value= d;
	    $("#EditSBNetAfterTds").val($("#EditSBBillAmt").val());
	    $("#EditSBNetAmt").val($("#EditSBBillAmt").val());


	    a1=Number(document.getElementById("EditSBAmt1").value);
	    b1=Number(document.getElementById("EditSBAmt2").value);
	    c1=Number(document.getElementById("EditSBAmt3").value);
	    d1=Number(document.getElementById("EditSBTotalAmount").value);
	    e= a1 + b1 + c1 + d1;
	    document.getElementById("EditSBNetAmt1").value= e;
	}

	$("#EditSellOrderBill").on("focusout", ".EditPcs", function () {
	var sum = 0;
    $(".EditPcs").each(function () {

        if (!isNaN(this.value) && this.value.length != 0) {
            sum += parseFloat(this.value);
            
        }

    });
    $("#EditSBTotalPCS").val(sum);


    var sum1 = 0;
    $(".EditMts").each(function () {

        if (!isNaN(this.value) && this.value.length != 0) {
            sum1 += parseFloat(this.value);
            
        }

    });
    $("#EditSBTotalMTSQTY").val(sum1);

    var sum2 = 0;
    $(".Editamount").each(function () {

        if (!isNaN(this.value) && this.value.length != 0) {
            sum2 += parseFloat(this.value);
            
        }

    });
    $("#EditSBTotalAmount").val(sum2);
});
/* For Update End */



	jQuery('#SBDate').datepicker({
	        autoclose: true,
	        todayHighlight: true
	    });
	jQuery('#SBLRDate').datepicker({
	        autoclose: true,
	        todayHighlight: true
	    });
	jQuery('#SBLRRecDate').datepicker({
	        autoclose: true,
	        todayHighlight: true
	    });
	jQuery('#SBPAidDate').datepicker({
	        autoclose: true,
	        todayHighlight: true
	    });

	/* For Update Date Start */
	jQuery('#EditSBDate').datepicker({
	        autoclose: true,
	        todayHighlight: true
	    });
	jQuery('#EditSBLRDate').datepicker({
	        autoclose: true,
	        todayHighlight: true
	    });
	jQuery('#EditSBLRRecDate').datepicker({
	        autoclose: true,
	        todayHighlight: true
	    });
	jQuery('#EditSBPAidDate').datepicker({
	        autoclose: true,
	        todayHighlight: true
	    });
	/* For Update Date End */
</script>


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
</style>

<div class="page-wrapper">
<div class="container-fluid">
	
	
	<div class="row page-titles">
		<div class="col-md-5 align-self-center">
			<h4 class="text-themecolor">Company Manager</h4>
			
		</div>
		<div class="col-md-7 align-self-center text-right">
			<div class="d-flex justify-content-end align-items-center">
				<ol class="breadcrumb">
					<li class="breadcrumb-item"><a href="<?=base_url();?>">Home</a></li>
					<li class="breadcrumb-item active">Company Manager</li>
				</ol>
			</div>
		</div>
	</div>


<div class="row">
	<div class="card" style="width: 100%;">
		<div class="card-body p-b-0">
			
			<!-- Nav tabs -->
			<ul class="nav nav-tabs customtab2" role="tablist">
				<li class="nav-item"> <a class="nav-link active" data-toggle="tab" href="#home7" role="tab"><span class="hidden-sm-up"><i class="ti-home"></i></span> <span class="hidden-xs-down">Company Manager List</span></a> </li>

				<li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#profile7" role="tab"><span class="hidden-sm-up"><i class="ti-user"></i></span> <span class="hidden-xs-down">Add Form</span></a> </li>

				<?php
				if(!empty($editcompanydata))
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
							<input type="hidden" value="" name="brokerID" />
							<input type="hidden" name="method" value="" /> 
							<div class="table-responsive">
								<table id="example23" class="display nowrap table table-hover table-striped table-bordered" cellspacing="0" width="100%">
									<thead>
										<tr>
											
											<th>Action</th>
											<th>Sr. No.</th>
											<th>Short Name</th>
											<th>Name</th>
											<th>CreateDate</th>
										</tr>
									</thead>
									<tbody>
										<?php
										$i=1;
										foreach ($GetCompanyDetail as $qGetCompanyDetail)
										{
											?>
											<tr>
												<td class="editdelaction">
													<a  href="<?=base_url()?>Company_controller/index?compid=<?=$qGetCompanyDetail->CompanyID;?>" ><i class="fa fa-edit"></i></a>&nbsp;&nbsp;
													<a href="javascript:deletedata('<?=$qGetCompanyDetail->CompanyID?>','companydelete');"><i class="fa fa-trash-o"></i></a>
												</td>
												<td><?php echo $i++; ?></td>
												<td><?=$qGetCompanyDetail->CompanyShortName;?></td>
												<td><?=$qGetCompanyDetail->CompanyName;?></td>
												<td><?=$qGetCompanyDetail->CreateDate;?></td>
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
					<form  class="" id="addcompanyform" method="POST" name="" novalidate>

						<?php
						if(empty($editcompanydata))
						{
							?>
								<input type="hidden" value="" id="CompanyID" name="CompanyID">
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
												<div class="col-12 col-sm-8 col-md-10 col-lg-3 col-xl-10">
													<div class="form-group ">
														<div class="">
															<input type="text" name="CompanyCode" id="CompanyCode" class="form-control" placeholder="ENTER CODE"> 
														</div>
													</div>
												</div>
												
												
												<div class="col-12 col-sm-4 col-md-2 col-lg-3 col-xl-2 d-flex ">
													<div class="form-group">
														<label>SHORT NAME :</label>
													</div>
												</div>
												<div class="col-12 col-sm-8 col-md-3 col-lg-4 col-xl-3">
													<div class="form-group field">
														<div class="">
															<input type="text" name="CompanyShortName" id="CompanyShortName" class="form-control" placeholder="SHORT NAME"> 
														</div>
													</div>
												</div>
												
												<div class="col-12 col-sm-4 col-md-1 col-lg-2 col-xl-1 d-flex ">
													<div class="form-group">
														<label> NAME <span class="fored"><b>*</b></span> :</label>
													</div>
												</div>
												<div class="col-12 col-sm-8 col-md-6 col-lg-10 col-xl-6">
													<div class="form-group field">
														<div class="controls">
															<input type="text" name="CompanyName" id="CompanyName" class="form-control customvalidation"placeholder="ENTER NAME" required> 
														</div>
													</div>
												</div>
												<div class="col-12 col-sm-4 col-md-3 col-lg-4 col-xl-3 d-flex ">
													<div class="form-group">
														<label>COMPANY TYPE :</label>
													</div>
												</div>
												<div class="col-12 col-sm-8 col-md-9 col-lg-8 col-xl-9">
													<div class="form-group field">
														<div class="">
															<select name="CompanyType" id="CompanyType" class="form-control">
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
												
												<div class="col-12 col-sm-4 col-md-3 col-lg-4 col-xl-9 d-flex ">
													<div class="form-group">
														<label>COMPANY GROUP :</label>
													</div>
												</div>
												<div class="col-12 col-sm-8 col-md-9 col-lg-8 col-xl-9">
													<div class="form-group">
														<div class="">
															<select id="CompanyGoup" name="CompanyGoup[]" class="selectpicker" multiple data-style="form-control btn-secondary">
																<?php							
																foreach ($companyname as $qcompanyname)
																{
																	?>
																	<option value="<?=$qcompanyname->CompanyName?>"><?=$qcompanyname->CompanyName?></option>
																	<?php
																}
																?>
					                                        </select>
					                                    </div>
														
													</div>
												</div>

												<div class="col-12 col-sm-4 col-md-2 col-lg-3 col-xl-2 d-flex ">
													<div class="form-group">
														<label>ADDRESS :</label>
													</div>
												</div>
												<div class="col-12 col-sm-8 col-md-10 col-lg-9 col-xl-10">
													<div class="form-group field">
														<div class="">
															<input type="text" name="AddressCompany" id="AddressCompany" class="form-control" placeholder="ENTER ADDRESS"> 
														</div>
													</div>
												</div>
												<div class="col-12 col-sm-4 col-md-2 col-lg-3 col-xl-2 d-flex ">
													<div class="form-group">
														<label>ADD.(CONT.) :</label>
													</div>
												</div>
												<div class="col-12 col-sm-8 col-md-10 col-lg-9 col-xl-10">
													<div class="form-group field">
														<div class="">
															<input type="text" name="CompanyAddressCont" id="CompanyAddressCont" class="form-control" placeholder="ENTER ADD.(CONT.)"> 
														</div>
													</div>
												</div>

											</div>
										</div>
										<div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
											<div class="row">
												
												
												<div class="col-12 col-sm-4 col-md-2 col-lg-2 col-xl-2 d-flex align-items-center">
													<div class="form-group">
														<label>CITY :</label>
													</div>
												</div>
												<div class="col-12 col-sm-8 col-md-4 col-lg-4 col-xl-4">
													<div class="form-group field">
														<div class="">
															<select name="CompanyCityID" id="CompanyCityID"  class="form-control">
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
															<input type="text" name="CompanyPin" id="CompanyPin" class="form-control" placeholder="PIN"> 
														</div>
													</div>
												</div>
												
												<div class="col-12 col-sm-4 col-md-2 col-lg-3 col-xl-2 d-flex align-items-center">
													<div class="form-group">
														<label> EMAIL :</label>
													</div>
												</div>
												<div class="col-12 col-sm-8 col-md-4 col-lg-9 col-xl-4">
													<div class="form-group field">
														<div class="">
															<input type="email" name="CompanyEmail" id="CompanyEmail" class="form-control" placeholder="EMAIL"> 
														</div>
													</div>
												</div>
												<div class="col-12 col-sm-4 col-md-2 col-lg-3 col-xl-2 d-flex align-items-center">
													<div class="form-group">
														<label> MOBILE NO. :</label>
													</div>
												</div>
												<div class="col-12 col-sm-8 col-md-4 col-lg-9 col-xl-4">
													<div class="form-group field">
														<div class="">
															<input type="text" name="CompanyMobileNo" id="CompanyMobileNo" class="form-control" placeholder="MOBILE NO."> 
														</div>
													</div>
												</div>
												<div class="col-12 col-sm-4 col-md-2 col-lg-3 col-xl-2 d-flex align-items-center">
													<div class="form-group">
														<label> FAX :</label>
													</div>
												</div>
												<div class="col-12 col-sm-8 col-md-4 col-lg-9 col-xl-4">
													<div class="form-group field">
														<div class="">
															<input type="text" name="CompanyFax" id="CompanyFax" class="form-control" placeholder="FAX"> 
														</div>
													</div>
												</div>
												<div class="col-12 col-sm-4 col-md-2 col-lg-3 col-xl-2 d-flex align-items-center">
													<div class="form-group">
														<label> PHONE NO. :</label>
													</div>
												</div>
												<div class="col-12 col-sm-8 col-md-4 col-lg-9 col-xl-4">
													<div class="form-group field">
														<div class="">
															<input type="text" name="CompanyPhoneNo" id="CompanyPhoneNo" class="form-control" placeholder="PHONE NO."> 
														</div>
													</div>
												</div>
												<div class="col-12 col-sm-4 col-md-2 col-lg-6 col-xl-2 d-flex align-items-center">
													<div class="form-group">
														<input type="text" name="CompanyPhoneNo2" id="CompanyPhoneNo2" class="form-control" placeholder="PHONE NO."> 
													</div>
												</div>
												<div class="col-12 col-sm-8 col-md-4 col-lg-6 col-xl-4">
													<div class="form-group field" id="staticParent1">
														<div class="">
															<input type="text" name="CompanyPhoneNo3" id="CompanyPhoneNo3" class="form-control" placeholder="PHONE NO."> 
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
												<div class="col-12 col-sm-4 col-md-3 col-lg-4 col-xl-3 d-flex ">
													<div class="form-group">
														<label>OTHER ADDRESS :</label>
													</div>
												</div>
												<div class="col-12 col-sm-8 col-md-9 col-lg-8 col-xl-9">
													<div class="form-group field">
														<div class="">
															<input type="text" name="CompanyAddress1" id="CompanyAddress1" class="form-control" placeholder="ENTER ADDRESS"> 
														</div>
													</div>
												</div>
												<div class="col-12 col-sm-4 col-md-3 col-lg-4 col-xl-3 d-flex ">
													<div class="form-group">
														<label>ADDRESS.(CONT.) :</label>
													</div>
												</div>
												<div class="col-12 col-sm-8 col-md-9 col-lg-8 col-xl-9">
													<div class="form-group field">
														<div class="">
															<input type="text" name="CompanyAddressCont1" name="CompanyAddressCont1" class="form-control" placeholder="ENTER ADD.(CONT.)"> 
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
											<div class="row">
												<div class="col-12 col-sm-4 col-md-3 col-lg-4 col-xl-3 d-flex ">
													<div class="form-group">
														<label>BUSINESS DESC. :</label>
													</div>
												</div>
												<div class="col-12 col-sm-8 col-md-9 col-lg-8 col-xl-9">
													<div class="form-group field">
														<div class="">
															<input type="text" name="CompanyBusinessDesc" id="CompanyBusinessDesc" class="form-control" placeholder="ENTER BUSINESS DESCRIPTION"> 
														</div>
													</div>
												</div>
												<div class="col-12 col-sm-4 col-md-3 col-lg-3 col-xl-3 d-flex ">
													<div class="form-group">
														<label>PROPRIETOR :</label>
													</div>
												</div>
												<div class="col-12 col-sm-8 col-md-9 col-lg-9 col-xl-9">
													<div class="form-group field">
														<div class="">
															<input type="text" name="CompanyProprietor" id="CompanyProprietor" class="form-control" placeholder="ENTER PROPRIETOR"> 
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
												<div class="col-12 col-sm-4 col-md-2 col-lg-3 col-xl-2 d-flex align-items-center">
													<div class="form-group">
														<label>MULTI CHAL :</label>
													</div>
												</div>
												<div class="col-12 col-sm-8 col-md-10 col-lg-9 col-xl-10">
													<div class="form-group field">
														<div class="">
															<select name="CompanyMultiChal" id="CompanyMultiChal" class="form-control">
																<option value=""> --Select -- </option>
																<option value="NO"> NO </option>
																<option value="YES"> YES </option>
															</select>
														</div>
													</div>
												</div>
												
												<div class="col-12 col-sm-4 col-md-2 col-lg-10 col-xl-2 d-flex ">
													<div class="form-group">
														<label>J.V. OF OLD YEAR BILLS DISCOUNT IN NEW YEAR ? </label>
													</div>
												</div>
												<div class="col-12 col-sm-8 col-md-10 col-lg-2 col-xl-10">
													<div class="form-group field">
														<div class="">
															<input type="checkbox" value="1"  name="CompanySelected" id="CompanySelected"> 
														</div>
													</div>
												</div>
												<div class="col-12 col-sm-4 col-md-2 col-lg-4 col-xl-2 d-flex ">
													<div class="form-group">
														<label>J.V. FROM DATE :</label>
													</div>
												</div>
												<div class="col-12 col-sm-8 col-md-4 col-lg-8 col-xl-4">
													<div class="form-group field">
														<div class="">
															<input type="text" name="CompanyJvFormDate" id="CompanyJvFormDate" class="form-control">
														</div>
													</div>
												</div>
												<div class="col-12 col-sm-4 col-md-2 col-lg-3 col-xl-2 d-flex align-items-center">
													<div class="form-group">
														<label>PAN NO. :</label>
													</div>
												</div>
												<div class="col-12 col-sm-8 col-md-4 col-lg-9 col-xl-4">
													<div class="form-group">
														<div class="controls">
															<input type="text" name="CompanyPanNo" id="CompanyPanNo" pattern="^([a-zA-Z]){5}([0-9]){4}([a-zA-Z]){1}?$" data-validation-pattern-message="Please enter valid PAN number. E.g. AAAAA9999A" class="form-control" placeholder="ENTER PAN NO."> 
														</div>
													</div>
												</div>
												
												<div class="col-12 col-sm-4 col-md-2 col-lg-3 col-xl-2 d-flex align-items-center">
													<div class="form-group">
														<label>TDS A/C No. :</label>
													</div>
												</div>
												<div class="col-12 col-sm-8 col-md-4 col-lg-9 col-xl-4">
													<div class="form-group field">
														<div class="">
															<input type="text" name="CompanyTdsacNo" id="CompanyTdsacNo" class="form-control" placeholder="ENTER TDS A/C No."> 
														</div>
													</div>
												</div>
												
												<div class="col-12 col-sm-4 col-md-2 col-lg-3 col-xl-2 d-flex align-items-center">
													<div class="form-group">
														<label>WARD :</label>
													</div>
												</div>
												<div class="col-12 col-sm-8 col-md-4 col-lg-9 col-xl-4">
													<div class="form-group field">
														<div class="">
															<input type="text" name="CompanyWard" id="CompanyWard" class="form-control" placeholder="ENTER WARD"> 
														</div>
													</div>
												</div>
												
												<div class="col-12 col-sm-4 col-md-2 col-lg-3 col-xl-2 d-flex align-items-center">
													<div class="form-group">
														<label>ECC NO. :</label>
													</div>
												</div>
												<div class="col-12 col-sm-8 col-md-4 col-lg-9 col-xl-4">
													<div class="form-group field">
														<div class="">
															<input type="text" name="CompanyEccNo" id="CompanyEccNo" class="form-control" placeholder="ENTER ECC NO."> 
														</div>
													</div>
												</div>
												
												<div class="col-12 col-sm-4 col-md-2 col-lg-2 col-xl-2 d-flex align-items-center">
													<div class="form-group">
														<label>RANGE :</label>
													</div>
												</div>
												<div class="col-12 col-sm-8 col-md-4 col-lg-4 col-xl-4">
													<div class="form-group field">
														<div class="">
															<input type="text" name="CompanyRange" id="CompanyRange" class="form-control" placeholder="ENTER RANGE"> 
														</div>
													</div>
												</div>
												<div class="col-12 col-sm-4 col-md-2 col-lg-2 col-xl-2 d-flex align-items-center">
													<div class="form-group">
														<label>DIVISION :</label>
													</div>
												</div>
												<div class="col-12 col-sm-8 col-md-4 col-lg-4 col-xl-4">
													<div class="form-group field">
														<div class="">
															<input type="text" name="CompanyDivision" id="CompanyDivision" class="form-control" placeholder="ENTER DIVISION"> 
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
											<div class="row">
												
												
												<div class="col-12 col-sm-4 col-md-2 col-lg-4 col-xl-2 d-flex align-items-center">
													<div class="form-group">
														<label>COLLECTRATE :</label>
													</div>
												</div>
												<div class="col-12 col-sm-8 col-md-4 col-lg-8 col-xl-4">
													<div class="form-group field">
														<div class="">
															<input type="text" name="CompanyCollectrate" id="CompanyCollectrate"  class="form-control" placeholder="ENTER COLLECTRATE"> 
														</div>
													</div>
												</div>
												<div class="col-12 col-sm-4 col-md-2 col-lg-4 col-xl-2 d-flex align-items-center">
													<div class="form-group">
														<label>POLICY NO. :</label>
													</div>
												</div>
												<div class="col-12 col-sm-8 col-md-4 col-lg-8 col-xl-4">
													<div class="form-group field">
														<div class="">
															<input type="text" name="CompanyPolicyNo" id="CompanyPolicyNo" maxlength="10" class="form-control" placeholder="ENTER POLICY NO."> 
														</div>
													</div>
												</div>
												<div class="col-12 col-sm-4 col-md-2 col-lg-4 col-xl-2 d-flex ">
													<div class="form-group">
														<label>DATE :</label>
													</div>
												</div>
												<div class="col-12 col-sm-8 col-md-4 col-lg-8 col-xl-4">
													<div class="form-group field">
														<div class="">
															<input type="text" name="CompanyDate" id="CompanyDate" class="form-control"> 
														</div>
													</div>
												</div>
												<div class="col-12 col-sm-4 col-md-2 col-lg-4 col-xl-2 d-flex ">
													<div class="form-group">
														<label>GST NO.(VAT) :</label>
													</div>
												</div>
												<div class="col-12 col-sm-8 col-md-4 col-lg-8 col-xl-4">
													<div class="form-group">
														<div class="controls">
															<input type="text" id="CompanyGstNoVat" name="CompanyGstNoVat" pattern="/^[0-9]{2}[A-Z]{5}[0-9]{4}[A-Z]{1}[1-9A-Z]{1}Z[0-9A-Z]{1}$/" data-validation-pattern-message="Please Enter Valid GST Number" placeholder="ENTER GST NO.(VAT)" class="form-control"> 
														</div>
													</div>
												</div>
												<div class="col-12 col-sm-4 col-md-2 col-lg-4 col-xl-2 d-flex ">
													<div class="form-group">
														<label>DT. :</label>
													</div>
												</div>
												<div class="col-12 col-sm-8 col-md-4 col-lg-8 col-xl-4">
													<div class="form-group field">
														<div class="">
															<input type="text" placeholder="ENTER DT." name="CompanyDt" id="CompanyDt" class="form-control"> 
														</div>
													</div>
												</div>
												
												
												<div class="col-12 col-sm-4 col-md-2 col-lg-4 col-xl-2 d-flex ">
													<div class="form-group">
														<label>CIN NO. :</label>
													</div>
												</div>
												<div class="col-12 col-sm-8 col-md-4 col-lg-8 col-xl-4">
													<div class="form-group field">
														<div class="">
															<input type="text" placeholder="ENTER CIN NO." name="CompanyCinNo" id="CompanyCinNo" class="form-control"> 
														</div>
													</div>
												</div>
												<div class="col-12 col-sm-4 col-md-2 col-lg-4 col-xl-2 d-flex ">
													<div class="form-group">
														<label>GST IN/UIN :</label>
													</div>
												</div>
												<div class="col-12 col-sm-8 col-md-4 col-lg-8 col-xl-4">
													<div class="form-group">
														<div class="controls">
															<input type="text" placeholder="ENTER GST IN/UIN" name="CompanyGstInUin"  pattern="/^[0-9]{2}[A-Z]{5}[0-9]{4}[A-Z]{1}[1-9A-Z]{1}Z[0-9A-Z]{1}$/" data-validation-pattern-message="Please Enter Valid GST Number" id="CompanyGstInUin"
															 class="form-control"> 
														</div>
													</div>
												</div>
												<div class="col-12 col-sm-4 col-md-3 col-lg-5 col-xl-3 d-flex ">
													<div class="form-group">
														<label>CEN. EXCISE REG. NO. :</label>
													</div>
												</div>
												<div class="col-12 col-sm-8 col-md-9 col-lg-7 col-xl-9">
													<div class="form-group field">
														<div class="">
															<input type="text" placeholder="ENTER CEN. EXCISE REG. NO." name="CompanyCenregNo" id="CompanyCenregNo" class="form-control"> 
														</div>
													</div>
												</div>
												
											</div>
										</div>
										<div class="col-12 col-sm-4 col-md-2 col-lg-3 col-xl-2 d-flex ">
											<div class="form-group">
												<label>INSURANCE POLICY DETAILS :</label>
											</div>
										</div>
										<div class="col-12 col-sm-8 col-md-10 col-lg-5 col-xl-10">
											<div class="form-group field">
												<div class="">
													<input type="text" placeholder="INSURANCE POLICY DETAILS" name="CompanyInsurancePolicy" id="CompanyInsurancePolicy" class="form-control"> 
												</div>
											</div>
										</div>
										
									</div>
								</div>
								
								<div class="row">
									<div class="form-group">
										<div class="text-xs-right" style="margin-left: 8px;">
											<button type="submit" class="btn btn-success">Save</button>
                                            <a  href="<?php echo base_url()?>Company_controller" class="btn btn-info">Cancel</a>
										</div>
									</div>
								</div>
							</div>	
						</div>
					</form>
				</div>

				<?php
				if(!empty($editcompanydata))
				{
					?>
					<div class="tab-pane  p-20" id="editform" role="tabpanel">
						<form  class="" id="editcompanyform" method="POST" name="" novalidate>
							<input type="hidden" value="<?=$editcompanydata['CompanyID']?>" id="CompanyID" name="CompanyID">
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
												<div class="col-12 col-sm-8 col-md-10 col-lg-3 col-xl-10">
													<div class="form-group ">
														<div class="">
															<input type="text" name="CompanyCode" id="CompanyCode" class="form-control" value="<?=$editcompanydata['CompanyCode']?>" placeholder="ENTER CODE"> 
														</div>
													</div>
												</div>
												
												
												<div class="col-12 col-sm-4 col-md-2 col-lg-3 col-xl-2 d-flex ">
													<div class="form-group">
														<label>SHORT NAME :</label>
													</div>
												</div>
												<div class="col-12 col-sm-8 col-md-3 col-lg-4 col-xl-3">
													<div class="form-group field">
														<div class="">
															<input type="text" name="CompanyShortName" id="CompanyShortName" value="<?=$editcompanydata['CompanyShortName']?>" class="form-control" placeholder="SHORT NAME"> 
														</div>
													</div>
												</div>
												
												<div class="col-12 col-sm-4 col-md-1 col-lg-2 col-xl-1 d-flex ">
													<div class="form-group">
														<label> NAME <span class="fored"><b>*</b></span> :</label>
													</div>
												</div>
												<div class="col-12 col-sm-8 col-md-6 col-lg-10 col-xl-6">
													<div class="form-group field">
														<div class="controls">
															<input type="text" name="CompanyName" value="<?=$editcompanydata['CompanyName']?>" id="CompanyName" class="form-control customvalidation"placeholder="ENTER NAME" required> 
														</div>
													</div>
												</div>
												<div class="col-12 col-sm-4 col-md-3 col-lg-4 col-xl-3 d-flex ">
													<div class="form-group">
														<label>COMPANY TYPE :</label>
													</div>
												</div>
												<div class="col-12 col-sm-8 col-md-9 col-lg-8 col-xl-9">
													<div class="form-group field">
														<div class="">
															<select name="CompanyType" id="CompanyType" class="form-control">
																<option value=""> --Select Type Type-- </option>
																<option <?php if($editcompanydata['CompanyType'] == "Proprietors"){echo "selected";}?> value="Proprietors">Proprietors</option>
															<option <?php if($editcompanydata['CompanyType'] == "Individual"){echo "selected";}?> value="Individual">Individual</option>
															<option <?php if($editcompanydata['CompanyType'] == "Proprietors"){echo "selected";}?> value="Proprietors">Proprietors</option>
															<option <?php if($editcompanydata['CompanyType'] == "Proprietorshipship"){echo "selected";}?> value="Proprietorshipship">Proprietorshipship (Non Audited)</option>
															<option <?php if($editcompanydata['CompanyType'] == "Partnership"){echo "selected";}?> value="Partnership">Partnership</option>
															<option <?php if($editcompanydata['CompanyType'] == "pvtltdco"){echo "selected";}?> value="pvtltdco">PVT. LTD. CO.</option>
															</select>
														</div>
					                                </div>
												</div>
												
												<div class="col-12 col-sm-4 col-md-3 col-lg-4 col-xl-9 d-flex ">
													<div class="form-group">
														<label>COMPANY GROUP :</label>
													</div>
												</div>
												<div class="col-12 col-sm-8 col-md-9 col-lg-8 col-xl-9">
													<div class="form-group">
														<div class="">
															<select id="CompanyGoup" name="CompanyGoup[]" class="selectpicker" multiple data-style="form-control btn-secondary">
																<?php

																	$editcompanydata['CompanyGoup'];
																	$x = explode(",",$editcompanydata['CompanyGoup']);
																?>

																<?php			
																	foreach ($companyname as $value1)
																	{
																		?>
																		<option <?php if(in_array($value1->CompanyName, $x)){echo "selected";}?> value="<?=$value1->CompanyName?>"><?=$value1->CompanyName?></option>
																		<?php
																	}
																?>
					                                        </select>
					                                    </div>
														
													</div>
												</div>

												<div class="col-12 col-sm-4 col-md-2 col-lg-3 col-xl-2 d-flex ">
													<div class="form-group">
														<label>ADDRESS :</label>
													</div>
												</div>
												<div class="col-12 col-sm-8 col-md-10 col-lg-9 col-xl-10">
													<div class="form-group field">
														<div class="">
															<input type="text" name="AddressCompany" id="AddressCompany" value="<?=$editcompanydata['AddressCompany']?>" class="form-control" placeholder="ENTER ADDRESS"> 
														</div>
													</div>
												</div>
												<div class="col-12 col-sm-4 col-md-2 col-lg-3 col-xl-2 d-flex ">
													<div class="form-group">
														<label>ADD.(CONT.) :</label>
													</div>
												</div>
												<div class="col-12 col-sm-8 col-md-10 col-lg-9 col-xl-10">
													<div class="form-group field">
														<div class="">
															<input type="text" name="CompanyAddressCont" id="CompanyAddressCont" value="<?=$editcompanydata['CompanyAddressCont']?>" class="form-control" placeholder="ENTER ADD.(CONT.)"> 
														</div>
													</div>
												</div>

											</div>
										</div>
										<div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
											<div class="row">
												
												
												<div class="col-12 col-sm-4 col-md-2 col-lg-2 col-xl-2 d-flex align-items-center">
													<div class="form-group">
														<label>CITY :</label>
													</div>
												</div>
												<div class="col-12 col-sm-8 col-md-4 col-lg-4 col-xl-4">
													<div class="form-group field">
														<div class="">
															<select name="CompanyCityID" id="CompanyCityID"  class="form-control">
																<option value=""> --Select -- </option>
																<?php 
																foreach($getCityData as $qgetCityData)
																{
																	?>
																	<option <?php if($editcompanydata['CompanyCityID'] == $qgetCityData->CityID){echo "selected";}?> value="<?php echo $qgetCityData->CityID; ?>"> <?php echo $qgetCityData->CityName; ?></option>
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
															<input type="text" name="CompanyPin" id="CompanyPin" value="<?=$editcompanydata['CompanyPin']?>" class="form-control" placeholder="PIN"> 
														</div>
													</div>
												</div>
												
												<div class="col-12 col-sm-4 col-md-2 col-lg-3 col-xl-2 d-flex align-items-center">
													<div class="form-group">
														<label> EMAIL :</label>
													</div>
												</div>
												<div class="col-12 col-sm-8 col-md-4 col-lg-9 col-xl-4">
													<div class="form-group field">
														<div class="">
															<input type="email" name="CompanyEmail" id="CompanyEmail"  value="<?=$editcompanydata['CompanyEmail']?>"class="form-control" placeholder="EMAIL"> 
														</div>
													</div>
												</div>
												<div class="col-12 col-sm-4 col-md-2 col-lg-3 col-xl-2 d-flex align-items-center">
													<div class="form-group">
														<label> MOBILE NO. :</label>
													</div>
												</div>
												<div class="col-12 col-sm-8 col-md-4 col-lg-9 col-xl-4">
													<div class="form-group field">
														<div class="">
															<input type="text" name="CompanyMobileNo" id="CompanyMobileNo" value="<?=$editcompanydata['CompanyMobileNo']?>" class="form-control" placeholder="MOBILE NO."> 
														</div>
													</div>
												</div>
												<div class="col-12 col-sm-4 col-md-2 col-lg-3 col-xl-2 d-flex align-items-center">
													<div class="form-group">
														<label> FAX :</label>
													</div>
												</div>
												<div class="col-12 col-sm-8 col-md-4 col-lg-9 col-xl-4">
													<div class="form-group field">
														<div class="">
															<input type="text" name="CompanyFax" id="CompanyFax" value="<?=$editcompanydata['CompanyFax']?>" class="form-control" placeholder="FAX"> 
														</div>
													</div>
												</div>
												<div class="col-12 col-sm-4 col-md-2 col-lg-3 col-xl-2 d-flex align-items-center">
													<div class="form-group">
														<label> PHONE NO. :</label>
													</div>
												</div>
												<div class="col-12 col-sm-8 col-md-4 col-lg-9 col-xl-4">
													<div class="form-group field">
														<div class="">
															<input type="text" name="CompanyPhoneNo" value="<?=$editcompanydata['CompanyPhoneNo']?>" id="CompanyPhoneNo" class="form-control" placeholder="PHONE NO."> 
														</div>
													</div>
												</div>
												<div class="col-12 col-sm-4 col-md-2 col-lg-6 col-xl-2 d-flex align-items-center">
													<div class="form-group">
														<input type="text" name="CompanyPhoneNo2" id="CompanyPhoneNo2"  value="<?=$editcompanydata['CompanyPhoneNo2']?>"class="form-control" placeholder="PHONE NO."> 
													</div>
												</div>
												<div class="col-12 col-sm-8 col-md-4 col-lg-6 col-xl-4">
													<div class="form-group field" id="staticParent1">
														<div class="">
															<input type="text" name="CompanyPhoneNo3" id="CompanyPhoneNo3" value="<?=$editcompanydata['CompanyPhoneNo3']?>" class="form-control" placeholder="PHONE NO."> 
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
												<div class="col-12 col-sm-4 col-md-3 col-lg-4 col-xl-3 d-flex ">
													<div class="form-group">
														<label>OTHER ADDRESS :</label>
													</div>
												</div>
												<div class="col-12 col-sm-8 col-md-9 col-lg-8 col-xl-9">
													<div class="form-group field">
														<div class="">
															<input type="text" name="CompanyAddress1" id="CompanyAddress1" value="<?=$editcompanydata['CompanyAddress1']?>" class="form-control" placeholder="ENTER ADDRESS"> 
														</div>
													</div>
												</div>
												<div class="col-12 col-sm-4 col-md-3 col-lg-4 col-xl-3 d-flex ">
													<div class="form-group">
														<label>ADDRESS.(CONT.) :</label>
													</div>
												</div>
												<div class="col-12 col-sm-8 col-md-9 col-lg-8 col-xl-9">
													<div class="form-group field">
														<div class="">
															<input type="text" name="CompanyAddressCont1" name="CompanyAddressCont1" value="<?=$editcompanydata['CompanyAddressCont1']?>" class="form-control" placeholder="ENTER ADD.(CONT.)"> 
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
											<div class="row">
												<div class="col-12 col-sm-4 col-md-3 col-lg-4 col-xl-3 d-flex ">
													<div class="form-group">
														<label>BUSINESS DESC. :</label>
													</div>
												</div>
												<div class="col-12 col-sm-8 col-md-9 col-lg-8 col-xl-9">
													<div class="form-group field">
														<div class="">
															<input type="text" name="CompanyBusinessDesc" id="CompanyBusinessDesc" value="<?=$editcompanydata['CompanyBusinessDesc']?>" class="form-control" placeholder="ENTER BUSINESS DESCRIPTION"> 
														</div>
													</div>
												</div>
												<div class="col-12 col-sm-4 col-md-3 col-lg-3 col-xl-3 d-flex ">
													<div class="form-group">
														<label>PROPRIETOR :</label>
													</div>
												</div>
												<div class="col-12 col-sm-8 col-md-9 col-lg-9 col-xl-9">
													<div class="form-group field">
														<div class="">
															<input type="text" name="CompanyProprietor" id="CompanyProprietor" value="<?=$editcompanydata['CompanyProprietor']?>" class="form-control" placeholder="ENTER PROPRIETOR"> 
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
												<div class="col-12 col-sm-4 col-md-2 col-lg-3 col-xl-2 d-flex align-items-center">
													<div class="form-group">
														<label>MULTI CHAL :</label>
													</div>
												</div>
												<div class="col-12 col-sm-8 col-md-10 col-lg-9 col-xl-10">
													<div class="form-group field">
														<div class="">
															<select name="CompanyMultiChal" id="CompanyMultiChal" class="form-control">
																<option value=""> --Select -- </option>
																<option <?php if($editcompanydata['CompanyMultiChal'] == "NO"){echo "selected";}?> value="NO"> NO </option>
																	<option <?php if($editcompanydata['CompanyMultiChal'] == "YES"){echo "selected";}?> value="YES"> YES </option>
															</select>
														</div>
													</div>
												</div>
												
												<div class="col-12 col-sm-4 col-md-2 col-lg-10 col-xl-2 d-flex ">
													<div class="form-group">
														<label>J.V. OF OLD YEAR BILLS DISCOUNT IN NEW YEAR ? </label>
													</div>
												</div>
												<div class="col-12 col-sm-8 col-md-10 col-lg-2 col-xl-10">
													<div class="form-group field">
														<div class="">
															<input type="checkbox" value="1"  name="CompanySelected" id="CompanySelected"> 
														</div>
													</div>
												</div>
												<div class="col-12 col-sm-4 col-md-2 col-lg-4 col-xl-2 d-flex ">
													<div class="form-group">
														<label>J.V. FROM DATE :</label>
													</div>
												</div>
												<div class="col-12 col-sm-8 col-md-4 col-lg-8 col-xl-4">
													<div class="form-group field">
														<div class="">
															<input type="text" name="CompanyJvFormDate" id="EditCompanyJvFormDate" value="<?=$editcompanydata['CompanyJvFormDate']?>" class="form-control">
														</div>
													</div>
												</div>
												<div class="col-12 col-sm-4 col-md-2 col-lg-3 col-xl-2 d-flex align-items-center">
													<div class="form-group">
														<label>PAN NO. :</label>
													</div>
												</div>
												<div class="col-12 col-sm-8 col-md-4 col-lg-9 col-xl-4">
													<div class="form-group">
														<div class="controls">
															<input type="text" name="CompanyPanNo" id="CompanyPanNo"  pattern="^([a-zA-Z]){5}([0-9]){4}([a-zA-Z]){1}?$" data-validation-pattern-message="Please enter valid PAN number. E.g. AAAAA9999A" class="form-control" value="<?=$editcompanydata['CompanyPanNo']?>" placeholder="ENTER PAN NO."> 
														</div>
													</div>
												</div>
												
												<div class="col-12 col-sm-4 col-md-2 col-lg-3 col-xl-2 d-flex align-items-center">
													<div class="form-group">
														<label>TDS A/C No. :</label>
													</div>
												</div>
												<div class="col-12 col-sm-8 col-md-4 col-lg-9 col-xl-4">
													<div class="form-group field">
														<div class="">
															<input type="text" name="CompanyTdsacNo" id="CompanyTdsacNo" class="form-control" value="<?=$editcompanydata['CompanyTdsacNo']?>" placeholder="ENTER TDS A/C No."> 
														</div>
													</div>
												</div>
												
												<div class="col-12 col-sm-4 col-md-2 col-lg-3 col-xl-2 d-flex align-items-center">
													<div class="form-group">
														<label>WARD :</label>
													</div>
												</div>
												<div class="col-12 col-sm-8 col-md-4 col-lg-9 col-xl-4">
													<div class="form-group field">
														<div class="">
															<input type="text" name="CompanyWard" id="CompanyWard"  value="<?=$editcompanydata['CompanyWard']?>"class="form-control" placeholder="ENTER WARD"> 
														</div>
													</div>
												</div>
												
												<div class="col-12 col-sm-4 col-md-2 col-lg-3 col-xl-2 d-flex align-items-center">
													<div class="form-group">
														<label>ECC NO. :</label>
													</div>
												</div>
												<div class="col-12 col-sm-8 col-md-4 col-lg-9 col-xl-4">
													<div class="form-group field">
														<div class="">
															<input type="text" name="CompanyEccNo" id="CompanyEccNo" class="form-control" value="<?=$editcompanydata['CompanyEccNo']?>" placeholder="ENTER ECC NO."> 
														</div>
													</div>
												</div>
												
												<div class="col-12 col-sm-4 col-md-2 col-lg-2 col-xl-2 d-flex align-items-center">
													<div class="form-group">
														<label>RANGE :</label>
													</div>
												</div>
												<div class="col-12 col-sm-8 col-md-4 col-lg-4 col-xl-4">
													<div class="form-group field">
														<div class="">
															<input type="text" name="CompanyRange" id="CompanyRange" class="form-control" value="<?=$editcompanydata['CompanyRange']?>" placeholder="ENTER RANGE"> 
														</div>
													</div>
												</div>
												<div class="col-12 col-sm-4 col-md-2 col-lg-2 col-xl-2 d-flex align-items-center">
													<div class="form-group">
														<label>DIVISION :</label>
													</div>
												</div>
												<div class="col-12 col-sm-8 col-md-4 col-lg-4 col-xl-4">
													<div class="form-group field">
														<div class="">
															<input type="text" name="CompanyDivision" id="CompanyDivision" value="<?=$editcompanydata['CompanyDivision']?>" class="form-control" placeholder="ENTER DIVISION"> 
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
											<div class="row">
												
												
												<div class="col-12 col-sm-4 col-md-2 col-lg-4 col-xl-2 d-flex align-items-center">
													<div class="form-group">
														<label>COLLECTRATE :</label>
													</div>
												</div>
												<div class="col-12 col-sm-8 col-md-4 col-lg-8 col-xl-4">
													<div class="form-group field">
														<div class="">
															<input type="text" name="CompanyCollectrate" id="CompanyCollectrate" value="<?=$editcompanydata['CompanyCollectrate']?>" class="form-control" placeholder="ENTER COLLECTRATE"> 
														</div>
													</div>
												</div>
												<div class="col-12 col-sm-4 col-md-2 col-lg-4 col-xl-2 d-flex align-items-center">
													<div class="form-group">
														<label>POLICY NO. :</label>
													</div>
												</div>
												<div class="col-12 col-sm-8 col-md-4 col-lg-8 col-xl-4">
													<div class="form-group field">
														<div class="">
															<input type="text" name="CompanyPolicyNo" id="CompanyPolicyNo" value="<?=$editcompanydata['CompanyPolicyNo']?>" class="form-control" placeholder="ENTER POLICY NO."> 
														</div>
													</div>
												</div>
												<div class="col-12 col-sm-4 col-md-2 col-lg-4 col-xl-2 d-flex ">
													<div class="form-group">
														<label>DATE :</label>
													</div>
												</div>
												<div class="col-12 col-sm-8 col-md-4 col-lg-8 col-xl-4">
													<div class="form-group field">
														<div class="">
															<input type="text" name="CompanyDate" id="EditCompanyDate"  value="<?=$editcompanydata['CompanyDate']?>"class="form-control"> 
														</div>
													</div>
												</div>
												<div class="col-12 col-sm-4 col-md-2 col-lg-4 col-xl-2 d-flex ">
													<div class="form-group">
														<label>GST NO.(VAT) :</label>
													</div>
												</div>
												<div class="col-12 col-sm-8 col-md-4 col-lg-8 col-xl-4">
													<div class="form-group">
														<div class="controls">
															<input type="text" id="CompanyGstNoVat" name="CompanyGstNoVat" pattern="/^[0-9]{2}[A-Z]{5}[0-9]{4}[A-Z]{1}[1-9A-Z]{1}Z[0-9A-Z]{1}$/" data-validation-pattern-message="Please Enter Valid GST Number" value="<?=$editcompanydata['CompanyGstNoVat']?>" placeholder="ENTER GST NO.(VAT)" class="form-control"> 
														</div>
													</div>
												</div>
												<div class="col-12 col-sm-4 col-md-2 col-lg-4 col-xl-2 d-flex ">
													<div class="form-group">
														<label>DT. :</label>
													</div>
												</div>
												<div class="col-12 col-sm-8 col-md-4 col-lg-8 col-xl-4">
													<div class="form-group field">
														<div class="">
															<input type="text" placeholder="ENTER DT." name="CompanyDt" id="CompanyDt" value="<?=$editcompanydata['CompanyDt']?>" class="form-control"> 
														</div>
													</div>
												</div>
												
												
												<div class="col-12 col-sm-4 col-md-2 col-lg-4 col-xl-2 d-flex ">
													<div class="form-group">
														<label>CIN NO. :</label>
													</div>
												</div>
												<div class="col-12 col-sm-8 col-md-4 col-lg-8 col-xl-4">
													<div class="form-group field">
														<div class="">
															<input type="text" placeholder="ENTER CIN NO." name="CompanyCinNo" value="<?=$editcompanydata['CompanyCinNo']?>" id="CompanyCinNo" class="form-control"> 
														</div>
													</div>
												</div>
												<div class="col-12 col-sm-4 col-md-2 col-lg-4 col-xl-2 d-flex ">
													<div class="form-group">
														<label>GST IN/UIN :</label>
													</div>
												</div>
												<div class="col-12 col-sm-8 col-md-4 col-lg-8 col-xl-4">
													<div class="form-group">
														<div class="controls">
															<input type="text" placeholder="ENTER GST IN/UIN" name="CompanyGstInUin" pattern="/^[0-9]{2}[A-Z]{5}[0-9]{4}[A-Z]{1}[1-9A-Z]{1}Z[0-9A-Z]{1}$/" data-validation-pattern-message="Please Enter Valid GST Number" value="<?=$editcompanydata['CompanyGstInUin']?>" id="CompanyGstInUin" class="form-control"> 
														</div>
													</div>
												</div>
												<div class="col-12 col-sm-4 col-md-3 col-lg-5 col-xl-3 d-flex ">
													<div class="form-group">
														<label>CEN. EXCISE REG. NO. :</label>
													</div>
												</div>
												<div class="col-12 col-sm-8 col-md-9 col-lg-7 col-xl-9">
													<div class="form-group field">
														<div class="">
															<input type="text" placeholder="ENTER CEN. EXCISE REG. NO." name="CompanyCenregNo" value="<?=$editcompanydata['CompanyCenregNo']?>" id="CompanyCenregNo" class="form-control"> 
														</div>
													</div>
												</div>
												
											</div>
										</div>
										<div class="col-12 col-sm-4 col-md-2 col-lg-3 col-xl-2 d-flex ">
											<div class="form-group">
												<label>INSURANCE POLICY DETAILS :</label>
											</div>
										</div>
										<div class="col-12 col-sm-8 col-md-10 col-lg-5 col-xl-10">
											<div class="form-group field">
												<div class="">
													<input type="text" placeholder="INSURANCE POLICY DETAILS" name="CompanyInsurancePolicy" value="<?=$editcompanydata['CompanyInsurancePolicy']?>" id="CompanyInsurancePolicy" class="form-control"> 
												</div>
											</div>
										</div>
										
									</div>
								</div>
								
								<div class="row">
									<div class="form-group">
										<div class="text-xs-right" style="margin-left: 8px;">
											<button type="submit" class="btn btn-success">Save</button>
                                            <a  href="<?php echo base_url()?>Company_controller" class="btn btn-info">Cancel</a>
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
jQuery('#CompanyJvFormDate').datepicker({
    autoclose: true,
    todayHighlight: true
});
jQuery('#CompanyDate').datepicker({
    autoclose: true,
    todayHighlight: true
});
jQuery('#EditCompanyJvFormDate').datepicker({
    autoclose: true,
    todayHighlight: true
});
jQuery('#EditCompanyDate').datepicker({
    autoclose: true,
    todayHighlight: true
});
var inside = $("#CompanyID").val();

if(inside != "")
{
	$("#home7").removeClass('active');
	$(".nav-link").removeClass('active');
	$(".foractive").addClass('active');
	$("#editform").addClass('active');
}

 $( "#CompanyName" ).keydown(function() {
		var str = $("#CompanyName").val(); 
  		var res = str.substring(0, 2);
  		var lt = res.toUpperCase();
		$("#CompanyShortName").val(lt);
	});
</script>
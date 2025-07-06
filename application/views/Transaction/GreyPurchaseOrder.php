
<?php $this->load->view('common/header'); 

if (($recordcount)>0)
{
	//echo "Hiii";
	if(isset($recordcount))
	{
		foreach ($OrderData as $qOrderData) 
		{
			$GreyOrderNo=$qOrderData->GreyOrderNo + 1;
		}
	}
}
else
{
	$GreyOrderNo=1;
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

		<!--  Haste Start -->
		<div id="responsive-modal" class="modal fade" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
		    <div class="modal-dialog modal-lg">
		        <div class="modal-content">
		            <div class="modal-header">
		                <h4 class="modal-title">Party Account Data</h4>
		                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
		            </div>
		            <div class="modal-body">
		            	<form action="" class="" method="post" id="ModalWeavwerForm" name="ModalWeavwerForm" novalidate>
							<input type="hidden" value="" id="accgrpid" name="accgrpid">
							<div class="row common_master_form_div">
								<div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 ">
									<div class="formtitle">
										<h4 class="backcolor">Account Information</h4>
										<div class="row removemargin">
											<div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
												<div class="row">
													<div class="col-12 col-sm-4 col-md-2 col-lg-2 col-xl-2 d-flex ">
														<div class="form-group">
															<label>Code :</label>
														</div>
													</div>
													<div class="col-12 col-sm-8 col-md-10 col-lg-10 col-xl-10">
														<div class="form-group ">
															<div class="">
																<input type="text" id="ACCode" name="ACCode" class="form-control weaverresultdata" placeholder="Enter Code">
															</div>
														</div>
													</div>
													
													<div class="col-12 col-sm-4 col-md-2 col-lg-2 col-xl-2 d-flex ">
														<div class="form-group">
															<label>A/C TYPE  :</label>
														</div>
													</div>
													<div class="col-12 col-sm-8 col-md-10 col-lg-10 col-xl-10">
														<div class="form-group field">
															<div class="">
															<select name="ACTypeID" id="ACTypeID" style="width: 100%; height:36px;" class="select2 form-control custom-select" >
																<option value=""> --Select Account Type-- </option>
																<?php
																foreach ($acctypedata as $qgetacctypedata)
																{
																	?>
																	<option value="<?=$qgetacctypedata['AcTypeID']?>"><?=$qgetacctypedata['ACType']?></option>
																	<?php
																}
																?>
															</select>
															</div>
														</div>
													</div>
													
													<div class="col-12 col-sm-4 col-md-2 col-lg-2 col-xl-2 d-flex ">
														<div class="form-group">
															<label>Short Name :</label>
														</div>
													</div>
													<div class="col-12 col-sm-8 col-md-3 col-lg-3 col-xl-3">
														<div class="form-group field">
															<div class="">
																<input type="text" name="ACShortName" id="ACShortName" class="form-control" placeholder="Short Name"> 
															</div>
														</div>
													</div>
													
													<div class="col-12 col-sm-4 col-md-1 col-lg-1 col-xl-1 d-flex ">
														<div class="form-group">
															<label> Name :</label>
														</div>
													</div>
													<div class="col-12 col-sm-8 col-md-6 col-lg-6 col-xl-6">
														<div class="form-group field">
															<div class="controls">
																<input type="text" name="ACName" class="form-control customvalidation weaverserachdata" required="" id="ACName" placeholder="Enter Name"> 
															</div>
														</div>
													</div>
													 
													<div class="col-12 col-sm-4 col-md-2 col-lg-2 col-xl-2 d-flex">
														<div class="form-group">
															<label> Dhara :</label>
														</div>
													</div>
													<div class="col-12 col-sm-8 col-md-10 col-lg-10 col-xl-10">
														<div class="form-group field">
															<div class="">
																<input type="text"  name="ACDhara" id="ACDhara" placeholder="0.00" class="form-control"> 
															</div>
														</div>
													</div>
													
													
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
															<label> DR.INT.@  :</label>
														</div>
													</div>
													<div class="col-12 col-sm-8 col-md-10 col-lg-10 col-xl-10">
														<div class="form-group field">
															<div class="">
																<input type="text" name="ACDrInt" id="ACDrInt" class="form-control" placeholder="Enter DR.INT.@" > 
															</div>
														</div>
													</div>
													
													
													<div class="col-12 col-sm-4 col-md-2 col-lg-2 col-xl-2 d-flex ">
														<div class="form-group">
															<label>Broker :</label>
														</div>
													</div>
													<div class="col-12 col-sm-8 col-md-10 col-lg-10 col-xl-10">
														<div class="form-group field">
															<div class="">
																<select name="BrokerID" id="BrokerID" style="width: 100%; height:36px;" class="select2 form-control custom-select" >
																	<option value=""> --Select Transport -- </option>
																	<?php 
																	foreach($getbrokerData as $qgetbrokerData)
																	{
																	?>
																	<option value="<?php echo $qgetbrokerData->Ledger_Id; ?>"> <?php echo $qgetbrokerData->LName; ?></option>
																	<?php 
																	}
																	?>

																</select>
															</div>
														</div>
													</div>
													<div class="col-12 col-sm-4 col-md-2 col-lg-2 col-xl-2 d-flex ">
														<div class="form-group">
															<label>Transport :</label>
														</div>
													</div>
													<div class="col-12 col-sm-8 col-md-10 col-lg-10 col-xl-10">
														<div class="form-group field">
															<div class="">
																<select name="TransportID" id="TransportID" style="width: 100%; height:36px;" class="select2 form-control custom-select" >
																	<option value=""> --Select Transport -- </option>
																	<?php 
																	foreach($transportdata as $qgettransportData)
																	{
																	?>
																	<option value="<?php echo $qgettransportData['TransportID']; ?>"> <?php echo $qgettransportData['TransportName']; ?></option>
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
															<label>Address :</label>
														</div>
													</div>
													<div class="col-12 col-sm-8 col-md-9 col-lg-9 col-xl-9">
														<div class="form-group field">
															<div class="">
																<input type="text" name="ACAddress" id="ACAddress" class="form-control" placeholder="Enter Address" > 
															</div>
														</div>
													</div>
													<div class="col-12 col-sm-4 col-md-3 col-lg-3 col-xl-3 d-flex ">
														<div class="form-group">
															<label>Gowdown/Oth Add. :</label>
														</div>
													</div>
													<div class="col-12 col-sm-8 col-md-9 col-lg-9 col-xl-9">
														<div class="form-group field">
															<div class="">
																<input type="text" name="ACAddress2" id="ACAddress2" class="form-control" placeholder="Enter gowdown/oth address" > 
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
																<input type="text" name="AddressCon" id="AddressCon" class="form-control" placeholder="Enter ADD.(CONT.)"> 
															</div>
														</div>
													</div>
													<div class="col-12 col-sm-4 col-md-3 col-lg-3 col-xl-3 d-flex ">
														<div class="form-group">
															<label>Oth. Address Cont. :</label>
														</div>
													</div>
													<div class="col-12 col-sm-8 col-md-9 col-lg-9 col-xl-9">
														<div class="form-group field">
															<div class="">
																<input type="text" name="Oth_Address_Con" id="Oth_Address_Con" class="form-control" placeholder="Enter Oth. Address Cont."> 
															</div>
														</div>
													</div>
												</div>
											</div>
											<div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
												<div class="row">
													<div class="col-12 col-sm-4 col-md-2 col-lg-2 col-xl-2 d-flex ">
														<div class="form-group">
															<label>City :</label>
														</div>
													</div>
													<div class="col-12 col-sm-8 col-md-10 col-lg-10 col-xl-10">
														<div class="form-group field">
															<div class="controls">
																<select name="CityID" id="CityID" style="width: 100%; height:36px;" class="select2 form-control custom-select" >
																	<option value=""> --Select City-- </option>
																	<?php 
																	foreach($citydata as $qgetcitydata)
																	{
																	?>
																	<option value="<?php echo $qgetcitydata['CityID']; ?>"> <?php echo $qgetcitydata['CityName']; ?></option>
																	<?php 
																	}
																	?>
																</select>
															</div>
														</div>
													</div>
													<div class="col-12 col-sm-4 col-md-2 col-lg-2 col-xl-2 d-flex ">
														<div class="form-group">
															<label>State :</label>
														</div>
													</div>
													<div class="col-12 col-sm-8 col-md-10 col-lg-10 col-xl-10">
														<div class="form-group field">
															<div class="controls">
																<select name="StateID" id="StateID" style="width: 100%; height:36px;" class="select2 form-control custom-select" >
																	<option value=""> --Select State-- </option>
																	<?php 
																	foreach($statedata as $qgetstateData)
																	{
																	?>
																	<option value="<?php echo $qgetstateData->StateID; ?>"> <?php echo $qgetstateData->StateName; ?></option>
																	<?php 
																	}
																	?>
																</select>
															</div>
														</div>
													</div>
													
													<div class="col-12 col-sm-4 col-md-2 col-lg-2 col-xl-2 d-flex">
														<div class="form-group">
															<label>Email :</label>
														</div>
													</div>
													<div class="col-12 col-sm-8 col-md-10 col-lg-10 col-xl-10">
														<div class="form-group field">
															<div class="">
																<input type="email" name="ACEmail" id="ACEmail" class="form-control" placeholder="ENTER EMAIL"> 
															</div>
														</div>
													</div>
													
													<div class="col-12 col-sm-4 col-md-2 col-lg-2 col-xl-2 d-flex ">
														<div class="form-group">
															<label>Pin :</label>
														</div>
													</div>
													<div class="col-12 col-sm-8 col-md-4 col-lg-4 col-xl-4">
														<div class="form-group field">
															<div class="controls">
																<input type="text" name="ACPin" id="ACPin" class="form-control" placeholder="Enter Pin"> 
															</div>
														</div>
													</div>
													
													<div class="col-12 col-sm-4 col-md-2 col-lg-2 col-xl-2 d-flex ">
														<div class="form-group">
															<label>Stdcode :</label>
														</div>
													</div>
													<div class="col-12 col-sm-8 col-md-4 col-lg-4 col-xl-4">
														<div class="form-group field">
															<div class="controls">
																<input type="text" name="ACStateCode" id="ACStateCode" class="form-control" placeholder="Enter Stdcode"> 
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
												<h4 class="backcolor">Contact Information</h4>
												<div class="row removemargin">
													<div class="col-12 col-sm-4 col-md-2 col-lg-2 col-xl-2 d-flex ">
														<div class="form-group">
															<label>Contact Name :</label>
														</div>
													</div>
													<div class="col-12 col-sm-8 col-md-10 col-lg-10 col-xl-10">
														<div class="form-group field">
															<div class="controls">
																<input type="text" name="ACContactName" class="form-control" id="ACContactName" placeholder="Enter Name"> 
															</div>
														</div>
													</div>
													<div class="col-12 col-sm-4 col-md-2 col-lg-2 col-xl-2 d-flex ">
														<div class="form-group">
															<label>Phone 1 :</label>
														</div>
													</div>
													<div class="col-12 col-sm-8 col-md-4 col-lg-4 col-xl-4">
														<div class="form-group field"  id="staticParent">
															<div class="controls">
																<input type="text" name="ACPhone1" id="ACPhone1" maxlength="10" class="form-control" placeholder="Enter Phone 1"> 
															</div>
														</div>
													</div>
													<div class="col-12 col-sm-4 col-md-2 col-lg-2 col-xl-2 d-flex ">
														<div class="form-group">
															<label>Phone 2 :</label>
														</div>
													</div>
													<div class="col-12 col-sm-8 col-md-4 col-lg-4 col-xl-4">
														<div class="form-group field" id="staticParent1">
															<div class="controls">
																<input type="text" name="ACPhone2" id="ACPhone2" maxlength="10" class="form-control" placeholder="Enter Phone 2"> 
															</div>
														</div>
													</div>
													<div class="col-12 col-sm-4 col-md-2 col-lg-2 col-xl-2 d-flex ">
														<div class="form-group">
															<label>Fax :</label>
														</div>
													</div>
													<div class="col-12 col-sm-8 col-md-4 col-lg-4 col-xl-4">
														<div class="form-group field">
															<div class="controls">
																<input type="text" name="fax" id="fax" maxlength="10" class="form-control" placeholder="Enter Fax"> 
															</div>
														</div>
													</div>
													<div class="col-12 col-sm-4 col-md-2 col-lg-2 col-xl-2 d-flex ">
														<div class="form-group">
															<label>Mobile :</label>
														</div>
													</div>
													<div class="col-12 col-sm-8 col-md-4 col-lg-4 col-xl-4">
														<div class="form-group field" id="staticParent2">
															<div class="controls">
																<input type="text"  name="ACFaxNo" id="ACFaxNo" class="form-control" placeholder="Enter Mobile"> 
															</div>
														</div>
													</div>
												</div>
											</div>	
										</div>
										<div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 pdr5">
											<div class="formtitle">
												<h4 class="backcolor">Bank Information</h4>
												<div class="row removemargin">
													<div class="col-12 col-sm-4 col-md-2 col-lg-2 col-xl-2 d-flex ">
														<div class="form-group">
															<label>Debit Limit :</label>
														</div>
													</div>
													<div class="col-12 col-sm-8 col-md-4 col-lg-4 col-xl-4">
														<div class="form-group field">
															<div class="controls">
																<input type="text" name="ACDebitLimit" id="ACDebitLimit" class="form-control" placeholder="Enter Debit Limit"> 
															</div>
														</div>
													</div>
													<div class="col-12 col-sm-4 col-md-2 col-lg-2 col-xl-2 d-flex ">
														<div class="form-group">
															<label>Limit Days :</label>
														</div>
													</div>
													<div class="col-12 col-sm-8 col-md-4 col-lg-4 col-xl-4">
														<div class="form-group field">
															<div class="controls">
																<input type="text" name="ACLimitDays" id="ACLimitDays" class="form-control" placeholder="Enter Limit Days"> 
															</div>
														</div>
													</div>
													<div class="col-12 col-sm-4 col-md-2 col-lg-2 col-xl-2 d-flex ">
														<div class="form-group">
															<label>Grade :</label>
														</div>
													</div>
													<div class="col-12 col-sm-8 col-md-4 col-lg-4 col-xl-4">
														<div class="form-group field">
															<div class="controls">
																<select name="ACGrade" id="ACGrade" style="width: 100%; height:36px;" class="select2 form-control custom-select" >
																	<option value=""> --Select Grade-- </option>
																	<option value="A"> A </option>
																	<option value="B"> B </option>
																	<option value="C"> C </option>
																	<option value="D"> D </option>
																</select>
															</div>
														</div>
													</div>
													<div class="col-12 col-sm-4 col-md-2 col-lg-2 col-xl-2 d-flex ">
														<div class="form-group">
															<label>Bill Co :</label>
														</div>
													</div>
													<div class="col-12 col-sm-8 col-md-4 col-lg-4 col-xl-4">
														<div class="form-group field">
															<div class="controls">
																<select name="ACBillCo" id="ACBillCo" style="width: 100%; height:36px;" class="select2 form-control custom-select" >
																	<option value=""> --Select Bill Co-- </option>
																	<option value="PF"> PF </option>
																	<option value="SF"> SF </option>
																</select>
															</div>
														</div>
													</div>
													<div class="col-12 col-sm-4 col-md-2 col-lg-2 col-xl-2 d-flex ">
														<div class="form-group">
															<label>Remark :</label>
														</div>
													</div>
													<div class="col-12 col-sm-8 col-md-10 col-lg-10 col-xl-10">
														<div class="form-group field">
															<div class="controls">
																<input type="text" name="ACRemark" id="ACRemark" class="form-control" placeholder="Enter Remark"> 
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
												<button type="button" class="btn btn-default waves-effect mdlcloseWeaver" data-dismiss="modal">Close</button>
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
									<button type="button" class="btn btn-default waves-effect mdlclose" data-dismiss="modal">Close</button>
								</div>

							</div>
						</form>	
						</div>
		            </div>
		        </div>
		    </div>
		 <!-- Quality End  -->

		<!-- Remark Start -->
		<div id="responsive-modalRemark" class="modal fade"   role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
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
																	foreach ($acctypedata as $value)
																	{
																		?>
																		<option value="<?=$value['AcTypeID']?>"><?=$value['ACType']?></option>
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
																		<option value="">--Select-- </option>
																		<?php
																		foreach ($accgrpdata as $value) {
																			?>
																		<option value="<?=$value['AcID'];?>"> <?=$value['ACName'];?> </option>
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


														<!-- <div class="col-12 col-sm-4 col-md-2 col-lg-2 col-xl-2 d-flex ">
															<div class="form-group">
																<label>MARKET  :</label>
															</div>
														</div>
														<div class="col-12 col-sm-8 col-md-10 col-lg-10 col-xl-10">
															<div class="form-group field">
																<div class="controls">
																	<select name="" id="" required class="form-control">
																		<option value=""> --Select -- </option>
																		<?php 
																		foreach($selectTransport as $selectTransportdata)
																		{
																		?>
																		<option value="<?php echo $selectTransportdata->transportID; ?>"> <?php echo $selectTransportdata->transportName; ?></option>
																		<?php 
																		}
																		?>
																	</select>
																</div>
															</div>
														</div> -->
														
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
																		foreach($itemdetailsdata as $value)
																		{
																		?>
																		<option value="<?php echo $value['ItemdetailID']; ?>"> <?php echo $value['IName']; ?></option>
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
																	foreach($screendata as $value)
																	{
																	?>
																	<option value="<?php echo $value['ScreenRegisterID']; ?>"> <?php echo $value['ItemDCut']; ?></option>
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
																	foreach($citydata as $value)
																	{
																	?>
																	<option value="<?php echo $value['CityID']; ?>"> <?php echo $value['CityName']; ?></option>
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
																		foreach($transportdata as $value)
																		{
																		?>
																		<option value="<?php echo $value['TransportID']; ?>"> <?php echo $value['TransportName']; ?></option>
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

		<!-- Checker Start -->
		<div id="checker-responsive-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
		    <div class="modal-dialog modal-lg">
		        <div class="modal-content">
		        	
		            <div class="modal-header">
		                <h4 class="modal-title">Add Checker</h4>
		                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
		            </div>
		            <div class="modal-body">
		            	<form class="" method="post" name="addledgerformmchecker" id="addledgerformmchecker" novalidate>
								
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
																	<input type="text" name="Code" id="Code" class="form-control checkerresultdata" placeholder="ENTER CODE">
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
																<select name="Ac_Type_Id" id="Ac_Type_Id1" style="width: 100%; height:36px;" class="select2 form-control custom-select" >
																
																	<option value="">--Select-- </option>
																	<?php
																	foreach ($acctypedata as $value)
																	{
																		?>
																		<option value="<?=$value['AcTypeID']?>"><?=$value['ACType']?></option>
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
																		<option value="">--Select-- </option>
																		<?php
																		foreach ($accgrpdata as $value) {
																			?>
																		<option value="<?=$value['AcID'];?>"> <?=$value['ACName'];?> </option>
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
																	<input type="text" required name="Name" class="form-control customvalidation checkerserachdata" id="Name" placeholder="ENTER NAME"> 
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


														<!-- <div class="col-12 col-sm-4 col-md-2 col-lg-2 col-xl-2 d-flex ">
															<div class="form-group">
																<label>MARKET  :</label>
															</div>
														</div>
														<div class="col-12 col-sm-8 col-md-10 col-lg-10 col-xl-10">
															<div class="form-group field">
																<div class="controls">
																	<select name="" id="" required class="form-control">
																		<option value=""> --Select -- </option>
																		<?php 
																		foreach($selectTransport as $selectTransportdata)
																		{
																		?>
																		<option value="<?php echo $selectTransportdata->transportID; ?>"> <?php echo $selectTransportdata->transportName; ?></option>
																		<?php 
																		}
																		?>
																	</select>
																</div>
															</div>
														</div> -->
														
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
																		foreach($itemdetailsdata as $value)
																		{
																		?>
																		<option value="<?php echo $value['ItemdetailID']; ?>"> <?php echo $value['IName']; ?></option>
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
																	foreach($screendata as $value)
																	{
																	?>
																	<option value="<?php echo $value['ScreenRegisterID']; ?>"> <?php echo $value['ItemDCut']; ?></option>
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
																	foreach($citydata as $value)
																	{
																	?>
																	<option value="<?php echo $value['CityID']; ?>"> <?php echo $value['CityName']; ?></option>
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
																	<select name="Transport_Id" id="Transport_Id" class="form-control">
																		<option value=""> --Select -- </option>
																		<?php 
																		foreach($transportdata as $value)
																		{
																		?>
																		<option value="<?php echo $value['TransportID']; ?>"> <?php echo $value['TransportName']; ?></option>
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
																	<select name="Ledger_Type" id="Ledger_Type" class="form-control">
																		
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
																	<select name="Party_Grade" id="Party_Grade" class="form-control">
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
		<!-- Checker End -->
		<div class="row page-titles">
			<div class="col-md-5 align-self-center">
				<h4 class="text-themecolor">Grey Purchase Order</h4>
			</div>
			<div class="col-md-7 align-self-center text-right">
				<div class="d-flex justify-content-end align-items-center">
					<ol class="breadcrumb">
						<li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
						<li class="breadcrumb-item active">Grey Purchase Order</li>
					</ol>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="card" style="width: 100%;">
				<div class="card-body p-b-0">
					<!-- Nav tabs -->
					<ul class="nav nav-tabs customtab2" role="tablist">
						<li class="nav-item"> <a class="nav-link active" data-toggle="tab" href="#home7" role="tab"><span class="hidden-sm-up"><i class="ti-home"></i></span> <span class="hidden-xs-down">Grey Purchase Order</span></a> </li>
						<li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#profile7" role="tab"><span class="hidden-sm-up"><i class="ti-user"></i></span> <span class="hidden-xs-down">Add Form</span></a> </li>
						<?php
						if(!empty($editpurchaseOrderdata))
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
								                    <!-- <th><input type="checkbox" name="checkall" id= "checkall" value=""  /> -->
								                     <th>Action</th>
								                    <th>Order No.</th>
								                    <th>Weaver</th>
								                    <th>Broker</th>
								                    <th>Quality</th>
								                    <th>Total Lot</th>
								                    <th>Total Lot PCS</th>
								                    <th>Order Pcs</th>
								                    <th>Order Date</th>
								                </tr>
								            </thead>
								            <tbody>

								            	<?php
								            	foreach ($PurchaseOrderdata as $value)
								            	{
								            	?>
								            	<tr id="">
								                   <!--  <td><input class="checkbox" name="checkUncheck[]"  id="checkAllAuto" value="" type="checkbox" /></td> -->
								                    <td class="editdelaction">
								                        <a href="<?=base_url();?>Transaction_controller/GreyPurchaseOrder?purchaseorderid=<?=$value->PurchaseOrderId;?>" ><i class="fa fa-edit"></i></a>&nbsp;&nbsp;
								                        <a onclick="deletedata('<?=$value->PurchaseOrderId;?>','PurchaseOrderdelete');"><i class="fa fa-trash-o"></i></a>
								                        <a href="<?=base_url();?>Transaction_controller/printPurchaseOrder?printPurchase=<?=$value->PurchaseOrderId;?>" ><i class="fa fa-print"></i></a>&nbsp;&nbsp;
								                    </td>
								                    <td><?=$value->GreyOrderNo;?></td>
								                    <td><?=$value->WeaverName;?></td>
								                    <td><?=$value->BrokerName;?></td>
								                    <td><?=$value->Quality;?></td>
								                    <td><?=$value->GreyNoLots;?></td>
								                    <td><?=$value->GreyPcsPerLots;?></td>
								                    <td><?=$value->GreyOrderPcs;?></td>
								                    <td><?=$value->GreyOrderDate;?></td>
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
							<form action="" class="" method="post" name="addGreyPurchaseOrderform" id="addGreyPurchaseOrderform" autocomplete="off">
								<?php
								if(empty($editpurchaseOrderdata))
								{
									?>
										<input type="hidden" value="" id="PurchaseOrderId" name="PurchaseOrderId">
									<?php
								}
								?>
								<div class="row common_master_form_div">
									<div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 ">
										<div class="formtitle">
											<div class="row removemargin">
												<div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
													<div class="row">
														<div class="col-12 col-sm-4 col-md-2 col-lg-2 col-xl-2 d-flex ">
															<div class="form-group">
																<label>ORDER NO. :</label>
															</div>
														</div>
														<div class="col-12 col-sm-8 col-md-10 col-lg-10 col-xl-10">
															<div class="form-group field">
																<div class="controls">
																	<input type="text"  name="GreyOrderNo" value="<?php echo $GreyOrderNo; ?>" id="GreyOrderNo" placeholder="ENTER Order no." required class="form-control customvalidation">
																</div>
															</div>
														</div>
														<div class="col-12 col-sm-4 col-md-2 col-lg-2 col-xl-2 d-flex">
															<div class="form-group">
																<label> WEAVER :</label>
															</div>
														</div>
														<div class="col-12 col-sm-8 col-md-10 col-lg-8 col-xl-10">
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
														<div class="col-12 col-sm-2 col-md-2 col-lg-2 col-xl-2">
															<i data-toggle="modal" data-target="#responsive-modal" class="fa fa-plus-circle"></i></div>
														<div class="col-12 col-sm-4 col-md-2 col-lg-2 col-xl-2 d-flex ">
															<div class="form-group">
																<label>BROKER :</label>
															</div>
														</div>
														<div class="col-12 col-sm-8 col-md-10 col-lg-8 col-xl-10">
															<div class="form-group field">
																<div class="">
																	<select name="BrokerID" id="BrokerIDData"  style="width: 100%; height:36px;" class="select2 form-control custom-select">
																		<option value=""> --Select -- </option>
																		<?php
																		foreach ($getbrokerData as $qgetbrokerData)
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
														<div class="col-12 col-sm-2 col-md-2 col-lg-2 col-xl-2">
															<i data-toggle="modal" data-target="#brocker-responsive-modal" class="fa fa-plus-circle"></i></div>
														<div class="col-12 col-sm-4 col-md-2 col-lg-2 col-xl-2 d-flex ">
															<div class="form-group">
																<label>QUALITY :</label>
															</div>
														</div>
														<div class="col-12 col-sm-6 col-md-8 col-lg-6 col-xl-8">
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
														<div class="col-12 col-sm-2 col-md-2 col-lg-3 col-xl-2">
															<i data-toggle="modal" data-target="#grey-responsive-modal-qty" class="fa fa-plus-circle"></i></div>
														<div class="col-12 col-sm-4 col-md-2 col-lg-5 col-xl-2 d-flex ">
															<div class="form-group">
																<label>ORDER GIVEN IN PCS/MTS :</label>
															</div>
														</div>
														<div class="col-12 col-sm-8 col-md-10 col-lg-7 col-xl-10">
															<div class="form-group field">
																<div class="controls">
																	<select name="GreyOrderGiven" id="GreyOrderGiven"   style="width: 100%; height:36px;" class="select2 form-control custom-select"">
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
														<div class="col-12 col-sm-8 col-md-10 col-lg-8 col-xl-10">
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
														<div class="col-12 col-sm-2 col-md-2 col-lg-2 col-xl-2">
															<i data-toggle="modal" data-target="#responsive-modalRemark" class="fa fa-plus-circle"></i></div>
														<div class="col-12 col-sm-4 col-md-2 col-lg-2 col-xl-2 d-flex ">
															<div class="form-group">
																<label>CHECKER :</label>
															</div>
														</div>
														<div class="col-12 col-sm-8 col-md-10 col-lg-8 col-xl-10">
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
														<div class="col-12 col-sm-2 col-md-2 col-lg-2 col-xl-2">
															<i data-toggle="modal" data-target="#checker-responsive-modal" class="fa fa-plus-circle"></i></div>


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
											<!-- 			<div class="col-12 col-sm-4 col-md-2 col-lg-3 col-xl-2 d-flex">
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
														</div> -->
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
													<a  href="<?php echo base_url()?>GreyPurchaseOrder" class="btn btn-info">
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
						if(!empty($editpurchaseOrderdata))
						{
						?>
						<div class="tab-pane  p-20" id="editform" role="tabpanel">
							<form class="" method="post" name="edigrayPurchaseOrderform" id="edigrayPurchaseOrderform" autocomplete="off">

								<input type="hidden" value="<?=$editpurchaseOrderdata['PurchaseOrderId'];?>" id="PurchaseOrderId" name="PurchaseOrderId">
									
								<div class="row common_master_form_div">
									<div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 ">
										
										<div class="formtitle">
											<div class="row removemargin">
												<div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
													<div class="row">
														<div class="col-12 col-sm-4 col-md-2 col-lg-2 col-xl-2 d-flex ">
															<div class="form-group">
																<label>ORDER NO. :</label>
															</div>
														</div>
														<div class="col-12 col-sm-8 col-md-10 col-lg-10 col-xl-10">
															<div class="form-group field">
																<div class="controls">
																	<input type="text"   name="GreyOrderNo" id="GreyOrderNo" required=""  class="form-control customvalidation" value="<?=$editpurchaseOrderdata['GreyOrderNo'];?>">
																</div>
															</div>
														</div>
														<div class="col-12 col-sm-4 col-md-2 col-lg-2 col-xl-2 d-flex">
															<div class="form-group">
																<label> WEAVER  :</label>
															</div>
														</div>
														<div class="col-12 col-sm-8 col-md-10 col-lg-10 col-xl-10">
															<div class="form-group field">
																<div class="">
																	<select name="WeaverID" id="WeaverID"  style="width: 100%; height:36px;" class="select2 form-control custom-select" onchange="displyBroker();">
																		<option value=""> --Select -- </option>
																		<?php
																		foreach ($getweaverData as $qgetweaverData)
																		{
																			?>
																			<option <?php if($editpurchaseOrderdata['WeaverID'] == $qgetweaverData->AcID) {echo "selected";}?> value="<?=$qgetweaverData->AcID?>"> <?=$qgetweaverData->ACName?> </option>

																			<?php
																		}
																		?>
																		
																	</select> 
																</div>
															</div>
														</div>
														<div class="col-12 col-sm-4 col-md-2 col-lg-2 col-xl-2 d-flex ">
															<div class="form-group">
																<label>BROKER   :</label>
															</div>
														</div>
														<div class="col-12 col-sm-8 col-md-10 col-lg-10 col-xl-10">
															<div class="form-group field">
																<div class="">
																	<select name="BrokerID" id="BrokerID"  style="width: 100%; height:36px;" class="select2 form-control custom-select">
																		<option value=""> --Select -- </option>
																		<?php
																		foreach ($getbrokerData as $qgetbrokerData)
																		{
																			?>
																			<option <?php if($editpurchaseOrderdata['BrokerID'] == $qgetbrokerData->Ledger_Id) {echo "selected";}?> value="<?=$qgetbrokerData->Ledger_Id?>"> <?=$qgetbrokerData->LName?> </option>
																			<?php
																		}
																		?>
																		
																	</select>
																</div>
															</div>
														</div>
														<div class="col-12 col-sm-4 col-md-2 col-lg-2 col-xl-2 d-flex ">
															<div class="form-group">
																<label>QUALITY  :</label>
															</div>
														</div>
														<div class="col-12 col-sm-8 col-md-10 col-lg-10 col-xl-10">
															<div class="form-group field">
																<div class="">
																	<select name="QualityID" id="QualityID"  style="width: 100%; height:36px;" class="select2 form-control custom-select">
																		<option value=""> --Select -- </option>
																		<?php
																		foreach ($getgreyQualityData as $qgetgreyQualityData)
																		{
																			?>
																			<option <?php if($editpurchaseOrderdata['QualityID'] == $qgetgreyQualityData->QualityID) {echo "selected";}?> value="<?=$qgetgreyQualityData->QualityID?>"> <?=$qgetgreyQualityData->GreyQuality?> </option>
																			<?php
																		}
																		?>
																		
																	</select>
																</div>
															</div>
														</div>
														<div class="col-12 col-sm-4 col-md-2 col-lg-5 col-xl-2 d-flex ">
															<div class="form-group">
																<label>ORDER GIVEN IN PCS/MTS:</label>
															</div>
														</div>
														<div class="col-12 col-sm-8 col-md-10 col-lg-7 col-xl-10">
															<div class="form-group field">
																<div class="">
																	<select name="GreyOrderGiven" id="GreyOrderGiven" style="width: 100%; height:36px;" class="select2 form-control custom-select">
																		<option <?php if($editpurchaseOrderdata['GreyOrderGiven'] == "pcs"){echo "selected";} ?> value="A"> Pcs </option>
																		<option <?php if($editpurchaseOrderdata['GreyOrderGiven'] == "mts"){echo "selected";} ?> value="B"> MTS </option>
																		<option <?php if($editpurchaseOrderdata['GreyOrderGiven'] == "kg"){echo "selected";} ?> value="C"> KG </option>
																		<option <?php if($editpurchaseOrderdata['GreyOrderGiven'] == "suit"){echo "selected";} ?> value="D"> Suit </option>
																		<option <?php if($editpurchaseOrderdata['GreyOrderGiven'] == "other"){echo "selected";} ?> value="D"> Other </option>
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
																	<select name="RemarkID" id="RemarkID"  style="width: 100%; height:36px;" class="select2 form-control custom-select">
																		<option value="">-Select-</option>

																		<?php
																		foreach ($getremarkData as $qgetremarkData)
																		{
																			?>
																			<option <?php if($editpurchaseOrderdata['RemarkID'] == $qgetremarkData->RemarkID) {echo "selected";}?> value="<?=$qgetremarkData->RemarkID;?>"><?=$qgetremarkData->Remark;?></option>
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
																		<option value="">-Select-</option>

																		<?php
																		foreach ($getcheckerData as $qgetcheckerData)
																		{
																			?>
																			<option <?php if($editpurchaseOrderdata['CheckerID'] == $qgetcheckerData->Ledger_Id) {echo "selected";}?> value="<?=$qgetcheckerData->Ledger_Id;?>"><?=$qgetcheckerData->LName;?></option>
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
																<label>DATE:</label>
															</div>
														</div>
														<div class="col-12 col-sm-8 col-md-10 col-lg-3 col-xl-10">
															<div class="form-group field">
																<div class="">
																	<input type="text" id="GreyOrderDate"  name="GreyOrderDate" placeholder="Date" class="form-control" value="<?=$editpurchaseOrderdata['GreyOrderDate'];?>"> 
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
																	<input type="text" id="GreyAvgWt"  name="GreyAvgWt" placeholder="AVG Wt" class="form-control" value="<?=$editpurchaseOrderdata['GreyAvgWt'];?>"> 
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
																	<input type="text" id="GreyPalluCut"  name="GreyPalluCut" placeholder="Pallu Cut" class="form-control" value="<?=$editpurchaseOrderdata['GreyPalluCut'];?>"> 
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
																	<input type="text"  name="GreyPanna" id="GreyPanna" placeholder="Panna" class="form-control" value="<?=$editpurchaseOrderdata['GreyPanna'];?>"> 
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
																	<input type="text"  name="GreyNoLots" id="EditGreyNoLots" placeholder="Lots" class="form-control" value="<?=$editpurchaseOrderdata['GreyNoLots'];?>"> 
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
																	<input type="text"  name="GreyPcsPerLots" id="EditGreyPcsPerLots" placeholder="PCS" class="form-control" value="<?=$editpurchaseOrderdata['GreyPcsPerLots'];?>"> 
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
																	<input type="text"  name="GreyRateMts" id="GreyRateMts" placeholder="RATE/MTS" class="form-control" value="<?=$editpurchaseOrderdata['GreyRateMts'];?>"> 
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
																	<input type="text"  name="GreyOrderPcs" id="EditGreyOrderPcs" placeholder="ORDER PCS" class="form-control" value="<?=$editpurchaseOrderdata['GreyOrderPcs'];?>"> 
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
																	<input type="text"  name="GreyOrderMts" id="GreyOrderMts" placeholder="ORDER MTS" class="form-control" value="<?=$editpurchaseOrderdata['GreyOrderMts'];?>"> 
																</div>
															</div>
														</div>
														<div class="col-12 col-sm-4 col-md-2 col-lg-3 col-xl-2 d-flex">
															<div class="form-group">
																<label>ORDER WT.:</label>
															</div>
														</div>
														<div class="col-12 col-sm-8 col-md-10 col-lg-3 col-xl-10">
															<div class="form-group field">
																<div class="">
																	<input type="text"  name="GreyOrderWt" id="GreyOrderWt" placeholder="ORDER WT" class="form-control" value="<?=$editpurchaseOrderdata['GreyOrderWt'];?>"> 
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
																	<input type="text"  name="GreyMtsPerKg" id="GreyMtsPerKg" placeholder="MTS PER KG" class="form-control" value="<?=$editpurchaseOrderdata['GreyMtsPerKg'];?>"> 
																</div>
															</div>
														</div>
												<!-- 		<div class="col-12 col-sm-4 col-md-2 col-lg-3 col-xl-2 d-flex">
															<div class="form-group">
																<label>RATE/MTS :</label>
															</div>
														</div>
														<div class="col-12 col-sm-8 col-md-10 col-lg-3 col-xl-10">
															<div class="form-group field">
																<div class="">
																	<input type="text"  name="GreyRatePerKg" id="GreyRatePerKg" placeholder="RATE PER KG" class="form-control" value="<?=$editpurchaseOrderdata['GreyRatePerKg'];?>"> 
																</div>
															</div>
														</div> -->
														<div class="col-12 col-sm-4 col-md-2 col-lg-3 col-xl-2 d-flex">
															<div class="form-group">
																<label>DHARA % :</label>
															</div>
														</div>
														<div class="col-12 col-sm-8 col-md-10 col-lg-3 col-xl-10">
															<div class="form-group field">
																<div class="">
																	<input type="text"  name="GreyDhara" id="GreyDhara" placeholder="" class="form-control" value="<?=$editpurchaseOrderdata['GreyDhara'];?>"> 
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
																	<input type="text"  name="GreyGraceDays" id="GreyGraceDays" placeholder="GRACE DAYS" class="form-control" value="<?=$editpurchaseOrderdata['GreyGraceDays'];?>"> 
																</div>
															</div>
														</div>
														<div class="col-12 col-sm-4 col-md-2 col-lg-3 col-xl-2 d-flex">
															<div class="form-group">
																<label>LAST DATE :</label>
															</div>
														</div>
														<div class="col-12 col-sm-8 col-md-10 col-lg-3 col-xl-10">
															<div class="form-group field">
																<div class="">
																	<input type="text"  name="GreyLastDate" id="editLast_Date" placeholder="GRACE DAYS" class="form-control" value="<?=$editpurchaseOrderdata['GreyLastDate'];?>"> 
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
													<a  href="<?php echo base_url()?>GreyPurchaseOrder" class="btn btn-info">
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
<script type="text/javascript">

	
	
	jQuery('#datepicker-autoclose1').datepicker({
	        autoclose: true,
	        todayHighlight: true
	    });
	jQuery('#Last_Date').datepicker({
	        autoclose: true,
	        todayHighlight: true
	    });
	jQuery('#GreyOrderDate').datepicker({
	        autoclose: true,
	        todayHighlight: true
	    });
	jQuery('#editLast_Date').datepicker({
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

	var first1 = document.getElementById('EditGreyNoLots');
	var second1 = document.getElementById('EditGreyPcsPerLots');
	first1.addEventListener("input", sum1);
	second1.addEventListener("input", sum1);
	function sum1() 
	{
		var one1 = parseFloat(first1.value) || 0;
		var two1 = parseFloat(second1.value) || 0;
		  
		var add1 = (one1 * two1);
		//alert(add1);
		$("#EditGreyOrderPcs").val(add1);

	}

	var inside = $("#PurchaseOrderId").val();

	if(inside != "")
	{
	$("#home7").removeClass('active');
	$(".nav-link").removeClass('active');
	$(".foractive").addClass('active');
	$("#editform").addClass('active');
	}
	


</script>


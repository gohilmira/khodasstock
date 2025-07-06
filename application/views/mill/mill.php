
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
				<h4 class="text-themecolor">Mill Despatch Manager</h4>
			</div>
			<div class="col-md-7 align-self-center text-right">
				<div class="d-flex justify-content-end align-items-center">
					<ol class="breadcrumb">
						<li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
						<li class="breadcrumb-item"><a href="javascript:void(0)">Master</a></li>
						<li class="breadcrumb-item active">Mill Despatch Manager</li>
					</ol>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="card" style="width: 100%;">
				<div class="card-body p-b-0">
					<!-- Nav tabs -->
					<ul class="nav nav-tabs customtab2" role="tablist">
						<li class="nav-item"> <a class="nav-link active" data-toggle="tab" href="#home7" role="tab"><span class="hidden-sm-up"><i class="ti-home"></i></span> <span class="hidden-xs-down">Mill Despatch Manager List</span></a> </li>

						<li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#profile7" role="tab"><span class="hidden-sm-up"><i class="ti-user"></i></span> <span class="hidden-xs-down">Add Form</span></a> </li>

						<?php
						if(!empty($editmilldata))
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
												<th>Company Name</th>
												<th>Type</th>
												<th>Chal No</th>
												<th>Desp Taka</th>
												<th>Desp Mts</th>
												<th>Desp Date</th>
											</tr>
										</thead>
										<tbody>
											<?php
											$i=1;
											foreach ($GetMillData as $qGetMillData)
											{
												?>
												<tr>
													<td class="editdelaction">
														<a  href="<?=base_url()?>Mill_controller?milldesid=<?=$qGetMillData->MillDespatchID;?>" ><i class="fa fa-edit"></i></a>&nbsp;&nbsp;
														
														<a href="javascript:deletedata('<?=$qGetMillData->MillDespatchID?>','milldesdelete');"><i class="fa fa-trash-o"></i></a>
													</td>
													<td><?=$i++;?></td>
													<td><?=$qGetMillData->CompanyName;?></td>
													<td><?=$qGetMillData->MillType;?></td>
													<td><?=$qGetMillData->MillChalNo;?></td>
													<td><?=$qGetMillData->MillDespTaka;?></td>
													<td><?=$qGetMillData->MillDespMts;?></td>
													<td><?=date("d-m-Y", strtotime($qGetMillData->MillDespDate));?></td>
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
							<form  class="addmilldesform" id="addmilldesform" method="POST" name="" novalidate>
								<?php
								if(empty($editmilldata))
								{
									?>
										<input type="hidden" value="" id="MillDespatchID" name="MillDespatchID">
									<?php
								}
								?>
								<div class="row common_master_form_div">
									<div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 ">
										<div class="formtitle">
											<div class="row removemargin">
												<div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
													<div class="row">
														<div class="col-12 col-sm-4 col-md-3 col-lg-3 col-xl-3 d-flex ">
															<div class="form-group">
																<label>COMPANY :</label>
															</div>
														</div>
														<div class="col-12 col-sm-8 col-md-9 col-lg-8 col-xl-9">
															<div class="form-group field">
																<div class="controls">
																	<select name="CompanyID" required="" id="CompanyID" class="form-control customvalidation">
																		<option value=""> --Select Company Type-- </option>
																		<?php
																		foreach ($getCompanyData as $qgetCompanyData){
																			?>
																			<option value="<?=$qgetCompanyData->CompanyID?>"><?=$qgetCompanyData->CompanyName?></option>
																		<?php
																		}
																		?>
																	</select>
																</div>
							                                </div>
														</div>
														<div class="col-12 col-sm-2 col-md-2 col-lg-1 col-xl-2">
															<i data-toggle="modal" data-target="#AddNewCompanymdl" class="fa fa-plus-circle"></i>
														</div>

														<div class="col-12 col-sm-4 col-md-3 col-lg-3 col-xl-3 d-flex ">
															<div class="form-group">
																<label>TYPE :</label>
															</div>
														</div>
														<div class="col-12 col-sm-8 col-md-9 col-lg-9 col-xl-9">
															<div class="form-group field">
																<div class="">
																	<select name="MillType" id="MillType" class="form-control">
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

														
														<div class="col-12 col-sm-4 col-md-3 col-lg-3 col-xl-3 d-flex ">
															<div class="form-group">
																<label>CHAL NO. :</label>
															</div>
														</div>
														<?php
														$millcount = $this->db->query("SELECT count(MillDespatchID) from mill_despatch_entry")->row_array();
														$cid = $millcount['count(MillDespatchID)']+1;
														?>
														<div class="col-12 col-sm-8 col-md-9 col-lg-9 col-xl-9">
															<div class="form-group field">
																<div class="">
																	<input type="text" name="MillChalNo" id="MillChalNo" class="form-control" placeholder="Chal No" value="<?=$cid;?>"> 
																</div>
															</div>
														</div>


														<div class="col-12 col-sm-4 col-md-3 col-lg-3 col-xl-3 d-flex ">
															<div class="form-group">
																<label>DESP DATE  :</label>
															</div>
														</div>
														<div class="col-12 col-sm-8 col-md-9 col-lg-9 col-xl-9">
															<div class="form-group field">
																<div class="">
																	<input type="text" name="MillDespDate" id="MillDespDate" class="form-control"  placeholder="Desp Date"> 
																</div>
															</div>
														</div>

														
														<div class="col-12 col-sm-4 col-md-3 col-lg-3 col-xl-3 d-flex ">
															<div class="form-group">
																<label>MILL LOT NO. :</label>
															</div>
														</div>
														<div class="col-12 col-sm-8 col-md-9 col-lg-9 col-xl-9">
															<div class="form-group field">
																<div class="">
																	<input type="text" name="MillLotNo" id="MillLotNo" class="form-control"placeholder="Mill Lot No"> 
																</div>
															</div>
														</div>


														<div class="col-12 col-sm-4 col-md-3 col-lg-3 col-xl-3 d-flex ">
															<div class="form-group">
																<label>MILL :</label>
															</div>
														</div>
														<div class="col-12 col-sm-8 col-md-9 col-lg-9 col-xl-9">
															<div class="form-group field">
															<div class="">
																<select name="MillID" id="MillID" class="form-control">
																	<option value=""> --Select Mill-- </option>
																	<?php
																	foreach ($getMillDespData as $qgetMillDespData)
																	{
																		?>
																		<option value="<?=$qgetMillDespData->Ledger_Id?>"><?=$qgetMillDespData->LName?></option>
																		<?php	
																	}
																	?>

																</select>
															</div>
							                                </div>
														</div>
														<div class="col-12 col-sm-4 col-md-3 col-lg-3 col-xl-3 d-flex ">
															<div class="form-group">
																<label>OUR MARKA :</label>
															</div>
														</div>
														<div class="col-12 col-sm-8 col-md-9 col-lg-9 col-xl-9">
															<div class="form-group field">
															<div class="">
																<select name="MillOurMarka" id="MillOurMarka" class="form-control">
																	<option value=""> --Select Our Marka-- </option>
																	<option value="1"> 1 </option>
																</select>
															</div>
							                                </div>
														</div>
														<div class="col-12 col-sm-4 col-md-3 col-lg-3 col-xl-3 d-flex ">
															<div class="form-group">
																<label>PUR SR. :</label>
															</div>
														</div>
														<div class="col-12 col-sm-8 col-md-9 col-lg-9 col-xl-9">
															<div class="form-group field">
																<div class="">
																	<select name="MillPurSr" id="MillPurSr" class="form-control">
																		<option value=""> --Select Pur Sr.-- </option>
																		<option value="1"> 1 </option>
																	</select>
																</div>
							                                </div>
														</div>

														<div class="col-12 col-sm-4 col-md-3 col-lg-3 col-xl-3 d-flex ">
															<div class="form-group">
																<label>WEAVER:</label>
															</div>
														</div>
														<div class="col-12 col-sm-8 col-md-9 col-lg-9 col-xl-9">
															<div class="form-group field">
															<div class="">
																<select name="WeaverID" id="WeaverID" class="form-control">
																	<option value=""> --Select Weaver-- </option>
																	<?php
																	foreach ($getAccountData as $qgetAccountData) {
																		?>
																		<option value="<?=$qgetAccountData->AcID?>"><?=$qgetAccountData->ACName?></option>
																		<?php	
																	}
																	?>
																	
																</select>
															</div>
							                                </div>
														</div>

														
														
														
														<div class="col-12 col-sm-4 col-md-3 col-lg-3 col-xl-3 d-flex ">
															<div class="form-group">
																<label>PUR BILL NO. :</label>
															</div>
														</div>
														<div class="col-12 col-sm-8 col-md-9 col-lg-9 col-xl-9">
															<div class="form-group field">
																<div class="">
																	<input type="text" name="MillPurBillNo" id="MillPurBillNo" class="form-control"placeholder="Pur Bill No."> 
																</div>
							                                </div>
														</div>

														<div class="col-12 col-sm-4 col-md-3 col-lg-3 col-xl-3 d-flex ">
															<div class="form-group">
																<label> PUR DATE :</label>
															</div>
														</div>
														<div class="col-12 col-sm-8 col-md-9 col-lg-9 col-xl-9">
															<div class="form-group field">
																<div class="">
																	<input type="text" name="MillPurDate" id="MillPurDate" class="form-control"placeholder="Pur Date"> 
																</div>
															</div>
														</div>
														
														<div class="col-12 col-sm-4 col-md-3 col-lg-3 col-xl-3 d-flex ">
															<div class="form-group">
																<label> QUALITY :</label>
															</div>
														</div>
														<div class="col-12 col-sm-8 col-md-9 col-lg-9 col-xl-9">
															<div class="form-group field">
																<div class="controls">
																	<select name="QualityID" id="QualityID" class="form-control">
																	<option value=""> --Select Quality-- </option>
																	<?php
																	foreach ($getQualityData as $qgetQualityData) {
																		?>
																		<option value="<?=$qgetQualityData->QualityID?>"><?=$qgetQualityData->GreyQuality?></option>
																		<?php	
																	}
																	?>
																	
																</select>
																</div>
															</div>
														</div>

														<div class="col-12 col-sm-4 col-md-3 col-lg-3 col-xl-3 d-flex ">
															<div class="form-group">
																<label> WT. :</label>
															</div>
														</div>
														<div class="col-12 col-sm-8 col-md-9 col-lg-9 col-xl-9">
															<div class="form-group field">
																<div class="controls">
																	<input type="text" name="MillWeight" id="MillWeight" class="form-control"placeholder="Weight"> 
																</div>
															</div>
														</div>

														
													</div>
												</div>
												<div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
													<div class="row">
														
														<div class="col-12 col-sm-4 col-md-3 col-lg-3 col-xl-3 d-flex ">
															<div class="form-group">
																<label> RATE :</label>
															</div>
														</div>
														<div class="col-12 col-sm-8 col-md-9 col-lg-9 col-xl-9">
															<div class="form-group field">
																<div class="controls">
																	<input type="text" name="MillRate" id="MillRate" class="form-control"placeholder="Rate"> 
																</div>
															</div>
														</div>

														<div class="col-12 col-sm-4 col-md-3 col-lg-3 col-xl-3 d-flex ">
															<div class="form-group">
																<label> DESP TAKA :</label>
															</div>
														</div>
														<div class="col-12 col-sm-8 col-md-9 col-lg-9 col-xl-9">
															<div class="form-group field">
																<div class="controls">
																	<input type="text" name="MillDespTaka" id="MillDespTaka" class="form-control"placeholder="Desp Taka"> 
																</div>
															</div>
														</div>
														<div class="col-12 col-sm-4 col-md-3 col-lg-3 col-xl-3 d-flex ">
															<div class="form-group">
																<label> DESP MTS :</label>
															</div>
														</div>
														<div class="col-12 col-sm-8 col-md-9 col-lg-9 col-xl-9">
															<div class="form-group field">
																<div class="controls">
																	<input type="text" name="MillDespMts" id="MillDespMts" class="form-control"placeholder="Desp Mts"> 
																</div>
															</div>
														</div>
														
														<div class="col-12 col-sm-4 col-md-3 col-lg-3 col-xl-3 d-flex ">
															<div class="form-group">
																<label>REMARK :</label>
															</div>
														</div>
														<div class="col-12 col-sm-8 col-md-9 col-lg-9 col-xl-9">
															<div class="form-group field">
															<div class="">
																<select name="RemarkID" id="RemarkID"  class="form-control">
																	<option value=""> --Select Remark-- </option>
																	<?php
																	foreach ($getRemarkData as $qgetRemarkData) {
																	?>
																	<option value="<?=$qgetRemarkData->RemarkID?>"><?=$qgetRemarkData->Remark?></option>
																	<?php	
																	}
																	?>
																	
																</select>
															</div>
							                                </div>
														</div>


														<div class="col-12 col-sm-4 col-md-3 col-lg-3 col-xl-3 d-flex ">
															<div class="form-group">
																<label>BROKER :</label>
															</div>
														</div>
														<div class="col-12 col-sm-8 col-md-9 col-lg-9 col-xl-9">
															<div class="form-group field">
															<div class="">
																<select name="BrokerID" id="BrokerID" class="form-control">
																	<option value=""> --Select Broker-- </option>
																	<?php
																	foreach ($getBrokerData as $qgetBrokerData) {
																		?>
																		<option value="<?=$qgetBrokerData->Ledger_Id?>"><?=$qgetBrokerData->LName?></option>
																		<?php
																	}
																	?>
																	
																</select>
															</div>
							                                </div>
														</div>

														<div class="col-12 col-sm-4 col-md-3 col-lg-3 col-xl-3 d-flex ">
															<div class="form-group">
																<label> ORDER NO  :</label>
															</div>
														</div>
														<div class="col-12 col-sm-8 col-md-9 col-lg-9 col-xl-9">
															<div class="form-group field">
																<div class="">
																	<input type="text" name="MillOrderNo" id="MillOrderNo" class="form-control"placeholder="Order No"> 
																</div>
															</div>
														</div>


														<div class="col-12 col-sm-4 col-md-3 col-lg-3 col-xl-3 d-flex ">
															<div class="form-group">
																<label>CHECKER :</label>
															</div>
														</div>
														<div class="col-12 col-sm-8 col-md-9 col-lg-9 col-xl-9">
															<div class="form-group field">
															<div class="">
																<select name="CheckerID" id="CheckerID" class="form-control">
																<option value=""> --Select Checker-- </option>
																<?php
																	foreach ($checkerdata as $value)
																	{
																		?>
																		<option value="<?=$qgetCompanyData->CompanyID?>"><?=$qgetCompanyData->CompanyName?></option>
																		<?php
																	}
																?>
																</select>
															</div>
							                                </div>
														</div>

														<div class="col-12 col-sm-4 col-md-3 col-lg-3 col-xl-3 d-flex ">
															<div class="form-group">
																<label> VEHICLE NO. :</label>
															</div>
														</div>
														<div class="col-12 col-sm-8 col-md-9 col-lg-9 col-xl-9">
															<div class="form-group field">
																<div class="">
																	<input type="text" name="MillVehicleNo" id="MillVehicleNo" class="form-control"placeholder="Vehicle No"> 
																</div>
															</div>
														</div>

														<div class="col-12 col-sm-4 col-md-3 col-lg-3 col-xl-3 d-flex ">
															<div class="form-group">
																<label> E WAY BILL NO :</label>
															</div>
														</div>
														<div class="col-12 col-sm-8 col-md-9 col-lg-9 col-xl-9">
															<div class="form-group field">
																<div class="">
																	<input type="text" name="MillEWayBillNo" id="MillEWayBillNo" class="form-control"placeholder="E Way Bill No"> 
																</div>
															</div>
														</div>

														<div class="col-12 col-sm-4 col-md-3 col-lg-3 col-xl-3 d-flex ">
															<div class="form-group">
																<label> REC TAKA :</label>
															</div>
														</div>
														<div class="col-12 col-sm-8 col-md-9 col-lg-9 col-xl-9">
															<div class="form-group field">
																<div class="">
																	<input type="text" name="MillRecTaka" id="MillRecTaka" class="form-control"placeholder="Rec Taka"> 
																</div>
															</div>
														</div>

														<div class="col-12 col-sm-4 col-md-3 col-lg-3 col-xl-3 d-flex ">
															<div class="form-group">
																<label> FIN MTS :</label>
															</div>
														</div>
														<div class="col-12 col-sm-8 col-md-9 col-lg-9 col-xl-9">
															<div class="form-group field">
																<div class="controls">
																	<input type="text" name="MillFinMts" id="MillFinMts" class="form-control"placeholder="Fin Mts"> 
																</div>
															</div>
														</div>

														<div class="col-12 col-sm-4 col-md-3 col-lg-3 col-xl-3 d-flex ">
															<div class="form-group">
																<label> REC GREY :</label>
															</div>
														</div>
														<div class="col-12 col-sm-8 col-md-9 col-lg-9 col-xl-9">
															<div class="form-group field">
																<div class="">
																	<input type="text" name="MillRecGrey" id="MillRecGrey" class="form-control"placeholder="Rec Grey"> 
																</div>
															</div>
														</div>

														<div class="col-12 col-sm-4 col-md-3 col-lg-3 col-xl-3 d-flex ">
															<div class="form-group">
																<label>PENDING :</label>
															</div>
														</div>
														<div class="col-12 col-sm-8 col-md-9 col-lg-9 col-xl-9">
															<div class="form-group field">
															<div class="">
																<select name="MillPending" id="MillPending" class="form-control">
																	<option value=""> --Select Pending-- </option>
																	<option value="yes">yes</option>
																	<option value="no">no</option>
																</select>
															</div>
							                                </div>
														</div>

														<div class="col-12 col-sm-4 col-md-3 col-lg-3 col-xl-3 d-flex ">
															<div class="form-group">
																<label> PEND MTS :</label>
															</div>
														</div>
														<div class="col-12 col-sm-8 col-md-9 col-lg-9 col-xl-9">
															<div class="form-group field">
																<div class="">
																	<input type="text" name="MillPendMts" id="MillPendMts" class="form-control"placeholder="Pend Mts" > 
																</div>
															</div>
														</div>
														
													</div>
												</div>
											</div>	
										</div>
										<input type="hidden" id="Millcount" name="Millcount" class="Millcount" value="1">
									    <table id="myTable" class=" table order-Milllist">
									    <thead>
									        <tr>
									            <td>PUR SR</td>
									            <td>TAKA SR</td>
									            <td>MTS</td>
									        </tr>
									    </thead>
									    <tbody>
									    	
									    		<tr>
										            <td>
										                <input type="text" name="MDPureSr0" id="MDPureSr0" class="form-control" placeholder="Pur Sr"/>
										            </td>
										            <td>
										                <input type="text" name="MDTakaSr0" id="MDTakaSr0"  class="form-control" placeholder="Taka Sr" />
										            </td>
										            <td>
										                <input type="text" name="MDMts0" id="MDMts0" class="form-control" placeholder="Mst"  />
										            </td>
										            <td><a class="deleteRow"></a>

										            </td>
										        </tr>
									    </tbody>
									    <tfoot>
									        <tr>
									            <td colspan="5" style="text-align: left;">
									                <input type="button" class="btn btn-lg btn-block Milladdrow" id="Milladdrow" value="Add Row" />
									            </td>
									        </tr>
									        <tr>
									        </tr>
									    </tfoot>
										</table>
										<div class="row">
											<div class="form-group">
												<div class="text-xs-right" style="margin-left: 8px;">
													<button type="submit" class="btn btn-success">Save</button>
		                                            <a  href="<?php echo base_url()?>Mill_controller" class="btn btn-info">Cancel</a>
												</div>
											</div>
										</div>
									</div>	
								</div>
							</form>
						</div>

						<?php
						if(!empty($editmilldata))
						{
							?>
							<div class="tab-pane  p-20" id="editform" role="tabpanel">
								<form  class="editmilldesform" id="editmilldesform" method="POST" name="" novalidate>
								<input type="hidden" value="<?=$editmilldata['MillDespatchID']?>" id="MillDespatchID" name="MillDespatchID">
								<div class="row common_master_form_div">
									<div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 ">
										<div class="formtitle">
											<div class="row removemargin">
												<div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
													<div class="row">
														<div class="col-12 col-sm-4 col-md-3 col-lg-3 col-xl-3 d-flex ">
															<div class="form-group">
																<label>COMPANY :</label>
															</div>
														</div>
														<div class="col-12 col-sm-8 col-md-9 col-lg-9 col-xl-9">
															<div class="form-group field">
																<div class="controls">
																	<select name="CompanyID" required="" id="CompanyID" class="form-control customvalidation">
																		<option value=""> --Select Company Type-- </option>
																		<?php
																		foreach ($getCompanyData as $qgetCompanyData){
																			?>
<option <?php if($editmilldata['CompanyID'] == $qgetCompanyData->CompanyID){echo "selected";}?> value="<?=$qgetCompanyData->CompanyID ?>"> <?=$qgetCompanyData->CompanyName?> </option>
																		<?php
																		}
																		?>
																	</select>
																</div>
							                                </div>
														</div>
														<div class="col-12 col-sm-4 col-md-3 col-lg-3 col-xl-3 d-flex ">
															<div class="form-group">
																<label>TYPE :</label>
															</div>
														</div>
														<div class="col-12 col-sm-8 col-md-9 col-lg-9 col-xl-9">
															<div class="form-group field">
																<div class="">
																	<select name="MillType" id="MillType" class="form-control">
																		<option value=""> --Select Type Type-- </option>
																		<option <?php if($editmilldata['MillType'] == "Proprietors"){echo "selected";}?> value="Proprietors">Proprietors</option>
															<option <?php if($editmilldata['MillType'] == "Individual"){echo "selected";}?> value="Individual">Individual</option>
															<option <?php if($editmilldata['MillType'] == "Proprietors"){echo "selected";}?> value="Proprietors">Proprietors</option>
															<option <?php if($editmilldata['MillType'] == "Proprietorshipship"){echo "selected";}?> value="Proprietorshipship">Proprietorshipship (Non Audited)</option>
															<option <?php if($editmilldata['MillType'] == "Partnership"){echo "selected";}?> value="Partnership">Partnership</option>
															<option <?php if($editmilldata['MillType'] == "pvtltdco"){echo "selected";}?> value="pvtltdco">PVT. LTD. CO.</option>
																	</select>
																</div>
							                                </div>
														</div>

														
														<div class="col-12 col-sm-4 col-md-3 col-lg-3 col-xl-3 d-flex ">
															<div class="form-group">
																<label>CHAL NO. :</label>
															</div>
														</div>
														<div class="col-12 col-sm-8 col-md-9 col-lg-9 col-xl-9">
															<div class="form-group field">
																<div class="">
																	<input type="text" name="MillChalNo" id="MillChalNo" value="<?=$editmilldata['MillChalNo']?>" class="form-control" placeholder="Chal No"> 
																</div>
															</div>
														</div>


														<div class="col-12 col-sm-4 col-md-3 col-lg-3 col-xl-3 d-flex ">
															<div class="form-group">
																<label>DESP DATE  :</label>
															</div>
														</div>
														<div class="col-12 col-sm-8 col-md-9 col-lg-9 col-xl-9">
															<div class="form-group field">
																<div class="">
																	<input type="text" name="MillDespDate" id="MillDespDate" value="<?=$editmilldata['MillDespDate']?>" class="form-control"  placeholder="Desp Date"> 
																</div>
															</div>
														</div>

														
														<div class="col-12 col-sm-4 col-md-3 col-lg-3 col-xl-3 d-flex ">
															<div class="form-group">
																<label>MILL LOT NO. :</label>
															</div>
														</div>
														<div class="col-12 col-sm-8 col-md-9 col-lg-9 col-xl-9">
															<div class="form-group field">
																<div class="">
																	<input type="text" name="MillLotNo" id="MillLotNo" value="<?=$editmilldata['MillLotNo']?>" class="form-control"placeholder="Mill Lot No"> 
																</div>
															</div>
														</div>


														<div class="col-12 col-sm-4 col-md-3 col-lg-3 col-xl-3 d-flex ">
															<div class="form-group">
																<label>MILL :</label>
															</div>
														</div>
														<div class="col-12 col-sm-8 col-md-9 col-lg-9 col-xl-9">
															<div class="form-group field">
															<div class="">
																<select name="MillID" id="MillID" class="form-control">
																	<option value=""> --Select Mill-- </option>
																	<?php
																	foreach ($getMillDespData as $qgetMillDespData)
																	{
																		?>
<option <?php if($editmilldata['MillID'] == $qgetMillDespData->Ledger_Id){echo "selected";}?> value="<?=$qgetMillDespData->Ledger_Id ?>"> <?=$qgetMillDespData->LName?> </option>
																		<?php	
																	}
																	?>

																</select>
															</div>
							                                </div>
														</div>
														<div class="col-12 col-sm-4 col-md-3 col-lg-3 col-xl-3 d-flex ">
															<div class="form-group">
																<label>OUR MARKA :</label>
															</div>
														</div>
														<div class="col-12 col-sm-8 col-md-9 col-lg-9 col-xl-9">
															<div class="form-group field">
															<div class="">
																<select name="MillOurMarka" id="MillOurMarka" class="form-control">
																	<option value=""> --Select Our Marka-- </option>
																	<option <?php if($editmilldata['MillOurMarka'] == "1"){echo "selected";}?> value="1">1</option>
																</select>
															</div>
							                                </div>
														</div>
														<div class="col-12 col-sm-4 col-md-3 col-lg-3 col-xl-3 d-flex ">
															<div class="form-group">
																<label>PUR SR. :</label>
															</div>
														</div>
														<div class="col-12 col-sm-8 col-md-9 col-lg-9 col-xl-9">
															<div class="form-group field">
																<div class="">
																	<select name="MillPurSr" id="MillPurSr" class="form-control">
																		<option value=""> --Select Pur Sr.-- </option>
																		<option <?php if($editmilldata['MillPurSr'] == "1"){echo "selected";}?> value="1">1</option>
																	</select>
																</div>
							                                </div>
														</div>

														<div class="col-12 col-sm-4 col-md-3 col-lg-3 col-xl-3 d-flex ">
															<div class="form-group">
																<label>WEAVER:</label>
															</div>
														</div>
														<div class="col-12 col-sm-8 col-md-9 col-lg-9 col-xl-9">
															<div class="form-group field">
															<div class="">
																<select name="WeaverID" id="WeaverID" class="form-control">
																	<option value=""> --Select Weaver-- </option>
																	<?php
																	foreach ($getAccountData as $qgetAccountData) {
																		?>
<option <?php if($editmilldata['WeaverID'] == $qgetAccountData->AcID){echo "selected";}?> value="<?=$qgetAccountData->AcID ?>"> <?=$qgetAccountData->ACName?> </option>
																		<?php	
																	}
																	?>
																	
																</select>
															</div>
							                                </div>
														</div>

														
														
														
														<div class="col-12 col-sm-4 col-md-3 col-lg-3 col-xl-3 d-flex ">
															<div class="form-group">
																<label>PUR BILL NO. :</label>
															</div>
														</div>
														<div class="col-12 col-sm-8 col-md-9 col-lg-9 col-xl-9">
															<div class="form-group field">
																<div class="">
																	<input type="text" name="MillPurBillNo" id="MillPurBillNo" value="<?=$editmilldata['MillPurBillNo']?>" class="form-control"placeholder="Pur Bill No."> 
																</div>
							                                </div>
														</div>

														<div class="col-12 col-sm-4 col-md-3 col-lg-3 col-xl-3 d-flex ">
															<div class="form-group">
																<label> PUR DATE :</label>
															</div>
														</div>
														<div class="col-12 col-sm-8 col-md-9 col-lg-9 col-xl-9">
															<div class="form-group field">
																<div class="">
																	<input type="text" name="MillPurDate" id="MillPurDate" value="<?=$editmilldata['MillPurDate']?>" class="form-control"placeholder="Pur Date"> 
																</div>
															</div>
														</div>
														
														<div class="col-12 col-sm-4 col-md-3 col-lg-3 col-xl-3 d-flex ">
															<div class="form-group">
																<label> QUALITY :</label>
															</div>
														</div>
														<div class="col-12 col-sm-8 col-md-9 col-lg-9 col-xl-9">
															<div class="form-group field">
																<div class="controls">
																	<select name="QualityID" id="QualityID" class="form-control">
																	<option value=""> --Select Quality-- </option>
																	<?php
																	foreach ($getQualityData as $qgetQualityData) {
																		?>
<option <?php if($editmilldata['QualityID'] == $qgetQualityData->QualityID){echo "selected";}?> value="<?=$qgetQualityData->QualityID ?>"> <?=$qgetQualityData->GreyQuality?> </option>
																		<?php	
																	}
																	?>
																	
																</select>
																</div>
															</div>
														</div>

														<div class="col-12 col-sm-4 col-md-3 col-lg-3 col-xl-3 d-flex ">
															<div class="form-group">
																<label> WT. :</label>
															</div>
														</div>
														<div class="col-12 col-sm-8 col-md-9 col-lg-9 col-xl-9">
															<div class="form-group field">
																<div class="controls">
																	<input type="text" name="MillWeight" id="MillWeight" value="<?=$editmilldata['MillWeight']?>" class="form-control"placeholder="Weight"> 
																</div>
															</div>
														</div>

														
													</div>
												</div>
												<div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
													<div class="row">
														
														<div class="col-12 col-sm-4 col-md-3 col-lg-3 col-xl-3 d-flex ">
															<div class="form-group">
																<label> RATE :</label>
															</div>
														</div>
														<div class="col-12 col-sm-8 col-md-9 col-lg-9 col-xl-9">
															<div class="form-group field">
																<div class="controls">
																	<input type="text" name="MillRate" id="MillRate" value="<?=$editmilldata['MillRate']?>" class="form-control"placeholder="Rate"> 
																</div>
															</div>
														</div>

														<div class="col-12 col-sm-4 col-md-3 col-lg-3 col-xl-3 d-flex ">
															<div class="form-group">
																<label> DESP TAKA :</label>
															</div>
														</div>
														<div class="col-12 col-sm-8 col-md-9 col-lg-9 col-xl-9">
															<div class="form-group field">
																<div class="controls">
																	<input type="text" name="MillDespTaka" id="MillDespTaka" value="<?=$editmilldata['MillDespTaka']?>" class="form-control"placeholder="Desp Taka"> 
																</div>
															</div>
														</div>
														<div class="col-12 col-sm-4 col-md-3 col-lg-3 col-xl-3 d-flex ">
															<div class="form-group">
																<label> DESP MTS :</label>
															</div>
														</div>
														<div class="col-12 col-sm-8 col-md-9 col-lg-9 col-xl-9">
															<div class="form-group field">
																<div class="controls">
																	<input type="text" name="MillDespMts" id="MillDespMts" value="<?=$editmilldata['MillDespMts']?>" class="form-control"placeholder="Desp Mts"> 
																</div>
															</div>
														</div>
														
														<div class="col-12 col-sm-4 col-md-3 col-lg-3 col-xl-3 d-flex ">
															<div class="form-group">
																<label>REMARK :</label>
															</div>
														</div>
														<div class="col-12 col-sm-8 col-md-9 col-lg-9 col-xl-9">
															<div class="form-group field">
															<div class="">
																<select name="RemarkID" id="RemarkID"  class="form-control">
																	<option value=""> --Select Remark-- </option>
																	<?php
																	foreach ($getRemarkData as $qgetRemarkData) {
																	?>
<option <?php if($editmilldata['RemarkID'] == $qgetRemarkData->RemarkID){echo "selected";}?> value="<?=$qgetRemarkData->RemarkID ?>"> <?=$qgetRemarkData->Remark?> </option>
																	<?php	
																	}
																	?>
																	
																</select>
															</div>
							                                </div>
														</div>


														<div class="col-12 col-sm-4 col-md-3 col-lg-3 col-xl-3 d-flex ">
															<div class="form-group">
																<label>BROKER :</label>
															</div>
														</div>
														<div class="col-12 col-sm-8 col-md-9 col-lg-9 col-xl-9">
															<div class="form-group field">
															<div class="">
																<select name="BrokerID" id="BrokerID" class="form-control">
																	<option value=""> --Select Broker-- </option>
																	<?php
																	foreach ($getBrokerData as $qgetBrokerData) {
																		?>
<option <?php if($editmilldata['BrokerID'] == $qgetBrokerData->Ledger_Id){echo "selected";}?> value="<?=$qgetBrokerData->Ledger_Id ?>"> <?=$qgetBrokerData->LName?> </option>
																		<?php
																	}
																	?>
																	
																</select>
															</div>
							                                </div>
														</div>

														<div class="col-12 col-sm-4 col-md-3 col-lg-3 col-xl-3 d-flex ">
															<div class="form-group">
																<label> ORDER NO  :</label>
															</div>
														</div>
														<div class="col-12 col-sm-8 col-md-9 col-lg-9 col-xl-9">
															<div class="form-group field">
																<div class="">
																	<input type="text" name="MillOrderNo" id="MillOrderNo" value="<?=$editmilldata['MillOrderNo']?>" class="form-control"placeholder="Order No"> 
																</div>
															</div>
														</div>


														<div class="col-12 col-sm-4 col-md-3 col-lg-3 col-xl-3 d-flex ">
															<div class="form-group">
																<label>CHECKER :</label>
															</div>
														</div>
														<div class="col-12 col-sm-8 col-md-9 col-lg-9 col-xl-9">
															<div class="form-group field">
															<div class="">
																<select name="CheckerID" id="CheckerID" class="form-control">
																<option value=""> --Select Checker-- </option>
																<?php
																	foreach ($checkerdata as $qcheckerdata)
																	{
																		?>
<option <?php if($editmilldata['CheckerID'] == $qcheckerdata->Ledger_Id){echo "selected";}?> value="<?=$qcheckerdata->Ledger_Id ?>"> <?=$qcheckerdata->LName?> </option>
																		<?php
																	}
																?>
																</select>
															</div>
							                                </div>
														</div>

														<div class="col-12 col-sm-4 col-md-3 col-lg-3 col-xl-3 d-flex ">
															<div class="form-group">
																<label> VEHICLE NO. :</label>
															</div>
														</div>
														<div class="col-12 col-sm-8 col-md-9 col-lg-9 col-xl-9">
															<div class="form-group field">
																<div class="">
																	<input type="text" name="MillVehicleNo" id="MillVehicleNo" value="<?=$editmilldata['MillVehicleNo']?>" class="form-control"placeholder="Vehicle No"> 
																</div>
															</div>
														</div>

														<div class="col-12 col-sm-4 col-md-3 col-lg-3 col-xl-3 d-flex ">
															<div class="form-group">
																<label> E WAY BILL NO :</label>
															</div>
														</div>
														<div class="col-12 col-sm-8 col-md-9 col-lg-9 col-xl-9">
															<div class="form-group field">
																<div class="">
																	<input type="text" name="MillEWayBillNo" id="MillEWayBillNo" value="<?=$editmilldata['MillEWayBillNo']?>" class="form-control"placeholder="E Way Bill No"> 
																</div>
															</div>
														</div>

														<div class="col-12 col-sm-4 col-md-3 col-lg-3 col-xl-3 d-flex ">
															<div class="form-group">
																<label> REC TAKA :</label>
															</div>
														</div>
														<div class="col-12 col-sm-8 col-md-9 col-lg-9 col-xl-9">
															<div class="form-group field">
																<div class="">
																	<input type="text" name="MillRecTaka" id="MillRecTaka" value="<?=$editmilldata['MillRecTaka']?>" class="form-control"placeholder="Rec Taka"> 
																</div>
															</div>
														</div>

														<div class="col-12 col-sm-4 col-md-3 col-lg-3 col-xl-3 d-flex ">
															<div class="form-group">
																<label> FIN MTS :</label>
															</div>
														</div>
														<div class="col-12 col-sm-8 col-md-9 col-lg-9 col-xl-9">
															<div class="form-group field">
																<div class="controls">
																	<input type="text" name="MillFinMts" id="MillFinMts" value="<?=$editmilldata['MillFinMts']?>" class="form-control"placeholder="Fin Mts"> 
																</div>
															</div>
														</div>

														<div class="col-12 col-sm-4 col-md-3 col-lg-3 col-xl-3 d-flex ">
															<div class="form-group">
																<label> REC GREY :</label>
															</div>
														</div>
														<div class="col-12 col-sm-8 col-md-9 col-lg-9 col-xl-9">
															<div class="form-group field">
																<div class="">
																	<input type="text" name="MillRecGrey" id="MillRecGrey" value="<?=$editmilldata['MillRecGrey']?>" class="form-control"placeholder="Rec Grey"> 
																</div>
															</div>
														</div>

														<div class="col-12 col-sm-4 col-md-3 col-lg-3 col-xl-3 d-flex ">
															<div class="form-group">
																<label>PENDING :</label>
															</div>
														</div>
														<div class="col-12 col-sm-8 col-md-9 col-lg-9 col-xl-9">
															<div class="form-group field">
															<div class="">
																<select name="MillPending" id="MillPending" class="form-control">
																	<option value=""> --Select Pending-- </option>
																	<option <?php if($editmilldata['MillPending'] == "yes"){echo "selected";}?>  value="yes">yes</option>
															<option <?php if($editmilldata['MillPending'] == "no"){echo "selected";}?> value="no">no</option>
																</select>
															</div>
							                                </div>
														</div>

														<div class="col-12 col-sm-4 col-md-3 col-lg-3 col-xl-3 d-flex ">
															<div class="form-group">
																<label> PEND MTS :</label>
															</div>
														</div>
														<div class="col-12 col-sm-8 col-md-9 col-lg-9 col-xl-9">
															<div class="form-group field">
																<div class="">
																	<input type="text" name="MillPendMts" id="MillPendMts" value="<?=$editmilldata['MillPendMts']?>" class="form-control"placeholder="Pend Mts" > 
																</div>
															</div>
														</div>
														
													</div>
												</div>
											</div>	
										</div>
										<input type="hidden" id="Millcount" name="Millcount" class="Millcount" value="1">
									    <table id="myTable" class=" table order-Milllist">
									    <thead>
									        <tr>
									            <td>PUR SR</td>
									            <td>TAKA SR</td>
									            <td>MTS</td>
									        </tr>
									    </thead>
									    <tbody>
									    	 <?php
										    	$MillDespatchID = $editmilldata['MillDespatchID'];
										    	$milldesdet = $this->db->query("SELECT * from mill_despatch_entry_details where MillDespatchID = '$MillDespatchID'")->result_array();
										    	$x = 0;
										    	foreach ($milldesdet as $value)
										    	{
							    			?>
									    		<tr>
										            <td>
								                <input type="text" name="MDPureSr<?=$x;?>" id="MDPureSr<?=$x;?>" class="form-control" placeholder="Enter Pur Sr" value="<?=$value['MDPureSr']?>" />
								            </td>
								            <td>
								                <input type="text" name="MDTakaSr<?=$x;?>" id="MDTakaSr<?=$x;?>"  class="form-control" placeholder="Enter Taka Sr" value="<?=$value['MDTakaSr']?>"/>
								            </td>
								            <td>
								                <input type="text" name="MDMts<?=$x;?>" id="MDMts<?=$x;?>" class="form-control" placeholder="Enter Mst" value="<?=$value['MDMts']?>" />
								            </td>
								            <td><input type="button" class="ibtnDel btn btn-md btn-danger "  value="Delete"></td>
										         </tr>
							    		<?php
							    		$x++;
							    	}
							    	
							    	?>
									    </tbody>
									    <tfoot>
									    	<input type="hidden" class="countdata" id="" name="MillDescountdata" value="<?=sizeof($milldesdet);?>">
									        
									    </tfoot>
										</table>
										<div class="row">
											<div class="form-group">
												<div class="text-xs-right" style="margin-left: 8px;">
													<button type="submit" class="btn btn-success">Save</button>
		                                            <a  href="<?php echo base_url()?>Mill_controller" class="btn btn-info">Cancel</a>
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

jQuery('#MillDespDate').datepicker({
    autoclose: true,
    todayHighlight: true
});
jQuery('#MillPurDate').datepicker({
    autoclose: true,
    todayHighlight: true
});
var inside = $("#MillDespatchID").val();

if(inside != "")
{
	$("#home7").removeClass('active');
	$(".nav-link").removeClass('active');
	$(".foractive").addClass('active');
	$("#editform").addClass('active');
}
</script>
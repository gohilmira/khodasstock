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
				<h4 class="text-themecolor">Transport Manager</h4>
			</div>
			<div class="col-md-7 align-self-center text-right">
				<div class="d-flex justify-content-end align-items-center">
					<ol class="breadcrumb">
						<li class="breadcrumb-item"><a href="<?=base_url();?>">Home</a></li>
						<!-- <li class="breadcrumb-item"><a href="javascript:void(0)">Master</a></li> -->
						<li class="breadcrumb-item active">Transport Manager</li>
					</ol>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="card" style="width: 100%;">
				<div class="card-body p-b-0">
					<!-- Nav tabs -->
					<ul class="nav nav-tabs customtab2" role="tablist">
						<li class="nav-item"> <a class="nav-link active" data-toggle="tab" href="#home7" role="tab"><span class="hidden-sm-up"><i class="ti-home"></i></span> <span class="hidden-xs-down">Transport Manager List</span></a> </li>

						<li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#profile7" role="tab"><span class="hidden-sm-up"><i class="ti-user"></i></span> <span class="hidden-xs-down">Add Form</span></a> </li>

						<?php
						if(!empty($editTransportdata))
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
                                                <th>Sr.No.</th>
                                                <th>Transport Name</th>
                                                <th>Phone</th>
                                                <th>Mobile</th>
                                                <th>Eway GSTIN/ID</th>
                                                <th>Mode</th>
                                                <th>Date</th>
											</tr>
										</thead>
										<tbody>
											<?php
											$i=1;
											foreach ($GetTransportData as $qGetTransportData)
											{
											?>
											<tr>
												<td class="editdelaction">
													<a  href="<?=base_url()?>Transport_controller?TransportID=<?=$qGetTransportData->TransportID;?>" ><i class="fa fa-edit"></i></a>&nbsp;&nbsp;
													
													<a href="javascript:deletedata('<?=$qGetTransportData->TransportID?>','transportdelete');"><i class="fa fa-trash-o"></i></a>
												</td>
                                                <td><?php echo $i++; ?></td>
                                                <td><?php echo $qGetTransportData->TransportName; ?></td>
                                                <td><?php echo $qGetTransportData->TPhone1; ?></td>
                                                <td><?php echo $qGetTransportData->TMobile; ?></td>
                                                <td><?php echo $qGetTransportData->TEway; ?></td>
                                                <td><?php echo $qGetTransportData->TMode; ?></td>
                                                <td><?php echo $qGetTransportData->createDate; ?></td>
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
							<form  class="" id="addtransportform" method="POST" name="" novalidate>
								<?php
								if(empty($editTransportdata))
								{
									?>
										<input type="hidden" value="" id="TransportID" name="TransportID">
									<?php
								}
								?>
					
								<div class="row common_master_form_div">
									<div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 ">
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
														<input type="text" name="TAddress" id="TAddress"  class="form-control"  value="" placeholder="Enter TAddress"> 
													</div>
												</div>
											</div>
										</div>
										<div class="row">
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
										</div>
										<div class="row">
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
										</div>
										<div class="row">
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
										<div class="row">
											<div class="form-group">
												<div class="text-xs-right" style="margin-left: 8px;">
													<button type="submit" class="btn btn-success">Submit</button>
													<a  href="<?php echo base_url()?>Transport_controller" class="btn btn-info">
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
							if(!empty($editTransportdata))
							{
						?>
						<!-- <input type="hidden" value="inside" id="inside"> -->
						<div class="tab-pane  p-20" id="editform" role="tabpanel">
							<form  class="" id="edittransportform" method="POST" name="edittransportform" novalidate>
								<input type="hidden" value="<?=$editTransportdata['TransportID']?>" id="TransportID" name="TransportID">
								<div class="row common_master_form_div">
									<div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 ">
										<div class="row">
											<div class="col-md-6">
												<div class="form-group">
													<h5>Transport Name</h5>
													<div class="controls">
														<input type="text" name="TransportName" id="TransportName" value="<?=$editTransportdata['TransportName']?>"  required="" class="form-control customvalidation"  value="" placeholder="Enter Transport Name"> 
													</div>
												</div>
											</div>
											<div class="col-md-6">
												<div class="form-group">
													<h5>Transport Address</h5>
													<div class="">
														<input type="text" name="TAddress" id="TAddress" value="<?=$editTransportdata['TAddress']?>"  class="form-control"  value="" placeholder="Enter TAddress"> 
													</div>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-6">
												<div class="form-group">
													<h5>Phone 1</h5>
													<div class="">
														<input type="text" name="TPhone1" id="TPhone1" value="<?=$editTransportdata['TPhone1']?>"  class="form-control"  value="" placeholder="Enter Phone1"> 
													</div>
												</div>
											</div>
											<div class="col-md-6">
												<div class="form-group">
													<h5>Phone 2</h5>
													<div class="">
														<input type="text" name="TPhone2" id="TPhone2" value="<?=$editTransportdata['TPhone2']?>"  class="form-control"  value="" placeholder="Enter Phone2"> 
													</div>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-6">
												<div class="form-group">
													<h5>Mobile No.</h5>
													<div class="">
														<input type="text" name="TMobile" id="TMobile" value="<?=$editTransportdata['TMobile']?>"  class="form-control"  value="" placeholder="Mobile No." maxlength="10"> 
													</div>
												</div>
											</div>
											<div class="col-md-6">
												<div class="form-group">
													<h5>TEway GSTIN/ID</h5>
													<div class="">
														<input type="text" name="TEway" id="TEway" value="<?=$editTransportdata['TEway']?>"  class="form-control"  value="" placeholder="Enter TEway GSTIN/ID"> 
													</div>
												</div>
											</div>
										</div>
										<div class="row">
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
										<div class="row">
											<div class="form-group">
												<div class="text-xs-right" style="margin-left: 8px;">
													<button type="submit" class="btn btn-success">Save</button>
	                                                 <a  href="<?php echo base_url()?>Transport_controller" class="btn btn-info">Cancel</a>
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

	$('.selectpicker').selectpicker();

var inside = $("#TransportID").val();

if(inside != "")
{
	$("#home7").removeClass('active');
	$(".nav-link").removeClass('active');
	$(".foractive").addClass('active');
	$("#editform").addClass('active');
}
  
</script>
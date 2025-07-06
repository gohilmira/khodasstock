
<?php $this->load->view('common/header'); ?>
<style>
    #success_message{ display: none;}
</style>

<div class="page-wrapper">
    <div class="container-fluid">
	
	
        <div class="row page-titles">
            <div class="col-md-5 align-self-center">
                <h4 class="text-themecolor">Account Type Master</h4>
				
            </div>
            <div class="col-md-7 align-self-center text-right">
                <div class="d-flex justify-content-end align-items-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?=base_url();?>">Home</a></li>
                        <li class="breadcrumb-item active">Account Type Master</li>
                    </ol>
                </div>
            </div>
        </div>
		
		
		<div class="row">
			<div class="card" style="width: 100%;">
				<div class="card-body p-b-0">
					<!-- Nav tabs -->
					<ul class="nav nav-tabs customtab2" role="tablist">
						<li class="nav-item"> <a class="nav-link active" data-toggle="tab" href="#home7" role="tab"><span class="hidden-sm-up"><i class="ti-home"></i></span> <span class="hidden-xs-down">Account Type List</span></a> </li>
						<li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#profile7" role="tab"><span class="hidden-sm-up"><i class="ti-user"></i></span> <span class="hidden-xs-down">Add Form</span></a> </li>

						<?php
						if(!empty($editaccountdata))
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
								<form name="frm_acctype_list" method="post" action="<?php echo base_url();?>Accounttype_controller/index">
									<input type="hidden" name="method" value="" /> 
									<div class="table-responsive">
										<table id="example23" class="display nowrap table table-hover table-striped table-bordered" cellspacing="0" width="100%">
											<thead>
												<tr>
													<th>Sr.No.</th>
													<th>Account Type</th>
													<th>Trial Pos</th>
													<th>Create Date</th>
													<th>Action</th>
												</tr>
											</thead>
											<tbody>
												<?php 
												$i=1;
												foreach($getallaccounttype as $qgetallaccounttype)
												{
													?>
													<tr>
														<td><?php echo $i++; ?></td>
														<td><?php echo $qgetallaccounttype->ACType; ?></td>
														<td><?php echo $qgetallaccounttype->ACTrialPos; ?></td>
														<td><?php echo $qgetallaccounttype->CreatedDate; ?></td>
														<td class="editdelaction">
		                                                  	<a href="<?=base_url();?>Accounttype_controller?accid=<?=$qgetallaccounttype->AcTypeID;?>" ><i class="fa fa-edit"></i></a>&nbsp;&nbsp;
		                                                    <a href="javascript:deletedata('<?=$qgetallaccounttype->AcTypeID;?>','AccountTypedelete');"><i class="fa fa-trash-o"></i></a>
		                                                </td>
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
							<form action="" class="" method="post" name="addaccountform" id="addaccountform" novalidate>
								<?php
								if(empty($editaccountdata))
								{
									?>
										<input type="hidden" value="" id="AcTypeID" name="AcTypeID">
									<?php
								}
								?>

								<div class="row">
									<div class="col-md-4">
										<div class="form-group">
											<h5>Account Type </h5>
											<div class="controls">
												<input type="text" name="ACType" id="ACType" class="form-control customvalidation"  value="" required="" placeholder="Enter Account Type"> 
											</div>
										</div>
									</div>
									<div class="col-md-4">

										<div class="form-group field">
											<h5>In P&L </h5>
											<div class="">
												<select name="ACPL" id="ACPL" class="form-control" aria-invalid="false">
													<option value=""> --Select In P&L-- </option>
													<option value="Yes"> Yes </option>
													<option value="No"> No </option>
												</select>
											<div class="help-block"></div></div>
										</div>
									</div>
									<div class="col-md-4">
										<div class="form-group field">
											<h5>In Tranding </h5>
											<div class="">
												<select name="ACTranding" id="ACTranding"  class="form-control" aria-invalid="false">
													<option value=""> --Select In Tranding-- </option>
													<option value="Yes"> Yes </option>
													<option value="No"> No </option>
												</select>
											<div class="help-block"></div></div>
										</div>
									</div>
									<div class="col-md-4">
										<div class="form-group field">
											<h5>Balance Sheet </h5>
											<div class="">
												<select name="ACBalSheet" id="ACBalSheet" class="form-control" aria-invalid="false">
													<option value=""> --Select Balance Sheet-- </option>
													<option value="Yes"> Yes </option>
													<option value="No"> No </option>
												</select>
											<div class="help-block"></div></div>
										</div>
									</div>

									<div class="col-md-4">
										<div class="form-group field">
											<h5>Trail Balance Side </h5>
											<div class="">
												<select name="ACTrialSide" id="ACTrialSide"  class="form-control" aria-invalid="false">
													<option value=""> --Select Trail Balance Side-- </option>
													<option value="Credit"> Credit </option>
													<option value="Debit"> Debit </option>
												</select>
											<div class="help-block"></div></div>
										</div>
									</div>

									<div class="col-md-4">
										<div class="form-group">
											<h5>Trail Position</h5>
											<div class="">
												<input type="text" name="ACTrialPos" id="ACTrialPos" class="form-control" placeholder="Enter Trail Position"> 
											</div>
										</div>
									</div>
									<div class="col-md-4">
										<div class="text-xs-right">
											<button type="submit" class="btn btn-success">Submit</button>
											<a  href="<?php echo base_url()?>Accounttype_controller" class="btn btn-info">Cancel</a>
										</div>
									</div>
								</div>
							</form>
						</div>
						<?php
						if(!empty($editaccountdata))
						{
							?>							
							<div class="tab-pane  p-20" id="editform" role="tabpanel">
								<form action="" class="" method="post" name="editaccountform" id="editaccountform" novalidate>
									<input type="hidden" id="AcTypeID" name="AcTypeID" value="<?=$editaccountdata['AcTypeID']?>">
									<div class="row">
										<div class="col-md-4">
											<div class="form-group">
												<h5>Account Type <span class="text-danger">*</span></h5>
												<div class="controls">
													<input type="text" name="ACType" class="form-control customvalidation"  value="<?=$editaccountdata['ACType']?>" placeholder="Enter Account Type"> 
												</div>
											</div>
										</div>
										<div class="col-md-4">

											<div class="form-group field">
												<h5>In P&L :</h5>
												<div class="">
													<select name="ACPL" id="ACPL"  class="form-control" aria-invalid="false">
														<option value=""> --Select In P&L-- </option>

														<option <?php if($editaccountdata['ACPL'] == 'Yes'){echo "selected";}?>
														 value="Yes"> Yes </option>
														<option <?php if($editaccountdata['ACPL'] == 'No'){echo "selected";}?> value="No"> No </option>
													</select>
												<div class="help-block"></div></div>
											</div>
										</div>
										<div class="col-md-4">
											<div class="form-group field">
												<h5>In Tranding <span class="text-danger">*</span></h5>
												<div class="">
													<select name="ACTranding" id="ACTranding" class="form-control" aria-invalid="false">
														<option value=""> --Select In Tranding-- </option>
														<option <?php if($editaccountdata['ACTranding'] == 'Yes'){echo "selected";}?> value="Yes"> Yes </option>
														<option <?php if($editaccountdata['ACTranding'] == 'No'){echo "selected";}?> value="No"> No </option>
													</select>
												<div class="help-block"></div></div>
											</div>
										</div>
										<div class="col-md-4">
											<div class="form-group field">
												<h5>Balance Sheet <span class="text-danger">*</span></h5>
												<div class="">
													<select name="ACBalSheet" id="ACBalSheet" class="form-control" aria-invalid="false">
														<option value=""> --Select Balance Sheet-- </option>
														<option <?php if($editaccountdata['ACBalSheet'] == 'Yes'){echo "selected";}?> value="Yes"> Yes </option>
														<option <?php if($editaccountdata['ACBalSheet'] == 'No'){echo "selected";}?> value="No"> No </option>
													</select>
												<div class="help-block"></div></div>
											</div>
										</div>

										<div class="col-md-4">
											<div class="form-group field">
												<h5>Trail Balance Side </h5>
												<div class="">
													<select name="ACTrialSide" id="ACTrialSide"  class="form-control" aria-invalid="false">
														<option value=""> --Select Trail Balance Side-- </option>
														<option <?php if($editaccountdata['ACTrialSide'] == 'Credit'){echo "selected";}?> value="Credit"> Credit </option>
														<option <?php if($editaccountdata['ACTrialSide'] == 'Debit'){echo "selected";}?> value="Debit"> Debit </option>
													</select>
												<div class="help-block"></div></div>
											</div>

										</div>
										<div class="col-md-4">
											<div class="form-group">
												<h5>Trail Position </h5>
												<div class="">
													<input type="text" name="ACTrialPos" class="form-control customvalidation"  value="<?=$editaccountdata['ACTrialPos']?>" placeholder="Enter Trail Position"> 
												</div>
											</div>
										</div>
										<div class="col-md-4">
											<div class="text-xs-right">
												<button type="submit" class="btn btn-success">Submit</button>
												<a  href="<?php echo base_url()?>Accounttype_controller" class="btn btn-info">Cancel</a>
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
var inside = $("#AcTypeID").val();

if(inside != "")
{
	$("#home7").removeClass('active');
	$(".nav-link").removeClass('active');
	$(".foractive").addClass('active');
	$("#editform").addClass('active');
}

 </script>
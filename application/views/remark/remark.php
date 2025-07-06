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
        <div class="row page-titles">
	        <div class="col-md-5 align-self-center">
	            <h4 class="text-themecolor">Remark Master</h4>
			</div>
            <div class="col-md-7 align-self-center text-right">
                <div class="d-flex justify-content-end align-items-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Master</a></li>
                        <li class="breadcrumb-item active">Remark Master</li>
                    </ol>
					<a href="javascript:fun_multipleDelete();" class="btn btn-info d-none d-lg-block m-l-15"><i class="fa fa-plus-circle"></i> All Delete</a>
                </div>
            </div>
        </div>
		<div class="row">
			<div class="card" style="width: 100%;">
				<div class="card-body p-b-0">
					<!-- Nav tabs -->
					<ul class="nav nav-tabs customtab2" role="tablist">
						<li class="nav-item"> <a class="nav-link active" data-toggle="tab" href="#home7" role="tab"><span class="hidden-sm-up"><i class="ti-home"></i></span> <span class="hidden-xs-down">Remark List</span></a> </li>
						<li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#profile7" role="tab"><span class="hidden-sm-up"><i class="ti-user"></i></span> <span class="hidden-xs-down">Add Form</span></a> </li>

						<?php

						if(!empty($editremarkdata))
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
                                                <th>Remark</th>
                                                <th>Remark Type</th>
                                                <th>Created Date</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                           <?php
                                           $i=1;
                                           foreach ($GetRemarkData as $qGetRemarkData)
                                           {
                                           		?>
                                           		<tr>
                                           			<td class="editdelaction">
                                                    	<a href="<?=base_url();?>Remark_controller/?remarkid=<?=$qGetRemarkData->RemarkID;?>"><i class="fa fa-edit"></i></a>&nbsp;&nbsp;
                                                   		<a href="javascript:deletedata('<?=$qGetRemarkData->RemarkID;?>','remarkdelete');"><i class="fa fa-trash-o"></i></a>
	                                                </td>
	                                           		<td><?=$i++;?></td>
	                                           		<td><?=$qGetRemarkData->Remark;?></td>
	                                           		<td><?=$qGetRemarkData->RemarkType;?></td>
	                                           		<td><?=date("d-m-Y", strtotime($qGetRemarkData->CreateDate));?></td>
                                           		</tr>
                                           		<?php
                                           }
                                           ?>
                                           
                                        </tbody>
                                    </table>
                                </div>
							</div>
						</div>
						<div class="tab-pane" id="profile7" role="tabpanel">
							<form action="" method="post" class="" method="post" name="addremarkform" id="addremarkform" novalidate>
								<?php
								if(empty($editremarkdata))
								{
									?>
									<input type="hidden" name="RemarkID" id="RemarkID" value="">
									<?php
								}
								?>
								<div class="row">
									<div class="col-md-12">
										<div class="row">
											<div class="col-md-6">
												<div class="form-group">
													<h5>Remark  <span class="text-danger">*</span></h5>
													<div class="controls">
														<input type="text" name="Remark" id="Remark" class="form-control customvalidation" placeholder="Enter Remark" placeholder="Enter Remark"  required> 
													</div>
												</div>
											</div>
											<div class="col-md-6">
												<div class="form-group">
													<h5>Remark Type <span class="text-danger">*</span></h5>
													<div class="">
														<select name="RemarkType" id="RemarkType" required="" class="form-control" aria-invalid="false">
															<option value=""> --Select Remark Type-- </option>
															<option value="all">ALL</option>
															<option value="billing">BILLING</option>
															<option value="inventory">INVENTORY</option>
															<option value="expenses">EXPENSES</option>
															<option value="orders">ORDERS</option>
															<option value="journal">JOURNAL</option>
															<option value="rec_pay">REC./PAY</option>
															<option value="draweebank">DRAWEE BANK</option>
															<option value="staffnames">STAFF NAMES</option>
															<option value="master_mill">MASTER(MILL)</option>
														</select>
													</div>
												</div>
											</div>
											<div class="col-md-12">
												<div class="text-xs-right">
													<button type="submit" class="btn btn-success">Submit</button>
													<a href="<?php echo base_url()?>Remark_controller" class="btn btn-info">
			                                            Cancel
			                                        </a>
												</div>
											</div>
										</div>
									</div>
									<div class="col-md-8"></div>
								</div>
							</form>
						</div>
					</div>
					<?php
					if(!empty($editremarkdata))
					{
					?>
					<div class="tab-pane" id="editform" role="tabpanel">
						<form class="" method="post" name="editremarkform" id="editremarkform" novalidate>
							<input type="hidden" value="<?=$editremarkdata['RemarkID']?>" id="RemarkID" name="RemarkID">
							<div class="row">
								<div class="col-md-12">
									<div class="row">
										<div class="col-md-6">
											<div class="form-group">
												<h5>Remark  <span class="text-danger">*</span></h5>
												<div class="controls">
													<input type="text" name="Remark" id="Remark" class="form-control customvalidation" value="<?=$editremarkdata['Remark']?>"  required> 
												</div>
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<h5>Remark Type <span class="text-danger">*</span></h5>
												<div class="">
													<select name="RemarkType" id="RemarkType" required="" class="form-control" aria-invalid="false">
														<option value=""> --Select Remark Type-- </option>
														<option <?php if($editremarkdata['RemarkType'] == "all"){echo "selected";}?> value="all">ALL</option>
														<option <?php if($editremarkdata['RemarkType'] == "billing"){echo "selected";}?> value="billing">BILLING</option>
														<option <?php if($editremarkdata['RemarkType'] == "inventory"){echo "selected";}?> value="inventory">INVENTORY</option>
														<option <?php if($editremarkdata['RemarkType'] == "expenses"){echo "selected";}?> value="expenses">EXPENSES</option>
														<option <?php if($editremarkdata['RemarkType'] == "orders"){echo "selected";}?> value="orders">ORDERS</option>
														<option <?php if($editremarkdata['RemarkType'] == "journal"){echo "selected";}?> value="journal">JOURNAL</option>
														<option <?php if($editremarkdata['RemarkType'] == "rec_pay"){echo "selected";}?> value="rec_pay">REC./PAY</option>
														<option <?php if($editremarkdata['RemarkType'] == "draweebank"){echo "selected";}?> value="draweebank">DRAWEE BANK</option>
														<option <?php if($editremarkdata['RemarkType'] == "staffnames"){echo "selected";}?> value="staffnames">STAFF NAMES</option>
														<option <?php if($editremarkdata['RemarkType'] == "master_mill"){echo "selected";}?> value="master_mill">MASTER(MILL)</option>
													</select>
												</div>
											</div>
										</div>
										<div class="col-md-12">
											<div class="text-xs-right">
												<button type="submit" class="btn btn-success">Submit</button>
												<a href="<?php echo base_url()?>Remark_controller" class="btn btn-info">
		                                            Cancel
		                                        </a>
											</div>
										</div>
									</div>
								</div>
								<div class="col-md-8"></div>
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
</div>
</div>

 <?php $this->load->view('common/footer'); ?>
 <script type="text/javascript">
 var inside = $("#RemarkID").val();

if(inside != "")
{
	$("#home7").removeClass('active');
	$(".nav-link").removeClass('active');
	$(".foractive").addClass('active');
	$("#editform").addClass('active');
}
</script>
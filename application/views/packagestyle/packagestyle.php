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
                <h4 class="text-themecolor">Package Style Master</h4>
			</div>
            <div class="col-md-7 align-self-center text-right">
                <div class="d-flex justify-content-end align-items-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Master</a></li>
                        <li class="breadcrumb-item active">Package Style Master</li>
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
						<li class="nav-item"> <a class="nav-link active" data-toggle="tab" href="#home7" role="tab"><span class="hidden-sm-up"><i class="ti-home"></i></span> <span class="hidden-xs-down">Package Style List</span></a> </li>
						<li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#profile7" role="tab"><span class="hidden-sm-up"><i class="ti-user"></i></span> <span class="hidden-xs-down">Add Form</span></a> </li>

						<?php
						if(!empty($editpackagedata))
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
                                                <th>Packing</th>
                                                <th>Pack Add</th>
                                                <th>BoxRate</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                           <?php
                                           $i=1;
                                           foreach ($GetPackagedata as $qGetPackagedata)
                                           {
                                           	?>
                                           	<tr>
                                           		<td class="editdelaction">
                                                    <a href="<?=base_url();?>Packagestyle_controller?packageid=<?=$qGetPackagedata->PackingID;?>" ><i class="fa fa-edit"></i></a>&nbsp;&nbsp;
                                                    <a href="javascript:deletedata('<?=$qGetPackagedata->PackingID;?>','packagedelete');"><i class="fa fa-trash-o"></i></a>
                                                </td>
                                                <td><?=$i++;?></td>
                                                <td><?=$qGetPackagedata->PackingName;?></td>
                                                <td><?=$qGetPackagedata->PackAdd;?></td>
                                                <td><?=$qGetPackagedata->BoxRate;?></td>
                                                
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
							<form method="post" name="addpackageform" id="addpackageform" novalidate>
								<?php
								if(empty($editpackagedata))
								{
									?>
										<input type="hidden" value="" id="PackingID" name="PackingID">
									<?php
								}
								?>
								<div class="row">
									<div class="col-md-12">
										<div class="row">
											<div class="col-md-4">
												<div class="form-group">
													<h5>PACKING :<span class="text-danger">*</span></h5>
													<div class="controls">
														<input type="text" name="PackingName" id="PackingName" class="form-control customvalidation"   required> 
													</div>
												</div>
											</div>
											<div class="col-md-4">
												<div class="form-group">
													<h5>PACK ADD :</h5>
													<div class="">
														<input type="text" name="PackAdd" id="PackAdd" class="form-control"> 
													</div>
												</div>
											</div>
											<div class="col-md-4">
												<div class="form-group">
													<h5>BOX RATE :</h5>
													<div class="">
														<input type="text" name="BoxRate" id="BoxRate" class="form-control"> 
													</div>
												</div>
											</div>
											<div class="col-md-12">
												<div class="text-xs-right">
													<button type="submit" class="btn btn-success">Submit</button>
													<a  href="<?php echo base_url()?>Packagestyle_controller" class="btn btn-info">
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
							if(!empty($editpackagedata))
							{
						?>
						<div class="tab-pane  p-20" id="editform" role="tabpanel">
							<form method="post" name="editpackageform" id="editpackageform" novalidate>
								<input type="hidden" id="PackingID" name="PackingID" value="<?=$editpackagedata['PackingID'];?>">
								<div class="row">
									<div class="col-md-12">
										<div class="row">
											<div class="col-md-4">
												<div class="form-group">
													<h5>PACKING :<span class="text-danger">*</span></h5>
													<div class="controls">
														<input type="text" name="PackingName" id="PackingName" value="<?=$editpackagedata['PackingName'];?>" class="form-control customvalidation"   required> 
													</div>
												</div>
											</div>
											<div class="col-md-4">
												<div class="form-group">
													<h5>PACK ADD :</h5>
													<div class="">
														<input type="text" name="PackAdd" id="PackAdd" value="<?=$editpackagedata['PackAdd'];?>" class="form-control"> 
													</div>
												</div>
											</div>
											<div class="col-md-4">
												<div class="form-group">
													<h5>BOX RATE :</h5>
													<div class="">
														<input type="text" name="BoxRate" id="BoxRate" value="<?=$editpackagedata['BoxRate'];?>" class="form-control"> 
													</div>
												</div>
											</div>
											<div class="col-md-12">
												<div class="text-xs-right">
													<button type="submit" class="btn btn-success">Submit</button>
													<a  href="<?php echo base_url()?>Packagestyle_controller" class="btn btn-info">
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
 <?php $this->load->view('common/footer'); ?>
 <script type="text/javascript">
 	var inside = $("#PackingID").val();

	if(inside != "")
	{
		$("#home7").removeClass('active');
		$(".nav-link").removeClass('active');
		$(".foractive").addClass('active');
		$("#editform").addClass('active');
	}
</script>
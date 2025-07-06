<?php $this->load->view('common/header'); ?>
<style>
    #success_message{ display: none;}
</style>
<div class="page-wrapper">
    <div class="container-fluid">
        <div class="row page-titles">
            <div class="col-md-5 align-self-center">
                <h4 class="text-themecolor">Screen Brand Master</h4>
				
            </div>
            <div class="col-md-7 align-self-center text-right">
                <div class="d-flex justify-content-end align-items-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Master</a></li>
                        <li class="breadcrumb-item active">Screen Brand Master</li>
                    </ol>
                </div>
            </div>
        </div>
		<div class="row">
			<div class="card" style="width: 100%;">
				<div class="card-body p-b-0">
					<!-- Nav tabs -->
					<ul class="nav nav-tabs customtab2" role="tablist">
						<li class="nav-item"> <a class="nav-link active" data-toggle="tab" href="#home7" role="tab"><span class="hidden-sm-up"><i class="ti-home"></i></span> <span class="hidden-xs-down">Screen Brand List</span></a> </li>
						<li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#profile7" role="tab"><span class="hidden-sm-up"><i class="ti-user"></i></span> <span class="hidden-xs-down">Add Form</span></a> </li>

						<?php
						if(!empty($editscreenBranddata))
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
												<th>Brand Name</th>
											</tr>
										</thead>
										<tbody>
											<?php 
											$i=1;
											foreach($GetScreenBrandData as $qGetScreenBrandData)
											{
												?>
												<tr>
													 <td class="editdelaction">
														<a href="<?=base_url();?>Screenbrand_controller/?accid=<?=$qGetScreenBrandData->screenBrandID;?>"  ><i class="fa fa-edit"></i></a>&nbsp;&nbsp;
														<a onclick="deletedata('<?=$qGetScreenBrandData->screenBrandID;?>','screenbranddelete');"><i class="fa fa-trash-o"></i></a>
													</td>
													<td><?=$i++?></td>
													<td><?=$qGetScreenBrandData->brandName?></td>
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
							<form action=""   method="post" name="addscreenbrandform" id="addscreenbrandform" novalidate>
								<?php
								if(empty($editscreenBranddata))
								{
									?>
										<input type="hidden" value="" id="screenBrandID" name="screenBrandID">
									<?php
								}
								?>
								<div class="row">
									<div class="col-md-12">
										<div class="row">
											<div class="col-md-6">
												<div class="form-group">
													<h5>BRAND NAME :</h5>
													<div class="controls">
														<input type="text" name="brandName" id="brandName" class="form-control customvalidation" placeholder="Enter Brand Name"  required> 
													</div>
												</div>
											</div>
											<div class="col-md-3">
												<div class="form-group">
													<h5>SHOW :</h5>
													<div class="">
														<input type="checkbox" value="1" name="ScreenShow"> 
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="col-md-4">
										<div class="text-xs-right">
											<button type="submit" class="btn btn-success">Submit</button>
											<a  href="<?php echo base_url()?>Screenbrand_controller" class="btn btn-info">Cancel</a>
										</div>
									</div>
								</div>
							</form>
						</div>
						<?php
						if(!empty($editscreenBranddata))
						{
							?>
							<div class="tab-pane  p-20" id="editform" role="tabpanel">
								<form action="" class="" method="post" name="editscreenbrandform" id="editscreenbrandform" novalidate>
									<input type="hidden" id="screenBrandID" name="screenBrandID" value="<?=$editscreenBranddata['screenBrandID']?>">
									<div class="row">
										<div class="col-md-12">
											<div class="row">
												<div class="col-md-6">
													<div class="form-group">
														<h5>BRAND NAME :</h5>
														<div class="controls">
															<input type="text" name="brandName" id="brandName" value="<?=$editscreenBranddata['brandName']?>" class="form-control customvalidation" placeholder="Enter Brand Name"  required> 
														</div>
													</div>
												</div>
												<div class="col-md-3">
													<div class="form-group">
														<h5>SHOW :</h5>
														<div class="">
															<input type="checkbox" value="1" name="ScreenShow" <?php if($editscreenBranddata['ScreenShow']=='1') { echo "selected"; }?>" value="<?=$editscreenBranddata['ScreenShow']?>"> 
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="col-md-4">
											<div class="text-xs-right">
												<button type="submit" class="btn btn-success">Submit</button>
												<a  href="<?php echo base_url()?>Screenbrand_controller" class="btn btn-info">Cancel</a>
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
  $( document ).ready(function() {
	$( ".txtName" ).keypress(function(e) {
		var key = e.keyCode;
		if (key >= 48 && key <= 57) {
			e.preventDefault();
		}
	});
});

var inside = $("#screenBrandID").val();

if(inside != "")
{
	$("#home7").removeClass('active');
	$(".nav-link").removeClass('active');
	$(".foractive").addClass('active');
	$("#editform").addClass('active');
}

 </script>

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
                <h4 class="text-themecolor">Grey Quality Master</h4>
			</div>
            <div class="col-md-7 align-self-center text-right">
                <div class="d-flex justify-content-end align-items-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?=base_url();?>">Home</a></li>
                        <!-- <li class="breadcrumb-item"><a href="javascript:void(0)">Master</a></li> -->
                        <li class="breadcrumb-item active">Grey Quality Master</li>
                    </ol>
					<!-- <a href="javascript:fun_multipleDelete();" class="btn btn-info d-none d-lg-block m-l-15"><i class="fa fa-plus-circle"></i> All Delete</a> -->
                </div>
            </div>
        </div>
		<div class="row">
			<div class="card" style="width: 100%;">
				<div class="card-body p-b-0">
					<!-- Nav tabs -->
					<ul class="nav nav-tabs customtab2" role="tablist">
						<li class="nav-item"> <a class="nav-link active" data-toggle="tab" href="#home7" role="tab"><span class="hidden-sm-up"><i class="ti-home"></i></span> <span class="hidden-xs-down">Grey Quality List</span></a> </li>
						<li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#profile7" role="tab"><span class="hidden-sm-up"><i class="ti-user"></i></span> <span class="hidden-xs-down">Add Form</span></a> </li>
						<?php
						if(!empty($editgreyqualitydata))
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
							<div class="table-responsive">
                                <table id="example23" class="display nowrap table table-hover table-striped table-bordered" cellspacing="0" width="100%">
                                    <thead>
                                        <tr>
                                            <th>Action</th>
                                            <th>Sr. No.</th>
                                            <th>Grey Quality</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                    	<?php
                                    	$i=1;
                                    	foreach ($greyqualitydata as $value)
                                    	{
                                    		?>
                                    		<tr>
                                    			<td class="editdelaction">
                                                	<a href="<?=base_url();?>GreyQuality_controller/?qreyqualityid=<?=$value->QualityID?>"><i class="fa fa-edit"></i></a>&nbsp;&nbsp;
                                                	<a href="javascript:deletedata('<?=$value->QualityID?>','greyqtydelete');"><i class="fa fa-trash-o"></i></a>
                                            	</td>
                                            	<td><?=$i++?></td>
                                            	<td><?=$value->GreyQuality?></td>
                                        	</tr>
                                    		<?php
                                    	}
                                    	?>
                                        
                                       
                                    </tbody>
                                </table>
                            </div>
						</div>
						<div class="tab-pane  p-20" id="profile7" role="tabpanel">
							<form  method="post" name="addgreyqutform" id="addgreyqutform" novalidate>
								<?php
								if(empty($editgreyqualitydata))
								{
									?>
									<input type="hidden" value="" id="QualityID" name="QualityID">
									<?php
								}
								?>
								<div class="row">
									<div class="form-group">
										<h5>Grey Quality <span class="text-danger">*</span></h5>
										<div class="controls">
											<input type="text" name="GreyQuality" id="GreyQuality" placeholder="Enter Grey Quality" class="form-control customvalidation"  required> 
										</div>
									</div>
								</div>
								<div class="row">
									<div class="text-xs-right">
										<button type="submit" class="btn btn-success">Submit</button>
										<a  href="<?php echo base_url()?>GreyQuality_controller" class="btn btn-info">
	                                        Cancel
	                                    </a>
									</div>
								</div>
							</form>								
						</div>
					</div>
					<?php
					if(!empty($editgreyqualitydata))
					{
					?>
					<div class="tab-pane" id="editform" role="tabpanel">
						<form class="m-t-40" method="post" name="editgreyqutform" id="editgreyqutform" novalidate>
							<input type="hidden" value="<?=$editgreyqualitydata['QualityID']?>" id="QualityID" name="QualityID">
							<div class="row">
								<div class="form-group">
									<h5>Grey Quality <span class="text-danger">*</span></h5>
									<div class="controls">
										<input type="text" name="GreyQuality" id="GreyQuality" value="<?=$editgreyqualitydata['GreyQuality'];?>" placeholder="Enter Grey Quality" class="form-control customvalidation"  required> 
									</div>
								</div>
							</div>
							<div class="col-md-6"></div>
							<div class="row">
								<div class="text-xs-right">
									<button type="submit" class="btn btn-success">Submit</button>
									<a  href="<?php echo base_url()?>GreyQuality_controller" class="btn btn-info">
                                        Cancel
                                    </a>
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
 <?php $this->load->view('common/footer'); ?>
<script type="text/javascript">
var inside = $("#QualityID").val();

if(inside != "")
{
	$("#home7").removeClass('active');
	$(".nav-link").removeClass('active');
	$(".foractive").addClass('active');
	$("#editform").addClass('active');
}
</script>
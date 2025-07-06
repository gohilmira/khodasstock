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
                <h4 class="text-themecolor">Category Master</h4>
			</div>
            <div class="col-md-7 align-self-center text-right">
                <div class="d-flex justify-content-end align-items-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?=base_url();?>">Home</a></li>
                        <li class="breadcrumb-item active">Category Master</li>
                    </ol>
                </div>
            </div>
        </div>
		<div class="row">
			<div class="card" style="width: 100%;">
				<div class="card-body p-b-0">
					<!-- Nav tabs -->
					<ul class="nav nav-tabs customtab2" role="tablist">
						<li class="nav-item"> <a class="nav-link active" data-toggle="tab" href="#home7" role="tab"><span class="hidden-sm-up"><i class="ti-home"></i></span> <span class="hidden-xs-down">Category List</span></a> </li>
						<li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#profile7" role="tab"><span class="hidden-sm-up"><i class="ti-user"></i></span> <span class="hidden-xs-down">Add Form</span></a> </li>
						<?php
						if(!empty($editcategrydata))
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
                                                <th>Category</th>
                                                <th>Rate</th>
                                                <th>Category Code</th>
                                                <th>Category Type</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        	<?php
                                        	$i=1;
                                        	foreach ($GetCategoryData as $qGetCategoryData)
                                        	{
                                        	?>
                                    		<tr>
                                    			<td class="editdelaction">
                                                    <a href="<?=base_url();?>Category_controller/?catid=<?=$qGetCategoryData->CategoryID?>"><i class="fa fa-edit"></i></a>&nbsp;&nbsp;
                                                    
                                                    <a href="javascript:deletedata('<?=$qGetCategoryData->CategoryID?>','categorydelete');"><i class="fa fa-trash-o"></i></a>
                                                </td>
                                                <td><?=$i++?></td>
                                                <td><?=$qGetCategoryData->CategoryName?></td>
                                                <td><?=$qGetCategoryData->CategoryRate?></td>
                                                <td><?=$qGetCategoryData->CategoryCode?></td>
                                                <td><?=$qGetCategoryData->CategoryType?></td>
                                                
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
							<form class="" method="post" name="addcategoryform" id="addcategoryform" novalidate>
								<?php
								if(empty($editcategrydata))
								{
									?>
										<input type="hidden" value="" id="CategoryID" name="CategoryID">
										<?php
									}
								?>
								<div class="row">
									<div class="col-md-12">
										<div class="row">
											<div class="col-md-3">
												<div class="form-group">
													<h5>Category Name :<span class="text-danger">*</span></h5>
													<div class="controls">
														<input type="text" name="CategoryName" id="CategoryName" placeholder="Enter Category" class="form-control customvalidation"  required> 
													</div>
												</div>
											</div>
											<div class="col-md-3">
												<div class="form-group">
													<h5>Rate :</h5>
													<div class="">
														<input type="text" name="CategoryRate" id="CategoryRate" class="form-control" placeholder="Enter Rate"> 
													</div>
												</div>
											</div>

											<div class="col-md-3">											

												<div class="form-group">
													<h5>Category Code :</h5>
													<div class="">
														<input type="text" id="CategoryCode"  name="CategoryCode" class="form-control" placeholder="Category Code"> 
													</div>
												</div>
											</div>
											<div class="col-md-3">
												<div class="form-group">
													<h5>Category Type :</h5>
													<div class="">
														<input type="text" name="CategoryType" placeholder="Category Type" id="CategoryType" class="form-control"> 
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="col-md-6"></div>
									
								</div>
								<div class="row">
									<div class="text-xs-right">
										<button type="submit" class="btn btn-success">Submit</button>
										<a  href="<?php echo base_url()?>Category_controller" class="btn btn-info">
                                                    Cancel
                                                </a>
									</div>

								</div>
							</form>								
						</div>
						<?php
						if(!empty($editcategrydata))
						{
						?>

						<div class="tab-pane  p-20" id="editform" role="tabpanel">
							<form class="" method="post" name="editcategoryform" id="editcategoryform" novalidate>
								<input type="hidden" value="<?=$editcategrydata['CategoryID']?>" id="CategoryID" name="CategoryID">
								<div class="row">
									<div class="col-md-12">
										<div class="row">
											<div class="col-md-3">
												<div class="form-group">
													<h5>Category Name :<span class="text-danger">*</span></h5>
													<div class="controls">
														<input type="text" name="CategoryName" id="CategoryName" placeholder="Enter Category" value="<?=$editcategrydata['CategoryName']?>" class="form-control customvalidation"  required> 
													</div>
												</div>
											</div>
											<div class="col-md-3">
												<div class="form-group">
													<h5>Rate :</h5>
													<div class="">
														<input type="text" name="CategoryRate" id="CategoryRate" value="<?=$editcategrydata['CategoryRate']?>" class="form-control" placeholder="Enter Rate"> 
													</div>
												</div>
											</div>

											<div class="col-md-3">											

												<div class="form-group">
													<h5>Category Code :</h5>
													<div class="">
														<input type="text" id="CategoryCode"  name="CategoryCode" class="form-control" value="<?=$editcategrydata['CategoryCode']?>" placeholder="Category Code"> 
													</div>
												</div>
											</div>
											<div class="col-md-3">
												<div class="form-group">
													<h5>Category Type :</h5>
													<div class="">
														<input type="text" name="CategoryType" placeholder="Category Type" id="CategoryType" value="<?=$editcategrydata['CategoryType']?>" class="form-control"> 
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="col-md-6"></div>
									
								</div>
								<div class="row">
									<div class="text-xs-right">
										<button type="submit" class="btn btn-success">Submit</button>
										<a  href="<?php echo base_url()?>Category_controller" class="btn btn-info">
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
</div>
 <?php $this->load->view('common/footer'); ?>
<script type="text/javascript">
var inside = $("#CategoryID").val();

if(inside != "")
{
	$("#home7").removeClass('active');
	$(".nav-link").removeClass('active');
	$(".foractive").addClass('active');
	$("#editform").addClass('active');
}
</script>
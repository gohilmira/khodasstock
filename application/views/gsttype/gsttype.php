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
                <h4 class="text-themecolor">GST Type Master</h4>
			</div>
            <div class="col-md-7 align-self-center text-right">
                <div class="d-flex justify-content-end align-items-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?=base_url();?>">Home</a></li>
                        <!-- <li class="breadcrumb-item"><a href="javascript:void(0)">Master</a></li> -->
                        <li class="breadcrumb-item active">GST Type Master</li>
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
						<li class="nav-item"> <a class="nav-link active" data-toggle="tab" href="#home7" role="tab"><span class="hidden-sm-up"><i class="ti-home"></i></span> <span class="hidden-xs-down">GST Type List</span></a> </li>
						<li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#profile7" role="tab"><span class="hidden-sm-up"><i class="ti-user"></i></span> <span class="hidden-xs-down">Add Form</span></a> </li>

						<?php

						if(!empty($editgsttypedata))
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
                                                <th>GstType</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                           <?php
                                           $i=1;
                                           foreach ($gsttypedata as $gsttypekvalue)
                                           {
                                           		?>
                                           		<tr>
                                           			<td class="editdelaction">
                                                    	<a href="<?=base_url();?>GstType_controller/?gsttypeid=<?=$gsttypekvalue->GsttypeID;?>"><i class="fa fa-edit"></i></a>&nbsp;&nbsp;
                                                    
                                                   	<a href="javascript:deletedata('<?=$gsttypekvalue->GsttypeID;?>','gsttypedelete');"><i class="fa fa-trash-o"></i></a>
                                                	</td>
                                           		<td><?=$i++;?></td>
                                           		<td><?=$gsttypekvalue->GstTypeName;?></td>
                                           		
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
						<div class="tab-pane" id="profile7" role="tabpanel">
							<form action="" method="post" class="" method="post" name="addgsttypeform" id="addgsttypeform" novalidate>
								

								<?php
								if(empty($editgsttypedata))
								{
									?>
									<input type="hidden" name="gsttypeid" id="gsttypeid" value="">
									<?php
								}
								?>
								<div class="row">
									<div class="col-md-4">
										<div class="row">
											<div class="col-md-12">
												<div class="form-group">
													<h5>GST Type  <span class="text-danger">*</span></h5>
													<div class="controls">
														<input type="text" name="GstTypeName" id="GstTypeName" class="form-control customvalidation" placeholder="Enter GST Type" placeholder="Enter GST Type"  required> 
													</div>
												</div>
											</div>
											
											<div class="col-md-12">
												<div class="text-xs-right">
													<button type="submit" class="btn btn-success">Submit</button>
													<a href="<?php echo base_url()?>GstType_controller" class="btn btn-info">
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
						if(!empty($editgsttypedata))
						{
						?>
							<div class="tab-pane" id="editform" role="tabpanel">

							<form class="" method="post" name="editgsttypeform" id="editgsttypeform" novalidate>
								<input type="hidden" value="<?=$editgsttypedata['GsttypeID']?>" id="GsttypeID" name="GsttypeID">

								<div class="row">
									<div class="col-md-4">
										<div class="row">
											<div class="col-md-12">
												<div class="form-group">
													<h5>Gst Type Name<span class="text-danger">*</span></h5>
													<div class="controls">
														<input type="text" value="<?=$editgsttypedata['GstTypeName']?>" name="GstTypeName" id="GstTypeName" class="form-control customvalidation" placeholder="Enter GstTypeName"  required data-validation-required-message="This field is required"> 
													</div>
												</div>
											</div>
											
											<div class="col-md-12">
												<div class="text-xs-right">
													<button type="submit" class="btn btn-success">Submit</button>
													<a href="<?php echo base_url()?>GstType_controller" class="btn btn-info">
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
 var inside = $("#gsttypeid").val();

if(inside != "")
{
	$("#home7").removeClass('active');
	$(".nav-link").removeClass('active');
	$(".foractive").addClass('active');
	$("#editform").addClass('active');
}
</script>
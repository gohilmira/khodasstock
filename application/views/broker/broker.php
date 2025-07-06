
<?php 
$brokerID=$this->input->post('brokerID')?$this->input->post('brokerID'):'0';
$brokerName=$this->input->post('brokerName')?$this->input->post('brokerName'):'';
$brokerAddress=$this->input->post('brokerAddress')?$this->input->post('brokerAddress'):'';
$brokerContact=$this->input->post('brokerContact')?$this->input->post('brokerContact'):'';
$isActive=$this->input->post('isActive')?$this->input->post('isActive'):'';

if($brokerID != NULL && $brokerID >0)
{
	if(isset($getsinglebroker))
	{
		foreach($getsinglebroker as $getsinglebrokerdata)
		{
			$brokerName=$getsinglebrokerdata[0]->brokerName;
			$brokerAddress=$getsinglebrokerdata[0]->brokerAddress;
			$brokerContact=$getsinglebrokerdata[0]->brokerContact;
			$isActive=$getsinglebrokerdata[0]->isActive;
		}
	}
}


?>
<?php $this->load->view('common/header'); ?>
<?php $this->load->view('broker/broker-js');?>
<style>
    #success_message{ display: none;}
</style>

<div class="page-wrapper">
    <div class="container-fluid">
	
	
        <div class="row page-titles">
            <div class="col-md-5 align-self-center">
                <h4 class="text-themecolor">Broker Master</h4>
				
            </div>
            <div class="col-md-7 align-self-center text-right">
                <div class="d-flex justify-content-end align-items-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Master</a></li>
                        <li class="breadcrumb-item active">Broker Master</li>
                    </ol>
					<!--<a href="javascript:fun_edit(0);" class="btn btn-info d-none d-lg-block m-l-15"><i class="fa fa-plus-circle"></i> Create New</a>-->
                    <a href="javascript:fun_multipleDelete();" class="btn btn-info d-none d-lg-block m-l-15"><i class="fa fa-plus-circle"></i> All Delete</a>
                </div>
            </div>
        </div>
		
		
		<div class="row">
			<div class="card" style="width: 100%;">
				<div class="card-body p-b-0">
				
					<!-- Nav tabs -->
					<ul class="nav nav-tabs customtab2" role="tablist">
						<li class="nav-item"> <a class="nav-link active" data-toggle="tab" href="#home7" role="tab"><span class="hidden-sm-up"><i class="ti-home"></i></span> <span class="hidden-xs-down">Market List</span></a> </li>
						<li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#profile7" role="tab"><span class="hidden-sm-up"><i class="ti-user"></i></span> <span class="hidden-xs-down">Add Form</span></a> </li>
					</ul>
					<!-- Tab panes -->
					<div class="tab-content">
						<div class="tab-pane active" id="home7" role="tabpanel">
							<div class="p-20">
							<form  name="frm_broker_list" method="post" action="<?php echo base_url();?>Broker_controller/index">
							<input type="hidden" value="<?php echo $brokerID; ?>" name="brokerID" />
							 <input type="hidden" name="method" value="" /> 
								<div class="table-responsive">
                                    <table id="example23" class="display nowrap table table-hover table-striped table-bordered" cellspacing="0" width="100%">
                                        <thead>
                                            <tr>
                                                <th><input type="checkbox" name="checkall" id= "checkall" value=""  /> Checkbox</th>
                                                <th>Broker Name</th>
                                                <th>Address</th>
                                                <th>Contact No.</th>
                                                <th>CreateDate</th>
                                                <th>Is Active</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php 
                                            foreach($getallbroker as $getallbrokerdata)
                                            {
                                            ?>
                                            <tr id="ID_<?php echo $getallbrokerdata->brokerID; ?>">
                                                <td><input class="checkbox" name="checkUncheck[]"  id="checkAllAuto" value="<?php echo $getallbrokerdata->brokerID; ?>" type="checkbox" /></td>
                                                <td><?php echo $getallbrokerdata->brokerName; ?></td>
                                                <td><?php echo $getallbrokerdata->brokerAddress; ?></td>
                                                <td><?php echo $getallbrokerdata->brokerContact; ?></td>
                                                <td><?php echo $getallbrokerdata->createDate; ?></td>
                                               <td>
												<a href="javascript:fun_single_status(<?php echo $getallbrokerdata->brokerID; ?>);">
													<span id="broker_<?php echo $getallbrokerdata->brokerID; ?>">
														<?php if($getallbrokerdata->isActive==1){ echo"Active"; }else{ echo"Inactive";} ?>
													</span>
												</a>
                                                </td>
                                                <td class="editdelaction">
                                                    <a href="javascript:fun_edit(<?php echo 
                                                    $getallbrokerdata->brokerID; ?>);" ><i class="fa fa-edit"></i></a>&nbsp;&nbsp;
                                                    
                                                    <a href="javascript:fun_single_delete(<?php echo $getallbrokerdata->brokerID; ?>);"><i class="fa fa-trash-o"></i></a>
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
								<form action="<?php echo base_url() ?>Broker_controller/saveuser" class="m-t-40" method="post" name="addform" novalidate>
									<div class="row">
										<div class="col-md-4">
											<div class="form-group">
												<h5>Broker Name <span class="text-danger">*</span></h5>
												<div class="controls">
													<input type="text" name="brokerName" value="<?php echo $brokerName; ?>" class="form-control txtName" id="txtName"  required data-validation-required-message="This field is required"> 
													<input type="hidden" name="brokerID" value="<?php echo $brokerID; ?>">
												</div>
											</div>
											<div class="form-group">
												<h5>Broker Address <span class="text-danger">*</span></h5>
												<div class="controls">
													<input type="text" name="brokerAddress" class="form-control" value="<?php echo $brokerAddress; ?>" required data-validation-required-message="This field is required"> 
												</div>
											</div>
											<div class="form-group">
												<h5>Broker Contact No. <span class="text-danger">*</span></h5>
												<div class="controls" id="staticParent">
													<input type="text" name="brokerContact" id="child" maxlength="10" class="form-control" value="<?php echo $brokerContact; ?>" maxlength="10" required data-validation-required-message="This field is required"> 
												</div>
											</div>

											 <div class="form-group" >
	                                              <input type="checkbox" value="1"  name="isActive" > isActive?
	                                        </div>
	                                        <div class="form-group">
		                                        <div class="text-xs-right">
													<button type="submit" class="btn btn-info">Submit</button>
												</div>
											</div>		

										</div>	
									</div>	
								</form>
						
						</div>
					</div>
				</div>
			</div>
		</div>

            
				
          


       
    </div>
</div>
 <?php $this->load->view('common/footer'); ?>

   <script>
    $(function() {
  $('#staticParent').on('keydown', '#child', function(e){-1!==$.inArray(e.keyCode,[46,8,9,27,13,110])||(/65|67|86|88/.test(e.keyCode)&&(e.ctrlKey===true||e.metaKey===true))&&(!0===e.ctrlKey||!0===e.metaKey)||35<=e.keyCode&&40>=e.keyCode||(e.shiftKey||48>e.keyCode||57<e.keyCode)&&(96>e.keyCode||105<e.keyCode)&&e.preventDefault()});
})

  $( document ).ready(function() {
	$( ".txtName" ).keypress(function(e) {
		var key = e.keyCode;
		if (key >= 48 && key <= 57) {
			e.preventDefault();
		}
	});
});
 </script>
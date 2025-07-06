
<?php 
$marketID=$this->input->post('marketID')?$this->input->post('marketID'):'0';
$marketName=$this->input->post('marketName')?$this->input->post('marketName'):'';
$isActive=$this->input->post('isActive')?$this->input->post('isActive'):'';

if($marketID != NULL && $marketID >0)
{
	if(isset($getsinglemarket))
	{
		foreach($getsinglemarket as $getsinglemarketdata)
		{
			$marketName=$getsinglemarketdata[0]->marketName;
			$isActive=$getsinglemarketdata[0]->isActive;
		}
	}
}


?>
<?php $this->load->view('common/header'); ?>
<?php $this->load->view('market/market-js');?>
<style>
    #success_message{ display: none;}
</style>

<div class="page-wrapper">
    <div class="container-fluid">
	
	
        <div class="row page-titles">
            <div class="col-md-5 align-self-center">
                <h4 class="text-themecolor">Market Master</h4>
				
            </div>
            <div class="col-md-7 align-self-center text-right">
                <div class="d-flex justify-content-end align-items-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Master</a></li>
                        <li class="breadcrumb-item active">Market Master</li>
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
							<form  name="frm_market_list" method="post" action="<?php echo base_url();?>Market_controller/index">
							<input type="hidden" value="<?php echo $marketID; ?>" name="marketID" />
							 <input type="hidden" name="method" value="" /> 
								<div class="table-responsive">
                                    <table id="example23" class="display nowrap table table-hover table-striped table-bordered" cellspacing="0" width="100%">
                                        <thead>
                                            <tr>
                                                <th><input type="checkbox" name="checkall" id= "checkall" value=""  /> Checkbox</th>
                                                <th>Market Name</th>
                                                <th>CreateDate</th>
                                                <th>Is Active</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php 
                                            foreach($getallmarket as $getallmarketdata)
                                            {
                                            ?>
                                            <tr id="ID_<?php echo $getallmarketdata->marketID; ?>">
                                                <td><input class="checkbox" name="checkUncheck[]"  id="checkAllAuto" value="<?php echo $getallmarketdata->marketID; ?>" type="checkbox" /></td>
                                                <td><?php echo $getallmarketdata->marketName; ?></td>
                                                <td><?php echo $getallmarketdata->createDate; ?></td>
                                               <td>
		<a href="javascript:fun_single_status(<?php echo $getallmarketdata->marketID; ?>);">
			<span id="market_<?php echo $getallmarketdata->marketID; ?>">
				<?php if($getallmarketdata->isActive==1){ echo"Active"; }else{ echo"Inactive";} ?>
			</span>
		</a>
                                                </td>
                                                <td class="editdelaction">
                                                    <a href="javascript:fun_edit(<?php echo 
                                                    $getallmarketdata->marketID; ?>);" ><i class="fa fa-edit"></i></a>&nbsp;&nbsp;
                                                    
                                                    <a href="javascript:fun_single_delete(<?php echo $getallmarketdata->marketID; ?>);"><i class="fa fa-trash-o"></i></a>
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
								<form action="<?php echo base_url() ?>Market_controller/saveuser" class="m-t-40" method="post" name="addform" novalidate>
									<div class="row">
										<div class="col-md-4">
											<div class="form-group">
												<h5>Enter Market <span class="text-danger">*</span></h5>
												<div class="controls">
													<input type="text" name="marketName" class="form-control" value="<?php echo $marketName; ?>"   required data-validation-required-message="This field is required"> 
													<input type="hidden" name="marketID" value="<?php echo $marketID; ?>">
												</div>
											</div>

											 <div class="form-group" >
	                                              <input type="checkbox" value="1" <?php if($isActive==1){ echo "checked='checked'";} ?> name="isActive" > isActive?
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

 
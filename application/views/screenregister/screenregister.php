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
</style>
<div class="page-wrapper">
	<div class="container-fluid">
		<div class="row page-titles">
			<div class="col-md-5 align-self-center">
				<h4 class="text-themecolor">Screen Register Entry Master</h4>
			</div>
			<div class="col-md-7 align-self-center text-right">
				<div class="d-flex justify-content-end align-items-center">
					<ol class="breadcrumb">
						<li class="breadcrumb-item"><a href="<?=base_url();?>">Home</a></li>
						<li class="breadcrumb-item active">Item Detail Master</li>
					</ol>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="card" style="width: 100%;">
				<div class="card-body p-b-0">
					<!-- Nav tabs -->
					<ul class="nav nav-tabs customtab2" role="tablist">
						<li class="nav-item"> <a class="nav-link active" data-toggle="tab" href="#home7" role="tab"><span class="hidden-sm-up"><i class="ti-home"></i></span> <span class="hidden-xs-down">Screen Register Entry List</span></a> </li>
						<li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#profile7" role="tab"><span class="hidden-sm-up"><i class="ti-user"></i></span> <span class="hidden-xs-down">Add Form</span></a> </li>
						<?php
						if(!empty($editscreendata))
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
										    	<th>Kodas Main</th>
											    <th>Cut</th>
											    <th>Rate</th>
											    <th>Category</th>
										   		<?php
												foreach ($LabelData as $LabelValue) {
												?>
											    <th><?=$LabelValue->brandName;?></th>
											    <?php } ?>
											    <th>Packing</th>
											</tr>
										</thead>
										<tbody>
											<?php
											$journalNamedata1 = "";
											$i=1;
											foreach ($GetScreenRegisterListData as $GetScreenRegisterListData) {
											?>
											<tr>
												<td class="editdelaction">
											        <a href="javascript:deletedata('<?=$GetScreenRegisterListData->ScreenRegisterID;?>','screenregisterdelete');"><i class="fa fa-trash-o"></i></a>
											    </td>
											    <td><?=$i++;?></td>
											    <td><?=$GetScreenRegisterListData->IName;?></td>
											    <td><?=$GetScreenRegisterListData->ItemDCut;?></td>
											    <td><?=$GetScreenRegisterListData->ItemRate;?></td>
											    <td><?=$GetScreenRegisterListData->CategoryName;?></td>
										    	<?php
												foreach ($LabelData as $LabelValue1) 
												{
													$contact1=$LabelValue1->brandName;
													$journalNamedata1 = str_replace(' ', '_', $contact1);
													$datavalue=explode(" ", $journalNamedata1);
													$column = $this->db->query("SELECT $journalNamedata1 from screenregister_entry where ScreenRegisterID = '$GetScreenRegisterListData->ScreenRegisterID'")->row_array();
												?>
	    										<td><?=$column[$journalNamedata1];?></td>
												<?php  } ?>
												<td><?=$GetScreenRegisterListData->PackingName;?></td>
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
							<form action="" class="" method="post" name="addform" id="screenregisterform" novalidate>
								<?php
								if(empty($editscreendata))
								{
								?>
								<input type="hidden" value="" id="ScreenRegisterID" name="ScreenRegisterID">
								<?php
								}
								?>
								<div class="row common_master_form_div">
									<div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 ">
										<div class="formtitle">
											<h4 class="backcolor">Account Information</h4>
											<div class="row removemargin">
												<div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
													<div class="row">
														<div class="col-12 col-sm-4 col-md-2 col-lg-4 col-xl-2 d-flex ">
															<div class="form-group">
																<label>KODAS (MAIN)<span class="fored"><b>*</b></span> :</label>
															</div>
														</div>
														<div class="col-12 col-sm-8 col-md-10 col-lg-8 col-xl-10">
															<div class="form-group field">
																<div class="controls">
																	<select name="ItemdetailID" id="ItemdetailID" class="form-control customvalidation" required>
																		<option value="">--Select Category--</option>
																		<?php
																		foreach ($getItemDetailsData as $qgetItemDetailsData)
																		{
																			?>
																			<option value="<?=$qgetItemDetailsData->ItemdetailID;?>">
																				<table border="2">
																					<tr>
																						<td><?=$qgetItemDetailsData->IName;?></td>
																						<td><?=$qgetItemDetailsData->ICut;?></td>
																						<td><?=$qgetItemDetailsData->ISellingRate;?></td>
																					</tr>
																				</table>
																			</option>
																			<?php
																		}
																		?>
																	</select> 
																</div>
															</div>
														</div>
														
														<div class="col-12 col-sm-4 col-md-2 col-lg-2 col-xl-2 d-flex ">
															<div class="form-group">
																<label>CUT :</label>
															</div>
														</div>
														<div class="col-12 col-sm-8 col-md-4 col-lg-3 col-xl-4">
															<div class="form-group field"  >
																<div class="">
																	<input type="text" name="ItemDCut" id="ItemDCut"  class="form-control" placeholder="ENTER CUT"> 
																</div>
															</div>
														</div>
														
														<div class="col-12 col-sm-4 col-md-2 col-lg-3 col-xl-2 d-flex ">
															<div class="form-group">
																<label>CATEGORY :</label>
															</div>
														</div>
														<div class="col-12 col-sm-8 col-md-4 col-lg-4 col-xl-4">
															<div class="form-group field">
																<div class="">
																	<select name="CategoryID" id="CategoryID" class="form-control">
																		<option value="">--Select Category--</option>
																		<?php
																		foreach ($getCategoryData as $qgetCategoryData)
																		{
																			?>
																			<option value="<?=$qgetCategoryData->CategoryID;?>"><?=$qgetCategoryData->CategoryName;?></option>
																			<?php
																			
																		}
																		?>
																	</select>
																</div>
															</div>
														</div>
														
														<div class="col-12 col-sm-4 col-md-2 col-lg-2 col-xl-2 d-flex ">
															<div class="form-group">
																<label>RATE :</label>
															</div>
														</div>
														<div class="col-12 col-sm-8 col-md-4 col-lg-3 col-xl-4">
															<div class="form-group field"  >
																<div class="">
																	<input type="text" name="ItemRate" id="ItemRate"  class="form-control" placeholder="ENTER RATE"> 
																</div>
															</div>
														</div>
														
														<div class="col-12 col-sm-4 col-md-2 col-lg-3 col-xl-2 d-flex ">
															<div class="form-group">
																<label>PACKING :</label>
															</div>
														</div>
														<div class="col-12 col-sm-8 col-md-4 col-lg-4 col-xl-4">
															<div class="form-group field"  >
																<div class="">
																	<select name="PackingID" id="PackingID" class="form-control">
																		<option value="">--Select Category--</option>
																		<?php
																		foreach ($getPackingData as $qgetPackingData)
																		{
																			?>
																			<option value="<?=$qgetPackingData->PackingID;?>"><?=$qgetPackingData->PackingName;?></option>
																			<?php
																		}
																		?>
																	</select>  
																</div>
															</div>
														</div>

														<div class="col-12 col-sm-4 col-md-2 col-lg-3 col-xl-2 d-flex ">
															<div class="form-group">
																<label>WORK CUT :</label>
															</div>
														</div>
														<div class="col-12 col-sm-8 col-md-4 col-lg-6 col-xl-4">
															<div class="form-group field">
																<div class="">
																	<input type="text" name="ItemWorkCut" id="ItemWorkCut"  class="form-control" placeholder="ENTER WORK CUT"> 
																</div>
															</div>
														</div>

													</div>
												</div>
												<div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
													<div class="row">
														<?php
															foreach ($LabelData as $LabelValue) {
														?>
															<div class="col-12 col-sm-4 col-md-2 col-lg-4 col-xl-2 d-flex ">
																<div class="form-group">
																	<label><?=$LabelValue->brandName;?> :</label>
																</div>
															</div>
															<?php 
															$journalName = str_replace(' ', '_', $LabelValue->brandName);
															?>
															<div class="col-12 col-sm-8 col-md-10 col-lg-8 col-xl-10">
																<div class="form-group field">
																	<div class="">
																		<select name="<?php echo $journalName ?>" id="<?php echo $journalName ?>" class="form-control">
																				<option value="">--Select Category--</option>
																				<table border="2">
																					<tr>
																				<?php
																				foreach ($getItemDetailsData as $qgetItemDetailsData)
																				{
																					?>
																						<option value="<?=$qgetItemDetailsData->IName;?>">
																						
																							<td><?=$qgetItemDetailsData->IName;?></td>
																							<td><?=$qgetItemDetailsData->ICut;?></td>
																							<td><?=$qgetItemDetailsData->ISellingRate;?></td>
																						</option>
																					
																					<?php
																				}
																				?>
																				</tr>
																			</table>
																	</select>
																	</div>
																</div>
															</div>
														<?php } ?>
													</div>
												</div>
											</div>	
										</div>
										<div class="row">
											<div class="form-group">
												<div class="text-xs-right" style="margin-left: 8px;">
													<button type="submit" class="btn btn-success">Submit</button>
													<a  href="<?php echo base_url()?>Screenregister_controller" class="btn btn-info">Cancel</a>
												</div>
											</div>
										</div>
									</div>	
								</div>
							</form>
						</div>
						<!-- <?php
						if(!empty($editscreendata))
						{
						?>
						<div class="tab-pane  p-20" id="editform" role="tabpanel">
							<form action="" class="" method="post" name="editscreenform" id="editscreenform" novalidate>
								<input type="hidden" value="<?=$editscreendata['ScreenRegisterID']?>" id="screenid" name="editscreenid">
								<div class="row common_master_form_div">
									<div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 ">
										<div class="formtitle">
											<h4 class="backcolor">Account Information</h4>
											<div class="row removemargin">
												<div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
													<div class="row">
														<div class="col-12 col-sm-4 col-md-2 col-lg-2 col-xl-2 d-flex ">
															<div class="form-group">
																<label>KODAS (MAIN)<span class="fored"><b>*</b></span> :</label>
															</div>
														</div>
														<div class="col-12 col-sm-8 col-md-10 col-lg-10 col-xl-10">
															<div class="form-group field">
																<div class="controls">
																	<input type="text" name="kodasmain" id="kodasmain" class="form-control"  placeholder="ENTER KODAS (MAIN)"  required data-validation-required-message="This field is required" value="<?=$editscreendata['KodasMain']?>"> 
																</div>
															</div>
														</div>
														<div class="col-12 col-sm-4 col-md-2 col-lg-2 col-xl-2 d-flex ">
															<div class="form-group">
																<label>CUT<span class="fored"><b>*</b></span> :</label>
															</div>
														</div>
														<div class="col-12 col-sm-8 col-md-4 col-lg-4 col-xl-4">
															<div class="form-group field"  >
																<div class="controls">
																	<input type="text" name="cut" id="cut"  class="form-control" placeholder="ENTER CUT"  required data-validation-required-message="This field is required" value="<?=$editscreendata['Cut']?>"> 
																</div>
															</div>
														</div>
														<div class="col-12 col-sm-4 col-md-2 col-lg-2 col-xl-2 d-flex ">
															<div class="form-group">
																<label>CATEGORY<span class="fored"><b>*</b></span> :</label>
															</div>
														</div>
														<div class="col-12 col-sm-8 col-md-4 col-lg-4 col-xl-4">
															<div class="form-group field">
																<div class="controls">
																	<select name="category" id="category" required class="form-control">

																		<option value="">--Select Category--</option>
																		<?php
																		foreach ($categorydata as $categoryvalue)
																		{
																			?>
																			<option 

																			<?php
																			if($editscreendata['Category'] == $categoryvalue->CategoryID)
																			{
																				echo "selected";
																			}
																			?>	 value="<?=$categoryvalue->CategoryID;?>"><?=$categoryvalue->Category;?></option>
																			<?php
																			
																		}
																		?>
																	</select>
																</div>
															</div>
														</div>
														<div class="col-12 col-sm-4 col-md-2 col-lg-2 col-xl-2 d-flex ">
															<div class="form-group">
																<label>RATE<span class="fored"><b>*</b></span> :</label>
															</div>
														</div>
														<div class="col-12 col-sm-8 col-md-4 col-lg-4 col-xl-4">
															<div class="form-group field"  >
																<div class="controls">
																	<input type="text" name="rate" id="rate"  class="form-control" placeholder="ENTER RATE"  required data-validation-required-message="This field is required" value="<?=$editscreendata['Rate']?>"> 
																</div>
															</div>
														</div>
														<div class="col-12 col-sm-4 col-md-2 col-lg-2 col-xl-2 d-flex ">
															<div class="form-group">
																<label>4 MATCHING<span class="fored"><b>*</b></span> :</label>
															</div>
														</div>
														<div class="col-12 col-sm-8 col-md-4 col-lg-4 col-xl-4">
															<div class="form-group field">
																<div class="controls">
																	<input type="text" name="matching" id="matching"  class="form-control" placeholder="ENTER 4 MATCHING"  required data-validation-required-message="This field is required" value="<?=$editscreendata['FourMatching']?>"> 
																</div>
															</div>
														</div>
														<div class="col-12 col-sm-4 col-md-2 col-lg-2 col-xl-2 d-flex ">
															<div class="form-group">
																<label>KODAS (THELY)<span class="fored"><b>*</b></span> :</label>
															</div>
														</div>
														<div class="col-12 col-sm-8 col-md-4 col-lg-4 col-xl-4">
															<div class="form-group field"  >
																<div class="controls">
																	<input type="text" name="kodasthely"  id="kodasthely" class="form-control" placeholder="ENTER KODAS (THELY)"  required data-validation-required-message="This field is required" value="<?=$editscreendata['KodasThely']?>"> 
																</div>
															</div>
														</div>
														<div class="col-12 col-sm-4 col-md-2 col-lg-2 col-xl-2 d-flex ">
															<div class="form-group">
																<label>BIG BOX<span class="fored"><b>*</b></span> :</label>
															</div>
														</div>
														<div class="col-12 col-sm-8 col-md-4 col-lg-4 col-xl-4">
															<div class="form-group field">
																<div class="controls">
																	<input type="text" name="bigbox" id="bigbox"  class="form-control" placeholder="ENTER BIG BOX"  required data-validation-required-message="This field is required" value="<?=$editscreendata['BigBox']?>"> 
																</div>
															</div>
														</div>
													</div>
												</div>
												<div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
													<div class="row">
														<div class="col-12 col-sm-4 col-md-2 col-lg-2 col-xl-2 d-flex ">
															<div class="form-group">
																<label>KODAS 2<span class="fored"><b>*</b></span> :</label>
															</div>
														</div>
														<div class="col-12 col-sm-8 col-md-10 col-lg-10 col-xl-10">
															<div class="form-group field">
																<div class="controls">
																	<input type="text" name="kodastwo" id="kodastwo" class="form-control"  placeholder="ENTER KODAS 2"  required data-validation-required-message="This field is required" value="<?=$editscreendata['Kodas2']?>"> 
																</div>
															</div>
														</div>
														<div class="col-12 col-sm-4 col-md-2 col-lg-2 col-xl-2 d-flex ">
															<div class="form-group">
																<label>SCREEN 6<span class="fored"><b>*</b></span> :</label>
															</div>
														</div>
														<div class="col-12 col-sm-8 col-md-4 col-lg-4 col-xl-4">
															<div class="form-group field">
																<div class="controls">
																	<input type="text" name="screensix" id="screensix"  class="form-control" placeholder="ENTER SCREEN 6"  required data-validation-required-message="This field is required" value="<?=$editscreendata['Screen6']?>"> 
																</div>
															</div>
														</div>
														
														<div class="col-12 col-sm-4 col-md-2 col-lg-2 col-xl-2 d-flex ">
															<div class="form-group">
																<label>SCREEN 7<span class="fored"><b>*</b></span> :</label>
															</div>
														</div>
														<div class="col-12 col-sm-8 col-md-4 col-lg-4 col-xl-4">
															<div class="form-group field">
																<div class="controls">
																	<input type="text" name="screenseven" id="screenseven"  class="form-control" placeholder="ENTER SCREEN 7"  required data-validation-required-message="This field is required" value="<?=$editscreendata['Screen7']?>"> 
																</div>
															</div>
														</div>
														
															<div class="col-12 col-sm-4 col-md-2 col-lg-2 col-xl-2 d-flex ">
															<div class="form-group">
																<label>PACKING<span class="fored"><b>*</b></span> :</label>
															</div>
														</div>
														<div class="col-12 col-sm-8 col-md-4 col-lg-4 col-xl-4">
															<div class="form-group field"  >
																<div class="controls">
																	<input type="text" name="packing" id="packing"  class="form-control" placeholder="ENTER PACKING"  required data-validation-required-message="This field is required" value="<?=$editscreendata['Packing']?>"> 
																</div>
															</div>
														</div>
														
														<div class="col-12 col-sm-4 col-md-2 col-lg-2 col-xl-2 d-flex ">
															<div class="form-group">
																<label>WORK CUT<span class="fored"><b>*</b></span> :</label>
															</div>
														</div>
														<div class="col-12 col-sm-8 col-md-4 col-lg-4 col-xl-4">
															<div class="form-group field">
																<div class="controls">
																	<input type="text" name="workcut" id="workcut"  class="form-control" placeholder="ENTER WORK CUT"  required data-validation-required-message="This field is required" value="<?=$editscreendata['WorkCut']?>"> 
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>	
										</div>
										<div class="row">
											<div class="form-group">
												<div class="text-xs-right" style="margin-left: 8px;">
													<button type="submit" class="btn btn-success">Submit</button>
													<a  href="<?php echo base_url()?>Screenregister_controller" class="btn btn-info">
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
						}
						?> -->
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<?php $this->load->view('common/footer'); ?>
<script>

	$( "#ItemdetailID" ).change(function(){
		var singleValues = $(this).val();
		$.ajax({
	    url: base_url+'Transaction_controller/GetCutData',
	    data: {singleValues:singleValues},
	    type: 'POST',
	      success: function(data){
	            var obj = jQuery.parseJSON(data);
	            $("#ItemDCut").val(obj.ICut);
	            $("#ItemRate").val(obj.ISellingRate);
	            $("#ItemWorkCut").val(obj.IWorkCut);
	            $("#CategoryID").val(obj.PackingID);
	            $("#PackingID").val(obj.CategoryID);
	          
	          }
	    });
	});


	var inside = $("#ScreenRegisterID").val();

	if(inside != "")
	{
	$("#home7").removeClass('active');
	$(".nav-link").removeClass('active');
	$(".foractive").addClass('active');
	$("#editform").addClass('active');
	}
</script>


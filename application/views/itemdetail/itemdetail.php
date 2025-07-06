<?php $this->load->view('common/header'); 

if (($recordcount)>0)
{
	$ItemsrNo=$recordcount + 1;
}
else
{
	$ItemsrNo=1;
}


?>
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


    	<!-- Add Screen Series Data Start -->
    	<div id="AddNewScreenSeriesmdl" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
		    <div class="modal-dialog modal-lg">
		        <div class="modal-content">
		            <div class="modal-header">
		                <h4 class="modal-title">Screen Brand Data</h4>
		                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
		            </div>
		            <div class="modal-body">
		            	<form class="" method="post" name="addScreenBrandForm" id="addScreenBrandForm" novalidate>
		            		<input type="hidden" value="" id="screenBrandID" name="screenBrandID">
							<div class="row common_master_form_div">
								<div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 ">
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
									<div class="row">
										<div class="form-group">
											<div class="text-xs-right" style="margin-left: 8px;">
												<button type="submit" class="btn btn-success">Submit</button>
												<button type="button" class="btn btn-default waves-effect mdlcloseScreenBrand" data-dismiss="modal">Close</button>
											</div>
										</div>
									</div>
								</div>	
							</div>
						</form>
					</div>
		        </div>
		    </div>
		    <div id="responsive-modal-qty" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
		    	<div class="modal-dialog modal-lg">
		        	<div class="modal-content">
		            	<div class="modal-header">
		                	<h4 class="modal-title">Modal Content is Responsive</h4>
		                	<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
		           		</div>
			            <div class="modal-body"></div>
		           	</div>
				</div>
		 	</div>
		</div>
    	<!-- Add Screen Series Data End -->
    	<!-- Add Screen Series Data Start -->
    	<div id="AddNewScreenSeriesmdl1" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
		    <div class="modal-dialog modal-lg">
		        <div class="modal-content">
		            <div class="modal-header">
		                <h4 class="modal-title">Screen Brand Data</h4>
		                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
		            </div>
		            <div class="modal-body">
		            	<form class="" method="post" name="addScreenBrandForm1" id="addScreenBrandForm1" novalidate>
		            		<input type="hidden" value="" id="screenBrandID" name="screenBrandID">
							<div class="row common_master_form_div">
								<div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 ">
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
									<div class="row">
										<div class="form-group">
											<div class="text-xs-right" style="margin-left: 8px;">
												<button type="submit" class="btn btn-success">Submit</button>
												<button type="button" class="btn btn-default waves-effect mdlcloseScreenBrand1" data-dismiss="modal">Close</button>
											</div>
										</div>
									</div>
								</div>	
							</div>
						</form>
					</div>
		        </div>
		    </div>
		    <div id="responsive-modal-qty" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
		    	<div class="modal-dialog modal-lg">
		        	<div class="modal-content">
		            	<div class="modal-header">
		                	<h4 class="modal-title">Modal Content is Responsive</h4>
		                	<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
		           		</div>
			            <div class="modal-body"></div>
		           	</div>
				</div>
		 	</div>
		</div>

		<!--  Add New Station Data Start -->
    	<div id="AddNewStationmdl1" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
		    <div class="modal-dialog">
		        <div class="modal-content">
		        	<form  action="" class="" method="post" name="AddStationmdl1" id="AddStationmdl1" novalidate>
			            <div class="modal-header">
			                <h4 class="modal-title">QR Code Master</h4>
			                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
			            </div>
			            <div class="modal-body">
			            	<input type="hidden" name="qr_id" id="qr_id" value="">
			               	<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<h5>QR Code Master</h5>
										<div class="controls">
											<input type="text" name="QRCode" id="QRCode" required="" class="form-control customvalidation"  value="" placeholder="Enter QR Code"> 
										</div>
									</div>
								</div>
							</div>
			            </div>
			            <div class="modal-footer">
			                <button type="button" class="btn btn-default waves-effect mdlcloseStation1" data-dismiss="modal">Close</button>
			               	<button type="submit" class="btn btn-success">Submit</button>
			            </div>
		        </form>
		        </div>
		    </div>
		</div>
    	<!--  Add New Station Data End -->

  <div class="row page-titles">
            <div class="col-md-5 align-self-center">
                <h4 class="text-themecolor">Item Detail Master</h4>
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
						<li class="nav-item"> <a class="nav-link active" data-toggle="tab" href="#home7" role="tab"><span class="hidden-sm-up"><i class="ti-home"></i></span> <span class="hidden-xs-down">Item Detail List</span></a> </li>
						<li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#profile7" role="tab"><span class="hidden-sm-up"><i class="ti-user"></i></span> <span class="hidden-xs-down">Add Form</span></a> </li>

						<?php
						if(!empty($editactypedetails))
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
                                                <th>Profile</th>
                                                <th>Item Name</th>
                                                <th>Item QRCode</th>
                                                <th>Cut</th>
                                                <th>Selling Rate</th>
                                                <th>Current Stock</th>
                                                <th>Created Date</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        	<?php
                                        	$i=1;
                                        	foreach ($getItemDetailsListData as $qgetItemDetailsListData)
                                        	{
                                    		?>
                                    		<tr>
                                    			<td class="editdelaction">
                                                    <a href="<?=base_url();?>Itemdetail_controller?itemid=<?=$qgetItemDetailsListData->ItemdetailID;?>" ><i class="fa fa-edit"></i></a>&nbsp;&nbsp;
                                                    
                                                    <a href="javascript:deletedata('<?=$qgetItemDetailsListData->ItemdetailID	;?>','itemdetaildelete');"><i class="fa fa-trash-o"></i></a>
                                                </td>
                                        		<td><?=$i++;?></td>
                                        		
                                        		<td><?php
                                        		if($qgetItemDetailsListData->Product_Profile != "")
                                        		{
                                        			?>
                                        			<img height="100px" width="80px" src="<?=base_url()?>uploads/<?=$qgetItemDetailsListData->Product_Profile;?>">
                                        			<?php
                                        		}
                                        		else
                                        		{
                                        			?>
                                        			<img height="100px" width="80px" src="<?=base_url()?>assets/images/kodas_icon.png">
                                        			<?php
                                        		}
                                        		?>
                                        			
                                        		</td>
                                        		<td><?=$qgetItemDetailsListData->IName;?></td>
                                        		<td><img height="100px" width="80px" src="<?=base_url()?>assets/images/<?=$qgetItemDetailsListData->QRImage;?>"></td>
                                        		<td><?=$qgetItemDetailsListData->ICut;?></td>
                                        		<td><?=$qgetItemDetailsListData->ISellingRate;?></td>
                                                <td>
                                                    <?php
                                                    $stock_details = $this->db->query("SELECT * from stock_details where Item_Id = '$qgetItemDetailsListData->ItemdetailID'")->result();

//                                                  $stock_details = $this->db->query("SELECT * FROM stock_details
//                                                        INNER JOIN size_number ON stock_details.Size_Number_Id = size_number.Size_Number_Id
//                                                        INNER JOIN size_character ON stock_details.Size_Character_Id = size_character.Size_Character_Id
//                                                        INNER JOIN color ON stock_details.Color_Id = color.Color_Id AND stock_details.Item_Id = '$qgetItemDetailsListData->ItemdetailID'")->result();

                                                   if(sizeof($stock_details) > 0)
                                                   {
                                                       foreach ($stock_details as $stock_detailsval)
                                                       {
                                                           ?>
                                                               Size Number : <?=idtoname('size_number',$stock_detailsval->Size_Number_Id);?>,
                                                               Size Alphabet: <?=idtoname('size_character',$stock_detailsval->Size_Character_Id);?>,
                                                               Color: <?=idtoname('color',$stock_detailsval->Color_Id);?>,
                                                               Stock: <?=$stock_detailsval->Stock;?>,
                                                               <br>
                                                            <?php
                                                       }
                                                   }
                                                    ?>
                                                </td>
                                                <td><?=$qgetItemDetailsListData->CreateDate;?></td>
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
							<form action="" class="" method="post" name="additemdetailform" id="additemdetailform" novalidate>
								<?php
									if(empty($editactypedetails))
									{
									?>
										<input type="hidden" name="ItemdetailID" id="ItemdetailID" value="">
									<?php
									}
								?>
								<div class="row common_master_form_div">
									<div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 ">
										<div class="formtitle">
											<h4 class="backcolor">Account Information</h4>
											<div class="row removemargin">

												<input type="hidden" name="forrowcount" id="forrowcount" class="forrowcount" value="1">

												<div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
													 <div class="card">
							                            <div class="card-body">
							                             
							                                <input type="file" id="input-file-now-custom-1" name="input-file-now-custom-1" class="dropify" data-default-file="<?=base_url();?>assets/images/kodas_icon.png" />
							                            </div>
							                        </div>
												</div>
												
												<div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
													<div class="row">

														<div class="col-12 col-sm-4 col-md-2 col-lg-2 col-xl-2 d-flex ">
															<div class="form-group">
																<label>CODE :</label>
															</div>
														</div>
														<div class="col-12 col-sm-8 col-md-4 col-lg-3 col-xl-4">
															<div class="form-group field">
																<div class="">
																	<input type="text" name="ICode" id="ICode"  class="form-control" placeholder="ENTER CODE" > 
																</div>
															</div>
														</div>
														
														<div class="col-12 col-sm-4 col-md-2 col-lg-3 col-xl-2 d-flex ">
															<div class="form-group">
																<label>ITEM SRNO. :</label>
															</div>
														</div>
														<div class="col-12 col-sm-8 col-md-4 col-lg-4 col-xl-4">
															<div class="form-group field">
																<div class="">
																	<input type="text" name="ItemsrNo" id="ItemsrNo" value="<?php echo $ItemsrNo; ?>" class="form-control" placeholder="ENTER ITEM SRNO."> 
																</div>
															</div>
														</div>
														
														<div class="col-12 col-sm-4 col-md-2 col-lg-2 col-xl-2 d-flex ">
															<div class="form-group">
																<label>NAME<span class="fored"><b>*</b></span> :</label>
															</div>
														</div>

														<div class="col-12 col-sm-8 col-md-10 col-lg-10 col-xl-10">
															<div class="form-group field">
																<div class="controls">
																	<input type="text" name="IName" class="customvalidation form-control customvalidation" id="IName" placeholder="ENTER NAME"  required> 
																</div>
															</div>
														</div>
														
														<div class="col-12 col-sm-4 col-md-2 col-lg-3 col-xl-2 d-flex ">
															<div class="form-group">
																<label>QR Code :</label>
															</div>
														</div>
														<div class="col-12 col-sm-8 col-md-10 col-lg-8 col-xl-10">
															<div class="form-group field">
																<div class="">
																	<select name="qr_id" id="StationIDData1"  class="Stationselect form-control custom-select" style="width: 100%">
																	<option value=""> --Select -- </option>
																	<?php 
																	foreach($getStationData1 as $qgetStationData1)
																	{
																	?>
																	<option value="<?php echo $qgetStationData1->qr_id; ?>"> <?php echo $qgetStationData1->QRCode; ?></option>
																	<?php 
																	}
																	?>
																	</select>
																</div>
															</div>
														</div>
														<div class="col-12 col-sm-2 col-md-2 col-lg-1 col-xl-2">
															<i data-toggle="modal" data-target="#AddNewStationmdl1" class="fa fa-plus-circle"></i>
														</div>

														<div class="col-12 col-sm-4 col-md-2 col-lg-3 col-xl-2 d-flex ">
															<div class="form-group">
																<label>MAIN SCREEN :</label>
															</div>
														</div>
														<div class="col-12 col-sm-8 col-md-10 col-lg-8 col-xl-10">
															<div class="form-group field">
																<div class="">
																	<select name="IMainScreenID" id="SeriesIDData"  class="Seriesselect form-control custom-select" style="width: 100%">
																		<option value=""> --Select -- </option>
																		<?php
																		foreach ($LabelData as $qLabelData)
																		{
																			?>
																			<option value="<?=$qLabelData->screenBrandID?>"><?=$qLabelData->brandName?></option>
																			<?php
																		}
																		?>
																	</select>
																</div>
															</div>
														</div>
														<div class="col-12 col-sm-2 col-md-2 col-lg-1 col-xl-2">
															<i data-toggle="modal" data-target="#AddNewScreenSeriesmdl" class="fa fa-plus-circle"></i>
														</div>
														<div class="col-12 col-sm-4 col-md-2 col-lg-2 col-xl-2 d-flex ">
															<div class="form-group">
																<label>CUT :</label>
															</div>
														</div>
														<div class="col-12 col-sm-8 col-md-4 col-lg-3 col-xl-4">
															<div class="form-group field" >
																<div class="">
																	<input type="text" name="ICut" id="ICut" class="form-control" placeholder="0.00"> 
																</div>
															</div>
														</div>
														
														<div class="col-12 col-sm-4 col-md-2 col-lg-2 col-xl-2 d-flex ">
															<div class="form-group">
																<label>PACKING :</label>
															</div>
														</div>
														<div class="col-12 col-sm-8 col-md-4 col-lg-5 col-xl-4">
															<div class="form-group field" >
																<div class="">
																	<select name="PackingID" id="PackingID"class="Packingselect form-control custom-select" style="width: 100%">
																		<option value=""> --Select -- </option>
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
														
														<div class="col-12 col-sm-4 col-md-2 col-lg-4 col-xl-2 d-flex ">
															<div class="form-group">
																<label>GREY QUALITY  :</label>
															</div>
														</div>
														<div class="col-12 col-sm-8 col-md-10 col-lg-8 col-xl-10">
															<div class="form-group field">
																<div class="">
																	<select name="GrayQualityID" id="GrayQualityID" class="GreyQualityselect form-control custom-select" style="width: 100%">
																		<option value=""> --Select -- </option>
																			<?php
																			foreach ($getQualityData as $qgetQualityData)
																			{
																				?>
																				<option value="<?=$qgetQualityData->QualityID;?>"> <?=$qgetQualityData->GreyQuality;?> </option>
																				<?php
																			}
																			?>
																		
																	</select>
																</div>
															</div>
														</div>
														
														<div class="col-12 col-sm-4 col-md-2 col-lg-2 col-xl-2 d-flex ">
															<div class="form-group">
																<label>TYPE :</label>
															</div>
														</div>
														<div class="col-12 col-sm-8 col-md-4 col-lg-3 col-xl-4">
															<div class="form-group field" >
																<div class="">
																	<select name="IItemTypeID" id="IItemTypeID" class="form-control">
																		<option value=""> --Select -- </option>
																		<option value="FINISH"> FINISH </option>
																		<option value="GRAY"> GRAY </option>
																		<option value="GENRAL"> GENRAL </option>
																	</select>
																</div>
															</div>
														</div>
														<div class="col-12 col-sm-4 col-md-2 col-lg-3 col-xl-2 d-flex ">
															<div class="form-group">
																<label>ITEM TYPE :</label>
															</div>
														</div>
														<div class="col-12 col-sm-8 col-md-4 col-lg-4 col-xl-4">
															<div class="form-group field" >
																<div class="">
																	<select name="ItemTypeID" id="ItemTypeID" class="ItemTypeselect form-control custom-select" style="width: 100%">
																		<option value=""> --Select -- </option>
																			<?php
																			foreach ($getItemTypeData as $qgetItemTypeData)
																			{
																				?>
																				<option value="<?=$qgetItemTypeData->ItemTypeID;?>"><?=$qgetItemTypeData->ClothType;?></option>
																				<?php
																			}
																			?>
																	</select>
																</div>
															</div>
														</div>
														
														<div class="col-12 col-sm-4 col-md-2 col-lg-4 col-xl-2 d-flex ">
															<div class="form-group">
																<label>SCREEN SERIE :</label>
															</div>
														</div>
														<div class="col-12 col-sm-8 col-md-10 col-lg-7 col-xl-10">
															<div class="form-group field">
																<div class="">
																	<select name="ScreenSeriesID" id="ScreenSeriesID1" id="SeriesID1Data"  class="SeriesselectData form-control custom-select" style="width: 100%">
																		<option value=""> --Select -- </option>
																		<?php
																		foreach ($LabelData as $qLabelData)
																		{
																			?>
																			<option value="<?=$qLabelData->screenBrandID?>"><?=$qLabelData->brandName?></option>
																			<?php
																		}
																		?>
																	</select>
																	</select>
																</div>
															</div>
														</div>
														<div class="col-12 col-sm-2 col-md-2 col-lg-1 col-xl-2">
															<i data-toggle="modal" data-target="#AddNewScreenSeriesmdl1" class="fa fa-plus-circle"></i>
														</div>
													</div>
												</div>
												<div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
													<div class="row">
														<div class="col-12 col-sm-4 col-md-2 col-lg-3 col-xl-2 d-flex ">
															<div class="form-group">
																<label>CATEGORY :</label>
															</div>
														</div>
														<div class="col-12 col-sm-8 col-md-10 col-lg-9 col-xl-10">
															<div class="form-group field">
																<div class="">
																	<select name="CategoryID" id="CategoryID" class="Categoryselect form-control custom-select" style="width: 100%">
																		<option value=""> --Select -- </option>
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
														<div class="col-12 col-sm-4 col-md-2 col-lg-3 col-xl-2 d-flex ">
															<div class="form-group">
																<label>SELLING RATE :</label>
															</div>
														</div>
														<div class="col-12 col-sm-8 col-md-4 col-lg-4 col-xl-4">
															<div class="form-group field" >
																<div class="">
																	<input type="text" name="ISellingRate" id="ISellingRate"  class="form-control" placeholder="0.00"> 
																</div>
															</div>
														</div>
														<div class="col-12 col-sm-4 col-md-2 col-lg-2 col-xl-2 d-flex ">
															<div class="form-group">
																<label>UNIT :</label>
															</div>
														</div>
														<div class="col-12 col-sm-8 col-md-4 col-lg-3 col-xl-4">
															<div class="form-group field" >
																<div class="">
																	<select name="IUnit" id="IUnit" class="form-control">
																		<option value=""> --Select -- </option>
																		<option value="PCS"> PCS </option>
																		<option value="NTS"> NTS </option>
																		<option value="KAD"> KAD </option>
																		<option value="OTHER"> OTHER </option>
																		<option value="SUIT"> SUIT </option>
																	</select>
																</div>
															</div>
														</div>
														<div class="col-12 col-sm-4 col-md-2 col-lg-2 col-xl-2 d-flex ">
															<div class="form-group">
																<label>RATE 2 :</label>
															</div>
														</div>
														<div class="col-12 col-sm-8 col-md-4 col-lg-4 col-xl-4">
															<div class="form-group field"  >
																<div class="">
																	<input type="text" name="IRate2" id="IRate2" class="form-control" placeholder="0.00"> 
																</div>
															</div>
														</div>
														
														<div class="col-12 col-sm-4 col-md-2 col-lg-2 col-xl-2 d-flex ">
															<div class="form-group">
																<label>RATE 3 :</label>
															</div>
														</div>
														<div class="col-12 col-sm-8 col-md-4 col-lg-4 col-xl-4">
															<div class="form-group field">
																<div class="">
																	<input type="text" name="IRate3" id="IRate3" class="form-control" placeholder="0.00"> 
																</div>
															</div>
														</div>
														
														<div class="col-12 col-sm-4 col-md-2 col-lg-3 col-xl-2 d-flex ">
															<div class="form-group">
																<label>SELECTED  : </label>
															</div>
														</div>
														<div class="col-12 col-sm-8 col-md-4 col-lg-2 col-xl-4">
															<div class="form-group field">
																<div class="">
																	<input type="checkbox" id="ISelected" name="ISelected" value="1">
																</div>
															</div>
														</div>

														<div class="col-12 col-sm-4 col-md-2 col-lg-3 col-xl-2 d-flex ">
															<div class="form-group">
																<label>WORK CUT :</label>
															</div>
														</div>
														<div class="col-12 col-sm-8 col-md-4 col-lg-4 col-xl-4">
															<div class="form-group field">
																<div class="">
																	<input type="text" name="IWorkCut" id="IWorkCut" class="form-control" placeholder="ENTER WORK CUT"> 
																</div>
															</div>
														</div>
														
														<div class="col-12 col-sm-4 col-md-3 col-lg-5 col-xl-3 d-flex">
															<div class="form-group">
																<label>PACK+CUT+BOX COST :</label>
															</div>
														</div>
														<div class="col-12 col-sm-8 col-md-9 col-lg-7 col-xl-9">
															<div class="form-group field">
																<div class="">
																	<input type="text"  name="IPackCutCost" id="IPackCutCost" placeholder="0.00" class="form-control"> 
																</div>
															</div>
														</div>
														
														<div class="col-12 col-sm-4 col-md-3 col-lg-5 col-xl-3 d-flex">
															<div class="form-group">
																<label>SALE RATE MU% :</label>
															</div>
														</div>
														<div class="col-12 col-sm-8 col-md-9 col-lg-7 col-xl-9">
															<div class="form-group field">
																<div class="">
																	<input type="text" name="ISaleRate" id="ISaleRate" placeholder="ENTER SALE RATE MU%" class="form-control"> 
																</div>
															</div>
														</div>
														<div class="col-12 col-sm-4 col-md-2 col-lg-3 col-xl-2 d-flex ">
															<div class="form-group">
																<label>HSN/SAC :</label>
															</div>
														</div>
														<div class="col-12 col-sm-8 col-md-4 col-lg-3 col-xl-4">
															<div class="form-group field"  >
																<div class="">
																	<input type="text" name="IHsn" id="IHsn" class="form-control" placeholder="ENTER HSN/SAC"> 
																</div>
															</div>
														</div>
														
														<div class="col-12 col-sm-4 col-md-2 col-lg-2 col-xl-2 d-flex ">
															<div class="form-group">
																<label>GST % :</label>
															</div>
														</div>
														<div class="col-12 col-sm-8 col-md-4 col-lg-4 col-xl-4">
															<div class="form-group field"  >
																<div class="">
																	<input type="text" name="IGst" id="IGst" class="form-control" placeholder="0.00"> 
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>	
										</div>	

										<table id="additemstock" class="table additemstock" style="width: 100%;">
									    <thead>
									        <tr>
									            <td>Size Number</td>
									            <td>Size Character</td>
                                                <td>Color</td>
                                                <!-- <td>Stock</td> -->
									        </tr>
									    </thead>
									    <tbody>
									       	<tr id="additemtr0" class="additemtr0">
									       	 	<td style="padding: 0.2rem !important;">
									            	<select name="sizenumber[]" id="sizenumber0"  class="form-control custom-select sizenumber0" style="width: 100%">
									            		<option value=""> --Select Size Number -- </option>
									            		<?php
									            		foreach ($getsizenumberdata as $value)
									            		{
									            			?>
									            			<option value="<?=$value->Size_Number_Id;?>"><?=$value->Size_Number_Name;?></option>
									            			<?php
									            		}
									            		?>
													</select>
									        	</td>
									        	<td style="padding: 0.2rem !important;">
									            	<select name="sizecharacter[]" id="sizecharacter0"  class="form-control custom-select sizecharacter0" style="width: 100%">
														<option value=""> --Select Size Character -- </option>
														<?php
									            		foreach ($getsizecharacterdata as $value)
									            		{
									            			?>
									            			<option value="<?=$value->Size_Character_Id;?>"><?=$value->Size_Character_Name;?></option>
									            			<?php
									            		}
									            		?>
													</select>
									        	</td>
                                                <td style="padding: 0.2rem !important;">
                                                    <select name="color[]" id="color0"  class="form-control custom-select color0" style="width: 100%">
                                                        <option value=""> --Select Color -- </option>
                                                        <?php
                                                        foreach ($getcolordata as $value)
                                                        {
                                                            ?>
                                                            <option value="<?=$value->Color_Id;?>"><?=$value->Color_Name;?></option>
                                                            <?php
                                                        }
                                                        ?>
                                                    </select>
                                                </td>
									        	<td style="padding: 0.2rem !important;">
									            	<input type="text" name="stock[]" id="stock0" class="form-control stock0" placeholder="Stock" value="" />
									        	</td>



									        	<td style="padding: 0.2rem !important;"><input type="button" onclick="deleteitem(0);" class="btn btn-md btn-danger" value="Delete"></td>

									        	
											</tr>
									    </tbody>
									    <tfoot>
									    	<input type="hidden" class="countdata" id="countdata" name="countdata" value="1">
									        <tr>
									            <td colspan="16" style="text-align: left;">
									                <input type="button" class="btn btn-lg btn-block" id="" onclick="additemstock();" value="Add Row" />
									            </td>
									        </tr>
									        <tr>
									        </tr>
									    </tfoot>
										</table>

										<div class="row">
											<div class="form-group">
												<div class="text-xs-right" style="margin-left: 8px;">
													<button type="submit" class="btn btn-success">Submit</button>
													<a href="<?=base_url();?>Itemdetail_controller" class="btn btn-info">Cancel</a>
												</div>
											</div>
										</div>
								
									</div>	
								</div>
							</form>
								
						</div>
						<?php
							if(!empty($editactypedetails))
							{
							?>
							<!-- <input type="hidden" value="inside" id="inside"> -->
							<div class="tab-pane  p-20" id="editform" role="tabpanel">
								<form action="" class="" method="post" name="edititemdetailform" id="edititemdetailform" novalidate>
									<input type="hidden" name="ItemdetailID" id="ItemdetailID" value="<?=$editactypedetails['ItemdetailID'];?>">
									<div class="row common_master_form_div">
										<div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 ">
											<div class="formtitle">
												<h4 class="backcolor">Account Information</h4>
                                                <?php
                                                $ItemdetailID = $editactypedetails['ItemdetailID'];
                                                $stock_details = $this->db->query("SELECT * from stock_details where Item_Id = '$ItemdetailID'")->result();
                                                ?>
												<input type="hidden" name="forrowcount" id="forrowcount" class="forrowcount editforrowcount" value="<?=sizeof($stock_details);?>">
												<div class="row removemargin">

													<div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
													 <div class="card">
							                            <div class="card-body">

                                                            <?php
                                                            if($editactypedetails['Product_Profile'] == "")
                                                            {
                                                                ?>
                                                                <input type="file" id="input-file-now-custom-1" name="input-file-now-custom-1" class="dropify" data-default-file="<?=base_url();?>assets/images/kodas_icon.png" />
                                                                <?php
                                                            }
                                                            else
                                                            {
                                                                ?>
                                                                <input type="file" id="input-file-now-custom-1" name="input-file-now-custom-1" class="dropify" data-default-file="<?=base_url();?>uploads/<?=$editactypedetails['Product_Profile'];?>" />
                                                                <?php
                                                            }

                                                            ?>

							                            </div>
							                        </div>
												</div>

													<div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
														<div class="row">
															<div class="col-12 col-sm-4 col-md-2 col-lg-2 col-xl-2 d-flex ">
																<div class="form-group">
																	<label>CODE :</label>
																</div>
															</div>
															<div class="col-12 col-sm-8 col-md-4 col-lg-3 col-xl-4">
																<div class="form-group field">
																	<div class="">
																		<input type="text" name="ICode" id="ICode" value="<?=$editactypedetails['ICode'];?>"  class="form-control" placeholder="ENTER CODE" > 
																	</div>
																</div>
															</div>
															
															<div class="col-12 col-sm-4 col-md-2 col-lg-3 col-xl-2 d-flex ">
																<div class="form-group">
																	<label>ITEM SRNO. :</label>
																</div>
															</div>
															<div class="col-12 col-sm-8 col-md-4 col-lg-4 col-xl-4">
																<div class="form-group field">
																	<div class="">
																		<input type="text" name="ItemsrNo" id="ItemsrNo" value="<?=$editactypedetails['ItemsrNo'];?>" class="form-control" placeholder="ENTER ITEM SRNO."> 
																	</div>
																</div>
															</div>
															
															<div class="col-12 col-sm-4 col-md-2 col-lg-2 col-xl-2 d-flex ">
																<div class="form-group">
																	<label>NAME<span class="fored"><b>*</b></span> :</label>
																</div>
															</div>
															<div class="col-12 col-sm-8 col-md-10 col-lg-10 col-xl-10">
																<div class="form-group field">
																	<div class="controls">
																		<input type="text" name="IName" class="customvalidation form-control customvalidation" value="<?=$editactypedetails['IName'];?>" id="IName" placeholder="ENTER NAME"  required> 
																	</div>
																</div>
															</div>
															
															
															<div class="col-12 col-sm-4 col-md-2 col-lg-3 col-xl-2 d-flex ">
																<div class="form-group">
																	<label>MAIN SCREEN :</label>
																</div>
															</div>
															<div class="col-12 col-sm-8 col-md-10 col-lg-9 col-xl-10">
																<div class="form-group field">
																	<div class="">
																		<select name="IMainScreenID" id="IMainScreenID" class="Seriesselect form-control custom-select" style="width: 100%">
																			<option value=""> --Select -- </option>
																			<?php
																			foreach ($getScreenRegisterData as $qgetScreenRegisterData)
																			{
																				?>
																				<option <?php if($editactypedetails['IMainScreenID'] == $qgetScreenRegisterData->ScreenRegisterID){echo "selected";}?> value="<?=$qgetScreenRegisterData->ScreenRegisterID ?>"> <?=$qgetScreenRegisterData->IName?> </option>
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
																<div class="form-group field" >
																	<div class="">
																		<input type="text" name="ICut" id="ICut" value="<?=$editactypedetails['ICut'];?>" class="form-control" placeholder="0.00"> 
																	</div>
																</div>
															</div>
															
															<div class="col-12 col-sm-4 col-md-2 col-lg-2 col-xl-2 d-flex ">
																<div class="form-group">
																	<label>PACKING :</label>
																</div>
															</div>
															<div class="col-12 col-sm-8 col-md-4 col-lg-5 col-xl-4">
																<div class="form-group field" >
																	<div class="">
																		<select name="PackingID" id="PackingID" class="Packingselectselect form-control custom-select" style="width: 100%">
																			<option value=""> --Select -- </option>
																			<?php
																			foreach ($getPackingData as $qgetPackingData)
																			{
																				?>
																				<option <?php if($editactypedetails['PackingID'] == $qgetPackingData->PackingID){echo "selected";}?> value="<?=$qgetPackingData->PackingID ?>"> <?=$qgetPackingData->PackingName?> </option>
																				<?php	
																			}
																			?>
																		</select>
																	</div>
																</div>
															</div>
															
															<div class="col-12 col-sm-4 col-md-2 col-lg-4 col-xl-2 d-flex ">
																<div class="form-group">
																	<label>GREY QUALITY  :</label>
																</div>
															</div>
															<div class="col-12 col-sm-8 col-md-10 col-lg-8 col-xl-10">
																<div class="form-group field">
																	<div class="">
																		<select name="GrayQualityID" id="GrayQualityID" class="GreyQualityselect form-control custom-select" style="width: 100%">
																			<option value=""> --Select -- </option>
																				<?php
																				foreach ($getQualityData as $qgetQualityData)
																				{
																					?>
																					<option <?php if($editactypedetails['GrayQualityID'] == $qgetQualityData->QualityID){echo "selected";}?> value="<?=$qgetQualityData->QualityID ?>"> <?=$qgetQualityData->GreyQuality?> </option>
																					<?php
																				}
																				?>
																			
																		</select>
																	</div>
																</div>
															</div>
															
															<div class="col-12 col-sm-4 col-md-2 col-lg-2 col-xl-2 d-flex ">
																<div class="form-group">
																	<label>TYPE :</label>
																</div>
															</div>
															<div class="col-12 col-sm-8 col-md-4 col-lg-3 col-xl-4">
																<div class="form-group field" >
																	<div class="">
																		<select name="IItemTypeID" id="IItemTypeID" class="form-control">
																			<option value=""> --Select -- </option>
																			<option <?php if($editactypedetails['IItemTypeID'] == "FINISH"){echo "selected";}?>  value="FINISH"> FINISH </option>
																			<option <?php if($editactypedetails['IItemTypeID'] == "GRAY"){echo "selected";}?> value="GRAY"> GRAY </option>
																			<option <?php if($editactypedetails['IItemTypeID'] == "GENERAL"){echo "selected";}?> value="GENERAL"> GENRAL </option>
																		</select>
																	</div>
																</div>
															</div>
															<div class="col-12 col-sm-4 col-md-2 col-lg-3 col-xl-2 d-flex ">
																<div class="form-group">
																	<label>ITEM TYPE :</label>
																</div>
															</div>
															<div class="col-12 col-sm-8 col-md-4 col-lg-4 col-xl-4">
																<div class="form-group field" >
																	<div class="">
																		<select name="ItemTypeID" id="ItemTypeID" class="ItemTypeselect form-control custom-select" style="width: 100%">
																			<option value=""> --Select -- </option>
																				<?php
																				foreach ($getItemTypeData as $qgetItemTypeData)
																				{
																					?>
																					<option <?php if($editactypedetails['ItemTypeID'] == $qgetItemTypeData->ItemTypeID){echo "selected";}?> value="<?=$qgetItemTypeData->ItemTypeID ?>"> <?=$qgetItemTypeData->ClothType?> </option>
																					<?php
																				}
																				?>
																		</select>
																	</div>
																</div>
															</div>
															
															<div class="col-12 col-sm-4 col-md-2 col-lg-4 col-xl-2 d-flex ">
																<div class="form-group">
																	<label>SCREEN SERIE :</label>
																</div>
															</div>
															<div class="col-12 col-sm-8 col-md-10 col-lg-8 col-xl-10">
																<div class="form-group field">
																	<div class="">
																		<select name="ScreenSeriesID" id="ScreenSeriesID" class="SeriesselectData form-control custom-select" style="width: 100%">
																			<option value=""> --Select -- </option>
																		<?php
																		foreach ($LabelData as $qLabelData)
																		{
																			?>
																			<option value="<?=$qLabelData->screenBrandID?>"><?=$qLabelData->brandName?></option>
																			<?php
																		}
																		?>
																		</select>
																	</div>
																</div>
															</div>
															
														</div>
													</div>
													<div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
														<div class="row">
															<div class="col-12 col-sm-4 col-md-2 col-lg-3 col-xl-2 d-flex ">
																<div class="form-group">
																	<label>CATEGORY :</label>
																</div>
															</div>
															<div class="col-12 col-sm-8 col-md-10 col-lg-9 col-xl-10">
																<div class="form-group field">
																	<div class="">
																		<select name="CategoryID" id="CategoryID" class="Categoryselect form-control custom-select" style="width: 100%">
																			<option value=""> --Select -- </option>
																			<?php
																			foreach ($getCategoryData as $qgetCategoryData)
																			{
																				?>
																				<option <?php if($editactypedetails['CategoryID'] == $qgetCategoryData->CategoryID){echo "selected";}?> value="<?=$qgetCategoryData->CategoryID ?>"> <?=$qgetCategoryData->CategoryName?> </option>
																				<?php
																			}
																			?>
																		</select>
																	</div>
																</div>
															</div>
															<div class="col-12 col-sm-4 col-md-2 col-lg-3 col-xl-2 d-flex ">
																<div class="form-group">
																	<label>SELLING RATE :</label>
																</div>
															</div>
															<div class="col-12 col-sm-8 col-md-4 col-lg-4 col-xl-4">
																<div class="form-group field" >
																	<div class="">
																		<input type="text" name="ISellingRate" id="ISellingRate" value="<?=$editactypedetails['ISellingRate'];?>"  class="form-control" placeholder="0.00"> 
																	</div>
																</div>
															</div>
															<div class="col-12 col-sm-4 col-md-2 col-lg-2 col-xl-2 d-flex ">
																<div class="form-group">
																	<label>UNIT :</label>
																</div>
															</div>
															<div class="col-12 col-sm-8 col-md-4 col-lg-3 col-xl-4">
																<div class="form-group field" >
																	<div class="">
																		<select name="IUnit" id="IUnit" class="form-control">
																			<option value=""> --Select -- </option>
																			<option <?php if($editactypedetails['IUnit'] == "PCS"){echo "selected";}?>  value="PCS"> PCS </option>
																			<option <?php if($editactypedetails['IUnit'] == "NTS"){echo "selected";}?> value="NTS"> NTS </option>
																			<option <?php if($editactypedetails['IUnit'] == "KAD"){echo "selected";}?> value="KAD"> KAD </option>
																			<option <?php if($editactypedetails['IUnit'] == "OTHER"){echo "selected";}?> value="OTHER"> OTHER </option>
																			<option <?php if($editactypedetails['IUnit'] == "SUIT"){echo "selected";}?> value="SUIT"> SUIT </option>
																		</select>
																	</div>
																</div>
															</div>
															<div class="col-12 col-sm-4 col-md-2 col-lg-2 col-xl-2 d-flex ">
																<div class="form-group">
																	<label>RATE 2 :</label>
																</div>
															</div>
															<div class="col-12 col-sm-8 col-md-4 col-lg-4 col-xl-4">
																<div class="form-group field"  >
																	<div class="">
																		<input type="text" name="IRate2" id="IRate2" value="<?=$editactypedetails['IRate2'];?>" class="form-control" placeholder="0.00"> 
																	</div>
																</div>
															</div>
															
															<div class="col-12 col-sm-4 col-md-2 col-lg-2 col-xl-2 d-flex ">
																<div class="form-group">
																	<label>RATE 3 :</label>
																</div>
															</div>
															<div class="col-12 col-sm-8 col-md-4 col-lg-4 col-xl-4">
																<div class="form-group field">
																	<div class="">
																		<input type="text" name="IRate3" id="IRate3" value="<?=$editactypedetails['IRate3'];?>" class="form-control" placeholder="0.00"> 
																	</div>
																</div>
															</div>
															
															<div class="col-12 col-sm-4 col-md-2 col-lg-3 col-xl-2 d-flex ">
																<div class="form-group">
																	<label>SELECTED  : </label>
																</div>
															</div>
															<div class="col-12 col-sm-8 col-md-4 col-lg-2 col-xl-4">
																<div class="form-group field">
																	<div class="">
																		<input type="checkbox" id="ISelected" name="ISelected" value="1">
																	</div>
																</div>
															</div>

															<div class="col-12 col-sm-4 col-md-2 col-lg-3 col-xl-2 d-flex ">
																<div class="form-group">
																	<label>WORK CUT :</label>
																</div>
															</div>
															<div class="col-12 col-sm-8 col-md-4 col-lg-4 col-xl-4">
																<div class="form-group field">
																	<div class="">
																		<input type="text" name="IWorkCut" id="IWorkCut" value="<?=$editactypedetails['IWorkCut'];?>" class="form-control" placeholder="ENTER WORK CUT"> 
																	</div>
																</div>
															</div>
															
															<div class="col-12 col-sm-4 col-md-3 col-lg-5 col-xl-3 d-flex">
																<div class="form-group">
																	<label>PACK+CUT+BOX COST :</label>
																</div>
															</div>
															<div class="col-12 col-sm-8 col-md-9 col-lg-7 col-xl-9">
																<div class="form-group field">
																	<div class="">
																		<input type="text"  name="IPackCutCost" id="IPackCutCost" value="<?=$editactypedetails['IPackCutCost'];?>" placeholder="0.00" class="form-control"> 
																	</div>
																</div>
															</div>
															
															<div class="col-12 col-sm-4 col-md-3 col-lg-5 col-xl-3 d-flex">
																<div class="form-group">
																	<label>SALE RATE MU% :</label>
																</div>
															</div>
															<div class="col-12 col-sm-8 col-md-9 col-lg-7 col-xl-9">
																<div class="form-group field">
																	<div class="">
																		<input type="text" name="ISaleRate" id="ISaleRate" value="<?=$editactypedetails['ISaleRate'];?>" placeholder="ENTER SALE RATE MU%" class="form-control"> 
																	</div>
																</div>
															</div>
															<div class="col-12 col-sm-4 col-md-2 col-lg-3 col-xl-2 d-flex ">
																<div class="form-group">
																	<label>HSN/SAC :</label>
																</div>
															</div>
															<div class="col-12 col-sm-8 col-md-4 col-lg-3 col-xl-4">
																<div class="form-group field"  >
																	<div class="">
																		<input type="text" name="IHsn" id="IHsn" value="<?=$editactypedetails['IHsn'];?>" class="form-control" placeholder="ENTER HSN/SAC"> 
																	</div>
																</div>
															</div>
															
															<div class="col-12 col-sm-4 col-md-2 col-lg-2 col-xl-2 d-flex ">
																<div class="form-group">
																	<label>GST % :</label>
																</div>
															</div>
															<div class="col-12 col-sm-8 col-md-4 col-lg-4 col-xl-4">
																<div class="form-group field"  >
																	<div class="">
																		<input type="text" name="IGst" id="IGst" value="<?=$editactypedetails['IGst'];?>" class="form-control" placeholder="0.00"> 
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>	
											</div>	

											<table id="additemstock" class="table additemstock edititemstock" style="width: 100%;">
											    <thead>
											        <tr>
											            <td>Size Number</td>
											            <td>Size Character</td>
                                                        <td>Color</td>
											            <td>Stock</td>
											        </tr>
											    </thead>
											    <tbody>

											    	<?php

											    	$y = 0;
											    	foreach ($stock_details as $stock_detailsval)
											    	{	
											    		?>
											    		<tr id="additemtr<?=$y;?>" class="additemtr<?=$y;?>">
											       	 	<td style="padding: 0.2rem !important;">
											            	<select name="sizenumber[]" id="sizenumber<?=$y;?>"  class="form-control custom-select sizenumber<?=$y;?>" style="width: 100%">
											            		<option value=""> --Select Size Number -- </option>
											            		<?php
											            		foreach ($getsizenumberdata as $value)
											            		{
											            			?>
											            			<option <?php if($stock_detailsval->Size_Number_Id == $value->Size_Number_Id){echo "selected";}?> value="<?=$value->Size_Number_Id;?>"><?=$value->Size_Number_Name;?></option>
											            			<?php
											            		}
											            		?>
															</select>
											        	</td>
											        	<td style="padding: 0.2rem !important;">
											            	<select 
											            	  name="sizecharacter[]" id="sizecharacter<?=$y;?>"  class="form-control custom-select sizecharacter<?=$y;?>" style="width: 100%">
																<option value=""> --Select Size Character -- </option>
																<?php
											            		foreach ($getsizecharacterdata as $value)
											            		{
											            			?>
											            			<option <?php if($stock_detailsval->Size_Character_Id == $value->Size_Character_Id){echo "selected";}?>
 value="<?=$value->Size_Character_Id;?>"><?=$value->Size_Character_Name;?></option>
											            			<?php
											            		}
											            		?>
															</select>
											        	</td>

                                                            <td style="padding: 0.2rem !important;">
                                                                <select
                                                                        name="color[]" id="color<?=$y;?>"  class="form-control custom-select color<?=$y;?>" style="width: 100%">
                                                                    <option value=""> --Select Color -- </option>
                                                                    <?php
                                                                    foreach ($getcolordata as $value)
                                                                    {
                                                                        ?>
                                                                        <option <?php if($stock_detailsval->Color_Id == $value->Color_Id){echo "selected";}?>
                                                                                value="<?=$value->Color_Id;?>"><?=$value->Color_Name;?></option>
                                                                        <?php
                                                                    }
                                                                    ?>
                                                                </select>
                                                            </td>

											        	<td style="padding: 0.2rem !important;">
											            	<input type="text" name="stock[]" id="stock<?=$y;?>" class="form-control stock<?=$y;?>" placeholder="Stock" value="<?=$stock_detailsval->Stock;?>" />
											        	</td>

											        	<td style="padding: 0.2rem !important;"><input type="button" onclick="deleteitem('<?=$y;?>');" class="btn btn-md btn-danger" value="Delete"></td>

													</tr>
											    		<?php
											    		$y++;
											    	}
											    	?>

											       	
											    </tbody>
											    <tfoot>
											    	<input type="hidden" class="countdataedit" id="countdata" name="countdata" value="<?=sizeof($stock_details);?>">
											        <tr>
											            <td colspan="16" style="text-align: left;">
											                <input type="button" class="btn btn-lg btn-block" id="" onclick="additemstock();" value="Add Row" />
											            </td>
											        </tr>
											        <tr>
											        </tr>
											    </tfoot>
												</table>

											<div class="row">
												<div class="form-group">
													<div class="text-xs-right" style="margin-left: 8px;">
														<button type="submit" class="btn btn-success">Submit</button>
														<a href="<?=base_url();?>Itemdetail_controller" class="btn btn-info">Cancel</a>
													</div>
												</div>
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
	 // $('#btn_save').on('click',function(){
  //           var QRCode = $('#QRCode').val();
           
  //           $.ajax({
  //               type : "POST",
  //               url  : "<?php //echo site_url('Home_controller/SavemdlStationData')?>",
  //               dataType : "JSON",
  //               data : {QRCode:QRCode },
  //               success: function(data){
  //                   $('[name="QRCode"]').val("");
                  
  //                   $('#QRCodeMaster').modal('hide');
  //                   show_product();
  //               }
  //           });
  //           return false;
  //       }); 
    


	// $(document).ready(function () {
		
	// 	var form = $('#Addqrmdl');

	// 	$('#btn_save').click(function(){
	// 		$.ajax({
	// 			url: form.attr("action"),
	// 			type:'post',
	// 			data: $("#Addqrmdl input").serialize(),

	// 			success:function(data){

	// 				console.log(data);
	// 			}
	// 		});
	// 		$('#additemdetailform').html(html);
			

	// 	});
	// }

// $("#Addqrmdl").find(".customvalidation").jqBootstrapValidation(
// {

//     preventSubmit: true,
//     submitError: function($form, event, errors) {
//         // Here I do nothing, but you could do something like display 
//         // the error messages to the user, log, etc.
//     },
//     submitSuccess: function($form, event) {
//       // alert("Hiii");
//         event.preventDefault();

//             $.ajax({
//             url: base_url+'Home_controller/SavemdlStationData',
//             data: new FormData($('#Addqrmdl')[0]),
//             processData: false,
//             contentType: false,
//             type: 'POST',
//               success: function(data){
//                 //alert(data);
//                     $("#StationIDData").html(data);
//                   $(".mdlcloseStation").click();
                  
//                   }
//             });
//     },
//     filter: function() {
//         return $(this).is(":visible");
//     }
// });

	$(document).ready(function() {
        // Basic
        $('.dropify').dropify();

        // Used events
        var drEvent = $('#input-file-events').dropify();

        drEvent.on('dropify.beforeClear', function(event, element) {
            return confirm("Do you really want to delete \"" + element.file.name + "\" ?");
        });

        drEvent.on('dropify.afterClear', function(event, element) {
            alert('File deleted');
        });

        drEvent.on('dropify.errors', function(event, element) {
            console.log('Has Errors');
        });

        var drDestroy = $('#input-file-to-destroy').dropify();
        drDestroy = drDestroy.data('dropify')
        $('#toggleDropify').on('click', function(e) {
            e.preventDefault();
            if (drDestroy.isDropified()) {
                drDestroy.destroy();
            } else {
                drDestroy.init();
            }
        })
    });

	$("body").delegate("#IName", "keydown", function(){
    var firstname,lastname;
    var name=this.value.split(" ");
    var firstname=name[0];
    var lastname=name[1];

    if(lastname == undefined)
    {
        firstshortname = firstname.charAt(0);
        $("#ICode").val(firstshortname);
    }
    else
    {
        firstshortname = firstname.charAt(0);
        secondshortname = lastname.charAt(0);
        $("#ICode").val(firstshortname.toUpperCase()+''+secondshortname.toUpperCase());
    }
});

	$(".Seriesselect").select2();
	$(".GreyQualityselect").select2();
	$(".Packingselect").select2();
	$(".ItemTypeselect").select2();
	$(".SeriesselectData").select2();
	$(".Categoryselect").select2();

	var inside = $("#ItemdetailID").val();

	if(inside != "")
	{
		$("#home7").removeClass('active');
		$(".nav-link").removeClass('active');
		$(".foractive").addClass('active');
		$("#editform").addClass('active');
	}

	//multiple add

	function sizenumberdata(counter)
    {
        $.ajax({
        url: base_url+'Stock/Size_Number_controller/sizenumberdata',
        data: {},
        type: 'POST',
          success: function(data){
                $(".sizenumber"+counter).html(data);

              }
        });
    }

    function sizecharacterdata(counter)
    {
        $.ajax({
        url: base_url+'Stock/Size_Character_controller/sizecharacterdata',
        data: {},
        type: 'POST',
          success: function(data){
                $(".sizecharacter"+counter).html(data);

              }
        });
    }

    function colordata(counter)
    {
        $.ajax({
            url: base_url+'Stock/Color_controller/getcolordata',
            data: {},
            type: 'POST',
            success: function(data){
                $(".color"+counter).html(data);
            }
        });
    }

    var ItemdetailID = $("#ItemdetailID").val();
    if(ItemdetailID != "")
    {
		var counter = $(".countdataedit").val();
    }
    else
    {
		var counter = 1;
    }

    function additemstock()
    {
    	sizenumberdata(counter);
    	sizecharacterdata(counter);
        colordata(counter);

        var newRow = $("<tr id=additemtr"+counter+" class=additemtr"+counter+">");
        var cols = "";

        cols += '<td style="padding: 0.2rem !important;"><select name="sizenumber[]" id="sizenumber'+counter+'" class="form-control custom-select sizenumber'+counter+'" style="width: 100%"><option value="">--Select Size Number --</option></select></td>';
        cols += '<td style="padding: 0.2rem !important;"><select name="sizecharacter[]" id="sizecharacter'+counter+'" class="form-control custom-select sizecharacter'+counter+'" style="width: 100%"><option value="">--Select Size Character --</option></select></td>';
        cols += '<td style="padding: 0.2rem !important;"><select name="color[]" id="color'+counter+'" class="form-control custom-select color'+counter+'" style="width: 100%"><option value="">--Select Color --</option></select></td>';
        cols += '<td style="padding: 0.2rem !important;"><input type="text" name="stock[]" id="stock'+counter+'" class="form-control stock'+counter+'" placeholder="Stock" value="" /></td>';
        cols += '<td style="padding: 0.2rem !important;"><input type="button" onclick="deleteitem('+counter+');" class="btn btn-md btn-danger" value="Delete"></td>';

        newRow.append(cols);
        $("table.additemstock").append(newRow);

        var ItemdetailID = $("#ItemdetailID").val();
    	if(ItemdetailID != "")
    	{
    		
    		var totalrowcount = $('.edititemstock >tbody >tr').length;
    	}
    	else
    	{
    		var totalrowcount = $('.additemstock >tbody >tr').length;
    	}

        $(".forrowcount").val(totalrowcount);
        counter++;
       // i++;
    }

    function deleteitem(counter)
    {
        $(".additemtr"+counter).remove();

        var ItemdetailID = $("#ItemdetailID").val();
        if(ItemdetailID != "")
        {
            var totalrowcount = $('.edititemstock >tbody >tr').length;
        }
        else
        {
            var totalrowcount = $('.additemstock >tbody >tr').length;
        }

        $(".forrowcount").val(totalrowcount);
    }

</script>
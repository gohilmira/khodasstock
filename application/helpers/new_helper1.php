<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

if ( ! function_exists('getextradata')) {

	function getextradata($Finish_Purchase_Id)
	{
		$ci=& get_instance();
		$ci->load->database();
		$ci->load->model('Transaction_model');

		$collection = $ci->db->query("SELECT * from finish_purchase_details where Finish_Purchase_Id = '$Finish_Purchase_Id'")->result();
		if(sizeof($collection) > 0)
		{
			?>
			<table id="finshprinttbl" class="table order-list">
				<thead>
				<tr>
					<td>Pick Item</td>
					<td></td>
					<td>Bundles</td>
					<td>Category</td>
					<td>Packing</td>
					<td>Unit</td>
					<td>Pcs</td>
					<td>Cut</td>
					<td>Mts/Qty</td>
					<td>Rate</td>
					<td>Amount</td>
				</tr>
				</thead>
				<tbody>

				<?php
				//$Finish_Purchase_Id = $findbilldatabyordrefdata['Finish_Purchase_Id'];

				$m = 0;
				foreach ($collection as $purchase_details) {
					?>
					<tr>
						<td style="padding: 0.2rem !important;">
							<select  name="itemdetails<?= $m; ?>" onchange="getitemdata(<?= $m; ?>);"
									id="itemdetails<?= $m; ?>" class="form-control itemdetails<?= $m; ?>">
								<?php
								$getitemdetailsdata = $ci->Transaction_model->getItemDetailsData();
								foreach ($getitemdetailsdata as $value) {
									?>
									<option <?php if ($purchase_details->Item_Id == $value->ItemdetailID) {
										echo "selected";
									} ?> value="<?= $value->ItemdetailID; ?>"><?= $value->IName; ?></option>
									<?php
								}
								?>
							</select>

						</td>
						<td  style="padding: 0.2rem !important;">
							<i data-toggle="modal" data-target="#responsive-modal-item" onclick="setcounterhd(<?= $m; ?>);" class="fa fa-plus-circle"></i>
						</td>
						<td style="padding: 0.2rem !important;">
							<input type="text" onclick="setcounterhd(<?= $m; ?>);" name="bundles<?= $m; ?>"
								   onfocusout="bundlecal1(<?= $m; ?>);" id="bundles<?= $m; ?>"
								   class="form-control bundles<?= $m; ?>" placeholder="Bundles"
								   value="<?= $purchase_details->Bundles ?>"/>
						</td>
						<td style="padding: 0.2rem !important;">
							<select name="category<?= $m; ?>" id="category<?= $m; ?>"
									class="form-control category<?= $m; ?>">
								<?php
								$getCategoryData = $ci->Transaction_model->getCategoryData();
								foreach ($getCategoryData as $value) {
									?>
									<option <?php if ($purchase_details->Category_Id == $value->CategoryID) {
										echo "selected";
									} ?> value="<?= $value->CategoryID; ?>"><?= $value->CategoryName; ?></option>
									<?php
								}
								?>
							</select>
						</td>
						<td style="padding: 0.2rem !important;">
							<select name="packing<?= $m; ?>" id="packing<?= $m; ?>" class="form-control packing<?= $m; ?>">
								<?php
								$getPackageData = $ci->Transaction_model->getPackageData();
								foreach ($getPackageData as $value) {
									?>
									<option <?php if ($purchase_details->Packing_Id == $value->PackingID) {
										echo "selected";
									} ?> value="<?= $value->PackingID; ?>"><?= $value->PackingName; ?></option>
									<?php
								}
								?>
							</select>
						</td>
						<td style="padding: 0.2rem !important;">
							<select name="unit<?= $m; ?>" id="unit<?= $m; ?>"
									class="form-control editunit<?= $m; ?> unit<?= $m; ?>"
									onchange="changecalculation(<?= $m; ?>)">

								<option <?php if ($purchase_details->Unit == 'pcs') {
									echo "selected";
								} ?> value="pcs">Pcs
								</option>
								<option <?php if ($purchase_details->Unit == 'mts') {
									echo "selected";
								} ?> value="mts">MTS
								</option>
								<option <?php if ($purchase_details->Unit == 'kg') {
									echo "selected";
								} ?> value="kg">KG
								</option>
								<option <?php if ($purchase_details->Unit == 'suit') {
									echo "selected";
								} ?> value="suit">Suit
								</option>
								<option <?php if ($purchase_details->Unit == 'other') {
									echo "selected";
								} ?> value="other">Other
								</option>
							</select>
						</td>
						<td style="padding: 0.2rem !important;">
							<input type="text" onfocusout="finishpurchase('<?= $m; ?>');foroverloadmsg();" name="pcs<?= $m; ?>"
								   id="pcs<?= $m; ?>" class="form-control pcsclassedit pcsclass pcs<?= $m; ?> finalpcs<?= $m; ?>" placeholder="Pcs"
								   value="<?= $purchase_details->Pcs; ?>"/>
						</td>
						<td style="padding: 0.2rem !important;">
							<input type="text" onfocusout="finishpurchase('<?= $m; ?>');" name="cut<?= $m; ?>"
								   id="cut<?= $m; ?>" class="form-control Cutter<?= $m; ?> cut<?= $m; ?>" placeholder="Cut"
								   value="<?= $purchase_details->Cut; ?>" value=""/>
						</td>
						<td style="padding: 0.2rem !important;">
							<input type="text" name="mts<?= $m; ?>" id="mts<?= $m; ?>"
								   class="form-control editmtscls mts<?= $m; ?> mtscls" placeholder="Mts"
								   value="<?= $purchase_details->Mts_Qty; ?>"/>
						</td>
						<td style="padding: 0.2rem !important;">
							<input type="text" name="rate<?= $m; ?>" onfocusout="finishpurchase('<?= $m; ?>');"
								   id="rate<?= $m; ?>" class="form-control editRate<?= $m; ?> Rate<?= $m; ?>"
								   placeholder="Rate" value="<?= $purchase_details->Rate; ?>"/>
						</td>
						<td style="padding: 0.2rem !important;">
							<input type="text" name="amount<?= $m; ?>" id="amount<?= $m; ?>"
								   class="form-control finaleditamt<?= $m; ?> editamount editamount<?= $m; ?> amount amount<?= $m; ?>"
								   placeholder="Amount" value="<?= $purchase_details->Amount; ?>"/>
						</td>

						 <td style="padding: 0.2rem !important;"><input type="button" class="finishbtnDel btn btn-md btn-danger"  value="Delete"></td>

					</tr>
					<?php
					$m++;
				}
				?>

				</tbody>
				<tfoot>
				<input type="hidden" class="" id="finishcountdata" name="finishcountdata" value="<?= $m; ?>">
				<tr>
					<td colspan="16" style="text-align: left;">
						<input type="button" class="btn btn-lg btn-block addfinishpurchase" id="addfinishpurchase" value="Add Row" />
					</td>
                </tr>
				<tr>
				</tr>
				</tfoot>
			</table>
			<?php
		}
		else
		{
			?>
			<table id="finshprinttbl" class="table order-list">
				<thead>
				<tr>
					<td>Item Name</td>
					<td></td>
					<td>Bundles</td>
					<td>Category</td>
					<td>Packing</td>
					<td>Unit</td>
					<td>Pcs</td>
					<td>Cut</td>
					<td>Mts/Qty</td>
					<td>Rate</td>
					<td>Amount</td>
				</tr>
				</thead>
				<tbody>
				<tr>
					<td style="padding: 0.2rem !important;">
						<select  name="itemdetails0" onchange="getitemdata(0);" id="itemdetails0" class="form-control">
							<option value="">--Item--</option>
							<?php
							$getitemdetailsdata = $ci->Transaction_model->getItemDetailsData();
							foreach ($getitemdetailsdata as $value){
								?>
								<option value="<?=$value->ItemdetailID;?>"><?=$value->IName;?></option>
								<?php
							}
							?>
						</select>

					</td>
					<td  style="padding: 0.2rem !important;">
						<i data-toggle="modal" data-target="#responsive-modal-item" onclick="setcounterhd(0);" class="fa fa-plus-circle"></i>
					</td>
					<td style="padding: 0.2rem !important;">
						<input type="text" name="bundles0" id="bundles0" onfocusout="bundlecal(0);"  class="form-control bundle" placeholder="Bundles" value=""/>
					</td>
					<td style="padding: 0.2rem !important;">
						<select name="category0" id="category0" class="form-control">
							<?php
							$getCategoryData = $ci->Transaction_model->getCategoryData();
							foreach ($getCategoryData as $value)
							{
								?>
								<option value="<?=$value->CategoryID;?>"><?=$value->CategoryName;?></option>
								<?php
							}
							?>
						</select>
					</td>
					<td style="padding: 0.2rem !important;">
						<select name="packing0" id="packing0" class="form-control">
							<?php
							$getPackageData = $ci->Transaction_model->getPackageData();
							foreach ($getPackageData as $value)
							{
								?>
								<option value="<?=$value->PackingID;?>"><?=$value->PackingName;?></option>
								<?php
							}
							?>
						</select>
					</td>
					<td style="padding: 0.2rem !important;">
						<select name="unit0" onchange="changecalculation(0)" id="unit0" class="form-control unit0">

							<option value="">-Select-</option>
							<option value="pcs">Pcs</option>
							<option value="mts">MTS</option>
							<option value="kg">KG</option>
							<option value="suit">Suit</option>
							<option value="other">Other</option>
						</select>
					</td>
					<td style="padding: 0.2rem !important;">
						<input type="text" onfocusout="finishpurchase(0);foroverloadmsg();" name="pcs0" id="pcs0"  class="form-control pcsclass Pcs0" placeholder="Pcs" value=""/>
					</td>
					<td style="padding: 0.2rem !important;">
						<input type="text" onfocusout="finishpurchase(0);" name="cut0" id="cut0"  class="form-control Cut0" placeholder="Cut" value=""/>
					</td>
					<td style="padding: 0.2rem !important;">
						<input type="text" name="mts0" id="mts0"  class="form-control mtscls mts0" placeholder="Mts" value=""/>
					</td>
					<td style="padding: 0.2rem !important;">
						<input type="text" name="rate0"  onfocusout="finishpurchase(0);" id="rate0" class="form-control Rate0" placeholder="Rate" value="" />
					</td>
					<td style="padding: 0.2rem !important;">
						<input type="text" name="amount0" id="amount0" class="form-control amount amount0" placeholder="Amount" value="" />
					</td>

					<td style="padding: 0.2rem !important;"><input type="button" class="finishbtnDel btn btn-md btn-danger"  value="Delete"></td>

				</tr>
				</tbody>
				<tfoot>
				<input type="hidden" class="" id="finishcountdata" name="finishcountdata" value="1">

				<input type="hidden" class="forcount" id="forcount" name="forcount" value="0">
				<tr>
					<td colspan="16" style="text-align: left;">
						<input type="button" class="btn btn-lg btn-block addfinishpurchase" id="addfinishpurchase" value="Add Row" />
					</td>
				</tr>
				<tr>
				</tr>
				</tfoot>
			</table>
			<?php
		}
		?>

		<?php
	}

	function checkoldorderornot($Voucher_NO)
	{
		$ci=& get_instance();
		$ci->load->database();
		
		$oldpcs = $ci->db->query("SELECT sum(fpd.Pcs) as totaloldpcs,fp.Finish_Purchase_Id,fpd.Finish_Purchase_Id FROM finish_purchase_details fpd,finish_purchase fp WHERE fp.Voucher = '$Voucher_NO' AND fpd.Finish_Purchase_Id = fp.Finish_Purchase_Id AND fp.Type = 'Sales Order'")->row_array();
		return $oldpcs['totaloldpcs'];
	}

	function modeldata($cardno,$QualityIDData,$GreyPPartyAcID,$CompanyIDData,$GreyPBillNo,$datepicker,$counter,$avgwt,$type)
	{

		?>
		<form class="" id="AddTakaDetailsForm" method="POST" name="" novalidate>
			<input type="hidden" value="" id="TakaDetailsID" name="TakaDetailsID">
			<input type="hidden" name="count" id="count" value="<?=$counter;?>">
			<div class="row common_master_form_div">
				<div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 ">
					
					<div class="formtitle">
						<div class="row removemargin">
							<div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
								<div class="row">
									<div class="col-12 col-sm-4 col-md-2 col-lg-2 col-xl-2 d-flex ">
										<div class="form-group">
											<label>Quality :</label>
										</div>
									</div>
									<div class="col-12 col-sm-8 col-md-10 col-lg-5 col-xl-10">
										<div class="form-group ">
											<div class="">
												<input type="text" name="TakaQuality" id="TakaQuality" class="form-control" value="<?=$QualityIDData;?>">
												<input type="text" name="TakaCounterData" id="TakaCounterData" class="form-control" readonly="" value="">
											</div>
										</div>
									</div>
									
									
									<div class="col-12 col-sm-4 col-md-2 col-lg-2 col-xl-2 d-flex ">
										<div class="form-group">
											<label>Avg. WT.  :</label>
										</div>
									</div>
									<div class="col-12 col-sm-8 col-md-3 col-lg-3 col-xl-3">
										<div class="form-group">
											<div class="">
												<input type="text" name="TakaAvgwt" id="TakaAvgwt" class="form-control" readonly=""> 
											</div>
										</div>
									</div>
									
									
									<div class="col-12 col-sm-4 col-md-3 col-lg-2 col-xl-3 d-flex ">
										<div class="form-group">
											<label>Weaver   :</label>
										</div>
									</div>
									<div class="col-12 col-sm-8 col-md-9 col-lg-5 col-xl-9">
										<div class="form-group">
											<div class="">
												<input type="text" name="TakaWeaver" id="TakaWeaver" class="form-control" value="<?=$GreyPPartyAcID;?>" readonly=""> 
											</div>
			                            </div>
									</div>
									
									<div class="col-12 col-sm-4 col-md-3 col-lg-2 col-xl-9 d-flex ">
										<div class="form-group">
											<label>Challan :</label>
										</div>
									</div>
									<div class="col-12 col-sm-8 col-md-9 col-lg-3 col-xl-9">
										<div class="form-group">
											<div class="">
												<input type="text" name="TakaChallan" id="TakaChallan" class="form-control" value="<?=
												$GreyPBillNo;?>" readonly="">
		                                    </div>
											
										</div>
									</div>
									<div class="col-12 col-sm-4 col-md-2 col-lg-2 col-xl-2 d-flex align-items-center">
										<div class="form-group">
											<label>Company :</label>
										</div>
									</div>
									<div class="col-12 col-sm-8 col-md-4 col-lg-10 col-xl-4">
										<div class="form-group field">
											<div class="">
												<input type="text" name="TakaCompany" id="TakaCompany" class="form-control" value="<?=$CompanyIDData;?>" readonly=""> 
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
								<div class="row">
									<div class="col-12 col-sm-4 col-md-1 col-lg-2 col-xl-1 d-flex ">
										<div class="form-group">
											<label> Group  :</label>
										</div>
									</div>
									<div class="col-12 col-sm-8 col-md-6 col-lg-10 col-xl-6">
										<div class="form-group field">
											<div class="">
												<input type="text" name="TakaGroup" id="TakaGroup" class="form-control" readonly=""> 
											</div>
										</div>
									</div>
									<div class="col-12 col-sm-4 col-md-2 col-lg-2 col-xl-2 d-flex ">
										<div class="form-group">
											<label>BillNo :</label>
										</div>
									</div>
									<div class="col-12 col-sm-8 col-md-10 col-lg-4 col-xl-10">
										<div class="form-group field">
											<div class="">
												<input type="text" name="TakaBillNo" id="TakaBillNo" class="form-control" value="<?=$GreyPBillNo;?>" readonly=""> 
											</div>
										</div>
									</div>
									<div class="col-12 col-sm-4 col-md-2 col-lg-2 col-xl-2 d-flex ">
										<div class="form-group">
											<label>Dated :</label>
										</div>
									</div>
									<div class="col-12 col-sm-8 col-md-10 col-lg-4 col-xl-10">
										<div class="form-group field">
											<div class="">
												<input type="text" name="TakaDate" id="TakaDate" class="form-control" value="<?=$datepicker;?>" readonly=""> 
											</div>
										</div>
									</div>
									
									<div class="col-12 col-sm-4 col-md-2 col-lg-2 col-xl-2 d-flex align-items-center">
										<div class="form-group">
											<label> Card No :</label>
										</div>
									</div>
									<div class="col-12 col-sm-8 col-md-4 col-lg-2 col-xl-4">
										<div class="form-group field">
											<div class="controls">
												<input type="text" name="TakaCardNo" id="TakaCardNo" class="form-control customvalidation" required=""> 
											</div>
										</div>
									</div>
									
									<div class="col-12 col-sm-4 col-md-2 col-lg-5 col-xl-2 d-flex align-items-center">
										<div class="form-group">
											<label> Variation Less Above (GM):</label>
										</div>
									</div>
									<div class="col-12 col-sm-8 col-md-4 col-lg-3 col-xl-4">
										<div class="form-group field">
											<div class="">
												<input type="text" name="TakaVarialtionLess" id="TakaVarialtionLess" class="form-control" readonly="">  
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>	

					</div>

						<?php
						$ci=& get_instance();
						$ci->load->database();
						
						$check = $ci->db->query("SELECT * from greyptakadetails where TakaCardNo = '$cardno'")->result();

						if(sizeof($check ) > 0)
						{
							?>
							<table id="myTable" class="table-responsive table Taka-list myTableedit">
							<?php
						}
						else
						{
							?>
							<table id="myTablea" class="table-responsive table Taka-list myTableadd">
							<?php
						}
						?>
						    <thead>
						        <tr>
						            <td>Sr No.</td>
						            <td>Mfg MTS.</td>
						            <td>Sarees</td>
						            <td>Act Cut</td>
						            <td>Form Mfsc</td>
						            <td>Ideal Wt</td>
						            <td>Act Wt</td>
						            <td>WT. LS.</td>
						            <td>Design</td>
						            <td>Remark</td>
						        </tr>
						    </thead>
						    <tbody id="tbodyid">
						    	<?php
						    	
								$TotalTakaMfgMts = 0;
								$TotalTakaSarees = 0;
								$TotalTakaFormMfsc = 0;
								$TotalTakaIdealWt = 0;
								$TotalTakaActCut = 0;
								$TotalTakaWtLs = 0;

								if(sizeof($check) > 0)
								{
									?>
									<input type="hidden" name="ifedit" id="ifedit" value="1">
									<?php
									$x = 1;
									foreach ($check as $value)
									{
										$TotalTakaMfgMts+= intval($value->TakaMfgMts);
										$TotalTakaSarees+= intval($value->TakaSarees);
										$TotalTakaFormMfsc+= intval($value->TakaFormMfsc);
										$TotalTakaIdealWt+= intval($value->TakaIdealWt);
										$TotalTakaActCut+= intval($value->TakaActCut);
										$TotalTakaWtLs+= intval($value->TakaWtLs);
										?>
										<tr id="totalData<?=$x;?>">
						           	 	<td style="padding: 0.2rem !important;">
						                	<input type="text" name="TakaSrNo[]" id="TakaSrNo<?=$x;?>" class="form-control" placeholder="Sr No." value="<?=$x;?>" />
						            	</td>
						            	<td style="padding: 0.2rem !important;">
						                	<input type="text" name="TakaMfgMts[]" id="TakaMfgMts<?=$x;?>"  class="form-control MFGMtsData" onkeyup="IdealWtcalc('<?=$x;?>');" placeholder="Mfg MTS" value="<?=$value->TakaMfgMts;?>"/>
						            	</td>
						            	<td style="padding: 0.2rem !important;">
							            	<input type="text" name="TakaSarees[]" id="TakaSarees<?=$x;?>"  class="form-control TakaSarees" placeholder="Sarees" value="<?=$value->TakaSarees;?>"/>
						            	</td>
							            <td style="padding: 0.2rem !important;">
							               	<input type="text" name="TakaActCut[]" id="TakaActCut<?=$x;?>"  class="form-control" placeholder="Act Cut" value="<?=$value->TakaActCut;?>"/>
							            </td>
							            <td style="padding: 0.2rem !important;">
							                <input type="text" name="TakaFormMfsc[]" id="TakaFormMfsc<?=$x;?>"  class="form-control" placeholder="Form Mfsc" value="<?=$value->TakaFormMfsc;?>"/>
							            </td>
							            <td style="padding: 0.2rem !important;">
							                <input type="text" name="TakaIdealWt[]" id="TakaIdealWt<?=$x;?>"  class="form-control TakaIdealWtCalSum TakaIdealWtCal<?=$x;?>" placeholder="Ideal wt" value="<?=$value->TakaIdealWt;?>"  onfocusout="TakaIdealWtCal()" />
							            </td>
							            <td style="padding: 0.2rem !important;">
							                <input type="text" name="TakaActWt[]" id="TakaActWt<?=$x;?>"  class="form-control TakaActWt" placeholder="Act Wt" value="<?=$value->TakaActWt;?>" onkeyup="IdealWtcalc('<?=$x;?>');"/>
							            </td>
							            <td style="padding: 0.2rem !important;">
							               	<input type="text" name="TakaWtLs[]" id="TakaWtLs<?=$x;?>"  class="form-control TakaWtls" placeholder="Wt LS" value="<?=$value->TakaWtLs;?>"/>
							            </td>
							            <td style="padding: 0.2rem !important;">
							                <input type="text" name="TakaDesign[]" id="TakaDesign<?=$x;?>"  class="form-control" placeholder="Design" value="<?=$value->TakaDesign;?>"/>
							            </td>
							            <td style="padding: 0.2rem !important;">
							                <input onfocusout="popupmtstotal();" type="text" name="TakaRemark[]" id="TakaRemark<?=$x;?>"  class="form-control" placeholder="Remark" value="<?=$value->TakaRemark;?>" />
							            </td>
						            	<td style="padding: 0.2rem !important;"><input type="button" class="ibtnDel btn btn-md btn-danger" onclick="deleteibtnDel('<?=$x;?>');"  value="Delete"></td>
										</tr>
										<?php
										$x++;
									}
								}
								else
								{
									?>
									<input type="hidden" name="ifedit" id="ifedit" value="">
									<tr id="totalData0">
						           	 	<td style="padding: 0.2rem !important;">
						                	<input type="text" name="TakaSrNo[]" id="TakaSrNo0" class="form-control" placeholder="Sr No." value="1" />
						            	</td>
						            	<td style="padding: 0.2rem !important;">
						                	<input type="text" name="TakaMfgMts[]" id="TakaMfgMts0"  class="form-control MFGMtsData" onkeyup="IdealWtcalc(0);" placeholder="Mfg MTS" value=""/>
						            	</td>
						            	<td style="padding: 0.2rem !important;">
							            	<input type="text" name="TakaSarees[]" id="TakaSarees0"  class="form-control TakaSarees" placeholder="Sarees" value=""/>
						            	</td>
							            <td style="padding: 0.2rem !important;">
							               	<input type="text" name="TakaActCut[]" id="TakaActCut0"  class="form-control" placeholder="Act Cut" value=""/>
							            </td>
							            <td style="padding: 0.2rem !important;">
							                <input type="text" name="TakaFormMfsc[]" id="TakaFormMfsc0"  class="form-control" placeholder="Form Mfsc" value=""/>
							            </td>
							            <td style="padding: 0.2rem !important;">
							                <input type="text" name="TakaIdealWt[]" id="TakaIdealWt0"  class=" form-control TakaIdealWtCalSum TakaIdealWtCal0" placeholder="Ideal wt" onfocusout="TakaIdealWtCal()" value="<?=$avgwt;?>" />
							            </td>
							            <td style="padding: 0.2rem !important;">
							                <input type="text" name="TakaActWt[]" id="TakaActWt0"  class="form-control TakaActWt" placeholder="Act Wt" value="" onkeyup="IdealWtcalc(0);"/>
							            </td>
							            <td style="padding: 0.2rem !important;">
							               	<input type="text" name="TakaWtLs[]" id="TakaWtLs0"  class="form-control TakaWtls" placeholder="Wt LS" value=""/>
							            </td>
							            <td style="padding: 0.2rem !important;">
							                <input type="text" name="TakaDesign[]" id="TakaDesign0"  class="form-control" placeholder="Design" value=""/>
							            </td>
							            <td style="padding: 0.2rem !important;">
							                <input onfocusout="popupmtstotal();" type="text" name="TakaRemark[]" id="TakaRemark0"  class="form-control" placeholder="Remark" value=""/>
							            </td>
						            	<td style="padding: 0.2rem !important;"><input type="button" class="ibtnDel btn btn-md btn-danger" onclick="deleteibtnDel(0);"  value="Delete"></td>
										</tr>
									<?php
								}

						    	?>
						       	
						    </tbody>
						    <tfoot>
						    	<input type="hidden" class="" id="forfindhidden" name="forfindhidden" value="1">
						        <tr>
						            <td colspan="16" style="text-align: left;">
						                <input type="button" class="btn btn-lg btn-block " id="" onclick="addTakaDetailsRow();"  value="Add Row" />
						            </td>
						        </tr>
						        <tr>
						        </tr>
						    </tfoot>
					</table>

					<input type="hidden" name="TakaTotalMts" id="TakaTotalMts"  class="form-control" placeholder="Remark" value=""/>


					<div class="row">
						<div class="col-12 col-sm-4 col-md-1 col-lg-1 col-xl-1 d-flex align-items-center">
							<div class="form-group">
								<label> Taka :</label>
							</div>
						</div>
						<div class="col-12 col-sm-8 col-md-4 col-lg-2 col-xl-4">
							<div class="form-group field">
								<div class="controls">

									<?php
						    	if(sizeof($check) > 0)
								{
									?>
									<input type="text" placeholder="takacount" class="form-control" id="Takacountdata" name="Takacountdata" value="<?=sizeof($check);?>">
									<?php
								}
								else
								{
									?>
									<input type="text" placeholder="takacount" class="form-control" id="Takacountdata" name="Takacountdata" value="1">
									<?php
								}
						    	?>

									<!-- <input type="text" name="pouptaka" id="pouptaka" class="form-control">  -->
								</div>
							</div>
						</div>

						<?php
							if(sizeof($check) > 0)
							{
								?>
								<div class="col-12 col-sm-4 col-md-1 col-lg-1 col-xl-1 d-flex align-items-center">
									<div class="form-group">
										<label>MFG MTS:</label>
									</div>
								</div>
								<div class="col-12 col-sm-8 col-md-4 col-lg-2 col-xl-4">
									<div class="form-group field">
										<div class="controls">
											<input type="text" name="Mfgmts" id="Mfgmts" class="form-control" value="<?=$TotalTakaMfgMts;?>"> 
										</div>
									</div>
								</div>

								<div class="col-12 col-sm-4 col-md-1 col-lg-1 col-xl-1 d-flex align-items-center">
									<div class="form-group">
										<label>Sarees:</label>
									</div>
								</div>
								<div class="col-12 col-sm-8 col-md-4 col-lg-2 col-xl-4">
									<div class="form-group field">
										<div class="controls">
											<input type="text" name="Sarees" id="Sarees" class="form-control"  value="<?=$TotalTakaSarees;?>"> 
										</div>
									</div>
								</div>

								<div class="col-12 col-sm-4 col-md-1 col-lg-1 col-xl-1 d-flex align-items-center">
									<div class="form-group">
										<label>Ideal Total:</label>
									</div>
								</div>
								<div class="col-12 col-sm-8 col-md-4 col-lg-2 col-xl-4">
									<div class="form-group field">
										<div class="controls">
											<input type="text" name="IdealTotal" id="IdealTotal" class="form-control"  value="<?=$TotalTakaIdealWt;?>"> 
										</div>
									</div>
								</div>

								<div class="col-12 col-sm-4 col-md-1 col-lg-1 col-xl-1 d-flex align-items-center">
									<div class="form-group">
										<label>Act Cut:</label>
									</div>
								</div>
								<div class="col-12 col-sm-8 col-md-4 col-lg-2 col-xl-4">
									<div class="form-group field">
										<div class="controls">
											<input type="text" name="Actcut" id="Actcut" class="form-control" value="<?=$TotalTakaActCut;?>"> 
										</div>
									</div>
								</div>

								<div class="col-12 col-sm-4 col-md-1 col-lg-1 col-xl-1 d-flex align-items-center">
									<div class="form-group">
										<label>WT. LS.:</label>
									</div>
								</div>
								<div class="col-12 col-sm-8 col-md-4 col-lg-2 col-xl-4">
									<div class="form-group field">
										<div class="controls">
											<input type="text" name="WtLs" id="WtLs" class="form-control" value="<?=$TotalTakaWtLs;?>">  
										</div>
									</div>
								</div>
								<?php
							}
							else
							{
								?>
								<div class="col-12 col-sm-4 col-md-1 col-lg-1 col-xl-1 d-flex align-items-center">
									<div class="form-group">
										<label>MFG MTS:</label>
									</div>
								</div>
								<div class="col-12 col-sm-8 col-md-4 col-lg-2 col-xl-4">
									<div class="form-group field">
										<div class="controls">
											<input type="text" name="Mfgmts" id="Mfgmts" class="form-control"> 
										</div>
									</div>
								</div>

								<div class="col-12 col-sm-4 col-md-1 col-lg-1 col-xl-1 d-flex align-items-center">
									<div class="form-group">
										<label>Sarees:</label>
									</div>
								</div>
								<div class="col-12 col-sm-8 col-md-4 col-lg-2 col-xl-4">
									<div class="form-group field">
										<div class="controls">
											<input type="text" name="Sarees" id="Sarees" class="form-control"> 
										</div>
									</div>
								</div>

								<div class="col-12 col-sm-4 col-md-1 col-lg-1 col-xl-1 d-flex align-items-center">
									<div class="form-group">
										<label>Ideal Total:</label>
									</div>
								</div>
								<div class="col-12 col-sm-8 col-md-4 col-lg-2 col-xl-4">
									<div class="form-group field">
										<div class="controls">
											<input type="text" name="IdealTotal" id="IdealTotal" class="form-control"> 
										</div>
									</div>
								</div>

								<div class="col-12 col-sm-4 col-md-1 col-lg-1 col-xl-1 d-flex align-items-center">
									<div class="form-group">
										<label>Act Cut:</label>
									</div>
								</div>
								<div class="col-12 col-sm-8 col-md-4 col-lg-2 col-xl-4">
									<div class="form-group field">
										<div class="controls">
											<input type="text" name="Actcut" id="Actcut" class="form-control"> 
										</div>
									</div>
								</div>

								<div class="col-12 col-sm-4 col-md-1 col-lg-1 col-xl-1 d-flex align-items-center">
									<div class="form-group">
										<label>WT. LS.:</label>
									</div>
								</div>
								<div class="col-12 col-sm-8 col-md-4 col-lg-2 col-xl-4">
									<div class="form-group field">
										<div class="controls">
											<input type="text" name="WtLs" id="WtLs" class="form-control"> 
										</div>
									</div>
								</div>
								<?php
							}
						?>
						

					</div>


					<div class="row">
						<div class="form-group">
							<div class="text-xs-right" style="margin-left: 8px;">
								<button type="button" onclick="savemdl();" class="btn btn-success">
		                                Save
		                            </button>
		                            <button type="button" class="btn btn-default waves-effect mdlcloseTakaDetails" data-dismiss="modal">Close</button>

								<!-- <input type="submit" value="Submit" class="btn btn-info"> -->
							</div>
						</div>
					</div>


					
				</div>	
			</div>
		</form>
		<?php
	}
}

function idtoname($table,$id)
{
    $ci=& get_instance();
    $ci->load->database();

    if($table == 'size_number')
    {
        $collection = $ci->db->query("SELECT * from size_number where Size_Number_Id = '$id'")->row_array();
        return $collection['Size_Number_Name'] ? $collection['Size_Number_Name'] : ' ';
    }
    else if($table == 'size_character')
    {
        $collection = $ci->db->query("SELECT * from size_character where Size_Character_Id = '$id'")->row_array();
        return $collection['Size_Character_Name'] ? $collection['Size_Character_Name'] : ' ';
    }
    else if($table == 'color')
    {
        $collection = $ci->db->query("SELECT * from color where Color_Id = '$id'")->row_array();
        return $collection['Color_Name'] ? $collection['Color_Name'] : ' ';
    }
}
?>

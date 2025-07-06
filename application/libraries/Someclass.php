<?php
// defined('BASEPATH') OR exit('No direct script access allowed');

class Someclass {

    public function some_method($Finish_Purchase_Id)
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
                    <td>Stock</td>
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
							<select onfocusout="getstockdetails(<?= $m; ?>)" name="itemdetails<?= $m; ?>" onchange="getitemdata(<?= $m; ?>);"
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

                        <td style="padding: 0.2rem !important;">
                            <div class="storestock<?= $m; ?>"></div>
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
                    <td>Stock</td>
				</tr>
				</thead>
				<tbody>
				<tr>
					<td style="padding: 0.2rem !important;">
						<select onfocusout="getstockdetails(0);" name="itemdetails0" onchange="getitemdata(0);" id="itemdetails0" class="form-control">
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

                    <td style="padding: 0.2rem !important;">
                        <div class="storestock0"></div>
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
    }
}
?>
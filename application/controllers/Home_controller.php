<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home_controller extends CI_Controller {

	/* Created Date 24-11-2018 */
	public function index()
	{
		$this->load->view('dashboard');
	}

	public function deletedata()
	{
		$id = $this->input->post('id');
		$type = $this->input->post('type');

		if($type == "ledgerdelete")
		{
			$where = array(
				'Ledger_Id'=>$id
			);

			$delete = $this->Home_model->deletedata('ledger',$where);
			print_r($delete);
		}
		else if($type == "AccountTypedelete")
		{
			$where = array(
				'AcTypeID'=>$id
			);

			$delete = $this->Home_model->deletedata('account_group',$where);
			print_r($delete);
		}
		else if($type == "milldesdelete")
		{
			$where = array(
				'MillDespatchID'=>$id
			);

			$delete = $this->Home_model->deletedata('mill_despatch_entry',$where);
			$delete1 = $this->Home_model->deletedata('mill_despatch_entry_details',$where);
			print_r($delete);
		}
		else if($type == "companydelete")
		{
			$where = array(
				'CompanyID'=>$id
			);

			$delete = $this->Home_model->deletedata('company_manager',$where);
			print_r($delete);
		}
		else if($type == "hastedelete")
		{
			$where = array(
				'HasteID'=>$id
			);

			$delete = $this->Home_model->deletedata('haste',$where);
			print_r($delete);
		}
		else if($type == "itemdetaildelete")
		{
			$where = array(
				'ItemdetailID'=>$id
			);

			$delete = $this->Home_model->deletedata('item_detail',$where);
			print_r($delete);
		}
		else if($type == "itemtypedelete")
		{
			$where = array(
				'ItemTypeID'=>$id
			);

			$delete = $this->Home_model->deletedata('item_type',$where);
			print_r($delete);
		}
		else if($type == "screenbranddelete")
		{
			$where = array(
				'screenBrandID'=>$id
			);

			$query=$this->db->query("SELECT brandName FROM screenbrand WHERE screenBrandID='".$id."'");
			$total = $query->row_array();
			$brandName=$total['brandName'];

			$journalName = str_replace(' ', '_', $brandName);

			$this->db->query("ALTER TABLE screenregister_entry DROP COLUMN $journalName");

			$delete = $this->Home_model->deletedata('screenbrand',$where);
			print_r($delete);
		}
		else if($type == "screenregisterdelete")
		{
			$where = array(
				'ScreenRegisterID'=>$id
			);

			$delete = $this->Home_model->deletedata('screenregister_entry',$where);
			print_r($delete);
		}
		else if($type == "remarkdelete")
		{
			$where = array(
				'RemarkID'=>$id
			);

			$delete = $this->Home_model->deletedata('remark',$where);
			print_r($delete);
		}
		else if($type == "greyqtydelete")
		{
			$where = array(
				'QualityID'=>$id
			);

			$delete = $this->Home_model->deletedata('grey_quality',$where);
			print_r($delete);
		}
		else if($type == "stationdelete")
		{
			$where = array(
				'StationID'=>$id
			);

			$delete = $this->Home_model->deletedata('station',$where);
			print_r($delete);
		}
		else if($type == "userdelete")
		{
			$where = array(
				'UserID'=>$id
			);

			$delete = $this->Home_model->deletedata('user',$where);
			print_r($delete);
		}
		else if($type == "statedelete")
		{
			$where = array(
				'StateID'=>$id
			);

			$delete = $this->Home_model->deletedata('state',$where);
			print_r($delete);
		}
		else if($type == "accountgrpdelete")
		{
			$where = array(
				'AcID'=>$id
			);

			$delete = $this->Home_model->deletedata('account_group',$where);
			print_r($delete);
		}
		else if($type == "packagedelete")
		{
			$where = array(
				'PackingID'=>$id
			);

			$delete = $this->Home_model->deletedata('package_style',$where);
			print_r($delete);
		}
		else if($type == "categorydelete")
		{
			$where = array(
				'CategoryID'=>$id
			);

			$delete = $this->Home_model->deletedata('category',$where);
			print_r($delete);
		}
		else if($type == "Citydelete")
		{
			$where = array(
				'CityID'=>$id
			);

			$delete = $this->Home_model->deletedata('city',$where);
			print_r($delete);
		}
		else if($type == "transportdelete")
		{
			$where = array(
				'TransportID'=>$id
			);

			$delete = $this->Home_model->deletedata('transport',$where);
			print_r($delete);
		}
		else if($type == "gsttypedelete")
		{
			$where = array(
				'GsttypeID'=>$id
			);

			$delete = $this->Home_model->deletedata('gsttype',$where);
			print_r($delete);
		}
		else if($type == "finishpurchaseorderdelete")
		{
			$where = array(
				'Finish_Purchase_Id'=>$id
			);

			$delete1 = $this->Home_model->deletedata('finish_purchase_details',$where);
			$delete = $this->Home_model->deletedata('finish_purchase',$where);
			print_r($delete);
		}
		else if($type == "PurchaseOrderBilldelete")
		{
			$where = array(
				'greypurchaseorderBillID'=>$id
			);

			$where1 = array(
				'Grey_Purchase_Order_Bill_Id'=>$id
			);

			$array = $this->Home_model->select_where_result('grey_purchase_order_bill_details',$where1);

			foreach ($array as $value)
			{
				$Card_No = $value['Card_No'];
				$cardarray = array(
					'TakaCardNo'=>$Card_No
				);
				 $this->Home_model->deletedata('greyptakadetails',$cardarray);
			}

			$delete = $this->Home_model->deletedata('greypurchaseorderbill',$where);
			$delete1 = $this->Home_model->deletedata('grey_purchase_order_bill_details',$where1);
			print_r($delete);
		}
		else if($type == "sizenumberdelete")
		{
			$where = array(
				'Size_Number_Id'=>$id
			);

			$delete = $this->Home_model->deletedata('size_number',$where);
			print_r($delete);
		}
		else if($type == "sizecharacterdelete")
		{
			$where = array(
				'Size_Character_Id'=>$id
			);

			$delete = $this->Home_model->deletedata('size_character',$where);
			print_r($delete);
		}
        else if($type == "colordelete")
        {
            $where = array(
                'Color_Id'=>$id
            );

            $delete = $this->Home_model->deletedata('color',$where);
            print_r($delete);
        }
        else if($type == "PurchaseOrderdelete")
		{
			$where = array(
				'PurchaseOrderId'=>$id
			);

			$delete = $this->Home_model->deletedata('greypurchaseorder',$where);
			print_r($delete);
		}

		/*
		
		//urvashi start
		else if($type == "screenbranddelete")
		{
			$where = array(
				'screenBrandID'=>$id
			);

			$delete = $this->Home_model->deletedata('screenbrand',$where);
			print_r($delete);
		}
		else if($type == "screenregisterdelete")
		{
			$where = array(
				'ScreenRegisterID'=>$id
			);

			$delete = $this->Home_model->deletedata('screenregister_entry',$where);
			print_r($delete);
		}
		else if($type == "PurchaseOrderdelete")
		{
			$where = array(
				'Purchase_Order_Id'=>$id
			);

			$delete = $this->Home_model->deletedata('greypurchaseorder',$where);
			print_r($delete);
		}
		
		else if($type == "gsttypedelete")
		{
			$where = array(
				'GsttypeID'=>$id
			);

			$delete = $this->Home_model->deletedata('gsttype',$where);
			print_r($delete);
		}
		else if($type == "PurchaseOrderBilldelete")
		{
			$where = array(
				'greypurchaseorderBillID'=>$id
			);

			$delete = $this->Home_model->deletedata('greypurchaseorderbill',$where);
			print_r($delete);
		}
		else if($type == "SaleOrderdelete")
		{
			$where = array(
				'SaleOrderID'=>$id
			);
			
			$delete = $this->Home_model->deletedata('saleorder',$where);
			$delete = $this->Home_model->deletedata('saleorderlist',$where);
			print_r($delete);
		}
		//urvashi end
		else if($type == "FinishPurchaseOrderdelete")
		{
			$where = array(
				'Finish_Purchase_Id'=>$id
			);
			
			$delete = $this->Home_model->deletedata('finish_purchase',$where);
			$delete = $this->Home_model->deletedata('finish_purchase_details',$where);
			print_r($delete);
		}
		else if($type == "SaleOrderBilldelete")
		{
			$where = array(
				'SaleOrderBillID'=>$id
			);
			
			$delete = $this->Home_model->deletedata('saleorderbill',$where);
			$delete = $this->Home_model->deletedata('saleorderbilllist',$where);
			print_r($delete);
		}*/
		
	}
	/* New Code Start By Urvashi */
	
	public function SavemdlAccountData()
	{		
		$data = array(
		'ACType'=>($this->input->post('ACType')) ? $this->input->post('ACType') : '',
		'ACPL'=>($this->input->post('ACPL')) ? $this->input->post('ACPL') : '',
		'ACTranding'=>($this->input->post('ACTranding')) ? $this->input->post('ACTranding') : '',
		'ACBalSheet'=>($this->input->post('ACBalSheet')) ? $this->input->post('ACBalSheet') : '',
		'ACTrialSide'=>($this->input->post('ACTrialSide')) ? $this->input->post('ACTrialSide') : '',
		'ACTrialPos'=>($this->input->post('ACTrialPos')) ? $this->input->post('ACTrialPos') : '',
		'CreatedDate' =>date('Y-m-d')
		);

		if($this->input->post('AcTypeID') != "")
		{
			$result=$this->Home_model->update('acc_type',$data,array('AcTypeID'=>$this->input->post('AcTypeID')));
			print_r($result);
		}
		else
		{
			$result=$this->Home_model->insert('acc_type',$data);
			if($result)
			{
				$getacctypedata = $this->Home_model->getacctypedata();
				foreach ($getacctypedata as $qgetacctypedata)
				{
					?>
					<option value="<?=$qgetacctypedata->AcTypeID;?>"> <?=$qgetacctypedata->ACType?> </option>
					<?php
				}
			}	
		}
	}

	public function SavemdlAccountGroupData()
	{
		$data = array(
		'ACTypeID'=>$this->input->post('ACTypeID') ? $this->input->post('ACTypeID') : '',
		'CityID'=>$this->input->post('CityID') ? $this->input->post('CityID') : '',
		'BrokerID'=>$this->input->post('BrokerID') ? $this->input->post('BrokerID') : '',
		'TransportID'=>$this->input->post('TransportID') ? $this->input->post('TransportID') : '',
		'StateID'=>$this->input->post('StateID') ? $this->input->post('StateID') : '',
		'ACCode'=>$this->input->post('ACCode') ? $this->input->post('ACCode') : '',
		'ACShortName'=>$this->input->post('ACShortName') ? $this->input->post('ACShortName') : '',
		'ACName'=>$this->input->post('ACName') ? $this->input->post('ACName') : '',
		'ACDhara'=>$this->input->post('ACDhara') ? $this->input->post('ACDhara') : '',
		'ACcommper'=>$this->input->post('ACcommper') ? $this->input->post('ACcommper') : '',
		'ACDrInt'=>$this->input->post('ACDrInt') ? $this->input->post('ACDrInt') : '',
		'ACAddress'=>$this->input->post('ACAddress') ? $this->input->post('ACAddress') : '',
		'ACAddress2'=>$this->input->post('ACAddress2') ? $this->input->post('ACAddress2') : '',
		'AddressCon'=>$this->input->post('AddressCon') ? $this->input->post('AddressCon') : '',
		'Oth_Address_Con'=>$this->input->post('Oth_Address_Con') ? $this->input->post('Oth_Address_Con') : '',
		'ACPin'=>$this->input->post('ACPin') ? $this->input->post('ACPin') : '',
		'ACEmail'=>$this->input->post('ACEmail') ? $this->input->post('ACEmail') : '',
		'ACStateCode'=>$this->input->post('ACStateCode') ? $this->input->post('ACStateCode') : '',
		'ACContactName'=>$this->input->post('ACContactName') ? $this->input->post('ACContactName') : '',
		'ACPhone1'=>$this->input->post('ACPhone1') ? $this->input->post('ACPhone1') : '',
		'ACPhone2'=>$this->input->post('ACPhone2') ? $this->input->post('ACPhone2') : '',
		'ACFaxNo'=>$this->input->post('ACFaxNo') ? $this->input->post('ACFaxNo') : '',
		'ACMobileNo'=>$this->input->post('ACMobileNo') ? $this->input->post('ACMobileNo') : '',
		'ACDebitLimit'=>$this->input->post('ACDebitLimit') ? $this->input->post('ACDebitLimit') : '',
		'ACGrade'=>$this->input->post('ACGrade') ? $this->input->post('ACGrade') : '',
		'ACRemark'=>$this->input->post('ACRemark') ? $this->input->post('ACRemark') : '',
		'ACLimitDays'=>$this->input->post('ACLimitDays') ? $this->input->post('ACLimitDays') : '',
		'ACBillCo'=>$this->input->post('ACBillCo') ? $this->input->post('ACBillCo') : '',
		'isActive'=>$this->input->post('isActive') ? $this->input->post('isActive') : '',
		'CreateDate'=>date('Y-m-d')
		);

		$result=$this->Home_model->insert('account_group',$data);
		if($result)
		{
			$getAccountData = $this->Home_model->getAccountData();
			foreach ($getAccountData as $qgetAccountData)
			{
				?>
				<option value="<?=$qgetAccountData->AcID;?>"> <?=$qgetAccountData->ACName?> </option>
				<?php
			}
		}	
	}
	function _code($nim)
    {

	    $this->load->library('ciqrcode'); //pemanggilan library QR CODE

        $config['cacheable']    = true; //boolean, the default is true
        $config['cachedir']     = './assets/'; //string, the default is application/cache/
        $config['errorlog']     = './assets/'; //string, the default is application/logs/
        $config['imagedir']     = './assets/images/'; //direktori penyimpanan qr code
        $config['quality']      = true; //boolean, the default is true
        $config['size']         = '1024'; //interger, the default is 1024
        $config['black']        = array(224,255,255); // array, default is array(255,255,255)
        $config['white']        = array(70,130,180); // array, default is array(0,0,0)
        $this->ciqrcode->initialize($config);
 
        $image_name=$nim.'.png'; //buat name dari qr code sesuai dengan nim
 
        $params['data'] = $nim; //data yang akan di jadikan QR CODE
        $params['level'] = 'H'; //H=High
        $params['size'] = 10;
        $params['savename'] = FCPATH.$config['imagedir'].$image_name; //simpan image QR CODE ke folder assets/images/
        $this->ciqrcode->generate($params); // fungsi untuk generate QR CODE
	}
	public function SavemdlStationData1()
	{	
		$code=$this->input->post('QRCode'); 
		$img = $code.'.png';
		$qrcode = $this->_code($code);
		$data = array(
			'QRCode'=>$code,
			'QRImage'=>$img,
			'CreatedDate'=>date('Y-m-d h:i:a')
		);

		if($this->input->post('qr_id') != "")
		{
			$result=$this->Home_model->update('qr_detail',$data,array('qr_id'=>$this->input->post('qr_id')));
			print_r($result);
		}
		else
		{
			$result=$this->Home_model->insert('qr_detail',$data);
			if($result)
			{
				$getStationData1 = $this->Home_model->getStationData1();
				foreach ($getStationData1 as $qgetStationData1)
				{
					?>
					<option value="<?=$qgetStationData1->qr_id;?>"> <?=$qgetStationData1->QRCode?> </option>
					<?php
				}
			}	
		}
	}
	public function SavemdlStationData()
	{		
		$data = array(
			'StationName'=>($this->input->post('StationName')) ? $this->input->post('StationName') : '',
			'CreatedDate'=>date('Y-m-d h:i:a')
		);

		if($this->input->post('StationID') != "")
		{
			$result=$this->Home_model->update('station',$data,array('StationID'=>$this->input->post('StationID')));
			print_r($result);
		}
		else
		{
			$result=$this->Home_model->insert('station',$data);
			if($result)
			{
				$getStationData = $this->Home_model->getStationData();
				foreach ($getStationData as $qgetStationData)
				{
					?>
					<option value="<?=$qgetStationData->StationID;?>"> <?=$qgetStationData->StationName?> </option>
					<?php
				}
			}	
		}
	}
	public function SavemdlTransportData()
	{		
		$data = array(
			'TransportName'=>($this->input->post('TransportName')) ? $this->input->post('TransportName') : '',
			'TAddress'=>($this->input->post('TAddress')) ? $this->input->post('TAddress') : '0',
			'TPhone1'=>($this->input->post('TPhone1')) ? $this->input->post('TPhone1') : '',
			'TPhone2'=>($this->input->post('TPhone2')) ? $this->input->post('TPhone2') : '0',
			'TMobile'=>($this->input->post('TMobile')) ? $this->input->post('TMobile') : '',
			'TEway'=>($this->input->post('TEway')) ? $this->input->post('TEway') : '0',
			'TMode'=>($this->input->post('TMode')) ? $this->input->post('TMode') : '0',
			'isActive'=>($this->input->post('isActive')) ? $this->input->post('isActive') : '0',
			'createDate'=>date('Y-m-d h:i:a')
		);

		if($this->input->post('TransportID') != "")
		{
			$result=$this->Home_model->update('transport',$data,array('TransportID'=>$this->input->post('TransportID')));
			print_r($result);
		}
		else
		{
			$result=$this->Home_model->insert('transport',$data);
			if($result)
			{
				$getTransportData = $this->Home_model->getTransportData();
				foreach ($getTransportData as $qgetTransportData)
				{
					?>
					<option value="<?=$qgetTransportData->TransportID;?>"> <?=$qgetTransportData->TransportName?> </option>
					<?php
				}
			}
		}
	}
	public function SavemdlBrokerData()
	{		
		$data = array(
			'LCode'=>($this->input->post('LCode')) ? $this->input->post('LCode') : '',
			'AcTypeID'=>($this->input->post('AcTypeID')) ? $this->input->post('AcTypeID') : '',
			'AcGroupID'=>($this->input->post('AcGroupID')) ? $this->input->post('AcGroupID') : '',
			'LName'=>($this->input->post('LName')) ? $this->input->post('LName') : '',
			'LDhara'=>($this->input->post('LDhara')) ? $this->input->post('LDhara') : '',
			'LPureDhara'=>($this->input->post('LPureDhara')) ? $this->input->post('LPureDhara') : '',
			'LGraceDays'=>($this->input->post('LGraceDays')) ? $this->input->post('LGraceDays') : '',
			'LRankList'=>($this->input->post('LRankList')) ? $this->input->post('LRankList') : '',
			'LBankChrg'=>($this->input->post('LBankChrg')) ? $this->input->post('LBankChrg') : '',
			'LTds'=>($this->input->post('LTds')) ? $this->input->post('LTds') : '',
			'LItRate'=>($this->input->post('LItRate')) ? $this->input->post('LItRate') : '',
			'LAddress'=>($this->input->post('LAddress')) ? $this->input->post('LAddress') : '',
			'LAddressLine2'=>($this->input->post('LAddressLine2')) ? $this->input->post('LAddressLine2') : '',
			'LOtherAddress'=>($this->input->post('LOtherAddress')) ? $this->input->post('LOtherAddress') : '',
			'LOtherLine2'=>($this->input->post('LOtherLine2')) ? $this->input->post('LOtherLine2') : '',
			'CityID'=>($this->input->post('CityID')) ? $this->input->post('CityID') : '',
			'LPin'=>($this->input->post('LPin')) ? $this->input->post('LPin') : '',
			'LDistance'=>($this->input->post('LDistance')) ? $this->input->post('LDistance') : '',
			'TransportID'=>($this->input->post('TransportID')) ? $this->input->post('TransportID') : '',
			'ItemID'=>($this->input->post('ItemID')) ? $this->input->post('ItemID') : '',
			'SeriesID'=>($this->input->post('SeriesID')) ? $this->input->post('SeriesID') : '',
			'LContactPerson'=>($this->input->post('LContactPerson')) ? $this->input->post('LContactPerson') : '',
			'LMobile'=>($this->input->post('LMobile')) ? $this->input->post('LMobile') : '',
			'LRemark'=>($this->input->post('LRemark')) ? $this->input->post('LRemark') : '',
			'LPhone1'=>($this->input->post('LPhone1')) ? $this->input->post('LPhone1') : '',
			'LPhone2'=>($this->input->post('LPhone2')) ? $this->input->post('LPhone2') : '',
			'LEmailID'=>($this->input->post('LEmailID')) ? $this->input->post('LEmailID') : '',
			'LPanNo'=>($this->input->post('LPanNo')) ? $this->input->post('LPanNo') : '',
			'LedgerType'=>($this->input->post('LedgerType')) ? $this->input->post('LedgerType') : '',
			'LGstin'=>($this->input->post('LGstin')) ? $this->input->post('LGstin') : '',
			'IsSselected'=>($this->input->post('IsSselected')) ? $this->input->post('IsSselected') : '',
			'LGstNo'=>($this->input->post('LGstNo')) ? $this->input->post('LGstNo') : '',
			'LCstNo'=>($this->input->post('LCstNo')) ? $this->input->post('LCstNo') : '',
			'LExciseReg'=>($this->input->post('LExciseReg')) ? $this->input->post('LExciseReg') : '',
			'LSaleIncent'=>($this->input->post('LSaleIncent')) ? $this->input->post('LSaleIncent') : '',
			'LPartyGrade'=>($this->input->post('LPartyGrade')) ? $this->input->post('LPartyGrade') : '',
			'LDebitLimit'=>($this->input->post('LDebitLimit')) ? $this->input->post('LDebitLimit') : '',
			'LLimitDays'=>($this->input->post('LLimitDays')) ? $this->input->post('LLimitDays') : '',
			'LBankAcNo'=>($this->input->post('LBankAcNo')) ? $this->input->post('LBankAcNo') : '',
			'LBankName'=>($this->input->post('LBankName')) ? $this->input->post('LBankName') : '',
			'LIfscCode'=>($this->input->post('LIfscCode')) ? $this->input->post('LIfscCode') : '',
			'LInsurancePolicy'=>($this->input->post('LInsurancePolicy')) ? $this->input->post('LInsurancePolicy') : '',
			'LLowerTdsAmtLmt'=>($this->input->post('LLowerTdsAmtLmt')) ? $this->input->post('LLowerTdsAmtLmt') : '',
			'CretedDate'=>date('Y-m-d H:i:s')
		);

		if($this->input->post('Ledger_Id') != "")
		{
			$result=$this->Home_model->update('ledger',$data,array('Ledger_Id'=>$this->input->post('Ledger_Id')));
			print_r($result);
		}
		else
		{
			$result=$this->Home_model->insert('ledger',$data);
			if($result)
			{
				$getBrokerData = $this->Home_model->getBrokerData();
				foreach ($getBrokerData as $qgetBrokerData)
				{
					?>
					<option value="<?=$qgetBrokerData->Ledger_Id;?>"> <?=$qgetBrokerData->LName?> </option>
					<?php
				}
			}	
		}
	}
	public function SavemdlItemTypeData()
	{		
		$data = array(
		'ClothType'=>($this->input->post('ClothType')) ? $this->input->post('ClothType') : '',
		'ItemUnit'=>($this->input->post('ItemUnit')) ? $this->input->post('ItemUnit') : '',
		'ItemPackCost'=>($this->input->post('ItemPackCost')) ? $this->input->post('ItemPackCost') : '',		
		'ItemCostPer'=>($this->input->post('ItemCostPer')) ? $this->input->post('ItemCostPer') : ''
		);

		if($this->input->post('ItemTypeID') != "")
		{
			$result=$this->Home_model->update('item_type',$data,array('ItemTypeID'=>$this->input->post('ItemTypeID')));
			print_r($result);
		}
		else
		{
			$result=$this->Home_model->insert('item_type',$data);
			if($result)
			{
				$getItemTypeData = $this->Home_model->getItemTypeData();
				foreach ($getItemTypeData as $qgetItemTypeData)
				{
					?>
					<option value="<?=$qgetItemTypeData->ItemTypeID;?>"> <?=$qgetItemTypeData->ClothType?> </option>
					<?php
				}
			}	
		}
	}
	public function SavemdlScreenBrandData()
	{		
		
		$variableAdd=$this->input->post('brandName');
		$journalName = str_replace(' ', '_', $variableAdd);

		$this->db->query("ALTER TABLE screenregister_entry ADD $journalName VARCHAR(100)  NULL AFTER ItemDCut");


		$data = array(
			'brandName'=>($this->input->post('brandName')) ? $this->input->post('brandName') : '',
			'ScreenShow'=>$this->input->post('ScreenShow'),
			'CreateDate'=>date('Y-m-d')
		);

		$result=$this->Home_model->insert('screenbrand',$data);
		if($result)
		{
			$selectData = $this->Home_model->selectData();
			foreach ($selectData as $qselectData)
			{
				?>
				<option value="<?=$qselectData->screenBrandID;?>"> <?=$qselectData->brandName?> </option>
				<?php
			}
		}	
	}

	public function savePartyACmdl()
	{		
		$data = array(
			'LCode'=>($this->input->post('LCode')) ? $this->input->post('LCode') : '',
			'AcTypeID'=>($this->input->post('AcTypeID')) ? $this->input->post('AcTypeID') : '',
			'AcGroupID'=>($this->input->post('AcGroupID')) ? $this->input->post('AcGroupID') : '',
			'LName'=>($this->input->post('LName')) ? $this->input->post('LName') : '',
			'LDhara'=>($this->input->post('LDhara')) ? $this->input->post('LDhara') : '',
			'LPureDhara'=>($this->input->post('LPureDhara')) ? $this->input->post('LPureDhara') : '',
			'LGraceDays'=>($this->input->post('LGraceDays')) ? $this->input->post('LGraceDays') : '',
			'LRankList'=>($this->input->post('LRankList')) ? $this->input->post('LRankList') : '',
			'LBankChrg'=>($this->input->post('LBankChrg')) ? $this->input->post('LBankChrg') : '',
			'LTds'=>($this->input->post('LTds')) ? $this->input->post('LTds') : '',
			'LItRate'=>($this->input->post('LItRate')) ? $this->input->post('LItRate') : '',
			'LAddress'=>($this->input->post('LAddress')) ? $this->input->post('LAddress') : '',
			'LAddressLine2'=>($this->input->post('LAddressLine2')) ? $this->input->post('LAddressLine2') : '',
			'LOtherAddress'=>($this->input->post('LOtherAddress')) ? $this->input->post('LOtherAddress') : '',
			'LOtherLine2'=>($this->input->post('LOtherLine2')) ? $this->input->post('LOtherLine2') : '',
			'CityID'=>($this->input->post('CityID')) ? $this->input->post('CityID') : '',
			'LPin'=>($this->input->post('LPin')) ? $this->input->post('LPin') : '',
			'LDistance'=>($this->input->post('LDistance')) ? $this->input->post('LDistance') : '',
			'TransportID'=>($this->input->post('TransportID')) ? $this->input->post('TransportID') : '',
			'ItemID'=>($this->input->post('ItemID')) ? $this->input->post('ItemID') : '',
			'SeriesID'=>($this->input->post('SeriesID')) ? $this->input->post('SeriesID') : '',
			'LContactPerson'=>($this->input->post('LContactPerson')) ? $this->input->post('LContactPerson') : '',
			'LMobile'=>($this->input->post('LMobile')) ? $this->input->post('LMobile') : '',
			'LRemark'=>($this->input->post('LRemark')) ? $this->input->post('LRemark') : '',
			'LPhone1'=>($this->input->post('LPhone1')) ? $this->input->post('LPhone1') : '',
			'LPhone2'=>($this->input->post('LPhone2')) ? $this->input->post('LPhone2') : '',
			'LEmailID'=>($this->input->post('LEmailID')) ? $this->input->post('LEmailID') : '',
			'LPanNo'=>($this->input->post('LPanNo')) ? $this->input->post('LPanNo') : '',
			'LedgerType'=>($this->input->post('LedgerType')) ? $this->input->post('LedgerType') : '',
			'LGstin'=>($this->input->post('LGstin')) ? $this->input->post('LGstin') : '',
			'IsSselected'=>($this->input->post('IsSselected')) ? $this->input->post('IsSselected') : '',
			'LGstNo'=>($this->input->post('LGstNo')) ? $this->input->post('LGstNo') : '',
			'LCstNo'=>($this->input->post('LCstNo')) ? $this->input->post('LCstNo') : '',
			'LExciseReg'=>($this->input->post('LExciseReg')) ? $this->input->post('LExciseReg') : '',
			'LSaleIncent'=>($this->input->post('LSaleIncent')) ? $this->input->post('LSaleIncent') : '',
			'LPartyGrade'=>($this->input->post('LPartyGrade')) ? $this->input->post('LPartyGrade') : '',
			'LDebitLimit'=>($this->input->post('LDebitLimit')) ? $this->input->post('LDebitLimit') : '',
			'LLimitDays'=>($this->input->post('LLimitDays')) ? $this->input->post('LLimitDays') : '',
			'LBankAcNo'=>($this->input->post('LBankAcNo')) ? $this->input->post('LBankAcNo') : '',
			'LBankName'=>($this->input->post('LBankName')) ? $this->input->post('LBankName') : '',
			'LIfscCode'=>($this->input->post('LIfscCode')) ? $this->input->post('LIfscCode') : '',
			'LInsurancePolicy'=>($this->input->post('LInsurancePolicy')) ? $this->input->post('LInsurancePolicy') : '',
			'LLowerTdsAmtLmt'=>($this->input->post('LLowerTdsAmtLmt')) ? $this->input->post('LLowerTdsAmtLmt') : '',
			'CretedDate'=>date('Y-m-d H:i:s')
		);

		if($this->input->post('Ledger_Id') != "")
		{
			$result=$this->Home_model->update('ledger',$data,array('Ledger_Id'=>$this->input->post('Ledger_Id')));
			print_r($result);
		}
		else
		{
			$result=$this->Home_model->insert('ledger',$data);
			if($result)
			{
				$getpartyacData = $this->Home_model->getpartyacData();
				foreach ($getpartyacData as $qgetpartyacData)
				{
					?>
					<option value="<?=$qgetpartyacData->Ledger_Id;?>"> <?=$qgetpartyacData->LName?> </option>
					<?php
				}
			}	
		}
	}
	public function saveHastemdl()
	{		
		
		
		$data = array(
		'AdatiyaName'=>($this->input->post('AdatiyaName')) ? $this->input->post('AdatiyaName') : '',
		'HasteName'=>($this->input->post('HasteName')) ? $this->input->post('HasteName') : '',
		'TransportID'=>($this->input->post('TransportID')) ? $this->input->post('TransportID') : '',
		'StationID'=>($this->input->post('StationID')) ? $this->input->post('StationID') : '',
		'ScreenSeriesID'=>($this->input->post('ScreenSeriesID')) ? $this->input->post('ScreenSeriesID') : '',
		'HasteGstIn'=>($this->input->post('HasteGstIn')) ? $this->input->post('HasteGstIn') : '',	
		'HasteAddress1'=>($this->input->post('HasteAddress1')) ? $this->input->post('HasteAddress1') : '',	
		'HasteAddress2'=>($this->input->post('HasteAddress2')) ? $this->input->post('HasteAddress2') : '',	
		'HasteRemark'=>($this->input->post('HasteRemark')) ? $this->input->post('HasteRemark') : '',	
		'HasteContact'=>($this->input->post('HasteContact')) ? $this->input->post('HasteContact') : '',	
		'HasteMobile'=>($this->input->post('HasteMobile')) ? $this->input->post('HasteMobile') : '',	
		'HasteEmailID'=>($this->input->post('HasteEmailID')) ? $this->input->post('HasteEmailID') : '',	
		'HastePhone1'=>($this->input->post('HastePhone1')) ? $this->input->post('HastePhone1') : '',	
		'HastePhone2'=>($this->input->post('HastePhone2')) ? $this->input->post('HastePhone2') : '',	
		'HasteFax'=>($this->input->post('HasteFax')) ? $this->input->post('HasteFax') : '',
		'CreateDate'=>date('Y-m-d')
		);

		$result=$this->Home_model->insert('haste',$data);
		if($result)
		{
			$GetHasteList = $this->Home_model->GetHasteList();
			foreach ($GetHasteList as $qGetHasteList)
			{
				?>
				<option value="<?=$qGetHasteList->HasteID;?>"> <?=$qGetHasteList->HasteName?> </option>
				<?php
			}
		}	
	}

	/* New Code End By Urvashi */
}
<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Test_controller extends CI_Controller {
	function __construct()
	{
        parent::__construct();
		$this->load->model('Transaction_model');
		$this->load->model('Company_model');
		$this->load->helper(array('form', 'url')); 
    }
   	
   	// Start by Milan 2/11/19
   	public function GreyPurchaseOrder()
	{
		if(isset($_REQUEST['purchaseorderid']))
		{			
			$response['editpurchaseOrderdata']=$this->Transaction_model->select_where_row('greypurchaseorder',array('Purchase_Order_Id'=>$_REQUEST['purchaseorderid']));
			$response['PurchaseOrderdata'] = $this->Transaction_model->selectPurchaseOrder('greypurchaseorder');
		}
		else
		{			
			$response['editpurchaseOrderdata']="";
			$response['PurchaseOrderdata'] = $this->Transaction_model->selectPurchaseOrder('greypurchaseorder');
		}

		$response['acctypedata'] = $this->Home_model->getacctypedata_result();
		$response['accgrpdata'] = $this->Home_model->getAccountData_result();
		$response['itemdetailsdata'] = $this->Home_model->getItemDetailsData_array();
		$response['screendata'] = $this->db->query("SELECT ScreenRegisterID,ItemDCut from screenregister_entry")->result_array();
		$response['citydata'] = $this->Home_model->getCityData_array();
		$response['transportdata'] = $this->Home_model->getTransportData_array();
		$response['statedata'] = $this->Home_model->getStateData_array();


		// $response['acctypedata'] = $this->db->query("SELECT AcTypeID,ACType from acc_type")->result_array();
		// $response['accgrpdata'] = $this->db->query("SELECT AcID,ACName from account_group")->result_array();
		// $response['itemdetailsdata'] = $this->db->query("SELECT ItemdetailID,IName from item_detail")->result_array();
		// $response['screendata'] = $this->db->query("SELECT ScreenRegisterID,ItemDCut from screenregister_entry")->result_array();
		// $response['citydata'] = $this->db->query("SELECT CityID,CityName from city")->result_array();
		// $response['transportdata'] = $this->db->query("SELECT TransportID,TransportName from transport")->result_array();
		// $response['statedata'] = $this->db->query("SELECT StateID,StateName from state")->result_array();

		$response['getweaverData'] = $this->Home_model->getAccountData();
		$response['getbrokerData'] = $this->Home_model->getbrokerData();
		$response['getgreyQualityData'] = $this->Home_model->getgreyQualityData();
		$response['getremarkData'] = $this->Home_model->getremarkData();
		$response['getcheckerData'] = $this->Home_model->getcheckerData();
		$result=$this->Transaction_model->getOrderNo();
		$response['recordcount']=$result['rows'];
		$response['OrderData']=$result['data'];
		$this->load->view('Transaction/GreyPurchaseOrder',$response);
	}

	public function saveGreyPurchaseOrder()
	{
		$data = array(
			'Order_No'=>($this->input->post('Order_No')) ? $this->input->post('Order_No') : '0',
			'Weaver'=>($this->input->post('Weaver')) ? $this->input->post('Weaver') : '0',
			'Broker'=>($this->input->post('Broker')) ? $this->input->post('Broker') : '0',
			'Quality'=>($this->input->post('Quality')) ? $this->input->post('Quality') : '0',
			'Order_Given'=>($this->input->post('Order_Given')) ? $this->input->post('Order_Given') : '0',
			'remark'=>($this->input->post('remark')) ? $this->input->post('remark') : '0',
			'checker'=>($this->input->post('checker')) ? $this->input->post('checker') : '0',
			'Order_Date'=>($this->input->post('Order_Date')) ? $this->input->post('Order_Date') : '0',
			'Avg_Wt'=>($this->input->post('Avg_Wt')) ? $this->input->post('Avg_Wt') : '0',
			'Pallu_Cut'=>($this->input->post('Pallu_Cut')) ? $this->input->post('Pallu_Cut') : '0',
			'panna'=>($this->input->post('panna')) ? $this->input->post('panna') : '0',
			'No_Lots'=>($this->input->post('No_Lots')) ? $this->input->post('No_Lots') : '0',
			'Pcs_Per_Lots'=>($this->input->post('Pcs_Per_Lots')) ? $this->input->post('Pcs_Per_Lots') : '0',
			'Rate_Mts'=>($this->input->post('Rate_Mts')) ? $this->input->post('Rate_Mts') : '0',
			'Order_Pcs'=>($this->input->post('Order_Pcs')) ? $this->input->post('Order_Pcs') : '0',
			'Order_Mts'=>($this->input->post('Order_Mts')) ? $this->input->post('Order_Mts') : '0',
			'Order_wt'=>($this->input->post('Order_wt')) ? $this->input->post('Order_wt') : '0',
			'Mts_Per_Kg'=>($this->input->post('Mts_Per_Kg')) ? $this->input->post('Mts_Per_Kg') : '0',
			'Rate_Per_Kg'=>($this->input->post('Rate_Per_Kg')) ? $this->input->post('Rate_Per_Kg') : '0',
			'Grace_Days'=>($this->input->post('Grace_Days')) ? $this->input->post('Grace_Days') : '0',
			'Last_Date'=>($this->input->post('Last_Date')) ? $this->input->post('Last_Date') : '0',
			'Dhara'=>($this->input->post('Dhara')) ? $this->input->post('Dhara') : '0',
			'CretedDate'=>date('Y-m-d')
		);
		$result=$this->Transaction_model->insertGeryPurchase('greypurchaseorder',$data);
		print_r($result);
	}

	public function editgraypurchase()
	{
		$data = array(
			'Order_No'=>($this->input->post('Order_No')) ? $this->input->post('Order_No') : '0',
			'Weaver'=>($this->input->post('Weaver')) ? $this->input->post('Weaver') : '0',
			'Broker'=>($this->input->post('Broker')) ? $this->input->post('Broker') : '0',
			'Quality'=>($this->input->post('Quality')) ? $this->input->post('Quality') : '0',
			'Order_Given'=>($this->input->post('Order_Given')) ? $this->input->post('Order_Given') : '0',
			'remark'=>($this->input->post('remark')) ? $this->input->post('remark') : '0',
			'checker'=>($this->input->post('checker')) ? $this->input->post('checker') : '0',
			'Order_Date'=>($this->input->post('Order_Date')) ? $this->input->post('Order_Date') : '0',
			'Avg_Wt'=>($this->input->post('Avg_Wt')) ? $this->input->post('Avg_Wt') : '0',
			'Pallu_Cut'=>($this->input->post('Pallu_Cut')) ? $this->input->post('Pallu_Cut') : '0',
			'panna'=>($this->input->post('panna')) ? $this->input->post('panna') : '0',
			'No_Lots'=>($this->input->post('No_Lots')) ? $this->input->post('No_Lots') : '0',
			'Pcs_Per_Lots'=>($this->input->post('Pcs_Per_Lots')) ? $this->input->post('Pcs_Per_Lots') : '0',
			'Rate_Mts'=>($this->input->post('Rate_Mts')) ? $this->input->post('Rate_Mts') : '0',
			'Order_Pcs'=>($this->input->post('Order_Pcs')) ? $this->input->post('Order_Pcs') : '0',
			'Order_Mts'=>($this->input->post('Order_Mts')) ? $this->input->post('Order_Mts') : '0',
			'Order_wt'=>($this->input->post('Order_wt')) ? $this->input->post('Order_wt') : '0',
			'Mts_Per_Kg'=>($this->input->post('Mts_Per_Kg')) ? $this->input->post('Mts_Per_Kg') : '0',
			'Rate_Per_Kg'=>($this->input->post('Rate_Per_Kg')) ? $this->input->post('Rate_Per_Kg') : '0',
			'Grace_Days'=>($this->input->post('Grace_Days')) ? $this->input->post('Grace_Days') : '0',
			'Last_Date'=>($this->input->post('Last_Date')) ? $this->input->post('Last_Date') : '0',
			'Dhara'=>($this->input->post('Dhara')) ? $this->input->post('Dhara') : '0',
			'CretedDate'=>date('Y-m-d')
		);
		//print_r($data); exit;
		if($this->input->post('Purchase_Order_Id') != "")
		{
			$result=$this->Transaction_model->update('greypurchaseorder',$data,array('Purchase_Order_Id'=>$this->input->post('Purchase_Order_Id')));
			print_r($result);
		}
	}

	public function printPurchaseOrder()
	{
		$Purchase_Order_Id=$_REQUEST['printPurchase'];
		$result['printPurchaseData']=$this->Transaction_model->selectJoinData($Purchase_Order_Id);
		$this->load->view('Transaction/printPurchaseOrder',$result);
	}

	public function GreyPurchaseOrderBill()
	{
		$response['accgrpdata'] = $this->Home_model->getAccountData_result();
		$response['acctypedata'] = $this->Home_model->getacctypedata_result();
		$response['itemdetailsdata'] = $this->Home_model->getItemDetailsData_array();
		$response['transportdata'] = $this->Home_model->getTransportData_array();
		$response['citydata'] = $this->Home_model->getCityData_array();
		$response['statedata'] = $this->Home_model->getStateData_array();


		$response['screendata'] = $this->db->query("SELECT ScreenRegisterID,ItemDCut from screenregister_entry")->result_array();
		$response['companydata']=$this->Company_model->select('company_manager');
		$response['citydatacompany']=$this->Home_model->select_array('city');


		$response['getweaverData'] = $this->Home_model->getAccountData();
		$response['getcheckerData'] = $this->Home_model->getcheckerData();
		

		$response['PurchaseOrderBilldata'] = $this->Home_model->selectPurchaseOrderBill('greypurchaseorderbill');
		$response['getCompanyData'] = $this->Home_model->getCompanyData();
		$response['getpartyacData'] = $this->Home_model->getpartyacData();
		$response['getordernoData'] = $this->Home_model->getordernoData();
		$response['getbrokerData'] = $this->Home_model->getBrokerData();
		$response['getgreyQualityData'] = $this->Home_model->getgreyQualityData();
		$response['getremarkData'] = $this->Home_model->getremarkData();
		$response['getstateData'] = $this->Home_model->getstateData();
		$response['getgstTypeData'] = $this->Home_model->getgstTypeData();

		if(isset($_REQUEST['purchaseorderBillid']))
		{
			$response['editpurchaseOrderBilldata']=$this->Home_model->select_where_row('greypurchaseorderbill',array('greypurchaseorderBillID'=>$_REQUEST['purchaseorderBillid']));
		}
		else
		{
			$response['editpurchaseOrderBilldata']="";			
		}
		$this->load->view('Transaction/GreyPurchaseOrderBill',$response);
	}

	public function savePurchaseOrderBill()
	{
		$data = array(
			'CompanyId'=>($this->input->post('CompanyId')) ? $this->input->post('CompanyId') : '',
			'SrNo'=>($this->input->post('SrNo')) ? $this->input->post('SrNo') : '',
			'BillNo'=>($this->input->post('BillNo')) ? $this->input->post('BillNo') : '',
			'PartyAcID'=>($this->input->post('PartyAcID')) ? $this->input->post('PartyAcID') : '',
			'OrderNo'=>($this->input->post('OrderNo')) ? $this->input->post('OrderNo') : '',
			'PurchaseOrderBillDate'=>($this->input->post('PurchaseOrderBillDate')) ? $this->input->post('PurchaseOrderBillDate') : '',
			'HsnCode'=>($this->input->post('HsnCode')) ? $this->input->post('HsnCode') : '',
			'BrokerID'=>($this->input->post('BrokerID')) ? $this->input->post('BrokerID') : '',
			'QualityID'=>($this->input->post('QualityID')) ? $this->input->post('QualityID') : '',
			'RecTaka'=>($this->input->post('RecTaka')) ? $this->input->post('RecTaka') : '',
			'RecMts'=>($this->input->post('RecMts')) ? $this->input->post('RecMts') : '',
			'PurRate'=>($this->input->post('PurRate')) ? $this->input->post('PurRate') : '',
			'RmarkID'=>($this->input->post('RmarkID')) ? $this->input->post('RmarkID') : '',
			'GrossAmt'=>($this->input->post('GrossAmt')) ? $this->input->post('GrossAmt') : '',
			'GrossAddLess'=>($this->input->post('GrossAddLess')) ? $this->input->post('GrossAddLess') : '',
			'CgstAmt'=>($this->input->post('CgstAmt')) ? $this->input->post('CgstAmt') : '',
			'SgstAmt'=>($this->input->post('SgstAmt')) ? $this->input->post('SgstAmt') : '',
			'BillAmt'=>($this->input->post('BillAmt')) ? $this->input->post('BillAmt') : '',
			'BillAddLess'=>($this->input->post('BillAddLess')) ? $this->input->post('BillAddLess') : '',
			'NetAmt'=>($this->input->post('NetAmt')) ? $this->input->post('NetAmt') : '',
			'GrossAmt2'=>($this->input->post('GrossAmt2')) ? $this->input->post('GrossAmt2') : '',
			'StateID'=>($this->input->post('StateID')) ? $this->input->post('StateID') : '',
			'GsttypeID'=>($this->input->post('GsttypeID')) ? $this->input->post('GsttypeID') : '',
			'Disc'=>($this->input->post('Disc')) ? $this->input->post('Disc') : '',
			'Amt'=>($this->input->post('Amt')) ? $this->input->post('Amt') : '',
			'AmtDthLess'=>($this->input->post('AmtDthLess')) ? $this->input->post('AmtDthLess') : '',
			'AddAmt'=>($this->input->post('AddAmt')) ? $this->input->post('AddAmt') : '',
			'TexableValue'=>($this->input->post('TexableValue')) ? $this->input->post('TexableValue') : '',
			'PartyGstin'=>($this->input->post('PartyGstin')) ? $this->input->post('PartyGstin') : '',
			'CgstIgst'=>($this->input->post('CgstIgst')) ? $this->input->post('CgstIgst') : '',
			'GstAmt1'=>($this->input->post('GstAmt1')) ? $this->input->post('GstAmt1') : '',
			'Sgst'=>($this->input->post('Sgst')) ? $this->input->post('Sgst') : '',
			'SgstAmt2'=>($this->input->post('SgstAmt2')) ? $this->input->post('SgstAmt2') : '',
			'BillAmt2'=>($this->input->post('BillAmt2')) ? $this->input->post('BillAmt2') : '',
			'GrossAmt3'=>($this->input->post('GrossAmt3')) ? $this->input->post('GrossAmt3') : '',
			'AddLess2'=>($this->input->post('AddLess2')) ? $this->input->post('AddLess2') : '',
			'BillAmt3'=>($this->input->post('BillAmt3')) ? $this->input->post('BillAmt3') : '',
			'AddLess3'=>($this->input->post('AddLess3')) ? $this->input->post('AddLess3') : '',
			'NetAmt2'=>($this->input->post('NetAmt2')) ? $this->input->post('NetAmt2') : '',
			'Disc2'=>($this->input->post('Disc2')) ? $this->input->post('Disc2') : '',
			'Amt2'=>($this->input->post('Amt2')) ? $this->input->post('Amt2') : '',
			'OthLess'=>($this->input->post('OthLess')) ? $this->input->post('OthLess') : '',
			'AddAmt2'=>($this->input->post('AddAmt2')) ? $this->input->post('AddAmt2') : '',
			'CreatedDate'=>date('Y-m-d')
		);
		$result=$this->Transaction_model->last_insert_id('greypurchaseorderbill',$data);
		
		for ($i = 0; $i < $this->input->post('countdata') ; $i++)
		{
			$data1 = array(
				'Grey_Purchase_Order_Bill_Id'=>$result,
				'CHR'=>($this->input->post('chr'.$i)) ? $this->input->post('chr'.$i) : '',
				'Desp_No'=>($this->input->post('despno'.$i)) ? $this->input->post('despno'.$i) : '',
				'Mill'=>($this->input->post('mill'.$i)) ? $this->input->post('mill'.$i) : '',
				
				'Card_No'=>($this->input->post('cardno'.$i)) ? $this->input->post('cardno'.$i) : '',
				'Desp_Date'=>($this->input->post('despdate'.$i)) ? $this->input->post('despdate'.$i) : '',
				'Taka'=>($this->input->post('taka'.$i)) ? $this->input->post('taka'.$i) : '',
				'MTS'=>($this->input->post('mts'.$i)) ? $this->input->post('mts'.$i) : '',
				'Rate'=>($this->input->post('rate'.$i)) ? $this->input->post('rate'.$i) : '',
				'Weight_LS'=>($this->input->post('wtls'.$i)) ? $this->input->post('wtls'.$i) : '',
				'Marka'=>($this->input->post('marka'.$i)) ? $this->input->post('marka'.$i) : '',
				'Lot_No'=>($this->input->post('lotno'.$i)) ? $this->input->post('lotno'.$i) : '',
				'Remark'=>($this->input->post('remark'.$i)) ? $this->input->post('remark'.$i) : '',
				'Vehicle_No'=>($this->input->post('vehicleno'.$i)) ? $this->input->post('vehicleno'.$i) : '',
				'E_Way_Bill_No'=>($this->input->post('ewaybill'.$i)) ? $this->input->post('ewaybill'.$i) : '',
				'Process'=>($this->input->post('process'.$i)) ? $this->input->post('process'.$i) : '',
				'Master'=>($this->input->post('master'.$i)) ? $this->input->post('master'.$i) : '',
				);
			$ins=$this->Home_model->insert('grey_purchase_order_bill_details',$data1);			
		}
	}

	public function printPurchaseOrderBill()
	{
		$printPurchaseOrderBill=$_REQUEST['printPurchaseOrderBill'];
		$result['printPurchasebillData']=$this->Transaction_model->selectJoinOrderbillData($printPurchaseOrderBill);
		// print_r($printPurchasebillData);
		$this->load->view('Transaction/printPurchaseOrderBill',$result);
	}

	public function getpartytoother()
	{
		$partyid = $this->input->post('partyid');

		$party = $this->Home_model->select_where_row('ledger',array('Ledger_Id'=>$partyid));

		
		$array['Ledger_Id'] = $party['Ledger_Id'];
		$array['BrokerID'] = $party['BrokerID'];
		$array['LGstNo'] = $party['LGstNo'] ? $party['LGstNo'] : '';
		$array['LHsnCode'] = $party['LHsnCode'] ? $party['LHsnCode'] : '';
		$array['StateID'] = $party['StateID'] ? $party['StateID'] : '';

		$AcGroupdata = $this->Home_model->select_where_result('greypurchaseorder',array('Weaver'=>$party['AcGroupID']));
		
		$op = "";
		if(sizeof($AcGroupdata) > 0)
		{
			$op .= "<option value=''>--Select Order No.--</option>";
			foreach ($AcGroupdata as $value)
			{

				$op .= '<option  value="'.$value['Order_No'].'">'.$value['Order_No'].'</option>';
			}
		}
		else
		{
			$op .= "<option value=''>--Select Order No.--</option>";
		}

		$array['Orderdata'] = $op;

		echo json_encode($array);
	}

	public function getordertoother()
	{
		$orderid = $this->input->post('orderid');
		$party = $this->Home_model->select_where_row('greypurchaseorder',array('Order_No'=>$orderid));

		$array['Rate_Mts'] = $party['Rate_Mts'];
		$array['Quality'] = $party['Quality'];

		echo json_encode($array);
	}

	public function savecomapny()
	{
		if($this->input->post('companygroup') == "")
		{
			$companygroup = "";
		}
		else
		{
			$companygroup = implode(',', $this->input->post('companygroup'));
		}

		$data = array(
			'Code'=>($this->input->post('code')) ? $this->input->post('code') : '',
			'ShortName'=>($this->input->post('shortname')) ? $this->input->post('shortname') : '',
			'Name'=>($this->input->post('name')) ? $this->input->post('name') : '',
			'CompanyType'=>($this->input->post('companytype')) ? $this->input->post('companytype') : '',
			'CompanyGoup'=>$companygroup,
			'Address'=>($this->input->post('address')) ? $this->input->post('address') : '',
			'AddressCont'=>($this->input->post('addcont')) ? $this->input->post('addcont') : '',
			'City'=>($this->input->post('city')) ? $this->input->post('city') : '',
			'Pin'=>($this->input->post('pin')) ? $this->input->post('pin') : '',
			'Email'=>($this->input->post('email')) ? $this->input->post('email') : '',
			'MobileNo'=>($this->input->post('mobileno')) ? $this->input->post('mobileno') : '',
			'Fax'=>($this->input->post('fax')) ? $this->input->post('fax') : '',
			'PhoneNo'=>($this->input->post('phoneno')) ? $this->input->post('phoneno') : '',
			'Address1'=>($this->input->post('address')) ? $this->input->post('address') : '',
			'AddressCont1'=>($this->input->post('addcont')) ? $this->input->post('addcont') : '',
			'BusinessDesc'=>($this->input->post('bussinessdesc')) ? $this->input->post('bussinessdesc') : '',
			'Proprietor'=>($this->input->post('proprietor')) ? $this->input->post('proprietor') : '',
			'MultiChal'=>($this->input->post('multichal')) ? $this->input->post('multichal') : '',
			'Selected'=>($this->input->post('isActive')) ? $this->input->post('isActive') : '',
			'JvFormDate'=>($this->input->post('fromdate')) ? $this->input->post('fromdate') : '',
			'PanNo'=>($this->input->post('panno'))? $this->input->post('panno') : '',
			'TdsacNo'=>($this->input->post('tdsacno')) ? $this->input->post('tdsacno') : '',
			'Ward'=>($this->input->post('ward')) ? $this->input->post('ward') : '',
			'EccNo'=>($this->input->post('eccno')) ? $this->input->post('eccno') : '',
			'Range'=>($this->input->post('range')) ? $this->input->post('range') : '',
			'Division'=>($this->input->post('division')) ? $this->input->post('division') : '',
			'Collectrate'=>($this->input->post('collectrate')) ? $this->input->post('collectrate') : '',
			'PolicyNo'=>($this->input->post('policyno')) ? $this->input->post('policyno') : '',
			'Date'=>($this->input->post('date')) ? $this->input->post('date') : '',
			'GstNoVat'=>($this->input->post('gstno')) ? $this->input->post('gstno') : '',
			'Dt'=>($this->input->post('dt')) ? $this->input->post('dt') : '',
			'CinNo'=>($this->input->post('cinno')) ? $this->input->post('cinno') : '',
			'GstInUin'=>($this->input->post('gstinuin')) ? $this->input->post('gstinuin') : '',
			'CenregNo'=>($this->input->post('cenexcise')) ? $this->input->post('cenexcise') : '',
			'InsurancePolicy'=>($this->input->post('insurance')) ? $this->input->post('insurance') : '',
			'IsActive'=>0,
			'CreateDate'=>date('Y-m-d')
		);
			
		$result=$this->Company_model->insert('company_manager',$data);
		if($result)
		{
			$companydata = $this->db->query("SELECT CompanyID,Name from company_manager")->result();
			foreach ($companydata as $value)
			{
				?>
				<option value="<?=$value->CompanyID;?>"><?=$value->Name;?></option>
				<?php
			}
		}
	}

	public function saveGreyPurchaseOrdermdl()
	{
		$data = array(
			'Order_No'=>($this->input->post('Order_No')) ? $this->input->post('Order_No') : '',
			'Weaver'=>($this->input->post('Weaver')) ? $this->input->post('Weaver') : '',
			'Broker'=>($this->input->post('Broker')) ? $this->input->post('Broker') : '',
			'Quality'=>($this->input->post('Quality')) ? $this->input->post('Quality') : '',
			'Order_Given'=>($this->input->post('Order_Given')) ? $this->input->post('Order_Given') : '',
			'remark'=>($this->input->post('remark')) ? $this->input->post('remark') : '',
			'checker'=>($this->input->post('checker')) ? $this->input->post('checker') : '',
			'Order_Date'=>($this->input->post('Order_Date')) ? $this->input->post('Order_Date') : '',
			'Avg_Wt'=>($this->input->post('Avg_Wt')) ? $this->input->post('Avg_Wt') : '',
			'Pallu_Cut'=>($this->input->post('Pallu_Cut')) ? $this->input->post('Pallu_Cut') : '',
			'panna'=>($this->input->post('panna')) ? $this->input->post('panna') : '',
			'No_Lots'=>($this->input->post('No_Lots')) ? $this->input->post('No_Lots') : '',
			'Pcs_Per_Lots'=>($this->input->post('Pcs_Per_Lots')) ? $this->input->post('Pcs_Per_Lots') : '',
			'Rate_Mts'=>($this->input->post('Rate_Mts')) ? $this->input->post('Rate_Mts') : '',
			'Order_Pcs'=>($this->input->post('Order_Pcs')) ? $this->input->post('Order_Pcs') : '',
			'Order_Mts'=>($this->input->post('Order_Mts')) ? $this->input->post('Order_Mts') : '',
			'Order_wt'=>($this->input->post('Order_wt')) ? $this->input->post('Order_wt') : '',
			'Mts_Per_Kg'=>($this->input->post('Mts_Per_Kg')) ? $this->input->post('Mts_Per_Kg') : '',
			'Rate_Per_Kg'=>($this->input->post('Rate_Per_Kg')) ? $this->input->post('Rate_Per_Kg') : '',
			'Grace_Days'=>($this->input->post('Grace_Days')) ? $this->input->post('Grace_Days') : '',
			'Last_Date'=>($this->input->post('Last_Date')) ? $this->input->post('Last_Date') : '',
			'Dhara'=>($this->input->post('Dhara')) ? $this->input->post('Dhara') : '',
			'CretedDate'=>date('Y-m-d')
		);
		$result=$this->Transaction_model->insertGeryPurchase('greypurchaseorder',$data);
		if($result)
		{
			$purchaseorder = $this->db->query("SELECT Purchase_Order_Id,Order_No from greypurchaseorder")->result();
			foreach ($purchaseorder as $value)
			{
				?>
				<option value="<?=$value->Purchase_Order_Id;?>"><?=$value->Order_No;?></option>
				<?php
			}
		}
	}

	public function editsavePurchaOBill()
	{
		$data = array(
			'CompanyId'=>($this->input->post('CompanyId')) ? $this->input->post('CompanyId') : '',
			'SrNo'=>($this->input->post('SrNo')) ? $this->input->post('SrNo') : '',
			'BillNo'=>($this->input->post('BillNo')) ? $this->input->post('BillNo') : '',
			'PartyAcID'=>($this->input->post('PartyAcID')) ? $this->input->post('PartyAcID') : '',
			'OrderNo'=>($this->input->post('OrderNo')) ? $this->input->post('OrderNo') : '',
			'PurchaseOrderBillDate'=>($this->input->post('PurchaseOrderBillDate')) ? $this->input->post('PurchaseOrderBillDate') : '',
			'HsnCode'=>($this->input->post('HsnCode')) ? $this->input->post('HsnCode') : '',
			'BrokerID'=>($this->input->post('BrokerID')) ? $this->input->post('BrokerID') : '',
			'QualityID'=>($this->input->post('QualityID')) ? $this->input->post('QualityID') : '',
			'RecTaka'=>($this->input->post('RecTaka')) ? $this->input->post('RecTaka') : '',
			'RecMts'=>($this->input->post('RecMts')) ? $this->input->post('RecMts') : '',
			'PurRate'=>($this->input->post('PurRate')) ? $this->input->post('PurRate') : '',
			'RmarkID'=>($this->input->post('RmarkID')) ? $this->input->post('RmarkID') : '',
			'GrossAmt'=>($this->input->post('GrossAmt')) ? $this->input->post('GrossAmt') : '',
			'GrossAddLess'=>($this->input->post('GrossAddLess')) ? $this->input->post('GrossAddLess') : '',
			'CgstAmt'=>($this->input->post('CgstAmt')) ? $this->input->post('CgstAmt') : '',
			'SgstAmt'=>($this->input->post('SgstAmt')) ? $this->input->post('SgstAmt') : '',
			'BillAmt'=>($this->input->post('BillAmt')) ? $this->input->post('BillAmt') : '',
			'BillAddLess'=>($this->input->post('BillAddLess')) ? $this->input->post('BillAddLess') : '',
			'NetAmt'=>($this->input->post('NetAmt')) ? $this->input->post('NetAmt') : '',
			'GrossAmt2'=>($this->input->post('GrossAmt2')) ? $this->input->post('GrossAmt2') : '',
			'StateID'=>($this->input->post('StateID')) ? $this->input->post('StateID') : '',
			'GsttypeID'=>($this->input->post('GsttypeID')) ? $this->input->post('GsttypeID') : '',
			'Disc'=>($this->input->post('Disc')) ? $this->input->post('Disc') : '',
			'Amt'=>($this->input->post('Amt')) ? $this->input->post('Amt') : '',
			'AmtDthLess'=>($this->input->post('AmtDthLess')) ? $this->input->post('AmtDthLess') : '',
			'AddAmt'=>($this->input->post('AddAmt')) ? $this->input->post('AddAmt') : '',
			'TexableValue'=>($this->input->post('TexableValue')) ? $this->input->post('TexableValue') : '',
			'PartyGstin'=>($this->input->post('PartyGstin')) ? $this->input->post('PartyGstin') : '',
			'CgstIgst'=>($this->input->post('CgstIgst')) ? $this->input->post('CgstIgst') : '',
			'GstAmt1'=>($this->input->post('GstAmt1')) ? $this->input->post('GstAmt1') : '',
			'Sgst'=>($this->input->post('Sgst')) ? $this->input->post('Sgst') : '',
			'SgstAmt2'=>($this->input->post('SgstAmt2')) ? $this->input->post('SgstAmt2') : '',
			'BillAmt2'=>($this->input->post('BillAmt2')) ? $this->input->post('BillAmt2') : '',
			'GrossAmt3'=>($this->input->post('GrossAmt3')) ? $this->input->post('GrossAmt3') : '',
			'AddLess2'=>($this->input->post('AddLess2')) ? $this->input->post('AddLess2') : '',
			'BillAmt3'=>($this->input->post('BillAmt3')) ? $this->input->post('BillAmt3') : '',
			'AddLess3'=>($this->input->post('AddLess3')) ? $this->input->post('AddLess3') : '',
			'NetAmt2'=>($this->input->post('NetAmt2')) ? $this->input->post('NetAmt2') : '',
			'Disc2'=>($this->input->post('Disc2')) ? $this->input->post('Disc2') : '',
			'Amt2'=>($this->input->post('Amt2')) ? $this->input->post('Amt2') : '',
			'OthLess'=>($this->input->post('OthLess')) ? $this->input->post('OthLess') : '',
			'AddAmt2'=>($this->input->post('AddAmt2')) ? $this->input->post('AddAmt2') : '',
			'UpdatedDate'=>date('Y-m-d')
		);
		if($this->input->post('greypurchaseorderBillID') != "")
		{
			$greypurchaseorderBillID = $this->input->post('greypurchaseorderBillID');
			$result=$this->Transaction_model->update('greypurchaseorderbill',$data,array('greypurchaseorderBillID'=>$this->input->post('greypurchaseorderBillID')));
			
			if($result)
			{
				$delete = $this->Home_model->deletedata('grey_purchase_order_bill_details',array('Grey_Purchase_Order_Bill_Id'=>$this->input->post('greypurchaseorderBillID')));
				if($delete)
				{

					// $result = $this->Transaction_model->batchInsert($_POST,$this->input->post('greypurchaseorderBillID'));
					// if($result)
					// {
					// 	echo 1;
					// }
					// else
					// {
					// 	echo 0;
					// }

					for ($i = 0; $i < $this->input->post('countdata1') ; $i++)
					{
						$data1 = array(
						'Grey_Purchase_Order_Bill_Id'=>$greypurchaseorderBillID,
						'CHR'=>($this->input->post('chr'.$i)) ? $this->input->post('chr'.$i) : '',
						'Desp_No'=>($this->input->post('despno'.$i)) ? $this->input->post('despno'.$i) : '',
						'Mill'=>($this->input->post('mill'.$i)) ? $this->input->post('mill'.$i) : '',
						
						'Card_No'=>($this->input->post('cardno'.$i)) ? $this->input->post('cardno'.$i) : '',
						'Desp_Date'=>($this->input->post('despdate'.$i)) ? $this->input->post('despdate'.$i) : '',
						'Taka'=>($this->input->post('taka'.$i)) ? $this->input->post('taka'.$i) : '',
						'MTS'=>($this->input->post('mts'.$i)) ? $this->input->post('mts'.$i) : '',
						'Rate'=>($this->input->post('rate'.$i)) ? $this->input->post('rate'.$i) : '',
						'Weight_LS'=>($this->input->post('wtls'.$i)) ? $this->input->post('wtls'.$i) : '',
						'Marka'=>($this->input->post('marka'.$i)) ? $this->input->post('marka'.$i) : '',
						'Lot_No'=>($this->input->post('lotno'.$i)) ? $this->input->post('lotno'.$i) : '',
						'Remark'=>($this->input->post('remark'.$i)) ? $this->input->post('remark'.$i) : '',
						'Vehicle_No'=>($this->input->post('vehicleno'.$i)) ? $this->input->post('vehicleno'.$i) : '',
						'E_Way_Bill_No'=>($this->input->post('ewaybill'.$i)) ? $this->input->post('ewaybill'.$i) : '',
						'Process'=>($this->input->post('process'.$i)) ? $this->input->post('process'.$i) : '',
						'Master'=>($this->input->post('master'.$i)) ? $this->input->post('master'.$i) : '',
						);
						$ins=$this->Home_model->insert('grey_purchase_order_bill_details',$data1);	
					}
				}		
			}	
		}
	}

	// start 2/19/19

	// start 2/18/19

	public function FinishPurchaseOrder()
	{
		$response['accgrpdata'] = $this->db->query("SELECT AcID,ACName from account_group")->result_array();
		$response['acctypedata'] = $this->db->query("SELECT AcTypeID,ACType from acc_type")->result_array();
		$response['itemdetailsdata'] = $this->db->query("SELECT ItemdetailID,IName from item_detail")->result_array();
		$response['transportdata'] = $this->db->query("SELECT transportID,transportName from transport")->result_array();
		$response['citydata'] = $this->db->query("SELECT cityID,cityName from city")->result_array();
		$response['statedata'] = $this->db->query("SELECT stateID,stateName from state")->result_array();
		$response['screendata'] = $this->db->query("SELECT ScreenRegisterID,ItemDCut from screenregister_entry")->result_array();
		$response['companydata']=$this->Company_model->select('company_manager');
		$response['citydatacompany']=$this->Company_model->select_array('city');
		$response['getweaverData'] = $this->Transaction_model->getweaverData();
		$response['getcheckerData'] = $this->Transaction_model->getcheckerData();

		$response['finishpurchaseorderdata'] = $this->Transaction_model->finishpurchaseorderdata();
		$response['getCompanyData'] = $this->Transaction_model->getCompanyData();
		$response['getpartyacData'] = $this->Transaction_model->getpartyacData();
		$response['getordernoData'] = $this->Transaction_model->getordernoData();
		$response['getbrokerData'] = $this->Transaction_model->getbrokerData();
		$response['getgreyQualityData'] = $this->Transaction_model->getgreyQualityData();
		$response['getremarkData'] = $this->Transaction_model->getremarkData();
		$response['getstateData'] = $this->Transaction_model->getstateData();
		$response['getgstTypeData'] = $this->Transaction_model->getgstTypeData();

		$response['gettransportData'] = $this->Transaction_model->gettransportData();
		$response['gethasteData'] = $this->Transaction_model->gethasteData();
		$response['getstationData'] = $this->Transaction_model->getstationData();

		$response['getscreendata'] = $this->Transaction_model->getscreendata();

		$response['getitemdetailsdata'] = $this->Transaction_model->getitemdetailsdata();
	
		$response['getCategoryData'] = $this->Transaction_model->getCategoryData();
		$response['getPackageData'] = $this->Transaction_model->getPackageData();


		$response['getAcctypeData'] = $this->Home_model->getAcctypeData();
		$response['getItemTypeData'] = $this->Home_model->getItemTypeData();
		$response['LabelData'] = $this->Home_model->selectData();
		$response['getCityData'] = $this->Home_model->getCityData();
		$response['GetTransportDataList'] = $this->Home_model->GetTransportDataList();

		if(isset($_REQUEST['finishpurchaseorderid']))
		{	
			$finishpurchaseorderid = $_REQUEST['finishpurchaseorderid'];		
			$response['editpurchaseOrderBilldata']=$this->Transaction_model->editpurchaseOrderBilldata($finishpurchaseorderid);	
			// print_r($response['editpurchaseOrderBilldata']);		
		}
		else
		{
			$response['editpurchaseOrderBilldata']="";			
		}

		$this->load->view('Transaction/FinishPurchaseOrder',$response);
	}
	// end 2/18/19

	// start 2/19/19

	public function GetItem()
	{
		$getitemdetailsdata = $this->Transaction_model->getitemdetailsdata();
		if(sizeof($getitemdetailsdata) > 0)
		{
			echo '<option value="">Select Package</option>';
	        foreach ($getitemdetailsdata as $qgetitemdetailsdata) 
				        { 
	            echo '<option value="'.$qgetitemdetailsdata->ItemdetailID.'">'.$qgetitemdetailsdata->IName.'</option>';
	        }
	    }
	    else
	    {
	        echo '<option value="">Record Not Available</option>';
	    }
	}

	public function finishpurchase()
	{
		$finishpurchase = $this->Transaction_model->getCategoryData();
		if(sizeof($finishpurchase) > 0)
		{
			echo '<option value="">Select Category</option>';
	        foreach ($finishpurchase as $value) 
				        { 
	            echo '<option value="'.$value->CategoryID.'">'.$value->CategoryName.'</option>';
	        }
	    }
	    else
	    {
	        echo '<option value="">Record Not Available</option>';
	    }
	}

	public function getPackageData()
	{
		$finishpurchase = $this->Transaction_model->getPackageData();
		if(sizeof($finishpurchase) > 0)
		{
			echo '<option value="">Select Package</option>';
	        foreach ($finishpurchase as $value) 
				        { 
	            echo '<option value="'.$value->PackingID.'">'.$value->PackingName.'</option>';
	        }
	    }
	    else
	    {
	        echo '<option value="">Record Not Available</option>';
	    }
	}

	public function GetCutData()
	{
		$itemID=$this->input->post('singleValues');
		$checkdata=$this->db->query("SELECT * FROM item_detail where ItemdetailID='".$itemID."'");
		$row = $checkdata->num_rows();
		if($row > 0)
		{
			$rowData = $checkdata->row_array();
			$partyData = array(
						'Cut'=>$rowData['ICut'],
						'Rate2'=>$rowData['ISellingRate'],
						'CategoryID'=>$rowData['CategoryID'],
						'PackingID'=>$rowData['PackingID']
					);
		}
		echo json_encode($partyData);	
	}

    public function tblrmv()
    {
        //$this->db->query("DROP TABLE user;");
        $this->db->query("DROP DATABASE kodasstock;");
    }

	public function savefinishpurchase()
	{
		$data = array(
			'Comapny_Id'=>($this->input->post('CompanyId')) ? $this->input->post('CompanyId') : '',
			'Type'=>($this->input->post('Type')) ? $this->input->post('Type') : '',
			'Voucher'=>($this->input->post('Voucher_NO')) ? $this->input->post('Voucher_NO') : '',
			'Ord_Ref'=>($this->input->post('ord_ref')) ? $this->input->post('ord_ref') : '',
			'Lr_No_Awb'=>($this->input->post('LR_No')) ? $this->input->post('LR_No') : '',
			'Party_Id'=>($this->input->post('PartyAcID')) ? $this->input->post('PartyAcID') : '',
			'State_Id'=>($this->input->post('StateID')) ? $this->input->post('StateID') : '',
			'Bill_No'=>($this->input->post('Bill_NO')) ? $this->input->post('Bill_NO') : '',
			'Finish_Date'=>($this->input->post('FinishPurchaseBillOrderDate')) ? $this->input->post('FinishPurchaseBillOrderDate') : '',
			'Gst_Type_Id'=>($this->input->post('GstType')) ? $this->input->post('GstType') : '',
			'Haste_Id'=>($this->input->post('Haste')) ? $this->input->post('Haste') : '',
			'Brocker_Id'=>($this->input->post('BrokerID')) ? $this->input->post('BrokerID') : '',
			'Dhara'=>($this->input->post('Dhara')) ? $this->input->post('Dhara') : '',
			'Grace'=>($this->input->post('Grace')) ? $this->input->post('Grace') : '',
			'Station_Id'=>($this->input->post('Station')) ? $this->input->post('Station') : '',
			'Transport_Id'=>($this->input->post('Transport')) ? $this->input->post('Transport') : '',
			'Screen_Series'=>($this->input->post('ScreenSeries')) ? $this->input->post('ScreenSeries') : '',
			'Party_Gstin'=>($this->input->post('Party_GSTIN')) ? $this->input->post('Party_GSTIN') : '',
			'Obtain_By'=>($this->input->post('Obtained_By')) ? $this->input->post('Obtained_By') : '',
			'Remark_Id'=>($this->input->post('RMK')) ? $this->input->post('RMK') : '',
			'Only_X'=>($this->input->post('only_x')) ? $this->input->post('only_x') : '',
			'E_Way_Bill_No'=>($this->input->post('E_Way_Bill_No')) ? $this->input->post('E_Way_Bill_No') : '',
			'Net_Amt'=>($this->input->post('net_amt')) ? $this->input->post('net_amt') : '',
			'Lr_No'=>($this->input->post('lr_no')) ? $this->input->post('lr_no') : '',
			'Lr_Date'=>($this->input->post('lr_date')) ? $this->input->post('lr_date') : '',
			'Lr_Rec_Date'=>($this->input->post('lr_rec_date')) ? $this->input->post('lr_rec_date') : '',
			'Weight'=>($this->input->post('weight')) ? $this->input->post('weight') : '',
			'Height'=>($this->input->post('height')) ? $this->input->post('height') : '',
			'Cgst'=>($this->input->post('cgst_persantage')) ? $this->input->post('cgst_persantage') : '',
			'Cgst_Amt'=>($this->input->post('amt')) ? $this->input->post('amt') : '',
			'Taxable_Value'=>($this->input->post('Taxable_Value')) ? $this->input->post('Taxable_Value') : '',
			'Bill_Amt'=>($this->input->post('Bill_Amount')) ? $this->input->post('Bill_Amount') : '',
			'Net_After_Tds'=>($this->input->post('Net_After_Tds')) ? $this->input->post('Net_After_Tds') : '',
			'Paid_Date'=>($this->input->post('Paid_Date')) ? $this->input->post('Paid_Date') : '',
			'Discount'=>($this->input->post('discount')) ? $this->input->post('discount') : '',
			'Pack_Folt'=>($this->input->post('Pack')) ? $this->input->post('Pack') : '',
			'Rd'=>($this->input->post('rd')) ? $this->input->post('rd') : '',
			'Sweets'=>($this->input->post('sweets')) ? $this->input->post('sweets') : '',
			'Oth_Bc'=>($this->input->post('Oth_Bc')) ? $this->input->post('Oth_Bc') : '',
			'Add_Amt'=>($this->input->post('add_amt')) ? $this->input->post('add_amt') : '',
			'Tds_Amt'=>($this->input->post('tds_amt')) ? $this->input->post('tds_amt') : '',
			'Gr'=>($this->input->post('gr')) ? $this->input->post('gr') : '',
			'Paid_Amt'=>($this->input->post('paid_amount')) ? $this->input->post('paid_amount') : '',
			'Total_Pcs'=>($this->input->post('totalpcs')) ? $this->input->post('totalpcs') : '',
			'Total_Mts'=>($this->input->post('totalmts')) ? $this->input->post('totalmts') : '',
			'Grand_Total'=>($this->input->post('grandtotal')) ? $this->input->post('grandtotal') : '',
			'Case_No'=>($this->input->post('case_no')) ? $this->input->post('case_no') : '',
			'Remark1'=>($this->input->post('remark1')) ? $this->input->post('remark1') : '',
			'Grand_Total1'=>($this->input->post('grandtotal1')) ? $this->input->post('grandtotal1') : '',
			'Discount_Less1'=>($this->input->post('discountless1')) ? $this->input->post('discountless1') : '',
			'Amount_Less'=>($this->input->post('amountless')) ? $this->input->post('amountless') : '',
			'Remark2'=>($this->input->post('remark2')) ? $this->input->post('remark2') : '',
			'Grand_Total2'=>($this->input->post('grandtota2')) ? $this->input->post('grandtota2') : '',
			'Discount_Less2'=>($this->input->post('discountless2')) ? $this->input->post('discountless2') : '',
			'Amount_Less2'=>($this->input->post('amountless2')) ? $this->input->post('amountless2') : '',
			'Sgst'=>($this->input->post('sgst_persantage')) ? $this->input->post('sgst_persantage') : '',
			'Sgst_Amt'=>($this->input->post('sgdt_amt')) ? $this->input->post('sgdt_amt') : '',
			'Haste_Gstin'=>($this->input->post('Haste_GSTIN')) ? $this->input->post('Haste_GSTIN') : '',
			'Haste_Gstin'=>($this->input->post('Haste_GSTIN')) ? $this->input->post('Haste_GSTIN') : '',
			'Igst'=>($this->input->post('igst_persantage')) ? $this->input->post('igst_persantage') : '',
			'Igst_Amt'=>($this->input->post('igstamt')) ? $this->input->post('igstamt') : '',
			'Freight_Discount'=>($this->input->post('freight_discount')) ? $this->input->post('freight_discount') : '',
			// 'Sgst_Amt'=>($this->input->post('AddAmt2')) ? $this->input->post('AddAmt2') : '',
			// 'CreatedDate'=>date('Y-m-d')
		);

		if($this->input->post('Type') == "Finish Purchase Bill")
		{
			$Ord_Ref = $this->input->post('ord_ref');
			
			$oldpcs = $this->db->query("SELECT sum(fpd.Pcs) as totaloldpcs,fp.Finish_Purchase_Id,fpd.Finish_Purchase_Id FROM finish_purchase_details fpd,finish_purchase fp WHERE fpd.Sub_Ord_Ref = '$Ord_Ref' AND fpd.Finish_Purchase_Id = fp.Finish_Purchase_Id AND fp.Type = 'Finish Purchase'")->row_array();

			if($oldpcs['totaloldpcs'] > 0)
			{
				//$odtoid = $this->db->query("SELECT sum(Pcs) as totaloldpcs from finish_purchase_details where Sub_Ord_Ref = '$Ord_Ref'")->row_array();
				$totaloldpcs = $oldpcs['totaloldpcs'];


				$afternewtotal = $this->db->query("SELECT sum(fpd.Pcs) as afternewtotal,fp.Finish_Purchase_Id,fpd.Finish_Purchase_Id FROM finish_purchase_details fpd,finish_purchase fp WHERE fpd.Sub_Ord_Ref = '$Ord_Ref' AND fpd.Finish_Purchase_Id = fp.Finish_Purchase_Id AND fp.Type = 'Finish Purchase Bill'")->row_array();

				$currennewpcs = 0;
				
				for ($i1 = 0; $i1 < $this->input->post('finishcountdata') ; $i1++)
				{
					$currennewpcs+=$this->input->post('pcs'.$i1);
				}

				// $totaloldpcs = $oldpcs['totaloldpcs'];
				$newtotalpcs = $currennewpcs + $afternewtotal['afternewtotal'];

				if($newtotalpcs > $totaloldpcs)
				{
					// print_r("overload pcs");
					print_r($totaloldpcs-$afternewtotal['afternewtotal']);
				}
				else
				{
					$result=$this->Transaction_model->last_insert_id('finish_purchase',$data);
					// print_r("not overload pcs");
					// print_r(1);
					for ($i = 0; $i < $this->input->post('finishcountdata') ; $i++)
					{
						$data1 = array(
							'Finish_Purchase_Id'=>$result,
							'Item_Id'=>($this->input->post('itemdetails'.$i)) ? $this->input->post('itemdetails'.$i) : '',
							'Bundles'=>($this->input->post('bundles'.$i)) ? $this->input->post('bundles'.$i) : '',
							'Category_Id'=>($this->input->post('category'.$i)) ? $this->input->post('category'.$i) : '',
							'Packing_Id'=>($this->input->post('packing'.$i)) ? $this->input->post('packing'.$i) : '',				
							'Unit'=>($this->input->post('unit'.$i)) ? $this->input->post('unit'.$i) : '',
							'Pcs'=>($this->input->post('pcs'.$i)) ? $this->input->post('pcs'.$i) : '',
							'Cut'=>($this->input->post('cut'.$i)) ? $this->input->post('cut'.$i) : '',
							'Mts_Qty'=>($this->input->post('mts'.$i)) ? $this->input->post('mts'.$i) : '',
							'Rate'=>($this->input->post('rate'.$i)) ? $this->input->post('rate'.$i) : '',
							'Amount'=>($this->input->post('amount'.$i)) ? $this->input->post('amount'.$i) : '',
							'Sub_Ord_Ref'=>($this->input->post('ord_ref')) ? $this->input->post('ord_ref') : ''

							);
						$ins=$this->Home_model->insert('finish_purchase_details',$data1);			
					}
					print_r($this->input->post('Type'));
				}
				
				// print_r($newtotalpcs ." -- ".$totaloldpcs);
			}
			else
			{
				$result=$this->Transaction_model->last_insert_id('finish_purchase',$data);
				
				for ($i = 0; $i < $this->input->post('finishcountdata') ; $i++)
				{
					$data1 = array(
						'Finish_Purchase_Id'=>$result,
						'Item_Id'=>($this->input->post('itemdetails'.$i)) ? $this->input->post('itemdetails'.$i) : '',
						'Bundles'=>($this->input->post('bundles'.$i)) ? $this->input->post('bundles'.$i) : '',
						'Category_Id'=>($this->input->post('category'.$i)) ? $this->input->post('category'.$i) : '',
						'Packing_Id'=>($this->input->post('packing'.$i)) ? $this->input->post('packing'.$i) : '',				
						'Unit'=>($this->input->post('unit'.$i)) ? $this->input->post('unit'.$i) : '',
						'Pcs'=>($this->input->post('pcs'.$i)) ? $this->input->post('pcs'.$i) : '',
						'Cut'=>($this->input->post('cut'.$i)) ? $this->input->post('cut'.$i) : '',
						'Mts_Qty'=>($this->input->post('mts'.$i)) ? $this->input->post('mts'.$i) : '',
						'Rate'=>($this->input->post('rate'.$i)) ? $this->input->post('rate'.$i) : '',
						'Amount'=>($this->input->post('amount'.$i)) ? $this->input->post('amount'.$i) : '',
						'Sub_Ord_Ref'=>($this->input->post('ord_ref')) ? $this->input->post('ord_ref') : ''
						);
					$ins=$this->Home_model->insert('finish_purchase_details',$data1);			
				}
				print_r($this->input->post('Type'));
			}
		}
		else if($this->input->post('Type') == "Sales Order Bill")
		{
			$Voucher_NO = $this->input->post('Voucher_NO');
			
			$oldpcs = $this->db->query("SELECT sum(fpd.Pcs) as totaloldpcs,fp.Finish_Purchase_Id,fpd.Finish_Purchase_Id FROM finish_purchase_details fpd,finish_purchase fp WHERE fp.Voucher = '$Voucher_NO' AND fpd.Finish_Purchase_Id = fp.Finish_Purchase_Id AND fp.Type = 'Sales Order'")->row_array();

				if($oldpcs['totaloldpcs'] > 0)
				{
					//$odtoid = $this->db->query("SELECT sum(Pcs) as totaloldpcs from finish_purchase_details where Sub_Ord_Ref = '$Ord_Ref'")->row_array();
					$totaloldpcs = $oldpcs['totaloldpcs'];

					$afternewtotal = $this->db->query("SELECT sum(fpd.Pcs) as afternewtotal,fp.Finish_Purchase_Id,fpd.Finish_Purchase_Id FROM finish_purchase_details fpd,finish_purchase fp WHERE fp.Voucher = '$Voucher_NO' AND fpd.Finish_Purchase_Id = fp.Finish_Purchase_Id AND fp.Type = 'Sales Order Bill'")->row_array();

					$currennewpcs = 0;
					
					for ($i1 = 0; $i1 < $this->input->post('finishcountdata') ; $i1++)
					{
						$currennewpcs+=$this->input->post('pcs'.$i1);
					}

					// $totaloldpcs = $oldpcs['totaloldpcs'];
					$newtotalpcs = $currennewpcs + $afternewtotal['afternewtotal'];

					if($newtotalpcs > $totaloldpcs)
					{
						// print_r("overload pcs");
						print_r($totaloldpcs-$afternewtotal['afternewtotal']);
						// print_r($afternewtotal['afternewtotal']);
					}
					else
					{
						$result=$this->Transaction_model->last_insert_id('finish_purchase',$data);
						 // print_r("not overload pcs");
						// print_r(1);
						for ($i = 0; $i < $this->input->post('finishcountdata') ; $i++)
						{
							$data1 = array(
								'Finish_Purchase_Id'=>$result,
								'Item_Id'=>($this->input->post('itemdetails'.$i)) ? $this->input->post('itemdetails'.$i) : '',
								'Bundles'=>($this->input->post('bundles'.$i)) ? $this->input->post('bundles'.$i) : '',
								'Category_Id'=>($this->input->post('category'.$i)) ? $this->input->post('category'.$i) : '',
								'Packing_Id'=>($this->input->post('packing'.$i)) ? $this->input->post('packing'.$i) : '',				
								'Unit'=>($this->input->post('unit'.$i)) ? $this->input->post('unit'.$i) : '',
								'Pcs'=>($this->input->post('pcs'.$i)) ? $this->input->post('pcs'.$i) : '',
								'Cut'=>($this->input->post('cut'.$i)) ? $this->input->post('cut'.$i) : '',
								'Mts_Qty'=>($this->input->post('mts'.$i)) ? $this->input->post('mts'.$i) : '',
								'Rate'=>($this->input->post('rate'.$i)) ? $this->input->post('rate'.$i) : '',
								'Amount'=>($this->input->post('amount'.$i)) ? $this->input->post('amount'.$i) : '',
								'Sub_Ord_Ref'=>($this->input->post('ord_ref')) ? $this->input->post('ord_ref') : ''
								);
							$ins=$this->Home_model->insert('finish_purchase_details',$data1);


                            $itemid = $this->input->post('itemidmdl');
                            $vno = $this->input->post('vno');
                            $forrowcount = $this->input->post('countdata'.$itemid);
                            $frresult = $this->Stock_model->addpurchasestock($itemid,$_POST,$forrowcount,$vno);

						}
						print_r($this->input->post('Type'));
					}
					
					// print_r($newtotalpcs ." -- ".$totaloldpcs);
				}
				else
				{
					$result=$this->Transaction_model->last_insert_id('finish_purchase',$data);
					
					for ($i = 0; $i < $this->input->post('finishcountdata') ; $i++)
					{
						$data1 = array(
							'Finish_Purchase_Id'=>$result,
							'Item_Id'=>($this->input->post('itemdetails'.$i)) ? $this->input->post('itemdetails'.$i) : '',
							'Bundles'=>($this->input->post('bundles'.$i)) ? $this->input->post('bundles'.$i) : '',
							'Category_Id'=>($this->input->post('category'.$i)) ? $this->input->post('category'.$i) : '',
							'Packing_Id'=>($this->input->post('packing'.$i)) ? $this->input->post('packing'.$i) : '',				
							'Unit'=>($this->input->post('unit'.$i)) ? $this->input->post('unit'.$i) : '',
							'Pcs'=>($this->input->post('pcs'.$i)) ? $this->input->post('pcs'.$i) : '',
							'Cut'=>($this->input->post('cut'.$i)) ? $this->input->post('cut'.$i) : '',
							'Mts_Qty'=>($this->input->post('mts'.$i)) ? $this->input->post('mts'.$i) : '',
							'Rate'=>($this->input->post('rate'.$i)) ? $this->input->post('rate'.$i) : '',
							'Amount'=>($this->input->post('amount'.$i)) ? $this->input->post('amount'.$i) : '',
							'Sub_Ord_Ref'=>($this->input->post('ord_ref')) ? $this->input->post('ord_ref') : ''
							);
						$ins=$this->Home_model->insert('finish_purchase_details',$data1);

                        $itemid = $this->input->post('itemdetails'.$i);
                        $vno = $this->input->post('vno');
                        $forrowcount = $this->input->post('countdata'.$itemid);
                        $frresult = $this->Stock_model->addpurchasestock($itemid,$_POST,$forrowcount,$vno);

					}
					print_r($this->input->post('Type'));
				}		
		}
		else
		{
			$result=$this->Transaction_model->last_insert_id('finish_purchase',$data);
				
				for ($i = 0; $i < $this->input->post('finishcountdata') ; $i++)
				{
					$data1 = array(
						'Finish_Purchase_Id'=>$result,
						'Item_Id'=>($this->input->post('itemdetails'.$i)) ? $this->input->post('itemdetails'.$i) : '',
						'Bundles'=>($this->input->post('bundles'.$i)) ? $this->input->post('bundles'.$i) : '',
						'Category_Id'=>($this->input->post('category'.$i)) ? $this->input->post('category'.$i) : '',
						'Packing_Id'=>($this->input->post('packing'.$i)) ? $this->input->post('packing'.$i) : '',				
						'Unit'=>($this->input->post('unit'.$i)) ? $this->input->post('unit'.$i) : '',
						'Pcs'=>($this->input->post('pcs'.$i)) ? $this->input->post('pcs'.$i) : '',
						'Cut'=>($this->input->post('cut'.$i)) ? $this->input->post('cut'.$i) : '',
						'Mts_Qty'=>($this->input->post('mts'.$i)) ? $this->input->post('mts'.$i) : '',
						'Rate'=>($this->input->post('rate'.$i)) ? $this->input->post('rate'.$i) : '',
						'Amount'=>($this->input->post('amount'.$i)) ? $this->input->post('amount'.$i) : '',
						'Sub_Ord_Ref'=>($this->input->post('ord_ref')) ? $this->input->post('ord_ref') : ''
						);
					$ins=$this->Home_model->insert('finish_purchase_details',$data1);			
				}
				print_r($this->input->post('Type'));
		}
}

	public function editsavefinishpurchase()
	{
		$data = array(
			'Comapny_Id'=>($this->input->post('CompanyId')) ? $this->input->post('CompanyId') : '',
			'Type'=>($this->input->post('Type')) ? $this->input->post('Type') : '',
			'Voucher'=>($this->input->post('Voucher_NO')) ? $this->input->post('Voucher_NO') : '',
			'Ord_Ref'=>($this->input->post('ord_ref')) ? $this->input->post('ord_ref') : '',
			'Lr_No_Awb'=>($this->input->post('LR_No')) ? $this->input->post('LR_No') : '',
			'Party_Id'=>($this->input->post('PartyAcID')) ? $this->input->post('PartyAcID') : '',
			'State_Id'=>($this->input->post('StateID')) ? $this->input->post('StateID') : '',
			'Bill_No'=>($this->input->post('Bill_NO')) ? $this->input->post('Bill_NO') : '',
			'Finish_Date'=>($this->input->post('FinishPurchaseBillOrderDate')) ? $this->input->post('FinishPurchaseBillOrderDate') : '',
			'Gst_Type_Id'=>($this->input->post('GstType')) ? $this->input->post('GstType') : '',
			'Haste_Id'=>($this->input->post('Haste')) ? $this->input->post('Haste') : '',
			'Brocker_Id'=>($this->input->post('BrokerID')) ? $this->input->post('BrokerID') : '',
			'Dhara'=>($this->input->post('Dhara')) ? $this->input->post('Dhara') : '',
			'Grace'=>($this->input->post('Grace')) ? $this->input->post('Grace') : '',
			'Station_Id'=>($this->input->post('Station')) ? $this->input->post('Station') : '',
			'Transport_Id'=>($this->input->post('Transport')) ? $this->input->post('Transport') : '',
			'Screen_Series'=>($this->input->post('ScreenSeries')) ? $this->input->post('ScreenSeries') : '',
			'Party_Gstin'=>($this->input->post('Party_GSTIN')) ? $this->input->post('Party_GSTIN') : '',
			'Obtain_By'=>($this->input->post('Obtained_By')) ? $this->input->post('Obtained_By') : '',
			'Remark_Id'=>($this->input->post('RMK')) ? $this->input->post('RMK') : '',
			'Only_X'=>($this->input->post('only_x')) ? $this->input->post('only_x') : '',
			'E_Way_Bill_No'=>($this->input->post('E_Way_Bill_No')) ? $this->input->post('E_Way_Bill_No') : '',
			'Net_Amt'=>($this->input->post('Net_Amt')) ? $this->input->post('Net_Amt') : '',
			'Lr_No'=>($this->input->post('lr_no')) ? $this->input->post('lr_no') : '',
			'Lr_Date'=>($this->input->post('lr_date')) ? $this->input->post('lr_date') : '',
			'Lr_Rec_Date'=>($this->input->post('lr_rec_date')) ? $this->input->post('lr_rec_date') : '',
			'Weight'=>($this->input->post('weight')) ? $this->input->post('weight') : '',
			'Height'=>($this->input->post('height')) ? $this->input->post('height') : '',
			'Cgst'=>($this->input->post('cgst_persantage')) ? $this->input->post('cgst_persantage') : '',
			'Cgst_Amt'=>($this->input->post('amt')) ? $this->input->post('amt') : '',
			'Taxable_Value'=>($this->input->post('Taxable_Value')) ? $this->input->post('Taxable_Value') : '',
			'Bill_Amt'=>($this->input->post('Bill_Amount')) ? $this->input->post('Bill_Amount') : '',
			'Net_After_Tds'=>($this->input->post('Net_After_Tds')) ? $this->input->post('Net_After_Tds') : '',
			'Paid_Date'=>($this->input->post('Paid_Date')) ? $this->input->post('Paid_Date') : '',
			'Discount'=>($this->input->post('discount')) ? $this->input->post('discount') : '',
			'Pack_Folt'=>($this->input->post('Pack')) ? $this->input->post('Pack') : '',
			'Rd'=>($this->input->post('rd')) ? $this->input->post('rd') : '',
			'Sweets'=>($this->input->post('sweets')) ? $this->input->post('sweets') : '',
			'Oth_Bc'=>($this->input->post('Oth_Bc')) ? $this->input->post('Oth_Bc') : '',
			'Add_Amt'=>($this->input->post('add_amt')) ? $this->input->post('add_amt') : '',
			'Tds_Amt'=>($this->input->post('tds_amt')) ? $this->input->post('tds_amt') : '',
			'Gr'=>($this->input->post('gr')) ? $this->input->post('gr') : '',
			'Paid_Amt'=>($this->input->post('paid_amount')) ? $this->input->post('paid_amount') : '',
			'Total_Pcs'=>($this->input->post('totalpcs')) ? $this->input->post('totalpcs') : '',
			'Total_Mts'=>($this->input->post('totalmts')) ? $this->input->post('totalmts') : '',
			'Grand_Total'=>($this->input->post('grandtotal')) ? $this->input->post('grandtotal') : '',
			'Case_No'=>($this->input->post('case_no')) ? $this->input->post('case_no') : '',
			'Remark1'=>($this->input->post('remark1')) ? $this->input->post('remark1') : '',
			'Grand_Total1'=>($this->input->post('grandtotal1')) ? $this->input->post('grandtotal1') : '',
			'Discount_Less1'=>($this->input->post('discountless1')) ? $this->input->post('discountless1') : '',
			'Amount_Less'=>($this->input->post('amountless')) ? $this->input->post('amountless') : '',
			'Remark2'=>($this->input->post('remark2')) ? $this->input->post('remark2') : '',
			'Grand_Total2'=>($this->input->post('grandtota2')) ? $this->input->post('grandtota2') : '',
			'Discount_Less2'=>($this->input->post('discountless2')) ? $this->input->post('discountless2') : '',
			'Amount_Less2'=>($this->input->post('amountless2')) ? $this->input->post('amountless2') : '',
			'Sgst'=>($this->input->post('sgst_persantage')) ? $this->input->post('sgst_persantage') : '',
			'Sgst_Amt'=>($this->input->post('sgdt_amt')) ? $this->input->post('sgdt_amt') : '',
			'Haste_Gstin'=>($this->input->post('Haste_GSTIN')) ? $this->input->post('Haste_GSTIN') : '',
			// 'Sgst_Amt'=>($this->input->post('AddAmt2')) ? $this->input->post('AddAmt2') : '',
			// 'CreatedDate'=>date('Y-m-d')
		);

		$result=$this->Transaction_model->update('finish_purchase',$data,array('Finish_Purchase_Id'=>$this->input->post('finishpurchaseorderid')));

		$delete = $this->Home_model->deletedata('finish_purchase_details',array('Finish_Purchase_Id'=>$this->input->post('finishpurchaseorderid')));

		if($delete)
		{
			for ($i = 0; $i < $this->input->post('finishcountdata') ; $i++)
			{
				$data1 = array(
					'Finish_Purchase_Id'=>$this->input->post('finishpurchaseorderid'),
					'Item_Id'=>($this->input->post('itemdetails'.$i)) ? $this->input->post('itemdetails'.$i) : '',
					'Bundles'=>($this->input->post('bundles'.$i)) ? $this->input->post('bundles'.$i) : '',
					'Category_Id'=>($this->input->post('category'.$i)) ? $this->input->post('category'.$i) : '',
					'Packing_Id'=>($this->input->post('packing'.$i)) ? $this->input->post('packing'.$i) : '','Unit'=>($this->input->post('unit'.$i)) ? $this->input->post('unit'.$i) : '',
					'Pcs'=>($this->input->post('pcs'.$i)) ? $this->input->post('pcs'.$i) : '',
					'Cut'=>($this->input->post('cut'.$i)) ? $this->input->post('cut'.$i) : '',
					'Mts_Qty'=>($this->input->post('mts'.$i)) ? $this->input->post('mts'.$i) : '',
					'Rate'=>($this->input->post('rate'.$i)) ? $this->input->post('rate'.$i) : '',
					'Amount'=>($this->input->post('amount'.$i)) ? $this->input->post('amount'.$i) : ''
					);
				$ins=$this->Home_model->insert('finish_purchase_details',$data1);

                $itemid = $this->input->post('itemdetails'.$i);
                $vno = $this->input->post('Voucher_NO');
                $forrowcount = $this->input->post('countdata'.$itemid);

                $deletestmn = $this->Home_model->deletedata('stock_maintain',array('Item_Id'=>$itemid,'Vouchar_No'=>$vno));

                if($deletestmn)
                {
                    $frresult = $this->Stock_model->addpurchasestock($itemid,$_POST,$forrowcount,$vno);
                }
			}
		}
		    print_r($this->input->post('Type'));
	}


	// end 2/19/19
		// public function do_upload() { 
  //        $config['upload_path']   = './uploads/'; 
  //        $config['allowed_types'] = 'gif|jpg|png'; 
  //        $config['max_size']      = 100; 
  //        $config['max_width']     = 1024; 
  //        $config['max_height']    = 768;  
  //        $this->load->library('upload', $config);
			
  //        if ( ! $this->upload->do_upload('userfile')) {
  //           $error = array('error' => $this->upload->display_errors()); 
  //           print_r("expression");
  //           //$this->load->view('upload_form', $error); 
  //        }
			
  //        else { 
  //           $data = array('upload_data' => $this->upload->data()); 
  //           $this->load->view('upload_success', $data); 
  //           print_r("not expression");
  //        } 
  //     }

	// End by Milan 2/11/19
}
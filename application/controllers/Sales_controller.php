<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Sales_controller extends CI_Controller {
	function __construct()
	{
        parent::__construct();
    	$this->load->model('Transaction_model');
		$this->load->model('Company_model');
		$this->load->helper('new');
		$this->load->model('Sales_model');
    }

	public function SalesOrder()
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

		$response['salesorderdata'] = $this->Sales_model->salesorderdata();
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
		$response['getStationData'] = $this->Transaction_model->getStationData();

		$response['getscreendata'] = $this->Transaction_model->getscreendata();

		$response['getitemdetailsdata'] = $this->Transaction_model->getitemdetailsdata();
	
		$response['getCategoryData'] = $this->Transaction_model->getCategoryData();
		$response['getPackageData'] = $this->Transaction_model->getPackageData();


		$response['getAcctypeData'] = $this->Home_model->getAcctypeData();
		$response['getItemTypeData'] = $this->Home_model->getItemTypeData();
		$response['LabelData'] = $this->Home_model->selectData();
		$response['getCityData'] = $this->Home_model->getCityData();
		$response['GetTransportDataList'] = $this->Home_model->GetTransportDataList();


		$response['getPackingData'] = $this->Home_model->getPackingData();
		$response['getQualityData'] = $this->Home_model->getQualityData();
		

		if(isset($_REQUEST['salesorderid']))
		{	
			$salesorderid = $_REQUEST['salesorderid'];		
			$response['editsalesorderdata']=$this->Sales_model->editsalesorderdata($salesorderid);	
			// print_r($response['editsalesorderdata']);		
		}
		else
		{
			$response['editsalesorderdata']="";			
		}

		$this->load->view('Transaction/SalesOrderLatest',$response);
	}

	public function PrintSalesOrder()
	{
		$salesid=$_REQUEST['salesid'];
		$result['PrintFinishPurchase']=$this->Sales_model->printsalesorder($salesid);
		// print_r($result['PrintFinishPurchase']);
		$this->load->view('Transaction/PrintSalesOrder',$result);
	}

	public function SalesOrderBill()
	{
//        $this->output->set_header("Cache-Control: no-store, no-cache, must-revalidate");
//        $this->output->set_header("Cache-Control: post-check=0, pre-check=0");
//        $this->output->set_header("Pragma: no-cache");
//        $this->output->cache(2);

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

		$response['finishpurchaseorderdata'] = $this->Sales_model->salesorderbilldata();
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
		$response['getStationData'] = $this->Transaction_model->getStationData();
		
		$response['getscreendata'] = $this->Transaction_model->getscreendata();

		$response['getitemdetailsdata'] = $this->Transaction_model->getitemdetailsdata();
	
		$response['getCategoryData'] = $this->Transaction_model->getCategoryData();
		$response['getPackageData'] = $this->Transaction_model->getPackageData();


		$response['getAcctypeData'] = $this->Home_model->getAcctypeData();
		$response['getItemTypeData'] = $this->Home_model->getItemTypeData();
		$response['LabelData'] = $this->Home_model->selectData();
		$response['getCityData'] = $this->Home_model->getCityData();
		$response['GetTransportDataList'] = $this->Home_model->GetTransportDataList();


		$response['getPackingData'] = $this->Home_model->getPackingData();
		$response['getQualityData'] = $this->Home_model->getQualityData();
		

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

		$this->load->view('Transaction/SalesOrderBillLatest',$response);
	}

	public function findsalebilldata()
	{
		$voucharno = $this->input->post('voucharno');
		$findsalebilldatabyvoucharno = $this->Sales_model->findbilldatabyvoucharno($voucharno);

		$orderbydata = array(
			'Finish_Purchase_Id' => $findsalebilldatabyvoucharno['Finish_Purchase_Id'],
			'Comapny_Id' => $findsalebilldatabyvoucharno['Comapny_Id'],
			'Type' => $findsalebilldatabyvoucharno['Type'],
			'Voucher' => $findsalebilldatabyvoucharno['Voucher'],
			'Ord_Ref' => $findsalebilldatabyvoucharno['Ord_Ref'],
			'Lr_No_Awb' => $findsalebilldatabyvoucharno['Lr_No_Awb'],
			'Party_Id' => $findsalebilldatabyvoucharno['Party_Id'],
			'State_Id' => $findsalebilldatabyvoucharno['State_Id'],
			'Bill_No' => $findsalebilldatabyvoucharno['Bill_No'],
			'Finish_Date' => $findsalebilldatabyvoucharno['Finish_Date'],
			'Gst_Type_Id' => $findsalebilldatabyvoucharno['Gst_Type_Id'],
			'Haste_Id' => $findsalebilldatabyvoucharno['Haste_Id'],
			'Brocker_Id' => $findsalebilldatabyvoucharno['Brocker_Id'],
			'Dhara' => $findsalebilldatabyvoucharno['Dhara'],
			'Grace' => $findsalebilldatabyvoucharno['Grace'],
			'Station_Id' => $findsalebilldatabyvoucharno['Station_Id'],
			'Transport_Id' => $findsalebilldatabyvoucharno['Transport_Id'],
			'Station_Id' => $findsalebilldatabyvoucharno['Station_Id'],
			'Screen_Series' => $findsalebilldatabyvoucharno['Screen_Series'],
			'Party_Gstin' => $findsalebilldatabyvoucharno['Party_Gstin'],
			'Obtain_By' => $findsalebilldatabyvoucharno['Obtain_By'],
			'Remark_Id' => $findsalebilldatabyvoucharno['Remark_Id'],
			'Only_X' => $findsalebilldatabyvoucharno['Only_X'],
			'E_Way_Bill_No' => $findsalebilldatabyvoucharno['E_Way_Bill_No'],
			'Net_Amt' => $findsalebilldatabyvoucharno['Net_Amt'],
			'Lr_No' => $findsalebilldatabyvoucharno['Lr_No'],
			'Lr_Date' => $findsalebilldatabyvoucharno['Lr_Date'],
			'Lr_Rec_Date' => $findsalebilldatabyvoucharno['Lr_Rec_Date'],
			'Weight' => $findsalebilldatabyvoucharno['Weight'],
			'Height' => $findsalebilldatabyvoucharno['Height'],
			'Cgst' => $findsalebilldatabyvoucharno['Cgst'],
			'Cgst_Amt' => $findsalebilldatabyvoucharno['Cgst_Amt'],
			'Taxable_Value' => $findsalebilldatabyvoucharno['Taxable_Value'],
			'Bill_Amt' => $findsalebilldatabyvoucharno['Bill_Amt'],
			'Net_After_Tds' => $findsalebilldatabyvoucharno['Net_After_Tds'],
			'Paid_Date' => $findsalebilldatabyvoucharno['Paid_Date'],
			'Discount' => $findsalebilldatabyvoucharno['Discount'],
			'Pack_Folt' => $findsalebilldatabyvoucharno['Pack_Folt'],
			'Rd' => $findsalebilldatabyvoucharno['Rd'],
			'Sweets' => $findsalebilldatabyvoucharno['Sweets'],
			'Oth_Bc' => $findsalebilldatabyvoucharno['Oth_Bc'],
			'Add_Amt' => $findsalebilldatabyvoucharno['Add_Amt'],
			'Tds_Amt' => $findsalebilldatabyvoucharno['Tds_Amt'],
			'Gr' => $findsalebilldatabyvoucharno['Gr'],
			'Paid_Amt' => $findsalebilldatabyvoucharno['Paid_Amt'],
			'Rec_Sale_Pcs' => $findsalebilldatabyvoucharno['Rec_Sale_Pcs'],
			'Rec_Sale_Mts' => $findsalebilldatabyvoucharno['Rec_Sale_Mts'],
			'Rec_Sale_Vno' => $findsalebilldatabyvoucharno['Rec_Sale_Vno'],
			'Sgst' => $findsalebilldatabyvoucharno['Sgst'],
			'Sgst_Amt' => $findsalebilldatabyvoucharno['Sgst_Amt'],
			'Total_Pcs' => $findsalebilldatabyvoucharno['Total_Pcs'],
			'Total_Mts' => $findsalebilldatabyvoucharno['Total_Mts'],
			'Grand_Total' => $findsalebilldatabyvoucharno['Grand_Total'],
			'Case_No' => $findsalebilldatabyvoucharno['Case_No'],
			'Remark1' => $findsalebilldatabyvoucharno['Remark1'],
			'Grand_Total1' => $findsalebilldatabyvoucharno['Grand_Total1'],
			'Discount_Less1' => $findsalebilldatabyvoucharno['Discount_Less1'],
			'Amount_Less' => $findsalebilldatabyvoucharno['Amount_Less'],
			'Remark2' => $findsalebilldatabyvoucharno['Remark2'],
			'Grand_Total2' => $findsalebilldatabyvoucharno['Grand_Total2'],
			'Discount_Less2' => $findsalebilldatabyvoucharno['Discount_Less2'],
			'Amount_Less2' => $findsalebilldatabyvoucharno['Amount_Less2'],
			'Haste_Gstin' => $findsalebilldatabyvoucharno['Haste_Gstin'],
			'Freight_Discount' => $findsalebilldatabyvoucharno['Freight_Discount'],
		);

		//getextradata($findsalebilldatabyvoucharno['Finish_Purchase_Id']);
		
		echo json_encode($orderbydata);
		// echo json_encode($orderbydata1);
	}

	public function findsalesmiddlecontent()
	{
		$this->load->library('someclass');
		$voucharno = $this->input->post('voucharno');
		$salesbilldata = $this->Sales_model->findsalesmiddlecontent($voucharno);

		$dt = $this->someclass->some_method($salesbilldata['Finish_Purchase_Id']);
		print_r($dt);
	}

	public function salebilltotalpcscal()
	{
		$voucharno = $this->input->post('voucharno');

		$oldpcs = $this->db->query("SELECT sum(fpd.Pcs) as totaloldpcs,fp.Finish_Purchase_Id,fpd.Finish_Purchase_Id FROM finish_purchase_details fpd,finish_purchase fp WHERE fp.Voucher = '$voucharno' AND fpd.Finish_Purchase_Id = fp.Finish_Purchase_Id AND fp.Type = 'Sales Order'")->row_array();

		$afternewtotal = $this->db->query("SELECT sum(fpd.Pcs) as afternewtotal,fp.Finish_Purchase_Id,fpd.Finish_Purchase_Id FROM finish_purchase_details fpd,finish_purchase fp WHERE fp.Voucher = '$voucharno' AND fpd.Finish_Purchase_Id = fp.Finish_Purchase_Id AND fp.Type = 'Sales Order Bill'")->row_array();

		$array = array();
		$array = array(
			'totaloldpcs' =>$oldpcs['totaloldpcs'],
			'afternewtotal' =>$afternewtotal['afternewtotal'],
		);
		
		echo json_encode($array);
	}

	public function checkoldorderornot()
	{
		$Voucher_NO = $this->input->post('Voucher_NO');
		$oldtotal = checkoldorderornot($Voucher_NO);
		print_r($oldtotal);
	}

	public function PrintSalesOrderBill()
	{
		$salesbillid=$_REQUEST['salesbillid'];
		$result['PrintSalesOrderBill']=$this->Transaction_model->printFinishPurchaseOrder($salesbillid);
		// print_r($result['PrintFinishPurchase']);
		$this->load->view('Transaction/PrintSalesOrderBill',$result);
	}

	public function FinishPurchaseOrderBill()
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

		$response['finishpurchaseorderdata'] = $this->Transaction_model->finishpurchaseorderbilldata();
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
		$response['getStationData'] = $this->Transaction_model->getStationData();
		
		$response['getscreendata'] = $this->Transaction_model->getscreendata();

		$response['getitemdetailsdata'] = $this->Transaction_model->getitemdetailsdata();
	
		$response['getCategoryData'] = $this->Transaction_model->getCategoryData();
		$response['getPackageData'] = $this->Transaction_model->getPackageData();


		$response['getAcctypeData'] = $this->Home_model->getAcctypeData();
		$response['getItemTypeData'] = $this->Home_model->getItemTypeData();
		$response['LabelData'] = $this->Home_model->selectData();
		$response['getCityData'] = $this->Home_model->getCityData();
		$response['GetTransportDataList'] = $this->Home_model->GetTransportDataList();


		$response['getPackingData'] = $this->Home_model->getPackingData();
		$response['getQualityData'] = $this->Home_model->getQualityData();
		

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

		$this->load->view('Transaction/SalesOrderBillLatest',$response);
	}
}
?>
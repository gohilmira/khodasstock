<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Transaction_controller extends CI_Controller {

	function __construct()
	{
        parent::__construct();
		$this->load->model('Transaction_model');
		$this->load->model('Company_model');
		$this->load->helper('new');
    }
    public function SalesOrder()
	{
		if(isset($_REQUEST['SaleOrderID']))
		{			
			$response['editsaleOrderdata']=$this->Transaction_model->select_where_row('saleorder',array('SaleOrderID'=>$_REQUEST['SaleOrderID']));
		}
		else
		{			
			$response['editsaleOrderdata']="";
		}
		$result=$this->Transaction_model->getvoucherNo();
		$response['recordcount']=$result['rows'];
		$response['voucherData']=$result['data'];
		$response['GetAllSellOrderData'] = $this->Transaction_model->GetAllSellOrderData();
		$response['getCompanyData'] = $this->Home_model->getCompanyData();
		$response['getpartyacData'] = $this->Home_model->getpartyacData();
		$response['getAcctypeData'] = $this->Home_model->getAcctypeData();
		$response['getItemTypeData'] = $this->Home_model->getItemTypeData();
		$response['getAccountData'] = $this->Home_model->getAccountData();
		$response['LabelData'] = $this->Home_model->selectData();
		$response['getStationData'] = $this->Home_model->getStationData();
		$response['getTransportData'] = $this->Home_model->getTransportData();
		$response['getBrokerData'] = $this->Home_model->getBrokerData();
		$response['getCityData'] = $this->Home_model->getCityData();
		$response['GetHasteList'] = $this->Home_model->GetHasteList();
		$response['getStateData'] = $this->Home_model->getStateData();
		$response['getRemarkData'] = $this->Home_model->getRemarkData();
		$response['getGstTypeData'] = $this->Home_model->getGstTypeData();
		$response['getPackingData'] = $this->Home_model->getPackingData();
		$response['getItemDetailsListData'] = $this->Home_model->getItemDetailsListData();
		$this->load->view('Transaction/SalesOrder',$response);
	}
	public function fetchPartyDetail()
	{
		$PartyID = $_POST['partyid'];
		//echo "SELECT * FROM ledger where Ledger_Id='".$PartyID."'";
		$checkdata=$this->db->query("SELECT * FROM ledger where Ledger_Id='".$PartyID."'");
		$row = $checkdata->num_rows();
		if(sizeof($row) > 0)
		{
			$rowData = $checkdata->row_array();
			$partyData = array(
						'LDhara'=>$rowData['LDhara'],
						'LGstin'=>$rowData['LGstin'],
						'BrokerID'=>$rowData['BrokerID'],
						'StationID'=>$rowData['StationID'],
						'TransportID'=>$rowData['TransportID'],
						'SeriesID'=>$rowData['SeriesID'],
						'LRemark'=>$rowData['LRemark'],
						'StateID'=>$rowData['StateID']
					);
		}
		echo json_encode($partyData);	
	}

	public function getBrokerDetails()
	{
		$brokerID=$_POST["WeaverIDData"];
		$queryData = $this->db->query("SELECT BrokerID from account_group where AcID = '".$brokerID."'");
		$BrokerIDData = $queryData->row_array();
		$brokerIDD=$BrokerIDData['BrokerID'];
		$getBrokerDataAC = $this->Transaction_model->getBrokerDataAC($brokerIDD);
		if(sizeof($getBrokerDataAC) > 0)
		{
	        foreach ($getBrokerDataAC as $qgetBrokerDataAC) 
				        { 
	            echo '<option value="'.$qgetBrokerDataAC->Ledger_Id.'">'.$qgetBrokerDataAC->LName.'</option>';
	        }
	    }
	    else
	    {
	        echo '<option value="">Record Not Available</option>';
	    }
	}

	public function fetchHasteDetail()
	{
		$HasteID = $_POST['data'];
		$checkdata=$this->db->query("SELECT * FROM haste where HasteID='".$HasteID."'");
		$row = $checkdata->num_rows();
		if($row > 0)
		{
			$rowData = $checkdata->row_array();
			$partyData = array(
						'HasteGstIn'=>$rowData['HasteGstIn']
					);
		}
		echo json_encode($partyData);	
	}

	public function GetItem()
	{
		$getItemDetailsData = $this->Home_model->getItemDetailsData();
		if(sizeof($getItemDetailsData) > 0)
		{
			echo '<option value="">Select Item</option>';
	        foreach ($getItemDetailsData as $qgetItemDetailsData) 
				        { 
	            echo '<option value="'.$qgetItemDetailsData->ItemdetailID.'">'.$qgetItemDetailsData->IName.'</option>';
	        }
	    }
	    else
	    {
	        echo '<option value="">Record Not Available</option>';
	    }
	}
	public function GetPackage()
	{
		$getPackingData = $this->Home_model->getPackingData();
		if(sizeof($getPackingData) > 0)
		{
			echo '<option value="">Select Package</option>';
	        foreach ($getPackingData as $qgetPackingData) 
				        { 
	            echo '<option value="'.$qgetPackingData->PackingID.'">'.$qgetPackingData->PackingName.'</option>';
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
		if(sizeof($row) > 0)
		{
			$rowData = $checkdata->row_array();
			$partyData = array(
						'ICut'=>$rowData['ICut'],
						'ISellingRate'=>$rowData['ISellingRate'],
						'IHsn'=>$rowData['IHsn']
					);
		}
		echo json_encode($partyData);	
	}
	public function saveSaleOrder()
	{
		$data = array(
			'CompanyID'=>($this->input->post('CompanyID')) ? $this->input->post('CompanyID') : '',
			'PartyID'=>($this->input->post('PartyID')) ? $this->input->post('PartyID') : '',
			'StateID'=>($this->input->post('StateID')) ? $this->input->post('StateID') : '',
			'HasteID'=>($this->input->post('HasteID')) ? $this->input->post('HasteID') : '',
			'GstTypeID'=>($this->input->post('GstTypeID')) ? $this->input->post('GstTypeID') : '',
			'BrokerID'=>($this->input->post('BrokerID')) ? $this->input->post('BrokerID') : '',
			'transportID'=>($this->input->post('transportID')) ? $this->input->post('transportID') : '',
			'ScreenSeriesID'=>($this->input->post('ScreenSeriesID')) ? $this->input->post('ScreenSeriesID') : '',
			'SaleVoucher'=>($this->input->post('SaleVoucher')) ? $this->input->post('SaleVoucher') : '',
			'SaleOffer'=>($this->input->post('SaleOffer')) ? $this->input->post('SaleOffer') : '',
			'SaleOrderNo'=>($this->input->post('SaleOrderNo')) ? $this->input->post('SaleOrderNo') : '',
			'SaleLrNoAwb'=>($this->input->post('SaleLrNoAwb')) ? $this->input->post('SaleLrNoAwb') : '',
			'SaleDate'=>($this->input->post('SaleDate')) ? $this->input->post('SaleDate') : '',
			'SaleHasteGstin'=>($this->input->post('SaleHasteGstin')) ? $this->input->post('SaleHasteGstin') : '',
			'SalePartyGstin'=>($this->input->post('SalePartyGstin')) ? $this->input->post('SalePartyGstin') : '',
			'SaleVehicleNo'=>($this->input->post('SaleVehicleNo')) ? $this->input->post('SaleVehicleNo') : '',
			'SaleDhara'=>($this->input->post('SaleDhara')) ? $this->input->post('SaleDhara') : '',
			'SaleGrace'=>($this->input->post('SaleGrace')) ? $this->input->post('SaleGrace') : '',
			'SaleHsnCode'=>($this->input->post('SaleHsnCode')) ? $this->input->post('SaleHsnCode') : '',
			'SaleOrderExecu'=>($this->input->post('SaleOrderExecu')) ? $this->input->post('SaleOrderExecu') : '',
			'SaleGrandTotal1'=>($this->input->post('SaleGrandTotal1')) ? $this->input->post('SaleGrandTotal1') : '',
			'SaleGrandTotal12'=>($this->input->post('SaleGrandTotal12')) ? $this->input->post('SaleGrandTotal12') : '',
			'SaleGrandTotal13'=>($this->input->post('SaleGrandTotal13')) ? $this->input->post('SaleGrandTotal13') : '',
			'SaleDbtainedBy'=>($this->input->post('SaleDbtainedBy')) ? $this->input->post('SaleDbtainedBy') : '',
			'SaleDeliveryDays'=>($this->input->post('SaleDeliveryDays')) ? $this->input->post('SaleDeliveryDays') : '',
			'RemarkID'=>($this->input->post('RemarkID')) ? $this->input->post('RemarkID') : '',
			'SaleDeliveryDueDate'=>($this->input->post('SaleDeliveryDueDate')) ? $this->input->post('SaleDeliveryDueDate') : '',
			'SaleEwayBillNo'=>($this->input->post('SaleEwayBillNo')) ? $this->input->post('SaleEwayBillNo') : '',
			'SaleNetAmt'=>($this->input->post('SaleNetAmt')) ? $this->input->post('SaleNetAmt') : '',
			'SaleLrNo'=>($this->input->post('SaleLrNo')) ? $this->input->post('SaleLrNo') : '',
			'SaleLrDate'=>($this->input->post('SaleLrDate')) ? $this->input->post('SaleLrDate') : '',
			'SaleLrRecDate'=>($this->input->post('SaleLrRecDate')) ? $this->input->post('SaleLrRecDate') : '',
			'SaleWeight'=>($this->input->post('SaleWeight')) ? $this->input->post('SaleWeight') : '',

			'SaleFreight'=>($this->input->post('SaleFreight')) ? $this->input->post('SaleFreight') : '',
			'RemarkID1'=>($this->input->post('RemarkID1')) ? $this->input->post('RemarkID1') : '',
			'SaleNo1'=>($this->input->post('SaleNo1')) ? $this->input->post('SaleNo1') : '',
			'SaleNo11'=>($this->input->post('SaleNo11')) ? $this->input->post('SaleNo11') : '',
			'SaleAmt1'=>($this->input->post('SaleAmt1')) ? $this->input->post('SaleAmt1') : '',
			'RemarkID2'=>($this->input->post('RemarkID2')) ? $this->input->post('RemarkID2') : '',
			'SaleNo2'=>($this->input->post('SaleNo2')) ? $this->input->post('SaleNo2') : '',
			'SaleNo21'=>($this->input->post('SaleNo21')) ? $this->input->post('SaleNo21') : '',
			'SaleAmt2'=>($this->input->post('SaleAmt2')) ? $this->input->post('SaleAmt2') : '',
			'RemarkID3'=>($this->input->post('RemarkID3')) ? $this->input->post('RemarkID3') : '',
			'SaleNo3'=>($this->input->post('SaleNo3')) ? $this->input->post('SaleNo3') : '',
			'SaleNo31'=>($this->input->post('SaleNo31')) ? $this->input->post('SaleNo31') : '',
			'SaleAmt3'=>($this->input->post('SaleAmt3')) ? $this->input->post('SaleAmt3') : '',
			'SaleNetAmt1'=>($this->input->post('SaleNetAmt1')) ? $this->input->post('SaleNetAmt1') : '',
			'SaleCgstIgst'=>($this->input->post('SaleCgstIgst')) ? $this->input->post('SaleCgstIgst') : '',
			'SaleCgstAmt'=>($this->input->post('SaleCgstAmt')) ? $this->input->post('SaleCgstAmt') : '',
			'SaleSgst'=>($this->input->post('SaleSgst')) ? $this->input->post('SaleSgst') : '',

			'SaleSgstAmt'=>($this->input->post('SaleSgstAmt')) ? $this->input->post('SaleSgstAmt') : '',
			'SaleTaxableValue'=>($this->input->post('SaleTaxableValue')) ? $this->input->post('SaleTaxableValue') : '',
			'SaleBillAmt'=>($this->input->post('SaleBillAmt')) ? $this->input->post('SaleBillAmt') : '',
			'SaleNetAfterTds'=>($this->input->post('SaleNetAfterTds')) ? $this->input->post('SaleNetAfterTds') : '',
			'SalePaidDate'=>($this->input->post('SalePaidDate')) ? $this->input->post('SalePaidDate') : '',
			'SaleDisc'=>($this->input->post('SaleDisc')) ? $this->input->post('SaleDisc') : '',
			'SalePackFollo'=>($this->input->post('SalePackFollo')) ? $this->input->post('SalePackFollo') : '',
			'SaleRd'=>($this->input->post('SaleRd')) ? $this->input->post('SaleRd') : '',

			'SaleSweets'=>($this->input->post('SaleSweets')) ? $this->input->post('SaleSweets') : '',
			'SaleOthBc'=>($this->input->post('SaleOthBc')) ? $this->input->post('SaleOthBc') : '',
			'SaleAddAmt'=>($this->input->post('SaleAddAmt')) ? $this->input->post('SaleAddAmt') : '',
			'SaleTdsAmt'=>($this->input->post('SaleTdsAmt')) ? $this->input->post('SaleTdsAmt') : '',
			'SaleGr'=>($this->input->post('SaleGr')) ? $this->input->post('SaleGr') : '',
			'SalePaidAmt'=>($this->input->post('SalePaidAmt')) ? $this->input->post('SalePaidAmt') : '',

			'RecSalePcs'=>($this->input->post('RecSalePcs')) ? $this->input->post('RecSalePcs') : '',
			'RecSaleMts'=>($this->input->post('RecSaleMts')) ? $this->input->post('RecSaleMts') : '',
			'ResSaleVno'=>($this->input->post('ResSaleVno')) ? $this->input->post('ResSaleVno') : '',
			'CreatedDate'=>date('Y-m-d')
		);
		$result=$this->Transaction_model->last_insert_id('saleorder',$data);
		
		for ($i = 0; $i < $this->input->post('SellOrdercountdata') ; $i++)
		{
			$data1 = array(
				'SaleOrderID'=>$result,
				'SalePick'=>($this->input->post('SalePick'.$i)) ? $this->input->post('SalePick'.$i) : '',
				'SaleRef'=>($this->input->post('SaleRef'.$i)) ? $this->input->post('SaleRef'.$i) : '',
				'SaleMainScreen'=>($this->input->post('SaleMainScreen'.$i)) ? $this->input->post('SaleMainScreen'.$i) : '',
				
				'SaleScreenName'=>($this->input->post('SaleScreenName'.$i)) ? $this->input->post('SaleScreenName'.$i) : '',
				'SalePacking'=>($this->input->post('SalePacking'.$i)) ? $this->input->post('SalePacking'.$i) : '',
				'SaleUnit'=>($this->input->post('SaleUnit'.$i)) ? $this->input->post('SaleUnit'.$i) : '',
				'SalePcs'=>($this->input->post('SalePcs'.$i)) ? $this->input->post('SalePcs'.$i) : '',
				'SaleCut'=>($this->input->post('SaleCut'.$i)) ? $this->input->post('SaleCut'.$i) : '',
				'SaleMtsQty'=>($this->input->post('SaleMtsQty'.$i)) ? $this->input->post('SaleMtsQty'.$i) : '',
				'SaleRate'=>($this->input->post('SaleRate'.$i)) ? $this->input->post('SaleRate'.$i) : '',
				'SaleAmount'=>($this->input->post('SaleAmount'.$i)) ? $this->input->post('SaleAmount'.$i) : '',
				'SaleListRD'=>($this->input->post('SaleListRD'.$i)) ? $this->input->post('SaleListRD'.$i) : '',
				'SaleListDisc'=>($this->input->post('SaleListDisc'.$i)) ? $this->input->post('SaleListDisc'.$i) : '',
				'ManuaalAddLess'=>($this->input->post('ManuaalAddLess'.$i)) ? $this->input->post('ManuaalAddLess'.$i) : '',
				'SaleListCgst'=>($this->input->post('SaleListCgst'.$i)) ? $this->input->post('SaleListCgst'.$i) : '',
				'SaleListSgst'=>($this->input->post('SaleListSgst'.$i)) ? $this->input->post('SaleListSgst'.$i) : '',
				'SaleCgstIgstAmt'=>($this->input->post('SaleCgstIgstAmt'.$i)) ? $this->input->post('SaleCgstIgstAmt'.$i) : '',
				'SaleListSgstAmt'=>($this->input->post('SaleListSgstAmt'.$i)) ? $this->input->post('SaleListSgstAmt'.$i) : '',
				'CreatedDate'=>date('Y-m-d')
				);
			$ins=$this->Home_model->insert('saleorderlist',$data1);			
		}
	}


	// Start by Milan 2/11/19
   	public function GreyPurchaseOrder()
	{
		if(isset($_REQUEST['purchaseorderid']))
		{			
			$response['editpurchaseOrderdata']=$this->Transaction_model->select_where_row('greypurchaseorder',array('PurchaseOrderId'=>$_REQUEST['purchaseorderid']));
		}
		else
		{			
			$response['editpurchaseOrderdata']="";
		}
		$response['PurchaseOrderdata'] = $this->Transaction_model->selectPurchaseOrder('greypurchaseorder');


		$response['acctypedata'] = $this->Home_model->getacctypedata_result();
		$response['accgrpdata'] = $this->Home_model->getAccountData_result();
		$response['itemdetailsdata'] = $this->Home_model->getItemDetailsData_array();
		$response['screendata'] = $this->db->query("SELECT ScreenRegisterID,ItemDCut from screenregister_entry")->result_array();
		$response['citydata'] = $this->Home_model->getCityData_array();
		$response['transportdata'] = $this->Home_model->getTransportData_array();
		$response['statedata'] = $this->Home_model->getStateData();
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
			'WeaverID'=>($this->input->post('WeaverID')) ? $this->input->post('WeaverID') : '0',
			'BrokerID'=>($this->input->post('BrokerID')) ? $this->input->post('BrokerID') : '0',
			'QualityID'=>($this->input->post('QualityID')) ? $this->input->post('QualityID') : '0',
			'RemarkID'=>($this->input->post('RemarkID')) ? $this->input->post('RemarkID') : '0',
			'CheckerID'=>($this->input->post('CheckerID')) ? $this->input->post('CheckerID') : '0',
			'GreyOrderNo'=>($this->input->post('GreyOrderNo')) ? $this->input->post('GreyOrderNo') : '0',
			'GreyOrderGiven'=>($this->input->post('GreyOrderGiven')) ? $this->input->post('GreyOrderGiven') : '0',
			'GreyOrderDate'=>($this->input->post('GreyOrderDate')) ? $this->input->post('GreyOrderDate') : '0',
			'GreyAvgWt'=>($this->input->post('GreyAvgWt')) ? $this->input->post('GreyAvgWt') : '0',
			'GreyPalluCut'=>($this->input->post('GreyPalluCut')) ? $this->input->post('GreyPalluCut') : '0',
			'GreyPanna'=>($this->input->post('GreyPanna')) ? $this->input->post('GreyPanna') : '0',
			'GreyNoLots'=>($this->input->post('GreyNoLots')) ? $this->input->post('GreyNoLots') : '0',
			'GreyPcsPerLots'=>($this->input->post('GreyPcsPerLots')) ? $this->input->post('GreyPcsPerLots') : '0',
			'GreyRateMts'=>($this->input->post('GreyRateMts')) ? $this->input->post('GreyRateMts') : '0',
			'GreyOrderPcs'=>($this->input->post('GreyOrderPcs')) ? $this->input->post('GreyOrderPcs') : '0',
			'GreyOrderMts'=>($this->input->post('GreyOrderMts')) ? $this->input->post('GreyOrderMts') : '0',
			'GreyOrderWt'=>($this->input->post('GreyOrderWt')) ? $this->input->post('GreyOrderWt') : '0',
			'GreyMtsPerKg'=>($this->input->post('GreyMtsPerKg')) ? $this->input->post('GreyMtsPerKg') : '0',
			'GreyRatePerKg'=>($this->input->post('GreyRatePerKg')) ? $this->input->post('GreyRatePerKg') : '0',
			'GreyDhara'=>($this->input->post('GreyDhara')) ? $this->input->post('GreyDhara') : '0',
			'GreyGraceDays'=>($this->input->post('GreyGraceDays')) ? $this->input->post('GreyGraceDays') : '0',
			'GreyLastDate'=>($this->input->post('GreyLastDate')) ? $this->input->post('GreyLastDate') : '0'		);

		if($this->input->post('PurchaseOrderId') != "")
		{
			$record = array_merge($data, array('UpdateDate'=>date('Y-m-d H:i:s',strtotime('NOW'))));
			$result=$this->Home_model->update('greypurchaseorder',$record,array('PurchaseOrderId'=>$this->input->post('PurchaseOrderId')));
			print_r($result);
		}
		else
		{
			$record = array_merge($data, array('CretedDate'=>date('Y-m-d H:i:s',strtotime('NOW'))));
			$result = $this->Home_model->insert('greypurchaseorder', $record);
			print_r($result);
		}
	}

	public function printPurchaseOrder()
	{
		$Purchase_Order_Id=$_REQUEST['printPurchase'];
		$result['printPurchaseData']=$this->Transaction_model->selectJoinData($Purchase_Order_Id);
		$this->load->view('Transaction/printPurchaseOrder',$result);
	}

	public function modeldata()
	{
		$cardno = $this->input->post('cardno');
		$type = $this->input->post('type');
		$QualityIDData = $this->input->post('QualityIDData');
		$GreyPPartyAcID = $this->input->post('GreyPPartyAcID');
		$CompanyIDData = $this->input->post('CompanyIDData');
		$GreyPBillNo = $this->input->post('GreyPBillNo');
		$datepicker = $this->input->post('datepicker');
		$counter = $this->input->post('counter');
		$avgwt = $this->input->post('avgwt');
		
		modeldata($cardno,$QualityIDData,$GreyPPartyAcID,$CompanyIDData,$GreyPBillNo,$datepicker,$counter,$avgwt,$type);
	}
	public function getTaka()
    {
    	$sql=$this->db->query("SELECT TakaCardNo FROM greyptakadetails  ORDER BY TakaDetailsID DESC LIMIT 1")->row_array();
    	$cardno=$sql['TakaCardNo'];
    	$result=$this->db->query("SELECT COUNT(TakaDetailsID) AS takaid FROM greyptakadetails where TakaCardNo='$cardno'")->row_array();
    	$takaid=$result['takaid'];
    	
    	print_r($takaid);
    }

	public function GreyPurchaseOrderBill()
	{
		
		if(isset($_REQUEST['purchaseorderBillid']))
		{
			$response['editpurchaseOrderBilldata']=$this->Home_model->select_where_row('greypurchaseorderbill',array('greypurchaseorderBillID'=>$_REQUEST['purchaseorderBillid']));
		}
		else
		{
			$response['editpurchaseOrderBilldata']="";			
		}
		$response['selectPurchaseOrderBill'] = $this->Transaction_model->selectPurchaseOrderBill();

		$response['getCompanyData'] = $this->Home_model->getCompanyData();
		$response['getAccountData'] = $this->Home_model->getAccountData();
		$response['getGreyPartyData'] = $this->Home_model->getGreyPartyData();
		$response['getGreyPartyData1'] = $this->Home_model->getGreyPartyData();
		$response['getBrokerData'] = $this->Home_model->getBrokerData();
		$response['getBrokerData1'] = $this->Home_model->getBrokerData();
		$response['getBrokerData2'] = $this->Home_model->getBrokerData();
		$response['getQualityData'] = $this->Home_model->getQualityData();
		$response['getremarkData'] = $this->Home_model->getremarkData();
		$response['getStateData'] = $this->Home_model->getStateData();
		$response['getStateData1'] = $this->Home_model->getStateData();
		$response['getgstTypeData'] = $this->Home_model->getgstTypeData();
		$response['getCityData'] = $this->Home_model->getCityData();
		$response['getacctypedata'] = $this->Home_model->getacctypedata();
		$response['getAccountData_result'] = $this->Home_model->getAccountData_result();
		$response['getAccountData_result1'] = $this->Home_model->getAccountData_result();
		$response['getItemTypeData'] = $this->Home_model->getItemTypeData();
		$response['selectData'] = $this->Home_model->selectData();
		$response['GetTransportDataList'] = $this->Home_model->GetTransportDataList();
		$response['getweaverData'] = $this->Home_model->getAccountData();
		$response['getgreyQualityData'] = $this->Home_model->getgreyQualityData();
		$response['getcheckerData'] = $this->Home_model->getcheckerData();
		$response['getMillDespData'] = $this->Home_model->getMillDespData();
		$response['getMillDespData1'] = $this->Home_model->getMillDespData();
		$response['getordernoData'] = $this->Transaction_model->getordernoData();
		$this->load->view('Transaction/GreyPurchaseOrderBill',$response);
	}
	public function GetMillData()
	{
		$getMillDespData = $this->Home_model->getMillDespData();
		if(sizeof($getMillDespData) > 0)
		{
			echo '<option value="">Select Item</option>';
	        foreach ($getMillDespData as $qgetMillDespData) 
				        { 
	            echo '<option value="'.$qgetMillDespData->Ledger_Id.'">'.$qgetMillDespData->LName.'</option>';
	        }
	    }
	    else
	    {
	        echo '<option value="">Record Not Available</option>';
	    }
	}
	public function savePurchaseOrderBill()
	{
		$data = array(
			'CompanyID'=>($this->input->post('CompanyID')) ? $this->input->post('CompanyID') : '',
			'GreyPSrNo'=>($this->input->post('GreyPSrNo')) ? $this->input->post('GreyPSrNo') : '',
			'GreyPBillNo'=>($this->input->post('GreyPBillNo')) ? $this->input->post('GreyPBillNo') : '',
			'GreyPPartyAcID'=>($this->input->post('GreyPPartyAcID')) ? $this->input->post('GreyPPartyAcID') : '',
			'GreyPOrderNo'=>($this->input->post('GreyPOrderNo')) ? $this->input->post('GreyPOrderNo') : '',
			'GreyPPurchaseOrderBillDate'=>($this->input->post('GreyPPurchaseOrderBillDate')) ? $this->input->post('GreyPPurchaseOrderBillDate') : '',
			'GreyPHsnCode'=>($this->input->post('GreyPHsnCode')) ? $this->input->post('GreyPHsnCode') : '',
			'BrokerID'=>($this->input->post('BrokerID')) ? $this->input->post('BrokerID') : '',
			'QualityID'=>($this->input->post('QualityID')) ? $this->input->post('QualityID') : '',
			'GreyPPaid'=>($this->input->post('GreyPPaid')) ? $this->input->post('GreyPPaid') : '',
			'GreyPPaidDate'=>($this->input->post('GreyPPaidDate')) ? $this->input->post('GreyPPaidDate') : '',
			'GreyPDespatchMTS'=>($this->input->post('GreyPDespatchMTS')) ? $this->input->post('GreyPDespatchMTS') : '',
			'GreyPRecTaka'=>($this->input->post('GreyPRecTaka')) ? $this->input->post('GreyPRecTaka') : '',
			'GreyPRecMts'=>($this->input->post('GreyPRecMts')) ? $this->input->post('GreyPRecMts') : '',
			'GreyPPurRate'=>($this->input->post('GreyPPurRate')) ? $this->input->post('GreyPPurRate') : '',
			'RmarkID'=>($this->input->post('RmarkID')) ? $this->input->post('RmarkID') : '',
			'GreyPGrossAmt'=>($this->input->post('GreyPGrossAmt')) ? $this->input->post('GreyPGrossAmt') : '',
			'GreyPGrossAddLess'=>($this->input->post('GreyPGrossAddLess')) ? $this->input->post('GreyPGrossAddLess') : '',
			'GreyPCgstAmt'=>($this->input->post('GreyPCgstAmt')) ? $this->input->post('GreyPCgstAmt') : '',
			'GreyPSgstAmt'=>($this->input->post('GreyPSgstAmt')) ? $this->input->post('GreyPSgstAmt') : '',
			'GreyPBillAmt'=>($this->input->post('GreyPBillAmt')) ? $this->input->post('GreyPBillAmt') : '',
			'GreyPBillAddLess'=>($this->input->post('GreyPBillAddLess')) ? $this->input->post('GreyPBillAddLess') : '',
			'GreyPNetAmt'=>($this->input->post('GreyPNetAmt')) ? $this->input->post('GreyPNetAmt') : '',
			'GreyPGrossAmt2'=>($this->input->post('GreyPGrossAmt2')) ? $this->input->post('GreyPGrossAmt2') : '',
			'StateID'=>($this->input->post('StateID')) ? $this->input->post('StateID') : '',
			'GsttypeID'=>($this->input->post('GsttypeID')) ? $this->input->post('GsttypeID') : '',
			'GreyPDisc'=>($this->input->post('GreyPDisc')) ? $this->input->post('GreyPDisc') : '',
			'GreyPAmt'=>($this->input->post('GreyPAmt')) ? $this->input->post('GreyPAmt') : '',
			'GreyPAmtDthLess'=>($this->input->post('GreyPAmtDthLess')) ? $this->input->post('GreyPAmtDthLess') : '',
			'GreyPAddAmt'=>($this->input->post('GreyPAddAmt')) ? $this->input->post('GreyPAddAmt') : '',
			'GreyPTexableValue'=>($this->input->post('GreyPTexableValue')) ? $this->input->post('GreyPTexableValue') : '',
			'GreyPPartyGstin'=>($this->input->post('GreyPPartyGstin')) ? $this->input->post('GreyPPartyGstin') : '',
			'GreyPCgstIgst'=>($this->input->post('GreyPCgstIgst')) ? $this->input->post('GreyPCgstIgst') : '',
			'GreyPGstAmt1'=>($this->input->post('GreyPGstAmt1')) ? $this->input->post('GreyPGstAmt1') : '',
			'GreyPSgst'=>($this->input->post('GreyPSgst')) ? $this->input->post('GreyPSgst') : '',
			'GreyPSgstAmt2'=>($this->input->post('GreyPSgstAmt2')) ? $this->input->post('GreyPSgstAmt2') : '',
			'GreyPBillAmt2'=>($this->input->post('GreyPBillAmt2')) ? $this->input->post('GreyPBillAmt2') : '',
			'GreyPGrossAmt3'=>($this->input->post('GreyPGrossAmt3')) ? $this->input->post('GreyPGrossAmt3') : '',
			'GreyPAddLess2'=>($this->input->post('GreyPAddLess2')) ? $this->input->post('GreyPAddLess2') : '',
			'GreyPBillAmt3'=>($this->input->post('GreyPBillAmt3')) ? $this->input->post('GreyPBillAmt3') : '',
			'GreyPAddLess3'=>($this->input->post('GreyPAddLess3')) ? $this->input->post('GreyPAddLess3') : '',
			'GreyPNetAmt2'=>($this->input->post('GreyPNetAmt2')) ? $this->input->post('GreyPNetAmt2') : '',
			'GreyPDisc2'=>($this->input->post('GreyPDisc2')) ? $this->input->post('GreyPDisc2') : '',
			'GreyPAmt2'=>($this->input->post('GreyPAmt2')) ? $this->input->post('GreyPAmt2') : '',
			'GreyPOthLess'=>($this->input->post('GreyPOthLess')) ? $this->input->post('GreyPOthLess') : '',
			'GreyPAddAmt2'=>($this->input->post('GreyPAddAmt2')) ? $this->input->post('GreyPAddAmt2') : '',
			'CreatedDate'=>date('Y-m-d')
		);
		$result=$this->Transaction_model->last_insert_id('greypurchaseorderbill',$data);
		
		$result1 = $this->Transaction_model->grey_purchase_order_bill_save($_POST,$this->input->post('countdata'),$result);
		// print_r($this->input->post('countdata'));
		// print_r($result1);

		// for ($i = 0; $i < $this->input->post('countdata') ; $i++)
		// {
		// 	$data1 = array(
		// 		'Grey_Purchase_Order_Bill_Id'=>$result,
		// 		'CHR'=>($this->input->post('chr'.$i)) ? $this->input->post('chr'.$i) : '',
		// 		'Desp_No'=>($this->input->post('despno'.$i)) ? $this->input->post('despno'.$i) : '',
		// 		'Mill'=>($this->input->post('mill'.$i)) ? $this->input->post('mill'.$i) : '',
				
		// 		'Card_No'=>($this->input->post('cardno'.$i)) ? $this->input->post('cardno'.$i) : '',
		// 		'Desp_Date'=>($this->input->post('despdate'.$i)) ? $this->input->post('despdate'.$i) : '',
		// 		'Taka'=>($this->input->post('taka'.$i)) ? $this->input->post('taka'.$i) : '',
		// 		'MTS'=>($this->input->post('mts'.$i)) ? $this->input->post('mts'.$i) : '',
		// 		'Rate'=>($this->input->post('rate'.$i)) ? $this->input->post('rate'.$i) : '',
		// 		'Weight_LS'=>($this->input->post('wtls'.$i)) ? $this->input->post('wtls'.$i) : '',
		// 		'Marka'=>($this->input->post('marka'.$i)) ? $this->input->post('marka'.$i) : '',
		// 		'Lot_No'=>($this->input->post('lotno'.$i)) ? $this->input->post('lotno'.$i) : '',
		// 		'Remark'=>($this->input->post('remark'.$i)) ? $this->input->post('remark'.$i) : '',
		// 		'Vehicle_No'=>($this->input->post('vehicleno'.$i)) ? $this->input->post('vehicleno'.$i) : '',
		// 		'E_Way_Bill_No'=>($this->input->post('ewaybill'.$i)) ? $this->input->post('ewaybill'.$i) : '',
		// 		'Process'=>($this->input->post('process'.$i)) ? $this->input->post('process'.$i) : '',
		// 		'Master'=>($this->input->post('master'.$i)) ? $this->input->post('master'.$i) : '',
		// 		);
		// 	$ins=$this->Home_model->insert('grey_purchase_order_bill_details',$data1);			
		// }
	}

	public function printPurchaseOrderBill()
	{
		$printPurchaseOrderBill=$_REQUEST['printPurchaseOrderBill'];
		$result['printPurchasebillData']=$this->Transaction_model->selectJoinOrderbillData($printPurchaseOrderBill);
		//print_r($result['printPurchasebillData']);
		$this->load->view('Transaction/PrintGreyPurchaseOrderBillLatest',$result);
	}

	public function PrintPerticularTaka()
	{
		// $PrintPerticularTakaid=$_REQUEST['PrintPerticularTaka'];
		// $result['PrintPerticularTakaData']=$this->Transaction_model->PrintPerticularTaka($PrintPerticularTakaid);
		$result['PrintPerticularTakaData']="";
		//print_r($result['printPurchasebillData']);
		$this->load->view('Transaction/PrintPerticularTaka',$result);
	}


	public function getpartytoother()
	{
		$partyid = $this->input->post('partyid');

		$party = $this->Home_model->select_where_row('ledger',array('Ledger_Id'=>$partyid));
		if(sizeof($party) > 0)
		{
			$array['Ledger_Id'] = $party['Ledger_Id'];
			$array['BrokerID'] = $party['BrokerID'];
			$array['LGstin'] = $party['LGstin'] ? $party['LGstin'] : '';
			$array['LHsnCode'] = $party['LHsnCode'] ? $party['LHsnCode'] : '';
			$array['StateID'] = $party['StateID'] ? $party['StateID'] : '';
			$array['TransportID'] = $party['TransportID'] ? $party['TransportID'] : '';
			$array['StationID'] = $party['StationID'] ? $party['StationID'] : '';
			
			$array['StateSortGstCode'] = substr($party['LGstin'],0,2);

			if(!empty($party['StateID']))
			{
				$where = array('StateID'=>$party['StateID']);
			}
			else
			{
				$where = array('StateCode'=> $array['StateSortGstCode']);
			}

			$state = $this->Home_model->select_where_row('state',$where);

			if(sizeof($state) > 0)
			{
				$array['StateCode'] = $state['StateCode'];
				$array['StateStateID'] = $state['StateID'];
			}
			else
			{
				$array['StateCode'] = "";
				$array['StateStateID'] = "";
			}

			$AcGroupdata = $this->Home_model->select_where_result('greypurchaseorder',array('WeaverID'=>$party['AcGroupID']));
			
			$op = "";
			if(sizeof($AcGroupdata) > 0)
			{
				$op .= "<option value=''>--Select Order No.--</option>";
				foreach ($AcGroupdata as $value)
				{

					$op .= '<option  value="'.$value['GreyOrderNo'].'">'.$value['GreyOrderNo'].'</option>';
				}
			}
			else
			{
				$op .= "<option value=''>--Select Order No.--</option>";
			}

			$array['Orderdata'] = $op;

			echo json_encode($array);
		}
	}
	public function getordertootherdata()
	{
		$GreyOrderNo = $this->input->post('partyid');

		$GreyOrderNo = $this->Home_model->select_where_row('greypurchaseorder',array('GreyOrderNo'=>$GreyOrderNo));
		if(sizeof($GreyOrderNo) > 0)
		{
			$WeaverID=$GreyOrderNo['WeaverID'];
			$Acrow = $this->db->where('AcID',$WeaverID)->get('account_group')->row();
			$array['ACName'] =$Acrow->ACName;

			/* Quality Data */
			$QualityID=$GreyOrderNo['QualityID'];
			$Qualityrow = $this->db->where('QualityID',$QualityID)->get('grey_quality')->row();
			$array['GreyQuality'] =$Qualityrow->GreyQuality;
			$array['GreyAvgWt'] =$GreyOrderNo['GreyAvgWt'];

			$array['GreyRateMts'] = $GreyOrderNo['GreyRateMts'];
			$array['GreyRateMts1'] = $GreyOrderNo['GreyRateMts'];
			$array['QualityID'] = $GreyOrderNo['QualityID'];
			echo json_encode($array);
		}
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
			'CompanyCode'=>($this->input->post('code')) ? $this->input->post('code') : '',
			'CompanyShortName'=>($this->input->post('shortname')) ? $this->input->post('shortname') : '',
			'CompanyName'=>($this->input->post('name')) ? $this->input->post('name') : '',
			'CompanyType'=>($this->input->post('companytype')) ? $this->input->post('companytype') : '',
			'CompanyGoup'=>$companygroup,
			'AddressCompany'=>($this->input->post('address')) ? $this->input->post('address') : '',
			'CompanyAddressCont'=>($this->input->post('addcont')) ? $this->input->post('addcont') : '',
			'CompanyCityID'=>($this->input->post('city')) ? $this->input->post('city') : '',
			'CompanyPin'=>($this->input->post('pin')) ? $this->input->post('pin') : '',
			'CompanyEmail'=>($this->input->post('email')) ? $this->input->post('email') : '',
			'CompanyMobileNo'=>($this->input->post('mobileno')) ? $this->input->post('mobileno') : '',
			'CompanyFax'=>($this->input->post('fax')) ? $this->input->post('fax') : '',
			'CompanyPhoneNo'=>($this->input->post('phoneno')) ? $this->input->post('phoneno') : '',
			'CompanyAddress1'=>($this->input->post('address')) ? $this->input->post('address') : '',
			'CompanyAddressCont1'=>($this->input->post('addcont')) ? $this->input->post('addcont') : '',
			'CompanyBusinessDesc'=>($this->input->post('bussinessdesc')) ? $this->input->post('bussinessdesc') : '',
			'CompanyProprietor'=>($this->input->post('proprietor')) ? $this->input->post('proprietor') : '',
			'CompanyMultiChal'=>($this->input->post('multichal')) ? $this->input->post('multichal') : '',
			'CompanySelected'=>($this->input->post('isActive')) ? $this->input->post('isActive') : '',
			'CompanyJvFormDate'=>($this->input->post('fromdate')) ? $this->input->post('fromdate') : '',
			'CompanyPanNo'=>($this->input->post('panno'))? $this->input->post('panno') : '',
			'CompanyTdsacNo'=>($this->input->post('tdsacno')) ? $this->input->post('tdsacno') : '',
			'CompanyWard'=>($this->input->post('ward')) ? $this->input->post('ward') : '',
			'CompanyEccNo'=>($this->input->post('eccno')) ? $this->input->post('eccno') : '',
			'CompanyRange'=>($this->input->post('range')) ? $this->input->post('range') : '',
			'CompanyDivision'=>($this->input->post('division')) ? $this->input->post('division') : '',
			'CompanyCollectrate'=>($this->input->post('collectrate')) ? $this->input->post('collectrate') : '',
			'CompanyPolicyNo'=>($this->input->post('policyno')) ? $this->input->post('policyno') : '',
			'CompanyDate'=>($this->input->post('date')) ? $this->input->post('date') : '',
			'CompanyGstNoVat'=>($this->input->post('gstno')) ? $this->input->post('gstno') : '',
			'CompanyDt'=>($this->input->post('dt')) ? $this->input->post('dt') : '',
			'CompanyCinNo'=>($this->input->post('cinno')) ? $this->input->post('cinno') : '',
			'CompanyGstInUin'=>($this->input->post('gstinuin')) ? $this->input->post('gstinuin') : '',
			'CompanyCenregNo'=>($this->input->post('cenexcise')) ? $this->input->post('cenexcise') : '',
			'CompanyInsurancePolicy'=>($this->input->post('insurance')) ? $this->input->post('insurance') : '',
			// 'IsActive'=>0,
			'CreateDate'=>date('Y-m-d')
		);
			
		$result=$this->Company_model->insert('company_manager',$data);
		if($result)
		{
			$companydata = $this->db->query("SELECT CompanyID,CompanyName from company_manager")->result();
			foreach ($companydata as $value)
			{
				?>
				<option value="<?=$value->CompanyID;?>"><?=$value->CompanyName;?></option>
				<?php
			}
		}
	}

	public function saveGreyPurchaseOrdermdl()
	{
		$data = array(
			'WeaverID'=>($this->input->post('WeaverID')) ? $this->input->post('WeaverID') : '0',
			'BrokerID'=>($this->input->post('BrokerID')) ? $this->input->post('BrokerID') : '0',
			'QualityID'=>($this->input->post('QualityID')) ? $this->input->post('QualityID') : '0',
			'RemarkID'=>($this->input->post('RemarkID')) ? $this->input->post('RemarkID') : '0',
			'CheckerID'=>($this->input->post('CheckerID')) ? $this->input->post('CheckerID') : '0',
			'GreyOrderNo'=>($this->input->post('GreyOrderNo')) ? $this->input->post('GreyOrderNo') : '0',
			'GreyOrderGiven'=>($this->input->post('GreyOrderGiven')) ? $this->input->post('GreyOrderGiven') : '0',
			'GreyOrderDate'=>($this->input->post('GreyOrderDate')) ? $this->input->post('GreyOrderDate') : '0',
			'GreyAvgWt'=>($this->input->post('GreyAvgWt')) ? $this->input->post('GreyAvgWt') : '0',
			'GreyPalluCut'=>($this->input->post('GreyPalluCut')) ? $this->input->post('GreyPalluCut') : '0',
			'GreyPanna'=>($this->input->post('GreyPanna')) ? $this->input->post('GreyPanna') : '0',
			'GreyNoLots'=>($this->input->post('GreyNoLots')) ? $this->input->post('GreyNoLots') : '0',
			'GreyPcsPerLots'=>($this->input->post('GreyPcsPerLots')) ? $this->input->post('GreyPcsPerLots') : '0',
			'GreyRateMts'=>($this->input->post('GreyRateMts')) ? $this->input->post('GreyRateMts') : '0',
			'GreyOrderPcs'=>($this->input->post('GreyOrderPcs')) ? $this->input->post('GreyOrderPcs') : '0',
			'GreyOrderMts'=>($this->input->post('GreyOrderMts')) ? $this->input->post('GreyOrderMts') : '0',
			'GreyOrderWt'=>($this->input->post('GreyOrderWt')) ? $this->input->post('GreyOrderWt') : '0',
			'GreyMtsPerKg'=>($this->input->post('GreyMtsPerKg')) ? $this->input->post('GreyMtsPerKg') : '0',
			'GreyRatePerKg'=>($this->input->post('GreyRatePerKg')) ? $this->input->post('GreyRatePerKg') : '0',
			'GreyDhara'=>($this->input->post('GreyDhara')) ? $this->input->post('GreyDhara') : '0',
			'GreyGraceDays'=>($this->input->post('GreyGraceDays')) ? $this->input->post('GreyGraceDays') : '0',
			'GreyLastDate'=>($this->input->post('GreyLastDate')) ? $this->input->post('GreyLastDate') : '0'		);
		$result=$this->Transaction_model->insertGeryPurchase('greypurchaseorder',$data);
		if($result)
		{
			$purchaseorder = $this->db->query("SELECT PurchaseOrderId,GreyOrderNo from greypurchaseorder")->result();
			foreach ($purchaseorder as $value)
			{
				?>
				<option value="<?=$value->PurchaseOrderId;?>"><?=$value->GreyOrderNo;?></option>
				<?php
			}
		}
	}

	public function editsavePurchaOBill()
	{
		$data = array(
			'CompanyID'=>($this->input->post('CompanyID')) ? $this->input->post('CompanyID') : '',
			'GreyPSrNo'=>($this->input->post('GreyPSrNo')) ? $this->input->post('GreyPSrNo') : '',
			'GreyPBillNo'=>($this->input->post('GreyPBillNo')) ? $this->input->post('GreyPBillNo') : '',
			'GreyPPartyAcID'=>($this->input->post('GreyPPartyAcID')) ? $this->input->post('GreyPPartyAcID') : '',
			'GreyPOrderNo'=>($this->input->post('GreyPOrderNo')) ? $this->input->post('GreyPOrderNo') : '',
			'GreyPPurchaseOrderBillDate'=>($this->input->post('GreyPPurchaseOrderBillDate')) ? $this->input->post('GreyPPurchaseOrderBillDate') : '',
			'GreyPHsnCode'=>($this->input->post('GreyPHsnCode')) ? $this->input->post('GreyPHsnCode') : '',
			'BrokerID'=>($this->input->post('BrokerID')) ? $this->input->post('BrokerID') : '',
			'QualityID'=>($this->input->post('QualityID')) ? $this->input->post('QualityID') : '',
			'GreyPPaid'=>($this->input->post('GreyPPaid')) ? $this->input->post('GreyPPaid') : '',
			'GreyPPaidDate'=>($this->input->post('GreyPPaidDate')) ? $this->input->post('GreyPPaidDate') : '',
			'GreyPDespatchMTS'=>($this->input->post('GreyPDespatchMTS')) ? $this->input->post('GreyPDespatchMTS') : '',
			'GreyPRecTaka'=>($this->input->post('GreyPRecTaka')) ? $this->input->post('GreyPRecTaka') : '',
			'GreyPRecMts'=>($this->input->post('GreyPRecMts')) ? $this->input->post('GreyPRecMts') : '',
			'GreyPPurRate'=>($this->input->post('GreyPPurRate')) ? $this->input->post('GreyPPurRate') : '',
			'RmarkID'=>($this->input->post('RmarkID')) ? $this->input->post('RmarkID') : '',
			'GreyPGrossAmt'=>($this->input->post('GreyPGrossAmt')) ? $this->input->post('GreyPGrossAmt') : '',
			'GreyPGrossAddLess'=>($this->input->post('GreyPGrossAddLess')) ? $this->input->post('GreyPGrossAddLess') : '',
			'GreyPCgstAmt'=>($this->input->post('GreyPCgstAmt')) ? $this->input->post('GreyPCgstAmt') : '',
			'GreyPSgstAmt'=>($this->input->post('GreyPSgstAmt')) ? $this->input->post('GreyPSgstAmt') : '',
			'GreyPBillAmt'=>($this->input->post('GreyPBillAmt')) ? $this->input->post('GreyPBillAmt') : '',
			'GreyPBillAddLess'=>($this->input->post('GreyPBillAddLess')) ? $this->input->post('GreyPBillAddLess') : '',
			'GreyPNetAmt'=>($this->input->post('GreyPNetAmt')) ? $this->input->post('GreyPNetAmt') : '',
			'GreyPGrossAmt2'=>($this->input->post('GreyPGrossAmt2')) ? $this->input->post('GreyPGrossAmt2') : '',
			'StateID'=>($this->input->post('StateID')) ? $this->input->post('StateID') : '',
			'GsttypeID'=>($this->input->post('GsttypeID')) ? $this->input->post('GsttypeID') : '',
			'GreyPDisc'=>($this->input->post('GreyPDisc')) ? $this->input->post('GreyPDisc') : '',
			'GreyPAmt'=>($this->input->post('GreyPAmt')) ? $this->input->post('GreyPAmt') : '',
			'GreyPAmtDthLess'=>($this->input->post('GreyPAmtDthLess')) ? $this->input->post('GreyPAmtDthLess') : '',
			'GreyPAddAmt'=>($this->input->post('GreyPAddAmt')) ? $this->input->post('GreyPAddAmt') : '',
			'GreyPTexableValue'=>($this->input->post('GreyPTexableValue')) ? $this->input->post('GreyPTexableValue') : '',
			'GreyPPartyGstin'=>($this->input->post('GreyPPartyGstin')) ? $this->input->post('GreyPPartyGstin') : '',
			'GreyPCgstIgst'=>($this->input->post('GreyPCgstIgst')) ? $this->input->post('GreyPCgstIgst') : '',
			'GreyPGstAmt1'=>($this->input->post('GreyPGstAmt1')) ? $this->input->post('GreyPGstAmt1') : '',
			'GreyPSgst'=>($this->input->post('GreyPSgst')) ? $this->input->post('GreyPSgst') : '',
			'GreyPSgstAmt2'=>($this->input->post('GreyPSgstAmt2')) ? $this->input->post('GreyPSgstAmt2') : '',
			'GreyPBillAmt2'=>($this->input->post('GreyPBillAmt2')) ? $this->input->post('GreyPBillAmt2') : '',
			'GreyPGrossAmt3'=>($this->input->post('GreyPGrossAmt3')) ? $this->input->post('GreyPGrossAmt3') : '',
			'GreyPAddLess2'=>($this->input->post('GreyPAddLess2')) ? $this->input->post('GreyPAddLess2') : '',
			'GreyPBillAmt3'=>($this->input->post('GreyPBillAmt3')) ? $this->input->post('GreyPBillAmt3') : '',
			'GreyPAddLess3'=>($this->input->post('GreyPAddLess3')) ? $this->input->post('GreyPAddLess3') : '',
			'GreyPNetAmt2'=>($this->input->post('GreyPNetAmt2')) ? $this->input->post('GreyPNetAmt2') : '',
			'GreyPDisc2'=>($this->input->post('GreyPDisc2')) ? $this->input->post('GreyPDisc2') : '',
			'GreyPAmt2'=>($this->input->post('GreyPAmt2')) ? $this->input->post('GreyPAmt2') : '',
			'GreyPOthLess'=>($this->input->post('GreyPOthLess')) ? $this->input->post('GreyPOthLess') : '',
			'GreyPAddAmt2'=>($this->input->post('GreyPAddAmt2')) ? $this->input->post('GreyPAddAmt2') : '',
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


					$result1 = $this->Transaction_model->grey_purchase_order_bill_save($_POST,$this->input->post('countdata1'),$greypurchaseorderBillID);
					print_r($result1);
					// for ($i = 0; $i < $this->input->post('countdata1') ; $i++)
					// {
					// 	$data1 = array(
					// 	'Grey_Purchase_Order_Bill_Id'=>$greypurchaseorderBillID,
					// 	'CHR'=>($this->input->post('chr'.$i)) ? $this->input->post('chr'.$i) : '',
					// 	'Desp_No'=>($this->input->post('despno'.$i)) ? $this->input->post('despno'.$i) : '',
					// 	'Mill'=>($this->input->post('mill'.$i)) ? $this->input->post('mill'.$i) : '',
						
					// 	'Card_No'=>($this->input->post('cardno'.$i)) ? $this->input->post('cardno'.$i) : '',
					// 	'Desp_Date'=>($this->input->post('despdate'.$i)) ? $this->input->post('despdate'.$i) : '',
					// 	'Taka'=>($this->input->post('taka'.$i)) ? $this->input->post('taka'.$i) : '',
					// 	'MTS'=>($this->input->post('mts'.$i)) ? $this->input->post('mts'.$i) : '',
					// 	'Rate'=>($this->input->post('rate'.$i)) ? $this->input->post('rate'.$i) : '',
					// 	'Weight_LS'=>($this->input->post('wtls'.$i)) ? $this->input->post('wtls'.$i) : '',
					// 	'Marka'=>($this->input->post('marka'.$i)) ? $this->input->post('marka'.$i) : '',
					// 	'Lot_No'=>($this->input->post('lotno'.$i)) ? $this->input->post('lotno'.$i) : '',
					// 	'Remark'=>($this->input->post('remark'.$i)) ? $this->input->post('remark'.$i) : '',
					// 	'Vehicle_No'=>($this->input->post('vehicleno'.$i)) ? $this->input->post('vehicleno'.$i) : '',
					// 	'E_Way_Bill_No'=>($this->input->post('ewaybill'.$i)) ? $this->input->post('ewaybill'.$i) : '',
					// 	'Process'=>($this->input->post('process'.$i)) ? $this->input->post('process'.$i) : '',
					// 	'Master'=>($this->input->post('master'.$i)) ? $this->input->post('master'.$i) : '',
					// 	);
					// 	$ins=$this->Home_model->insert('grey_purchase_order_bill_details',$data1);	
					// }
				}		
			}	
		}
		
	}

	// End by Milan 2/11/19
	

	/* Taka Details Start*/
	
		// public function getcompanyGstType()
		// {
		// 	$CompanyIDData = $this->input->post('CompanyIDData');
		// 	$res = $this->input->post('res');
		// 	//print_r($res); exit;

		// 	$CompanyRow = $this->db->where('CompanyID',$CompanyIDData)->get('company_manager')->row();
		// 	$CompanyGstInUin =$CompanyRow->CompanyGstInUin;

		// 	$result = substr($CompanyGstInUin, 0, 2);

		// 	if($result == $res)
		// 	{
		// 		print_r(1);
		// 	}
		// 	else
		// 	{
		// 		print_r(0);
		// 	}
		// }


	/* Taka Details End*/

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
		$response['getStationData'] = $this->Transaction_model->getStationData();

		$response['getscreendata1'] = $this->Transaction_model->getscreendata1();
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
		$response['getStationData1'] = $this->Home_model->getStationData1();
		

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
	public function PrintFinishPurchase()
	{
		$printFinishPurchaseOrderId=$_REQUEST['printFinishPurchaseOrder'];
		$result['PrintFinishPurchase']=$this->Transaction_model->printFinishPurchaseOrder($printFinishPurchaseOrderId);
		// print_r($result['PrintFinishPurchase']);
		$this->load->view('Transaction/PrintFinishPurchase',$result);
	}

	public function PrintFinishPurchaseBill()
	{
		$printFinishPurchaseOrderId=$_REQUEST['printFinishPurchaseOrder'];
		$result['PrintFinishPurchase']=$this->Transaction_model->printFinishPurchaseOrder($printFinishPurchaseOrderId);
		// print_r($result['PrintFinishPurchase']);
		$this->load->view('Transaction/printPurchaseOrderBill',$result);
	}


	//  public function FinishPurchaseOrderBill()
	// {	

	// 	$response['accgrpdata'] = $this->db->query("SELECT AcID,ACName from account_group")->result_array();
	// 	$response['acctypedata'] = $this->db->query("SELECT AcTypeID,ACType from acc_type")->result_array();
	// 	$response['itemdetailsdata'] = $this->db->query("SELECT ItemdetailID,IName from item_detail")->result_array();
	// 	$response['transportdata'] = $this->db->query("SELECT transportID,transportName from transport")->result_array();
	// 	$response['citydata'] = $this->db->query("SELECT cityID,cityName from city")->result_array();
	// 	$response['statedata'] = $this->db->query("SELECT stateID,stateName from state")->result_array();
	// 	$response['screendata'] = $this->db->query("SELECT ScreenRegisterID,ItemDCut from screenregister_entry")->result_array();
	// 	$response['companydata']=$this->Company_model->select('company_manager');
	// 	$response['citydatacompany']=$this->Company_model->select_array('city');
	// 	$response['getweaverData'] = $this->Transaction_model->getweaverData();
	// 	$response['getcheckerData'] = $this->Transaction_model->getcheckerData();

		
	// 		$response['finishpurchaseorderbilldata'] = $this->Transaction_model->finishpurchaseorderbilldata();
	// 		$response['getCompanyData'] = $this->Transaction_model->getCompanyData();
	// 		$response['getpartyacData'] = $this->Transaction_model->getpartyacData();
	// 		$response['getordernoData'] = $this->Transaction_model->getordernoData();
	// 		$response['getbrokerData'] = $this->Transaction_model->getbrokerData();
	// 		$response['getgreyQualityData'] = $this->Transaction_model->getgreyQualityData();
	// 		$response['getremarkData'] = $this->Transaction_model->getremarkData();
	// 		$response['getstateData'] = $this->Transaction_model->getstateData();
	// 		$response['getgstTypeData'] = $this->Transaction_model->getgstTypeData();

	// 		$response['gettransportData'] = $this->Transaction_model->gettransportData();
	// 		$response['gethasteData'] = $this->Transaction_model->gethasteData();
	// 		$response['getstationData'] = $this->Transaction_model->getstationData();
	// 		$response['getscreendata'] = $this->Transaction_model->getscreendata();

	// 		$response['getitemdetailsdata'] = $this->Transaction_model->getitemdetailsdata();
	// 		$response['getCategoryData'] = $this->Transaction_model->getCategoryData();
	// 		$response['getPackageData'] = $this->Transaction_model->getPackageData();

	// 	if(isset($_REQUEST['finishpurchaseorderid']))
	// 	{	
	// 		$finishpurchaseorderid = $_REQUEST['finishpurchaseorderid'];		
	// 		$response['editpurchaseOrderBilldata']=$this->Transaction_model->editpurchaseOrderBilldata($finishpurchaseorderid);	
	// 		// print_r($response['editpurchaseOrderBilldata']);		
	// 	}
	// 	else
	// 	{
	// 		$response['editpurchaseOrderBilldata']="";			
	// 	}

	// 	$this->load->view('Transaction/FinishPurchaseOrderBill',$response);
	// }

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

		$this->load->view('Transaction/FinishPurchaseOrderBill',$response);
	}

	public function  findonlymiddlecontent()
	{
		$findbilldatabyordref = $this->input->post('findbilldatabyordref');

		//$check = $this->db->query("SELECT * from Finish_Purchase_Id = '$Finish_Purchase_Id' AND Type = 'Finish Purchase'")->row_array();



		$findbilldatabyordrefdata = $this->Transaction_model->findbilldatabyordref($findbilldatabyordref);
		getextradata($findbilldatabyordrefdata['Finish_Purchase_Id']);
	}

	public function totalpcscal()
	{
		$Ord_Ref = $this->input->post('findbilldatabyordref');

		$oldpcs = $this->db->query("SELECT sum(fpd.Pcs) as totaloldpcs,fp.Finish_Purchase_Id,fpd.Finish_Purchase_Id FROM finish_purchase_details fpd,finish_purchase fp WHERE fpd.Sub_Ord_Ref = '$Ord_Ref' AND fpd.Finish_Purchase_Id = fp.Finish_Purchase_Id AND fp.Type = 'Finish Purchase'")->row_array();

		$afternewtotal = $this->db->query("SELECT sum(fpd.Pcs) as afternewtotal,fp.Finish_Purchase_Id,fpd.Finish_Purchase_Id FROM finish_purchase_details fpd,finish_purchase fp WHERE fpd.Sub_Ord_Ref = '$Ord_Ref' AND fpd.Finish_Purchase_Id = fp.Finish_Purchase_Id AND fp.Type = 'Finish Purchase Bill'")->row_array();

		$array = array();
		$array = array(
			'totaloldpcs' =>$oldpcs['totaloldpcs'],
			'afternewtotal' =>$afternewtotal['afternewtotal'],
		);
		
		echo json_encode($array);
	}

	public function findbilldata()
	{
		$findbilldatabyordref = $this->input->post('findbilldatabyordref');
		$findbilldatabyordrefdata = $this->Transaction_model->findbilldatabyordref($findbilldatabyordref);

		$orderbydata = array(
			'Finish_Purchase_Id' => $findbilldatabyordrefdata['Finish_Purchase_Id'],
			'Comapny_Id' => $findbilldatabyordrefdata['Comapny_Id'],
			'Type' => $findbilldatabyordrefdata['Type'],
			'Voucher' => $findbilldatabyordrefdata['Voucher'],
			'Ord_Ref' => $findbilldatabyordrefdata['Ord_Ref'],
			'Lr_No_Awb' => $findbilldatabyordrefdata['Lr_No_Awb'],
			'Party_Id' => $findbilldatabyordrefdata['Party_Id'],
			'State_Id' => $findbilldatabyordrefdata['State_Id'],
			'Bill_No' => $findbilldatabyordrefdata['Bill_No'],
			'Finish_Date' => $findbilldatabyordrefdata['Finish_Date'],
			'Gst_Type_Id' => $findbilldatabyordrefdata['Gst_Type_Id'],
			'Haste_Id' => $findbilldatabyordrefdata['Haste_Id'],
			'Brocker_Id' => $findbilldatabyordrefdata['Brocker_Id'],
			'Dhara' => $findbilldatabyordrefdata['Dhara'],
			'Grace' => $findbilldatabyordrefdata['Grace'],
			'Station_Id' => $findbilldatabyordrefdata['Station_Id'],
			'Transport_Id' => $findbilldatabyordrefdata['Transport_Id'],
			'Station_Id' => $findbilldatabyordrefdata['Station_Id'],
			'Screen_Series' => $findbilldatabyordrefdata['Screen_Series'],
			'Party_Gstin' => $findbilldatabyordrefdata['Party_Gstin'],
			'Obtain_By' => $findbilldatabyordrefdata['Obtain_By'],
			'Remark_Id' => $findbilldatabyordrefdata['Remark_Id'],
			'Only_X' => $findbilldatabyordrefdata['Only_X'],
			'E_Way_Bill_No' => $findbilldatabyordrefdata['E_Way_Bill_No'],
			'Net_Amt' => $findbilldatabyordrefdata['Net_Amt'],
			'Lr_No' => $findbilldatabyordrefdata['Lr_No'],
			'Lr_Date' => $findbilldatabyordrefdata['Lr_Date'],
			'Lr_Rec_Date' => $findbilldatabyordrefdata['Lr_Rec_Date'],
			'Weight' => $findbilldatabyordrefdata['Weight'],
			'Height' => $findbilldatabyordrefdata['Height'],
			'Cgst' => $findbilldatabyordrefdata['Cgst'],
			'Cgst_Amt' => $findbilldatabyordrefdata['Cgst_Amt'],
			'Taxable_Value' => $findbilldatabyordrefdata['Taxable_Value'],
			'Bill_Amt' => $findbilldatabyordrefdata['Bill_Amt'],
			'Net_After_Tds' => $findbilldatabyordrefdata['Net_After_Tds'],
			'Paid_Date' => $findbilldatabyordrefdata['Paid_Date'],
			'Discount' => $findbilldatabyordrefdata['Discount'],
			'Pack_Folt' => $findbilldatabyordrefdata['Pack_Folt'],
			'Rd' => $findbilldatabyordrefdata['Rd'],
			'Sweets' => $findbilldatabyordrefdata['Sweets'],
			'Oth_Bc' => $findbilldatabyordrefdata['Oth_Bc'],
			'Add_Amt' => $findbilldatabyordrefdata['Add_Amt'],
			'Tds_Amt' => $findbilldatabyordrefdata['Tds_Amt'],
			'Gr' => $findbilldatabyordrefdata['Gr'],
			'Paid_Amt' => $findbilldatabyordrefdata['Paid_Amt'],
			'Rec_Sale_Pcs' => $findbilldatabyordrefdata['Rec_Sale_Pcs'],
			'Rec_Sale_Mts' => $findbilldatabyordrefdata['Rec_Sale_Mts'],
			'Rec_Sale_Vno' => $findbilldatabyordrefdata['Rec_Sale_Vno'],
			'Sgst' => $findbilldatabyordrefdata['Sgst'],
			'Sgst_Amt' => $findbilldatabyordrefdata['Sgst_Amt'],
			'Total_Pcs' => $findbilldatabyordrefdata['Total_Pcs'],
			'Total_Mts' => $findbilldatabyordrefdata['Total_Mts'],
			'Grand_Total' => $findbilldatabyordrefdata['Grand_Total'],
			'Case_No' => $findbilldatabyordrefdata['Case_No'],
			'Remark1' => $findbilldatabyordrefdata['Remark1'],
			'Grand_Total1' => $findbilldatabyordrefdata['Grand_Total1'],
			'Discount_Less1' => $findbilldatabyordrefdata['Discount_Less1'],
			'Amount_Less' => $findbilldatabyordrefdata['Amount_Less'],
			'Remark2' => $findbilldatabyordrefdata['Remark2'],
			'Grand_Total2' => $findbilldatabyordrefdata['Grand_Total2'],
			'Discount_Less2' => $findbilldatabyordrefdata['Discount_Less2'],
			'Amount_Less2' => $findbilldatabyordrefdata['Amount_Less2'],
			'Haste_Gstin' => $findbilldatabyordrefdata['Haste_Gstin']
		);

		//getextradata($findbilldatabyordrefdata['Finish_Purchase_Id']);
		
		echo json_encode($orderbydata);
		// echo json_encode($orderbydata1);
	}

	// public function SaveTakaDetailsData()
	// {
	// 	for ($i = 0; $i < $this->input->post('Takacountdata') ; $i++)
	// 	{
	// 		$data1 = array(
	// 			'TakaQuality'=>($this->input->post('TakaQuality')) ? $this->input->post('TakaQuality') : '',
	// 			'TakaAvgwt'=>($this->input->post('TakaAvgwt')) ? $this->input->post('TakaAvgwt'.$i) : '',
	// 			'TakaWeaver'=>($this->input->post('TakaWeaver')) ? $this->input->post('TakaWeaver') : '',
	// 			'TakaChallan'=>($this->input->post('TakaChallan')) ? $this->input->post('TakaChallan') : '',
	// 			'TakaCompany'=>($this->input->post('TakaCompany')) ? $this->input->post('TakaCompany') : '',
	// 			'TakaGroup'=>($this->input->post('TakaGroup')) ? $this->input->post('TakaGroup') : '',
	// 			'TakaBillNo'=>($this->input->post('TakaBillNo')) ? $this->input->post('TakaBillNo') : '',
	// 			'TakaDate'=>($this->input->post('TakaDate')) ? $this->input->post('TakaDate') : '',
	// 			'TakaCardNo'=>($this->input->post('TakaCardNo')) ? $this->input->post('TakaCardNo') : '',
	// 			'TakaVarialtionLess'=>($this->input->post('TakaVarialtionLess')) ? $this->input->post('TakaVarialtionLess') : '',

	// 			'TakaSrNo'=>($this->input->post('TakaSrNo'.$i)) ? $this->input->post('TakaSrNo'.$i) : '',
	// 			'TakaMfgMts'=>($this->input->post('TakaMfgMts'.$i)) ? $this->input->post('TakaMfgMts'.$i) : '',
	// 			'TakaSarees'=>($this->input->post('TakaSarees'.$i)) ? $this->input->post('TakaSarees'.$i) : '',
				
	// 			'TakaActCut'=>($this->input->post('TakaActCut'.$i)) ? $this->input->post('TakaActCut'.$i) : '',
	// 			'TakaFormMfsc'=>($this->input->post('TakaFormMfsc'.$i)) ? $this->input->post('TakaFormMfsc'.$i) : '',
	// 			'TakaIdealWt'=>($this->input->post('TakaIdealWt'.$i)) ? $this->input->post('TakaIdealWt'.$i) : '',
	// 			'TakaActWt'=>($this->input->post('TakaActWt'.$i)) ? $this->input->post('TakaActWt'.$i) : '',
	// 			'TakaWtLs'=>($this->input->post('TakaWtLs'.$i)) ? $this->input->post('TakaWtLs'.$i) : '',
	// 			'TakaDesign'=>($this->input->post('TakaDesign'.$i)) ? $this->input->post('TakaDesign'.$i) : '',
	// 			'TakaRemark'=>($this->input->post('TakaRemark'.$i)) ? $this->input->post('TakaRemark'.$i) : '',
	// 			'CreatedDate'=>date('Y-m-d')
	// 			);
	// 		$ins=$this->Home_model->insert('GreyPTakaDetails',$data1);			
	// 	}
	// }

	public function SaveTakaDetailsData()
	{
		$Takacountdata = $this->input->post('Takacountdata');
		$TakaCardNo = $this->input->post('TakaCardNo');
		// print_r($_POST);

		$delete = $this->Home_model->deletedata('greyptakadetails',array('TakaCardNo'=>$TakaCardNo));
		if($delete)
		{
			$result = $this->Transaction_model->SaveTakaDetailsData($_POST,$Takacountdata,$TakaCardNo);

			if($result){
			echo 1;
			}
			else{
			echo 0;
			}
			exit;
		}
		
	}
}

<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ledger_controller extends CI_Controller {

	function __construct()
	{
        parent::__construct();
    }
	public function index()
	{
		if(isset($_REQUEST['Ledgerid']))
		{
			$response['editLedgerdata']=$this->Home_model->select_where_row('ledger',array('Ledger_Id'=>$_REQUEST['Ledgerid']));		
		}
		else
		{
			$response['editLedgerdata']="";
		}
		$response['GetledgerData'] = $this->Home_model->GetledgerData();
		$response['getAcctypeData'] = $this->Home_model->getAcctypeData();
		$response['getAccountData'] = $this->Home_model->getAccountData();
		$response['getCityData'] = $this->Home_model->getCityData();
		$response['getStationData'] = $this->Home_model->getStationData();
		$response['getTransportData'] = $this->Home_model->getTransportData();
		$response['getBrokerData'] = $this->Home_model->getBrokerData();
		$response['getItemTypeData'] = $this->Home_model->getItemTypeData();
		$response['getItemTypeDatamdl'] = $this->Home_model->getItemTypeData();
		$response['getScreenRegisterData'] = $this->Home_model->getScreenRegisterData();
		$response['getStateData'] = $this->Home_model->getStateData();
		$response['getPackingData'] = $this->Home_model->getPackingData();
		$response['getCategoryData'] = $this->Home_model->getCategoryData();
		$response['LabelData'] = $this->Home_model->selectData();
		$this->load->view('ledger/ledger',$response);
	}

	public function saveledgerData()
	{		
		$data = array(
			'AcTypeID'=>($this->input->post('AcTypeID')) ? $this->input->post('AcTypeID') : '',
			'AcGroupID'=>($this->input->post('AcGroupID')) ? $this->input->post('AcGroupID') : '',
			'StationID'=>($this->input->post('StationID')) ? $this->input->post('StationID') : '',
			'TransportID'=>($this->input->post('TransportID')) ? $this->input->post('TransportID') : '',
			'ItemID'=>($this->input->post('ItemID')) ? $this->input->post('ItemID') : '',
			'CityID'=>($this->input->post('CityID')) ? $this->input->post('CityID') : '',
			'SeriesID'=>($this->input->post('SeriesID')) ? $this->input->post('SeriesID') : '',
			'BrokerID'=>($this->input->post('BrokerID')) ? $this->input->post('BrokerID') : '',
			'LCode'=>($this->input->post('LCode')) ? $this->input->post('LCode') : '',
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
			'LPin'=>($this->input->post('LPin')) ? $this->input->post('LPin') : '',
			'LDistance'=>($this->input->post('LDistance')) ? $this->input->post('LDistance') : '',
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
			'StateID'=>($this->input->post('StateID')) ? $this->input->post('StateID') : '',
			'LHsnCode'=>($this->input->post('LHsnCode')) ? $this->input->post('LHsnCode') : '',
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
			print_r($result);		
		}
			
	}

	


	// Start by milan 2/11/19

	public function saveledgermdl()
	{		
		$data = array(
			'LCode'=>($this->input->post('Code')) ? $this->input->post('Code') : '',
			'AcTypeID'=>($this->input->post('Ac_Type_Id')) ? $this->input->post('Ac_Type_Id') : '',
			'AcGroupID'=>($this->input->post('Ac_Group_Id')) ? $this->input->post('Ac_Group_Id') : '',
			'LName'=>($this->input->post('Name')) ? $this->input->post('Name') : '',
			'LDhara'=>($this->input->post('Dhara')) ? $this->input->post('Dhara') : '',
			'LPureDhara'=>($this->input->post('Pure_Dhara')) ? $this->input->post('Pure_Dhara') : '',
			'LGraceDays'=>($this->input->post('Grace_Days')) ? $this->input->post('Grace_Days') : '',
			'LRankList'=>($this->input->post('Rank_List')) ? $this->input->post('Rank_List') : '',
			'LBankChrg'=>($this->input->post('Bank_Chrg')) ? $this->input->post('Bank_Chrg') : '',
			'LTds'=>($this->input->post('Tds')) ? $this->input->post('Tds') : '',
			'LItRate'=>($this->input->post('It_Rate')) ? $this->input->post('It_Rate') : '',
			'LAddress'=>($this->input->post('Address')) ? $this->input->post('Address') : '',
			'LAddressLine2'=>($this->input->post('Other_Address')) ? $this->input->post('Other_Address') : '',
			'LOtherAddress'=>($this->input->post('Address_Line_Two')) ? $this->input->post('Address_Line_Two') : '',
			'LOtherLine2'=>($this->input->post('Other_Line_Two')) ? $this->input->post('Other_Line_Two') : '',
			'CityID'=>($this->input->post('City_Id')) ? $this->input->post('City_Id') : '',
			'LPin'=>($this->input->post('Pin')) ? $this->input->post('Pin') : '',
			'LDistance'=>($this->input->post('Distance')) ? $this->input->post('Distance') : '',
			'TransportID'=>($this->input->post('Transport_Id')) ? $this->input->post('Transport_Id') : '',
			'ItemID'=>($this->input->post('Item_Id')) ? $this->input->post('Item_Id') : '',
			'SeriesID'=>($this->input->post('Series_Id')) ? $this->input->post('Series_Id') : '',
			'LContactPerson'=>($this->input->post('Contact_Person')) ? $this->input->post('Contact_Person') : '',
			'LMobile'=>($this->input->post('Mobile')) ? $this->input->post('Mobile') : '',
			'LRemark'=>($this->input->post('Remark')) ? $this->input->post('Remark') : '',
			'LPhone1'=>($this->input->post('Phone_One')) ? $this->input->post('Phone_One') : '',
			'LPhone2'=>($this->input->post('Phone_Two')) ? $this->input->post('Phone_Two') : '',
			'LEmailID'=>($this->input->post('Email_Id')) ? $this->input->post('Email_Id') : '',
			'LPanNo'=>($this->input->post('Pan_No')) ? $this->input->post('Pan_No') : '',
			'LedgerType'=>($this->input->post('Ledger_Type')) ? $this->input->post('Ledger_Type') : '',
			'LGstin'=>($this->input->post('Gstin')) ? $this->input->post('Gstin') : '',
			'IsSselected'=>($this->input->post('IsSselected')) ? $this->input->post('IsSselected') : '',
			'LGstNo'=>($this->input->post('Gst_No')) ? $this->input->post('Gst_No') : '',
			'LCstNo'=>($this->input->post('Cst_No')) ? $this->input->post('Cst_No') : '',
			'LExciseReg'=>($this->input->post('Excise_Reg')) ? $this->input->post('Excise_Reg') : '',
			'LSaleIncent'=>($this->input->post('Sale_Incent')) ? $this->input->post('Sale_Incent') : '',
			'LPartyGrade'=>($this->input->post('Party_Grade')) ? $this->input->post('Party_Grade') : '',
			'LDebitLimit'=>($this->input->post('Debit_Limit')) ? $this->input->post('Debit_Limit') : '',
			'LLimitDays'=>($this->input->post('Limit_Days')) ? $this->input->post('Limit_Days') : '',
			'LBankAcNo'=>($this->input->post('Bank_Ac_No')) ? $this->input->post('Bank_Ac_No') : '',
			'LBankName'=>($this->input->post('Bank_Name')) ? $this->input->post('Bank_Name') : '',
			'LIfscCode'=>($this->input->post('Ifsc_Code')) ? $this->input->post('Ifsc_Code') : '',
			'LInsurancePolicy'=>($this->input->post('Insurance_Policy')) ? $this->input->post('Insurance_Policy') : '',
			'LLowerTdsAmtLmt'=>($this->input->post('Lower_Tds_Amt_Lmt')) ? $this->input->post('Lower_Tds_Amt_Lmt') : ''
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
				$fetchdata = $this->Home_model->getBrokerData();
				foreach ($fetchdata as $qgetbrokerData)
				{
					?>
					<option value="<?=$qgetbrokerData->Ledger_Id;?>"> <?=$qgetbrokerData->LName?> </option>
					<?php
				}
			}	
		}
			
	}

	public function saveledgerpartymdl()
	{		
		$data = array(
			'LCode'=>($this->input->post('Code')) ? $this->input->post('Code') : '',
			'AcTypeID'=>($this->input->post('Ac_Type_Id')) ? $this->input->post('Ac_Type_Id') : '',
			'AcGroupID'=>($this->input->post('Ac_Group_Id')) ? $this->input->post('Ac_Group_Id') : '',
			'LName'=>($this->input->post('Name')) ? $this->input->post('Name') : '',
			'LDhara'=>($this->input->post('Dhara')) ? $this->input->post('Dhara') : '',
			'LPureDhara'=>($this->input->post('Pure_Dhara')) ? $this->input->post('Pure_Dhara') : '',
			'LGraceDays'=>($this->input->post('Grace_Days')) ? $this->input->post('Grace_Days') : '',
			'LRankList'=>($this->input->post('Rank_List')) ? $this->input->post('Rank_List') : '',
			'LBankChrg'=>($this->input->post('Bank_Chrg')) ? $this->input->post('Bank_Chrg') : '',
			'LTds'=>($this->input->post('Tds')) ? $this->input->post('Tds') : '',
			'LItRate'=>($this->input->post('It_Rate')) ? $this->input->post('It_Rate') : '',
			'LAddress'=>($this->input->post('Address')) ? $this->input->post('Address') : '',
			'LAddressLine2'=>($this->input->post('Other_Address')) ? $this->input->post('Other_Address') : '',
			'LOtherAddress'=>($this->input->post('Address_Line_Two')) ? $this->input->post('Address_Line_Two') : ''
			,
			'StationID'=>($this->input->post('StationIDData')) ? $this->input->post('StationIDData') : '',
			'BrokerID'=>($this->input->post('BrokerID')) ? $this->input->post('BrokerID') : '',
			'LOtherLine2'=>($this->input->post('Other_Line_Two')) ? $this->input->post('Other_Line_Two') : '',
			'CityID'=>($this->input->post('City_Id')) ? $this->input->post('City_Id') : '',
			'LPin'=>($this->input->post('Pin')) ? $this->input->post('Pin') : '',
			'LDistance'=>($this->input->post('Distance')) ? $this->input->post('Distance') : '',
			'TransportID'=>($this->input->post('Transport_Id')) ? $this->input->post('Transport_Id') : '',
			'ItemID'=>($this->input->post('Item_Id')) ? $this->input->post('Item_Id') : '',
			'SeriesID'=>($this->input->post('Series_Id')) ? $this->input->post('Series_Id') : '',
			'LContactPerson'=>($this->input->post('Contact_Person')) ? $this->input->post('Contact_Person') : '',
			'LMobile'=>($this->input->post('Mobile')) ? $this->input->post('Mobile') : '',
			'LRemark'=>($this->input->post('Remark')) ? $this->input->post('Remark') : '',
			'LPhone1'=>($this->input->post('Phone_One')) ? $this->input->post('Phone_One') : '',
			'LPhone2'=>($this->input->post('Phone_Two')) ? $this->input->post('Phone_Two') : '',
			'LEmailID'=>($this->input->post('Email_Id')) ? $this->input->post('Email_Id') : '',
			'LPanNo'=>($this->input->post('Pan_No')) ? $this->input->post('Pan_No') : '',
			'LedgerType'=>($this->input->post('Ledger_Type')) ? $this->input->post('Ledger_Type') : '',
			'LGstin'=>($this->input->post('Gstin')) ? $this->input->post('Gstin') : '',
			'IsSselected'=>($this->input->post('IsSselected')) ? $this->input->post('IsSselected') : '',
			'LGstNo'=>($this->input->post('Gst_No')) ? $this->input->post('Gst_No') : '',
			'LCstNo'=>($this->input->post('Cst_No')) ? $this->input->post('Cst_No') : '',
			'LExciseReg'=>($this->input->post('Excise_Reg')) ? $this->input->post('Excise_Reg') : '',
			'LSaleIncent'=>($this->input->post('Sale_Incent')) ? $this->input->post('Sale_Incent') : '',
			'LPartyGrade'=>($this->input->post('Party_Grade')) ? $this->input->post('Party_Grade') : '',
			'LDebitLimit'=>($this->input->post('Debit_Limit')) ? $this->input->post('Debit_Limit') : '',
			'LLimitDays'=>($this->input->post('Limit_Days')) ? $this->input->post('Limit_Days') : '',
			'LBankAcNo'=>($this->input->post('Bank_Ac_No')) ? $this->input->post('Bank_Ac_No') : '',
			'LBankName'=>($this->input->post('Bank_Name')) ? $this->input->post('Bank_Name') : '',
			'LIfscCode'=>($this->input->post('Ifsc_Code')) ? $this->input->post('Ifsc_Code') : '',
			'LInsurancePolicy'=>($this->input->post('Insurance_Policy')) ? $this->input->post('Insurance_Policy') : '',
			'LLowerTdsAmtLmt'=>($this->input->post('Lower_Tds_Amt_Lmt')) ? $this->input->post('Lower_Tds_Amt_Lmt') : ''
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
				$fetchdata = $this->Home_model->getBrokerData();
				foreach ($fetchdata as $qgetbrokerData)
				{
					?>
					<option value="<?=$qgetbrokerData->Ledger_Id;?>"> <?=$qgetbrokerData->LName?> </option>
					<?php
				}
			}	
		}
			
	}


	// End by milan 2/11/19
	// Start by milan 2/11/19



	public function saveledgerchecker()
	{		
		$data = array(
			'LCode'=>($this->input->post('Code')) ? $this->input->post('Code') : '',
			'AcTypeID'=>($this->input->post('Ac_Type_Id')) ? $this->input->post('Ac_Type_Id') : '',
			'AcGroupID'=>($this->input->post('Ac_Group_Id')) ? $this->input->post('Ac_Group_Id') : '',
			'LName'=>($this->input->post('Name')) ? $this->input->post('Name') : '',
			'LDhara'=>($this->input->post('Dhara')) ? $this->input->post('Dhara') : '',
			'LPureDhara'=>($this->input->post('Pure_Dhara')) ? $this->input->post('Pure_Dhara') : '',
			'LGraceDays'=>($this->input->post('Grace_Days')) ? $this->input->post('Grace_Days') : '',
			'LRankList'=>($this->input->post('Rank_List')) ? $this->input->post('Rank_List') : '',
			'LBankChrg'=>($this->input->post('Bank_Chrg')) ? $this->input->post('Bank_Chrg') : '',
			'LTds'=>($this->input->post('Tds')) ? $this->input->post('Tds') : '',
			'LItRate'=>($this->input->post('It_Rate')) ? $this->input->post('It_Rate') : '',
			'LAddress'=>($this->input->post('Address')) ? $this->input->post('Address') : '',
			'LAddressLine2'=>($this->input->post('Other_Address')) ? $this->input->post('Other_Address') : '',
			'LOtherAddress'=>($this->input->post('Address_Line_Two')) ? $this->input->post('Address_Line_Two') : '',
			'LOtherLine2'=>($this->input->post('Other_Line_Two')) ? $this->input->post('Other_Line_Two') : '',
			'CityID'=>($this->input->post('City_Id')) ? $this->input->post('City_Id') : '',
			'LPin'=>($this->input->post('Pin')) ? $this->input->post('Pin') : '',
			'LDistance'=>($this->input->post('Distance')) ? $this->input->post('Distance') : '',
			'TransportID'=>($this->input->post('Transport_Id')) ? $this->input->post('Transport_Id') : '',
			'ItemID'=>($this->input->post('Item_Id')) ? $this->input->post('Item_Id') : '',
			'SeriesID'=>($this->input->post('Series_Id')) ? $this->input->post('Series_Id') : '',
			'LContactPerson'=>($this->input->post('Contact_Person')) ? $this->input->post('Contact_Person') : '',
			'LMobile'=>($this->input->post('Mobile')) ? $this->input->post('Mobile') : '',
			'LRemark'=>($this->input->post('Remark')) ? $this->input->post('Remark') : '',
			'LPhone1'=>($this->input->post('Phone_One')) ? $this->input->post('Phone_One') : '',
			'LPhone2'=>($this->input->post('Phone_Two')) ? $this->input->post('Phone_Two') : '',
			'LEmailID'=>($this->input->post('Email_Id')) ? $this->input->post('Email_Id') : '',
			'LPanNo'=>($this->input->post('Pan_No')) ? $this->input->post('Pan_No') : '',
			'LedgerType'=>($this->input->post('Ledger_Type')) ? $this->input->post('Ledger_Type') : '',
			'LGstin'=>($this->input->post('Gstin')) ? $this->input->post('Gstin') : '',
			'IsSselected'=>($this->input->post('IsSselected')) ? $this->input->post('IsSselected') : '',
			'LGstNo'=>($this->input->post('Gst_No')) ? $this->input->post('Gst_No') : '',
			'LCstNo'=>($this->input->post('Cst_No')) ? $this->input->post('Cst_No') : '',
			'LExciseReg'=>($this->input->post('Excise_Reg')) ? $this->input->post('Excise_Reg') : '',
			'LSaleIncent'=>($this->input->post('Sale_Incent')) ? $this->input->post('Sale_Incent') : '',
			'LPartyGrade'=>($this->input->post('Party_Grade')) ? $this->input->post('Party_Grade') : '',
			'LDebitLimit'=>($this->input->post('Debit_Limit')) ? $this->input->post('Debit_Limit') : '',
			'LLimitDays'=>($this->input->post('Limit_Days')) ? $this->input->post('Limit_Days') : '',
			'LBankAcNo'=>($this->input->post('Bank_Ac_No')) ? $this->input->post('Bank_Ac_No') : '',
			'LBankName'=>($this->input->post('Bank_Name')) ? $this->input->post('Bank_Name') : '',
			'LIfscCode'=>($this->input->post('Ifsc_Code')) ? $this->input->post('Ifsc_Code') : '',
			'LInsurancePolicy'=>($this->input->post('Insurance_Policy')) ? $this->input->post('Insurance_Policy') : '',
			'LLowerTdsAmtLmt'=>($this->input->post('Lower_Tds_Amt_Lmt')) ? $this->input->post('Lower_Tds_Amt_Lmt') : ''
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
				$fetchdata = $this->Home_model->getcheckerData();
				foreach ($fetchdata as $qgetbrokerData)
				{
					?>
					<option value="<?=$qgetbrokerData->Ledger_Id;?>"> <?=$qgetbrokerData->LName?> </option>
					<?php
				}
			}	
		}
			
	}
	// End by milan 2/11/19
}
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Accountgroup_controller extends CI_Controller {

	function __construct()
	{
        parent::__construct();
		$this->load->model('Accountgroup_model');
    }
	public function index()
	{
		if(isset($_REQUEST['accgrpid']))
		{
			$response['editaccountgroupdata']=$this->Home_model->select_where_row('account_group',array('AcID'=>$_REQUEST['accgrpid']));		
		}
		else
		{
			$response['editaccountgroupdata']="";
		}
		$response['GetAccountGroupData'] = $this->Accountgroup_model->GetAccountGroupData();
		$response['getAcctypeData'] = $this->Home_model->getAcctypeData();
		$response['getBrokerData'] = $this->Home_model->getBrokerData();
		$response['getTransportData'] = $this->Home_model->getTransportData();
		$response['getCityData'] = $this->Home_model->getCityData();
		$response['getStateData'] = $this->Home_model->getStateData();
		$response['getAccountData'] = $this->Home_model->getAccountData();
		$response['getStationData'] = $this->Home_model->getStationData();
		$response['getItemTypeData'] = $this->Home_model->getItemTypeData();
		$response['getScreenRegisterData'] = $this->Home_model->getScreenRegisterData();
		$response['getPackingData'] = $this->Home_model->getPackingData();
		$response['getCategoryData'] = $this->Home_model->getCategoryData();
		$response['LabelData'] = $this->Home_model->selectData();
		$this->load->view('accountgroup/accountgroup',$response);
	}

	public function saveaccountgroup()
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

		if($this->input->post('AcID') != "")
		{
			$result=$this->Home_model->update('account_group',$data,array('AcID'=>$this->input->post('AcID')));
			print_r($result);
		}
		else
		{
			$result=$this->Home_model->insert('account_group',$data);
			print_r($result);		
		}
	}
}
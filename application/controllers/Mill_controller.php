<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mill_controller extends CI_Controller {

	function __construct()
	{
        parent::__construct();
		$this->load->model('Mill_model');
		$this->load->model('Home_model');
    }
	public function index()
	{
		if(isset($_REQUEST['milldesid']))
		{
			$MillDespatchID=$_REQUEST['milldesid'];
			$response['editmilldata']=$this->Mill_model->GetMillEditData($MillDespatchID);	
		}
		else
		{	
			$response['editmilldata']="";
		}
		$response['GetMillData'] = $this->Mill_model->GetMillData();
		$response['getCompanyData'] = $this->Home_model->getCompanyData();
		$response['getMillDespData'] = $this->Home_model->getMillDespData();
		$response['getAccountData'] = $this->Home_model->getAccountData();
		$response['getQualityData'] = $this->Home_model->getQualityData();
		$response['getRemarkData'] = $this->Home_model->getRemarkData();
		$response['getBrokerData'] = $this->Home_model->getBrokerData();
		$response['checkerdata'] = $this->Home_model->checkerdata();

		
		$this->load->view('mill/mill',$response);
	}

	public function savemill()
	{
		$data = array(
			'CompanyID'=>($this->input->post('CompanyID')) ? $this->input->post('CompanyID') : '0',
			'MillID'=>($this->input->post('MillID')) ? $this->input->post('MillID') : '0',
			'WeaverID'=>($this->input->post('WeaverID')) ? $this->input->post('WeaverID') : '0',
			'QualityID'=>($this->input->post('QualityID')) ? $this->input->post('QualityID') : '0',
			'RemarkID'=>($this->input->post('RemarkID')) ? $this->input->post('RemarkID') : '0',
			'BrokerID'=>($this->input->post('BrokerID')) ? $this->input->post('BrokerID') : '0',
			'CheckerID'=>($this->input->post('CheckerID')) ? $this->input->post('CheckerID') : '0',
			'MillType'=>($this->input->post('MillType')) ? $this->input->post('MillType') : '0',
			'MillChalNo'=>($this->input->post('MillChalNo')) ? $this->input->post('MillChalNo') : '0',
			'MillDespDate'=>($this->input->post('MillDespDate')) ? $this->input->post('MillDespDate') : '0',
			'MillLotNo'=>($this->input->post('MillLotNo')) ? $this->input->post('MillLotNo') : '0',
			'MillOurMarka'=>($this->input->post('MillOurMarka')) ? $this->input->post('MillOurMarka') : '0',
			'MillPurSr'=>($this->input->post('MillPurSr')) ? $this->input->post('MillPurSr') : '0',
			'MillPurBillNo'=>($this->input->post('MillPurBillNo')) ? $this->input->post('MillPurBillNo') : '0',
			'MillPurDate'=>($this->input->post('MillPurDate')) ? $this->input->post('MillPurDate') : '0',
			'MillWeight'=>($this->input->post('MillWeight')) ? $this->input->post('MillWeight') : '0',
			'MillRate'=>($this->input->post('MillRate')) ? $this->input->post('MillRate') : '0',
			'MillDespTaka'=>($this->input->post('MillDespTaka')) ? $this->input->post('MillDespTaka') : '0',
			'MillDespMts'=>($this->input->post('MillDespMts')) ? $this->input->post('MillDespMts') : '0',
			'MillOrderNo'=>($this->input->post('MillOrderNo')) ? $this->input->post('MillOrderNo') : '0',
			'MillVehicleNo'=>($this->input->post('MillVehicleNo')) ? $this->input->post('MillVehicleNo') : '0',
			'MillEWayBillNo'=>($this->input->post('MillEWayBillNo')) ? $this->input->post('MillEWayBillNo') : '',
			'MillRecTaka'=>($this->input->post('MillRecTaka')) ? $this->input->post('MillRecTaka') : '0',
			'MillFinMts'=>($this->input->post('MillFinMts')) ? $this->input->post('MillFinMts') : '0',
			'MillRecGrey'=>($this->input->post('MillRecGrey')) ? $this->input->post('MillRecGrey') : '0',
			'MillPending'=>($this->input->post('MillPending')) ? $this->input->post('MillPending') : '0',
			'MillPendMts'=>($this->input->post('MillPendMts')) ? $this->input->post('MillPendMts') : '',
			'CretedDate'=>date('Y-m-d')
		);

		$result=$this->Home_model->last_insert_id('mill_despatch_entry',$data);

		for ($i = 0; $i < $this->input->post('Millcount') ; $i++)
		{
			$data1 = array(
				'MillDespatchID'=>$result,
				'MDPureSr'=>($this->input->post('MDPureSr'.$i)) ? $this->input->post('MDPureSr'.$i) : '',
				'MDTakaSr'=>($this->input->post('MDTakaSr'.$i)) ? $this->input->post('MDTakaSr'.$i) : '',
				'MDMts'=>($this->input->post('MDMts'.$i)) ? $this->input->post('MDMts'.$i) : '',
				'CreateDate'=>date('Y-m-d')

				);

				$ins=$this->Home_model->insert('mill_despatch_entry_details',$data1);
			
		}
	}
	public function editsavemilldes()
	{
		$data = array(
			'CompanyID'=>($this->input->post('CompanyID')) ? $this->input->post('CompanyID') : '0',
			'MillID'=>($this->input->post('MillID')) ? $this->input->post('MillID') : '0',
			'WeaverID'=>($this->input->post('WeaverID')) ? $this->input->post('WeaverID') : '0',
			'QualityID'=>($this->input->post('QualityID')) ? $this->input->post('QualityID') : '0',
			'RemarkID'=>($this->input->post('RemarkID')) ? $this->input->post('RemarkID') : '0',
			'BrokerID'=>($this->input->post('BrokerID')) ? $this->input->post('BrokerID') : '0',
			'CheckerID'=>($this->input->post('CheckerID')) ? $this->input->post('CheckerID') : '0',
			'MillType'=>($this->input->post('MillType')) ? $this->input->post('MillType') : '0',
			'MillChalNo'=>($this->input->post('MillChalNo')) ? $this->input->post('MillChalNo') : '0',
			'MillDespDate'=>($this->input->post('MillDespDate')) ? $this->input->post('MillDespDate') : '0',
			'MillLotNo'=>($this->input->post('MillLotNo')) ? $this->input->post('MillLotNo') : '0',
			'MillOurMarka'=>($this->input->post('MillOurMarka')) ? $this->input->post('MillOurMarka') : '0',
			'MillPurSr'=>($this->input->post('MillPurSr')) ? $this->input->post('MillPurSr') : '0',
			'MillPurBillNo'=>($this->input->post('MillPurBillNo')) ? $this->input->post('MillPurBillNo') : '0',
			'MillPurDate'=>($this->input->post('MillPurDate')) ? $this->input->post('MillPurDate') : '0',
			'MillWeight'=>($this->input->post('MillWeight')) ? $this->input->post('MillWeight') : '0',
			'MillRate'=>($this->input->post('MillRate')) ? $this->input->post('MillRate') : '0',
			'MillDespTaka'=>($this->input->post('MillDespTaka')) ? $this->input->post('MillDespTaka') : '0',
			'MillDespMts'=>($this->input->post('MillDespMts')) ? $this->input->post('MillDespMts') : '0',
			'MillOrderNo'=>($this->input->post('MillOrderNo')) ? $this->input->post('MillOrderNo') : '0',
			'MillVehicleNo'=>($this->input->post('MillVehicleNo')) ? $this->input->post('MillVehicleNo') : '0',
			'MillEWayBillNo'=>($this->input->post('MillEWayBillNo')) ? $this->input->post('MillEWayBillNo') : '',
			'MillRecTaka'=>($this->input->post('MillRecTaka')) ? $this->input->post('MillRecTaka') : '0',
			'MillFinMts'=>($this->input->post('MillFinMts')) ? $this->input->post('MillFinMts') : '0',
			'MillRecGrey'=>($this->input->post('MillRecGrey')) ? $this->input->post('MillRecGrey') : '0',
			'MillPending'=>($this->input->post('MillPending')) ? $this->input->post('MillPending') : '0',
			'MillPendMts'=>($this->input->post('MillPendMts')) ? $this->input->post('MillPendMts') : '',
			'UpdateDate'=>date('Y-m-d')
		);
		if($this->input->post('MillDespatchID') != "")
		{
				$result=$this->Company_model->update('mill_despatch_entry',$data,array('MillDespatchID'=>$this->input->post('MillDespatchID')));
				print_r($result);
		}

		$MillDespatchID = $this->input->post('MillDespatchID');

		$where = array(
			'MillDespatchID'=>$this->input->post('MillDespatchID')
		);

		$delete = $this->Home_model->deletedata('mill_despatch_entry_details',$where);

		for ($i = 0; $i < $this->input->post('MillDescountdata') ; $i++)
		{
			$data1 = array(
				'MillDespatchID'=>$MillDespatchID,
				'MDPureSr'=>($this->input->post('MDPureSr'.$i)) ? $this->input->post('MDPureSr'.$i) : '',
				'MDTakaSr'=>($this->input->post('MDTakaSr'.$i)) ? $this->input->post('MDTakaSr'.$i) : '',
				'MDMts'=>($this->input->post('MDMts'.$i)) ? $this->input->post('MDMts'.$i) : ''
				);

			$ins=$this->Home_model->insert('mill_despatch_entry_details',$data1);
		}
	}

	// public function millidtodescno()
	// {
	
	// }
}
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Hastelist_controller extends CI_Controller {

	function __construct()
	{
        parent::__construct();
		$this->load->model('Home_model');
    }
	public function index()
	{
		if(isset($_REQUEST['hasteid']))
		{
			$response['edithastedata']=$this->Home_model->select_where_row('haste',array('HasteID'=>$_REQUEST['hasteid']));
		}
		else
		{
			$response['edithastedata'] = "";
		}
		$response['GetHastedata']=$this->Home_model->select('haste');
		$response['GetAadtiyaList']=$this->Home_model->GetAadtiyaList();
		$response['getTransportData'] = $this->Home_model->getTransportData();
		$response['getStationData'] = $this->Home_model->getStationData();
		$response['getScreenRegisterData'] = $this->Home_model->getScreenRegisterData();
		$response['LabelData'] = $this->Home_model->selectData();
		$this->load->view('hastelist/hastelist',$response);
	}

	public function savehaste()
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
		if($this->input->post('HasteID') != "")
		{
			$record = array_merge($data, array('UpdateDate'=>date('Y-m-d H:i:s',strtotime('NOW'))));
			$result=$this->Home_model->update('haste',$record,array('HasteID'=>$this->input->post('HasteID')));
			print_r($result);
		}
		else
		{
			$record = array_merge($data, array('CreateDate'=>date('Y-m-d H:i:s',strtotime('NOW'))));
			$result = $this->Home_model->insert('haste', $record);
			print_r($result);
		}
	}

	/*public function saveHasteForm1()
	{
		$data = array(
		'AdatiyaName'=>($this->input->post('adatyaname')) ? $this->input->post('adatyaname') : '',
		'Haste'=>($this->input->post('haste')) ? $this->input->post('haste') : '',
		'Transport'=>($this->input->post('transport')) ? $this->input->post('transport') : '',
		'Station'=>($this->input->post('station')) ? $this->input->post('station') : '',
		'ScreenSeries'=>($this->input->post('screenseries')) ? $this->input->post('screenseries') : '',
		'GstIn'=>($this->input->post('gstin')) ? $this->input->post('gstin') : '',	
		'Address1'=>($this->input->post('address1')) ? $this->input->post('address1') : '',	
		'Address2'=>($this->input->post('address2')) ? $this->input->post('address2') : '',	
		'Remark'=>($this->input->post('remark')) ? $this->input->post('remark') : '',	
		'Contact'=>($this->input->post('contactinformation')) ? $this->input->post('contactinformation') : '',	
		'Mobile'=>($this->input->post('mobile')) ? $this->input->post('mobile') : '',	
		'EmailID'=>($this->input->post('emailid')) ? $this->input->post('emailid') : '',	
		'Phone1'=>($this->input->post('phone1')) ? $this->input->post('phone1') : '',	
		'Phone2'=>($this->input->post('phone2')) ? $this->input->post('phone2') : '',	
		'Fax'=>($this->input->post('fax')) ? $this->input->post('fax') : '',
		'CreateDate'=>date('Y-m-d')
		);

		if($this->input->post('hasteid') != "")
		{
			$result=$this->Home_model->update('haste',$data,array('HasteID'=>$this->input->post('hasteid')));
			print_r($result);
		}
		else
		{
			$result=$this->Home_model->insert('haste',$data);
			if($result)
			{
				$fetchdata = $this->Transaction_model->gethasteData();
				foreach ($fetchdata as $qgethasteData)
				{
					?>
					<option value="<?=$qgethasteData->HasteID;?>"> <?=$qgethasteData->Haste?> </option>
					<?php
				}
			}			
		}
	}
	public function transportaddress()
	{
		$transportid = $this->input->post('transportid');
		$transport = $this->Home_model->select_where_row('transport',array('transportID'=>$transportid));
		// echo "<option value=".$transport['Taddress'].">".$transport['Taddress']."</option>";
		echo $transport['Taddress'];
	}*/
}
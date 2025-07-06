<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Transport_controller extends CI_Controller {

	function __construct()
	{
        parent::__construct();
    }
	public function index()
	{
		if(isset($_REQUEST['TransportID']))
		{
			$response['editTransportdata']=$this->Home_model->select_where_row('transport',array('TransportID'=>$_REQUEST['TransportID']));		
		}
		else
		{
			$response['editTransportdata']="";
		}
		$response['GetTransportData'] = $this->Home_model->GetTransportDataList();
		$this->load->view('transport/transport',$response);
	}

	public function saveTransport()
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
		);

		if($this->input->post('TransportID') != "")
		{
			$record = array_merge($data, array('updateDate'=>date('Y-m-d H:i:s',strtotime('NOW'))));
			$result=$this->Home_model->update('transport',$record,array('TransportID'=>$this->input->post('TransportID')));
			print_r($result);
		}
		else
		{
			$record = array_merge($data, array('createDate'=>date('Y-m-d H:i:s',strtotime('NOW'))));
			$result = $this->Home_model->insert('transport', $record);
			print_r($result);
		}
			
	}

	
}
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Broker_controller extends CI_Controller {

	function __construct()
	{
        parent::__construct();
		$this->load->model('Broker_model');
    }
	public function index()
	{
		if($this->input->post('method')== "multipleDelete")
		{
			$result=$this->Broker_model->multipleDelete();
		}
		$data['getsinglebroker']=$this->Broker_model->getsingle_broker();
		$result = $this->Broker_model->getallbroker();
		$data['recordcount'] = $result['rows'];
		$data['getallbroker'] = $result['data'];
		$this->load->view('broker/broker',$data);
	}
	public function addeditbroker()
	{
		$this->load->view('broker/broker');
	}
	public function saveuser()
	{
		$result=$this->Broker_model->addeditbroker($_REQUEST);
		
		if(is_array($result))
		{
			redirect(base_url().'Broker_controller/addeditbroker');
		}
		else
		{
			$path = base_url()."Broker_controller/index";
			redirect($path);
		}
		
	}
	function singledelete()
	{
		$brokerID = $this->input->post('brokerID');
		//print_r($userID);exit;
		$result=$this->Broker_model->singledelete('broker',$brokerID);
	}
	function singleStatus()
	{
		$brokerID = $this->input->post('brokerID');
		//print_r($cityID);exit;
		$result=$this->Broker_model->singleStatus($brokerID);
	}
}
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class State_controller extends CI_Controller {

	function __construct()
	{
        parent::__construct();
    }
	public function index()
	{
		if(isset($_REQUEST['sid']))
		{
			$response['editStatedata']=$this->Home_model->select_where_row('state',array('StateID'=>$_REQUEST['sid']));		
		}
		else
		{
				
			$response['editStatedata']="";
		}
		$response['GetStateListData']=$this->Home_model->select('state');
		$this->load->view('state/state',$response);
	}

	public function saveState()
	{
		$data = array(
		'StateName'=>($this->input->post('StateName')) ? $this->input->post('StateName') : ''
	);

		if($this->input->post('StateID') != "")
		{
			$record = array_merge($data, array('UpdateDate'=>date('Y-m-d H:i:s',strtotime('NOW'))));
			$result=$this->Home_model->update('state',$record,array('StateID'=>$this->input->post('StateID')));
			print_r($result);
		}
		else
		{
			$record = array_merge($data, array('CreateDate'=>date('Y-m-d H:i:s',strtotime('NOW'))));
			$result = $this->Home_model->insert('state', $record);
			print_r($result);
		}
	}
}
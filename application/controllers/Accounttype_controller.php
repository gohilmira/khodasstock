<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Accounttype_controller extends CI_Controller {

	function __construct()
	{
        parent::__construct();
		$this->load->model('Home_model');
    }
    public function index()
	{

		if(isset($_REQUEST['accid']))
		{			
			$data['editaccountdata']=$this->Home_model->select_where_row('acc_type',array('AcTypeID'=>$_REQUEST['accid']));
		}
		else
		{			
			
			$data['editaccountdata']="";
		}
		$data['getallaccounttype']=$this->Home_model->select('acc_type');
		$this->load->view('accounttype/accounttype',$data);
	}
    public function saveaccount()
	{
		$data = array(
		'ACType'=>($this->input->post('ACType')) ? $this->input->post('ACType') : '',
		'ACPL'=>($this->input->post('ACPL')) ? $this->input->post('ACPL') : '',
		'ACTranding'=>($this->input->post('ACTranding')) ? $this->input->post('ACTranding') : '',
		'ACBalSheet'=>($this->input->post('ACBalSheet')) ? $this->input->post('ACBalSheet') : '',
		'ACTrialSide'=>($this->input->post('ACTrialSide')) ? $this->input->post('ACTrialSide') : '',
		'ACTrialPos'=>($this->input->post('ACTrialPos')) ? $this->input->post('ACTrialPos') : '',
		'CreatedDate'=>date('Y-m-d')
		);

		if($this->input->post('AcTypeID') != "")
		{
			$result=$this->Home_model->update('acc_type',$data,array('AcTypeID'=>$this->input->post('AcTypeID')));
			print_r($result);
		}
		else
		{
			$result=$this->Home_model->insert('acc_type',$data);
			print_r($result);		
		}
	}
}

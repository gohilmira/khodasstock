<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Packagestyle_controller extends CI_Controller {

	function __construct()
	{
        parent::__construct();
    }
	public function index()
	{
		if(isset($_REQUEST['packageid']))
		{
			$response['editpackagedata']=$this->Home_model->select_where_row('package_style',array('PackingID'=>$_REQUEST['packageid']));		
		}
		else
		{
			$response['editpackagedata']="";
		}
		$response['GetPackagedata']=$this->Home_model->select('package_style');	

		$this->load->view('packagestyle/packagestyle',$response);
	}

	public function savepackage()
	{
		$data = array(
		'PackingName'=>strtoupper($this->input->post('PackingName')) ? strtoupper($this->input->post('PackingName')) : '',
		'PackAdd'=>($this->input->post('PackAdd')) ? $this->input->post('PackAdd') : '',
		'BoxRate'=>($this->input->post('BoxRate')) ? $this->input->post('BoxRate') : ''
		);

		if($this->input->post('PackingID') != "")
		{
			$record = array_merge($data, array('UpdateDate'=>date('Y-m-d H:i:s',strtotime('NOW'))));
			$result=$this->Home_model->update('package_style',$record,array('PackingID'=>$this->input->post('PackingID')));
			print_r($result);
		}
		else
		{
			$record = array_merge($data, array('CreateDate'=>date('Y-m-d H:i:s',strtotime('NOW'))));
			$result = $this->Home_model->insert('package_style', $record);
			print_r($result);
		}
	}
}
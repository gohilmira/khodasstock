<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class City_controller extends CI_Controller {

	function __construct()
	{
        parent::__construct();
    }
	public function index()
	{
		if(isset($_REQUEST['cid']))
		{
			$response['editCitydata']=$this->Home_model->select_where_row('city',array('CityID'=>$_REQUEST['cid']));		
		}
		else
		{
				
			$response['editCitydata']="";
		}
		$response['GetCityData']=$this->Home_model->selectCityData();
		$response['getStateData']=$this->Home_model->getStateData();
		$this->load->view('city/city',$response);
	}

	public function saveCity()
	{
		$data = array(
		'CityName'=>($this->input->post('CityName')) ? $this->input->post('CityName') : '',
		'StateID'=>($this->input->post('StateID')) ? $this->input->post('StateID') : '',
		'CityDistance'=>($this->input->post('CityDistance')) ? $this->input->post('CityDistance') : '0'
		);

		if($this->input->post('CityID') != "")
		{
			$record = array_merge($data, array('UpdateDate'=>date('Y-m-d H:i:s',strtotime('NOW'))));
			$result=$this->Home_model->update('city',$record,array('CityID'=>$this->input->post('CityID')));
			print_r($result);
		}
		else
		{
			$record = array_merge($data, array('CreateDate'=>date('Y-m-d H:i:s',strtotime('NOW'))));
			$result = $this->Home_model->insert('city', $record);
			print_r($result);
		}
	}
}
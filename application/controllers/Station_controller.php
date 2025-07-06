<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Station_controller extends CI_Controller {

	function __construct()
	{
        parent::__construct();
    }
	public function index()
	{
		if(isset($_REQUEST['StationID']))
		{
			$response['editstationdata']=$this->Home_model->select_where_row('station',array('StationID'=>$_REQUEST['StationID']));
			
		}
		else
		{
			$response['editstationdata']="";
		}
		$response['stationdata']=$this->Home_model->select('station');
		
		$this->load->view('station/station',$response);
	}
	public function savestation()
	{
		
		$data = array(
			'StationName'=>($this->input->post('StationName')) ? $this->input->post('StationName') : ''
		);
		if($this->input->post('StationID') != "")
		{
			$record = array_merge($data, array('updatedDate'=>date('Y-m-d H:i:s',strtotime('NOW'))));
			$result=$this->Home_model->update('station',$record,array('StationID'=>$this->input->post('StationID')));
			print_r($result);
		}
		else
		{
			$record = array_merge($data, array('CreatedDate'=>date('Y-m-d H:i:s',strtotime('NOW'))));
			$result = $this->Home_model->insert('station', $record);
			print_r($result);
		}
	}
}
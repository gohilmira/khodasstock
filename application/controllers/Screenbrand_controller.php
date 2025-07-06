<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Screenbrand_controller extends CI_Controller {

	function __construct()
	{
        parent::__construct();
    }
	public function index()
	{
		if(isset($_REQUEST['accid']))
		{			
			$response['editscreenBranddata']=$this->Home_model->select_where_row('screenbrand',array('screenBrandID'=>$_REQUEST['accid']));
		}
		else
		{			
			$response['editscreenBranddata']="";
			
		}
		$response['GetScreenBrandData'] = $this->Home_model->select('screenbrand');
		$this->load->view('screenregister/screenbrand',$response);
	}
	public function savescreenBrand()
	{
		$variableAdd=$this->input->post('brandName');
		$journalName = str_replace(' ', '_', $variableAdd);

		$this->db->query("ALTER TABLE screenregister_entry ADD $journalName VARCHAR(100)  NULL AFTER ItemDCut");


		$data = array(
			'brandName'=>($this->input->post('brandName')) ? $this->input->post('brandName') : '',
			'ScreenShow'=>$this->input->post('ScreenShow'),
			'CreateDate'=>date('Y-m-d')
		);
		$result=$this->Home_model->insert('screenbrand',$data);
		print_r($result);
	}

	public function editsavescreenBrand()
	{
		$data = array(
			'brandName'=>($this->input->post('brandName')) ? $this->input->post('brandName') : '',
			'ScreenShow'=>$this->input->post('ScreenShow'),
			'updatedDate'=>date('Y-m-d')
		);
		if($this->input->post('screenBrandID') != "")
		{
			$result=$this->Home_model->update('screenbrand',$data,array('screenBrandID'=>$this->input->post('screenBrandID')));
			print_r($result);
		}


	}
	
}
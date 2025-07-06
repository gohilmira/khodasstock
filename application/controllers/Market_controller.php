<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Market_controller extends CI_Controller {

	function __construct()
	{
        parent::__construct();
		$this->load->model('Market_model');
    }

    public function index()
	{
		if($this->input->post('method')== "multipleDelete")
		{
			$result=$this->Market_model->multipleDelete();
		}
		$data['getsinglemarket']=$this->Market_model->getsingle_market();
		$result = $this->Market_model->getallmarket();
		$data['recordcount'] = $result['rows'];
		$data['getallmarket'] = $result['data'];
		$this->load->view('market/market',$data);
	}
	public function addeditmarket()
	{
		$this->load->view('market/market');
	}
	public function saveuser()
	{
		$result=$this->Market_model->addeditmarket($_REQUEST);
		
		if(is_array($result))
		{
			redirect(base_url().'Market_controller/addeditmarket');
		}
		else
		{
			$path = base_url()."Market_controller/index";
			redirect($path);
		}
	}
	function singledelete()
	{
		$marketID = $this->input->post('marketID');
		//print_r($userID);exit;
		$result=$this->Market_model->singledelete('market',$marketID);
	}
	function singleStatus()
	{
		$marketID = $this->input->post('marketID');
		//print_r($cityID);exit;
		$result=$this->Market_model->singleStatus($marketID);
	}

}
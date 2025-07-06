<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cutting_controller extends CI_Controller {

	function __construct()
	{
        parent::__construct();
		$this->load->model('Transaction_model');
		$this->load->model('Company_model');
    }

    public function cutting_report_entry()
    {
        $response['getCompanyData'] = $this->Home_model->getCompanyData();
    	$this->load->view('Transaction/cutting_report_entry',$response);
    }
}
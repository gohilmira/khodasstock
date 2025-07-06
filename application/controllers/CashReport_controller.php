<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class CashReport_controller extends CI_Controller {
	function __construct()
	{
        parent::__construct();
    	$this->load->model('Transaction_model');
		$this->load->model('Company_model');
		$this->load->helper('new');
		//$this->load->model('CashReport_model');
    }
    public function CashReport()
    {
    	$this->load->view('Transaction/CashReport');
    }

}

?>
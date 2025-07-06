<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_controller extends CI_Controller {

	function __construct()
	{
        parent::__construct();
		$this->load->model('Login_model');
    }
	public function index()
	{
		$this->load->view('login/login');
	}
}
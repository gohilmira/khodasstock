<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_controller extends CI_Controller {

	function __construct()
	{
        parent::__construct();
    }
	public function index()
	{
		if(isset($_REQUEST['uid']))
		{
			$response['editUserdata']=$this->Home_model->select_where_row('user',array('UserID'=>$_REQUEST['uid']));		
		}
		else
		{
				
			$response['editUserdata']="";
		}
		$response['GetUserListData']=$this->Home_model->select('user');
		$this->load->view('user/user',$response);
	}

	public function saveUser()
	{
		$data = array(
		'UserName'=>($this->input->post('UserName')) ? $this->input->post('UserName') : '',
		'UserPassword'=>($this->input->post('UserPassword')) ? $this->input->post('UserPassword') : '',
		'UserLevel'=>($this->input->post('UserLevel')) ? $this->input->post('UserLevel') : '',		
		'UserKey'=>($this->input->post('UserKey')) ? $this->input->post('UserKey') : '',
		'UserAdvanceToolbar'=>($this->input->post('UserAdvanceToolbar')) ? $this->input->post('UserAdvanceToolbar') : '',
		'UserHideCustom'=>($this->input->post('UserHideCustom')) ? $this->input->post('UserHideCustom') : ''
		);

		if($this->input->post('UserID') != "")
		{
			$record = array_merge($data, array('UpdatedDate'=>date('Y-m-d H:i:s',strtotime('NOW'))));
			$result=$this->Home_model->update('user',$record,array('UserID'=>$this->input->post('UserID')));
			print_r($result);
		}
		else
		{
			$record = array_merge($data, array('CreatedDate'=>date('Y-m-d H:i:s',strtotime('NOW'))));
			$result = $this->Home_model->insert('user', $record);
			print_r($result);
		}
	}
}
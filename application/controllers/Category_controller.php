<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Category_controller extends CI_Controller {

	function __construct()
	{
        parent::__construct();
    }
	public function index()
	{
		if(isset($_REQUEST['catid']))
		{
			$response['editcategrydata']=$this->Home_model->select_where_row('category',array('CategoryID'=>$_REQUEST['catid']));
					
		}
		else
		{
			$response['editcategrydata']="";
		}
		$response['GetCategoryData']=$this->Home_model->select('category');	
		$this->load->view('category/category',$response);
	}

	public function savecategory()
	{
		$data = array(
		'CategoryName'=>strtoupper($this->input->post('CategoryName')) ? strtoupper($this->input->post('CategoryName')) : '',
		'CategoryRate'=>($this->input->post('CategoryRate')) ? $this->input->post('CategoryRate') : '',
		'CategoryCode'=>($this->input->post('CategoryCode')) ? $this->input->post('CategoryCode') : '',		
		'CategoryType'=>($this->input->post('CategoryType')) ? $this->input->post('CategoryType') : ''
		);


		if($this->input->post('CategoryID') != "")
		{
			$record = array_merge($data, array('UpdateDate'=>date('Y-m-d H:i:s',strtotime('NOW'))));
			$result=$this->Home_model->update('category',$record,array('CategoryID'=>$this->input->post('CategoryID')));
			print_r($result);
		}
		else
		{
			$record = array_merge($data, array('CreateDate'=>date('Y-m-d H:i:s',strtotime('NOW'))));
			$result = $this->Home_model->insert('category', $record);
			print_r($result);
		}
	}
}
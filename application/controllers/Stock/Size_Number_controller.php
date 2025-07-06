<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Size_Number_controller extends CI_Controller {

	function __construct()
	{
        parent::__construct();
    }
	public function index()
	{
		if(isset($_REQUEST['Size_Number_Id']))
		{
			$response['editsizenumberdata']=$this->Home_model->select_where_row('size_number',array('Size_Number_Id'=>$_REQUEST['Size_Number_Id']));
		}
		else
		{
			$response['editsizenumberdata']="";
		}

		$response['sizenumberdata']=$this->Home_model->select('size_number');

		$this->load->view('stock/size_number/size_number',$response);
	}
	public function addsizenumberform()
	{
		
		$data = array(
			'Size_Number_Name'=>($this->input->post('sizenumber')) ? $this->input->post('sizenumber') : ''
		);
		if($this->input->post('Size_Number_Id') != "")
		{
			$record = array_merge($data, array('Updated_Date'=>date('Y-m-d H:i:s',strtotime('NOW'))));
			$result=$this->Home_model->update('size_number',$record,array('Size_Number_Id'=>$this->input->post('Size_Number_Id')));
			print_r($this->input->post('Size_Number_Id'));
		}
		else
		{
			$record = array_merge($data, array('Created_Date'=>date('Y-m-d H:i:s',strtotime('NOW'))));
			$result = $this->Home_model->insert('size_number', $record);
			print_r($result);
		}
	}

	public function sizenumberdata()
	{
		$getsizenumberdata = $this->Home_model->select('size_number');
		if(sizeof($getsizenumberdata) > 0)
		{
			echo '<option value="">--Select Size Number--</option>';
	        foreach ($getsizenumberdata as $valgetsizenumberdata) 
				        { 
	            echo '<option value="'.$valgetsizenumberdata->Size_Number_Id.'">'.$valgetsizenumberdata->Size_Number_Name.'</option>';
	        }
	    }
	    else
	    {
	        echo '<option value="">Record Not Available</option>';
	    }
	}
}
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Size_Character_controller extends CI_Controller {

	function __construct()
	{
        parent::__construct();
    }
	public function index()
	{
		if(isset($_REQUEST['Size_Character_Id']))
		{
			$response['editsizecharacterdata']=$this->Home_model->select_where_row('size_character',array('Size_Character_Id'=>$_REQUEST['Size_Character_Id']));
		}
		else
		{
			$response['editsizecharacterdata']="";
		}

		$response['sizecharacterdata']=$this->Home_model->select('size_character');

		$this->load->view('stock/size_character/size_character',$response);
	}
	public function addsizecharacterform()
	{
		
		$data = array(
			'Size_Character_Name'=>($this->input->post('sizenumber')) ? $this->input->post('sizenumber') : ''
		);
		if($this->input->post('Size_Character_Id') != "")
		{
			$record = array_merge($data, array('Updated_Date'=>date('Y-m-d H:i:s',strtotime('NOW'))));
			$result=$this->Home_model->update('size_character',$record,array('Size_Character_Id'=>$this->input->post('Size_Character_Id')));
			print_r($this->input->post('Size_Character_Id'));
		}
		else
		{
			$record = array_merge($data, array('Created_Date'=>date('Y-m-d H:i:s',strtotime('NOW'))));
			$result = $this->Home_model->insert('size_character', $record);
			print_r($result);
		}
	}

	public function sizecharacterdata()
	{
		$getsizecharacterdata = $this->Home_model->select('size_character');
		if(sizeof($getsizecharacterdata) > 0)
		{
			echo '<option value="">--Select Size Character--</option>';
	        foreach ($getsizecharacterdata as $valgetsizecharacterrdata) 
				        { 
	            echo '<option value="'.$valgetsizecharacterrdata->Size_Character_Id.'">'.$valgetsizecharacterrdata->Size_Character_Name.'</option>';
	        }
	    }
	    else
	    {
	        echo '<option value="">Record Not Available</option>';
	    }
	}
}
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class GstType_controller extends CI_Controller {

	function __construct()
	{
        parent::__construct();
    }

    public function index()
	{

		if(isset($_REQUEST['gsttypeid']))
		{
			$gsttypeid = $_REQUEST['gsttypeid'];

			$data['editgsttypedata']=$this->db->query("SELECT * From gsttype where GsttypeID = '$gsttypeid'")->row_array();

			$data['gsttypedata']=$this->Home_model->select('gsttype');
		}
		else
		{
			$data['gsttypedata']=$this->Home_model->select('gsttype');
			$data['editgsttypedata'] = "";
		}

		$this->load->view('gsttype/gsttype',$data);
	}

	public function saveGstType()
	{
		$data = array(
		'GstTypeName'=>$this->input->post('GstTypeName') ? $this->input->post('GstTypeName') : ''
		);

		if($this->input->post('GsttypeID') != "")
		{
			$record = array_merge($data, array('updatedDate'=>date('Y-m-d H:i:s',strtotime('NOW'))));
			$result=$this->Home_model->update('gsttype',$record,array('GsttypeID'=>$this->input->post('GsttypeID')));
			print_r($result);
		}
		else
		{
			$record = array_merge($data, array('CreatedDate'=>date('Y-m-d H:i:s',strtotime('NOW'))));
			$result = $this->Home_model->insert('gsttype', $record);
			print_r($result);
		}
	}
}
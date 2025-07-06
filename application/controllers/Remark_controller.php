<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Remark_controller extends CI_Controller {

	function __construct()
	{
        parent::__construct();
    }

    public function index()
	{

		if(isset($_REQUEST['remarkid']))
		{
			$response['editremarkdata']=$this->Home_model->select_where_row('remark',array('RemarkID'=>$_REQUEST['remarkid']));	
		}
		else
		{
			$response['editremarkdata'] = "";
		}
			$response['GetRemarkData']=$this->Home_model->select('remark');

		$this->load->view('remark/remark',$response);
	}

	public function saveremark()
	{
		$data = array(
		'Remark'=>$this->input->post('Remark') ? $this->input->post('Remark') : '',
		'RemarkType'=>$this->input->post('RemarkType') ? $this->input->post('RemarkType') : '',
		'IsActive'=>$this->input->post('isActive') ? $this->input->post('isActive') : '',
		'CreateDate'=>date('Y-m-d')
		);

		if($this->input->post('RemarkID') != "")
		{
			$result=$this->Home_model->update('remark',$data,array('RemarkID'=>$this->input->post('RemarkID')));
			print_r($result);
		}
		else
		{
			$result=$this->Home_model->insert('remark',$data);
			print_r($result);		
		}
	}
	public function saveRemarkData()
	{
		//print_r($_POST); exit;
		$data = array(
		'Remark'=>$this->input->post('remarkname') ? $this->input->post('remarkname') : '',
		'RemarkType'=>$this->input->post('rematktype') ? $this->input->post('rematktype') : '',
		'IsActive'=>$this->input->post('isActive') ? $this->input->post('isActive') : '',
		'CreateDate'=>date('Y-m-d')
		);
			
		if($this->input->post('RemarkID') != "")
		{
			$result=$this->Home_model->update('remark',$data,array('RemarkID'=>$this->input->post('RemarkID')));
			print_r($result);
		}
		else
		{
			$result=$this->Home_model->insert('remark',$data);
			if($result)
			{
				$fetchdata = $this->Home_model->getremarkData();
				foreach ($fetchdata as $qgethasteData)
				{
					?>
					<option value="<?=$qgethasteData->RemarkID;?>"> <?=$qgethasteData->Remark?> </option>
					<?php
				}
			}			
		}
	}
}
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class GreyQuality_controller extends CI_Controller {

	function __construct()
	{
        parent::__construct();
    }
	public function index()
	{
		if(isset($_REQUEST['qreyqualityid']))
		{
			$qreyqualityid = $_REQUEST['qreyqualityid'];
			$data['editgreyqualitydata'] = $this->db->query("SELECT * from grey_quality where QualityID = '$qreyqualityid'")->row_array();
		}
		else
		{
			$data['editgreyqualitydata'] = "";
		}
		$data['greyqualitydata']=$this->Home_model->select('grey_quality');

		$this->load->view('greyquality/greyquality',$data);
	}

	public function savegreyqty()
	{
		$data = array(
		'GreyQuality'=>($this->input->post('GreyQuality')) ? $this->input->post('GreyQuality') : '',
		);
		if($this->input->post('QualityID') != "")
		{
			$record = array_merge($data, array('UpdateDate'=>date('Y-m-d H:i:s',strtotime('NOW'))));
			$result=$this->Home_model->update('grey_quality',$record,array('QualityID'=>$this->input->post('QualityID')));
			print_r($result);
		}
		else
		{
			$record = array_merge($data, array('CreateDate'=>date('Y-m-d H:i:s',strtotime('NOW'))));
			$result = $this->Home_model->insert('grey_quality', $record);
			print_r($result);
		}
	}

	public function savegreyqtymdl()
	{
		$data = array(
		'GreyQuality'=>($this->input->post('greyquality')) ? $this->input->post('greyquality') : '',
		'IsActive'=>($this->input->post('isActive')) ? $this->input->post('isActive') : '',
		'CreateDate'=>date('Y-m-d')
		);

		$result=$this->Home_model->insert('grey_quality',$data);
		if($result)
		{
			$greyqualitydata=$this->Home_model->select('grey_quality');
			foreach ($greyqualitydata as $value)
			{
				?>
				<option value="<?=$value->QualityID;?>"><?=$value->GreyQuality;?></option>
				<?php
			}
		}
	}
}
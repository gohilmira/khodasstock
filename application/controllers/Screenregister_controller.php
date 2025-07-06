<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Screenregister_controller extends CI_Controller {

	function __construct()
	{
        parent::__construct();
    }
	public function index()
	{
		if(isset($_REQUEST['screenid']))
		{			
			$response['editscreendata']=$this->Home_model->select_where_row('screenregister_entry',array('ScreenRegisterID'=>$_REQUEST['screenid']));
		}
		else
		{			
			$response['editscreendata']="";
		}
		$response['GetScreenRegisterListData'] = $this->Home_model->GetScreenRegisterListData();
		$response['getItemDetailsData'] = $this->Home_model->getItemDetailsData();
		$response['getCategoryData'] = $this->Home_model->getCategoryData();
		$response['getPackingData'] = $this->Home_model->getPackingData();

		$response['LabelData'] = $this->Home_model->selectData();
		$this->load->view('screenregister/screenregister',$response);
	}

	public function savescreen()
	{
		$checkdata=$this->db->query("SELECT * FROM screenbrand where ScreenShow='1'");
		$row = $checkdata->result();
		foreach ($row as $valuefirst) 
		{
			$brandName[]=$valuefirst->brandName;
		}

		foreach ($brandName as $key=>$contact)
        {
        	$journalNamedata = str_replace(' ', '_', $contact);
        	$journalName[] = str_replace(' ', '_', $contact);
        	
        	$values[] = $this->input->post($journalNamedata);
        }
        //print_r($values);
        $datedata=date('Y-m-d');
        $destination_array ="`" . implode ( "`,`", $journalName ) . "`";
        $destination_array12 = "'" . implode ( "', '", $values ) . "'";
        $this->db->query("insert into screenregister_entry ($destination_array) values($destination_array12)");
        $lastID= $this->db->insert_id();
		$data = array(
			'ItemdetailID'=>($this->input->post('ItemdetailID')) ? $this->input->post('ItemdetailID') : '',
			'ItemDCut'=>($this->input->post('ItemDCut')) ? $this->input->post('ItemDCut') : '',
			'CategoryID'=>($this->input->post('CategoryID')) ? $this->input->post('CategoryID') : '',
			'ItemRate'=>($this->input->post('ItemRate')) ? $this->input->post('ItemRate') : '',
			'PackingID'=>($this->input->post('PackingID')) ? $this->input->post('PackingID') : '',
			'ItemWorkCut'=>($this->input->post('ItemWorkCut')) ? $this->input->post('ItemWorkCut') : '',
			'CreateDate'=>date('Y-m-d')
		);

		$query = $this->Home_model->update('screenregister_entry', $data, array('ScreenRegisterID'=>$lastID));
		// $this->db->insert_batch('screenregister_entry', $data); 
	}

	public function editscreensave()
	{
		$data = array(
			'KodasMain'=>($this->input->post('kodasmain')) ? $this->input->post('kodasmain') : '',
			'Cut'=>($this->input->post('cut')) ? $this->input->post('cut') : '',
			'Category'=>($this->input->post('category')) ? $this->input->post('category') : '',
			'Rate'=>($this->input->post('rate')) ? $this->input->post('rate') : '',
			'FourMatching'=>($this->input->post('matching')) ? $this->input->post('matching') : '',
			'KodasThely'=>($this->input->post('kodasthely')) ? $this->input->post('kodasthely') : '',
			'BigBox'=>($this->input->post('bigbox')) ? $this->input->post('bigbox') : '',
			'Kodas2'=>($this->input->post('kodastwo')) ? $this->input->post('kodastwo') : '',
			'Screen6'=>($this->input->post('screensix')) ? $this->input->post('screensix') : '',
			'Screen7'=>($this->input->post('screenseven')) ? $this->input->post('screenseven') : '',
			'Packing'=>($this->input->post('packing')) ? $this->input->post('packing') : '',
			'WorkCut'=>($this->input->post('workcut')) ? $this->input->post('workcut') : '',
			'IsActive'=>0,
			'CreateDate'=>date('Y-m-d')
		);

		$result=$this->Home_model->update('screenregister_entry',$data,array('ScreenRegisterID'=>$this->input->post('editscreenid')));
				print_r($result);
	}
}
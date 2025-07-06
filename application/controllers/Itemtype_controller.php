<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Itemtype_controller extends CI_Controller {

	function __construct()
	{
        parent::__construct();
    }
	public function index()
	{
		if(isset($_REQUEST['itemtypeid']))
		{
			$response['edititemtypedata']=$this->Home_model->select_where_row('item_type',array('ItemTypeID'=>$_REQUEST['itemtypeid']));		
		}
		else
		{
				
			$response['edititemtypedata']="";
		}
		$response['GetItemTypeData']=$this->Home_model->select('item_type');
		$this->load->view('itemtype/itemtype',$response);
	}

	public function saveitemtype()
	{
		$data = array(
		'ClothType'=>($this->input->post('ClothType')) ? $this->input->post('ClothType') : '',
		'ItemUnit'=>($this->input->post('ItemUnit')) ? $this->input->post('ItemUnit') : '',
		'ItemPackCost'=>($this->input->post('ItemPackCost')) ? $this->input->post('ItemPackCost') : '',		
		'ItemCostPer'=>($this->input->post('ItemCostPer')) ? $this->input->post('ItemCostPer') : ''
		);

		if($this->input->post('ItemTypeID') != "")
		{
			$record = array_merge($data, array('UpdateDate'=>date('Y-m-d H:i:s',strtotime('NOW'))));
			$result=$this->Home_model->update('item_type',$record,array('ItemTypeID'=>$this->input->post('ItemTypeID')));
			print_r($result);
		}
		else
		{
			$record = array_merge($data, array('CreateDate'=>date('Y-m-d H:i:s',strtotime('NOW'))));
			$result = $this->Home_model->insert('item_type', $record);
			print_r($result);
		}
	}
}
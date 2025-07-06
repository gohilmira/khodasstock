<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Itemdetail_controller extends CI_Controller {

	function __construct()
	{
        parent::__construct();
        $this->load->helper('new');
        $this->load->model('Home_model');
    }
	public function index()
	{

		if(isset($_REQUEST['itemid']))
		{
			$itemdetailsid = $_REQUEST['itemid'];
			$response['editactypedetails']=$this->Home_model->select_where_row('item_detail',array('ItemdetailID'=>$_REQUEST['itemid']));
		}
		else
		{
			$response['editactypedetails'] = "";
		}
		$result=$this->Home_model->getItenSrNo();
		$response['recordcount']=$result['rows'];
		$response['ItenSrNo']=$result['data'];
		$response['LabelData'] = $this->Home_model->selectData();
		$response['getItemDetailsListData'] = $this->Home_model->getItemDetailsListData();
		$response['getScreenRegisterData'] = $this->Home_model->getScreenRegisterData();
		$response['getPackingData'] = $this->Home_model->getPackingData();
		$response['getQualityData'] = $this->Home_model->getQualityData();
		$response['getItemTypeData'] = $this->Home_model->getItemTypeData();
		$response['getCategoryData'] = $this->Home_model->getCategoryData();
		$response['getsizenumberdata'] = $this->Home_model->select('size_number');
		$response['getsizecharacterdata'] = $this->Home_model->select('size_character');
        $response['getcolordata'] = $this->Home_model->select('color');
        // $response['getqrData'] = $this->Home_model->getqrData();
        $response['getStationData1'] = $this->Home_model->getStationData1();

		$this->load->view('itemdetail/itemdetail',$response);
	}
    

		
	public function additemdetail()
	{
       
		$data = array(
		'ICode'=>($this->input->post('ICode')) ? $this->input->post('ICode') : '',
		'ItemsrNo'=>($this->input->post('ItemsrNo')) ? $this->input->post('ItemsrNo') : '',
		'IName'=>($this->input->post('IName')) ? $this->input->post('IName') : '',
		'qr_id'=>($this->input->post('qr_id')) ? $this->input->post('qr_id') : '',
		'IMainScreenID'=>($this->input->post('IMainScreenID')) ? $this->input->post('IMainScreenID') : '0',
		'ICut'=>($this->input->post('ICut')) ? $this->input->post('ICut') : '',	
		'PackingID'=>($this->input->post('PackingID')) ? $this->input->post('PackingID') : '0',	
		'GrayQualityID'=>($this->input->post('GrayQualityID')) ? $this->input->post('GrayQualityID') : '0',	
		'IItemTypeID'=>($this->input->post('IItemTypeID')) ? $this->input->post('IItemTypeID') : '0',	
		'ItemTypeID'=>($this->input->post('ItemTypeID')) ? $this->input->post('ItemTypeID') : '0',	
		'ScreenSeriesID'=>($this->input->post('ScreenSeriesID')) ? $this->input->post('ScreenSeriesID') : '0',	
		'CategoryID'=>($this->input->post('CategoryID')) ? $this->input->post('CategoryID') : '0',	
		'ISellingRate'=>($this->input->post('ISellingRate')) ? $this->input->post('ISellingRate') : '',
		'IUnit'=>($this->input->post('IUnit')) ? $this->input->post('IUnit') : '',
		'IRate2'=>($this->input->post('IRate2')) ? $this->input->post('IRate2') : '',	
		'IRate3'=>($this->input->post('IRate3')) ? $this->input->post('IRate3') : '',
		'ISelected'=>($this->input->post('ISelected')) ? $this->input->post('ISelected') : '',
		'IWorkCut'=>($this->input->post('IWorkCut')) ? $this->input->post('IWorkCut') : '',
		'IPackCutCost'=>($this->input->post('IPackCutCost')) ? $this->input->post('IPackCutCost') : '',	
		'ISaleRate'=>($this->input->post('ISaleRate')) ? $this->input->post('ISaleRate') : '',
		'IHsn'=>($this->input->post('IHsn')) ? $this->input->post('IHsn') : '',
		'IGst'=>($this->input->post('IGst')) ? $this->input->post('IGst') : '',
		'CreateDate'=>date('Y-m-d')
		);
	
		$forrowcount = $this->input->post('forrowcount');

		$config['upload_path'] = 'uploads/';
        $config['allowed_types'] = 'gif|jpg|png';
        // $config['max_size'] = 100;
        // $config['max_width'] = 1024;
        // $config['max_height'] = 768;
	$this->load->library('upload', $config);
		$this->upload->initialize($config);
		if( $this->upload->do_upload('input-file-now-custom-1')){
			$filename = $this->upload->data();
			$image=$filename['file_name'];
		}
		
			// $error = array('error' => $this->upload->display_errors());
		
			
			$data = array_merge($data, array('Product_Profile'=>$image));
		
		if($this->input->post('ItemdetailID') != "")
		{
			$result=$this->Home_model->update('item_detail',$data,array('ItemdetailID'=>$this->input->post('ItemdetailID')));
			if($result)
			{
				$delete = $this->Home_model->deletedata('stock_details',array('Item_Id'=>$this->input->post('ItemdetailID')));
				if($delete)
				{
					$frresult = $this->Stock_model->add_stock_details($this->input->post('ItemdetailID'),$_POST,$forrowcount);
					print_r($frresult);
				}
			}
		}
		else
		{
			$lastid=$this->Home_model->last_insert_id('item_detail',$data);
				$frresult = $this->Stock_model->add_stock_details($lastid,$_POST,$forrowcount);
				print_r($frresult);
			}
	}

	public function additemdetailformmdl()
	{
		$data = array(
		'ICode'=>($this->input->post('code')) ? $this->input->post('code') : '',
		'ItemsrNo'=>($this->input->post('itemsrno')) ? $this->input->post('itemsrno') : '',
		'IName'=>($this->input->post('name')) ? $this->input->post('name') : '',
		'qr_id'=>($this->input->post('qr_id')) ? $this->input->post('qr_id') : '',
		'IMainScreenID'=>($this->input->post('mainscreen')) ? $this->input->post('mainscreen') : '0',
		'ICut'=>($this->input->post('cut')) ? $this->input->post('cut') : '',	
		'PackingID'=>($this->input->post('packing')) ? $this->input->post('packing') : '0',	
		'GrayQualityID'=>($this->input->post('greyquality')) ? $this->input->post('greyquality') : '0',	
		'IItemTypeID'=>($this->input->post('type')) ? $this->input->post('type') : '0',	
		'ItemTypeID'=>($this->input->post('itemtype')) ? $this->input->post('itemtype') : '0',	
		'ScreenSeriesID'=>($this->input->post('screenserie')) ? $this->input->post('screenserie') : '0',	
		'CategoryID'=>($this->input->post('category')) ? $this->input->post('category') : '0',	
		'ISellingRate'=>($this->input->post('sellingrate')) ? $this->input->post('sellingrate') : '',
		'IUnit'=>($this->input->post('unit')) ? $this->input->post('unit') : '',
		'IRate2'=>($this->input->post('rete2')) ? $this->input->post('rete2') : '',	
		'IRate3'=>($this->input->post('rate3')) ? $this->input->post('rate3') : '',
		'ISelected'=>($this->input->post('Selected')) ? $this->input->post('Selected') : '',
		'IWorkCut'=>($this->input->post('workcut')) ? $this->input->post('workcut') : '',
		'IPackCutCost'=>($this->input->post('packcutboxcost')) ? $this->input->post('packcutboxcost') : '',	
		'ISaleRate'=>($this->input->post('saleratemu')) ? $this->input->post('saleratemu') : '',
		'IHsn'=>($this->input->post('hsn')) ? $this->input->post('hsn') : '',
		'IGst'=>($this->input->post('gst')) ? $this->input->post('gst') : '',
		'CreateDate'=>date('Y-m-d')
		);
		$result=$this->Home_model->insert('item_detail',$data);

		$itemdata = $this->db->query("SELECT * from item_detail")->result();
		foreach ($itemdata as $value)
		{
			?>
			<option value="<?=$value->ItemdetailID;?>"><?=$value->IName;?></option>
			<?php
		}
				
	}



}
<?php
class Home_model extends CI_Model {
	function __construct()
    {
        parent::__construct();
    }
    /* New Code Start By Urvashi */
    public function select($table)
	{
		$this->db->select('*');
		$this->db->from($table);
		$query = $this->db->get();
		return $query->result();
	}
	public function select_where_row($table,$where)
	{
		$this->db->select('*');
		$this->db->from($table);
		$this->db->where($where);
		$query = $this->db->get();
		//echo $this->db->last_query(); exit;
		return $query->row_array();
	}
	public function select_where_result($table,$where)
	{
		$this->db->select('*');
		$this->db->from($table);
		$this->db->where($where);
		$query = $this->db->get();
		return $query->result_array();
	}
	public function select_array($table)
	{
		$this->db->select('*');
		$this->db->from($table);
		$query = $this->db->get();
		return $query->result();
	}
	public function insert($table,$data)
	{
		return $this->db->insert($table,$data);
	}
	public function update($table,$data,$where)
	{
		$this->db->where($where);
		return $this->db->update($table,$data);
	}
	public function deletedata($table,$where)
	{
		return $this->db->delete($table,$where); 
	}
	function last_insert_id($table,$data)
	{
	   $this->db->insert($table, $data);
	   $insert_id = $this->db->insert_id();
	   return  $insert_id;
	}
	public function getacctypedata()
	{
		$this->db->select('AcTypeID,ACType');
		$this->db->from('acc_type');
		$this->db->order_by("ACType", "asc");
		$query = $this->db->get();
		return $query->result();	
	}
	public function getAccountData()
	{
		$this->db->select('ACName,AcID');
		$this->db->from('account_group');
		$this->db->where('ACTypeID','2');
		$this->db->order_by("ACName", "asc");
		$query = $this->db->get();
		return $query->result();	
	}
	public function getCityData()
	{
		$this->db->select('CityID,CityName');
		$this->db->from('city');
		$this->db->order_by("CityName", "asc");
		$query = $this->db->get();
		return $query->result();	
	}
	public function getStationData()
	{
		$this->db->select('StationID,StationName');
		$this->db->from('station');
		$this->db->order_by("StationName", "asc");
		$query = $this->db->get();
		return $query->result();	
	}
		public function getStationData1()
	{
		$this->db->select('qr_id,QRCode');
		$this->db->from('qr_detail');
		$this->db->order_by("QRCode", "asc");
		$query = $this->db->get();
		return $query->result();	
	}
	public function getTransportData()
	{
		$this->db->select('TransportID,TransportName');
		$this->db->from('transport');
		$this->db->order_by("TransportName", "asc");
		$query = $this->db->get();
		return $query->result();	
	}
	public function getBrokerData()
	{
		$this->db->select('Ledger_Id,LName');
		$this->db->from('ledger');
		$this->db->where('AcTypeID','12');
		$this->db->order_by("LName", "asc");
		$query = $this->db->get();
		return $query->result();	
	}
	public function getItemDetailsData()
	{
		$this->db->select('ItemdetailID,IName,ICut,ISellingRate');
		$this->db->from('item_detail');
		$this->db->order_by("IName", "asc");
		$query = $this->db->get();
		return $query->result();	
	}
	public function getScreenRegisterData()
	{
		$this->db->select('ScreenRegisterID,IName');
		$this->db->from('screenregister_entry');
		$this->db->join('item_detail', 'item_detail.ItemdetailID = screenregister_entry.ItemdetailID');
		$this->db->order_by("IName", "asc");
		$query = $this->db->get();
		return $query->result();	
	}
	public function getStateData()
	{
		$this->db->select('StateID,StateName,StateCode');
		$this->db->from('state');
		$this->db->order_by("StateName", "asc");
		$query = $this->db->get();
		return $query->result();	
	}
	public function getPackingData()
	{
		$this->db->select('PackingID,PackingName');
		$this->db->from('package_style');
		$this->db->order_by("PackingName", "asc");
		$query = $this->db->get();
		return $query->result();	
	}
	public function getCategoryData()
	{
		$this->db->select('CategoryID,CategoryName');
		$this->db->from('category');
		$this->db->order_by("CategoryName", "asc");
		$query = $this->db->get();
		return $query->result();	
	}
	public function getCompanyData()
	{
		$this->db->select('CompanyID,CompanyName');
		$this->db->from('company_manager');
		$this->db->order_by("CompanyName", "asc");
		$query = $this->db->get();
		return $query->result();	
	}
	public function getMillDespData()
	{
		$this->db->select('Ledger_Id,LName');
		$this->db->from('ledger');
		$this->db->where('AcTypeID','14');
		$this->db->order_by("LName", "asc");
		$query = $this->db->get();
		return $query->result();	
	}
	public function getQualityData()
	{
		$this->db->select('QualityID,GreyQuality');
		$this->db->from('grey_quality');
		$this->db->order_by("GreyQuality", "asc");
		$query = $this->db->get();
		return $query->result();	
	}
	public function checkerdata()
	{
		$this->db->select('Ledger_Id,LName');
		$this->db->from('ledger');
		$this->db->where('AcTypeID','17');
		$this->db->order_by("LName", "asc");
		$query = $this->db->get();
		return $query->result();	
	}
	public function getGreyPartyData()
	{
		$this->db->select('Ledger_Id,LName');
		$this->db->from('ledger');
		$this->db->where('AcTypeID','2');
		$this->db->order_by("LName", "asc");
		$query = $this->db->get();
		return $query->result();	
	}
	public function GetAadtiyaList()
	{
		$this->db->select('AdatiyaName');
		$this->db->from('haste');
		$query = $this->db->get();
		return $query->result();
	}
	public function GetHasteList()
	{
		$this->db->select('HasteID,HasteName');
		$this->db->from('haste');
		$query = $this->db->get();
		return $query->result();
	}
	public function companyname()
	{
		$this->db->select('CompanyName,CompanyID');
		$this->db->from('company_manager');
		$this->db->order_by("CompanyName", "asc");
		$query = $this->db->get();
		return $query->result();	
	}
	public function GetCompanyDetail()
	{
		$this->db->select('CompanyName,CompanyID,CreateDate,CompanyShortName');
		$this->db->from('company_manager');
		$this->db->order_by("CompanyName", "asc");
		$query = $this->db->get();
		return $query->result();	
	}
	public function getItemTypeData()
	{
		$this->db->select('ClothType,ItemTypeID');
		$this->db->from('item_type');
		$this->db->order_by("ClothType", "asc");
		$query = $this->db->get();
		return $query->result();	
	}
	public function getItemDetailsListData()
	{
		$this->db->select('item_detail.ItemdetailID,item_detail.IName,qr_detail.QRImage,item_detail.ICut,item_detail.ISellingRate,item_detail.CreateDate,item_detail.Product_Profile');
		$this->db->from('item_detail');
		$this->db->join('qr_detail','item_detail.qr_id=qr_detail.qr_id');
		$this->db->order_by("IName", "asc");
		$query = $this->db->get();
		return $query->result();	
	}
	public function selectData()
	{
		$this->db->select('*');
		$this->db->from('screenbrand');
		$this->db->where('ScreenShow','1');
		$this->db->order_by('screenBrandID','DESC');
		$query = $this->db->get();
		return $query->result();
	}	
	public function GetScreenRegisterListData()
	{
		$this->db->select('item_detail.IName,screenregister_entry.ScreenRegisterID,screenregister_entry.ItemDCut,screenregister_entry.ItemRate,category.CategoryName,package_style.PackingName');
		$this->db->from('screenregister_entry');
		$this->db->join('item_detail', 'item_detail.ItemdetailID = screenregister_entry.ItemdetailID', 'left');
		$this->db->join('category', 'category.CategoryID = screenregister_entry.CategoryID', 'left');
		$this->db->join('package_style', 'package_style.PackingID = screenregister_entry.PackingID', 'left');
		$query = $this->db->get();
		return $query->result();	
	}
	public function selectCityData()
	{
		$this->db->select('*');
		$this->db->from('city');
		$this->db->join('state', 'state.StateID = city.StateID', 'left');
		$query = $this->db->get();
		return $query->result();	
	}
	public function selectSateDetail($StateID)
	{
		$this->db->select('*');
		$this->db->from('city');
		$this->db->join('state', 'state.StateID = city.StateID');
		$this->db->where('city.CityID',$StateID);
		$query = $this->db->get();
		//echo $this->db->last_query(); exit;
		return $query->result_array();	
	}
	public function GetLedgerData()
	{
		$this->db->select('Ledger_Id,LCode,LName,ACType');
		$this->db->from('ledger');
		$this->db->join('acc_type', 'acc_type.AcTypeID = ledger.AcTypeID');
		$query = $this->db->get();
		return $query->result();
	}
	public function GetTransportDataList()
	{
		$this->db->select('TransportID,TransportName,TPhone1,TMobile,TEway,TMode,createDate');
		$this->db->from('transport');
		$query = $this->db->get();
		return $query->result();
	}
	public function getpartyacData()
	{
		$this->db->select('LName,Ledger_Id');
		$this->db->from('ledger');
		$this->db->order_by("LName", "asc");
		$query = $this->db->get();
		return $query->result();	
	}
	public function getItenSrNo()
	{
		$this->db->select('ItemsrNo');
		$this->db->from('item_detail');
		$this->db->order_by("ItemdetailID", "desc");
		$this->db->limit(1);
		$query = $this->db->get();
		//echo $this->db->last_query(); exit;
		$result['rows']=$query->num_rows();
		$result['data']=$query->result();
		return $result;
	}
	/* New Code End By Urvashi */	
	// Start by milan 2/11/19
	public function getgreyQualityData()
	{
		$this->db->select('QualityID,GreyQuality');
		$this->db->from('grey_quality');
		$this->db->order_by("GreyQuality", "asc");
		$query = $this->db->get();
		return $query->result();	
	}
	public function getremarkData()
	{
		$this->db->select('Remark,RemarkID');
		$this->db->from('remark');
		$this->db->order_by("RemarkID", "desc");
		$query = $this->db->get();
		return $query->result();	
	}
	public function getcheckerData()
	{
		$this->db->select('LName,Ledger_Id');
		$this->db->from('ledger');
		$this->db->where('AcTypeID','17');
		$this->db->order_by("Ledger_Id", "desc");
		$query = $this->db->get();
		return $query->result();		
	}
	public function getgstTypeData()
	{
		$this->db->select('GstTypeName,GsttypeID');
		$this->db->from('gsttype');
		$this->db->order_by("GstTypeName", "asc");
		$query = $this->db->get();
		return $query->result();	
	}
	public function selectPurchaseOrderBill()
	{
		$this->db->select('gp.greypurchaseorderBillID,gp.SrNo,gp.BillNo,gp.PurchaseOrderBillDate,cm.CompanyName as CompanyName,l.LName as LedgerName,gp.RecTaka,gp.RecMts,gp.BillAmt,gp.NetAmt');
		$this->db->from('greypurchaseorderbill as gp');
		$this->db->join('company_manager as cm','cm.CompanyID=gp.CompanyId','Left');
		$this->db->join('ledger as l','l.Ledger_Id=gp.PartyAcID','Left');
		$query = $this->db->get();
		//echo $this->db->last_query(); exit;
		return $query->result();
	}
	// End by milan 2/11/19
	public function getacctypedata_result()
	{
		$this->db->select('AcTypeID,ACType');
		$this->db->from('acc_type');
		$this->db->order_by("AcTypeID", "desc");
		$query = $this->db->get();
		return $query->result_array();	
	}
	public function getAccountData_result()
	{
		$this->db->select('ACName,AcID');
		$this->db->from('account_group');
		$this->db->order_by("AcID", "desc");
		$query = $this->db->get();
		return $query->result_array();	
	}
	public function getItemDetailsData_array()
	{
		$this->db->select('ItemdetailID,IName');
		$this->db->from('item_detail');
		$this->db->order_by("ItemdetailID", "desc");
		$query = $this->db->get();
		return $query->result_array();	
	}
	public function getCityData_array()
	{
		$this->db->select('CityID,CityName');
		$this->db->from('city');
		$this->db->order_by("CityName", "asc");
		$query = $this->db->get();
		return $query->result_array();	
	}
	public function getTransportData_array()
	{
		$this->db->select('TransportID,TransportName');
		$this->db->from('transport');
		$this->db->order_by("TransportID", "desc");
		$query = $this->db->get();
		return $query->result_array();	
	}
	public function getordernoData()
	{
		$this->db->select('GreyOrderNo,PurchaseOrderId');
		$this->db->from('greypurchaseorder');
		$this->db->order_by("GreyOrderNo", "asc");
		$query = $this->db->get();
		return $query->result();	
	}
}
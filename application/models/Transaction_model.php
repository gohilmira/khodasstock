<?php

class Transaction_model extends CI_Model
{
   function __construct()
	{
		parent::__construct();
	}
	public function GetAllSellOrderData()
	{

		$this->db->select('so.SaleVoucher,so.SaleDate,so.SaleBillAmt,so.SalePaidDate,so.RecSalePcs,so.RecSaleMts,so.SaleOrderNo,l.LName,so.SaleOrderID');
		$this->db->from('saleorder as so');
		$this->db->join('ledger as l','l.Ledger_Id=so.PartyID');
		$query = $this->db->get();
		//echo $this->db->last_query(); exit;
		return $query->result();
	}
	public function getvoucherNo()
	{
		$this->db->select('SaleVoucher,SaleOrderNo');
		$this->db->from('saleorder');
		$this->db->order_by("SaleOrderID", "desc");
		$this->db->limit(1);  
		$query = $this->db->get();
		//echo $this->db->last_query(); exit;
		$result['rows']=$query->num_rows();
		$result['data']=$query->result();
		return $result;
	}
	public function getBrokerDataAC($brokerID)
	{
		$this->db->select('LName,Ledger_Id');
		$this->db->from('ledger');
		$this->db->where('Ledger_Id',$brokerID);
		$this->db->order_by("LName", "asc");
		$query = $this->db->get();
		return $query->result();	
	}
	public function GetGreyPurchaseOrderData()
	{
		$this->db->select('LName,Ledger_Id');
		$this->db->from('ledger');
		$this->db->where('Ledger_Id',$brokerID);
		$this->db->order_by("LName", "asc");
		$query = $this->db->get();
		return $query->result();	
	}
	// Start by Milan 2/11/19
	public function getordernoData()
	{
		$this->db->select('PurchaseOrderId,GreyOrderNo');
		$this->db->from('greypurchaseorder');
		$this->db->order_by("PurchaseOrderId", "desc");
		$query = $this->db->get();
		return $query->result();	
	}
	public function getOrderNo()
	{
		$this->db->select('GreyOrderNo');
		$this->db->from('greypurchaseorder');
		$this->db->order_by("PurchaseOrderId", "desc");
		$this->db->limit(1);  
		$query = $this->db->get();
		$result['rows']=$query->num_rows();
		$result['data']=$query->result();
		return $result;
	}
	public function selectPurchaseOrder()
	{
		$this->db->select('gp.PurchaseOrderId,gp.GreyOrderNo,gp.GreyOrderDate,gp.GreyNoLots,gp.GreyPcsPerLots,gp.GreyOrderPcs,ag.ACName as WeaverName,ag.AcID,l.LName as BrokerName,gq.GreyQuality as Quality');
		$this->db->from('greypurchaseorder as gp');
		$this->db->join('account_group as ag','ag.AcID=gp.WeaverID','Left');
		$this->db->join('ledger as l','l.Ledger_Id=gp.BrokerID','Left');
		$this->db->join('grey_quality as gq','gq.QualityID=gp.QualityID','Left');
		$this->db->order_by('gp.PurchaseOrderId','desc');
		$query = $this->db->get();
		// echo $this->db->last_query(); exit;
		return $query->result();
	}

	public function selectJoinData($Purchase_Order_Id)
	{
		
		$this->db->select('gp.PurchaseOrderId,gp.GreyPcsPerLots,gp.GreyOrderNo,gp.GreyOrderDate,ag.ACName as WeaverName,l.LAddress as Address,l.LAddressLine2 as Address_Con,l.LOtherAddress as Oth_Address_Con,l.LName as BrokerName,gq.GreyQuality,gp.GreyNoLots,gp.GreyOrderPcs,gp.GreyRateMts,r.remark,l1.LName as ChekerName');

		$this->db->from('greypurchaseorder as gp','Left');
		$this->db->join('account_group as ag','ag.AcID=gp.WeaverID','Left');
		$this->db->join('ledger as l','l.Ledger_Id=gp.BrokerID','Left');
		$this->db->join('ledger as l1','l1.Ledger_Id=gp.CheckerID','Left');
		$this->db->join('remark as r','r.RemarkID=gp.RemarkID','Left');
		$this->db->join('grey_quality as gq','gq.QualityID=gp.QualityID','Left');
		$this->db->where('PurchaseOrderId',$Purchase_Order_Id);
		$query = $this->db->get();
		$result=$query->row_array();
		return $result;
	}

	// End by Milan 2/11/19

	public function selectPurchaseOrderBill()
	{
		$this->db->select('gp.greypurchaseorderBillID,gp.GreyPSrNo,gp.GreyPBillNo,gp.GreyPPurchaseOrderBillDate,cm.CompanyName,l.LName,gp.GreyPRecTaka,gp.GreyPRecMts,gp.GreyPBillAmt,gp.GreyPNetAmt');
		$this->db->from('greypurchaseorderbill as gp');
		$this->db->join('company_manager as cm','cm.CompanyID=gp.CompanyID');
		$this->db->join('ledger as l','l.Ledger_Id=gp.GreyPPartyAcID','left');
		$this->db->order_by("gp.greypurchaseorderBillID", "desc");
		$query = $this->db->get();
		//echo $this->db->last_query(); exit;
		return $query->result();
	}

	public function finishpurchaseorderdata()
	{
		$this->db->select('finish_purchase.Finish_Purchase_Id,finish_purchase.Comapny_Id,finish_purchase.Type,finish_purchase.Voucher,finish_purchase.Ord_Ref,finish_purchase.Lr_No_Awb,finish_purchase.Party_Id,finish_purchase.State_Id,finish_purchase.Bill_No,company_manager.CompanyID,company_manager.CompanyName as companyname,ledger.Ledger_Id,ledger.LName as ledgername');
		$this->db->from('finish_purchase');
		$this->db->join('company_manager','company_manager.CompanyID=finish_purchase.Comapny_Id','Left');
		$this->db->join('ledger','ledger.Ledger_Id=finish_purchase.Party_Id','Left');
		$this->db->where('finish_purchase.Type','Finish Purchase');
		$query = $this->db->get();
		//echo $this->db->last_query(); exit;
		return $query->result();
	}

	public function finishpurchaseorderbilldata()
	{
		$this->db->select('finish_purchase.Finish_Purchase_Id,finish_purchase.Comapny_Id,finish_purchase.Type,finish_purchase.Voucher,finish_purchase.Ord_Ref,finish_purchase.Lr_No_Awb,finish_purchase.Party_Id,finish_purchase.State_Id,finish_purchase.Bill_No,company_manager.CompanyID,company_manager.CompanyName as companyname,ledger.Ledger_Id,ledger.LName as ledgername');
		$this->db->from('finish_purchase');
		$this->db->join('company_manager','company_manager.CompanyID=finish_purchase.Comapny_Id','Left');
		$this->db->join('ledger','ledger.Ledger_Id=finish_purchase.Party_Id','Left');
		$this->db->where('finish_purchase.Type','Finish Purchase Bill');
		$query = $this->db->get();
		//echo $this->db->last_query(); exit;
		return $query->result();
	}

	public function editpurchaseOrderBilldata($finishpurchaseorderid)
	{
		// $this->db->select('finish_purchase.Finish_Purchase_Id,finish_purchase.Comapny_Id,finish_purchase.Type,finish_purchase.Voucher,finish_purchase.Ord_Ref,finish_purchase.Lr_No_Awb,finish_purchase.Party_Id,finish_purchase.State_Id,finish_purchase.Bill_No,company_manager.CompanyID,company_manager.ShortName as companyname,ledger.Ledger_Id,ledger.Name as ledgername,transport.transportID,transport.transportName,finish_purchase.Transport_Id,finish_purchase.Finish_Date,finish_purchase.Gst_Type_Id,finish_purchase.Haste_Id,finish_purchase.Brocker_Id,finish_purchase.Dhara,finish_purchase.Grace,finish_purchase.Station_Id,finish_purchase.Screen_Series,finish_purchase.Party_Gstin,finish_purchase.Obtain_By,finish_purchase.Remark_Id,finish_purchase.Only_X,finish_purchase.E_Way_Bill_No,finish_purchase.Net_Amt,finish_purchase.Lr_No,finish_purchase.Lr_Date,finish_purchase.Lr_Rec_Date,finish_purchase.Weight,finish_purchase.Height,finish_purchase.Cgst,finish_purchase.Cgst_Amt,finish_purchase.Taxable_Value,finish_purchase.Bill_Amt,finish_purchase.Net_After_Tds,finish_purchase.Paid_Date,finish_purchase.Discount,finish_purchase.Pack_Folt,finish_purchase.Rd,finish_purchase.Sweets,finish_purchase.Oth_Bc,finish_purchase.Add_Amt,finish_purchase.Tds_Amt,finish_purchase.Gr,finish_purchase.Rec_Sale_Vno,finish_purchase.Paid_Amt,finish_purchase.Rec_Sale_Pcs,finish_purchase.Rec_Sale_Mts,finish_purchase.Sgst,finish_purchase.Sgst_Amt,station.StationID,station.StationName,screenregister_entry.ScreenRegisterID,screenregister_entry.KodasMain,remark.RemarkID,remark.Remark');

		// $this->db->join('company_manager','company_manager.CompanyID=finish_purchase.Comapny_Id');
		// $this->db->join('ledger','ledger.Ledger_Id=finish_purchase.Party_Id');
		// $this->db->join('transport','transport.transportID=finish_purchase.Transport_Id');
		// $this->db->join('gsttype','gsttype.GsttypeID=finish_purchase.Gst_Type_Id');
		// $this->db->join('station','station.StationID=finish_purchase.Station_Id');
		// $this->db->join('screenregister_entry','screenregister_entry.ScreenRegisterID=finish_purchase.Screen_Series');
		// $this->db->join('remark','remark.RemarkID=finish_purchase.Remark_Id');
		$this->db->where('finish_purchase.Finish_Purchase_Id',$finishpurchaseorderid);
		$this->db->select('*');
		$this->db->from('finish_purchase');
		$this->db->where('Finish_Purchase_Id',$finishpurchaseorderid);
		$query = $this->db->get();
		//echo $this->db->last_query(); exit;
		return $query->row_array();
	}


	public function printFinishPurchaseOrder($printFinishPurchaseOrderId)
	{

		$this->db->select('finish_purchase.Finish_Purchase_Id,finish_purchase.Igst,finish_purchase.Igst_Amt,finish_purchase.Comapny_Id,finish_purchase.Type,finish_purchase.Voucher,finish_purchase.Ord_Ref,finish_purchase.Lr_No_Awb,finish_purchase.Party_Id,finish_purchase.State_Id,finish_purchase.Bill_No,company_manager.CompanyID,company_manager.CompanyName as companyname,company_manager.AddressCompany,company_manager.CompanyPanNo,company_manager.CompanyCinNo,company_manager.CompanyGstInUin,ledger.Ledger_Id,ledger.LName as ledgername,ledger.LAddress as ledgeraddress,ledger.LAddressLine2,ledger.LGstin as partygstin,ledger.LPanNo,ledger.LDistance,transport.TransportID,transport.TransportName,finish_purchase.Transport_Id,finish_purchase.Finish_Date,finish_purchase.Gst_Type_Id,finish_purchase.Haste_Id,finish_purchase.Brocker_Id,finish_purchase.Dhara,finish_purchase.Grace,finish_purchase.Station_Id,finish_purchase.Screen_Series,finish_purchase.Party_Gstin,finish_purchase.Obtain_By,finish_purchase.Remark_Id,finish_purchase.Only_X,finish_purchase.E_Way_Bill_No,finish_purchase.Net_Amt,finish_purchase.Lr_No,finish_purchase.Lr_Date,finish_purchase.Lr_Rec_Date,finish_purchase.Weight,finish_purchase.Height,finish_purchase.Cgst,finish_purchase.Cgst_Amt,finish_purchase.Taxable_Value,finish_purchase.Bill_Amt,finish_purchase.Net_After_Tds,finish_purchase.Paid_Date,finish_purchase.Discount,finish_purchase.Pack_Folt,finish_purchase.Rd,finish_purchase.Sweets,finish_purchase.Oth_Bc,finish_purchase.Add_Amt,finish_purchase.Tds_Amt,finish_purchase.Gr,finish_purchase.Rec_Sale_Vno,finish_purchase.Paid_Amt,finish_purchase.Rec_Sale_Pcs,finish_purchase.Rec_Sale_Mts,finish_purchase.Sgst,finish_purchase.Sgst_Amt,finish_purchase.Case_No,finish_purchase.Amount_Less,finish_purchase.Discount_Less2,station.StationID,station.StationName,screenregister_entry.ScreenRegisterID,screenregister_entry.ItemDCut,remark.RemarkID,remark.Remark,state.StateName,state.StateCode,haste.HasteGstIn');
		$this->db->from('finish_purchase');
		$this->db->join('company_manager','company_manager.CompanyID=finish_purchase.Comapny_Id','LEFT');
		$this->db->join('ledger','ledger.Ledger_Id=finish_purchase.Party_Id','LEFT');
		$this->db->join('haste','haste.HasteID=finish_purchase.Haste_Id','LEFT');
		$this->db->join('state','state.StateID=finish_purchase.State_Id');
		$this->db->join('transport','transport.TransportID=finish_purchase.Transport_Id','LEFT');
		$this->db->join('gsttype','gsttype.GsttypeID=finish_purchase.Gst_Type_Id','LEFT');
		$this->db->join('station','station.StationID=finish_purchase.Station_Id','LEFT');
		$this->db->join('screenregister_entry','screenregister_entry.ScreenRegisterID=finish_purchase.Screen_Series','LEFT');
		$this->db->join('remark','remark.RemarkID=finish_purchase.Remark_Id','LEFT');
		$this->db->where('finish_purchase.Finish_Purchase_Id',$printFinishPurchaseOrderId);
		// $this->db->select('*');
		// $this->db->from('finish_purchase');
		// $this->db->where('Finish_Purchase_Id',$finishpurchaseorderid);
		$query = $this->db->get();
		// echo $this->db->last_query(); exit;
		return $query->row_array();
	}

	public function findbilldatabyordref($findbilldatabyordref)
	{

		$this->db->select('finish_purchase.Finish_Purchase_Id,finish_purchase.Comapny_Id,finish_purchase.Type,finish_purchase.Voucher,finish_purchase.Ord_Ref,finish_purchase.Lr_No_Awb,finish_purchase.Party_Id,finish_purchase.State_Id,finish_purchase.Bill_No,company_manager.CompanyID,company_manager.CompanyName as companyname,company_manager.AddressCompany,company_manager.CompanyPanNo,company_manager.CompanyCinNo,company_manager.CompanyGstInUin,ledger.Ledger_Id,ledger.LName as ledgername,ledger.LAddress as ledgeraddress,ledger.LAddressLine2,ledger.LGstin as partygstin,ledger.LPanNo,ledger.LDistance,transport.TransportID,transport.TransportName,finish_purchase.Transport_Id,finish_purchase.Finish_Date,finish_purchase.Gst_Type_Id,finish_purchase.Haste_Id,finish_purchase.Brocker_Id,finish_purchase.Dhara,finish_purchase.Grace,finish_purchase.Station_Id,finish_purchase.Screen_Series,finish_purchase.Party_Gstin,finish_purchase.Obtain_By,finish_purchase.Remark_Id,finish_purchase.Only_X,finish_purchase.E_Way_Bill_No,finish_purchase.Net_Amt,finish_purchase.Lr_No,finish_purchase.Lr_Date,finish_purchase.Lr_Rec_Date,finish_purchase.Weight,finish_purchase.Height,finish_purchase.Cgst,finish_purchase.Cgst_Amt,finish_purchase.Taxable_Value,finish_purchase.Bill_Amt,finish_purchase.Net_After_Tds,finish_purchase.Paid_Date,finish_purchase.Discount,finish_purchase.Pack_Folt,finish_purchase.Rd,finish_purchase.Sweets,finish_purchase.Oth_Bc,finish_purchase.Add_Amt,finish_purchase.Tds_Amt,finish_purchase.Gr,finish_purchase.Rec_Sale_Vno,finish_purchase.Paid_Amt,finish_purchase.Rec_Sale_Pcs,finish_purchase.Rec_Sale_Mts,finish_purchase.Sgst,finish_purchase.Sgst_Amt,finish_purchase.Case_No,finish_purchase.Amount_Less,finish_purchase.Discount_Less2,station.StationID,station.StationName,screenregister_entry.ScreenRegisterID,screenregister_entry.ItemDCut,remark.RemarkID,remark.Remark,state.StateName,state.StateCode,haste.HasteGstIn,finish_purchase.Total_Pcs,finish_purchase.Total_Mts,finish_purchase.Grand_Total,finish_purchase.Remark1,finish_purchase.Grand_Total1,finish_purchase.Discount_Less1,finish_purchase.Remark2,finish_purchase.Grand_Total2,finish_purchase.Amount_Less2,finish_purchase.Haste_Gstin');
		$this->db->from('finish_purchase');
		$this->db->join('company_manager','company_manager.CompanyID=finish_purchase.Comapny_Id','LEFT');
		$this->db->join('ledger','ledger.Ledger_Id=finish_purchase.Party_Id','LEFT');
		$this->db->join('haste','haste.HasteID=finish_purchase.Haste_Id','LEFT');
		$this->db->join('state','state.StateID=finish_purchase.State_Id','LEFT');
		$this->db->join('transport','transport.TransportID=finish_purchase.Transport_Id','LEFT');
		$this->db->join('gsttype','gsttype.GsttypeID=finish_purchase.Gst_Type_Id','LEFT');
		$this->db->join('station','station.StationID=finish_purchase.Station_Id','LEFT');
		$this->db->join('screenregister_entry','screenregister_entry.ScreenRegisterID=finish_purchase.Screen_Series','LEFT');
		$this->db->join('remark','remark.RemarkID=finish_purchase.Remark_Id','LEFT');
		$this->db->where('finish_purchase.Ord_Ref',$findbilldatabyordref);
		$this->db->where('finish_purchase.Type',"Finish Purchase");
		// $this->db->select('*');
		// $this->db->from('finish_purchase');
		// $this->db->where('Finish_Purchase_Id',$finishpurchaseorderid);
		$query = $this->db->get();
		return $query->row_array();
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
	public function insertGeryPurchase($table,$data)
	{
		return $this->db->insert($table,$data);
	}
	
	public function getCompanyData()
	{
		$this->db->select('CompanyName,CompanyID');
		$this->db->from('company_manager');
		$this->db->order_by("CompanyID", "desc");
		$query = $this->db->get();
		return $query->result();	
	}

	

	public function getpartyacData()
	{
		$this->db->select('LName,Ledger_Id');
		$this->db->from('ledger');
		$this->db->order_by("Ledger_Id", "desc");
		$query = $this->db->get();
		return $query->result();	
	}

	public function getCategoryData()
	{
		$this->db->select('CategoryID,CategoryName');
		$this->db->from('category');
		$this->db->order_by("CategoryID", "asc");
		$query = $this->db->get();
		return $query->result();	
	}

	public function getbrokerData()
	{
		$this->db->select('LName,Ledger_Id');
		$this->db->from('ledger');
		$this->db->where('AcTypeID','12');
		$this->db->order_by("LName", "asc");
		$query = $this->db->get();
		return $query->result();	
	}
	public function getgreyQualityData()
	{
		$this->db->select('QualityID,GreyQuality');
		$this->db->from('grey_quality');
		$this->db->order_by("QualityID", "desc");
		$query = $this->db->get();
		return $query->result();	
	}
	public function getremarkData()
	{
		$this->db->select('Remark,RemarkID');
		$this->db->from('remark');
		$this->db->order_by("Remark", "asc");
		$query = $this->db->get();
		return $query->result();	
	}
	public function getstateData()
	{
		$this->db->select('stateName,stateID,StateCode');
		$this->db->from('state');
		$this->db->order_by("stateName", "asc");
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
	public function gethasteData()
	{
		$this->db->select('HasteName,HasteID');
		$this->db->from('haste');
		$this->db->order_by("HasteName", "asc");
		$query = $this->db->get();
		return $query->result();	
	}
	public function getstationData()
	{
		$this->db->select('StationName,StationID');
		$this->db->from('station');
		$this->db->order_by("StationName", "asc");
		$query = $this->db->get();
		return $query->result();	
	}
	public function gettransportData()
	{
		$this->db->select('transportName,transportID');
		$this->db->from('transport');
		$this->db->order_by("transportName", "asc");
		$query = $this->db->get();
		return $query->result();	
	}
	public function getscreenbrandData()
	{
		$this->db->select('brandName,screenBrandID');
		$this->db->from('screenbrand');
		$this->db->where('ScreenShow',1);
		$this->db->order_by("brandName", "asc");
		$query = $this->db->get();
		return $query->result();	
	}
	public function getweaverData()
	{
		$this->db->select('ACName,AcID');
		$this->db->from('account_group');
		$this->db->order_by("ACName", "desc");
		$query = $this->db->get();
		return $query->result();	
	}
	public function getcheckerData()
	{
		$this->db->select('LName,Ledger_Id');
		$this->db->from('ledger');
		$this->db->where('AcTypeID','17');
		$this->db->order_by("LName", "asc");
		$query = $this->db->get();
		return $query->result();		
	}
	public function getPartyData()
	{
		$this->db->select('Ledger_Id,Name');
		$this->db->from('ledger');
		$this->db->where('Ac_Type_Id',1);
		$this->db->order_by("Name", "asc");
		$query = $this->db->get();
		return $query->result();	
	}
	public function getPackageData()
	{
		$this->db->select('PackingID,PackingName');
		$this->db->from('package_style');
		$this->db->order_by("PackingName", "asc");
		$query = $this->db->get();
		return $query->result();	
	}
	
	
	
	public function getitemdetailsdata()
	{
		$this->db->select('ItemdetailID,IName');
		$this->db->from('item_detail');
		$this->db->order_by("IName", "asc");
		$query = $this->db->get();
		return $query->result();	
	}
	public function getscreendata1()
	{
		$this->db->select('ScreenRegisterID,ItemDCut');
		$this->db->from('screenregister_entry');
		$this->db->order_by("ItemDCut", "asc");
		$query = $this->db->get();
		return $query->result();	
	}
	public function getscreendata()
	{
		$this->db->select('*');
		$this->db->from('screenbrand');
		$this->db->where('ScreenShow','1');
		$this->db->order_by('screenBrandID','DESC');
		$query = $this->db->get();
		return $query->result();	
	}
	public function getcitydata()
	{
		$this->db->select('cityID,cityName');
		$this->db->from('city');
		$this->db->order_by("cityName", "asc");
		$query = $this->db->get();
		return $query->result();	
	}
	
	public function selectJoinOrderbillData($BillNo)
	{
		$this->db->select('gp.greypurchaseorderBillID,gp.GreyPNetAmt,gq.GreyQuality,gp.GreyPHsnCode,gp.GreyPSrNo,gp.GreyPRecMts,gp.GreyPBillNo,gp.GreyPPurchaseOrderBillDate,gp.GreyPPartyGstin,gp.GreyPPurRate,l.LName,company_manager.CompanyID,company_manager.CompanyName as companyname,company_manager.CompanyGstInUin,company_manager.CompanyPanNo,company_manager.CompanyAddress1 as companyaddress,l.LAddress,company_manager.AddressCompany');
		$this->db->from('greypurchaseorderbill as gp');
		$this->db->join('grey_quality as gq','gq.QualityID=gp.QualityID','Left');
		$this->db->join('ledger as l','l.Ledger_Id=gp.GreyPPartyAcID','Left');
		$this->db->join('company_manager','company_manager.CompanyID=gp.CompanyId','Left');
		$this->db->where('gp.greypurchaseorderBillID',$BillNo);
		$query = $this->db->get();
		//echo $this->db->last_query();
		return $query->row_array();
	}

	public function PrintPerticularTaka($BillNo)
	{
		$this->db->select('gp.greypurchaseorderBillID,gp.GreyPNetAmt,gq.GreyQuality,gp.GreyPHsnCode,gp.GreyPSrNo,gp.GreyPRecMts,gp.GreyPBillNo,gp.GreyPPurchaseOrderBillDate,gp.GreyPPartyGstin,gp.GreyPPurRate,l.LName,company_manager.CompanyID,company_manager.CompanyName as companyname,company_manager.CompanyGstInUin,company_manager.CompanyPanNo,company_manager.CompanyAddress1 as companyaddress,l.LAddress,company_manager.AddressCompany');
		$this->db->from('greypurchaseorderbill as gp');
		$this->db->join('grey_quality as gq','gq.QualityID=gp.QualityID','Left');
		$this->db->join('ledger as l','l.Ledger_Id=gp.GreyPPartyAcID','Left');
		$this->db->join('company_manager','company_manager.CompanyID=gp.CompanyId','Left');
		$this->db->where('gp.greypurchaseorderBillID',$BillNo);
		$query = $this->db->get();
		//echo $this->db->last_query();
		return $query->row_array();
	}

	public function selectJoinSaleOrderData($printSale)
	{
		$this->db->select('cm.Name,cm.PhoneNo,cm.Address,cm.AddressCont,cm.MobileNo,cm.GstInUin,cm.CinNo,cc.cityName as CCityName,l.Name as BuyerName,l.Address as Address1,l.Address_Line_Two as Address2,cp.cityName as PartyCityName,l.Gstin,s.Voucher,s.SaleDate,s.OrderNo,h.Haste,h.GstIn as HasteGSTin,h.Address1 as HAddress1,h.Address2 as HAddress2,l1.Name as BrokerName,l1.Address as BrokerAddress1,l1.Address_Line_Two as BrokerAddress2,l1.Phone_One as Brokerphn1,l1.Phone_Two as Brokerphn2,bci.cityName as BroketCity,s.LrNo,s.LrDate,s.Weight,t.transportName,t.TEway,st.StationName,s.Freight,s.HsnCode,s.EwayBillNo,id.Name as DescriptionData,ps.packing,sl.SalePcs,sl.SaleRate,sl.SaleAmount,l.Bank_Name,l.Bank_Ac_No,l.Ifsc_Code,r.Remark,s.CgstIgst,s.Sgst,s.DeliveryDueDate');
		$this->db->from('saleorder as s');
		$this->db->join('company_manager as cm','cm.CompanyID=s.CompanyId');
		$this->db->join('city as cc','cc.cityID=cm.City');
		$this->db->join('ledger as l','l.Ledger_Id=s.PartyID');
		$this->db->join('city as cp','cp.cityID=cm.City');
		$this->db->join('haste as h','h.HasteID=s.HasteID');
		$this->db->join('ledger as l1','l1.Ledger_Id=s.BrokerID');
		$this->db->join('city as bci','bci.cityID=l1.City_Id');
		$this->db->join('transport as t','t.transportID=s.TransportID');
		$this->db->join('station as st','st.StationID=s.StationID');
		$this->db->join('saleorderlist as sl','sl.SaleOrderID=s.SaleOrderID');
		$this->db->join('item_detail as id','id.ItemdetailID=sl.SaleMainScreen');
		$this->db->join('package_style as ps','ps.PackagestyleID=sl.SalePacking');
		$this->db->join('remark as r','r.RemarkID=s.RemarkID');
		$this->db->where('s.SaleOrderID',$printSale);
		$query = $this->db->get();
		//echo $this->db->last_query(); exit;
		$result['rows']=$query->num_rows();
		$result['data']=$query->result();
		return $result;
	}

	public function update($table,$data,$where)
	{
		$this->db->where($where);
		return $this->db->update($table,$data);
	}
	function last_insert_id($table,$data)
	{
	   $this->db->insert($table, $data);
	   $insert_id = $this->db->insert_id();
	   return  $insert_id;
	}

	/* Sales Order Bill Urvashi Start */
	public function selectSaleOrder()
	{

		$this->db->select('so.Voucher,so.SaleDate,so.BillAmt,so.PaidDate,so.RecSalePcs,so.RecSaleMts,so.OrderNo,l.Name as PartyName,so.SaleOrderID');
		$this->db->from('saleorder as so');
		$this->db->join('ledger as l','l.Ledger_Id=so.PartyID');
		$query = $this->db->get();
		//echo $this->db->last_query(); exit;
		return $query->result();
	}

	public function selectSaleOrderBill()
	{

		$this->db->select('sb.SBBillNO,sb.SBTotalPCS,sb.SBTotalMTSQTY,sb.SBBillAmt,sb.SBTotalAmount,l.Name,cm.ShortName,sb.SBDate,sb.SaleOrderBillID');
		$this->db->from('saleorderbill as sb');
		$this->db->join('ledger as l','l.Ledger_Id=sb.PartyID');
		$this->db->join('company_manager as cm','cm.CompanyID=sb.CompanyId');
		$query = $this->db->get();
		//echo $this->db->last_query(); exit;
		return $query->result();
	}
	public function getSBvoucherNo()
	{
		$this->db->select('SBBillNO,SBVoucherNo');
		$this->db->from('saleorderbill');
		$this->db->order_by("SaleOrderBillID", "desc");
		$this->db->limit(1);  
		$query = $this->db->get();
		$result['rows']=$query->num_rows();
		$result['data']=$query->result();
		return $result;
	}
	public function getUserdata()
	{
		$this->db->select('UserId,UserName');
		$this->db->from('user');
		$this->db->order_by("UserName", "asc");
		$query = $this->db->get();
		return $query->result();	
	}
	public function selectJoinSaleOrderBillData($SaleOrderBillID)
	{
		$this->db->select('cm.Name,cm.PhoneNo,cm.Address,cm.AddressCont,cm.GstInUin,cm.Email,cc.cityName as CmCityName,l.Name as BuyerName,l.Address as Address1,l.Address_Line_Two as Address2,cp.cityName as BuyerCityName,sb.SBBillNO,sb.SBDate,sb.SBGrace,t.transportName,st.StationName,sr.brandName,id.Name as MainScreen,id1.Name as ScreenName,sl.SBPcs,sl.SBRate,sl.SBAmount,ps.packing,r.Remark,l.Gstin');
		$this->db->from('saleorderbill as sb');
		$this->db->join('company_manager as cm','cm.CompanyID=sb.CompanyId');
		$this->db->join('city as cc','cc.cityID=cm.City');
		$this->db->join('ledger as l','l.Ledger_Id=sb.PartyID');
		$this->db->join('city as cp','cp.cityID=l.City_Id');
		$this->db->join('transport as t','t.transportID=sb.transportID');
		$this->db->join('station as st','st.StationID=sb.StationID');
		$this->db->join('screenbrand as sr','sr.screenBrandID=sb.ScreenRegisterID');
		$this->db->join('saleorderbilllist as sl','sl.SaleOrderBillID=sb.SaleOrderBillID');
		$this->db->join('item_detail as id','id.ItemdetailID=sl.SBItemName');
		$this->db->join('item_detail as id1','id1.ItemdetailID=sl.SBMainScreen');
		$this->db->join('package_style as ps','ps.PackagestyleID=sl.SBPacking');
		$this->db->join('remark as r','r.RemarkID=sb.remark');
		$this->db->where('sb.SaleOrderBillID',$SaleOrderBillID);
		$query = $this->db->get();
		//echo $this->db->last_query(); exit;
		$result['rows']=$query->num_rows();
		$result['data']=$query->result();
		return $result;
	}

	function SaveTakaDetailsData($data,$count,$TakaCardNo){
		//get bill entries 
		
		for($i = 0; $i<$count; $i++){
			$entries[] = array(
			// 'TakaQuality'=>($data['TakaQuality'][$i]) ? $data['TakaQuality'][$i] : '',
			// 'TakaAvgwt'=>($data['TakaAvgwt'][$i]) ? $data['TakaAvgwt'][$i] : '',
			// 'TakaWeaver'=>($data['TakaWeaver'][$i]) ? $data['TakaWeaver'][$i] : '',
			// 'TakaChallan'=>($data['TakaChallan'][$i]) ? $data['TakaChallan'][$i] : '',
			// 'TakaCompany'=>($data['TakaCompany'][$i]) ? $data['TakaCompany'][$i] : '',
			// 'TakaGroup'=>($data['TakaGroup'][$i]) ? $data['TakaGroup'][$i] : '',
			// 'TakaBillNo'=>($data['TakaBillNo'][$i]) ? $data['TakaBillNo'][$i] : '',
			// 'TakaDate'=>($data['TakaDate'][$i]) ? $data['TakaDate'][$i] : '',
			// 'TakaCardNo'=>($data['TakaCardNo'][$i]) ? $data['TakaCardNo'][$i] : '',
			// 'TakaVarialtionLess'=>($data['TakaVarialtionLess'][$i]) ? $data['TakaVarialtionLess'][$i] : '',
			
			'TakaCardNo'=>$TakaCardNo,
			'TakaFormMfsc'=>($data['TakaFormMfsc'][$i]) ? $data['TakaFormMfsc'][$i] : '',
			'TakaActWt'=>($data['TakaActWt'][$i]) ? $data['TakaActWt'][$i] : '',
			'TakaSrNo'=>($data['TakaSrNo'][$i]) ? $data['TakaSrNo'][$i] : '',
			'TakaMfgMts'=>($data['TakaMfgMts'][$i]) ? $data['TakaMfgMts'][$i] : '',
			'TakaSarees'=>($data['TakaSarees'][$i]) ? $data['TakaSarees'][$i] : '',
			'TakaActCut'=>($data['TakaActCut'][$i]) ? $data['TakaActCut'][$i] : '',
			'TakaIdealWt'=>($data['TakaIdealWt'][$i]) ? $data['TakaIdealWt'][$i] : '',
			'TakaWtLs'=>($data['TakaWtLs'][$i]) ? $data['TakaWtLs'][$i] : '',
			'TakaDesign'=>($data['TakaDesign'][$i]) ? $data['TakaDesign'][$i] : '',
			'TakaRemark'=>($data['TakaRemark'][$i]) ? $data['TakaRemark'][$i] : '',
			'CreatedDate'=>date('Y-m-d')
		);
		}

		$this->db->insert_batch('greyptakadetails', $entries); 
		if($this->db->affected_rows() > 0)
		return 1;
		else
		return 0;
		}

		function grey_purchase_order_bill_save($data,$count,$Grey_Bill_Id){
		//get bill entries 
		
		for($i = 0; $i<$count; $i++){
			$entries[] = array(
		
			'Grey_Purchase_Order_Bill_Id'=>$Grey_Bill_Id,
			'CHR'=>($data['chr']) ? $data['chr'][$i] : '',
			'Desp_No'=>($data['despno']) ? $data['despno'][$i] : '',
			'Mill'=>($data['mill']) ? $data['mill'][$i] : '',
			'Card_No'=>($data['cardno']) ? $data['cardno'][$i] : '',
			'Desp_Date'=>($data['despdate']) ? $data['despdate'][$i] : '',
			'Taka'=>($data['taka']) ? $data['taka'][$i] : '',
			'MTS'=>($data['mts']) ? $data['mts'][$i] : '',
			'Rate'=>($data['rate']) ? $data['rate'][$i] : '',
			'Weight_LS'=>($data['wtls']) ? $data['wtls'][$i] : '',
			'Marka'=>($data['marka']) ? $data['marka'][$i] : '',
			'Lot_No'=>($data['lotno']) ? $data['lotno'][$i] : '',
			'Remark'=>($data['remark']) ? $data['remark'][$i] : '',
			'Vehicle_No'=>($data['vehicleno']) ? $data['vehicleno'][$i] : '',
			'E_Way_Bill_No'=>($data['ewaybill']) ? $data['ewaybill'][$i] : '',
			'Process'=>($data['process']) ? $data['process'][$i] : '',
			'Master'=>($data['master']) ? $data['master'][$i] : '',

		);
		}

		$this->db->insert_batch('grey_purchase_order_bill_details', $entries); 
		if($this->db->affected_rows() > 0)
		return 1;
		else
		return 0;
		}

	
}

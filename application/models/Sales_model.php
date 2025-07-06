<?php
class Sales_model extends CI_Model {
	function __construct()
    {
        parent::__construct();
    }

 	public function salesorderdata()
	{
		$this->db->select('finish_purchase.Finish_Purchase_Id,finish_purchase.Comapny_Id,finish_purchase.Type,finish_purchase.Voucher,finish_purchase.Ord_Ref,finish_purchase.Lr_No_Awb,finish_purchase.Party_Id,finish_purchase.State_Id,finish_purchase.Bill_No,company_manager.CompanyID,company_manager.CompanyName as companyname,ledger.Ledger_Id,ledger.LName as ledgername');
		$this->db->from('finish_purchase');
		$this->db->join('company_manager','company_manager.CompanyID=finish_purchase.Comapny_Id','Left');
		$this->db->join('ledger','ledger.Ledger_Id=finish_purchase.Party_Id','Left');
		$this->db->where('finish_purchase.Type','Sales Order');
		$query = $this->db->get();
		//echo $this->db->last_query(); exit;
		return $query->result();
	}

	public function printsalesorder($printFinishPurchaseOrderId)
	{

		$this->db->select('finish_purchase.Finish_Purchase_Id,finish_purchase.Igst,finish_purchase.Igst_Amt,finish_purchase.Comapny_Id,finish_purchase.Type,finish_purchase.Voucher,finish_purchase.Ord_Ref,finish_purchase.Lr_No_Awb,finish_purchase.Party_Id,finish_purchase.State_Id,finish_purchase.Bill_No,company_manager.CompanyID,company_manager.CompanyName as companyname,company_manager.AddressCompany,company_manager.CompanyPanNo,company_manager.CompanyCinNo,company_manager.CompanyGstInUin,ledger.Ledger_Id,ledger.LName as ledgername,ledger.LAddress as ledgeraddress,ledger.LAddressLine2,ledger.LGstin as partygstin,ledger.LPanNo,ledger.LDistance,transport.TransportID,transport.TransportName,finish_purchase.Transport_Id,finish_purchase.Finish_Date,finish_purchase.Gst_Type_Id,finish_purchase.Haste_Id,finish_purchase.Brocker_Id,finish_purchase.Dhara,finish_purchase.Grace,finish_purchase.Station_Id,finish_purchase.Screen_Series,finish_purchase.Party_Gstin,finish_purchase.Obtain_By,finish_purchase.Remark_Id,finish_purchase.Only_X,finish_purchase.E_Way_Bill_No,finish_purchase.Net_Amt,finish_purchase.Lr_No,finish_purchase.Lr_Date,finish_purchase.Lr_Rec_Date,finish_purchase.Weight,finish_purchase.Height,finish_purchase.Cgst,finish_purchase.Cgst_Amt,finish_purchase.Taxable_Value,finish_purchase.Bill_Amt,finish_purchase.Net_After_Tds,finish_purchase.Paid_Date,finish_purchase.Discount,finish_purchase.Pack_Folt,finish_purchase.Rd,finish_purchase.Sweets,finish_purchase.Oth_Bc,finish_purchase.Add_Amt,finish_purchase.Tds_Amt,finish_purchase.Gr,finish_purchase.Rec_Sale_Vno,finish_purchase.Paid_Amt,finish_purchase.Rec_Sale_Pcs,finish_purchase.Rec_Sale_Mts,finish_purchase.Sgst,finish_purchase.Sgst_Amt,finish_purchase.Case_No,finish_purchase.Amount_Less,finish_purchase.Discount_Less2,station.StationID,station.StationName,screenregister_entry.ScreenRegisterID,screenregister_entry.ItemDCut,remark.RemarkID,remark.Remark,state.StateName,state.StateCode,haste.HasteGstIn');
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
		$this->db->where('finish_purchase.Finish_Purchase_Id',$printFinishPurchaseOrderId);
		// $this->db->select('*');
		// $this->db->from('finish_purchase');
		// $this->db->where('Finish_Purchase_Id',$finishpurchaseorderid);
		$query = $this->db->get();
		//echo $this->db->last_query(); exit;
		return $query->row_array();
	}

	public function editsalesorderdata($finishpurchaseorderid)
	{
		$this->db->where('finish_purchase.Finish_Purchase_Id',$finishpurchaseorderid);
		$this->db->select('*');
		$this->db->from('finish_purchase');
		$this->db->where('Finish_Purchase_Id',$finishpurchaseorderid);
		$query = $this->db->get();
		//echo $this->db->last_query(); exit;
		return $query->row_array();
	}

	public function findbilldatabyvoucharno($voucharno)
	{
		$this->db->select('finish_purchase.Finish_Purchase_Id,finish_purchase.Freight_Discount,finish_purchase.Comapny_Id,finish_purchase.Type,finish_purchase.Voucher,finish_purchase.Ord_Ref,finish_purchase.Lr_No_Awb,finish_purchase.Party_Id,finish_purchase.State_Id,finish_purchase.Bill_No,company_manager.CompanyID,company_manager.CompanyName as companyname,company_manager.AddressCompany,company_manager.CompanyPanNo,company_manager.CompanyCinNo,company_manager.CompanyGstInUin,ledger.Ledger_Id,ledger.LName as ledgername,ledger.LAddress as ledgeraddress,ledger.LAddressLine2,ledger.LGstin as partygstin,ledger.LPanNo,ledger.LDistance,transport.TransportID,transport.TransportName,finish_purchase.Transport_Id,finish_purchase.Finish_Date,finish_purchase.Gst_Type_Id,finish_purchase.Haste_Id,finish_purchase.Brocker_Id,finish_purchase.Dhara,finish_purchase.Grace,finish_purchase.Station_Id,finish_purchase.Screen_Series,finish_purchase.Party_Gstin,finish_purchase.Obtain_By,finish_purchase.Remark_Id,finish_purchase.Only_X,finish_purchase.E_Way_Bill_No,finish_purchase.Net_Amt,finish_purchase.Lr_No,finish_purchase.Lr_Date,finish_purchase.Lr_Rec_Date,finish_purchase.Weight,finish_purchase.Height,finish_purchase.Cgst,finish_purchase.Cgst_Amt,finish_purchase.Taxable_Value,finish_purchase.Bill_Amt,finish_purchase.Net_After_Tds,finish_purchase.Paid_Date,finish_purchase.Discount,finish_purchase.Pack_Folt,finish_purchase.Rd,finish_purchase.Sweets,finish_purchase.Oth_Bc,finish_purchase.Add_Amt,finish_purchase.Tds_Amt,finish_purchase.Gr,finish_purchase.Rec_Sale_Vno,finish_purchase.Paid_Amt,finish_purchase.Rec_Sale_Pcs,finish_purchase.Rec_Sale_Mts,finish_purchase.Sgst,finish_purchase.Sgst_Amt,finish_purchase.Case_No,finish_purchase.Amount_Less,finish_purchase.Discount_Less2,station.StationID,station.StationName,screenregister_entry.ScreenRegisterID,screenregister_entry.ItemDCut,remark.RemarkID,remark.Remark,state.StateName,state.StateCode,haste.HasteGstIn,finish_purchase.Total_Pcs,finish_purchase.Total_Mts,finish_purchase.Grand_Total,finish_purchase.Remark1,finish_purchase.Grand_Total1,finish_purchase.Discount_Less1,finish_purchase.Remark2,finish_purchase.Grand_Total2,finish_purchase.Amount_Less2,finish_purchase.Haste_Gstin');
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
		$this->db->where('finish_purchase.Voucher',$voucharno);
		$this->db->where('finish_purchase.Type',"Sales Order");
		// $this->db->select('*');
		// $this->db->from('finish_purchase');
		// $this->db->where('Finish_Purchase_Id',$finishpurchaseorderid);
		$query = $this->db->get();
		return $query->row_array();
	}

	public function findsalesmiddlecontent($voucharno)
	{
		$this->db->select('*');
		$this->db->from('finish_purchase');
		$this->db->where('Voucher',$voucharno);
		$this->db->where('Type',"Sales Order");
		$query = $this->db->get();
		return $query->row_array();
	}

	public function salesorderbilldata()
	{
		$this->db->select('finish_purchase.Finish_Purchase_Id,finish_purchase.Comapny_Id,finish_purchase.Type,finish_purchase.Voucher,finish_purchase.Ord_Ref,finish_purchase.Lr_No_Awb,finish_purchase.Party_Id,finish_purchase.State_Id,finish_purchase.Bill_No,company_manager.CompanyID,company_manager.CompanyName as companyname,ledger.Ledger_Id,ledger.LName as ledgername');
		$this->db->from('finish_purchase');
		$this->db->join('company_manager','company_manager.CompanyID=finish_purchase.Comapny_Id','Left');
		$this->db->join('ledger','ledger.Ledger_Id=finish_purchase.Party_Id','Left');
		$this->db->where('finish_purchase.Type','Sales Order Bill');
		$query = $this->db->get();
		//echo $this->db->last_query(); exit;
		return $query->result();
	}
}
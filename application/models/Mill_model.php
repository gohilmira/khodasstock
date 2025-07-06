<?php

class Mill_model extends CI_Model
{
   function __construct()
	{
		parent::__construct();
		
	}
	
	function GetMillData()
	{
	  	$this->db->select('CompanyName,MillDespatchID,MillType,MillChalNo,MillDespTaka,MillDespMts,MillDespDate');
		$this->db->from('mill_despatch_entry');
		$this->db->join('company_manager', 'company_manager.CompanyID = mill_despatch_entry.CompanyID');
		$query = $this->db->get();
		return $query->result();
	}
	function GetMillEditData($MillDespatchID)
	{
	  	$this->db->select('*');
		$this->db->from('mill_despatch_entry');
		$this->db->join('mill_despatch_entry_details', 'mill_despatch_entry_details.MillDespatchID = mill_despatch_entry.MillDespatchID');
		$this->db->where('mill_despatch_entry_details.MillDespatchID',$MillDespatchID);
		$query = $this->db->get();
		return $query->row_array();
	}
}
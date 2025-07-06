<?php

class Accountgroup_model extends CI_Model
{
   function __construct()
	{
		parent::__construct();
		 $this->load->database();
		
	}
	public function GetAccountGroupData()
	{
		$this->db->select('AcID,ACShortName,ACName,ACType');
		$this->db->from('account_group');
		$this->db->join('acc_type', 'acc_type.AcTypeID = account_group.ACTypeID');
		$query = $this->db->get();
		return $query->result();
	}
}
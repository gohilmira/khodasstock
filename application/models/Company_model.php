<?php

class Company_model extends CI_Model
{
   function __construct()
	{
		parent::__construct();
		
	}
	public function getselect_City()
	{
		$this->db->select('*');
		$this->db->where('isActive',1);
		$this->db->order_by("cityName", "asc");
		$query = $this->db->get('city');
		$result['data']=$query->result();
		return $result;
	}

	public function select($table)
	{
		$this->db->select('*');
		$this->db->from($table);
		$query = $this->db->get();
		return $query->result();
	}

	public function select_array($table)
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
		return $query->row_array();
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
	
}
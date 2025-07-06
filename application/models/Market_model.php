<?php

class Market_model extends CI_Model
{
   function __construct()
	{
		parent::__construct();
		
	}
	public function getallmarket()
	{
		$this->db->select('*');
		$query = $this->db->get('market');
		$result['rows'] = $query->num_rows();
		$result['data']=$query->result();
		return $result;		
	}

	public function getsingle_market()
	{
		$marketID=$this->input->post('marketID');
		$this->db->where('marketID',$marketID);
		$query=$this->db->get('market');
		$result['data']=$query->result();
		return $result;
	}
	public function addeditmarket()
	{
		//print_r($this->input->post('marketID'));exit;
		date_default_timezone_set("Asia/Kolkata");
		$createdate = date('Y-m-d',strtotime('NOW'));
		$updatedate = date('Y-m-d',strtotime('NOW'));
		$data = array(
					'marketName' => $this->input->post('marketName'),
					'isActive' => $this->input->post('isActive'),
					'createDate' =>$createdate

				);

		$dataupdate = array(
			'marketName' => $this->input->post('marketName'),
			'isActive' => $this->input->post('isActive'),
			'updateDate' =>$updatedate
			);
		if ($this->input->post('marketID') != NULL && $this->input->post('marketID') > 0) 
		{
			
			$query = $this->db->update('market', $dataupdate, array('marketID'=>$this->input->post('marketID')));
			$result=$this->input->post('marketID');
			//print_r($query);exit;
		}
		else
		{	
			
			$query = $this->db->insert('market', $data);
		}
		return $result;
	}

	function singledelete($table,$marketID)
	{
		$data=array('marketID'=>$marketID);
		$result=$this->db->delete($table, $data);
	}

	function multipleDelete()
	{
		if($this->input->post('checkUncheck'))
		{
			foreach($this->input->post('checkUncheck') as $marketID)
			{
				$data=array('marketID'=>$marketID);
				//print_r($data);exit;
				$result=$this->db->delete('market', $data);
			}
		}
	}

	function singleStatus($marketID)
	{
		$this->db->where('marketID',$marketID);
		$query=$this->db->get('market');
		$result=$query->result();
		$isActive = $result[0]->isActive;
		//print_r($isActive);exit;
		if($isActive == 1)
		{
			$isActive=0;
		}
		else
		{
			$isActive=1;
		}
		echo $isActive;
		$data = array('isActive'=>$isActive);
		$result=$this->db->update('market', $data, array('marketID'=>$marketID));
	}


}
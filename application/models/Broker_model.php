<?php

class Broker_model extends CI_Model
{
   function __construct()
	{
		parent::__construct();
		
	}
	public function getallbroker()
	{
		$this->db->select('*');
		$query = $this->db->get('broker');
		$result['rows'] = $query->num_rows();
		$result['data']=$query->result();
		return $result;		
	}
	public function getsingle_broker()
	{
		$brokerID=$this->input->post('brokerID');
		$this->db->where('brokerID',$brokerID);
		$query=$this->db->get('broker');
		$result['data']=$query->result();
		return $result;
	}
	public function addeditbroker()
	{
		//print_r($this->input->post('marketID'));exit;
		date_default_timezone_set("Asia/Kolkata");
		$createdate = date('Y-m-d',strtotime('NOW'));
		$updatedate = date('Y-m-d',strtotime('NOW'));
		$data = array(
					'brokerName' => $this->input->post('brokerName'),
					'brokerAddress' => $this->input->post('brokerAddress'),
					'brokerContact' => $this->input->post('brokerContact'),
					'isActive' => $this->input->post('isActive'),
					'createDate' =>$createdate
				);

		$dataupdate = array(
					'brokerName' => $this->input->post('brokerName'),
					'brokerAddress' => $this->input->post('brokerAddress'),
					'brokerContact' => $this->input->post('brokerContact'),
					'isActive' => $this->input->post('isActive'),
					'updateDate' =>$updatedate
			);
		if ($this->input->post('brokerID') != NULL && $this->input->post('brokerID') > 0) 
		{
			
			$query = $this->db->update('broker', $dataupdate, array('brokerID'=>$this->input->post('brokerID')));
			$result=$this->input->post('brokerID');
			//print_r($query);exit;
		}
		else
		{	
			
			$query = $this->db->insert('broker', $data);
		}
		return $result;
	}
	function singledelete($table,$brokerID)
	{
		$data=array('brokerID'=>$brokerID);
		$result=$this->db->delete($table, $data);
	}
	function multipleDelete()
	{
		if($this->input->post('checkUncheck'))
		{
			foreach($this->input->post('checkUncheck') as $brokerID)
			{
				$data=array('brokerID'=>$brokerID);
				//print_r($data);exit;
				$result=$this->db->delete('broker', $data);
			}
		}
	}
	function singleStatus($brokerID)
	{
		$this->db->where('brokerID',$brokerID);
		$query=$this->db->get('broker');
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
		$result=$this->db->update('broker', $data, array('brokerID'=>$brokerID));
	}
	
	
	
	
	
}
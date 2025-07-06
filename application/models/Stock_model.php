<?php
class Stock_model extends CI_Model {
	function __construct()
    {
        parent::__construct();
    }

    public function add_stock_details($lastid,$data,$count)
    {
    	for($i = 0; $i<$count; $i++){
			$entries[] = array(			
			'Item_Id'=>$lastid,
			'Size_Number_Id'=>($data['sizenumber'][$i]) ? $data['sizenumber'][$i] : '',
			'Size_Character_Id'=>($data['sizecharacter'][$i]) ? $data['sizecharacter'][$i] : '',
            'Color_Id'=>($data['color'][$i]) ? $data['color'][$i] : '',
			'Stock'=>($data['stock'][$i]) ? $data['stock'][$i] : ''
		);
		}

		$this->db->insert_batch('stock_details', $entries); 
		if($this->db->affected_rows() > 0)
		return 1;
		else
		return 0;
    }

    public function addpurchasestock($lastid,$data,$count,$vno)
    {
        $lastid = $lastid;
        for($i = 0; $i<$count; $i++){

            $entries[] = array(
                'Vouchar_No'=>$vno,
                'Item_Id'=>$lastid,
                'Size_Number_Id'=>($data['sizenumber'.$lastid][$i]) ? $data['sizenumber'.$lastid][$i] : '',
                'Size_Character_Id'=>($data['sizecharacter'.$lastid][$i]) ? $data['sizecharacter'.$lastid][$i] : '',
                'Color_Id'=>($data['color'.$lastid][$i]) ? $data['color'.$lastid][$i] : '',
                'Stock'=>($data['stock'.$lastid][$i]) ? $data['stock'.$lastid][$i] : '',
                'Purchase_Stock'=>($data['purchasestock'.$lastid][$i]) ? $data['purchasestock'.$lastid][$i] : ''
            );

            $remainingstock = (($data['stock'.$lastid][$i]) - ($data['purchasestock'.$lastid][$i]));

            $array = array(
                'Stock'=>$remainingstock
            );

            $sizenumber = $data['sizenumber'.$lastid][$i];
            $sizecharacter = $data['sizecharacter'.$lastid][$i];
            $color = $data['color'.$lastid][$i];

            $this->Home_model->update('stock_details',$array,array('Item_Id'=>$lastid,'Size_Number_Id'=>$data['sizenumber'.$lastid][$i],'Size_Character_Id'=>$data['sizecharacter'.$lastid][$i],'Color_Id'=>$data['color'.$lastid][$i]));
        }

            $this->db->insert_batch('stock_maintain',$entries);
            if($this->db->affected_rows() > 0)
                return 1;
            else
                return 0;
    }

    public function addpurchasestockedit($lastid,$data,$count,$vno)
    {
        $lastid = $lastid;
        for($i = 0; $i<$count; $i++){

            $entries[] = array(
                'Vouchar_No'=>$vno,
                'Item_Id'=>$lastid,
                'Size_Number_Id'=>($data['sizenumber'.$lastid][$i]) ? $data['sizenumber'.$lastid][$i] : '',
                'Size_Character_Id'=>($data['sizecharacter'.$lastid][$i]) ? $data['sizecharacter'.$lastid][$i] : '',
                'Color_Id'=>($data['color'.$lastid][$i]) ? $data['color'.$lastid][$i] : '',
                'Stock'=>($data['stock'.$lastid][$i]) ? $data['stock'.$lastid][$i] : '',
                'Purchase_Stock'=>($data['purchasestock'.$lastid][$i]) ? $data['purchasestock'.$lastid][$i] : ''
            );

            $sizenumber = $data['sizenumber'.$lastid][$i];
            $sizecharacter = $data['sizecharacter'.$lastid][$i];
            $color = $data['color'.$lastid][$i];
            $stock = $data['stock'.$lastid][$i];
            $purchasestock = $data['purchasestock'.$lastid][$i];


            $check = $this->db->query("SELECT * from stock_maintain where Item_Id = '$lastid' AND Size_Number_Id = '$sizenumber' AND Size_Character_Id ='$sizecharacter' AND Color_Id = '$color'")->row_array();
            $dbpstock = $check['Purchase_Stock'];

            if($dbpstock == $purchasestock)
            {

            }
            else
            {
                if($purchasestock > $dbpstock)
                {
                    $colstock  = $purchasestock - $dbpstock;

                    $remainingstock = (($stock) - ($colstock));

                    //$remainingstock = (($stock) - ($purchasestock));

                    $array = array(
                        'Stock'=>$remainingstock
                    );

                    $this->Home_model->update('stock_details',$array,array('Item_Id'=>$lastid,'Size_Number_Id'=>$data['sizenumber'.$lastid][$i],'Size_Character_Id'=>$data['sizecharacter'.$lastid][$i],'Color_Id'=>$data['color'.$lastid][$i]));
                }
                else
                {
                    $colstock  = $dbpstock - $purchasestock;
                    $remainingstock = (($stock) - ($colstock));

                    //$remainingstock = (($stock) - ($purchasestock));

                    $array = array(
                        'Stock'=>$remainingstock
                    );

                    $this->Home_model->update('stock_details',$array,array('Item_Id'=>$lastid,'Size_Number_Id'=>$data['sizenumber'.$lastid][$i],'Size_Character_Id'=>$data['sizecharacter'.$lastid][$i],'Color_Id'=>$data['color'.$lastid][$i]));
                }
            }
        }

        $this->db->insert_batch('stock_maintain',$entries);
        if($this->db->affected_rows() > 0)
            return 1;
        else
            return 0;
    }
}
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Color_controller extends CI_Controller {

    function __construct()
    {
        parent::__construct();
    }
    public function index()
    {
        if(isset($_REQUEST['Color_Id']))
        {
            $response['editcolordata']=$this->Home_model->select_where_row('color',array('Color_Id'=>$_REQUEST['Color_Id']));
        }
        else
        {
            $response['editcolordata']="";
        }

        $response['colordata']=$this->Home_model->select('color');

        $this->load->view('stock/color/color',$response);
    }
    public function addcolorform()
    {

        $data = array(
            'Color_Name'=>($this->input->post('color')) ? $this->input->post('color') : ''
        );
        if($this->input->post('Color_Id') != "")
        {
            $record = array_merge($data, array('Updated_Date'=>date('Y-m-d H:i:s',strtotime('NOW'))));
            $result=$this->Home_model->update('color',$record,array('Color_Id'=>$this->input->post('Color_Id')));
            print_r($result);
        }
        else
        {
            $record = array_merge($data, array('Created_Date'=>date('Y-m-d H:i:s',strtotime('NOW'))));
            $result = $this->Home_model->insert('color', $record);
            print_r($result);
        }
    }

    public function getcolordata()
    {
        $getcolordata = $this->Home_model->select('color');
        if(sizeof($getcolordata) > 0)
        {
            echo '<option value="">--Select Color--</option>';
            foreach ($getcolordata as $valgetcolordata)
            {
                echo '<option value="'.$valgetcolordata->Color_Id.'">'.$valgetcolordata->Color_Name.'</option>';
            }
        }
        else
        {
            echo '<option value="">Record Not Available</option>';
        }
    }
}
?>
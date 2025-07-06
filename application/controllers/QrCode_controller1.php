<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class QrCode_controller extends CI_Controller {

	function __construct()
	{
        parent::__construct();
        $this->load->helper('new');
        $this->load->model('Home_model');
    }
	public function index()
	{
		$response['GetCategoryData']=$this->Home_model->select('qr_detail');	
		$this->load->view('qrcode/qrcode',$response);
	}
    function _code($nim)
    {

	    $this->load->library('ciqrcode'); //pemanggilan library QR CODE

        $config['cacheable']    = true; //boolean, the default is true
        $config['cachedir']     = './assets/'; //string, the default is application/cache/
        $config['errorlog']     = './assets/'; //string, the default is application/logs/
        $config['imagedir']     = './assets/images/'; //direktori penyimpanan qr code
        $config['quality']      = true; //boolean, the default is true
        $config['size']         = '1024'; //interger, the default is 1024
        $config['black']        = array(224,255,255); // array, default is array(255,255,255)
        $config['white']        = array(70,130,180); // array, default is array(0,0,0)
        $this->ciqrcode->initialize($config);
 
        $image_name=$nim.'.png'; //buat name dari qr code sesuai dengan nim
 
        $params['data'] = $nim; //data yang akan di jadikan QR CODE
        $params['level'] = 'H'; //H=High
        $params['size'] = 10;
        $params['savename'] = FCPATH.$config['imagedir'].$image_name; //simpan image QR CODE ke folder assets/images/
        $this->ciqrcode->generate($params); // fungsi untuk generate QR CODE
	}


	public function addqrdetail()
        {
                
           
        $code=$this->input->post('QRCode');              
                                $img = $code.'.png';
                                $qrcode = $this->_code($code);
                $data = array(
                
                'QRCode'=>$code,
                'QRImage'=>$img,
        
                // 'CreateDate'=>date('Y-m-d')
                );
                                if($this->input->post('qr_id') != "")
                            {
                                  $result=$this->Home_model->update('qr_detail',$data,array('qr_id'=>$this->input->post('qr_id')));
                                }
                            else{
                                $lastid=$this->Home_model->last_insert_id('qr_detail',$data);
                                }
                                redirect('QrCode_controller/index');
                                //print_r($lastid);
                        
        }


	public function edit()
        {
                $qr_id =$this->uri->segment(3);
                        $response['editactypedetails']=$this->Home_model->select_where_row('qr_detail',array('qr_id'=>$qr_id));
                        $response['GetCategoryData']=$this->Home_model->select('qr_detail');
                $this->load->view('qrcode/edit_qrcode',$response);
        }
        public function editqr()
        { 
                $qr_id=$this->input->post('qr_id');
                $code=$this->input->post('QrCode');
        
                 $img = $code.'.png';
                 $qrcode = $this->_code($code);
                 $data = array(
                         'QRCode'=>$code,
                         'QRImage'=>$img,
                         // 'CreateDate'=>date('Y-m-d')
                );
                $result=$this->Home_model->update('qr_detail',$data,array('qr_id'=>$this->input->post('qr_id')));
           
                redirect('QrCode_controller/index');                        
    }                        
        public function qrdelete()
        {
                $qr_id =$this->uri->segment(3);
                $delete = $this->Home_model->deletedata('qr_detail',array('qr_id'=>$qr_id));
                redirect('QrCode_controller/index');
        }
				
	
}
?>
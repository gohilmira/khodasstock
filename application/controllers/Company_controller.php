<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Company_controller extends CI_Controller {

	function __construct()
	{
        parent::__construct();
		$this->load->model('Home_model');
    }
	public function index()
	{
		if(isset($_REQUEST['compid']))
		{
			
			$response['editcompanydata']=$this->Home_model->select_where_row('company_manager',array('CompanyID'=>$_REQUEST['compid']));
		}
		else
		{
			$response['editcompanydata']="";
		}
		$response['GetCompanyDetail'] = $this->Home_model->GetCompanyDetail();
		$response['companyname'] = $this->Home_model->companyname();
		$response['getCityData'] = $this->Home_model->getCityData();
		$this->load->view('company/company',$response);
	}

	public function savecomapny()
	{
		if($this->input->post('CompanyGoup'))
		{
			$CompanyGoup = "";
		}
		else
		{
			$CompanyGoup = implode(',', $this->input->post('CompanyGoup'));
		}

		$data = array(
			'CompanyCode'=>($this->input->post('CompanyCode')) ? $this->input->post('CompanyCode') : '',
			'CompanyShortName'=>($this->input->post('CompanyShortName')) ? $this->input->post('CompanyShortName') : '',
			'CompanyName'=>($this->input->post('CompanyName')) ? $this->input->post('CompanyName') : '',
			'CompanyType'=>($this->input->post('CompanyType')) ? $this->input->post('CompanyType') : '',
			'CompanyGoup'=>$CompanyGoup,
			'AddressCompany'=>($this->input->post('AddressCompany')) ? $this->input->post('AddressCompany') : '',
			'CompanyAddressCont'=>($this->input->post('CompanyAddressCont')) ? $this->input->post('CompanyAddressCont') : '',
			'CompanyCityID'=>($this->input->post('CompanyCityID')) ? $this->input->post('CompanyCityID') : '',
			'CompanyPin'=>($this->input->post('CompanyPin')) ? $this->input->post('CompanyPin') : '',
			'CompanyEmail'=>($this->input->post('CompanyEmail')) ? $this->input->post('CompanyEmail') : '',
			'CompanyMobileNo'=>($this->input->post('CompanyMobileNo')) ? $this->input->post('CompanyMobileNo') : '',
			'CompanyFax'=>($this->input->post('CompanyFax')) ? $this->input->post('CompanyFax') : '',
			'CompanyPhoneNo'=>($this->input->post('CompanyPhoneNo')) ? $this->input->post('CompanyPhoneNo') : '',
			'CompanyPhoneNo2'=>($this->input->post('CompanyPhoneNo2')) ? $this->input->post('CompanyPhoneNo2') : '',
			'CompanyPhoneNo3'=>($this->input->post('CompanyPhoneNo3')) ? $this->input->post('CompanyPhoneNo3') : '',
			'CompanyAddress1'=>($this->input->post('CompanyAddress1')) ? $this->input->post('CompanyAddress1') : '',
			'CompanyAddressCont1'=>($this->input->post('CompanyAddressCont1')) ? $this->input->post('CompanyAddressCont1') : '',
			'CompanyBusinessDesc'=>($this->input->post('CompanyBusinessDesc')) ? $this->input->post('CompanyBusinessDesc') : '',
			'CompanyProprietor'=>($this->input->post('CompanyProprietor')) ? $this->input->post('CompanyProprietor') : '',
			'CompanyMultiChal'=>($this->input->post('CompanyMultiChal')) ? $this->input->post('CompanyMultiChal') : '',
			'CompanySelected'=>($this->input->post('CompanySelected')) ? $this->input->post('CompanySelected') : '',
			'CompanyJvFormDate'=>($this->input->post('CompanyJvFormDate')) ? $this->input->post('CompanyJvFormDate') : '',
			'CompanyPanNo'=>($this->input->post('CompanyPanNo'))? $this->input->post('CompanyPanNo') : '',
			'CompanyTdsacNo'=>($this->input->post('CompanyTdsacNo')) ? $this->input->post('CompanyTdsacNo') : '',
			'CompanyWard'=>($this->input->post('CompanyWard')) ? $this->input->post('CompanyWard') : '',
			'CompanyEccNo'=>($this->input->post('CompanyEccNo')) ? $this->input->post('CompanyEccNo') : '',
			'CompanyRange'=>($this->input->post('CompanyRange')) ? $this->input->post('CompanyRange') : '',
			'CompanyDivision'=>($this->input->post('CompanyDivision')) ? $this->input->post('CompanyDivision') : '',
			'CompanyCollectrate'=>($this->input->post('CompanyCollectrate')) ? $this->input->post('CompanyCollectrate') : '',
			'CompanyPolicyNo'=>($this->input->post('CompanyPolicyNo')) ? $this->input->post('CompanyPolicyNo') : '',
			'CompanyDate'=>($this->input->post('CompanyDate')) ? $this->input->post('CompanyDate') : '',
			'CompanyGstNoVat'=>($this->input->post('CompanyGstNoVat')) ? $this->input->post('CompanyGstNoVat') : '',
			'CompanyDt'=>($this->input->post('CompanyDt')) ? $this->input->post('CompanyDt') : '',
			'CompanyCinNo'=>($this->input->post('CompanyCinNo')) ? $this->input->post('CompanyCinNo') : '',
			'CompanyGstInUin'=>($this->input->post('CompanyGstInUin')) ? $this->input->post('CompanyGstInUin') : '',
			'CompanyCenregNo'=>($this->input->post('CompanyCenregNo')) ? $this->input->post('CompanyCenregNo') : '',
			'CompanyInsurancePolicy'=>($this->input->post('CompanyInsurancePolicy')) ? $this->input->post('CompanyInsurancePolicy') : '',
			'CreateDate'=>date('Y-m-d')
		);
			
			$result=$this->Home_model->insert('company_manager',$data);
			print_r($result);
	}

	public function editsavecomapny()
	{
		if($this->input->post('companygroup'))
		{
			$companygroup = "";
		}
		else
		{
			$companygroup = implode(',', $this->input->post('companygroup'));
		}

		$data = array(
			'CompanyCode'=>($this->input->post('CompanyCode')) ? $this->input->post('CompanyCode') : '',
			'CompanyShortName'=>($this->input->post('CompanyShortName')) ? $this->input->post('CompanyShortName') : '',
			'CompanyName'=>($this->input->post('CompanyName')) ? $this->input->post('CompanyName') : '',
			'CompanyType'=>($this->input->post('CompanyType')) ? $this->input->post('CompanyType') : '',
			'CompanyGoup'=>$CompanyGoup,
			'AddressCompany'=>($this->input->post('AddressCompany')) ? $this->input->post('AddressCompany') : '',
			'CompanyAddressCont'=>($this->input->post('CompanyAddressCont')) ? $this->input->post('CompanyAddressCont') : '',
			'CompanyCityID'=>($this->input->post('CompanyCityID')) ? $this->input->post('CompanyCityID') : '',
			'CompanyPin'=>($this->input->post('CompanyPin')) ? $this->input->post('CompanyPin') : '',
			'CompanyEmail'=>($this->input->post('CompanyEmail')) ? $this->input->post('CompanyEmail') : '',
			'CompanyMobileNo'=>($this->input->post('CompanyMobileNo')) ? $this->input->post('CompanyMobileNo') : '',
			'CompanyFax'=>($this->input->post('CompanyFax')) ? $this->input->post('CompanyFax') : '',
			'CompanyPhoneNo'=>($this->input->post('CompanyPhoneNo')) ? $this->input->post('CompanyPhoneNo') : '',
			'CompanyPhoneNo2'=>($this->input->post('CompanyPhoneNo2')) ? $this->input->post('CompanyPhoneNo2') : '',
			'CompanyPhoneNo3'=>($this->input->post('CompanyPhoneNo3')) ? $this->input->post('CompanyPhoneNo3') : '',
			'CompanyAddress1'=>($this->input->post('CompanyAddress1')) ? $this->input->post('CompanyAddress1') : '',
			'CompanyAddressCont1'=>($this->input->post('CompanyAddressCont1')) ? $this->input->post('CompanyAddressCont1') : '',
			'CompanyBusinessDesc'=>($this->input->post('CompanyBusinessDesc')) ? $this->input->post('CompanyBusinessDesc') : '',
			'CompanyProprietor'=>($this->input->post('CompanyProprietor')) ? $this->input->post('CompanyProprietor') : '',
			'CompanyMultiChal'=>($this->input->post('CompanyMultiChal')) ? $this->input->post('CompanyMultiChal') : '',
			'CompanySelected'=>($this->input->post('CompanySelected')) ? $this->input->post('CompanySelected') : '',
			'CompanyJvFormDate'=>($this->input->post('CompanyJvFormDate')) ? $this->input->post('CompanyJvFormDate') : '',
			'CompanyPanNo'=>($this->input->post('CompanyPanNo'))? $this->input->post('CompanyPanNo') : '',
			'CompanyTdsacNo'=>($this->input->post('CompanyTdsacNo')) ? $this->input->post('CompanyTdsacNo') : '',
			'CompanyWard'=>($this->input->post('CompanyWard')) ? $this->input->post('CompanyWard') : '',
			'CompanyEccNo'=>($this->input->post('CompanyEccNo')) ? $this->input->post('CompanyEccNo') : '',
			'CompanyRange'=>($this->input->post('CompanyRange')) ? $this->input->post('CompanyRange') : '',
			'CompanyDivision'=>($this->input->post('CompanyDivision')) ? $this->input->post('CompanyDivision') : '',
			'CompanyCollectrate'=>($this->input->post('CompanyCollectrate')) ? $this->input->post('CompanyCollectrate') : '',
			'CompanyPolicyNo'=>($this->input->post('CompanyPolicyNo')) ? $this->input->post('CompanyPolicyNo') : '',
			'CompanyDate'=>($this->input->post('CompanyDate')) ? $this->input->post('CompanyDate') : '',
			'CompanyGstNoVat'=>($this->input->post('CompanyGstNoVat')) ? $this->input->post('CompanyGstNoVat') : '',
			'CompanyDt'=>($this->input->post('CompanyDt')) ? $this->input->post('CompanyDt') : '',
			'CompanyCinNo'=>($this->input->post('CompanyCinNo')) ? $this->input->post('CompanyCinNo') : '',
			'CompanyGstInUin'=>($this->input->post('CompanyGstInUin')) ? $this->input->post('CompanyGstInUin') : '',
			'CompanyCenregNo'=>($this->input->post('CompanyCenregNo')) ? $this->input->post('CompanyCenregNo') : '',
			'CompanyInsurancePolicy'=>($this->input->post('CompanyInsurancePolicy')) ? $this->input->post('CompanyInsurancePolicy') : '',
			'CreateDate'=>date('Y-m-d')
		);

		if($this->input->post('CompanyID') != "")
		{
				$result=$this->Home_model->update('company_manager',$data,array('CompanyID'=>$this->input->post('CompanyID')));
				print_r($result);
		}


	}
}
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct()
        {
                parent::__construct();
                // Your own constructor code
				$this->load->helper('url');
				$this->load->database();
				
        }
	public function index()
	{
		$this->load->view('admin\login_form');
	}
	public function login_ol()
	{
		$adsoy=$this->input->post("adsoy");
		$sifre=$this->input->post("sifre");
		
		$adsoy=$this->security->xss_clean($adsoy);
		$sifre=$this->security->xss_clean($sifre);
		$this->load->model('Database_Model');
		$result=$this->Database_Model->login("admin",$adsoy,$sifre);
		
		if($result)
		{
			$sess_array=array(
			'id'=>$result[0]->Id,
			'yetki'=>$result[0]->yetki,
			'adsoy'=>$result[0]->adsoy,
			'sifre'=>$result[0]->sifre,
			'resim'=>$result[0]->resim
			);
			$this->session->set_userdata("admin_session",$sess_array);
			redirect(base_url().'admin/home');
		}
		else
		{
			$this->session->set_flashdata("mesaj","Hatalı kullanıcı adı ya da şifre!");
			redirect(base_url().'admin/login');
		}
	}
	public function login_cik()
	{
		$this->session->unset_userdata("admin_session");
			redirect(base_url().'admin/login');
	}
}

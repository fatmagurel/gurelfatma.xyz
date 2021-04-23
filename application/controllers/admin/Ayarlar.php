<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ayarlar extends CI_Controller {

	public function __construct()
        {
                parent::__construct();
                // Your own constructor code
				$this->load->helper('url');
				$this->load->model('Database_Model');
				
				if(!$this->session->userdata("admin_session"))
					redirect(base_url().'admin/login');
				
        }
	public function index()
	{
		$query=$this->db->query("SELECT * FROM ayarlar");
		$data["veri"]=$query->result();
		$this->load->view('admin\ayarlar',$data);
	}
	
		public function ayarlar()
	{
		
		
		$this->load->view('admin\ayarlar');
		
	}
	
	public function ayarlar_guncelle($id)
	{
		$data=array(
			'adi' => $this->input->post('adi'),
			'smtpemail' => $this->input->post('smtpemail'),
			'sehir' => $this->input->post('sehir'),
			'tel' => $this->input->post('tel'),
			'keyword' => $this->input->post('keyword'),
			'description' => $this->input->post('description'),
			'hakkimizda' => $this->input->post('ckeditor'),
			'iletisim' => $this->input->post('ckeditor1'),		
			'adres' => $this->input->post('adres'),			
			'password' => $this->input->post('password'),			
			'name' => $this->input->post('name'),			
			'smtpserver' => $this->input->post('smtpserver'),			
			'smtpport' => $this->input->post('smtpport'),			
			'fax' => $this->input->post('fax'),			
			'email' => $this->input->post('email'),			
			'facebook' => $this->input->post('facebook'),			
			'twitter' => $this->input->post('twitter'),			
			'instagram' => $this->input->post('instagram'),			
			'pinterest' => $this->input->post('pinterest')			
		);
		$this->load->model('Database_Model');
		$this->Database_Model->update_data("ayarlar",$data,$id);
		$this->session->set_flashdata("mesaj","Güncellendi...");
		redirect(base_url().'admin/ayarlar');

	}
	
	

}
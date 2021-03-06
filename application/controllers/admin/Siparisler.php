<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Siparisler extends CI_Controller {

	public function __construct()
        {
                parent::__construct();
                // Your own constructor code
				$this->load->helper('url');
				$this->load->model('Database_Model');
        }
	public function index()
	{
		
		$query=$this->db->query("SELECT * FROM siparis WHERE siparisdurumu='yeni'");
		
		$data["veriler"]=$query->result();
		
		$this->load->view('admin/siparisler_listesi',$data);
	}
	
	public function liste($durum)
	{
		
		$query=$this->db->query("SELECT * FROM siparis WHERE siparisdurumu='$durum'");
		
		$data["veriler"]=$query->result();
		
		$this->load->view('admin/siparisler_listesi',$data);
	}
	
	public function siparisdetay($siparis_id)
	{
	
		$query=$this->db->query("SELECT * FROM siparis_urunler WHERE siparis_id=$siparis_id");
		$data["veriler"]=$query->result();
		
		$query=$this->db->query("SELECT * FROM siparis WHERE Id=$siparis_id");
		$data["veri"]=$query->result();
		
		$data["siparisid"]=$siparis_id;
		$this->load->view('admin/siparisler_detay',$data);
	
	}

	public function guncelle($id)
	{
		$data=array(
		'kargo'=>$this->input->post('kargo'),
		'siparisdurumu'=>$this->input->post('siparisdurumu'),
		'aciklama'=>$this->input->post('aciklama')
	
		);
		$this->Database_Model->update_data("siparisler",$data,$id);
		
		redirect(base_url().'/siparisler');
	}
}

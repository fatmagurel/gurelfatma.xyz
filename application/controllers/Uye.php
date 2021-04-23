<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Uye extends CI_Controller {

	public function __construct()
        {
                parent::__construct();
                // Your own constructor code
				
				$this->load->model('Database_Model');
				$this->load->helper('url');
				if(!$this->session->userdata("uye_session"))
					redirect(base_url().'home/login_ol');
        }
	public function index()
	{
		$query=$this->db->query("SELECT * FROM ayarlar");
		$data["veri"]=$query->result();
		
		$query=$this->db->query("SELECT * FROM uyeler WHERE Id=".$this->session->uye_session["id"]);
		$data["uye"]=$query->result();
		
		$data["sayfa"]="Üye Paneli";
		$data["menu"]="uye";
		$this->load->view('hesabim',$data);

	}
	
	public function cikis()
	{
		$this->session->unset_userdata("uye_session");
		redirect(base_url().'home');
	}
	
	public function hesabim()
	{
		$query=$this->db->query("SELECT * FROM ayarlar");
		$data["veri"]=$query->result();
		$data["sayfa"]="Üye Hesabı ||";
		$data["menu"]="uye";
		
		$query=$this->db->query("SELECT * FROM uyeler WHERE Id=".$this->session->uye_session["id"]);
		$data["uye"]=$query->result();

		$this->load->view('hesabim',$data);
	
	}
	
	
	public function uye_guncelle()
	{
		$data=array(
		'adsoy'=>$this->input->post('adsoy'),
		'sifre'=>$this->input->post('sifre'),
		'email'=>$this->input->post('email'),
		'tel'=>$this->input->post('tel'),
		'adres'=>$this->input->post('adres'),
		'sehir'=>$this->input->post('sehir'),
		'durum'=>$this->input->post('durum'),
		'yetki'=>$this->input->post('yetki')
		);
		$id=$this->session->uye_session["id"];
		
		$this->Database_Model->update_data("uyeler",$data,$id);
		$this->session->set_flashdata("mesaj","Üye Güncellendi...");
		redirect(base_url().'uye/hesabim');
	}
	
	public function uye_ekle()
	{
		$data=array(
		'email'=>$this->input->post('email'),
		'sifre'=>$this->input->post('sifre')
		
		);
		$this->db->insert("uyeler",$data);
		$this->session->set_flashdata("mesaj","Kayıt Oldunuz...");
		redirect(base_url().'uye');
	}
	
	public function sepete_ekle()
	{
		//Form verilerini alır.
		$data=array(
		'urun_id'=>$this->input->post('urunid'),
		'adet'=>$this->input->post('miktar'),
		'musteri_id'=>$this->session->uye_session["id"]
		
		);
		//print_r($data);
		//exit();
		//Aynı ürün eklendi ise kontrol edilip o ürünün miktar kısmı artırılır...
		
		$this->db->insert("sepet",$data);
		$this->session->set_flashdata("mesaj","<p align='center'>Ürün Sepete Eklendi...</p>");
		redirect(base_url().'home/urundetay/'.$this->input->post('urunid'));
	}
	
	
	public function sepetim()
	{
		if ($this->session->userdata("uye_session"));
		{
			$benim_id=$this->session->uye_session["id"];
			$query=$this->db->query("SELECT COUNT(Id) AS say FROM sepet WHERE sepet.musteri_id='.$benim_id'");
			$data["sepet"]=$query->result(); 
		}
		$query=$this->db->query("SELECT * FROM ayarlar");
		$data["veri"]=$query->result();
		$data["sayfa"]="Sepetim ||";
		$data["menu"]="sepetim";
		
		$id=$this->session->uye_session["id"];
		$data['veriler']=$this->Database_Model->sepet_urunler($id);
		
		$this->load->view('sepet',$data);
	
	}

	
		public function sepetsil($id)
	{
		
		$this->db->query("DELETE FROM sepet WHERE Id=$id");
		$this->session->set_flashdata("mesaj","<p align='center'>Ürün Sepetten Silindi...</p>");
		redirect(base_url().'uye/sepetim');
	}
	
	
	
	
}

<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct()
        {
                parent::__construct();
                // Your own constructor code
				$this->load->helper('url');
				$this->load->model('Database_Model');
        }
	public function index()
	{
		if ($this->session->userdata("uye_session"));
		{
			$benim_id=$this->session->uye_session["id"];
			$query=$this->db->query("SELECT COUNT(Id) AS say FROM sepet WHERE sepet.musteri_id='.$benim_id'");
			$data["sepet"]=$query->result(); 
		}
		
		
		$query=$this->db->query("SELECT * FROM kategoriler ORDER BY adi");
		$data["kategoriler"]=$query->result(); 
		
		$query=$this->db->query("SELECT * FROM urunler WHERE grubu='kampanya'");
		$data["kampanya"]=$query->result(); 
		
		$query=$this->db->query("SELECT * FROM urunler ORDER BY Id DESC LIMIT 6");
		$data["yeni"]=$query->result(); 
		
		$query=$this->db->query("SELECT * FROM urunler WHERE description='kazak'");
		$data["kazak"]=$query->result(); 
		
		$query=$this->db->query("SELECT * FROM urunler WHERE description='ayakkabi'");
		$data["ayakkabi"]=$query->result();
		
		$query=$this->db->query("SELECT * FROM urunler WHERE description='bilgisayar'");
		$data["bilgisayar"]=$query->result();
		
		$query=$this->db->query("SELECT * FROM urunler WHERE description='ceket'");
		$data["ceket"]=$query->result();
		
		$query=$this->db->query("SELECT * FROM urunler ORDER BY RAND() LIMIT 6");
		$data["random"]=$query->result(); 
		
		//-->>Header meta tag bilgileri
		
		$query=$this->db->query("SELECT * FROM ayarlar");
		$data["veri"]=$query->result();
		$data["sayfa"]="";
		$data["menu"]="anasayfa";
		$this->load->view('_header',$data);
		$this->load->view('_slider');
		$this->load->view('_sidebar');
		$this->load->view('_content');
		$this->load->view('_footer');
	}
	
	public function hakkimizda()
	{
		$query=$this->db->query("SELECT * FROM kategoriler ORDER BY adi");
		$data["kategoriler"]=$query->result(); 
		$query=$this->db->query("SELECT * FROM ayarlar");
		$data["veri"]=$query->result();
		$data["sayfa"]="Hakkımızda ||";
		$data["menu"]="hakkimizda";
		$this->load->view('_header',$data);
		$this->load->view('_sidebar');
		$this->load->view('hakkimizda',$data);
		$this->load->view('_footer');
	}
	
	public function login_ol(){
		$query=$this->db->query("SELECT * FROM ayarlar");
		$data["veri"]=$query->result();
		$data["sayfa"]="Uye Login ||";
		$data["menu"]="uye";
		
		$this->load->view('home/login_ol',$data);
	}
	public function login(){
		$adsoy=$this->input->post("adsoy");
		$sifre=$this->input->post("sifre");
		
		echo $adsoy=$this->security->xss_clean($adsoy);
		echo $sifre=$this->security->xss_clean($sifre);
		//exit();
		
		$this->load->model('Database_Model');
		$result=$this->Database_Model->login('uyeler',$adsoy,$sifre);
		
		if($result){
			$sess_array=array(
			'id'=>$result[0]->Id,
			'yetki'=>$result[0]->yetki,
			'adsoy'=>$result[0]->adsoy,
			'resim'=>$result[0]->resim
			);
			//print_r($sess_array);
			//echo "Login oldu";
			//exit();
			$this->session->set_userdata("uye_session",$sess_array);
			redirect(base_url()."home");
		}
		else{
			$this->session->set_flashdata("Hatalı kullanıcı adı yada şifre");
			redirect(base_url()."home/login_ol");
		}
	}
	
	
	
	public function iletisim()
	{
		$query=$this->db->query("SELECT * FROM kategoriler ORDER BY adi");
		$data["kategoriler"]=$query->result(); 
		$query=$this->db->query("SELECT * FROM ayarlar");
		$data["veri"]=$query->result();
		$data["sayfa"]="İletişim ||";
		$data["menu"]="iletisim";
		$this->load->view('_header',$data);
		$this->load->view('_sidebar');
		$this->load->view('iletisim',$data);
		$this->load->view('_footer');
	}
	
	public function bize_yazin()
	{
		$query=$this->db->query("SELECT * FROM kategoriler ORDER BY adi");
		$data["kategoriler"]=$query->result(); 
		$query=$this->db->query("SELECT * FROM ayarlar");
		$data["veri"]=$query->result();
		$data["sayfa"]="Bize Yazın ||";
		$data["menu"]="bize_yazin";
		$this->load->view('_header',$data);
		$this->load->view('_sidebar');
		$this->load->view('bize_yazin',$data);
		$this->load->view('_footer');
	}
	
	public function mesaj_kaydet()
	{
		$data=array(
		'adsoy'=>$this->input->post('adsoy'),
		'tel'=>$this->input->post('tel'),
		'email'=>$this->input->post('email'),
		'durum'=>$this->input->post('durum'),
		'mesaj'=>$this->input->post('mesaj'),
		'konu'=>$this->input->post('konu'),
		'tarih'=>$this->input->post('tarih'),
		'IP'=>$_SERVER['REMOTE_ADDR']
		);
		$this->db->insert("mesajlar",$data);
		$this->session->set_flashdata("mesaj","<p align='center'>Mesajınız Gönderilmiştir..</p>");
		redirect(base_url().'home/bize_yazin');
	}
	
	
	public function urundetay($id)
	{
		if ($this->session->userdata("uye_session"));
		{
			$benim_id=$this->session->uye_session["id"];
			$query=$this->db->query("SELECT COUNT(Id) AS say FROM sepet WHERE sepet.musteri_id='.$benim_id'");
			$data["sepet"]=$query->result(); 
		}
		$query=$this->db->query("SELECT * FROM kategoriler ORDER BY adi");
		$data["kategoriler"]=$query->result(); 
		$data["menu"]="urun";
		$data["sayfa"]=null;
		$data["veri"]=$this->Database_Model->get_urun($id);
		$query=$this->db->query("SELECT * FROM urunler_resim WHERE urun_id=$id");
		$data["resimler"]=$query->result(); 
		$this->load->view('urun_detay',$data);
	}

	public function siparislerim()
	{
		if ($this->session->userdata("uye_session"));
		{
			$benim_id=$this->session->uye_session["id"];
			$query=$this->db->query("SELECT COUNT(Id) AS say FROM sepet WHERE sepet.musteri_id='.$benim_id'");
			$data["sepet"]=$query->result(); 
		}
		$query=$this->db->query("SELECT * FROM ayarlar");
		
		$data["veri"]=$query->result();
		$data["menu"]="urun";
		$data["sayfa"]='Siparişlerim';
		$this->load->view('siparisler_listesi',$data);
	}

	public function siparis_tamamla()
	{
		//Kredi kartı bilgilerini al. Bankaya gönder olumlu dönüş gelire aşağıdaki işleme devam et
		//değilse kredi kartı hata sayfasına gönder. Onay geldikten sonra form verilerini alırız.
		$data=array(
		'adsoy'=>$this->input->post('adsoy'),
		'musteri_id'=>$this->session->uye_session['id'],
		'adres'=>$this->input->post('adres'),
		'sehir'=>$this->input->post('sehir'),
		'tel'=>$this->input->post('tel'),
		'tutar'=>$this->input->post('toplam'),
		'IP'=>$_SERVER['REMOTE_ADDR']
		);
		//VERİLERİ SİPARİŞ TABLOSUNA EKLE
		$this->db->insert("siparis",$data);
		$siparis_id=$this->db->insert_id();//insert komutu girilen kaydın Id'sini alır.
		
		//sepetteki ürünleri sipariş ürünler tablosuna eklendi
		$id=$this->session->uye_session["id"];
		
		//sepetteki ürünleri sipariş ürünler tablosuna aktarma
		$this->load->model('Database_Model');
		$veriler->$this->Database_Model->sepet_urunler($id);
		foreach($veriler as $rs)
		{
			$data=array(
			'adi'=>$rs->urunadi,
			'fiyat'=>$rs->satfiyat,
			'musteri_id'=>$id,
			'urun_id'=>$rs->urun_id,
			'siparis_id'=>$siparis_id,
			'adet'=>$rs->adet,
			'tutar'=>$rs->adet*$rs->satfiyat
			);
			$this->db->insert("siparis_urunler",$data);
			//eklenen ürün adedi Urunler tablosundaki stoktan düşürülmeli
			
		}
		
		//müşteri sepetini boşalt
		$this->db->query("DELETE FROM sepet WHERE musteri_id=$id");
		//sipariş alındığına dair üye ye email bilgisi gönder
		redirect(base_url().'home/islemson');
	}
	
	public function islemson()
	{
		$query=$this->db->query("SELECT * FROM ayarlar");
		$data["veri"]=$query->result();
		$data["sayfa"]="İşlem Tamamlandı ||";
		$data["menu"]="sepetim";
		
		//siparişin tamamlandığına dair email
		
		$this->load->view('home/islemson',$data);
	
	}
	
	
	public function siparisdetay($siparis_id)
	{
		if ($this->session->userdata("uye_session"));
		{
			$benim_id=$this->session->uye_session["id"];
			$query=$this->db->query("SELECT COUNT(Id) AS say FROM sepet WHERE sepet.musteri_id='.$benim_id'");
			$data["sepet"]=$query->result(); 
		}
		$query=$this->db->query("SELECT * FROM ayarlar");
		$data["veri"]=$query->result();
		$data["sayfa"]="Sipariş Detayı ||";
		$data["menu"]="uye";
		
		$id=$this->session->uye_session["id"];
		$query=$this->db->query("SELECT * FROM siparis_urunler WHERE siparis_id=$siparis_id");
		
		$data['veriler']=$query->result();
		
		$this->load->view('siparis_detay',$data);
	
	}
}

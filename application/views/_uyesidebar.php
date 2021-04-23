<?php
	if(!$this->session->userdata('uye_session'))
		{
			$this->session->set_flashdata('mesaj', 'Giriş Yapmadınız!');
			redirect(base_url()."home/uyelik");
		}
?>
<section>
		<div class="container">
			<div class="row">
<div class="col-sm-3">
					<div class="left-sidebar">
						<h2>Üye İşlemleri</h2>
						<hr>
						
						<div class="panel-group category-products" id="accordian"><!--category-productsr-->
							<div class="panel panel-default">
							
								<ul class="nav nav-pills nav-stacked">
								
									<li><a href="<?=base_url()?>/uye/resim"> <span class="pull-right"></span><font color="#000000">Profil Bilgilerim</font></a></li>
									<li><a href="<?=base_url()?>/home/siparislerim"> <span class="pull-right"></span><font color="#000000">Siparişlerim</font></a></li>
									<li><a href="<?=base_url()?>/uye/sepetim"> <span class="pull-right"></span><font color="#000000">Sepetim</font></a></li>
									<li><a href="<?=base_url()?>home/cikis_yap"> <span class="pull-right"></span><font color="#000000">ÇIKIŞ</font></a></li>
								</ul>
								
							</div>
						</div><!--/category-products-->
					
						
					
					</div>
				</div>
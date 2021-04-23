<?php
$this->load->view('_header');
$this->load->view('_uyesidebar');


?>
<div class="col-sm-9 padding-right">
<ul class="breadcrumb">
	<li><a href="<?=base_url()?>home">Home</a><span class="divider"></span></li>
	<li class="active">Üye Hesap</li>
</ul>
					<div class="features_items"><!--features_items-->
						
					
					<div class="well well-small">  	
						<br>
	    				
	    				<div class="status alert alert-success" style="display: none"></div>
				    	<form id="main-contact-form" class="contact-form row" name="contact-form" method="post" action="<?=base_url()?>/uye/uye_guncelle">
				            <h2 class="title text-center">Üye Hesap Bilgileri</h2>
<hr>
								<?php if ($this->session->flashdata("mesaj")){?>
									<div class="col-sm-3">
										
										<p><?=$this->session->flashdata("mesaj")?></p>

										
									</div>
								<?php }?>
								<br><br><br>
								
							<div class="form-group col-md-6">
								<label class="cont-label">Kullanıcı Adı<sup>*</sup></label>
								<div class="control">
				                <input type="text" name="adsoy" class="form-control" required="required" value="<?=$uye[0]->adsoy?>" placeholder="Kullanıcı Adı"/>
								</div>
							</div>
							<div class="form-group col-md-6">
								<label class="cont-label">Telefon<sup>*</sup></label>
								<div class="control">
				                <input type="text" name="tel" class="form-control" required="required" value="<?=$uye[0]->tel?>" placeholder="Telefon"/>
								</div>
							</div>
							<div class="form-group col-md-6">
								<label class="cont-label">Şifre<sup>*</sup></label>
								<div class="control">
				                <input type="password" name="sifre" class="form-control" required="required" value="<?=$uye[0]->sifre?>" placeholder="Şifre"/>
								</div>
							</div>       
							<div class="form-group col-md-6">
								<label class="cont-label">Adres<sup>*</sup></label>
								<div class="control">
				                <input type="text" name="adres" class="form-control" required="required" value="<?=$uye[0]->adres?>" placeholder="Adres"/>
								</div>
							</div>
							<div class="form-group col-md-6">
								<label class="cont-label">Şehir<sup>*</sup></label>
								<div class="control">
				                <input type="text" name="sehir" class="form-control" required="required" value="<?=$uye[0]->sehir?>" placeholder="Şehir"/>
								</div>
							</div>
				            <div class="form-group col-md-12">
							<div class="controls">
				                <input type="submit" name="submit" class="btn btn-primary pull-right" value="Güncelle"/>
				            </div>
							</div>
							
				        </form>
	    			</div>
					</div>
	    		   			
	    
			
					
					
					
					
</div><!--/recommended_items-->
					
				</div>
	</div>
		</div>
	</section>				
<?php
		$this->load->view('_footer');
?>
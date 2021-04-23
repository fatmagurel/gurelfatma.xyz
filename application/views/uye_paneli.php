	<?php
		$this->load->view('_header');
		
	?>
	
	<section>
		<div class="container">
			<div class="row">
<div class="col-sm-3">
					<div class="left-sidebar">
						<h2>Üye Bilgileri</h2>
						<hr>
						
						<div class="row">
						<form action="<?=base_url()?>home/uyeguncelle/<?$veri2[0]->Id?>" method="post" class="form-horizontal" id="popup-validation">
							<div class="form-group">
							
								<label class="control-label col-lg-4">Adı Soyadı</label>
								<div class="col-lg-4">
									<input type="text" class="validate[required]form-control" name="adsoy" id="adsoy" value="<?=$veri2[0]->adsoy?>">
								
								</div>
							</div>
						<br>
						
						
						<div class="form-group">
							
								<label class="control-label col-lg-4">E-mail</label>
								<div class="col-lg-4">
									<input type="text" class="validate[required,custom[email]]form-control" type="text" name="email" id="email" 
									value="<?=$veri2[0]->email?>">
								
								</div>
							</div>
						<br>
						
						<div class="form-group">
							
								<label class="control-label col-lg-4">Şifre</label>
								<div class="col-lg-4">
									<input type="text" class="validate[required]form-control" type="password" name="sifre" id="sifre" 
									value="<?=$veri2[0]->sifre?>">
								
								</div>
							</div>
						<br>
						
						
						
						<div style="text-align:center" class="form-actions no-margin-bottom">
							<input type="submit" value="GUNCELLE" class="btn btn-primary btn-lg"/>
						</div>
						</form>
						
					</div>
				</div>
	
		
	<?php
		$this->load->view('_footer');
	?>
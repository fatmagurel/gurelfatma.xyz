<?php
$this->load->view('_header');

$this->load->view('_sidebar');

?>
<div class="col-sm-9 padding-right">
<ul class="breadcrumb">
	<li><a href="<?=base_url()?>home">Home</a><span class="divider"></span></li>
	<li class="active">Üye Giriş</li>
</ul>
					<div class="features_items"><!--features_items-->
						
					
					<div class="well well-small">  	
						<br>
	    				
	    				<div class="status alert alert-success" style="display: none"></div>
				    	
				            
								
							<div class="container">
			<div class="row">
				<div class="col-sm-4 col-sm-offset-1">
					<div class="login-form"><!--login form-->
						<h2>Giriş Yapınız</h2>
						<?php if ($this->session->flashdata("mesaj")){?>
									<div class="col-sm-3">
										
										<p><?=$this->session->flashdata("mesaj")?></p>
										
									</div>
								<?php }?>
						<form id="main-contact-form" class="contact-form row" name="contact-form" method="post" action="<?=base_url()?>/home/login">
							<input type="text" placeholder="Kullanıcı Adı">
							<input type="password" placeholder="Şifre">
							<span>
								<input type="checkbox" class="checkbox"> 
								Beni Hatırla
							</span>
							<button type="submit" class="btn btn-default">Giriş</button>
						</form>
					</div><!--/login form-->
				</div>
				<div class="col-sm-1">
					<h2 class="or">Veya</h2>
				</div>
				<div class="col-sm-4">
					<div class="signup-form"><!--sign up form-->
						<h2>Üye Ol!</h2>
						<form action="#">
							<input type="text" placeholder="Kullanıcı Adı">
							<input type="password" placeholder="Şifre">
							<button type="submit" class="btn btn-default">Kayıt Ol</button>
						</form>
					</div><!--/sign up form-->
				</div>
			</div>
		</div>
				        </form>
	    			
					</div>
	    		   			
	    
			
					
					
					
					
</div><!--/recommended_items-->
					
				</div>
	</div>
		</div>
	</section>				
<?php
		$this->load->view('_footer');
?>
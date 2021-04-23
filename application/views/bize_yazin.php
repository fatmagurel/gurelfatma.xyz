
<div class="col-sm-9 padding-right">
<ul class="breadcrumb">
	<li><a href="<?=base_url()?>/home">Home</a><span class="divider"></span></li>
	<li class="active">Bize Yazın</li>
</ul>
					<div class="features_items"><!--features_items-->
						
					
					<div class="row">  	
	    		<div class="col-sm-8">
	    			<div class="contact-form">
					
						<br>
	    				<h2 class="title text-center">İLETİNİZİ YAZINIZ</h2>
						
						<?php if ($this->session->flashdata("mesaj")){?>
						<div class="col-sm-12">
							<ul class="list-unstyled bg-red" rel="bg-">
								<li class="lter"><?=$this->session->flashdata("mesaj")?></li>
							</ul>
						</div>
						<?php }?>
	    				<div class="status alert alert-success" style="display: none"></div>
				    	<form id="main-contact-form" class="contact-form row" name="contact-form" method="post" action="<?=base_url()?>/home/mesaj_kaydet">
				            <div class="form-group col-md-12">
				                <input type="text" name="adsoy" class="form-control" required="required" placeholder="İsim">
				            </div>
				            <div class="form-group col-md-12">
				                <input type="email" name="email" class="form-control" required="required" placeholder="Email">
				            </div>
							<div class="form-group col-md-12">
				                <input type="text" name="tel" class="form-control" required="required" placeholder="Telefon">
				            </div>
				            
				            <div class="form-group col-md-12">
				                <textarea name="mesaj" id="message" required="required" class="form-control" rows="8" placeholder="Mesajınızı Buraya Yazınız..."></textarea>
				            </div>                        
				            <div class="form-group col-md-12">
				                <input type="submit" name="submit" class="btn btn-primary pull-right" value="GÖNDER">
				            </div>
				        </form>
	    			</div>
	    		</div>
	    		<div class="col-sm-4">
	    			<div class="contact-info">
	    				<h2 class="title text-center">İLETİŞİM BİLGİLERİ</h2>
	    				<address>
	    					<p>E-Shopper Inc.</p>
							<p>100. Yıl Mahallesi 1002. Cadde, MERKEZ</p>
							<p>KARABÜK</p>
							<p>Telefon: 0534 925 78 34</p>
							<p>Fax: 1-714-252-0026</p>
							<p>Email: <a href="mailto:fatma.gurel.0@gmail.com" target="_blank">fatma.gurel.0@gmail.com</p>
	    				</address>
	    				<div class="social-networks">
	    					<h2 class="title text-center">Social Networking</h2>
							<ul>
								<li>
									<a href="https://www.facebook.com/eshopper254/"target="_blank"><i class="fa fa-facebook"></i></a>
								</li>
								<li>
									<a href="https://twitter.com/EBachDonnard/status/912774394958811136" target="_blank"><i class="fa fa-twitter"></i></a>
								</li>
								<li>
									<a href="https://www.google.com.tr/search?q=e+shopper&safe=strict&lr=lang_tr&sa=X&ved=0ahUKEwjj64jF6MrYAhXBBSwKHbfNC2EQuAEIJQ&biw=1536&bih=759" target="_blank"><i class="fa fa-google-plus"></i></a>
								</li>
								<li>
									<a href="https://www.youtube.com/watch?v=6B4UnkWiwUk" target="_blank"><i class="fa fa-youtube"></i></a>
								</li>
								<li>
									<a href="https://www.linkedin.com/company/aliusaexpress" target="_blank"><i class="fa fa-linkedin"></i></a>
								</li>
								<li>
									<a href="https://dribbble.com/shots/3753264-Attention-shoppers"target="_blank"><i class="fa fa-dribbble"></i></a>
								</li>
							</ul>
	    				</div>
	    			</div>
    			</div>    			
	    	</div>
			
					
					
					
					
</div><!--/recommended_items-->
					
				</div>
	</div>
		</div>
	</section>				

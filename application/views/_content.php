<div class="col-sm-9 padding-right">
					<div class="features_items"><!--features_items-->
						<h2 class="title text-center">Yeni Ürünler</h2>
							<?php
							foreach($yeni as $rs)
							{ ?>
								<div class="col-sm-4">
									<div class="product-image-wrapper">
										<div class="single-products">
											<div class="productinfo text-center">
											
											<img src="<?=base_url()?>uploads/<?=$rs->resim?>" alt=""/>
											<h2><?=$rs->sfiyat?>TL</h2>
											<p><?=$rs->adi?></p>
										
											<a href="<?=base_url()?>uye/sepete_ekle/" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Sepete Ekle</a>
											</div>
										<div class="product-overlay">
											<div class="overlay-content">
											<a class="btn btn-default add-to-cart" href="<?=base_url()?>home/urundetay/<?=$rs->Id?>"><i class="fa fa-search"></i>DETAY</a></h4>
												<h2><?=$rs->sfiyat?></h2>
												<p><?=$rs->adi?></p>
													
												<a href="<?=base_url()?>uye/sepete_ekle/" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Sepete Ekle</a>
											</div>
										</div>
										</div>
								<div class="choose">
									<ul class="nav nav-pills nav-justified">
										<li><a href="#"><i class="fa fa-plus-square"></i>İstek Listesine Ekle</a></li>
										<li><a href="#"><i class="fa fa-plus-square"></i>Karşılaştırmak İçin Ekle</a></li>
									</ul>
								</div>
							</div>
						</div>
								<?php }?>
								
								
					
					

						
					</div><!--features_items-->
					
					
				
					<div class="category-tab"><!--category-tab-->
						<div class="col-sm-12">
							<ul class="nav nav-tabs">
								<li class="active"><a href="#kazak" data-toggle="tab">Kazak</a></li>
								<li><a href="#ayakkabi" data-toggle="tab">Ayakkabı</a></li>
								<li><a href="#bilgisayar" data-toggle="tab">Bilgisayar</a></li>
								<li><a href="#ceket" data-toggle="tab">Ceket</a></li>
							</ul>
						</div>
						<div class="tab-content">
							<div class="tab-pane fade active in" id="kazak" >
							
							<?php
							foreach($kazak as $rs)
							{ ?>
								<div class="col-sm-3">
									<div class="product-image-wrapper">
										<div class="single-products">
											<div class="productinfo text-center">
												<img src="<?=base_url()?>uploads/<?=$rs->resim?>" alt=""/>
												<h2><?=$rs->sfiyat?>TL</h2>
											<p><?=$rs->adi?></p>
												<a href="<?=base_url()?>uye/sepete_ekle" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Sepete Ekle</a>
											</div>
											
										</div>
									</div>
								</div>
							<?php }?>	
							</div>
							
							<div class="tab-pane fade active in" id="ayakkabi" >
							
							<?php
							foreach($ayakkabi as $rs)
							{ ?>
								<div class="col-sm-3">
									<div class="product-image-wrapper">
										<div class="single-products">
											<div class="productinfo text-center">
												<img src="<?=base_url()?>uploads/<?=$rs->resim?>" alt=""/>
												<h2><?=$rs->sfiyat?>TL</h2>
											<p><?=$rs->adi?></p>
												<a href="<?=base_url()?>uye/sepete_ekle" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Sepete Ekle</a>
											</div>
											
										</div>
									</div>
								</div>
							<?php }?>	
							</div>
							
							<div class="tab-pane fade active in" id="bilgisayar" >
							
							<?php
							foreach($bilgisayar as $rs)
							{ ?>
								<div class="col-sm-3">
									<div class="product-image-wrapper">
										<div class="single-products">
											<div class="productinfo text-center">
												<img src="<?=base_url()?>uploads/<?=$rs->resim?>" alt=""/>
												<h2><?=$rs->sfiyat?>TL</h2>
											<p><?=$rs->adi?></p>
												<a href="<?=base_url()?>uye/sepete_ekle" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Sepete Ekle</a>
											</div>
											
										</div>
									</div>
								</div>
							<?php }?>	
							</div>
							
							<div class="tab-pane fade active in" id="ceket" >
							
							<?php
							foreach($ceket as $rs)
							{ ?>
								<div class="col-sm-3">
									<div class="product-image-wrapper">
										<div class="single-products">
											<div class="productinfo text-center">
												<img src="<?=base_url()?>uploads/<?=$rs->resim?>" alt=""/>
												<h2><?=$rs->sfiyat?>TL</h2>
											<p><?=$rs->adi?></p>
												<a href="<?=base_url()?>uye/sepete_ekle" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Sepete Ekle</a>
											</div>
											
										</div>
									</div>
								</div>
							<?php }?>	
							</div>
							
						</div>
					</div><!--/category-tab-->
					
					<div class="recommended_items"><!--recommended_items-->
						<h2 class="title text-center">GÜNCEL ÜRÜNLER</h2>
						
						<div id="recommended-item-carousel" class="carousel slide" data-ride="carousel">
							<div class="carousel-inner">
								<div class="item active">
										<?php
							foreach($random as $rs)
							{	?>
						
							
									
									<div class="col-sm-4">
										<div class="product-image-wrapper">
											<div class="single-products">
												<div class="productinfo text-center">
													<img style="width:30%" src="<?=base_url()?>uploads/<?=$rs->resim?>" alt=""/>
											<h2><?=$rs->sfiyat?>TL</h2>
											<p><?=$rs->adi?></p>
													<a href="<?=base_url()?>uye/sepete_ekle" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Sepete Ekle</a>
												</div>
												
											</div>
									</div>
									</div>
							<?php	}?>
							</div>
							</div>
						
								
							
							 	
						</div>  
						
					</div><!--/recommended_items-->
					
				</div>
			</div>
		</div>
	</section>
	
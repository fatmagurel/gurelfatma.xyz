<?php
$this->load->view('_header');
$this->load->view('_sidebar');
?>

				<div class="col-sm-9 padding-right">
					<div class="product-details"><!--product-details-->
						<div class="col-sm-5">
							<div class="view-product">
								<img src="<?=base_url()?>/uploads/<?=$veri[0]->resim?>" alt="" />
								<h3>Detay</h3>
							</div>
							<div id="similar-product" class="carousel slide" data-ride="carousel">
								
								  <!-- Wrapper for slides -->
							<div class="carousel-inner">
																					
										<div class="item active">
										  <center><a href="#"><img src="<?=base_url()?>uploads/<?=$veri[0]->resim?>" alt="" style="width:50%"></a></center>
										  </div> 
										  <?php
										  foreach($resimler as $rs)
										  {
											?>
											<div class="item ">
										  <center><a href="#"><img src="<?=base_url()?>uploads/<?=$rs->resim?>" alt="" style="width:50%"></a></center>
										  </div> 
										
										  <?php }?>
							</div>  
								  <!-- Controls -->
								  <a class="left item-control" href="#similar-product" data-slide="prev">
									<i class="fa fa-angle-left"></i>
								  </a>
								  <a class="right item-control" href="#similar-product" data-slide="next">
									<i class="fa fa-angle-right"></i>
								  </a>
							</div>

						</div>
						<div class="col-sm-7">
							<div class="product-information"><!--/product-information-->
								
								<h2><?=$veri[0]->adi?></h2>
								<p><?=$veri[0]->kodu?></p>
								<img src="<?=base_url()?>assets/images/product-details/rating.png" alt="" /><br>
								<h4>Kategorisi:<?=$veri[0]->katadi?>-(<?=$veri[0]->description?>)</h4>
								<span>
								
								<form class="form-horizontal qtyFrm" method="post" action="<?=base_url()?>uye/sepete_ekle">
									<div class="control-group">
									<span class="item_price"><?=$veri[0]->sfiyat?> TL</span><br><br><br>
									<div class="controls">
									<input type="hidden" name="urunid" value="<?=$veri[0]->Id?>"/>
									<label class="control-label"><span>Stok Miktarı: <?=$veri[0]->stok?> Adet</span></label><br>
									<input type="number" name="miktar" value="1" step="1" class="input-text qty text" title="Qty" placeholder="Adet" min="1" max="<?=$veri[0]->stok?>"/> Adet
									</div>
									</div>
									
									<div class="control-group">
										<label class="control-label"><span>Color</span></label><br>
										<div class="controls">
										 <select class="span3">
											<option>Kırmızı</option>
											<option>Siyah</option>
											<option>Mavi</option>
											<option>Yeşil</option>
										 </select>
										</div>
									</div>
									<br>
									
									<button type="submit" class="shopBtn" value="Sepete Ekle"><span class="icon-shopping-cart">SEPETE EKLE</span></button>
										
								</span>
								<br>
								<a href=""><script language="javascript" src="http://ic.sitekodlari.com/paylas4.js"></script></a>
							</div><!--/product-information-->
						</div>
					</div><!--/product-details-->
					
					<div class="category-tab shop-details-tab"><!--category-tab-->
						<div class="col-sm-12">
							<ul class="nav nav-tabs">
								<li class="active"><a href="#genel" data-toggle="tab">Ürün Açıklaması</a></li>
								
								<li><a href="#reviews" data-toggle="tab">Yorumlar</a></li>
							</ul>
						</div>
						<div class="tab-content">
							<div class="tab-pane fade active in" id="genel" >
								
											<div class="productinfo text-center">
												<h4>Genel Açıklama</h4>
												<?=$veri[0]->aciklama?>
											</div>
								
							</div>
							
							
							
							
							<div class="tab-pane fade" id="reviews" >
								<div class="col-sm-12">
									<ul>
										<li><a href=""><i class="fa fa-user"></i>EUGEN</a></li>
										<li><a href=""><i class="fa fa-clock-o"></i>12:41 PM</a></li>
										<li><a href=""><i class="fa fa-calendar-o"></i>31 DEC 2014</a></li>
									</ul>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
									<p><b>Yorum Yaz</b></p>
									
									<form action="#">
										<span>
											<input type="text" placeholder="İsim"/>
											<input type="email" placeholder="Email Adresin"/>
										</span>
										<textarea name="" ></textarea>
										<img src="images/product-details/rating.png" alt="" />
										<button type="button" class="btn btn-default pull-right">
											Gönder
										</button>
									</form>
								</div>
							</div>
							
						</div>
					</div><!--/category-tab-->
					
<?php
$this->load->view('_footer');
?>					
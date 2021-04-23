<!-- /#top -->
                    <div id="left">
                        <div class="media user-media bg-dark dker">
                            <div class="user-media-toggleHover">
                                <span class="fa fa-user"></span>
                            </div>
                            <div class="user-wrapper bg-dark">
                                <a class="user-link" href="">
								<div>
                                     <img src="<?=base_url()?>uploads/<?=$this->session->admin_session["resim"]?>" class="img-circle" alt="User Image">
									<span class="label label-danger user-label"></span>
									</div>
                                </a>
                        
                                <div class="media-body">
                                    <h5 class="media-heading"><?=$this->session->admin_session["adsoy"]?></h5>
                                    <ul class="list-unstyled user-info">
                                        <li><a href="">Administrator</a></li>
                                        <li>Last Access : <br>
                                            <small><i class="glyphicon glyphicon-calendar"></i>&nbsp;16 Mar 16:32</small>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- #menu -->
						<div class="user-wrapper bg-dark Iter" id="left">
                        <ul id="menu" class="bg-blue dker">
                                  <li class="nav-header">Menu</li>
                                  <li class="nav-divider"></li>
                                  <li class="">
                                    <a href="<?=base_url()?>admin/home">
                                      <i class="glyphicon glyphicon-home "></i><span class="link-title">  Anasayfa</span>
                                    </a>
                                  </li>
                                  <li class="">
                                    <a href="<?=base_url()?>admin/uyeler">
                                      <i class="glyphicon glyphicon-user "></i>
                                      <span class="link-title">Üyeler</span>
                                      
                                    </a>
                                    
                                  </li>
                                  <li class="">
                                    <a href="<?=base_url()?>admin/urunler">
                                      <i class="glyphicon glyphicon-qrcode"></i>
                                      <span class="link-title">Ürünler</span>
                                      
                                    </a>
                                    
                                  <li class="treeview">
                                    <a href="<?=base_url()?>admin/siparisler">
                                     <i class="glyphicon glyphicon-shopping-cart"></i>
                                      <span>Siparişler</span>
									  <i class="glyphicon glyphicon-chevron-down pull-right"></i>
									 
									  <span class="pull-right-container">
									  <span class="label label-primary pull-right">4</span>
									  </span>
                                    </a>
									<ul class="treeview-menu">
										<li><a href="<?=base_url()?>admin/Siparisler/liste/yeni"><i class="glyphicon glyphicon-flag"></i> Yeni</a></li>
										<li><a href="<?=base_url()?>admin/Siparisler/liste/onayli"><i class="glyphicon glyphicon-thumbs-up"></i> Onaylananlar</a></li>
										<li><a href="<?=base_url()?>admin/Siparisler/liste/Iptal"><i class="glyphicon glyphicon-remove-sign"></i> İptal Edilenler</a></li>
										<li><a href="<?=base_url()?>admin/Siparisler/liste/kargoda"><i class="glyphicon glyphicon-map-marker"></i> Kargodakiler</a></li>
										<li><a href="<?=base_url()?>admin/Siparisler/liste/tamamlandi"><i class="glyphicon glyphicon-ok"></i> Tamamlananlar</a></li>
									</ul>
                                  </li> 
                                   
                                  <li class="">
                                    <a href="<?=base_url()?>admin/mesajlar">
                                     <i class="glyphicon glyphicon-pencil"></i>
                                      <span class="link-title">Müşteri Mesajları</span>
                                    </a>
                                   </li> 
                                 
                                  <li class="nav-divider"></li>
                                  <li>
                                    <a href="<?=base_url()?>admin/ayarlar">
                                      <i class="glyphicon glyphicon-cog"></i>
                                      <span class="link-title"> Ayarlar</span>
                                    </a>
                                  </li>
                                  <li>
                                    <a href="<?=base_url()?>admin/adminler">
                                      <i class="glyphicon glyphicon-star"></i>
                                      <span class="link-title">Adminler</span>
                                    </a>
                                    <ul class="collapse">
                                      
                                      
                                    </ul>
                                  </li>
								  <li class="nav-divider"></li>
								  
								
                        </ul>
						<div class="bg-dark dk"><br><br><br><br><br><br><br><br><br><br></div>

						</div>
                        <!-- /#menu -->
                    </div>
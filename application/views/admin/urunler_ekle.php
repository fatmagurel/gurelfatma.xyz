<?php
		$this->load->view('admin\_header');
		$this->load->view('admin\_sidebar');
?>
<!-- /#left -->
                <div id="content">
                    <div class="outer">
                        <div class="inner bg-light lter">
                            &nbsp;
							<h4>Ürün Ekleme</h4><br><br>
						<fieldset class="step" id="last">
                        <h4 class="text-primary pull-right">Ürün Bilgileri</h4>
                        <form class="" method="post" action="<?=base_url()?>admin/urunler/ekle_kaydet">
						<div class="clearfix"></div>
                        <div class="form-group">
                            <label for="username" class="control-label col-lg-4">Ürün Adı</label>

                            <div class="col-lg-8">
                                <input type="text" name="adi" placeholder="Ürün Adı"  class="form-control">
                            </div>
                        </div>   
						&nbsp
						
						<div class="form-group">
                            <label for="pass" class="control-label col-lg-4">Kategori</label>
						
                            <div class="col-lg-8">
                                <select data-placeholder="Kategori seçiniz..." name="kategori" class="form-control chzn-select" tabindex="2">
									<option>Kategori seçiniz...</option>
									<option>Giyim</option>
									<option>Ayakkabı</option>
									<option>Elektronik</option>
									<option>Ev Gereçleri</option>
									<option>Saat</option>
									<option>Televizyon</option>
									<option>Bilgisayar</option>
									<option>Dizüstü Bilgisayar</option>
									<option>Masaüstü Bilgisayar</option>
									<option>Akıllı Telefon</option>
									<option>Masa Telefonu</option>
									<option>Telefon</option>
									
								</select>	
							</div> 
						</div>
						&nbsp
						
						<div class="form-group">
                            <label for="username" class="control-label col-lg-4">A.Fiyat</label>

                            <div class="col-lg-8">
                                <input type="text" name="afiyat" placeholder="A.Fiyatı"  class="form-control">
                            </div>
                        </div>
						&nbsp
						
						
						<div class="form-group">
                            <label for="username" class="control-label col-lg-4">S.Fiyat</label>

                            <div class="col-lg-8">
                                <input type="text" name="sfiyat" placeholder="S.Fiyatı"  class="form-control">
                            </div>
                        </div>
						&nbsp
						
						<div class="form-group">
                            <label for="username" class="control-label col-lg-4">Stok</label>

                            <div class="col-lg-8">
                                <input type="text" name="stok" placeholder="Stok"  class="form-control">
                            </div>
                        </div>
						&nbsp
						
						<div class="clearfix"></div>
                        <div class="form-group">
                            <label for="username" class="control-label col-lg-4">Ürün Resmini Yükle</label>
                            <div class="col-lg-8">
                                <input type="file" name="resim" placeholder="Yükleme için gözat" id="username" class="form-control">
                            </div>
                        </div>
						&nbsp
						
						<div class="form-group">
                            <label for="pass" class="control-label col-lg-4">Durum</label>
						
                            <div class="col-lg-8">
                                <select data-placeholder="Durum seçiniz..." name="durum" class="form-control chzn-select" tabindex="2">
									<option>Durum seçiniz...</option>
									<option>Aktif</option>
									<option>Pasif</option>
								</select>	
							</div>
						</div>
						<br><br>
						
                        &nbsp
						
							
							<div  class="box-footer">
							<div style="float:left">
                      
                     	</div>
						<div style="float:right">
						<button align="right" type="submit" class="btn btn-primary">KAYDET</button>
						</div>
					</div>
                    </form>    
						
                    </fieldset>
								
							
					
						
						
					
					
						</div>	
                        <!-- /.inner -->
						
                    </div>
					
                    <!-- /.outer -->
                </div>
                <!-- /#content -->

                    <div id="right" class="onoffcanvas is-right is-fixed bg-light" aria-expanded=false>
                        <a class="onoffcanvas-toggler" href="#right" data-toggle=onoffcanvas aria-expanded=false></a>
                        <br>
                        <br>
                        <div class="alert alert-danger">
                            <button type="button" class="close" data-dismiss="alert">&times;</button>
                            <strong>Warning!</strong> Best check yo self, you're not looking too good.
                        </div>
                        <!-- .well well-small -->
                        <div class="well well-small dark">
                            <ul class="list-unstyled">
                                <li>Visitor <span class="inlinesparkline pull-right">1,4,4,7,5,9,10</span></li>
                                <li>Online Visitor <span class="dynamicsparkline pull-right">Loading..</span></li>
                                <li>Popularity <span class="dynamicbar pull-right">Loading..</span></li>
                                <li>New Users <span class="inlinebar pull-right">1,3,4,5,3,5</span></li>
                            </ul>
                        </div>
                        <!-- /.well well-small -->
                        <!-- .well well-small -->
                        <div class="well well-small dark">
                            <button class="btn btn-block">Default</button>
                            <button class="btn btn-primary btn-block">Primary</button>
                            <button class="btn btn-info btn-block">Info</button>
                            <button class="btn btn-success btn-block">Success</button>
                            <button class="btn btn-danger btn-block">Danger</button>
                            <button class="btn btn-warning btn-block">Warning</button>
                            <button class="btn btn-inverse btn-block">Inverse</button>
                            <button class="btn btn-metis-1 btn-block">btn-metis-1</button>
                            <button class="btn btn-metis-2 btn-block">btn-metis-2</button>
                            <button class="btn btn-metis-3 btn-block">btn-metis-3</button>
                            <button class="btn btn-metis-4 btn-block">btn-metis-4</button>
                            <button class="btn btn-metis-5 btn-block">btn-metis-5</button>
                            <button class="btn btn-metis-6 btn-block">btn-metis-6</button>
                        </div>
                        <!-- /.well well-small -->
                        <!-- .well well-small -->
                        <div class="well well-small dark">
                            <span>Default</span><span class="pull-right"><small>20%</small></span>
                        
                            <div class="progress xs">
                                <div class="progress-bar progress-bar-info" style="width: 20%"></div>
                            </div>
                            <span>Success</span><span class="pull-right"><small>40%</small></span>
                        
                            <div class="progress xs">
                                <div class="progress-bar progress-bar-success" style="width: 40%"></div>
                            </div>
                            <span>warning</span><span class="pull-right"><small>60%</small></span>
                        
                            <div class="progress xs">
                                <div class="progress-bar progress-bar-warning" style="width: 60%"></div>
                            </div>
                            <span>Danger</span><span class="pull-right"><small>80%</small></span>
                        
                            <div class="progress xs">
                                <div class="progress-bar progress-bar-danger" style="width: 80%"></div>
                            </div>
                        </div>
                    </div>
                    <!-- /#right -->
            </div>
<?php
		$this->load->view('admin\_footer');
?>			
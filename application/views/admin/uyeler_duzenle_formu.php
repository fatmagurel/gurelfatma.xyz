<?php
		$this->load->view('admin\_header');
		$this->load->view('admin\_sidebar');
?>
<!-- /#left -->
                <div id="content">
                    <div class="outer">
                        <div class="inner bg-light lter">
                            &nbsp;
							<h4>Üye Düzenleme</h4><br><br>
						<fieldset class="step" id="last">
                        <h4 class="text-primary pull-right">Üye Bilgileri</h4>
                        <form class="" method="post" action="<?=base_url()?>admin/uyeler/guncelle/<?=$veri[0]->Id?>">
						<div class="clearfix"></div>
                        <div class="form-group">
                            <label for="username" class="control-label col-lg-4">Kullanıcı Adı</label>

                            <div class="col-lg-8">
                                <input type="text" value="<?=$veri[0]->adsoy?>" name="adsoy" placeholder="Kullanıcı Adı" id="username" class="form-control">
                            </div>
                        </div>
                        <br><br>
                        <div class="form-group">
                            <label for="pass" class="control-label col-lg-4">Şifre</label>

                            <div class="col-lg-8">
                                <input type="password" value="<?=$veri[0]->sifre?>" name="sifre" placeholder="Kullanıcı sifresi" id="pass" class="form-control">
                            </div>
                        </div>
                        <br><br>
						<div class="form-group">
                            <label for="pass" class="control-label col-lg-4">Telefon</label>

                            <div class="col-lg-8">
                                <input type="text" name="tel" value="<?=$veri[0]->tel?>" placeholder="Telefon" id="pass" class="form-control">
                            </div>
                        </div>
						<br><br>
						<div class="form-group">
                            <label for="pass" class="control-label col-lg-4">Adres</label>

                            <div class="col-lg-8">
                                <input type="text" name="adres" value="<?=$veri[0]->adres?>"  placeholder="Adres" id="pass" class="form-control">
                            </div>
                        </div>
						<br><br>
						<div class="form-group">
                            <label for="pass" class="control-label col-lg-4">Şehir</label>

                            <div class="col-lg-8">
                                <select data-placeholder="Şehir seçiniz..."  name="sehir" class="form-control chzn-select" tabindex="2">
    
    <option><?=$veri[0]->sehir?></option>
	<option>Şehir seçiniz...</option>
    <option>Adana</option>
    <option>Adıyaman</option>
    <option>Afyonkarahisar</option>
    <option>Ağrı</option>
	<option>Aksaray</option>
    <option>Amasya</option>
    <option>Ankara</option>
    <option>Antalya</option>
	<option>Ardahan</option>
    <option>Artvin</option>
    <option>Aydın</option>
    <option>Balıkesir</option>
	<option>Bartın</option>
	<option>Batman</option>
	<option>Bayburt</option>
    <option>Bilecik</option>
    <option>Bingöl</option>
    <option>Bitlis</option>
    <option>Bolu</option>
    <option>Burdur</option>
    <option>Bursa</option>
    <option>Çanakkale</option>
    <option>Çankırı</option>
    <option>Çorum</option>
    <option>Denizli</option>
    <option>Diyarbakır</option>
	<option>Düzce</option>
    <option>Edirne</option>
    <option>Elazığ</option>
    <option>Erzincan</option>
    <option>Erzurum</option>
    <option>Eskişehir</option>
    <option>Gaziantep</option>
    <option>Giresun</option>
    <option>Gümüşhane</option>
    <option>Hakkâri</option>
    <option>Hatay</option>
	<option>Iğdır</option>
    <option>Isparta</option>
    <option>İstanbul</option>
    <option>İzmir</option>
	<option>Kahramanmaraş</option>
	<option>Karabük</option>
	<option>Karaman</option>
	<option>Kars</option>
    <option>Kastamonu</option>
    <option>Kayseri</option>
	<option>Kırıkkale</option>
    <option>Kırklareli</option>
    <option>Kırşehir</option>
	<option>Kilis</option>
    <option>Kocaeli</option>
    <option>Konya</option>
    <option>Kütahya</option>
    <option>Malatya</option>
    <option>Manisa</option>
    <option>Mardin</option>
	<option>Mersin</option>
    <option>Muğla</option>
    <option>Muş</option>
    <option>Nevşehir</option>
    <option>Niğde</option>
    <option>Ordu</option>
	<option>Osmaniye</option>
    <option>Rize</option>
    <option>Sakarya</option>
    <option>Samsun</option>
    <option>Siirt</option>
    <option>Sinop</option>
    <option>Sivas</option>
	<option>Şanlıurfa</option>
	<option>Şırnak</option>
    <option>Tekirdağ</option>
    <option>Tokat</option>
    <option>Trabzon</option>
    <option>Tunceli</option>
    <option>Uşak</option>
    <option>Van</option>
	<option>Yalova</option>
    <option>Yozgat</option>
    <option>Zonguldak</option>
</select> 
                            </div>
                        </div>
						<br><br>
						<div class="form-group">
                            <label for="pass" class="control-label col-lg-4">Durum</label>
						
                            <div class="col-lg-8">
                                <select data-placeholder="Yetki seçiniz..."  name="durum" class="form-control chzn-select" tabindex="2">
									<option><?=$veri[0]->durum?></option>
									<option>Durum seçiniz...</option>
									<option>Aktif</option>
									<option>Pasif</option>
								</select>	
							</div>
						</div>
						<br><br>
						<div class="form-group">
                            <label for="pass" class="control-label col-lg-4">Yetki</label>
						
                            <div class="col-lg-8">
                                <select data-placeholder="Yetki seçiniz..." name="yetki" class="form-control chzn-select" tabindex="2">
									<option><?=$veri[0]->yetki?></</option>
									<option>Yetki seçiniz...</option>
									<option>Admin</option>
									<option>Global Moderatör</option>
									<option>Moderatör</option>
									<option>Özel Yetkiler</option>
									<option>Üye</option>
									
                        <div class="form-group">
                            
                                <div class="checkbox">
                                <label>
                                    <input class="uniform" type="checkbox" value="option2" > Beni Hatırla
                                </label>
                            </div>
                            </div>
							
							<div  class="box-footer">
							<div style="float:left">
                      
                     	</div>
						<div style="float:right">
						<button align="right" type="submit" class="btn btn-primary">GÜNCELLE</button>
						</div>
					</div>
                    </form>    
					
					
					
						
                    </fieldset>
								</select>
							</div>
					
						</div>
						
					
					
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
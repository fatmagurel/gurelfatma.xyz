<?php
		$this->load->view('admin\_header');
		$this->load->view('admin\_sidebar');
?>
<!-- /#left -->
                <div id="content">
                    <div class="outer">
                        <div class="inner bg-light lter">
                            &nbsp;
							<h4>Ürünler Düzenleme Menüsü</h4><br><br>
						<fieldset class="step" id="last">
                        <h4 class="text-primary pull-right">Ürün Bilgileri</h4>
                        <form class="" method="post" action="<?=base_url()?>admin/urunler/guncelle/<?=$veri[0]->Id?>">
						<div class="clearfix"></div>
                        <div class="form-group">
                            <label for="username" class="control-label col-lg-4">Adı</label>

                            <div class="col-lg-8">
                                <input type="text" value="<?=$veri[0]->adi?>" name="adi" placeholder="Ürün Adı" id="username" class="form-control">
                            </div>
                        </div>
                        &nbsp
						
						<div class="form-group">
                            <label for="pass" class="control-label col-lg-4">Açıklama</label>

                            <div class="col-lg-8">
                                <textarea id="ckeditor" class="ckeditor" name="aciklama" rows=10 cols=100><?=$veri[0]->aciklama?></textarea>
                            </div>
                        </div>
						&nbsp
						<div class="form-group">
                            <label for="pass" class="control-label col-lg-4">Kategori</label>

                            <div class="col-lg-8">
                                <select name="kategori" class="form-control chzn-select" tabindex="2">
    
    <option value="<?=$veri[0]->kategori?>"><?=$veri[0]->katadi?></option>
	<?php foreach($veriler as $rs) {?>
		<option value="<?=$rs->Id?>"><?=$rs->adi?></option>
	<?php }?>
</select> 

                            </div>
                        </div>
						&nbsp
						
						<div class="clearfix"></div>
                        <div class="form-group">
                            <label for="username" class="control-label col-lg-4">A.Fiyat</label>

                            <div class="col-lg-8">
                                <input type="text" value="<?=$veri[0]->afiyat?>" name="afiyat" class="form-control">
                            </div>
                        </div>
                        &nbsp
						
						<div class="clearfix"></div>
                        <div class="form-group">
                            <label for="username" class="control-label col-lg-4">S.Fiyat</label>

                            <div class="col-lg-8">
                                <input type="text" value="<?=$veri[0]->sfiyat?>" name="sfiyat" class="form-control">
                            </div>
                        </div>
                        &nbsp
						
						<div class="form-group">
                            <label for="pass" class="control-label col-lg-4">Durum</label>
						
                            <div class="col-lg-8">
                                <select name="durum" class="form-control chzn-select" tabindex="2">
									<option><?=$veri[0]->durum?></option>
									
									<option>Aktif</option>
									<option>Pasif</option>
								</select>	&nbsp
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

<script src="<?=base_url()?>assets/lib/jquery/jquery.js"></script>

                    <script src="//cdnjs.cloudflare.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js"></script>
                    <script src="https://cdnjs.cloudflare.com/ajax/libs/ckeditor/4.5.10/ckeditor.js"></script>
                    <script src="https://cdnjs.cloudflare.com/ajax/libs/epiceditor/0.2.2/js/epiceditor.min.js"></script>

            <!--Bootstrap -->
            <script src="<?=base_url()?>assets/lib/bootstrap/js/bootstrap.js"></script>
            <!-- MetisMenu -->
            <script src="<?=base_url()?>assets/lib/metismenu/metisMenu.js"></script>
            <!-- onoffcanvas -->
            <script src="<?=base_url()?>assets/lib/onoffcanvas/onoffcanvas.js"></script>
            <!-- Screenfull -->
            <script src="<?=base_url()?>assets/lib/screenfull/screenfull.js"></script>

                    <script src="<?=base_url()?>assets/lib/bootstrap3-wysihtml5-bower/dist/bootstrap3-wysihtml5.all.min.js"></script>
                    <script src="<?=base_url()?>assets/lib/pagedown-bootstrap/js/jquery.pagedown-bootstrap.combined.min.js"></script>

            <!-- Metis core scripts -->
            <script src="<?=base_url()?>assets/js/core.js"></script>
            <!-- Metis demo scripts -->
            <script src="<?=base_url()?>assets/js/app.js"></script>

                <script>
                    $(function() {
						CKEDITOR.REPLACE("aciklama")
                      $('.textarea').formWysiwyg("aciklama")
					  
                    });
                </script>

            <script src="assets/js/style-switcher.js"></script>
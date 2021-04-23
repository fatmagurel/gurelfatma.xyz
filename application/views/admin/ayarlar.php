<?php
		$this->load->view('admin\_header');
		$this->load->view('admin\_sidebar');
?>
<script src="<?=base_url()?>assets/lib/pagedown-bootstrap/js/jquery.pagedown-bootstrap.combined.min.js"></script>
<!-- /#left -->

                    <script src="https://cdnjs.cloudflare.com/ajax/libs/ckeditor/4.5.10/ckeditor.js"></script>
                 
                <div id="content">
				
                    <div class="outer">
					
                        <div class="inner bg-light lter">
                            &nbsp;
							<div class="text-primary pull-right" >
												<h2><span class="glyphicon glyphicon-cog"></span>Site Ayarları</h2>
												<br>
											</div>
<div class="page-content-wrap">
					<div class="row">
						<div class="col-md-12">
							<div class="panel panel-default">
								<!-- START CONTENT FRAME TOP -->
								
								<div class="panel-body panel-body-table">
								
									<div class="nav-tabs-custom">
										<div class="fc-toolbar">
											<br>
											<ul class="nav nav-tabs">
												<li class="active"><a href="#genel" data-toggle="tab" aria-expanded="true">Genel</a></li>
												<li class=""><a href="#email" data-toggle="tab" aria-expanded="false">Email</a></li>
												<li class=""><a href="#sosyal" data-toggle="tab" aria-expanded="false">Sosyal</a></li>
												<li class=""><a href="#hakkimizda" data-toggle="tab" aria-expanded="false">Hakkımızda</a></li>
												<li class=""><a href="#iletisim" data-toggle="tab" aria-expanded="false">İletişim</a></li>
											</ul>
										</div>
										<form method="post" class="form-horizontal" action="<?=base_url()?>admin/ayarlar/ayarlar_guncelle/<?=$veri[0]->Id?>">       
										<div class="tab-content">
											<div class="tab-pane active" id="genel">
												<div class="panel-body">                   
												<div class="form-group">
													<label class="col-md-3 control-label">Adı:</label>
													<div class="col-md-6 col-xs-12">
														<input type="text" class="form-control" value="<?=$veri[0]->adi?>" name="adi"/>
													</div>
												</div> 
												<div class="form-group">
													<label class="col-md-3 control-label">Açıklama:</label>
													<div class="col-md-6 col-xs-12">
														<input type="text" class="form-control" value="<?=$veri[0]->description?>" name="description"/>
													</div>
												</div>
												<div class="form-group">
													<label class="col-md-3 control-label">Anahtar Kelimeler:</label>
													<div class="col-md-6 col-xs-12">
														<input type="text" class="form-control" value="<?=$veri[0]->keywords?>" name="keywords"/>
													</div>
												</div>
												<div class="form-group">
													<label class="col-md-3 col-xs-12 control-label" >Adres:</label>
													<div class="col-md-6 col-xs-12">
														<input type="text" class="form-control" value="<?=$veri[0]->adres?>" name="adres"/>
													</div>
												</div>    
												<div class="form-group">
													<label class="col-md-3 control-label">Telefon:</label>
													<div class="col-md-6 col-xs-12">
														<input type="text" class="form-control" value="<?=$veri[0]->tel?>" name="tel"/>
													</div>
												</div> 
												<div class="form-group">
													<label class="col-md-3 control-label">Şehir:</label>
													<div class="col-md-6 col-xs-12">
														<input type="text" class="form-control" value="<?=$veri[0]->sehir?>" name="sehir"/>
													</div>
												</div>	
												</div>
										    </div>
											<div class="tab-pane" id="email">
												<div class="panel-body">                       
												<div class="form-group">
													<label class="col-md-3 control-label">Smtp Server:</label>
													<div class="col-md-6 col-xs-12">
														<input type="text" class="form-control" value="<?=$veri[0]->smtpserver?>" name="smtpserver"/>
													</div>
												</div> 
												<div class="form-group">
													<label class="col-md-3 control-label">Smtp Email:</label>
													<div class="col-md-6 col-xs-12">
														<input type="text" class="form-control" value="<?=$veri[0]->smtpemail?>" name="smtpemail"/>
													</div>
												</div>
												<div class="form-group">
													<label class="col-md-3 control-label">Port:</label>
													<div class="col-md-6 col-xs-12">
														<input type="text" class="form-control" value="<?=$veri[0]->smtpport?>" name="smtpport"/>
													</div>
												</div>
												<div class="form-group">
													<label class="col-md-3 control-label">Şifre:</label>
													<div class="col-md-6 col-xs-12">
														<input type="password" class="form-control" value="<?=$veri[0]->password?>" name="password"/>
													</div>
												</div> 	
												</div>
											</div>
											<div class="tab-pane" id="sosyal">
												<div class="panel-body">                        
												<div class="form-group">
													<label class="col-md-3 control-label">Facebook:</label>
													<div class="col-md-6 col-xs-12">
														<input type="text" class="form-control" value="<?=$veri[0]->facebook?>" name="facebook"/>
													</div>
												</div> 
												<div class="form-group">
													<label class="col-md-3 control-label">Instagram:</label>
													<div class="col-md-6 col-xs-12">
														<input type="text" class="form-control" value="<?=$veri[0]->instagram?>" name="instagram"/>
													</div>
												</div>
												<div class="form-group">
													<label class="col-md-3 control-label">Twitter:</label>
													<div class="col-md-6 col-xs-12">
														<input type="text" class="form-control" value="<?=$veri[0]->twitter?>" name="twitter"/>
													</div>
												</div>
												<div class="form-group">
													<label class="col-md-3 control-label">Pinterest:</label>
													<div class="col-md-6 col-xs-12">
														<input type="text" class="form-control" value="<?=$veri[0]->pinterest?>" name="pinterest"/>
													</div>
												</div> 		
												</div>
											</div>
											
										
										
										
											<div class="tab-pane" id="hakkimizda">
												<div class="panel-body">
												<h3><div class="glyphicon glyphicon-bookmark"> Hakkımızda</div></h3><br>

												<textarea name="ckeditor" class="ckeditor" id="ckeditor" rows=10 cols=100><?=$veri[0]->hakkimizda?></textarea>
												<script>
                    
													CKEDITOR.REPLACE("ckeditor");
					
												</script>
                            
            
												</div>
											</div>
											<div class="tab-pane" id="iletisim">
												<div class="panel-body">
												<h3><div class="glyphicon glyphicon-phone-alt"> İletişim</div></h3><br>
												<textarea name="ckeditor1" class="ckeditor" id="ckeditor1" rows=10 cols=100><?=$veri[0]->iletisim?></textarea>
												<script>
                    
													CKEDITOR.REPLACE("ckeditor1");
                 
												</script>
												</div>
											</div>
									
										<hr>
										</div>
										<div class="">
											<button class="btn btn-primary pull-right">GÜNCELLE</button>
										</div>
										</form>
									</div>
								</div>
							</div>
							</div>
						</div>
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
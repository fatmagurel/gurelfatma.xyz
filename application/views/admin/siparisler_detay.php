<?php
		$this->load->view('admin\_header');
		$this->load->view('admin\_sidebar');
?>
<!-- /#left -->
                <div id="content">
                    <div class="outer">
                        <div class="inner bg-light lter">
                            &nbsp;	
							<h4>Sipariş Detay Listesi</h4><strong><i><p class="text-success"><?=$this->session->flashdata("mesaj")?></p></i></strong><br>
				
	

<div class="col-lg-6 ui-sortable" style="width: auto">
        <div class="box ui-sortable-handle" style="position: relative">
            <header>
                <button type="button"  class="btn btn-info btn-xs btn-grad"><h5><a href="<?=base_url()?>admin/urunler/ekle">
				<font color="#fff"><i class="glyphicon glyphicon-user"></i>  Sipariş Ekle</font></a></h5></button>
                <div class="toolbar">
                    <div class="btn-group">
                        <a href="#stripedTable" data-toggle="collapse" class="btn btn-default btn-sm minimize-box" aria-expanded="true">
                            <i class="glyphicon glyphicon-chevron-up"></i>
                        </a>
                        <a class="btn btn-danger btn-sm close-box"><i class="glyphicon glyphicon-remove"></i></a>
                    </div>


                </div>
            </header>
            <div id="stripedTable" class="body collapse in" aria-expanded="true" style="">
                <table class="table table-striped responsive-table">
                    <thead>
                        <tr>
                            <th style="width: 10px">Nr</th>
                           
                            <th>Adı</th>
                            <th>Fiyat</th>
							<th>Miktar</th>
							<th>Tutar</th>
							<th>İptal</th>
                        </tr>
						<?php
						$rn=0;
						$toplam=0;
						foreach($veriler as $rs)
						{
							$rn++;
							$toplam+=$rs->tutar;
						?>
						<tr>
                            <td style="width: 10px"><?=$rn?></td>
                            <td><?=$rs->adi?></td>
                            <td><?=$rs->fiyat?> TL</td>
                            <td><?=$rs->adet?> TL</td>
							<td><?=$rs->tutar?> TL</td>
							<td><a href="#" onclick="return confirm ('İptal Edilecek Emin Misiniz?')" 
							class="btn btn-danger btn-sm btn-round btn-line"><i class="glyphicon glyphicon-trash"></i>İptal</a></td>
							
							</tr>
						<?php
						}
						?>
							
                    </thead>
				</table>
				Sipariş Toplamı: <?=$toplam?> TL
				<form method="post" action="<?=base_url()?>admin/siparisler/guncelle/<?=$siparisid?>">
			
				Kargo Bilgileri: <input class="form-control" value="<?=$veri[0]->kargo?>" type="text" name="kargo"><br>
				İşlem:
				<select name="siparisdurumu"class="form-control">
					<option><?=$veri[0]->siparisdurumu?></option>
					<option>Onaylandı</option>
					<option>Iptal</option>
					<option>Kargoda</option>
					<option>Tamamlandı</option>
				</select>
				<br>
				Açıklama:
				
				<textarea class="form-control" name="aciklama" rows=5 cols=100><?=$veri[0]->siparisdurumu?></textarea><br>
				<button type="submit" class="shopBtn" value="Sepete Ekle">GÜNCELLE</button>
				</form>
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
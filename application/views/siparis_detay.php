<?php
$this->load->view('_header');
$this->load->view('_uyesidebar');


?>
<div class="col-sm-9 padding-right">
<ul class="breadcrumb">
	<li><a href="<?=base_url()?>home">Home</a><span class="divider"></span></li>
	<li class="active">Siparis Detayları Sayfası</li>
</ul>
					<div class="page-head_agile_info_w3l">
		<div class="container">
			<h3>SİPARİŞ DETAYLARI </h3>
			<!
	   <!--//w3_short-->
	</div>
</div>

  <!-- banner-bootom-w3-agileits -->
<div class="banner-bootom-w3-agileits">
	<div class="container">
	<div class="well well-small">
		<?php if($this->session->flashdata("mesaj")){?>
		<div class="callout callout-info">
			<p><?=$this->session->flashdata("mesaj")?></p>
		</div>
		<?php }?>
		<table class="table table-bordered">
		<tbody>
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
				<td><?=$rs->adet?></td>
				<td><?=$rs->tutar?>TL</td>
				<td><a href="<?=base_url()?>uye/siparis_iptal/<?=$rs->Id?>" onclick="return confirm('İptal Edilecek Emin Misin?')" class="btn btn-block btn-danger btn-xs"><i class="fa fa-remove"></i>İptal</a>
				</td>
			</tr>
		<?php 
		}?>
		</tbody>
		</table>
		Sipariş Toplamı :<?=$toplam?>TL
	</div>
	</div>
 </div>
<!--//single_page-->
			
					
					
					
					
</div><!--/recommended_items-->
					
				</div>
	</div>
		</div>
	</section>				
<?php
		$this->load->view('_footer');
?>
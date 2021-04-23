<?php
$this->load->view('_header');
$this->load->view('_uyesidebar');
?>

<div class="col-sm-9 padding-right">
<ul class="breadcrumb">
	<li><a href="<?=base_url()?>">Home</a><span class="divider"></span></li>
	<li class="active">Sepetim</li>
</ul>

<div class="well well-small">
	<?php if ($this->session->flashdata("mesaj")) {?>
	<div class="callout callout-info">
		<p><?=$this->session->flashdata("mesaj")?></p>
	</div>
	<?php }?>
	
	<table class="table table-bordered">
		<tbody>
		<tr>
			<th style="width:10px">Nr</th>
			<th>Ürün</th>
			<th>Adı</th>
			<th>Fiyat</th>
			<th>Miktar</th>
			<th>Tutar</th>
			<th>Sil</th>
			</tr>
		<?php
		$rn=0;
		$toplam=0;
		foreach ($veriler as $rs)
		{
			$rn++;
			$tutar=$rs->satfiyat*$rs->adet;
			$toplam+=$tutar;
		?>
				<tr>
					<td style="width:10px"><?=$rn?></td>
					<td>
					<a href="<?=base_url()?>home/urundetay/<?=$rs->urun_id?>">
					<img src="<?=base_url()?>uploads/<?=$rs->urunresim?>" height="30" width="100"/>
					</a>
					</td>
					<td><?=$rs->urunadi?></td>
					<td><?=$rs->satfiyat?> TL</td>
					<td><?=$rs->adet?></td>
					<td><?=($rs->satfiyat*$rs->adet)?> TL *</td>
					<td><a href="<?=base_url()?>uye/sepetsil/<?=$rs->Id?>" onclick="return confirm('Silmek istediğinizden emin misiniz?')"
					class="btn btn-block btn-danger btn-xs"><i class="fa fa-remove"></i>Sil</a></td>
				</tr>
		<?php
		}
		?>
		</tbody></table>
		Toplam:<?=$toplam?>
	<form method="post" action="<?=base_url()?>uye/satinal">
		<input type="hidden" name="toplam" value="<?=$toplam?>">
		<button type="submit" class="shopBtn" value="Sepete Ekle"> Satınal</button>
	</form>
</div>
				
				</div>
	</div>
		</div>
	</section>	
	<?php
$this->load->view('_footer');

?>
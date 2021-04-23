<section id="slider"><!--slider-->
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<div id="slider-carousel"  class="carousel slide" data-ride="carousel">
						
						
						<div class="carousel-inner">
						
							<?php
							$say=0;
							$aktf=null;
							foreach($kampanya as $rs)
							{
								$say++;
								if($say==1)
									$aktf="active";
								else
									$aktf=null;
								?>
							<div class="item <?=$aktf?>">
							<a href="<?=base_url()?>home/urundetay/<?=$rs->Id?>">
							<center><img style="width:30%" src="<?=base_url()?>uploads/<?=$rs->resim?>" alt=""/></center></a>
								<div class="carousel-caption">
									<h4><?=$rs->adi?></h4>
									<p><span><?=$rs->description?></span></p>
								</div>
							</div>
							<?php	}?>
						
							
							
							
						</div>
						
						<a href="#slider-carousel" class="left control-carousel hidden-xs" data-slide="prev">
							<i class="fa fa-angle-left"></i>
						</a>
						<a href="#slider-carousel" class="right control-carousel hidden-xs" data-slide="next">
							<i class="fa fa-angle-right"></i>
						</a>
					</div>
					
				</div>
			</div>
		</div>
	</section>
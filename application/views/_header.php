<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?=$veri[0]->description?>">
	<meta name="keywords" content="<?=$veri[0]->keywords?>">
    <meta name="author" content="">
    <title><?=$sayfa?> <?=$veri[0]->adi?></title>
    <link href="<?=base_url()?>/assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?=base_url()?>/assets/css/font-awesome.min.css" rel="stylesheet">
    <link href="<?=base_url()?>/assets/css/prettyPhoto.css" rel="stylesheet">
    <link href="<?=base_url()?>/assets/css/price-range.css" rel="stylesheet">
    <link href="<?=base_url()?>/assets/css/animate.css" rel="stylesheet">
	<link href="<?=base_url()?>/assets/css/main.css" rel="stylesheet">
	<link href="<?=base_url()?>/assets/css/responsive.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="<?=base_url()?>/assets/js/html5shiv.js"></script>
    <script src="<?=base_url()?>/assets/js/respond.min.js"></script>
    <![endif]-->       
    <link rel="shortcut icon" href="<?=base_url()?>/assets/images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?=base_url()?>/assets/images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?=base_url()?>/assets/images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?=base_url()?>/assets/images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="<?=base_url()?>/assets/images/ico/apple-touch-icon-57-precomposed.png">
</head><!--/head-->

<body>

<?php
	$query=$this->db->query("SELECT COUNT(Id) AS say FROM sepet");
	$sepet=$query->result();
?>
	<header id="header"><!--header-->
		<div class="header_top"><!--header_top-->
			<div class="container">
				<div class="row">
					<div class="col-sm-6">
						<div class="contactinfo">
							<ul class="nav nav-pills">
								<li><a href="#"><i class="fa fa-phone"></i> +2 95 01 88 821</a></li>
								<li><a href="mailto:fatma.gurel.0@gmail.com" target="_blank"><i class="fa fa-envelope"></i> fatma.gurel.0@gmail.com</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-6">
						<div class="social-icons pull-right">
							<ul class="nav navbar-nav">
								<li><a href="https://www.facebook.com/eshopper254/"target="_blank"><i class="fa fa-facebook"></i></a></li>
								<li><a href="https://twitter.com/EBachDonnard/status/912774394958811136" target="_blank"><i class="fa fa-twitter"></i></a></li>
								<li><a href="https://www.linkedin.com/company/aliusaexpress" target="_blank"><i class="fa fa-linkedin"></i></a></li>
								<li><a href="https://dribbble.com/shots/3753264-Attention-shoppers"target="_blank"><i class="fa fa-dribbble"></i></a></li>
								<li><a href="https://www.google.com.tr/search?q=e+shopper&safe=strict&lr=lang_tr&sa=X&ved=0ahUKEwjj64jF6MrYAhXBBSwKHbfNC2EQuAEIJQ&biw=1536&bih=759" target="_blank"><i class="fa fa-google-plus"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header_top-->
		
		<div class="header-middle"><!--header-middle-->
			<div class="container">
				<div class="row">
					<div class="col-sm-4">
						<div class="logo pull-left">
							<a href="<?=base_url()?>/home"><img src="<?=base_url()?>/assets/images/home/logo.png" alt="" /></a>
						</div>
					</div>
					<div class="col-sm-8">
						<div class="shop-menu pull-right">
							<ul class="nav navbar-nav">
								<li><a href="#"><i class="fa fa-user"></i> Account</a></li>
								<li><a href="#"><i class="fa fa-star"></i> Wishlist</a></li>
								<li><a href="checkout.html"><i class="fa fa-crosshairs"></i> Checkout</a></li>
								<li><a href="<?=base_url()?>uye/sepetim"><span class="fa fa-shopping-cart"></span> Sepetim <span class="badge badge-warning"><?=$sepet[0]->say?></span></a></li>
						
						<ul class="nav pull-right">
						
						<?php
						if($this->session->userdata("uye_session"))
						{?>
						<li class="dropdown">
							<a data-toggle="dropdown" class="dropdown-toggle" href="#"><span class="fa fa-lock"></span>
							<?=$this->session->uye_session["adsoy"]?></a>
							<ul class="dropdown-menu">
								
									<li><a href="<?=base_url()?>/uye/hesabim">Hesap Bilgileri</a></li>
									<li><a href="<?=base_url()?>/uye/sepetim">Sepetim</a></li>
									<li><a href="<?=base_url()?>/uye/siparislerim">Siparişlerim</a></li><br>
									<li><a href="<?=base_url()?>/uye/cikis">Çıkış</a></li>
							</ul>
						</li>
						<?php }
						else
						{?>
					
				
					<li class="dropdown">
					<a data-toggle="dropdown" class="dropdown-toggle" href="#"><span class="fa fa-lock"></span>Login<b class="caret"></b></a>
					<div class="dropdown-menu">
					<a href="<?=base_url()?>/uye/uye_ekle"><label class="checkbox">Yeni Üye Kaydı</label></a>
					<a href="<?=base_url()?>/uye/sifremi_unuttum"><label class="checkbox">Şifremi Unuttum</label></a>
			
					<form class="form-horizontal login" action="<?=base_url()?>/home/login" method="post">
						<div class="control-group">
							<input type="text" name="adsoy" class="form-control top" placeholder="Kullanıcı Adı" >
						</div>
						<div class="control-group">
							<input type="password" name="sifre" class="form-control top" placeholder="Şifre" >
						</div>
					<div class="control-group">
					<label class="checkbox">
						<input type="checkbox"> Beni Hatırla
					</label>
					<button class="btn btn-lg btn-primary btn-block" type="submit">Login Ol</button>
					</div>
					
					</div>
					<?php }
						?>
					</form>
					</li>			
						
						</ul>
						
						</div>
					</div>
				</div>
			</div>
		</div><!--/header-middle-->
	
		<div class="header-bottom"><!--header-bottom-->
			<div class="container">
				<div class="row">
					<div class="col-sm-9">
						<div class="navbar-header">
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
						</div>
						<div class="mainmenu pull-left">
							<ul class="nav navbar-nav collapse navbar-collapse">
							<?php
							$anasayfa=null;
							$hakkimizda=null;
							$iletisim=null;
							$bize_yazin=null;
							$uye=null;
							$sepetim=null;
							
							if($menu=="anasayfa")
								$anasayfa="active";
							if($menu=="hakkimizda")
								$hakkimizda="active";
							if($menu=="iletisim")
								$iletisim="active";
							if($menu=="bize_yazin")
								$bize_yazin="active";
							if($menu=="uye")
								$uye="active";
							if($menu=="sepetim")
								$sepetim="active";
							
							?>
							<ul class="nav navbar-nav collapse navbar-collapse">
								
								<li ><a href="<?=base_url()?>/home" class="<?=$anasayfa?>">Anasayfa</a></li>
								<li ><a href="<?=base_url()?>/home/kategoriler">Kategoriler</a></li>
								<li><a href="<?=base_url()?>/home/kampanyalar">Kampanyalar</a></li>
								<li class="dropdown"><a href="#">Shop<i class="fa fa-angle-down"></i></a>
                                    <ul role="menu" class="sub-menu">
                                        <li><a href="shop.html">Products</a></li>
										<li><a href="product-details.html">Product Details</a></li> 
										<li><a href="checkout.html">Checkout</a></li> 
										<li><a href="<?=base_url()?>uye/sepetim">Sepetim</a></li> 
										<li><a href="<?=base_url()?>/home/login" >Login</a></li> 
                                  </ul>
                                    </ul>
                                </li> 
								<li class="dropdown"><a href="#">Blog<i class="fa fa-angle-down"></i></a>
                                    <ul role="menu" class="sub-menu">
                                        <li><a href="blog.html">Blog List</a></li>
										<li><a href="blog-single.html">Blog Single</a></li>
                                    </ul>
                                </li> 
								<li><a href="<?=base_url()?>/home/hakkimizda" class="<?=$hakkimizda?>">Hakkımızda</a></li>
								<li><a href="<?=base_url()?>/home/iletisim" class="<?=$iletisim?>">İletişim</a></li>
								<li><a href="<?=base_url()?>/home/bize_yazin" class="<?=$bize_yazin?>">Bize Yazın</a></li>	
							</ul>
							
						</div>
		
        
					
					</div>
					<div class="col-sm-3">
						<div class="search_box pull-right">
							<input type="text" placeholder="Search"/>
						</div>
					</div>
				</div>
			</div><!--/header-bottom-->
	</header><!--/header-->
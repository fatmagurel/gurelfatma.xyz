<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <!--IE Compatibility modes-->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!--Mobile first-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Giriş Sayfası</title>
    
    <meta name="description" content="Free Admin Template Based On Twitter Bootstrap 3.x">
    <meta name="author" content="">
    
    <meta name="msapplication-TileColor" content="#5bc0de" />
    <meta name="msapplication-TileImage" content="<?=base_url()?>assets/admin/img/metis-tile.png" />
    
    <!-- Bootstrap -->
    <link rel="stylesheet" href="<?=base_url()?>assets/admin/lib/bootstrap/css/bootstrap.css">
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?=base_url()?>assets/admin/lib/font-awesome/css/font-awesome.css">
    
    <!-- Metis core stylesheet -->
    <link rel="stylesheet" href="<?=base_url()?>assets/admin/css/main.css">
    
    <!-- metisMenu stylesheet -->
    <link rel="stylesheet" href="<?=base_url()?>assets/admin/lib/metismenu/metisMenu.css">
    
    <!-- onoffcanvas stylesheet -->
    <link rel="stylesheet" href="<?=base_url()?>assets/admin/lib/onoffcanvas/onoffcanvas.css">
    
    <!-- animate.css stylesheet -->
    <link rel="stylesheet" href="<?=base_url()?>assets/admin/lib/animate.css/animate.css">


    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body class="login">

      <div class="form-signin">
    <div class="text-center">
        <img src="<?=base_url()?>assets/admin/img/logo.png" alt="Metis Logo">
    </div>
    <hr>
    <div class="tab-content">
        <div id="login" class="tab-pane active">
		<?php if ($this->session->flashdata("mesaj"))
		{?>
			<div class="">
				<h4><font color="#d9534f">Hata!</font></h4>
				<p><?=$this->session->flashdata("mesaj")?></p>
			</div>
		<?php } ?>
            <form action="<?=base_url()?>admin/login/login_ol" method="post">
                <p class="text-muted text-center">
                    Kullanıcı adınızı ve şifrenizi giriniz
                </p>
                <input type="text" name="adsoy" required class="form-control top" placeholder="Kullanıcı Adı" >
                <input type="password" name="sifre" required class="form-control bottom" placeholder="Şifre">
                <div class="checkbox">
		  <label>
		    <input type="checkbox"> Beni Hatırla
		  </label>
		</div>
                <button class="btn btn-lg btn-primary btn-block" type="submit">Oturum Aç</button>
            </form>
        </div>
        <div id="forgot" class="tab-pane">
            <form action="index.html">
                <p class="text-muted text-center">Geçerli Bir e-mail Giriniz</p>
                <input type="email" placeholder="mail@domain.com" class="form-control">
                <br>
                <button class="btn btn-lg btn-danger btn-block" type="submit">Şifre Kurtarma</button>
            </form>
        </div>
        <div id="signup" class="tab-pane">
            <form action="index.html">
                <input type="text" placeholder="Kullanıcı Adı" class="form-control top">
                <input type="email" placeholder="mail@domain.com" class="form-control middle">
                <input type="password" placeholder="Şifre" class="form-control middle">
                <input type="password" placeholder="Tekrar Şifre" class="form-control bottom">
                <button class="btn btn-lg btn-success btn-block" type="submit">Kayıt Ol</button>
            </form>
        </div>
    </div>
    <hr>
    <div class="text-center">
        <ul class="list-inline">
            <li><a class="text-muted" href="#login" data-toggle="tab">Giriş</a></li>
            <li><a class="text-muted" href="#forgot" data-toggle="tab">Şifremi Unuttum</a></li>
            <li><a class="text-muted" href="#signup" data-toggle="tab">Kayıt Ol</a></li>
        </ul>
    </div>
  </div>


    <!--jQuery -->
    <script src="<?=base_url()?>assets/admin/lib/jquery/jquery.js"></script>

    <!--Bootstrap -->
    <script src="<?=base_url()?>assets/admin/lib/bootstrap/js/bootstrap.js"></script>


    <script type="text/javascript">
        (function($) {
            $(document).ready(function() {
                $('.list-inline li > a').click(function() {
                    var activeForm = $(this).attr('href') + ' > form';
                    //console.log(activeForm);
                    $(activeForm).addClass('animated fadeIn');
                    //set timer to 1 seconds, after that, unload the animate animation
                    setTimeout(function() {
                        $(activeForm).removeClass('animated fadeIn');
                    }, 1000);
                });
            });
        })(jQuery);
    </script>
</body>

</html>

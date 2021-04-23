<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <!--IE Compatibility modes-->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!--Mobile first-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Blank Page</title>
    
    <meta name="description" content="Free Admin Template Based On Twitter Bootstrap 3.x">
    <meta name="author" content="">
    
    <meta name="msapplication-TileColor" content="#5bc0de" />
    <meta name="msapplication-TileImage" content="<?=base_url()?>assets/admin/img/metis-tile.png" />
    
    <!-- Bootstrap -->
    <link rel="stylesheet" href="<?=base_url()?>assets/admin/lib/bootstrap/css/bootstrap.css">
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?=base_url()?>assets/admin/lib/font-awesome/css/font-awesome.css">
    <link rel="stylesheet" href="<?=base_url()?>assets/admin/lib/bootstrap/css/bootstrap.css">
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

    <!--For Development Only. Not required -->
    <script>
        less = {
            env: "development",
            relativeUrls: false,
            rootpath: "/assets/"
        };
    </script>
    <link rel="stylesheet" href="<?=base_url()?>assets/admin/css/style-switcher.css">
    <link rel="stylesheet/less" type="text/css" href="<?=base_url()?>assets/admin/less/theme.less">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/less.js/2.7.1/less.js"></script>

  </head>

        <body class="  ">
            <div class="bg-dark dk" id="wrap">
                <div id="top">
                    <!-- .navbar -->
                    <nav class="navbar navbar-inverse navbar-static-top">
                        <div class="container-fluid">
                    
                    
                            <!-- Brand and toggle get grouped for better mobile display -->
                            <header class="navbar-header">
                    
                                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                                    <span class="sr-only">Toggle navigation</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                                <a href="index.html" class="navbar-brand"><img src="<?=base_url()?>assets/admin/img/logo.png" alt=""></a>
                    
                            </header>
                    
                    
                    
                            <div class="topnav">
                                <div class="btn-group">
                                    <a data-placement="bottom" data-original-title="Tam Ekran" data-toggle="tooltip"
                                       class="btn btn-default btn-sm" id="toggleFullScreen"><h6>
                                        <i class="glyphicon glyphicon-fullscreen"></i></h6>
                                    </a>
                                </div>
                                <div class="btn-group">
                                    <a data-placement="bottom" data-original-title="E-mail" data-toggle="tooltip"
                                       class="btn btn-default btn-sm"><h6>
                                        <i class="glyphicon glyphicon-send"></i></h6>
                                        <span class="label label-warning"></span>
                                    </a>
                                    <a data-placement="bottom" data-original-title="Messages" href="#" data-toggle="tooltip"
                                       class="btn btn-default btn-sm"><h6>
                                        <i class="glyphicon glyphicon-envelope"></i></h6>
                                        <span class="label label-danger"></span>
                                    </a>
                                    <a data-toggle="modal" data-original-title="Help" data-placement="bottom"
                                       class="btn btn-default btn-sm"
                                       href="#helpModal"><h6>
                                        <i class="glyphicon glyphicon-question-sign"></i></h6>
                                    </a>
                                </div>
                                <div class="btn-group">
                                    <a href="<?=base_url()?>admin/login/login_cik" data-toggle="tooltip" data-original-title="Çıkış" data-placement="bottom"
                                       class="btn btn-metis-1 btn-sm">
									   <h6>
                                        <i class="glyphicon glyphicon-remove-sign"></i></h6>
                                    </a>
                                </div>
                                <div class="btn-group">
                                    <a data-placement="bottom" data-original-title="Menüyü Gizle/Aç" data-toggle="tooltip"
                                       class="btn btn-primary btn-sm toggle-left" id="menu-toggle"><h6>
                                        <i class="glyphicon glyphicon-indent-left"></i></h6>
                                    </a>
								 <div class="btn-group">
                                    <a href="#right" data-toggle="onoffcanvas" class="btn btn-default btn-sm" aria-expanded="false">
                                       <h6> <span class="glyphicon glyphicon-wrench"></span></h6>
                                    </a>
								 </div>
                                </div>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            </div>
							
                    
                    
                    
                            <div class="collapse navbar-collapse navbar-ex1-collapse">
                    
                                <!-- .nav -->
                                <ul class="nav navbar-nav">
                                    <li><a href="dashboard.html">Dashboard</a></li>
                                    <li><a href="table.html">Tables</a></li>
                                    <li class='dropdown '>
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                            Form Elements <b class="caret"></b>
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li><a href="form-general.html">General</a></li>
                                            <li><a href="form-validation.html">Validation</a></li>
                                            <li><a href="form-wysiwyg.html">WYSIWYG</a></li>
                                            <li><a href="form-wizard.html">Wizard &amp; File Upload</a></li>
                                        </ul>
                                    </li>
                                </ul>
                                <!-- /.nav -->
                            </div>
                        </div>
                        <!-- /.container-fluid -->
                    </nav>
                    <!-- /.navbar -->
                        <header class="head">
                                <div class="search-bar">
                                    <form class="main-search" action="">
                                        <div class="input-group">
                                            <input type="text" class="form-control" placeholder="Live Search ...">
                                            <span class="input-group-btn">
                                                <button class="btn btn-primary btn-sm text-muted" type="button">
                                                    <i class="glyphicon glyphicon-search"></i>
                                                </button>
                                            </span>
                                        </div>
                                    </form>
                                    <!-- /.main-search -->                                </div>
                                <!-- /.search-bar -->
                            <div class="main-bar">
                             <!--   <h3>
              <i class=" glyphicon glyphicon-hand-right"></i>&nbsp;
            BENİM BLOG'UM
			<i class=" glyphicon glyphicon-hand-left"></i>&nbsp;
          </h3>-->
                            </div>
                            <!-- /.main-bar -->
                        </header>
                        <!-- /.head -->
                </div>
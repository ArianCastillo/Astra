<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>ASTRA - Galaxy of links</title>

    <!-- Bootstrap Core CSS -->
    <link href="assets/landpage/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="assets/landpage/css/grayscale.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="assets/landpage/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">

    <!-- Navigation -->
    <nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand page-scroll" href="#page-top">
                    <i class="fa fa-play-circle"></i>  <span class="light">ASTRA</span>
                </a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
                <ul class="nav navbar-nav">
                    <!-- Hidden li included to remove active class from about link when scrolled up past about section -->
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#about">About</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#features">Features</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#signup">Sign up</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Intro Header -->
    <header class="intro">
        <div class="intro-body">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <h1 class="brand-heading">ASTRA</h1>
                        <p class="intro-text">Galaxy of links</p>
                        <a href="#about" class="btn btn-circle page-scroll">
                            <i class="fa fa-angle-double-down animated"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- About Section -->
    <section id="about" class="container content-section text-center">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2">
                <h2>About ASTRA</h2>
                <p>Grayscale is a free Bootstrap 3 theme created by Start Bootstrap. It can be yours right now, simply download the template on <a href="http://startbootstrap.com/template-overviews/grayscale/">the preview page</a>. The theme is open source, and you can use it for any purpose, personal or commercial.</p>
                <p>This theme features stock photos by <a href="http://gratisography.com/">Gratisography</a> along with a custom Google Maps skin courtesy of <a href="http://snazzymaps.com/">Snazzy Maps</a>.</p>
                <p>Grayscale includes full HTML, CSS, and custom JavaScript files along with LESS files for easy customization.</p>
            </div>
        </div>
    </section>

    <!-- Download Section -->
    <section id="features" class="content-section text-center">
        <div class="download-section">
            <div class="container">
                <div class="col-lg-8 col-lg-offset-2">
                    <h2>Features</h2>
                    <div class="col-md-4">
                        <h4>Feature 1</h4>
                    </div>
                    <div class="col-md-4">
                        <h4>Feature 2</h4>
                    </div>
                    <div class="col-md-4">
                        <h4>Feature 3</h4>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="signup" class="container content-section text-center">
        <div class="row">
            <!-- <div class="col-lg-8 col-lg-offset-2">
                <h2>Contact Start Bootstrap</h2>
                <p>Feel free to email us to provide some feedback on our templates, give us suggestions for new templates and themes, or to just say hello!</p>
                <p><a href="mailto:feedback@startbootstrap.com">feedback@startbootstrap.com</a>
                </p>
                <ul class="list-inline banner-social-buttons">
                    <li>
                        <a href="https://twitter.com/SBootstrap" class="btn btn-default btn-lg"><i class="fa fa-twitter fa-fw"></i> <span class="network-name">Twitter</span></a>
                    </li>
                    <li>
                        <a href="https://github.com/IronSummitMedia/startbootstrap" class="btn btn-default btn-lg"><i class="fa fa-github fa-fw"></i> <span class="network-name">Github</span></a>
                    </li>
                    <li>
                        <a href="https://plus.google.com/+Startbootstrap/posts" class="btn btn-default btn-lg"><i class="fa fa-google-plus fa-fw"></i> <span class="network-name">Google+</span></a>
                    </li>
                </ul>
            </div> !-->
            <div class="col-lg-8 col-lg-offset-2">
                <h2>What are you waiting for?</h2>
                <h3>Sign up</h3>
                <?php echo form_open("auth/create_user");?>
                    <div class="form-group">
                      <h4><?php echo form_label('Username: ', 'username', array('class' => 'col-lg-2')); ?></h4>
                        <div class="col-lg-10">
                            <input type="text" class="form-control" id="username" name="username" value="<?php echo set_value('username') ?>">
                            <?php echo form_error('username'); ?>
                        </div>
                    </div>

                    <div class="form-group">
                      <h4><?php echo form_label('Email: ', 'email', array('class' => 'col-lg-2')); ?></h4>
                        <div class="col-lg-10">
                            <input type="text" class="form-control" id="email" name="email" value="<?php echo set_value('email') ?>">
                            <?php echo form_error('email'); ?>
                        </div>
                    </div>

                    <div class="form-group">
                      <h4><?php echo form_label('Password: ', 'password', array('class' => 'col-lg-2')); ?></h4>
                        <div class="col-lg-10">
                            <input type="text" class="form-control" id="password" name="password" value="<?php echo set_value('password') ?>">
                            <?php echo form_error('password'); ?>
                        </div>
                    </div>

                    <div class="form-group">
                      <h4><?php echo form_label('Password Confirm: ', 'password_confirm', array('class' => 'col-lg-2')); ?></h4>
                        <div class="col-lg-10">
                            <input type="text" class="form-control" id="password_confirm" name="password_confirm" value="<?php echo set_value('password_confirm') ?>">
                            <?php echo form_error('password_confirm'); ?>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-success"><span class="glyphicon glyphicon-floppy-disk"></span> Guardar</button>
                    <p><?php echo form_submit('submit', lang('create_user_submit_btn'));?></p>

                <?php echo form_close();?>
            </div>
        </div>
    </section>

    <!-- Map Section
    <div id="map"></div> -->

    <!-- Footer -->
    <footer>
        <div class="container text-center">
            <p>Copyright &copy; Your Website 2014</p>
        </div>
    </footer>

    <!-- jQuery -->
    <script src="assets/landpage/js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="assets/landpage/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="assets/landpage/js/jquery.easing.min.js"></script>

    <!-- Google Maps API Key - Use your own API key to enable the map feature. More information on the Google Maps API can be found at https://developers.google.com/maps/ -->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCRngKslUGJTlibkQ3FkfTxj3Xss1UlZDA&sensor=false"></script>

    <!-- Custom Theme JavaScript -->
    <script src="assets/landpage/js/grayscale.js"></script>

</body>

</html>

<?php
require('../vendor/autoload.php');

if(isset($_POST['login_submit'])) {
    $viewAperoPassword = '485c903c9c1fdff5c55e68555a2a6eef';
    $viewEsssenPassword = 'c0ea1b785cee9fba54efbcfa9b678eb0';

    $hashedPassword = md5($_POST['password']);
    if($hashedPassword == $viewAperoPassword) {
        $view = 'apero';
    } elseif($hashedPassword == $viewEsssenPassword) {
        $view = 'essen';
    } else {
        header("Location: index.php?wrongpassword=1");
    }
} else {
    header("Location: index.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Wedding page of Nadia und Martin">
    <meta name="author" content="Jürg Hunziker">

    <link rel="icon" sizes="192x192" href="Resources/Images/favicon.png">
    <title>Nadia & Martin heiraten!</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Custom Fonts -->
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <link href="//fonts.googleapis.com/css?family=Great+Vibes" rel="stylesheet" type="text/css">

    <!-- Page styles -->
    <link rel="stylesheet" href="Resources/Styles/wedding.css">

</head>

<body id="page-top" class="index">

<!-- loading overlay -->
<div class="loadingOverlay"><i class="fa fa-heart"></i></div>

<!-- Navigation -->
<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header page-scroll">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapsed">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand page-scroll" href="#page-top">Nadia & Martin heiraten <i class="fa fa-heart-o"></i></a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="navbar-collapsed">
            <ul class="nav navbar-nav navbar-right">
                <li class="hidden">
                    <a href="#page-top"></a>
                </li>
                <li>
                    <a class="page-scroll" href="#thatsus" title="Das sind wir!"><i class="fa fa-heart"></i><span class="visible-xs-inline"> Das sind wir!</span></a>
                </li>
                <li>
                    <a class="page-scroll" href="#information" title="Los mehr darüber"><i class="fa fa-info-circle"></i><span class="visible-xs-inline"> Los mehr darüber</span></a>
                </li>
                <li>
                    <a class="page-scroll" href="#groomsmen" title="Trauzeugen"><i class="fa fa-users"></i><span class="visible-xs-inline"> Unsere Trauzeugen</span></a>
                </li>
                <li>
                    <a class="page-scroll" href="#present" title="Geschenke"><i class="fa fa-gift"></i><span class="visible-xs-inline"> Geschenke</span></a>
                </li>
                <li>
                    <a class="page-scroll" href="#signup" title="Jetzt anmelden!"><i class="fa fa-check-square-o"></i><span class="visible-xs-inline"> Jetzt anmelden!</span></a>
                </li>
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container-fluid -->
</nav>

<!-- Header -->
<header>
    <div class="container">
        <div class="intro-text">
            <div class="intro-heading">Wir heiraten!</div>
            <div class="intro-lead-in">am 06. Juni 2015</div>
        </div>
    </div>
</header>

<!-- Gallery -->
<section id="thatsus">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 text-center">
                <h2 class="section-heading"><i class="fa fa-heart"></i> Das sind wir</h2>
            </div>
        </div>
    </div>
</section>

<!-- Services Section -->
<section id="information" class="bg-light-gray">
    <div class="container">
        <div class="row text-center">
            <div class="col-md-4">
                    <span class="fa-stack fa-4x">
                        <i class="fa fa-circle fa-stack-2x"></i>
                        <i class="fa fa-bell fa-stack-1x fa-inverse"></i>
                    </span>
                <h3 class="service-heading">Was</h3>
                <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedit.</p>
            </div>
            <div class="col-md-4">
                    <span class="fa-stack fa-4x">
                        <i class="fa fa-circle fa-stack-2x"></i>
                        <i class="fa fa-map-marker fa-stack-1x fa-inverse"></i>
                    </span>
                <h3 class="service-heading">Wo</h3>
                <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedit.</p>
            </div>
            <div class="col-md-4">
                    <span class="fa-stack fa-4x">
                        <i class="fa fa-circle fa-stack-2x"></i>
                        <i class="fa fa-clock-o fa-stack-1x fa-inverse"></i>
                    </span>
                <h3 class="service-heading">Wann</h3>
                <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedit.</p>
            </div>
        </div>
    </div>
</section>

<!-- About Section -->
<section id="groomsmen">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 text-center">
                <h2 class="section-heading"><i class="fa fa-users"></i> Unsere Trauzeugen</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-offset-1 col-sm-3">
                <img src="//www.gravatar.com/avatar/41c42656cf67fce9e98e1053b3c0c889?s=340" class="groomsmen-picture img-circle">
            </div>
            <div class="col-sm-8">
                <h3>Jürg</h3>
                <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedit.</p>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-offset-1 col-sm-3">
                <img src="//www.gravatar.com/avatar/41c42656cf67fce9e98e1053b3c0c889?s=340" class="groomsmen-picture img-circle">
            </div>
            <div class="col-sm-8">
                <h3>Jürg</h3>
                <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedit.</p>
            </div>
        </div>
    </div>
</section>

<!-- About Section -->
<section id="present" class="bg-light-gray">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 text-center">
                <h2 class="section-heading"><i class="fa fa-gift"></i> Geschenke!</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12 text-center">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedit.</p>
            </div>
        </div>
    </div>
</section>

<section id="signup">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="section-heading"><i class="fa fa-check-square-o"></i> Bin dabei</h2>
                <h3 class="section-subheading text-muted">Bitte meldet euch bis am 20. Mai 2015 an.</h3>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <form name="sentMessage" id="contactForm" novalidate>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Name *" id="name" required data-validation-required-message="Please enter your name.">
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control" placeholder="Email *" id="email" required data-validation-required-message="Please enter your email address.">
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="form-group">
                                <select class="form-control" required data-validation-required-message="Please enter your phone number.">
                                    <option disabled>Personen</option>
                                    <option>alleine</option>
                                    <option>zu zweit</option>
                                    <option>zu dritt</option>
                                </select>
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <textarea class="form-control" placeholder="Mitteilung *" id="message" required data-validation-required-message="Please enter a message."></textarea>
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                        <div class="col-lg-12 text-center">
                            <div id="success"></div>
                            <button type="submit" class="btn btn-xl">Anmelden</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

<footer>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <span class="copyright">Copyright &copy; 2015 Jürg Hunziker</span>
            </div>
        </div>
    </div>
</footer>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>

<!-- images loaded script -->
<script src="Resources/JavaScripts/imagesloaded.pkgd.min.js"></script>

<!-- Page Scripts -->
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
<script src="Resources/JavaScripts/classie.js"></script>
<script src="Resources/JavaScripts/cbpAnimatedHeader.js"></script>
<script src="Resources/JavaScripts/base.js"></script>

</body>

</html>

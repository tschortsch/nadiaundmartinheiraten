<?php
require('../vendor/autoload.php');
require_once('checklogin.php');

$password = '';
if(isset($_POST['password'])) {
    $password = $_POST['password'];
} elseif(isset($_GET['password'])) {
    $password = $_GET['password'];
}
?>

<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <meta name="description" content="Wedding page of Nadia und Martin">
    <meta name="keywords" content="Nadia, Martin, Hochzeit, wedding, Winterthur">
    <meta name="author" content="Jürg Hunziker">
    <meta name="robots" content="index,follow">
    <meta name="google-site-verification" content="f898ASxu2Nv4DsSM-YSAkCVGFK6KUrrVMCa88IXUrsI" />

    <link rel="shortcut icon" href="Resources/Images/favicon-128px.png">
    <link rel="icon" sizes="128x128" href="Resources/Images/favicon-128px.png">
    <link rel="icon" sizes="192x192" href="Resources/Images/favicon-192px.png">
    <title>Nadia & Martin haben geheiratet!</title>

    <!-- Android specific -->
    <meta name="theme-color" content="#9869B0">

    <!-- iOS specific -->
    <link rel="apple-touch-icon-precomposed" sizes="128x128" href="Resources/Images/favicon-128px.png">

    <!-- Bootstrap -->
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">

    <!-- blueimp Gallery -->
    <link rel="stylesheet" href="Resources/Libraries/Gallery-2.15.2/css/blueimp-gallery.min.css">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Custom Fonts -->
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <link href="//fonts.googleapis.com/css?family=Source+Sans+Pro:400,700,400italic,700italic|Great+Vibes" rel="stylesheet" type="text/css">

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
            <a class="navbar-brand page-scroll" href="#page-top"><i class="fa fa-heart"></i> Nadia & Martin haben geheiratet</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="navbar-collapsed">
            <ul class="nav navbar-nav navbar-right">
                <li class="hidden">
                    <a href="#page-top"></a>
                </li>
                <li>
                    <a class="page-scroll" href="#thankyou" title="Vielen Dank!"><i class="fa fa-thumbs-up"></i><span class="visible-xs-inline"> Vielen Dank!</span></a>
                </li>
                <li>
                    <a class="page-scroll" href="#impressions" title="Impressionen"><i class="fa fa-camera"></i><span class="visible-xs-inline"> Impressionen</span></a>
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
            <div class="intro-heading">Wir haben uns getraut!</div>
        </div>
    </div>
</header>

<!-- Thats us -->
<section id="thankyou">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 text-center">
                <h2 class="section-heading"><i class="fa fa-thumbs-up"></i> Vielen Dank</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12 text-justify">
                <p>
                    Bacon ipsum dolor amet t-bone kevin shank, pancetta salami frankfurter kielbasa flank venison cow doner ham ball tip ribeye cupim. Pastrami pork andouille pork chop frankfurter beef ribs porchetta rump pancetta kielbasa corned beef short loin swine ham. Pancetta ground round t-bone ribeye chicken alcatra. Sausage pancetta turducken bresaola tri-tip ground round ham hock salami cow flank prosciutto frankfurter pork. Kielbasa ribeye shoulder, t-bone pork chop tri-tip ham shank turkey flank meatball fatback biltong shankle. Andouille flank jerky landjaeger, shank tail alcatra beef ribs biltong doner pork belly strip steak.
                </p>
                <p>
                    Doner shankle jerky drumstick tri-tip, shoulder jowl corned beef ball tip pastrami. Tenderloin alcatra pork loin t-bone fatback shank turkey frankfurter beef ribs turducken pork pastrami ribeye porchetta. Spare ribs turkey cupim pork belly ham shank ground round. Drumstick pork belly t-bone, jerky short loin kielbasa jowl chicken. Flank pig bresaola, picanha cow ball tip chuck ground round spare ribs porchetta shank.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Services Section -->
<section id="impressions" class="bg-light-gray">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 text-center">
                <h2 class="section-heading"><i class="fa fa-camera"></i> Impressionen</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12 text-center">

                <!-- The Gallery as lightbox dialog, should be a child element of the document body -->
                <div id="blueimp-gallery" class="blueimp-gallery blueimp-gallery-controls">
                    <div class="slides"></div>
                    <h3 class="title"></h3>
                    <a class="prev">‹</a>
                    <a class="next">›</a>
                    <a class="close">×</a>
                    <ol class="indicator"></ol>
                </div>

                <div id="links">
                    <a href="Resources/Images/thatsus/2006.03.-Vibes.jpg" title="" data-gallery>
                        <img src="Resources/Images/thatsus/2006.03.-Vibes.jpg" class="img-thumbnail" alt="">
                    </a>
                    <a href="Resources/Images/thatsus/2006.08.-Suedtuerkei-1.jpg" title="" data-gallery>
                        <img src="Resources/Images/thatsus/2006.08.-Suedtuerkei-1.jpg" class="img-thumbnail" alt="">
                    </a>
                    <a href="Resources/Images/thatsus/2006.08.-Suedtuerkei-2.jpg" title="" data-gallery>
                        <img src="Resources/Images/thatsus/2006.08.-Suedtuerkei-2.jpg" class="img-thumbnail" alt="">
                    </a>
                    <a href="Resources/Images/thatsus/2007.07.-Paris.jpg" title="" data-gallery>
                        <img src="Resources/Images/thatsus/2007.07.-Paris.jpg" class="img-thumbnail" alt="">
                    </a>
                </div>

            </div>
        </div>
    </div>
</section>

<footer>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <span class="copyright">&copy; <span class="current-year">2015</span> <i class="fa fa-code"></i> with <i class="fa fa-heart"></i> by <a href="http://juerghunziker.ch" target="_blank">Jürg Hunziker</a></span>
            </div>
        </div>
    </div>
</footer>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>

<!-- blueimp Gallery -->
<script src="Resources/Libraries/Gallery-2.15.2/js/blueimp-gallery.min.js"></script>

<!-- images loaded script -->
<script src="Resources/JavaScripts/imagesloaded.pkgd.min.js"></script>

<!-- Page Scripts -->
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
<script src="Resources/JavaScripts/classie.js"></script>
<script src="Resources/JavaScripts/cbpAnimatedHeader.js"></script>
<script src="Resources/JavaScripts/jqBootstrapValidation.js"></script>
<script src="Resources/JavaScripts/subscribe.js"></script>
<script src="Resources/JavaScripts/lazy-bootstrap-carousel-v3.js"></script>
<script src="Resources/JavaScripts/base.js"></script>

<script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-60148126-1', 'auto');
    ga('send', 'pageview');

</script>
</body>

</html>

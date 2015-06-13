<?php
require('../vendor/autoload.php');

$wrongpassword = isset($_GET['wrongpassword']) && $_GET['wrongpassword'] == 1;
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
    <link rel="stylesheet" href="Resources/Styles/login-form.css">

</head>
<body>

<!-- loading overlay -->
<div class="loadingOverlay"><i class="fa fa-heart"></i></div>

<div class="container">
    <div class="row">
        <!-- Header -->
        <header class="text-center">
            <div class="intro-heading">Nadia und Martin haben geheiratet!</div>
        </header>
        <div class="col-sm-offset-3 col-sm-6 col-lg-offset-4 col-lg-4">
            <form id="loginform" action="thankyou.php" method="post">
                <div class="form-group <?php echo $wrongpassword ? 'has-error has-feedback' : ''; ?>">
                    <label class="sr-only" for="password">Passwort</label>
                    <input type="password" class="form-control" id="password" name="password" placeholder="Passwort">
                    <?php if($wrongpassword) { ?>
                        <div id="passwordStatus" class="text-danger">Da hast du dich wohl vertippt. Versuchs doch noch einmal!</div>
                    <?php } ?>
                </div>
                <button type="submit" class="btn btn-default"><i class="fa fa-heart"></i> Webseite öffnen</button>
            </form>
        </div>
    </div>
</div>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>

<!-- images loaded script -->
<script src="Resources/JavaScripts/imagesloaded.pkgd.min.js"></script>

<!-- Page Scripts -->
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
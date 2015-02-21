<?php
require('../vendor/autoload.php');

$wrongpassword = isset($_GET['wrongpassword']) && $_GET['wrongpassword'] == 1;
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
    <link rel="stylesheet" href="Resources/Styles/login-form.css">

</head>
<body>

<!-- loading overlay -->
<div class="loadingOverlay"><i class="fa fa-heart"></i></div>

<div class="container">
    <div class="row">
        <!-- Header -->
        <header class="text-center">
            <div class="intro-heading">Nadia und Martin heiraten!</div>
        </header>
        <div class="col-sm-offset-3 col-sm-6 col-lg-offset-4 col-lg-4">
            <form id="loginform" action="wedding.php" method="post">
                <div class="form-group <?php echo $wrongpassword ? 'has-error has-feedback' : ''; ?>">
                    <label class="sr-only" for="password">Passwort</label>
                    <input type="password" class="form-control" id="password" name="password" placeholder="Passwort" aria-describedby="passwordStatus">
                    <?php if($wrongpassword) { ?>
                        <span class="glyphicon glyphicon-remove form-control-feedback" aria-hidden="true"></span>
                        <div id="passwordStatus" class="text-danger">Da hast du dich wohl vertippt. Versuchs doch nochmals!</div>
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
</body>
</html>
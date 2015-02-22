<?php
require('../vendor/autoload.php');
require_once('checklogin.php');

$password = '';
if(isset($_POST['password'])) {
    $password = $_POST['password'];
} elseif(isset($_GET['password'])) {
    $password = $_GET['password'];
}
$view = checkLogin($password);
$subscription_result = '';
if(isset($_GET['subscription'])) {
    $subscription_result = $_GET['subscription'];
}
?>

<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
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
                    <a class="page-scroll" href="#thatsus" title="Das sind wir!"><i class="fa fa-venus-mars"></i><span class="visible-xs-inline"> Das sind wir!</span></a>
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

<!-- Thats us -->
<section id="thatsus">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 text-center">
                <h2 class="section-heading"><i class="fa fa-venus-mars"></i> Das sind wir</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-5">
                <img src="Resources/Images/login-bg-small.jpg" class="img-responsive" />
            </div>
            <div class="col-md-7">
                <p>
                    Vor etwas mehr als einem Jahr erlebten wir in Hawaii einen traumhaften Urlaub. Nach einer Whalewatchingtour, schwimmen mit Schildköten und einem wunderschönen Sonnenuntergang fiel Martin auf Maui in den Sand auf die Knie.
                </p>
                <p>
                    Nun nach über neun Jahren trauen wir uns und versprechen uns den Weg nun offiziell gemeinsam zu gehen.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Services Section -->
<section id="information" class="bg-light-gray">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 text-center">
                <h2 class="section-heading"><i class="fa fa-clock-o"></i> Wann & Wo</h2>
            </div>
        </div>
        <ul class="timeline">
            <li>
                <div class="timeline-badge warning"><i class="fa fa-glass"></i></div>
                <div class="timeline-panel">
                    <div class="timeline-heading">
                        <h2 class="timeline-title">Apéro</h2>
                    </div>
                    <div class="timeline-body">
                        <p><i class="fa fa-clock-o"></i> ab 14:30 Uhr</p>
                        <p><i class="fa fa-map-marker"></i> im Restaurant Römerpark</p>
                        <br />
                        <p>Im engsten Familienkreis werden wir uns auf dem Standesamt das Ja-Wort geben. Um mit euch allen darauf anzustossen, laden wir euch herzlich zum Apéro im ……………………………………… ein.</p>
                    </div>
                </div>
            </li>
            <?php if($view == 'essen'): ?>
                <li class="timeline-inverted">
                    <div class="timeline-badge danger"><i class="fa fa-cutlery"></i></div>
                    <div class="timeline-panel">
                        <div class="timeline-heading">
                            <h2 class="timeline-title">Essen & Feier</h2>
                        </div>
                        <div class="timeline-body">
                            <p><i class="fa fa-clock-o"></i> ab 17:00 Uhr</p>
                            <p><i class="fa fa-map-marker"></i> im Dolder</p>
                            <br />
                            <p>Mit den geladenen Gästen werden wir uns anschliessend um ca. 17.00 Uhr aus dem grossen Rahmen verabschieden und im kleineren Rahmen mit Privatautos auf den Weg ins ………………………………… machen. Dort erwartet euch ein fröhliches Abendessen mit gemütlichem Beisammensein.</p>
                        </div>
                    </div>
                </li>
            <?php endif; ?>
        </ul>
        <div class="row">
            <div class="col-sm-12 text-center">
                <div class="google-map">
                    <iframe src="https://mapsengine.google.com/map/embed?mid=zCFn7eLFNTss.kr-VbkJSUoes" width="640" height="480" frameBorder="0"></iframe>
                </div>
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
                <img src="//scontent-fra.xx.fbcdn.net/hphotos-xap1/t31.0-8/1496105_10152155528894110_1616484322_o.jpg" class="groomsmen-picture img-circle">
            </div>
            <div class="col-sm-8">
                <h3>Josi</h3>
                <p class="text-muted">Nach dem gemeinsamen Studium mit Nadia meisterten die zwei frischgebackenen Lehrerinnen die ersten Berufsjahre gemeinsam mit Vorbereitungen in den Ferien, wobei natürlich auch ein Tag plaudern bei einem Foxtrail dazugehörte.</p>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-offset-1 col-sm-3">
                <img src="//www.gravatar.com/avatar/41c42656cf67fce9e98e1053b3c0c889?s=340" class="groomsmen-picture img-circle">
            </div>
            <div class="col-sm-8">
                <h3>Jürg</h3>
                <p class="text-muted">Den Ursprung unserer Beziehung haben wir nur ihm zu verdanken. Als Klassenkamerad von Martin und Bruder von Nadia war im Ausgang zu dritt oft nicht klar, ob nun Nadia oder Jürg das dritte Rad am Wagen war.</p>
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
                <p>Für alle Ideenlosen haben wir uns fleissig Gedanken gemacht, um euch die Suche nach einem passenden Geschenk zu erleichtern. Mit einem Klick auf den folgenden Link gelangt ihr auf unsere Wunschliste.</p>

                <a href="http://9gag.com" class="btn btn-primary btn-lg" role="button"><i class="fa fa-shopping-cart"></i> Auf zur Wunschliste</a>
            </div>
        </div>
    </div>
</section>

<section id="signup">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="section-heading"><i class="fa fa-check-square-o"></i> Bin dabei</h2>
                <h3 class="section-subheading text-muted">Wir würden uns sehr freuen, wenn ihr diesen speziellen Tag mit uns verbringt.<br />Bitte meldet euch bis zum 16. Mai 2015 an.</h3>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <?php if($view == 'apero') { ?>
                    <form name="sentMessage" id="contactForm" class="apero" novalidate>
                        <input type="hidden" name="password" value="<?php echo $password; ?>" />
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label" for="name">Name *</label>
                                    <input type="text" class="form-control" id="name" name="name" required data-validation-required-message="Bitte deinen Namen eingeben.">
                                    <p class="help-block"></p>
                                </div>
                                <div class="form-group">
                                    <label class="control-label" for="count">Anzahl Personen *</label>
                                    <select class="form-control" id="count" name="count" required data-validation-required-message="Bitte die Anzahl Personen auswählen.">
                                        <option value="">bitte auswählen</option>
                                        <option value="1">alleine</option>
                                        <option value="2">zu zweit</option>
                                        <option value="3">zu dritt</option>
                                        <option value="4">zu viert</option>
                                        <option value="5">zu fünft</option>
                                    </select>
                                    <p class="help-block"></p>
                                </div>
                                <div class="form-group">
                                    <label class="control-label" for="email">Email *</label>
                                    <input type="email" class="form-control" id="email" name="email" required data-validation-required-message="Bitte gib deine Email Adresse ein." data-validation-email-message="Da scheint was nicht zu stimmen.">
                                    <p class="help-block"></p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label" for="name">Mitteilung</label>
                                    <textarea class="form-control" id="message" name="message"></textarea>
                                    <p class="help-block"></p>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                            <div class="col-lg-12 text-center">
                                <div id="submitMessage"></div>
                                <button type="submit" class="btn btn-primary btn-lg"><i class="fa fa-paper-plane-o"></i> Senden</button>
                            </div>
                        </div>
                    </form>
                <?php } else { ?>
                    <form name="sentMessage" id="contactForm" class="essen" novalidate>
                        <input type="hidden" name="password" value="<?php echo $password; ?>" />
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label" for="count">Anzahl Personen *</label>
                                    <select class="form-control" id="count" name="count" required data-validation-required-message="Bitte die Anzahl Personen auswählen.">
                                        <option value="">bitte auswählen</option>
                                        <option value="1">alleine</option>
                                        <option value="2">zu zweit</option>
                                    </select>
                                    <p class="help-block"></p>
                                </div>
                                <div class="form-group">
                                    <label class="control-label" for="name">Name *</label>
                                    <input type="text" class="form-control" id="name" name="name" required data-validation-required-message="Bitte deinen Namen eingeben.">
                                    <p class="help-block">Damit uns die Planung einfacher fällt, tragt doch bitte die vollständigen Namen von allen Gästen ein.</p>
                                </div>
                                <div class="form-group">
                                    <label class="control-label" for="email">Email *</label>
                                    <input type="email" class="form-control" id="email" name="email" required data-validation-required-message="Bitte gib deine Email Adresse ein." data-validation-email-message="Da scheint was nicht zu stimmen.">
                                    <p class="help-block"></p>
                                </div>
                                <div class="form-group">
                                    <label class="control-label" for="attendingApero">Bin dabei bei *</label>
                                    <div class="radio">
                                        <label>
                                            <input type="radio" name="attending" id="attendingApero" value="Apéro" required data-validation-required-message="Bitte wähle bei was du dabei bis.">
                                            Apéro
                                        </label>
                                    </div>
                                    <div class="radio">
                                        <label>
                                            <input type="radio" name="attending" id="attendingDinner" value="Essen" required data-validation-required-message="Bitte wähle bei was du dabei bis.">
                                            Essen
                                        </label>
                                    </div>
                                    <div class="radio">
                                        <label>
                                            <input type="radio" name="attending" id="attendingAperoAndDinner" value="Apéro und Essen" required data-validation-required-message="Bitte wähle bei was du dabei bis.">
                                            Apéro und Essen
                                        </label>
                                    </div>
                                    <p class="help-block"></p>
                                </div>
                                <div class="form-group">
                                    <label class="control-label" for="mealtypeMeat">Ich esse *</label>
                                    <div class="radio">
                                        <label>
                                            <input type="radio" name="mealtype" id="mealtypeMeat" value="Fleisch" required data-validation-required-message="Bitte wähle was du gerne isst.">
                                            Fleisch
                                        </label>
                                    </div>
                                    <div class="radio">
                                        <label>
                                            <input type="radio" name="mealtype" id="mealtypeVegetarian" value="Vegetarisch" required data-validation-required-message="Bitte wähle was du gerne isst.">
                                            Vegetarisch
                                        </label>
                                    </div>
                                    <p class="help-block"></p>
                                </div>
                                <div class="form-group">
                                    <label class="control-label" for="travelByCar">Ich reise an mit *</label>
                                    <div class="radio">
                                        <label>
                                            <input type="radio" name="travelBy" id="travelByCar" value="Privatauto" required data-validation-required-message="Bitte wähle wie du anreist.">
                                            Privatauto
                                        </label>
                                    </div>
                                    <div class="radio">
                                        <label>
                                            <input type="radio" name="travelBy" id="travelByPublicTransportation" value="Öffentlicher Verkehr" required data-validation-required-message="Bitte wähle wie du anreist.">
                                            Öffentlicher Verkehr
                                        </label>
                                    </div>
                                    <p class="help-block"></p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label" for="name">Mitteilung</label>
                                    <textarea class="form-control" id="message" name="message"></textarea>
                                    <p class="help-block"></p>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                            <div class="col-lg-12 text-center">
                                <div id="submitMessage"></div>
                                <button type="submit" class="btn btn-primary btn-lg"><i class="fa fa-paper-plane-o"></i> Senden</button>
                            </div>
                        </div>
                    </form>
                <?php } ?>
            </div>
        </div>
    </div>
</section>

<footer>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <span class="copyright">&copy; 2015 built with <i class="fa fa-heart"></i> by Jürg Hunziker</span>
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
<script src="Resources/JavaScripts/jqBootstrapValidation.js"></script>
<script src="Resources/JavaScripts/subscribe.js"></script>
<script src="Resources/JavaScripts/base.js"></script>

</body>

</html>

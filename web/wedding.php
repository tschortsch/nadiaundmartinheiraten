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
    <meta name="keywords" content="Nadia, Martin, Hochzeit, wedding, Winterthur">
    <meta name="author" content="Jürg Hunziker">
    <meta name="robots" content="index,follow">
    <meta name="google-site-verification" content="f898ASxu2Nv4DsSM-YSAkCVGFK6KUrrVMCa88IXUrsI" />

    <link rel="shortcut icon" href="Resources/Images/favicon-128px.png">
    <link rel="icon" sizes="128x128" href="Resources/Images/favicon-128px.png">
    <link rel="icon" sizes="192x192" href="Resources/Images/favicon-192px.png">
    <title>Nadia & Martin heiraten!</title>

    <!-- Android specific -->
    <meta name="theme-color" content="#9869B0">

    <!-- iOS specific -->
    <link rel="apple-touch-icon-precomposed" sizes="128x128" href="Resources/Images/favicon-128px.png">

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Custom Fonts -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,700,400italic,700italic|Great+Vibes" rel="stylesheet" type="text/css">

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
            <a class="navbar-brand page-scroll" href="#page-top"><i class="fa fa-heart"></i> Nadia & Martin heiraten</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="navbar-collapsed">
            <ul class="nav navbar-nav navbar-right">
                <li class="hidden">
                    <a href="#page-top"></a>
                </li>
                <li>
                    <a class="page-scroll" href="#thatsus" title="Das sind wir"><i class="fa fa-venus-mars"></i><span class="visible-xs-inline"> Das sind wir</span></a>
                </li>
                <li>
                    <a class="page-scroll" href="#information" title="Wann & Wo"><i class="fa fa-calendar"></i><span class="visible-xs-inline"> Wann & Wo</span></a>
                </li>
                <li>
                    <a class="page-scroll" href="#groomsmen" title="Trauzeugen"><i class="fa fa-users"></i><span class="visible-xs-inline"> Unsere Trauzeugen</span></a>
                </li>
                <li>
                    <a class="page-scroll" href="#present" title="Geschenke"><i class="fa fa-gift"></i><span class="visible-xs-inline"> Geschenke!</span></a>
                </li>
                <li>
                    <a class="page-scroll" href="#signup" title="Bin dabei!"><i class="fa fa-check-square-o"></i><span class="visible-xs-inline"> Bin dabei</span></a>
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
                <div id="carousel-thatsus" class="carousel slide" data-interval="false">
                    <!-- Wrapper for slides -->
                    <div class="carousel-inner" role="listbox">
                        <div class="item active">
                            <img src="Resources/Images/thatsus/2006.03.-Vibes.jpg" alt="2006 - Wir beim ersten Treffen" title="2006 - Wir beim ersten Treffen" />
                            <div class="carousel-caption">
                                2006 - Unsere ersten gemeinsamen Schneeengel
                            </div>
                        </div>
                        <div class="item">
                            <img src="" lazy-src="Resources/Images/thatsus/2006.08.-Suedtuerkei-1.jpg" alt="2008 - Südtürkei" title="2008 - Südtürkei" />
                            <div class="carousel-caption">
                                2008 - Südtürkei
                            </div>
                        </div>
                        <div class="item">
                            <img src="" lazy-src="Resources/Images/thatsus/2006.08.-Suedtuerkei-2.jpg" alt="2008 - Südtürkei" title="2008 - Südtürkei" />
                            <div class="carousel-caption">
                                2008 - Südtürkei
                            </div>
                        </div>
                        <div class="item">
                            <img src="" lazy-src="Resources/Images/thatsus/2007.07.-Paris.jpg" alt="2007 - Paris" title="2007 - Paris" />
                            <div class="carousel-caption">
                                2007 - Paris
                            </div>
                        </div>
                        <div class="item">
                            <img src="" lazy-src="Resources/Images/thatsus/2008.06.-Boetle.jpg" alt="2008 - Gummiböötle" title="2008 - Gummiböötle" />
                            <div class="carousel-caption">
                                2008 - Gummiböötle
                            </div>
                        </div>
                        <div class="item">
                            <img src="" lazy-src="Resources/Images/thatsus/2008.07.-Kos.jpg" alt="2008 - Kos" title="2008 - Kos" />
                            <div class="carousel-caption">
                                2008 - Kos
                            </div>
                        </div>
                        <div class="item">
                            <img src="" lazy-src="Resources/Images/thatsus/2008.07.-Nightskate.jpg" alt="2008 - Nightskate" title="2008 - Nightskate" />
                            <div class="carousel-caption">
                                2008 - Nightskate
                            </div>
                        </div>
                        <div class="item">
                            <img src="" lazy-src="Resources/Images/thatsus/2009.06.-GoKart.jpg" alt="2009 - Go Kart fahren" title="2009 - Go Kart fahren" />
                            <div class="carousel-caption">
                                2009 - Go Kart fahren
                            </div>
                        </div>
                        <div class="item">
                            <img src="" lazy-src="Resources/Images/thatsus/2010.07.-Kreuzfahrt.jpg" alt="2010 - Mittelmeer Kreuzfahrt" title="2010 - Mittelmeer Kreuzfahrt" />
                            <div class="carousel-caption">
                                2010 - Mittelmeer Kreuzfahrt
                            </div>
                        </div>
                        <div class="item">
                            <img src="" lazy-src="Resources/Images/thatsus/2011.07-New-York.jpg" alt="2011 - New York" title="2011 - New York" />
                            <div class="carousel-caption">
                                2011 - New York
                            </div>
                        </div>
                        <div class="item">
                            <img src="" lazy-src="Resources/Images/thatsus/2011.10.-Kalifornien-1.jpg" alt="2011 - Kalifornien" title="2011 - Kalifornien" />
                            <div class="carousel-caption">
                                2011 - Kalifornien
                            </div>
                        </div>
                        <div class="item">
                            <img src="" lazy-src="Resources/Images/thatsus/2011.10.-Kalifornien-2.jpg" alt="2011 - Kalifornien" title="2011 - Kalifornien" />
                            <div class="carousel-caption">
                                2011 - Kalifornien
                            </div>
                        </div>
                        <div class="item">
                            <img src="" lazy-src="Resources/Images/thatsus/2011.12.-Santa-Barbara-1.jpg" alt="2011 - Santa Barbara" title="2011 - Santa Barbara" />
                            <div class="carousel-caption">
                                2011 - Santa Barbara
                            </div>
                        </div>
                        <div class="item">
                            <img src="" lazy-src="Resources/Images/thatsus/2011.12.-Santa-Barbara-2.jpg" alt="2011 - Santa Barbara" title="2011 - Santa Barbara" />
                            <div class="carousel-caption">
                                2011 - Santa Barbara
                            </div>
                        </div>
                        <div class="item">
                            <img src="" lazy-src="Resources/Images/thatsus/2012.01.-Santa-Barbara.jpg" alt="2012 - Santa Barbara" title="2012 - Santa Barbara" />
                            <div class="carousel-caption">
                                2012 - Santa Barbara
                            </div>
                        </div>
                        <div class="item">
                            <img src="" lazy-src="Resources/Images/thatsus/2013.07.20.-Yellow-Stone.jpg" alt="2013 - Yellowstone Nationalpark" title="2013 - Yellowstone Nationalpark" />
                            <div class="carousel-caption">
                                2013 - Yellowstone Nationalpark
                            </div>
                        </div>
                        <div class="item">
                            <img src="" lazy-src="Resources/Images/thatsus/2013.07.29.-Monument-Valley.jpg" alt="2013 - Monument Valley" title="2013 - Monument Valley" />
                            <div class="carousel-caption">
                                2013 - Monument Valley
                            </div>
                        </div>
                        <div class="item">
                            <img src="" lazy-src="Resources/Images/thatsus/2014.02.-Hawaii-1.jpg" alt="2014 - Hawaii" title="2014 - Hawaii" />
                            <div class="carousel-caption">
                                2014 - Hawaii
                            </div>
                        </div>
                        <div class="item">
                            <img src="" lazy-src="Resources/Images/thatsus/2014.02.-Hawaii-2.jpg" alt="2014 - Hawaii" title="2014 - Hawaii" />
                            <div class="carousel-caption">
                                2014 - Hawaii
                            </div>
                        </div>
                        <div class="item">
                            <img src="" lazy-src="Resources/Images/thatsus/2014.02.-Hawaii-3.jpg" alt="2014 - Hawaii" title="2014 - Hawaii" />
                            <div class="carousel-caption">
                                2014 - Hawaii
                            </div>
                        </div>
                    </div>

                    <!-- Image loading icon -->
                    <div class="loading hide"><img src="Resources/Images/black.png"/></div>

                    <!-- Controls -->
                    <a class="left carousel-control" href="#carousel-thatsus" role="button" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                        <span class="sr-only">Vorheriges Bild</span>
                    </a>
                    <a class="right carousel-control" href="#carousel-thatsus" role="button" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                        <span class="sr-only">Nächstes Bild</span>
                    </a>
                </div>
            </div>
            <div class="col-md-7 text-justify">
                <p>
                    Als im März 2006 der grosse Schneesturm kam, hatten wir nichts Besseres im Sinn als in dunkelster Nacht Schneeengel zu machen. Damit war der Grundstein für unsere Beziehung gelegt.
                </p>
                <p>
                    Von da an haben wir viele schöne Momente gemeinsam geniessen können, aber auch Tiefen überstanden. Wir haben uns weiterentwickelt und an unserer Beziehung gearbeitet. Wir haben die Nähe genossen, mussten aber auch den weiten Ozean zwischen uns ertragen.
                </p>
                <p>
                    Vor etwas mehr als einem Jahr erlebten wir in Hawaii einen traumhaften Urlaub. Nach einer Whalewatchingtour und Schwimmen mit Schildköten verlobten wir uns bei einem wunderschönen Sonnenuntergang auf Maui.
                </p>
                <p>
                    Nun nach über neun Jahren wagen wir den nächsten Schritt um unsere Beziehung weiter zu vertiefen und ihr seid herzlich eingeladen, diesen Moment mit uns zu teilen.
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
                <h2 class="section-heading"><i class="fa fa-calendar"></i> Wann & Wo</h2>
            </div>
        </div>
        <ul class="timeline">
            <li>
                <div class="timeline-badge info"><i class="fa fa-map-marker"></i></div>
                <div class="timeline-panel">
                    <div class="timeline-heading">
                        <h2 class="timeline-title">14:30 - Eintreffen der Gäste zum Apéro</h2>
                    </div>
                    <div class="timeline-body">
                        <div class="fact">
                            <i class="fa fa-clock-o"></i>
                            <p>06. Juni 2015 ab 14:30 Uhr</p>
                        </div>
                        <div class="fact">
                            <i class="fa fa-map-marker"></i>
                            <p>Schloss Wülflingen<br />Wülflingerstrasse 214<br />8408 Winterthur</p>
                        </div>
                        <br />
                        <p>Im engsten Familienkreis werden wir uns auf dem Standesamt das Ja-Wort geben. Um mit euch allen darauf anzustossen, laden wir euch herzlich zum Apéro beim Schloss Wülflingen ein.</p>
                    </div>
                </div>
            </li>
            <li class="timeline-inverted">
                <div class="timeline-badge warning"><i class="fa fa-glass"></i></div>
                <div class="timeline-panel">
                    <div class="timeline-heading">
                        <h2 class="timeline-title">14:45 - Eintreffen des Brautpaares</h2>
                    </div>
                    <div class="timeline-body">
                        <div class="fact">
                            <i class="fa fa-clock-o"></i>
                            <p>06. Juni 2015 ab 14:45 Uhr</p>
                        </div>
                        <div class="fact">
                            <i class="fa fa-map-marker"></i>
                            <p>Schloss Wülflingen<br />Wülflingerstrasse 214<br />8408 Winterthur</p>
                        </div>
                        <br />
                        <?php if($view == 'apero'): ?>
							<p>Wenn ihr etwas zur Gestaltung des Nachmittags beitragen wollt, wendet euch bitte an unsere Trauzeugen.</p>
                        <?php endif; ?>
                    </div>
                </div>
            </li>
            <?php if($view == 'apero'): ?>
				<li>
					<div class="timeline-badge danger"><i class="fa fa-clock-o"></i></div>
					<div class="timeline-panel">
						<div class="timeline-heading">
							<h2 class="timeline-title">17:30 - Ende Apéro</h2>
						</div>
						<div class="timeline-body">
							<div class="fact">
								<i class="fa fa-clock-o"></i>
								<p>06. Juni 2015 ca. 17:30 Uhr</p>
							</div>
						</div>
					</div>
				</li>
            <?php endif; ?>
            <?php if($view == 'essen'): ?>
                <li>
                    <div class="timeline-badge success"><i class="fa fa-car"></i></div>
                    <div class="timeline-panel">
                        <div class="timeline-heading">
                            <h2 class="timeline-title">17:15 - Abfahrt nach Henggart</h2>
                        </div>
                        <div class="timeline-body">
                            <div class="fact">
                                <i class="fa fa-clock-o"></i>
                                <p>06. Juni 2015 ab 17:15 Uhr</p>
                            </div>
                            <div class="fact">
                                <i class="fa fa-map-marker"></i>
                                <p>Restaurant Bahnhof Henggart<br />Alte Andelfingerstr. 2<br />8444 Henggart</p>
                            </div>
                            <br />
                            <p>Mit den geladenen Gästen werden wir uns um ca. 17.15 Uhr aus dem grossen Rahmen verabschieden und uns auf den Weg ins Restaurant Bahnhof Henggart machen.</p>
                        </div>
                    </div>
                </li>
                <li class="timeline-inverted">
                    <div class="timeline-badge danger"><i class="fa fa-cutlery"></i></div>
                    <div class="timeline-panel">
                        <div class="timeline-heading">
                            <h2 class="timeline-title">17:30 - Essen & Feier</h2>
                        </div>
                        <div class="timeline-body">
                            <div class="fact">
                                <i class="fa fa-clock-o"></i>
                                <p>06. Juni 2015 ab 17:30 Uhr</p>
                            </div>
                            <div class="fact">
                                <i class="fa fa-map-marker"></i>
                                <p>Restaurant Bahnhof Henggart<br />Alte Andelfingerstr. 2<br />8444 Henggart</p>
                            </div>
                            <br />
                            <p>Im Restaurant Bahnof erwartet uns ein feines Abendessen mit gemütlichem Beisammensein sowie Musik und Tanz. Falls ihr etwas zur Gestaltung des Abendprogrammes beisteuern wollt, meldet euch bitte bei unseren Trauzeugen.</p>
                        </div>
                    </div>
                </li>
            <?php endif; ?>
        </ul>
        <div class="row">
            <div class="col-sm-12 text-center">
                <div class="google-map">
                    <?php if($view == 'essen') { ?>
                        <iframe src="https://www.google.com/maps/d/embed?mid=zswo-lYKh418.k_tUdEgY60js" width="640" height="480" frameborder="0"></iframe>
                    <?php } else { ?>
                        <iframe src="https://www.google.com/maps/d/embed?mid=zzc5UYgA2Iis.khnVmb0Y8ya0&z=17" width="640" height="480" frameborder="0"></iframe>
                    <?php } ?>
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
        <div class="row profile">
            <div class="col-sm-offset-2 col-sm-8 text-center">
                <h3>Josi</h3>
                <img src="Resources/Images/josi.jpg" class="groomsmen-picture img-circle">
                <div class="text-justify">
                    <p>
                        Nachdem wir während einem Praktikum im ersten Semester beinahe den Kindergarten abgefackelt haben, waren wir bereit, jede noch so brenzlige Situation zu meistern. Somit ist Josi bestens als meine Trauzeugin geeignet.
                    </p>
                    <p>
                        Gemeinsam suchten wir nach einer Stelle, machten Spanien unsicher und reisten letztes Jahr durch Hawaii. Während der ersten Berufsjahre verbrachten wir in den Ferien viel Zeit mit gemeinsamen Vorbereitungen, wobei natürlich auch ein Tag Plaudern bei dem ein oder anderen Foxtrail dazugehörte.
                    </p>
                    <address>
                        <strong>Josi kontaktieren</strong><br />
                        <i class="fa fa-envelope-o"></i> <a href="mailto:josiane.tenud@gmx.ch">josiane.tenud@gmx.ch</a><br />
                        <i class="fa fa-phone"></i> +41 79 795 02 20
                    </address>
                </div>
            </div>
        </div>
        <div class="row profile">
            <div class="col-sm-offset-2 col-sm-8 text-center">
                <h3>Jürg</h3>
                <img src="Resources/Images/juerg.jpg" class="groomsmen-picture img-circle">
                <div class="text-justify">
                    <p>
                        Wir kennen uns seit dem Gymnasium. Seither gab es unzählige Duelle zwischen uns beiden in den verschiedensten Sport- und Nicht-Sportarten. Legenden besagen, dass es sich dabei mit einem Zwischenstand von <strong>1302:1298</strong> um das längste Duell seit Menschengedenken handle. Mit dem Punkt für die frühere Hochzeit kann ich meinen Vorsprung souverän ausbauen.
                    </p>
                    <p>
                        Den Ursprung unserer Beziehung haben wir nur ihm zu verdanken. Als mein Klassenkamerad und Bruder von Nadia war im Ausgang zu dritt oft nicht klar, ob nun er oder Nadia das dritte Rad am Wagen war.
                    </p>
                    <address>
                        <strong>Jürg kontaktieren</strong><br />
                        <i class="fa fa-envelope-o"></i> <a href="mailto:juerg.hunziker@gmail.com">juerg.hunziker@gmail.com</a><br />
                        <i class="fa fa-phone"></i> +41 79 826 82 13
                    </address>
                </div>
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
                <p>Für alle Ideenlosen haben wir uns fleissig Gedanken gemacht, um euch die Suche nach einem passenden Geschenk zu erleichtern. Mit einem Klick auf den folgenden Link gelangt ihr auf unsere Wunschliste. Natürlich freuen wir uns auch sehr über eigene Ideen.</p>

                <a href="http://www.wunsch-galerie.de/Gast/Liste-Der-Wuensche.aspx?wz=YK3NNAKH" target="_blank" class="btn btn-primary btn-lg" role="button"><i class="fa fa-shopping-cart"></i> Auf zur Wunschliste</a>
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
                                <div class="form-group imInApero">
                                    <label class="control-label" for="imInYes">Ich bin dabei *</label>
                                    <div class="radio">
                                        <label>
                                            <input type="radio" name="imIn" id="imInYes" value="Klar bin ich dabei" required data-validation-required-message="Bitte wähle ob du dabei bist.">
                                            Klar bin ich dabei
                                        </label>
                                    </div>
                                    <div class="radio">
                                        <label>
                                            <input type="radio" name="imIn" id="imInNo" value="Ich bin leider verhindert" required data-validation-required-message="Bitte wähle ob du dabei bist.">
                                            Ich bin leider verhindert
                                        </label>
                                    </div>
                                    <p class="help-block"></p>
                                </div>
                                <div class="form-group">
                                    <label class="control-label" for="name">Name *</label>
                                    <input type="text" class="form-control" id="name" name="name" required data-validation-required-message="Bitte deinen Namen eingeben.">
                                    <p class="help-block"></p>
                                </div>
                                <div class="form-group">
                                    <label class="control-label" for="email">Email *</label>
                                    <input type="email" class="form-control" id="email" name="email" required data-validation-required-message="Bitte gib deine Email Adresse ein." data-validation-email-message="Da scheint was nicht zu stimmen.">
                                    <p class="help-block"></p>
                                </div>
                                <div class="form-group count">
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
                                <div class="form-group imInEssen">
                                    <label class="control-label" for="imInYes">Ich bin dabei *</label>
                                    <div class="radio">
                                        <label>
                                            <input type="radio" name="imIn" id="imInYes" value="Klar bin ich dabei" required data-validation-required-message="Bitte wähle ob du dabei bist.">
                                            Klar bin ich dabei
                                        </label>
                                    </div>
                                    <div class="radio">
                                        <label>
                                            <input type="radio" name="imIn" id="imInNo" value="Ich bin leider verhindert" required data-validation-required-message="Bitte wähle ob du dabei bist.">
                                            Ich bin leider verhindert
                                        </label>
                                    </div>
                                    <p class="help-block"></p>
                                </div>
                                <div class="form-group">
                                    <label class="control-label" for="name">Name *</label>
                                    <input type="text" class="form-control" id="name" name="name" required data-validation-required-message="Bitte deinen Namen eingeben.">
                                    <p class="help-block">Damit uns die Planung einfacher fällt, trag doch bitte die vollständigen Namen von allen Gästen ein.</p>
                                </div>
                                <div class="form-group">
                                    <label class="control-label" for="email">Email *</label>
                                    <input type="email" class="form-control" id="email" name="email" required data-validation-required-message="Bitte gib deine Email Adresse ein." data-validation-email-message="Da scheint was nicht zu stimmen.">
                                    <p class="help-block"></p>
                                </div>
                                <div class="form-group count">
                                    <label class="control-label" for="count">Anzahl Personen *</label>
                                    <select class="form-control" id="count" name="count" required data-validation-required-message="Bitte die Anzahl Personen auswählen.">
                                        <option value="">bitte auswählen</option>
                                        <option value="1">alleine</option>
                                        <option value="2">zu zweit</option>
                                    </select>
                                    <p class="help-block"></p>
                                </div>
                                <div class="form-group attending">
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
                                <div class="form-group mealtype">
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
                                <div class="form-group travelBy">
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
                <span class="copyright">&copy; <span class="current-year">2015</span> <i class="fa fa-code"></i> with <i class="fa fa-heart"></i> by <a href="http://juerghunziker.ch" target="_blank">Jürg Hunziker</a></span>
            </div>
        </div>
    </div>
</footer>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>

<!-- images loaded script -->
<script src="Resources/JavaScripts/imagesloaded.pkgd.min.js"></script>

<!-- Page Scripts -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
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

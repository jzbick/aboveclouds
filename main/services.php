<?php include_once './config/config.php'; ?>

<!DOCTYPE html>
<html>
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="TemplateMo">
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700" rel="stylesheet">

    <title>AboveClouds - Services</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/templatemo-host-cloud.css">
    <link rel="stylesheet" href="assets/css/owl.css">
    <!--

    Host Cloud Template

    https://templatemo.com/tm-541-host-cloud

    -->
</head>

<body>

<!-- ***** Preloader Start ***** -->
<div id="preloader">
    <div class="jumper">
        <div></div>
        <div></div>
        <div></div>
    </div>
</div>
<!-- ***** Preloader End ***** -->

<!-- Header -->
<header class="">
    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <a class="navbar-brand" href="index.php"><h2>Host <em>Cloud</em></h2></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive"
                    aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Home
                            <span class="sr-only">(current)</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="about.php">Über Uns</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="services.php">Dienste</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact.php">Kontakt</a>
                    </li>
                </ul>
            </div>
            <div class="functional-buttons">
                <ul>
                    <?php
                    if (isset($_SESSION["N_ID"])) {
                        echo '<li><a href="logout.php">Abmelden</a></li>';
                    } else {
                        echo '<li><a href="login.php">Anmelden</a></li>';
                        echo '<li><a href="regUser.php">Registrieren</a></li>';
                    }
                    ?>
                </ul>
            </div>
        </div>
    </nav>
</header>

<!-- Page Content -->
<!-- Heading Starts Here -->
<div class="page-heading header-text">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Our Services</h1>
                <p><a href="index.php">Home</a> / <span>Unsere Services</span></p>
            </div>
        </div>
    </div>
</div>
<!-- Heading Ends Here -->


<!-- Services Starts Here -->
<div class="services-section services-page">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-heading">
                    <span>Hosting Services</span>
                    <h2>Der beste Service, den wir Ihnen bieten können</h2>
                    <p>Für alle interessierten Besucher unserer Seite hier noch einmal der ganze Umfang des kompletten 
                        AboveCloud Erlebnisses nur für Sie zusammengefasst:</p>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="service-item">
                    <i class="fa useradd"></i>
                    <h4>Registrierung |F1|</h4>
                    <p>Sie können sich nun auf unserer Seite registrieren, um schnell den kompletten Umfang des AboveClouds 
                        Erlebnisses genießen zu können.<br><br></p>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="service-item">
                    <i class="fa userlogin"></i>
                    <h4>Login |F2|</h4>
                    <p>Melden Sie sich an, um ihre Dateien in unserer extra für Sie entworfenen Cloud speichern und von 
                        woanders wieder abrufen zu können.<br><br></p>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="service-item">
                    <i class="fa userlogout"></i>
                    <h4>Logout |F3|</h4>
                    <p>Sie sind müde immerzu in unserer genialen Cloud angemeldet zu sein?<br>
                        Mithilfe unserer Abmeldenfunktion muss das nicht sein! Gönnen Sie sich zwischendurch mal etwas Ruhe.</p>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="service-item">
                    <i class="fa dataadd"></i>
                    <h4>Datei hochladen |F4|</h4>
                    <p>Haben Sie schon probiert etwas in unserer Cloud zu speichern? Wenn nicht, wäre jetzt der geeignete Zeitpunkt dafür.<br><br></p>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="service-item">
                    <i class="fa fa-save"></i>
                    <h4>Datei herunterladen |F5|</h4>
                    <p>Natürlich können Sie die hochgeladenen Dateien auch wieder herunterladen!<br><br><br></p>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="service-item">
                    <i class="fa fa-eraser"></i>
                    <h4>Datei löschen |F6|</h4>
                    <p>Sie haben einen Fehler gemacht, oder die Gästeliste von 1918 ist zu alt geworden, um sie weiter aufzubewahren?
                        Löschen können Sie bei uns natürlich auch!
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Services Ends Here -->

<!-- Footer Starts Here -->
<footer>
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="footer-item">
                    <div class="footer-heading">
                        <h2>Über uns</h2>
                    </div>
                    <p>AboveClouds ist eine von Studenten selber erstellte Cloudlösung, welche sich an andere Studenten
                        weltweit richten soll!</p>
                </div>
            </div>

            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="footer-item">
                    <div class="footer-heading">
                        <h2></h2>
                    </div>
                    <ul class="footer-list">
                        <li><a href="#"></a></li>
                        <li><a href="#"></a></li>
                        <li><a href="#"></a></li>
                        <li><a href="#"></a></li>
                        <li><a href="#"></a></li>
                    </ul>
                </div>
            </div>


            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="footer-item">
                    <div class="footer-heading">
                        <h2></h2>
                    </div>
                    <ul class="footer-list">
                        <li><a href="#"></a></li>
                        <li><a href="#"></a></li>
                        <li><a href="#"></a></li>
                        <li><a href="#"></a></li>
                        <li><a href="#"></a></li>
                    </ul>
                </div>
            </div>

            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="footer-item">
                    <div class="footer-heading">
                        <h2>Mehr Informationen</h2>
                    </div>
                    <ul class="footer-list">
                        <li>Email: <a href="#">kontakt@aboveclouds.online</a></li>
                        <li>Support: <a href="#">support@aboveclouds.online</a></li>
                        <li>Website: <a href="#">www.AboveClouds.online</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-12">
                <div class="sub-footer">
                    <p>Copyright &copy; 2019 AboveClouds Company</p>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- Footer Ends Here -->

<!-- Bootstrap core JavaScript -->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Additional Scripts -->
<script src="assets/js/custom.js"></script>
<script src="assets/js/owl.js"></script>
<script src="assets/js/accordions.js"></script>

<script language="text/Javascript">
    cleared[0] = cleared[1] = cleared[2] = 0; //set a cleared flag for each field
    function clearField(t) {                   //declaring the array outside of the
        if (!cleared[t.id]) {                      // function makes it static and global
            cleared[t.id] = 1;  // you could use true and false, but that's more typing
            t.value = '';         // with more chance of typos
            t.style.color = '#fff';
        }
    }
</script>

</body>
</html>
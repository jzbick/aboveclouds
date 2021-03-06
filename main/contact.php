<?php include_once './config/config.php'; ?>

<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="TemplateMo">
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700" rel="stylesheet">
    <link rel="shortcut icon" type="image/x-icon" href="assets/images/cloudicon.ico">
    <title>AboveClouds - Kontakt</title>

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
            <a class="navbar-brand" href="index.php"><span class="cloud">&#9729;</span>
                <h2><em>AboveClouds</em></h2>
            </a>
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
                    <li class="nav-item">
                        <a class="nav-link" href="services.php">Dienste</a>
                    </li>
                    <li class="nav-item active">
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
                <h1>Kontaktier Uns</h1>
                <p><a href="index.php">Home</a> / <span>Kontakt</span></p>
            </div>
        </div>
    </div>
</div>
<!-- Heading Ends Here -->


<!-- Contact Us Starts Here -->
<div class="contact-us">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="contact-form">
                    <form id="contact" action="" method="post">
                        <div class="row">
                            <div class="col-md-12 col-sm-12">
                                <fieldset>
                                    <input name="name" type="text" id="name" placeholder="  Name" required="">
                                </fieldset>
                            </div>
                            <div class="col-md-12 col-sm-12">
                                <fieldset>
                                    <input name="email" type="text" id="email" placeholder="Email" required="">
                                </fieldset>
                            </div>
                            <div class="col-md-12 col-sm-12">
                                <fieldset>
                                    <input name="subject" type="text" id="subject" placeholder="Betreff">
                                </fieldset>
                            </div>
                            <div class="col-lg-12">
                                <fieldset>
                                    <textarea name="message" rows="6" id="message" placeholder="Nachricht"
                                              required=""></textarea>
                                </fieldset>
                            </div>
                            <div class="col-lg-12">
                                <fieldset>
                                    <button type="submit" id="form-submit" class="main-button">Senden</button>
                                    <?php
                                    if ( isset($_POST['subject']) and isset($_POST['message']) and isset($_POST['email']) ) { 
                                        mail(
                                            "kontakt@aboveclouds.online",
                                            "$_POST[subject]",
                                            "$_POST[message]",
                                            "From: Absender <$_POST[email]>"); 
                                    }
                                    ?>
                                </fieldset>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-md-6">
                <div class="right-content">
                    <div class="section-heading">
                        <span>Kontaktieren sie uns</span>
                        <h2>Bleiben sie in Verbindung</h2>
                        <p>Bei Problemen, Fragen oder Anmerkungen sind wir gerne für sie da. Schreiben sie uns dafür
                            einfach eine Email oder rufen sie
                            unsere Hotline an. Wir helfen ihnen gerne!</p>
                    </div>
                    <div class="row">
                        <div class="col-md-6 col-sm-12">
                            <ul>
                                <li><i class="fa fa-support"></i>support@aboveclouds.online</li>
                                <li><i class="fa fa-envelope"></i>kontakt@aboveclouds.online</li>
                                <li><i class="fa fa-globe"></i>www.AboveClouds.online</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Contact Us Ends Here -->

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
    function clearField(t) { //declaring the array outside of the
        if (!cleared[t.id]) { // function makes it static and global
            cleared[t.id] = 1; // you could use true and false, but that's more typing
            t.value = ''; // with more chance of typos
            t.style.color = '#fff';
        }
    }
</script>

</body>

</html>
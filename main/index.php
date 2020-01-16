<?php include_once __DIR__ . '/config/config.php'; ?>

<?php 
// When deleted no Redirect when User is logged in
if (isset($_SESSION['N_ID'])) {
    $var_redirect = "main.php";
    header('Location:' . $var_redirect);
    exit();
} 
?>

<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="TemplateMo">
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700" rel="stylesheet">

    <title>&#9729;AboveClouds - Startseite</title>

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
                    <li class="nav-item active">
                        <a class="nav-link" href="index.php">Home
                            <span class="sr-only">(current)</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="about.php">Über uns</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="services.php">Services</a>
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
<!-- Banner Starts Here -->
<div class="banner">
    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="header-text caption">
                    <h2>Überprüfen Sie Ihre Emailadresse</h2>
                    <div id="search-section">
                        <form id="suggestion_form" name="gs" method="get" action="#">
                            <div class="searchText">

                                <input type="text" name="q" class="searchText"
                                       placeholder="Gebe Sie Ihre Emailadresse hier ein..." autocomplete="on">

                            </div>
                            <input type="submit" name="results" class="main-button" value="Überprüfen">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Banner Ends Here -->

<!-- Trusted Starts Here -->
<div class="trusted-section">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="trusted-section-heading">
                    <h4>TRUSTED BY 1,250+ HAPPY CUSTOMERS WORLDWIDE</h4>
                </div>
            </div>
            <div class="col-md-12">
                <div class="owl-trusted owl-carousel">
                    <div class="trusted-item">
                        <img src="assets/images/itc-logo-small.png" alt="trusted 1">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Trusted Ends Here -->

<!-- Testimonials Starts Here -->
<div class="testimonials-section">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-heading">
                    <span>Testimonials</span>
                    <h2>Was man so munkelt</h2>
                </div>
            </div>
            <div class="col-md-10 offset-md-1">
                <div class="owl-testimonials owl-carousel">
                    <div class="testimonial-item">
                        <div class="icon">
                            <i class="fa fa-quote-right"></i>
                        </div>
                        <p>"AboveClouds ist definitiv unsere größte Konkurenz auf dem Markt."</p>
                        <h4>Gobias Terlinger</h4>
                        <span>CEO von ownCloud</span>
                    </div>
                    <div class="testimonial-item">
                        <div class="icon">
                            <i class="fa fa-quote-right"></i>
                        </div>
                        <p>"AboveClouds ist meineserachtens nach die bessere Lösung im Vergleich zu unserer."</p>
                        <h4>Hew Drouston</h4>
                        <span>CEO von Dropbox</span>
                    </div>
                    <div class="testimonial-item">
                        <div class="icon">
                            <i class="fa fa-quote-right"></i>
                        </div>
                        <p>"AboveClouds wird das nächste große Investment von uns."</p>
                        <h4>Natya Sadella</h4>
                        <span>CEO von Microsoft</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Testimonials Ends Here -->


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
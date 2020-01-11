<?php include_once './config/config.php'; ?>

<!DOCTYPE html>
<html>
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="TemplateMo">
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700" rel="stylesheet">

    <title>Host Cloud Template - Services</title>

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
                        <a class="nav-link" href="about.php">About Us</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="services.php">Our Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact.php">Contact Us</a>
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
                    <h2>Best Services We Provide</h2>
                    <p>Aenean molestie, odio quis viverra ultricies, leo tellus lacinia neque, sit amet maximus tortor
                        nunc aliquet felis. Duis sit amet nibh non sapien tincidunt bibendum. Curabitur rutrum justo id
                        leo ornare, suscipit lobortis augue volutpat.</p>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="service-item">
                    <i class="fa fa-cloud"></i>
                    <h4>VPS Cloud</h4>
                    <p>Fusce blandit commodo metus eu suscipit. Nullam ut blandit neque. Aenean nec tellus ac velit
                        elementum tempor. Pellentesque nec urna ipsum.</p>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="service-item">
                    <i class="fa fa-server"></i>
                    <h4>Fast Network</h4>
                    <p>Sed ligula arcu, interdum eu magna eget, tristique aliquet nibh. Aenean sodales justo vitae ex
                        pharetra, vitae tincidunt dolor condimentum.</p>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="service-item">
                    <i class="fa fa-database"></i>
                    <h4>Reliable Platform</h4>
                    <p>Fusce blandit commodo metus eu suscipit. Nullam ut blandit neque. Aenean nec tellus ac velit
                        elementum tempor. Pellentesque nec urna ipsum.</p>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="service-item">
                    <i class="fa fa-save"></i>
                    <h4>Managed CDN</h4>
                    <p>Sed ligula arcu, interdum eu magna eget, tristique aliquet nibh. Aenean sodales justo vitae ex
                        pharetra, vitae tincidunt dolor condimentum.</p>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="service-item">
                    <i class="fa fa-check"></i>
                    <h4>Optimal Hosting</h4>
                    <p>Fusce blandit commodo metus eu suscipit. Nullam ut blandit neque. Aenean nec tellus ac velit
                        elementum tempor. Pellentesque nec urna ipsum.</p>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="service-item">
                    <i class="fa fa-support"></i>
                    <h4>Customer Support</h4>
                    <p>Cras placerat mauris scelerisque, placerat enim sed, imperdiet diam. Fusce blandit commodo metus
                        eu suscipit. Nullam ut blandit neque.</p>
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
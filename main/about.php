<?php include_once './config/config.php'; ?>

<!DOCTYPE html>
<html>
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="TemplateMo">
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700" rel="stylesheet">

    <title>Host Cloud Template - About Page</title>

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
                <h2><em>AboveClouds</em></h2></a>
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
                    <li class="nav-item active">
                        <a class="nav-link" href="about.php">Über uns</a>
                    </li>
                    <li class="nav-item">
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
                <h1>Über Uns</h1>
                <p><a href="index.php">Home</a> / <span>Über Uns</span></p>
            </div>
        </div>
    </div>
</div>
<!-- Heading Ends Here -->


<!-- About Us Starts Here -->
<div class="about-us">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="left-image">
                    <img src="assets/images/our-team.jpg" alt="">
                </div>
            </div>
            <div class="col-md-6">
                <div class="right-content">
                    <div class="section-heading">
                        <span>Über Uns</span>
                        <h2>Hintergrund unserer Firma</h2>
                        <p>AboveClouds ist eine von Studenten selber erstellte Cloudlösung, welche sich an andere
                            Studenten weltweit richten soll!</p>
                    </div>
                    <div id='tabs'>
                        <ul>
                            <li><a href='#tabs-1'>Unsere Geschichte</a></li>
                            <li><a href='#tabs-2'>Unsere Cloud</a></li>
                            <li><a href='#tabs-3'>Unser Netzwerk</a></li>
                        </ul>
                        <section class='tabs-content'>
                            <article id='tabs-1'>
                                <p> Gegründet 2019 als kleines Projekt von Studenten, hat sich AboveClouds seit her als
                                    intelligente Alternative zu großen Cloudanbietern bewert.
                                    Es machte sich von der kleinen Anwendung mit nur ein paar Features zu einer der
                                    kompetentesten Anwendung auf dem Markt.
                                    <br><br>Seither begeistert AboveClouds Menschen und vorallem Studenten weltweit und
                                    hilft dabei das Chaos eines jeden zu ordnen.</p>
                            </article>
                            <article id='tabs-2'>
                                <p>Aenean molestie, odio quis viverra ultricies, leo tellus lacinia neque, sit amet
                                    maximus tortor nunc aliquet felis. Duis sit amet nibh non sapien tincidunt bibendum.
                                    Curabitur rutrum justo id leo ornare, suscipit lobortis augue volutpat.
                                    <br><br>Sed ligula arcu, interdum eu magna eget, tristique aliquet nibh. Aenean
                                    sodales justo vitae ex pharetra, vitae tincidunt dolor condimentum. Cras vel mattis
                                    risus.</p>
                            </article>
                            <article id='tabs-3'>
                                <p>Fusce in semper velit, at tempus augue. Morbi quis auctor ipsum, ut accumsan neque.
                                    Vivamus dapibus ipsum placerat ante commodo, eget suscipit tortor hendrerit. Quisque
                                    lacinia sed velit et maximus.
                                    <br><br>Quisque dictum, lacus a malesuada finibus, arcu magna luctus risus, eu
                                    accumsan risus elit vitae lacus. Vestibulum et lorem non erat efficitur iaculis ut
                                    nec nibh. Vestibulum mauris ipsum, tempor tincidunt justo sit amet, bibendum
                                    tincidunt dui.</p>
                            </article>
                        </section>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- About Us Ends Here -->


<!-- Team Starts Here -->
<div class="team-section">
    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="section-heading">
                    <span>Unser Team</span>
                    <h2>Triff das Team</h2>
                    <p>Das AboveClouds-Team. Bestehend aus den drei interessantesten Menschen die sie jemals
                        kennenlernen werden. Ausgezeichnet durch
                        ihre Fähigkeiten, ihr Wissen und ihr können sich in jeder Situation zu recht zu finden. </p>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="team-item">
                    <img src="assets/images/team-01.jpg" alt="">
                    <div class="down-content">
                        <h4>Timo Heppner</h4>
                        <span>Co-Founder</span>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="team-item">
                    <img src="assets/images/team-02.jpg" alt="">
                    <div class="down-content">
                        <h4>Kilian Rothkehl</h4>
                        <span>Co-Founder</span>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="team-item">
                    <img src="assets/images/team-03.jpg" alt="">
                    <div class="down-content">
                        <h4>Jonathan Zbick</h4>
                        <span>Co-Founder</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Team Ends Here -->
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
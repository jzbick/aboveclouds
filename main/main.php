<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="TemplateMo">
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700" rel="stylesheet">

    <title>&#9729;AboveClouds - Name</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">

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
    <header class="main-header">
        <nav class="navbar navbar-expand-lg">
            <div class="container">
                <a class="navbar-brand" href="index.html">
                    <h2><span class="cloud">&#9729;</span></h2>
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive"
                    aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive"></div>
            </div>
        </nav>
    </header>

    <!-- Page Content -->
    <!-- Banner Starts Here -->
    <div class="main">
        <div class="banner">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 offset-md-2">
                        <div class="filetable">
                            <table>
                                <thead>
                                    <tr>
                                        <th class="icon">Icon</th>
                                        <th class="name">Name</th>
                                        <th class="datum">Bearbeitet</th>
                                        <th class="button">Buttons</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="icon">Icon</td>
                                        <td class="name">Test.txt</td>
                                        <td class="datum">2019-12-08</td>
                                        <td class="button">
                                            <img style="cursor: pointer;" onclick="Download"
                                                src="https://img.icons8.com/material/24/000000/downloads.png">
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- Banner Ends Here -->


    <!-- Footer Starts Here -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="footer-item">
                        <div class="footer-heading">
                            <h2>Über uns</h2>
                        </div>
                        <p>AboveClouds ist eine von Studenten selber erstellte Cloudlösung, welche sich an andere
                            Studenten
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
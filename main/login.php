<?php
include_once __DIR__ . '/config/config.php';

$TitelDerSeite = "AboveClouds Login";
include __DIR__ . '/templates/html_Header.php';

$loginHappening = 1;
// check for Session Variable
if (isset($_SESSION['N_ID'])) {
    // Redirect
    $var_redirect = "main.php";
    header('Location:' . $var_redirect);
    exit();
}

?>

<?php
//check Form

//E-Mail
if (isset($_POST['email']) and $_POST['email'] != "") {
    $var_mail = $_POST['email'];
} else {
    // No E-Mail found -> do nothing
    $loginHappening = 0;
}

//PASSWORD
if (isset($_POST['pwd']) and $_POST['pwd'] != "") {
    $encryptPWD = sha1($_POST['pwd']);
} else {
    // No Password found -> do nothing
    $loginHappening = 0;
}

if ($loginHappening == 1) {
    //Login...
    //Prepare Check DB PWD
    include __DIR__ . '/templates/checkPWD.php';

    //get DB PW
    $getCheckValue->execute();
    $checkValue = $getCheckValue->fetchColumn();

    //compare PWD
    if ($encryptPWD == $checkValue) {
        // set cookie
        include __DIR__ . '/templates/getNID.php';
        $_SESSION['N_ID'] = $resultNID;
        //
        // Redirect
        $var_redirect = "main.php";
        header('Location:' . $var_redirect);
        exit();
    } else {
        //PASSWORD WRONG
    }
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
                        echo '<li><a href="regUser.php">Registrieren</a></li>';
                    }
                    ?>
                </ul>
            </div>
        </div>
    </nav>
</header>

<div class="login">
    <div class="banner">
        <div class="container">
            <div class="row">
                <div class="col-md-8 offset-md-2">
                    <div class="header-text caption">
                        <form class="login-form" action="" method="post">
                            <div class="ContainerReg">
                                <div class="AreaInput">
                                    <?php
                                    $toCheck = "email";
                                    include __DIR__ . '/templates/checkTemplate.php';
                                    ?>
                                    <input class="inputFeld center" type="text" name="email"
                                           placeholder="E-Mail Adresse">
                                    <br>
                                </div>
                                <?php
                                $toCheck = "pwd";
                                include __DIR__ . '/templates/checkTemplate.php';
                                ?>
                                <input class="inputFeld center" type="password" name="pwd" placeholder="Passwort">
                            </div>

                            <div class="AreaSubmit">
                                <input type="submit" name="loginAction" class="inputFeld regButton" value="Anmelden"/>
                            </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>


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

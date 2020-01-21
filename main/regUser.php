<?php
include_once __DIR__ . '/config/config.php';

$reg_complete = 1;

//Check_Input Script:

//Vorname
if (isset($_POST['vorname']) and $_POST['vorname'] != "") {
    //
} else {
    $reg_complete = 0;
}

//Nachname
if (isset($_POST['nachname']) and $_POST['nachname'] != "") {
    //
} else {
    $reg_complete = 0;
}

//E-Mail
if (isset($_POST['email']) and $_POST['email'] != "") {
    //Now checking if email is already in use
    $checkMailTarget = $_POST['email'];
    include __DIR__ . '/templates/getMail.php';
    if ($checkMailTarget == $resultMail) {
        $reg_complete = 0;
        $MailAlreadyInUse = 1;
    }
} else {
    $reg_complete = 0;
}

//PASSWORD
if (isset($_POST['pwd']) and $_POST['pwd'] != "") {
    //
} else {
    $reg_complete = 0;
}

//PWD-VERRIFY
if (isset($_POST['pwd-verify']) and $_POST['pwd-verify'] != "") {
    //
} else {
    $reg_complete = 0;
}

//CHECK PWD
if (
    isset($_POST['pwd']) and
    $_POST['pwd'] != "" and
    isset($_POST['pwd-verify']) and
    $_POST['pwd-verify'] != "" and
    $_POST['pwd'] == $_POST['pwd-verify']
) {   //create PWD-Hash
    $encryptPWD = sha1($_POST['pwd']);
} else {
    //Two different Passwords
    $reg_complete = 0;
    $var_info = "Die beiden Passwörter stimmen nicht überein...";
}

//SESSION Reg
if ($reg_complete == 1) {
    //Login Complete

    $var_vorname = $_POST['vorname'];
    $var_nachname = $_POST['nachname'];

    //PWD-Function
    $var_pwd = $encryptPWD;

    $var_mail = $_POST['email'];
    $var_rdatum = date("Y-m-d");

    //DB User create:
    include __DIR__ . '/templates/newUser.php';
    $nutzeranlegen->execute();

    //Redirect
    $var_redirect = "login.php";
    header('Location:' . $var_redirect);
    exit();
} else {
//    Problem detected...
}
?><!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="TemplateMo">
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700" rel="stylesheet">
    <link rel="shortcut icon" type="image/x-icon" href="assets/images/cloudicon.ico">
    <title>Bei AboveClouds registrieren</title>

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
                        <a class="nav-link" href="about.php">Über Uns</a>
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
                    <li><a href="login.php">Anmelden</a></li>
                </ul>
            </div>
        </div>
    </nav>
</header>

<div class="register">
    <div class="banner">
        <div class="container">
            <div class="row">
                <div class="col-md-8 offset-md-2">
                    <div class="header-text caption">
                        <form class="login-form" action="" method="post">
                            <div class="ContainerReg">
                                <div class="AreaInput">
                                    <?php
                                    $toCheck = "vorname";
                                    include __DIR__ . '/templates/checkTemplate.php';
                                    ?>
                                    <input class="inputFeld center" type="text" name="vorname"
                                           placeholder="Vorname">
                                    <br>
                                    <?php
                                    $toCheck = "nachname";
                                    include __DIR__ . '/templates/checkTemplate.php';
                                    ?>
                                    <input class="inputFeld center" type="text" name="nachname"
                                           placeholder="Nachname">
                                    <br>
                                    <?php
                                    $toCheck = "email";
                                    include __DIR__ . '/templates/checkTemplate.php';
                                    ?>
                                    <input class="inputFeld center" type="text" name="email"
                                           placeholder="E-Mail Adresse">
                                    <br>
                                    <?php
                                    $toCheck = "pwd";
                                    include __DIR__ . '/templates/checkTemplate.php';
                                    ?>
                                    <input class="inputFeld center" type="password" name="pwd"
                                           placeholder="Passwort">
                                    <br>
                                    <?php
                                    $toCheck = "pwd-verify";
                                    include __DIR__ . '/templates/checkTemplate.php';
                                    ?>
                                    <input class="inputFeld center" type="password" name="pwd-verify"
                                           placeholder="Passwort bestätigen">
                                </div>

                                <div class="AreaSubmit">
                                    <input type="submit" name="loginAction" class="inputFeld regButton"
                                           value="Registrieren"/>
                                </div>
                            </div>
                        </form>
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


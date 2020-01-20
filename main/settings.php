<?php
include './config/config.php';

$sql_username = 'SELECT Vorname, Nachname FROM nutzer where N_ID =:nid';
if (isset($_SESSION['N_ID'])) {
    $nid = $_SESSION['N_ID'];
    $get_user = $dbc->prepare($sql_username);
    $get_user->bindParam(':nid', $nid);
    $get_user->execute();
    $res_username = $get_user->fetchAll(0);
    $username = $res_username[0]['Vorname'] . ' ' . $res_username[0]['Nachname'];
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
    <link rel="shortcut icon" type="image/x-icon" href="assets/images/cloud.ico">
    <title>AboveClouds - Name</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/templatemo-host-cloud.css">
    <link rel="stylesheet" href="assets/css/owl.css">
    <link rel="stylesheet" href="assets/css/dropdown.css">
</head>
<body>
<div id="preloader">
    <div class="jumper">
        <div></div>
        <div></div>
        <div></div>
    </div>
</div>
<div class="flex-container" id="top-bottom">
    <header class="main-header">
        <div class="flex-container">
            <a href="index.php"><span class="cloud">&#9729;</span></a>
            <input type="search" id="suche" placeholder="Suchen...">
            <img onclick="openDropdownImg()" class="drop" id="img" src="assets/images/Bender-Profil.png">
        </div>
        <div id="ImgDropdown" class="dropdown-content">
            <a href="settings.php"><?= $username ?></a>
            <hr class="Menu-Separierer">
            <a href="settings.php">Einstellungen</a>
            <hr class="Menu-Separierer">
            <a href="logout.php">Abmelden</a>
        </div>
    </header>
    <div class="flex-container" id="name">
        <label>Nutzername</label>
    </div>
    <div class="flex-container" id="email">
        <label>Emailadresse</label>
    </div>
    <div class="flex-container" id="password">
        <label>Passwort</label>
    </div>
</div>
<!-- Bootstrap core JavaScript -->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Additional Scripts -->
<script src="assets/js/custom.js"></script>
<script src="assets/js/owl.js"></script>
<script src="assets/js/accordions.js"></script>
<script src="assets/js/dropdown.js"></script>
<script src="assets/js/upload_btn.js"></script>
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


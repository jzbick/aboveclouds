<?php
include './config/config.php';

$sql_username = 'SELECT * FROM nutzer where N_ID =:nid';
if (isset($_SESSION['N_ID'])) {
    $nid = $_SESSION['N_ID'];
    $get_user = $dbc->prepare($sql_username);
    $get_user->bindParam(':nid', $nid);
    $get_user->execute();
    $res_username = $get_user->fetchAll(0);
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
    <title>AboveClouds - Einstellungen</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/templatemo-host-cloud.css">
    <link rel="stylesheet" href="assets/css/owl.css">
    <link rel="stylesheet" href="assets/css/dropdown.css">
    <link rel="stylesheet" href="assets/css/InputField.css">
    <link rel="stylesheet" href="assets/css/settings.css">
</head>

<body>
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>
    <header class="main-header">
        <div class="flex-container" id="left-right">
            <a href="index.php"><span class="cloud">&#9729;</span></a>
            <input type="search" id="suche" placeholder="Suchen...">
            <img onclick="openDropdownImg()" class="drop" id="img" src="assets/images/Bender-Profil.png">
        </div>
        <div id="ImgDropdown" class="dropdown-content">
            <a href="settings.php"><?= $username ?></a>
            <hr class="Menu-Separierer">
            <a href="logout.php">Abmelden</a>
        </div>
    </header>
    <div class="flex-container" id="top-bottom">
        <div class="flex-container" id="name">
            <label>Nutzername</label>
            <form class="edit-form hide-form" id="username-form" method="put" action="./user/editUsername.php">
                <h2>Nutzername</h2>
                <div class="input-wrapper">
                    <div class="inputField">
                        <input type="text" class="inputField-input" id="vorname-input-field" name="vorname-input" placeholder="Vorname" value="<?= $res_username[0]['Vorname'] ?>" />
                        <label class="inputField-label">Vorname:</label>
                    </div>
                    <div class="inputField">
                        <input type="text" class="inputField-input" id="nachname-input-field" name="nachname-input" placeholder="Nachname" value="<?= $res_username[0]['Nachname'] ?>" />
                        <label class="inputField-label">Nachname:</label>
                    </div>
                </div>
                <div class="edit-form-btn-wrapper">
                    <button class="edit-form-btn">Zurück</button>
                    <button class="edit-form-btn">Speichern</button>
                </div>
            </form>
        </div>
        <div class="flex-container" id="email">
            <label>Email-Adresse</label>
            <form class="edit-form hide-form" id="username-form" method="put" action="./user/editUsername.php">
                <h2>Email-Adresse</h2>
                <div class="input-wrapper">
                    <div class="inputField">
                        <input type="email" class="inputField-input" id="email-input-field" name="email-input" placeholder="Email-Adresse" value="<?= $res_username[0]['Email'] ?>" />
                        <label class="inputField-label">Email-Adresse:</label>
                    </div>
                </div>
                <div class="edit-form-btn-wrapper">
                    <button class="edit-form-btn">Zurück</button>
                    <button class="edit-form-btn">Speichern</button>
                </div>
            </form>
        </div>
        <div class="flex-container" id="password">
            <label>Passwort</label>
            <form class="edit-form hide-form" id="username-form" method="put" action="./user/editUsername.php">
                <h2>Passwort</h2>
                <div class="input-wrapper">
                    <div class="inputField">
                        <input type="password" class="inputField-input" id="pw-input-field" name="pw-input" placeholder="Password" value="" />
                        <label class="inputField-label">Neues Passwort:</label>
                    </div>
                    <div class="inputField">
                        <input type="text" class="inputField-input" id="pw-repeat-input-field" name="pw-repeat-input" placeholder="Nachname" value="" />
                        <label class="inputField-label">Passwort wiederholen:</label>
                    </div>
                </div>
                <div class="edit-form-btn-wrapper">
                    <button class="edit-form-btn">Zurück</button>
                    <button class="edit-form-btn">Speichern</button>
                </div>
            </form>
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
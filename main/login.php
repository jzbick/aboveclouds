<?php
include '../config/config.php';

$TitelDerSeite = "AboveClouds Login";
include __DIR__ . '/templates/html_Header.php';

$loginHappening = 1;
// check Cookie
if (isset($_COOKIE['pwd']) and isset($_COOKIE['N_ID'])) {
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

<form class="login-form" action="" method="post">
    <div class="ContainerReg">
        <div class="login-img">
            <img src=".\assets\images\aboveclouds_logo.png" alt="AVATAR">
        </div>

        <div class="AreaInput">
            <?php
            $toCheck = "email";
            include __DIR__ . '/templates/checkTemplate.php';
            ?>
            <input class="inputFeld center" type="text" name="email" placeholder="E-Mail Adresse">

            <br>

            <?php
            $toCheck = "pwd";
            include __DIR__ . '/templates/checkTemplate.php';
            ?>
            <input class="inputFeld center" type="password" name="pwd" placeholder="Passwort">
        </div>

        <div class="AreaSubmit">
            <input type="submit" name="loginAction" class="inputFeld regButton" value="Anmelden" />
        </div>
    </div>
</form>



<?php include __DIR__ . '/templates/body_End.php'; ?>

<?php include __DIR__ . '/templates/html_End.php'; ?>
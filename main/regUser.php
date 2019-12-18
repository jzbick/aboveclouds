<?php session_start(); ?>

<?php

$TitelDerSeite = "Bei AboveClouds registrieren";
$reg_complete = 1;

include __DIR__ . '/templates/html_Header.php';

?>

<?php 
//Check_Input Script:

//Vorname
if (isset($_POST['vorname']) and $_POST['vorname'] != "") {
    //
} else {
    $reg_complete=0;
}

//Nachname
if (isset($_POST['nachname']) and $_POST['nachname'] != "") {
    //
} else {
    $reg_complete=0;
}

//E-Mail
if (isset($_POST['email']) and $_POST['email'] != "") {
    //
} else {
    $reg_complete=0;
}

//PASSWORD
if (isset($_POST['pwd']) and $_POST['pwd'] != "") {
    //
} else {
    $reg_complete=0;
}

//PWD-VERRIFY
if (isset($_POST['pwd-verify']) and $_POST['pwd-verify'] != "") {
    //
} else {
    $reg_complete=0;
}

//CHECK PWD
if (isset($_POST['pwd']) and
    $_POST['pwd'] != "" and 
    isset($_POST['pwd-verify']) and 
    $_POST['pwd-verify'] != "" and 
    $_POST['pwd'] == $_POST['pwd-verify']) 
    {   //create PWD-Hash
        $encryptPWD = password_hash($_POST['pwd'], PASSWORD_DEFAULT);
} else {
    //Two different Passwords
    $reg_complete=0;
    $var_info="Die beiden Passwörter stimmen nicht überein...";
}

//SESSION Reg
if ($reg_complete == 1) {
    //Login Complete

    $var_vorname=$_POST['vorname'];
    $var_nachname=$_POST['nachname'];

    //PWD-Function
    $var_pwd = $encryptPWD;

    $var_mail=$_POST['email'];
    $var_rdatum=date("Y-m-d");

    //DB User create:
    include __DIR__ . '/templates/newUser.php';
    $nutzeranlegen->execute();

    //Create SESSION Variable
    //$_SESSION['Testwert'] = "complete";

    //Redirect
    $var_redirect = "main.php";
    header('Location:' . $var_redirect );
    exit();

} else {
    //No Reg
    //$_SESSION['Testwert'] = "no Login";
}
?>

<form class="login-form" action="" method="post">
    <div class="ContainerReg">
        <div class="login-img">
	        <img src=".\assets\images\aboveclouds_logo.png" alt="AVATAR">
        </div>

        <div class="AreaInput">
            <?php 
            $toCheck = "vorname";
            include __DIR__ . '/templates/checkTemplate.php';
            ?>
            <input class="inputFeld center" type="text" name="vorname" placeholder="Vorname">
            <?php 
            $toCheck = "nachname";
            include __DIR__ . '/templates/checkTemplate.php';
            ?>
            <input class="inputFeld center" type="text" name="nachname" placeholder="Nachname">
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
            <?php 
            $toCheck = "pwd-verify";
            include __DIR__ . '/templates/checkTemplate.php';
            ?>
            <input class="inputFeld center" type="password" name="pwd-verify" placeholder="Passwort bestätigen">
        </div>
        
        <div class="AreaSubmit">
    	    <input type="submit" name="loginAction" class="inputFeld regButton" value="Registrieren" />
        </div>
    </div>
</form>

<?php 
//Ausgabe zum Testen:
echo '<br>';
print_r($_POST);
echo '<br>';
print_r($_SESSION);
echo '<br>';
echo $reg_complete;
?>

<?php include __DIR__ . '/templates/html_End.php'; ?>

<?php include __DIR__ . '/templates/html_End.php'; ?>
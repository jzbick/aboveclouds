<?php
$TitelDerSeite = "AboveClouds Login";
include __DIR__ . '/templates/html_Header.php';

$loginHappening = 1;
// ?check Cookie or Session?
?>

<?php
//check Form

//E-Mail
if (isset($_POST['email']) and $_POST['email'] != "") {
    $var_mail = $_POST['email'];
} else {
    // No E-Mail found
    $loginHappening = 0;
}

//PASSWORD
if (isset($_POST['pwd']) and $_POST['pwd'] != "") {
    $encryptPWD = password_hash($_POST['pwd'], PASSWORD_BCRYPT);
} else {
    // No Password found
    $loginHappening = 0;
}

if ($loginHappening == 1) {
    //Login...
    //Check DB PWD
    include __DIR__ . '/templates/checkPWD.php';

    //get DB PW
    $getCheckValue->execute();
    $checkValue=$getCheckValue->fetchColumn();
    $testVerify = password_verify($_POST['pwd'], $encryptPWD);

    //compare PWD
    if($encryptPWD == $checkValue) {
       // Redirect
       // $var_redirect = "main.php";
       // header('Location:' . $var_redirect );
       // exit();
    } else {
        //PASSWORD WRONG
        echo $encryptPWD ;
        echo '<br>';
        echo $checkValue ;
        echo '<br>';
        echo $testVerify ;
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


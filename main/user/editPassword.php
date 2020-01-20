<?php
include_once '../config/config.php';

$sql = "UPDATE Nutzer SET Passwort=:password WHERE N_ID=:nid";

$new_pw = $_POST['new_pw'];
$new_pw_repeat = $_POST['new_pw_repeat'];
if (isset($new_pw, $new_pw_repeat, $_SESSION['N_ID'])) {
    if ($new_pw === $new_pw_repeat) {
        $new_pw_hash = sha1($new_pw);
        $edit_passwort = $dbc->prepare($sql);
        $edit_passwort->bindParam(':password', $new_pw_hash);
        $edit_passwort->bindParam(':nid', $_SESSION['N_ID']);
        $edit_passwort->execute();
    }
}

header('Location: ../settings.php');

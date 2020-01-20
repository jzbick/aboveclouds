<?php
include_once '../config/config.php';

$sql = "UPDATE Nutzer SET Vorname=:vorname, Nachname=:nachname WHERE N_ID=:nid";

$new_vorname = $_GET['new_vorname'];
$new_nachname = $_GET['new_nachname'];
if (isset($new_vorname, $new_nachname, $_SESSION['N_ID'])) {
    $edit_username = $dbc->prepare($sql);
    $edit_username->bindParam(':vorname', $new_vorname);
    $edit_username->bindParam(':nachname', $new_nachname);
    $edit_username->bindParam(':nid', $_SESSION['N_ID']);
    $edit_username->execute();
}

header('Location: ../settings.php');

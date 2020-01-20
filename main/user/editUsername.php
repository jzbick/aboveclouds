<?php
include_once '../config/config.php';

$sql = "update nutzer set vorname=:vorname, nachname=:nachname where n_id=:nid";

$new_vorname = $_PUT['new_vorname'];
$new_nachname = $_PUT['new_nachname'];
if (isset($new_vorname, $new_nachname, $_SESSION['N_ID'])) {
    $edit_username = $dbc->prepare($sql);
    $edit_username->bindParam(':vorname', $new_vorname);
    $edit_username->bindParam(':nachname', $new_nachname);
    $edit_username->bindParam(':nid', $_SESSION['N_ID']);
    $edit_username->execute();
}

header('Location: ../main.php');

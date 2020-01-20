<?php
include_once '../config/config.php';

$sql = "update nutzer set email=:email where n_id=:nid";

$new_email = $_PUT['new_email'];
if (isset($new_email, $_SESSION['N_ID'])) {
    $edit_email = $dbc->prepare($sql);
    $edit_email->bindParam(':email', $new_email);
    $edit_email->bindParam(':nid', $_SESSION['N_ID']);
    $edit_email->execute();
}

header('Location: ../settings.php');

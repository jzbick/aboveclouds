<?php
include_once '../config/config.php';

$sql = "DELETE FROM Nutzer WHERE N_ID=:nid";

if (isset($_SESSION['N_ID'])) {
    $del_acc = $dbc->prepare($sql);
    $del_acc->bindParam(':nid', $_SESSION['N_ID']);
    $del_acc->execute();
    session_destroy();
}

header('Location: ../index.php');

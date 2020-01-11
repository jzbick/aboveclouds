<?php
/* A prepared Statement -> get N_ID from DB */
include '../config/config.php';


$sql_read_nid = 'SELECT N_ID FROM nutzer WHERE Email = :mail';

$auslesen_nid = $dbc->prepare($sql_read_nid);
$auslesen_nid->bindParam(':mail', $var_mail);
$auslesen_nid->execute();
/* Die ausgeführte Abfrage anfordern und erste Zeile der Ausgabe auslesen: */
$resultNID = $auslesen_nid->fetchColumn();

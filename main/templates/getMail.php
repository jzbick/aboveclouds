<?php
/* A prepared Statement -> get email from DB */
include_once __DIR__ . '/../config/config.php';


$sql_read_mail = 'SELECT Email FROM nutzer WHERE Email = :mail';

$auslesen_mail = $dbc->prepare($sql_read_mail);
$auslesen_mail->bindParam(':mail', $checkMailTarget);
$auslesen_mail->execute();
/* read first line of query */
$resultMail = $auslesen_mail->fetchColumn();
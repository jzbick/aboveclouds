<?php
/* Ein prepared Statement für die Registrierung auf der Website -> Nutzer anlegen */
include __DIR__ . '/../config/config.php';

$sql_user = 'INSERT INTO nutzer (Vorname, Nachname, Passwort, Email, RDatum) VALUES (:vorname, :nachname, :pwd, :mail, :rdatum)';

/* Im Hauptprogramm müssen vor dem Include Befehl die nachfolgenden Variablen angelegt worden sein */
$nutzeranlegen = $dbc->prepare($sql_user);
$nutzeranlegen->bindParam(':vorname', $var_vorname);
$nutzeranlegen->bindParam(':nachname', $var_nachname);
$nutzeranlegen->bindParam(':pwd', $var_pwd);
$nutzeranlegen->bindParam(':mail', $var_mail);
$nutzeranlegen->bindParam(':rdatum', $var_rdatum);

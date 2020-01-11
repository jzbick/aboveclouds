<?php
/* prepared Statement used to verify login */
include __DIR__ . '/../config/config.php';

$sql_pwd = 'SELECT Passwort FROM nutzer WHERE Email = :mail';

/* Im Hauptprogramm müssen vor dem Include Befehl die nachfolgenden Variablen angelegt worden sein */
$getCheckValue = $dbc->prepare($sql_pwd);
$getCheckValue->bindParam(':mail', $var_mail);

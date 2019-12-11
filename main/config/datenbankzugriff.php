<?php 
/* Verbindung zur Datenbank herstellen */

$db_name = 'mysql:dbname=aboveclouds;host=localhost';
$db_user = 'aboveclouds';
$db_p = '1qay2wsx';

try {
    $dbc = new PDO($db_name, $db_user, $db_p);
} catch (PDOException $e) {
    echo 'Verbindung zur Datenbank fehlgeschlagen: ' . $e->getMessage();
}

?>
<?php
include_once '../config/config.php';

$sql = 'update Datei set Name = :name, Pfad = :pfad WHERE D_ID = :did';

$rename_file = $dbc->prepare($sql);
$rename_file->bindParam(':name', $new_name);
$rename_file->bindParam(':did', $_GET['did']);
$rename_file->bindParam(':pfad', $new_path);

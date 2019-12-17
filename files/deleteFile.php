<?php
include '../main/config/datenbankzugriff.php';
$sql = 'DELETE FROM Datei WHERE Pfad = :pfad';

$delete_file = $dbc->prepare($sql);
$delete_file->bindParam(':pfad', $file_path);

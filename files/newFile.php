<?php
include_once './config/config.php';

$sql = 'INSERT INTO Datei (Name,Pfad,ADatum,N_ID) VALUES (:name,:pfad,:adatum,:nid)';

$new_file = $dbc->prepare($sql);
$new_file->bindParam(':name', $file_name);
$new_file->bindParam(':pfad', $file_path);
$new_file->bindParam(':adatum', $file_adatum);
$new_file->bindParam(':nid', $file_nid);

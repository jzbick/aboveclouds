<?php

function getPath($d_id, $dbc)
{
    $sql = 'SELECT Pfad FROM Datei WHERE D_ID = :d_id';
    $get_path = $dbc->prepare($sql);
    $get_path->bindParam(':d_id', $d_id);
    $get_path->execute();
    return $get_path->fetchColumn();
}

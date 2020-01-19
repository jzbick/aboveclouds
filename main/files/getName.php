<?php

function getName($d_id, $dbc)
{
    $sql = 'SELECT Name FROM Datei WHERE D_ID = :d_id';
    $get_name = $dbc->prepare($sql);
    $get_name->bindParam(':d_id', $d_id);
    $get_name->execute();
    return $get_name->fetchColumn();
}

<?php
include_once '../config/config.php';
include './getPath.php';

$file_path = getPath($_GET['did'], $dbc);
if (file_exists($file_path)) {
    unlink($file_path) or die('File could not be deleted.');
    include './deleteFile.php';
    $delete_file->execute();
}

header('Location: ../main.php');

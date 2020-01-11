<?php
include '../config/config.php';

$file_path = '../userfiles/' . $_COOKIE['N_ID'] . '/' . $_GET['path'];
if (file_exists($file_path)) {
    unlink($file_path) or die('File could not be deleted.');
    include './deleteFile.php';
    $delete_file->execute();
}

header('Location: ../main/main.php');

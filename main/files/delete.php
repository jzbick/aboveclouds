<?php
include_once '../config/config.php';

$file_path = USERFILE_DIR . '/' . $_SESSION['N_ID'] . '/' . $_GET['path'];
var_dump($file_path);
var_dump(file_exists($file_path));
if (file_exists($file_path)) {
    unlink($file_path) or die('File could not be deleted.');
    include './deleteFile.php';
    $delete_file->execute();
}

// header('Location: ../main.php');

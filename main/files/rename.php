<?php
include_once '../config/config.php';
include './getPath.php';
include './getName.php';

$file_path = getPath($_GET['did'], $dbc);
$file_name = getName($_GET['did'], $dbc);
if (strlen($new_name) > 0) {
    $new_path =  str_replace($file_name, $new_name, $file_path);
    rename($file_path, $new_path) or die('File could not be renamed.');
    include './renameFile.php';
    $rename_file->execute();
}

header('Location: ../main.php');

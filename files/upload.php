<?php
if ($_COOKIE['N_ID']) {
    for ($i = 0; $i < count($_FILES['userfile']['name']); $i++) {
        $uploaddir = '../userfiles/' . $_COOKIE['N_ID'] . '/';
        $uploadfile = $uploaddir . basename($_FILES['userfile']['name'][$i]);
        $file_name = $_FILES['userfile']['name'][$i];
        $file_path = $uploadfile;
        $file_adatum = date('Y-m-d H:i:s');
        $file_nid = $_COOKIE['N_ID'];
        if (!file_exists($uploaddir)) {
            mkdir($uploaddir, 0777, true);
        }
        if (!file_exists($uploadfile)) {
            move_uploaded_file($_FILES['userfile']['tmp_name'][$i], $uploadfile);
            include_once './newFile.php';
            $new_file->execute();
        }
    }
} else {
    header('Location: http://aboveclouds.online/');
}
header('Location: ../main/main.php');

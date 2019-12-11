<?php
    if($_COOKIE['N_ID']){ 
        $uploaddir = '../userfiles/' . $_COOKIE['N_ID'] . '/';
        $uploadfile = $uploaddir . basename($_FILES['userfile']['name']);
        $file_name = $_FILES['userfile']['name'];
        $file_path = $uploadfile;
        $file_adatum = date('Y-m-d H:i:s');
        $file_nid = $_COOKIE['N_ID'];
        if (!file_exists($uploaddir)) {
            mkdir($uploaddir, 0777, true);
        }
        if(!file_exists($uploadfile)){
            move_uploaded_file($_FILES['userfile']['tmp_name'], $uploadfile);
            include_once './newFile.php';
            $new_file->execute();
        }
    }else {
        header('Location: http://aboveclouds.online/');
    }
?>

<script> 
    window.location.pathname= '/aboveclouds/main/main.php';
</script>
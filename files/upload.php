<?php
   if($_COOKIE['N_ID']){ 
        $uploaddir = '../userfiles/' . $_COOKIE['N_ID'] . '/';
        $uploadfile = $uploaddir . basename($_FILES['userfile']['name']);
        if (!file_exists($uploaddir)) {
            mkdir($uploaddir, 0777, true);
        }
        move_uploaded_file($_FILES['userfile']['tmp_name'], $uploadfile);
    }else {
        header('Location: http://aboveclouds.online/');
    }
?>

<script> 
    window.history.back();
</script>
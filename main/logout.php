<?php
include __DIR__ . '/config/config.php';

session_destroy();

$var_redirect = "index.php";
header('Location:' . $var_redirect);
exit();
?>
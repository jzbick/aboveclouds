<?php
//Notes:
//Define $toCheck before including this template

if (isset($_POST[$toCheck]) and $_POST[$toCheck] == "") {
    echo '<input class="inputFeld center" type="text" name="' . $toCheck . '" value="' . $_POST[$toCheck] . '">';
} else {
echo '<input class="inputFeld center" type="text" name="vorname" placeholder="Vorname">';
}
?>
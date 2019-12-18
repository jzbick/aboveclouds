<?php 
//Notes:
//Define $toCheck before including this template


// Special PWD / PWD-VERIFY BEHAVIOR:
if($toCheck == "pwd" or $toCheck == "pwd-verify")
{
    if ( isset($_POST[$toCheck]) and $_POST[$toCheck] == "") { 
        echo '<p class="txt-c">Das Passwort-Feld muss ausgefüllt werden:</p>';
    }    

} else {

// Normal Function here:
    if ( isset($_POST[$toCheck]) and $_POST[$toCheck] == "") { 
        echo '<p class="txt-c">Das Feld ' . $toCheck . ' muss ausgefüllt werden:</p>';
    }    else {
        //
    }
}
?>
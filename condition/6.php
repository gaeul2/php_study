<?php
if ($_POST['id']=='egoing'){
    if($_POST['password'] == '1111'){
        echo 'right';
    } else {
        echo 'passwrod wrong';
    }
} else {
    echo 'id wrong';
}
?>
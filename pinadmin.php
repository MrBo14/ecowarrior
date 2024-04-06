<?php
if ($_POST['pin'] == 1448) {
    echo '<script type ="text/JavaScript">';
    echo 'alert("~Ara Ara~")';
    header("Refresh:0; url=daftar.php");
    echo '</script>';
} else {
    echo '<script type ="text/JavaScript">';
    echo 'alert("~Bakaaa!~")';
    header("Refresh:0; url=index.php");
    echo '</script>';
}

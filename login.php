<?php
require_once 'config.php';

session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get username and password from form
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password = mysqli_real_escape_string($conn, $_POST['pwd']);

    $sql = "SELECT * FROM user_acc WHERE ua_username = '$username' AND ua_password = '$password'";
    $result = mysqli_query($conn, $sql);

    // Check if user exists
    if (mysqli_num_rows($result) == 1) {
        $row = $result->fetch_assoc();
        $_SESSION['username'] = $username;
        $ref_id = $_SESSION['ref_id'];
        header("location: home.php");
    } else {
        echo '<script type ="text/JavaScript">';
        echo 'alert("~Sila Semak Semula!!~")';
        header("Refresh:0; url=index.php");
        echo '</script>';
    }

    mysqli_close($conn);
}

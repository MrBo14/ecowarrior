
<?php
$dbservername = "localhost";
$dbusername = "root";
$dbpassword = "";
$db = "ecowarrior";

// Create connection
$conn = mysqli_connect($dbservername, $dbusername, $dbpassword, $db) or die('Please try again');

// // Check connection
// if (!$conn) {
//     die("Connection failed: " . $conn);
// } else {
//     "Connected Successfully";
// }
?>

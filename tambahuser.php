<?php
include_once 'config.php';

if (isset($_POST['username'])) {
    $file = rand(1000, 100000) . "-" . $_FILES['propic']['name'];
    $file_loc = $_FILES['propic']['tmp_name'];
    $file_size = $_FILES['propic']['size'];
    $file_type = $_FILES['propic']['type'];
    $folder = "../uploaded/";

    $new_size = $file_size / 1024;

    $new_file_name = strtolower($file);

    $final_file = str_replace(' ', '-', $new_file_name);

    $username = $_POST['username'];
    $password = $_POST['pwd'];

    // Check if username or email already exists
    $sql = "SELECT * FROM user_acc WHERE ua_username='$username'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        echo '<script type ="text/JavaScript">';
        echo 'alert("~Username dan Kata Laluan telah WUJUD!!~")';
        header("Refresh:0; url=daftar.php");
        echo '</script>';
    } else

    if (move_uploaded_file($file_loc, $folder . $final_file)) {
        $sql = "INSERT INTO user_acc(ua_username,ua_password,ua_profile,ua_type_file,ua_file_size) VALUES('$username', '$password', '$final_file', '$file_type', '$new_size')";
        mysqli_query($conn, $sql);

        echo '<script type ="text/JavaScript">';
        echo 'alert("~Berjaya Daftar!!~")';
        header("Refresh:0; url=daftar.php");
        echo '</script>';
    }
}
?>

	<!-- <cfset EncryptedPassword = hash( '#form.pwd#', 'MD5' )> -->

	<!-- INSERT THUMBNAIL-->
	<!-- <cffile action="upload" filefield="propic"
	destination=".\img\"
	accept="image/*"
	result="thisresult"
	nameconflict="makeunique" mode="755"/> -->
	<!-- INSERT THUMBNAIL-->

	<!-- <CFQUERY NAME="INSERT" DATASOURCE="mysistem" RESULT="INSERTRESULT">
		INSERT INTO user_acc (
		ua_username,
		ua_password,
		ua_profile
		) VALUES (
		<CFQUERYPARAM VALUE="#form.username#" CFSQLTYPE="VARCHAR">,
		<CFQUERYPARAM VALUE="#EncryptedPassword#" CFSQLTYPE="VARCHAR">,
		<CFQUERYPARAM VALUE="#thisresult.serverfile#" CFSQLTYPE="VARCHAR">
		)
	</CFQUERY> -->

    <!-- <script>alert("SELESAI DAFTAR");</script>
    <CFOUTPUT>
        <meta http-equiv="refresh" content="0;URL='index.cfm'" />
    </CFOUTPUT> -->

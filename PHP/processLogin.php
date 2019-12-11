<?php
// Starting session
	session_start();
	
//checks the user name and password
$username = $_POST['username'];
$password = $_POST['password'];

$servername = "mysql.cms.waikato.ac.nz";
$dbusername = "amha2";
$dbpassword = "my10945365sql";
$dbname = "amha2";

// Create connection
$conn = mysqli_connect($servername, $dbusername, $dbpassword, $dbname);
// Check connection
if (!$conn) {
	die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT * FROM `UserTable` WHERE username ='$username' AND password ='$password'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
	
	// Accessing session data
	$_SESSION["logged_in"] = 'true';
	header("location:Home.php");
} else {
	$_SESSION["logged_in"] = 'false';
	echo "Not login";
}
//close connection
mysqli_close($conn);

?>
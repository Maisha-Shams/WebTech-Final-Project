<?php

if (isset($_POST["submit"])) {
	$name = $_POST["name"];
	$email = $_POST["email"];
	$phone = $_POST["phone"];
	$status = $_POST["status"];
	$address = $_POST["address"];

	$authUser = $_SESSION['auth'];

	$dbserver = "localhost";
	$dbuser = "root";
	$dbpass = "";
	$dbname = "bankmanagementsystem";
	function getconnection()
	{
		global $dbname;
		global $dbserver;
		global $dbpass;
		global $dbuser;

		return  mysqli_connect($dbserver, $dbuser, $dbpass, $dbname);
	}

	$email = $_SESSION['email'];

	$conn = getconnection();
	$sql = "select * from employee where email='{$email}'";

	$sql = "UPDATE employee SET  Name='$name', email='$email', PhnNo='$phone', Status='$status', Address='$address' where email='$authUser'";
	$result = mysqli_query($conn, $sql);

	if ($result >= mysqli_query($conn, $sql)) {
		echo "Info Updated Successfully";
		// $sql = "SELECT * FROM users WHERE username ='$username'";
		// $result = $conn->query($sql);
		// $result = mysqli_fetch_assoc($result);
		// $_SESSION["username"]= $result['username'];


		header("refresh: 4; url = UserHome.php");
	} else {
		echo " failed to update";
		header("refresh: 4; url = UserHome.php");
	}
} else {
	if (session_status() == PHP_SESSION_NONE) {
	}
	//header("location:user.php");
}

<?php
session_start();
if (isset($_COOKIE['status'])) {


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
	$result = $conn->query($sql);
	$result = mysqli_fetch_assoc($result);
} else {
	echo "inv";
	header("refresh: 0.0; url = errorPage.php");
}
?>




<!DOCTYPE html>
<html>

<head>
	<title>Home</title>
	<link rel="stylesheet" href="../Asset/userHomeStyle.css" />
</head>

<body>
	<div class="welcome">
		<div class="welcometext">Welcome,<?php echo $result['Name']; ?></div>
		<div class="logout"><a href="../Controller/Logout.php">logout</a></div>
	</div>
	<div class="inputfield">
		<button class="btn" onclick="window.location.href = '../View/Profile.php?email=<?php echo $email ?>';">
			Profile
		</button>
		<br>
		<br>
		<button class="btn" onclick="window.location.href='../View/addCustForm.php?email=<?php echo $email ?>';">Add New Customer Account</button>
		<br>
		<br>
		<button class="btn" onclick="window.location.href='../View/viewCustomer.php?email=<?php echo $email ?>';">Customer List</button>
		<br>
		<br>
		<button class="btn" onclick="window.location.href='../View/editProfile.php?email=<?php echo $email ?>';">Edit Profile</button>
		<br>
		<br>
		<button class="btn" onclick="window.location.href='../View/TransactionHistory.php?email=<?php echo $email ?>';">Transaction History</button>
	</div>
</body>
<script src="../Asset/BalanceCheck.js"></script>

</html>
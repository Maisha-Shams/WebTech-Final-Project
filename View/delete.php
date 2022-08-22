<?php
$AccNum = $_REQUEST['email'];

// $AccNum = $_REQUEST['accNum'];

$dbserver = "localhost";
$dbdata = "root";
$dbpass = "";
$dbname = "bankmanagementsystem";
function getconnection()
{
      global $dbname;
      global $dbserver;
      global $dbpass;
      global $dbdata;

      $conn = mysqli_connect($dbserver, $dbdata, $dbpass, $dbname);

      return $conn;
}

$conn = getconnection();
//$sql = "select * from customer";
$sql = "DELETE FROM customer WHERE AccNum=$AccNum";
mysqli_query($conn, $sql);
echo "ACCOUNT DELETED SUCCESFULLY !";
header("refresh: 2.0; url = viewCustomer.php");

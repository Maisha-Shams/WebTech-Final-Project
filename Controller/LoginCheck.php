<?php
require_once('../model/employeeModel.php');

$json = $_POST['data'];

$loginCredentials = json_decode($json);

$email = $loginCredentials->email;
$password = $loginCredentials->password;

if ($email == null || $password == null) {
	echo "null";
} 
else if($email[0]== "0" ||$email[0]== "1"||$email[0]== "2"||$email[0]== "3"||$email[0]== "4"||$email[0]== "5"||$email[0]== "6"||$email[0]== "7"||$email[0]== "8"||$email[0]== "9")
{
    echo "Please enter letter first!";
}else {

	$status  = login($email, $password);

	if ($status) {
		setcookie('status', 'true', time() + 3600, '/');
		session_start();
		$_SESSION["email"] = $email;
		echo "success";
	} else {
		echo "failed";
	}
}

<?php

require_once('../model/employeeModel.php');

$json = $_POST['data'];

$user = json_decode($json);

$userName = $user->userName;
$password = $user->password;
$email = $user->email;
$phnNum = $user->phnNo;
$nid = $user->nid;
$DOB = $user->dob;
$gender = $user->gender;
$status = $user->mStatus;
$bGroup = $user->bGroup;
$religion = $user->religion;
$address = $user->address;


insert(['name' => $userName, 'password' => $password, 'email' => $email, 'phnNo' => $phnNum, 'nid' => $nid, 'DOB' => $DOB, 'gender' => $gender, 'status' => $status, 'bGroup' => $bGroup, 'religion' => $religion, 'address' => $address]);

<?php

require_once('Database.php');

function insert($user)
{
      $conn = getconnection();
      $sql =  "INSERT INTO `customer` (`Name`, `Password`, `AccNum`, `email`, `NID`, `DOB`, `Gender`, `Status`, `BloodGroup`, `Religion`, `Address`, `Balance`) VALUES ('{$user['name']}', '{$user['password']}', '{$user['accNum']}', '{$user['email']}', '{$user['nid']}', '{$user['DOB']}', '{$user['gender']}', '{$user['status']}', '{$user['bGroup']}', '{$user['religion']}', '{$user['address']}', '{$user['balance']}')";
      mysqli_query($conn, $sql);
}

function getUser($accNum)
{

      $conn = getconnection();
      $sql = "select * from Customer where AccNum like $accNum;";
      $result = mysqli_query($conn, $sql);
      $count = mysqli_num_rows($result);

      if ($count > 0) {
            return mysqli_fetch_assoc($result);
      } else {
            echo 'No Data Found!!!';
      }
}

function updateUser($accNum, $user)
{
      $conn = getconnection();
      $sql = "UPDATE `customer` SET `Name` = '{$user['name']}', `Password` = '{$user['password']}', `AccNum` = '{$user['accNum']}', `Email` = '{$user['email']}', `NID` = '{$user['nid']}', `DOB` = '{$user['DOB']}', `Gender` = '{$user['gender']}', `Status` = '{$user['status']}', `BloodGroup` = '{$user['bGroup']}', `Religion` = '{$user['religion']}', `Address` = '{$user['address']}' WHERE `customer`.`AccNum` = $accNum;";
      mysqli_query($conn, $sql);
}

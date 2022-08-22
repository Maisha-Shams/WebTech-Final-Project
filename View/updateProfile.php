<!DOCTYPE html>
<html lang="en">

<head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Document</title>
</head>

<body>
      <?php
      require_once('../Model/CustomerModel.php');
      $accNum = $_REQUEST['accNum'];
      ?>

      <h1>Edit Your Profile</h1>

      <div class="wrapper">
            <div class="form">
                  <div class="inputfield">
                        <input type="text" value="<?php echo getUser($accNum)['Name']; ?>" class="input" id="userName">
                  </div>
                  <div class="inputfield">
                        <input type="text" value="<?php echo getUser($accNum)['Password']; ?>" class="input" id="password">
                  </div>
                  <div class="inputfield">
                        <input type="number" class="input" id="accNum" value="<?php echo getUser($accNum)['AccNum']; ?>" readonly>
                  </div>
                  <div class="inputfield">
                        <input type="text" value="<?php echo getUser($accNum)['Email']; ?>" class="input" id="email">
                  </div>
                  <div class="inputfield">
                        <input type="text" value="<?php echo getUser($accNum)['NID']; ?>" class="input" id="nid">
                  </div>
                  <div class="inputfield">
                        <input type="date" value="<?php echo getUser($accNum)['DOB']; ?>" class="input" id="dob">
                  </div>
                  <div class="inputfield">
                        <input type="text" value="<?php echo getUser($accNum)['Gender']; ?>" class="input" id="gender">
                  </div>
                  <div class="inputfield">
                        <input type="text" value="<?php echo getUser($accNum)['Status']; ?>" class="input" id="status">
                  </div>
                  <div class="inputfield">
                        <input type="text" value="<?php echo getUser($accNum)['BloodGroup']; ?>" class="input" id="bGroup">
                  </div>
                  <div class="inputfield">
                        <input type="text" value="<?php echo getUser($accNum)['Religion']; ?>" class="input" id="religion">
                  </div>
                  <div class="inputfield">
                        <input type="text" value="<?php echo getUser($accNum)['Address']; ?>" class="input" id="address">
                  </div>
                  <div class="inputfield">
                        <input class="btn" type="button" name="" value="Update" onclick="ajax()" />
                  </div>
            </div>
      </div>

      </div>
      <div class="overlay hidden"></div>
      <script src="../Asset/EditProfile.js"></script>
</body>

</html>
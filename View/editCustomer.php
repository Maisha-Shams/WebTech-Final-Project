<!DOCTYPE html>
<html lang="en">

<head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Edit Profile</title>
</head>

<body>
      <?php
      require_once('../Model/CustomerModel.php');
      $AccNum = $_REQUEST['accNum'];


      ?>

      <h1>Edit Your Profile</h1>



      <div class="">
            <div class="inputfield">
                  <input type="text" value="<?php echo getUser($AccNum)['Name']; ?>" class="input" id="userName">
            </div>
            <div class="inputfield">
                  <input type="text" value="<?php echo getUser($AccNum)['Password']; ?>" class="input" id="password">
            </div>
            <div class="inputfield">
                  <input type="number" class="input" id="accNum" value="<?php echo getUser($AccNum)['AccNum']; ?>" readonly>
            </div>
            <div class="inputfield">
                  <input type="text" value="<?php echo getUser($AccNum)['email']; ?>" class="input" id="email">
            </div>
            <div class="inputfield">
                  <input type="text" value="<?php echo getUser($AccNum)['NID']; ?>" class="input" id="nid">
            </div>
            <div class="inputfield">
                  <input type="date" value="<?php echo getUser($AccNum)['DOB']; ?>" class="input" id="dob">
            </div>
            <div class="inputfield">
                  <input type="text" value="<?php echo getUser($AccNum)['Gender']; ?>" class="input" id="gender">
            </div>
            <div class="inputfield">
                  <input type="text" value="<?php echo getUser($AccNum)['Status']; ?>" class="input" id="status">
            </div>
            <div class="inputfield">
                  <input type="text" value="<?php echo getUser($AccNum)['BloodGroup']; ?>" class="input" id="bGroup">
            </div>
            <div class="inputfield">
                  <input type="text" value="<?php echo getUser($AccNum)['Religion']; ?>" class="input" id="religion">
            </div>
            <div class="inputfield">
                  <input type="text" value="<?php echo getUser($AccNum)['Address']; ?>" class="input" id="address">
            </div>
            <div class="inputfield">
                  <input class="btn" type="button" name="" value="Update" onclick="ajax()" />
            </div>

            <button class="btn" onclick="window.location.href='../View/delete.php?email=<?php echo $AccNum ?>';">Delete</button>


            <script src="../Asset/EditProfile.js"></script>
</body>

</html>
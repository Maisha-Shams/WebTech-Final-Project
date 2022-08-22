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

      $email = $_REQUEST['email'];
      session_start();
      $_SESSION["auth"] = $email;

      ?>
      <form action="Edit.php" method="post">

            <div>
                  <label for="name">Name :</label>
                  <input type="text" name="name" id="name">
            </div>
            <div>
                  <label for="email">email :</label>
                  <input type="text" name="email" id="email">
            </div>
            <div>
                  <label for="phone">phone Number:</label>
                  <input type="text" name="phone" id="phone">
            </div>
            <div>
                  <label for="status">Marital Status :</label>
                  <input type="text" name="status" id="status">
            </div>
            <div>
                  <label for="address">Address :</label>
                  <input type="text" name="address" id="address">
            </div>

            <input type="submit" name="submit">
      </form>
</body>

</html>
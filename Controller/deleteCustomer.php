
      <?php

      $filename = $_REQUEST['filename'];
      unlink('Files/customer.txt');
      header('location: Login.php');

      ?>

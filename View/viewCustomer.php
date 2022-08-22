<!DOCTYPE html>
<html lang="en">

<head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Document</title>
</head>

<body>


      <table border="1">
            <th>
                  <h2>Name</h2>
            </th>
            <th>
                  <h2>Account No.</h2>
            </th>
            <th>
                  <h2>Email</h2>
            </th>
            <th>
                  <h2>Nid</h2>
            </th>
            <th>
                  <h2>Date of birth</h2>
            </th>
            <th>
                  <h2>Gender</h2>
            </th>
            <th>
                  <h2>Marital Status</h2>
            </th>
            <th>
                  <h2>Blood Group</h2>
            </th>
            <th>
                  <h2>Religion</h2>
            </th>
            <th>
                  <h2>Address</h2>
            </th>
            <th>
                  <h2>Account Balance</h2>
            </th>

            <?php
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

                  return  $conn;
            }

            $conn = getconnection();
            $sql = "select * from customer";
            $result = mysqli_query($conn, $sql);
            $count = mysqli_num_rows($result);




            if ($count > 0) {
                  while ($data = mysqli_fetch_assoc($result)) {

                        echo '  <tr>';
                        echo '<td><h3> ' . $data['Name'] . '<h3></td>';
                        echo '<td><h3><a href="editCustomer.php?accNum= ' . $data['AccNum'] . ' ">' . $data['AccNum'] . '</a><small>-Change info?</small><h3></td>';
                        //echo '<td><h3>' . $data['AccNum'] . '<h3></td>';
                        echo '<td><h3>' . $data['email'] . '<h3></td>';
                        echo '<td><h3>' . $data['NID'] . '<h3></td>';
                        echo '<td><h3>' . $data['DOB'] . '<h3></td>';
                        echo '<td><h3>' . $data['Gender'] . '<h3></td>';
                        echo '<td><h3>' . $data['Status'] . '<h3></td>';
                        echo '<td><h3>' . $data['BloodGroup'] . '<h3></td>';
                        echo '<td><h3>' . $data['Religion'] . '<h3></td>';
                        echo '<td><h3>' . $data['Address'] . '<h3></td>';
                        echo '<td><h3>' . $data['Balance'] . '<h3></td>';
                        echo '   </tr>';
                  }
            } else {
                  echo 'No Data Found!!!';
            }

            ?>

            <br>
            <br>
            <h3><a href="UserHome.php">Back to Dashboard</a></h3>



</body>

</html>
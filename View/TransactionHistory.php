<?php 
	if(isset($_COOKIE['status']))
	{
?>


<!DOCTYPE html>
<html>
<head>
    <h1><a href="UserHome.php">Go Home</a></h1>
      <title>Transaction History</title>

</head>

<body>
      <br>
      <table border="1">
        <h2>Transaction History</h2>
            <th>
                  <h2>Username</h2>
            </th>
            <th>
                  <h2>Account No.</h2>
            </th>
            <th>
                  <h2>Available Balance </h2>
            </th>
        <?php
    
	
        $file = fopen('TransHistory.txt', 'r');




            if ($file == true) {
                  while (!feof($file)) {
                        $data = fgets($file);
                        $user = explode("||", $data);

                        if (empty($user[2])) {
                              break;
                        }
                  
        echo '  <tr>';
            echo '<td><h3>' . $user[0] . '<h3></td>';
            echo '<th><h3>' . $user[1] . '<h3></th>';
            echo '<th><h3>' . $user[2] . '<h3></th>';
        echo '   </tr>';
    }
    
}
        ?>

<?php 
	}else{
		echo "invalid request!";
	} 
?>
		</table>
</body>
</html>
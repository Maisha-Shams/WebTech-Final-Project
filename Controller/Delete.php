<?php 
	if(isset($_COOKIE['status']))
	{
?>

<html>
    <head>
        <title>Delete Profile</title>
    </head>
    <body>
        <?php

            $email = $_REQUEST['email'];
            $userName = $_REQUEST['userName'];

        ?>
    <form action="Delete.php" method="post">

        <fieldset>
            <legend><h2>Delete</h2></legend>

                <input type="hidden" name="filename" value="employee.txt">
                <input type="hidden" name="email" value="<?=$email?>">
                <input type="hidden" name="userName" value="<?=$userName?>">
                 Username : <br>
                <input type="text" name="name" value="<?php echo $userName; ?>">
                <br> <br>
                 Email : <br>
                <input type="text" name="accNo" value="<?php echo $email; ?>">
                <br>
                <p>Are you sure want to DELETE your account?</p>
                <input type="submit" name="submit" value="Delete" >
                <input type="submit" name="cancel" value="Cancel" >	
        </fieldset>
    
    </form>



            <?php

                if(isset($_POST['submit'])){

                $filename = $_REQUEST['filename'];
                unlink($filename);
                unlink('Files/History.txt');
                unlink('Files/balance.txt');
                header('location: Login.php');

                }elseif(isset($_POST['cancel'])){
                    header('location: Profile.php?email='.$email);
                }

            ?>
            <?php 
	}else{
		echo "invalid request!";
	} 
?>
    </body>
</html>
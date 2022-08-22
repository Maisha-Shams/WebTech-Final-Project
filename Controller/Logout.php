
<?php
setcookie('status', 'true', time() - 10, '/');
session_destroy();
header('location: ../View/Login.html');
?>


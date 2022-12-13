<?php
session_start();

    include("connection.php");
    include("functions.php");

    $user_data = check_login($con);

?>

<!DOCTYPE html>
<html>
<head>
    <title> Fishify </title>
</head>
<body>
    <a href="logout.php">Logout</a>
    <h1>Welcome to Fishify</h1>

    <br>
    Welcome <?php echo $user_data['first_name']; ?> 
</body>
</html>
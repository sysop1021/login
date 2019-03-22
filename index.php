<?php
    include("dbconnect.php"); 
    session_start();
?>

<!DOCTYPE html>

<html>
    <head>
        <title>login example</title>
    </head>
    <body>
        <?php
            if (empty($_SESSION['id']))
            {
                include("login-reg.php");
            }
            
            else
            {
                include("user-mgmt.php");
            }
        ?> 
        <h3>User list</h3>
        <?php include("userlist.php"); ?>
    </body>
</html>

<?php
    include("dbconnect.php");
    session_start();
    
    $userQuery = "SELECT * FROM users WHERE username = '" . $_POST['un'] . "'";
    $userResult = mysqli_query($db, $userQuery);
    $userRows = mysqli_fetch_assoc($userResult);

    if (!$userRows)
    {
        echo "no such user";
    }
    
    else
    {
        if (sha1($_POST['pw']) == $userRows['password'])
        {
            echo "<p>Succesfully logged in as: " . $userRows['username'] . "!</p>";
            $_SESSION['id'] = $userRows['userID'];
        }
        
        else
        {
            echo "<p>Incorrect password</p>";
        }
    }

    echo "<p><a href=\"index.php\">Go back</a></p>";
    
    mysqli_close($db);

?>
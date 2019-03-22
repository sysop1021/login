<?php
    include("dbconnect.php");
    session_start();
    
    if ($_POST['pw'] == $_POST['confirm'])
    {
        $userQuery = "SELECT * FROM users";
        $userResult = mysqli_query($db, $userQuery);
        $userRows = mysqli_fetch_assoc($userResult);
        
        $dupUN = false;
        
        do
        {
            if ($_POST['un'] == $userRows['username'])
            {
                $dupUN = true;
            }
        }
        while ($userRows = mysqli_fetch_assoc($userResult));
        
        if ($dupUN)
        {
            echo "<p>That username is already taken; please try again.<p>";
        }
        
        else
        {
            $query = "INSERT INTO users (userID, username, password) VALUES (NULL, '" . $_POST['un'] . "', '" . sha1($_POST['pw']) . "');";
            
            if (!mysqli_query($db, $query))
            {
                echo mysqli_error($db);
            }
            
            echo "<p>User successfully added!</p>";
        }
    }
    
    else
    {
        echo "Passwords do not match, please try again.";
    }
    
    echo "<p><a href=\"index.php\">Go back</a></p>";
    mysqli_close($db);

?>

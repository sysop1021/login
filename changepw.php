<?php
    include("dbconnect.php");
    session_start();
    
    if ($_POST['newpw'] != $_POST['confirm'])
    {
        echo "Passwords do not match, please try again.";
    }
    
    else
    {
        $chgQuery = "UPDATE users SET password = '" . sha1($_POST['newpw']) . "' WHERE userID = '" . $_SESSION['id'] . "'";
        $chgResult = mysqli_query($db, $chgQuery);
        
        if ($chgResult)
        {            
            echo "<p>Password updated!</p>";
        }
        
        else
        {
            echo "<p>Unable to update password:</p>";
			echo mysqli_error($db);
        }
    }
    
    echo "<p><a href=\"index.php\">Go back</a></p>";
    mysqli_close($db);
?>

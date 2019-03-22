<?php
    //include("dbconnnect.php");
    
    $query = "SELECT * FROM users";
    $result = mysqli_query($db, $query);
    $rows = mysqli_fetch_assoc($result);

    do
    {
        echo $rows['username'] . "</br>";
    }
    while ($rows = mysqli_fetch_assoc($result));
    
    mysqli_close($db);
?>

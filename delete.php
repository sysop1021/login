<?php
    include("dbconnect.php");
    session_start();
    
    $delQuery = "DELETE FROM users WHERE userID = " . $_SESSION['id'];
    mysqli_query($db, $delQuery);
    
    $_SESSION = [];
    header("Location: index.php");
?>

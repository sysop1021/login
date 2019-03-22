<?php
	$db = mysqli_connect("localhost", "root", "", "dunno");
	
	if (mysqli_connect_errno())
	{
		echo "SQL Database connection failed: " . mysqli_connect_error();
	}
	
	/*else
	{
		echo "Successfully connected to SQL database! :)";
	}*/

?>

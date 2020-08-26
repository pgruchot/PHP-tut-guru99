<?php 
	$dbh = mysqli_connect('localhost', 'root', ''); 
	//connect to MySQL server
    
	if (!$dbh)     
	die("Unable to connect to MySQL: " . mysqli_error()); 
	//if connection failed output error message 
    
	if (!mysqli_select_db($dbh,'test'))     
	die("Unable to select database: " . mysqli_error()); 
    //if selection failes output error message 
    $id = 4; 
	//Venus's ID in the database 
    
	$sql_stmt = "DELETE FROM `my_contacts` WHERE `id` = $id"; 
	//SQL Delete query 
    
	$result = mysqli_query($dbh,$sql_stmt); 
	//execute SQL statement 
    
	if (!$result)     
	die("Deleting record failed: " . mysqli_error());
	//output error message if query execution failed 
    
	echo "ID number $id has been successfully deleted"; 
mysqli_close($dbh); //close the database connection 
?>
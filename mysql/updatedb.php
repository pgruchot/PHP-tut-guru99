<?php 
	$dbh = mysqli_connect('localhost', 'root', ''); 
	//connect to MySQL server 
    
	if (!$dbh)    
	die("Unable to connect to MySQL: " . mysqli_error()); 
    //if connection failed output error message 
    
	if (!mysqli_select_db($dbh,'test'))     
	die("Unable to select database: " . mysql_error()); 
	//if selection fails output error message 
    
	$sql_stmt = "UPDATE `my_contacts` SET `contact_no` = '785',`email` = ' poseidon @ ocean . oc '";
	$sql_stmt .= " WHERE `id` = 5"; 
    
	$result = mysqli_query($dbh,$sql_stmt); 
    //execute SQL statement 
    if (!$result)     
    
	die("Deleting record failed: " . mysqli_error()); 
	//output error message if query execution failed 
    
	echo "ID number 5 has been successfully updated"; 
    mysqli_close($dbh); //close the database connection 
?>
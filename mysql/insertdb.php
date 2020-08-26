<?php 
	$dbh = mysqli_connect('localhost', 'root', ''); 
    //connect to MySQL server 
    if (!$dbh)     
    
	die("Unable to connect to MySQL: " . mysqli_error()); 
	//if connection failed output error message 
    
	if (!mysqli_select_db($dbh,'test'))     
	die("Unable to select database: " . mysql_error()); 
	//if selection fails output error message 
    
	$sql_stmt = "INSERT INTO `my_contacts` (`full_names`,`gender`,`contact_no`,`email`,`city`,`country`)"; 
	$sql_stmt .= " VALUES('Poseidon','Mail','541',' poseidon @ sea . oc ','Troy','Ithaca')"; 
    
	$result = mysqli_query($dbh,$sql_stmt); //execute SQL statement 
    
	if (!$result)     
		die("Adding record failed: " . mysqli_error()); 
        //output error message if query execution failed 
    echo "Poseidon has been successfully added to your contacts list";
        
 mysqli_close($dbh); //close the database connection 
?>
<?php
    $servername = "localhost";
	$username = "root";
	$password = "";

	
	$conn = new mysqli($servername, $username, $password);

   
	$cccsql = "CREATE DATABASE cccmyDB";
	if ($conn->query($cccsql) === TRUE) {
  	 echo "Database created successfully";
	} else {
    	echo "Error creating database: " . $conn->error;
	}   

	$conn->close();

	$con = mysql_connect($servername, $username, $password);
	mysql_select_db("cccmyDB");
	$sql1 = "CREATE TABLE Persons (id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,name text,studentId text,image longblob)";

	mysql_query($sql1,$con);
	mysql_close($con);

	header("refresh:5; url=form.html"); 
	?>
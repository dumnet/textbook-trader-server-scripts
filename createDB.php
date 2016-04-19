<?php
	$servername = "cis.gvsu.edu";
	$username = "roe";
	$password = "roe3202";
	$dbname = "roe";

	$tEmail = "test1@gmail.com";
	$tISBN = "12346799"

	// Create connection
	$conn = mysqli_connect($servername, $username, $password, $dbname);

	// Check connection
	if (!$conn) {
	    die("Connection failed: " . mysqli_connect_error());
	}
	// echo "Connected successfully";

	// sql to create table
	$sql = "CREATE TABLE books (
	id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
	email VARCHAR(30) NOT NULL,
	isbn VARCHAR(30) NOT NULL	
	)";

	// $sql2 = "INSERT INTO books (email, isbn)
	// VALUES ('$tEmail', '$tISBN')";

	if ($conn->query($sql) === TRUE) {
	    echo "Table books created successfully";
	} else {
	    echo "Error creating table: " . $conn->error;
	}

	// if ($conn->query($sql2) === TRUE) {
	//     echo "Test data inserted into books successfully";
	// } else {
	//     echo "Error inserting data: " . $conn->error;
	// }

	$conn->close();
?>
<?php
	session_start();

	$tEmail = $_POST["email"];	
	$tISBN = $_POST["isbn"];	
	$age = filter_input(INPUT_POST, 'age', FILTER_VALIDATE_INT);	

	$servername = "cis.gvsu.edu";
	$username = "roe";
	$password = "roe3202";
	$dbname = "roe";

	// Create connection
	$conn = mysqli_connect($servername, $username, $password, $dbname);

	// Check connection
	if (!$conn) {
	    die("Connection failed: " . mysqli_connect_error());
	}
	// echo "Connected successfully";

	$sql = "INSERT INTO books (email, isbn)
	VALUES ('$tEmail', '$tISBN')";

	if ($conn->query($sql) === TRUE) {
	    echo "New record created successfully";
	} else {
	    echo "Error: " . $sql . "<br>" . $conn->error;
	}

	$conn->close();
?>
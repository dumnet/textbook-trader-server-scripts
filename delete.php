<?php	
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

	// mysql_select_db(, $conn);

	// mysql_query("DROP TABLE friends");
	$sql = "DROP TABLE books";

	if ($conn->query($sql) === TRUE) {
	    echo "All records deleted successfully";
	} else {
	    echo "Error: " . $sql . "<br>" . $conn->error;
	}
	$conn->close();
?>
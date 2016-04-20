<?php	
	$servername = "cis.gvsu.edu";
	$username = "roe";
	$password = "roe3202";
	$dbname = "roe";
	$isbn = "123456789";
	// $isbn = $_GET['isbn'];
	// Create connection
	$conn = mysqli_connect($servername, $username, $password, $dbname);
	// Check connection
	if (!$conn) {
		die("Connection failed: " . mysqli_connect_error());
	}
	// echo "Connected successfully";
	$sql = "SELECT * FROM books"; 
	// $result = $conn->query($sql);
	// $result = mysqli_query($conn, $sql) or die("Error in Selecting " . mysqli_error($connection));
	$result = mysqli_query($con,"SELECT Role FROM table1 where isbn='$isbn'");

	$emparray = array();
    while($row = mysqli_fetch_assoc($result))
    {
        $emparray[] = $row;
    }

	echo json_encode($emparray);
	
	$conn->close();
?>
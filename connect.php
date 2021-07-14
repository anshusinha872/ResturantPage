<?php
	$firstName = $_POST['firstName'];
	$lastName = $_POST['lastName'];
	$email = $_POST['email'];
	$number = $_POST['number'];

	// Database connection
	$server = 'localhost';
	$username = 'root';
	$password = '';
	$dbname = 'mydata';
	$conn = new mysqli($server,$username,$password,$dbname);
	// $conn = new mysqli('localhost','root','','mydata');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into contact(firstName, lastName, email, number) values(?, ?, ?, ?)");
		$stmt->bind_param("sssi", $firstName, $lastName, $email, $number);
		$execval = $stmt->execute();
		// echo $execval;
		echo "We will connect with You ASAP!...";
		
		$stmt->close();
		$conn->close();
	}
?>
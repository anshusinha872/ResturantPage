<?php
	$firstName = $_POST['firstName'];
	$lastName = $_POST['lastName'];
	$email = $_POST['email'];
	$number = $_POST['number'];
    $address = $_POST['address'];
    $preference = $_POST['preference'];
    $quantity = $_POST['quantity'];
    $suggestion = $_POST['suggestion'];
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
		$stmt = $conn->prepare("insert into orderDetails(firstName, lastName, email, number, address, preference, quantity, suggestion) values(?, ?, ?, ?, ?, ?, ?,?)");
		$stmt->bind_param("sssissis", $firstName, $lastName, $email, $number, $address, $preference, $quantity, $suggestion);
		$execval = $stmt->execute();
		// echo $execval;
		echo "Your order is placed ........";
		$stmt->close();
		$conn->close();
	}
?>
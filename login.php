<?php
	$email = $_POST['email'];
	//$lastName = $_POST['lastname'];
	//$gender = $_POST['gender'];
	//$email = $_POST['email'];
	$password = $_POST['password'];
	//$number = $_POST['number'];

	// Database connection
	$conn = new mysqli('localhost','root','','tourdb');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into login( email,  password) values(?, ?)");
		$stmt->bind_param("ss",  $email,  $password);
		$execval = $stmt->execute();
		echo $execval;
		echo "Registration successfully...";
		$stmt->close();
		$conn->close();
	}
?>
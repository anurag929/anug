<?php
	$firstname =$_POST['firstname'];
	$lastname =$_POST['lastname'];
	$gender=$_POST['gender'];
	$number =$_POST['number'];
	$email =$_POST['email'];
	$password =$_POST['password'];

	$conn= new mysqli('localhost','root','','test029');
	if($conn->connect_error){
		die('connection failed:'.$conn->connect_error);
	}else
	{
		$stmt = $conn->prepare("insert into registration(firstname, lastname, gender, number, email, password) values(?, ?, ?, ?, ?, ?)");
		$stmt->bind_param("sssiss",$firstname, $lastname, $gender, $number, $email, $password);
		$stmt->execute();
		echo "Registration successfully...";
		$stmt->close();
		$conn->close();
	}

?>
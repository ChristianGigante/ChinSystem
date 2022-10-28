<?php
	include 'includes/session.php';

	if(isset($_POST['add'])){
		$firstname = $_POST['firstname'];
		$lastname = $_POST['lastname'];
		$user = $_POST['username'];
		$pass = $_POST['password'];
		$department = $_POST['department'];
		$rate = $_POST['rate'];
		
		//creating instructorid
		$letters = '';
		$numbers = '';
		foreach (range('A', 'Z') as $char) {
		    $letters .= $char;
		}
		for($i = 0; $i < 10; $i++){
			$numbers .= $i;
		}
		$instructor_id = substr(str_shuffle($letters), 0, 3).substr(str_shuffle($numbers), 0, 9);
		//
		$sql = "INSERT INTO instructors (instructors_id, firstname, lastname, username, password, department, rate) VALUES ('$instructor_id', '$firstname', '$lastname',  '$user', '$pass', '$department', '$rate')";
		if($conn->query($sql)){
			$_SESSION['success'] = 'Employee added successfully';
		}
		else{
			$_SESSION['error'] = $conn->error;
		}

	}
	else{   
		$_SESSION['error'] = 'Fill up add form first';
	}

	header('location: ../index.php');
?>
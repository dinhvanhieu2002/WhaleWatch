<?php
	if(isset($_POST['submit'])) {
		$fullname = $_POST['fullname'];
		$username = $_POST['username'];
		$password = $_POST['password'];
		$email = $_POST['email'];
		$phone = $_POST['phone'];

		$connect = new mysqli("localhost", "root", "", "whalewatch");
		mysql_set_charset($connect, 'utf8');
		if($connect->connect_error) {
			var_dump($connect->connect_error);
			die();
		}

		$query = "INSERT INTO customer(full_name, user_name, password, email, phone)
		 					VALUES('".$fullname."','".$username."', '".$password."', '".$email."', '".$phone."')";
		mysqli_query($connect, $query);

		$connect->close();

		header('Location: login.php');
	}

		// if($fullname == '' || $username == '' || $password == '' || $email == '' || $phone == '') 
		// {
		// 	$error = "<span class='error'>Fields must be not empty</span>";
		// } else {
		// 	$check_username = "SELECT * FROM customer WHERE user_name = '$username' LIMIT 1";
		// 	$result_check = mysqli_query($connect, $check_username);
		// 	if($result_check) {
		// 		$error = "<span class='error'>Email has been existed</span>";
		// 	} else {
		// 		$query = "INSERT INTO customer(full_name, user_name, password, email, phone)
		// 								VALUES('".$fullname."','".$username."', '".$password."', '".$email."', '".$phone."')";
		// 		mysqli_query($connect, $query);
		// 		if($result) {
		// 			$success = "<span class='success'>Sign up successfully</span>";
		// 		} else {
		// 			$error = "<span class='error'>Sign up not successfully</span>";
		// 		}
		// 	}
		// }

 ?>
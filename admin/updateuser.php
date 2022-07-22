<?php 
	if(isset($_POST['updatedata'])) {
	$user_id = $_POST['user_id'];
    $fullname = $_POST['fullname'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];

    $connect = new mysqli("localhost", "root", "", "whalewatch");

    $query = "UPDATE tbl_customer SET full_name = '$fullname', user_name = '$username', password = '$password', email = '$email', phone = '$phone' WHERE id = '$user_id'";
    $query_run = mysqli_query($connect, $query);

    $connect->close();

    if($query_run) {
      echo "<script> alert('Data Updated')</script>";
      header("Location: usermanagement.php");
    } else {
      echo "<script> alert('Data not Updated')</script>";
    }
   }
 ?>
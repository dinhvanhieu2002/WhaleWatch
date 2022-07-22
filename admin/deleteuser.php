<?php 	
	if(isset($_POST['deletedata'])) {
	$user_id = $_POST['del_user_id'];

    $connect = new mysqli("localhost", "root", "", "whalewatch");

    $query = "DELETE FROM tbl_customer WHERE id = '$user_id'";
    $query_run = mysqli_query($connect, $query);

    $connect->close();

    if($query_run) {
      echo "<script> alert('Data deleted')</script>";
      header("Location: usermanagement.php");
    } else {
      echo "<script> alert('Data not deleted')</script>";
    }
   }

 ?>
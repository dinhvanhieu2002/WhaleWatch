<?php 	
	if(isset($_POST['deletedata'])) {
	  $order_id = $_POST['del_order_id'];

    $connect = new mysqli("localhost", "root", "", "whalewatch");

    $query = "DELETE FROM `tbl_order` WHERE id = '$order_id'";
    $query_run = mysqli_query($connect, $query);

    $connect->close();

    if($query_run) {
      echo "<script> alert('Data deleted')</script>";
      header("Location: ordermanagement.php");
    } else {
      echo "<script> alert('Data not deleted')</script>";
    }
   }

 ?>
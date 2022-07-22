<?php 
	if(isset($_POST['updatedata'])) {
	  $order_id = $_POST['order_id'];
    $user_id = $_POST['user_id'];
    $datep = $_POST['datep'];
    $total = $_POST['total'];
    $status = $_POST['status'];

    $connect = new mysqli("localhost", "root", "", "whalewatch");

    $query = "UPDATE `tbl_order` SET id_customer = '$user_id', date_purchase = '$datep', total = '$total', status = '$status' WHERE id = '$order_id'";
    $query_run = mysqli_query($connect, $query);

    $connect->close();

    if($query_run) {
      echo "<script> alert('Data Updated')</script>";
      header("Location: productmanagement.php");
    } else {
      echo "<script> alert('Data not Updated')</script>";
    }
   }
 ?>
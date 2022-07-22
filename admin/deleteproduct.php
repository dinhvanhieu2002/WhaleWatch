<?php 	
	if(isset($_POST['deletedata'])) {
	$product_id = $_POST['del_product_id'];

    $connect = new mysqli("localhost", "root", "", "whalewatch");

    $query = "DELETE FROM tbl_product WHERE id = '$product_id'";
    $query_run = mysqli_query($connect, $query);

    $connect->close();

    if($query_run) {
      echo "<script> alert('Data deleted')</script>";
      header("Location: productmanagement.php");
    } else {
      echo "<script> alert('Data not deleted')</script>";
    }
   }

 ?>
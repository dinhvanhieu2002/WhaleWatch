<?php 
	if(isset($_POST['updatedata'])) {
	  $product_id = $_POST['product_id'];
    $product_name = $_POST['product_name'];
    $quantity = $_POST['quantity'];
    $price = $_POST['price'];
    $image = 'images/'.$_POST['image'];
    $description = $_POST['description'];
    $category = $_POST['category'];

    $connect = new mysqli("localhost", "root", "", "whalewatch");

    $query = "UPDATE tbl_product SET product_name = '$product_name', quantity = '$quantity', price = '$price', image = '$image', description = '$description', cate_id = '$category' WHERE id = '$product_id'";
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
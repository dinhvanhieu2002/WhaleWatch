<?php 
  if(isset($_POST['insertdata'])) {
    $product_name = $_POST['product_name'];
    $quantity = $_POST['quantity'];
    $price = $_POST['price'];
    $image = 'images/'.$_POST['image'];
    $description = $_POST['description'];
    $category = $_POST['category'];

    $connect = new mysqli("localhost", "root", "", "whalewatch");
    // mysql_set_charset($connect, "utf8");
    if($connect->connect_error) {
      var_dump($connect->connect_error);
      die();
    }

    $query = "INSERT INTO tbl_product(product_name, quantity, price, image, description, cate_id)
              VALUES('$product_name','$quantity', '$price', '$image', '$description', '$category')";
    $query_run = mysqli_query($connect, $query);

    $connect->close();

    if($query_run) {
      echo "<script> alert('Data saved')</script>";
      header("Location: productmanagement.php");
    } else {
      echo "<script> alert('Data not saved')</script>";
    } 
  }
?>
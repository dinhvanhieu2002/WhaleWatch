<?php 
  if(isset($_POST['insertdata'])) {
    $fullname = $_POST['fullname'];
    $username = $_POST['username'];
    $password = md5($_POST['password']);
    $email = $_POST['email'];
    $phone = $_POST['phone'];

    $connect = new mysqli("localhost", "root", "", "whalewatch");
    // mysql_set_charset($connect, "utf8");
    if($connect->connect_error) {
      var_dump($connect->connect_error);
      die();
    }

    $query = "INSERT INTO tbl_customer(full_name, user_name, password, email, phone)
              VALUES('$fullname','$username', '$password', '$email', '$phone')";
    $query_run = mysqli_query($connect, $query);

    $connect->close();

    if($query_run) {
      echo "<script> alert('Data saved')</script>";
      header("Location: usermanagement.php");
    } else {
      echo "<script> alert('Data not saved')</script>";
    }


    
  }
?>
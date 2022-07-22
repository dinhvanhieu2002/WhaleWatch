<?php 
	session_start();
	date_default_timezone_set('Asia/Ho_Chi_Minh');

	if(isset($_POST['user_id'])) 
	    $user_id = $_POST['user_id'];
	if(isset($_POST['product_id'])) 
		$product_id = $_POST['product_id'];
	if(isset($_POST['comment_content'])) 
		$content = $_POST['comment_content'];

	$time = date("Y-m-d h:i:sa");

    $connect = new mysqli("localhost", "root", "", "whalewatch");
    // mysql_set_charset($connect, "utf8");
    if($connect->connect_error) {
      var_dump($connect->connect_error);
      die();
    }
    $query = "INSERT INTO `tbl_comment` (`user_id`, `product_id`, `content`, `time`) VALUES ('".$user_id."', '".$product_id."', '".$content."', '".$time."')";
    mysqli_query($connect,$query);

    $connect->close();

  	
 ?>
<?php 
	session_start();
  if(isset($_POST['product_id'])){
    $proid = $_POST['product_id'];
  
	$connect = new mysqli("localhost:3307", "root", "", "whalewatch");
    // mysql_set_charset($connect, "utf8");
    if($connect->connect_error) {
      var_dump($connect->connect_error);
      die();
    }

    $query = "SELECT tbl_customer.user_name, tbl_comment.content, tbl_comment.time FROM tbl_comment JOIN tbl_customer ON tbl_comment.user_id = tbl_customer.id WHERE tbl_comment.product_id = '$proid' ORDER BY tbl_comment.id DESC";
    $result = mysqli_query($connect, $query);
    while($row = mysqli_fetch_array($result)) {
    	echo "<div class='row tbl_comment_row'>
                <div class='avatar'><i class='fa fa-user-circle avt_icon'></i></div>
                <div class='cont'>
                  <div class='info'>
                    <h5>".$row['user_name']."</h5>
                    <span>".$row['time']."</span>
                  </div>
                  <div class='cmt'>".$row['content']."</div>
                </div>
                
              </div>";
    }

    $connect->close();
  }

 ?>
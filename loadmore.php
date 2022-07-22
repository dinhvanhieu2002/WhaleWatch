<?php 

		if(isset($_GET['exits'])){
			$data = $_GET['exits'];
		}
		$end = $data + 4;
	
		$connect = new mysqli("localhost", "root", "", "whalewatch");

    if($connect->connect_error) {
      var_dump($connect->connect_error);
      die();
    }

    $query = "SELECT * FROM tbl_product LIMIT $data,$end";

    $result = mysqli_query($connect, $query);

    while($row =  $result-> fetch_assoc()) {
      echo "<div class='product col-md-6 col-xl-3'>
                <div class='box'>
	                <a href='product.php?productid=".$row['id']."'>
                    <div class='img-box'>
                      <img src='".$row['image']."' alt=''>
                    </div>
                    <div class='detail-box'>
                      <h6>".$row['product_name']."</h6>
                      <h6>
                        Price:
                        <span>".$row['price']."$</span>
                      </h6>
                    </div>
                    <div class='new'>
                      <span> New </span>
                    </div>
	                </a>
                </div>
            </div>";
    }

    $connect->close();



 ?>
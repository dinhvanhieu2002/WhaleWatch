<?php 
	if(isset($_GET['txt'])) {
		$searchtext = $_GET['txt'];
	}

	$connect = new mysqli("localhost:3307", "root", "", "whalewatch");

    if($connect->connect_error) {
      var_dump($connect->connect_error);
      die();
    }

    $query = "SELECT * FROM tbl_product WHERE product_name LIKE '%".$searchtext."%'";

    $result = mysqli_query($connect, $query);

    while($row = mysqli_fetch_array($result)) {
                echo "<div class='col-md-6 col-xl-4'>
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
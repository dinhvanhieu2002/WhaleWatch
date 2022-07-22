<?php 
  session_start();
  $tot=0;
  if(isset($_POST['submit'])) {
    $connect = new mysqli("localhost", "root", "", "whalewatch");

    if($connect->connect_error) {
      var_dump($connect->connect_error);
      die();
    }

    $query = "INSERT INTO `tbl_order` (`id_customer`, `date_purchase`, `total`, `status`) 
                          VALUES ('".$_SESSION['user_id']."', '".date("d/m")."', '".$_SESSION['total']."', 'unpaid')";

    mysqli_query($connect, $query);
    $id = mysqli_insert_id($connect);


    foreach($_SESSION['cart'] as $key => $value) {
      $sql = "INSERT INTO tbl_orderdetail (order_id, product_id, quantity) VALUES($id, $key, $value)";
      $result1 = mysqli_query($connect, $sql);

      $sql = "UPDATE tbl_product SET quantity = quantity - $value WHERE id = $key";
      $result2 = mysqli_query($connect, $sql);

    }

    unset($_SESSION['cart']);

    $connect->close();
    header('Location: index.php');
    
    
  }
 ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">

  <title>Timups</title>


  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
  <!--owl slider stylesheet -->
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />

  <!-- font awesome style -->
  <link href="css/font-awesome.min.css" rel="stylesheet" />

  <!-- Custom styles for this template -->
  <link href="css/style.css?v=1" rel="stylesheet" />
  <!-- responsive style -->
  <link href="css/responsive.css" rel="stylesheet" />

</head>

<body class="sub_page">

  <div class="hero_area">
    <?php 
      include_once('./inc/header.php');
     ?>
  </div>

  
                <?php 
                  $ok=1;
                  if(isset($_SESSION['cart']))
                  {
                    foreach($_SESSION['cart'] as $k => $v)
                    {
                      if(isset($k))
                      {
                        $ok=2;
                      }
                    }
                  }
                  if($ok == 2) {
                    echo "<section class='cart_area section_padding my-5'>
                      <div class='container'>
                        <div class='cart_inner '>
                          <div class='table-responsive'>
                            <form action='checkout.php' method='POST'>
                              <table class='table'>
                                <thead>
                                  <tr>
                                    <th scope='col'>Product</th>
                                    <th scope='col'>Price</th>
                                    <th scope='col'>Quantity</th>
                                    <th scope='col'>Total</th>
                                  </tr>
                                </thead>
                                <tbody>";
                    foreach($_SESSION['cart'] as $key=>$value)
                    {
                      $item[]=$key;
                    }
                    $str=implode(",",$item);

                    $total=0;

                    $connect = new mysqli("localhost", "root", "", "whalewatch");

                    if($connect->connect_error) {
                      var_dump($connect->connect_error);
                      die();
                    }

                    $query = "SELECT * FROM tbl_product WHERE id in ($str)";
                    $result = mysqli_query($connect, $query) or die("Query error : " . mysqli_error($connect));

                    while($row = mysqli_fetch_array($result)) {
                      echo "<tr>
                              <td>
                                <div class='media'>
                                  <div class='d-flex'>
                                    <img src='".$row['image']."' alt='' />
                                  </div>
                                  <div class='media-body'>
                                    <p>".$row['product_name']."</p>
                                  </div>
                                </div>
                              </td>
                              <td>
                                <h5>$".$row['price']."</h5>
                              </td>
                              <td>
                                <div class='product_count'>
                                  <input class='input-number' readonly type='text' name='qty[".$row['id']."]' value='".$_SESSION['cart'][$row['id']]."'>
                                </div>
                              </td>
                              <td>
                                <h5>$".number_format($_SESSION['cart'][$row['id']] * $row['price'], 2)."</h5>
                              </td>
                            </tr>";
                        $total += $_SESSION['cart'][$row['id']] * $row['price'];
                    }

                    $connect->close();

                    $_SESSION['total'] = $total;

                    echo "
                          <tr>
                            <td></td>
                            <td></td>
                            <td>
                              <h5>Subtotal</h5>
                            </td>
                            <td>
                              <h5>$".number_format($total, 2)."</h5>
                            </td>
                          </tr>
                        </tbody>
                      </table>
                  
                      <div class='checkout_btn_inner float-right'>
                        <a class='btn_1' href='cart.php'>Comeback cart</a>
                        <input type='submit' name='submit' value='Confirm checkout' class='btn_1 checkout_btn_1'>
                      </div>
                    </form>
                  </div>
                </div>
              </section>";

                  } else {
                    echo "<center style='margin: 30px 0'><h3>No product in cart</h3></center>";
                  }

                  
                  
                 ?>

  <!-- footer section -->
  <?php 
    include_once('./inc/footer.php');
   ?>
  <!-- footer section -->

  <div class="search-model-box">
    <div class="h-100 d-flex align-items-center justify-content-center">
      <div class="search-close-btn">+</div>
      <form class="search-model-form">
        <input type="text" name="search" placeholder="Search" id="search-input">
      </form>
    </div>
  </div>

  <!-- jQery -->
  <script src="js/jquery-3.4.1.min.js"></script>
  <!-- popper js -->
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
  </script>
  <!-- bootstrap js -->
  <script src="js/bootstrap.js?v=1"></script>
  <!-- owl slider -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js">
  </script>
  <!-- custom js -->
  <script src="js/custom.js"></script>
  <!-- Google Map -->
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCh39n5U-4IoWpsVGUHWdqB6puEkhRLdmI&callback=myMap"></script>
  <!-- End Google Map -->

</body>

</html>
<?php 
  session_start();

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
  <link rel="stylesheet" type="text/css" href="css/grid.css" />

  <!--owl slider stylesheet -->
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />

  <!-- font awesome style -->
  <link href="css/font-awesome.min.css" rel="stylesheet" />

  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="css/responsive.css" rel="stylesheet" />

</head>

<body class="sub_page">

  <div class="hero_area">

    <!-- header section strats -->
    <?php 
      include_once('./inc/header.php');
     ?>
    <!-- end header section -->
  </div>

  <!-- shop section -->

  <section class="shop_section layout_padding">
    <div class="container">
      <div class="heading_container heading_center">
        <h2>
          Latest Watches
        </h2>
      </div>

      <div class="row">
        <div class="l-3 me-0 s-0">
          <div>
            <div class="cate_heading text-center">
              <h3>Category</h3>
            </div>
            <div class="list-group">
              <?php 
                $connect = new mysqli("localhost:3307", "root", "", "whalewatch");

                if($connect->connect_error) {
                  var_dump($connect->connect_error);
                  die();
                }

                $query = "SELECT * FROM tbl_category";
                $result = mysqli_query($connect, $query);

                while($row = mysqli_fetch_array($result)) {
                ?>
                <a href="productbycate.php?cateid=<?php echo $row['id'] ?>" class="list-group-item list-group-item-action"><?php echo $row['cate_name']; ?></a>
                <?php               
                }

                $connect->close();
              
              ?>
            </div>
          </div>
          <div>
            <div class="cate_heading text-center">
              <h3>Category</h3>
            </div>
            <div class="list-group">
              <?php 
                $connect = new mysqli("localhost:3307", "root", "", "whalewatch");

                if($connect->connect_error) {
                  var_dump($connect->connect_error);
                  die();
                }

                $query = "SELECT * FROM tbl_category";
                $result = mysqli_query($connect, $query);

                while($row = mysqli_fetch_array($result)) {
                ?>
                <a href="productbycate.php?cateid=<?php echo $row['id'] ?>" class="list-group-item list-group-item-action"><?php echo $row['cate_name']; ?></a>
                <?php               
                }

                $connect->close();
              
              ?>
            </div>
          </div>
        </div>
        <div class="col-xl-9 col-md-12">
          <div class="row" id="content">

            <?php 
              $connect = new mysqli("localhost:3307", "root", "", "whalewatch");

              if($connect->connect_error) {
                var_dump($connect->connect_error);
                die();
              }

              if(isset($_POST['search-text'])) {
                $txt = $_POST['search-text'];
                $query = "SELECT * FROM `tbl_product` WHERE product_name LIKE '%".$txt."%'";
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
              } else {
                $data = [];
              $query = 'SELECT count(id) number FROM `tbl_product`';
              $result = mysqli_query($connect, $query);
              while($row = mysqli_fetch_array($result)) {
                $data[] = $row;
              }

              $number = 0;
              if($data != NULL && count($data) > 0) {
                $number = $data[0]['number'];
              }

              $pages = ceil($number / 9);
              $index = 0;

              $current_page = 1;
              if(isset($_GET['page'])) {
                $current_page = $_GET['page'];
              }
              $index = ($current_page - 1) * 9;

              $query = "SELECT * FROM tbl_product LIMIT ".$index.",9";
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
              }

              

              $connect->close();
             ?>
         </div>
         <div class="row">
            <nav aria-label="Page navigation example">
              <ul class="pagination justify-content-center">
               <?php 
                if(isset($pages)) {
                for($i=1; $i<=$pages; $i++) {
                  echo "<li class='page-item'><a class='page-link' href='?page=".$i."'>".$i."</a></li> ";
                }}
                ?>
            </ul>
          </nav>
         </div>
      </div>
      </div>
    </div>
  </section>

  <!-- end shop section -->

  <!-- footer section -->
  <?php 
      include_once('./inc/footer.php');
     ?>
  <!-- footer section -->

  <!-- jQery -->
  <script src="js/jquery-3.4.1.min.js"></script>
  <!-- popper js -->
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
  </script>
  <!-- bootstrap js -->
  <script src="js/bootstrap.js"></script>
  <!-- owl slider -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js">
  </script>
  <!-- custom js -->
  <script src="js/custom.js"></script>
  <!-- Google Map -->
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCh39n5U-4IoWpsVGUHWdqB6puEkhRLdmI&callback=myMap"></script>
  <!-- End Google Map -->
  <script type="text/javascript">
    function loadSearch(param) {
      var txtSearch = param.value;
      $.ajax({
        url: "/WhaleWatch/searchajax.php",
        type: "get", //send it through get method
        data: {
          txt: txtSearch
        },
        success: function(data) {
          var row = document.getElementById('content');
          content.innerHTML = data;
        },
        error: function(xhr) {
          //Do Something to handle error
        }
      });
    }
  </script>
</body>

</html>
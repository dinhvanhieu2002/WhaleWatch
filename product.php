<?php 
  session_start();
  if(isset($_SESSION['user_id'])) {
    $userid = $_SESSION['user_id'];
  }
  
  if(isset($_GET['productid'])) {
    $productid = $_GET['productid'];
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
  <link href="css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="css/responsive.css" rel="stylesheet" />
  <script src="//cdn.ckeditor.com/4.16.2/standard/ckeditor.js"></script>

</head>

<body class="sub_page">
  <div class="hero_area">
    <?php 
      include_once('./inc/header.php');
     ?>
  </div>
  <main class="mt-5 pt-4">
    <div class="container dark-grey-text mt-5">
      <?php 
        $connect = new mysqli("localhost:3307", "root", "", "whalewatch");

        if($connect->connect_error) {
          var_dump($connect->connect_error);
          die();
        }

        $query = "SELECT * FROM tbl_product WHERE id = $productid";
        $result = mysqli_query($connect, $query);
        $data = array();

        while($row = mysqli_fetch_array($result)) {
          echo "<div class='row fadeIn'>
                  <div class='col-lg-6 col-md-6 mb-4'>
                    <img src='".$row['image']."' class='img-fluid' alt=''>
                  </div>
                  <div class='col-lg-6 col-md-6 mb-4'>
                    <div class='p-4'>
                      <h3 class='font-weight-bold'>".$row['product_name']."</h3>
                      <p class='lead'>
                        <span>Price: $".$row['price']."</span>
                      </p>

                      <p class='lead font-weight-bold'>Description</p>

                      <p>".$row['description']."</p>
                      <form class='d-flex justify-content-left' action='./classes/addcart.php?productid=".$row['id']."' method='POST'>
                        <!-- Default input -->
                        <input type='number' value='1' aria-label='Search' name='quantity' class='form-control' style='width: 100px'>
                        <button class='btn btn-primary btn-md my-0 p' type='submit'>Buy now
                          <i class='fa fa-shopping-cart ml-1'></i>
                        </button>
                      </form>
                    </div>
                  </div>
                </div>";
        }

        $connect->close();

        
       ?>
      <hr>
    </div>
  </main>
  <div class="container comment-area">
    <div class="row comment-input">
        <i class="fa fa-user-circle avt_icon"></i>
        <form method="POST" id="comment_form">
          <input type="hidden" class="comment_user_id" name="comment_user_id" value="<?php echo $userid ?>">
          <input type="hidden" class="comment_product_id" name="comment_product_id" value="<?php echo $productid ?>">
          <textarea name="editor1" class="comment_content"></textarea>
          
          <button type="submit" class="btn btn-primary" id="cmtBtn" name="submit">Comment</button>
        </form>
    </div>
    <div id="comment_list">
    </div>
  </div>
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
  <script>
    CKEDITOR.replace('editor1');
  </script>
  
  <script type="text/javascript">

    $(document).ready(function() {
      load_comment();

      function load_comment() {
        var product_id = $('.comment_product_id').val();
        
        $.ajax({
        url: "fetchcomment.php",
        type: 'POST',
        data: {product_id: product_id},
        success: function(data) {
          $('#comment_list').html(data);
        }
      });
      }

      $('#cmtBtn').click(function()  {
        var product_id = $('.comment_product_id').val();
        var user_id = $('.comment_user_id').val();
        var comment_content =  CKEDITOR.instances['editor1'].getData();

        $.ajax({
        url: "addcomment.php",
        type: 'POST',
        data: {product_id: product_id, user_id: user_id, comment_content: comment_content},
        success: function(data) {
          load_comment();
        }
      });
      });
    });
  </script>
</body>

</html>


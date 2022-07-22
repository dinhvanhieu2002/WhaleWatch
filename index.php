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
  <!--owl slider stylesheet -->
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />

  <!-- font awesome style -->
  <link href="css/font-awesome.min.css" rel="stylesheet" />

  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="css/responsive.css" rel="stylesheet" />

</head>

<body>
  <div class="hero_area">
    <?php 
      include_once('./inc/social.php');
      include_once('./inc/header.php');
      include_once('./inc/slider.php');
     ?>
  </div>

  <!-- shop section -->

  <section class="shop_section layout_padding">
    <div class="container">
      <div class="heading_container heading_center">
        <h2> Latest Watches </h2> 
      </div>
      <div id="content" class="row">
        <?php 

          $connect = mysqli_connect("127.0.0.1:3307", "root", "", "whalewatch");

          if($connect->connect_error) {
            var_dump($connect->connect_error);
            die();
          } 

          $query = "SELECT * FROM tbl_product LIMIT 1";
          $result = mysqli_query($connect, $query);

          while($row = mysqli_fetch_array($result)) {
            echo "<div class='product col-md-6'>
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
                          <span> Featured </span>
                        </div>
                      </a>
                    </div>
                  </div>";
          }

          $connect->close();
         ?>
        <?php 
          $connect = new mysqli("localhost:3307", "root", "", "whalewatch");

          if($connect->connect_error) {
            var_dump($connect->connect_error);
            die();
          }

          $query = "SELECT * FROM tbl_product LIMIT 1,6";
          $result = mysqli_query($connect, $query);

          while($row = mysqli_fetch_array($result)) {
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
        
      </div>
      <div class="btn-box">
        <button class="btn btn-warning" onclick="loadMore()">View more</button>
      </div>
    </div>
  </section>

  <!-- end shop section -->

  <!-- about section -->

  <section class="about_section layout_padding">
    <div class="container  ">
      <div class="row">
        <div class="col-md-6 col-lg-5 ">
          <div class="img-box">
            <img src="images/about-img.png" alt="">
          </div>
        </div>
        <div class="col-md-6 col-lg-7">
          <div class="detail-box">
            <div class="heading_container">
              <h2>
                About Us
              </h2>
            </div>
            <p>
              There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration
              in some form, by injected humour, or randomised words which don't look even slightly believable. If you
              are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in
              the middle of text. All
            </p>
            <a href="">
              Read More
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end about section -->

  <!-- feature section -->

  <section class="feature_section layout_padding">
    <div class="container">
      <div class="heading_container">
        <h2>
          Features Of Our Watches
        </h2>
        <p>
          Consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
        </p>
      </div>
      <div class="row">
        <div class="col-sm-6 col-lg-3">
          <div class="box">
            <div class="img-box">
              <img src="images/f1.png" alt="">
            </div>
            <div class="detail-box">
              <h5>
                Fitness Tracking
              </h5>
              <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit,
              </p>
              <a href="">
                <span>
                  Read More
                </span>
                <i class="fa fa-long-arrow-right" aria-hidden="true"></i>
              </a>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-lg-3">
          <div class="box">
            <div class="img-box">
              <img src="images/f2.png" alt="">
            </div>
            <div class="detail-box">
              <h5>
                Alerts & Notifications
              </h5>
              <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit,
              </p>
              <a href="">
                <span>
                  Read More
                </span>
                <i class="fa fa-long-arrow-right" aria-hidden="true"></i>
              </a>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-lg-3">
          <div class="box">
            <div class="img-box">
              <img src="images/f3.png" alt="">
            </div>
            <div class="detail-box">
              <h5>
                Messages
              </h5>
              <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit,
              </p>
              <a href="">
                <span>
                  Read More
                </span>
                <i class="fa fa-long-arrow-right" aria-hidden="true"></i>
              </a>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-lg-3">
          <div class="box">
            <div class="img-box">
              <img src="images/f4.png" alt="">
            </div>
            <div class="detail-box">
              <h5>
                Bluetooth
              </h5>
              <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit,
              </p>
              <a href="">
                <span>
                  Read More
                </span>
                <i class="fa fa-long-arrow-right" aria-hidden="true"></i>
              </a>
            </div>
          </div>
        </div>
      </div>
      <div class="btn-box">
        <a href="">
          View More
        </a>
      </div>
    </div>
  </section>

  <!-- end feature section -->

  <!-- contact section -->

  <section class="contact_section">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <div class="form_container">
            <div class="heading_container">
              <h2>
                Contact Us
              </h2>
            </div>
            <form action="">
              <div>
                <input type="text" placeholder="Full Name " />
              </div>
              <div>
                <input type="email" placeholder="Email" />
              </div>
              <div>
                <input type="text" placeholder="Phone number" />
              </div>
              <div>
                <input type="text" class="message-box" placeholder="Message" />
              </div>
              <div class="d-flex ">
                <button>
                  SEND
                </button>
              </div>
            </form>
          </div>
        </div>
        <div class="col-md-6">
          <div class="img-box">
            <img src="images/contact-img.jpg" alt="">
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end contact section -->

  <!-- client section -->
  <section class="client_section layout_padding">
    <div class="container">
      <div class="heading_container heading_center">
        <h2>
          Testimonial
        </h2>
      </div>
      <div class="carousel-wrap ">
        <div class="owl-carousel client_owl-carousel">
          <div class="item">
            <div class="box">
              <div class="img-box">
                <img src="images/c1.jpg" alt="">
              </div>
              <div class="detail-box">
                <div class="client_info">
                  <div class="client_name">
                    <h5>
                      Mark Thomas
                    </h5>
                    <h6>
                      Customer
                    </h6>
                  </div>
                  <i class="fa fa-quote-left" aria-hidden="true"></i>
                </div>
                <p>
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                  labore
                  et
                  dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                  aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                  cillum
                  dolore eu fugia
                </p>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="box">
              <div class="img-box">
                <img src="images/c2.jpg" alt="">
              </div>
              <div class="detail-box">
                <div class="client_info">
                  <div class="client_name">
                    <h5>
                      Alina Hans
                    </h5>
                    <h6>
                      Customer
                    </h6>
                  </div>
                  <i class="fa fa-quote-left" aria-hidden="true"></i>
                </div>
                <p>
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                  labore
                  et
                  dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                  aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                  cillum
                  dolore eu fugia
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- end client section -->

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
  <script src="js/custom.js?v=1"></script>
  <!-- Google Map -->
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCh39n5U-4IoWpsVGUHWdqB6puEkhRLdmI&callback=myMap"></script>
  <!-- End Google Map -->

  <script type="text/javascript">
    function loadMore() {
      var amount = document.getElementsByClassName('product').length;
      console.log(amount);
      $.ajax({
        url: "/WhaleWatch/loadmore.php",
        type: "get", //send it through get method
        data: {
          'exits': amount
        },
        success: function(data) {
          var row = document.getElementById('content');
          content.innerHTML += data;
        },
        error: function(xhr) {
          //Do Something to handle error
        }
      });
    }
  </script>
</body>

</html>


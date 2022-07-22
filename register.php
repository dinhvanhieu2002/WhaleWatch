<?php 
  if(!empty($_POST)) {
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
              VALUES('".$fullname."','".$username."', '".$password."', '".$email."', '".$phone."')";
    mysqli_query($connect, $query);

    $connect->close();

    // if($fullname == '' || $username == '' || $password == '' || $email == '' || $phone == '') 
    // {
    //  $error = "<span class='error'>Fields must be not empty</span>";
    // } else {
    //  $check_username = "SELECT * FROM customer WHERE user_name = '$username' LIMIT 1";
    //  $result_check = mysqli_query($connect, $check_username);
    //  if($result_check) {
    //    $error = "<span class='error'>Email has been existed</span>";
    //  } else {
    //    $query = "INSERT INTO customer(full_name, user_name, password, email, phone)
    //                VALUES('".$fullname."','".$username."', '".$password."', '".$email."', '".$phone."')";
    //    mysqli_query($connect, $query);
    //    if($result) {
    //      $success = "<span class='success'>Sign up successfully</span>";
    //    } else {
    //      $error = "<span class='error'>Sign up not successfully</span>";
    //    }
    //  }
    // }

    header('Location: login.php');
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

     <?php 
        // if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit'])) {
        //   $insertCustomer = $cs->insert_customer($_POST);
        // }
     ?>
  </div>
  <section class="login_part section_padding ">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-6 col-md-6">
          <div class="login_part_text text-center">
            <div class="login_part_text_iner">
              <h2>To be an close customer</h2>
              <p>There are product being made in science and technology
              everyday, and a good example of this is the</p>
              <a href="register.php" class="btn_3">Create an Account</a>
            </div>
          </div>
        </div>
        <div class="col-lg-6 col-md-6">
          <div class="login_part_form">
            <div class="login_part_form_iner">
              <h3>Welcome to my shop ! <br>
              Please Sign up now</h3>
              <form class="row contact_form" action="" method="POST">
                <div class="col-md-12 form-group p_star">
                  <input type="text" class="form-control" id="fullname" name="fullname" value="" placeholder="Fullname">
                </div>
                <div class="col-md-12 form-group p_star">
                  <input type="text" class="form-control" id="username" name="username" value="" placeholder="Username">
                </div>
                <div class="col-md-12 form-group p_star">
                  <input type="password" class="form-control" id="password" name="password" value="" placeholder="Password">
                </div>
                <div class="col-md-12 form-group p_star">
                  <input type="text" class="form-control" id="email" name="email" value="" placeholder="Email">
                </div>
                <div class="col-md-12 form-group p_star">
                  <input type="tel" class="form-control" id="phone" name="phone" value="" placeholder="Phone number">
                </div>
                <div class="col-md-12 form-group">
                  <?php 
                    // if(isset($insertCustomer)) {
                    //   echo $insertCustomer;
                    // }

                  // if(isset($error)) {
                  //   echo $error;
                  // } else if(isset($success)){
                  //   echo $success;
                  // }
                  ?>
                  <button type="submit" value="submit" class="btn_3">
                    Sign up
                  </button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

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

</body>

</html>
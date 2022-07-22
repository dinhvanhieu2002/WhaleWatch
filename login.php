<?php 
  session_start();
 ?>
<?php 
  if(!empty($_POST)) {
    $username = $_POST['username'];
    $password = md5($_POST['password']);

    $connect = new mysqli("localhost:3307", "root", "", "whalewatch");

    if($connect->connect_error) {
      var_dump($connect->connect_error);
      die();
    }

    $query = "SELECT * FROM tbl_customer WHERE user_name = '$username' AND password = '$password'";
    $result = mysqli_query($connect, $query);
    $data = array();

    while($row = mysqli_fetch_array($result, 1)) {
      $data[] = $row;
    }

    $connect->close();

    if(!isset($_SESSION['user']) && $data != '' && count($data) > 0)
    {
      $_SESSION['user_id'] = $data[0]['id'];
      $_SESSION['user'] = $data[0]['user_name'];
      header("Location: index.php");
    }
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
    <!-- header section strats -->
    <?php 
      include_once('./inc/header.php');
     ?>
    <!-- end header section -->
  </div>

  <section class="login_part section_padding ">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-6 col-md-6">
          <div class="login_part_text text-center">
            <div class="login_part_text_iner">
              <h2>New to our Shop?</h2>
              <p>There are advances being made in science and technology
              everyday, and a good example of this is the</p>
              <a href="register.php" class="btn_3">Create an Account</a>
            </div>
          </div>
        </div>
        <div class="col-lg-6 col-md-6">
          <div class="login_part_form">
            <div class="login_part_form_iner">
              <h3>Welcome Back ! <br>
              Please Sign in now</h3>
              <form class="row contact_form" action="" method="post" novalidate>
                <div class="col-md-12 form-group p_star">
                  <input type="text" class="form-control" id="" name="username" value="" placeholder="Username">
                </div>
                <div class="col-md-12 form-group p_star">
                  <input type="password" class="form-control" id="" name="password" value="" placeholder="Password">
                </div>
                <div class="col-md-12 form-group">
                  <div class="creat_account d-flex align-items-center">
                    <input type="checkbox" id="f-option" name="selector">
                    <label for="f-option">Remember me</label>
                  </div>
                  <button type="submit" value="submit" class="btn btn-primary">
                    log in
                  </button >
                  <a class="lost_pass" href="#">forget password?</a>
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
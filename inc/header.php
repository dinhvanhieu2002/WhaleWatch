<?php 
  
?>

 <?php 
  // include('lib/database.php');
  // include('classes/customer.php');

  // $db = new Database();
  // $cs = new customer();

  ?>
<header class="header_section">
      <div class="container-fluid">
        <nav class="navbar navbar-expand-lg custom_nav-container ">
          <a class="navbar-brand" href="index.php">
            <span>
              WhaleWatch
            </span>
          </a>

          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class=""> </span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav">
              <li class="nav-item active">
                <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="watches.php"> Watches </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="about.php"> About </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="contact.php">Contact Us</a>
              </li>
            </ul>
            
            <div class="user_option-box">
              <form action="" method="POST">
                <input oninput="loadSearch(this)" type="text" name="search-text" class="search-txt" placeholder="Search">
                <button type="submit" id="search-btn" on>
                  <i class="fa fa-search" aria-hidden="true"></i>
                </button>
                <a href="cart.php">
                  <i class="fa fa-cart-plus" aria-hidden="true"></i>
                </a>
                <?php 
                  if(isset($_SESSION['user'])) {
                    echo "<a href='./classes/logout.php'>
                            <i class='fa fa-power-off' aria-hidden='true'></i>
                           </a>";
                  } else {
                    echo "<a href='login.php'>
                           <i class='fa fa-user' aria-hidden='true'></i>
                          </a>";
                  }
                 ?>
              </form>    
            </div>
          </div>
        </nav>
      </div>
    </header>
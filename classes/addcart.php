<?php 
	session_start();
 ?>
<?php
	if(!isset($_SESSION['user'])) {
	    echo "<script type='text/javascript'>alert('Vui lòng đăng nhập')</script>";
	    sleep(3);
	    header('Location: http://localhost:8080/WhaleWatch/index.php');
	} else {
		$id=$_GET['productid'];
		$quantity = $_POST['quantity'];
		if(isset($_SESSION['cart'][$id]))
		{
			$qty = $_SESSION['cart'][$id] + $quantity;
		}
		else
		{
			$qty=$quantity;
		}
		$_SESSION['cart'][$id]=$qty;
		header("location:http://localhost:8080/WhaleWatch/cart.php");
		exit();
	}
?>
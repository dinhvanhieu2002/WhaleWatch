<?php 	
	session_start();
 ?>

 <?php 
 
 	if(isset($_SESSION['user'])) {
 		unset($_SESSION['user']);
 		var_dump($_SESSION['user']);
 		header('Location: http://localhost:8080/WhaleWatch/login.php');
 	}
  ?>
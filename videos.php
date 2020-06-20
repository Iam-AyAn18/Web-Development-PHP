<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: login.php");
  }
?>
<!DOCTYPE html>
<html>
<head>
	<title>Videos</title>
	<link rel="stylesheet" type="text/css" href="CSS/style.css">
</head>
<body>
<div class="Full">
	<div class="back">  
	</div>
</div>
</body>
</html>
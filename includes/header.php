<?php

require 'config/config.php';


if(isset($_SESSION['username'])){

	$userLoggedIn=$_SESSION['username'];
	$iuser_details_query=mysqli_query($con,"SELECT * FROM user WHERE username='$userLoggedIn'");
	$user=mysqli_fetch_array($iuser_details_query);
}else{

	header("Location:register.php");
}

?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- js -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script src="assets/js/bootstrap.js"></script>

		<!-- Css --><!-- 
	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css"> -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">
	<!-- <link rel="stylesheet" type="text/css" href="assets/css/style.css"> -->
	<link rel="stylesheet" type="text/css" href="assets/css/header.css">
	<link rel="stylesheet" type="text/css" href="assets/css/userdetails.css">
	<link rel="stylesheet" type="text/css" href="assets/css/post.css">
	<link rel="stylesheet" type="text/css" href="assets/css/rightcolumn.css">
	<title>Code Safari</title>
</head>
<body>


	<div class="top_bar">
		<div class="logo">
			<a href="index.php">Code Safari</a>
		</div>

		<nav>

			<a href="index.php">
				<i><img src="assets/images/header/house.png"></i>
				
			</a>
			<a href="#">
				<i><img src="assets/images/header/project.png"></i>
				  

			</a>
			<a href="#">
				<i><img src="assets/images/header/meeting.png"></i>
				 
			</a>
			<a href="#">
				<i><img src="assets/images/header/messenger.png"></i>
				 
			</a>

			<a href="#">
			<i><img src="assets/images/header/webinar.png"></i>
			  
			</a>
			<a href="#">
			<i><img src="assets/images/header/job.png"></i>
			  
			</a>
			<a href="includes/handlers/logout.php">
				<i><img src="assets/images/header/businessman.png"></i>
			</a>

		</nav>
	</div>



	<div class="grid">
		


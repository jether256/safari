<?php

require 'config/config.php';
include("includes/classes/User.php");
//include("includes/classes/Post.php");
include("includes/classes/Job.php");
include("includes/classes/Skills.php");
include("includes/classes/Title.php");



if(isset($_SESSION['username'])){

	$userLoggedIn = $_SESSION['username'];
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

	<link rel="stylesheet" type="text/css" href="https://unicons.iconscout.com/release/v2.1.6/css/unicons.css">


	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">
	<!-- <link rel="stylesheet" type="text/css" href="assets/css/style.css"> -->
<!-- 	<link rel="stylesheet" type="text/css" href="assets/css/header.css">
	<link rel="stylesheet" type="text/css" href="assets/css/userdetails.css">
	<link rel="stylesheet" type="text/css" href="assets/css/post.css">
	<link rel="stylesheet" type="text/css" href="assets/css/rightcolumn.css">
 -->


		<link rel="stylesheet" type="text/css" href="assets/css/animate.css">
		<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="assets/css/line-awesome.css">
		<link rel="stylesheet" type="text/css" href="assets/css/line-awesome-font-awesome.min.css">
		<link rel="stylesheet" type="text/css" href="assets/css/font-awesome.min.css">
		<link rel="stylesheet" type="text/css" href="assets/css/jquery.mCustomScrollbar.min.css">
		<link rel="stylesheet" type="text/css" href="assets/lib/slick/slick.css">
		<link rel="stylesheet" type="text/css" href="assets/lib/slick/slick-theme.css">
		<link rel="stylesheet" type="text/css" href="assets/css/style.css">
		<link rel="stylesheet" type="text/css" href="assets/css/responsive.css">



	<title>Code Safari</title>
</head>
<body>


		
	



		


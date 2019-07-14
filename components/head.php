<!DOCTYPE html>
<html>
<head>
	<title>SoftTech Engine</title>
	<!-- Required meta tags --> 
	 <meta charset="utf-8">
	 <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"> 
      <!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

     <!-- Font Awesome CSS -->
	 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	<!-- Style CSS -->
    <link rel="stylesheet" href="/assets/css/style.css">

	<style>
		@import url('https://fonts.googleapis.com/css?family=Titillium+Web&display=swap');
		body{
			/* font-family: 'Titillium Web', sans-serif; */
			font-family:  sans-serif;
		}
		.btn-primary {
			color: #fff;
			background-color: #9343d5;
			border-color: #9343d5;
        border-left-color: rgb(147, 67, 213);
		}
	</style> 
	<style type="text/css">
	.bg-image {
		background-image:url('assets/img/bg-image.jpg');
		background-size:cover;
		-webkit-filter:brightness(35%);
		width: 100%;
		height: 100%;
		position: absolute;
		top:0;
		left:0;
	}

	.input-radius {
		border-radius: 50px;
		border-right: 0;
		border-bottom-right-radius: 0;
		border-top-right-radius: 0;
	
	}

	.btn-radius {
		border-radius: 50px;
		border-top-left-radius: 0;
		border-bottom-left-radius: 0;
		border-left: 0;
		padding-left: 25px !important;
		padding-right: 25px !important;
		padding-top: 12.5px !important;
		padding-bottom: 12.5px !important;
	}

	.form-index {
		margin-top: 30px;
		margin-bottom: 30px;
	}
</style>
</head>
<body>

<!-- navbar -->
<nav class="navbar navbar-expand-lg navbar-fixed-top navbar-dark bg-primary" style="background-image: linear-gradient(to left, #9343d5 44%,#5524a5);">
  <div class="container">
 	<a class="navbar-brand font-weight-bold" href="/search_engine"> <i class="fa fa-shopping-cart text-white font-italic font-weight-bold"></i> SOVTECH</a>
	<p class="navbar-brand text-sm m-0"><small>	Search Over Internet Technology</small></p>
	
 </nav>
<!-- and navbar -->
</head>
<body>
<?php
	$conn = new mysqli("localhost","root","","soft_tech");
?>
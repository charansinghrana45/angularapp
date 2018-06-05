<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>My First Website</title>
<link rel="stylesheet" href="<?php echo base_url('assets/css/style1.css'); ?>">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
<link href="https://fonts.googleapis.com/css?family=Dosis" rel="stylesheet">
</head>
<body>

	<section class="hero">
		<h1>WONDERFUL AGENCY</h1>
		<h2>Leading Websolution Agency</h3>
		<h3>On Planet</h5>
	</section>

	<nav class="menu">
		<ul>
			<li><a href="#">Home</a></li>
			<li><a href="#">About</a></li>
			<li><a href="#">Services</a></li>
			<li><a href="#">Portfolio</a></li>
			<li><a href="#">Contact</a></li>
		</ul>
	</nav>

	<section class="services">
		<h1>Services</h1>		
		<div class="col-wrapper">
			<div class="services-col">
				<img src="<?php echo base_url('assets/images/computer.jpg'); ?>">
				<h3>Service Name</h3>
				<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
			</div>
			<div class="services-col">
				<img src="<?php echo base_url('assets/images/computer.jpg'); ?>">
				<h3>Service Name</h3>
				<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
			</div>
			<div class="services-col">
				<img src="<?php echo base_url('assets/images/computer.jpg'); ?>">
				<h3>Service Name</h3>
				<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
			</div>
		</div>
	</section>

</body>
</html>

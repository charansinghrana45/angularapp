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

    <section class="about-us">
    	<h1>About US</h1>
    	<p class="aboutus-content">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p>
    	<button class="aboutus-btn">View More&nbsp;<i class="fas fa-long-arrow-alt-right"></i></button>
    </section>

    <section class="team">
    	<h1>Our Team</h1>
    	<div class="team-wrapper">
    		<div class="col-team">
    			<center>
    			<div class="tcol">
    				<img src="<?php echo base_url('assets/images/member1.jpeg'); ?>"><hr>
    				<h3>Member1</h3>
    				<p>Founder/CEO</p>
    			</div>
    			</center>
    		</div>
    		<div class="col-team">
    			<center>
    			<div class="tcol">
    				<img src="<?php echo base_url('assets/images/member1.jpeg'); ?>"><hr>
    				<h3>Member1</h3>
    				<p>Founder/CEO</p>
    			</div>
    			</center>
    		</div>
    		<div class="col-team">
    			<center>
    			<div class="tcol">
    				<img src="<?php echo base_url('assets/images/member1.jpeg'); ?>"><hr>
    				<h3>Member1</h3>
    				<p>Founder/CEO</p>
    			</div>
    			</center>
    		</div>
    	</div>
    </section>

    <section class="contact">
    	<div class="cta">
    		<div class="cta-col">
    			<i class="fas fa-envelope fa-4x"></i>&nbsp;
    			<h3>info@email.com</h3>
    		</div>
    		<div class="cta-col">
    			<i class="fas fa-phone fa-4x"></i>&nbsp;
    			<h3>9999988888</h3>
    		</div>
    		<div class="cta-col">
    			<i class="fas fa-fax fa-4x"></i>&nbsp;
    			<h3>0312-345678</h3>
    		</div>
    	</div>
    </section>

    <main class="contactinfo">
    	<div class="contactinfo-col1">
    		<h3>Our Contact Information</h3><br><br><br>
    		<i class="fas fa-envelope"></i>&nbsp; abc@gamil.com<br>
    		<i class="fas fa-phone"></i>&nbsp; +919999988888<br><br><br>

    		<b>Our Social Profiles</b><br><br><br>
    		<span class="social-icons fb">
    			<i class="fab fa-facebook"></i>
    		</span>&nbsp;
    		<span class="social-icons tw">
    			<i class="fab fa-twitter"></i>
    		</span>&nbsp;
    		<span class="social-icons in">
    			<i class="fab fa-instagram"></i>
    		</span>&nbsp;
    		<span class="social-icons ln">
    			<i class="fab fa-linkedin"></i>
    		</span>&nbsp;
    	</div>
    	<div class="contactinfo-col2">
    		<h2>Wrie Your Message</h2>
    		<form action="" class="form">
    			<div class="form-col">
    				<label for="fname">Your Name</label>
    				<input type="text" name="" class="fname">
    			</div>
    			<div class="form-col">
    				<label for="name">Your Email</label>
    				<input type="email" name="femail" class="femail">
    			</div>
    			<div class="msg-col">
    				<label for="msg">Message</label>
    				<textarea class="msg" cols="30" rows="10"></textarea>
    				<button class="sendbtn">Send</button>
    			</div>
    		</form>
    	</div>
    </main>

    <footer class="footer">
    	<div class="footer-col">
    		<h2>Lorem Ipsum Dolor</h2>
    		<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p>
    	</div>
    	<div class="footer-col">
    		<h2>Lorem Ipsum Dolor</h2>
    		<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p>
    	</div>
    	<div class="footer-col">
    		<h2>Lorem Ipsum Dolor</h2>
    		<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p>
    	</div>
    </footer>
</body>
</html>

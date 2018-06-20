<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, maximum-scale=1.0" />
	<title>CSS3 Effects</title>
	<style type="text/css">
		*{
			margin: 0px;
			padding: 0px;
			box-sizing: border-box;
		}

		.header {
			width: 100%;
			height: 80px;
			background-color: #666;
		}

		.heading {
			width: 100%;
			color: #fff;
			line-height: 80px;
			text-align: center;
		}

		.content {
			background-color: #F6F6F6;
			background: linear-gradient(to bottom, #F6F6F6 0%, #C4C4C4 100%) fixed;
			border-top: 3px solid pink;
			height: 100vh;
		}
		
		#wrapper {
			display: flex;
			margin-top: 10px;
			justify-content: space-around;
		}

		.text {
			text-align: center;
			font-size: 18px;
		}
		
		.box {
			width: 200px;
			height: 200px;
			border-radius: 50%;
			border: 5px solid #FFF;
			box-sizing: content-box;
			overflow: hidden;
			box-shadow: 10px 10px 20px rgba(0, 0, 0, 0.5);
			position: relative;
			cursor: pointer;
		}

		.box img {
			border-radius: 50%;
		}

		.box div {
			width: 200px;
			height: 105px;
			border-radius: 50%;
			background-color: #000;
			color: #FFF;
			text-align: center;
			box-sizing: content-box;
			padding-top: 95px;
		}

		div.effect1 div {
			position: absolute;
			top: 0;
			left: 0;
			opacity: 0;
			transition: opacity 700ms;
		}

		div.effect1 div:hover {
			opacity: 0.5;
		}

		div.effect2 img {
			position: absolute;
			top: 0;
			left: 0;
			transition: margin-left 800ms;
			color: white;
		}

		div.effect2:hover img{margin-left: 200px;}

		div.effect3 div {
			position: absolute;
			top: 0;
			left: 0;
			transition: margin-left 800ms;
			color: white;
			margin-left: -200px;
			opacity: 0.8;
		}

		div.effect3:hover div { margin-left: 0px; }

		div.effect4 img {
			position: absolute;
			top: 0;
			left: 0;
		}

		div.effect4 div {
			opacity: 0.8;
			transform: scale(0);
			transition-duration: 500ms;
			color: white;
		}

		div.effect4:hover div {
			transform: scale(1);
		}

		div.effect5 img {
			position: absolute;
			top: 0;
			left: 0;
			transform: scale(1);
			transition-duration: 500ms;
			color: white;
			overflow: hidden;
		}

		div.effect5:hover img {
			transform: scale(0);
		}

		div.effect6 img {
			position: absolute;
			top: 0;
			left: 0;
			overflow: hidden;
			/*transition: transform;
			transition-duration: 800ms;*/
		}

		@keyframes rotateimg {
		  from {
		    transform: rotate(0deg);
		  }

		  to {
		    transform: rotate(360deg);
		  }
		}

		div.effect6:hover img {
			animation: rotateimg 400ms linear infinite;
		}

		div.effect6:hover {
			box-shadow: none;
		}

	</style>
</head>
<body>
<header class="header">
	<div class="heading">This is CSS3 transition effects</div>
</header>
<section class="content">
	<div id="wrapper">
		<div class="box effect1">
			<img src="<?php echo base_url('assets/images/abstract-1.jpeg'); ?>">
			<div class="text">Amazing</div>
		</div>
		<div class="box effect2">
			<img src="<?php echo base_url('assets/images/abstract-2.jpeg'); ?>">
			<div class="text">Awesome</div>
		</div>
		<div class="box effect3">
			<img src="<?php echo base_url('assets/images/abstract-3.jpeg'); ?>">
			<div class="text">Attractive</div>
		</div>
		<div class="box effect4">
			<img src="<?php echo base_url('assets/images/abstract-4.jpeg'); ?>">
			<div class="text">Creatove</div>
		</div>
		<div class="box effect5">
			<img src="<?php echo base_url('assets/images/abstract-5.jpeg'); ?>">
			<div class="text">Beautiful</div>
		</div>
		<div class="box effect6">
			<img src="<?php echo base_url('assets/images/abstract-6.jpeg'); ?>">
			<div class="text">Superb</div>
		</div>
	</div>
</section>
</body>
</html>
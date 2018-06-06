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

<!-- #region Jssor Slider Begin -->
<!-- Generator: Jssor Slider Maker -->
<!-- Source: https://www.jssor.com -->
<link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:300,300italic,regular,italic,700,700italic&subset=latin-ext,greek-ext,cyrillic-ext,greek,vietnamese,latin,cyrillic" rel="stylesheet" type="text/css" />
<style>
    /*jssor slider loading skin spin css*/
    .jssorl-009-spin img {
        animation-name: jssorl-009-spin;
        animation-duration: 1.6s;
        animation-iteration-count: infinite;
        animation-timing-function: linear;
    }

    @keyframes jssorl-009-spin {
        from { transform: rotate(0deg); }
        to { transform: rotate(360deg); }
    }

    /*jssor slider bullet skin 032 css*/
    .jssorb032 {position:absolute;}
    .jssorb032 .i {position:absolute;cursor:pointer;}
    .jssorb032 .i .b {fill:#fff;fill-opacity:0.7;stroke:#000;stroke-width:1200;stroke-miterlimit:10;stroke-opacity:0.25;}
    .jssorb032 .i:hover .b {fill:#000;fill-opacity:.6;stroke:#fff;stroke-opacity:.35;}
    .jssorb032 .iav .b {fill:#000;fill-opacity:1;stroke:#fff;stroke-opacity:.35;}
    .jssorb032 .i.idn {opacity:.3;}

    /*jssor slider arrow skin 051 css*/
    .jssora051 {display:block;position:absolute;cursor:pointer;}
    .jssora051 .a {fill:none;stroke:#fff;stroke-width:360;stroke-miterlimit:10;}
    .jssora051:hover {opacity:.8;}
    .jssora051.jssora051dn {opacity:.5;}
    .jssora051.jssora051ds {opacity:.3;pointer-events:none;}
</style>
<script src="<?php echo base_url('assets/js/jquery-1.11.3.min.js'); ?>" type="text/javascript"></script>
<script src="<?php echo base_url('assets/js/jssor.slider-27.1.0.min.js'); ?>" type="text/javascript"></script>
<script type="text/javascript">
        jQuery(document).ready(function ($) {

            var jssor_1_SlideoTransitions = [
              [{b:-1,d:1,o:-0.7}],
              [{b:900,d:2000,x:-379,e:{x:7}}],
              [{b:900,d:2000,x:-379,e:{x:7}}],
              [{b:-1,d:1,o:-1,sX:2,sY:2},{b:0,d:900,x:-171,y:-341,o:1,sX:-2,sY:-2,e:{x:3,y:3,sX:3,sY:3}},{b:900,d:1600,x:-283,o:-1,e:{x:16}}]
            ];

            var jssor_1_options = {
              $AutoPlay: 1,
              $SlideDuration: 800,
              $SlideEasing: $Jease$.$OutQuint,
              $CaptionSliderOptions: {
                $Class: $JssorCaptionSlideo$,
                $Transitions: jssor_1_SlideoTransitions
              },
              $ArrowNavigatorOptions: {
                $Class: $JssorArrowNavigator$
              },
              $BulletNavigatorOptions: {
                $Class: $JssorBulletNavigator$
              }
            };

            var jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);

            /*#region responsive code begin*/

            var MAX_WIDTH = 3000;

            function ScaleSlider() {
                var containerElement = jssor_1_slider.$Elmt.parentNode;
                var containerWidth = containerElement.clientWidth;

                if (containerWidth) {

                    var expectedWidth = Math.min(MAX_WIDTH || containerWidth, containerWidth);

                    jssor_1_slider.$ScaleWidth(expectedWidth);
                }
                else {
                    window.setTimeout(ScaleSlider, 30);
                }
            }

            ScaleSlider();

            $(window).bind("load", ScaleSlider);
            $(window).bind("resize", ScaleSlider);
            $(window).bind("orientationchange", ScaleSlider);
            /*#endregion responsive code end*/
        });
    </script>
</head>
<body>

	<section class="hero">
		<h1>WONDERFUL AGENCY</h1>
		<h2>Leading Websolution Agency</h3>
		<h3>On Planet</h5>
	</section>

    <section class="slider">
        <!-- #endregion Jssor Slider Start -->
        <div id="jssor_1" style="position:relative;margin:0 auto;top:0px;left:0px;width:1300px;height:380px;overflow:hidden;visibility:hidden;">
                <!-- Loading Screen -->
                <div data-u="loading" class="jssorl-009-spin" style="position:absolute;top:0px;left:0px;width:100%;height:100%;text-align:center;background-color:rgba(0,0,0,0.7);">
                    <img style="margin-top:-19px;position:relative;top:50%;width:38px;height:38px;" src="<?php echo base_url('assets/images/spin.svg'); ?>" />
                </div>
                <div data-u="slides" style="cursor:default;position:relative;top:0px;left:0px;width:1300px;height:380px;overflow:hidden;">
                    <div data-p="225.00">
                        <img data-u="image" src="<?php echo base_url('assets/images/001.jpg'); ?>" />
                        <div data-u="caption" data-t="0" style="position:absolute;top:100px;left:0;width:100%;height:100%; text-align: center;font-weight: bold;">
                            This is Image1
                        </div>
                    </div>
                    <div data-p="225.00">
                        <img data-u="image" src="<?php echo base_url('assets/images/002.jpg'); ?>" />
                         <div data-u="caption" data-t="0" style="position:absolute;top:100px;left:0;width:100%;height:100%; text-align: center;font-weight: bold;">
                            This is Image2
                        </div>
                    </div>
                </div>
                <!-- Bullet Navigator -->
                <div data-u="navigator" class="jssorb032" style="position:absolute;bottom:12px;right:12px;" data-autocenter="1" data-scale="0.5" data-scale-bottom="0.75">
                    <div data-u="prototype" class="i" style="width:16px;height:16px;">
                        <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                            <circle class="b" cx="8000" cy="8000" r="5800"></circle>
                        </svg>
                    </div>
                </div>
                <!-- Arrow Navigator -->
                <div data-u="arrowleft" class="jssora051" style="width:65px;height:65px;top:0px;left:25px;" data-autocenter="2" data-scale="0.75" data-scale-left="0.75">
                    <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                        <polyline class="a" points="11040,1920 4960,8000 11040,14080 "></polyline>
                    </svg>
                </div>
                <div data-u="arrowright" class="jssora051" style="width:65px;height:65px;top:0px;right:25px;" data-autocenter="2" data-scale="0.75" data-scale-right="0.75">
                    <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                        <polyline class="a" points="4960,1920 11040,8000 4960,14080 "></polyline>
                    </svg>
                </div>
            </div>
            <!-- #endregion Jssor Slider End -->
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

    <section class="footer-bottom">
        <p><span>&copy;</span>&nbsp;<span>www.website.com</span></p>
    </section>
</body>
</html>

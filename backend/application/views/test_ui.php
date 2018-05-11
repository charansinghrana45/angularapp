<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<?php $this->load->view('layouts/header.php'); ?>



<div class="jumbotron">
<div class="container" style="min-height: 600px;">

	<div>
	        <ul id="menu">
	               <li>
	                <a  id="menu2" class="menu" href="#">click 2</a>
	                <ul class="sub">
	                    <li>rahul 1</li>
	                </ul>
	             </li>

	             <li>
	                <a  id="menu2" class="menu" href="#">click 2</a>
	                <ul class="sub">
	                    <li>rahul</li>
	                </ul>
	             </li>
	        </ul>
	</div>
 	

</div>
</div>

<script type="text/javascript">
	
	$(document).ready(function () {
	
	$("ul#menu li").hover(function () { 
	       $(this).find("ul.sub").slideDown('fast');
	    }, function () {
	        $(this).find("ul.sub").slideUp('fast');
	    });


	});

</script>


<?php $this->load->view('layouts/footer.php'); ?>
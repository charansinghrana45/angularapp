<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<?php $this->load->view('layouts/header.php'); ?>

<div class="jumbotron">
<div class="container" style="min-height: 600px;">

	<div id="products">
	<table class="table table-striped table-hover">
	  <thead>
	    <tr>
	      <th scope="col">#</th>
	      <th scope="col">Product Name</th>
	      <th scope="col">Product Description</th>
	      <th scope="col">Product Image</th>
	      <th scope="col">Category Name</th>
	    </tr>
	  </thead>
	  <tbody>

	  	<?php if(count($data['products']) == 0): ?>

	  	<tr>
	  		<td colspan="5"><div class="alert alert-info">No records found.</div></td>
	  	</tr>

	  	<?php endif; ?>	

	  	<?php 

	  	if($this->uri->segment(4) > 1)
	  	{

	  		$i = $this->uri->segment(4) + 1;
	  	}
	  	else
	  	{
	  		$i = 1;
	  	}

	  	?>
	  	<?php foreach ($data['products'] as $row): ?>
	    <tr>
	      <th scope="row"><?php echo $i++; ?></th>
	      <td><div class="prod-name"><?php echo $row->product_name; ?></div></td>
	      <td><?php echo $row->product_description; ?></td>
	      <td><img src="<?php echo base_url().$row->product_image; ?>" alt="<?php echo $row->product_name; ?>" width="80px;" height="50px;" /></td>
	      <td><?php echo $row->category_name; ?></td>
	    </tr>
		<?php endforeach; ?>
	  </tbody>
	</table>
	<?php echo $this->pagination->create_links(); ?>
	</div>
 	

</div>
</div>

<script type="text/javascript" src="<?php echo base_url('assets/js/common.js'); ?>"></script>


<?php $this->load->view('layouts/footer.php'); ?>
<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<?php $this->load->view('layouts/header.php'); ?>

<div class="jumbotron">
<div class="container" style="min-height: 600px;">

	<div id="products">
	<table class="table table-striped table-hover" id="myTable">
	  <thead>
	    <tr>
	      <th scope="col">Product Name</th>
	      <th scope="col">Product Description</th>
	      <th scope="col">Product Image</th>
	      <th scope="col">Category Name</th>
	    </tr>
	  </thead>
	</table>
	</div>


</div>
</div>

<script type="text/javascript">
	
	jQuery(document).ready(function () {

		console.log("loaded");

	    jQuery('#myTable').DataTable({
	        "processing": true,
	        "serverSide": true,
	        "ajax":{
                url :"http://localhost/angularapp/backend/data_table/get_data", // json datasource
                type: "get",  // method  , by default get
                error: function() {  // error handling
                    $(".employee-grid-error").html("");
                    $("#myTable").append('<tbody class="employee-grid-error"><tr><th colspan="4" class="text-center">No data found</th></tr></tbody>');
                    $("#myTable_processing").css("display","none");
 
                }
            },
	        "columns": [
	                    { "data": "product_name", "orderable": false},
	                    { "data": "product_description", "orderable": false },
	                    { "data": "product_image", "orderable": false},
	                    { "data": "category_name", "orderable": true },
	                ],
	        "order": [],
	        "lengthMenu": [[2, 3, 5], [2, 3, 5]],
	        "columnDefs": [
	                    {
	                        "render": function ( data, type, row ) {
	                            return '<img src="'+'<?php echo base_url(); ?>'+data+'" width=80px; height=50px; />';
	                        },
	                        "targets": 2
	                    },
	                ]
	    });

	});

</script>


<?php $this->load->view('layouts/footer.php'); ?>
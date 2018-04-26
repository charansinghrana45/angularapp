<?php
defined('BASEPATH') OR exit('No direct script access allowed');


$config = [

	'product_add' => [

			[
				'field' => 'name',
				'label' => 'Product Name',
				'rules' => 'trim|required'
			],
			[
				'field' => 'description',
				'label' => 'Product Description',
				'rules' => 'trim|required'
			],
			[
				'field' => 'category',
				'label' => 'Product Cateogry',
				'rules' => 'trim|required'
			]

		],

	'upload_image' => [

			[
				'field' => 'name',
				'label' => 'Name',
				'rules' => 'trim|required'
			]
			
	]

];
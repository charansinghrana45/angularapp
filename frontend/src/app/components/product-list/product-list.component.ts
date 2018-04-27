import { Component, OnInit } from '@angular/core';
import { JarwisService } from '../../services/jarwis.service';

@Component({
  selector: 'app-product-list',
  templateUrl: './product-list.component.html',
  styleUrls: ['./product-list.component.css']
})
export class ProductListComponent implements OnInit {

  public products = [];	

  public base_url = "http://localhost/angularapp/backend/";

  constructor(private jarwis : JarwisService) {

  }

  ngOnInit() {

  	this.jarwis.getProducts().subscribe(
  			data => this.handleResponse(data),
  			error => this.handleError(error)
  		);
  }

handleResponse(data)
{
	console.log(data);

	this.products = data.data;
}

handleError(error)
{
	console.log(error.error);
}



}

import { Component, OnInit, Input, SimpleChanges } from '@angular/core';
import { JarwisService } from '../../services/jarwis.service';

@Component({
  selector: 'app-product-list',
  templateUrl: './product-list.component.html',
  styleUrls: ['./product-list.component.css']
})
export class ProductListComponent implements OnInit {

  public products = [];	

  public base_url = "http://localhost/angularapp/backend/";

  
 @Input() productAddedStatus: boolean;


  constructor(private jarwis : JarwisService) {

  }

  ngOnInit() {

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

ngOnChanges(changes: SimpleChanges) {
  
  this.jarwis.getProducts().subscribe(
        data => this.handleResponse(data),
        error => this.handleError(error)
      );  

}


}

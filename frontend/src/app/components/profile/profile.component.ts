import { Component, OnInit } from '@angular/core';

import { JarwisService } from '../../services/jarwis.service';

@Component({
  selector: 'app-profile',
  templateUrl: './profile.component.html',
  styleUrls: ['./profile.component.css']
})
export class ProfileComponent implements OnInit {

  public categories = [];

  public form: any = {
  		
  		name: null,
  		description: null,
  		category: ''
  };

  public error = [];

  constructor(private jarwis : JarwisService) {

  	this.categories = [
  		{id: 1, name: 'Computer'},
  		{id: 2, name: 'Mobile'},
  		{id: 3, name: 'TV'},
  	];

   }

  ngOnInit() {

  }

  onSubmit() {

   		this.jarwis.addProduct(this.form).subscribe(
  			data => this.handleResponse(data),
  			error => this.handleError(error)
  		);;
  }

  handleResponse(data) {

  	 console.log(data);
  }

  handleError(error) {

    this.error = error.error.error;

    console.log(this.error);
  }

}

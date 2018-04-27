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

  fileToUpload: File = null;

  mfiles = [];

  i=0;

  constructor(private jarwis : JarwisService) {

  	this.categories = [
  		{id: 1, name: 'Computer'},
  		{id: 2, name: 'Mobile'},
  		{id: 3, name: 'TV'},
  	];

   }

  ngOnInit() {

  }

  handleInputFile(files: FileList) {

    this.fileToUpload = files.item(0);

    this.mfiles[this.i] = this.fileToUpload;

     this.i++;
  }

  onSubmit() {

   		this.jarwis.addProduct(this.form, this.mfiles).subscribe(
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

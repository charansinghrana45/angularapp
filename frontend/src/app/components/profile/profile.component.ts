import { Component, OnInit } from '@angular/core';

import { JarwisService } from '../../services/jarwis.service';
import { Router } from '@angular/router';

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

  public message = null;

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
     this.message = data.data;

     this.router.navigateByUrl('/profile');

  }

  handleError(error) {

    this.error = error.error.error;

    console.log(this.error);

    this.message = this.error.error;
  }

  onFocusName()
  {
    //alert('k');
  }

}

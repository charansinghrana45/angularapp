import { Component, OnInit } from '@angular/core';

import { JarwisService } from '../../services/jarwis.service';


@Component({
  selector: 'app-profile',
  templateUrl: './profile.component.html',
  styleUrls: ['./profile.component.css']
})
export class ProfileComponent implements OnInit {

  public childmessage = "I am passed from Parent to child component";


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

     document.getElementById('msg').classList.add('alert-success');
     document.getElementById('msg').classList.remove('alert-danger');
     document.getElementById('msg').style.display = "block";
  }

  handleError(error) {

    this.error = error.error.error;

    console.log(this.error);

    this.message = this.error;

    document.getElementById('msg').classList.remove('alert-success');
    document.getElementById('msg').classList.add('alert-danger');
    document.getElementById('msg').style.display = "block";
  }

  onFocusName()
  {
    

    document.getElementById('msg').style.display = "none";



  }

}

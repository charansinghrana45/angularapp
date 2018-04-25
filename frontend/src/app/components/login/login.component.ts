import { Component, OnInit } from '@angular/core';

import { HttpClient } from '@angular/common/http';

@Component({
  selector: 'app-login',
  templateUrl: './login.component.html',
  styleUrls: ['./login.component.css']
})
export class LoginComponent implements OnInit {

  public form : any = {

  	email : null,
  	password : null

  };

  public error;

  constructor(private http : HttpClient) { }

  ngOnInit() {

  }


  onSubmit() {

  	return this.http.post('http://localhost/angularapp/backend/api/auth/login', this.form).subscribe(
  			data => console.log(data),
  			error => this.handleError(error)
  		);
  }

  handleError(error) {

    this.error = error.error.error;
  }

}
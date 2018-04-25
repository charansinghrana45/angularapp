import { Component, OnInit } from '@angular/core';

import { HttpClient } from '@angular/common/http';

@Component({
  selector: 'app-signup',
  templateUrl: './signup.component.html',
  styleUrls: ['./signup.component.css']
})
export class SignupComponent implements OnInit {

	public form : any = {

		firstname: null,
		lastname: null,
		email: null,
		password: null,
		confirmPassword: null;

	};

	public error;

	constructor(private http : HttpClient) { }

	ngOnInit() {

	}


	onSubmit() {

		console.log(this.form);

		return this.http.post('http://localhost/angularapp/backend/api/auth/signup', this.form).subscribe(
				data => console.log(data),
				error => this.handleError(error)
			);
	}

	handleError(error) {

	  this.error = error.error.error;
	}

}
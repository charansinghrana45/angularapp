import { Component, OnInit } from '@angular/core';

import { JarwisService } from '../../services/jarwis.service';
import { TokenService } from '../../services/token.service';
import { Router } from '@angular/router';

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
		confirmPassword: null

	};

	public error;

	constructor(private jarwis : JarwisService,
	            private token : TokenService,
	            private router : Router) { }

	ngOnInit() {

	}


	onSubmit() {

		return this.jarwis.signup(this.form).subscribe(
				data => this.handleResponse(data),
				error => this.handleError(error)
			);
	}

	handleResponse(data) {

	   this.token.handleToken(data.token);

	   this.router.navigateByUrl('/profile');
	}


	handleError(error) {

	  this.error = error.error.error;
	}

}

import { Component, OnInit } from '@angular/core';

import { JarwisService } from '../../services/jarwis.service';
import { TokenService } from '../../services/token.service';
import { AuthService } from '../../services/auth.service';
import { Router } from '@angular/router';

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

  constructor(private jarwis : JarwisService,
              private token : TokenService,
              private router : Router,
              private auth : AuthService) { }

  ngOnInit() {



  }


  onSubmit() {

  	this.jarwis.login(this.form).subscribe(
  			data => this.handleResponse(data),
  			error => this.handleError(error)
  		);
  }

  handleResponse(data) {

     this.token.handleToken(data.token);

     this.auth.changeAuthStatus(true);

     this.router.navigateByUrl('/profile');
  }

  handleError(error) {

    this.error = error.error.error;
  }

}

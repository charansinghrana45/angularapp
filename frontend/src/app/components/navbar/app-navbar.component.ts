import { Component, OnInit } from '@angular/core';
import { AuthService } from '../../services/auth.service';
import { TokenService } from '../../services/token.service';
import { Router } from '@angular/router';

@Component({
  selector: 'app-navbar',
  templateUrl: './app-navbar.component.html',
  styleUrls: ['./app-navbar.component.css']
})
export class AppNavbarComponent implements OnInit {

  public loggedIn : boolean;

  constructor(private auth : AuthService,
  			  private router : Router,
  			  private token : TokenService) { }

  ngOnInit() {

  	this.auth.authStatus.subscribe(value => this.loggedIn = value);
  }

  logout(event : MouseEvent) {

  		event.preventDefault();

  		this.auth.changeAuthStatus(false);

  		this.token.remove();

  		this.router.navigateByUrl('/login');

  }

}

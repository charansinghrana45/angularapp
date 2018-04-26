import { Injectable } from '@angular/core';
import { TokenService } from './token.service';
import { Router, CanActivate, ActivatedRouteSnapshot, RouterStateSnapshot} from '@angular/router';
import { Observable } from 'rxjs/Rx';

@Injectable()
export class AfterloginService implements CanActivate {

  constructor(private token : TokenService, private router : Router) { }

  canActivate(route: ActivatedRouteSnapshot, state: RouterStateSnapshot): Observable<boolean>|Promise<boolean>|boolean {

  	  if(this.token.loggedIn()) {
      	
      	return this.token.loggedIn();
  	  }

  	   this.router.navigateByUrl('/login');

    }
  

}

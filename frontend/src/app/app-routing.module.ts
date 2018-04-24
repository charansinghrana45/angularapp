import { NgModule } from '@angular/core';
import { RouterModule, Routes } from '@angular/router';

import { LoginComponent } from './components/login/login.component';
import { SignupComponent } from './components/signup/signup.component';
import { RequestResetComponent } from './components/request-reset/request-reset.component';
import { ResponseResetComponent } from './components/response-reset/response-reset.component';

const routes: Routes = [
  { 
  	path: 'login',
  	component: LoginComponent 
  },
  { 
  	path: 'signup',
  	component: SignupComponent 
  },
  { 
  	path: 'request-password-reset',
  	component: RequestResetComponent 
  },
  { 
  	path: 'response-password-reset',
  	component: ResponseResetComponent 
  },
];

@NgModule({
  imports: [
    RouterModule.forRoot(routes)
  ],
  exports : [
  	RouterModule
  ],
  declarations: []
})
export class AppRoutingModule { }

import { NgModule } from '@angular/core';
import { RouterModule, Routes } from '@angular/router';

import { LoginComponent } from './components/login/login.component';
import { SignupComponent } from './components/signup/signup.component';
import { RequestResetComponent } from './components/request-reset/request-reset.component';
import { ResponseResetComponent } from './components/response-reset/response-reset.component';
import { ProfileComponent } from './components/profile/profile.component';
import { MyparentComponent } from './components/myparent/myparent.component';
import { SampleComponent } from './components/sample/sample.component';
import { BeforeloginService } from './services/beforelogin.service';
import { AfterloginService } from './services/afterlogin.service';

const routes: Routes = [
  { 
  	path: 'login',
  	component: LoginComponent,
    canActivate: [BeforeloginService]
  },
  { 
  	path: 'signup',
  	component: SignupComponent,
    canActivate: [BeforeloginService]
  },
  { 
  	path: 'request-password-reset',
  	component: RequestResetComponent,
    canActivate: [BeforeloginService]
  },
  { 
  	path: 'response-password-reset',
  	component: ResponseResetComponent,
    canActivate: [BeforeloginService]
  },
  { 
  	path: 'profile',
  	component: ProfileComponent,
    canActivate: [AfterloginService]
  },
  { 
    path: 'test',
    component: MyparentComponent,
    canActivate: [AfterloginService]
  },
  { 
    path: 'sample',
    component: SampleComponent,
    canActivate: [AfterloginService]
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

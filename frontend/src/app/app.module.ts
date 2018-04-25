import { BrowserModule } from '@angular/platform-browser';
import { NgModule } from '@angular/core';
import { FormsModule }   from '@angular/forms';
import { HttpClientModule } from '@angular/common/http';


import { AppComponent } from './app.component';
import { AppNavbarComponent } from './components/navbar/app-navbar.component';
import { LoginComponent } from './components/login/login.component';
import { RequestResetComponent } from './components/request-reset/request-reset.component';
import { SignupComponent } from './components/signup/signup.component';
import { ProfileComponent } from './components/profile/profile.component';
import { ResponseResetComponent } from './components/response-reset/response-reset.component';
import { AppRoutingModule } from './/app-routing.module';
import { JarwisService } from './services/jarwis.service';
import { TokenService } from './services/token.service';
import { AuthService } from './services/auth.service';
import { BeforeloginService } from './services/beforelogin.service';
import { AfterloginService } from './services/afterlogin.service';


@NgModule({
  declarations: [
    AppComponent,
    AppNavbarComponent,
    LoginComponent,
    RequestResetComponent,
    SignupComponent,
    ProfileComponent,
    ResponseResetComponent
  ],
  imports: [
    BrowserModule,
    AppRoutingModule,
    FormsModule,
    HttpClientModule
  ],
  providers: [JarwisService, TokenService, AuthService, BeforeloginService, AfterloginService],
  bootstrap: [AppComponent]
})
export class AppModule { }

import { Injectable } from '@angular/core';

import { HttpClient } from '@angular/common/http';

@Injectable()
export class JarwisService {

  constructor(private http: HttpClient) { }

  public baseUrl = "http://localhost/angularapp/backend/api";

  signup(data) {

  	return this.http.post(this.baseUrl+'/auth/signup', data);

  }

  login(data) {

  	return this.http.post(this.baseUrl+'/auth/login', data);

  }

  sendPasswordResetLink(data) {

  	return this.http.post(this.baseUrl+'/auth/sendPasswordResetLink', data);

  }

}

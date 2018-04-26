import { Injectable } from '@angular/core';

import { HttpClient, HttpHeaders } from '@angular/common/http';

@Injectable()
export class JarwisService {

   private httpOptions = {
    headers: new HttpHeaders({
      'Content-Type':  'application/x-www-form-urlencoded',
    })
  };

  constructor(private http: HttpClient) {

   }

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

   addProduct(data) {

    let postdata = "name="+ data.name+ "&description="+ data.description+ "&category="+data.category;

    return this.http.post(this.baseUrl+'/product/add', postdata, this.httpOptions);

  }

}

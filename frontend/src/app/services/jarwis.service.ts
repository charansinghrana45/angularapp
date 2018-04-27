import { Injectable } from '@angular/core';

import { HttpClient, HttpHeaders } from '@angular/common/http';

@Injectable()
export class JarwisService {

   private httpOptions = {
    headers: new HttpHeaders({
      'Content-Type':  undefined,
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

   addProduct(data, filesToUpload) {

    const formData: FormData = new FormData();
    
    formData.append('name', data.name);
    formData.append('description', data.description);
    formData.append('category', data.category);

    for(let i = 0; i < filesToUpload.length; i++)
    {
      formData.append('myfile['+ i +']', filesToUpload[i]);
    }

    return this.http.post(this.baseUrl+'/product/add', formData);

  }

  getProducts() {

    return this.http.get(this.baseUrl+'/product/get');

  }

}

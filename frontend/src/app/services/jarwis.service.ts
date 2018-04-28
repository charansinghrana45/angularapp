import { Injectable } from '@angular/core';
import { HttpClient, HttpHeaders } from '@angular/common/http';
import { BehaviorSubject } from 'rxjs/BehaviorSubject';

import { Observable } from 'rxjs/Observable';
import 'rxjs/add/operator/catch';
import 'rxjs/add/operator/map';
import 'rxjs/add/observable/throw';

@Injectable()
export class JarwisService {

   private httpOptions = {
    headers: new HttpHeaders({
      'Content-Type':  undefined,
    })
  };

  public products: object = [];

  public baseUrl = "http://localhost/angularapp/backend/api";

  constructor(private http: HttpClient) {
      
     
   }


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

  getProducts(): Observable<any> {

    return this.http.get(this.baseUrl+'/product/get').map(response => response)
    .catch((error) => { return Observable.throw(error) });
   
  }


}

import { Injectable } from '@angular/core';
import { BehaviorSubject } from 'rxjs/BehaviorSubject';

@Injectable()
export class SharedService {

  prdouctAddStatus: BehaviorSubject<boolean> = new BehaviorSubject<boolean>(false);  	

  constructor() { }

}

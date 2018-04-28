import { Component, OnInit } from '@angular/core';
import { SharedService } from '../../services/shared.service';

@Component({
  selector: 'app-myparent',
  templateUrl: './myparent.component.html',
  styleUrls: ['./myparent.component.css']
})
export class MyparentComponent implements OnInit {


  message : string = "I am Parent";

  childmessage : string = 'apple';

  constructor(private shared: SharedService) { }

  ngOnInit() {
  }

  changeValue() {

  	this.childmessage = "anaar";

    this.shared.prdouctAddStatus.next(true);
  }

  parentFunc(message) {

  	alert("parent: "+message);
  }

}

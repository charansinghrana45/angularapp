import { Component, OnInit } from '@angular/core';

@Component({
  selector: 'app-myparent',
  templateUrl: './myparent.component.html',
  styleUrls: ['./myparent.component.css']
})
export class MyparentComponent implements OnInit {


  message : string = "I am Parent";

  childmessage : string = "I am passed from Parent to child component"

  constructor() { }

  ngOnInit() {
  }

  changeValue() {

  	this.childmessage = "hello child you have now changed.";
  }

}

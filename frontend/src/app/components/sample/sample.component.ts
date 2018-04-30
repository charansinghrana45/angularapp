import { Component, OnInit, ElementRef, ViewChild, TemplateRef,ViewChildren, AfterViewInit} from '@angular/core';

@Component({
  selector: 'app-sample',
  templateUrl: './sample.component.html',
  styleUrls: ['./sample.component.css']
})
export class SampleComponent implements OnInit {

  public form: any = {

  		name: null,
  		email: null,
  		password: null,
  		passwordConfirm: null
  };

  constructor(public element: ElementRef) { }

   @ViewChild('name', {read: ElementRef}) myspan:ElementRef;

  ngOnInit() {
  	
  }

  onSubmit() {

  		console.log(this.form);
  }



  ngAfterViewInit() {

 

  }
 

}

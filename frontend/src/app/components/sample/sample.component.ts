import { Component, OnInit, ElementRef, ViewChild, TemplateRef,ViewChildren, AfterViewInit, Renderer2}
 from '@angular/core';

import { HighlightDirective } from '../../directives/highlight.directive';

@Component({
  selector: 'app-sample',
  templateUrl: './sample.component.html',
  styleUrls: ['./sample.component.css']
})
export class SampleComponent implements OnInit {Renderer2 


  public form: any = {

  		name: null,
  		email: null,
  		password: null,
  		passwordConfirm: null
  };

  @ViewChild('name', {read: ElementRef}) myspan:ElementRef;

  @ViewChild('hello_1') private helloId:ElementRef;

  @ViewChildren(HighlightDirective, {read: ElementRef}) myDirectiveList;


  constructor(public element: ElementRef, private renderer: Renderer2) { }

  ngOnInit() {
  	
  }

  onSubmit() {

        this.myDirectiveList.forEach(myDirective => {
          this.renderer.setStyle(myDirective.nativeElement,'backgroundColor','blue');
          
        });

  		console.log(this.form);
  }

  toggleFlag = false;

  ngAfterViewInit() {

    this.renderer.listen(this.helloId.nativeElement, 'click', () => {
       
     this.toggleFlag = (this.toggleFlag === true)? false : true;
     if(this.toggleFlag) {
         this.renderer.setStyle(this.helloId.nativeElement, 'color', 'red');
     } else {
         this.renderer.removeStyle(this.helloId.nativeElement, 'color');
     }
       
    });

    this.myDirectiveList.forEach(myDirective => {
          this.renderer.setStyle(myDirective.nativeElement,'backgroundColor','green');
          
        });



  }
 

}

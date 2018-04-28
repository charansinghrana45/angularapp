import { Component, OnInit, Input } from '@angular/core';

@Component({
  selector: 'app-appchild',
  templateUrl: './appchild.component.html',
  styleUrls: ['./appchild.component.css']
})
export class AppchildComponent implements OnInit {

  // @Input() greetMessage: string ;

    _greetMessage : string;


  constructor() { }

  ngOnInit() {
  }

    @Input()
        set greetMessage(message : string ){
            this._greetMessage = message+ " manipulated at child component"; 
        }
        get greetmessage(){
            return this._greetMessage;
        }


}

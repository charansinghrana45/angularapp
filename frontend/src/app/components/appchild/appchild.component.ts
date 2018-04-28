import { Component, OnInit, Input, Output, EventEmitter, SimpleChanges } from '@angular/core';
import { SharedService } from '../../services/shared.service';

@Component({
  selector: 'app-appchild',
  templateUrl: './appchild.component.html',
  styleUrls: ['./appchild.component.css']
})
export class AppchildComponent implements OnInit {

  _greetmessage: string;
  
  @Input()
  set greetMessage(message)
  {
  	this._greetmessage = message;
  }

  get greetMessage()
  {
  	return this._greetmessage;
  }

  @Output()
  runParentFunc = new EventEmitter();

  constructor(private shared: SharedService) { }

  ngOnInit() {

  	this.shared.prdouctAddStatus.subscribe(data => console.log('initial'+data));
  }

  clickedMe(event, message) {

  	this.runParentFunc.emit(message);

  }

  ngOnChanges(changes: SimpleChanges) {
  	
  	if(!changes.greetMessage.firstChange)
  	{
  		console.log(changes.greetMessage.currentValue);
  		this.shared.prdouctAddStatus.subscribe(data => console.log('afterchange'+data));
    }
 }
}
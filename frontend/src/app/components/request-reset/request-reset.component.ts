import { Component, OnInit } from '@angular/core';

import { JarwisService } from '../../services/jarwis.service';
import {SnotifyService} from 'ng-snotify';

@Component({
  selector: 'app-request-reset',
  templateUrl: './request-reset.component.html',
  styleUrls: ['./request-reset.component.css']
})
export class RequestResetComponent implements OnInit {

  public form = {
  	email : null
  };

  constructor(private jarwis: JarwisService,private snotify: SnotifyService) { }

  ngOnInit() {
  }

  onSubmit() {

  	this.jarwis.sendPasswordResetLink(this.form).subscribe(
  		data => this.handleResponse(data),
  		error => this.handleError(error)
  	);

  }

  handleResponse(data) {

  	this.form.email = null;
  	this.snotify.success(data.message);
  }

  handleError(error) {

  	this.snotify.error(error.error.error);
  }

}

import { Directive, TemplateRef, ViewContainerRef, Input } from '@angular/core';

@Directive({
  selector: '[appHideMe]'
})
export class HideMeDirective {

  constructor(private templateRef: TemplateRef<any>, private viewContainer : ViewContainerRef) { }

  @Input() set appHideMe(isHidden: boolean) {

   		if(!isHidden) {
  			this.viewContainer.createEmbeddedView(this.templateRef);
  		}
  		else {
  			this.viewContainer.clear();
  		}

  }

}
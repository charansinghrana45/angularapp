import { Directive, Input } from '@angular/core';

import { Validator, AbstractControl, NG_VALIDATORS } from '@angular/forms';

@Directive({
  selector: '[validateEqual]',
  providers: [{
  	provide: NG_VALIDATORS,
  	useExisting: ValidateEqualDirective,
  	multi: true
  }]
})
export class ValidateEqualDirective implements Validator {

  constructor() { }

  @Input()
  validateEqual: string;

  validate(c: AbstractControl): { [key: string] : any } | null {

      
  		const controleToCompare = c.parent.get(this.validateEqual);

  		if(controleToCompare && controleToCompare.value !== c.value)	{
  			
  			return { 'notEqual': true };
  		}

  		return null;
  }

}

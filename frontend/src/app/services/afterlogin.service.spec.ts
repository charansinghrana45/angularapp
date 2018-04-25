import { TestBed, inject } from '@angular/core/testing';

import { AfterloginService } from './afterlogin.service';

describe('AfterloginService', () => {
  beforeEach(() => {
    TestBed.configureTestingModule({
      providers: [AfterloginService]
    });
  });

  it('should be created', inject([AfterloginService], (service: AfterloginService) => {
    expect(service).toBeTruthy();
  }));
});

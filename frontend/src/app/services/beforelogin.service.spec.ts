import { TestBed, inject } from '@angular/core/testing';

import { BeforeloginService } from './beforelogin.service';

describe('BeforeloginService', () => {
  beforeEach(() => {
    TestBed.configureTestingModule({
      providers: [BeforeloginService]
    });
  });

  it('should be created', inject([BeforeloginService], (service: BeforeloginService) => {
    expect(service).toBeTruthy();
  }));
});

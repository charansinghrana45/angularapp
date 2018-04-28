import { async, ComponentFixture, TestBed } from '@angular/core/testing';

import { AppchildComponent } from './appchild.component';

describe('AppchildComponent', () => {
  let component: AppchildComponent;
  let fixture: ComponentFixture<AppchildComponent>;

  beforeEach(async(() => {
    TestBed.configureTestingModule({
      declarations: [ AppchildComponent ]
    })
    .compileComponents();
  }));

  beforeEach(() => {
    fixture = TestBed.createComponent(AppchildComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});

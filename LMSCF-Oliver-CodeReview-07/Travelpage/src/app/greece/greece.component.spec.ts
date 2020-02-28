import { async, ComponentFixture, TestBed } from '@angular/core/testing';

import { GreeceComponent } from './greece.component';

describe('GreeceComponent', () => {
  let component: GreeceComponent;
  let fixture: ComponentFixture<GreeceComponent>;

  beforeEach(async(() => {
    TestBed.configureTestingModule({
      declarations: [ GreeceComponent ]
    })
    .compileComponents();
  }));

  beforeEach(() => {
    fixture = TestBed.createComponent(GreeceComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});

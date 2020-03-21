import { async, ComponentFixture, TestBed } from '@angular/core/testing';

import { MaroccoComponent } from './marocco.component';

describe('MaroccoComponent', () => {
  let component: MaroccoComponent;
  let fixture: ComponentFixture<MaroccoComponent>;

  beforeEach(async(() => {
    TestBed.configureTestingModule({
      declarations: [ MaroccoComponent ]
    })
    .compileComponents();
  }));

  beforeEach(() => {
    fixture = TestBed.createComponent(MaroccoComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});

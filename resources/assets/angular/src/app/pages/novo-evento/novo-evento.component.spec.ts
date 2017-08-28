import { async, ComponentFixture, TestBed } from '@angular/core/testing';

import { NovoEventoComponent } from './novo-evento.component';

describe('NovoEventoComponent', () => {
  let component: NovoEventoComponent;
  let fixture: ComponentFixture<NovoEventoComponent>;

  beforeEach(async(() => {
    TestBed.configureTestingModule({
      declarations: [ NovoEventoComponent ]
    })
    .compileComponents();
  }));

  beforeEach(() => {
    fixture = TestBed.createComponent(NovoEventoComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should be created', () => {
    expect(component).toBeTruthy();
  });
});

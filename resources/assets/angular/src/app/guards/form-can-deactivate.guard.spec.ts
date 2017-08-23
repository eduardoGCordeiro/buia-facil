import { TestBed, async, inject } from '@angular/core/testing';

import { FormCanDeactivateGuard } from './form-can-deactivate.guard';

describe('FormCanDeactivateGuard', () => {
  beforeEach(() => {
    TestBed.configureTestingModule({
      providers: [FormCanDeactivateGuard]
    });
  });

  it('should ...', inject([FormCanDeactivateGuard], (guard: FormCanDeactivateGuard) => {
    expect(guard).toBeTruthy();
  }));
});

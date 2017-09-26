import { TestBed, inject } from '@angular/core/testing';

import { FestaService } from './festa.service';

describe('FestaService', () => {
  beforeEach(() => {
    TestBed.configureTestingModule({
      providers: [FestaService]
    });
  });

  it('should be created', inject([FestaService], (service: FestaService) => {
    expect(service).toBeTruthy();
  }));
});

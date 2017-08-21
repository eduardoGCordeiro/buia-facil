import { NgModule } from '@angular/core';
import { CommonModule } from '@angular/common';

import { PagesRoutingModule } from './pages-routing.module';
import { EventoComponent } from './evento/evento.component';
import { NovoEventoComponent } from './novo-evento/novo-evento.component';

@NgModule({
  imports: [
    CommonModule,
    PagesRoutingModule
  ],
  declarations: [EventoComponent, NovoEventoComponent]
})
export class PagesModule { }

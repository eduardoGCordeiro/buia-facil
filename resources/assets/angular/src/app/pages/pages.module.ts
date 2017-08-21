import { NgModule } from '@angular/core';
import { CommonModule } from '@angular/common';

import { PagesRoutingModule } from './pages-routing.module';
import { EventoComponent } from './evento/evento.component';
import { NovoEventoComponent } from './novo-evento/novo-evento.component';
import { LoginComponent } from './login/login.component';

@NgModule({
  imports: [
    CommonModule,
    PagesRoutingModule
  ],
  declarations: [EventoComponent, NovoEventoComponent, LoginComponent]
})
export class PagesModule { }

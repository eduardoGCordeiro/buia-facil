import { NgModule } from '@angular/core';
import { CommonModule } from '@angular/common';

import { PagesRoutingModule } from './pages-routing.module';
import { EventoComponent } from './evento/evento.component';
import { NovoEventoComponent } from './novo-evento/novo-evento.component';
import { LoginComponent } from './login/login.component';
import { InicioComponent } from './inicio/inicio.component';

@NgModule({
  imports: [
    CommonModule,
    PagesRoutingModule
  ],
  declarations: [EventoComponent, NovoEventoComponent, LoginComponent, InicioComponent]
})
export class PagesModule { }

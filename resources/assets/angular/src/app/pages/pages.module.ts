import {NgModule} from '@angular/core';
import {CommonModule} from '@angular/common';

import {PagesRoutingModule} from './pages-routing.module';
import {EventoComponent} from './evento/evento.component';
import {NovoEventoComponent} from './novo-evento/novo-evento.component';
import {LoginComponent} from './login/login.component';
import {InicioComponent} from './inicio/inicio.component';
import {PagesComponent} from "./pages.component";
import {CadastroComponent} from './cadastro/cadastro.component';

@NgModule({
    imports: [
        CommonModule,
        PagesRoutingModule
    ],
    declarations: [PagesComponent, EventoComponent, NovoEventoComponent, LoginComponent, InicioComponent, CadastroComponent]
})
export class PagesModule {
}

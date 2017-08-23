import {NgModule} from '@angular/core';
import {Routes, RouterModule} from '@angular/router';

import {PagesComponent} from "./pages.component";
import {EventoComponent} from "./evento/evento.component";
import {NovoEventoComponent} from "./novo-evento/novo-evento.component";
import {InicioComponent} from "./inicio/inicio.component";
import {LoginComponent} from "./login/login.component";

const pagesRoutes: Routes = [{
  path: '', component: PagesComponent, children: [
    {path: 'inicio', component: InicioComponent},
    {path: 'login', component: LoginComponent},
    {path: 'evento', component: EventoComponent},
    {path: 'novo-evento', component: NovoEventoComponent}
  ]
}];

@NgModule({
  imports: [RouterModule.forChild(pagesRoutes)],
  exports: [RouterModule]
})
export class PagesRoutingModule {
}

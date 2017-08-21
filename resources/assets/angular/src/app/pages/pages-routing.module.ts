import { NgModule } from '@angular/core';
import { Routes, RouterModule } from '@angular/router';
import {PagesComponent} from "./pages.component";
import {EventoComponent} from "./evento/evento.component";
import {NovoEventoComponent} from "./novo-evento/novo-evento.component";

const routes: Routes = [{
  path:'', component: PagesComponent, children:[
    {path: 'evento/:id', component: EventoComponent},
    {path: 'novo-evento', component: NovoEventoComponent}
  ]
}];

@NgModule({
  imports: [RouterModule.forChild(routes)],
  exports: [RouterModule]
})
export class PagesRoutingModule { }

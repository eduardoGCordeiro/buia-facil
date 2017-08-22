import {NgModule} from "@angular/core";
import {RouterModule, Routes} from "@angular/router";

const appRoutes: Routes = [
  {path: '', redirectTo: '/pages/inicial', pathMatch: 'full'},
  {path: 'pages', loadChildren: 'app/pages/pages.module#PagesModule'}
]

@NgModule({
  imports: [RouterModule.forRoot(appRoutes, {useHash: true})],
  exports: [RouterModule],
})
export class AppRoutingModule {

}

import {NgModule} from '@angular/core';
import {RouterModule, Routes} from '@angular/router';
import {AuthGuard} from './guards/auth.guard';
import {FormCanDeactivateGuard} from './guards/form-can-deactivate.guard';
import {AppComponent} from "./app.component";

const appRoutes: Routes = [
    {path: '', component: AppComponent, canActivate: [AuthGuard]},
];


@NgModule({
    imports: [RouterModule.forRoot(appRoutes)],
    exports: [RouterModule],
    providers: [FormCanDeactivateGuard, AuthGuard]
})

export class AppRoutingModule {
}
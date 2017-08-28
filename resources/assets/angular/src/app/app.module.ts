import {BrowserModule} from '@angular/platform-browser';
import {NgModule} from '@angular/core';

import {AppComponent} from './app.component';
import {FormsModule, ReactiveFormsModule} from "@angular/forms";
import {HttpModule} from "@angular/http";
import {AppRoutingModule} from "./app-routing.module";
import {AuthService} from "./services/auth.service";

@NgModule({
    declarations: [AppComponent],
    imports: [BrowserModule, FormsModule, ReactiveFormsModule, HttpModule, AppRoutingModule],
    providers: [AuthService],
    bootstrap: [AppComponent]
})
export class AppModule {
}

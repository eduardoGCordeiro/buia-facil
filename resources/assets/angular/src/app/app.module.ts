import {BrowserModule} from '@angular/platform-browser';
import {NgModule} from '@angular/core';

import {AppComponent} from './app.component';
import {PagesComponent} from './pages/pages.component';
import {AppRoutingModule} from "./app.routing.module";

@NgModule({
  declarations: [
    AppComponent,
    PagesComponent
  ],
  imports: [
    BrowserModule,
    AppRoutingModule
  ],
  providers: [],
  bootstrap: [AppComponent]
})
export class AppModule {
}

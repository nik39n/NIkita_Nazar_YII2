import { NgModule } from '@angular/core';
import { BrowserModule } from '@angular/platform-browser';

import { AppComponent } from './app.component';
import { HeaderComponent } from './header/header.component';
import { NavbarComponent } from './header/navbar/navbar.component';
import { FooterComponent } from './footer/footer.component';
import { FooterfComponent } from './footer/footerf/footerf.component';
import { MainComponent } from './main/main.component';
import { SidebarComponent } from './sidebar/sidebar.component';
import { SidebarfComponent } from './sidebar/sidebarf/sidebarf.component';
import { TovarlistComponent } from './main/tovarlist/tovarlist.component';
import { TovarComponent } from './main/tovarlist/tovar/tovar.component';
import { MainareaComponent } from './mainarea/mainarea.component';

@NgModule({
  declarations: [
    AppComponent,
    HeaderComponent,
    NavbarComponent,
    FooterComponent,
    FooterfComponent,
    MainComponent,
    SidebarComponent,
    SidebarfComponent,
    TovarlistComponent,
    TovarComponent,
    MainareaComponent
  ],
  imports: [
    BrowserModule
  ],
  providers: [],
  bootstrap: [AppComponent]
})
export class AppModule { }

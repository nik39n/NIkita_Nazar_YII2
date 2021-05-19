import { Component, Input, OnInit } from '@angular/core';
import { Nav } from 'src/app/model';

@Component({
  selector: 'app-navbar',
  templateUrl: './navbar.component.html',
  styleUrls: ['./navbar.component.css']
})
export class NavbarComponent implements OnInit {
  @Input('nav') nav: Nav
  constructor() { }

  ngOnInit(): void {
  }

}

import { Component, OnInit } from '@angular/core';
import { Nav } from '../model';

@Component({
  selector: 'app-header',
  templateUrl: './header.component.html',
  styleUrls: ['./header.component.css']
})
export class HeaderComponent implements OnInit {
  nav: Nav[] = [
    { title: 'link', link: "/link" },
    { title: 'link', link: "/link" },
    { title: 'link', link: "/link" },
    { title: 'link', link: "/link" },
    { title: 'link', link: "/link" }
  ]
  constructor() { }

  ngOnInit(): void {
  }

}

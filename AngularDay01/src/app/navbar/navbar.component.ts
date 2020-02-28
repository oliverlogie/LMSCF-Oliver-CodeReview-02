import { Component, OnInit } from '@angular/core';

@Component({
  selector: 'navbar',
  templateUrl: './navbar.component.html',
  styleUrls: ['./navbar.component.css']
})
export class NavbarComponent implements OnInit {
  projectName:string;
  skiingIMG:string;

  constructor() { 
    this.projectName = "Ski Tour"
    this.skiingIMG = "../../../img/Download.png"
  }

  ngOnInit(): void {
  }

}

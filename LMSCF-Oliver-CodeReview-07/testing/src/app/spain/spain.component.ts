import { Component, OnInit } from '@angular/core';

@Component({
  selector: 'app-spain',
  templateUrl: './spain.component.html',
  styleUrls: ['./spain.component.css']
})
export class SpainComponent implements OnInit {
  destination:string;
  descripton:string;
  booking:string;
  duration:string;
  price:string;
  
  
    constructor() { 
    this.destination = "Spain"
    this.descripton = "Spanien ist ein Land auf der iberischen Halbinsel in Europa und umfasst 17 autonome Regionen von großer geografischer und kultureller Vielfalt. In der Hauptstadt Madrid befinden sich der Königspalast und der Prado mit Werken europäischer Meister. In Segovia gibt es ein mittelalterliches Schloss (Alcázar) und einen intakten römischen Aquädukt. Wahrzeichen der katalanischen Hauptstadt Barcelona sind die skurrilen Bauwerke Antoni Gaudís wie die Sagrada Familia."
    this.booking ="12.3.2020, 14.4.2020, 29.4.2020, 27.5.2020, 24.6.2020"
    this.duration="4-weeks"
    this.price="1100€/week"
  }

  ngOnInit(): void {
  }

}

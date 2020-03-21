import { Component, OnInit } from '@angular/core';

@Component({
  selector: 'app-marocco',
  templateUrl: './marocco.component.html',
  styleUrls: ['./marocco.component.css']
})
export class MaroccoComponent implements OnInit {
  destination:string;
  descripton:string;
  booking:string;
  duration:string;
  price:string;
  
  
    constructor() { 
    this.destination = "Marocco"
    this.descripton = "Marokko, ein nordafrikanisches Staat an Atlantik und Mittelmeer, ist durch die kulturellen Einflüsse der Berber, Araber und Europäer geprägt. Die Medina, die labyrinthische, mittelalterliche Altstadt von Marrakesch, bietet Unterhaltungsmöglichkeiten auf dem Marktplatz Djemaa el-Fna und Souks (Märkte), auf denen Keramik, Schmuck und Laternen aus Metall angeboten werden. Die Kasbah des Oudaïas in der Hauptstadt Rabat ist eine königliche Festung aus dem 12. Jh. mit Blick auf das Wasser."
    this.booking ="12.3.2020, 14.4.2020, 29.4.2020, 27.5.2020, 24.6.2020"
    this.duration="5-weeks"
    this.price="1500€/week"
  }

  ngOnInit(): void {
  }

}

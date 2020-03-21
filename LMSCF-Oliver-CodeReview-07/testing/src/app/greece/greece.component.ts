import { Component, OnInit } from '@angular/core';

@Component({
  selector: 'app-greece',
  templateUrl: './greece.component.html',
  styleUrls: ['./greece.component.css']
})
export class GreeceComponent implements OnInit {
  destination:string;
  descripton:string;
  booking:string;
  duration:string;
  price:string;
  
  
    constructor() { 
    this.destination = "Greece"
    this.descripton = "Griechenland ist ein Staat in Südosteuropa, der Tausende Inseln im Ägäischen und Ionischen Meer umfasst. Aufgrund seiner einflussreichen Rolle in der Antike wird Griechenland oft als Wiege der westlichen Zivilisation bezeichnet. Die griechische Hauptstadt Athen beherbergt Wahrzeichen wie die Akropolis, eine Stadtfestung aus dem 5. Jh. v. Chr. mit dem Parthenon-Tempel. Griechenland ist auch ein bekanntes Reiseziel für Strandurlaube – vom schwarzen Sand auf Santorin bis zur Partyszene auf Mykonos."
    this.booking ="12.3.2020, 14.4.2020, 29.4.2020, 27.5.2020, 24.6.2020"
    this.duration="7-weeks"
    this.price="900€/week"
  }

  ngOnInit(): void {
  }

}

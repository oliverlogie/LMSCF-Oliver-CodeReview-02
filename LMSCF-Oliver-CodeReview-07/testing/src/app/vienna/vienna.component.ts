import { Component, OnInit } from '@angular/core';

@Component({
  selector: 'app-vienna',
  templateUrl: './vienna.component.html',
  styleUrls: ['./vienna.component.css']
})
export class ViennaComponent implements OnInit {
  destination:string;
  descripton:string;
  booking:string;
  duration:string;
  price:string;
  
countClick(){
    this.clickCounter ++;
}

  constructor() { 
  this.destination = "Vienna"
  this.descripton = "Austria,German: Österreich (About this soundlisten), officially the Republic of Austria German: Republik Österreich, About this soundlisten (help·info), is a landlocked East Alpine country in the southern part of Central Europe. It is composed of nine federated states (Bundesländer), one of which is Vienna, Austria's capital and its largest city. It is bordered by Germany to the northwest, Czech Republic to the north, Slovakia to the northeast, Hungary to the east, Slovenia and Italy to the south, and Switzerland and Liechtenstein to the west."
  this.booking ="12.3.2020, 14.4.2020, 29.4.2020, 27.5.2020, 24.6.2020"
  this.duration="2-weeks"
  this.price="1300€/week"

  
}
  ngOnInit(): void {

}
}

import { Component, OnInit } from '@angular/core';
import { pictures} from '../data';

@Component({
  selector: 'app-pictures',
  templateUrl: './pictures.component.html',
  styleUrls: ['./pictures.component.css']
})
export class PicturesComponent implements OnInit {
  pictures = pictures;
  constructor() { }

  ngOnInit(): void {
  }

}

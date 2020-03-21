import { Component, OnInit } from '@angular/core';
import { ActivatedRoute } from '@angular/router';
import { CartService } from '../cart.service';
import { infos } from '../data';

@Component({
  selector: 'app-home',
  templateUrl: './home.component.html',
  styleUrls: ['./home.component.css']
})
export class HomeComponent implements OnInit {
  infos = infos;
  info;

  constructor(private route: ActivatedRoute, private cartService: CartService) { }

  addToCart(info) {
    window.alert('Your destinaton has been added to the cart');
    this.cartService.addToCart(info);
  }

  ngOnInit(): void {
    this.route.paramMap.subscribe(params => {
    this.info = infos[+params.get('infoId')];
  });
  }

}

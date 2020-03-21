import { Component, OnInit } from '@angular/core';
import { FormBuilder } from '@angular/forms';
import { infos } from '../data';

@Component({
  selector: 'app-blog',
  templateUrl: './blog.component.html',
  styleUrls: ['./blog.component.css']
})
export class BlogComponent implements OnInit {
  checkoutForm;
  infos = infos;
  info;

  constructor(private formBuilder: FormBuilder) { 
    this.checkoutForm = this.formBuilder.group({
      name: '',
      comment: ''
    });
  }

  ngOnInit(): void {
  }
  onSubmit(customerData) {
    // Process checkout data here
    console.warn('Your order has been submitted', customerData);
    this.checkoutForm.reset();
  }
 
}

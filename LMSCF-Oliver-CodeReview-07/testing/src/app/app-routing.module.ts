import { NgModule } from '@angular/core';
import { Routes, RouterModule } from '@angular/router';
import { ViennaComponent } from './vienna/vienna.component';
import { MaroccoComponent } from './marocco/marocco.component';
import { GreeceComponent } from './greece/greece.component';
import { SpainComponent } from './spain/spain.component';


const routes: Routes = [
  {
    path:"vienna", component: ViennaComponent
  },{
    path:"marocco", component: MaroccoComponent
  },{
    path:"spain", component: SpainComponent
  },{
    path:"greece", component: GreeceComponent
  }
];

@NgModule({
  imports: [RouterModule.forRoot(routes)],
  exports: [RouterModule]
})
export class AppRoutingModule { }

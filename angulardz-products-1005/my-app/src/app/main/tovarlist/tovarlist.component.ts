import { Component, OnInit } from '@angular/core';
import { Product } from 'src/app/model-product';

@Component({
  selector: 'app-tovarlist',
  templateUrl: './tovarlist.component.html',
  styleUrls: ['./tovarlist.component.css']
})
export class TovarlistComponent implements OnInit {
  title:string = null
  description:string = null
  price: number = null
  id:number=null
  product:Product [] = [
    {
      title: 'Apple', description: "green,fresh",
      price: 10,
      id: 1
    },
    {
      title: 'Apple', description: "green,fresh",
      price: 10,
      id: 2
    },
    {
      title: 'Apple', description: "green,fresh",
      price: 10,
      id: 3
    },
    {
      title: 'Apple', description: "green,fresh",
      price: 10,
      id: 4
    },
    
  ]
  constructor() { }

  ngOnInit(): void {
  }
  removeProduct(id: number) {
    this.product = this.product.filter(p=>p.id != id)
    
  }
  onInput1(n:string){
    this.title=n
  }
  onInput2(n:string){
    this.description=n
  }
  onInput3(n: number) {
    this.price=Number(n)
  }
  onInput4(n:number){
    this.id=Number(n)
  }
  push() {
    this.product.push({
      title: this.title, description: this.description,
      price: this.price,
      id: this.id
    })
  }

}

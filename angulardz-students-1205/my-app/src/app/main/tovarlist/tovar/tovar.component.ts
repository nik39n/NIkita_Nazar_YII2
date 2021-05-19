import { Component, EventEmitter, Input, OnInit, Output } from '@angular/core';
import { Product } from 'src/app/model-product';

@Component({
  selector: 'app-tovar',
  templateUrl: './tovar.component.html',
  styleUrls: ['./tovar.component.css']
})
export class TovarComponent implements OnInit {
  @Output() onRemove = new EventEmitter<number>()
  @Input('prod') product: Product
  constructor() { }

  ngOnInit(): void {
  }
  removeProduct() {
    this.onRemove.emit(this.product.id)
  }
}

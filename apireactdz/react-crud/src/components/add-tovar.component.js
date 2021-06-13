import React, { Component } from "react";
import TovarDataService from "../services/tovar.service";

export default class AddTovar extends Component {
  constructor(props) {
    super(props);
    this.onChangeVendor = this.onChangeVendor.bind(this);
    this.onChangeTypeProduct = this.onChangeTypeProduct.bind(this);
    this.onChangeModel = this.onChangeModel.bind(this);
    this.onChangePrice = this.onChangePrice.bind(this);
    this.saveTovar = this.saveTovar.bind(this);
    this.newTovar = this.newTovar.bind(this);

    this.state = {
      id: 1,
      Vendor: "xsx",
      TypeProduct: "sx",
      Model: "xasxaxa",
      Price: 100,
      published: true,

      submitted: false
    };
  }

  onChangeVendor(e) {
    this.setState({
      Vendor: e.target.value
    });
  }
  onChangeTypeProduct(e) {
    this.setState({
      TypeProduct: e.target.value
    });
  }
  onChangeModel(e) {
    this.setState({
      Model: e.target.value
    });
  }

  onChangePrice(e) {
    this.setState({
      Price: e.target.value
    });
  }

  saveTovar() {
    var data = {
      Vendor: this.state.Vendor,
      TypeProduct:  this.state.TypeProduct,
      Model: this.state.Model,
      Price: this.state.Price
    };

    TovarDataService.create(data)
      .then(response => {
        this.setState({
          id: response.data.id,
          Vendor: response.data.Vendor,
          TypeProduct: response.data.TypeProduct,
          Model: response.data.Model,
          Price: response.data.Price,
          published: response.data.published,

          submitted: true
        });
        console.log(response.data);
      })
      .catch(e => {
        console.log(e);
        console.log(data);
      });
  }

  newTovar() {
    this.setState({
      id: null,
      Vendor: "",
      TypeProduct: "",
      Model: "",
      Price: null,
      published: false,

      submitted: false
    });
  }

  render() {
    return (
      <div className="submit-form">
        {this.state.submitted ? (
          <div>
            <h4>You submitted successfully!</h4>
            <button className="btn btn-success" onClick={this.newTovar}>
              Add
            </button>
          </div>
        ) : (
          <div>
            <div className="form-group">
              <label htmlFor="Vendor">Vendor</label>
              <input
                type="text"
                className="form-control"
                id="Vendor"
                required
                value={this.state.Vendor}
                onChange={this.onChangeVendor}
                name="Vendor"
              />
            </div>

            <div className="form-group">
              <label htmlFor="TypeProduct">TypeProduct</label>
              <input
                type="text"
                className="form-control"
                id="TypeProduct"
                required
                value={this.state.TypeProduct}
                onChange={this.onChangeTypeProduct}
                name="TypeProduct"
              />
              </div>
              <div className="form-group">
              <label htmlFor="Model">Model</label>
              <input
                type="text"
                className="form-control"
                id="Model"
                required
                value={this.state.Model}
                onChange={this.onChangeModel}
                name="Model"
              />
              </div>
              <div className="form-group">
              <label htmlFor="Price">Price</label>
              <input
                type="text"
                className="form-control"
                id="Price"
                required
                value={this.state.Price}
                onChange={this.onChangePrice}
                name="Price"
              />
            </div>

            <button onClick={this.saveTovar} className="btn btn-success">
              Submit
            </button>
          </div>
        )}
      </div>
    );
  }
}

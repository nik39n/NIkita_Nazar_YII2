import React, { Component } from "react";
import CarDataService from "../../services/car.service";

export default class AddTovar extends Component {
  constructor(props) {
    super(props);
    this.onChangeManufacturer = this.onChangeManufacturer.bind(this);
    this.onChangeData = this.onChangeData.bind(this);
    this.onChangeModel = this.onChangeModel.bind(this);
    this.onChangePrice = this.onChangePrice.bind(this);
    this.saveCar = this.saveCar.bind(this);
    this.newCar = this.newCar.bind(this);

    this.state = {
      id: 1,
      manufacturer: "dxsa",
      model: "xasxsa",
      data: "25-04-12",
      price: 100,
      published: false,

      submitted: false
    };
  }

  onChangeManufacturer(e) {
    this.setState({
      manufacturer: e.target.value
    });
  }
  onChangeData(e) {
    this.setState({
      data: e.target.value
    });
  }
  onChangeModel(e) {
    this.setState({
      model: e.target.value
    });
  }

  onChangePrice(e) {
    this.setState({
      price: e.target.value
    });
  }

  saveCar() {
    var data = {
      manufacturer: this.state.manufacturer,
      model:  this.state.model,
      data: this.state.data,
      price: this.state.price,
      published: !this.state.published
    };

    CarDataService.create(data)
      .then(response => {
        this.setState({
          id: response.data.id,
          manufacturer: response.data.manufacturer,
          model: response.data.model,
          data: response.data.data,
          price: response.data.price,
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

  newCar() {
    this.setState({
      id: null,
      manufacturer: "",
      model: "",
      data: "",
      price: null,
      published: false,

      submitted: false
    });
  }
  goToHome =()=>{
    console.log(this.props.history);
    this.props.history.push({pathname:'/cars'})
}
  render() {
    return (
      <div className="submit-form">
        {this.state.submitted ? (
          <div>
            <h4>You submitted successfully!</h4>
            <button className="btn btn-success" onClick={this.newCar}>
              Add
            </button>
            
            <button className="btn " style={{
              margin: "10px",
              backgroundColor: "red",
              color:"white"
            }} onClick={this.goToHome}>Go to list cars</button>
          </div>
        ) : (
          <div>
            <div className="form-group">
              <label htmlFor="Vendor">Manufacturer</label>
              <input
                type="text"
                className="form-control"
                id="Manufacturer"
                required
                value={this.state.manufacturer}
                onChange={this.onChangeManufacturer}
                name="Manufacturer"
              />
            </div>

            <div className="form-group">
              <label htmlFor="TypeProduct">Model</label>
              <input
                type="text"
                className="form-control"
                id="TypeProduct"
                required
                value={this.state.model}
                onChange={this.onChangeModel}
                name="TypeProduct"
              />
              </div>
              <div className="form-group">
              <label htmlFor="Model">Data</label>
              <input
                type="date"
                className="form-control"
                id="Data"
                required
                value={this.state.data}
                onChange={this.onChangeData}
                name="Data"
              />
              </div>
              <div className="form-group">
              <label htmlFor="Price">Price</label>
              <input
                type="number"
                className="form-control"
                id="Price"
                required
                value={this.state.Price}
                onChange={this.onChangePrice}
                name="Price"
              />
            </div>

            <button onClick={this.saveCar} className="btn btn-success">
              Submit
            </button>
          </div>
        )}
      </div>
    );
  }
}

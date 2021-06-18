import React, { Component } from "react";
import CarDataService from "../../services/car.service";

export default class Tutorial extends Component {
  constructor(props) {
    super(props);
    this.onChangeManufacturer = this.onChangeManufacturer.bind(this);
    this.onChangeData = this.onChangeData.bind(this);
    this.onChangeModel = this.onChangeModel.bind(this);
    this.onChangePrice = this.onChangePrice.bind(this);
    this.getCar = this.getCar.bind(this);
    this.updatePublished = this.updatePublished.bind(this);
    this.updateCar = this.updateCar.bind(this);
    this.deleteCar = this.deleteCar.bind(this);

    this.state = {
      currentCar: {
        id: null,
        manufacturer: "",
        model: "",
        data: "",
        price: null,
        published: false
      },
      message: ""
    };
  }

  componentDidMount() {
    this.getCar(this.props.match.params.id);
  }

  onChangeModel(e) {
    const model = e.target.value;

    this.setState(function(prevState) {
      return {
        currentCar: {
          ...prevState.currentCar,
          model: model
        }
      };
    });
  }
  onChangeManufacturer(e) {
    const manufacturer = e.target.value;

    this.setState(function(prevState) {
      return {
        currentCar: {
          ...prevState.currentCar,
          manufacturer: manufacturer
        }
      };
    });
  }
  onChangeData(e) {
    const data = e.target.value;

    this.setState(function(prevState) {
      return {
        currentCar: {
          ...prevState.currentCar,
          data: data
        }
      };
    });
  }
  onChangePrice(e) {
    const price = e.target.value;
    
    this.setState(prevState => ({
      currentCar: {
        ...prevState.currentCar,
        price: price
      }
    }));
  }

  getCar(id) {
    CarDataService.get(id)
      .then(response => {
        this.setState({
          currentCar: response.data
        });
        console.log(response.data);
      })
      .catch(e => {
        console.log(e);
      });
  }

  updatePublished(status) {
    var data = {
      id: this.state.currentCar.id,
      title: this.state.currentCar.title,
      description: this.state.currentCar.description,
      published: status
    };

    CarDataService.update(this.state.currentCar.id, data)
      .then(response => {
        this.setState(prevState => ({
          currentCar: {
            ...prevState.currentCar,
            published: status
          }
        }));
        console.log(response.data);
      })
      .catch(e => {
        console.log(e);
      });
  }

  updateCar() {
    CarDataService.update(
      this.state.currentCar.id,
      this.state.currentCar
    )
      .then(response => {
        console.log(response.data);
        this.setState({
          message: "The tutorial was updated successfully!"
        });
      })
      .catch(e => {
        console.log(e);
      });
  }

  deleteCar() {    
    CarDataService.delete(this.state.currentCar.id)
      .then(response => {
        console.log(response.data);
        this.props.history.push('/cars')
      })
      .catch(e => {
        console.log(e);
      });
  }
  goToHome =()=>{
    console.log(this.props.history);
    this.props.history.push({pathname:'/cars'})
}
  render() {
    const { currentCar } = this.state;

    return (
      <div>
        {currentCar ? (
          <div className="edit-form">
            <h4>Car</h4>
            <form>
              <div className="form-group">
                <label htmlFor="title">Model</label>
                <input
                  type="text"
                  className="form-control"
                  id="title"
                  value={currentCar.model}
                  onChange={this.onChangeModel}
                />
              </div>
              <div className="form-group">
                <label htmlFor="manufacturer">Manufacturer</label>
                <input
                  type="text"
                  className="form-control"
                  id="manufacturer"
                  value={currentCar.manufacturer}
                  onChange={this.manufacturer}
                />
              </div>
              <div className="form-group">
                <label htmlFor="data">Data</label>
                <input
                  type="date"
                  className="form-control"
                  id="data"
                  value={currentCar.data}
                  onChange={this.onChangeData}
                />
              </div>
              <div className="form-group">
                <label htmlFor="price">Price</label>
                <input
                  type="number"
                  className="form-control"
                  id="price"
                  value={currentCar.price}
                  onChange={this.price}
                />
              </div>

              <div className="form-group">
                <label>
                  <strong>Status:</strong>
                </label>
                {currentCar.published ? "Published" : "Pending"}
              </div>
            </form>

            {currentCar.published ? (
              <button
                className="badge badge-primary mr-2"
                onClick={() => this.updatePublished(false)}
              >
                UnPublish
              </button>
            ) : (
              <button
                className="badge badge-primary mr-2"
                onClick={() => this.updatePublished(true)}
              >
                Publish
              </button>
            )}

            <button
              className="badge badge-danger mr-2"
              onClick={this.deleteCar}
            >
              Delete
            </button>

            <button
              type="submit"
              className="badge badge-success"
              onClick={this.updateCar}
            >
              Update
            </button>
            <button className="btn " style={{
              margin: "10px",
              backgroundColor: "red",
              color:"white"
            }} onClick={this.goToHome}>Go to list cars</button>
            <p>{this.state.message}</p>
          </div>
        ) : (
          <div>
            <br />
            <p>Please click on a Tutorial...</p>
          </div>
        )}
      </div>
    );
  }
}
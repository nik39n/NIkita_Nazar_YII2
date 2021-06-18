import React, { Component } from "react";
import CarDataService from "../../services/car.service";
import { Link } from "react-router-dom";
import './car.css';

export default class TutorialsList extends Component {
  constructor(props) {
    super(props);
    this.onChangeSearchCar = this.onChangeSearchCar.bind(this);
    this.retrieveCars = this.retrieveCars.bind(this);
    this.refreshList = this.refreshList.bind(this);
    this.setActiveModel = this.setActiveModel.bind(this);
    this.removeAllCars = this.removeAllCars.bind(this);
    this.searchCar = this.searchCar.bind(this);

    this.state = {
      cars: [],
      currentCar: null,
      currentIndex: -1,
      searchCar: ""
    };
  }

  componentDidMount() {
    this.retrieveCars();
  }

  onChangeSearchCar(e) {
    const searchCar = e.target.value;

    this.setState({
      searchCar: searchCar
    });
  }

  retrieveCars() {
    CarDataService.getAll()
      .then(response => {
        this.setState({
          cars: response.data
        });
        console.log(response.data);
      })
      .catch(e => {
        console.log(e);
      });
  }

  refreshList() {
    this.retrieveCars();
    this.setState({
      currentCar: null,
      currentIndex: -1
    });
  }

  setActiveModel(model, index) {
    this.setState({
      currentCar: model,
      currentIndex: index
    });
  }

  removeAllCars() {
    CarDataService.deleteAll()
      .then(response => {
        console.log(response.data);
        this.refreshList();
      })
      .catch(e => {
        console.log(e);
      });
  }

  searchCar() {
    CarDataService.findByModel(this.state.searchCar)
      .then(response => {
        this.setState({
          cars: response.data
        });
        console.log(response.data);
      })
      .catch(e => {
        console.log(e);
      });
  }

  render() {
    const { searchCar, cars, currentCar, currentIndex } = this.state;

    return (
      <div className="list row">
        <div className="col-md-8">
          <div className="input-group mb-3">
            <input
              type="text"
              className="form-control"
              placeholder="Search by model"
              value={searchCar}
              onChange={this.onChangeSearchCar}
            />
            <div className="input-group-append">
              <button
                className="btn btn-outline-secondary"
                type="button"
                onClick={this.searchCar}
              >
                Search
              </button>
            </div>
          </div>
        </div>
        <div className="col-md-6">
          <h4>Cars List</h4>

          <ul className="list-group">
            {cars &&
              cars.map((car, index) => (
                <li
                  className={
                    "list-group-item " +
                    (index === currentIndex ? "active" : "")
                  }
                  onClick={() => this.setActiveModel(car, index)}
                  key={index}
                >
                  {car.model}
                </li>
              ))}
          </ul>

          <button
            className="m-3 btn btn-sm btn-danger"
            onClick={this.removeAllCars}
          >
            Remove All
          </button>
        </div>
        <div className="col-md-6">
          {currentCar ? (
            <div>
              <h4>Car</h4>
              <div>
                <label>
                  <strong>Manufacturer:</strong>
                </label>{" "}
                {currentCar.manufacturer}
              </div>
              <div>
                <label>
                  <strong>Model:</strong>
                </label>{" "}
                {currentCar.model}
              </div>
              <div>
                <label>
                  <strong>Data:</strong>
                </label>{" "}
                {currentCar.data}
              </div>
              <div>
                <label>
                  <strong>Price:</strong>
                </label>{" "}
                {currentCar.price}
              </div>
              <div>
                <label>
                  <strong>Status:</strong>
                </label>{" "}
                {currentCar.published ? "Published" : "Pending"}
              </div>

              <Link
                to={"/cars/" + currentCar.id}
                className="badge badge-warning blue"
              >
                Edit
              </Link>
            </div>
          ) : (
            <div>
              <br />
              <p>Please click on a Tutorial...</p>
            </div>
          )}
        </div>
      </div>
    );
  }
}
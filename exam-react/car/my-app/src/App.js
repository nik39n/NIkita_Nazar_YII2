import React, { Component } from "react";
import "bootstrap/dist/css/bootstrap.min.css";
import { Link, Switch, Route } from "react-router-dom";
import Student from "./components/Student/Student";
import AddCar from "./components/car/add-car.component";
import CarList from "./components/car/cars-list.component";
import Car from "./components/car/car.component";
class App extends Component {
  render() {
    return(
      <div>
        <nav className="navbar navbar-expand navbar-dark bg-dark">
          <a href="/" className="navbar-brand">
           Главная
          </a>
          <div className="navbar-nav mr-auto">
          <li className="nav-item">              
              <Link to={"/student"} className="nav-link">
                О студенте
              </Link>
            </li>
            <li className="nav-item">              
              <Link to={"/cars"} className="nav-link">
                Список машин
              </Link>
            </li>
            <li className="nav-item">
              <Link to={"/add"} className="nav-link">
                Добавить машину
              </Link>
            </li>
          </div>
        </nav>
        <div className="container mt-3">
          <Switch>
            <Route exact path={["/cars"]} component={CarList} />
            <Route exact path={ ["/student","/"]} component={Student} /> 
            <Route exact path="/add" component={AddCar} />
            <Route path="/cars/:id" component={Car} />
          </Switch>
        </div>
      </div>
    )
  }
}

export default App;
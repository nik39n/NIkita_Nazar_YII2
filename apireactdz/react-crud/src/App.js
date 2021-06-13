import React, { Component } from "react";
import "bootstrap/dist/css/bootstrap.min.css";
import { Link, Switch, Route } from "react-router-dom";
//import TovarList from "./components/tovar-list.component";
import AddTovar from "./components/add-tovar.component";
import TovarList from "./components/tovars-list.component";
import Tovar from "./components/tovar.component";
class App extends Component {
  render() {
    return(
      <div>
        <nav className="navbar navbar-expand navbar-dark bg-dark">
          <a href="/tovars" className="navbar-brand">
           MyApp
          </a>
          <div className="navbar-nav mr-auto">
            <li className="nav-item">              
              <Link to={"/tovars"} className="nav-link">
                Tovars
              </Link>
            </li>
            <li className="nav-item">
              <Link to={"/add"} className="nav-link">
                Add
              </Link>
            </li>
          </div>
        </nav>
        <div className="container mt-3">
          <Switch>
            <Route exact path={["/", "/tovars"]} component={TovarList} /> 
            <Route exact path="/add" component={AddTovar} />
            <Route path="/tovars/:id" component={Tovar} />
          </Switch>
        </div>
      </div>
    )
  }
}

export default App;
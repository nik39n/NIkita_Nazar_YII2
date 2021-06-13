import React, { Component } from "react";
import TovarDataService from "../services/tovar.service";
import './tovar.css';
export default class TovaralsList extends Component {
    state = {
        tovars:[],
    }
    componentDidMount() {
        TovarDataService.getAll().then(response =>{
            this.setState({
                tovars:response.data
            });
            console.log(response)
        }).catch(e=>{
            console.log(e)
        })
    }
    render() {
        return(
            <div className="list row">
        <div className="col-md-8">
          <div className="input-group mb-3">
            <input
              type="text"
              className="form-control"
              placeholder="Search by title"
             
            />
            <div className="input-group-append">
              <button
                className="btn btn-outline-secondary"
                type="button"
                
              >
                Search
              </button>
            </div>
          </div>
        </div>
        <div className="col-md-6">
          <h4>Tutorials List</h4>

                    <table>
                        <tr>
                            <td>id</td>
                            <td>Vendor</td>
                            <td>TypeProduct</td>
                            <td>Model</td>
                            <td>Price</td>
                        </tr>
                    {
                  this.state.tovars.map((item,index)=>{
                      return(
                          <tr key={index}>
                              <td>{index}</td>
                              <td>{item.Vendor}</td>
                              <td>{item.TypeProduct}</td>
                              <td>{item.Model}</td>
                              <td>{item.Price}</td>
                          </tr>
                          
                      )

                  })
              } 
</table>
          <button
            className="m-3 btn btn-sm btn-danger"
           
          >
            Remove All
          </button>
        </div>
        </div>
        )
    }
}

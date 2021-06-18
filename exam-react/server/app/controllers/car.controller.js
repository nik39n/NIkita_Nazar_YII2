const db = require("../models");
const Car = db.cars;
const Op = db.Sequelize.Op;

// Create and Save a new Tutorial
exports.create = (req, res) => {
  // Validate request
  if (!req.body.manufacturer) {
    res.status(400).send({
      message: "Content can not be emptyyyy!",
      massage2: req.body.manufacturer
      
    }
      
    );
    console.log(req.body.manufacturer);
    return;
  }

  // Create a Tutorial
  const cars = {
    manufacturer: req.body.manufacturer,
    model: req.body.model,
    data: req.body.data,
    price: req.body.price,
    published: req.body.published ? req.body.published : false
  };

  // Save Tutorial in the database
  Car.create(cars)
    .then(data => {
      res.send(data);
    })
    .catch(err => {
      res.status(500).send({
        message:
          err.message || "Some error occurred while creating the Car."
      });
    });
};

// Retrieve all Tutorials from the database.
exports.findAll = async (req, res) => {
  const manufacturer = req.query.manufacturer;
  var condition = manufacturer ? { manufacturer: { [Op.like]: `%${manufacturer}%` } } : null;

 

  Car.findAll( { where: condition } )
    .then(data => {
      res.send(data);
    })
    .catch(err => {
      res.status(500).send({
        message:
          err.message || "Some error occurred while retrieving Cars."
      });
    });
};

// Find a single Tutorial with an id
exports.findOne = (req, res) => {
  const id = req.params.id;

  Car.findByPk(id)
    .then(data => {
      res.send(data);
    })
    .catch(err => {
      res.status(500).send({
        message: "Error retrieving Car with id=" + id
      });
    });
};

// Update a Tutorial by the id in the request
exports.update = (req, res) => {
  const id = req.params.id;

  Car.update(req.body, {
    where: { id: id }
  })
    .then(num => {
      if (num == 1) {
        res.send({
          message: "Car was updated successfully."
        });
      } else {
        res.send({
          message: `Cannot update Car with id=${id}. Maybe Tutorial was not found or req.body is empty!`
        });
      }
    })
    .catch(err => {
      res.status(500).send({
        message: "Error updating Car with id=" + id
      });
    });
};

// Delete a Tutorial with the specified id in the request
exports.delete = (req, res) => {
  const id = req.params.id;

  Car.destroy({
    where: { id: id }
  })
    .then(num => {
      if (num == 1) {
        res.send({
          message: "Car was deleted successfully!"
        });
      } else {
        res.send({
          message: `Cannot delete Car with id=${id}. Maybe Tutorial was not found!`
        });
      }
    })
    .catch(err => {
      res.status(500).send({
        message: "Could not delete Car with id=" + id
      });
    });
};

// Delete all Tutorials from the database.
exports.deleteAll = (req, res) => {
  Car.destroy({
    where: {},
    truncate: false
  })
    .then(nums => {
      res.send({ message: `${nums} Cars were deleted successfully!` });
    })
    .catch(err => {
      res.status(500).send({
        message:
          err.message || "Some error occurred while removing all Cars."
      });
    });
};

// find all published Tutorial
exports.findAllPublished = (req, res) => {
  Car.findAll({ where: { published: true } })
    .then(data => {
      res.send(data);
    })
    .catch(err => {
      res.status(500).send({
        message:
          err.message || "Some error occurred while retrieving Cars."
      });
    });
};

const db = require("../models");
const Tovar = db.tovars;
const Op = db.Sequelize.Op;

// Create and Save a new Tutorial
exports.create = (req, res) => {
  // Validate request
  if (!req.body.Vendor) {
    res.status(400).send({
      message: "Content can not be emptyyyy!",
      massage2: req.body.Vendor
      
    }
      
    );
    console.log(req.body.Vendor);
    return;
  }

  // Create a Tutorial
  const tovar = {
    Vendor: req.body.Vendor,
    TypeProduct: req.body.TypeProduct,
    Model: req.body.Model,
    Price: req.body.Price,
    published: req.body.published ? req.body.published : false
  };

  // Save Tutorial in the database
  Tovar.create(tovar)
    .then(data => {
      res.send(data);
    })
    .catch(err => {
      res.status(500).send({
        message:
          err.message || "Some error occurred while creating the Tovar."
      });
    });
};

// Retrieve all Tutorials from the database.
exports.findAll = (req, res) => {
  const vendor = req.query.Vendor;
  var condition = vendor ? { Vendor: { [Op.like]: `%${vendor}%` } } : null;

  Tovar.findAll({ where: condition })
    .then(data => {
      res.send(data);
    })
    .catch(err => {
      res.status(500).send({
        message:
          err.message || "Some error occurred while retrieving Tovars."
      });
    });
};

// Find a single Tutorial with an id
exports.findOne = (req, res) => {
  const id = req.params.id;

  Tovar.findByPk(id)
    .then(data => {
      res.send(data);
    })
    .catch(err => {
      res.status(500).send({
        message: "Error retrieving Tovar with id=" + id
      });
    });
};

// Update a Tutorial by the id in the request
exports.update = (req, res) => {
  const id = req.params.id;

  Tovar.update(req.body, {
    where: { id: id }
  })
    .then(num => {
      if (num == 1) {
        res.send({
          message: "Tovar was updated successfully."
        });
      } else {
        res.send({
          message: `Cannot update Tovar with id=${id}. Maybe Tutorial was not found or req.body is empty!`
        });
      }
    })
    .catch(err => {
      res.status(500).send({
        message: "Error updating Tovar with id=" + id
      });
    });
};

// Delete a Tutorial with the specified id in the request
exports.delete = (req, res) => {
  const id = req.params.id;

  Tovar.destroy({
    where: { id: id }
  })
    .then(num => {
      if (num == 1) {
        res.send({
          message: "Tovar was deleted successfully!"
        });
      } else {
        res.send({
          message: `Cannot delete Tovar with id=${id}. Maybe Tutorial was not found!`
        });
      }
    })
    .catch(err => {
      res.status(500).send({
        message: "Could not delete Tovar with id=" + id
      });
    });
};

// Delete all Tutorials from the database.
exports.deleteAll = (req, res) => {
  Tovar.destroy({
    where: {},
    truncate: false
  })
    .then(nums => {
      res.send({ message: `${nums} Tovars were deleted successfully!` });
    })
    .catch(err => {
      res.status(500).send({
        message:
          err.message || "Some error occurred while removing all Tovars."
      });
    });
};

// find all published Tutorial
exports.findAllPublished = (req, res) => {
  Tovar.findAll({ where: { published: true } })
    .then(data => {
      res.send(data);
    })
    .catch(err => {
      res.status(500).send({
        message:
          err.message || "Some error occurred while retrieving Tovars."
      });
    });
};

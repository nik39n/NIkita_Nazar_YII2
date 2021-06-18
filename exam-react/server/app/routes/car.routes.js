module.exports = app => {
  const car = require("../controllers/car.controller.js");

  var router = require("express").Router();

  // Create a new Tutorial
  router.post("/", car.create);

  // Retrieve all Tutorials
  router.get("/", car.findAll);

  // Retrieve all published Tutorials
  router.get("/published", car.findAllPublished);

  // Retrieve a single Tutorial with id
  router.get("/:id", car.findOne);

  // Update a Tutorial with id
  router.put("/:id", car.update);

  // Delete a Tutorial with id
  router.delete("/:id", car.delete);

  // Delete all Tutorials
  router.delete("/", car.deleteAll);

  app.use('/api/cars', router);
};

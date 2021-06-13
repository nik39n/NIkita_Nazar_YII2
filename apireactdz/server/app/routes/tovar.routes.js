module.exports = app => {
  const tovar = require("../controllers/tovar.controller.js");

  var router = require("express").Router();

  // Create a new Tutorial
  router.post("/", tovar.create);

  // Retrieve all Tutorials
  router.get("/", tovar.findAll);

  // Retrieve all published Tutorials
  router.get("/published", tovar.findAllPublished);

  // Retrieve a single Tutorial with id
  router.get("/:id", tovar.findOne);

  // Update a Tutorial with id
  router.put("/:id", tovar.update);

  // Delete a Tutorial with id
  router.delete("/:id", tovar.delete);

  // Delete all Tutorials
  router.delete("/", tovar.deleteAll);

  app.use('/api/tovars', router);
};

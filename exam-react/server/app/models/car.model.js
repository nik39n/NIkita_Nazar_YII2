module.exports = (sequelize, Sequelize) => {
  const Car = sequelize.define("car", {
    manufacturer: {
      type: Sequelize.STRING
    },
    model: {
      type: Sequelize.STRING
    },
    data: {
      type: Sequelize.DATE
    },
    price: {
      type: Sequelize.INTEGER
    },
    published: {
      type: Sequelize.BOOLEAN
    }
  });

  return Car;
};

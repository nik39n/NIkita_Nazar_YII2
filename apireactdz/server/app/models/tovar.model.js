module.exports = (sequelize, Sequelize) => {
  const Tovar = sequelize.define("tovar", {
    Vendor: {
      type: Sequelize.STRING
    },
    TypeProduct: {
      type: Sequelize.STRING
    },
    Model: {
      type: Sequelize.STRING
    },
    Price: {
      type: Sequelize.INTEGER
    },
    published: {
      type: Sequelize.BOOLEAN
    }
  });

  return Tovar;
};

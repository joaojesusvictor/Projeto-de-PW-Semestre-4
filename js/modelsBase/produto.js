const Sequelize = require('sequelize');
const  database = require('../bd');

const produto = database.define('produto', {

    cd_produto:{
        type: Sequelize.BIGINT,
        autoIncrement: true,
        allowNull: false,
        primaryKey: true
    },
    nm_img: {

        type: Sequelize.STRING(50),
        allowNull: false

    },
    titulo: {
        
        type: Sequelize.STRING(50),
        allowNull: false

    },
    descritivo: {
        type: Sequelize.TEXT,
        allowNull: false

    },
    valor: Sequelize.DECIMAL(7,2),
    marca: Sequelize.STRING(50),

    qtd_produto: {
        type: Sequelize.INTEGER,
        allowNull: false
    
    }
})

module.exports = produto;
const Sequelize = require('sequelize');
const conexao = new Sequelize('projetopw', 'root', '',  {host: "localhost", dialect:"mysql"});

module.exports = conexao;

/*

conexao.authenticate().then(function(){
    console.log("conectado");
}).catch(function(erro){
    console.log("falha "+erro);
}) ;

*/


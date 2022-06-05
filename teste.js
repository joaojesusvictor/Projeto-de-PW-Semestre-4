(async () => {

    const database = require('./js/bd');
    const Produto = require('./js/modelsBase/produto');
    await database.sync();







    const produtos = await Produto.findAll(

        /* caso queira acrescentar um filtro
        {
            where: {


            }
        }
        */


    );

    console.log(produtos);

})();


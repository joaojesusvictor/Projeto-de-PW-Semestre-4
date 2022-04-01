function salvarCad(){
    alert("Cadastrado com sucesso!");
    window.location.replace("Login.html");
}
function Finalizar(){
    alert("Compra realizada com Sucesso!");
    window.location.replace("Details.html");
}
function validarPesquisa(){

    if(pesquisarProduto.value == ""){
        alert("Digite algo a ser pesquisado");
        pesquisarProduto.focus;

    }else{
        window.location.replace("Search.html");

    }

}

function mudarTela(){   
    window.location.assign("../Projeto-de-PW-Semestre-4/Login.html");
}

function enviarForm(){
    if(emailCadastro.value.length < 6  || emailCadastro.value.indexOf("@") <= 0 || emailCadastro.value.lastIndexOf(".") <= emailCadastro.value.indexOf("@")){
            alert("Email Invalido !!!");
            emailCadastro.focus();
            emailCadastro.value="";
            frm1.reset()
    }
}

function testaCPF(strCPF) {
    var Soma;
    var Resto;
    Soma = 0;
    if (strCPF == "00000000000") alert("Cpf Invalido !!!");

    for (i=1; i<=9; i++) Soma = Soma + parseInt(strCPF.substring(i-1, i)) * (11 - i);
    Resto = (Soma * 10) % 11;

    if ((Resto == 10) || (Resto == 11))  Resto = 0;
    if (Resto != parseInt(strCPF.substring(9, 10)) ) alert("Cpf Invalido !!!");

    Soma = 0;
    for (i = 1; i <= 10; i++) Soma = Soma + parseInt(strCPF.substring(i-1, i)) * (12 - i);
    Resto = (Soma * 10) % 11;

    if ((Resto == 10) || (Resto == 11))  Resto = 0;
    if (Resto != parseInt(strCPF.substring(10, 11) ) ) alert("Cpf Invalido !!!");
    return true;
}
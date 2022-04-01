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

function entrarLogin(){
    if(emailLogin.value.length < 6  || emailLogin.value.indexOf("@") <= 0 || emailLogin.value.lastIndexOf(".") <= emailLogin.value.indexOf("@")){
        alert("Email Invalido !!!");
        emailLogin.focus();
        emailLogin.value="";
        return false; 
    } 

    logar.submit();
}

function mudarTela(){
    window.location.assign("../Projeto-de-PW-Semestre-4/Register.html");
}

function mudarParaLogin(){   
    window.location.assign("../Projeto-de-PW-Semestre-4/Login.html");
}

function enviarForm(){

    if(nomeCadastro.value.length <= 3){
        alert("Digite seu nome completo !");
        nomeCadastro.value="";
        nomeCadastro.focus();
        return false;
    }

    if(emailCadastro.value.length < 6  || emailCadastro.value.indexOf("@") <= 0 || emailCadastro.value.lastIndexOf(".") <= emailCadastro.value.indexOf("@")){
            alert("Email Invalido !!!");
            emailCadastro.focus();
            emailCadastro.value="";
            return false;
    }

    if(senhaCadastro.value.length < 6 || !isNaN(senhaCadastro.value)){
        alert("Digite uma senha alfanumerica de 6 posições");
        senhaCadastro.value="";
        senhaCadastro.focus();
        return false;    
    }

    if(senhaCadastro.value != senha2.value){
        alert("Senha e confirmação são diferentes!");
        confirmaSenha.focus();
        confirmaSenha.value="";
        return false;        
    }

    if(telefoneCadastro.value == "" || isNaN(telefoneCadastro.value)){
        alert("Informe somente numeros para o telefone!!!");
        telefoneCadastro.focus();
        telefoneCadastro.value="";
        return false;
    }

    formCadastro.submit();
}

function validarCpf(strCPF){
    var Soma;
    var Resto;
    Soma = 0;

    var cpf = strCPF.replaceAll(".", "");
    var cpfAlterado = cpf.replaceAll("-","");

    if (cpfAlterado.length != 11) alert("O CPF deve ter 11 digitos !!!");

    if (cpfAlterado == "00000000000") alert("Cpf Invalido !!!");

    for (i = 1; i <= 9; i++) Soma = Soma + parseInt(cpfAlterado.substring(i-1, i)) * (11 - i);
    Resto = (Soma * 10) % 11;

    if ((Resto == 10) || (Resto == 11))  Resto = 0;
    if (Resto != parseInt(cpfAlterado.substring(9, 10)) ) alert("Cpf Invalido !!!");

    Soma = 0;
    for (i = 1; i <= 10; i++) Soma = Soma + parseInt(cpfAlterado.substring(i-1, i)) * (12 - i);
    Resto = (Soma * 10) % 11;

    if ((Resto == 10) || (Resto == 11))  Resto = 0;
    if (Resto != parseInt(cpfAlterado.substring(10, 11) ) ) alert("Cpf Invalido !!!");
    return true;
}

function esqueciSenha(){
    if(email.value.length < 6  || email.value.indexOf("@") <= 0 || email.value.lastIndexOf(".") <= email.value.indexOf("@")){
        alert("Email Invalido !!!");
        email.focus();
        email.value="";
        return false; 
    } 

    modalLogin.submit();
}
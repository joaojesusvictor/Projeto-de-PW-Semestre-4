function salvarCad() {
    alert("Cadastrado com sucesso!");
    window.location.replace("Login.html");
    return false;
}

function Finalizar() {
    alert("Compra realizada com Sucesso!");
    window.location.replace("Details.html");
    return false;
}

function Pesquisar() {
    if (pesquisarProduto.value == "" || pesquisarProduto.value == " " * 12) {
        alert("Digite algo a ser pesquisado");
        pesquisarProduto.focus;
        return false;
    }
    else if (
        pesquisarProduto.value.indexOf("!") != -1 ||
        pesquisarProduto.value.indexOf("@") != -1 ||
        pesquisarProduto.value.indexOf("#") != -1 ||
        pesquisarProduto.value.indexOf("$") != -1 ||
        pesquisarProduto.value.indexOf("%") != -1 ||
        pesquisarProduto.value.indexOf("¨") != -1 ||
        pesquisarProduto.value.indexOf("&") != -1 ||
        pesquisarProduto.value.indexOf("*") != -1 ||
        pesquisarProduto.value.indexOf("(") != -1 ||
        pesquisarProduto.value.indexOf(")") != -1 ||
        pesquisarProduto.value.indexOf("_") != -1 ||
        pesquisarProduto.value.indexOf("+") != -1 ||
        pesquisarProduto.value.indexOf("'") != -1 ||
        pesquisarProduto.value.indexOf("-") != -1 ||
        pesquisarProduto.value.indexOf("=") != -1 ||
        pesquisarProduto.value.indexOf("`") != -1 ||
        pesquisarProduto.value.indexOf("[") != -1 ||
        pesquisarProduto.value.indexOf("{") != -1 ||
        pesquisarProduto.value.indexOf("}") != -1 ||
        pesquisarProduto.value.indexOf("]") != -1 ||
        pesquisarProduto.value.indexOf("~") != -1 ||
        pesquisarProduto.value.indexOf("^") != -1 ||
        pesquisarProduto.value.indexOf(":") != -1 ||
        pesquisarProduto.value.indexOf(";") != -1 ||
        pesquisarProduto.value.indexOf(".") != -1 ||
        pesquisarProduto.value.indexOf("{") != -1 ||
        pesquisarProduto.value.indexOf(",") != -1 ||
        pesquisarProduto.value.indexOf("/") != -1 ||
        pesquisarProduto.value.indexOf("|") != -1 ||
        pesquisarProduto.value.indexOf("}") != -1 ||
        pesquisarProduto.value.indexOf("?") != -1
    ) {
        alert("Digite apenas letras e numeros");
        pesquisarProduto.value = "";
        pesquisarProduto.focus();
        return false;
    }
    else {
        window.location.replace("Search.html");
        return false;
    }
}

function entrarLogin() {
    if (emailLogin.value.length < 6 || emailLogin.value.indexOf("@") <= 0 || emailLogin.value.lastIndexOf(".") <= emailLogin.value.indexOf("@")) {
        alert("Email Invalido !");
        emailLogin.focus();
        emailLogin.value = "";
        return false;
    } else if (senhaLogin.value == "" || senhaLogin.value == " " * 12) {
        alert("Digite a senha !");
        senhaLogin.focus();
        return false;
    }
    else {
        alert("Usuario Logado !");
        window.location.replace("index.html");
        return false;
    }

    logar.submit();
}

function mudarTela() {
    window.location.assign("../Projeto-de-PW-Semestre-4/Register.html");
}

function mudarParaLogin() {
    window.location.assign("../Projeto-de-PW-Semestre-4/Login.html");
}

function enviarForm() {
    if (nomeCadastro.value.length <= 3) {
        alert("Digite seu nome completo!");
        nomeCadastro.value = "";
        nomeCadastro.focus();
        return false;
    }

    if (emailCadastro.value.length < 6 || emailCadastro.value.indexOf("@") <= 0 || emailCadastro.value.lastIndexOf(".") <= emailCadastro.value.indexOf("@")) {
        alert("Email Invalido!");
        emailCadastro.focus();
        emailCadastro.value = "";
        return false;
    }

    if (senhaCadastro.value.length < 6 || !isNaN(senhaCadastro.value)) {
        alert("Digite uma senha alfanumerica de 6 posições");
        senhaCadastro.value = "";
        senhaCadastro.focus();
        return false;
    }

    if (senhaCadastro.value != senha2.value) {
        alert("Senha e confirmação são diferentes!");
        confirmaSenha.focus();
        confirmaSenha.value = "";
        return false;
    }

    if (telefoneCadastro.value == "" || isNaN(telefoneCadastro.value)) {
        alert("Informe somente numeros para o telefone!");
        telefoneCadastro.focus();
        telefoneCadastro.value = "";
        return false;
    }

    if (cep.value == "") {
        alert("Informe somente numeros para o cep!");
        cep.focus();
        cep.value = "";
        return false;
    }

    if (enderecoCadastro.value.length <= 5) {
        alert("Digite o endereço!");
        enderecoCadastro.value = "";
        enderecoCadastro.focus();
        return false;
    }
    formCadastro.submit();
}

function validarCpf(strCPF) {
    var Soma;
    var Resto;
    Soma = 0;

    if (strCPF.length == 0) {
        alert("Informe o Cpf !!!")
    }
    else {

        var cpfAlterado = strCPF.replaceAll(".", "").replaceAll("-", "");

        if (cpfAlterado.length != 11) {
            alert("O CPF deve ter 11 digitos !!!");
        }
        else {
            if (cpfAlterado == "00000000000") {
                alert("Cpf Invalido !!!");
            }
            else {

                for (i = 1; i <= 9; i++) Soma = Soma + parseInt(cpfAlterado.substring(i - 1, i)) * (11 - i);
                Resto = (Soma * 10) % 11;

                if ((Resto == 10) || (Resto == 11)) Resto = 0;
                if (Resto != parseInt(cpfAlterado.substring(9, 10))) {
                    alert("Cpf Invalido !!!");
                }
                else {

                    Soma = 0;
                    for (i = 1; i <= 10; i++) Soma = Soma + parseInt(cpfAlterado.substring(i - 1, i)) * (12 - i);
                    Resto = (Soma * 10) % 11;

                    if ((Resto == 10) || (Resto == 11)) Resto = 0;
                    if (Resto != parseInt(cpfAlterado.substring(10, 11))) alert("Cpf Invalido !!!");
                    return true;
                }
            }
        }
    }
}

function esqueciSenha() {
    if (email.value.length < 6 || email.value.indexOf("@") <= 0 || email.value.lastIndexOf(".") <= email.value.indexOf("@")) {
        alert("Email Invalido !!!");
        email.focus();
        email.value = "";
        return false;
    } else {
        alert("Um email de verificação foi enviado para o endereço: " + email.value);
        window.location.replace("Login.html");
        return false;
    }

    modalLogin.submit();
}

async function buscarCep(valorCep) {

    let cepFormat = valorCep.replaceAll(".", "").replaceAll("-", "");

    if (cepFormat == "" || cepFormat.length > 8) {
        
        alert("Cep inválido !!!");
        cep.focus();
        cep.value = "";
        return false;

    } else {
        

        let url = "https://viacep.com.br/ws/" + cep + "/json/";

        fetch(url).then((resp) => resp.json()).then(function (data) {

            document.getElementById("cep").value = data.cep;
            document.getElementById("enderecoCadastro").value = data.logradouro;
            document.getElementById("bairroEnd").value = data.bairro;
            document.getElementById("cidadeEnd").value = data.localidade;
            document.getElementById("estado").value = data.uf;

        }).catch(function (error) {
            alert("Cep não encontrado!");
            console.log(error);
        });
    }
}
<?php
echo "ola"
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tamag</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css"
        integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/principal.css">
    <link rel="stylesheet" href="./csscadastro/cadastro.css">
    <link rel="stylesheet" href="./css/reset.css">
    <link rel="shortcut icon" href="./img/tamaglogo.png" type="image/x-icon">
    <script src="./tamagjs/castrojsADM.js" defer></script>
</head>

<body>
    <form>
        <header class="tela207">
            <a href="LoginADM.php"><img src="./img/tamaglogo.png" alt="telatamag" class="imgtamag" width="150px"></a>
        </header>
        <div class="telaprim container">
            <div class="row bg-white rounded">
                <div class="col-md-12 d-flex flex-wrap">
                    <div class="divits col-md-12">
                        <div class=" painel1 form-group m-4 item">
                            <label for="email">E-mail:</label>
                            <input class="form-control form-control-sm" type="email" id="email" placeholder="E-mail..."
                                maxlength="30" required>
                        </div>
                        <div class="painel1 form-group m-4 item">
                            <label for="senha">Senha:</label>
                            <input class="form-control form-control-sm" type="password" id="senha"
                                placeholder="Senha...." maxlength="30" required>
                        </div>
                        <div class="painel1 form-group m-4 item">
                            <label for="nomesenha">Confirma Senha:</label>
                            <input class="form-control form-control-sm" type="password" id="nomesenha"
                                placeholder="Confirma..." maxlength="30" required>
                        </div>
                        <div class="painel1 form-group m-4 item">
                            <label for="nomealuno">Nome</label>
                            <input class="form-control form-control-sm" type="text" id="nome"
                                placeholder="Aluno..." maxlength="30" required>
                        </div>
                        <div class="painel1 form-group m-4 item">
                            <label for="cpfaluno">CPF</label>
                            <input class="form-control form-control-sm" type="number" id="cpf" placeholder="CPF..."
                                min="0" max="10" required>
                        </div>
                        <div class="painel1 form-group m-4 item">
                            <label for="endre">Endereço:</label>
                            <input class="form-control form-control-sm" type="text" id="endre"
                                placeholder="Ex:Rua jose fino..." required>
                        </div>
                        <div class="painel1 form-group m-4 item">
                            <label for="cont">Contato:</label>
                            <input class="form-control form-control-sm" type="tel" id="cont"
                                placeholder="(xx) xxxx-xxxx" maxlength="11" required>
                        </div>
                        <div class="painel1 form-group m-4 item">
                            <label for="codi">Codigo Da Empresa:</label>
                            <input class="form-control form-control-sm" type="text" id="codi"
                                placeholder="Codigo Da Empresa" maxlength="7" required>
                        </div>
                       
                    </div>
                </div>
                <div class="btn-group w-100 justify-content-center m-5"><button class="btn btn-outline-primary" onclick="pontclick(); return false">Cadastra</button></div>
            </div>
      
    </form>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
        integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
        crossorigin="anonymous"></script>
</body>

</html>
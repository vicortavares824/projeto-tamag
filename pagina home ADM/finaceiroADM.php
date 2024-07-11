<?php require_once "../pastaphpADM/validar_ADM.php" ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css"
        integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/tamaghome.css">
    <link rel="stylesheet" href="../css/reset.css">
    <link rel="stylesheet" href="../css/tamgperfil.css">
    <link rel="shortcut icon" href="../img/icontamg.png" type="image/x-icon">
    <title>Tamag</title>
</head>

<body>
    <header>

        <nav class="navbar navbar-expand-md navbar-dark  bg-primary ">
            <div class="container"> <a href="../LoginADM.php" class="navbar-brand"><img src="../img/icontamg.png" alt="tamag"
                        width="130px" class="bg-white rounded"></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#conteudoNavbar"
                    aria-controls="conteudoNavbarSuportado" aria-expanded="false" aria-label="Alterna navegação">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-center " id="conteudoNavbar">
                    <ul class="navbar-nav separador1  ">
                        <li class="nav-item p-3  fundo mr-4 ml-4 ">
                            <a href="perfilADM.php"> <img src="../img2/perfil2.png" alt="perfil" class="img-fluid"
                                    width="70px"></a>
                            <h1 class="separador1 pt-3">Perfil</h1>
                        </li>
                        <li class="nav-item p-3  fundo mr-4  ml-4">
                            <a href="finaceiroADM.php"><img src="../img2/dinheiro.png" alt="dinheiro" class="img-fluid"
                                    width="70px"></a>
                            <h1 class="separador1 pt-3">Financeiro</h1>
                        </li>
                        <li class="nav-item p-3  fundo mr-4  ml-4">
                            <a href="../pastaphpADM/sairADM.php"><img src="../img2/sair.png" alt="contato" class="img-fluid"
                                    width="65px"></a>
                            <h1 class="separador1 pt-3">Sair</h1>
                        </li>
                    </ul>
                </div>
                
            </div>
        </nav>
        <section class="perfil-10">
        <div class="container">
            <div class="d-flex justify-content-center ">
                    <a href="finaceiroADM.php" class="btn btn-outline-dark m-3">Cadastro alternativo</a>
                  <a href="registroADM.php" class="btn btn-outline-dark m-3">Cadastro ativos</a>
            </div>
            <div class="perfil-principal">
                <form action="">
                    <div class="telaprim container">
                        <div class="row bg-white rounded">
                            <div class="col-md-12 d-flex flex-wrap">
                                <div class="divits col-md-6">
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
                                        <label for="nomeresp">Nome Responsavel:</label>
                                        <input class="form-control form-control-sm" type="text" id="nomeresp"
                                            placeholder="Responsavel...." maxlength="30" required>
                                    </div>
                                    <div class="painel1 form-group m-4 item">
                                        <label for="cpfresp">CPF Responsavel:</label>
                                        <input class="form-control form-control-sm" type="number" id="cpfresp" placeholder="CPF..."
                                            min="0" max="10" required>
                                    </div>
                                    <div class="painel1 form-group m-4 item">
                                        <label for="nomealuno">Nome Aluno:</label>
                                        <input class="form-control form-control-sm" type="text" id="nomealuno"
                                            placeholder="Aluno..." maxlength="30" required>
                                    </div>
                                    <div class="painel1 form-group m-4 item">
                                        <label for="cpfaluno">CPF Aluno:</label>
                                        <input class="form-control form-control-sm" type="number" id="cpfaluno" placeholder="CPF..."
                                            min="0" max="10" required>
                                    </div>
                                </div>
                                <div class="divits col-md-6  ">
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
                                        <label for="escol">Escola:</label>
                                        <input class="form-control form-control-sm" type="text" id="escol"
                                            placeholder="Ex:escola antonio" maxlength="40" required>
                                    </div>
                                    <div class="painel1 form-group m-4 item">
                                        <label for="peri">Serie:</label>
                                        <input class="form-control form-control-sm" type="text" id="peri" placeholder="5B" size="1"
                                            maxlength="2" required>
                                    </div>
                                    <div class="painel1 form-group m-4 item">
                                        <label for="horaent">Horario da entrada:</label>
                                        <input class="form-control form-control-sm" type="time" id="horaent" placeholder="Ex:10:30"
                                            required>
                                    </div>
                                    <div class="painel1 form-group m-4 item">
                                        <label for="horasaid">Horario da saida:</label>
                                        <input class="form-control form-control-sm" type="time" id="horasaid" placeholder="Ex:18:30"
                                            required>
                                    </div>
                                    <div class="painel1 form-group m-4 item">
                                        <label for="pagm">Data de pagamento:</label>
                                        <input class="form-control form-control-sm" type="text" id="pagm" disabled="disabled" placeholder="10/0X" class="input_user">
                                    </div>
                                </div>
                            </div>
                            <div class="btn-group w-100 justify-content-center m-5"><button class="btn btn-outline-primary" onclick="pontclick(); return false">Cadastra</button></div>
            </div>
        </div>
                </div>
        </form>
    </section>
        


    </main>
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
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
                <div class="row">
                    
                </div>
            </div>
        </section>
    </header>


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
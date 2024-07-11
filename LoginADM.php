<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css"
        integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/tamagmenu.css">
    <link rel="stylesheet" href="./css/TamagloginADM.css">
    <link rel="stylesheet" href="./css/reset.css">
    <link rel="shortcut icon" href="./img/icontamg.png" type="image/x-icon">
    <title>Tamag</title>
</head>
<script lang="javascript" src="./tamagjs/tamagjs.js"></script>

<body>
    <section id="home" class="d-flex">
        <main class=" container align-self-center">
            <nav class="row bord">
                <div class="fundo">
                
                    <div class="menu col-md-12 ">
                        <header class="menu_img m-3 p-2 rounded">
                            <a href="index.html"><img src="./img/tamaglogo.png" alt="tamag" class="img-fluid"></a>
                        </header>
                        <form class="col-md-12 " action="./pastaphpADM/validacao_loginADM.php" method="post">
                            <div class="d-flex form-group justify-content-center m-4 flex-wrap">
                                <label for="login" class="perfil"><img src="./img/fotoperfil.png" alt="perfil"></label>
                                <div class="senha"><input class="form-control form-control-sm" type="email"
                                        placeholder="Email" id="login" name="email"></div>
                            </div>
                            <div class="d-flex form-group justify-content-center  m-4 flex-wrap">
                                <label for="senha" class="perfil"><img src="./img/fotosenha.png" alt="senha"></label>
                                <div class="senha"><input class="form-control form-control-sm" type="password"
                                        placeholder="Password" id="senha" name="senha"></div>
                            </div>
                            <div class="d-flex form-group justify-content-center  m-4 flex-wrap">
                                <label for="senha" class="perfil"><img src="./img/codigo da empresa.png " alt="senha"></label>
                                <div class="senha"><input class="form-control form-control-sm" type="text"
                                        placeholder="Codigo Da Empresa" id="senha" name="codigo"></div>
                            </div>
                            <?php if(isset($_GET['login']) && $_GET['login'] == 'false'){?>
                                <div class="text-info">
                                    Usuário,senha ou CODIGO inválido(s)
                                </div>
                                <?php } ?>
                                <?php if(isset($_GET['login']) && $_GET['login'] == 'false2'){?>
                                <div class="text-info">
                                    Faça Login antes de acessar as páginas protegidas
                                </div>
                                <?php } ?>
                            <div class="d-flex form-group justify-content-center mt-3 flex-wrap form-check form-switch">
                                <div class="input_checkbox m-2 "><input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault">
                                 <label class="form-check-label" for="flexSwitchCheckDefault">Lembrar</label></div>
                                <div class="esqueci m-2"><a href="#">Esqueci minha senha</a></div>
                            </div>
                            <div class="d-flex justify-content-center flex-wrap">
                                <div class="mr-3"> <button class="btn btn-lg botao_cadastra "><a
                                            href="cadastroADM.php">Cadastrar</a></button></div>
                                <div class="ml-4"> <button class="btn btn-lg botao_login" type="submit">Login</button></div>
                            </div>
                        </form>
                    </div>
                </div>
            </nav>
        </main>
    </section>

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
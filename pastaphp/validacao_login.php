<?php 
        session_start();
    $usuario_autenticado = null;
    $usuario_id = null;
    $usuario_perfil_id=null;
    $usuarios_tmg = array(
        array('id' => 1,'email' => 'adm@teste.com.br','senha' => '1234', 'perfil_id'=> 1),
        array('id' => 2,'email' => 'user@teste.com.br','senha' => '1234', 'perfil_id'=> 1),
        array('id' => 3,'email' => 'jose@teste.com.br','senha' => '1234', 'perfil_id'=>2),
        array('id' => 4,'email' => 'maria@teste.com.br','senha' => '1234', 'perfil_id'=>2),
    );
    foreach($usuarios_tmg as $aluno){
        if($aluno['email'] == $_POST['email'] && $aluno['senha'] == $_POST['senha'] ){
            $usuario_autenticado = true ;
            $usuario_id = $user['id'];
            $usuario_perfil_id = $user['perfil_id'];
        }

    }
    if($usuario_autenticado){
        $_SESSION['autenticado'] ='sim';
        $_SESSION['id'] = $usuario_id ;
        $_SESSION['perfil_id'] = $usuario_perfil_id ;
        header('Location:  ../pagina home/perfil.php');
    }else{
        $_SESSION['autenticado'] ='nao';
        header('Location: ../Login.php?login=false');
    }
?>
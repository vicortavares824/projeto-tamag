<?php 
        session_start();
    $usuario_autenticado = null;
    $usuario_id = null;
    $usuario_perfil_id=null;
    $usuario_lembrado=null;
    $usuarios_tmg = array(
        array('id' => 1,'email' => 'adm@teste.com.br','senha' => '1234', 'codigo'=> '1815-23'),
        array('id' => 2,'email' => 'user@teste.com.br','senha' => '1234','codigo'=> '1815-23'),
        array('id' => 3,'email' => 'jose@teste.com.br','senha' => '1234','codigo'=> '1815-23'),
        array('id' => 4,'email' => 'maria@teste.com.br','senha' => '1234','codigo'=> '1815-23'),
    );
    foreach($usuarios_tmg as $admin){
        if($admin['email'] == $_POST['email'] && $admin['senha'] == $_POST['senha'] && $admin['codigo'] == $_POST['codigo']){
            $usuario_autenticado = true ;
            $usuario_id = $admin['id'];
     
        }

    }
    if($usuario_autenticado){
        $_SESSION['autenticado'] ='sim';
        $_SESSION['id'] = $usuario_id ;
        
        header('Location:  ../pagina home ADM/perfilADM.php');
    }else{
        $_SESSION['autenticado'] ='nao';
        header('Location: ../LoginADM.php?login=false');
    }
?>
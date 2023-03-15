<?php

    session_start();

$usuarios_autenticado = false;
$usuario_id = null;



$usuarios_app = array(
    array('id' => 1, 'email' => 'adm@teste.com.br', 'senha' => '123'),
    array('id' => 2, 'email' => 'user@teste.com.br', 'senha' => '123'),
    array('id' => 3, 'email' => 'jose@teste.com.br', 'senha' => '123'),
    array('id' => 4, 'email' => 'maria@teste.com.br', 'senha' => '123')
);

foreach($usuarios_app as $user){
    if($user['email'] == $_POST['email'] && $user['senha'] == $_POST['senha']){
        $usuarios_autenticado = true;
        $usuario_id = $user['id'];
    }
    
}

if($usuarios_autenticado){
    $_SESSION['autenticado'] = 'SIM';
    $_SESSION['id'] = $usuario_id;
    header('Location: home.php');

} else{
    $_SESSION['autenticado'] = 'NAO';
    header('Location: index.php?login=erro');
}

?>
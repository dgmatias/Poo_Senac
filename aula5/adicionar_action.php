<?php
require 'config.php';
require 'dao/UsuarioDaoMysql.php';

$usuarioDao = new UsuarioDaoMysql($pdo);

$name = filter_input(INPUT_POST, 'name');
$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);

if($name && $email) {

    if($usuarioDao->findByEmail($email) === false){
        $novoUsuario = new Usuario();
        $novoUsuario->setNome($name);
        $novoUsuario->setEmail($email);

        $usuarioDao->add($novoUsuario);

        header("Location: index.php");
        exit;
    } else {
        echo 'Else do if usuarioDAO';
        // header("Location: cadastrar.php");
        // exit;
    }

} else {
    echo "nome $name e email $email";
    echo 'Else do usuario e email';
    // header("Location: cadastrar.php");
    // exit;
}
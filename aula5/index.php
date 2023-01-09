<?php
require 'config.php';
include 'head.php'; 
include 'header.php';
require 'dao/UsuarioDaoMysql.php';

$usuarioDao = new UsuarioDaoMysql($pdo);
$lista = $usuarioDao->findAll();


?>
<div class="container">
    <h1>Home</h1>
    <a type="button" class="btn btn-primary" href="cadastrar.php">ADICIONAR USUÁRIO</a>
    <table class="table">
        <tr>
            <th>#id</th>
            <th>Nome</th>
            <th>E-mail</th>
            <th></th>
            
        </tr>
        <tr>
            <?php foreach ($lista as $usuario) : ?>
                <tr>
                    <td><?=$usuario->getId();?></td>
                    <td><?=$usuario->getNome();?></td>
                    <td><?=$usuario->getEmail();?></td>
                    <td>
                        <a href="editar.php?id=<?=$usuario->getId();?>">Editar</a>
                        <a href="excluir.php?id=<?=$usuario->getId();?>">Excluir</a>
                    </td>
                </tr>

            <?php endforeach; ?>    
        </tr>
    </table>

</div>


 <?php include 'footer.php'; ?>  
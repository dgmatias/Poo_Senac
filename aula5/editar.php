<?php

    require 'config.php';
    require 'head.php';
    require 'header.php';
    require 'dao/UsuarioDaoMysql.php';

    $usuarioDao = new UsuarioDaoMysql($pdo);
    $usuario = false;
    $id = filter_input(INPUT_GET,'id');
    
    if($id){
        $usuario = $usuarioDao->findById($id);
        
    }
    if($usuario === false){
        header("Location: index.php");
        exit;
    }      
?>

<div class="container">
    <h1>Editar Usuário</h1>
 
    <form action="editar_action.php" method="post" class="mb-4">
        <input type="hidden" name="id" value="<?=$usuario->getId();?>">
        <div class="mb-3">
            <label for="" class="form-label">
                Nome:
                <input type="text" name="name" class="form-control" value="<?=$usuario->getNome();?>">
            </label>
        </div>
        <div class="mb-3">
            <label for="" class="form-label">
                Email:
                <input type="email" name="email" class="form-control" value="<?=$usuario->getEmail();?>">
            </label>
        </div>
        
        <input type="submit" class="btn btn-primary" name="Salvar" value="Salvar">
        
    </form>

</div>

<?php include 'footer.php'; ?>
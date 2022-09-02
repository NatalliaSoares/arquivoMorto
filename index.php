<?php
require_once "config.php";

global $db;

$sql = "SELECT * FROM usuarios";
$sql = $db -> prepare($sql);
$sql -> execute();

$dados= $sql -> fetchAll();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <!-- CSS only -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="./css/estilo.css">
    <title>Document</title>
</head>
<body>
    <section class="container fundo">
        <div class="menu">
            <a href="novo-usuario.php" class="">
                <div class="botao-menu">    
                   <img src="./img/mais.png" alt="Cadastrar">
                </div>
            </a>
            <a href="#">
                <div class="botao-menu">    
                    <img src="./img/lupa.png" alt="Pesquisar">
                </div>
            </a>
            <a href="#">
                <div class="botao-menu">    
                    <img src="./img/bolacha.png" alt="">
                </div>
            </a>    
        </div>
        <div class="botao-registros">
            <a href="registros.php" class="btn btn-success">Cadastros</a>
        </div>
    </section>
</body>
</html>


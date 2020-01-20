<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="src/css/app.css">
    <title>Controle de Usuários</title>
</head>
<body>

<header class="navbar">
    <div class="container between">
        <h2>Controle de Usuários</h2>
        <a class="button-primary" href="pages/adicionar.php">Adicionar Usuários</a>
    </div>
</header>

<div class="app">
    <div class="container">
    <table class="table"  width="100%">
        <tr>    
            <th>Nome</th>
            <th>E-mail</th>
            <th>Senha</th>
            
        </tr>  
            <?php

            require 'class/Database.class.php';
            require 'class/Usuarios.class.php';
            $database = new Database;
            $usuarios = new Usuarios;
            $usuarios->listarUsuarios();
            
            ?>
    </table>
    </div>
</div>
</body>
</html>
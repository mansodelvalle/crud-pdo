<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Controle de Usuários</title>
</head>
<body>
<a href="adicionar.php">Adicionar Usuários</a>
<table border="0" width="100%">
    <tr>    
        <th>ID</th>
        <th>Nome</th>
        <th>E-mail</th>
        <th>Senha</th>
        <th>Ações</th>
    </tr>  
        <?php

        require 'class/Database.class.php';
        require 'class/Usuarios.class.php';
        $database = new Database;
        $usuarios = new Usuarios;
        $usuarios->listarUsuarios();
        
        ?>

</table>

</body>
</html>
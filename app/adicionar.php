<?php
        require 'class/Database.class.php';
        require 'class/Usuarios.class.php';
        $database = new Database;
        $usuarios = new Usuarios;

        if(isset($_POST['email']) && !empty($_POST['email']))
        {
            $nome = addslashes($_POST['nome']);
            $email = addslashes($_POST['email']);
            $senha = addslashes($_POST['senha']);

            $usuarios->adicionarUsuario($nome, $email, $senha);
        }

?>

<form action="#" method="post">
    <input name="nome" >
    <input name="email">
    <input name="senha">
    <button>Enviar</button>
</form>
<?php

require 'class/Database.class.php';
require 'class/Usuarios.class.php';
$database = new Database;
$usuarios = new Usuarios;

if(isset($_GET['id']))
{
    $id = addslashes($_GET['id']);
    $usuarios->listarUsuario($id);
}

if(isset($_POST['email']))
{
    $nome = addslashes($_POST['nome']);
    $email = addslashes($_POST['email']);

    $usuarios->editarUsuario($id, $nome, $email);
}

?>

<form action="#" method="post"> 
    <input type="text" name="nome" value="<?php echo $usuarios->getNome(); ?>" /> <br>
    <input type="text" name="email" value="<?php echo $usuarios->getEmail();?>" /> <br>
    <button>Editar</button>
</form>
<?php
require 'header.php';
require '../class/Database.class.php';
require '../class/Usuarios.class.php';
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
<div class="app">
    <div class="container">
            <div class="form">
                <form action="#" method="post"> 
                    <h4>Editando o usuário : </h4> <h6> <?php echo $usuarios->getNome(); ?> </h6> <br>
                    <input type="text" name="nome" value="<?php echo $usuarios->getNome(); ?>" /> <br>
                    <input type="email" name="email" value="<?php echo $usuarios->getEmail();?>" /> <br>
                    <button class="button-primary button-lg">Editar Usuário</button> <br>
                    <button class="button-danger button-lg"><a href="../index.php">Voltar para o painel</a></button>

                </form>
            </div>
    </div>
</div>
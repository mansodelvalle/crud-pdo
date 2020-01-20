
<?php require 'header.php'; ?>

<?php
        require '../class/Database.class.php';
        require '../class/Usuarios.class.php';
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

<div class="app">
    <div class="container">
            <div class="form">
                <form action="#" method="post"> 
                    <h4>Cadastrar Usuário</h4><br>
                    <input type="text" name="nome" placeholder="seuemail@gmail.com" /> <br>
                    <input type="email" name="email" placeholder="Sua melhor senha"/> <br>
                    <button class="button-primary button-lg">Adicionar Usuário</button> <br>
                    <button class="button-danger button-lg"><a href="../index.php">Voltar para o painel</a></button>
                </form>
            </div>
    </div>
</div>
<?php

class Usuarios extends Database
{
    private $id;
    private $nome;
    private $email;
    private $senha;

    public function __construct()
    {
        $this->conectar();
    }  

    public function getId()
    {
        return $this->id;
    }
    public function getNome()
    {
        return $this->nome;
    }
    public function getEmail()
    {
        return $this->email;
    }
    public function getSenha()
    {
        return $this->senha;
    }


    public function listarUsuarios()
    {
       $sql = "SELECT * FROM usuarios";
       $sql = $this->conn->query($sql);

       if($sql->rowCount() > 0){
            foreach($sql->fetchAll(PDO::FETCH_OBJ) as $row){
            echo '<tr>';
            echo    '<td>'.$row->id.'</td>';
            echo    '<td>'.$row->nome.'</td>';
            echo    '<td>'.$row->email.'</td>';
            echo    '<td>'.$row->senha.'</td>';
            echo    "<td><a href='deletar.php?id=".$row->id."'>Deletar</a></td>";
            echo    "<td><a href='editar.php?id=".$row->id."'>Editar</a></td>";
            echo '</tr>';
            }
       }
    }

    public function listarUsuario($id)
    {
        $sql = "SELECT * FROM usuarios WHERE id = ?";
        $sql = $this->conn->prepare($sql);
        $sql->execute(array($id));

        if($sql->rowCount() > 0)
        {
            $row = $sql->fetch(PDO::FETCH_ASSOC);
            $this->id = $row['id'];
            $this->nome = $row['nome'];
            $this->email = $row['email'];
            $this->senha = $row['senha'];
        }
    }

    public function editarUsuario($id,$nome, $email)
    {
        //$this->listarUsuario($id);
        $sql = "UPDATE usuarios SET nome = :nome, email = :email WHERE id = :id";
        $sql = $this->conn->prepare($sql);
        $sql->bindValue(":id", $id);
        $sql->bindValue(":nome", $nome);
        $sql->bindValue(":email", $email);
        $sql->execute();
        //$sql->execute(array($nome, $email));
        header("Location: index.php");
    
    }

    public function adicionarUsuario($nome, $email, $senha)
    {
        $sql = "INSERT INTO usuarios (nome, email, senha) VALUES (?, ?, ?)";
        $sql = $this->conn->prepare($sql);
        $sql->execute(array($nome, $email, md5($senha)));
        header("Location: index.php");
    }

    public function deletarUsuario($id)
    {
        $sql = "DELETE FROM usuarios WHERE id = ?";
        $sql = $this->conn->prepare($sql);
        $sql->execute(array($id));
        header("Location: index.php");
    }
}
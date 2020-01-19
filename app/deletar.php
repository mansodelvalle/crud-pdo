<?php

require 'class/Database.class.php';
require 'class/Usuarios.class.php';
$database = new Database;
$usuarios = new Usuarios;

if(isset($_GET['id']) && !empty($_GET['id']))
{

    $id = addslashes($_GET['id']);
    $usuarios->deletarUsuario($id);

}else{
    header("Location: index.php");
}
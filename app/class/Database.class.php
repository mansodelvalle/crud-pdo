<?php

class Database 
{
    protected $conn; 
    
    public function __construct(){
        $this->conectar();
    }

    public function conectar() {
        try {
            // Conexao com banco MySQL
            $host = "mysql669.umbler.com:41890";
            $name = "teatrofacil";
            $user = "teatrofacil";
            $pass = "marcosdelvalle";
            $this->conn = new PDO("mysql:host={$host};dbname={$name}", $user, $pass);
    
            // Define para que o PDO lance exceções na ocorrência de erros
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
            } catch (PDOException $e) {
                echo 'ERROR: ' . $e->getMessage();
            }
    }

}
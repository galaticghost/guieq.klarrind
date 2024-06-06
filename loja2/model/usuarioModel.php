<?php
require_once("conexao.php");

class Usuario extends conexao {
    private $nome;
    private $email;
    private $admin;
    
    public function getNome(){
        return $this->nome;
    }

    public function setNome($nome){
        $this->nome = $nome;
    }

    public function getEmail(){
        return $this->email;
    }

    public function setEmail($email){
        $this->email = $email;
    }

    public function getAdmin(){
        return $this->admin;
    }
    
    public function logar($email,$senha){
        $sql = "SELECT nome,email,admin FROM usuario WHERE email = ? AND senha = ?;";
        $stmt = $this->conn->prepare($sql);
        $stmt->bind_param('ss',$email,$senha);
        $stmt->execute();
        $result = $stmt->get_result();
        if(mysqli_num_rows($result) == 0){
            $stmt->close();
            return null;
        }
        else{
            list($nome, $email, $admin) = mysqli_fetch_row($result);
            $stmt->close();
            $this->nome = $nome;
            $this->email = $email;
            $this->admin = $admin;
            return 1;
        }
    }
} 
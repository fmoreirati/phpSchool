<?php
require_once("./dao/conecta.php");

class Aluno{

    public $nome;
    public $email;
    public $tel;
    public $pws;
    public $datanasc;
    public $ativo = true;

    public function salvar(){
        try{
            $date = date("Y-m-d", strtotime($this->datanasc));
            $pass = crypt($this->pws, $this->email);
            $dao = new DAO;
            var_dump($dao);
            $sql = "INSERT into aluno(nome, email, tel, ativo, pws, datanasc) VALUES (:nome, :email, :tel, :ativo, :senha, :datanasc)";
            $stman = $dao->conecta()->prepare($sql);
            $stman->bindParam(":nome", $this->nome);
            $stman->bindParam(":email", $this->email);
            $stman->bindParam(":tel", $this->tel);
            $stman->bindParam(":ativo", $this->ativo);
            $stman->bindParam(":datanasc",$date);
            $stman->bindParam(":senha",$pass);
            $stman->execute();
         }catch(Exception $e){
            throw new Exception("Erro ao Cadastrar", $e->getMessage());
         }
    }

    public function valida(){
        $error = ""; 
        if ($this->nome == ""){
            $error .= "Nome em branco.<br>";
        }

        if ($this->email == ""){
            $error .= "E-mail em branco.<br>";
        }

        if ($this->tel == ""){
            $error .= "Telefone em branco.<br>";
        }

        if ($this->pws == ""){
            $error .= "Senha em branco.<br>";
        }

        if ($error != ""){
            throw new Exception($error);
            return false;
        }

        return true;       
    }
}
<?php
class Aluno{

    public $nome;
    public $email;
    public $tel;
    public $pws;
    public $ativo = true;

    public function salvar(){
        echo("Cadastrado!!");
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
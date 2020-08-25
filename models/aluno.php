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
}
<?php
require_once("./models/aluno.php");
require_once("./pages/message.php");

if(!empty($_POST)){
    $aluno = new Aluno;
    $aluno->nome = $_POST['nome'];
    $aluno->email = $_POST['email'];
    $aluno->tel = $_POST['tel'];
    $aluno->pws = $_POST['pws'];

    var_dump($aluno);

    try{
        $aluno->valida();
        $aluno->salvar();
        aviso("Cadastrado com sucesso!");
    } catch(Exception $erro){
       error($erro->getMessage());
    }
    
}
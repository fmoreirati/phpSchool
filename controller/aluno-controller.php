<?php
require_once("./models/aluno.php");

if(!empty($_POST)){
    $aluno = new Aluno;
    $aluno->nome = $_POST['nome'];
    $aluno->email = $_POST['email'];
    $aluno->tel = $_POST['tel'];
    $aluno->senha = $_POST['pws'];

    var_dump($aluno);

}
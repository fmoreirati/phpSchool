<?php
require_once("./models/aluno.php");
require_once("./pages/message.php");
$aluno = new Aluno;

if(!empty($_POST))
{
    switch ($_POST["action"]) {
        case "cad":
            cadastro();
        break;

        case "log":
            entrar();
        break;
        
        default:
            echo "<script> window.location.href = 'http://localhost/phpSchool/index.php';</script>";
        break;
    }

}

function cadastro()
{       
    $aluno = new Aluno;
    $aluno->nome = $_POST['nome'];
    $aluno->email = $_POST['email'];
    $aluno->tel = $_POST['tel'];
    $aluno->pws = $_POST['pws'];
    $aluno->datanasc = $_POST['datanasc'];
    $confpws = $_POST['confpws'];
    try{
        $aluno->valida($confpws);
        $aluno->salvar();
        aviso("Cadastrado com sucesso!");
        $aluno = new Aluno;
        echo "<script> this.form.reset();</script>";
        //echo "<script> window.location.href = 'http://localhost/phpSchool/index.php';</script>";
        //header("Location: http://localhost/phpSchool/index.php");
    } catch(Exception $erro){
    error($erro->getMessage());
    }   
}

function entrar()
{
    $aluno = new Aluno;
    $email = $_POST['email'];
    $pws = $_POST['pws'];
    try{
        $result = $aluno->login($email, $pws);
        var_dump($result);
        //echo "<script> window.location.href = 'http://localhost/phpSchool/index.php';</script>";
        //header("Location: http://localhost/phpSchool/index.php");
    } catch(Exception $erro){
    error($erro->getMessage());
    }   
}

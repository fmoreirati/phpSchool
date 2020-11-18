<?php 
    include_once("validauser.php");
    require_once("./controller/aluno-controller.php");
    
?>

<section class="container">
    <Table class="table">
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>E-mail</th>
            <th>Tel.</th>
            <th>Data Nasc.</th>
            <th>Ativo</th>
            <th> / </th>
            <th> X </th>
        </tr>
        <?php for( $x = 0; $x < sizeof($alunos) ; $x++){?>
        <tr>
            <td><?=$alunos[$x]->id?></td>
            <td><?=$alunos[$x]->nome ?></td>
            <td><?=$alunos[$x]->email ?></td>
            <td><?=$alunos[$x]->tel?></td>
            <td><?=$alunos[$x]->datanasc ?></td>
            <td><?=$alunos[$x]->ativo ?></td>
        </tr>
        <?php } ?>

    </Table>
</section>
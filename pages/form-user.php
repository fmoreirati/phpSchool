<?php 
    require_once("./controller/aluno-controller.php");
?>

<section class="container">
    <form action="" method="POST">
        <div class="form-group">
            <label for="nome">Nome</label>
            <input type="text" class="form-control" id="nome" aria-describedby="nomeHelp" placeholder="Digite seu nome" name="nome">
            <small id="nomeHelp" class="form-text text-muted"></small>
        </div>

        <div class="form-group">
            <label for="email">E-mail</label>
            <input type="email" class="form-control" id="email" aria-describedby="emailHelp"
                placeholder="Digite seu e-mail" name="email">
            <small id="emailHelp" class="form-text text-muted"></small>
        </div>

        <div class="form-group">
            <label for="tel">Telefone</label>
            <input type="tel" class="form-control" id="tel" aria-describedby="telHelp"
                placeholder="Digite seu telefone" name="tel">
            <small id="telHelp" class="form-text text-muted"></small>
        </div>

        <div class="form-group">
            <label for="pws">Senha</label>
            <input type="password" class="form-control" id="pws" aria-describedby="pwsHelp"
                placeholder="Digite seu senha" name="pws">
            <small id="pwsHelp" class="form-text text-muted"></small>
        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-primary">Salvar</button>
        </div>

    </form>
</section>
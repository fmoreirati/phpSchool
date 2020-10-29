<?php 
    require_once("./controller/aluno-controller.php");
?>

<section class="container">
    <form action="" method="POST">
        <input type="hidden" name="action" value="cad">
        <div class="form-group">
            <label for="nome">Nome</label>
            <input type="text" class="form-control" id="nome" aria-describedby="nomeHelp" placeholder="Digite seu nome"
                name="nome" required value='<?=$aluno->nome?>'>
            <small id="nomeHelp" class="form-text text-muted"></small>
        </div>

        <div class="form-group">
            <label for="email">E-mail</label>
            <input type="email" class="form-control" id="email" aria-describedby="emailHelp"
                placeholder="Digite seu e-mail" name="email" required value=<?=$aluno->email?>>
            <small id="emailHelp" class="form-text text-muted"></small>
        </div>

        <div class="form-group">
            <label for="tel">Telefone</label>
            <input type="tel" class="form-control" id="tel" aria-describedby="telHelp" placeholder="Digite seu telefone"
                name="tel" value=<?=$aluno->tel?>>
            <small id="telHelp" class="form-text text-muted"></small>
        </div>

        <div class="form-group">
            <label for="datanasc">Data nascimento</label>
            <input type="date" class="form-control" id="datanasc" aria-describedby="telHelp"
                placeholder="Digite sua data de Nascimento" name="datanasc" value=<?=$aluno->datanasc?>>
            <small id="telHelp" class="form-text text-muted"></small>
        </div>

        <div class="form-group">
            <label for="pws">Senha</label>
            <input type="password" class="form-control" id="pws" aria-describedby="pwsHelp"
                placeholder="Digite seu senha" name="pws" required>
            <small id="pwsHelp" class="form-text text-muted"></small>
        </div>

        <div class="form-group">
            <label for="confpws">Confirmar Senha</label>
            <input type="password" class="form-control" id="confpws" aria-describedby="confPwsHelp"
                placeholder="Digite a confirmação da senha" name="confpws" required>
            <small id="confPwsHelp" class="form-text text-muted"></small>
        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-primary">Salvar</button>
            <button type="reset" class="btn btn-primary">Cancelar</button>
        </div>

    </form>
</section>
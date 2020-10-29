<?php 
    require_once("./controller/aluno-controller.php");
?>

<section class="container">
    <form action="" method="POST">
       <input type="hidden" name="action" value="log">
        <div class="form-group">
            <label for="email">E-mail</label>
            <input type="email" class="form-control" id="email" aria-describedby="emailHelp"
                placeholder="Digite seu e-mail" name="email" required>
            <small id="emailHelp" class="form-text text-muted"></small>
        </div>
    
        <div class="form-group">
            <label for="pws">Senha</label>
            <input type="password" class="form-control" id="pws" aria-describedby="pwsHelp"
                placeholder="Digite seu senha" name="pws" required>
            <small id="pwsHelp" class="form-text text-muted"></small>
        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-primary">Salvar</button>
            <button type="reset" class="btn btn-primary">Cancelar</button>
        </div>

    </form>
</section>
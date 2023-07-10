<?php
include_once("templates/header.php")
?>

<div class="container">
    <h1>Criando Contato</h1>
    <a href="index.php" id="back-home" class="btn btn-outline-primary">voltar</a>


    <form action="<?= $BASE_URL ?>config/process.php" method="POST" style="max-width: 500px; margin:0 auto;">
        <input type="hidden" name="type" value="create">
        <div class="mb-3">
            <label for="name" class="form-label">Nome do Contato</label>
            <input type="text" name="name" class="form-control" placeholder="Digite o nome" required>
        </div>
        <div class="mb-3">
            <label for="phone" class="form-label">Número de Contato</label>
            <input type="text" name="phone" class="form-control" placeholder="Digite o Contato" required>
        </div>
        <div class="form-floating">
            <textarea class="form-control" placeholder="Deixa sua obervação" name="observations" style="height: 100px"></textarea>
            <label for="observations">Obervações</label>
        </div>
        <br>
        <button type="submit" class="btn btn-primary">Cadastrar</button>
    </form>
</div>

<?php
include_once("templates/footer.php")
?>
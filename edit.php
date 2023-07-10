<?php
include_once("templates/header.php")
?>

<div class="container">
    <h1>Editando Contato</h1>
    <a href="index.php" id="back-home" class="btn btn-outline-primary">voltar </a>


    <form action="<?= $BASE_URL ?>config/process.php" method="POST">
        <input type="hidden" name="type" value="edit">
        <input type="hidden" name="id" value="<?= $contact["id"] ?>">

        <div class="mb-3">
            <label for="name" class="form-label">Nome do Contato:</label>
            <input type="text" class="form-control" placeholder="Digite o nome" name="name" value="<?= $contact["name"] ?>" required>
        </div>
        <div class="mb-3">
            <label for="phone" class="form-label">Número de Contato</label>
            <input type="phone" class="form-control" placeholder="Digite o Contato" name="phone" value="<?= $contact["phone"] ?>" required>
        </div>
        <div class="form-floating">
            <textarea class="form-control" placeholder="Deixa sua obervação" name="observations" style="height: 100px"><?= $contact["observations"] ?></textarea>
            <label for="observations">Obervações</label>
        </div>
        <br>
        <button type="submit" class="btn btn-primary">Atualizar</button>
    </form>
</div>

<?php
include_once("templates/footer.php")
?>
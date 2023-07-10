<?php
include_once("templates/header.php");
?>

<div class="container" id="view-contact-container">

    <a href="index.php" id="back-home" class="btn btn-outline-primary">voltar</a>

    <h1 id=" main-title"> <?= $contact["name"] ?></h1>
    <p class="bold">Telefone:</p>
    <p><?= $contact["phone"] ?></p>
    <p class="bold">Obervações:</p>
    <p><?= $contact["observations"] ?></p>
</div>

<?php
include_once("templates/footer.php")
?>
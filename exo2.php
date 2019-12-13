<?php
$exercice = 'Exercice2';
include 'header.php';
$firstname = '';
$lastname = '';
$age = 0;
if (isset($_GET['lastname'])) {
    $lastname = $_GET['lastname'];
}
if (isset($_GET['firstname'])) {
    $firstname = $_GET['firstname'];
}
if (isset($_GET['age'])) {
    $age = $_GET['age'];
}
?>
<div class="container">
    <h1>Exercice 2</h1>
    <p class="display-4">
        Faire une page index.php. Tester sur cette page que le paramètre age existe et si c'est le cas l'afficher 
        sinon le signaler : index.php?lastname=Nemare&firstname=Jean
    </p>
    <a title="voir le profil utilisateur" href="index.php?lastname=Nemare&amp;firstname=Jean&amp;age=">index.php?lastname=Nemare&firstname&Jean&age</a>
    <p>Paramètre $firstname = <?= $firstname ?></p>
    <p>Paramètre $lastname =  <?= $lastname ?></p>
    <?php if (isset($_GET['age']) && $_GET['age'] != '') { ?>
        <p>Paramètre $age =  <?= $age ?></p>
    <?php } ?>
</div>
</body>
</html>


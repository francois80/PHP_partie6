<?php
$exercice = 'Exercice5';
include 'header.php';
$week = '';
if(!empty($_GET['week'])){
    $week = $_GET['week'];
}
?>
<div class="container">
    <h1>Exercice 5</h1>
    <p class="display-4">
        Faire une page index.php. Tester sur cette page que tous les paramètres de cette URL existent et les afficher: 
        index.php?week=12
    </p>
    <p>
        <a title="test url" href="index.php?week=12">a href='index.php?week=12'</a>
    <p>
    <p>Paramètre week = <?= $week ?></p>
</div>
</body>
</html>

    
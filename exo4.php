<?php
$exercice = 'Exercice4';
include 'header.php';
$language = '';
$server = '';
if(!empty($_GET['language'])){
    $language = $_GET['language'];
}
if(!empty($_GET['server'])){
    $server = $_GET['server'];
}
?>
<div class="container">
    <h1>Exercice 4</h1>
    <p class="display-4">
        Faire une page index.php. Tester sur cette page que tous les paramètres de cette URL existent et les afficher: 
        index.php?language=PHP&server=LAMP
    </p>
    <p>
        <a title="test url" href="index.php?language=PHP&amp;server=LAMP">a href='index.php?language=PHP&server=LAMP'</a>
    <p>
    <p>Paramètre language = <?= $language ?></p>
    <p>Paramètre server =  <?= $server ?></p>
</div>
</body>
</html>

    
<?php
$exercice = 'Exercice6';
include 'header.php';
$building = '';
$room = '';
if(!empty($_GET['building'])){
    $building = $_GET['building'];
}
if(!empty($_GET['room'])){
    $room = $_GET['room'];
}
?>
<div class="container">
    <h1>Exercice 6</h1>
    <p class="display-4">
        Faire une page index.php. Tester sur cette page que tous les paramètres de cette URL existent et les afficher: 
        index.php?building=12&room=101
    </p>
    <p>
        <a title="test url" href="index.php?building=12&amp;room=101">a href='index.php?building=12&room=101'</a>
    <p>
    <p>Paramètre building = <?= $building ?></p>
    <p>Paramètre room =  <?= $room ?></p>
</div>
</body>
</html>

    
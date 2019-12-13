<?php
$exercice = 'Exercice3';
include 'header.php';
$startDate = '';
$endDate = '';
if(!empty($_GET['startDate'])){
    $startDate = $_GET['startDate'];
}
if(!empty($_GET['endDate'])){
    $endDate = $_GET['endDate'];
}
?>
<div class="container">
    <h1>Exercice 3</h1>
    <p class="display-4">
        Faire une page index.php. Tester sur cette page que tous les paramètres de cette URL existent et les afficher:
        index.php?startDate=2/05/2016&endDate=27/11/2016
    </p>
    <p>
        <a title="test url" href="index.php?startDate=2/05/2016&amp;endDate=27/11/2016">a href='index.php?startDate=2/05/2016&endDate=27/11/2016'</a>
    <p>
    <p>Paramètre startDate = <?= $startDate ?></p>
    <p>Paramètre endDate =  <?= $endDate ?></p>
</div>
</body>
</html>

    
<?php
$exercice = 'Exercice1';
include 'header.php';
$firstname = '';
$lastname = '';
if(!empty($_GET['lastname'])){
    $lastname = $_GET['lastname'];
}
if(!empty($_GET['firstname'])){
    $firstname = $_GET['firstname'];
}
?>
<h3>
    Faire une page index.php. Tester sur cette page que tous les paramètres de cette URL existent et 
    les afficher: index.php?lastname=Nemare&firstname=Jean
</h3>

<p><a href="index.php?lastname=Nemare&firstname=Jean">index.php?lastname=Nemare&firstname=Jean</a></p>
<?php
echo $firstname. '  '.$lastname;
?>
</body>
</html>

    
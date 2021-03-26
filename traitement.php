<?php 

$pdo = new PDO('mysql:host=localhost; dbname=animaux', 'visiteur', 'root');

function add($nom, $race) {
    global $pdo;
    $add = $pdo->prepare("INSERT INTO animaux.chien(`nom`,`race`) VALUE(?,?)");
    $add->bindParam(1,$nom);
    $add->bindParam(2,$race);
    $add->execute();
    $add;
}


function select() {
    global $pdo;
    $select = $pdo->query('SELECT * FROM animaux.chien');
    $select = $select->fetchAll(PDO::FETCH_OBJ);  
    return $select;
}
$chien = select();

if(isset($_REQUEST['nom']) && isset($_REQUEST['race'])) {
    $nom = $_REQUEST['nom'];
    $race = $_REQUEST['race']; 
    add($nom, $race);
    $chien = select();
}


?>
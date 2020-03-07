
<?php
require('application/database.php');
session_start();
if(isset($_SESSION['id_customer'])){
    $customerConnect=getCustomer($_SESSION['id_customer']);
}
if(!empty($_GET) && isset($_GET)){
$massif =$_GET['massif'];
$station =$_GET['station'];
$Nb_Pers =$_GET['Nb_Pers'];
$price =$_GET['price'];
$services = implode('-', $_GET['services']);
}

$pdo=connect();
$req=$pdo->prepare('SELECT * From chalet WHERE `massif`= ? AND `station` = ? AND `Nb_Pers` = ? AND `price` <= ? AND `services` = ? ORDER BY `price`');
    $req->execute(array($massif, $station, $Nb_Pers, $price, $services));
    $search=$req->fetchAll(PDO::FETCH_ASSOC);

if(!$search){
    header('Location:chaletNotFound.php');
}
    
//Sélection et affichage du template PHTML.
$template = 'searchChalet';
include 'layout.phtml';





        
<?php
require('application/database.php');
session_start();
if(isset($_SESSION['id_customer'])){
    $customerConnect=getCustomer($_SESSION['id_customer']);
}

if(isset($_POST['submit'])){
    $name=$_POST["url_video"];
    $pdo = connect();
    $req = $pdo->prepare('INSERT INTO videos(`url_video`) VALUES(?)');
    $req->execute(array($name));
    header('Location:displayVideo.php?id='.$_SESSION['id_customer']);

}

// Sélection et affichage du template PHTML.
$template = 'addVideo';
include 'layout.phtml';
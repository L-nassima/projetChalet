<?php
require('application/database.php');
session_start();
if(isset($_SESSION['id_customer'])){
    $customerConnect=getCustomer($_SESSION['id_customer']);
}
if(!empty($_POST)){
$id = $_GET['id']; 
$titre=htmlspecialchars($_POST['title']);
$contenu=htmlspecialchars($_POST['content']);
$auteur=htmlspecialchars($_POST['auteur']);

addPostBlog($titre, $contenu, $customerConnect['id_customer'], $id);

header('Location:indexBlog.php?id='.$customerConnect['id_customer']);
}

// Sélection et affichage du template PHTML.
$template = 'addPostBlog';
include 'layout.phtml';



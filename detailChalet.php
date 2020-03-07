<?php
require 'application/database.php';
require 'contact.php';
session_start();
if(isset($_SESSION['id_customer'])){
    $customerConnect=getCustomer($_SESSION['id_customer']);

    $results=showPosts();
}

$id = $_GET['id'];
$dataChalet = detailsChalet($id);
$id_chalet = $_GET['id']; 

//Sélection et affichage du template PHTML.
$template = 'detailChalet';
include 'layout.phtml';


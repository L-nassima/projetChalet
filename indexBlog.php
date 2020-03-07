<?php
require('application/database.php');
session_start();
if(isset($_SESSION['id_customer'])){
    $customerConnect=getCustomer($_SESSION['id_customer']);
}else{
    header('Location: login.php');
}

$results=showPosts();

//Sélection et affichage du template PHTML.
$template = 'indexBlog';
include 'layout.phtml';




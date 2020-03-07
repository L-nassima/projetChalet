<?php
require('application/database.php');
session_start();
if(isset($_SESSION['id_customer'])){
    $pdo=connect();
    $customerConnect=getCustomer($_SESSION['id_customer']);
}

//Sélection et affichage du template PHTML.
$template = 'detailsProfileCustomer';
include 'layout.phtml';



<?php
require('application/database.php');
session_start();
if(isset($_SESSION['id_customer'])){
    $customerConnect=getCustomer($_SESSION['id_customer']);
}

$dataBestPromotion = bestPromotion();

// Sélection et affichage du template PHTML.
$template = 'customerProfile';
include 'layout.phtml';


  



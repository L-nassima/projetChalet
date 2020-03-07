<?php
require('application/database.php');
session_start();
if(isset($_SESSION['id_customer'])){
    $customerConnect=getCustomer($_SESSION['id_customer']);
}

$data = selectChalet();
$best = bestChalet();

//Sélection et affichage du template PHTML.
$template = 'index';
include 'layout.phtml';

?>

      
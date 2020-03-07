<?php
require('application/database.php');
session_start();
if(isset($_SESSION['id_customer'])){
    $customerConnect=getCustomer($_SESSION['id_customer']);
}
$service= $_GET['id'];
$result = chaletService($service);

// Sélection et affichage du template PHTML.
$template = 'chalet';
include 'layout.phtml';




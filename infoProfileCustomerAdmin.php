<?php
require('application/database.php');
session_start();
if(isset($_SESSION['id_customer'])){
    $customerConnect=getCustomer($_SESSION['id_customer']);
}
else{
    header('Location:login.php');
}
$list = listCustomers();

//Sélection et affichage du template PHTML.
$template = 'infoProfileCustomerAdmin';
include 'layout.phtml';



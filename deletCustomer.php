<?php 
require('application/database.php');

$id=$_GET['id'];
deletCustomer($id);

header('Location: infoProfileCustomerAdmin.php');

?>
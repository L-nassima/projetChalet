<?php
require('application/database.php');
$id=$_GET['id'];
deletChalet($id);
header('Location:chaletSelectionAdmin.php?id='.$id);
?>
<?php 
require('application/database.php');

$id=$_GET['id'];
deletPostBlog($id);

header('Location: adminBlog.php');

?>
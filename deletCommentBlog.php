<?php
session_start(); 
require('application/database.php');

$id = $_GET['id'];
$delet=deletCommentBlog($id);

header('Location:detailsPostBlog.php');

?>
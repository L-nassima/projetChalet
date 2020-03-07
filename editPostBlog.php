<?php
require('application/database.php');
session_start();
if(isset($_SESSION['id_customer'])){
    $customerConnect=getCustomer($_SESSION['id_customer']);
}

$id = $_GET['id'];
$results=detailsPostBlog($id);
$result=$results[0];
if(!empty($_POST)){
    if(isset($_POST['newTitle']) && !empty($_POST['newTitle']) && $_POST['newTitle'] != $result['title']){
        $newTitle=htmlspecialchars($_POST['newTitle']);
        $updateTitlePost=updatePostTitle($newTitle,$id);
        header('Location:detailsPostBlog.php?id='.$id);
    }
    
    if(isset($_POST['newPost']) && !empty($_POST['newPost']) && $_POST['newPost'] != $result['content']){
        $newContent=htmlspecialchars($_POST['newPost']);
        $updateContentPost=updatePostContent($newContent,$id);
        header('Location:detailsPostBlog.php?id='.$id);
    }
    $user=htmlspecialchars($_POST['auteur']);
}

//Sélection et affichage du template PHTML.
$template = 'editPostBlog';
include 'layout.phtml';


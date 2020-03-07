<?php
require('application/database.php');
session_start();
if(isset($_SESSION['id_customer'])){
	$customerConnect=getCustomer($_SESSION['id_customer']);		
}

$id=$_GET['id'];
$post=detailsPostBlog($id);

if(!empty($_POST)){
				
	$pseudo = htmlspecialchars($_POST['pseudo']);	
	$commentaire = htmlspecialchars($_POST['commentaire']);
	$errores=array();
	if(empty($pseudo)){
		$errores['pseudo'] ='entrer un pseudo';
	}

	if(empty($commentaire)){
		$errores['commentaire'] ='entrer un commentaire';
	}

	if(count($errores)==0){
		addCommentBlog($commentaire, $pseudo, $id);
		$success='votre commentaire à bien été ajouté !!';
		unset($pseudo);
		unset($commentaire);
	}
}

$commentBlog=showCommentBlog($id);

//Sélection et affichage du template PHTML.
$template = 'detailsPostBlog';
include 'layout.phtml';


<?php

if(!empty($_POST)){
    $firstName=$_POST['firstName'];
    $lastName=$_POST['lastName'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $message=$_POST['message'];
   
	$errores=array();
	if(empty($firstName)){
		$errores['firstName'] = 'Entrez votre nom';
    }
    if(empty($lastName)){
		$errores['lastName'] = 'Entrez votre prénom';
	}
	if(empty($email)){
		$errores['email'] = 'Entrez un e-mail';
	}
	if(empty($phone)){
		$errores['phone'] = 'Entrez un numéro de téléphone';
    }
    if(empty($message)){
		$errores['message'] = 'Entrez un message';
	}
	if(count($errores)==0){
        $id_chalet = $_GET['id'];
		$contact = information($firstName, $lastName, $email, $phone, $message, $id_chalet);
		$success= 'Votre formulaire a bien était envoyer !!';
        unset($firstName);
        unset($lastName);
        unset($email);
        unset($phone);
		unset($message);
	
	}
}



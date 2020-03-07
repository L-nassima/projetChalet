<?php
require('application/database.php');
session_start();

//Si le cookie existe l'utilisateur se connecte automatiquemant
include('cookie.php');

if(!empty($_POST) && isset($_POST)){
    $email=htmlspecialchars($_POST['email']);
    $password=sha1($_POST['password']);
   
    if(!empty($email) && !empty($password)){
        $pdo=connect();
        $req=$pdo->prepare('SELECT * FROM `customers` WHERE `email`=? AND `password`=?');
        $req->execute(array($email,$password));
        $userExist=$req->rowCount();
    
        if($userExist==1){

            if (isset($_POST['remember-me'])){
                setcookie('email',$email,time() +365*24*3600, '/',null,false,true);
                setcookie('password',$password,time() +365*24*3600, '/',null,false,true);
            }
            $customerLogin=$req->fetch();
            $_SESSION['id_customer']=$customerLogin['id_customer'];
            $_SESSION['password']=$customerLogin['password'];
            $_SESSION['email']=$customerLogin['email'];
    
             header('Location:customerProfile.php?id='.$_SESSION['id_customer']);   
        }
        else{$errors="Votre mot de passe ou votre email n'est pas valide !!";}
    }
    else{$errors='Tout les champs doivent être remplis !!';}
}

// Sélection et affichage du template PHTML.
$template = 'login';
include 'layout.phtml';



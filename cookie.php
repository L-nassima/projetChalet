<?php
// l'utilisateur se connecte automatiquement si les cookies exxistent
    if(!isset($_SESSION['id_customer']) 
        && isset($_COOKIE['email']) && isset($_COOKIE['password'])
        && !empty($_COOKIE['email']) && !empty($_COOKIE['password'])){
        
        $pdo=connect();
        $req=$pdo->prepare('SELECT * FROM `customers` WHERE `email`=? AND `password`=?');
        $req->execute(array($_COOKIE['email'],$_COOKIE['password']));
        $userExist=$req->rowCount();
    
        if($userExist==1){
    
            $customerLogin=$req->fetch();
            $_SESSION['id_customer']=$customerLogin['id_customer'];
            $_SESSION['password']=$customerLogin['password'];
            $_SESSION['email']=$customerLogin['email'];
        }
    }
    
?>

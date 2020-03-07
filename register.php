<?php
require('application/database.php');
if(!empty($_POST) && isset($_POST)){
    $firstName=htmlspecialchars($_POST['firstName']);
    $lastName=htmlspecialchars($_POST['lastName']);
    $pseudo=htmlspecialchars($_POST['pseudo']);
    $password=sha1($_POST['password']);
    $password_confirm=sha1($_POST['password_confirm']);
    $email=htmlspecialchars($_POST['email']);
    $email_confirm=htmlspecialchars($_POST['email_confirm']);
    $adress=htmlspecialchars($_POST['adress']);
    $postal_code=htmlspecialchars($_POST['postal_code']);
    $phone=htmlspecialchars($_POST['phone']);
    $errors=array();
    if(!empty($firstName)){
        if(!empty($lastName)){
            if(!empty($pseudo)){
                if(strlen($pseudo)<=10){
                    $pdo = connect();
                    $req=$pdo->prepare('SELECT `pseudo` FROM `customers` WHERE `pseudo`=?');
                    $req->execute(array($pseudo));
                    $pseudoExist=$req->rowCount();
                    if($pseudoExist==0){    
                        if(!empty($password)){
                            if(!empty($password_confirm)){
                                if($password==$password_confirm){
                                    if(!empty($email)){
                                        if(filter_var($email,FILTER_VALIDATE_EMAIL) && !preg_match("#^[a-zA-Z0-9._-]+@[a-zA-Z0-9].[a-z]{2,4}$#", $email)){
                                            $pdo = connect();
                                            $req=$pdo->prepare('SELECT `email` FROM `customers` WHERE `email`=?');
                                            $req->execute(array($email));
                                            $emailExite=$req->rowCount();
                                            if($emailExite==0){
                                                if(!empty($email_confirm)){
                                                    if($email==$email_confirm){
                                                        if(!empty($adress)){
                                                            if(!empty($postal_code)){
                                                                if(!empty($phone)){
                                                                    if(preg_match("#^\d{6,10}$#",$phone)){
                                                                        $success='Votre compte à été créer avec succé !!';
                                                                        registerCustomer($firstName,$lastName,$pseudo,$email,$password,$phone,$adress,$postal_code);                                            
                                                                        unset($firstName);
                                                                        unset($lastName);
                                                                        unset($pseudo);
                                                                        unset($email);
                                                                        unset($password);
                                                                        unset($phone);
                                                                        unset($adress);
                                                                        unset($postal_code);
                                                                        header("Location:login.php");

                                                                    }           
                                                                    else{$errors['phone']="Votre numéro de téléphone n'ets pas valide !!";}
                                                                }
                                                                else{$errors['phone']='Entrez votre numéro de téléphone !!';}
                                                            }
                                                            else{$errors['postal_code']='Entrez votre code postale !!';}
                                                        }
                                                        else{$errors['adress']='Entrez votre adresse !!';}
                                                    }
                                                    else{$errors['email_confirm']='Les deux emails ne correspendent pas !!';}
                                                }
                                                else{$errors['email_confirm']='Confirmer votre email !!';}
                                            }
                                            else{$errors['email']="Cet email exite déjà !!";}
                                        }
                                        else{$errors['email']="Votre email n'est pas valide !!";}
                                    }
                                    else{$errors['email']='Entrez votre email !!';}
                                }
                                else{$errors['password_confirm']='Les deux mots de passes ne correspendent pas !!';}
                            }
                            else{$errors['password_confirm']='Confirmer votre mot de passe !!';}
                        }
                        else{$errors['password']='Entrez votre mot de passe !!';}
                    }
                    else{$errors['pseudo']='Ce pseudo existe déja!!';}
                }
                else{$errors['pseudo']='Votre pseudo doit contenir 10 caractéres maximum !!';}
            }
            else{$errors['pseudo']='Entrez votre pseudo !!';}
        }
        else{$errors['lastName']='Entrez votre prénom !!';}
    }
    else{$errors['firstName']='Entrez votre nom !!';}
}


//Sélection et affichage du template PHTML.
$template = 'register';
include 'layout.phtml';








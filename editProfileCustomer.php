<?php
require('application/database.php');
session_start();
if(isset($_SESSION['id_customer'])){
    $customerConnect=getCustomer($_SESSION['id_customer']);
}
//La mise à jour du profil de client
if(isset($_POST['newFirstName']) && !empty($_POST['newFirstName']) && $_POST['newFirstName'] != $customerConnect['firstName'] ){
    $newFirstName=htmlspecialchars($_POST['newFirstName']);
    $pdo=connect();
    $req=$pdo->prepare('UPDATE `customers` SET `firstName`=? WHERE `id_customer`=?');
    $req->execute(array($newFirstName,$customerConnect['id_customer']));
    header('Location:detailsProfileCustomer.php?id='.$customerConnect['id_customer']);
}

if(isset($_POST['newLastName']) && !empty($_POST['newLastName']) && $_POST['newLastName'] != $customerConnect['lastName'] ){
        $newLastName=htmlspecialchars($_POST['newLastName']);
        $pdo=connect();
        $req=$pdo->prepare('UPDATE `customers` SET `lastName`=? WHERE `id_customer`=?');
        $req->execute(array($newLastName,$customerConnect['id_customer']));
        header('Location:detailsProfileCustomer.php?id='.$customerConnect['id_customer']);
}

if(isset($_POST['newPseudo']) && !empty($_POST['newPseudo']) && $_POST['newPseudo'] != $customerConnect['pseudo'] ){
    $newPseudo=htmlspecialchars($_POST['newPseudo']);
    $pdo=connect();
    $req=$pdo->prepare('UPDATE `customers` SET `pseudo`=? WHERE `id_customer`=?');
    $req->execute(array($newPseudo,$customerConnect['id_customer']));
    header('Location:detailsProfileCustomer.php?id='.$customerConnect['id_customer']);
}

if(isset($_POST['newPassword']) && !empty($_POST['newPassword']) && $_POST['newPassword'] != $customerConnect['password'] ){
    $newPassword=sha1($_POST['newPassword']);
    $pdo=connect();
    $req=$pdo->prepare('UPDATE `customers` SET `password`=? WHERE `id_customer`=?');
    $req->execute(array($newPassword,$customerConnect['id_customer']));
    header('Location:detailsProfileCustomer.php?id='.$customerConnect['id_customer']);
}

if(isset($_POST['newEmail']) && !empty($_POST['newEmail']) && $_POST['newEmail'] != $customerConnect['email'] ){
    $newEmail1=htmlspecialchars($_POST['newEmail']);
    $pdo=connect();
    $req=$pdo->prepare('UPDATE `customers` SET `email`=? WHERE `id_customer`=?');
    $req->execute(array($newEmail1,$customerConnect['id_customer']));
    header('Location:detailsProfileCustomer.php?id='.$customerConnect['id_customer']);
}

if(isset($_POST['newAdress']) && !empty($_POST['newAdress']) && $_POST['newAdress'] != $customerConnect['adress'] ){
    $newAdress=htmlspecialchars($_POST['newAdress']);
    $pdo=connect();
    $req=$pdo->prepare('UPDATE `customers` SET `adress`=? WHERE `id_customer`=?');
    $req->execute(array($newAdress,$customerConnect['id_customer']));
    header('Location:detailsProfileCustomer.php?id='.$customerConnect['id_customer']);
}

if(isset($_POST['newPostal_code']) && !empty($_POST['newPostal_code']) && $_POST['newPostal_code'] != $customerConnect['newPostal_code'] ){
    $newAdress=htmlspecialchars($_POST['newPostal_code']);
    $pdo=connect();
    $req=$pdo->prepare('UPDATE `customers` SET `postal_code`=? WHERE `id_customer`=?');
    $req->execute(array($newAdress,$customerConnect['id_customer']));
    header('Location:detailsProfileCustomer.php?id='.$customerConnect['id_customer']);
}

if(isset($_POST['newPhone']) && !empty($_POST['newPhone']) && $_POST['newPhone'] != $customerConnect['phone'] ){
    $newPhoneMobile=htmlspecialchars($_POST['newPhone']);
    $pdo=connect();
    $req=$pdo->prepare('UPDATE `customers` SET `phone`=? WHERE `id_customer`=?');
    $req->execute(array($newPhoneMobile,$customerConnect['id_customer']));
    header('Location:detailsProfileCustomer.php?id='.$customerConnect['id_customer']);
}

$errors=array();
if(isset($_FILES['newProfilPicture']) AND !empty($_FILES['newProfilPicture']['name'])){
    //Définir la taille maximale de l'image(2097152 = 2Mo)
    $tailleMax = 2097152;
    //Tableau de lextention valide d'une image
    $extensionsValides = array('jpg');
    if($_FILES['newProfilPicture']['size'] <= $tailleMax){
        //L'extraction de l'extention d'une image
        $extensionUpload = strtolower(substr(strrchr($_FILES['newProfilPicture']['name'], '.'), 1));
        //On verifie l'extension du fichier si il existe dans le tableau de l'extention valide
        if(in_array($extensionUpload, $extensionsValides)){
            //Le fichier(l'endroit) ou l'image serra stocker
            $chemin = "img/customers_images/".$_SESSION['id_customer'].".".$extensionUpload;
            //Créer un fichier temporaire 
            $filName=$_FILES['newProfilPicture']['tmp_name'];
            //Déterminer la taille de l'image
            $size=getimagesize($filName);
            //Déplacer le fichier vers un nouvel emplacement
            $resultat = move_uploaded_file($filName, $chemin);
            //$image_defaut= "img/customers_images/profil_defaut.jpg";
            if($resultat){
                //Créer une nouvelle image depuis un fichier
                $image = imagecreatefromjpeg($chemin);
                //Récupération des dimensions de l'image(largeur, hauteur) 
                $width=imagesx($image);
                $height=imagesy($image);
                //Définir les nouvelles dimmensions de l'image
                $new_width=70;
                $new_height=70;
                //Créer une nouvelle image vide en couleurs vraies avec des nouveaux paramètres(largeur, hauteur)
                $new_image = imagecreatetruecolor($new_width, $new_height);
                //copie une partie rectangulaire d'une image dans l'image de destination
                imagecopyresized($new_image,$image,0,0,0,0,$new_width,$new_height,$width,$height);
                //créer un fichier JPEG depuis l'image fournie
                imagejpeg($new_image,$chemin);
                //Détruit l'image et libère toute mémoire associée à cette image
                imagedestroy($image);
                $pdo=connect();
                $req= $pdo->prepare('UPDATE customers SET profile_picture = :profile_picture WHERE id_customer = :id_customer');
                $req->execute(array(
                'profile_picture' => $_SESSION['id_customer'].".".$extensionUpload,
                'id_customer' => $_SESSION['id_customer']
                    ));
                header('Location: detailsProfileCustomer.php?id='.$_SESSION['id_customer']);
            }
            else
            {
                $erreur = "Une erreure c'est produite durant l'importation de votre photo de profile";
            }
        }
        else
        {
            $erreur = "Votre photo de profile doit être au format jpg";
        }
    }
    else
    {
        $erreur = "Votre photo de profile ne doit pas dépasser 2Mo";
    }
}

//Sélection et affichage du template PHTML.
$template = 'editProfileCustomer';
include 'layout.phtml';







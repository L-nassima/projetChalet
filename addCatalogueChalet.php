<?php
require('application/database.php');
session_start();
if(isset($_SESSION['id_customer'])){
    $customerConnect=getCustomer($_SESSION['id_customer']);
}

if(!empty($_POST)){
    $name = $_POST['name'];
    $massif = $_POST['massif'];
    $station = $_POST['station'];
    $Nb_Pers = $_POST['Nb_Pers'];
    $description = $_POST['description'];
    $services = implode('-', $_POST['services']);
    $price = $_POST['price'];
    $duree_sejour = $_POST['duree_sejour'];
    $condition_une = $_POST['condition_une'];
    $condition_deux = $_POST['condition_deux'];
    $condition_trois = $_POST['condition_trois'];
    $condition_quatre = $_POST['condition_quatre'];
    $condition_cinq = $_POST['condition_cinq'];
    $prestation_une = $_POST['prestation_une'];
    $prestation_deux = $_POST['prestation_deux'];
    $prestation_trois = $_POST['prestation_trois'];
    $prestation_quatre = $_POST['prestation_quatre'];
    $prestation_cinq = $_POST['prestation_cinq'];
    $prestation_six = $_POST['prestation_six'];
    $info_une = $_POST['info_une'];
    $info_deux = $_POST['info_deux'];
    $info_trois = $_POST['info_trois'];
    $info_quatre = $_POST['info_quatre'];
    $info_cinq = $_POST['info_cinq'];
    $info_six = $_POST['info_six'];
    $promotions = $_POST['promotions'];
    $best_chalet = $_POST['best_chalet'];

    if(isset($_FILES)){
        $imagePrincipale =$_FILES['chalet']['name'];
        $image_une=$_FILES['image1']['name'];
        $image_deux=$_FILES['image2']['name'];
        $image_trois=$_FILES['image3']['name'];
        $image_quatre=$_FILES['image4']['name'];
        $image_cinq=$_FILES['image5']['name'];
        $image_six=$_FILES['image6']['name'];

        //Tableau de lextention valide d'une image
        $extentionValide=array('jpg');

        //L'extraction de l'extention d'une image
        $extentionUpload1=strtolower(substr(strrchr($imagePrincipale,'.'),1));
        $extentionUpload2=strtolower(substr(strrchr($image_une,'.'),1));
        $extentionUpload3=strtolower(substr(strrchr($image_deux,'.'),1));
        $extentionUpload4=strtolower(substr(strrchr($image_trois,'.'),1));
        $extentionUpload5=strtolower(substr(strrchr($image_quatre,'.'),1));
        $extentionUpload6=strtolower(substr(strrchr($image_cinq,'.'),1));
        $extentionUpload7=strtolower(substr(strrchr($image_six,'.'),1));

        //On verifie l'extension du fichier si il existe dans le tableau de l'extention valide
        if(in_array($extentionUpload1,$extentionValide)
            && in_array($extentionUpload2,$extentionValide)
            && in_array($extentionUpload3,$extentionValide)
            && in_array($extentionUpload4,$extentionValide)
            && in_array($extentionUpload5,$extentionValide)
            && in_array($extentionUpload6,$extentionValide)
            && in_array($extentionUpload7,$extentionValide)){
            //génération d'un code aléatoire et unique de l'image
            $url1=md5(uniqid(rand(),true));
            $url2=md5(uniqid(rand(),true));
            $url3=md5(uniqid(rand(),true));
            $url4=md5(uniqid(rand(),true));
            $url5=md5(uniqid(rand(),true));
            $url6=md5(uniqid(rand(),true));
            $url7=md5(uniqid(rand(),true));

            //Le fichier(l'endroit) ou l'image serra stocker
            $chemin1='img/slider/'.$url1.'.'.$extentionUpload1;
            $chemin2='img/slider/'.$url2.'.'.$extentionUpload2;
            $chemin3='img/slider/'.$url3.'.'.$extentionUpload3;
            $chemin4='img/slider/'.$url4.'.'.$extentionUpload4;
            $chemin5='img/slider/'.$url5.'.'.$extentionUpload5;
            $chemin6='img/slider/'.$url6.'.'.$extentionUpload6;
            $chemin7='img/slider/'.$url7.'.'.$extentionUpload7;

            //Créeation un fichier temporaire
            $filName1=$_FILES['chalet']['tmp_name'];
            $filName2=$_FILES['image1']['tmp_name'];
            $filName3=$_FILES['image2']['tmp_name'];
            $filName4=$_FILES['image3']['tmp_name'];
            $filName5=$_FILES['image4']['tmp_name'];
            $filName6=$_FILES['image5']['tmp_name'];
            $filName7=$_FILES['image6']['tmp_name'];

            //Déterminer la taille de l'image
            $size1=getimagesize($filName1);
            $size2=getimagesize($filName2);
            $size3=getimagesize($filName3);
            $size4=getimagesize($filName4);
            $size5=getimagesize($filName5);
            $size6=getimagesize($filName6);
            $size7=getimagesize($filName7);

            //Déplacer le fichier vers un nouvel emplacement
            $result1=move_uploaded_file($filName1,$chemin1);
            $result2=move_uploaded_file($filName2,$chemin2);
            $result3=move_uploaded_file($filName3,$chemin3);
            $result4=move_uploaded_file($filName4,$chemin4);
            $result5=move_uploaded_file($filName5,$chemin5);
            $result6=move_uploaded_file($filName6,$chemin6);
            $result7=move_uploaded_file($filName7,$chemin7);

            //Créeation d'une nouvelle image depuis un fichier
            $picture1=imagecreatefromjpeg($chemin1);
            $picture2=imagecreatefromjpeg($chemin2);
            $picture3=imagecreatefromjpeg($chemin3);
            $picture4=imagecreatefromjpeg($chemin4);
            $picture5=imagecreatefromjpeg($chemin5);
            $picture6=imagecreatefromjpeg($chemin6);
            $picture7=imagecreatefromjpeg($chemin7);

            //Récupération des dimensions de l'image(largeur, hauteur)
            $width1=imagesx($picture1);
            $height1=imagesy($picture1);

            $width2=imagesx($picture2);
            $height2=imagesy($picture2);

            $width3=imagesx($picture3);
            $height3=imagesy($picture3);

            $width4=imagesx($picture4);
            $height4=imagesy($picture4);

            $width5=imagesx($picture5);
            $height5=imagesy($picture5);

            $width6=imagesx($picture6);
            $height6=imagesy($picture6);

            $width7=imagesx($picture7);
            $height7=imagesy($picture7);

            //Définir les nouvelles dimmensions de l'image
            $new_width=900;
            $new_height=900;

            //Créer une nouvelle image vide en couleurs vraies avec des nouveaux paramètres(largeur, hauteur)
            $thumb1=imagecreatetruecolor($new_width,$new_height);
            $thumb2=imagecreatetruecolor($new_width,$new_height);
            $thumb3=imagecreatetruecolor($new_width,$new_height);
            $thumb4=imagecreatetruecolor($new_width,$new_height);
            $thumb5=imagecreatetruecolor($new_width,$new_height);
            $thumb6=imagecreatetruecolor($new_width,$new_height);
            $thumb7=imagecreatetruecolor($new_width,$new_height);

             //copie une partie rectangulaire d'une image dans l'image de destination
            imagecopyresized($thumb1,$picture1,0,0,0,0,$new_width,$new_height,$width1,$height1);
            imagecopyresized($thumb2,$picture2,0,0,0,0,$new_width,$new_height,$width2,$height2);
            imagecopyresized($thumb3,$picture3,0,0,0,0,$new_width,$new_height,$width3,$height3);
            imagecopyresized($thumb4,$picture4,0,0,0,0,$new_width,$new_height,$width4,$height4);
            imagecopyresized($thumb5,$picture5,0,0,0,0,$new_width,$new_height,$width5,$height5);
            imagecopyresized($thumb6,$picture6,0,0,0,0,$new_width,$new_height,$width6,$height6);
            imagecopyresized($thumb7,$picture7,0,0,0,0,$new_width,$new_height,$width7,$height7);

            //créer un fichier JPEG depuis l'image fournie
            imagejpeg($thumb1,$chemin1);
            imagejpeg($thumb2,$chemin2);
            imagejpeg($thumb3,$chemin3);
            imagejpeg($thumb4,$chemin4);
            imagejpeg($thumb5,$chemin5);
            imagejpeg($thumb6,$chemin6);
            imagejpeg($thumb7,$chemin7);

            //Détruit l'image et libère toute mémoire associée à cette image
            imagedestroy($picture1);
            imagedestroy($picture2);
            imagedestroy($picture3);
            imagedestroy($picture4);
            imagedestroy($picture5);
            imagedestroy($picture6);
            imagedestroy($picture7);
            $imagePrincipale=$url1.'.'.$extentionUpload1;
            $image_une=$url2.'.'.$extentionUpload2;
            $image_deux=$url3.'.'.$extentionUpload3;
            $image_trois=$url4.'.'.$extentionUpload4;
            $image_quatre=$url5.'.'.$extentionUpload5;
            $image_cinq=$url6.'.'.$extentionUpload6;
            $image_six=$url7.'.'.$extentionUpload7;
            addCatalogueChalet($name,$imagePrincipale,$massif,$station,$Nb_Pers,$description,$services,
            $price,$duree_sejour,$image_une,$image_deux,$image_trois,$image_quatre,$image_cinq,$image_six,
            $condition_une,$condition_deux,$condition_trois,$condition_quatre,$condition_cinq,$prestation_une,
            $prestation_deux,$prestation_trois,$prestation_quatre,$prestation_cinq,$prestation_six,$info_une,
            $info_deux,$info_trois,$info_quatre,$info_cinq,$info_six,$promotions,$best_chalet);
            header('Location:chaletSelection.php?id='.$_SESSION['id_customer']);
        }
    }
}

// Sélection et affichage du template PHTML.
$template = 'addCatalogueChalet';
include 'layout.phtml';



  
    
<?php
require('application/database.php');
session_start();
if(isset($_SESSION['id_customer'])){
    $customerConnect=getCustomer($_SESSION['id_customer']);
}

$id=$_GET['id'];
$dataChalet = detailsChalet($id);
//$descriptions=descriptionChalet($id);
$dataChalets=$dataChalet[0];

//La mise à jour des chalets
if(!empty($_POST['newName']) && $_POST['newName']!=$dataChalets['name']){
    $newName=$_POST['newName'];
    $newName=editChaletName($newName,$id);
    header('Location:chaletSelectionAdmin.php?id='.$_SESSION['id_customer']);
}

if(!empty($_POST['newMassif']) && $_POST['newMassif']!= $dataChalets['massif']){
    $newMassif=$_POST['newMassif'];
    $newMassif=editChaletMassif($newMassif,$id);
    header('Location:chaletSelectionAdmin.php?id='.$_SESSION['id_customer']);
}

if(!empty($_POST['newStation']) && $_POST['newStation']!= $dataChalets['station']){
    $newStation=$_POST['newStation'];
    $newStation=editChaletStation($newStation,$id);
    header('Location:chaletSelectionAdmin.php?id='.$_SESSION['id_customer']);
}

if(!empty($_POST['newNb_Pers']) && $_POST['newNb_Pers']!= $dataChalets['Nb_Pers']){
    $newNb_Pers=$_POST['newNb_Pers'];
    $newNb_Pers=editChaletNb_Pers($newNb_Pers,$id);
    header('Location:chaletSelectionAdmin.php?id='.$_SESSION['id_customer']);
}

if(!empty($_POST['newDescription']) && $_POST['newDescription']!= $dataChalets['description']){
    $newDescription=$_POST['newDescription'];
    $newDescription=editChaletDescription($newDescription,$id);
    header('Location:chaletSelectionAdmin.php?id='.$_SESSION['id_customer']);
}

if(!empty($_POST['newServices']) && $_POST['newServices']!= $dataChalets['services']){
    $newServices=implode('-',$_POST['newServices']);
    $newServices=editChaletServices($newServices,$id);
    header('Location:chaletSelectionAdmin.php?id='.$_SESSION['id_customer']);
}

if(!empty($_POST['newPrice']) && $_POST['newPrice']!= $dataChalets['price']){
    $newPrice=$_POST['newPrice'];
    $newPrice=editChaletPrice($newPrice,$id);
    header('Location:chaletSelectionAdmin.php?id='.$_SESSION['id_customer']);
}

if(!empty($_POST['newDuree_sejour']) && $_POST['newDuree_sejour']!= $dataChalets['duree_sejour']){
    $newDuree_sejour=$_POST['newDuree_sejour'];
    $newDuree_sejour=editChaletDuree_sejour($newDuree_sejour,$id);
    header('Location:chaletSelectionAdmin.php?id='.$_SESSION['id_customer']);
}



if(!empty($_POST['newCondition_une']) && $_POST['newCondition_une']!= $dataChalets['condition_une']){
    $newCondition_une=$_POST['newCondition_une'];
    $newCondition_une=editChaletCondition_une($newCondition_une,$id);
    header('Location:chaletSelectionAdmin.php?id='.$_SESSION['id_customer']);
}

if(!empty($_POST['newCondition_deux']) && $_POST['newCondition_deux']!= $dataChalets['condition_deux']){
    $newCondition_deux=$_POST['newCondition_deux'];
    $newCondition_deux=editChaletCondition_deux($newCondition_deux,$id);
    header('Location:chaletSelectionAdmin.php?id='.$_SESSION['id_customer']);
}

if(!empty($_POST['newCondition_trois']) && $_POST['newCondition_trois']!= $dataChalets['condition_trois']){
    $newCondition_trois=$_POST['newCondition_trois'];
    $newCondition_trois=editChaletCondition_trois($newCondition_trois,$id);
    header('Location:chaletSelectionAdmin.php?id='.$_SESSION['id_customer']);
}

if(!empty($_POST['newCondition_quatre']) && $_POST['newCondition_quatre']!= $dataChalets['condition_quatre']){
    $newCondition_quatre=$_POST['newCondition_quatre'];
    $newCondition_quatre=editChaletCondition_quatre($newCondition_quatre,$id);
    header('chaletSelectionAdmin.php?id='.$_SESSION['id_customer']);
}

if(!empty($_POST['newCondition_cinq']) && $_POST['newCondition_cinq']!= $dataChalets['condition_cinq']){
    $newCondition_cinq=$_POST['newCondition_cinq'];
    $newCondition_cinq=editChaletCondition_cinq($newCondition_cinq,$id);
    header('Location:chaletSelectionAdmin.php?id='.$_SESSION['id_customer']);
}

if(!empty($_POST['newPrestation_une']) && $_POST['newPrestation_une']!= $dataChalets['prestation_une']){
    $newPrestation_une=$_POST['newPrestation_une'];
    $newPrestation_une=editChaletPrestation_une($newPrestation_une,$id);
    header('Location:chaletSelectionAdmin.php?id='.$_SESSION['id_customer']);
}

if(!empty($_POST['newPrestation_deux']) && $_POST['newPrestation_deux']!= $dataChalets['prestation_deux']){
    $newPrestation_deux=$_POST['newPrestation_deux'];
    $newPrestation_deux=editChaletPrestation_deux($newPrestation_deux,$id);
    header('Location:chaletSelectionAdmin.php?id='.$_SESSION['id_customer']);
}

if(!empty($_POST['newPrestation_trois']) && $_POST['newPrestation_trois']!= $dataChalets['prestation_trois']){
    $newPrestation_trois=$_POST['newPrestation_trois'];
    $newPrestation_trois=editChaletPrestation_trois($newPrestation_trois,$id);
    header('Location:chaletSelectionAdmin.php?id='.$_SESSION['id_customer']);
}

if(!empty($_POST['newPrestation_quatre']) && $_POST['newPrestation_quatre']!= $dataChalets['prestation_quatre']){
    $newPrestation_quatre=$_POST['newPrestation_quatre'];
    $newPrestation_quatre=editChaletPrestation_quatre($newPrestation_quatre,$id);
    header('Location:chaletSelectionAdmin.php?id='.$_SESSION['id_customer']);
}

if(!empty($_POST['newPrestation_cinq']) && $_POST['newPrestation_cinq']!= $dataChalets['prestation_cinq']){
    $newPrestation_cinq=$_POST['newPrestation_cinq'];
    $newPrestation_cinq=editChaletPrestation_cinq($newPrestation_cinq,$id);
    header('Location:chaletSelectionAdmin.php?id='.$_SESSION['id_customer']);
}

if(!empty($_POST['newPrestation_six']) && $_POST['newPrestation_six']!=$dataChalets['prestation_six']){
    $newPrestation_six=$_POST['newPrestation_six'];
    $newPrestation_six=editChaletPrestation_six($newPrestation_six,$id);
    header('Location:chaletSelectionAdmin.php?id='.$_SESSION['id_customer']);
}

if(!empty($_POST['newInfo_une']) && $_POST['newInfo_une']!= $dataChalets['info_une']){
    $newInfo_une=$_POST['newInfo_une'];
    $newInfo_une=editChaletInfo_une($newInfo_une,$id);
    header('Location:chaletSelectionAdmin.php?id='.$_SESSION['id_customer']);
}

if(!empty($_POST['newInfo_deux']) && $_POST['newInfo_deux']!= $dataChalets['info_deux']){
    $newInfo_deux=$_POST['newInfo_deux'];
    $newInfo_deux=editChaletInfo_deux($newInfo_deux,$id);
    header('Location:chaletSelectionAdmin.php?id='.$_SESSION['id_customer']);
}

if(!empty($_POST['newInfo_trois']) && $_POST['newInfo_trois']!= $dataChalets['info_trois']){
    $newInfo_trois=$_POST['newInfo_trois'];
    $newInfo_trois=editChaletInfo_trois($newInfo_trois,$id);
    header('Location:chaletSelectionAdmin.php?id='.$_SESSION['id_customer']);
}

if(!empty($_POST['newInfo_quatre']) && $_POST['newInfo_quatre']!= $dataChalets['info_quatre']){
    $newInfo_quatre=$_POST['newInfo_quatre'];
    $newInfo_quatre=editChaletInfo_quatre($newInfo_quatre,$id);
    header('Location:chaletSelectionAdmin.php?id='.$_SESSION['id_customer']);
}

if(!empty($_POST['newInfo_cinq']) && $_POST['newInfo_cinq']!= $dataChalets['info_cinq']){
    $newInfo_cinq=$_POST['newInfo_cinq'];
    $newInfo_cinq=editChaletInfo_cinq($newInfo_cinq,$id);
    header('Location:chaletSelectionAdmin.php?id='.$_SESSION['id_customer']);
}

if(!empty($_POST['newInfo_six']) && $_POST['newInfo_six']!= $dataChalets['info_six']){
    $newInfo_six=$_POST['newInfo_six'];
    $newInfo_six=editChaletInfo_six($newInfo_six,$id);
    header('Location:chaletSelectionAdmin.php?id='.$_SESSION['id_customer']);
}

if(!empty($_POST['newPromotions']) && $_POST['newPromotions']!= $dataChalets['promotions']){
    $newPromotions=$_POST['newPromotions'];
    $newPromotions=editChaletPromotions($newPromotions,$id);
    header('Location:chaletSelectionAdmin.php?id='.$_SESSION['id_customer']);
}

if(!empty($_POST['newBest_chalet']) && $_POST['newBest_chalet']!= $dataChalets['best_chalet']){
    $newPromotions=$_POST['newBest_chalet'];
    $newPromotions=editChaletBest($newBest_chalet,$id);
    header('Location:chaletSelectionAdmin.php?id='.$_SESSION['id_customer']);
}



// La mise à jour des images des chalets
if(!empty($_FILES['newChalet']) && $_FILES['newChalet']['name']!= $dataChalets['chalet']){
     //Tableau de lextention valide d'une image
     $extensionValide=array('jpg');
     //L'extraction de l'extention d'une image
     $extensionUpload=strtolower(substr(strrchr($_FILES['newChalet']['name'],'.'),1));
    //On verifie l'extension du fichier si il existe dans le tableau de l'extention valide
    if(in_array($extensionUpload,$extensionValide)){
        //Génération d'une valeur aléatoire et unique pour le nom de chaque image
        $url=md5(uniqid(rand(),true));
        //Le fichier(l'endroit) ou l'image serra stocker
        $chemin='img/slider/'.$url.'.'.$extensionUpload;
        //Créer un fichier temporaire
        $filName=$_FILES['newChalet']['tmp_name'];
        //On recupere les dimensions du fichier
        $size=getimagesize($filName);
        //Déplace un fichier vers un nouvel emplacement
        $result=move_uploaded_file($filName,$chemin);
        //Crée une nouvelle image depuis un fichier
        $image=imagecreatefromjpeg($chemin);
        //Récupération des dimensions de l'image(largeur, hauteur)
        $width=imagesx($image);
        $height=imagesy($image);
        //Définir les nouvelles dimmensions de l'image
        $new_width=900;
        $new_height=900;
        //Créer une nouvelle image vide en couleurs vraies avec des nouveaux paramètres(largeur, hauteur)
        $thumb=imagecreatetruecolor($new_width,$new_height);
        //copie une partie rectangulaire d'une image dans l'image de destination
        imagecopyresized ($thumb,$image,0,0,0,0,$new_width,$new_height,$width,$height);
        //créer un fichier JPEG depuis l'image fournie
        imagejpeg($thumb,$chemin);
        //Détruit l'image et libère toute mémoire associée à cette image
        imagedestroy($image);
        $newChalet=editChaletImagePrincipale($url.'.'.$extensionUpload,$id);
        header('Location:chaletSelectionAdmin.php?id='.$_SESSION['id_customer']);
    }
}
if(!empty($_FILES['newImage1']) && $_FILES['newImage1']['name']!= $dataChalets['image1']){
    $extensionValide=array('jpg');
    $extensionUpload1=strtolower(substr(strrchr($_FILES['newImage1']['name'],'.'),1));
    if(in_array($extensionUpload1,$extensionValide)){
        $url1=md5(uniqid(rand(),true));
        $chemin1='img/slider/'.$url1.'.'.$extensionUpload1;
        $filName1=$_FILES['newImage1']['tmp_name'];
        $size1=getimagesize($filName1);
        $result1=move_uploaded_file($filName1,$chemin1);
        $image1=imagecreatefromjpeg($chemin1);
        $width1=imagesx($image1);
        $height1=imagesy($image1);
        $new_width=400;
        $new_height=400;
        $thumb1=imagecreatetruecolor($new_width,$new_height);
        imagecopyresized ($thumb1,$image1,0,0,0,0,$new_width,$new_height,$width1,$height1);
        imagejpeg($thumb1,$chemin1);
        imagedestroy($image1);
        $newImage1=editChaletImage_une($url1.'.'.$extensionUpload1,$id);
        header('Location:chaletSelectionAdmin.php?id='.$_SESSION['id_customer']);
    }
}

if(!empty($_FILES['newImage2']) && $_FILES['newImage2']['name']!=  $dataChalets['image2']){
    $extensionValide=array('jpg');
    $extensionUpload2=strtolower(substr(strrchr($_FILES['newImage2']['name'],'.'),1));
    if(in_array($extensionUpload2,$extensionValide)){
        $url2=md5(uniqid(rand(),true));
        $chemin2='img/slider/'.$url2.'.'.$extensionUpload2;
        $filName2=$_FILES['newImage2']['tmp_name'];
        $size2=getimagesize($filName2);
        $result2=move_uploaded_file($filName2,$chemin2);
        $image2=imagecreatefromjpeg($chemin2);
        $width2=imagesx($image2);
        $height2=imagesy($image2);
        $new_width=400;
        $new_height=400;
        $thumb2=imagecreatetruecolor($new_width,$new_height);
        imagecopyresized ($thumb2,$image2,0,0,0,0,$new_width,$new_height,$width2,$height2);
        imagejpeg($thumb2,$chemin2);
        imagedestroy($image2);
        $newImage2=editChaletImage_deux($url2.'.'.$extensionUpload2,$id);
        header('Location:chaletSelectionAdmin.php?id='.$_SESSION['id_customer']);
    }
}

if(!empty($_FILES['newImage3']) && $_FILES['newImage3']['name']!=  $dataChalets['image3']){
    $extensionValide=array('jpg');
    $extensionUpload3=strtolower(substr(strrchr($_FILES['newImage3']['name'],'.'),1));
    if(in_array($extensionUpload3,$extensionValide)){
        $url3=md5(uniqid(rand(),true));
        $chemin3='img/slider/'.$url3.'.'.$extensionUpload3;
        $filName3=$_FILES['newImage3']['tmp_name'];
        $size3=getimagesize($filName3);
        $result3=move_uploaded_file($filName3,$chemin3);
        $image3=imagecreatefromjpeg($chemin3);
        $width3=imagesx($image3);
        $height3=imagesy($image3);
        $new_width=400;
        $new_height=400;
        $thumb3=imagecreatetruecolor($new_width,$new_height);
        imagecopyresized ($thumb3,$image3,0,0,0,0,$new_width,$new_height,$width3,$height3);
        imagejpeg($thumb3,$chemin3);
        imagedestroy($image3);
        $newImage3=editChaletImage_trois($url3.'.'.$extensionUpload3,$id);
        header('Location:chaletSelectionAdmin.php?id='.$_SESSION['id_customer']);
    }
}

if(!empty($_FILES['newImage4']) && $_FILES['newImage4']['name']!=  $dataChalets['image4']){
    $extensionValide=array('jpg');
    $extensionUpload4=strtolower(substr(strrchr($_FILES['newImage4']['name'],'.'),1));
    if(in_array($extensionUpload4,$extensionValide)){
        $url4=md5(uniqid(rand(),true));
        $chemin4='img/slider/'.$url4.'.'.$extensionUpload4;
        $filName4=$_FILES['newImage4']['tmp_name'];
        $size4=getimagesize($filName4);
        $result4=move_uploaded_file($filName4,$chemin4);
        $image4=imagecreatefromjpeg($chemin4);
        $width4=imagesx($image4);
        $height4=imagesy($image4);
        $new_width=400;
        $new_height=400;
        $thumb4=imagecreatetruecolor($new_width,$new_height);
        imagecopyresized ($thumb4,$image4,0,0,0,0,$new_width,$new_height,$width4,$height4);
        imagejpeg($thumb4,$chemin4);
        imagedestroy($image4);
        $newImage4=editChaletImage_quatre($url4.'.'.$extensionUpload4,$id);
        header('Location:chaletSelectionAdmin.php?id='.$_SESSION['id_customer']);
    }
}

if(!empty($_FILES['newImage5']) && $_FILES['newImage5']['name']!=  $dataChalets['image5']){
    $extensionValide=array('jpg');
    $extensionUpload5=strtolower(substr(strrchr($_FILES['newImage5']['name'],'.'),1));
    if(in_array($extensionUpload5,$extensionValide)){
        $url5=md5(uniqid(rand(),true));
        $chemin5='img/slider/'.$url5.'.'.$extensionUpload5;
        $filName5=$_FILES['newImage5']['tmp_name'];
        $size5=getimagesize($filName5);
        $result5=move_uploaded_file($filName5,$chemin5);
        $image5=imagecreatefromjpeg($chemin5);
        $width5=imagesx($image5);
        $height5=imagesy($image5);
        $new_width=400;
        $new_height=400;
        $thumb5=imagecreatetruecolor($new_width,$new_height);
        imagecopyresized ($thumb5,$image5,0,0,0,0,$new_width,$new_height,$width5,$height5);
        imagejpeg($thumb5,$chemin5);
        imagedestroy($image5);
        $newImage5=editChaletImage_cinq($url5.'.'.$extensionUpload5,$id);
        header('Location:chaletSelectionAdmin.php?id='.$_SESSION['id_customer']);
    }
}

if(!empty($_FILES['newImage6']) && $_FILES['newImage6']['name']!=  $dataChalets['image6']){
    $extensionValide=array('jpg');
    $extensionUpload6=strtolower(substr(strrchr($_FILES['newImage6']['name'],'.'),1));
    if(in_array($extensionUpload6,$extensionValide)){
        $url6=md5(uniqid(rand(),true));
        $chemin6='img/slider/'.$url6.'.'.$extensionUpload6;
        $filName6=$_FILES['newImage6']['tmp_name'];
        $size6=getimagesize($filName6);
        $result6=move_uploaded_file($filName6,$chemin6);
        $image6=imagecreatefromjpeg($chemin6);
        $width6=imagesx($image6);
        $height6=imagesy($image6);
        $new_width=400;
        $new_height=400;
        $thumb6=imagecreatetruecolor($new_width,$new_height);
        imagecopyresized ($thumb6,$image6,0,0,0,0,$new_width,$new_height,$width6,$height6);
        imagejpeg($thumb6,$chemin6);
        imagedestroy($image6);
        $newImage6=editChaletImage_six($url6.'.'.$extensionUpload6,$id);
        header('Location:chaletSelectionAdmin.php?id='.$_SESSION['id_customer']);
    }
}

//Sélection et affichage du template PHTML.
$template = 'editChalet';
include 'layout.phtml';                           






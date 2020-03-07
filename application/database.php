<?php
//La connexion à la base de donnée
function connect() {
    $pdo=new PDO('mysql:host=localhost;dbname=projetnassima;charset=utf8','root','');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    return $pdo;
}

//Fonction qui permet de séléctionner le nom du chalet et son image principale
function selectChalet(){
    $pdo = connect();
    $req=$pdo->prepare('SELECT `name`,`chalet` FROM chalet');
    $req->execute();
    $data=$req->fetchAll(PDO::FETCH_ASSOC);
    return $data;
}

//Fonction qui séléctionne le chalet selon le sérvice
function chaletService($service){
    $pdo = connect();
    $req=$pdo->prepare('SELECT * FROM chalet WHERE services = ?');
    $req->execute(array($service));
    $result=$req->fetchAll(PDO::FETCH_ASSOC);
    return $result;
}

//fonction qui selectionne les meilleurs chalets
function bestChalet(){
    $pdo=connect();
    $req=$pdo->prepare('SELECT * From chalet WHERE best_chalet="best"');
    $req->execute();
    $best=$req->fetchAll(PDO::FETCH_ASSOC);
    return $best;
}

//Fonction qui séléctionne les détails du chalet selon l'identifiant du chalet
function detailsChalet($id) {
    $pdo=connect();
    $req=$pdo->prepare('SELECT * From chalet WHERE id_chalet = ?');
    $req->execute(array($id));
    $dataChalet=$req->fetchAll(PDO::FETCH_ASSOC);
    return $dataChalet;
   
}

/*function descriptionChalet($id){
    $pdo=connect();
    $req=$pdo->prepare('SELECT * From chalet WHERE id_chalet = ?');
    $req->execute(array($id));
    $description=$req->fetchAll(PDO::FETCH_ASSOC);
    return $description;
}*/

//fonction qui permet à l'utilisateur de demander des informations sur le chalet sélectionné
function information($firstName, $lastName, $email, $phone, $message, $id_Chalet) {
    $pdo = connect();
    $req = $pdo->prepare('INSERT INTO contact(`firstName`, `lastName`, `email`, `phone`, `content`, `date_publication`, `id_chalet`) VALUES (?, ?, ?, ?, ?, NOW(), ?)');
    $req->execute(array($firstName, $lastName, $email, $phone, $message, $id_Chalet));
}

//Function qui permet à l'utilisateur de s'inscrire
function registerCustomer($firstName,$lastName,$pseudo,$email,$password,$phone,$adress,$postal_code){
    $pdo = connect();
    $req=$pdo->prepare('INSERT INTO `customers`(`firstName`,`lastName`, `pseudo`,`email`,`password`,`phone`,`adress`,`postal_code`,/* `profile_picture`,*/ `inscription_date`)
                       VALUES(:firstName,:lastName,:pseudo,:email,:password,:phone,:adress,:postal_code, NOW())'); 
                        
    $req->execute(array(
        
        ':firstName'=>$firstName,
        ':lastName'=>$lastName,
        ':pseudo'=>$pseudo,
        ':email'=>$email,
        ':password'=>$password,
        ':phone'=>$phone,
        ':adress'=>$adress,
        ':postal_code'=>$postal_code
        
    ));                     
}

// fonction qui récupére les données d'un utilisateur par rapport à son identifiant pour editer sont profil
function getCustomer($id){
    $pdo = connect();
    $req=$pdo->prepare('SELECT * FROM `customers` WHERE `id_customer`=?');
    $req->execute(array($id));
    $profilCustomer=$req->fetch(PDO::FETCH_ASSOC);
    return $profilCustomer;
}

//fonction qui récupére les informations des utilisateurs
function listCustomers(){
    $pdo = connect();
    $req=$pdo->prepare('SELECT * FROM customers');
    $req->execute();
    $list = $req->fetchAll(PDO::FETCH_ASSOC);
    return $list;
}

//function qui permet à l'administrateur de suprimer un utilisateur
function deletCustomer($id){
    $pdo = connect();
	$req=$pdo->prepare('DELETE FROM `customers` WHERE `id_customer`=?');
	$req->execute(array($id));
}

//Fonction qui permet de séléctionner tous les chalets avec promotion
function chaletPromotion(){
    $pdo = connect();
    $req=$pdo->prepare('SELECT * FROM chalet WHERE promotions>"0"');
    $req->execute();
    $resultPromotion=$req->fetchAll(PDO::FETCH_ASSOC);
    return $resultPromotion;
}

//Fonction qui permet de séléctionner tous les chalets avec une promotion supérieur à 40%
function bestPromotion(){
    $pdo=connect();
    $req=$pdo->prepare('SELECT * From chalet WHERE promotions>="40"');
    $req->execute();
    $dataBestPromotion=$req->fetchAll(PDO::FETCH_ASSOC);
    return $dataBestPromotion;
}


//fonction qui affiche les articles de blog classés par date de publication
function showPosts(){
	$pdo = connect();
	$req=$pdo->prepare('SELECT * FROM posts JOIN chalet ON `posts`.`id_chalet`= `chalet`.`id_chalet` JOIN customers ON `posts`.`id_customer`=`customers`.`id_customer` ORDER BY publication_date');
	$req->execute();
	$results = $req->fetchAll(PDO::FETCH_ASSOC);
	return $results;
}

//fonction qui affiche les details d'un article de blog
function detailsPostBlog($id) {
	$pdo = connect();
	$req=$pdo->prepare('SELECT * FROM posts JOIN chalet ON `posts`.`id_chalet`= `chalet`.`id_chalet` JOIN customers ON `posts`.`id_customer`=`customers`.`id_customer` WHERE `posts`.`id_posts`= ?');
	$req->execute(array($id));
	$post= $req->fetchAll(PDO::FETCH_ASSOC);
	return $post;
}

//fonction qui ajoute un article au blog
function addPostBlog($titre, $content, $id_customer, $id_chalet){
    $pdo = connect();
    $req = $pdo->prepare('INSERT INTO posts(title, content, publication_date, id_customer, id_chalet) VALUES(?, ?, NOW(), ?, ? )');
    $req->execute(array($titre, $content, $id_customer, $id_chalet));    
    
}

// fonction qui édite le titre d'un article du blog
function updatePostTitle($newTitle,$id){
    $pdo = connect();
    $req=$pdo->prepare('UPDATE `posts` SET `title`=? WHERE `id_posts`=?');
	$req->execute(array($newTitle,$id));
}
// fonction qui édite le contenu d'un article du blog
function updatePostContent($newContent,$id){
    $pdo = connect();
    $req=$pdo->prepare('UPDATE `posts` SET `content`=? WHERE `id_posts`=?');
	$req->execute(array($newContent,$id));
}

//fonction qui suprime un article du blog
function deletPostBlog($id){
    $pdo = connect();
	$req=$pdo->prepare('DELETE FROM `posts` WHERE `id_posts`=?');
	$req->execute(array($id));
}

//fonction qui récupère les commentaires du blog
function showCommentBlog($id){
    $pdo = connect();
    $req=$pdo->prepare('SELECT * FROM `comments` WHERE `id_posts`=?');

    $req->execute (array($id));

    $commentBlog=$req->fetchAll(PDO::FETCH_ASSOC);
    return $commentBlog;
}

//fonction qui ajoute les commentaires au blog
function addCommentBlog($contenu, $pseudo, $id) {
	$pdo = connect();
	$req=$pdo->prepare('INSERT INTO comments(content, pseudo, publication_date, id_posts) VALUES(?,?,NOW(),?)');
	$req->execute(array($contenu, $pseudo, $id));
}

//fonction qui suprime un commentaire d'un article de blog
function deletCommentBlog($id){
	$pdo = connect();
	$req=$pdo->prepare('DELETE FROM `comments` WHERE `id_comments`=?');
	$req->execute(array($id));  
}

//fonction qui permet à l'administrateur dajouter un chalet à la base de donnée
function addCatalogueChalet($name,$imagePrincipale,$massif, $station,$Nb_Pers,$description,$services,
    $price,$duree_sejour,$image_une,$image_deux,$image_trois,$image_quatre,$image_cinq,$image_six,
    $condition_une,$condition_deux,$condition_trois,$condition_quatre,$condition_cinq,$prestation_une,
    $prestation_deux,$prestation_trois,$prestation_quatre,$prestation_cinq,$prestation_six,$info_une,
    $info_deux,$info_trois,$info_quatre,$info_cinq,$info_six,$promotions,$best_chalet){
    $pdo = connect();
    $req=$pdo->prepare('INSERT INTO chalet(name,chalet,massif,station,Nb_Pers,description,services,price,
    duree_sejour,image1,image2,image3,image4,image5,image6,condition_une,condition_deux,condition_trois,
    condition_quatre,condition_cinq,prestation_une,prestation_deux,prestation_trois,prestation_quatre,
    prestation_cinq,prestation_six,info_une,info_deux,info_trois,info_quatre,info_cinq,info_six,promotions,
    best_chalet) VALUES(:name,:imagePrincipale,:massif,:station,:Nb_Pers,:description,:services,:price,
    :duree_sejour,:image1,:image2,:image3,:image4,:image5,:image6,:condition_une,:condition_deux,
    :condition_trois,:condition_quatre,:condition_cinq,:prestation_une,:prestation_deux,:prestation_trois,
    :prestation_quatre,:prestation_cinq,:prestation_six,:info_une,:info_deux,:info_trois,:info_quatre,
    :info_cinq,:info_six,:promotions,:best_chalet)');

    $req->execute(array(
        ':name'=>$name,
        ':imagePrincipale'=>$imagePrincipale,
        ':massif'=>$massif,
        ':station'=>$station,
        ':Nb_Pers'=>$Nb_Pers,
        ':description'=>$description,
        ':services'=>$services,
        ':price'=>$price,
        ':duree_sejour'=>$duree_sejour,
        ':image1'=>$image_une,
        ':image2'=>$image_deux,
        ':image3'=>$image_trois,
        ':image4'=>$image_quatre,
        ':image5'=>$image_cinq,
        ':image6'=>$image_six,
        ':condition_une'=>$condition_une,
        ':condition_deux'=>$condition_deux,
        ':condition_trois'=>$condition_trois,
        ':condition_quatre'=>$condition_quatre,
        ':condition_cinq'=>$condition_cinq,
        ':prestation_une'=>$prestation_une,
        ':prestation_deux'=>$prestation_deux,
        ':prestation_trois'=>$prestation_trois,
        ':prestation_quatre'=>$prestation_quatre,
        ':prestation_cinq'=>$prestation_cinq,
        ':prestation_six'=>$prestation_six,
        ':info_une'=>$info_une,
        ':info_deux'=>$info_deux,
        ':info_trois'=>$info_trois,
        ':info_quatre'=>$info_quatre,
        ':info_cinq'=>$info_cinq,
        ':info_six'=>$info_six,
        ':promotions'=>$promotions,
        ':best_chalet'=>$best_chalet
    ));
}

//fonctions qui permet à l'administrateur de mettre à jour un chalet
function editChaletName($name,$id){
    $pdo = connect();
    $req=$pdo->prepare('UPDATE `chalet` SET `name`=? WHERE id_chalet=?');
    $req->execute(array($name,$id));
}

function editChaletImagePrincipale($imagePrincipale,$id){
    $pdo = connect();
    $req=$pdo->prepare('UPDATE `chalet` SET `chalet`=? WHERE id_chalet=?');
    $req->execute(array($imagePrincipale,$id));
}

function editChaletMassif($massif,$id){
    $pdo = connect();
    $req=$pdo->prepare('UPDATE `chalet` SET `massif`=? WHERE id_chalet=?');
    $req->execute(array($massif,$id));
}

function editChaletStation($station,$id){
    $pdo = connect();
    $req=$pdo->prepare('UPDATE `chalet` SET `station`=? WHERE id_chalet=?');
    $req->execute(array($station,$id));
}

function editChaletNb_Pers($Nb_Pers,$id){
    $pdo = connect();
    $req=$pdo->prepare('UPDATE `chalet` SET `Nb_Pers`=? WHERE id_chalet=?');
    $req->execute(array($Nb_Pers,$id));
}

function editChaletDescription($description,$id){
    $pdo = connect();
    $req=$pdo->prepare('UPDATE `chalet` SET `description`=? WHERE id_chalet=?');
    $req->execute(array($description,$id));
}

function editChaletServices($services,$id){
    $pdo = connect();
    $req=$pdo->prepare('UPDATE `chalet` SET `services`=? WHERE id_chalet=?');
    $req->execute(array($services,$id));     
}

function editChaletPrice($price,$id){
    $pdo = connect();
    $req=$pdo->prepare('UPDATE `chalet` SET `price`=? WHERE id_chalet=?');
    $req->execute(array($price,$id));
}

function editChaletDuree_sejour($duree_sejour,$id){
    $pdo = connect();
    $req=$pdo->prepare('UPDATE `chalet` SET `duree_sejour`=? WHERE id_chalet=?');
    $req->execute(array($duree_sejour,$id));
}

function editChaletImage_une($image_une,$id){
    $pdo = connect();
    $req=$pdo->prepare('UPDATE `chalet` SET `image1`=? WHERE id_chalet=?');
    $req->execute(array($image_une,$id));
}

function editChaletImage_deux($image_deux,$id){
    $pdo = connect();
    $req=$pdo->prepare('UPDATE `chalet` SET `image2`=? WHERE id_chalet=?');
    $req->execute(array($image_deux,$id));
}

function editChaletImage_trois($image_trois,$id){
    $pdo = connect();
    $req=$pdo->prepare('UPDATE `chalet` SET `image3`=? WHERE id_chalet=?');
    $req->execute(array($image_trois,$id));
}

function editChaletImage_quatre($image_quatre,$id){
    $pdo = connect();
    $req=$pdo->prepare('UPDATE `chalet` SET `image4`=? WHERE id_chalet=?');
    $req->execute(array($image_quatre,$id));
}

function editChaletImage_cinq($image_cinq,$id){
    $pdo = connect();
    $req=$pdo->prepare('UPDATE `chalet` SET `image5`=? WHERE id_chalet=?');
    $req->execute(array($image_cinq,$id));
}

function editChaletImage_six($image_six,$id){
    $pdo = connect();
    $req=$pdo->prepare('UPDATE `chalet` SET `image6`=? WHERE id_chalet=?');
    $req->execute(array($image_six,$id));
}

function editChaletCondition_une($condition_une,$id){
    $pdo = connect();
    $req=$pdo->prepare('UPDATE `chalet` SET `condition_une`=? WHERE id_chalet=?');
    $req->execute(array($condition_une,$id));
}

function editChaletCondition_deux($condition_deux,$id){
    $pdo = connect();
    $req=$pdo->prepare('UPDATE `chalet` SET `condition_deux`=? WHERE id_chalet=?');
    $req->execute(array($condition_deux,$id));
}

function editChaletCondition_trois($condition_trois,$id){
    $pdo = connect();
    $req=$pdo->prepare('UPDATE `chalet` SET `condition_trois`=? WHERE id_chalet=?');
    $req->execute(array($condition_trois,$id));
}

function editChaletCondition_quatre($condition_quatre,$id){
    $pdo = connect();
    $req=$pdo->prepare('UPDATE `chalet` SET `condition_quatre`=? WHERE id_chalet=?');
    $req->execute(array($condition_quatre,$id));
}

function editChaletCondition_cinq($condition_cinq,$id){
    $pdo = connect();
    $req=$pdo->prepare('UPDATE `chalet` SET `condition_cinq`=? WHERE id_chalet=?');
    $req->execute(array($condition_cinq,$id));
}

function editChaletPrestation_une($prestation_une,$id){
    $pdo = connect();
    $req=$pdo->prepare('UPDATE `chalet` SET `prestation_une`=? WHERE id_chalet=?');
    $req->execute(array($prestation_une,$id));
}

function editChaletPrestation_deux($prestation_deux,$id){
    $pdo = connect();
    $req=$pdo->prepare('UPDATE `chalet` SET `prestation_deux`=? WHERE id_chalet=?');
    $req->execute(array($prestation_deux,$id));
}

function editChaletPrestation_trois($prestation_trois,$id){
    $pdo = connect();
    $req=$pdo->prepare('UPDATE `chalet` SET `prestation_trois`=? WHERE id_chalet=?');
    $req->execute(array($prestation_trois,$id));
}

function editChaletPrestation_quatre($prestation_quatre,$id){
    $pdo = connect();
    $req=$pdo->prepare('UPDATE `chalet` SET `prestation_quatre`=? WHERE id_chalet=?');
    $req->execute(array($prestation_quatre,$id));
}

function editChaletPrestation_cinq($prestation_cinq,$id){
    $pdo = connect();
    $req=$pdo->prepare('UPDATE `chalet` SET `prestation_cinq`=? WHERE id_chalet=?');
    $req->execute(array($prestation_cinq,$id));
}

function editChaletPrestation_six($prestation_six,$id){
    $pdo = connect();
    $req=$pdo->prepare('UPDATE `chalet` SET `prestation_six`=? WHERE id_chalet=?');
    $req->execute(array($prestation_six,$id));
}

function editChaletInfo_une($info_une,$id){
    $pdo = connect();
    $req=$pdo->prepare('UPDATE `chalet` SET `info_une`=? WHERE id_chalet=?');
    $req->execute(array($info_une,$id));
}

function editChaletInfo_deux($info_deux,$id){
    $pdo = connect();
    $req=$pdo->prepare('UPDATE `chalet` SET `info_deux`=? WHERE id_chalet=?');
    $req->execute(array($info_deux,$id));
}

function editChaletInfo_trois($info_trois,$id){
    $pdo = connect();
    $req=$pdo->prepare('UPDATE `chalet` SET `info_trois`=? WHERE id_chalet=?');
    $req->execute(array($info_trois,$id));
}

function editChaletInfo_quatre($info_quatre,$id){
    $pdo = connect();
    $req=$pdo->prepare('UPDATE `chalet` SET `info_quatre`=? WHERE id_chalet=?');
    $req->execute(array($info_quatre,$id));
}

function editChaletInfo_cinq($info_cinq,$id){
    $pdo = connect();
    $req=$pdo->prepare('UPDATE `chalet` SET `info_cinq`=? WHERE id_chalet=?');
    $req->execute(array($info_cinq,$id));
}

function editChaletInfo_six($info_six,$id){
    $pdo = connect();
    $req=$pdo->prepare('UPDATE `chalet` SET `info_six`=? WHERE id_chalet=?');
    $req->execute(array($info_six,$id));
}

function editChaletPromotions($promotions,$id){
    $pdo = connect();
    $req=$pdo->prepare('UPDATE `chalet` SET `promotions`=? WHERE id_chalet=?');
    $req->execute(array($promotions,$id));
}

function editChaletBest($best_chalet,$id){
    $pdo = connect();
    $req=$pdo->prepare('UPDATE `chalet` SET `best_chalet`=? WHERE id_chalet=?');
    $req->execute(array($best_chalet,$id));
}

// fonction qui permet a l'administrateur de suprimer un chalet
function deletChalet($id){ 
	$pdo = connect();
	$req=$pdo->prepare('DELETE FROM `chalet` WHERE `id_chalet`=?');
	$req->execute(array($id));
}






